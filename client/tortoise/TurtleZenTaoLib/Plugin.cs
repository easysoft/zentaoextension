using System;
using System.Linq;
using System.Text;
using System.Collections;
using System.Runtime.InteropServices;
using Microsoft.Win32;
using System.Runtime.Remoting.Messaging;
using System.Windows.Forms;
using System.Collections.Generic;
using System.Diagnostics;
using System.Text.RegularExpressions;
using System.IO;

using TurtleZenTaoLib;

/**
 * 
 * 插件扩展入口
 * @author 张彪<norkts@gmail.com>
 * @version 1.0 2016-10-14
 */
namespace TurtleZenTaoLib
{
   [ComVisible(true),
        Guid("A26B6C3D-1BA0-4BCA-A809-0E0B6F4A0CEF"),
        ClassInterface(ClassInterfaceType.None)]
    public sealed class Plugin : IBugTraqProvider2
    {
       private SiteManageForm siteManage;

       public IssuesForm issForm;

       private string repoUrl = "";
       private string repoRoot = "";

       public ZenTaoManage zenTaoManage;

       public bool pluginInstalled = true;

       public static Lang lang = new Lang();

       public Plugin(){
           
       }

       public bool ValidateParameters(IntPtr hParentWnd, string parameters)
       {
           return true;
       }

       public string GetLinkText(IntPtr hParentWnd, string parameters)
       {
           string langName = parameters;
           lang.load(langName);

           return Plugin.lang.getText("Choose Issue");
       }

       /// <summary>
       /// SVN扩展接口必须实现类
       /// </summary>

       public string GetCommitMessage(IntPtr hParentWnd, string parameters, string commonRoot, string[] pathList, string originalMessage) {

           lang.load(parameters);

           siteManage = new SiteManageForm(this);
           
           issForm = new IssuesForm(this);

           DialogResult res = siteManage.ShowDialog();
           
           return res == DialogResult.OK ? genCommitMessage() : originalMessage;
       }

       public string GetCommitMessage2(IntPtr hParentWnd,
           string parameters,
           string commonURL,
           string commonRoot,
           string[] pathList,
           string originalMessage,
           string bugID,
           out string bugIDOut,
           out string[] revPropNames,
           out string[] revPropValues)
       {
           repoUrl = commonURL;
           repoRoot = commonRoot;

           lang.load(parameters);

           bugIDOut = bugID;
           revPropNames = new string[0];
           revPropValues = new string[0];

           siteManage = new SiteManageForm(this);

           issForm = new IssuesForm(this);

           DialogResult res = siteManage.ShowDialog();
           return res == DialogResult.OK ? genCommitMessage() : originalMessage;

       }

       /// <summary>
       /// 
       /// </summary>
       /// <param name="hParentWnd"></param>
       /// <param name="parameters"></param>
       /// <param name="commonURL"></param>
       /// <param name="commonRoot"></param>
       /// <param name="pathList"></param>
       /// <param name="commitMessage"></param>
       /// <returns>空字符串表示无问题,非空字符串为错误信息</returns>
       public string CheckCommit(IntPtr hParentWnd,
            string parameters,
            string commonURL,
            string commonRoot,
            string[] pathList,
            string commitMessage) 
       {
           return "";
       }

       public string OnCommitFinished(
            IntPtr hParentWnd,
            string commonRoot,
            string[] pathList,
            string logMessage,
            int revision)
       {

           SVNLog log = new SVNLog();
           log.files = pathList;
           log.repoRoot = repoRoot;
           log.repoUrl = repoUrl;
           log.revision = Convert.ToString(revision);
           log.message = logMessage;

           string bugReg = "(Fix\\s+)?[Bb]ug#(\\d+)";
           MatchCollection matches = Regex.Matches(logMessage, bugReg);
           string resText = "";
           foreach(Match match in matches){
               string operate = match.Groups[1].Value;
               string bugId = match.Groups[2].Value;

               //任务完成
               if (match.Groups[1].Success) {
                   resText += "Bug#" + bugId + "已解决\r\n";
                   zenTaoManage.updateBug(bugId, "");
               }

           }

           string taskReg = "(Finish\\s+)?[Tt]ask#(\\d+).*?,\\s*[Cc]ost:(\\d+)\\s*left:(\\d+)";

           matches = Regex.Matches(logMessage, taskReg);
           foreach(Match match in matches){
               string operate = match.Groups[1].Value;
               string taskId = match.Groups[2].Value;
               string consumed = match.Groups[3].Value;
               string left = match.Groups[4].Value;

               TaskInfo task = issForm.queryTaskById(taskId);

               zenTaoManage.updateTask(task);

               if (match.Groups[1].Success)
               {
                   resText += "Task#" + taskId + "," + taskId + ", " + consumed + ", " + left + "已完成\r\n";
               }
           }

           zenTaoManage.saveSVNLog(log);

           return resText;
       }

       public bool HasOptions()
       {
           return true;
       }

       public string ShowOptionsDialog(
            IntPtr hParentWnd,
            string parameters)
       {
           LangChooseForm langForm = new LangChooseForm();

           langForm.ShowDialog();

           return langForm.getSelectLang();
       }

       /// <summary>
       /// 生成注释
       /// </summary>
       /// <returns></returns>
       private string genCommitMessage() {
           List<BugInfo> bugs = issForm.getSelecteBugs();
           List<TaskInfo> tasks = issForm.getSelectTasks();

           StringBuilder sb = new StringBuilder();
           foreach(BugInfo bug in bugs){
               if (bug.isDone)
               {
                   sb.Append("Fix ");
               }
               sb.Append("Bug#" + bug.id + " " + bug.title).Append("\r\n");
           }


           foreach (TaskInfo task in tasks)
           {
               if (task.isDone)
               {
                   sb.Append("Finish ");
               }
               sb.Append("Task#" + task.id + " " + task.name + ", cost:" + task.consumed + " left:" + task.left).Append("\r\n");
           }

           return sb.ToString();
       }

       /// <summary>
       /// 进入BUG和任务详情界面
       /// </summary>
       /// <param name="url"></param>
       /// <param name="user"></param>
       /// <param name="password"></param>
       public void enterIssueForm(string url, string user, string password) {
           
           zenTaoManage = new ZenTaoManage(url, user, password);
           Result<string> loginRes = zenTaoManage.login();

           if (!loginRes.isSuccess())
           {
               MessageBox.Show(Plugin.lang.getText("login failed") + ":" + loginRes.msg);
           }else {
               siteManage.Hide();
               DialogResult result = issForm.ShowDialog();
               if (result == DialogResult.OK)
               {
                   siteManage.DialogResult = DialogResult.OK;
               }
           }
           
       }

       /// <summary>
       /// 进入站点管理
       /// </summary>
       public void enterSiteManageForm() {
           siteManage.Show();
       }

       public bool isPluginInstalled()
       {
           return pluginInstalled;
       }


       /// <summary>
       /// 安装扩展
       /// </summary>
       /// <returns></returns>
       public bool installPlugin() {

           pluginInstalled = false;
           try
           {
               string regFile = Environment.CurrentDirectory + "\\TortoiseZenTao.reg";
               string dllPath = Environment.CurrentDirectory + "\\TurtleZenTaoLib.dll";

               string regasmPath = Environment.GetEnvironmentVariable("SystemRoot") + "\\Microsoft.NET\\Framework\\v4.0.30319\\RegAsm.exe";

               bool exists = File.Exists(regasmPath);

               Process p = new Process();
               p.StartInfo.FileName = regasmPath;
               p.StartInfo.UseShellExecute = false;
               p.StartInfo.RedirectStandardInput = true;
               p.StartInfo.RedirectStandardOutput = true;
               p.StartInfo.RedirectStandardError = true;
               p.StartInfo.CreateNoWindow = true;
               p.StartInfo.Arguments = "\"" + dllPath + "\" /codebase /regfile:\"" + regFile + "\"";

               p.Start();

               p.WaitForExit();

               FileStream fs;
               fs = new FileStream(regFile, FileMode.Open);
               StreamReader reader = new StreamReader(fs);
               string content = reader.ReadToEnd();
               reader.Close();
               fs.Close();


               fs = new FileStream(regFile, FileMode.Truncate);

               StreamWriter sw = new StreamWriter(fs, Encoding.GetEncoding("GBK"));

               sw.Write(content);
               sw.WriteLine();
               sw.WriteLine("[HKEY_CLASSES_ROOT\\CLSID\\{A26B6C3D-1BA0-4BCA-A809-0E0B6F4A0CEF}\\Implemented Categories\\{3494FA92-B139-4730-9591-01135D5E7831}]");
               sw.Close();
               fs.Close();
               
               p = Process.Start("regedit.exe", "/s \"" + regFile + "\"");
               p.WaitForExit();

               
               File.Delete(regFile);

               pluginInstalled = true;
           }
           catch (Exception e)
           {
               MessageBox.Show(e.Message);

               pluginInstalled = false;
           }

           return pluginInstalled;
       }
    }
}
