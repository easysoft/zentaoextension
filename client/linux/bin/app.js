/**
 * zentao-linux-tui
 * 禅道svn或git字符界面操作处理程序
 * @author norkts<norkts@gmail.com>
 * @version 1.0 2016-11-23 21:41:00
 */

var base = require('./base');
var blessed = require("blessed");
var fs = require("fs");
var os = require("os");
var child = require('child_process');
var DOMParser = require('xmldom').DOMParser;
	
var ListTable = base.ListTable;
var executor = base.executor;
var GBK2UTF8 = base.GBK2UTF8;
var Lang = base.Lang;
var getText = function (text) {
	return Lang.getText(text);
}

var globalIniPath = '~/.zentao/.zentao'; //配置文件地址
var workConfigPath = '~/.zentao/.zentao.work';
var zentaoConfig = '~/.zentao/conf/conf.ini';

var zentaosh = '~/.zentao/.zentao.sh';
var commitFile = '~/.zentao/tmp/.zentao.commit'; //TODO 多用户处理

var commitLogFile = '~/.zentao/tmp/.commit.log';

var currentPath = process.cwd();


var taskConsumedTimeMap = {};

process.stdin.resume();

if (os.type() == 'Windows_NT') {
	globalIniPath = '.zentao';
	workConfigPath = '.zentao.work';
	zentaoConfig = 'conf.ini';
	
	commitFile = '.zentao.commit';
	zentaosh = '.zentao.sh';
	commitLogFile = '.commit.log';
} else {
	globalIniPath = process.env.HOME + "/.zentao/conf/.zentao";
	workConfigPath = process.env.HOME + '/.zentao/conf/.zentao.work';
	zentaoConfig = process.env.HOME + '/.zentao/conf/conf.ini';
	
	zentaosh = process.env.HOME + '/.zentao/bin/.zentao.sh';
	commitFile = process.env.HOME + '/.zentao/tmp/.zentao.commit';
	commitLogFile = process.env.HOME + '/.zentao/tmp/.commit.log';
}

var logger = base.logger;

var now = base.now;

//读取配置文件
var websiteMap = undefined;

var siteTable = undefined;
var bugTable = undefined;
var zentaoAPI = undefined;
var screen = undefined;

var workconfig = undefined;
var cvsType = process.argv[2].toLowerCase().indexOf('git') > -1 ? "git" : "svn";

process.on('uncaughtException', function (error) {
	logger(error.name + ":" + error.message + "\r\n" + error.stack);
	console.error(error.stack);
});
var zentaoIni = {};
/**
 * 主流程函数
 */
(function () {
	//读取语言信息
	zentaoIni = base.parseIniFile(zentaoConfig);
	if (getZentaoIni('lang') == undefined) {
		var langs = Lang.getLangs();
		
		for (var i = 0; i < langs.length; i++) {
			process.stdout.write(i + ': ' + langs[i] + "\r\n");
		}
		
		var langIndex = 0;
		
		do {
			process.stdout.write(getText('Please Select Your Language: '));
			langIndex = stdinRead();
		} while (typeof langs[parseInt(langIndex)] != "string");
		
		Lang.chooseLang(langs[parseInt(langIndex)]);
		
		saveZentaoIni('lang', Lang.langName);
	} else {
		Lang.chooseLang(getZentaoIni('lang'));
	}
	
	if (isFileEmpty(workConfigPath)) {
		//绑定目录-站点-repository
		bindWorkRepository();
	} else {
		websiteMap = base.parseIniFile(globalIniPath);
		view();
	}
	
})();

function saveZentaoIni(key, val) {
	if (!zentaoIni) {
		zentaoIni = {};
	}
	
	if (zentaoIni['zentao'] == undefined) {
		zentaoIni['zentao'] = {};
	}
	
	zentaoIni["zentao"][key] = val;
	
	base.saveIniFile(zentaoConfig, zentaoIni);
}

function getZentaoIni(key) {
	if (!zentaoIni) {
		zentaoIni = {};
	}
	
	if (zentaoIni['zentao'] == undefined) {
		zentaoIni['zentao'] = {};
	}
	
	return zentaoIni['zentao'][key];
}

function isFileEmpty(file) {
	if (!fs.existsSync(file)) {
		return true;
	}
	
	var state = fs.statSync(file);
	
	if (state.isDirectory()) {
		return true;
	}
	
	if (state.size == 0) {
		return true;
	}
	
	return false;
}

/**
 * 安装程序
 */
function addWebsite() {
	
	if (os.type().toLowerCase() != 'linux') {
		process.stdout.write(getText('UnsuportedOS') + '\r\n');
		return;
	}
	
	process.stdout.write(getText('StartInstallZentao') + '\r\n');
	
	var contents = fs.readFileSync(process.env.HOME + '/.bashrc', 'utf8');
	
	process.stdout.write(getText('IsAddWebsite') + ": ");
	var chunk = stdinRead();
	websiteMap = {};
	
	var urlRegexp = /^https?:\/\/(.*)\/.*$/;
	if (chunk == 'y') {
		while (true) {
			process.stdout.write(getText("EnterWebsiteName") + ": ");
			var websiteName = stdinRead();
			
			var url = "";
			do {
				process.stdout.write(getText('EnterWebsiteURI') + ": ");
				url = stdinRead();
			} while (!urlRegexp.test(url))
			
			process.stdout.write(getText("EnterUserName") + ": ");
			var account = stdinRead();
			
			process.stdout.write(getText("EnterPassword") + ": ");
			var password = stdinRead();
			
			websiteMap[websiteName] = {
				url : url,
				account : account,
				password : password
			};
			
			process.stdout.write(getText('IsContinueAddWebsite') + ": ");
			chunk = stdinRead();
			if (chunk == 'n') {
				base.saveIniFile(globalIniPath, websiteMap);
				break;
			}
		}
	}
	
	websiteMap = base.parseIniFile(globalIniPath);
}

/**
 * 显示图形界面
 */
function view() {
	workconfig = base.parseIniFile(workConfigPath);
	if (workconfig[currentPath] == undefined
		 || workconfig[currentPath].name == undefined
		 || websiteMap[workconfig[currentPath].name] == undefined) {
		
		bindWorkRepository();
	} else {
		if (isFileEmpty(commitFile)) {
			//无参数，则显示TUI
			
			initTUI();
			initZentaoTui(workconfig[currentPath]);
		} else {
			postCommit(commitFile);
		}
	}
}

/**
 * 绑定站点和仓库
 */
function bindWorkRepository() {
	process.stdin.resume();
	
	addWebsite();
	
	logger("bindWorkRepository start");
	
	var selectedWebsiteName = undefined;
	
	executor(function (resolve) {
		initTUI();
		initSiteTable(function (website, websiteName) {
			resolve(websiteName);
		});
	}).then(function (websiteName) {
		logger("bindWorkRepository site selected, siteName: " + websiteName);
		destroyTUI();
		
		selectedWebsiteName = websiteName;
		var website = websiteMap[websiteName];
		return executor(function (resolve) {
			initZentaoAPI(website, function (isSucess, msg) {
				if (isSucess) {
					resolve();
				} else {
					logger("登录禅道站点失败: " + zentaoAPI.url + ", 错误信息:" + msg);
				}
			});
		});
	}).then(function () {
		zentaoAPI.getRepos(cvsType, function (repos) {
			logger("bindWorkRepository getRepos res:" + JSON.stringify(repos));
			
			var repository = undefined;
			if(repos.length > 0){
				for (var i = 0; i < repos.length; i++) {
					process.stdout.write(i + " : " + repos[i] + "\r\n");
				}
				
				process.stdout.write(getText("EnterRepository") + "(0-" + (repos.length - 1) + "):");
				
				var chunk = stdinRead();
				logger(chunk);
				var num = parseInt(chunk);
				
				repository = repos[num];
			}
			

			
			saveWorkConfig(selectedWebsiteName, repository);
			
			view();
			
		});
	})
}

/**
 * 读取终端输入
 */
function stdinRead() {
	process.stdin.resume();
	
	var fd = process.stdin.fd;
	if (os.type() == 'Linux') {
		fd = fs.openSync('/dev/stdin', 'rs');
	}
	
	var buf = new Buffer(1000);
	buf.fill(0);
	var size = fs.readSync(fd, buf, 0, 1000);
	
	buf = buf.slice(0, size);
	
	if (os.type() == 'Linux') {
		return buf.toString().trim();
	} else {
		return GBK2UTF8(buf).trim();
	}
}

/**
 * 保存匹配的站点信息
 */
function saveWorkConfig(websiteName, repository) {
	
	logger("saveWorkConfig select website:" + websiteName + ", repository:" + repository);
	
	var website = websiteMap[websiteName];
	var configArr = [];
	configArr.push('[' + currentPath + ']');
	
	if(repository != undefined){
		configArr.push('repository=' + repository);		
	}

	configArr.push('name=' + websiteName);
	configArr.push('url=' + website.url);
	configArr.push('account=' + website.account);
	configArr.push('password=' + website.password);
	
	fs.writeFileSync(workConfigPath, configArr.join('\r\n'));
	
}

/**
 * 提交消息之后
 */
function postCommit(commitFile) {
	
	base.logToConsole = true;
	logger("--开始提交commit信息到禅道--");
	
	workconfig = base.parseIniFile(workConfigPath);
	initZentaoAPI(workconfig[currentPath], function (isSuccess, msg) {
		logger("--接口登录成功:result=" + isSuccess + ", msg=" + msg);
		
		var contents = fs.readFileSync(commitFile, 'UTF-8');
		
		var taskRegAll = /(Finish\s+)?[Tt]ask#(\d+).*?,\s*[Cc]ost:(\d+)\s*left:(\d+)/g;
		var taskReg = /(Finish\s+)?[Tt]ask#(\d+).*?,\s*[Cc]ost:(\d+)\s*left:(\d+)/;
		var bugRegAll = /(Fix\s+)?[Bb]ug#(\d+)/g;
		var bugReg = /(Fix\s+)?[Bb]ug#(\d+)/;
		
		var matches = contents.match(taskRegAll);
		
		var taskTotal = 0;
		if (matches != undefined) {
			//任务更新
			for (var i = 0; i < matches.length; i++) {
				var match = matches[i].match(taskReg);
				var task = {
					id : match[2],
					consumed : match[3],
					left : match[4]
				};
				
				logger("--开始更新task#" + task.id + ", 任务数=" + taskTotal);
				taskTotal++;
				zentaoAPI.updateTask(task, function (body, status) {
					taskTotal--;
					logger("--task#" + task.id + "更新成功: status=" + status);
					checkFinished(taskTotal);
				});
				
			}
		}
		
		matches = contents.match(bugRegAll);
		if (matches != undefined) {
			
			//BUG更新
			for (var i = 0; i < matches.length; i++) {
				var match = matches[i].match(bugReg);
				var bugId = match[2];
				
				logger("--开始更新bug#" + bugId + ", 任务数=" + taskTotal);
				if (match[1] != undefined) {
					taskTotal++;
					zentaoAPI.updateBug(bugId, function (body, status) {
						logger("--bug#" + bugId + "更新成功,status=" + status);
						taskTotal--;
						checkFinished(taskTotal);
					});
				} else {
					logger("--bug#" + bugId + "未做任何操作，不提交禅道, 任务数=" + taskTotal);
				}
				
			}
		}
		
		//reversion信息，commitMessage信息，repo信息处理
		var svnLog = parseCommitLog();
		postSVNLog(svnLog);
		checkFinished(taskTotal);
		
		function postSVNLog(svnLog) {
			taskTotal++;
			zentaoAPI.saveSVNLog(svnLog, function () {
				logger("--saveCommitLog--" + JSON.stringify(svnLog));
				taskTotal--;
				checkFinished(taskTotal);
			});
		}
		
		function checkFinished(total) {
			logger("--正在执行的任务数:" + total + "--");
			if (total < 1) {
				logger("--提交commit信息到禅道完成--");
				
				fs.unlinkSync(commitFile);
				fs.unlinkSync(commitLogFile);
				process.exit(0);
			}
		}
	});
	
}

function parseCommitLog() {
	var contents = fs.readFileSync(commitLogFile, "utf8");
	var lines = contents.split(/\r?\n/);
	
	var isGit = lines[0].indexOf('git') > -1;
	
	var svnLog = isGit ? parseGitLog(lines.slice(1)) : parseSVNLog(lines.slice(1));
	
	svnLog.type = isGit ? "git" : "svn";
	
	return svnLog;
}

function parseGitLog(lines) {
	var infos = lines[0].split(' ');
	var svnLog = {
		files : []
	};

	svnLog.revision = lines[0].substring(0, lines[0].indexOf(' '));
	svnLog.message = lines[0].substring(lines[0].indexOf(' ') + 1);
	if (workconfig && workconfig[currentPath] && workconfig[currentPath]['repository']) {
		svnLog.repoUrl = workconfig[currentPath]['repository'];
	}else{
		svnLog.repoUrl = "";
	}
	svnLog.repoRoot = currentPath;
	
	var files = lines.slice(1);
	for (var i = 0; i < files.length; i++) {
		if(files[i].length > 0){
			svnLog.files.push(files[i].split('\t').join(' '));
		}
	}
	
	logger("--parseGitLog--" + JSON.stringify(svnLog));
	
	return svnLog;
}

function parseSVNLog(lines) {
	var doc = new DOMParser().parseFromString(lines.join('\r\n'));
	var revision = doc.getElementsByTagName('logentry')[0].getAttribute('revision');
	var svnLog = {
		files : []
	};
	
	var paths = doc.getElementsByTagName('path');
	for (var i = 0; i < paths.length; i++) {
		svnLog.files.push(paths[i].getAttribute('action') + " " + getXMLNodeText(paths[i]));
	}
	
	svnLog.revision = revision;
	svnLog.message = getXMLNodeText(doc.getElementsByTagName('msg')[0]);
	
	if (workconfig && workconfig[currentPath] && workconfig[currentPath]['repository']) {
		svnLog.repoUrl = workconfig[currentPath]['repository'];
	} else {
		
		var svnInfo = child.execSync('svn info --xml ' + currentPath).toString();
		var svnDoc = new DOMParser().parseFromString(svnInfo);
		var repo = '';
		if(svnDoc.getElementsByTagName('url').length > 0){
			repo = getXMLNodeText(svnDoc.getElementsByTagName('url')[0]);	
		}
		
		svnLog.repoUrl = repo;
	}
	
	svnLog.repoRoot = currentPath;
	
	return svnLog;
}

function getXMLNodeText(node){
	if(node == undefined){
		return "";
	}
	
	if(node.firstChild == undefined){
		return "";
	}
	
	return node.firstChild.nodeValue;
}

/**
 * 初始化字符界面
 */
function initTUI() {
	base.logToConsole = false;
	screen = blessed.screen({
			debug : true,
			fullUnicode : true
		});
	
	/**
	 * 退出操作快捷键
	 */
	screen.key('C-q', function () {
		destroyTUI();
		process.exit(0);
	});
}

function destroyTUI() {
	screen.destroy();
	base.logToConsole = false;
}
/**
 * 初始化站点列表
 */
function initSiteTable(onRowSelect) {
	
	siteTable = new ListTable(screen)
		siteTable.setTitle(getText('SiteTitle'));
	
	//FIXME 当按上下箭头时此处显示异常
	siteTable.setTip(getText('siteTableTip'));
	
	siteTable.setHead([getText('SiteName'), getText('SiteUrl'), getText('UserName'), getText('Password')]);
	
	var websites = [];
	for (var name in websiteMap) {
		websites.push([name, websiteMap[name].url, websiteMap[name].account, '******']);
	}
	
	siteTable.setData(websites);
	
	siteTable.render();
	siteTable.focus();
	
	screen.render();
	
	var msg = blessed.message({
			parent : screen,
			border : 'line',
			height : 'shrink',
			width : 'half',
			top : 'center',
			left : 'center',
			label : ' {blue-fg}Message{/blue-fg} ',
			tags : true,
			keys : true,
			hidden : true,
			vi : true
		});
	
	siteTable._table.on("select", function (arg) {
		var selectedIndex = siteTable.selected();
		
		var row = siteTable._data[selectedIndex];
		
		siteTable._table.hide();
		var website = websiteMap[row[0]];
		
		logger("website.select: " + JSON.stringify(website) + "," + row[0]);
		
		if (onRowSelect instanceof Function) {
			onRowSelect(website, row[0]);
		} else {
			initZentaoTui(website, row[0]);
		}
	});
}

/**
 * 初始化禅道操作信息
 */
function initZentaoTui(website) {
	
	logger("initZentaoTui-start:" + JSON.stringify(website));
	initZentaoAPI(website, function (isSucess, message) {
		logger("initZentaoTui-login-done: status= " + isSucess + ",msg" + message);
		if (isSucess) {
			bugTable = initBugTable();
		} else {
			msg.display(getText('LoginFailed') + ":" + message, 3000, function () {
				destroyTUI();
			});
		}
		
	});
}

/**
 * 初始化并登录禅道
 */
function initZentaoAPI(website, callback) {
	zentaoAPI = new base.ZentaoAPI(website.url, website.account, website.password);
	
	zentaoAPI.isGet().then(function (requestType) {
		logger("initZentaoAPI requestType res, requestType:" + requestType);
		zentaoAPI.login(function (isSucess, msg) {
			logger("initZentaoAPI login res, isSucess:" + isSucess + ", msg:" + msg);
			callback(isSucess, msg);
		});
	});
}

/**
 * 初始化bug列表
 */
function initBugTable() {
	
	var selectedIndex = 0;
	var tabBugSelected = true;
	
	var bugTH = [getText('Select'), getText('BugID'), getText('BugTitle'), getText('BugResolved')];
	var taskTH = [getText('Select'), getText('TaskID'), getText('TaskName'), getText('ConsumedTime'), getText('RemainTime'), getText('TaskFinished')];
	
	bugTable = new ListTable(screen);
	bugTable.setTitle(getText('BugTableTitle'));
	
	bugTable.setTip(getText('BugTableTip'));
	
	bugTable.setHead(bugTH);
	
	var bugButton = blessed.text({
			content : getText(getText('BugTab')),
			top : 1,
			left : 2,
			width : 4,
			aligin : 'center',
			style : {
				fg : '#008000',
				bg : '#C0C0C0'
			}
		});
	
	var renwuButton = blessed.text({
			content : getText(getText('TaskTab')),
			top : 1,
			left : 8,
			width : 4,
			aligin : 'center',
			style : {
				fg : '#fff'
			}
		});
	screen.append(bugButton);
	screen.append(renwuButton);
	
	screen.key("S-s", function () {
		tabBugSelected = !tabBugSelected;
		
		if (tabBugSelected) {
			//BUG列表
			bugButton.style.bg = '#C0C0C0';
			bugButton.style.fg = '#008000';
			
			renwuButton.style.bg = '#000';
			renwuButton.style.fg = '#fff';
			
			bugTable.setHead(bugTH);
			
			zentaoAPI.getBugList(function (bugs) {
				var rows = [];
				for (var i = 0; i < bugs.length; i++) {
					rows.push([getText('UnCheckedIcon'), bugs[i].id, bugs[i].title, '']);
				}
				
				bugTable.setData(rows);
				
				bugTable.focus();
				bugTable.render();
				
			});
		} else {
			//任务列表
			
			renwuButton.style.bg = '#C0C0C0';
			renwuButton.style.fg = '#008000';
			
			bugButton.style.bg = '#000';
			bugButton.style.fg = '#fff';
			
			bugTable.setHead(taskTH);
			
			zentaoAPI.getTaskList(function (tasks) {
				var rows = [];
				for (var i = 0; i < tasks.length; i++) {
					taskConsumedTimeMap[tasks[i].id] = tasks[i].consumed;
					rows.push([getText('UnCheckedIcon'), tasks[i].id, tasks[i].name, tasks[i].consumed, tasks[i].left, '']);
				}
				
				bugTable.setData(rows);
				bugTable.focus();
				bugTable.render();
			});
		}
	});
	
	var okBtn = blessed.button({
			content : getText('OK'),
			top : screen.height - 3,
			left : 4,
			width : 4,
			height : 1,
			aligin : 'center',
			style : {
				fg : '#fff',
				bg : '#00f',
				focus : {
					fg : '#00f',
					bg : '#fff'
				}
			}
		});
	
	var cancleBtn = blessed.button({
			content : getText('Cancel'),
			top : screen.height - 3,
			left : 10,
			width : 8,
			height : 1,
			aligin : 'center',
			style : {
				fg : '#fff',
				bg : '#00f',
				focus : {
					fg : '#00f',
					bg : '#fff'
				}
			}
		});
	
	screen.append(okBtn);
	screen.append(cancleBtn);
	
	screen.key(['space', '0'], function (ev) {
		if (ev == undefined) {
			return true;
		}
		
		selectedIndex = bugTable.selected();
		var isSelected = bugTable._data[selectedIndex][0] == getText('CheckedIcon');
		if (ev == ' ') {
			
			bugTable._data[selectedIndex][0] = isSelected ? getText('UnCheckedIcon') : getText('CheckedIcon');
			
			//任务操作
			if (!tabBugSelected && !isSelected) {
				workTimeDialog(selectedIndex);
			}
			
			bugTable.setTableData(bugTable._data);
		}
		
		//只有选中任务时才触发
		if (ev == '0') {
			
			if (!tabBugSelected) {
				//任务已完成
				workTimeDialog(selectedIndex, true);
			} else {
				//BUG已解决
				var rowData = bugTable._data[selectedIndex];
				rowData[rowData.length - 1] = rowData[rowData.length - 1] == '√' ? ' ' : '√';
				bugTable._data[selectedIndex] = rowData;
				bugTable.setTableData(bugTable._data);
			}
			
		}
		
		bugTable.select(selectedIndex);
		screen.render();
	});
	
	var tabIndexItem = [bugTable._table, okBtn, cancleBtn];
	var tabIndex = 0;
	screen.on('keypress', function (ch, key) {
		if (key.name == 'tab') {
			tabIndex++;
			if (tabIndex > tabIndexItem.length - 1) {
				tabIndex = 0;
			}
			
			tabIndexItem[tabIndex].focus();
		}
		
		screen.render();
	});
	
	okBtn.on('press', function () {
		var arr = getSelected(bugTable);
		generateMessage(arr, tabBugSelected ? "bug" : "task");
		screen.destroy();
	});
	
	cancleBtn.on('press', function () {
		screen.destroy();
	});
	
	screen.render();
	
	zentaoAPI.getBugList(function (bugs) {
		var rows = [];
		for (var i = 0; i < bugs.length; i++) {
			rows.push([getText('UnCheckedIcon'), bugs[i].id, bugs[i].title, '']);
		}
		bugTable.setData(rows);
		bugTable.render();
		bugTable.focus();
		
	});
	
	return bugTable;
}

function getSelected(bugTable) {
	var data = bugTable._data;
	var resArr = [];
	for (var i = 0; i < data.length; i++) {
		if (data[i][0] == getText('CheckedIcon')) {
			resArr.push(data[i]);
		}
	}
	
	return resArr;
}

/**
 * 生成提交日志文件
 */
function generateMessage(arr, type) {
	var msg = [];
	
	for (var i = 0; i < arr.length; i++) {
		var str = "";
		if (type == 'bug') {
			if (arr[i][arr[i].length - 1] == '√') {
				str = "Fix ";
			}
			
			str += type + "#" + arr[i][1] + " " + arr[i][2];
		} else if (type == 'task') {
			if (arr[i][arr[i].length - 1] == '√') {
				str = "Finish ";
			}
			
			var consumed = arr[i][4] == 0 ? arr[i][3] : arr[i][3] - taskConsumedTimeMap[arr[i][1]];
			
			str += type + "#" + arr[i][1] + " " + arr[i][2] + ',cost:' + consumed + ' left:' + arr[i][4];
		}
		
		msg.push(str);
	}
	
	fs.writeFileSync(commitFile, msg.join('\r\n'), 'utf8');
}

/**
 * 工时统计弹窗
 */
function workTimeDialog(selectedIndex, isFinished) {
	
	var isFinished = isFinished || false;
	var form = blessed.form({
			parent : screen,
			mouse : true,
			keys : true,
			vi : true,
			left : 10,
			top : 5,
			width : 70,
			height : 15,
			style : {
				bg : '#0000FF',
				fg : '#fff'
			},
			scrollable : true,
			scrollbar : {
				ch : ' '
			}
		});
	
	var rowData = bugTable._data[selectedIndex];
	var title = blessed.text({
			content : getText('WorkTimeTitle'),
			left : 0,
			top : 0,
			style : {
				fg : '#fff',
				bg : '#0000FF'
			}
		});
	
	form.append(title);
	
	var taskLabel = blessed.text({
			content : getText('TaskName'),
			left : 2,
			top : 3,
			style : {
				fg : '#fff',
				bg : '#0000FF'
			}
		});
	
	form.append(taskLabel);
	
	var taskName = blessed.text({
			content : rowData[2],
			left : 13,
			top : 3,
			style : {
				fg : '#fff',
				bg : '#0000FF'
			}
		});
	
	form.append(taskName);
	
	var consumedLabel = blessed.text({
			content : getText('ConsumedTime'),
			left : 2,
			top : 5,
			style : {
				fg : '#fff',
				bg : '#0000FF'
			}
		});
	
	form.append(consumedLabel);
	
	var consumedTextInput = blessed.textbox({
			parent : form,
			mouse : true,
			keys : true,
			style : {
				bg : '#fff',
				fg : '#000'
			},
			height : 1,
			width : 20,
			left : 13,
			top : 5,
			name : 'consumed'
		});
	
	consumedTextInput.setValue(rowData[3]);
	
	var leftLabel = blessed.text({
			content : getText('RemainTime'),
			left : 2,
			top : 7,
			style : {
				fg : '#fff',
				bg : '#0000FF'
			}
		});
	
	form.append(leftLabel);
	
	var leftTextInput = blessed.textbox({
			parent : form,
			mouse : true,
			keys : true,
			style : {
				bg : '#fff',
				fg : '#000'
			},
			height : 1,
			width : 20,
			left : 13,
			top : 7,
			name : 'left'
		});
	
	leftTextInput.setValue(isFinished ? '0' : rowData[4]);
	
	var okBtn = blessed.button({
			content : getText('OK'),
			top : 11,
			left : 13,
			width : 4,
			height : 1,
			aligin : 'center',
			parent : form,
			style : {
				fg : '#008000',
				bg : '#C0C0C0',
				focus : {
					fg : '#C0C0C0',
					bg : '#008000'
				}
			}
		});
	
	var cancleBtn = blessed.button({
			content : getText('Cancel'),
			top : 11,
			left : 18,
			width : 8,
			height : 1,
			parent : form,
			aligin : 'center',
			style : {
				fg : '#008000',
				bg : '#C0C0C0',
				focus : {
					fg : '#C0C0C0',
					bg : '#008000'
				}
			}
		});
	
	form.focus();
	
	okBtn.on('press', function () {
		form.submit();
	});
	
	cancleBtn.on('press', function () {
		form.hide();
		bugTable.focus();
	});
	
	form.on('submit', function (data) {
		form.hide();
		bugTable.focus();
		
		//已解决
		rowData[3] = data.consumed;
		rowData[4] = data.left;
		rowData[5] = data.left == '0' ? '√' : ' ';
		bugTable._data[selectedIndex] = rowData;
		bugTable.setTableData(bugTable._data);
		bugTable.select(selectedIndex);
		screen.render();
	});
	
	screen.render();
	
	consumedTextInput.on("focus", function () {
		this.readInput();
	});
	
	leftTextInput.on("focus", function () {
		this.readInput();
	});
	
}
