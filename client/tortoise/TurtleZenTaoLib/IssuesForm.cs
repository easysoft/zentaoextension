using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Windows.Forms;

/**
 * @author 张彪<norkts@gmail.com>
 * @version 1.0 2016-10-14
 */
namespace TurtleZenTaoLib
{
    /// <summary>
    /// BUG以及任务筛选
    /// </summary>
    public partial class IssuesForm : Form
    {
        private Plugin plugin;
        private SearchOperate operate = SearchOperate.BUG;

        private bool taskCheckedState = false;
        private bool bugCheckedState = false;

        private Image checkedCheckBoxImage;
        private Image uncheckedCheckBoxImage;

        private List<TaskInfo> tasks;

        private List<BugInfo> bugs;

        public IssuesForm(Plugin plugin)
        {
            InitializeComponent();

            Plugin.lang.langProcess(this);
            
            this.plugin = plugin;

            bugList.Tag = SearchOperate.BUG;
            taskList.Tag = SearchOperate.TASK;
        }


        private void label1_Click(object sender, EventArgs e)
        {

        }

        private void button1_Click(object sender, EventArgs e)
        {

        }

        private void splitContainer3_Panel1_Paint(object sender, PaintEventArgs e)
        {

        }

        /// <summary>
        /// 任务选择
        /// </summary>
        /// <param name="sender"></param>
        /// <param name="e"></param>
        private void listView2_SelectedIndexChanged(object sender, EventArgs e)
        {

        }

        public void onStartLoading()
        {
            this.statusStrip1.Show();
            this.toolStripProgressBar1.Minimum = 0;
            this.toolStripProgressBar1.Maximum = 100;
            this.toolStripProgressBar1.Value = 50;
            this.toolStripStatusLabel1.Text = Plugin.lang.getText("Loading");
            
        }

        public void onEndLoading()
        {
            this.toolStripProgressBar1.Value = 0;
            this.toolStripStatusLabel1.Text = Plugin.lang.getText("");
            this.statusStrip1.Hide();

            ListView list = bugList;
            int titleIndex = 2;
            if (operate == SearchOperate.TASK)
            {
                list = taskList;
            }

            if (list.Items.Count > 0)
            {
                list.Columns[titleIndex].Width = -2;
            }
        }

        public void editTask(ListViewItem item)
        {
            WorkTimeEditForm editForm = new WorkTimeEditForm();

            string taskId = item.SubItems[1].Text;

            string taskName = "",
                   consumed = "",
                   left = "";

            bool finished = item.SubItems[6].Tag == null ? false : (bool)item.SubItems[6].Tag;
            TaskInfo task = queryTaskById(taskId);

            taskName = task.name;
            consumed = task.consumed;
            left = task.left;
            finished = finished ? finished : task.isDone;

            //设置弹窗初始化值
            editForm.setValues(taskId, taskName, consumed, left, finished);

            DialogResult result = editForm.ShowDialog();


            task.name = editForm.getTaskName();
            task.currentConsumed = Convert.ToString(float.Parse(editForm.getConsumed()) - float.Parse(task.consumed));
            task.consumed = editForm.getConsumed();
            task.left = editForm.getLeft();
            task.isDone = editForm.isFinished();
            taskList.BeginUpdate();

            item.Checked = true;
            item.SubItems[2].Text = task.name;
            item.SubItems[4].Text = task.consumed;
            item.SubItems[5].Text = task.left;
            item.SubItems[6].Tag = task.isDone;
            
            drawCheckBox(taskList, item.SubItems[6], task.isDone);

            taskList.EndUpdate();
        }

        public TaskInfo queryTaskById(string taskId) {
            foreach (TaskInfo task in tasks)
            {
                if (task.id.Equals(taskId))
                {
                    return task;
                }
            }

            return null;
        }

        public BugInfo queryBugById(string id)
        {
            foreach (BugInfo bug in bugs)
            {
                if (bug.id.Equals(id))
                {
                    return bug;
                }
            }

            return null;        
        }


        private void renwuTabChange(object sender, EventArgs e)
        {
            if (renwuTab.TabPages[renwuTab.SelectedIndex] == bugTab)
            {
                operate = SearchOperate.BUG;
                searchBug(searchKeyword.Text);

                checkboxOperate(bugCheckedState);
            }
            else
            {
                operate = SearchOperate.TASK;
                searchTask(searchKeyword.Text);
                checkboxOperate(taskCheckedState);
            }
        }

        private void IssuesForm_Closing(object sender, EventArgs e)
        {
            if (this.DialogResult == System.Windows.Forms.DialogResult.Cancel)
            {
                plugin.enterSiteManageForm();
            }
            
        }

        private void textBox1_TextChanged(object sender, EventArgs e)
        {
            switch (operate)
            {
                case SearchOperate.TASK: searchTask(searchKeyword.Text); break;
                default: searchBug(searchKeyword.Text); break;
            }
            
        }

        public void searchBug(string keyword) {
            onStartLoading();

            bugs = plugin.zenTaoManage.searchBugList(keyword);
            
            bugList.Items.Clear();

            this.toolStripProgressBar1.Value = 100;
            foreach (BugInfo bug in bugs)
            {
                addBugview(bug);
            }

            onEndLoading();
        }

        public void searchTask(string keyword)
        {
            onStartLoading();
            tasks = plugin.zenTaoManage.searchTaskList(keyword);

            taskList.Items.Clear();

            this.toolStripProgressBar1.Value = 100;
            
            foreach (TaskInfo task in tasks)
            {
                addTaskView(task);
            }

            onEndLoading();
        }

        private void IssuesForm_Load(object sender, EventArgs e)
        {
            searchBug("");
        }

        public void addBugview(BugInfo bug) {

            bugList.BeginUpdate();
            ListViewItem item = new ListViewItem();

            item.Text = "";

            item.SubItems.Add(bug.id);
            item.SubItems.Add(bug.title);
            item.SubItems.Add("").Tag = false;
            
            bugList.Items.Add(item);
            bugList.EndUpdate();
        }

        public void addTaskView(TaskInfo task) {
            taskList.BeginUpdate();
            ListViewItem item = new ListViewItem();

            item.Text = "";

            item.SubItems.Add(task.id);
            item.SubItems.Add(task.name);
            item.SubItems.Add(task.estimate);
            item.SubItems.Add(task.consumed);
            item.SubItems.Add(task.left);
            item.SubItems.Add("").Tag = task.isDone;

            taskList.Items.Add(item);
            taskList.EndUpdate();
        }


        /// <summary>
        /// 弹窗确定
        /// </summary>
        /// <param name="sender"></param>
        /// <param name="e"></param>
        private void button1_Click_1(object sender, EventArgs e)
        {
            this.DialogResult = System.Windows.Forms.DialogResult.OK;
            this.Hide();
        }

        /// <summary>
        /// 弹窗取消
        /// </summary>
        /// <param name="sender"></param>
        /// <param name="e"></param>
        private void button2_Click(object sender, EventArgs e)
        {
            this.DialogResult = System.Windows.Forms.DialogResult.Cancel;
            this.Close();
        }

        /// <summary>
        /// 全选按钮事件
        /// </summary>
        /// <param name="sender"></param>
        /// <param name="e"></param>
        private void checkBox1_CheckedChanged(object sender, EventArgs e)
        {
            checkboxOperate(selectAllCheckBox.Checked);
        }


        /// <summary>
        /// 全选/全不选
        /// </summary>
        /// <param name="checkState"></param>
        private void checkboxOperate(bool checkState)
        {
            selectAllCheckBox.Checked = checkState;

            selectAllCheckBox.Text = (selectAllCheckBox.Checked ? Plugin.lang.getText("None") : Plugin.lang.getText("All"));
            ListView.ListViewItemCollection items = bugList.Items;

            if (operate == SearchOperate.TASK){
                items = taskList.Items;
                taskCheckedState = selectAllCheckBox.Checked;
            }else{
                bugCheckedState = selectAllCheckBox.Checked;
            }

            foreach (ListViewItem item in items)
            {
                item.Checked = selectAllCheckBox.Checked;
                item.Tag = selectAllCheckBox.Checked;
            }
        }

        /// <summary>
        /// 获取选中的BUG信息
        /// </summary>
        /// <returns></returns>
       public List<BugInfo> getSelecteBugs() {
           List<BugInfo> result = new List<BugInfo>();

           if (bugs == null)
           {
               return result;
           }

           foreach (ListViewItem item in bugList.Items)
           {
               if (item.Checked)
               {
                   BugInfo bug = queryBugById(item.SubItems[1].Text);
                   result.Add(bug);
               }

           }

           return result;    
        }

        /// <summary>
        /// 获取选中的任务列表
        /// </summary>
        /// <returns></returns>
       public List<TaskInfo> getSelectTasks() {
           List<TaskInfo> result = new List<TaskInfo>();

           if (tasks == null)
           {
               return result;
           }

           List<string> ids = new List<string>();
           foreach (ListViewItem item in taskList.Items)
           {
               if (item.Checked)
               {
                   TaskInfo task = queryTaskById(item.SubItems[1].Text);
                   result.Add(task);
               }
               
           }
           return result;       
       }

        public enum SearchOperate
        {
            BUG,
            TASK
        }

        /// <summary>
        /// 任务和BUG下的列表绘制
        /// </summary>
        /// <param name="sender"></param>
        /// <param name="e"></param>
        private void listview_DrawSubItem(object sender, DrawListViewSubItemEventArgs e)
        {
            ListView listView = (ListView)sender;
            
            if (listView.Tag == null)
            {
                e.DrawDefault = true;
                return;
            }
            SearchOperate type = (SearchOperate)listView.Tag;

            //BUG的解决列和任务的完成列，绘制添加一个复选框
            if ((e.ColumnIndex == 3 && type == SearchOperate.BUG) || (type == SearchOperate.TASK && e.ColumnIndex == 6))
            {
                e.DrawBackground();

                drawCheckBox(listView, e.SubItem, e.SubItem.Tag == null ? false : (bool)e.SubItem.Tag);
            }
            else
            {                
                e.DrawDefault = true;
            }
        }

        /// <summary>
        /// 获取复选框的图像
        /// </summary>
        /// <param name="isChecked">true为选中的样式，false为未选中的样式</param>
        /// <returns></returns>
        private Image getCheckBoxImage(bool isChecked)
        {

            if (isChecked && this.checkedCheckBoxImage != null)
            {
                return checkedCheckBoxImage;
            }
            else if (!isChecked && this.uncheckedCheckBoxImage != null)
            {
                return uncheckedCheckBoxImage;
            }

            CheckBox chk = new CheckBox();
            chk.Checked = isChecked;
            chk.Text = "";
            chk.Margin = new Padding(3, 3, 3, 3);
            chk.Width = 14;
            chk.Height = 14;
            chk.BackColor = Color.Transparent;

            Bitmap bitmap = new Bitmap(chk.Width, chk.Height);

            Rectangle rect = new Rectangle(0, 0, bitmap.Width, bitmap.Height);


            chk.DrawToBitmap(bitmap, rect);

            if (isChecked)
            {
                checkedCheckBoxImage = bitmap;
            }
            else
            {
                uncheckedCheckBoxImage = bitmap;
            }


            return bitmap;
        }

        /// <summary>
        /// 在ListView的子项里绘制一个checkbox
        /// </summary>
        /// <param name="listView"></param>
        /// <param name="subItem"></param>
        /// <param name="isChecked"></param>
        private void drawCheckBox(ListView listView, ListViewItem.ListViewSubItem subItem, bool isChecked)
        {
            Graphics graph = listView.CreateGraphics();

            Image icon = getCheckBoxImage(isChecked);

            Brush brush = new SolidBrush(subItem.BackColor);
            graph.FillRectangle(brush, subItem.Bounds.X + 1, subItem.Bounds.Y + 1, subItem.Bounds.Width - 2, subItem.Bounds.Height - 2);
            graph.DrawImage(icon, new Point(subItem.Bounds.X + 5, subItem.Bounds.Y));

            graph.Dispose();
        }

        /// <summary>
        /// 任务完成选择
        /// </summary>
        /// <param name="sender"></param>
        /// <param name="e"></param>
        private void listview_MouseUp(object sender, MouseEventArgs e)
        {
            ListView listView = (ListView)sender;

            ListViewHitTestInfo hit = listView.HitTest(e.X, e.Y);

            ListViewItem.ListViewSubItem subItem = hit.SubItem;
            if (subItem == null || listView.Tag == null)
            {
                return;
            }

            if (subItem.Tag == null)
            {
                subItem.Tag = false;
            }
            else
            {
                subItem.Tag = !(bool)subItem.Tag;
            }

            ListViewItem.ListViewSubItem firstSubItem = hit.Item.SubItems[0];

            if ((SearchOperate)listView.Tag == SearchOperate.TASK)
            {
                taskListHit(hit);
            }
            else {
                bugListHit(hit);
            }
        }

        private void taskListHit(ListViewHitTestInfo hit)
        {
            ListViewItem.ListViewSubItem subItem = hit.SubItem;

            if (hit.Item.Tag == null)
            {
                hit.Item.Tag = false;
            }

            //当点击的是任务的选择列时，弹出编辑任务信息弹窗
            if ((hit.Item.SubItems[0] == subItem || hit.Item.SubItems[6] == subItem) && !(bool)hit.Item.Tag)
            {
                hit.Item.Tag = true;
                editTask(hit.Item);
            }
            else {
                hit.Item.Tag = false;
            }
        }

        private void bugListHit(ListViewHitTestInfo hit)
        {
            ListViewItem.ListViewSubItem subItem = hit.SubItem;


            //任务已解决
            if (hit.Item.SubItems[3] == subItem)
            {
                BugInfo bug = queryBugById(hit.Item.SubItems[1].Text);
                bug.isDone = (bool)subItem.Tag;

                //绘制复选框
                drawCheckBox(bugList, subItem, (bool)subItem.Tag);
            }

            if (hit.Item.Tag == null)
            {
                hit.Item.Tag = false;
            }

            hit.Item.Tag = !(bool)hit.Item.Tag;

            hit.Item.Checked = (bool)hit.Item.Tag;
        }

        private void listView_DrawItem(object sender, DrawListViewItemEventArgs e)
        {
            if (e.Item.Tag != null)
            {
                e.Item.Checked = (bool)e.Item.Tag;
            }

            e.DrawBackground();
            e.DrawText();
        }

        private void listView_DrawColumnHeader(object sender, DrawListViewColumnHeaderEventArgs e)
        {
            e.DrawBackground();
            e.DrawText();
        }
    }
}
