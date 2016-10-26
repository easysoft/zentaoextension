using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;
using System.Windows.Forms;
using TurtleZenTaoLib;

/**
 * @author 张彪<norkts@gmail.com>
 * @version 1.0 2016-10-14
 */
namespace TurtleZenTao
{
    static class TurtleMain
    {
        /// <summary>
        /// 安装以及测试程序
        /// </summary>
        [STAThread]
        static void Main(string[] argv)
        {
            Application.EnableVisualStyles();
            Application.SetCompatibleTextRenderingDefault(false);

            Plugin plugin = new Plugin();
            Plugin.lang.load("Chinese");

            plugin.installPlugin();

            if (plugin.isPluginInstalled())
            {
                MessageBox.Show(Plugin.lang.getText("InstallSuccess"));
            }
            else{
                MessageBox.Show(Plugin.lang.getText("InstallFailed"));
            }
        }
    }
}
