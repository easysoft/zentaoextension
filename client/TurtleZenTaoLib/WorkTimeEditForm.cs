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
    public partial class WorkTimeEditForm : Form
    {

        public WorkTimeEditForm()
        {
            InitializeComponent();
            Plugin.lang.langProcess(this);
        }

        private void checkBox1_CheckedChanged(object sender, EventArgs e)
        {
            if (finished.Checked)
            {
                left.Text = "0";
                left.ReadOnly = true;
            }
            else {
                left.ReadOnly = false;
            }

        }

        public void setValues(string taskId, string taskName, string consumed, string left, bool finished) {
            this.taskId.Text = taskId;
            this.taskName.Text = taskName;
            this.consumed.Text = consumed;
            this.left.Text = left;
            this.finished.Checked = finished;
        }

        public string getTaskId() {
            return taskId.Text;
        }

        public string getTaskName()
        {
            return taskName.Text;
        }

        public string getConsumed()
        {
            return consumed.Text;
        }

        public string getLeft()
        {
            return left.Text;
        }


        public bool isFinished()
        {
            return finished.Checked;
        }

        private void button1_Click(object sender, EventArgs e)
        {
            this.Close();
        }
    }
}
