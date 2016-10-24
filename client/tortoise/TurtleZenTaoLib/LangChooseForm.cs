using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Windows.Forms;

/**
 * 语言切换
 * @author 张彪<norkts@gmail.com>
 * @version 1.0 2016-10-14 19:58 补充注释
 */
namespace TurtleZenTaoLib
{
    /// <summary>
    /// 语言选择弹窗
    /// </summary>
    public partial class LangChooseForm : Form
    {
        public LangChooseForm()
        {
            InitializeComponent();
        }

        private void label1_Click(object sender, EventArgs e)
        {

        }

        private void LangChoose_Load(object sender, EventArgs e)
        {
            List<string> langs = Plugin.lang.getLangs();

            this.comboBox1.BeginUpdate();
            foreach (string lang in langs)
            {
                this.comboBox1.Items.Add(lang);
            }
            this.comboBox1.SelectedIndex = 0;
            this.comboBox1.EndUpdate();
        }

        private void button1_Click(object sender, EventArgs e)
        {
            this.Close();
        }

        public string getSelectLang() { 
            return (string)this.comboBox1.SelectedItem;
        }
    }
}
