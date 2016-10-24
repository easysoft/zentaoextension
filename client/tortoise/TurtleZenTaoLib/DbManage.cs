using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.IO;

/**
 * @author 张彪<norkts@gmail.com>
 * @version 1.0 2016-10-14
 */
namespace TurtleZenTaoLib
{
    /// <summary>
    /// 数据存储类
    /// </summary>
    class DbManage
    {
        private string fileName = "turtlezendao.db";
        private List<string> rows = new List<string>();

        public DbManage() {
            getWebsites();
        }

        /// <summary>
        /// 添加站点记录
        /// </summary>
        /// <param name="index"></param>
        /// <param name="url"></param>
        /// <param name="user"></param>
        /// <param name="pass"></param>
        /// <returns></returns>
        public bool addWebsiteInfo(int index, string url, string user, string pass, string websiteName){
            string row = url + "\t" + user + "\t" + pass + "\t " + websiteName;
            rows.Add(row);

            save();

            return true;
        }

        /// <summary>
        /// 编辑站点记录
        /// </summary>
        /// <param name="index"></param>
        /// <param name="url"></param>
        /// <param name="user"></param>
        /// <param name="pass"></param>
        /// <returns></returns>
        public bool editWebsiteInfo(int index, string url, string user, string pass, string websiteName)
        {
            rows[index] = url + "\t" + user + "\t" + pass + "\t" + websiteName;
            save();
            return true;
        }

        /// <summary>
        /// 删除站点记录
        /// </summary>
        /// <param name="index"></param>
        public void deleteWebsiteInfo(int index) {
            rows.RemoveAt(index);

            save();
        }

        /// <summary>
        /// 读取站点记录
        /// </summary>
        /// <returns></returns>
        public List<string> getWebsites() {

            if (rows.Count > 0){
                return rows;
            }

            try
            {
                FileStream fs = new FileStream(fileName, FileMode.Open);

                StreamReader reader = new StreamReader(fs);

                while (!reader.EndOfStream)
                {
                    string line = Encoding.Default.GetString(Convert.FromBase64String(reader.ReadLine()));
                    rows.Add(line);
                }
                reader.Close();
                fs.Close();

                return rows;
            }catch (Exception e){
                return rows;
            }

        }

        /// <summary>
        /// 保存站点记录数据
        /// </summary>
        public void save() {
            FileStream fs = new FileStream(fileName, FileMode.Create);

            StreamWriter sw = new StreamWriter(fs, Encoding.Default);
            
            foreach(string row in rows){
                byte[] data = Encoding.Default.GetBytes(row);
                string base64 = Convert.ToBase64String(data);
                sw.WriteLine(base64);
            }

            sw.Close();
            fs.Close();
        }

        
    }
}
