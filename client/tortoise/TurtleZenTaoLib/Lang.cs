using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.IO;
using System.Windows.Forms;
using System.Diagnostics;

namespace TurtleZenTaoLib
{
    public class Lang
    {
        private Dictionary<string, string> langMap = new Dictionary<string,string>();

        /// <summary>
        /// 获取文本国际化值
        /// </summary>
        /// <param name="name"></param>
        /// <returns></returns>
        public string getText(string name) {
            
            if (langMap.ContainsKey(name)) {
                return langMap[name];
            }

            return name;
        }


        /// <summary>
        /// 处理控件内部的文本语言国际化
        /// </summary>
        /// <param name="parent"></param>
        public void langProcess(Control parent)
        {
            if (parent.Text != null && !parent.Text.Equals(""))
            {
                parent.Text = getText(parent.Text);
            }


            if (parent.ContextMenuStrip != null)
            {
                ContextMenuStrip menu = parent.ContextMenuStrip;

                foreach (ToolStripItem item in menu.Items)
                {
                    item.Text = Plugin.lang.getText(item.Text);
                }
            }

            //listview处理替换列头
            if (parent is ListView)
            {
                ListView listview = (ListView)parent;
                System.Drawing.Graphics graph = listview.CreateGraphics();

                System.Drawing.Font font = new System.Drawing.Font("宋体", 9);

                listview.BeginUpdate();
                foreach (ColumnHeader li in listview.Columns)
                {
                    li.Text = getText(li.Text);

                    //计算文本长度
                    li.Width = (int)Math.Ceiling(graph.MeasureString(li.Text, font).Width) * 2;
                }
                listview.EndUpdate();

                graph.Dispose();
            }

            //递归处理子项
            foreach (Control control in parent.Controls)
            {
                langProcess(control);
            }
        }


        /// <summary>
        /// 加载国际化字库
        /// </summary>
        /// <param name="langName"></param>
        public void load(string langName)
        {
            langMap.Clear();
            string path = System.Reflection.Assembly.GetExecutingAssembly().Location;

            path = path.Substring(0, path.LastIndexOf('\\') + 1) + langName + ".lang";

            try
            {


                if (!File.Exists(path)) {
                    MessageBox.Show(path);
                    return ;
                }

                FileStream fs = new FileStream(path, FileMode.Open);

                StreamReader reader = new StreamReader(fs, Encoding.UTF8);

                while (!reader.EndOfStream)
                {
                    string line = reader.ReadLine();
                    string[] items = line.Split('\t');

                    if (items.Length > 1)
                    {
                        langMap.Add(items[0], items[1]);
                    }
                    else {
                        MessageBox.Show("语言包 " + path + "存在问题:" + line);
                    }

                }

                reader.Close();
                fs.Close();
            }catch(Exception e){
                MessageBox.Show("语言包 " + path + "存在问题:" + e.Message);
            }
        }

        /// <summary>
        /// 查找当前的DLL路径下的语言包
        /// </summary>
        /// <returns></returns>
        public List<string> getLangs() {
            string dir = System.Reflection.Assembly.GetExecutingAssembly().Location;

            dir = dir.Substring(0, dir.LastIndexOf('\\'));
            DirectoryInfo currentDir = new DirectoryInfo(dir);

            FileInfo[] files = currentDir.GetFiles("*.lang");

            List<string> lngs = new List<string>();

            foreach (FileInfo file in files)
            {
                lngs.Add(file.Name.Replace(".lang", ""));
            }

            return lngs;
        }
    }
}
