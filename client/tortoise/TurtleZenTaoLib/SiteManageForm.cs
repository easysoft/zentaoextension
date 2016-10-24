using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Windows.Forms;

namespace TurtleZenTaoLib
{
    public partial class SiteManageForm : Form
    {
        private SiteEditForm editForm;
        public Plugin plugin;
        private DbManage dbManage;

        public SiteManageForm(Plugin plugin)
        {
            InitializeComponent();

            editForm = new SiteEditForm(this);
            this.plugin = plugin;
            dbManage = new DbManage();

            initSiteList();
            Plugin.lang.langProcess(this);

            this.statusStrip1.Hide();
        }

        private void toolStripStatusLabel1_Click(object sender, EventArgs e)
        {

        }

        private void addSiteBtnClick(object sender, EventArgs e)
        {
            editForm.ShowDialog();
        }

        private void button2_Click(object sender, EventArgs e)
        {

        }

        private void siteListView_SelectedIndexChanged(object sender, EventArgs e)
        {

        }

        public void addWebSite(string siteUrl, string username, string password, string websiteName) {
            siteListView.BeginUpdate();
            ListViewItem item = new ListViewItem();
            
            item.Text = siteListView.Items.Count + "";
            item.SubItems.Add(websiteName);
            item.SubItems.Add(siteUrl);
            item.SubItems.Add(username); 
            item.SubItems.Add("******");

            siteListView.Items.Add(item);
            siteListView.EndUpdate();

            dbManage.addWebsiteInfo(0, siteUrl, username, password, websiteName);
        }

        /// <summary>
        /// 初始化网站列表
        /// </summary>
        public void initSiteList() {
            siteListView.Items.Clear();

            siteListView.BeginUpdate();
            foreach(string row in dbManage.getWebsites()){
                string[] rowItem = row.Split('\t');


                ListViewItem item = new ListViewItem();
            
                item.Text = siteListView.Items.Count + "";

                string websiteName = "";
                if(rowItem.Length > 3){
                    websiteName = rowItem[3];
                }

                item.SubItems.Add(websiteName);
                item.SubItems.Add(rowItem[0]);
                item.SubItems.Add(rowItem[1]);
                item.SubItems.Add("******");

                siteListView.Items.Add(item);
            }

            siteListView.EndUpdate();
        }

        /// <summary>
        /// 网站编辑结果展示
        /// </summary>
        /// <param name="index"></param>
        /// <param name="siteUrl"></param>
        /// <param name="username"></param>
        /// <param name="password"></param>
        public void editWebSite(int index, string siteUrl, string username, string password, string websiteName)
        {
            siteListView.BeginUpdate();
            ListViewItem item = siteListView.Items[index];

            item.SubItems[1].Text = websiteName;
            item.SubItems[2].Text = siteUrl;
            item.SubItems[3].Text = username;
            item.SubItems[4].Text = "******";

            siteListView.EndUpdate();

            dbManage.editWebsiteInfo(index, siteUrl, username, password, websiteName);
        }

        /// <summary>
        /// 鼠标右键编辑网站信息
        /// </summary>
        /// <param name="sender"></param>
        /// <param name="e"></param>
        public void onEditClick(object sender, EventArgs e)
        {
            if (siteListView.SelectedItems.Count == 0) {
                return;
            }

            ListViewItem selectedItem = siteListView.SelectedItems[0];
            int index = selectedItem.Index;

            SiteEditForm editForm = new SiteEditForm(this);
            string[] row = dbManage.getWebsites()[index].Split('\t');
            string websiteName = "";
            if (row.Length > 3)
            {
                websiteName = row[3];
            }

            editForm.setEditData(selectedItem.Index, row[0], row[1], row[2], websiteName);

            editForm.ShowDialog();
        }

        /// <summary>
        /// 鼠标右键删除网站
        /// </summary>
        /// <param name="sender"></param>
        /// <param name="e"></param>
        public void onDeleteClick(object sender, EventArgs e)
        {
            ListViewItem selectedItem = siteListView.SelectedItems[0];
            int index = selectedItem.Index;
            siteListView.Items.RemoveAt(index);
            siteListView.Update();

            dbManage.deleteWebsiteInfo(index);
        }

        /// <summary>
        /// 列表项鼠标双击处理
        /// </summary>
        /// <param name="sender"></param>
        /// <param name="e"></param>
        private void onListDbClicked(object sender, EventArgs e)
        {
            ListViewItem selectedItem = siteListView.SelectedItems[0];
            int index = selectedItem.Index;

            string[] website = dbManage.getWebsites()[index].Split('\t');
            plugin.enterIssueForm(website[0], website[1], website[2]);
        }

        private void SiteManageForm_Load(object sender, EventArgs e)
        {
            if (this.siteListView.Items.Count > 0)
            {
                foreach (ColumnHeader head in this.siteListView.Columns)
                {
                    head.Width = -2;
                }
            }
        }
    }
}
