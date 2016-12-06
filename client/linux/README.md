#zentao-linux-gui
是一个为[禅道项目管理系统](http://www.zentao.net/)开发的一个在linux终端下的GUI操作程序。


##依赖
该软件基于[nodejs](https://nodejs.org/en/)开发，nodejs版本为5.9.1或更新。
软件依赖[blessed](https://github.com/chjj/blessed)。

##安装

下载nodejs对应版本[下载地址](https://nodejs.org/en/download/)并安装
检查安装是否成功:

```
node -v
```
如果得出了对应的nodejs版本号，则标识安装成功。
blessed已经打包到安装目录


```
git clone https://github.com/norkts/zentao-linux-gui.git
cd zentao-linux-gui
make install
source ~/.bashrc
```

##卸载
```
make uninstall
```