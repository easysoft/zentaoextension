using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;

using System.Net;
using System.IO;

using System.Windows.Forms;

/**
 * @author 张彪<norkts@gmail.com>
 * @version 1.0 2016-10-14
 */
namespace TurtleZenTaoLib
{
    /// <summary>
    /// HTTP操作类
    /// </summary>
    class HttpClient
    {
        public static CookieContainer container = new CookieContainer();

        public HttpClient() {
        }

        public static string get(string url){
            try
            {
                HttpWebRequest request = (HttpWebRequest)WebRequest.Create(url);
                request.CookieContainer = container;
                request.Method = "GET";
                request.ContentType = "text/html;charset=UTF-8";

                HttpWebResponse response = (HttpWebResponse)request.GetResponse();
                Stream myResponseStream = response.GetResponseStream();
                StreamReader myStreamReader = new StreamReader(myResponseStream, Encoding.GetEncoding("utf-8"));
                string retString = myStreamReader.ReadToEnd();
                myStreamReader.Close();
                myResponseStream.Close();

                return retString;    
            }
            catch (Exception e)
            {
                MessageBox.Show(Plugin.lang.getText("LoadFailed") + ":" + e.Message);
                return "";
            }
    
        }

        public static string post(string url, byte[] data) {

            try
            {
                HttpWebRequest request = (HttpWebRequest)WebRequest.Create(url);
                request.Method = "POST";
                request.ContentType = "application/x-www-form-urlencoded";
                request.ContentLength = data.Length;
                request.CookieContainer = container;

                Stream myRequestStream = request.GetRequestStream();
                myRequestStream.Write(data, 0, data.Length);

                HttpWebResponse response = (HttpWebResponse)request.GetResponse();

                response.Cookies = container.GetCookies(response.ResponseUri);
                Stream myResponseStream = response.GetResponseStream();
                StreamReader myStreamReader = new StreamReader(myResponseStream, Encoding.GetEncoding("utf-8"));
                string retString = myStreamReader.ReadToEnd();
                myStreamReader.Close();
                myResponseStream.Close();

                return retString;
            }
            catch (Exception e)
            {
                MessageBox.Show(Plugin.lang.getText("LoadFailed") + ":" + e.Message);
                return "";
            }

        }
    }
}
