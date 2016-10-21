using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;

using System.IO;
using Newtonsoft.Json;
using System.Net;

namespace TurtleZenTaoLib
{
    /// <summary>
    /// 禅道的API操作
    /// </summary>
    public class ZenTaoManage
    {
        private string url;
        private string username;
        private string password;
        private static Dictionary<string, RequestType> requestTypeMap = new Dictionary<string,RequestType>();

        private static Dictionary<string, string> requestUrlMap = new Dictionary<string, string>();

        private List<BugInfo> bugs = new List<BugInfo>();

        private List<TaskInfo> tasks = new List<TaskInfo>();

        public ZenTaoManage(string url, string username, string password)
        {
            this.url = url;
            this.password = password;
            this.username = username;
        }
        
   
        public Result<string> login() {
            return login(url, username, password);
        }

        /// <summary>
        /// 登录禅道系统
        /// </summary>
        /// <param name="url"></param>
        /// <param name="username"></param>
        /// <param name="password"></param>
        /// <returns></returns>
        public static Result<string> login(string url, string username, string password)
        {
            //每次登录清除Cookie
            HttpClient.container = new CookieContainer();

            string data = "account=" + Uri.EscapeDataString(username) + "&password=" + Uri.EscapeDataString(password) + "&keepLogin%5B%5D=on";

            RequestType type = getRequestType(url);
            string name = "index.php?m=user&f=login&t=json";
            if (type == RequestType.PATH_INFO)
            {
                name = "user-login.json";
            }

            string loginUrl = getAPIUrl(url, name);

            Result<string> result = new Result<string>();
            try
            {
                string body = HttpClient.post(loginUrl, Encoding.UTF8.GetBytes(data));

                ZentaoResult res = JsonConvert.DeserializeObject<ZentaoResult>(body);

                if (res.isSuccess())
                {
                    result.status = 1;
                    result.msg = Plugin.lang.getText("Login Success");
                    result.data = "";
                }
                else
                {
                    result.status = 0;
                    result.msg = res.reason;
                    result.data = "";
                }

            }
            catch (Exception e)
            {
                result.status = 0;
                result.msg = e.Message;
                result.data = "";
            }

            return result;
        }

        /// <summary>
        /// 获取BUG列表: 此处的结果有数据缓存，最新的数据调用searchBugList
        /// </summary>
        /// <returns></returns>
        public List<BugInfo> getBugList(){
            bugs.Clear();

            RequestType type = getRequestType();
            string name = "index.php?m=my&f=bug&t=json&type=assignedTo&orderBy=id_desc&recTotal=0&recPerPage=1000&pageID=1";
            if (type == RequestType.PATH_INFO)
            {
                name = "my-bug-assignedTo-id_desc-0-1000-1.json";
            }

            string bugUrl = this.getAPIUrl(name);

            string body = HttpClient.get(bugUrl);

            ZentaoResult result = JsonConvert.DeserializeObject<ZentaoResult>(body);
            if (result.isSuccess())
            {
                BugResult bugResult = JsonConvert.DeserializeObject<BugResult>(result.data);
                foreach(BugInfo bug in bugResult.bugs){
                    if (bug.status.Equals("active")){
                        bugs.Add(bug);
                    }
                }

                return bugs;
            }


            return new List<BugInfo>();
        }

        /// <summary>
        /// 搜索BUG
        /// </summary>
        /// <param name="keyword"></param>
        /// <returns></returns>
        public List<BugInfo> searchBugList(string keyword)
        {

            if (bugs.Count == 0)
            {
                getBugList();
            }

            if (keyword.Equals(""))
            {
                return bugs;
            }

            List<BugInfo> resultBugs = new List<BugInfo>();
            foreach(BugInfo bug in bugs){
                if (bug.title.Contains(keyword))
                {
                    resultBugs.Add(bug);
                }
            }

            return resultBugs;
        }

        /// <summary>
        /// 获取任务列表，数据有查询缓存
        /// </summary>
        /// <returns></returns>
        public List<TaskInfo> getTaskList()
        {
            tasks.Clear();

            RequestType type = getRequestType();

            string name = "index.php?m=my&f=task&t=json&type=assignedTo&orderBy=id_desc&recTotal=0&recPerPage=1000&pageID=1";
            if (type == RequestType.PATH_INFO)
            {
                name = "my-task-assignedTo-id_desc-0-1000-1.json";
            }
            string taskUrl = getAPIUrl(name);

            string body = HttpClient.get(taskUrl);
            ZentaoResult result = JsonConvert.DeserializeObject<ZentaoResult>(body);
            if (result.isSuccess())
            {
                TaskResult taskResult = JsonConvert.DeserializeObject<TaskResult>(result.data);

                foreach (TaskInfo task in taskResult.tasks)
                {
                    if (!task.status.Equals("done") && !task.status.Equals("done"))
                    {
                        tasks.Add(task);
                    }
                }

                return tasks;
            }

            return new List<TaskInfo>();
        }

        /// <summary>
        /// 搜索任务
        /// </summary>
        /// <param name="keyword"></param>
        /// <returns></returns>
        public List<TaskInfo> searchTaskList(string keyword)
        {
            if (tasks.Count == 0)
            {
                getTaskList();
            }

            if (keyword.Equals(""))
            {
                return tasks;
            }

            List<TaskInfo> resultTasks = new List<TaskInfo>();
            foreach (TaskInfo task in tasks)
            {
                if (task.name.Contains(keyword))
                {
                    resultTasks.Add(task);
                }
            }

            return resultTasks;
        }

        /// <summary>
        /// 更新BUG
        /// </summary>
        /// <param name="bugId"></param>
        /// <returns></returns>
        public Result<string> updateBug(string bugId, string comment) {

            RequestType type = getRequestType();
            string name = "index.php?t=json&m=bug&f=resolve&bugID=" + bugId;
            if (type == RequestType.PATH_INFO)
            {
                name = "bug-resolve-" + bugId + ".json";
            }

            string updateUrl = getAPIUrl(name);

            string data = "resolution=fixed&resolvedBuild=trunk&resolvedDate=" + DateTime.Now.ToString("yyyy-MM-dd%20hh:mm:ss")
                + "&assignedTo=" + username;

            string body = HttpClient.post(updateUrl, Encoding.Default.GetBytes(data));

            Result<string> result = new Result<string>();
            result.status = 1;
            result.msg = Plugin.lang.getText("OperateSucess");
            result.data = "";

            return result;
        }

        /// <summary>
        /// 更新任务
        /// </summary>
        /// <param name="taskId"></param>
        /// <returns></returns>
        public Result<string> updateTask(TaskInfo task)
        {
            string taskId = task.id;
            string consumed = task.consumed;
            string left = task.left;

            Result<string> result = new Result<string>();
            result.status = 1;
            result.msg = Plugin.lang.getText("OperateSucess");
            result.data = "";

            string operate = "recordEstimate";

            string data = "id%5B1%5D=" + taskId + "&dates%5B1%5D=" + DateTime.Now.ToString("yyyy-MM-dd") + "&consumed%5B1%5D=" + task.currentConsumed
                + "&left%5B1%5D=" + left + "&work%5B1%5D=";

            if (int.Parse(left) < 1)
            {
                operate = "finish";
                data = "consumed=" + consumed + "&assignedTo=" + "&finishedDate=" + DateTime.Now.ToString("yyyy-MM-dd")
                    + "&comment=";
            }

            RequestType type = getRequestType();
            string name = "index.php?t=json&m=task&f=" + operate  + "&taskID=" + taskId;
            if (type == RequestType.PATH_INFO)
            {
                name = "task-" + operate + "-" + taskId + ".json";
            }

            string updateUrl = getAPIUrl(name);

            string body = HttpClient.post(updateUrl, Encoding.Default.GetBytes(data));

            return result;
        }

        public Result<string> saveSVNLog(SVNLog log)
        {
            Result<string> result = new Result<string>();
            result.status = 1;
            result.msg = Plugin.lang.getText("OperateSucess");
            result.data = "";

            RequestType type = getRequestType();
            string name = "index.php?m=svn&f=ajaxSaveLog&t=json";
            if (type == RequestType.PATH_INFO)
            {
                name = "svn-ajaxSaveLog.json";
            }


            string updateUrl = getAPIUrl(name);

            string data = "repoUrl=" + Uri.EscapeDataString(log.repoUrl) + "&repoRoot=" + Uri.EscapeDataString(log.repoRoot)
                + "&message=" + Uri.EscapeDataString(log.message) + "&revision=" + log.revision;

            foreach (string path in log.files)
            {
                data += "&files[]=" + Uri.EscapeDataString(path);
            }

            string body = HttpClient.post(updateUrl, Encoding.UTF8.GetBytes(data));
            
            //TODO
            return result;
        }

        public string getAPIUrl(string name)
        {
            return getAPIUrl(url, name);
        }

        public static string getAPIUrl(string url, string name) {

            return url + (url.EndsWith("/") ? "" : "/") + name;
        }

        public RequestType getRequestType() {
            return getRequestType(url);
        }

        public static RequestType getRequestType(string url) {
            

            RequestType requestType;
            if (!requestTypeMap.ContainsKey(url)){
                string requrl = url + (url.EndsWith("/") ? "" : "/") + "index.php?mode=getconfig";

                string body = HttpClient.get(requrl);

                ConfigResult result = JsonConvert.DeserializeObject<ConfigResult>(body);

                requestType = result.requestType.Equals("GET") ? RequestType.GET : RequestType.PATH_INFO;
                requestTypeMap[url] = requestType;
            }
            else
            {
                requestType = requestTypeMap[url];
            }

            return requestType;

        }
    }

    public class SVNLog
    {
        public string revision;
        public string message;
        public string repoRoot;
        public string repoUrl;
        public string[] files;
    }

    class ConfigResult
    {
        public string requestType;
    }

    /// <summary>
    /// BUG搜索结果
    /// </summary>
    public class BugResult{
        public List<BugInfo> bugs;
    }

    /// <summary>
    /// BUG详情
    /// </summary>
    public class BugInfo
    {
        public string id;
        public string title;
        public bool isDone;
        public string status;
    }

    /// <summary>
    /// 任务结果
    /// </summary>
    public class TaskResult{
        public List<TaskInfo> tasks;
    }

    /// <summary>
    /// 任务详情
    /// </summary>
    public class TaskInfo{
        public string id;
        public string name;
        public string estimate;
        public string consumed;
        public string currentConsumed;
        public string left;
        public bool isDone;
        public string status;
    }

    /// <summary>
    /// 禅道API接口统一结果类
    /// </summary>
    public class ZentaoResult {
        public string status;
        public string reason;
        public string data;
        public  UserModel user;

        public bool isSuccess() {
            return status != null && status.Equals("success");
        }
    }

    /// <summary>
    /// 用户信息
    /// </summary>
    public class UserModel {
        public string id;
        public string account;
    }

    /// <summary>
    /// 程序业务结果
    /// </summary>
    /// <typeparam name="T"></typeparam>
    public class Result<T>
    {
        public string msg;
        public int status;
        public T data;

        public bool isSuccess()
        {
            return status == 1;
        }
    }

    public enum RequestType
    {
        GET,
        PATH_INFO
    }
}
