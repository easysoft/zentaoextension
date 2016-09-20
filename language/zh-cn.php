<?php
/* common */
$lang->arrow     = '&nbsp;<i class="icon-angle-right"></i>&nbsp;';
$lang->colon     = '::';
$lang->comma     = '，';
$lang->dot       = '。';
$lang->at        = ' 于 ';
$lang->downArrow = '↓';
$lang->null      = '空';
$lang->ellipsis  = '…';

$lang->zentaoPMS      = '禅道';
$lang->welcome        = "%s项目管理系统";
$lang->logout         = '退出';
$lang->login          = '登录';
$lang->help           = '帮助';
$lang->aboutZenTao    = '关于';
$lang->profile        = '个人档案';
$lang->changePassword = '更改密码';
$lang->runInfo        = "<div class='row'><div class='u-1 a-center' id='debugbar'>时间: %s 毫秒, 内存: %s KB, 查询: %s.  </div></div>";
$lang->agreement      = "已阅读并同意<a href='http://zpl.pub/page/zplv12.html' target='_blank'>《Z PUBLIC LICENSE授权协议1.2》</a>。<span class='text-danger'>未经许可，不得去除、隐藏或遮掩禅道软件的任何标志及链接。</span>";

$lang->reset        = '重填';
$lang->refresh      = '刷新';
$lang->edit         = '编辑';
$lang->delete       = '删除';
$lang->close        = '关闭';
$lang->unlink       = '移除';
$lang->import       = '导入';
$lang->export       = '导出';
$lang->setFileName  = '文件名：';
$lang->submitting   = '稍候...';
$lang->save         = '保存';
$lang->confirm      = '确认';
$lang->preview      = '查看';
$lang->goback       = '返回';
$lang->goPC         = 'PC版';
$lang->more         = '更多';
$lang->day          = '天';
$lang->customConfig = '自定义';
$lang->public       = '公共';

$lang->actions         = '操作';
$lang->comment         = '备注';
$lang->history         = '历史记录';
$lang->attatch         = '附件';
$lang->reverse         = '切换顺序';
$lang->switchDisplay   = '切换显示';
$lang->addFiles        = '上传了附件 ';
$lang->files           = '附件 ';
$lang->pasteText       = '粘贴文本 ';
$lang->uploadImages    = '多图上传 ';
$lang->timeout         = '连接超时，请检查网络环境，或重试！';
$lang->repairTable     = '数据库表可能损坏，请用phpmyadmin或myisamchk检查修复。';
$lang->duplicate       = '已有相同标题的%s';
$lang->ipLimited       = "<html><head><meta http-equiv='Content-Type' content='text/html; charset=utf-8' /></head><body>抱歉，管理员限制当前IP登录，请联系管理员解除限制。</body></html>";
$lang->unfold          = '+';
$lang->fold            = '-';
$lang->homepage        = '设为模块首页';
$lang->tutorial        = '新手教程';
$lang->changeLog       = '修改日志';
$lang->manual          = '手册';
$lang->customMenu      = '自定义导航';
$lang->tutorialConfirm = '检测到你尚未退出新手教程模式，是否现在退出？';

$lang->preShortcutKey  = '[快捷键:←]';
$lang->nextShortcutKey = '[快捷键:→]';

$lang->select        = '选择';
$lang->selectAll     = '全选';
$lang->selectReverse = '反选';
$lang->loading       = '稍候...';
$lang->notFound      = '抱歉，您访问的对象并不存在！';
$lang->showAll       = '[[全部显示]]';

$lang->future       = '未来';
$lang->year         = '年';
$lang->workingHour  = '工时';

$lang->idAB         = 'ID';
$lang->priAB        = 'P';
$lang->statusAB     = '状态';
$lang->openedByAB   = '创建';
$lang->assignedToAB = '指派';
$lang->typeAB       = '类型';

$lang->common = new stdclass();
$lang->common->common = '公有模块';

$lang->menu = new stdclass();
$lang->menu->my       = '<i class="icon-home"></i><span> 我的地盘</span>|my|index';
$lang->menu->product  = $lang->productCommon . '|product|index';
$lang->menu->project  = $lang->projectCommon . '|project|index';
$lang->menu->qa       = '测试|qa|index';
$lang->menu->doc      = '文档|doc|index';
$lang->menu->report   = '统计|report|index';
$lang->menu->company  = '组织|company|index';
$lang->menu->admin    = '后台|admin|index';

$lang->searchObjects['bug']         = 'Bug';
$lang->searchObjects['story']       = '需求';
$lang->searchObjects['task']        = '任务';
$lang->searchObjects['testcase']    = '用例';
$lang->searchObjects['project']     = $lang->projectCommon;
$lang->searchObjects['product']     = $lang->productCommon;
$lang->searchObjects['user']        = '用户';
$lang->searchObjects['build']       = '版本';
$lang->searchObjects['release']     = '发布';
$lang->searchObjects['productplan'] = $lang->productCommon . '计划';
$lang->searchObjects['testtask']    = '测试版本';
$lang->searchObjects['doc']         = '文档';
$lang->searchTips                   = '编号(ctrl+g)';

$lang->importEncodeList['gbk']   = 'GBK';
$lang->importEncodeList['big5']  = 'BIG5';
$lang->importEncodeList['utf-8'] = 'UTF-8';

$lang->exportFileTypeList['csv']  = 'csv';
$lang->exportFileTypeList['xml']  = 'xml';
$lang->exportFileTypeList['html'] = 'html';

$lang->exportTypeList['all']      = '全部记录';
$lang->exportTypeList['selected'] = '选中记录';

$lang->lang = 'Language';

$lang->theme                 = '主题';
$lang->themes['default']     = '默认';
$lang->themes['green']       = '绿色';
$lang->themes['red']         = '红色';
$lang->themes['lightblue']   = '亮蓝';
$lang->themes['blackberry']  = '黑莓';

$lang->index = new stdclass();
$lang->index->menu = new stdclass();

$lang->index->menu->product = "浏览{$lang->productCommon}|product|browse";
$lang->index->menu->project = "浏览{$lang->projectCommon}|project|browse";

$lang->my = new stdclass();
$lang->my->menu = new stdclass();

$lang->my->menu->account        = array('link' => '<span id="myname"><i class="icon-user"></i> %s' . $lang->arrow . '</span>', 'fixed' => true);
$lang->my->menu->index          = '首页|my|index';
$lang->my->menu->todo           = array('link' => '待办|my|todo|', 'subModule' => 'todo');
$lang->my->menu->task           = array('link' => '任务|my|task|', 'subModule' => 'task');
$lang->my->menu->bug            = array('link' => 'Bug|my|bug|',   'subModule' => 'bug');
$lang->my->menu->testtask       = array('link' => '测试|my|testtask|', 'subModule' => 'testcase,testtask', 'alias' => 'testcase');
$lang->my->menu->story          = array('link' => '需求|my|story|',   'subModule' => 'story');
$lang->my->menu->myProject      = "{$lang->projectCommon}|my|project|";
$lang->my->menu->dynamic        = '动态|my|dynamic|';
$lang->my->menu->profile        = array('link' => '档案|my|profile', 'alias' => 'editprofile');
$lang->my->menu->changePassword = '密码|my|changepassword';
$lang->my->menu->manageContacts = '联系人|my|managecontacts';

$lang->todo = new stdclass();
$lang->todo->menu = $lang->my->menu;

$lang->product = new stdclass();
$lang->product->menu = new stdclass();

$lang->product->menu->list    = array('link' => '%s', 'fixed' => true);
$lang->product->menu->story   = array('link' => '需求|product|browse|productID=%s', 'alias' => 'batchedit', 'subModule' => 'story');
$lang->product->menu->dynamic = '动态|product|dynamic|productID=%s';
$lang->product->menu->plan    = array('link' => '计划|productplan|browse|productID=%s', 'subModule' => 'productplan');
$lang->product->menu->release = array('link' => '发布|release|browse|productID=%s',     'subModule' => 'release');
$lang->product->menu->roadmap = '路线图|product|roadmap|productID=%s';
$lang->product->menu->doc     = array('link' => '文档|product|doc|productID=%s', 'subModule' => 'doc');
$lang->product->menu->branch  = '@branch@|branch|manage|productID=%s';
$lang->product->menu->module  = '模块|tree|browse|productID=%s&view=story';
$lang->product->menu->view    = array('link' => '概况|product|view|productID=%s', 'alias' => 'edit');
$lang->product->menu->project = "{$lang->projectCommon}|product|project|status=all&productID=%s";
$lang->product->menu->create  = array('link' => "<i class='icon-plus'></i>&nbsp;添加{$lang->productCommon}|product|create", 'float' => 'right');
$lang->product->menu->all     = array('link' => "<i class='icon-cubes'></i>&nbsp;所有{$lang->productCommon}|product|all|productID=%s", 'float' => 'right');
$lang->product->menu->index   = array('link' => "<i class='icon-home'></i>{$lang->productCommon}主页|product|index|locate=no", 'float' => 'right');

$lang->story       = new stdclass();
$lang->productplan = new stdclass();
$lang->release     = new stdclass();
$lang->branch      = new stdclass();

$lang->branch->menu      = $lang->product->menu;
$lang->story->menu       = $lang->product->menu;
$lang->productplan->menu = $lang->product->menu;
$lang->release->menu     = $lang->product->menu;

$lang->project = new stdclass();
$lang->project->menu = new stdclass();

$lang->project->menu->list      = array('link' => '%s', 'fixed' => true);
$lang->project->menu->task      = array('link' => '任务|project|task|projectID=%s', 'subModule' => 'task,tree', 'alias' => 'grouptask,importtask,burn,importbug,kanban,printkanban,tree');
$lang->project->menu->story     = array('link' => '需求|project|story|projectID=%s', 'subModule' => 'story', 'alias' => 'linkstory');
$lang->project->menu->bug       = 'Bug|project|bug|projectID=%s';
$lang->project->menu->dynamic   = '动态|project|dynamic|projectID=%s';
$lang->project->menu->build     = array('link' => '版本|project|build|projectID=%s', 'subModule' => 'build');
$lang->project->menu->testtask  = '测试|project|testtask|projectID=%s';
$lang->project->menu->team      = array('link' => '团队|project|team|projectID=%s', 'alias' => 'managemembers');
$lang->project->menu->doc       = array('link' => '文档|project|doc|porjectID=%s', 'subModule' => 'doc');
$lang->project->menu->product   = $lang->productCommon . '|project|manageproducts|projectID=%s';
$lang->project->menu->view      = array('link' => '概况|project|view|projectID=%s', 'alias' => 'edit,start,suspend,putoff,close');
$lang->project->menu->create    = array('link' => "<i class='icon-plus'></i>&nbsp;添加{$lang->projectCommon}|project|create", 'float' => 'right');
$lang->project->menu->all       = array('link' => "<i class='icon-th-large'></i>&nbsp;所有{$lang->projectCommon}|project|all|status=undone&projectID=%s", 'float' => 'right');
$lang->project->menu->index     = array('link' => "<i class='icon-home'></i>{$lang->projectCommon}主页|project|index|locate=no", 'float' => 'right');

$lang->task  = new stdclass();
$lang->build = new stdclass();
$lang->task->menu  = $lang->project->menu;
$lang->build->menu = $lang->project->menu;

$lang->qa = new stdclass();
$lang->qa->menu = new stdclass();

$lang->qa->menu->product  = array('link' => '%s', 'fixed' => true);
$lang->qa->menu->bug      = array('link' => 'Bug|bug|browse|productID=%s');
$lang->qa->menu->testcase = array('link' => '用例|testcase|browse|productID=%s');
$lang->qa->menu->testtask = array('link' => '版本|testtask|browse|productID=%s');
$lang->qa->menu->index    = array('link' => "<i class='icon-home'></i>测试主页|qa|index|locate=no&productID=%s", 'float' => 'right');

$lang->bug = new stdclass();
$lang->bug->menu = new stdclass();

$lang->bug->menu->product  = array('link' => '%s', 'fixed' => true);
$lang->bug->menu->bug      = array('link' => 'Bug|bug|browse|productID=%s', 'alias' => 'view,create,batchcreate,edit,resolve,close,activate,report,batchedit,confirmbug,assignto', 'subModule' => 'tree');
$lang->bug->menu->testcase = array('link' => '用例|testcase|browse|productID=%s');
$lang->bug->menu->testtask = array('link' => '版本|testtask|browse|productID=%s');
$lang->bug->menu->index    = array('link' => "<i class='icon-home'></i>测试主页|qa|index|locate=no&productID=%s", 'float' => 'right');

$lang->testcase = new stdclass();
$lang->testcase->menu = new stdclass();

$lang->testcase->menu->product  = array('link' => '%s', 'fixed' => true);
$lang->testcase->menu->bug      = array('link' => 'Bug|bug|browse|productID=%s');
$lang->testcase->menu->testcase = array('link' => '用例|testcase|browse|productID=%s', 'alias' => 'view,create,batchcreate,edit,batchedit,showimport,groupcase', 'subModule' => 'tree');
$lang->testcase->menu->testtask = array('link' => '版本|testtask|browse|productID=%s', 'alias' => 'view,create,edit,linkcase,cases,start,close,batchrun,groupcase');
$lang->testcase->menu->index    = array('link' => "<i class='icon-home'></i>测试主页|qa|index|locate=no&productID=%s", 'float' => 'right');

$lang->testtask = new stdclass();
$lang->testtask->menu = $lang->testcase->menu;

$lang->doc = new stdclass();
$lang->doc->menu = new stdclass();

$lang->doc->menu->list    = array('link' => '%s', 'fixed' => true);
$lang->doc->menu->browse  = array('link' => '文档|doc|browse|libID=%s', 'alias' => 'view,create,edit');
$lang->doc->menu->edit    = '编辑|doc|editLib|libID=%s';
$lang->doc->menu->module  = '分类|tree|browse|libID=%s&viewType=doc';
$lang->doc->menu->delete  = array('link' => '删除|doc|deleteLib|libID=%s', 'target' => 'hiddenwin');
$lang->doc->menu->create  = array('link' => '<i class="icon-plus"></i>&nbsp;添加文档库|doc|createLib', 'float' => 'right');

$lang->report = new stdclass();
$lang->report->menu = new stdclass();

$lang->report->menu->product = array('link' => $lang->productCommon . '|report|productsummary');
$lang->report->menu->prj     = array('link' => $lang->projectCommon . '|report|projectdeviation');
$lang->report->menu->test    = array('link' => '测试|report|bugcreate', 'alias' => 'bugassign');
$lang->report->menu->staff   = array('link' => '组织|report|workload');

$lang->company = new stdclass();
$lang->company->menu = new stdclass();
$lang->company->menu->name         = array('link' => '%s' . $lang->arrow, 'fixed' => true);
$lang->company->menu->browseUser   = array('link' => '用户|company|browse', 'subModule' => 'user');
$lang->company->menu->dept         = array('link' => '部门|dept|browse', 'subModule' => 'dept');
$lang->company->menu->browseGroup  = array('link' => '权限|group|browse', 'subModule' => 'group');
$lang->company->menu->view         = array('link' => '公司|company|view', 'alias' => 'edit');
$lang->company->menu->dynamic      = '动态|company|dynamic|';
$lang->company->menu->addGroup     = array('link' => '<i class="icon-group"></i>&nbsp;添加分组|group|create', 'float' => 'right');
$lang->company->menu->batchAddUser = array('link' => '<i class="icon-plus-sign"></i>&nbsp;批量添加|user|batchCreate|dept=%s', 'subModule' => 'user', 'float' => 'right');
$lang->company->menu->addUser      = array('link' => '<i class="icon-plus"></i>&nbsp;添加用户|user|create|dept=%s', 'subModule' => 'user', 'float' => 'right');

$lang->dept  = new stdclass();
$lang->group = new stdclass();
$lang->user  = new stdclass();

$lang->dept->menu  = $lang->company->menu;
$lang->group->menu = $lang->company->menu;
$lang->user->menu  = $lang->company->menu;

$lang->admin = new stdclass();
$lang->admin->menu = new stdclass();
$lang->admin->menu->index     = array('link' => '首页|admin|index');
$lang->admin->menu->extension = array('link' => '插件|extension|browse', 'subModule' => 'extension');
$lang->admin->menu->custom    = array('link' => '自定义|custom|index', 'subModule' => 'custom');
$lang->admin->menu->mail      = array('link' => '发信|mail|index', 'subModule' => 'mail');
$lang->admin->menu->convert   = array('link' => '导入|convert|index', 'subModule' => 'convert');
$lang->admin->menu->backup    = array('link' => '备份|backup|index', 'subModule' => 'backup');
$lang->admin->menu->safe      = array('link' => '安全|admin|safe', 'alias' => 'checkweak');
$lang->admin->menu->cron      = array('link' => '计划任务|cron|index', 'subModule' => 'cron');
$lang->admin->menu->trashes   = array('link' => '回收站|action|trash', 'subModule' => 'action');
$lang->admin->menu->dev       = array('link' => '二次开发|dev|api', 'alias' => 'db', 'subModule' => 'dev,editor');
$lang->admin->menu->sso       = '然之集成|admin|sso';

$lang->convert   = new stdclass();
$lang->upgrade   = new stdclass();
$lang->action    = new stdclass();
$lang->backup    = new stdclass();
$lang->extension = new stdclass();
$lang->custom    = new stdclass();
$lang->editor    = new stdclass();
$lang->mail      = new stdclass();
$lang->cron      = new stdclass();
$lang->dev       = new stdclass();
$lang->search    = new stdclass();

$lang->convert->menu   = $lang->admin->menu;
$lang->upgrade->menu   = $lang->admin->menu;
$lang->action->menu    = $lang->admin->menu;
$lang->backup->menu    = $lang->admin->menu;
$lang->cron->menu      = $lang->admin->menu;
$lang->extension->menu = $lang->admin->menu;
$lang->custom->menu    = $lang->admin->menu;
$lang->editor->menu    = $lang->admin->menu;
$lang->mail->menu      = $lang->admin->menu;
$lang->dev->menu       = $lang->admin->menu;

$lang->menugroup = new stdclass();
$lang->menugroup->release     = 'product';
$lang->menugroup->story       = 'product';
$lang->menugroup->branch      = 'product';
$lang->menugroup->productplan = 'product';
$lang->menugroup->task        = 'project';
$lang->menugroup->build       = 'project';
$lang->menugroup->convert     = 'admin';
$lang->menugroup->upgrade     = 'admin';
$lang->menugroup->user        = 'company';
$lang->menugroup->group       = 'company';
$lang->menugroup->bug         = 'qa';
$lang->menugroup->testcase    = 'qa';
$lang->menugroup->testtask    = 'qa';
$lang->menugroup->people      = 'company';
$lang->menugroup->dept        = 'company';
$lang->menugroup->todo        = 'my';
$lang->menugroup->action      = 'admin';
$lang->menugroup->backup      = 'admin';
$lang->menugroup->cron        = 'admin';
$lang->menugroup->extension   = 'admin';
$lang->menugroup->custom      = 'admin';
$lang->menugroup->editor      = 'admin';
$lang->menugroup->mail        = 'admin';
$lang->menugroup->dev         = 'admin';

$lang->error = new stdclass();
$lang->error->companyNotFound = "您访问的域名 %s 没有对应的公司。";
$lang->error->length          = array("『%s』长度错误，应当为『%s』", "『%s』长度应当不超过『%s』，且不小于『%s』。");
$lang->error->reg             = "『%s』不符合格式，应当为:『%s』。";
$lang->error->unique          = "『%s』已经有『%s』这条记录了。如果您确定该记录已删除，请到后台管理-回收站还原。。";
$lang->error->gt              = "『%s』应当大于『%s』。";
$lang->error->ge              = "『%s』应当不小于『%s』。";
$lang->error->notempty        = "『%s』不能为空。";
$lang->error->empty           = "『%s』必须为空。";
$lang->error->equal           = "『%s』必须为『%s』。";
$lang->error->int             = array("『%s』应当是数字。", "『%s』应当介于『%s-%s』之间。");
$lang->error->float           = "『%s』应当是数字，可以是小数。";
$lang->error->email           = "『%s』应当为合法的EMAIL。";
$lang->error->date            = "『%s』应当为合法的日期。";
$lang->error->account         = "『%s』应当为合法的用户名。";
$lang->error->passwordsame    = "两次密码应当相等。";
$lang->error->passwordrule    = "密码应该符合规则，长度至少为六位。";
$lang->error->accessDenied    = '您没有访问权限';
$lang->error->pasteImg        = '您的浏览器不支持粘贴图片！';
$lang->error->noData          = '没有数据';
$lang->error->editedByOther   = '该记录可能已经被改动。请刷新页面重新编辑！';
$lang->error->tutorialData    = '新手模式下不会插入数据，请退出新手模式操作';

$lang->pager = new stdclass();
$lang->pager->noRecord  = "暂时没有记录";
$lang->pager->digest    = "共 <strong>%s</strong> 条记录，%s <strong>%s/%s</strong> &nbsp; ";
$lang->pager->recPerPage= "每页 <strong>%s</strong> 条";
$lang->pager->first     = "<i class='icon-step-backward' title='首页'></i>";
$lang->pager->pre       = "<i class='icon-play icon-rotate-180' title='上一页'></i>";
$lang->pager->next      = "<i class='icon-play' title='下一页'></i>";
$lang->pager->last      = "<i class='icon-step-forward' title='末页'></i>";
$lang->pager->locate    = "GO!";

$lang->proVersion     = "<a href='http://api.zentao.net/goto.php?item=proversion&from=footer' target='_blank' id='proLink' class='text-important'>专业版 <i class='text-danger icon-pro-version'></i></a> &nbsp; ";
$lang->downNotify     = "下载桌面提醒";

$lang->suhosinInfo   = "警告：数据太多，请在php.ini中修改<font color=red>sohusin.post.max_vars</font>和<font color=red>sohusin.request.max_vars</font>（设置更大的数）。 保存并重新启动apache，否则会造成部分数据无法保存。";
$lang->pasteTextInfo = "粘贴文本到文本域中，每行文字作为一条数据的标题。";
$lang->noticeImport  = "<p style='font-size:14px'>导入数据中，含有已经存在系统的数据，请确认这些数据要覆盖或者全新插入</p><p><a href='javascript:submitForm(\"cover\")' class='btn btn-mini'>覆盖</a> <a href='javascript:submitForm(\"insert\")' class='btn btn-mini'>全新插入</a></p>";

$lang->noResultsMatch     = "没有匹配结果";
$lang->searchMore         = "搜索此关键字的更多结果：";
$lang->chooseUsersToMail  = "选择要发信通知的用户...";
$lang->browserNotice      = '你目前使用的浏览器可能无法得到最佳浏览效果，建议使用Chrome、火狐、IE9+、Opera、Safari浏览器。';

define('DT_DATETIME1',  'Y-m-d H:i:s');
define('DT_DATETIME2',  'y-m-d H:i');
define('DT_MONTHTIME1', 'n/d H:i');
define('DT_MONTHTIME2', 'n月d日 H:i');
define('DT_DATE1',     'Y-m-d');
define('DT_DATE2',     'Ymd');
define('DT_DATE3',     'Y年m月d日');
define('DT_DATE4',     'n月j日');
define('DT_TIME1',     'H:i:s');
define('DT_TIME2',     'H:i');

$lang->datepicker = new stdclass();

$lang->datepicker->dpText = new stdclass();
$lang->datepicker->dpText->TEXT_OR          = '或 ';
$lang->datepicker->dpText->TEXT_PREV_YEAR   = '去年';
$lang->datepicker->dpText->TEXT_PREV_MONTH  = '上月';
$lang->datepicker->dpText->TEXT_PREV_WEEK   = '上周';
$lang->datepicker->dpText->TEXT_YESTERDAY   = '昨天';
$lang->datepicker->dpText->TEXT_THIS_MONTH  = '本月';
$lang->datepicker->dpText->TEXT_THIS_WEEK   = '本周';
$lang->datepicker->dpText->TEXT_TODAY       = '今天';
$lang->datepicker->dpText->TEXT_NEXT_YEAR   = '明年';
$lang->datepicker->dpText->TEXT_NEXT_MONTH  = '下月';
$lang->datepicker->dpText->TEXT_CLOSE       = '关闭';
$lang->datepicker->dpText->TEXT_DATE        = '选择时间段';
$lang->datepicker->dpText->TEXT_CHOOSE_DATE = '选择日期';

$lang->datepicker->dayNames     = array('日', '一', '二', '三', '四', '五', '六');
$lang->datepicker->abbrDayNames = array('日', '一', '二', '三', '四', '五', '六');
$lang->datepicker->monthNames   = array('一月', '二月', '三月', '四月', '五月', '六月', '七月', '八月', '九月', '十月', '十一月', '十二月');

$lang->icons['todo']      = 'check';
$lang->icons['product']   = 'cube';
$lang->icons['bug']       = 'bug';
$lang->icons['task']      = 'check-sign';
$lang->icons['tasks']     = 'tasks';
$lang->icons['project']   = 'folder-close-alt';
$lang->icons['doc']       = 'file-text';
$lang->icons['doclib']    = 'folder-close';
$lang->icons['story']     = 'lightbulb';
$lang->icons['release']   = 'tags';
$lang->icons['roadmap']   = 'code-fork';
$lang->icons['plan']      = 'flag';
$lang->icons['dynamic']   = 'volume-up';
$lang->icons['build']     = 'tag';
$lang->icons['test']      = 'check';
$lang->icons['testtask']  = 'check';
$lang->icons['group']     = 'group';
$lang->icons['team']      = 'group';
$lang->icons['company']   = 'building';
$lang->icons['user']      = 'user';
$lang->icons['dept']      = 'sitemap';
$lang->icons['tree']      = 'sitemap';
$lang->icons['usecase']   = 'sitemap';
$lang->icons['testcase']  = 'smile';
$lang->icons['result']    = 'list-alt';
$lang->icons['mail']      = 'envelope';
$lang->icons['trash']     = 'trash';
$lang->icons['extension'] = 'th-large';
$lang->icons['app']       = 'th-large';

$lang->icons['results']        = 'list-alt';
$lang->icons['create']         = 'plus';
$lang->icons['post']           = 'edit';
$lang->icons['batchCreate']    = 'plus-sign';
$lang->icons['batchEdit']      = 'edit-sign';
$lang->icons['batchClose']     = 'off';
$lang->icons['edit']           = 'pencil';
$lang->icons['delete']         = 'remove';
$lang->icons['copy']           = 'copy';
$lang->icons['report']         = 'bar-chart';
$lang->icons['export']         = 'download-alt';
$lang->icons['report-file']    = 'file-powerpoint';
$lang->icons['import']         = 'upload-alt';
$lang->icons['finish']         = 'ok-sign';
$lang->icons['resolve']        = 'ok-sign';
$lang->icons['start']          = 'play';
$lang->icons['restart']        = 'play';
$lang->icons['run']            = 'play';
$lang->icons['runCase']        = 'play';
$lang->icons['batchRun']       = 'play-sign';
$lang->icons['assign']         = 'hand-right';
$lang->icons['assignTo']       = 'hand-right';
$lang->icons['change']         = 'random';
$lang->icons['link']           = 'link';
$lang->icons['close']          = 'off';
$lang->icons['activate']       = 'off';
$lang->icons['review']         = 'search';
$lang->icons['confirm']        = 'search';
$lang->icons['confirmBug']     = 'search';
$lang->icons['putoff']         = 'calendar';
$lang->icons['suspend']        = 'pause';
$lang->icons['pause']          = 'pause';
$lang->icons['cancel']         = 'ban-circle';
$lang->icons['recordEstimate'] = 'time';
$lang->icons['customFields']   = 'cogs';
$lang->icons['manage']         = 'cog';
$lang->icons['unlock']         = 'unlock-alt';
$lang->icons['confirmStoryChange'] = 'search';

include (dirname(__FILE__) . '/menuOrder.php');
/* action */
$lang->action->common     = '系统日志';
$lang->action->product    = $lang->productCommon;
$lang->action->project    = $lang->projectCommon;
$lang->action->objectType = '对象类型';
$lang->action->objectID   = '对象ID';
$lang->action->objectName = '对象名称';
$lang->action->actor      = '操作者';
$lang->action->action     = '动作';
$lang->action->date       = '日期';

$lang->action->trash       = '回收站';
$lang->action->undelete    = '还原';
$lang->action->hideOne     = '隐藏';
$lang->action->hideAll     = '全部隐藏';
$lang->action->editComment = '修改备注';

$lang->action->trashTips      = '提示：为了保证系统的完整性，禅道系统的删除都是标记删除。';
$lang->action->textDiff       = '文本格式';
$lang->action->original       = '原始格式';
$lang->action->confirmHideAll = '您确定要全部隐藏这些记录吗？';
$lang->action->needEdit       = '要还原%s的名称或代号已经存在，请编辑更改。';

$lang->action->dynamic = new stdclass();
$lang->action->dynamic->today      = '今天';
$lang->action->dynamic->yesterday  = '昨天';
$lang->action->dynamic->twoDaysAgo = '前天';
$lang->action->dynamic->thisWeek   = '本周';
$lang->action->dynamic->lastWeek   = '上周';
$lang->action->dynamic->thisMonth  = '本月';
$lang->action->dynamic->lastMonth  = '上月';
$lang->action->dynamic->all        = '所有';
$lang->action->dynamic->hidden     = '已隐藏';
$lang->action->dynamic->search     = '搜索';

$lang->action->objectTypes['product']     = $lang->productCommon;
$lang->action->objectTypes['story']       = '需求';
$lang->action->objectTypes['productplan'] = '计划';
$lang->action->objectTypes['release']     = '发布';
$lang->action->objectTypes['project']     = $lang->projectCommon;
$lang->action->objectTypes['task']        = '任务';
$lang->action->objectTypes['build']       = 'Build';
$lang->action->objectTypes['bug']         = 'Bug';
$lang->action->objectTypes['case']        = '用例';
$lang->action->objectTypes['caseresult']  = '用例结果';
$lang->action->objectTypes['stepresult']  = '用例步骤';
$lang->action->objectTypes['testtask']    = '测试任务';
$lang->action->objectTypes['user']        = '用户';
$lang->action->objectTypes['doc']         = '文档';
$lang->action->objectTypes['doclib']      = '文档库';
$lang->action->objectTypes['todo']        = '待办';
$lang->action->objectTypes['branch']      = '分支';

$lang->action->desc = new stdclass();
$lang->action->desc->common         = '$date, <strong>$action</strong> by <strong>$actor</strong>。' . "\n";
$lang->action->desc->extra          = '$date, <strong>$action</strong> as <strong>$extra</strong> by <strong>$actor</strong>。' . "\n";
$lang->action->desc->opened         = '$date, 由 <strong>$actor</strong> 创建。' . "\n";
$lang->action->desc->created        = '$date, 由 <strong>$actor</strong> 创建。' . "\n";
$lang->action->desc->changed        = '$date, 由 <strong>$actor</strong> 变更。' . "\n";
$lang->action->desc->edited         = '$date, 由 <strong>$actor</strong> 编辑。' . "\n";
$lang->action->desc->assigned       = '$date, 由 <strong>$actor</strong> 指派给 <strong>$extra</strong>。' . "\n";
$lang->action->desc->closed         = '$date, 由 <strong>$actor</strong> 关闭。' . "\n";
$lang->action->desc->deleted        = '$date, 由 <strong>$actor</strong> 删除。' . "\n";
$lang->action->desc->deletedfile    = '$date, 由 <strong>$actor</strong> 删除了附件：<strong><i>$extra</i></strong>。' . "\n";
$lang->action->desc->editfile       = '$date, 由 <strong>$actor</strong> 编辑了附件：<strong><i>$extra</i></strong>。' . "\n";
$lang->action->desc->erased         = '$date, 由 <strong>$actor</strong> 删除。' . "\n";
$lang->action->desc->undeleted      = '$date, 由 <strong>$actor</strong> 还原。' . "\n";
$lang->action->desc->hidden         = '$date, 由 <strong>$actor</strong> 隐藏。' . "\n";
$lang->action->desc->commented      = '$date, 由 <strong>$actor</strong> 添加备注。' . "\n";
$lang->action->desc->activated      = '$date, 由 <strong>$actor</strong> 激活。' . "\n";
$lang->action->desc->moved          = '$date, 由 <strong>$actor</strong> 移动，之前为 "$extra"。' . "\n";
$lang->action->desc->confirmed      = '$date, 由 <strong>$actor</strong> 确认需求变动，最新版本为<strong>#$extra</strong>。' . "\n";
$lang->action->desc->caseconfirmed  = '$date, 由 <strong>$actor</strong> 确认用例变动，最新版本为<strong>#$extra</strong>。' . "\n";
$lang->action->desc->bugconfirmed   = '$date, 由 <strong>$actor</strong> 确认Bug。' . "\n";
$lang->action->desc->frombug        = '$date, 由 <strong>$actor</strong> Bug转化而来，Bug编号为 <strong>$extra</strong>。';
$lang->action->desc->started        = '$date, 由 <strong>$actor</strong> 启动。' . "\n";
$lang->action->desc->restarted      = '$date, 由 <strong>$actor</strong> 继续。' . "\n";
$lang->action->desc->delayed        = '$date, 由 <strong>$actor</strong> 延期。' . "\n";
$lang->action->desc->suspended      = '$date, 由 <strong>$actor</strong> 挂起。' . "\n";
$lang->action->desc->recordestimate = '$date, 由 <strong>$actor</strong> 记录工时，消耗 <strong>$extra</strong> 小时。';
$lang->action->desc->editestimate   = '$date, 由 <strong>$actor</strong> 编辑工时。';
$lang->action->desc->deleteestimate = '$date, 由 <strong>$actor</strong> 删除工时。';
$lang->action->desc->canceled       = '$date, 由 <strong>$actor</strong> 取消。' . "\n";
$lang->action->desc->svncommited    = '$date, 由 <strong>$actor</strong> 提交代码，版本为<strong>#$extra</strong>。' . "\n";
$lang->action->desc->gitcommited    = '$date, 由 <strong>$actor</strong> 提交代码，版本为<strong>#$extra</strong>。' . "\n";
$lang->action->desc->finished       = '$date, 由 <strong>$actor</strong> 完成。' . "\n";
$lang->action->desc->paused         = '$date, 由 <strong>$actor</strong> 暂停。' . "\n";
$lang->action->desc->diff1          = '修改了 <strong><i>%s</i></strong>，旧值为 "%s"，新值为 "%s"。<br />' . "\n";
$lang->action->desc->diff2          = '修改了 <strong><i>%s</i></strong>，区别为：' . "\n" . "<blockquote>%s</blockquote>" . "\n<div class='hidden'>%s</div>";
$lang->action->desc->diff3          = '将文件名 %s 改为 %s 。' . "\n";

$lang->action->desc->linkrelatedcase   = '$date, 由 <strong>$actor</strong> 关联相关用例 <strong>$extra</strong>。' . "\n";
$lang->action->desc->unlinkrelatedcase = '$date, 由 <strong>$actor</strong> 移除相关用例 <strong>$extra</strong>。' . "\n";

$lang->action->label = new stdclass();
$lang->action->label->created             = '创建';
$lang->action->label->opened              = '创建';
$lang->action->label->changed             = '变更了';
$lang->action->label->edited              = '编辑了';
$lang->action->label->assigned            = '指派了';
$lang->action->label->closed              = '关闭了';
$lang->action->label->deleted             = '删除了';
$lang->action->label->deletedfile         = '删除附件';
$lang->action->label->editfile            = '编辑附件';
$lang->action->label->erased              = '删除了';
$lang->action->label->undeleted           = '还原了';
$lang->action->label->hidden              = '隐藏了';
$lang->action->label->commented           = '评论了';
$lang->action->label->activated           = '激活了';
$lang->action->label->resolved            = '解决了';
$lang->action->label->reviewed            = '评审了';
$lang->action->label->moved               = '移动了';
$lang->action->label->confirmed           = '确认了需求，';
$lang->action->label->bugconfirmed        = '确认了';
$lang->action->label->tostory             = '转需求';
$lang->action->label->frombug             = '转需求';
$lang->action->label->totask              = '转任务';
$lang->action->label->svncommited         = '提交代码';
$lang->action->label->gitcommited         = '提交代码';
$lang->action->label->linked2plan         = '关联计划';
$lang->action->label->unlinkedfromplan    = '移除计划';
$lang->action->label->changestatus        = '修改状态';
$lang->action->label->marked              = '编辑了';
$lang->action->label->linked2project      = "关联{$lang->projectCommon}";
$lang->action->label->unlinkedfromproject = "移除{$lang->projectCommon}";
$lang->action->label->linkrelatedbug      = "关联了相关Bug";
$lang->action->label->unlinkrelatedbug    = "移除了相关Bug";
$lang->action->label->linkrelatedcase     = "关联了相关用例";
$lang->action->label->unlinkrelatedcase   = "移除了相关用例";
$lang->action->label->linkrelatedstory    = "关联了相关需求";
$lang->action->label->unlinkrelatedstory  = "移除了相关需求";
$lang->action->label->subdividestory      = "细分了需求";
$lang->action->label->unlinkchildstory    = "移除了细分需求";
$lang->action->label->started             = '开始了';
$lang->action->label->restarted           = '继续了';
$lang->action->label->recordestimate      = '记录了工时';
$lang->action->label->editestimate        = '编辑了工时';
$lang->action->label->canceled            = '取消了';
$lang->action->label->finished            = '完成了';
$lang->action->label->paused              = '暂停了';
$lang->action->label->delayed             = '延期';
$lang->action->label->suspended           = '挂起';
$lang->action->label->login               = '登录系统';
$lang->action->label->logout              = "退出登录";
$lang->action->label->deleteestimate      = "删除了工时";

$lang->action->label->product     = $lang->productCommon . '|product|view|productID=%s';
$lang->action->label->productplan = '计划|productplan|view|productID=%s';
$lang->action->label->release     = '发布|release|view|productID=%s';
$lang->action->label->story       = '需求|story|view|storyID=%s';
$lang->action->label->project     = "{$lang->projectCommon}|project|view|projectID=%s";
$lang->action->label->task        = '任务|task|view|taskID=%s';
$lang->action->label->build       = 'Build|build|view|buildID=%s';
$lang->action->label->bug         = 'Bug|bug|view|bugID=%s';
$lang->action->label->case        = '用例|testcase|view|caseID=%s';
$lang->action->label->testtask    = '测试任务|testtask|view|caseID=%s';
$lang->action->label->todo        = 'todo|todo|view|todoID=%s';
$lang->action->label->doclib      = '文档库|doc|browse|libID=%s';
$lang->action->label->doc         = '文档|doc|view|docID=%s';
$lang->action->label->user        = '用户|user|view|account=%s';
$lang->action->label->space       = ' ';

$lang->action->search->objectTypeList['']            = '';    
$lang->action->search->objectTypeList['product']     = $lang->productCommon;
$lang->action->search->objectTypeList['project']     = $lang->projectCommon;
$lang->action->search->objectTypeList['bug']         = 'Bug';
$lang->action->search->objectTypeList['case']        = '用例'; 
$lang->action->search->objectTypeList['caseresult']  = '用例结果';
$lang->action->search->objectTypeList['stepresult']  = '用例步骤';
$lang->action->search->objectTypeList['story']       = '需求';  
$lang->action->search->objectTypeList['task']        = '任务'; 
$lang->action->search->objectTypeList['testtask']    = '测试任务';     
$lang->action->search->objectTypeList['user']        = '用户'; 
$lang->action->search->objectTypeList['doc']         = '文档';
$lang->action->search->objectTypeList['doclib']      = '文档库';
$lang->action->search->objectTypeList['todo']        = '待办';
$lang->action->search->objectTypeList['build']       = 'Build';
$lang->action->search->objectTypeList['release']     = '发布';
$lang->action->search->objectTypeList['productplan'] = '计划';
$lang->action->search->objectTypeList['branch']      = '分支';

$lang->action->search->label['']                    = '';
$lang->action->search->label['created']             = $lang->action->label->created;
$lang->action->search->label['opened']              = $lang->action->label->opened;
$lang->action->search->label['changed']             = $lang->action->label->changed;
$lang->action->search->label['edited']              = $lang->action->label->edited;
$lang->action->search->label['assigned']            = $lang->action->label->assigned;
$lang->action->search->label['closed']              = $lang->action->label->closed;
$lang->action->search->label['deleted']             = $lang->action->label->deleted;
$lang->action->search->label['deletedfile']         = $lang->action->label->deletedfile;
$lang->action->search->label['editfile']            = $lang->action->label->editfile;
$lang->action->search->label['erased']              = $lang->action->label->erased;
$lang->action->search->label['undeleted']           = $lang->action->label->undeleted;
$lang->action->search->label['hidden']              = $lang->action->label->hidden;
$lang->action->search->label['commented']           = $lang->action->label->commented;
$lang->action->search->label['activated']           = $lang->action->label->activated;
$lang->action->search->label['resolved']            = $lang->action->label->resolved;
$lang->action->search->label['reviewed']            = $lang->action->label->reviewed;
$lang->action->search->label['moved']               = $lang->action->label->moved;
$lang->action->search->label['confirmed']           = $lang->action->label->confirmed;
$lang->action->search->label['bugconfirmed']        = $lang->action->label->bugconfirmed;
$lang->action->search->label['tostory']             = $lang->action->label->tostory;
$lang->action->search->label['frombug']             = $lang->action->label->frombug;
$lang->action->search->label['totask']              = $lang->action->label->totask;
$lang->action->search->label['svncommited']         = $lang->action->label->svncommited;
$lang->action->search->label['gitcommited']         = $lang->action->label->gitcommited;
$lang->action->search->label['linked2plan']         = $lang->action->label->linked2plan;
$lang->action->search->label['unlinkedfromplan']    = $lang->action->label->unlinkedfromplan;
$lang->action->search->label['changestatus']        = $lang->action->label->changestatus;
$lang->action->search->label['marked']              = $lang->action->label->marked;
$lang->action->search->label['linked2project']      = $lang->action->label->linked2project;
$lang->action->search->label['unlinkedfromproject'] = $lang->action->label->unlinkedfromproject;
$lang->action->search->label['started']             = $lang->action->label->started;
$lang->action->search->label['restarted']           = $lang->action->label->restarted;
$lang->action->search->label['recordestimate']      = $lang->action->label->recordestimate;
$lang->action->search->label['editestimate']        = $lang->action->label->editestimate;
$lang->action->search->label['canceled']            = $lang->action->label->canceled;
$lang->action->search->label['finished']            = $lang->action->label->finished;
$lang->action->search->label['paused']              = $lang->action->label->paused;
$lang->action->search->label['login']               = $lang->action->label->login;
$lang->action->search->label['logout']              = $lang->action->label->logout;
/* admin */
$lang->admin->common  = '后台管理';
$lang->admin->index   = '后台管理首页';
$lang->admin->checkDB = '检查数据库';
$lang->admin->sso     = '然之集成';
$lang->admin->safeIndex = '安全';
$lang->admin->checkWeak = '弱口令检查';

$lang->admin->info = new stdclass();
$lang->admin->info->version = '当前系统的版本是%s，';
$lang->admin->info->links   = '您可以访问以下链接：';
$lang->admin->info->account = "您的禅道社区账户为%s。";

$lang->admin->notice = new stdclass();
$lang->admin->notice->register = "友情提示：您还未在禅道社区(www.zentao.net)登记，%s进行登记，以及时获得禅道最新信息。";
$lang->admin->notice->ignore   = "不再提示";

$lang->admin->register = new stdclass();
$lang->admin->register->caption    = '禅道社区登记';
$lang->admin->register->click      = '点击此处';
$lang->admin->register->lblAccount = '请设置您的用户名，英文字母和数字的组合，三位以上。';
$lang->admin->register->lblPasswd  = '请设置您的密码。数字和字母的组合，六位以上。';
$lang->admin->register->submit     = '登记';
$lang->admin->register->bind       = "如果您已经拥有社区帐号，%s关联账户";
$lang->admin->register->success    = "登记账户成功";

$lang->admin->bind = new stdclass();
$lang->admin->bind->caption = '关联社区帐号';
$lang->admin->bind->success = "关联账户成功";

$lang->admin->safe = new stdclass();
$lang->admin->safe->common    = '安全';
$lang->admin->safe->set       = '密码安全设置';
$lang->admin->safe->password  = '密码安全';
$lang->admin->safe->weak      = '常用弱口令';
$lang->admin->safe->reason    = '类型';
$lang->admin->safe->checkWeak = '弱口令扫描';

$lang->admin->safe->modeList[0] = '不检查';
$lang->admin->safe->modeList[1] = '中';
$lang->admin->safe->modeList[2] = '强';

$lang->admin->safe->reasonList['weak']     = '常用弱口令';
$lang->admin->safe->reasonList['account']  = '与帐号相同';
$lang->admin->safe->reasonList['mobile']   = '与手机相同';
$lang->admin->safe->reasonList['phone']    = '与电话相同';
$lang->admin->safe->reasonList['birthday'] = '与生日相同';

$lang->admin->safe->noticeMode   = '系统会在登录、创建和修改用户、修改密码的时候检查用户口令。';
$lang->admin->safe->noticeStrong = '密码长度越长，含有大写字母或数字或特殊符合越多，密码字母越不重复，安全度越强！';
/* api */
$lang->api = new stdclass();
$lang->api->common   = 'API接口';
$lang->api->getModel = '超级model调用接口';
$lang->api->sql      = 'SQL查询接口';

$lang->api->position  = '位置';
$lang->api->startLine = "%s,%s行";
$lang->api->desc      = '描述';
$lang->api->debug     = '调试';
$lang->api->submit    = '提交';
$lang->api->url       = '请求地址';
$lang->api->result    = '返回结果';
$lang->api->status    = '状态';
$lang->api->data      = '内容';
$lang->api->noParam   = 'GET方式调试不需要输入参数，';
$lang->api->post      = 'POST方式调试请参照页面表单';

$lang->api->error = new stdclass();
$lang->api->error->onlySelect = 'SQL查询接口只允许SELECT查询';
/* backup */
$lang->backup->common   = '备份';
$lang->backup->index    = '备份首页';
$lang->backup->history  = '备份历史';
$lang->backup->delete   = '删除备份';
$lang->backup->backup   = '备份';
$lang->backup->restore  = '还原';
$lang->backup->change   = '修改保留时间';
$lang->backup->changeAB = '修改';

$lang->backup->time  = '备份时间';
$lang->backup->files = '备份文件';
$lang->backup->size  = '大小';

$lang->backup->waitting       = '<span id="backupType"></span>正在进行中，请稍候...';
$lang->backup->confirmDelete  = '是否删除备份？';
$lang->backup->confirmRestore = '是否还原该备份？';
$lang->backup->holdDays       = '备份保留最近 %s 天';

$lang->backup->success = new stdclass();
$lang->backup->success->backup  = '备份成功！';
$lang->backup->success->restore = '还原成功！';

$lang->backup->error = new stdclass();
$lang->backup->error->noWritable  = "<code>%s</code> 不可写！请检查该目录权限，否则无法备份。";
$lang->backup->error->noDelete    = "文件 %s 无法删除，修改权限或手工删除。";
$lang->backup->error->restoreSQL  = "数据库还原失败，错误：%s";
$lang->backup->error->restoreFile = "附件还原失败，错误：%s";
$lang->backup->error->backupFile  = "附件备份失败，错误：%s";
/* block */
$lang->block = new stdclass();
$lang->block->common = '区块';
$lang->block->name   = '区块名称';
$lang->block->style  = '外观';
$lang->block->grid   = '宽度';
$lang->block->color  = '颜色';

$lang->block->lblModule    = '模块';
$lang->block->lblBlock     = '区块';
$lang->block->lblNum       = '条数';
$lang->block->lblHtml      = 'HTML内容';
$lang->block->dynamic      = '最新动态';
$lang->block->lblFlowchart = '流程图';

$lang->block->params = new stdclass();
$lang->block->params->name  = '参数名称';
$lang->block->params->value = '参数值';

$lang->block->createBlock        = '添加区块';
$lang->block->editBlock          = '编辑区块';
$lang->block->ordersSaved        = '排序已保存';
$lang->block->confirmRemoveBlock = '确定移除区块【{0}】吗？';
$lang->block->refresh            = '刷新';
$lang->block->hidden             = '隐藏';
$lang->block->dynamicInfo        = "%s, %s <em>%s</em> %s <a href='%s'>%s</a>。";

$lang->block->default['product']['1']['title'] = '未关闭的' . $lang->productCommon;
$lang->block->default['product']['1']['block'] = 'list';
$lang->block->default['product']['1']['grid']  = 8;

$lang->block->default['product']['1']['params']['num']  = 15;
$lang->block->default['product']['1']['params']['type'] = 'noclosed';

$lang->block->default['product']['2']['title'] = '指派给我的需求';
$lang->block->default['product']['2']['block'] = 'story';
$lang->block->default['product']['2']['grid']  = 4;

$lang->block->default['product']['2']['params']['num']     = 15;
$lang->block->default['product']['2']['params']['orderBy'] = 'id_desc';
$lang->block->default['product']['2']['params']['type']    = 'assignedTo';

$lang->block->default['project']['1']['title'] = '进行中的' . $lang->projectCommon;
$lang->block->default['project']['1']['block'] = 'list';
$lang->block->default['project']['1']['grid']  = 8;

$lang->block->default['project']['1']['params']['num']     = 15;
$lang->block->default['project']['1']['params']['orderBy'] = 'id_desc';
$lang->block->default['project']['1']['params']['type']    = 'undone';

$lang->block->default['project']['2']['title'] = '指派给我的任务';
$lang->block->default['project']['2']['block'] = 'task';
$lang->block->default['project']['2']['grid']  = 4;

$lang->block->default['project']['2']['params']['num']     = 15;
$lang->block->default['project']['2']['params']['orderBy'] = 'id_desc';
$lang->block->default['project']['2']['params']['type']    = 'assignedTo';

$lang->block->default['qa']['1']['title'] = '指派给我的Bug';
$lang->block->default['qa']['1']['block'] = 'bug';
$lang->block->default['qa']['1']['grid']  = 4;

$lang->block->default['qa']['1']['params']['num']     = 15;
$lang->block->default['qa']['1']['params']['orderBy'] = 'id_desc';
$lang->block->default['qa']['1']['params']['type']    = 'assignedTo';

$lang->block->default['qa']['2']['title'] = '指派给我的用例';
$lang->block->default['qa']['2']['block'] = 'case';
$lang->block->default['qa']['2']['grid']  = 4;

$lang->block->default['qa']['2']['params']['num']     = 15;
$lang->block->default['qa']['2']['params']['orderBy'] = 'id_desc';
$lang->block->default['qa']['2']['params']['type']    = 'assigntome';

$lang->block->default['qa']['3']['title'] = '待测版本列表';
$lang->block->default['qa']['3']['block'] = 'testtask';
$lang->block->default['qa']['3']['grid']  = 4;

$lang->block->default['qa']['3']['params']['num']     = 15;
$lang->block->default['qa']['3']['params']['orderBy'] = 'id_desc';
$lang->block->default['qa']['3']['params']['type']    = 'wait';

$lang->block->default['my']['1']['title']  = '流程图';
$lang->block->default['my']['1']['block']  = 'flowchart';
$lang->block->default['my']['1']['grid']   = 8;
$lang->block->default['my']['1']['source'] = '';
$lang->block->default['my']['2']['title']  = '最新动态';
$lang->block->default['my']['2']['block']  = 'dynamic';
$lang->block->default['my']['2']['grid']   = 4;
$lang->block->default['my']['2']['source'] = '';
$lang->block->default['my']['3'] = $lang->block->default['project']['1'];
$lang->block->default['my']['3']['source'] = 'project';
$lang->block->default['my']['4']['title']  = '我的待办';
$lang->block->default['my']['4']['block']  = 'list';
$lang->block->default['my']['4']['grid']   = 4;
$lang->block->default['my']['4']['source'] = 'todo';
$lang->block->default['my']['4']['params']['num'] = '20';
$lang->block->default['my']['5'] = $lang->block->default['product']['1'];
$lang->block->default['my']['5']['source'] = 'product';
$lang->block->default['my']['6'] = $lang->block->default['project']['2'];
$lang->block->default['my']['6']['source'] = 'project';
$lang->block->default['my']['7'] = $lang->block->default['qa']['1'];
$lang->block->default['my']['7']['source'] = 'qa';
$lang->block->default['my']['8'] = $lang->block->default['product']['2'];
$lang->block->default['my']['8']['source'] = 'product';
$lang->block->default['my']['9'] = $lang->block->default['qa']['2'];
$lang->block->default['my']['9']['source'] = 'qa';

$lang->block->num      = '数量';
$lang->block->type     = '类型';
$lang->block->orderBy  = '排序';

$lang->block->availableBlocks = new stdclass();

$lang->block->availableBlocks->todo     = '我的待办';
$lang->block->availableBlocks->task     = '我的任务';
$lang->block->availableBlocks->bug      = '我的Bug';
$lang->block->availableBlocks->case     = '我的用例';
$lang->block->availableBlocks->story    = '我的需求';
$lang->block->availableBlocks->product  = $lang->productCommon . '列表';
$lang->block->availableBlocks->project  = $lang->projectCommon . '列表';
$lang->block->availableBlocks->plan     = '计划列表';
$lang->block->availableBlocks->release  = '发布列表';
$lang->block->availableBlocks->build    = '版本列表';
$lang->block->availableBlocks->testtask = '测试版本列表';

$lang->block->moduleList['product'] = $lang->productCommon;
$lang->block->moduleList['project'] = $lang->projectCommon;
$lang->block->moduleList['qa']      = '测试';
$lang->block->moduleList['todo']    = '待办';

$lang->block->modules['product'] = new stdclass();
$lang->block->modules['product']->availableBlocks = new stdclass();
$lang->block->modules['product']->availableBlocks->list    = $lang->productCommon . '列表';
$lang->block->modules['product']->availableBlocks->story   = '需求列表';
$lang->block->modules['product']->availableBlocks->plan    = '计划列表';
$lang->block->modules['product']->availableBlocks->release = '发布列表';
$lang->block->modules['project'] = new stdclass();
$lang->block->modules['project']->availableBlocks = new stdclass();
$lang->block->modules['project']->availableBlocks->list  = $lang->projectCommon . '列表';
$lang->block->modules['project']->availableBlocks->task  = '任务列表';
$lang->block->modules['project']->availableBlocks->build = '版本列表';
$lang->block->modules['qa']      = new stdclass();
$lang->block->modules['qa']->availableBlocks = new stdclass();
$lang->block->modules['qa']->availableBlocks->bug      = 'Bug列表';
$lang->block->modules['qa']->availableBlocks->case     = '用例列表';
$lang->block->modules['qa']->availableBlocks->testtask = '版本列表';
$lang->block->modules['todo'] = new stdclass();
$lang->block->modules['todo']->availableBlocks = new stdclass();
$lang->block->modules['todo']->availableBlocks->list = '待办列表';

$lang->block->orderByList = new stdclass();

$lang->block->orderByList->task = array();
$lang->block->orderByList->task['id_asc']        = 'ID 递增';
$lang->block->orderByList->task['id_desc']       = 'ID 递减';
$lang->block->orderByList->task['pri_asc']       = '优先级递增';
$lang->block->orderByList->task['pri_desc']      = '优先级递减';
$lang->block->orderByList->task['estimate_asc']  = '预计时间递增';
$lang->block->orderByList->task['estimate_desc'] = '预计时间递减';
$lang->block->orderByList->task['status_asc']    = '状态正序';
$lang->block->orderByList->task['status_desc']   = '状态倒序';
$lang->block->orderByList->task['deadline_asc']  = '截止日期递增';
$lang->block->orderByList->task['deadline_desc'] = '截止日期递减';

$lang->block->orderByList->bug = array();
$lang->block->orderByList->bug['id_asc']        = 'ID 递增';
$lang->block->orderByList->bug['id_desc']       = 'ID 递减';
$lang->block->orderByList->bug['pri_asc']       = '优先级递增';
$lang->block->orderByList->bug['pri_desc']      = '优先级递减';
$lang->block->orderByList->bug['severity_asc']  = '级别递增';
$lang->block->orderByList->bug['severity_desc'] = '级别递减';

$lang->block->orderByList->case = array();
$lang->block->orderByList->case['id_asc']        = 'ID 递增';
$lang->block->orderByList->case['id_desc']       = 'ID 递减';
$lang->block->orderByList->case['pri_asc']       = '优先级递增';
$lang->block->orderByList->case['pri_desc']      = '优先级递减';

$lang->block->orderByList->story = array();
$lang->block->orderByList->story['id_asc']        = 'ID 递增';
$lang->block->orderByList->story['id_desc']       = 'ID 递减';
$lang->block->orderByList->story['pri_asc']       = '优先级递增';
$lang->block->orderByList->story['pri_desc']      = '优先级递减';
$lang->block->orderByList->story['status_asc']    = '状态正序';
$lang->block->orderByList->story['status_desc']   = '状态倒序';
$lang->block->orderByList->story['stage_asc']     = '阶段正序';
$lang->block->orderByList->story['stage_desc']    = '阶段倒序';

$lang->block->typeList = new stdclass();

$lang->block->typeList->task['assignedTo'] = '指派给我';
$lang->block->typeList->task['openedBy']   = '由我创建';
$lang->block->typeList->task['finishedBy'] = '由我完成';
$lang->block->typeList->task['closedBy']   = '由我关闭';
$lang->block->typeList->task['canceledBy'] = '由我取消';

$lang->block->typeList->bug['assignedTo'] = '指派给我';
$lang->block->typeList->bug['openedBy']   = '由我创建';
$lang->block->typeList->bug['resolvedBy'] = '由我解决';
$lang->block->typeList->bug['closedBy']   = '由我关闭';

$lang->block->typeList->case['assigntome'] = '指派给我';
$lang->block->typeList->case['openedbyme'] = '由我创建';

$lang->block->typeList->story['assignedTo'] = '指派给我';
$lang->block->typeList->story['openedBy']   = '由我创建';
$lang->block->typeList->story['reviewedBy'] = '由我评审';
$lang->block->typeList->story['closedBy']   = '由我关闭';

$lang->block->typeList->product['noclosed'] = '未关闭';
$lang->block->typeList->product['closed']   = '已关闭';
$lang->block->typeList->product['all']      = '全部';

$lang->block->typeList->project['undone']  = '未完成';
$lang->block->typeList->project['isdoing'] = '进行中';
$lang->block->typeList->project['all']     = '全部';

$lang->block->typeList->testtask['wait'] = '待测版本';
$lang->block->typeList->testtask['done'] = '已测版本';
$lang->block->typeList->testtask['all']  = '全部';

$lang->block->modules['product']->moreLinkList = new stdclass();
$lang->block->modules['product']->moreLinkList->list    = 'product|all|product=&status=%s';
$lang->block->modules['product']->moreLinkList->story   = 'my|story|type=%s';
$lang->block->modules['project']->moreLinkList = new stdclass();
$lang->block->modules['project']->moreLinkList->list  = 'project|all|status=%s&project=';
$lang->block->modules['project']->moreLinkList->task  = 'my|task|type=%s';
$lang->block->modules['qa']->moreLinkList = new stdclass();
$lang->block->modules['qa']->moreLinkList->bug      = 'my|bug|type=%s';
$lang->block->modules['qa']->moreLinkList->case     = 'my|testcase|type=%s';
$lang->block->modules['qa']->moreLinkList->testtask = 'my|testtask|type=%s';
$lang->block->modules['todo']->moreLinkList = new stdclass();
$lang->block->modules['todo']->moreLinkList->list = 'my|todo|type=all';
$lang->block->modules['common'] = new stdclass();
$lang->block->modules['common']->moreLinkList = new stdclass();
$lang->block->modules['common']->moreLinkList->dynamic = 'company|dynamic|';

$lang->block->flowchart   = array();
$lang->block->flowchart[] = array('管理员',   '维护公司', '添加用户', '维护权限');
$lang->block->flowchart[] = array('产品经理', '创建产品', '维护模块', '维护计划', '维护需求', '创建发布');
$lang->block->flowchart[] = array('项目经理', '创建项目', '维护团队', '关联产品', '关联需求', '分解任务');
$lang->block->flowchart[] = array('研发人员', '领取任务和Bug', '更新状态', '完成任务和Bug');
$lang->block->flowchart[] = array('测试人员', '撰写用例', '执行用例', '提交Bug', '验证Bug', '关闭Bug');
/* branch */
$lang->branch->common = '分支';
$lang->branch->manage = '分支管理';
$lang->branch->delete = '分支删除';

$lang->branch->manageTitle = '%s管理';
$lang->branch->all         = '所有';

$lang->branch->confirmDelete = '@branch@删除，会影响关联该@branch@的需求、模块、计划、发布、Bug、用例等等，请慎重考虑。是否删除该@branch@';
/* bug */
$lang->bug->common           = 'Bug';
$lang->bug->id               = 'Bug编号';
$lang->bug->product          = '所属' . $lang->productCommon;
$lang->bug->productplan      = '所属计划';
$lang->bug->module           = '所属模块';
$lang->bug->moduleAB         = '模块';
$lang->bug->project          = '所属' . $lang->projectCommon;
$lang->bug->story            = '相关需求';
$lang->bug->task             = '相关任务';
$lang->bug->title            = 'Bug标题';
$lang->bug->severity         = '严重程度';
$lang->bug->severityAB       = '级别';
$lang->bug->pri              = '优先级';
$lang->bug->type             = 'Bug类型';
$lang->bug->os               = '操作系统';
$lang->bug->browser          = '浏览器';
$lang->bug->steps            = '重现步骤';
$lang->bug->status           = 'Bug状态';
$lang->bug->statusAB         = '状态';
$lang->bug->activatedCount   = '激活次数';
$lang->bug->activatedCountAB = '激活次数';
$lang->bug->confirmed        = '是否确认';
$lang->bug->toTask           = '转任务';
$lang->bug->toStory          = '转需求';
$lang->bug->mailto           = '抄送给';
$lang->bug->openedBy         = '由谁创建';
$lang->bug->openedDate       = '创建日期';
$lang->bug->openedDateAB     = '创建日期';
$lang->bug->openedBuild      = '影响版本';
$lang->bug->assignedTo       = '指派给';
$lang->bug->assignedDate     = '指派日期';
$lang->bug->resolvedBy       = '解决者';
$lang->bug->resolvedByAB     = '解决';
$lang->bug->resolution       = '解决方案';
$lang->bug->resolutionAB     = '方案';
$lang->bug->resolvedBuild    = '解决版本';
$lang->bug->resolvedDate     = '解决日期';
$lang->bug->resolvedDateAB   = '解决日期';
$lang->bug->closedBy         = '由谁关闭';
$lang->bug->closedDate       = '关闭日期';
$lang->bug->duplicateBug     = '重复ID';
$lang->bug->lastEditedBy     = '最后修改者';
$lang->bug->linkBug          = '相关Bug';
$lang->bug->linkBugs         = '关联相关Bug';
$lang->bug->unlinkBug        = '移除相关Bug';
$lang->bug->case             = '相关用例';
$lang->bug->files            = '附件';
$lang->bug->keywords         = '关键词';
$lang->bug->lastEditedByAB   = '修改者';
$lang->bug->lastEditedDateAB = '修改日期';
$lang->bug->lastEditedDate   = '修改日期';
$lang->bug->fromCase         = '来源用例';
$lang->bug->toCase           = '生成用例';
$lang->bug->colorTag         = '颜色标签';

$lang->bug->index              = '首页';
$lang->bug->create             = '提Bug';
$lang->bug->batchCreate        = '批量添加';
$lang->bug->confirmBug         = '确认';
$lang->bug->batchConfirm       = '批量确认';
$lang->bug->edit               = '编辑';
$lang->bug->batchEdit          = '批量编辑';
$lang->bug->batchChangeModule  = '批量修改模块';
$lang->bug->batchClose         = '批量关闭';
$lang->bug->assignTo           = '指派';
$lang->bug->batchAssignTo      = '批量指派';
$lang->bug->browse             = 'Bug列表';
$lang->bug->view               = 'Bug详情';
$lang->bug->resolve            = '解决';
$lang->bug->batchResolve       = '批量解决';
$lang->bug->close              = '关闭';
$lang->bug->activate           = '激活';
$lang->bug->reportChart        = '报表统计';
$lang->bug->export             = '导出数据';
$lang->bug->delete             = '删除';
$lang->bug->deleted            = '已删除';
$lang->bug->saveTemplate       = '保存模板';
$lang->bug->setPublic          = '设为公共模板';
$lang->bug->deleteTemplate     = '删除模板';
$lang->bug->confirmStoryChange = '确认需求变动';
$lang->bug->copy               = '复制Bug';

$lang->bug->assignToMe     = '指派给我';
$lang->bug->openedByMe     = '由我创建';
$lang->bug->resolvedByMe   = '由我解决';
$lang->bug->closedByMe     = '由我关闭';
$lang->bug->assignToNull   = '未指派';
$lang->bug->unResolved     = '未解决';
$lang->bug->toClosed       = '待关闭';
$lang->bug->unclosed       = '未关闭';
$lang->bug->longLifeBugs   = '久未处理';
$lang->bug->postponedBugs  = '被延期';
$lang->bug->allBugs        = '所有';
$lang->bug->byQuery        = '搜索';
$lang->bug->needConfirm    = '需求变动';
$lang->bug->allProduct     = '所有' . $lang->productCommon;

$lang->bug->ditto       = '同上';
$lang->bug->dittoNotice = '该bug与上一bug不属于同一产品！';

$lang->bug->lblAssignedTo               = '当前指派';
$lang->bug->lblMailto                   = '抄送给';
$lang->bug->lblLastEdited               = '最后修改';
$lang->bug->lblResolved                 = '由谁解决';
$lang->bug->allUsers                    = '所有用户';
$lang->bug->allBuilds                   = '所有';

$lang->bug->legendBasicInfo             = '基本信息';
$lang->bug->legendAttatch               = '附件';
$lang->bug->legendPrjStoryTask          = $lang->projectCommon . '/需求/任务';
$lang->bug->lblTypeAndSeverity          = '类型/严重程度';
$lang->bug->lblSystemBrowserAndHardware = '系统/浏览器';
$lang->bug->legendSteps                 = '重现步骤';
$lang->bug->legendComment               = '备注';
$lang->bug->legendLife                  = 'BUG的一生';
$lang->bug->legendMisc                  = '其他相关';

$lang->bug->buttonConfirm        = '确认';

$lang->bug->confirmChangeProduct = "修改{$lang->productCommon}会导致相应的{$lang->projectCommon}、需求和任务发生变化，确定吗？";
$lang->bug->confirmDelete        = '您确认要删除该Bug吗？';
$lang->bug->setTemplateTitle     = '请输入bug模板标题';
$lang->bug->remindTask           = '该Bug已经转化为任务，是否更新任务(编号:%s)状态 ?';
$lang->bug->skipClose            = 'Bug %s 不是已解决状态，不能关闭。';
$lang->bug->applyTemplate        = '应用模板';

$lang->bug->tplStep   = "<p>[步骤]</p>\n";
$lang->bug->tplResult = "<p>[结果]</p>\n";
$lang->bug->tplExpect = "<p>[期望]</p>";

$lang->bug->severityList[3] = '3';
$lang->bug->severityList[1] = '1';
$lang->bug->severityList[2] = '2';
$lang->bug->severityList[4] = '4';

$lang->bug->priList[0] = '';
$lang->bug->priList[3] = '3';
$lang->bug->priList[1] = '1';
$lang->bug->priList[2] = '2';
$lang->bug->priList[4] = '4';

$lang->bug->osList['']        = '';
$lang->bug->osList['all']     = '全部';
$lang->bug->osList['windows'] = 'Windows';
$lang->bug->osList['win8']    = 'Windows 8';
$lang->bug->osList['win7']    = 'Windows 7';
$lang->bug->osList['vista']   = 'Windows Vista';
$lang->bug->osList['winxp']   = 'Windows XP';
$lang->bug->osList['win2012'] = 'Windows 2012';
$lang->bug->osList['win2008'] = 'Windows 2008';
$lang->bug->osList['win2003'] = 'Windows 2003';
$lang->bug->osList['win2000'] = 'Windows 2000';
$lang->bug->osList['android'] = 'Android';
$lang->bug->osList['ios']     = 'IOS';
$lang->bug->osList['wp8']     = 'WP8';
$lang->bug->osList['wp7']     = 'WP7';
$lang->bug->osList['symbian'] = 'Symbian';
$lang->bug->osList['linux']   = 'Linux';
$lang->bug->osList['freebsd'] = 'FreeBSD';
$lang->bug->osList['osx']     = 'OS X';
$lang->bug->osList['unix']    = 'Unix';
$lang->bug->osList['others']  = '其他';

$lang->bug->browserList['']         = '';
$lang->bug->browserList['all']      = '全部';
$lang->bug->browserList['ie']       = 'IE系列';
$lang->bug->browserList['ie11']     = 'IE11';
$lang->bug->browserList['ie10']     = 'IE10';
$lang->bug->browserList['ie9']      = 'IE9';
$lang->bug->browserList['ie8']      = 'IE8';
$lang->bug->browserList['ie7']      = 'IE7';
$lang->bug->browserList['ie6']      = 'IE6';
$lang->bug->browserList['chrome']   = 'chrome';
$lang->bug->browserList['firefox']  = 'firefox系列';
$lang->bug->browserList['firefox4'] = 'firefox4';
$lang->bug->browserList['firefox3'] = 'firefox3';
$lang->bug->browserList['firefox2'] = 'firefox2';
$lang->bug->browserList['opera']    = 'opera系列';
$lang->bug->browserList['oprea11']  = 'opera11';
$lang->bug->browserList['oprea10']  = 'opera10';
$lang->bug->browserList['opera9']   = 'opera9';
$lang->bug->browserList['safari']   = 'safari';
$lang->bug->browserList['maxthon']  = '傲游';
$lang->bug->browserList['uc']       = 'UC';
$lang->bug->browserList['other']    = '其他';

$lang->bug->typeList['']             = '';
$lang->bug->typeList['codeerror']    = '代码错误';
$lang->bug->typeList['interface']    = '界面优化';
$lang->bug->typeList['designchange'] = '设计变更';
$lang->bug->typeList['newfeature']   = '新增需求';
$lang->bug->typeList['designdefect'] = '设计缺陷';
$lang->bug->typeList['config']       = '配置相关';
$lang->bug->typeList['install']      = '安装部署';
$lang->bug->typeList['security']     = '安全相关';
$lang->bug->typeList['performance']  = '性能问题';
$lang->bug->typeList['standard']     = '标准规范';
$lang->bug->typeList['automation']   = '测试脚本';
$lang->bug->typeList['trackthings']  = '事务跟踪';
$lang->bug->typeList['others']       = '其他';

$lang->bug->statusList['']         = '';
$lang->bug->statusList['active']   = '激活';
$lang->bug->statusList['resolved'] = '已解决';
$lang->bug->statusList['closed']   = '已关闭';

$lang->bug->confirmedList[1] = '已确认';
$lang->bug->confirmedList[0] = '未确认';

$lang->bug->resolutionList['']           = '';
$lang->bug->resolutionList['bydesign']   = '设计如此';
$lang->bug->resolutionList['duplicate']  = '重复Bug';
$lang->bug->resolutionList['external']   = '外部原因';
$lang->bug->resolutionList['fixed']      = '已解决';
$lang->bug->resolutionList['notrepro']   = '无法重现';
$lang->bug->resolutionList['postponed']  = '延期处理';
$lang->bug->resolutionList['willnotfix'] = "不予解决";
$lang->bug->resolutionList['tostory']    = '转为需求';

$lang->bug->report = new stdclass();
$lang->bug->report->common = '报表';
$lang->bug->report->select = '请选择报表类型';
$lang->bug->report->create = '生成报表';

$lang->bug->report->charts['bugsPerProject']        = $lang->projectCommon . 'Bug数量';
$lang->bug->report->charts['bugsPerBuild']          = '版本Bug数量';
$lang->bug->report->charts['bugsPerModule']         = '模块Bug数量';
$lang->bug->report->charts['openedBugsPerDay']      = '每天新增Bug数';
$lang->bug->report->charts['resolvedBugsPerDay']    = '每天解决Bug数';
$lang->bug->report->charts['closedBugsPerDay']      = '每天关闭的Bug数';
$lang->bug->report->charts['openedBugsPerUser']     = '每人提交的Bug数';
$lang->bug->report->charts['resolvedBugsPerUser']   = '每人解决的Bug数';
$lang->bug->report->charts['closedBugsPerUser']     = '每人关闭的Bug数';
$lang->bug->report->charts['bugsPerSeverity']       = 'Bug严重程度统计';
$lang->bug->report->charts['bugsPerResolution']     = 'Bug解决方案统计';
$lang->bug->report->charts['bugsPerStatus']         = 'Bug状态统计';
$lang->bug->report->charts['bugsPerActivatedCount'] = 'Bug激活次数统计';
$lang->bug->report->charts['bugsPerType']           = 'Bug类型统计';
$lang->bug->report->charts['bugsPerAssignedTo']     = '指派给统计';
//$lang->bug->report->charts['bugLiveDays']        = 'Bug处理时间统计';
//$lang->bug->report->charts['bugHistories']       = 'Bug处理步骤统计';

$lang->bug->report->options = new stdclass();
$lang->bug->report->options->graph  = new stdclass();
$lang->bug->report->options->type   = 'pie';
$lang->bug->report->options->width  = 500;
$lang->bug->report->options->height = 140;

$lang->bug->report->bugsPerProject        = new stdclass();
$lang->bug->report->bugsPerBuild          = new stdclass();
$lang->bug->report->bugsPerModule         = new stdclass();
$lang->bug->report->openedBugsPerDay      = new stdclass();
$lang->bug->report->resolvedBugsPerDay    = new stdclass();
$lang->bug->report->closedBugsPerDay      = new stdclass();
$lang->bug->report->openedBugsPerUser     = new stdclass();
$lang->bug->report->resolvedBugsPerUser   = new stdclass();
$lang->bug->report->closedBugsPerUser     = new stdclass();
$lang->bug->report->bugsPerSeverity       = new stdclass();
$lang->bug->report->bugsPerResolution     = new stdclass();
$lang->bug->report->bugsPerStatus         = new stdclass();
$lang->bug->report->bugsPerActivatedCount = new stdclass();
$lang->bug->report->bugsPerType           = new stdclass();
$lang->bug->report->bugsPerAssignedTo     = new stdclass();
$lang->bug->report->bugLiveDays           = new stdclass();
$lang->bug->report->bugHistories          = new stdclass();

$lang->bug->report->bugsPerProject->graph        = new stdclass();
$lang->bug->report->bugsPerBuild->graph          = new stdclass();
$lang->bug->report->bugsPerModule->graph         = new stdclass();
$lang->bug->report->openedBugsPerDay->graph      = new stdclass();
$lang->bug->report->resolvedBugsPerDay->graph    = new stdclass();
$lang->bug->report->closedBugsPerDay->graph      = new stdclass();
$lang->bug->report->openedBugsPerUser->graph     = new stdclass();
$lang->bug->report->resolvedBugsPerUser->graph   = new stdclass();
$lang->bug->report->closedBugsPerUser->graph     = new stdclass();
$lang->bug->report->bugsPerSeverity->graph       = new stdclass();
$lang->bug->report->bugsPerResolution->graph     = new stdclass();
$lang->bug->report->bugsPerStatus->graph         = new stdclass();
$lang->bug->report->bugsPerActivatedCount->graph = new stdclass();
$lang->bug->report->bugsPerType->graph           = new stdclass();
$lang->bug->report->bugsPerAssignedTo->graph     = new stdclass();
$lang->bug->report->bugLiveDays->graph           = new stdclass();
$lang->bug->report->bugHistories->graph          = new stdclass();

$lang->bug->report->bugsPerProject->graph->xAxisName     = $lang->projectCommon;
$lang->bug->report->bugsPerBuild->graph->xAxisName       = '版本';
$lang->bug->report->bugsPerModule->graph->xAxisName      = '模块';

$lang->bug->report->openedBugsPerDay->type                = 'bar';
$lang->bug->report->openedBugsPerDay->graph->xAxisName   = '日期';

$lang->bug->report->resolvedBugsPerDay->type              = 'bar';
$lang->bug->report->resolvedBugsPerDay->graph->xAxisName = '日期';

$lang->bug->report->closedBugsPerDay->type                = 'bar';
$lang->bug->report->closedBugsPerDay->graph->xAxisName   = '日期';

$lang->bug->report->openedBugsPerUser->graph->xAxisName  = '用户';
$lang->bug->report->resolvedBugsPerUser->graph->xAxisName= '用户';
$lang->bug->report->closedBugsPerUser->graph->xAxisName  = '用户';

$lang->bug->report->bugsPerSeverity->graph->xAxisName       = '严重程度';
$lang->bug->report->bugsPerResolution->graph->xAxisName     = '解决方案';
$lang->bug->report->bugsPerStatus->graph->xAxisName         = '状态';
$lang->bug->report->bugsPerActivatedCount->graph->xAxisName = '激活次数';
$lang->bug->report->bugsPerType->graph->xAxisName           = '类型';
$lang->bug->report->bugsPerAssignedTo->graph->xAxisName     = '指派给';
$lang->bug->report->bugLiveDays->graph->xAxisName           = '处理时间';
$lang->bug->report->bugHistories->graph->xAxisName          = '处理步骤';

$lang->bug->action = new stdclass();
$lang->bug->action->resolved         = array('main' => '$date, 由 <strong>$actor</strong> 解决，方案为 <strong>$extra</strong> $appendLink。', 'extra' => 'resolutionList');
$lang->bug->action->tostory          = array('main' => '$date, 由 <strong>$actor</strong> 转为<strong>需求</strong>，编号为 <strong>$extra</strong>。');
$lang->bug->action->totask           = array('main' => '$date, 由 <strong>$actor</strong> 导入为<strong>任务</strong>，编号为 <strong>$extra</strong>。');
$lang->bug->action->linked2plan      = array('main' => '$date, 由 <strong>$actor</strong> 关联到计划 <strong>$extra</strong>。'); 
$lang->bug->action->unlinkedfromplan = array('main' => '$date, 由 <strong>$actor</strong> 从计划 <strong>$extra</strong> 移除。'); 
$lang->bug->action->linkrelatedbug   = array('main' => '$date, 由 <strong>$actor</strong> 关联相关Bug <strong>$extra</strong>。');
$lang->bug->action->unlinkrelatedbug = array('main' => '$date, 由 <strong>$actor</strong> 移除相关Bug <strong>$extra</strong>。');

$lang->bug->placeholder = new stdclass();
$lang->bug->placeholder->chooseBuilds = '选择相关版本...';

$lang->bug->featureBar['browse']['unclosed']      = $lang->bug->unclosed;
$lang->bug->featureBar['browse']['all']           = $lang->bug->allBugs;
$lang->bug->featureBar['browse']['assigntome']    = $lang->bug->assignToMe;
$lang->bug->featureBar['browse']['openedbyme']    = $lang->bug->openedByMe;
$lang->bug->featureBar['browse']['resolvedbyme']  = $lang->bug->resolvedByMe;
$lang->bug->featureBar['browse']['unconfirmed']   = $lang->bug->confirmedList[0];
$lang->bug->featureBar['browse']['assigntonull']  = $lang->bug->assignToNull;
$lang->bug->featureBar['browse']['unresolved']    = $lang->bug->unResolved;
$lang->bug->featureBar['browse']['toclosed']      = $lang->bug->toClosed;
$lang->bug->featureBar['browse']['longlifebugs']  = $lang->bug->longLifeBugs;
$lang->bug->featureBar['browse']['postponedbugs'] = $lang->bug->postponedBugs;
$lang->bug->featureBar['browse']['needconfirm']   = $lang->bug->needConfirm;
/* build */
$lang->build->common    = "版本";
$lang->build->create    = "创建版本";
$lang->build->edit      = "编辑版本";
$lang->build->linkStory = "关联需求";
$lang->build->linkBug   = "关联Bug";
$lang->build->delete    = "删除版本";
$lang->build->deleted   = "已删除";
$lang->build->view      = "版本详情";
$lang->build->batchUnlink          = '批量移除';
$lang->build->batchUnlinkStory     = '批量移除需求';
$lang->build->batchUnlinkBug       = '批量移除Bug';

$lang->build->confirmDelete      = "您确认删除该版本吗？";
$lang->build->confirmUnlinkStory = "您确认移除该需求吗？";
$lang->build->confirmUnlinkBug   = "您确认移除该Bug吗？";

$lang->build->basicInfo = '基本信息';

$lang->build->id        = 'ID';
$lang->build->product   = $lang->productCommon;
$lang->build->name      = '名称编号';
$lang->build->date      = '打包日期';
$lang->build->builder   = '构建者';
$lang->build->scmPath   = '源代码地址';
$lang->build->filePath  = '下载地址';
$lang->build->desc      = '描述';
$lang->build->files     = '上传发行包';
$lang->build->last      = '上个版本';
$lang->build->unlinkStory        = '移除需求';
$lang->build->unlinkBug          = '移除Bug';
$lang->build->stories            = '完成的需求';
$lang->build->bugs               = '解决的Bug';
$lang->build->generatedBugs      = '产生的Bug';
$lang->build->noProduct          = " <span style='color:red'>该{$lang->projectCommon}没有关联{$lang->productCommon}，无法创建版本，请先<a href='%s'>关联{$lang->productCommon}</a></span>";

$lang->build->finishStories = ' 本次共完成 %s 个需求';
$lang->build->resolvedBugs  = ' 本次共解决 %s 个Bug';
$lang->build->createdBugs   = ' 本次共产生 %s 个Bug';

$lang->build->placeholder = new stdclass();
$lang->build->placeholder->scmPath  = ' 软件源代码库，如Subversion、Git库地址';
$lang->build->placeholder->filePath = ' 该版本软件包下载存储地址';

$lang->build->action = new stdclass();
$lang->build->action->buildopened = '$date, 由 <strong>$actor</strong> 创建版本 <strong>$extra</strong>。' . "\n";
/* company */
$lang->company->common   = '组织视图';
$lang->company->index    = "组织视图首页";
$lang->company->edit     = "编辑公司";
$lang->company->view     = "公司信息";
$lang->company->browse   = "用户列表";
$lang->company->dynamic  = "组织动态";
$lang->company->orgView  = '组织视图';

$lang->company->name     = '公司名称';
$lang->company->phone    = '联系电话';
$lang->company->fax      = '传真';
$lang->company->address  = '通讯地址';
$lang->company->zipcode  = '邮政编码';
$lang->company->website  = '官网';
$lang->company->backyard = '内网';
$lang->company->guest    = '匿名登录';

$lang->company->product = $lang->productCommon;
$lang->company->project = $lang->projectCommon;
$lang->company->user    = '用户';

$lang->company->guestList[0] = '不允许';
$lang->company->guestList[1] = '允许';
/* convert */
$lang->convert->common  = '从其他系统导入';
$lang->convert->index   = '首页';

$lang->convert->start   = '开始转换';
$lang->convert->desc    = <<<EOT
<p>欢迎使用系统转换向导，本程序会帮助您将其他系统的数据转换到禅道项目管理系统中。</p>
<strong>转换存在一定的风险，转换之前，我们强烈建议您备份数据库及相应的数据文件，并保证转换的时候，没有其他人进行操作。</strong>
EOT;

$lang->convert->setConfig      = '来源系统配置';
$lang->convert->setBugfree     = 'Bugfree配置';
$lang->convert->setRedmine     = 'Redmine配置';
$lang->convert->checkBugFree   = '检查Bugfree';
$lang->convert->checkRedmine   = '检查Redmine';
$lang->convert->convertRedmine = '转换Redmine';
$lang->convert->convertBugFree = '转换BugFree';

$lang->convert->selectSource     = '选择来源系统及版本';
$lang->convert->mustSelectSource = "必须选择一个来源。";

$lang->convert->direction             = "请选择{$lang->projectCommon}问题转换方向";
$lang->convert->questionTypeOfRedmine = 'Redmine中问题类型';
$lang->convert->aimTypeOfZentao       = '转化为Zentao中的类型';

$lang->convert->directionList['bug']   = 'Bug';
$lang->convert->directionList['task']  = '任务';
$lang->convert->directionList['story'] = '需求';

$lang->convert->sourceList['BugFree'] = array('bugfree_1' => '1.x', 'bugfree_2' => '2.x');
$lang->convert->sourceList['Redmine'] = array('Redmine_1.1' => '1.1');

$lang->convert->setting     = '设置';
$lang->convert->checkConfig = '检查配置';

$lang->convert->ok          = '<span class="text-success"><i class="icon-ok-sign"></i> 检查通过</span>';
$lang->convert->fail        = '<span class="text-danger"><i class="icon-remove-sign"></i> 检查失败</span>';

$lang->convert->dbHost      = '数据库服务器';
$lang->convert->dbPort      = '服务器端口';
$lang->convert->dbUser      = '数据库用户名';
$lang->convert->dbPassword  = '数据库密码';
$lang->convert->dbName      = '%s使用的库';
$lang->convert->dbCharset   = '%s数据库编码';
$lang->convert->dbPrefix    = '%s表前缀';
$lang->convert->installPath = '%s安装的根目录';

$lang->convert->checkDB    = '数据库';
$lang->convert->checkTable = '表';
$lang->convert->checkPath  = '安装路径';

$lang->convert->execute    = '执行转换';
$lang->convert->item       = '转换项';
$lang->convert->count      = '转换数量';
$lang->convert->info       = '转换信息';

$lang->convert->bugfree = new stdclass();
$lang->convert->bugfree->users    = '用户';
$lang->convert->bugfree->projects = $lang->projectCommon;
$lang->convert->bugfree->modules  = '模块';
$lang->convert->bugfree->bugs     = 'Bug';
$lang->convert->bugfree->cases    = '测试用例';
$lang->convert->bugfree->results  = '测试结果';
$lang->convert->bugfree->actions  = '历史记录';
$lang->convert->bugfree->files    = '附件';

$lang->convert->redmine = new stdclass();
$lang->convert->redmine->users        = '用户';
$lang->convert->redmine->groups       = '用户分组';
$lang->convert->redmine->products     = $lang->productCommon;
$lang->convert->redmine->projects     = $lang->projectCommon;
$lang->convert->redmine->stories      = '需求';
$lang->convert->redmine->tasks        = '任务';
$lang->convert->redmine->bugs         = 'Bug';
$lang->convert->redmine->productPlans = $lang->productCommon . '计划';
$lang->convert->redmine->teams        = '团队';
$lang->convert->redmine->releases     = '发布';
$lang->convert->redmine->builds       = 'Build';
$lang->convert->redmine->docLibs      = '文档库';
$lang->convert->redmine->docs         = '文档';
$lang->convert->redmine->files        = '附件';

$lang->convert->errorFileNotExits  = '文件 %s 不存在';
$lang->convert->errorUserExists    = '用户 %s 已存在';
$lang->convert->errorGroupExists   = '分组 %s 已存在';
$lang->convert->errorBuildExists   = 'Build %s 已存在';
$lang->convert->errorReleaseExists = '发布 %s 已存在';
$lang->convert->errorCopyFailed    = '文件 %s 拷贝失败';

$lang->convert->setParam = '请设置转换参数';

$lang->convert->statusType = new stdclass();
$lang->convert->priType    = new stdclass();

$lang->convert->aimType           = '问题类型转换';
$lang->convert->statusType->bug   = '状态类型转换(Bug状态)';
$lang->convert->statusType->story = '状态类型转换(Story状态)';
$lang->convert->statusType->task  = '状态类型转换(Task状态)';
$lang->convert->priType->bug      = '优先级类型转换(Bug状态)';
$lang->convert->priType->story    = '优先级类型转换(Story状态)';
$lang->convert->priType->task     = '优先级类型转换(Task状态)';

$lang->convert->issue = new stdclass();
$lang->convert->issue->redmine = 'Redmine';
$lang->convert->issue->zentao  = '禅道';
$lang->convert->issue->goto    = '转换为';
/* cron */
$lang->cron->common      = '计划任务';
$lang->cron->index       = '首页';
$lang->cron->list        = '任务列表';
$lang->cron->create      = '添加';
$lang->cron->edit        = '编辑';
$lang->cron->delete      = '删除';
$lang->cron->toggle      = '激活/禁用';
$lang->cron->turnon      = '打开/关闭';
$lang->cron->openProcess = '重启';

$lang->cron->m        = '分';
$lang->cron->h        = '小时';
$lang->cron->dom      = '天';
$lang->cron->mon      = '月';
$lang->cron->dow      = '周';
$lang->cron->command  = '命令';
$lang->cron->status   = '状态';
$lang->cron->type     = '任务类型';
$lang->cron->remark   = '备注';
$lang->cron->lastTime = '最后执行';

$lang->cron->turnonList['1'] = '打开';
$lang->cron->turnonList['0'] = '关闭';

$lang->cron->statusList['normal']  = '正常';
$lang->cron->statusList['running'] = '运行中';
$lang->cron->statusList['stop']    = '停止';

$lang->cron->typeList['zentao'] = '禅道自调用';
$lang->cron->typeList['system'] = '操作系统命令';

$lang->cron->toggleList['start'] = '激活';
$lang->cron->toggleList['stop']  = '禁用';

$lang->cron->confirmDelete = '是否删除该计划任务？';
$lang->cron->confirmTurnon = '是否关闭计划任务？';
$lang->cron->introduction  = <<<EOD
<p>计划任务功能可以定时执行诸如更新燃尽图、备份等操作，免除自己布置计划任务。</p>
<p>该功能还有待完善，所以默认关闭该功能</p>
EOD;
$lang->cron->confirmOpen = <<<EOD
<p>是否开启该功能？<a href="%s" target='hiddenwin'>打开计划任务</a></p>
EOD;

$lang->cron->notice = new stdclass();
$lang->cron->notice->m    = '取值范围:0-59，"*"代表取值范围内的数字，"/"代表"每"， "-"代表数字范围。';
$lang->cron->notice->h    = '取值范围:0-23';
$lang->cron->notice->dom  = '取值范围:1-31';
$lang->cron->notice->mon  = '取值范围:1-12';
$lang->cron->notice->dow  = '取值范围:0-6';
$lang->cron->notice->help = '注：如果服务器重启，或者发现计划任务没有正常工作，那么计划任务已经停止工作。需要手动点击【创建进程】按钮，或者一分钟后刷新页面，来开启计划任务。如果任务列表中第一条记录的最后执行时间改变，说明任务开启成功。';
$lang->cron->notice->errorRule = '"%s" 填写的不是合法的值';
/* custom */
$lang->custom->common    = '自定义';
$lang->custom->index     = '首页';
$lang->custom->set       = '自定义配置';
$lang->custom->restore   = '恢复默认';
$lang->custom->key       = '键';
$lang->custom->value     = '值';
$lang->custom->flow      = '流程';
$lang->custom->select    = '请选择流程：';
$lang->custom->branch    = '多分支';

$lang->custom->object['story']    = '需求';
$lang->custom->object['task']     = '任务';
$lang->custom->object['bug']      = 'Bug';
$lang->custom->object['testcase'] = '用例';
$lang->custom->object['testtask'] = '版本';
$lang->custom->object['todo']     = '待办';
$lang->custom->object['user']     = '用户';

$lang->custom->story = new stdClass();
$lang->custom->story->fields['priList']          = '优先级';
$lang->custom->story->fields['sourceList']       = '来源';
$lang->custom->story->fields['reasonList']       = '关闭原因';
$lang->custom->story->fields['stageList']        = '阶段';
$lang->custom->story->fields['statusList']       = '状态';
$lang->custom->story->fields['reviewResultList'] = '评审结果';
$lang->custom->story->fields['review']           = '评审流程';

$lang->custom->task = new stdClass();
$lang->custom->task->fields['priList']    = '优先级';
$lang->custom->task->fields['typeList']   = '类型';
$lang->custom->task->fields['reasonList'] = '关闭原因';
$lang->custom->task->fields['statusList'] = '状态';

$lang->custom->bug = new stdClass();
$lang->custom->bug->fields['priList']        = '优先级';
$lang->custom->bug->fields['severityList']   = '严重程度';
$lang->custom->bug->fields['osList']         = '操作系统';
$lang->custom->bug->fields['browserList']    = '浏览器';
$lang->custom->bug->fields['typeList']       = '类型';
$lang->custom->bug->fields['resolutionList'] = '解决方案';
$lang->custom->bug->fields['statusList']     = '状态';

$lang->custom->testcase = new stdClass();
$lang->custom->testcase->fields['priList']    = '优先级';
$lang->custom->testcase->fields['typeList']   = '类型';
$lang->custom->testcase->fields['stageList']  = '阶段';
$lang->custom->testcase->fields['resultList'] = '执行结果';
$lang->custom->testcase->fields['statusList'] = '状态';

$lang->custom->testtask = new stdClass();
$lang->custom->testtask->fields['priList']    = '优先级';
$lang->custom->testtask->fields['statusList'] = '状态';

$lang->custom->todo = new stdClass();
$lang->custom->todo->fields['priList']    = '优先级';
$lang->custom->todo->fields['typeList']   = '类型';
$lang->custom->todo->fields['statusList'] = '状态';

$lang->custom->user = new stdClass();
$lang->custom->user->fields['roleList']   = '职位';
$lang->custom->user->fields['statusList'] = '状态';

$lang->custom->currentLang = '适用当前语言';
$lang->custom->allLang     = '适用所有语言';

$lang->custom->confirmRestore = '是否要恢复默认配置？';

$lang->custom->notice = new stdclass();
$lang->custom->notice->userRole  = '键的长度必须小于20个字符！';
$lang->custom->notice->indexPage['product'] = "从8.2版本起增加了产品主页视图，是否默认进入产品主页？";
$lang->custom->notice->indexPage['project'] = "从8.2版本起增加了项目主页视图，是否默认进入项目主页？";
$lang->custom->notice->indexPage['qa']      = "从8.2版本起增加了测试主页视图，是否默认进入测试主页？";

$lang->custom->storyReview   = '评审流程';
$lang->custom->reviewList[1] = '开启';
$lang->custom->reviewList[0] = '关闭';

$lang->custom->productProject = new stdclass();
$lang->custom->productProject->relation['0_0'] = '产品 - 项目';
$lang->custom->productProject->relation['0_1'] = '产品 - 迭代';
$lang->custom->productProject->relation['1_1'] = '项目 - 迭代';

$lang->custom->productProject->notice = '请根据实际情况选择适合自己团队的概念。';

$lang->custom->menuTip  = '点击显示或隐藏导航条目，拖拽来更改显示顺序。';
$lang->custom->saveFail = '保存失败！';
/* datatable */
$lang->datatable = new stdclass();
$lang->datatable->common = '数据表格';
$lang->datatable->width  = '宽度';
$lang->datatable->show   = '显示';
$lang->datatable->hide   = '隐藏';

$lang->datatable->custom            = '自定义列';
$lang->datatable->customTip         = '勾选需要显示的列';
$lang->datatable->switchToTable     = '切换到简单表格';
$lang->datatable->switchToDatatable = '切换到高级表格';
$lang->datatable->required          = '必选';

$lang->datatable->branch   = '分支';
$lang->datatable->platform = '平台';

$lang->datatable->showModule             = '列表页是否显示模块名';
$lang->datatable->showModuleList[]       = '不显示';
$lang->datatable->showModuleList['base'] = '只显示一级模块';
$lang->datatable->showModuleList['end']  = '只显示最后一级模块';
/* dept */
$lang->dept->common      = '部门结构';
$lang->dept->manageChild = "下级部门";
$lang->dept->edit        = "编辑部门";
$lang->dept->delete      = "删除部门";
$lang->dept->parent      = "上级部门";
$lang->dept->manager     = "负责人";
$lang->dept->name        = "部门名称";
$lang->dept->browse      = "部门维护";
$lang->dept->manage      = "维护部门结构";
$lang->dept->updateOrder = "更新排序";
$lang->dept->add         = "添加部门";
$lang->dept->dragAndSort = "拖动排序";

$lang->dept->confirmDelete = " 您确定删除该部门吗？";
$lang->dept->successSave   = " 修改成功。";

$lang->dept->error = new stdclass();
$lang->dept->error->hasSons  = '该部门有子部门，不能删除！';
$lang->dept->error->hasUsers = '该部门有职员，不能删除！';
/* dev */
$lang->dev->common     = '二次开发';
$lang->dev->api        = 'API';
$lang->dev->db         = '数据库';
$lang->dev->editor     = '编辑器';
$lang->dev->dbList     = '数据库';
$lang->dev->moduleList = '模块列表';
$lang->dev->params     = '参数列表';
$lang->dev->type       = '类型';
$lang->dev->desc       = '描述';
$lang->dev->noParams   = '无参数';

$lang->dev->fields = array();
$lang->dev->fields['id']     = '序号';
$lang->dev->fields['name']   = '字段';
$lang->dev->fields['desc']   = '描述';
$lang->dev->fields['type']   = '类型';
$lang->dev->fields['length'] = '长度';
$lang->dev->fields['null']   = '是否可空';

$lang->dev->tableList = array();
$lang->dev->tableList['action']         = '系统日志';
$lang->dev->tableList['bug']            = 'Bug';
$lang->dev->tableList['build']          = '版本';
$lang->dev->tableList['burn']           = '燃尽图';
$lang->dev->tableList['case']           = '测试用例';
$lang->dev->tableList['casestep']       = '用例步骤';
$lang->dev->tableList['company']        = '公司';
$lang->dev->tableList['config']         = '配置';
$lang->dev->tableList['custom']         = '自定义';
$lang->dev->tableList['dept']           = '部门';
$lang->dev->tableList['doc']            = '文档';
$lang->dev->tableList['doclib']         = '文档库';
$lang->dev->tableList['effort']         = '日志';
$lang->dev->tableList['extension']      = '插件';
$lang->dev->tableList['file']           = '附件';
$lang->dev->tableList['group']          = '用户组';
$lang->dev->tableList['grouppriv']      = '组权限';
$lang->dev->tableList['history']        = '操作历史';
$lang->dev->tableList['lang']           = '语言定义';
$lang->dev->tableList['module']         = '模块';
$lang->dev->tableList['product']        = $lang->productCommon;
$lang->dev->tableList['productplan']    = $lang->productCommon . '计划';
$lang->dev->tableList['project']        = $lang->projectCommon;
$lang->dev->tableList['projectproduct'] = $lang->projectCommon . $lang->productCommon;
$lang->dev->tableList['projectstory']   = $lang->projectCommon . '需求';
$lang->dev->tableList['release']        = '发布';
$lang->dev->tableList['story']          = '需求';
$lang->dev->tableList['storyspec']      = '需求描述';
$lang->dev->tableList['task']           = '任务';
$lang->dev->tableList['taskestimate']   = '任务预计';
$lang->dev->tableList['team']           = '团队';
$lang->dev->tableList['testresult']     = '测试结果';
$lang->dev->tableList['testrun']        = '测试执行';
$lang->dev->tableList['testtask']       = '测试任务';
$lang->dev->tableList['todo']           = '待办';
$lang->dev->tableList['user']           = '用户';
$lang->dev->tableList['usercontact']    = '用户联系人';
$lang->dev->tableList['usergroup']      = '用户组';
$lang->dev->tableList['userquery']      = '用户查询';
$lang->dev->tableList['usertpl']        = '用户模板';
$lang->dev->tableList['admin']          = '后台管理';
$lang->dev->tableList['api']            = 'API接口';
$lang->dev->tableList['backup']         = '备份';
$lang->dev->tableList['common']         = '公有模块';
$lang->dev->tableList['convert']        = '导入';
$lang->dev->tableList['dev']            = '二次开发';
$lang->dev->tableList['git']            = 'GIT';
$lang->dev->tableList['index']          = '首页';
$lang->dev->tableList['install']        = '安装';
$lang->dev->tableList['mail']           = '邮箱';
$lang->dev->tableList['misc']           = '杂项';
$lang->dev->tableList['my']             = '我的地盘';
$lang->dev->tableList['qa']             = '测试';
$lang->dev->tableList['report']         = '统计';
$lang->dev->tableList['search']         = '搜索';
$lang->dev->tableList['sso']            = '单点登录';
$lang->dev->tableList['svn']            = 'SVN';
$lang->dev->tableList['testcase']       = '测试用例';
$lang->dev->tableList['tree']           = '模块关系';
$lang->dev->tableList['upgrade']        = '更新';
$lang->dev->tableList['cron']           = '定时任务';
$lang->dev->tableList['mailqueue']      = '邮件队列';
$lang->dev->tableList['datatable']      = '数据表格';

$lang->dev->groupList['my']      = '我的地盘';
$lang->dev->groupList['product'] = $lang->productCommon;
$lang->dev->groupList['project'] = $lang->projectCommon;
$lang->dev->groupList['qa']      = '测试';
$lang->dev->groupList['doc']     = '文档';
$lang->dev->groupList['report']  = '统计';
$lang->dev->groupList['company'] = '组织';
$lang->dev->groupList['admin']   = '后台';
$lang->dev->groupList['other']   = '其他模块';
/* doc */
$lang->doc->common         = '文档';
$lang->doc->id             = '文档编号';
$lang->doc->product        = '所属' . $lang->productCommon;
$lang->doc->project        = '所属' . $lang->projectCommon;
$lang->doc->lib            = '所属文档库';
$lang->doc->module         = '所属分类';
$lang->doc->title          = '文档标题';
$lang->doc->digest         = '文档摘要';
$lang->doc->comment        = '文档备注';
$lang->doc->type           = '文档类型';
$lang->doc->content        = '文档正文';
$lang->doc->keywords       = '关键字';
$lang->doc->url            = '文档URL';
$lang->doc->files          = '附件';
$lang->doc->addedBy        = '由谁添加';
$lang->doc->addedDate      = '添加时间';
$lang->doc->editedBy       = '由谁编辑';
$lang->doc->editedDate     = '编辑时间';
$lang->doc->basicInfo      = '基本信息';
$lang->doc->deleted        = '已删除';

$lang->doc->moduleDoc      = '按模块浏览';
$lang->doc->searchDoc      = '搜索';
//$lang->doc->allDoc         = '所有文档';

$lang->doc->index          = '首页';
$lang->doc->create         = '创建文档';
$lang->doc->edit           = '编辑文档';
$lang->doc->delete         = '删除文档';
$lang->doc->browse         = '文档列表';
$lang->doc->view           = '文档详情';
$lang->doc->manageType     = '维护分类';
$lang->doc->addType        = '增加分类';

$lang->doc->libName        = '文档库名称';
$lang->doc->createLib      = '创建文档库';
$lang->doc->editLib        = '编辑文档库';
$lang->doc->deleteLib      = '删除文档库';

$lang->doc->allProduct     = '所有' . $lang->productCommon;
$lang->doc->allProject     = '所有' . $lang->projectCommon;

$lang->doc->systemLibs['product'] = $lang->productCommon . '文档库';
$lang->doc->systemLibs['project'] = $lang->projectCommon . '文档库';

$lang->doc->types['file'] = '文件';
$lang->doc->types['url']  = '链接';
$lang->doc->types['text'] = '网页';

$lang->doc->confirmDelete      = "您确定删除该文档吗？";
$lang->doc->confirmDeleteLib   = "您确定删除该文档库吗？";
$lang->doc->errorEditSystemDoc = "系统文档库无需修改。";
$lang->doc->errorEmptyProduct  = "没有{$lang->productCommon}，无法创建文档";
$lang->doc->errorEmptyProject  = "没有{$lang->projectCommon}，无法创建文档";

$lang->doc->placeholder = new stdclass();
$lang->doc->placeholder->url = '相应的链接地址';

$lang->doclib = new stdclass();
$lang->doclib->name = '文档库名称';
/* editor */
$lang->editor->common    = '编辑器';
$lang->editor->api       = 'API';
$lang->editor->index     = '首页';
$lang->editor->newMethod = '新增方法';
$lang->editor->extend    = '扩展';
$lang->editor->api       = 'API';
$lang->editor->newLang   = '新增语言';
$lang->editor->newConfig = '新增配置';
$lang->editor->newHook   = '新增钩子';
$lang->editor->newExtend = '新增扩展';
$lang->editor->newPage   = '新增页面';
$lang->editor->override  = '覆盖';
$lang->editor->edit      = '编辑扩展';
$lang->editor->save      = '保存页面';
$lang->editor->delete    = '删除页面';

$lang->editor->moduleList   = '模块列表';
$lang->editor->filePath     = "扩展：";
$lang->editor->sourceFile   = '源文件：';
$lang->editor->fileName     = "文件名：";
$lang->editor->isOverride   = "覆盖重复文件";
$lang->editor->exampleHook  = "(例如：***.html.hook.php)";
$lang->editor->exampleJs    = "(例如：***.js)";
$lang->editor->exampleCss   = "(例如：***.css)";
$lang->editor->examplePHP   = "(例如：***.php)";
$lang->editor->pageName     = "页面名称：";

$lang->editor->deleteConfirm = '是否要删除？';
$lang->editor->extendConfirm = '是否要重用原来代码？';
$lang->editor->repeatFile    = '文件名重复';
$lang->editor->repeatPage    = '已经有此页面。是否覆盖？';
$lang->editor->noticeOkFile  = '为了安全起见，系统需要确认您的管理员身份。\n 请登录禅道所在的服务器，创建%s文件。\n 注意：\n 1. 文件内容为空。\n 2. 如果之前文件存在，删除之后重新创建。';

$lang->editor->notWritable   = "无法写入，可能没有权限。请尝试执行 chmod 777 -R ";
$lang->editor->notDelete     = '无法删除，请检查权限！';
$lang->editor->emptyFileName = '请写入一个文件名！';

$lang->editor->translate['config.php']  = 'config';
$lang->editor->translate['control.php'] = 'control';
$lang->editor->translate['model.php']   = 'model';

$lang->editor->modules['action']      = '系统日志';
$lang->editor->modules['admin']       = '后台管理';
$lang->editor->modules['api']         = 'API接口';
$lang->editor->modules['bug']         = '缺陷管理';
$lang->editor->modules['build']       = 'Build';
$lang->editor->modules['common']      = '公有模块';
$lang->editor->modules['company']     = '组织视图';
$lang->editor->modules['convert']     = '从其他系统导入';
$lang->editor->modules['dept']        = '部门结构';
$lang->editor->modules['doc']         = '文档视图';
$lang->editor->modules['extension']   = '插件管理';
$lang->editor->modules['file']        = '附件';
$lang->editor->modules['group']       = '权限分组';
$lang->editor->modules['index']       = '首页';
$lang->editor->modules['install']     = '安装';
$lang->editor->modules['misc']        = '杂项';
$lang->editor->modules['my']          = '我的地盘';
$lang->editor->modules['product']     = $lang->productCommon . '视图';
$lang->editor->modules['productplan'] = '计划';
$lang->editor->modules['project']     = $lang->projectCommon . '视图';
$lang->editor->modules['qa']          = '测试视图';
$lang->editor->modules['release']     = '发布';
$lang->editor->modules['report']      = '报表';
$lang->editor->modules['search']      = '搜索';
$lang->editor->modules['story']       = '需求';
$lang->editor->modules['task']        = '任务';
$lang->editor->modules['testcase']    = '用例管理';
$lang->editor->modules['testtask']    = '测试任务';
$lang->editor->modules['todo']        = '待办';
$lang->editor->modules['tree']        = '模块维护';
$lang->editor->modules['upgrade']     = '升级';
$lang->editor->modules['user']        = '用户';
/* extension */
$lang->extension->common        = '插件管理';
$lang->extension->browse        = '浏览插件';
$lang->extension->install       = '安装插件';
$lang->extension->installAuto   = '自动安装';
$lang->extension->installForce  = '强制安装';
$lang->extension->uninstall     = '卸载';
$lang->extension->activate      = '激活';
$lang->extension->deactivate    = '禁用';
$lang->extension->obtain        = '获得插件';
$lang->extension->view          = '详情';
$lang->extension->downloadAB    = '下载';
$lang->extension->upload        = '本地安装';
$lang->extension->erase         = '清除';
$lang->extension->upgrade       = '升级插件';
$lang->extension->agreeLicense  = '我同意该授权';

$lang->extension->structure   = '目录结构';
$lang->extension->installed   = '已安装';
$lang->extension->deactivated = '被禁用';
$lang->extension->available   = '已下载';

$lang->extension->version     = '版本';
$lang->extension->compatible  = '适用版本';
$lang->extension->latest      = '<small>最新版本<strong><a href="%s" target="_blank" class="extension">%s</a></strong>，兼容禅道<a href="http://api.zentao.net/goto.php?item=latest" target="_blank" class="alert-link"><strong>%s</strong></a></small>';
$lang->extension->author      = '作者';
$lang->extension->license     = '授权';
$lang->extension->site        = '官网';
$lang->extension->downloads   = '下载量';
$lang->extension->compatible  = '兼容性';
$lang->extension->grade       = '评分';
$lang->extension->depends     = '依赖';

$lang->extension->publicList[0] = '手工下载';
$lang->extension->publicList[1] = '直接下载';

$lang->extension->compatibleList[0] = '未知';
$lang->extension->compatibleList[1] = '兼容';

$lang->extension->byDownloads   = '最多下载';
$lang->extension->byAddedTime   = '最新添加';
$lang->extension->byUpdatedTime = '最近更新';
$lang->extension->bySearch      = '搜索';
$lang->extension->byCategory    = '分类浏览';

$lang->extension->installFailed            = '%s失败，错误原因如下:';
$lang->extension->uninstallFailed          = '卸载失败，错误原因如下:';
$lang->extension->confirmUninstall         = '卸载插件会删除或修改相关的数据库，是否继续卸载？';
$lang->extension->installFinished          = '恭喜您，插件顺利的%s成功！';
$lang->extension->refreshPage              = '刷新页面';
$lang->extension->uninstallFinished        = '插件已经成功卸载';
$lang->extension->deactivateFinished       = '插件已经成功禁用';
$lang->extension->activateFinished         = '插件已经成功激活';
$lang->extension->eraseFinished            = '插件已经成功清除';
$lang->extension->unremovedFiles           = '有一些文件或目录未能删除，需要手工删除';
$lang->extension->executeCommands          = '<h3>执行下面的命令来修正这些问题：</h3>';
$lang->extension->successDownloadedPackage = '成功下载插件';
$lang->extension->successCopiedFiles       = '成功拷贝文件';
$lang->extension->successInstallDB         = '成功安装数据库';
$lang->extension->viewInstalled            = '查看已安装插件';
$lang->extension->viewAvailable            = '查看可安装插件';
$lang->extension->viewDeactivated          = '查看已禁用插件';
$lang->extension->backDBFile               = '插件相关数据已经备份到 %s 文件中！';
$lang->extension->noticeOkFile             = '<h5>为了安全起见，系统需要确认您的管理员身份</h5>
    <h5>请登录禅道所在的服务器，创建%s文件。</h5>
    <p>注意：</p>
    <ol>
    <li>文件内容为空。</li>
    <li>如果之前文件存在，删除之后重新创建。</li>
    </ol>'; 

$lang->extension->upgradeExt     = '升级';
$lang->extension->installExt     = '安装';
$lang->extension->upgradeVersion = '（从%s升级到%s）';

$lang->extension->waring = '警告';

$lang->extension->errorOccurs                  = '错误：';
$lang->extension->errorGetModules              = '从www.zentao.net获得插件分类失败。可能是因为网络方面的原因，请检查后重新刷新页面。';
$lang->extension->errorGetExtensions           = '从www.zentao.net获得插件失败。可能是因为网络方面的原因，您可以到 <a href="http://www.zentao.net/extension/" target="_blank" class="alert-link">www.zentao.net</a> 手工下载插件，然后上传安装。';
$lang->extension->errorDownloadPathNotFound    = '插件下载存储路径<strong>%s</strong>不存在。<br />linux下面请执行命令：<strong>mkdir -p %s</strong>来修正。';
$lang->extension->errorDownloadPathNotWritable = '插件下载存储路径<strong>%s</strong>不可写。<br />linux下面请执行命令：<strong>sudo chmod 777 %s</strong>来修正。';
$lang->extension->errorPackageFileExists       = '下载路径已经有一个名为的<strong>%s</strong>附件。<h5>重新%s，<a href="%s" class="alert-link">请点击此链接</a></h5>';
$lang->extension->errorDownloadFailed          = '下载失败，请重新下载。如果多次重试还不行，请尝试手工下载，然后通过上传功能上传。';
$lang->extension->errorMd5Checking             = '下载文件不完整，请重新下载。如果多次重试还不行，请尝试手工下载，然后通过上传功能上传。';
$lang->extension->errorExtracted               = '包文件<strong> %s </strong>解压缩失败，可能不是一个有效的zip文件。错误信息如下：<br />%s';
$lang->extension->errorCheckIncompatible       = '该插件与禅道版本不兼容，%s后可能无法使用。<h3>您可以选择 <a href="%s">强制%s</a> 或者 <a href="#" onclick=parent.location.href="%s">取消</a></h3>';
$lang->extension->errorFileConflicted          = '有以下文件冲突：<br />%s <h3>您可以选择 <a href="%s">覆盖</a> 或者 <a href="#" onclick=parent.location.href="%s">取消</a></h3>';
$lang->extension->errorPackageNotFound         = '包文件 <strong>%s </strong>没有找到，可能是因为自动下载失败。您可以尝试再次下载。';
$lang->extension->errorTargetPathNotWritable   = '目标路径 <strong>%s </strong>不可写。';
$lang->extension->errorTargetPathNotExists     = '目标路径 <strong>%s </strong>不存在。';
$lang->extension->errorInstallDB               = '执行数据库语句失败。错误信息如下：%s';
$lang->extension->errorConflicts               = '与插件“%s”冲突！';
$lang->extension->errorDepends                 = '以下依赖插件没有安装或版本不正确：<br /><br /> %s';
$lang->extension->errorIncompatible            = '该插件与您的禅道版本不兼容';
$lang->extension->errorUninstallDepends        = '插件“%s”依赖该插件，不能卸载';
/* file */
$lang->file = new stdclass();
$lang->file->common        = '附件';
$lang->file->uploadImages  = '多图上传';
$lang->file->download      = '下载附件';
$lang->file->edit          = '重命名';
$lang->file->inputFileName = '请输入附件名称';
$lang->file->delete        = '删除附件';
$lang->file->label         = '标题：';
$lang->file->maxUploadSize = "<span class='red'>%s</span>";
$lang->file->applyTemplate = "应用模板";
$lang->file->tplTitle      = "模板名称";
$lang->file->setPublic     = "设置公共模板";
$lang->file->exportFields  = "要导出字段";
$lang->file->defaultTPL    = "默认模板";
$lang->file->setExportTPL  = "设置";

$lang->file->errorNotExists   = "<span class='red'>文件夹 '%s' 不存在</span>";
$lang->file->errorCanNotWrite = "<span class='red'>文件夹 '%s' 不可写,请改变文件夹的权限。在linux中输入指令:sudo chmod -R 777 '%s'</span>";
$lang->file->confirmDelete    = " 您确定删除该附件吗？";
$lang->file->errorFileSize    = " 文件大小已经超过限制，可能不能成功上传！";
$lang->file->errorFileUpload  = " 文件上传失败，文件大小可能超出限制";
$lang->file->dangerFile       = " 您选择的文件存在安全风险，系统将不予上传。";
$lang->file->errorSuffix      = '压缩包格式错误，只能上传zip压缩包！';
$lang->file->errorExtract     = '解压缩失败！可能文件已经损坏，或压缩包里含有非法上传文件。';
$lang->file->uploadImagesExplain = <<<EOD
<p>1、上传文件为包含图片的zip压缩包，程序会以文件名作为标题，以图片作为内容。</p>
<p>2、如果文件名开头含有 数字+下划线，以方便排序，程序会将他们忽略。</p>
<p>3、图片格式：jpg|jpeg|gif|png。</p>
EOD;
/* git */
$lang->git = new stdclass();
$lang->git->common  = 'Git';
$lang->git->cat     = '查看源代码';
$lang->git->diff    = '比较源代码';
$lang->git->apiSync = '接口：同步git日志';
/* group */
$lang->group->common             = '权限分组';
$lang->group->browse             = '浏览分组';
$lang->group->create             = '新增分组';
$lang->group->edit               = '编辑分组';
$lang->group->copy               = '复制分组';
$lang->group->delete             = '删除分组';
$lang->group->manageView         = '视图维护';
$lang->group->managePriv         = '权限维护';
$lang->group->managePrivByGroup  = '权限维护';
$lang->group->managePrivByModule = '按模块分配权限';
$lang->group->byModuleTips       = '<span class="tips">（可以按住shift或者control键进行多选）</span>';
$lang->group->manageMember       = '成员维护';
$lang->group->confirmDelete      = '您确定删除该用户分组吗？';
$lang->group->successSaved       = '成功保存';
$lang->group->errorNotSaved      = '没有保存，请确认选择了权限数据。';
$lang->group->viewList           = '允许访问视图';
$lang->group->productList        = '允许访问' . $lang->productCommon;
$lang->group->projectList        = '允许访问' . $lang->projectCommon;
$lang->group->noticeVisit        = '空代表访问没有访问限制';

$lang->group->id       = '编号';
$lang->group->name     = '分组名称';
$lang->group->desc     = '分组描述';
$lang->group->users    = '用户列表';
$lang->group->module   = '模块';
$lang->group->method   = '方法';
$lang->group->priv     = '权限';
$lang->group->option   = '选项';
$lang->group->inside   = '组内用户';
$lang->group->outside  = '组外用户';
$lang->group->other    = '其他模块';
$lang->group->all      = '所有权限';

$lang->group->copyOptions['copyPriv'] = '复制权限';
$lang->group->copyOptions['copyUser'] = '复制用户';

$lang->group->versions['']          = '修改历史';
$lang->group->versions['8_2_beta']  = '禅道8.2.beta';
$lang->group->versions['8_0_1']     = '禅道8.0.1';
$lang->group->versions['8_0']       = '禅道8.0';
$lang->group->versions['7_4_beta']  = '禅道7.4.beta';
$lang->group->versions['7_3']       = '禅道7.3';
$lang->group->versions['7_2']       = '禅道7.2';
$lang->group->versions['7_1']       = '禅道7.1';
$lang->group->versions['6_4']       = '禅道6.4';
$lang->group->versions['6_3']       = '禅道6.3';
$lang->group->versions['6_2']       = '禅道6.2';
$lang->group->versions['6_1']       = '禅道6.1';
$lang->group->versions['5_3']       = '禅道5.3';
$lang->group->versions['5_1']       = '禅道5.1';
$lang->group->versions['5_0_beta2'] = '禅道5.0.beta2';
$lang->group->versions['5_0_beta1'] = '禅道5.0.beta1';
$lang->group->versions['4_3_beta']  = '禅道4.3.beta';
$lang->group->versions['4_2_beta']  = '禅道4.2.beta';
$lang->group->versions['4_1']       = '禅道4.1';
$lang->group->versions['4_0_1']     = '禅道4.0.1';
$lang->group->versions['4_0']       = '禅道4.0';
$lang->group->versions['4_0_beta2'] = '禅道4.0.beta2';
$lang->group->versions['4_0_beta1'] = '禅道4.0.beta1';
$lang->group->versions['3_3']       = '禅道3.3';
$lang->group->versions['3_2_1']     = '禅道3.2.1';
$lang->group->versions['3_2']       = '禅道3.2';
$lang->group->versions['3_1']       = '禅道3.1';
$lang->group->versions['3_0_beta2'] = '禅道3.0.beta2';
$lang->group->versions['3_0_beta1'] = '禅道3.0.beta1';
$lang->group->versions['2_4']       = '禅道2.4';
$lang->group->versions['2_3']       = '禅道2.3';
$lang->group->versions['2_2']       = '禅道2.2';
$lang->group->versions['2_1']       = '禅道2.1';
$lang->group->versions['2_0']       = '禅道2.0';
$lang->group->versions['1_5']       = '禅道1.5';
$lang->group->versions['1_4']       = '禅道1.4';
$lang->group->versions['1_3']       = '禅道1.3';
$lang->group->versions['1_2']       = '禅道1.2';
$lang->group->versions['1_1']       = '禅道1.1';
$lang->group->versions['1_0_1']     = '禅道1.0.1';

include (dirname(__FILE__) . '/resource.php');
/* index */
$lang->index->common = '首页';
$lang->index->index  = '首页';
/* install */
$lang->install = new stdclass();

$lang->install->common  = '安装';
$lang->install->next    = '下一步';
$lang->install->pre     = '返回';
$lang->install->reload  = '刷新';
$lang->install->error   = '错误 ';

$lang->install->start            = '开始安装';
$lang->install->keepInstalling   = '继续安装当前版本';
$lang->install->seeLatestRelease = '看看最新的版本';
$lang->install->welcome          = '欢迎使用禅道项目管理软件！';
$lang->install->license          = '禅道项目管理软件使用 Z PUBLIC LICENSE(ZPL) 1.2 授权协议';
$lang->install->desc             = <<<EOT
禅道项目管理软件(ZenTaoPMS)是一款国产的，基于<a href='http://zpl.pub' target='_blank'>ZPL</a>协议，开源免费的项目管理软件，它集产品管理、项目管理、测试管理于一体，同时还包含了事务管理、组织管理等诸多功能，是中小型企业项目管理的首选。

禅道项目管理软件使用PHP + MySQL开发，基于自主的PHP开发框架──ZenTaoPHP而成。第三方开发者或者企业可以非常方便的开发插件或者进行定制。
EOT;
$lang->install->links = <<<EOT
禅道项目管理软件由<strong><a href='http://www.cnezsoft.com' target='_blank' class='text-danger'>青岛易软天创网络科技有限公司</a>开发</strong>。
官方网站：<a href='http://www.zentao.net' target='_blank'>http://www.zentao.net</a>
技术支持：<a href='http://www.zentao.net/ask/' target='_blank'>http://www.zentao.net/ask/</a>
新浪微博：<a href='http://weibo.com/easysoft' target='_blank'>http://weibo.com/easysoft</a>

您现在正在安装的版本是 <strong class='text-danger'>%s</strong>。
EOT;

$lang->install->newReleased= "<strong class='text-danger'>提示</strong>：官网网站已有最新版本<strong class='text-danger'>%s</strong>, 发布日期于 %s。";
$lang->install->or         = '或者';
$lang->install->checking   = '系统检查';
$lang->install->ok         = '检查通过(√)';
$lang->install->fail       = '检查失败(×)';
$lang->install->loaded     = '已加载';
$lang->install->unloaded   = '未加载';
$lang->install->exists     = '目录存在 ';
$lang->install->notExists  = '目录不存在 ';
$lang->install->writable   = '目录可写 ';
$lang->install->notWritable= '目录不可写 ';
$lang->install->phpINI     = 'PHP配置文件';
$lang->install->checkItem  = '检查项';
$lang->install->current    = '当前配置';
$lang->install->result     = '检查结果';
$lang->install->action     = '如何修改';

$lang->install->phpVersion = 'PHP版本';
$lang->install->phpFail    = 'PHP版本必须大于5.2.0';

$lang->install->pdo          = 'PDO扩展';
$lang->install->pdoFail      = '修改PHP配置文件，加载PDO扩展。';
$lang->install->pdoMySQL     = 'PDO_MySQL扩展';
$lang->install->pdoMySQLFail = '修改PHP配置文件，加载pdo_mysql扩展。';
$lang->install->json         = 'JSON扩展';
$lang->install->jsonFail     = '修改PHP配置文件，加载JSON扩展。';
$lang->install->tmpRoot      = '临时文件目录';
$lang->install->dataRoot     = '上传文件目录';
$lang->install->session      = 'Session存储目录';
$lang->install->sessionFail  = '修改PHP配置文件，设置session.save_path';
$lang->install->mkdir        = '<p>需要创建目录%s。<br /> linux下面命令为：<br /> mkdir -p %s</p>';
$lang->install->chmod        = '需要修改目录 "%s" 的权限。<br />linux下面命令为：<br />chmod o=rwx -R %s';

$lang->install->defaultLang    = '默认语言';
$lang->install->dbHost         = '数据库服务器';
$lang->install->dbHostNote     = '如果127.0.0.1无法访问，尝试使用localhost';
$lang->install->dbPort         = '服务器端口';
$lang->install->dbUser         = '数据库用户名';
$lang->install->dbPassword     = '数据库密码';
$lang->install->dbName         = 'PMS使用的库';
$lang->install->dbPrefix       = '建表使用的前缀';
$lang->install->clearDB        = '清空现有数据';
$lang->install->importDemoData = '导入demo数据';

$lang->install->requestTypes['GET']       = '普通方式';
$lang->install->requestTypes['PATH_INFO'] = '静态友好方式';

$lang->install->errorConnectDB      = '数据库连接失败 ';
$lang->install->errorDBName         = '数据库名不能含有 “.” ';
$lang->install->errorCreateDB       = '数据库创建失败';
$lang->install->errorTableExists    = '数据表已经存在，您之前应该有安装过禅道，继续安装请返回前页并选择清空数据';
$lang->install->errorCreateTable    = '创建表失败';
$lang->install->errorImportDemoData = '导入demo数据失败';

$lang->install->setConfig  = '生成配置文件';
$lang->install->key        = '配置项';
$lang->install->value      = '值';
$lang->install->saveConfig = '保存配置文件';
$lang->install->save2File  = '<div class="alert alert-warning">拷贝上面文本框中的内容，将其保存到 "<strong> %s </strong>"中。您以后还可继续修改此配置文件。</div>';
$lang->install->saved2File = '配置信息已经成功保存到" <strong>%s</strong> "中。您后面还可继续修改此文件。';
$lang->install->errorNotSaveConfig = '还没有保存配置文件';

$lang->install->getPriv  = '设置帐号';
$lang->install->company  = '公司名称';
$lang->install->account  = '管理员帐号';
$lang->install->password = '管理员密码';
$lang->install->errorEmptyPassword = '密码不能为空';

$lang->install->groupList['ADMIN']['name']  = '管理员';
$lang->install->groupList['ADMIN']['desc']  = '系统管理员';
$lang->install->groupList['DEV']['name']    = '研发';
$lang->install->groupList['DEV']['desc']    = '研发人员';
$lang->install->groupList['QA']['name']     = '测试';
$lang->install->groupList['QA']['desc']     = '测试人员';
$lang->install->groupList['PM']['name']     = '项目经理';
$lang->install->groupList['PM']['desc']     = '项目经理';
$lang->install->groupList['PO']['name']     = '产品经理';
$lang->install->groupList['PO']['desc']     = '产品经理';
$lang->install->groupList['TD']['name']     = '研发主管';
$lang->install->groupList['TD']['desc']     = '研发主管';
$lang->install->groupList['PD']['name']     = '产品主管';
$lang->install->groupList['PD']['desc']     = '产品主管';
$lang->install->groupList['QD']['name']     = '测试主管';
$lang->install->groupList['QD']['desc']     = '测试主管';
$lang->install->groupList['TOP']['name']    = '高层管理';
$lang->install->groupList['TOP']['desc']    = '高层管理';
$lang->install->groupList['OTHERS']['name'] = '其他';
$lang->install->groupList['OTHERS']['desc'] = '其他';

$lang->install->success  = "安装成功";
$lang->install->login    = '登录禅道管理系统';
$lang->install->register = '禅道社区注册';

$lang->install->joinZentao = <<<EOT
<p>您已经成功安装禅道管理系统%s，<strong class='text-danger'>请及时删除install.php</strong>。</p><p>友情提示：为了您及时获得禅道的最新动态，请在禅道社区(<a href='http://www.zentao.net' class='alert-link' target='_blank'>www.zentao.net</a>)进行登记。</p>

EOT;

$lang->install->promotion = "为您推荐易软天创旗下其他产品：";
$lang->install->chanzhi   = new stdclass();
$lang->install->chanzhi->name = '蝉知企业门户系统';
$lang->install->chanzhi->desc = <<<EOD
<ul>
  <li>专业的企业营销门户系统</li>
  <li>功能丰富，操作简洁方便</li>
  <li>大量细节针对SEO优化</li>
  <li>开源免费，不限商用！</li>
</ul>
EOD;
$lang->install->ranzhi = new stdclass();
$lang->install->ranzhi->name = '然之协同管理系统';
$lang->install->ranzhi->desc = <<<EOD
<ul>
  <li>客户管理，订单跟踪</li>
  <li>项目任务，公告文档</li>
  <li>收入支出，出帐入账</li>
  <li>论坛博客，动态消息</li>
</ul>
EOD;
$lang->install->yidou = new stdclass();
$lang->install->yidou->name = '亿斗进销存管理运营系统';
$lang->install->yidou->desc = <<<EOD
<ul>
  <li>销售订单处理，信息及时反馈</li>
  <li>采销业务状况，时时查询跟进</li>
  <li>仓储配货送货，轻松便利快捷</li>
  <li>财务收款付款，简单实用准确</li>
</ul>
EOD;
/* mail */
$lang->mail->common = '发信配置';
$lang->mail->index  = '首页';
$lang->mail->detect = '检测';
$lang->mail->edit   = '编辑配置';
$lang->mail->save   = '成功保存';
$lang->mail->test   = '测试发信';
$lang->mail->reset  = '重置';
$lang->mail->browse = '邮件列表';
$lang->mail->delete = '删除邮件';
$lang->mail->sendCloud     = 'SendCloud发信';
$lang->mail->batchDelete   = '批量删除';
$lang->mail->sendcloudUser = '同步联系人';

$lang->mail->turnon      = '是否打开';
$lang->mail->async       = '异步发送';
$lang->mail->fromAddress = '发信邮箱';
$lang->mail->fromName    = '发信人';
$lang->mail->host        = 'smtp服务器';
$lang->mail->port        = 'smtp端口号';
$lang->mail->auth        = '是否需要验证';
$lang->mail->username    = 'smtp帐号';
$lang->mail->password    = 'smtp密码';
$lang->mail->secure      = '是否加密';
$lang->mail->debug       = '调试级别';
$lang->mail->charset     = '编码';
$lang->mail->accessKey   = 'accessKey';
$lang->mail->secretKey   = 'secretKey';

$lang->mail->selectMTA = '请选择发信方式：';
$lang->mail->smtp      = 'SMTP发信';

$lang->mail->syncedUser = '已经同步';
$lang->mail->unsyncUser = '未同步';
$lang->mail->sync       = '同步';
$lang->mail->remove     = '移除';

$lang->mail->toList      = '收信人';
$lang->mail->subjectName = '主题';
$lang->mail->addedBy     = '发送者';
$lang->mail->addedDate   = '创建时间';
$lang->mail->sendTime    = '发送时间';
$lang->mail->status      = '状态';
$lang->mail->failReason  = '失败原因';

$lang->mail->statusList['send'] = '成功';
$lang->mail->statusList['fail'] = '失败';

$lang->mail->turnonList[1]  = '打开';
$lang->mail->turnonList[0] = '关闭';

$lang->mail->asyncList[1] = '是';
$lang->mail->asyncList[0] = '否';

$lang->mail->debugList[0] = '关闭';
$lang->mail->debugList[1] = '一般';
$lang->mail->debugList[2] = '较高';

$lang->mail->authList[1]  = '需要';
$lang->mail->authList[0] = '不需要';

$lang->mail->secureList['']    = '不加密';
$lang->mail->secureList['ssl'] = 'ssl';
$lang->mail->secureList['tls'] = 'tls';

$lang->mail->inputFromEmail = '请输入发信邮箱：';
$lang->mail->nextStep       = '下一步';
$lang->mail->successSaved   = '配置信息已经成功保存。';
$lang->mail->subject        = '测试邮件';
$lang->mail->content        = '邮箱设置成功';
$lang->mail->successSended  = '成功发送！';
$lang->mail->confirmDelete  = '是否删除邮件？';
$lang->mail->sendmailTips   = '提示：系统不会为当前操作者发信。';
$lang->mail->needConfigure  = '无法找到邮件配置信息，请先配置邮件发送参数。';
$lang->mail->nofsocket      = 'fsocket相关函数被禁用，不能发信！请在php.ini中修改allow_url_fopen为On，打开openssl扩展。 保存并重新启动apache。';
$lang->mail->noOpenssl      = 'ssl和tls加密，请打开openssl扩展。 保存并重新启动apache。';
$lang->mail->sendCloudFail  = '操作失败，原因：';
$lang->mail->sendCloudHelp  = <<<EOD
<p>1、Notice SendCloud是SendCloud的团队通知服务。具体可以到<a href="http://notice.sendcloud.net/" target="_blank">notice.sendcloud.net</a>查看</p>
<p>2、accessKey和secretKey可以到登陆后的"设置"页面查看。发信人地址和名称也在"设置"页面设置。</p>
<p>3、发信时，Notice SendCloud联系人里面的昵称要跟邮箱一致，否则无法成功发信。可以到[<a href='%s'>同步联系人</a>]页面，将禅道用户同步到SendCloud联系人中</p>
EOD;
$lang->mail->sendCloudSuccess = '操作成功';
$lang->mail->closeSendCloud   = '关闭SendCloud';
/* misc */
$lang->misc = new stdclass();
$lang->misc->common = '杂项';
$lang->misc->ping   = '防超时';

$lang->misc->zentao = new stdclass();
$lang->misc->zentao->version           = '版本%s';
$lang->misc->zentao->labels['about']   = '关于禅道';
$lang->misc->zentao->labels['support'] = '技术支持';
$lang->misc->zentao->labels['cowin']   = '帮助我们';
$lang->misc->zentao->labels['service'] = '服务列表';

$lang->misc->zentao->icons['about']   = 'group';
$lang->misc->zentao->icons['support'] = 'question-sign';
$lang->misc->zentao->icons['cowin']   = 'hand-right';
$lang->misc->zentao->icons['service'] = 'heart';

$lang->misc->zentao->about['proversion']   = '升级专业版本';
$lang->misc->zentao->about['official']     = "官方网站";
$lang->misc->zentao->about['changelog']    = "版本历史";
$lang->misc->zentao->about['license']      = "授权协议";
$lang->misc->zentao->about['extension']    = "插件平台";

$lang->misc->zentao->support['vip']        = "商业技术支持";
$lang->misc->zentao->support['manual']     = "用户手册";
$lang->misc->zentao->support['faq']        = "常见问题";
$lang->misc->zentao->support['ask']        = "官方问答";
$lang->misc->zentao->support['qqgroup']    = "官方QQ群";

$lang->misc->zentao->cowin['donate']       = "捐助我们";
$lang->misc->zentao->cowin['reportbug']    = "汇报Bug";
$lang->misc->zentao->cowin['feedback']     = "反馈需求";
$lang->misc->zentao->cowin['recommend']    = "推荐给朋友";
$lang->misc->zentao->cowin['cowinmore']    = "更多方式...";

$lang->misc->zentao->service['zentaotrain']= '禅道使用培训';
$lang->misc->zentao->service['scrumtrain'] = '敏捷开发培训';
$lang->misc->zentao->service['idc']        = '禅道在线托管';
$lang->misc->zentao->service['custom']     = '禅道定制开发';
$lang->misc->zentao->service['install']    = '禅道安装服务';
$lang->misc->zentao->service['fixissue']   = '禅道问题解决';
$lang->misc->zentao->service['servicemore']= '更多服务...';

$lang->misc->mobile      = "手机访问";
$lang->misc->noGDLib     = "请用手机浏览器访问：<strong>%s</strong>";
$lang->misc->copyright   = "&copy; 2009 - 2016 <a href='http://www.cnezsoft.com' target='_blank'>青岛易软天创网络科技有限公司</a> 电话：4006-8899-23 Email：<a href='mailto:co@zentao.net'>co@zentao.net</a>  QQ：1492153927";
$lang->misc->checkTable  = "检查修复数据表";
$lang->misc->needRepair  = "修复表";
$lang->misc->repairTable = "数据库表可以因为断电原因损坏，需要检查修复！！";
$lang->misc->tableName   = "表名";
$lang->misc->tableStatus = "状态";
$lang->misc->novice      = "您可能初次使用禅道，是否进入新手模式？";

$lang->misc->feature = new stdclass();
$lang->misc->feature->lastest         = '最新版本';
$lang->misc->feature->all             = array();
$lang->misc->feature->all['latest']   = array();
$lang->misc->feature->all['latest'][] = array('title'=>'首页自定义', 'desc' => '<p>我的地盘由我做主。现在开始，你可以向首页添加多种多样的内容区块，而且还可以决定如何排列和显示他们。</p><p>我的地盘、产品、项目、测试模块下均支持首页自定义功能。</p>');
$lang->misc->feature->all['latest'][] = array('title'=>'导航定制', 'desc' => '<p>导航上显示的项目现在完全由你来决定，不仅仅可以决定在导航上展示哪些内容，还可以决定展示的顺序。</p><p>将鼠标悬浮在导航上稍后会在右侧显示定制按钮，点击打开定制对话框，通过点击切换是否显示，拖放操作来更改显示顺序。</p>');
$lang->misc->feature->all['latest'][] = array('title'=>'批量添加、编辑自定义', 'desc' => '<p>可以在批量添加和批量编辑页面自定义操作的字段。</p>');
$lang->misc->feature->all['latest'][] = array('title'=>'添加需求、任务、Bug、用例自定义', 'desc' => '<p>可以在添加需求、任务、Bug、用例页面，自定义部分字段是否显示。</p>');
$lang->misc->feature->all['latest'][] = array('title'=>'导出自定义', 'desc' => '<p>在导出需求、任务、Bug、用例的时候，用户可以自定义导出的字段，也可以保存模板方便每次导出。</p>');
$lang->misc->feature->all['latest'][] = array('title'=>'需求、任务、Bug、用例组合检索功能', 'desc' => '<p>在需求、任务、Bug、用例列表页面，可以实现模块和标签的组合检索。</p>');
$lang->misc->feature->all['latest'][] = array('title'=>'增加新手教程', 'desc' => '<p>增加新手教程，方便新用户了解禅道使用。</p>');
/* my */
$lang->my->common = '我的地盘';

/* 方法列表。*/
$lang->my->index          = '首页';
$lang->my->todo           = '我的待办';
$lang->my->task           = '我的任务';
$lang->my->bug            = '我的Bug';
$lang->my->testTask       = '我的版本';
$lang->my->testCase       = '我的用例';
$lang->my->story          = '我的需求';
$lang->my->myProject      = "我的{$lang->projectCommon}";
$lang->my->profile        = '我的档案';
$lang->my->dynamic        = '我的动态';
$lang->my->editProfile    = '修改档案';
$lang->my->changePassword = '修改密码';
$lang->my->unbind         = '解除然之绑定';
$lang->my->manageContacts = '维护联系人';
$lang->my->deleteContacts = '删除联系人';

$lang->my->taskMenu = new stdclass();
$lang->my->taskMenu->assignedToMe = '指派给我';
$lang->my->taskMenu->openedByMe   = '由我创建';
$lang->my->taskMenu->finishedByMe = '由我完成';
$lang->my->taskMenu->closedByMe   = '由我关闭';
$lang->my->taskMenu->canceledByMe = '由我取消';

$lang->my->storyMenu = new stdclass();
$lang->my->storyMenu->assignedToMe = '指派给我';
$lang->my->storyMenu->openedByMe   = '由我创建';
$lang->my->storyMenu->reviewedByMe = '由我评审';
$lang->my->storyMenu->closedByMe   = '由我关闭';

$lang->my->home = new stdclass();
$lang->my->home->latest        = '最新动态';
$lang->my->home->action        = "%s, %s <em>%s</em> %s <a href='%s'>%s</a>。";
$lang->my->home->projects      = $lang->projectCommon;
$lang->my->home->products      = $lang->productCommon;
$lang->my->home->createProject = "创建一个{$lang->projectCommon}";
$lang->my->home->createProduct = "创建一个{$lang->productCommon}";
$lang->my->home->help          = "<a href='http://www.zentao.net/help-read-79236.html' target='_blank'>帮助文档</a>";
$lang->my->home->noProductsTip = "这里还没有{$lang->productCommon}。";

$lang->my->form = new stdclass();
$lang->my->form->lblBasic   = '基本信息';
$lang->my->form->lblContact = '联系信息';
$lang->my->form->lblAccount = '帐号信息';
/* product */
$lang->product->common      = $lang->productCommon . '视图';
$lang->product->index       = $lang->productCommon . "首页";
$lang->product->browse      = "浏览{$lang->productCommon}";
$lang->product->dynamic     = "动态";
$lang->product->view        = "{$lang->productCommon}概况";
$lang->product->edit        = "编辑{$lang->productCommon}";
$lang->product->batchEdit   = "批量编辑";
$lang->product->create      = "新增{$lang->productCommon}";
$lang->product->delete      = "删除{$lang->productCommon}";
$lang->product->deleted     = "已删除";
$lang->product->close       = "关闭";
$lang->product->select      = "请选择{$lang->productCommon}";
$lang->product->mine        = '我负责：';
$lang->product->other       = '其他：';
$lang->product->closed      = '已关闭';
$lang->product->updateOrder = "排序";
$lang->product->all         = "所有{$lang->productCommon}";

$lang->product->basicInfo = '基本信息';
$lang->product->otherInfo = '其他信息';

$lang->product->plans    = '计划数';
$lang->product->releases = '发布数';
$lang->product->docs     = '文档数';
$lang->product->bugs     = '相关BUG';
$lang->product->projects = "关联{$lang->projectCommon}数";
$lang->product->cases    = '用例数';
$lang->product->builds   = 'BUILD数';
$lang->product->roadmap  = '路线图';
$lang->product->doc      = '文档列表';
$lang->product->project  = $lang->projectCommon . '列表';

$lang->product->confirmDelete   = " 您确定删除该{$lang->productCommon}吗？";

$lang->product->errorNoProduct = "还没有创建{$lang->productCommon}！";
$lang->product->accessDenied   = "您无权访问该{$lang->productCommon}";

$lang->product->name      = "{$lang->productCommon}名称";
$lang->product->code      = "{$lang->productCommon}代号";
$lang->product->order     = '排序';
$lang->product->type      = "{$lang->productCommon}类型";
$lang->product->status    = '状态';
$lang->product->desc      = "{$lang->productCommon}描述";
$lang->product->PO        = "{$lang->productCommon}负责人";
$lang->product->QD        = '测试负责人';
$lang->product->RD        = '发布负责人';
$lang->product->acl       = '访问控制';
$lang->product->whitelist = '分组白名单';
$lang->product->branch    = '所属%s';

$lang->product->searchStory  = '搜索';
$lang->product->assignedToMe = '指派给我';
$lang->product->openedByMe   = '由我创建';
$lang->product->reviewedByMe = '由我评审';
$lang->product->closedByMe   = '由我关闭';
$lang->product->draftStory   = '草稿';
$lang->product->activeStory  = '激活';
$lang->product->changedStory = '已变更';
$lang->product->willClose    = '待关闭';
$lang->product->closedStory  = '已关闭';
$lang->product->unclosed     = '未关闭';

$lang->product->allStory    = '全部需求';
$lang->product->allProduct  = '全部' . $lang->productCommon;
$lang->product->allProductsOfProject = '全部关联' . $lang->productCommon;

$lang->product->typeList['']         = '';
$lang->product->typeList['normal']   = '正常';
$lang->product->typeList['branch']   = '多分支';
$lang->product->typeList['platform'] = '多平台';

$lang->product->branchName['normal']   = '';
$lang->product->branchName['branch']   = '分支';
$lang->product->branchName['platform'] = '平台';

$lang->product->statusList['']       = '';
$lang->product->statusList['normal'] = '正常';
$lang->product->statusList['closed'] = '结束';

$lang->product->aclList['open']    = "默认设置(有{$lang->productCommon}视图权限，即可访问)";
$lang->product->aclList['private'] = "私有{$lang->productCommon}(只有{$lang->projectCommon}团队成员才能访问)";
$lang->product->aclList['custom']  = '自定义白名单(团队成员和白名单的成员可以访问)';

$lang->product->storySummary = "本页共 <strong>%s</strong> 个需求，预计 <strong>%s</strong> 个工时，用例覆盖率<strong>%s</strong>。";
$lang->product->noMatched    = '找不到包含"%s"的' . $lang->productCommon;

$lang->product->featureBar['browse']['unclosed']     = $lang->product->unclosed;
$lang->product->featureBar['browse']['allstory']     = $lang->product->allStory;
$lang->product->featureBar['browse']['assignedtome'] = $lang->product->assignedToMe;
$lang->product->featureBar['browse']['openedbyme']   = $lang->product->openedByMe;
$lang->product->featureBar['browse']['reviewedbyme'] = $lang->product->reviewedByMe;
$lang->product->featureBar['browse']['closedbyme']   = $lang->product->closedByMe;
$lang->product->featureBar['browse']['draftstory']   = $lang->product->draftStory;
$lang->product->featureBar['browse']['activestory']  = $lang->product->activeStory;
$lang->product->featureBar['browse']['changedstory'] = $lang->product->changedStory;
$lang->product->featureBar['browse']['willclose']    = $lang->product->willClose;
$lang->product->featureBar['browse']['closedstory']  = $lang->product->closedStory;
/* productplan */
$lang->productplan->common     = $lang->productCommon . '计划';
$lang->productplan->browse     = "浏览计划";
$lang->productplan->index      = "计划列表";
$lang->productplan->create     = "创建计划";
$lang->productplan->edit       = "编辑计划";
$lang->productplan->delete     = "删除计划";
$lang->productplan->view       = "计划详情";
$lang->productplan->bugSummary = "本页共 <strong>%s</strong> 个Bug";
$lang->productplan->basicInfo  = '基本信息';
$lang->productplan->batchEdit  = '批量编辑';

$lang->productplan->batchUnlink      = "批量移除";
$lang->productplan->linkStory        = "关联需求";
$lang->productplan->unlinkStory      = "移除需求";
$lang->productplan->batchUnlinkStory = "批量移除需求";
$lang->productplan->linkedStories    = '需求';
$lang->productplan->unlinkedStories  = '未关联需求';

$lang->productplan->linkBug          = "关联Bug";
$lang->productplan->unlinkBug        = "移除Bug";
$lang->productplan->batchUnlinkBug   = "批量移除Bug";
$lang->productplan->linkedBugs       = 'Bug';
$lang->productplan->unlinkedBugs     = '未关联Bug';

$lang->productplan->confirmDelete      = "您确认删除该计划吗？";
$lang->productplan->confirmUnlinkStory = "您确认移除该需求吗？";
$lang->productplan->confirmUnlinkBug   = "您确认移除该Bug吗？";

$lang->productplan->id      = '编号';
$lang->productplan->product = $lang->productCommon;
$lang->productplan->title   = '名称';
$lang->productplan->desc    = '描述';
$lang->productplan->begin   = '开始日期';
$lang->productplan->end     = '结束日期';

$lang->productplan->endList[7]   = '一星期';
$lang->productplan->endList[14]  = '两星期';
$lang->productplan->endList[31]  = '一个月';
$lang->productplan->endList[62]  = '两个月';
$lang->productplan->endList[93]  = '三个月';
$lang->productplan->endList[186] = '半年';
$lang->productplan->endList[365] = '一年';

$lang->productplan->errorNoTitle = 'ID %s 标题不能为空';
$lang->productplan->errorNoBegin = 'ID %s 开始时间不能为空';
$lang->productplan->errorNoEnd   = 'ID %s 结束时间不能为空';
$lang->productplan->beginGeEnd   = 'ID %s 开始时间不能大于结束时间';
/* project */
$lang->project->common        = $lang->projectCommon . '视图';
$lang->project->allProjects   = '全部';
$lang->project->type          = $lang->projectCommon . '类型';
$lang->project->name          = $lang->projectCommon . '名称';
$lang->project->code          = $lang->projectCommon . '代号';
$lang->project->begin         = '开始日期';
$lang->project->end           = '结束日期';
$lang->project->dateRange     = '起始日期';
$lang->project->to            = '至';
$lang->project->days          = '可用工作日';
$lang->project->day           = '天';
$lang->project->status        = $lang->projectCommon . '状态';
$lang->project->desc          = $lang->projectCommon . '描述';
$lang->project->owner         = '负责人';
$lang->project->PO            = $lang->productCommon . '负责人';
$lang->project->PM            = $lang->projectCommon . '负责人';
$lang->project->QD            = '测试负责人';
$lang->project->RD            = '发布负责人';
$lang->project->acl           = '访问控制';
$lang->project->teamname      = '团队名称';
$lang->project->order         = $lang->projectCommon . '排序';
$lang->project->products      = '相关' . $lang->productCommon;
$lang->project->whitelist     = '分组白名单';
$lang->project->totalEstimate = '总预计';
$lang->project->totalConsumed = '总消耗';
$lang->project->totalLeft     = '总剩余';
$lang->project->Left          = '剩余';
$lang->project->progess       = '进度';
$lang->project->hours         = '预计 %s 消耗 %s 剩余 %s';
$lang->project->viewBug       = '查看bug';
$lang->project->noProduct     = "无{$lang->productCommon}{$lang->projectCommon}";
$lang->project->createStory   = "新增需求";
$lang->project->all           = '所有';
$lang->project->undone        = '未完成';
$lang->project->unclosed      = '未关闭';
$lang->project->typeDesc      = "运维{$lang->projectCommon}禁用燃尽图和需求。";
$lang->project->mine          = '我负责：';
$lang->project->other         = '其他：';
$lang->project->deleted       = '已删除';
$lang->project->delayed       = '已延期';

$lang->project->start    = '开始';
$lang->project->activate = '激活';
$lang->project->putoff   = '延期';
$lang->project->suspend  = '挂起';
$lang->project->close    = '结束';

$lang->project->typeList['sprint']    = "短期$lang->projectCommon";
$lang->project->typeList['waterfall'] = "长期$lang->projectCommon";
$lang->project->typeList['ops']       = "运维$lang->projectCommon";

$lang->project->endList[7]    = '一星期';
$lang->project->endList[14]   = '两星期';
$lang->project->endList[31]   = '一个月';
$lang->project->endList[62]   = '两个月';
$lang->project->endList[93]   = '三个月';
$lang->project->endList[186]  = '半年';
$lang->project->endList[365]  = '一年';

$lang->team = new stdclass();
$lang->team->account    = '用户';
$lang->team->role       = '角色';
$lang->team->join       = '加盟日';
$lang->team->hours      = '可用工时/天';
$lang->team->days       = '可用工日';
$lang->team->totalHours = '总计';
 
$lang->project->basicInfo = '基本信息';
$lang->project->otherInfo = '其他信息';

$lang->project->statusList['wait']      = '未开始';
$lang->project->statusList['doing']     = '进行中';
$lang->project->statusList['suspended'] = '已挂起';
$lang->project->statusList['done']      = '已完成';

$lang->project->aclList['open']    = "默认设置(有{$lang->projectCommon}视图权限，即可访问)";
$lang->project->aclList['private'] = "私有{$lang->projectCommon}(只有{$lang->projectCommon}团队成员才能访问)";
$lang->project->aclList['custom']  = "自定义白名单(团队成员和白名单的成员可以访问)";

$lang->project->index            = "{$lang->projectCommon}首页";
$lang->project->task             = '任务列表';
$lang->project->groupTask        = '分组浏览任务';
$lang->project->story            = '需求列表';
$lang->project->bug              = 'Bug列表';
$lang->project->dynamic          = '动态';
$lang->project->build            = '版本列表';
$lang->project->testtask         = '测试任务';
$lang->project->burn             = '燃尽图';
$lang->project->baseline         = '基准线';
$lang->project->computeBurn      = '更新';
$lang->project->burnData         = '燃尽图数据';
$lang->project->fixFirst         = '修改首天工时';
$lang->project->team             = '团队成员';
$lang->project->doc              = '文档列表';
$lang->project->manageProducts   = '关联' . $lang->productCommon;
$lang->project->linkStory        = '关联需求';
$lang->project->unlinkStoryTasks = '未关联需求任务';
$lang->project->view             = "{$lang->projectCommon}概况";
$lang->project->create           = "添加{$lang->projectCommon}";
$lang->project->copy             = "复制{$lang->projectCommon}";
$lang->project->delete           = "删除{$lang->projectCommon}";
$lang->project->browse           = "浏览{$lang->projectCommon}";
$lang->project->edit             = "编辑{$lang->projectCommon}";
$lang->project->batchEdit        = "批量编辑";
$lang->project->manageMembers    = '团队管理';
$lang->project->unlinkMember     = '移除成员';
$lang->project->unlinkStory      = '移除需求';
$lang->project->batchUnlinkStory = '批量移除需求';
$lang->project->importTask       = '转入任务';
$lang->project->importBug        = '导入Bug';
$lang->project->updateOrder      = '排序';
$lang->project->tree             = '树状图';

$lang->project->allTasks             = '所有';
$lang->project->assignedToMe         = '指派给我';

$lang->project->statusSelects['']             = '更多';
$lang->project->statusSelects['wait']         = '未开始';
$lang->project->statusSelects['doing']        = '进行中';
$lang->project->statusSelects['finishedbyme'] = '我完成';
$lang->project->statusSelects['done']         = '已完成';
$lang->project->statusSelects['closed']       = '已关闭';
$lang->project->statusSelects['cancel']       = '已取消';

$lang->project->groups['']           = '分组查看';
$lang->project->groups['story']      = '需求分组';
$lang->project->groups['status']     = '状态分组';
$lang->project->groups['pri']        = '优先级分组';
$lang->project->groups['assignedTo'] = '指派给分组';
$lang->project->groups['finishedBy'] = '完成者分组';
$lang->project->groups['closedBy']   = '关闭者分组';
$lang->project->groups['type']       = '类型分组';
$lang->project->groups['deadline']   = '截止分组';

$lang->project->groupFilter['story']['all']         = $lang->project->all;
$lang->project->groupFilter['story']['linked']      = '已关联需求的任务';
$lang->project->groupFilter['pri']['all']           = $lang->project->all;
$lang->project->groupFilter['pri']['setted']        = '已设置';
$lang->project->groupFilter['assignedTo']['undone'] = '未完成';
$lang->project->groupFilter['assignedTo']['all']    = $lang->project->all;
$lang->project->groupFilter['finishedBy']['done']   = '已完成';
$lang->project->groupFilter['finishedBy']['all']    = $lang->project->all;
$lang->project->groupFilter['closedBy']['closed']   = '已关闭';
$lang->project->groupFilter['closedBy']['all']      = $lang->project->all;
$lang->project->groupFilter['deadline']['all']      = $lang->project->all;
$lang->project->groupFilter['deadline']['setted']   = '已设置';

$lang->project->byQuery              = '搜索';

$lang->project->allProject      = "所有{$lang->projectCommon}";
$lang->project->aboveAllProduct = "以上所有{$lang->productCommon}";
$lang->project->aboveAllProject = "以上所有{$lang->projectCommon}";

$lang->project->selectProject   = "请选择{$lang->projectCommon}";
$lang->project->beginAndEnd     = '起止时间';
$lang->project->lblStats        = '工时统计';
$lang->project->stats           = '可用工时<strong>%s</strong>工时<br />总共预计<strong>%s</strong>工时<br />已经消耗<strong>%s</strong>工时<br />预计剩余<strong>%s</strong>工时';
$lang->project->taskSummary     = "本页共 <strong>%s</strong> 个任务，未开始 <strong>%s</strong>，进行中 <strong>%s</strong>，总预计<strong>%s</strong>工时，已消耗<strong>%s</strong>工时，剩余<strong>%s</strong>工时。";
$lang->project->memberHours     = "%s共有 <strong>%s</strong> 个可用工时，";
$lang->project->groupSummary    = "本组共 <strong>%s</strong> 个任务，未开始 <strong>%s</strong>，进行中 <strong>%s</strong>，总预计<strong>%s</strong>工时，已消耗<strong>%s</strong>工时，剩余<strong>%s</strong>工时。";
$lang->project->noTimeSummary   = "本组共 <strong>%s</strong> 个任务，未开始 <strong>%s</strong>，进行中 <strong>%s</strong>";
$lang->project->wbs             = "分解任务";
$lang->project->batchWBS        = "批量分解";
$lang->project->howToUpdateBurn = "<a href='http://api.zentao.net/goto.php?item=burndown&lang=zh-cn' target='_blank' title='如何更新燃尽图？' class='btn btn-sm'>帮助</a>";
$lang->project->whyNoStories    = "看起来没有需求可以关联。请检查下{$lang->projectCommon}关联的{$lang->productCommon}中有没有需求，而且要确保它们已经审核通过。";
$lang->project->doneProjects    = '已结束';
$lang->project->selectDept      = '请选择部门';
$lang->project->copyTeam        = '复制团队';
$lang->project->copyFromTeam    = "复制自{$lang->projectCommon}团队： <strong>%s</strong>";
$lang->project->noMatched       = "找不到包含'%s'的$lang->projectCommon";
$lang->project->copyTitle       = "请选择一个{$lang->projectCommon}来复制";
$lang->project->copyTeamTitle   = "请选择一个{$lang->projectCommon}团队来复制";
$lang->project->copyNoProject   = "没有可用的{$lang->projectCommon}来复制";
$lang->project->copyFromProject = "复制自{$lang->projectCommon} <strong>%s</strong>";
$lang->project->cancelCopy      = '取消复制';
$lang->project->byPeriod        = '按时间段';
$lang->project->byUser          = '按用户';

$lang->project->confirmDelete         = "您确定删除{$lang->projectCommon}[%s]吗？";
$lang->project->confirmUnlinkMember   = "您确定从该{$lang->projectCommon}中移除该用户吗？";
$lang->project->confirmUnlinkStory    = "您确定从该{$lang->projectCommon}中移除该需求吗？";
$lang->project->errorNoLinkedProducts = "该{$lang->projectCommon}没有关联的{$lang->productCommon}，系统将转到{$lang->productCommon}关联页面";
$lang->project->accessDenied          = "您无权访问该{$lang->projectCommon}！";
$lang->project->tips                  = '提示';
$lang->project->afterInfo             = "{$lang->projectCommon}添加成功，您现在可以进行以下操作：";
$lang->project->setTeam               = '设置团队';
$lang->project->linkStory             = '关联需求';
$lang->project->createTask            = '添加任务';
$lang->project->goback                = "返回任务列表";
$lang->project->noweekend             = '去除周末';
$lang->project->withweekend           = '显示周末';
$lang->project->interval              = '间隔';

$lang->project->charts = new stdclass();
$lang->project->charts->burn = new stdclass();
$lang->project->charts->burn->graph = new stdclass();
$lang->project->charts->burn->graph->caption      = "燃尽图";
$lang->project->charts->burn->graph->xAxisName    = "日期";
$lang->project->charts->burn->graph->yAxisName    = "HOUR";
$lang->project->charts->burn->graph->baseFontSize = 12;
$lang->project->charts->burn->graph->formatNumber = 0;
$lang->project->charts->burn->graph->animation    = 0;
$lang->project->charts->burn->graph->rotateNames  = 1;
$lang->project->charts->burn->graph->showValues   = 0;

$lang->project->placeholder = new stdclass();
$lang->project->placeholder->code      = '团队内部的简称';
$lang->project->placeholder->totalLeft = '项目开始时的总预计工时';

$lang->project->selectGroup = new stdclass();
$lang->project->selectGroup->done = '(已结束)';

$lang->project->orderList['pri_asc']    = "需求优先级正序";
$lang->project->orderList['pri_desc']   = "需求优先级倒序";
$lang->project->orderList['id_asc']     = "需求ID正序";
$lang->project->orderList['id_desc']    = "需求ID倒序";
$lang->project->orderList['stage_asc']  = "需求阶段正序";
$lang->project->orderList['stage_desc'] = "需求阶段倒序";

$lang->project->kanban      = "看板";
$lang->project->printKanban = "打印看板";
$lang->project->bugList     = "Bug列表";

$lang->printKanban = new stdclass();
$lang->printKanban->common  = '看板打印';
$lang->printKanban->content = '内容';
$lang->printKanban->print   = '打印';

$lang->printKanban->taskStatus = '状态';

$lang->printKanban->typeList['all']       = '全部';
$lang->printKanban->typeList['increment'] = '增量';

$lang->project->featureBar['task']['unclosed']     = $lang->project->unclosed;
$lang->project->featureBar['task']['all']          = $lang->project->allTasks;
$lang->project->featureBar['task']['delayed']      = '已延期';
$lang->project->featureBar['task']['needconfirm']  = '需求变动';
$lang->project->featureBar['task']['status']       = $lang->project->statusSelects[''];

$lang->project->treeLevel = array();
$lang->project->treeLevel['story']   = '显示需求';
$lang->project->treeLevel['task']    = '显示任务';
/* qa */
$lang->qa->common = '测试视图';
$lang->qa->index  = '测试首页';
/* release */
$lang->release->common    = '发布';
$lang->release->create    = "创建发布";
$lang->release->edit      = "编辑发布";
$lang->release->linkStory = "关联需求";
$lang->release->linkBug   = "关联Bug";
$lang->release->delete    = "删除发布";
$lang->release->deleted   = '已删除';
$lang->release->view      = "发布详情";
$lang->release->browse    = "浏览发布";
$lang->release->changeStatus     = "修改状态";
$lang->release->batchUnlink      = "批量移除";
$lang->release->batchUnlinkStory = "批量移除需求";
$lang->release->batchUnlinkBug   = "批量移除Bug";

$lang->release->confirmDelete      = "您确认删除该release吗？";
$lang->release->confirmUnlinkStory = "您确认移除该需求吗？";
$lang->release->confirmUnlinkBug   = "您确认移除该Bug吗？";

$lang->release->basicInfo = '基本信息';

$lang->release->id                    = 'ID';
$lang->release->product               = $lang->productCommon;
$lang->release->build                 = '版本';
$lang->release->name                  = '发布名称';
$lang->release->date                  = '发布日期';
$lang->release->desc                  = '描述';
$lang->release->status                = '状态';
$lang->release->last                  = '上次发布';
$lang->release->unlinkStory           = '移除需求';
$lang->release->unlinkBug             = '移除Bug';
$lang->release->stories               = '完成的需求';
$lang->release->bugs                  = '解决的Bug';
$lang->release->generatedBugs         = '遗留的Bug';
$lang->release->finishStories         = '本次共完成 %s 个需求';
$lang->release->resolvedBugs          = '本次共解决 %s 个Bug';
$lang->release->createdBugs           = '本次共遗留 %s 个Bug';
$lang->release->export                = '导出HTML';

$lang->release->filePath = '下载地址：';
$lang->release->scmPath  = '版本库地址：';

$lang->release->exportTypeList['all']     = '所有';
$lang->release->exportTypeList['story']   = '需求';
$lang->release->exportTypeList['bug']     = 'Bug';
$lang->release->exportTypeList['leftbug'] = '遗留Bug';

$lang->release->statusList['']          = '';
$lang->release->statusList['normal']    = '正常';
$lang->release->statusList['terminate'] = '停止维护';

$lang->release->changeStatusList['normal']    = '激活';
$lang->release->changeStatusList['terminate'] = '停止维护';

$lang->release->action = new stdclass();
$lang->release->action->changestatus = array('main' => '$date, 由 <strong>$actor</strong> $extra。', 'extra' => 'changeStatusList');
/* report */
$lang->report->common     = '统计视图';
$lang->report->index      = '统计首页';
$lang->report->list       = '统计报表';
$lang->report->item       = '条目';
$lang->report->value      = '值';
$lang->report->percent    = '百分比';
$lang->report->undefined  = '未设定';

$lang->report->colors[]   = 'AFD8F8';
$lang->report->colors[]   = 'F6BD0F';
$lang->report->colors[]   = '8BBA00';
$lang->report->colors[]   = 'FF8E46';
$lang->report->colors[]   = '008E8E';
$lang->report->colors[]   = 'D64646';
$lang->report->colors[]   = '8E468E';
$lang->report->colors[]   = '588526';
$lang->report->colors[]   = 'B3AA00';
$lang->report->colors[]   = '008ED6';
$lang->report->colors[]   = '9D080D';
$lang->report->colors[]   = 'A186BE';

$lang->report->singleColor[] = 'F6BD0F';

$lang->report->projectDeviation = $lang->projectCommon . '偏差报表';
$lang->report->productSummary   = $lang->productCommon . '汇总表';
$lang->report->bugCreate        = 'Bug创建表';
$lang->report->bugAssign        = 'Bug指派表';
$lang->report->workload         = '员工负载表';
$lang->report->workloadAB       = '工作负载';
$lang->report->bugOpenedDate    = 'Bug创建时间';
$lang->report->taskAssignedDate = '起止时间';
$lang->report->beginAndEnd      = '起止时间';
$lang->report->dept             = '部门';

$lang->reportList->project->lists[10] = $lang->projectCommon . '偏差报表|report|projectdeviation';
$lang->reportList->product->lists[10] = $lang->productCommon . '汇总表|report|productsummary';
$lang->reportList->test->lists[10]    = 'Bug创建表|report|bugcreate';
$lang->reportList->test->lists[13]    = 'Bug指派表|report|bugassign';
$lang->reportList->staff->lists[10]   = '员工负载表|report|workload';

$lang->report->id            = '编号';
$lang->report->project       = $lang->projectCommon;
$lang->report->product       = $lang->productCommon;
$lang->report->user          = '姓名';
$lang->report->bug           = 'Bug';
$lang->report->task          = '任务数';
$lang->report->estimate      = '总预计';
$lang->report->consumed      = '总消耗';
$lang->report->remain        = '剩余工时';
$lang->report->deviation     = '偏差';
$lang->report->deviationRate = '偏差率';
$lang->report->total         = '总计';
$lang->report->to            = '至';
$lang->report->taskTotal     = "总任务数";
$lang->report->manhourTotal  = "总工时";
$lang->report->validRate     = "有效率";
$lang->report->validRateTips = "方案为已解决或延期/状态为已解决或已关闭";
$lang->report->unplanned     = '未计划';
$lang->report->workday       = '每天工时';
$lang->report->diffDays      = '工作日天数';

$lang->report->conditions    = '筛选条件：';
$lang->report->closedProduct = '关闭' . $lang->productCommon;
$lang->report->overduePlan   = '过期计划';

$lang->report->idAB         = 'ID';
$lang->report->bugTitle     = 'Bug标题';
$lang->report->taskName     = '任务名称';
$lang->report->todoName     = '待办名称';
$lang->report->testTaskName = '版本名称';

$lang->report->mailTitle           = new stdclass();
$lang->report->mailTitle->begin    = '提醒：您有';
$lang->report->mailTitle->bug      = " Bug(%s),";
$lang->report->mailTitle->task     = " 任务(%s),";
$lang->report->mailTitle->todo     = " 待办(%s),";
$lang->report->mailTitle->testTask = " 测试版本(%s),";

$lang->report->proVersion = '<a href="http://api.zentao.net/goto.php?item=proversion&from=reportpage" target="_blank">更多精彩，尽在专业版！</a>';
/* search */
$lang->search->common        = '搜索';
$lang->search->reset         = '重置';
$lang->search->saveQuery     = '保存';
$lang->search->myQuery       = '我的查询';
$lang->search->group1        = '第一组';
$lang->search->group2        = '第二组';
$lang->search->buildForm     = '搜索表单';
$lang->search->buildQuery    = '执行搜索';
$lang->search->saveQuery     = '保存查询';
$lang->search->deleteQuery   = '删除查询';
$lang->search->setQueryTitle = '请输入查询标题（保存之前请先查询）：';
$lang->search->select        = '需求/任务筛选';
$lang->search->me            = '自己';
$lang->search->noQuery       = '还没有保存查询！';
$lang->search->onMenuBar     = '显示在菜单栏';

$lang->search->operators['=']          = '=';
$lang->search->operators['!=']         = '!=';
$lang->search->operators['>']          = '>';
$lang->search->operators['>=']         = '>=';
$lang->search->operators['<']          = '<';
$lang->search->operators['<=']         = '<=';
$lang->search->operators['include']    = '包含';
$lang->search->operators['between']    = '介于';
$lang->search->operators['notinclude'] = '不包含';
$lang->search->operators['belong']     = '从属于';

$lang->search->andor['and']         = '并且';
$lang->search->andor['or']          = '或者';

$lang->search->null = '空';
/* sso */
$lang->sso = new stdclass();
$lang->sso->settings = '配置';
$lang->sso->turnon   = '是否打开';
$lang->sso->code     = '代号';
$lang->sso->key      = '密钥';
$lang->sso->addr     = '接口地址';
$lang->sso->bind     = '用户绑定';
$lang->sso->addrNotice = '比如：http://www.ranzhi.com/sys/sso-check.html';

$lang->sso->turnonList = array();
$lang->sso->turnonList[1] = '打开';
$lang->sso->turnonList[0] = '关闭';

$lang->sso->bindType = '绑定方式';
$lang->sso->bindUser = '绑定用户';

$lang->sso->bindTypeList['bind'] = '绑定已有用户';
$lang->sso->bindTypeList['add']  = '添加新用户';

$lang->sso->help = <<<EOD
<p>1、接口地址的填写，如果是PATH_INFO ：http://然之网址/sys/sso-check.html，如果是GET：http://然之网址/sys/index.php?m=sso&f=check</p>
<p>2、代号和密钥必须与然之后台设置的一致。</p>
EOD;
$lang->sso->bindNotice     = '添加的新用户暂时没有权限，需要联系禅道管理员，给该用户分配权限。';
$lang->sso->bindNoPassword = '密码不能为空';
$lang->sso->bindNoUser     = '该用户的登录密码错误，或该用户不存在！';
$lang->sso->bindHasAccount = '该用户名已经存在，请更换用户名，或直接绑定到该用户。';
/* story */
$lang->story->create      = "提需求";
$lang->story->batchCreate = "批量添加";
$lang->story->change      = "变更";
$lang->story->changed     = '需求变更';
$lang->story->review      = '评审';
$lang->story->batchReview = '批量评审';
$lang->story->edit        = "编辑";
$lang->story->batchEdit   = "批量编辑";
$lang->story->close       = '关闭';
$lang->story->batchClose  = '批量关闭';
$lang->story->activate    = '激活';
$lang->story->delete      = "删除";
$lang->story->view        = "需求详情";
$lang->story->tasks       = "相关任务";
$lang->story->taskCount   = '任务数';
$lang->story->linkStory   = '关联需求';
$lang->story->unlinkStory = '移除相关需求';
$lang->story->export      = "导出数据";
$lang->story->zeroCase    = "零用例需求";
$lang->story->reportChart = "统计报表";
$lang->story->batchChangePlan   = "批量修改计划";
$lang->story->batchChangeBranch = "批量修改分支";
$lang->story->batchChangeStage  = "批量修改阶段";
$lang->story->batchAssignTo     = "批量指派";
$lang->story->batchChangeModule = "批量修改模块";

$lang->story->common         = '需求';
$lang->story->id             = '编号';
$lang->story->product        = "所属{$lang->productCommon}";
$lang->story->module         = '所属模块';
$lang->story->moduleAB       = '模块';
$lang->story->source         = '需求来源';
$lang->story->sourceNote     = '来源备注';
$lang->story->fromBug        = '来源Bug';
$lang->story->title          = '需求名称';
$lang->story->spec           = '需求描述';
$lang->story->verify         = '验收标准';
$lang->story->pri            = '优先级';
$lang->story->estimate       = '预计工时';
$lang->story->estimateAB     = '预计';
$lang->story->hour           = '小时';
$lang->story->status         = '当前状态';
$lang->story->stage          = '所处阶段';
$lang->story->stageAB        = '阶段';
$lang->story->mailto         = '抄送给';
$lang->story->openedBy       = '由谁创建';
$lang->story->openedDate     = '创建日期';
$lang->story->assignedTo     = '指派给';
$lang->story->assignedDate   = '指派日期';
$lang->story->lastEditedBy   = '最后修改';
$lang->story->lastEditedDate = '最后修改日期';
$lang->story->closedBy       = '由谁关闭';
$lang->story->closedDate     = '关闭日期';
$lang->story->closedReason   = '关闭原因';
$lang->story->rejectedReason = '拒绝原因';
$lang->story->reviewedBy     = '由谁评审';
$lang->story->reviewedDate   = '评审时间';
$lang->story->version        = '版本号';
$lang->story->plan           = '所属计划';
$lang->story->planAB         = '计划';
$lang->story->comment        = '备注';
$lang->story->linkStories    = '相关需求';
$lang->story->childStories   = '细分需求';
$lang->story->duplicateStory = '重复需求';
$lang->story->reviewResult   = '评审结果';
$lang->story->preVersion     = '之前版本';
$lang->story->keywords       = '关键词';
$lang->story->newStory       = '继续添加需求';
$lang->story->colorTag       = '颜色标签';
$lang->story->files          = '附件';

$lang->story->ditto       = '同上';
$lang->story->dittoNotice = '该需求与上一需求不属于同一产品！';

$lang->story->useList[0] = '不使用';
$lang->story->useList[1] = '使用';

$lang->story->statusList['']          = '';
$lang->story->statusList['draft']     = '草稿';
$lang->story->statusList['active']    = '激活';
$lang->story->statusList['closed']    = '已关闭';
$lang->story->statusList['changed']   = '已变更';

$lang->story->stageList['']           = '';
$lang->story->stageList['wait']       = '未开始';
$lang->story->stageList['planned']    = '已计划';
$lang->story->stageList['projected']  = '已立项';
$lang->story->stageList['developing'] = '研发中';
$lang->story->stageList['developed']  = '研发完毕';
$lang->story->stageList['testing']    = '测试中';
$lang->story->stageList['tested']     = '测试完毕';
$lang->story->stageList['verified']   = '已验收';
$lang->story->stageList['released']   = '已发布';

$lang->story->reasonList['']           = '';
$lang->story->reasonList['done']       = '已完成';
$lang->story->reasonList['subdivided'] = '已细分';
$lang->story->reasonList['duplicate']  = '重复';
$lang->story->reasonList['postponed']  = '延期';
$lang->story->reasonList['willnotdo']  = '不做';
$lang->story->reasonList['cancel']     = '已取消';
$lang->story->reasonList['bydesign']   = '设计如此';
//$lang->story->reasonList['isbug']      = '是个Bug';

$lang->story->reviewResultList['']        = '';
$lang->story->reviewResultList['pass']    = '确认通过';
$lang->story->reviewResultList['revert']  = '撤销变更';
$lang->story->reviewResultList['clarify'] = '有待明确';
$lang->story->reviewResultList['reject']  = '拒绝';

$lang->story->reviewList[0] = '否';
$lang->story->reviewList[1] = '是';

$lang->story->sourceList['']           = '';
$lang->story->sourceList['customer']   = '客户';
$lang->story->sourceList['user']       = '用户';
$lang->story->sourceList['po']         = $lang->productCommon . '经理';
$lang->story->sourceList['market']     = '市场';
$lang->story->sourceList['service']    = '客服';
$lang->story->sourceList['operation']  = '运营';
$lang->story->sourceList['support']    = '技术支持';
$lang->story->sourceList['competitor'] = '竞争对手';
$lang->story->sourceList['partner']    = '合作伙伴';
$lang->story->sourceList['dev']        = '开发人员';
$lang->story->sourceList['tester']     = '测试人员';
$lang->story->sourceList['bug']        = 'Bug';
$lang->story->sourceList['other']      = '其他';

$lang->story->priList[]   = '';
$lang->story->priList[3]  = '3';
$lang->story->priList[1]  = '1';
$lang->story->priList[2]  = '2';
$lang->story->priList[4]  = '4';

$lang->story->legendBasicInfo      = '基本信息';
$lang->story->legendLifeTime       = '需求的一生';
$lang->story->legendRelated        = '相关信息';
$lang->story->legendMailto         = '抄送给';
$lang->story->legendAttatch        = '附件';
$lang->story->legendProjectAndTask = $lang->projectCommon . '任务';
$lang->story->legendBugs           = '相关Bug';
$lang->story->legendFromBug        = '来源Bug';
$lang->story->legendCases          = '相关用例';
$lang->story->legendLinkStories    = '相关需求';
$lang->story->legendChildStories   = '细分需求';
$lang->story->legendSpec           = '需求描述';
$lang->story->legendVerify         = '验收标准';
$lang->story->legendMisc           = '其他相关';

$lang->story->lblChange            = '变更需求';
$lang->story->lblReview            = '评审需求';
$lang->story->lblActivate          = '激活需求';
$lang->story->lblClose             = '关闭需求';

$lang->story->checkAffection       = '检查影响';
$lang->story->affectedProjects     = '影响的' . $lang->projectCommon;
$lang->story->affectedBugs         = '影响的Bug';
$lang->story->affectedCases        = '影响的用例';

$lang->story->specTemplate          = "建议参考的模板：作为一名<<i class='text-important'>某种类型的用户</i>>，我希望<<i class='text-important'>达成某些目的</i>>，这样可以<<i class='text-important'>开发的价值</i>>。";
$lang->story->needNotReview         = '不需要评审';
$lang->story->successSaved          = "需求成功添加，";
$lang->story->confirmDelete         = "您确认删除该需求吗?";
$lang->story->errorEmptyChildStory  = '『细分需求』不能为空。';
$lang->story->mustChooseResult      = '必须选择评审结果';
$lang->story->mustChoosePreVersion  = '必须选择回溯的版本';

$lang->story->form = new stdclass();
$lang->story->form->area      = '该需求所属范围';
$lang->story->form->desc      = '描述及标准，什么需求？如何验收？';
$lang->story->form->resource  = '资源分配，有谁完成？需要多少时间？';
$lang->story->form->file      = '附件，如果该需求有相关文件，请点此上传。';

$lang->story->action = new stdclass();
$lang->story->action->reviewed            = array('main' => '$date, 由 <strong>$actor</strong> 记录评审结果，结果为 <strong>$extra</strong>。', 'extra' => 'reviewResultList');
$lang->story->action->closed              = array('main' => '$date, 由 <strong>$actor</strong> 关闭，原因为 <strong>$extra</strong> $appendLink。', 'extra' => 'reasonList');
$lang->story->action->linked2plan         = array('main' => '$date, 由 <strong>$actor</strong> 关联到计划 <strong>$extra</strong>。'); 
$lang->story->action->unlinkedfromplan    = array('main' => '$date, 由 <strong>$actor</strong> 从计划 <strong>$extra</strong> 移除。'); 
$lang->story->action->linked2project      = array('main' => '$date, 由 <strong>$actor</strong> 关联到' . $lang->projectCommon . ' <strong>$extra</strong>。'); 
$lang->story->action->unlinkedfromproject = array('main' => '$date, 由 <strong>$actor</strong> 从' . $lang->projectCommon . ' <strong>$extra</strong> 移除。'); 
$lang->story->action->linkrelatedstory    = array('main' => '$date, 由 <strong>$actor</strong> 关联相关需求 <strong>$extra</strong>。');
$lang->story->action->subdividestory      = array('main' => '$date, 由 <strong>$actor</strong> 细分为需求 <strong>$extra</strong>。');
$lang->story->action->unlinkrelatedstory  = array('main' => '$date, 由 <strong>$actor</strong> 移除相关需求 <strong>$extra</strong>。');
$lang->story->action->unlinkchildstory    = array('main' => '$date, 由 <strong>$actor</strong> 移除细分需求 <strong>$extra</strong>。');

$lang->story->report = new stdclass();
$lang->story->report->common = '报表';
$lang->story->report->select = '请选择报表类型';
$lang->story->report->create = '生成报表';
$lang->story->report->value  = '需求数';

$lang->story->report->charts['storysPerProduct']        = $lang->productCommon . '需求数量';
$lang->story->report->charts['storysPerModule']         = '模块需求数量';
$lang->story->report->charts['storysPerSource']         = '需求来源统计';
$lang->story->report->charts['storysPerPlan']           = '计划进行统计';
$lang->story->report->charts['storysPerStatus']         = '状态进行统计';
$lang->story->report->charts['storysPerStage']          = '所处阶段进行统计';
$lang->story->report->charts['storysPerPri']            = '优先级进行统计';
$lang->story->report->charts['storysPerEstimate']       = '预计工时进行统计';
$lang->story->report->charts['storysPerOpenedBy']       = '由谁创建来进行统计';
$lang->story->report->charts['storysPerAssignedTo']     = '当前指派来进行统计';
$lang->story->report->charts['storysPerClosedReason']   = '关闭原因来进行统计';
$lang->story->report->charts['storysPerChange']         = '变更次数来进行统计';

$lang->story->report->options = new stdclass();
$lang->story->report->options->graph   = new stdclass();
$lang->story->report->options->type    = 'pie';
$lang->story->report->options->width   = 500;
$lang->story->report->options->height  = 140;

$lang->story->report->storysPerProduct      = new stdclass();
$lang->story->report->storysPerModule       = new stdclass();
$lang->story->report->storysPerSource       = new stdclass();
$lang->story->report->storysPerPlan         = new stdclass();
$lang->story->report->storysPerStatus       = new stdclass();
$lang->story->report->storysPerStage        = new stdclass();
$lang->story->report->storysPerPri          = new stdclass();
$lang->story->report->storysPerOpenedBy     = new stdclass();
$lang->story->report->storysPerAssignedTo   = new stdclass();
$lang->story->report->storysPerClosedReason = new stdclass();
$lang->story->report->storysPerEstimate     = new stdclass();
$lang->story->report->storysPerChange       = new stdclass();

$lang->story->report->storysPerProduct->item      = $lang->productCommon;
$lang->story->report->storysPerModule->item       = '模块';
$lang->story->report->storysPerSource->item       = '来源';
$lang->story->report->storysPerPlan->item         = '计划';
$lang->story->report->storysPerStatus->item       = '状态';
$lang->story->report->storysPerStage->item        = '阶段';
$lang->story->report->storysPerPri->item          = '优先级';
$lang->story->report->storysPerOpenedBy->item     = '用户';
$lang->story->report->storysPerAssignedTo->item   = '用户';
$lang->story->report->storysPerClosedReason->item = '原因';
$lang->story->report->storysPerEstimate->item     = '预计工时';
$lang->story->report->storysPerChange->item       = '变更次数';

$lang->story->report->storysPerProduct->graph      = new stdclass();
$lang->story->report->storysPerModule->graph       = new stdclass();
$lang->story->report->storysPerSource->graph       = new stdclass();
$lang->story->report->storysPerPlan->graph         = new stdclass();
$lang->story->report->storysPerStatus->graph       = new stdclass();
$lang->story->report->storysPerStage->graph        = new stdclass();
$lang->story->report->storysPerPri->graph          = new stdclass();
$lang->story->report->storysPerOpenedBy->graph     = new stdclass();
$lang->story->report->storysPerAssignedTo->graph   = new stdclass();
$lang->story->report->storysPerClosedReason->graph = new stdclass();
$lang->story->report->storysPerEstimate->graph     = new stdclass();
$lang->story->report->storysPerChange->graph       = new stdclass();

$lang->story->report->storysPerProduct->graph->xAxisName      = $lang->productCommon;
$lang->story->report->storysPerModule->graph->xAxisName       = '模块';
$lang->story->report->storysPerSource->graph->xAxisName       = '来源';
$lang->story->report->storysPerPlan->graph->xAxisName         = '计划';
$lang->story->report->storysPerStatus->graph->xAxisName       = '状态';
$lang->story->report->storysPerStage->graph->xAxisName        = '所处阶段';
$lang->story->report->storysPerPri->graph->xAxisName          = '优先级';
$lang->story->report->storysPerOpenedBy->graph->xAxisName     = '由谁创建';
$lang->story->report->storysPerAssignedTo->graph->xAxisName   = '当前指派';
$lang->story->report->storysPerClosedReason->graph->xAxisName = '关闭原因';
$lang->story->report->storysPerEstimate->graph->xAxisName     = '预计时间';
$lang->story->report->storysPerChange->graph->xAxisName       = '变更次数';

$lang->story->placeholder = new stdclass();
$lang->story->placeholder->estimate = $lang->story->hour;

$lang->story->chosen = new stdClass();
$lang->story->chosen->reviewedBy = '选择评审人...';
/* svn */
$lang->svn = new stdclass();
$lang->svn->common  = 'Subversion';
$lang->svn->cat     = '查看源代码';
$lang->svn->diff    = '比较源代码';
$lang->svn->apiSync = '接口：同步svn日志';
/* task */
$lang->task->index              = "任务一览";
$lang->task->create             = "建任务";
$lang->task->batchCreate        = "批量添加";
$lang->task->batchEdit          = "批量编辑";
$lang->task->batchChangeModule  = "批量修改模块";
$lang->task->edit               = "编辑";
$lang->task->delete             = "删除";
$lang->task->deleted            = "已删除";
$lang->task->view               = "查看任务";
$lang->task->logEfforts         = "记录工时";
$lang->task->record             = "工时";
$lang->task->start              = "开始";
$lang->task->restart            = "继续";
$lang->task->finish             = "完成";
$lang->task->pause              = "暂停";
$lang->task->close              = "关闭";
$lang->task->batchClose         = "批量关闭";
$lang->task->cancel             = "取消";
$lang->task->activate           = "激活";
$lang->task->export             = "导出数据";
$lang->task->reportChart        = "报表统计";
$lang->task->fromBug            = '来源Bug';
$lang->task->confirmStoryChange = "确认需求变动";

$lang->task->common            = '任务';
$lang->task->id                = '编号';
$lang->task->project           = '所属' . $lang->projectCommon;
$lang->task->module            = '所属模块';
$lang->task->moduleAB          = '模块';
$lang->task->story             = '相关需求';
$lang->task->storySpec         = '需求描述';
$lang->task->storyVerify       = '验收标准';
$lang->task->name              = '任务名称';
$lang->task->type              = '任务类型';
$lang->task->pri               = '优先级';
$lang->task->mailto            = '抄送给';
$lang->task->estimate          = '最初预计';
$lang->task->estimateAB        = '预';
$lang->task->left              = '预计剩余';
$lang->task->leftAB            = '剩';
$lang->task->consumed          = '总消耗';
$lang->task->consumedAB        = '消耗';
$lang->task->hour              = '小时';
$lang->task->consumedThisTime  = '工时';
$lang->task->leftThisTime      = '剩余';
$lang->task->datePlan          = '日程规划';
$lang->task->estStarted        = '预计开始';
$lang->task->realStarted       = '实际开始';
$lang->task->date              = '日期';
$lang->task->deadline          = '截止日期';
$lang->task->deadlineAB        = '截止';
$lang->task->status            = '任务状态';
$lang->task->desc              = '任务描述';
$lang->task->assign            = '指派';
$lang->task->assignTo          = $lang->task->assign;
$lang->task->batchAssignTo     = '批量指派';
$lang->task->assignedTo        = '指派给';
$lang->task->assignedToAB      = '指派给';
$lang->task->assignedDate      = '指派日期';
$lang->task->openedBy          = '由谁创建';
$lang->task->openedDate        = '创建日期';
$lang->task->openedDateAB      = '创建';
$lang->task->finishedBy        = '由谁完成';
$lang->task->finishedByAB      = '完成者';
$lang->task->finishedDate      = '完成时间';
$lang->task->finishedDateAB    = '完成';
$lang->task->canceledBy        = '由谁取消';
$lang->task->canceledDate      = '取消时间';
$lang->task->closedBy          = '由谁关闭';
$lang->task->closedDate        = '关闭时间';
$lang->task->closedReason      = '关闭原因';
$lang->task->lastEditedBy      = '最后修改';
$lang->task->lastEditedDate    = '最后修改日期';
$lang->task->lastEdited        = '最后编辑';
$lang->task->recordEstimate    = '工时';
$lang->task->editEstimate      = '编辑工时';
$lang->task->deleteEstimate    = '删除工时';
$lang->task->colorTag          = '颜色标签';
$lang->task->files             = '附件';

$lang->task->ditto         = '同上';
$lang->task->dittoNotice   = "该任务与上一任务不属于同一项目！";
$lang->task->selectAllUser = '全部';
$lang->task->noStory       = '无需求';
$lang->task->noAssigned    = '未指派';
$lang->task->noFinished    = '未完成';
$lang->task->noClosed      = '未关闭';

$lang->task->statusList['']        = '';
$lang->task->statusList['wait']    = '未开始';
$lang->task->statusList['doing']   = '进行中';
$lang->task->statusList['done']    = '已完成';
$lang->task->statusList['pause']   = '已暂停';
$lang->task->statusList['cancel']  = '已取消';
$lang->task->statusList['closed']  = '已关闭';

$lang->task->typeList['']        = '';
$lang->task->typeList['design']  = '设计';
$lang->task->typeList['devel']   = '开发';
$lang->task->typeList['test']    = '测试';
$lang->task->typeList['study']   = '研究';
$lang->task->typeList['discuss'] = '讨论';
$lang->task->typeList['ui']      = '界面';
$lang->task->typeList['affair']  = '事务';
$lang->task->typeList['misc']    = '其他';

$lang->task->priList[0]  = '';
$lang->task->priList[3]  = '3';
$lang->task->priList[1]  = '1';
$lang->task->priList[2]  = '2';
$lang->task->priList[4]  = '4';

$lang->task->reasonList['']       = '';
$lang->task->reasonList['done']   = '已完成';
$lang->task->reasonList['cancel'] = '已取消';

$lang->task->afterChoices['continueAdding'] = '继续为该需求添加任务';
$lang->task->afterChoices['toTaskList']     = '返回任务列表';
$lang->task->afterChoices['toStoryList']    = '返回需求列表';

$lang->task->legendBasic  = '基本信息';
$lang->task->legendEffort = '工时信息';
$lang->task->legendLife   = '任务的一生';
$lang->task->legendDesc   = '任务描述';

$lang->task->confirmDelete         = "您确定要删除这个任务吗？";
$lang->task->confirmDeleteEstimate = "您确定要删除这个记录吗？";
$lang->task->copyStoryTitle        = "同需求";
$lang->task->afterSubmit           = "添加之后";
$lang->task->successSaved          = "成功添加，";
$lang->task->delayWarning          = " <strong class='delayed f-14px'> 延期%s天 </strong>";
$lang->task->remindBug             = "该任务为Bug转化得到，是否更新Bug:%s ?";
$lang->task->confirmChangeProject  = "修改{$lang->projectCommon}会导致相应的所属模块、相关需求和指派人发生变化，确定吗？";
$lang->task->confirmFinish         = '"预计剩余"为0，确认将任务状态改为"已完成"吗？';
$lang->task->confirmRecord         = '"剩余"为0，任务将标记为"已完成"，您确定吗？';
$lang->task->noticeSaveRecord      = '您有尚未保存的工时记录，请先将其保存。';
$lang->task->commentActions        = '%s. %s, 由 <strong>%s</strong> 添加备注。';

$lang->task->error = new stdclass();
$lang->task->error->consumedNumber   = '"已经消耗"必须为数字';
$lang->task->error->estimateNumber   = '"预计剩余"必须为数字';
$lang->task->error->consumedSmall    = '"已经消耗"必须大于之前消耗';
$lang->task->error->consumedThisTime = '请填写"工时"';
$lang->task->error->left             = '请填写"剩余"';
$lang->task->error->work             = '"备注"必须小于255个字符';
$lang->task->error->skipClose        = '任务：%s 不是“已完成”或“已取消”状态，不能关闭！';
$lang->task->error->consumed         = '任务：%s工时不能小于0，忽略该任务工时的改动';

$lang->task->report = new stdclass();
$lang->task->report->common = '报表';
$lang->task->report->select = '请选择报表类型';
$lang->task->report->create = '生成报表';
$lang->task->report->value  = '任务数';

$lang->task->report->charts['tasksPerProject']      = $lang->projectCommon . '任务数统计';
$lang->task->report->charts['tasksPerModule']       = '模块任务数统计';
$lang->task->report->charts['tasksPerAssignedTo']   = '指派给统计';
$lang->task->report->charts['tasksPerType']         = '任务类型统计';
$lang->task->report->charts['tasksPerPri']          = '优先级统计';
$lang->task->report->charts['tasksPerStatus']       = '任务状态统计';
$lang->task->report->charts['tasksPerDeadline']     = '截止日期统计';
$lang->task->report->charts['tasksPerEstimate']     = '预计时间统计';
$lang->task->report->charts['tasksPerLeft']         = '剩余时间统计';
$lang->task->report->charts['tasksPerConsumed']     = '消耗时间统计';
$lang->task->report->charts['tasksPerFinishedBy']   = '由谁完成统计';
$lang->task->report->charts['tasksPerClosedReason'] = '关闭原因统计';
$lang->task->report->charts['finishedTasksPerDay']  = '每天完成统计';

$lang->task->report->options = new stdclass();
$lang->task->report->options->graph = new stdclass();
$lang->task->report->options->type   = 'pie';
$lang->task->report->options->width  = 500;
$lang->task->report->options->height = 140;

$lang->task->report->tasksPerProject      = new stdclass();
$lang->task->report->tasksPerModule       = new stdclass();
$lang->task->report->tasksPerAssignedTo   = new stdclass();
$lang->task->report->tasksPerType         = new stdclass();
$lang->task->report->tasksPerPri          = new stdclass();
$lang->task->report->tasksPerStatus       = new stdclass();
$lang->task->report->tasksPerDeadline     = new stdclass();
$lang->task->report->tasksPerEstimate     = new stdclass();
$lang->task->report->tasksPerLeft         = new stdclass();
$lang->task->report->tasksPerConsumed     = new stdclass();
$lang->task->report->tasksPerFinishedBy   = new stdclass();
$lang->task->report->tasksPerClosedReason = new stdclass();
$lang->task->report->finishedTasksPerDay  = new stdclass();

$lang->task->report->tasksPerProject->item      = $lang->projectCommon;
$lang->task->report->tasksPerModule->item       = '模块';
$lang->task->report->tasksPerAssignedTo->item   = '用户';
$lang->task->report->tasksPerType->item         = '类型';
$lang->task->report->tasksPerPri->item          = '优先级';
$lang->task->report->tasksPerStatus->item       = '状态';
$lang->task->report->tasksPerDeadline->item     = '日期';
$lang->task->report->tasksPerEstimate->item     = '预计';
$lang->task->report->tasksPerLeft->item         = '剩余';
$lang->task->report->tasksPerConsumed->item     = '消耗';
$lang->task->report->tasksPerFinishedBy->item   = '用户';
$lang->task->report->tasksPerClosedReason->item = '原因';
$lang->task->report->finishedTasksPerDay->item  = '日期';

$lang->task->report->tasksPerProject->graph      = new stdclass();
$lang->task->report->tasksPerModule->graph       = new stdclass();
$lang->task->report->tasksPerAssignedTo->graph   = new stdclass();
$lang->task->report->tasksPerType->graph         = new stdclass();
$lang->task->report->tasksPerPri->graph          = new stdclass();
$lang->task->report->tasksPerStatus->graph       = new stdclass();
$lang->task->report->tasksPerDeadline->graph     = new stdclass();
$lang->task->report->tasksPerEstimate->graph     = new stdclass();
$lang->task->report->tasksPerLeft->graph         = new stdclass();
$lang->task->report->tasksPerConsumed->graph     = new stdclass();
$lang->task->report->tasksPerFinishedBy->graph   = new stdclass();
$lang->task->report->tasksPerClosedReason->graph = new stdclass();
$lang->task->report->finishedTasksPerDay->graph  = new stdclass();

$lang->task->report->tasksPerProject->graph->xAxisName      = $lang->projectCommon;
$lang->task->report->tasksPerModule->graph->xAxisName       = '模块';
$lang->task->report->tasksPerAssignedTo->graph->xAxisName   = '用户';
$lang->task->report->tasksPerType->graph->xAxisName         = '类型';
$lang->task->report->tasksPerPri->graph->xAxisName          = '优先级';
$lang->task->report->tasksPerStatus->graph->xAxisName       = '状态';
$lang->task->report->tasksPerDeadline->graph->xAxisName     = '日期';
$lang->task->report->tasksPerEstimate->graph->xAxisName     = '时间';
$lang->task->report->tasksPerLeft->graph->xAxisName         = '时间';
$lang->task->report->tasksPerConsumed->graph->xAxisName     = '时间';
$lang->task->report->tasksPerFinishedBy->graph->xAxisName   = '用户';
$lang->task->report->tasksPerClosedReason->graph->xAxisName = '关闭原因';

$lang->task->report->finishedTasksPerDay->type               = 'bar';
$lang->task->report->finishedTasksPerDay->graph->xAxisName   = '日期';
/* testcase */
$lang->testcase->id               = '用例编号';
$lang->testcase->product          = "所属{$lang->productCommon}";
$lang->testcase->module           = '所属模块';
$lang->testcase->moduleAB         = '模块';
$lang->testcase->story            = '相关需求';
$lang->testcase->title            = '用例标题';
$lang->testcase->precondition     = '前置条件';
$lang->testcase->pri              = '优先级';
$lang->testcase->type             = '用例类型';
$lang->testcase->status           = '用例状态';
$lang->testcase->steps            = '用例步骤';
$lang->testcase->openedBy         = '由谁创建';
$lang->testcase->openedDate       = '创建日期';
$lang->testcase->lastEditedBy     = '最后修改者';
$lang->testcase->result           = '测试结果';
$lang->testcase->real             = '实际情况';
$lang->testcase->keywords         = '关键词';
$lang->testcase->files            = '附件';
$lang->testcase->linkCase         = '相关用例';
$lang->testcase->linkCases        = '关联相关用例';
$lang->testcase->unlinkCase       = '移除相关用例';
$lang->testcase->stage            = '适用阶段';
$lang->testcase->lastEditedByAB   = '修改者';
$lang->testcase->lastEditedDateAB = '修改日期';
$lang->testcase->lastEditedDate   = '修改日期';
$lang->testcase->version          = '用例版本';
$lang->testcase->lastRunner       = '执行人';
$lang->testcase->lastRunDate      = '执行时间';
$lang->testcase->assignedTo       = '指派给';
$lang->testcase->colorTag         = '颜色标签';
$lang->testcase->lastRunResult    = '结果';
$lang->testcase->allProduct       = "所有{$lang->productCommon}";
$lang->testcase->fromBug          = '来源Bug';
$lang->testcase->toBug            = '生成Bug';
$lang->testcase->changed          = '用例变更';
$lang->testcase->createBug        = '转Bug';
$lang->case = $lang->testcase;  // 用于DAO检查时使用。因为case是系统关键字，所以无法定义该模块为case，只能使用testcase，但表还是使用的case。

$lang->testcase->stepID     = '编号';
$lang->testcase->stepDesc   = '步骤';
$lang->testcase->stepExpect = '预期';

$lang->testcase->common             = '用例';
$lang->testcase->index              = "用例管理首页";
$lang->testcase->create             = "建用例";
$lang->testcase->batchCreate        = "批量添加";
$lang->testcase->delete             = "删除用例";
$lang->testcase->view               = "用例详情";
$lang->testcase->edit               = "编辑";
$lang->testcase->batchEdit          = "批量编辑 ";
$lang->testcase->batchChangeModule  = "批量修改模块";
$lang->testcase->delete             = "删除";
$lang->testcase->batchDelete        = "批量删除 ";
$lang->testcase->browse             = "用例列表";
$lang->testcase->groupCase          = "分组浏览用例";
$lang->testcase->import             = "导入";
$lang->testcase->showImport         = "显示导入内容";
$lang->testcase->exportTemplet      = "导出模板";
$lang->testcase->export             = "导出数据";
$lang->testcase->confirmChange      = '确认用例变动';
$lang->testcase->confirmStoryChange = '确认需求变动';
$lang->testcase->copy               = '复制用例';

$lang->testcase->new = '新增';

$lang->testcase->num    = '用例记录数：';

$lang->testcase->deleteStep   = '删除';
$lang->testcase->insertBefore = '之前添加';
$lang->testcase->insertAfter  = '之后添加';

$lang->testcase->assignToMe    = '给我的用例';
$lang->testcase->openedByMe    = '我建的用例';
$lang->testcase->allCases      = '所有';
$lang->testcase->needConfirm   = '需求变动';
$lang->testcase->bySearch      = '搜索';

$lang->testcase->lblStory                    = '相关需求';
$lang->testcase->lblLastEdited               = '最后编辑';
$lang->testcase->lblTypeValue                = '类型可选值列表';
$lang->testcase->lblStageValue               = '阶段可选值列表';
$lang->testcase->lblStatusValue              = '状态可选值列表';

$lang->testcase->legendBasicInfo    = '基本信息';
$lang->testcase->legendAttatch      = '附件';
$lang->testcase->legendLinkBugs     = '相关Bug';
$lang->testcase->legendOpenAndEdit  = '创建编辑';
$lang->testcase->legendComment      = '备注';

$lang->testcase->confirmDelete      = '您确认要删除该测试用例吗？';
$lang->testcase->confirmBatchDelete = '您确认要批量删除这些测试用例吗？';
$lang->testcase->ditto              = '同上';
$lang->testcase->dittoNotice        = '该用例与上一用例不属于同一产品！';

$lang->testcase->priList[3] = 3;
$lang->testcase->priList[1] = 1;
$lang->testcase->priList[2] = 2;
$lang->testcase->priList[4] = 4;

$lang->testcase->typeList['']            = '';
$lang->testcase->typeList['feature']     = '功能测试';
$lang->testcase->typeList['performance'] = '性能测试';
$lang->testcase->typeList['config']      = '配置相关';
$lang->testcase->typeList['install']     = '安装部署';
$lang->testcase->typeList['security']    = '安全相关';
$lang->testcase->typeList['interface']   = '接口测试';
$lang->testcase->typeList['other']       = '其他';

$lang->testcase->stageList['']           = '';
$lang->testcase->stageList['unittest']   = '单元测试阶段';
$lang->testcase->stageList['feature']    = '功能测试阶段';
$lang->testcase->stageList['intergrate'] = '集成测试阶段';
$lang->testcase->stageList['system']     = '系统测试阶段';
$lang->testcase->stageList['smoke']      = '冒烟测试阶段';
$lang->testcase->stageList['bvt']        = '版本验证阶段';

$lang->testcase->groups['']      = '分组查看';
$lang->testcase->groups['story'] = '需求分组';

$lang->testcase->statusList['']            = '';
$lang->testcase->statusList['normal']      = '正常';
$lang->testcase->statusList['blocked']     = '被阻塞';
$lang->testcase->statusList['investigate'] = '研究中';

$lang->testcase->resultList['n/a']     = 'N/A';
$lang->testcase->resultList['pass']    = '通过';
$lang->testcase->resultList['fail']    = '失败';
$lang->testcase->resultList['blocked'] = '阻塞';

$lang->testcase->buttonToList = '返回';

$lang->testcase->errorEncode = '无数据，请选择正确的编码重新上传！';
$lang->testcase->noFunction  = '不存在iconv和mb_convert_encoding转码方法，不能将数据转成想要的编码！';
$lang->testcase->noRequire   = "%s行的“%s”是必填字段，不能为空";

$lang->testcase->searchStories = '键入来搜索需求';

$lang->testcase->featureBar['browse']['all']         = $lang->testcase->allCases;
$lang->testcase->featureBar['browse']['needconfirm'] = $lang->testcase->needConfirm;
$lang->testcase->featureBar['browse']['group']       = '分组查看';
$lang->testcase->featureBar['browse']['zerocase']    = '零用例需求';
$lang->testcase->featureBar['groupcase']             = $lang->testcase->featureBar['browse'];
/* testtask */
$lang->testtask->index          = "版本首页";
$lang->testtask->create         = "提交测试";
$lang->testtask->delete         = "删除版本";
$lang->testtask->view           = "概况";
$lang->testtask->edit           = "编辑版本";
$lang->testtask->browse         = "版本列表";
$lang->testtask->linkCase       = "关联用例";
$lang->testtask->unlinkCase     = "移除";
$lang->testtask->batchAssign    = "批量指派";
$lang->testtask->runCase        = "执行";
$lang->testtask->batchRun       = "批量执行";
$lang->testtask->results        = "结果";
$lang->testtask->createBug      = "提Bug";
$lang->testtask->assign         = '指派';
$lang->testtask->cases          = '用例';
$lang->testtask->groupCase      = "分组浏览用例";
$lang->testtask->pre            = '上一个';
$lang->testtask->next           = '下一个';
$lang->testtask->start          = "开始";
$lang->testtask->close          = "关闭";
$lang->testtask->wait           = "待测版本";
$lang->testtask->done           = "已测版本";

$lang->testtask->common         = '测试视图版本';
$lang->testtask->product        = '所属' . $lang->productCommon;
$lang->testtask->project        = '所属' . $lang->projectCommon;
$lang->testtask->build          = '版本';
$lang->testtask->owner          = '负责人';
$lang->testtask->pri            = '优先级';
$lang->testtask->name           = '名称';
$lang->testtask->begin          = '开始日期';
$lang->testtask->end            = '结束日期';
$lang->testtask->desc           = '描述';
$lang->testtask->mailto         = '抄送给';
$lang->testtask->status         = '当前状态';
$lang->testtask->assignedTo     = '指派给';
$lang->testtask->linkVersion    = '版本';
$lang->testtask->lastRunAccount = '执行人';
$lang->testtask->lastRunTime    = '执行时间';
$lang->testtask->lastRunResult  = '结果';
$lang->testtask->report         = '测试总结';
$lang->testtask->files          = '上传附件';

$lang->testtask->legendDesc      = '版本描述';
$lang->testtask->legendReport    = '测试总结';
$lang->testtask->legendBasicInfo = '基本信息';

$lang->testtask->statusList['wait']    = '未开始';
$lang->testtask->statusList['doing']   = '进行中';
$lang->testtask->statusList['done']    = '已完成';
$lang->testtask->statusList['blocked'] = '被阻塞';

$lang->testtask->priList[0] = '';
$lang->testtask->priList[3] = '3';
$lang->testtask->priList[1] = '1';
$lang->testtask->priList[2] = '2';
$lang->testtask->priList[4] = '4';

$lang->testtask->unlinkedCases = '未关联';
$lang->testtask->linkByStory   = '按需求关联';
$lang->testtask->linkByBug     = '按Bug关联';
$lang->testtask->passAll       = '全部通过';
$lang->testtask->pass          = '通过';
$lang->testtask->fail          = '失败';
$lang->testtask->showResult    = '共执行<span class="text-info">%s</span>次';
$lang->testtask->showFail      = '失败<span class="text-danger">%s</span>次';

$lang->testtask->confirmDelete     = '您确认要删除该版本吗？';
$lang->testtask->confirmUnlinkCase = '您确认要移除该用例吗？';

$lang->testtask->assignedToMe  = '指派给我';
$lang->testtask->allCases      = '所有用例';

$lang->testtask->lblCases      = '用例列表';
$lang->testtask->lblUnlinkCase = '移除用例';
$lang->testtask->lblRunCase    = '执行用例';
$lang->testtask->lblResults    = '执行结果';

$lang->testtask->placeholder = new stdclass();
$lang->testtask->placeholder->begin = '开始日期';
$lang->testtask->placeholder->end   = '结束日期';

$lang->testtask->mail = new stdclass();
$lang->testtask->mail->create = new stdclass();
$lang->testtask->mail->edit   = new stdclass();
$lang->testtask->mail->close  = new stdclass();
$lang->testtask->mail->create->title = "%s创建了版本 #%s:%s";
$lang->testtask->mail->edit->title   = "%s编辑了版本 #%s:%s";
$lang->testtask->mail->close->title  = "%s关闭了版本 #%s:%s";

$lang->testtask->action = new stdclass();
$lang->testtask->action->testtaskopened  = '$date, 由 <strong>$actor</strong> 创建版本 <strong>$extra</strong>。' . "\n";
$lang->testtask->action->testtaskstarted = '$date, 由 <strong>$actor</strong> 启动版本 <strong>$extra</strong>。' . "\n";
$lang->testtask->action->testtaskclosed  = '$date, 由 <strong>$actor</strong> 完成版本 <strong>$extra</strong>。' . "\n";
/* todo */
$lang->todo->common       = '待办';
$lang->todo->index        = "待办一览";
$lang->todo->create       = "新增";
$lang->todo->batchCreate  = "批量添加";
$lang->todo->edit         = "更新待办";
$lang->todo->batchEdit    = "批量编辑";
$lang->todo->view         = "待办详情";
$lang->todo->finish       = "完成";
$lang->todo->batchFinish  = "批量完成";
$lang->todo->export       = "导出";
$lang->todo->delete       = "删除待办";
$lang->todo->import2Today = "导入到今天";
$lang->todo->import       = "导入";
$lang->todo->legendBasic  = "基本信息";

$lang->todo->account     = '所有者';
$lang->todo->date        = '日期';
$lang->todo->beginAB     = '开始';
$lang->todo->endAB       = '结束';
$lang->todo->beginAndEnd = '起止时间';
$lang->todo->type        = '类型';
$lang->todo->pri         = '优先级';
$lang->todo->name        = '名称';
$lang->todo->status      = '状态';
$lang->todo->desc        = '描述';
$lang->todo->private     = '私人事务';

$lang->todo->confirmBug   = '该Todo关联的是Bug #%s，需要修改它吗？';
$lang->todo->confirmTask  = '该Todo关联的是Task #%s，需要修改它吗？';

$lang->todo->statusList['wait']     = '未开始';
$lang->todo->statusList['doing']    = '进行中';
$lang->todo->statusList['done']     = '已完成';
//$lang->todo->statusList['cancel']   = '已取消';
//$lang->todo->statusList['postpone'] = '已延期';

$lang->todo->priList[3] = '一般';
$lang->todo->priList[1] = '最高';
$lang->todo->priList[2] = '较高';
$lang->todo->priList[4] = '最低';

$lang->todo->typeList['custom'] = '自定义';
$lang->todo->typeList['bug']    = 'Bug';
$lang->todo->typeList['task']   = $lang->projectCommon . '任务';

$lang->todo->confirmDelete  = "您确定要删除这条待办吗？";
$lang->todo->thisIsPrivate  = '这是一条私人事务。:)';
$lang->todo->lblDisableDate = '暂时不设定时间';

$lang->todo->periods['today']      = '今日';
$lang->todo->periods['yesterday']  = '昨日';
$lang->todo->periods['thisWeek']   = '本周';
$lang->todo->periods['lastWeek']   = '上周';
$lang->todo->periods['thisMonth']  = '本月';
$lang->todo->periods['lastmonth']  = '上月';
$lang->todo->periods['thisSeason'] = '本季';
$lang->todo->periods['thisYear']   = '本年';
$lang->todo->periods['future']     = '待定';
$lang->todo->periods['before']     = '未完';
$lang->todo->periods['all']        = '所有';

$lang->todo->action = new stdclass();
$lang->todo->action->finished  = array('main' => '$date, 由 <strong>$actor</strong>完成');
$lang->todo->action->marked    = array('main' => '$date, 由 <strong>$actor</strong> 标记为<strong>$extra</strong>。', 'extra' => 'statusList');
/* tree */
$lang->tree = new stdclass();
$lang->tree->common            = '模块维护';
$lang->tree->edit              = '编辑';
$lang->tree->delete            = '删除模块';
$lang->tree->browse            = '通用模块维护';
$lang->tree->browseTask        = '任务模块维护';
$lang->tree->manage            = '维护模块';
$lang->tree->fix               = '修正数据';
$lang->tree->manageProduct     = "维护{$lang->productCommon}视图模块";
$lang->tree->manageProject     = "维护{$lang->projectCommon}视图模块";
$lang->tree->manageBug         = '维护测试视图模块';
$lang->tree->manageCase        = '维护用例视图模块';
$lang->tree->manageCustomDoc   = '维护文档库分类';
$lang->tree->updateOrder       = '更新排序';
$lang->tree->manageChild       = '维护子模块';
$lang->tree->manageStoryChild  = '维护子模块';
$lang->tree->manageBugChild    = '维护Bug子模块';
$lang->tree->manageCaseChild   = '维护用例子模块';
$lang->tree->manageTaskChild   = "维护{$lang->projectCommon}子模块";
$lang->tree->syncFromProduct   = '复制';
$lang->tree->dragAndSort       = "拖放排序";
$lang->tree->addChild          = "增加子模块";

$lang->tree->confirmDelete = '该模块及其子模块都会被删除，您确定删除吗？';
$lang->tree->confirmRoot   = "模块的所属{$lang->productCommon}修改，会关联修改该模块下的需求、Bug、用例的所属{$lang->productCommon}，以及{$lang->projectCommon}和{$lang->productCommon}的关联关系。该操作比较危险，请谨慎操作。是否确认修改？";
$lang->tree->successSave   = '成功保存';
$lang->tree->successFixed  = '成功修正数据！';
$lang->tree->repeatName    = '模块名“%s”已经存在！';

$lang->tree->name       = '模块名称';
$lang->tree->parent     = '上级模块';
$lang->tree->child      = '子模块';
$lang->tree->owner      = '负责人';
$lang->tree->order      = '排序';
$lang->tree->short      = '简称';
$lang->tree->all        = '所有模块';
$lang->tree->projectDoc = "{$lang->projectCommon}文档";
$lang->tree->product    = "所属{$lang->productCommon}";
/* tutorial */

$lang->tutorial = new stdclass();
$lang->tutorial->common           = '新手教程';
$lang->tutorial->desc             = '通过完成一系列任务，快速了解禅道的基本使用方法。这可能会花费您10分钟，你可以随时退出任务。';
$lang->tutorial->start            = '立即开始';
$lang->tutorial->exit             = '退出教程';
$lang->tutorial->congratulation   = '恭喜，你已完成了所有任务！';
$lang->tutorial->restart          = '重新开始';
$lang->tutorial->currentTask      = '当前任务';
$lang->tutorial->allTasks         = '所有任务';
$lang->tutorial->previous         = '上一个';
$lang->tutorial->nextTask         = '下一个任务';
$lang->tutorial->openTargetPage   = '打开 <strong class="task-page-name">目标</strong> 页面';
$lang->tutorial->atTargetPage     = '已在 <strong class="task-page-name">目标</strong> 页面';
$lang->tutorial->reloadTargetPage = '重新载入';
$lang->tutorial->target           = '目标';
$lang->tutorial->targetPageTip    = '按此指示打开【%s】页面';
$lang->tutorial->requiredTip      = '【%s】为必填项';
$lang->tutorial->congratulateTask = '恭喜，你完成了任务 【<span class="task-name-current"></span>】！';
$lang->tutorial->serverErrorTip   = '发生了一些错误。';
$lang->tutorial->ajaxSetError     = '必须指定已完成的任务，如果要重置任务，请设置值为空。';
$lang->tutorial->novice           = "您可能初次使用禅道，是否进入新手教程";
$lang->tutorial->dataNotSave      = "教程任务中，数据不会保存。";

$lang->tutorial->tasks = array();

$lang->tutorial->tasks['createAccount']         = array('title' => '创建帐号');
$lang->tutorial->tasks['createAccount']['nav']  = array('module' => 'user', 'method' => 'create', 'menuModule' => 'company', 'menu' => 'addUser', 'form' => '#dataform', 'submit' => '#submit', 'targetPageName' => '添加用户');
$lang->tutorial->tasks['createAccount']['desc'] = "<p>在系统创建一个新的用户帐号：</p><ul><li data-target='nav'>打开 <span class='task-nav'>组织 <i class='icon icon-angle-right'></i> 用户 <i class='icon icon-angle-right'></i> 添加用户</span> 页面；</li><li data-target='form'>在添加用户表单中填写新用户信息；</li><li data-target='submit'>保存用户信息。</li></ul>";

$lang->tutorial->tasks['createProduct']         = array('title' => '创建产品');
$lang->tutorial->tasks['createProduct']['nav']  = array('module' => 'product', 'method' => 'create', 'menu' => 'create', 'form' => '#dataform', 'submit' => '#submit', 'targetPageName' => '新增产品');
$lang->tutorial->tasks['createProduct']['desc'] = "<p>在系统创建一个新的产品：</p><ul><li data-target='nav'>打开 <span class='task-nav'>产品 <i class='icon icon-angle-right'></i> 添加产品</span> 页面；</li><li data-target='form'>在表单中填写要创建的产品信息；</li><li data-target='submit'>保存产品信息。</li></ul>";

$lang->tutorial->tasks['createStory']         = array('title' => '创建需求');
$lang->tutorial->tasks['createStory']['nav']  = array('module' => 'story', 'method' => 'create', 'menuModule' => 'product', 'menu' => 'story', 'target' => '.create-story-btn', 'form' => '#dataform', 'submit' => '#submit', 'targetPageName' => '提需求');
$lang->tutorial->tasks['createStory']['desc'] = "<p>在系统创建一个新的需求：</p><ul><li data-target='nav'>打开 <span class='task-nav'>产品 <i class='icon icon-angle-right'></i> 需求 <i class='icon icon-angle-right'></i> 添加需求</span> 页面；</li><li data-target='form'>在表单中填写要创建的需求信息；</li><li data-target='submit'>保存需求信息。</li></ul>";

$lang->tutorial->tasks['createProject']         = array('title' => '创建项目');
$lang->tutorial->tasks['createProject']['nav']  = array('module' => 'project', 'method' => 'create', 'menu' => 'create', 'form' => '#dataform', 'submit' => '#submit', 'targetPageName' => '添加项目');
$lang->tutorial->tasks['createProject']['desc'] = "<p>在系统创建一个新的项目：</p><ul><li data-target='nav'>打开 <span class='task-nav'> 项目 <i class='icon icon-angle-right'></i> 添加项目</span> 页面；</li><li data-target='form'>在表单中填写要创建的项目信息；</li><li data-target='submit'>保存项目信息。</li></ul>";

$lang->tutorial->tasks['manageTeam']         = array('title' => '管理团队');
$lang->tutorial->tasks['manageTeam']['nav']  = array('module' => 'project', 'method' => 'managemembers', 'menu' => 'team', 'target' => '.manage-team-btn', 'form' => '#teamForm', 'requiredFields' => 'account1', 'submit' => '#submit', 'targetPageName' => '团队管理');
$lang->tutorial->tasks['manageTeam']['desc'] = "<p>管理项目团队成员：</p><ul><li data-target='nav'>打开 <span class='task-nav'> 项目 <i class='icon icon-angle-right'></i> 团队 <i class='icon icon-angle-right'></i> 团队管理</span> 页面；</li><li data-target='form'>选择要加入团队的成员；</li><li data-target='submit'>保存团队成员信息。</li></ul>";

$lang->tutorial->tasks['linkStory']         = array('title' => '关联需求');
$lang->tutorial->tasks['linkStory']['nav']  = array('module' => 'project', 'method' => 'linkStory', 'menu' => 'story', 'target' => '.link-story-btn', 'form' => '#linkStoryForm', 'formType' => 'table', 'submit' => '#submit', 'targetPageName' => '关联需求');
$lang->tutorial->tasks['linkStory']['desc'] = "<p>将需求关联到项目：</p><ul><li data-target='nav'>打开 <span class='task-nav'> 项目 <i class='icon icon-angle-right'></i> 需求 <i class='icon icon-angle-right'></i> 关联需求</span> 页面；</li><li data-target='form'>在需求列表中勾选要关联的需求；</li><li data-target='submit'>保存关联的需求信息。</li></ul>";

$lang->tutorial->tasks['createTask']         = array('title' => '分解任务');
$lang->tutorial->tasks['createTask']['nav']  = array('module' => 'task', 'method' => 'create', 'menuModule' => 'project', 'menu' => 'story', 'target' => '.btn-task-create', 'form' => '#dataform', 'submit' => '#submit', 'targetPageName' => '建任务');
$lang->tutorial->tasks['createTask']['desc'] = "<p>将项目需求分解为任务：</p><ul><li data-target='nav'>打开 <span class='task-nav'> 项目 <i class='icon icon-angle-right'></i> 需求 <i class='icon icon-angle-right'></i> 分解任务</span> 页面；</li><li data-target='form'>在表单中填写任务信息；</li><li data-target='submit'>保存任务信息。</li></ul>";

$lang->tutorial->tasks['createBug']         = array('title' => '提Bug');
$lang->tutorial->tasks['createBug']['nav']  = array('module' => 'bug', 'method' => 'create', 'menuModule' => 'qa', 'menu' => 'bug', 'target' => '.btn-bug-create', 'form' => '#dataform', 'submit' => '#submit', 'targetPageName' => '提Bug');
$lang->tutorial->tasks['createBug']['desc'] = "<p>在系统中提交一个Bug：</p><ul><li data-target='nav'>打开 <span class='task-nav'> 测试 <i class='icon icon-angle-right'></i> Bug <i class='icon icon-angle-right'></i> 提Bug</span>；</li><li data-target='form'>在表单中填写Bug信息；</li><li data-target='submit'>保存Bug信息。</li></ul>";
/* upgrade */
$lang->upgrade->common  = '升级';
$lang->upgrade->result  = '升级结果';
$lang->upgrade->fail    = '升级失败';
$lang->upgrade->success = '升级成功';
$lang->upgrade->tohome  = '访问禅道';
$lang->upgrade->license = '禅道项目管理软件已更换授权协议至 Z PUBLIC LICENSE(ZPL) 1.2';
$lang->upgrade->warnning= '警告';
$lang->upgrade->checkExtension  = '检查插件';
$lang->upgrade->warnningContent = <<<EOT
<p>升级有危险，请先备份数据库，以防万一。</p>
<pre>
1. 可以通过phpMyAdmin进行备份。
2. 使用mysql命令行的工具。
   $> mysqldump -u <span class='text-danger'>username</span> -p <span class='text-danger'>dbname</span> > <span class='text-danger'>filename</span> 
   要将上面红色的部分分别替换成对应的用户名和禅道系统的数据库名。
   比如： mysqldump -u root -p zentao >zentao.bak
</pre>
EOT;
$lang->upgrade->setStatusFile = '<h4>升级之前请先执行下面的命令：</h4>
                                 <ul>
                                 <li>windows: 打开命令行，执行<strong>echo ok > %s</strong></li>
                                 <li>linux: <strong>touch %s;</strong></li>
                                 <li>或者删掉"%s" 这个文件 ，重新创建一个ok.txt文件，不需要内容。</li>
                                 </ul>
                                 <strong style="color:red">我已经仔细阅读上面提示且完成上述工作，<a href="upgrade.php">继续更新</a></strong>';
$lang->upgrade->selectVersion = '选择版本';
$lang->upgrade->continue      = '继续';
$lang->upgrade->noteVersion   = "务必选择正确的版本，否则会造成数据丢失。";
$lang->upgrade->fromVersion   = '原来的版本';
$lang->upgrade->toVersion     = '升级到';
$lang->upgrade->confirm       = '确认要执行的SQL语句';
$lang->upgrade->sureExecute   = '确认执行';
$lang->upgrade->forbiddenExt  = '以下插件与新版本不兼容，已经自动禁用：';

$lang->upgrade->fromVersions['0_3beta']   = '0.3 BETA';
$lang->upgrade->fromVersions['0_4beta']   = '0.4 BETA';
$lang->upgrade->fromVersions['0_5beta']   = '0.5 BETA';
$lang->upgrade->fromVersions['0_6beta']   = '0.6 BETA';
$lang->upgrade->fromVersions['1_0beta']   = '1.0 BETA';
$lang->upgrade->fromVersions['1_0rc1']    = '1.0 RC1';
$lang->upgrade->fromVersions['1_0rc2']    = '1.0 RC2';
$lang->upgrade->fromVersions['1_0']       = '1.0 STABLE';
$lang->upgrade->fromVersions['1_0_1']     = '1.0.1';
$lang->upgrade->fromVersions['1_1']       = '1.1';
$lang->upgrade->fromVersions['1_2']       = '1.2';
$lang->upgrade->fromVersions['1_3']       = '1.3';
$lang->upgrade->fromVersions['1_4']       = '1.4';
$lang->upgrade->fromVersions['1_5']       = '1.5';
$lang->upgrade->fromVersions['2_0']       = '2.0';
$lang->upgrade->fromVersions['2_1']       = '2.1';
$lang->upgrade->fromVersions['2_2']       = '2.2';
$lang->upgrade->fromVersions['2_3']       = '2.3';
$lang->upgrade->fromVersions['2_4']       = '2.4';
$lang->upgrade->fromVersions['3_0_beta1'] = '3.0 BETA1';
$lang->upgrade->fromVersions['3_0_beta2'] = '3.0 BETA2';
$lang->upgrade->fromVersions['3_0']       = '3.0 STABLE';
$lang->upgrade->fromVersions['3_1']       = '3.1';
$lang->upgrade->fromVersions['3_2']       = '3.2';
$lang->upgrade->fromVersions['3_2_1']     = '3.2.1';
$lang->upgrade->fromVersions['3_3']       = '3.3';
$lang->upgrade->fromVersions['4_0_beta1'] = '4.0 BETA1';
$lang->upgrade->fromVersions['4_0_beta2'] = '4.0 BETA2';
$lang->upgrade->fromVersions['4_0']       = '4.0';
$lang->upgrade->fromVersions['4_0_1']     = '4.0.1';
$lang->upgrade->fromVersions['4_1']       = '4.1';
$lang->upgrade->fromVersions['4_2_beta']  = '4.2.beta';
$lang->upgrade->fromVersions['4_3_beta']  = '4.3.beta';
$lang->upgrade->fromVersions['5_0_beta1'] = '5.0.beta1';
$lang->upgrade->fromVersions['5_0_beta2'] = '5.0.beta2';
$lang->upgrade->fromVersions['5_0']       = '5.0';
$lang->upgrade->fromVersions['5_1']       = '5.1';
$lang->upgrade->fromVersions['5_2']       = '5.2';
$lang->upgrade->fromVersions['5_2_1']     = '5.2.1';
$lang->upgrade->fromVersions['5_3']       = '5.3';
$lang->upgrade->fromVersions['6_0_beta1'] = '6.0.beta1';
$lang->upgrade->fromVersions['6_0']       = '6.0';
$lang->upgrade->fromVersions['6_1']       = '6.1';
$lang->upgrade->fromVersions['6_2']       = '6.2';
$lang->upgrade->fromVersions['6_3']       = '6.3';
$lang->upgrade->fromVersions['6_4']       = '6.4';
$lang->upgrade->fromVersions['7_0']       = '7.0';
$lang->upgrade->fromVersions['7_1']       = '7.1';
$lang->upgrade->fromVersions['7_2']       = '7.2';
$lang->upgrade->fromVersions['7_2_4']     = '7.2.4';
$lang->upgrade->fromVersions['7_2_5']     = '7.2.5';
$lang->upgrade->fromVersions['7_3']       = '7.3';
$lang->upgrade->fromVersions['7_4_beta']  = '7.4.beta';
$lang->upgrade->fromVersions['8_0']       = '8.0';
$lang->upgrade->fromVersions['8_0_1']     = '8.0.1';
$lang->upgrade->fromVersions['8_1']       = '8.1';
$lang->upgrade->fromVersions['8_1_3']     = '8.1.3';
$lang->upgrade->fromVersions['8_2_beta']  = '8.2.beta';
$lang->upgrade->fromVersions['8_2']       = '8.2';
$lang->upgrade->fromVersions['8_2_1']     = '8.2.1';
$lang->upgrade->fromVersions['8_2_2']     = '8.2.2';
$lang->upgrade->fromVersions['8_2_3']     = '8.2.3';
$lang->upgrade->fromVersions['8_2_4']     = '8.2.4';
$lang->upgrade->fromVersions['8_2_5']     = '8.2.5';
/* user */
$lang->user->common      = '用户';
$lang->user->id          = '用户编号';
$lang->user->company     = '所属公司';
$lang->user->dept        = '所属部门';
$lang->user->account     = '用户名';
$lang->user->password    = '密码';
$lang->user->password2   = '请重复密码';
$lang->user->role        = '职位';
$lang->user->group       = '分组';
$lang->user->realname    = '真实姓名';
$lang->user->nickname    = '昵称';
$lang->user->commiter    = '源代码帐号';
$lang->user->birthyear   = '出生年';
$lang->user->gender      = '性别';
$lang->user->email       = '邮箱';
$lang->user->basicInfo   = '基本信息';
$lang->user->accountInfo = '帐号信息';
$lang->user->verify      = '安全验证';
$lang->user->contactInfo = '联系信息';
$lang->user->skype       = 'Skype';
$lang->user->qq          = 'QQ';
$lang->user->yahoo       = '雅虎通';
$lang->user->gtalk       = 'GTalk';
$lang->user->wangwang    = '旺旺';
$lang->user->mobile      = '手机';
$lang->user->phone       = '电话';
$lang->user->address     = '通讯地址';
$lang->user->zipcode     = '邮编';
$lang->user->join        = '入职日期';
$lang->user->visits      = '访问次数';
$lang->user->ip          = '最后IP';
$lang->user->last        = '最后登录';
$lang->user->ranzhi      = '然之帐号';
$lang->user->ditto       = '同上';
$lang->user->originalPassword = '原密码';
$lang->user->verifyPassword   = '请输入你的密码';
$lang->user->resetPassword    = '忘记密码';

$lang->user->index           = "用户视图首页";
$lang->user->view            = "用户详情";
$lang->user->create          = "添加用户";
$lang->user->batchCreate     = "批量添加用户";
$lang->user->edit            = "编辑用户";
$lang->user->batchEdit       = "批量编辑";
$lang->user->unlock          = "解锁用户";
$lang->user->delete          = "删除用户";
$lang->user->unbind          = "解除然之绑定";
$lang->user->login           = "用户登录";
$lang->user->mobileLogin     = "手机访问";
$lang->user->editProfile     = "修改档案";
$lang->user->deny            = "访问受限";
$lang->user->confirmDelete   = "您确定删除该用户吗？";
$lang->user->confirmUnlock   = "您确定解除该用户的锁定状态吗？";
$lang->user->confirmUnbind   = "您确定解除该用户跟然之的绑定吗？";
$lang->user->relogin         = "重新登录";
$lang->user->asGuest         = "游客访问";
$lang->user->goback          = "返回前一页";
$lang->user->deleted         = '(已删除)';

$lang->user->profile      = '档案';
$lang->user->project      = $lang->projectCommon;
$lang->user->task         = '任务';
$lang->user->bug          = '缺陷';
$lang->user->test         = '测试';
$lang->user->testTask     = '测试任务';
$lang->user->testCase     = '测试用例';
$lang->user->todo         = '待办';
$lang->user->story        = '需求';
$lang->user->dynamic      = '动态';

$lang->user->openedBy    = '由他创建';
$lang->user->assignedTo  = '指派给他';
$lang->user->finishedBy  = '由他完成';
$lang->user->resolvedBy  = '由他解决';
$lang->user->closedBy    = '由他关闭';
$lang->user->reviewedBy  = '由他评审';
$lang->user->canceledBy  = '由他取消';

$lang->user->testTask2Him = '负责版本';
$lang->user->case2Him     = '给他的用例';
$lang->user->caseByHim    = '他建的用例';

$lang->user->errorDeny    = "抱歉，您无权访问『<b>%s</b>』模块的『<b>%s</b>』功能。请联系管理员获取权限。点击后退返回上页。";
$lang->user->loginFailed  = "登录失败，请检查您的用户名或密码是否填写正确。";
$lang->user->lockWarning  = "您还有%s次尝试机会。";
$lang->user->loginLocked  = "密码尝试次数太多，请联系管理员解锁，或%s分钟后重试。";
$lang->user->weakPassword = "您的密码强度小于系统设定。";

$lang->user->roleList['']       = '';
$lang->user->roleList['dev']    = '研发';
$lang->user->roleList['qa']     = '测试';
$lang->user->roleList['pm']     = '项目经理';
$lang->user->roleList['po']     = '产品经理';
$lang->user->roleList['td']     = '研发主管';
$lang->user->roleList['pd']     = '产品主管';
$lang->user->roleList['qd']     = '测试主管';
$lang->user->roleList['top']    = '高层管理';
$lang->user->roleList['others'] = '其他';

$lang->user->genderList['m'] = '男';
$lang->user->genderList['f'] = '女';

$lang->user->passwordStrengthList[0] = "<span style='color:red'>弱</span>";
$lang->user->passwordStrengthList[1] = "<span style='color:#000'>中</span>";
$lang->user->passwordStrengthList[2] = "<span style='color:green'>强</span>";

$lang->user->statusList['active'] = '正常';
$lang->user->statusList['delete'] = '删除';

$lang->user->keepLogin['on']      = '保持登录';
$lang->user->loginWithDemoUser    = '使用demo帐号登录：';

$lang->user->placeholder = new stdclass();
$lang->user->placeholder->account   = '英文、数字和下划线的组合，三位以上';
$lang->user->placeholder->password1 = '六位以上';
$lang->user->placeholder->role      = '职位影响内容和用户列表的顺序。';
$lang->user->placeholder->group     = '分组决定用户的权限列表。';
$lang->user->placeholder->commiter  = '版本控制系统(subversion)中的帐号';
$lang->user->placeholder->verify    = '需要输入你的密码加以验证';

$lang->user->placeholder->passwordStrength[1] = '强度必须为中，6位以上，包含大小写字母，数字。';
$lang->user->placeholder->passwordStrength[2] = '强度必须为强，10位以上，包含字母，数字，特殊字符。';

$lang->user->error = new stdclass();
$lang->user->error->account       = "ID %s，英文、数字和下划线的组合，三位以上";
$lang->user->error->accountDupl   = "ID %s，该用户名已经存在";
$lang->user->error->realname      = "ID %s，必须填写真实姓名";
$lang->user->error->password      = "ID %s，密码必须六位以上";
$lang->user->error->mail          = "ID %s，请填写正确的邮箱地址";
$lang->user->error->role          = "ID %s，职位不能为空";

$lang->user->error->verifyPassword   = "安全验证密码错误，请输入你的登录密码";
$lang->user->error->originalPassword = "原密码不正确";

$lang->user->contacts = new stdclass();
$lang->user->contacts->common   = '联系人';
$lang->user->contacts->listName = '列表名称';

$lang->user->contacts->manage        = '维护列表';
$lang->user->contacts->contactsList  = '已有列表';
$lang->user->contacts->selectedUsers = '选择用户';
$lang->user->contacts->selectList    = '选择列表';
$lang->user->contacts->createList    = '创建新列表';
$lang->user->contacts->noListYet     = '还没有创建任何列表，请先创建联系人列表。';
$lang->user->contacts->confirmDelete = '您确定要删除这个列表吗？';
$lang->user->contacts->or            = ' 或者 ';

$lang->user->resetFail       = "重置密码失败，检查用户名是否存在！";
$lang->user->resetSuccess    = "重置密码成功，请用新密码登录。";
$lang->user->noticeResetFile = '<h5>为了安全起见，系统需要确认您的管理员身份</h5>
    <h5>请登录禅道所在的服务器，创建%s文件。</h5>
    <p>注意：</p>
    <ol>
    <li>文件内容为空。</li>
    <li>如果之前文件存在，删除之后重新创建。</li>
    </ol>'; 
