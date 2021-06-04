<?php
/* common */

include (dirname(__FILE__) . '/common.php');

global $config;

$lang->arrow     = '&nbsp;<i class="icon-angle-right"></i>&nbsp;';
$lang->colon     = '-';
$lang->comma     = '，';
$lang->dot       = '。';
$lang->at        = ' 于 ';
$lang->downArrow = '↓';
$lang->null      = '空';
$lang->ellipsis  = '…';
$lang->percent   = '%';
$lang->dash      = '-';

$lang->zentaoPMS        = '禅道';
$lang->logoImg          = 'zt-logo.png';
$lang->welcome          = "%s项目管理系统";
$lang->logout           = '退出';
$lang->login            = '登录';
$lang->help             = '帮助';
$lang->aboutZenTao      = '关于禅道';
$lang->profile          = '个人档案';
$lang->changePassword   = '修改密码';
$lang->unfoldMenu       = '展开导航';
$lang->collapseMenu     = '收起导航';
$lang->preference       = '个性化设置';
$lang->runInfo          = "<div class='row'><div class='u-1 a-center' id='debugbar'>时间: %s 毫秒, 内存: %s KB, 查询: %s.  </div></div>";
$lang->agreement        = "已阅读并同意<a href='http://zpl.pub/page/zplv12.html' target='_blank'>《Z PUBLIC LICENSE授权协议1.2》</a>。<span class='text-danger'>未经许可，不得去除、隐藏或遮掩禅道软件的任何标志及链接。</span>";
$lang->designedByAIUX   = "<a href='https://api.zentao.net/goto.php?item=aiux' class='link-aiux' target='_blank'><i class='icon icon-aiux'></i> 艾体验设计</a>";

$lang->reset        = '重填';
$lang->cancel       = '取消';
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
$lang->saveSuccess  = '保存成功';
$lang->confirm      = '确认';
$lang->preview      = '查看';
$lang->goback       = '返回';
$lang->goPC         = 'PC版';
$lang->more         = '更多';
$lang->moreLink     = 'More';
$lang->day          = '天';
$lang->customConfig = '自定义';
$lang->public       = '公共';
$lang->trunk        = '主干';
$lang->sort         = '排序';
$lang->required     = '必填';
$lang->noData       = '暂无';
$lang->fullscreen   = '全屏';
$lang->retrack      = '收起';
$lang->whitelist    = '访问白名单';

$lang->actions         = '操作';
$lang->restore         = '恢复默认';
$lang->comment         = '备注';
$lang->history         = '历史记录';
$lang->attatch         = '附件';
$lang->reverse         = '切换顺序';
$lang->switchDisplay   = '切换显示';
$lang->expand          = '展开全部';
$lang->collapse        = '收起';
$lang->saveSuccess     = '保存成功';
$lang->fail            = '失败';
$lang->addFiles        = '上传了附件 ';
$lang->files           = '附件 ';
$lang->pasteText       = '多项录入';
$lang->uploadImages    = '多图上传 ';
$lang->timeout         = '连接超时，请检查网络环境，或重试！';
$lang->repairTable     = '数据库表可能损坏，请用phpmyadmin或myisamchk检查修复。';
$lang->duplicate       = '已有相同标题的%s';
$lang->ipLimited       = "<html><head><meta http-equiv='Content-Type' content='text/html; charset=utf-8' /></head><body>抱歉，管理员限制当前IP登录，请联系管理员解除限制。</body></html>";
$lang->unfold          = '+';
$lang->fold            = '-';
$lang->homepage        = '设为模块首页';
$lang->noviceTutorial  = '新手教程';
$lang->changeLog       = '修改日志';
$lang->manual          = '手册';
$lang->customMenu      = '自定义导航';
$lang->customField     = '自定义表单项';
$lang->lineNumber      = '行号';
$lang->tutorialConfirm = '检测到你尚未退出新手教程模式，是否现在退出？';

$lang->preShortcutKey  = '[快捷键:←]';
$lang->nextShortcutKey = '[快捷键:→]';
$lang->backShortcutKey = '[快捷键:Alt+↑]';

$lang->select        = '选择';
$lang->selectAll     = '全选';
$lang->selectReverse = '反选';
$lang->loading       = '稍候...';
$lang->notFound      = '抱歉，您访问的对象不存在！';
$lang->notPage       =  '抱歉，您访问的功能正在开发中！';
$lang->showAll       = '[[全部显示]]';
$lang->selectedItems = '已选择 <strong>{0}</strong> 项';

$lang->future      = '未来';
$lang->year        = '年';
$lang->workingHour = '工时';

$lang->idAB         = 'ID';
$lang->priAB        = 'P';
$lang->statusAB     = '状态';
$lang->openedByAB   = '创建';
$lang->assignedToAB = '指派';
$lang->typeAB       = '类型';
$lang->nameAB       = '名称';

$lang->common->common     = '公有模块';
$lang->my->common         = '地盘';
$lang->program->common    = '项目集';
$lang->product->common    = '产品';
$lang->project->common    = '项目';
$lang->execution->common  = $config->systemMode == 'new' ? '执行' : $lang->executionCommon;
$lang->qa->common         = '测试';
$lang->devops->common     = 'DevOps';
$lang->doc->common        = '文档';
$lang->repo->common       = '代码';
$lang->report->common     = '统计';
$lang->system->common     = '组织';
$lang->admin->common      = '后台';
$lang->task->common       = '任务';
$lang->bug->common        = 'Bug';
$lang->testcase->common   = '用例';
$lang->testtask->common   = '测试单';
$lang->score->common      = '我的积分';
$lang->build->common      = '版本';
$lang->testreport->common = '测试报告';
$lang->automation->common = '自动化';
$lang->team->common       = '团队';
$lang->user->common       = '用户';
$lang->custom->common     = '自定义';
$lang->extension->common  = '插件';
$lang->company->common    = '公司';
$lang->dept->common       = '部门';
$lang->program->list      = '项目集列表';
$lang->execution->list    = "{$lang->executionCommon}列表";

$lang->personnel->common     = '人员';
$lang->personnel->invest     = '投入人员';
$lang->personnel->accessible = '可访问人员';

$lang->stakeholder->common = '干系人';
$lang->release->common     = '发布';
$lang->message->common     = '通知';
$lang->mail->common        = '邮件';

$lang->my->shortCommon          = '地盘';
$lang->testcase->shortCommon    = '用例';
$lang->productplan->shortCommon = '计划';
$lang->score->shortCommon       = '积分';
$lang->testreport->shortCommon  = '报告';
$lang->qa->shortCommon          = 'QA';

$lang->dashboard  = '仪表盘';
$lang->contribute = '贡献';
$lang->dynamic    = '动态';
$lang->contact    = '联系人';
$lang->whitelist  = '白名单';
$lang->roadmap    = '路线图';
$lang->track      = '矩阵';
$lang->settings   = '设置';
$lang->overview   = '概况';
$lang->module     = '模块';
$lang->priv       = '权限';
$lang->design     = '设计';
$lang->other      = '其他';
$lang->estimation = '估算';
$lang->issue      = '问题';
$lang->risk       = '风险';
$lang->measure    = '度量';
$lang->treeView   = '树状图';
$lang->groupView  = '分组视图';
$lang->kanban     = '看板';
$lang->burn       = '燃尽图';
$lang->view       = '视图';
$lang->intro      = '介绍';
$lang->indexPage  = '首页';
$lang->model      = '模型';
$lang->redev      = '二次开发';
$lang->browser    = '浏览器';
$lang->db         = '数据库';
$lang->editor     = '编辑器';
$lang->timezone   = '时区';
$lang->security   = '安全';
$lang->calendar   = '日程';

$lang->my->work = '待处理';

$lang->project->list = '项目列表';

$lang->execution->list = "{$lang->executionCommon}列表";

$lang->doc->recent    = '最近文档';
$lang->doc->my        = '我的文档';
$lang->doc->favorite  = '我的收藏';
$lang->doc->product   = '产品库';
$lang->doc->project   = '项目库';
$lang->doc->execution = "{$lang->executionCommon}库";
$lang->doc->custom    = '自定义库';
$lang->doc->wiki      = 'WIKI';

$lang->product->list = $lang->productCommon . '列表';

$lang->project->report = '报告';

$lang->report->weekly = '周报';
$lang->report->annual = '年度总结';
$lang->report->notice = new stdclass();
$lang->report->notice->help = '注：统计报表的数据来源于列表页面的检索结果，生成统计报表前请先在列表页面进行检索。比如列表页面我们检索的是%tab%，那么报表就是基于之前检索的%tab%的结果集进行统计。';

$lang->testcase->case      = '用例';
$lang->testcase->testsuite = '套件';
$lang->testcase->caselib   = '用例库';

$lang->devops->compile = '构建';
$lang->devops->repo    = '版本库';
$lang->devops->rules   = '指令';

$lang->admin->system     = '系统';
$lang->admin->entry      = '应用';
$lang->admin->data       = '数据';
$lang->admin->cron       = '定时';
$lang->admin->buildIndex = '重建索引';

$lang->storyConcept = '需求概念';

$lang->searchTips = '';
$lang->searchAB   = '搜索';

$lang->searchObjects['all']         = '全部';
$lang->searchObjects['bug']         = 'Bug';
$lang->searchObjects['story']       = '需求';
$lang->searchObjects['task']        = '任务';
$lang->searchObjects['testcase']    = '用例';
$lang->searchObjects['product']     = $lang->productCommon;
$lang->searchObjects['build']       = '版本';
$lang->searchObjects['release']     = '发布';
$lang->searchObjects['productplan'] = $lang->productCommon . '计划';
$lang->searchObjects['testtask']    = '测试单';
$lang->searchObjects['doc']         = '文档';
$lang->searchObjects['caselib']     = '用例库';
$lang->searchObjects['testreport']  = '测试报告';
$lang->searchObjects['program']     = '项目集';
$lang->searchObjects['project']     = '项目';
$lang->searchObjects['execution']   = $lang->executionCommon;
$lang->searchObjects['user']        = '用户';
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

$lang->theme                = '主题';
$lang->themes['default']    = '禅道蓝（默认）';
$lang->themes['green']      = '叶兰绿';
$lang->themes['red']        = '赤诚红';
$lang->themes['purple']     = '玉烟紫';
$lang->themes['pink']       = '芙蕖粉';
$lang->themes['blackberry'] = '露莓黑';
$lang->themes['classic']    = '经典蓝';

$lang->error = new stdclass();
$lang->error->companyNotFound = "您访问的域名 %s 没有对应的公司。";
$lang->error->length          = array("『%s』长度错误，应当为『%s』", "『%s』长度应当不超过『%s』，且大于『%s』。");
$lang->error->reg             = "『%s』不符合格式，应当为:『%s』。";
$lang->error->unique          = "『%s』已经有『%s』这条记录了。如果您确定该记录已删除，请到后台-数据-回收站还原。";
$lang->error->gt              = "『%s』应当大于『%s』。";
$lang->error->ge              = "『%s』应当不小于『%s』。";
$lang->error->notempty        = "『%s』不能为空。";
$lang->error->empty           = "『%s』必须为空。";
$lang->error->equal           = "『%s』必须为『%s』。";
$lang->error->int             = array("『%s』应当是数字。", "『%s』应当介于『%s-%s』之间。");
$lang->error->float           = "『%s』应当是数字，可以是小数。";
$lang->error->email           = "『%s』应当为合法的EMAIL。";
$lang->error->URL             = "『%s』应当为合法的URL。";
$lang->error->date            = "『%s』应当为合法的日期。";
$lang->error->datetime        = "『%s』应当为合法的日期。";
$lang->error->code            = "『%s』应当为字母或数字的组合。";
$lang->error->account         = "『%s』只能是字母、数字或下划线的组合三位以上。";
$lang->error->passwordsame    = "两次密码应该相同。";
$lang->error->passwordrule    = "密码应该符合规则，长度至少为六位。";
$lang->error->accessDenied    = '您没有访问权限';
$lang->error->pasteImg        = '您的浏览器不支持粘贴图片！';
$lang->error->noData          = '没有数据';
$lang->error->editedByOther   = '该记录可能已经被改动。请刷新页面重新编辑！';
$lang->error->tutorialData    = '新手模式下不会插入数据，请退出新手模式操作';
$lang->error->noCurlExt       = '服务器未安装Curl模块。';

$lang->pager = new stdclass();
$lang->pager->noRecord     = "暂时没有记录";
$lang->pager->digest       = "共 <strong>%s</strong> 条记录，%s <strong>%s/%s</strong> &nbsp; ";
$lang->pager->recPerPage   = "每页 <strong>%s</strong> 条";
$lang->pager->first        = "<i class='icon-step-backward' title='首页'></i>";
$lang->pager->pre          = "<i class='icon-play icon-flip-horizontal' title='上一页'></i>";
$lang->pager->next         = "<i class='icon-play' title='下一页'></i>";
$lang->pager->last         = "<i class='icon-step-forward' title='末页'></i>";
$lang->pager->locate       = "GO!";
$lang->pager->previousPage = "上一页";
$lang->pager->nextPage     = "下一页";
$lang->pager->summery      = "第 <strong>%s-%s</strong> 项，共 <strong>%s</strong> 项";
$lang->pager->pageOfText   = '第 {0} 页';
$lang->pager->firstPage    = '第一页';
$lang->pager->lastPage     = '最后一页';
$lang->pager->goto         = '跳转';
$lang->pager->pageOf       = '第 <strong>{page}</strong> 页';
$lang->pager->totalPage    = '共 <strong>{totalPage}</strong> 页';
$lang->pager->totalCount   = '共 <strong>{recTotal}</strong> 项';
$lang->pager->pageSize     = '每页 <strong>{recPerPage}</strong> 项';
$lang->pager->itemsRange   = '第 <strong>{start}</strong> ~ <strong>{end}</strong> 项';
$lang->pager->pageOfTotal  = '第 <strong>{page}</strong>/<strong>{totalPage}</strong> 页';

$lang->colorPicker = new stdclass();
$lang->colorPicker->errorTip = '不是有效的颜色值';

$lang->downNotify     = "下载桌面提醒";
$lang->clientName     = "客户端";
$lang->downloadClient = "下载客户端";
$lang->clientHelp     = "客户端使用说明";
$lang->clientHelpLink = "http://www.zentao.net/book/zentaopmshelp/302.html#2";
$lang->website        = "https://www.zentao.net";

$lang->suhosinInfo     = "警告：数据太多，请在php.ini中修改<font color=red>sohusin.post.max_vars</font>和<font color=red>sohusin.request.max_vars</font>（大于%s的数）。 保存并重新启动apache或php-fpm，否则会造成部分数据无法保存。";
$lang->maxVarsInfo     = "警告：数据太多，请在php.ini中修改<font color=red>max_input_vars</font>（大于%s的数）。 保存并重新启动apache或php-fpm，否则会造成部分数据无法保存。";
$lang->pasteTextInfo   = "粘贴文本到文本域中，每行文字作为一条数据的标题。";
$lang->noticeImport    = "导入数据中，含有已经存在系统的数据，请确认这些数据要覆盖或者全新插入。";
$lang->importConfirm   = "导入确认";
$lang->importAndCover  = "覆盖";
$lang->importAndInsert = "全新插入";

$lang->noResultsMatch    = "没有匹配结果";
$lang->searchMore        = "搜索此关键字的更多结果：";
$lang->chooseUsersToMail = "选择要发信通知的用户...";
$lang->noticePasteImg    = "可以在编辑器直接贴图。";
$lang->pasteImgFail      = "贴图失败，请稍后重试。";
$lang->pasteImgUploading = "正在上传图片，请稍后...";

if(!defined('DT_DATETIME1'))  define('DT_DATETIME1',  'Y-m-d H:i:s');
if(!defined('DT_DATETIME2'))  define('DT_DATETIME2',  'y-m-d H:i');
if(!defined('DT_MONTHTIME1')) define('DT_MONTHTIME1', 'n/d H:i');
if(!defined('DT_MONTHTIME2')) define('DT_MONTHTIME2', 'n月d日 H:i');
if(!defined('DT_DATE1'))      define('DT_DATE1',     'Y-m-d');
if(!defined('DT_DATE2'))      define('DT_DATE2',     'Ymd');
if(!defined('DT_DATE3'))      define('DT_DATE3',     'Y年m月d日');
if(!defined('DT_DATE4'))      define('DT_DATE4',     'n月j日');
if(!defined('DT_DATE5'))      define('DT_DATE5',     'j/n');
if(!defined('DT_TIME1'))      define('DT_TIME1',     'H:i:s');
if(!defined('DT_TIME2'))      define('DT_TIME2',     'H:i');
if(!defined('LONG_TIME'))     define('LONG_TIME',    '2059-12-31');

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

$lang->datepicker->dayNames     = array('星期日', '星期一', '星期二', '星期三', '星期四', '星期五', '星期六');
$lang->datepicker->abbrDayNames = array('日', '一', '二', '三', '四', '五', '六');
$lang->datepicker->monthNames   = array('一月', '二月', '三月', '四月', '五月', '六月', '七月', '八月', '九月', '十月', '十一月', '十二月');

include (dirname(__FILE__) . '/menu.php');
/* action */
global $config;

$lang->action->common     = '系统日志';
$lang->action->product    = $lang->productCommon;
$lang->action->project    = '项目';
$lang->action->execution  = $lang->executionCommon;
$lang->action->objectType = '对象类型';
$lang->action->objectID   = '对象ID';
$lang->action->objectName = '对象名称';
$lang->action->actor      = '操作者';
$lang->action->action     = '动作';
$lang->action->actionID   = '记录ID';
$lang->action->date       = '日期';
$lang->action->extra      = '附加值';

$lang->action->trash       = '回收站';
$lang->action->undelete    = '还原';
$lang->action->hideOne     = '隐藏';
$lang->action->hideAll     = '全部隐藏';
$lang->action->editComment = '修改备注';
$lang->action->create      = '添加备注';
$lang->action->comment     = '备注';

$lang->action->undeleteAction = '还原数据';
$lang->action->hideOneAction  = '隐藏数据';

$lang->action->trashTips      = '提示：为了保证系统的完整性，禅道系统的删除都是标记删除。';
$lang->action->textDiff       = '文本格式';
$lang->action->original       = '原始格式';
$lang->action->confirmHideAll = '您确定要全部隐藏这些记录吗？';
$lang->action->needEdit       = '要还原%s的名称或代号已经存在，请编辑更改。';
$lang->action->historyEdit    = '历史记录编辑不能为空。';
$lang->action->noDynamic      = '暂时没有动态。';

$lang->action->history = new stdclass();
$lang->action->history->action = '关联日志';
$lang->action->history->field  = '字段';
$lang->action->history->old    = '旧值';
$lang->action->history->new    = '新值';
$lang->action->history->diff   = '不同';

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

$lang->action->periods['all']       = $lang->action->dynamic->all;
$lang->action->periods['today']     = $lang->action->dynamic->today;
$lang->action->periods['yesterday'] = $lang->action->dynamic->yesterday;
$lang->action->periods['thisweek']  = $lang->action->dynamic->thisWeek;
$lang->action->periods['lastweek']  = $lang->action->dynamic->lastWeek;
$lang->action->periods['thismonth'] = $lang->action->dynamic->thisMonth;
$lang->action->periods['lastmonth'] = $lang->action->dynamic->lastMonth;

$lang->action->objectTypes['product']     = $lang->productCommon;
$lang->action->objectTypes['branch']      = '分支';
$lang->action->objectTypes['story']       = $lang->SRCommon;
$lang->action->objectTypes['design']      = '设计';
$lang->action->objectTypes['productplan'] = '计划';
$lang->action->objectTypes['release']     = '发布';
$lang->action->objectTypes['program']     = '项目集';
$lang->action->objectTypes['project']     = '项目';
$lang->action->objectTypes['execution']   = $config->systemMode == 'new' ? '执行' : $lang->executionCommon;
$lang->action->objectTypes['task']        = '任务';
$lang->action->objectTypes['build']       = '版本';
$lang->action->objectTypes['job']         = '构建';
$lang->action->objectTypes['bug']         = 'Bug';
$lang->action->objectTypes['case']        = '用例';
$lang->action->objectTypes['caseresult']  = '用例结果';
$lang->action->objectTypes['stepresult']  = '用例步骤';
$lang->action->objectTypes['caselib']     = '用例库';
$lang->action->objectTypes['testsuite']   = '套件';
$lang->action->objectTypes['testtask']    = '测试单';
$lang->action->objectTypes['testreport']  = '报告';
$lang->action->objectTypes['doc']         = '文档';
$lang->action->objectTypes['doclib']      = '文档库';
$lang->action->objectTypes['todo']        = '待办';
$lang->action->objectTypes['risk']        = '风险';
$lang->action->objectTypes['issue']       = '问题';
$lang->action->objectTypes['module']      = '模块';
$lang->action->objectTypes['user']        = '用户';
$lang->action->objectTypes['stakeholder'] = '干系人';
$lang->action->objectTypes['budget']      = '费用估算';
$lang->action->objectTypes['entry']       = '应用';
$lang->action->objectTypes['webhook']     = 'Webhook';
$lang->action->objectTypes['team']        = '团队';
$lang->action->objectTypes['whitelist']   = '白名单';
$lang->action->objectTypes['opportunity'] = '机会';
$lang->action->objectTypes['trainplan']   = '培训计划';
$lang->action->objectTypes['gapanalysis'] = '能力差距分析';

$lang->action->desc = new stdclass();
$lang->action->desc->common          = '$date, <strong>$action</strong> by <strong>$actor</strong>。' . "\n";
$lang->action->desc->extra           = '$date, <strong>$action</strong> as <strong>$extra</strong> by <strong>$actor</strong>。' . "\n";
$lang->action->desc->opened          = '$date, 由 <strong>$actor</strong> 创建。' . "\n";
$lang->action->desc->openedbysystem  = '$date, 由系统创建。' . "\n";
$lang->action->desc->created         = '$date, 由 <strong>$actor</strong> 创建。' . "\n";
$lang->action->desc->added           = '$date, 由 <strong>$actor</strong> 添加。' . "\n";
$lang->action->desc->changed         = '$date, 由 <strong>$actor</strong> 变更。' . "\n";
$lang->action->desc->edited          = '$date, 由 <strong>$actor</strong> 编辑。' . "\n";
$lang->action->desc->assigned        = '$date, 由 <strong>$actor</strong> 指派给 <strong>$extra</strong>。' . "\n";
$lang->action->desc->closed          = '$date, 由 <strong>$actor</strong> 关闭。' . "\n";
$lang->action->desc->closedbysystem  = '$date, 由系统关闭。' . "\n";
$lang->action->desc->deleted         = '$date, 由 <strong>$actor</strong> 删除。' . "\n";
$lang->action->desc->deletedfile     = '$date, 由 <strong>$actor</strong> 删除了附件：<strong><i>$extra</i></strong>。' . "\n";
$lang->action->desc->editfile        = '$date, 由 <strong>$actor</strong> 编辑了附件：<strong><i>$extra</i></strong>。' . "\n";
$lang->action->desc->erased          = '$date, 由 <strong>$actor</strong> 删除。' . "\n";
$lang->action->desc->undeleted       = '$date, 由 <strong>$actor</strong> 还原。' . "\n";
$lang->action->desc->hidden          = '$date, 由 <strong>$actor</strong> 隐藏。' . "\n";
$lang->action->desc->commented       = '$date, 由 <strong>$actor</strong> 添加备注。' . "\n";
$lang->action->desc->activated       = '$date, 由 <strong>$actor</strong> 激活。' . "\n";
$lang->action->desc->blocked         = '$date, 由 <strong>$actor</strong> 阻塞。' . "\n";
$lang->action->desc->moved           = '$date, 由 <strong>$actor</strong> 移动，之前为 "$extra"。' . "\n";
$lang->action->desc->confirmed       = '$date, 由 <strong>$actor</strong> 确认' . $lang->SRCommon . '变动，最新版本为<strong>#$extra</strong>。' . "\n";
$lang->action->desc->caseconfirmed   = '$date, 由 <strong>$actor</strong> 确认用例变动，最新版本为<strong>#$extra</strong>。' . "\n";
$lang->action->desc->bugconfirmed    = '$date, 由 <strong>$actor</strong> 确认Bug。' . "\n";
$lang->action->desc->frombug         = '$date, 由 <strong>$actor</strong> Bug转化而来，Bug编号为 <strong>$extra</strong>。';
$lang->action->desc->started         = '$date, 由 <strong>$actor</strong> 启动。' . "\n";
$lang->action->desc->restarted       = '$date, 由 <strong>$actor</strong> 继续。' . "\n";
$lang->action->desc->delayed         = '$date, 由 <strong>$actor</strong> 延期。' . "\n";
$lang->action->desc->suspended       = '$date, 由 <strong>$actor</strong> 挂起。' . "\n";
$lang->action->desc->recordestimate  = '$date, 由 <strong>$actor</strong> 记录工时，消耗 <strong>$extra</strong> 小时。';
$lang->action->desc->editestimate    = '$date, 由 <strong>$actor</strong> 编辑工时。';
$lang->action->desc->deleteestimate  = '$date, 由 <strong>$actor</strong> 删除工时。';
$lang->action->desc->canceled        = '$date, 由 <strong>$actor</strong> 取消。' . "\n";
$lang->action->desc->svncommited     = '$date, 由 <strong>$actor</strong> 提交代码，版本为<strong>#$extra</strong>。' . "\n";
$lang->action->desc->gitcommited     = '$date, 由 <strong>$actor</strong> 提交代码，版本为<strong>#$extra</strong>。' . "\n";
$lang->action->desc->finished        = '$date, 由 <strong>$actor</strong> 完成。' . "\n";
$lang->action->desc->paused          = '$date, 由 <strong>$actor</strong> 暂停。' . "\n";
$lang->action->desc->verified        = '$date, 由 <strong>$actor</strong> 验收。' . "\n";
$lang->action->desc->diff1           = '修改了 <strong><i>%s</i></strong>，旧值为 "%s"，新值为 "%s"。<br />' . "\n";
$lang->action->desc->diff2           = '修改了 <strong><i>%s</i></strong>，区别为：' . "\n" . "<blockquote class='textdiff'>%s</blockquote>" . "\n<blockquote class='original'>%s</blockquote>";
$lang->action->desc->diff3           = '将文件名 %s 改为 %s 。' . "\n";
$lang->action->desc->linked2bug      = '$date 由 <strong>$actor</strong> 关联到版本 <strong>$extra</strong>';
$lang->action->desc->linked2testtask = '$date 由 <strong>$actor</strong> 关联到测试单 <strong>$extra</strong>';
$lang->action->desc->resolved        = '$date, 由 <strong>$actor</strong> 解决。' . "\n";
$lang->action->desc->managed         = '$date, 由 <strong>$actor</strong> 维护。' . "\n";
$lang->action->desc->estimated       = '$date, 由 <strong>$actor</strong> 估算。' . "\n";
$lang->action->desc->run             = '$date, 由 <strong>$actor</strong> 执行。' . "\n";

$lang->action->desc->createchildren     = '$date, 由 <strong>$actor</strong> 创建子任务 <strong>$extra</strong>。' . "\n";
$lang->action->desc->linkchildtask      = '$date, 由 <strong>$actor</strong> 关联子任务 <strong>$extra</strong>。' . "\n";
$lang->action->desc->unlinkchildrentask = '$date, 由 <strong>$actor</strong> 移除子任务 <strong>$extra</strong>。' . "\n";
$lang->action->desc->linkparenttask     = '$date, 由 <strong>$actor</strong> 关联到父任务 <strong>$extra</strong>。' . "\n";
$lang->action->desc->unlinkparenttask   = '$date, 由 <strong>$actor</strong> 从父任务<strong>$extra</strong>取消关联。' . "\n";
$lang->action->desc->deletechildrentask = '$date, 由 <strong>$actor</strong> 删除子任务<strong>$extra</strong>。' . "\n";

$lang->action->desc->createchildrenstory = '$date, 由 <strong>$actor</strong> 创建子需求 <strong>$extra</strong>。' . "\n";
$lang->action->desc->linkchildstory      = '$date, 由 <strong>$actor</strong> 关联子需求 <strong>$extra</strong>。' . "\n";
$lang->action->desc->unlinkchildrenstory = '$date, 由 <strong>$actor</strong> 移除子需求 <strong>$extra</strong>。' . "\n";
$lang->action->desc->linkparentstory     = '$date, 由 <strong>$actor</strong> 关联到父需求 <strong>$extra</strong>。' . "\n";
$lang->action->desc->unlinkparentstory   = '$date, 由 <strong>$actor</strong> 从父需求<strong>$extra</strong>取消关联。' . "\n";
$lang->action->desc->deletechildrenstory = '$date, 由 <strong>$actor</strong> 删除子需求<strong>$extra</strong>。' . "\n";

$lang->action->desc->linkrelatedcase   = '$date, 由 <strong>$actor</strong> 关联相关用例 <strong>$extra</strong>。' . "\n";
$lang->action->desc->unlinkrelatedcase = '$date, 由 <strong>$actor</strong> 移除相关用例 <strong>$extra</strong>。' . "\n";

$lang->action->label                        = new stdclass();
$lang->action->label->created               = '创建';
$lang->action->label->opened                = '创建';
$lang->action->label->openedbysystem        = '系统创建';
$lang->action->label->closedbysystem        = '系统关闭';
$lang->action->label->added                 = '添加';
$lang->action->label->changed               = '变更了';
$lang->action->label->edited                = '编辑了';
$lang->action->label->assigned              = '指派了';
$lang->action->label->closed                = '关闭了';
$lang->action->label->deleted               = '删除了';
$lang->action->label->deletedfile           = '删除附件';
$lang->action->label->editfile              = '编辑附件';
$lang->action->label->erased                = '删除了';
$lang->action->label->undeleted             = '还原了';
$lang->action->label->hidden                = '隐藏了';
$lang->action->label->commented             = '评论了';
$lang->action->label->communicated          = '沟通了';
$lang->action->label->activated             = '激活了';
$lang->action->label->blocked               = '阻塞了';
$lang->action->label->resolved              = '解决了';
$lang->action->label->reviewed              = '评审了';
$lang->action->label->moved                 = '移动了';
$lang->action->label->confirmed             = "确认了{$lang->SRCommon}";
$lang->action->label->bugconfirmed          = '确认了';
$lang->action->label->tostory               = "转{$lang->SRCommon}";
$lang->action->label->frombug               = "转{$lang->SRCommon}";
$lang->action->label->fromlib               = '从用例库导入';
$lang->action->label->totask                = '转任务';
$lang->action->label->svncommited           = '提交代码';
$lang->action->label->gitcommited           = '提交代码';
$lang->action->label->linked2plan           = "关联计划";
$lang->action->label->unlinkedfromplan      = "移除计划";
$lang->action->label->changestatus          = '修改状态';
$lang->action->label->marked                = '编辑了';
$lang->action->label->linked2execution      = "关联{$lang->executionCommon}";
$lang->action->label->unlinkedfromexecution = "移除{$lang->executionCommon}";
$lang->action->label->linked2project        = "关联项目";
$lang->action->label->unlinkedfromproject   = "移除项目";
$lang->action->label->unlinkedfrombuild     = "移除版本";
$lang->action->label->linked2release        = "关联发布";
$lang->action->label->unlinkedfromrelease   = "移除发布";
$lang->action->label->linkrelatedbug        = "关联了相关Bug";
$lang->action->label->unlinkrelatedbug      = "移除了相关Bug";
$lang->action->label->linkrelatedcase       = "关联了相关用例";
$lang->action->label->unlinkrelatedcase     = "移除了相关用例";
$lang->action->label->linkrelatedstory      = "关联了相关{$lang->SRCommon}";
$lang->action->label->unlinkrelatedstory    = "移除了相关{$lang->SRCommon}";
$lang->action->label->subdividestory        = "细分了{$lang->SRCommon}";
$lang->action->label->unlinkchildstory      = "移除了细分{$lang->SRCommon}";
$lang->action->label->started               = '开始了';
$lang->action->label->restarted             = '继续了';
$lang->action->label->recordestimate        = '记录了工时';
$lang->action->label->editestimate          = '编辑了工时';
$lang->action->label->canceled              = '取消了';
$lang->action->label->finished              = '完成了';
$lang->action->label->paused                = '暂停了';
$lang->action->label->verified              = '验收了';
$lang->action->label->delayed               = '延期';
$lang->action->label->suspended             = '挂起';
$lang->action->label->login                 = '登录系统';
$lang->action->label->logout                = "退出登录";
$lang->action->label->deleteestimate        = "删除了工时";
$lang->action->label->linked2build          = "关联了";
$lang->action->label->linked2bug            = "关联了";
$lang->action->label->linked2testtask       = "关联了";
$lang->action->label->unlinkedfromtesttask  = "移除了";
$lang->action->label->linkchildtask         = "关联子任务";
$lang->action->label->unlinkchildrentask    = "取消关联子任务";
$lang->action->label->linkparenttask        = "关联到父任务";
$lang->action->label->unlinkparenttask      = "从父任务取消关联";
$lang->action->label->batchcreate           = "批量创建任务";
$lang->action->label->createchildren        = "创建子任务";
$lang->action->label->managed               = "维护";
$lang->action->label->managedteam           = "维护了";
$lang->action->label->managedwhitelist      = "维护了";
$lang->action->label->deletechildrentask    = "删除子任务";
$lang->action->label->createchildrenstory   = "创建子需求";
$lang->action->label->linkchildstory        = "关联子需求";
$lang->action->label->unlinkchildrenstory   = "取消关联子需求";
$lang->action->label->linkparentstory       = "关联到父需求";
$lang->action->label->unlinkparentstory     = "从父需求取消关联";
$lang->action->label->deletechildrenstory   = "删除子需求";
$lang->action->label->tracked               = '跟踪了';
$lang->action->label->hangup                = '挂起了';
$lang->action->label->run                   = '执行了';
$lang->action->label->estimated             = '估算了';
$lang->action->label->reviewclosed          = '评审失败';
$lang->action->label->passreviewed          = '确认通过';
$lang->action->label->clarifyreviewed       = '有待明确';
$lang->action->label->commitsummary         = '提交培训总结';
$lang->action->label->updatetrainee         = '更新培训人员';

$lang->action->dynamicAction                    = new stdclass();
$lang->action->dynamicAction->todo['opened']    = '创建待办';
$lang->action->dynamicAction->todo['edited']    = '编辑待办';
$lang->action->dynamicAction->todo['erased']    = '删除待办';
$lang->action->dynamicAction->todo['finished']  = '完成待办';
$lang->action->dynamicAction->todo['activated'] = '激活待办';
$lang->action->dynamicAction->todo['closed']    = '关闭待办';
$lang->action->dynamicAction->todo['assigned']  = '指派待办';
$lang->action->dynamicAction->todo['undeleted'] = '还原待办';
$lang->action->dynamicAction->todo['hidden']    = '隐藏待办';

$lang->action->dynamicAction->program['create']   = '创建项目集';
$lang->action->dynamicAction->program['edit']     = '编辑项目集';
$lang->action->dynamicAction->program['activate'] = '激活项目集';
$lang->action->dynamicAction->program['delete']   = '删除项目集';
$lang->action->dynamicAction->program['close']    = '关闭项目集';

$lang->action->dynamicAction->project['create']   = '创建项目';
$lang->action->dynamicAction->project['edit']     = '编辑项目';
$lang->action->dynamicAction->project['start']    = '开始项目';
$lang->action->dynamicAction->project['suspend']  = '延期项目';
$lang->action->dynamicAction->project['activate'] = '激活项目';
$lang->action->dynamicAction->project['close']    = '关闭项目';

$lang->action->dynamicAction->product['opened']    = '创建' . $lang->productCommon;
$lang->action->dynamicAction->product['edited']    = '编辑' . $lang->productCommon;
$lang->action->dynamicAction->product['deleted']   = '删除' . $lang->productCommon;
$lang->action->dynamicAction->product['closed']    = '关闭' . $lang->productCommon;
$lang->action->dynamicAction->product['undeleted'] = '还原' . $lang->productCommon;
$lang->action->dynamicAction->product['hidden']    = '隐藏' . $lang->productCommon;

$lang->action->dynamicAction->productplan['opened'] = "创建计划";
$lang->action->dynamicAction->productplan['edited'] = "编辑计划";

$lang->action->dynamicAction->release['opened']       = '创建发布';
$lang->action->dynamicAction->release['edited']       = '编辑发布';
$lang->action->dynamicAction->release['changestatus'] = '修改发布状态';
$lang->action->dynamicAction->release['undeleted']    = '还原发布';
$lang->action->dynamicAction->release['hidden']       = '隐藏发布';

$lang->action->dynamicAction->story['opened']                = "创建{$lang->SRCommon}";
$lang->action->dynamicAction->story['edited']                = "编辑{$lang->SRCommon}";
$lang->action->dynamicAction->story['activated']             = "激活{$lang->SRCommon}";
$lang->action->dynamicAction->story['reviewed']              = "评审{$lang->SRCommon}";
$lang->action->dynamicAction->story['closed']                = "关闭{$lang->SRCommon}";
$lang->action->dynamicAction->story['assigned']              = "指派{$lang->SRCommon}";
$lang->action->dynamicAction->story['changed']               = "变更{$lang->SRCommon}";
$lang->action->dynamicAction->story['linked2plan']           = "{$lang->SRCommon}关联计划";
$lang->action->dynamicAction->story['unlinkedfromplan']      = "计划移除{$lang->SRCommon}";
$lang->action->dynamicAction->story['linked2release']        = "{$lang->SRCommon}关联发布";
$lang->action->dynamicAction->story['unlinkedfromrelease']   = "发布移除{$lang->SRCommon}";
$lang->action->dynamicAction->story['linked2build']          = "{$lang->SRCommon}关联版本";
$lang->action->dynamicAction->story['unlinkedfrombuild']     = "版本移除{$lang->SRCommon}";
$lang->action->dynamicAction->story['unlinkedfromproject']   = '移除项目';
$lang->action->dynamicAction->story['undeleted']             = "还原{$lang->SRCommon}";
$lang->action->dynamicAction->story['hidden']                = "隐藏{$lang->SRCommon}";
$lang->action->dynamicAction->story['linked2execution']      = "关联$lang->SRCommon";
$lang->action->dynamicAction->story['unlinkedfromexecution'] = "移除$lang->SRCommon";
$lang->action->dynamicAction->story['estimated']             = "估算$lang->SRCommon";

$lang->action->dynamicAction->execution['opened']    = '创建' . $lang->executionCommon;
$lang->action->dynamicAction->execution['edited']    = '编辑' . $lang->executionCommon;
$lang->action->dynamicAction->execution['deleted']   = '删除' . $lang->executionCommon;
$lang->action->dynamicAction->execution['started']   = '开始' . $lang->executionCommon;
$lang->action->dynamicAction->execution['delayed']   = '延期' . $lang->executionCommon;
$lang->action->dynamicAction->execution['suspended'] = '挂起' . $lang->executionCommon;
$lang->action->dynamicAction->execution['activated'] = '激活' . $lang->executionCommon;
$lang->action->dynamicAction->execution['closed']    = '关闭' . $lang->executionCommon;
$lang->action->dynamicAction->execution['managed']   = '维护' . $lang->executionCommon;
$lang->action->dynamicAction->execution['undeleted'] = '还原' . $lang->executionCommon;
$lang->action->dynamicAction->execution['hidden']    = '隐藏' . $lang->executionCommon;
$lang->action->dynamicAction->execution['moved']     = '导入任务';

$lang->action->dynamicAction->team['managedTeam'] = '维护团队';

$lang->action->dynamicAction->task['opened']              = '创建任务';
$lang->action->dynamicAction->task['edited']              = '编辑任务';
$lang->action->dynamicAction->task['commented']           = '备注任务';
$lang->action->dynamicAction->task['assigned']            = '指派任务';
$lang->action->dynamicAction->task['confirmed']           = "确认{$lang->SRCommon}变更";
$lang->action->dynamicAction->task['started']             = '开始任务';
$lang->action->dynamicAction->task['finished']            = '完成任务';
$lang->action->dynamicAction->task['recordestimate']      = '记录工时';
$lang->action->dynamicAction->task['editestimate']        = '编辑工时';
$lang->action->dynamicAction->task['deleteestimate']      = '删除工时';
$lang->action->dynamicAction->task['paused']              = '暂停任务';
$lang->action->dynamicAction->task['closed']              = '关闭任务';
$lang->action->dynamicAction->task['canceled']            = '取消任务';
$lang->action->dynamicAction->task['activated']           = '激活任务';
$lang->action->dynamicAction->task['createchildren']      = '创建子任务';
$lang->action->dynamicAction->task['unlinkparenttask']    = '从父任务取消关联';
$lang->action->dynamicAction->task['deletechildrentask']  = '删除子任务';
$lang->action->dynamicAction->task['linkparenttask']      = '关联到父任务';
$lang->action->dynamicAction->task['linkchildtask']       = '关联子任务';
$lang->action->dynamicAction->task['createchildrenstory'] = '创建子需求';
$lang->action->dynamicAction->task['unlinkparentstory']   = '从父需求取消关联';
$lang->action->dynamicAction->task['deletechildrenstory'] = '删除子需求';
$lang->action->dynamicAction->task['linkparentstory']     = '关联到父需求';
$lang->action->dynamicAction->task['linkchildstory']      = '关联子需求';
$lang->action->dynamicAction->task['undeleted']           = '还原任务';
$lang->action->dynamicAction->task['hidden']              = '隐藏任务';
$lang->action->dynamicAction->task['svncommited']         = 'SVN提交';
$lang->action->dynamicAction->task['gitcommited']         = 'GIT提交';

$lang->action->dynamicAction->build['opened']  = '创建版本';
$lang->action->dynamicAction->build['edited']  = '编辑版本';
$lang->action->dynamicAction->build['deleted'] = '删除版本';

$lang->action->dynamicAction->bug['opened']              = '创建Bug';
$lang->action->dynamicAction->bug['edited']              = '编辑Bug';
$lang->action->dynamicAction->bug['activated']           = '激活Bug';
$lang->action->dynamicAction->bug['assigned']            = '指派Bug';
$lang->action->dynamicAction->bug['closed']              = '关闭Bug';
$lang->action->dynamicAction->bug['bugconfirmed']        = '确认Bug';
$lang->action->dynamicAction->bug['resolved']            = '解决Bug';
$lang->action->dynamicAction->bug['undeleted']           = '还原Bug';
$lang->action->dynamicAction->bug['hidden']              = '隐藏Bug';
$lang->action->dynamicAction->bug['deleted']             = '删除Bug';
$lang->action->dynamicAction->bug['confirmed']           = "确认{$lang->SRCommon}变更";
$lang->action->dynamicAction->bug['tostory']             = "转{$lang->SRCommon}";
$lang->action->dynamicAction->bug['totask']              = '转任务';
$lang->action->dynamicAction->bug['linked2plan']         = "Bug关联计划";
$lang->action->dynamicAction->bug['unlinkedfromplan']    = "计划移除Bug";
$lang->action->dynamicAction->bug['linked2release']      = 'Bug关联发布';
$lang->action->dynamicAction->bug['unlinkedfromrelease'] = '发布移除Bug';
$lang->action->dynamicAction->bug['linked2bug']          = 'Bug关联版本';
$lang->action->dynamicAction->bug['unlinkedfrombuild']   = '版本移除Bug';

$lang->action->dynamicAction->testtask['opened']    = '创建测试单';
$lang->action->dynamicAction->testtask['edited']    = '编辑测试单';
$lang->action->dynamicAction->testtask['started']   = '启动测试单';
$lang->action->dynamicAction->testtask['activated'] = '激活测试单';
$lang->action->dynamicAction->testtask['closed']    = '完成测试单';
$lang->action->dynamicAction->testtask['blocked']   = '阻塞测试单';

$lang->action->dynamicAction->case['opened']    = '创建用例';
$lang->action->dynamicAction->case['edited']    = '编辑用例';
$lang->action->dynamicAction->case['deleted']   = '删除用例';
$lang->action->dynamicAction->case['undeleted'] = '还原用例';
$lang->action->dynamicAction->case['hidden']    = '隐藏用例';
$lang->action->dynamicAction->case['reviewed']  = '评审用例';
$lang->action->dynamicAction->case['confirmed'] = "确认{$lang->SRCommon}变更";
$lang->action->dynamicAction->case['fromlib']   = '从用例库导入';

$lang->action->dynamicAction->testreport['opened']    = '创建测试报告';
$lang->action->dynamicAction->testreport['edited']    = '编辑测试报告';
$lang->action->dynamicAction->testreport['deleted']   = '删除测试报告';
$lang->action->dynamicAction->testreport['undeleted'] = '还原测试报告';
$lang->action->dynamicAction->testreport['hidden']    = '隐藏测试报告';

$lang->action->dynamicAction->testsuite['opened']    = '创建测试套件';
$lang->action->dynamicAction->testsuite['edited']    = '编辑测试套件';
$lang->action->dynamicAction->testsuite['deleted']   = '删除测试套件';
$lang->action->dynamicAction->testsuite['undeleted'] = '还原测试套件';
$lang->action->dynamicAction->testsuite['hidden']    = '隐藏测试套件';

$lang->action->dynamicAction->caselib['opened']    = '创建用例库';
$lang->action->dynamicAction->caselib['edited']    = '编辑用例库';
$lang->action->dynamicAction->caselib['deleted']   = '删除用例库';
$lang->action->dynamicAction->caselib['undeleted'] = '还原用例库';
$lang->action->dynamicAction->caselib['hidden']    = '隐藏用例库';

$lang->action->dynamicAction->doclib['created'] = '创建文档库';
$lang->action->dynamicAction->doclib['edited']  = '编辑文档库';
$lang->action->dynamicAction->doclib['deleted'] = '删除文档库';

$lang->action->dynamicAction->doc['created']   = '创建文档';
$lang->action->dynamicAction->doc['edited']    = '编辑文档';
$lang->action->dynamicAction->doc['commented'] = '备注文档';
$lang->action->dynamicAction->doc['deleted']   = '删除文档';
$lang->action->dynamicAction->doc['undeleted'] = '还原文档';
$lang->action->dynamicAction->doc['hidden']    = '隐藏文档';

$lang->action->dynamicAction->user['created']       = '创建用户';
$lang->action->dynamicAction->user['edited']        = '编辑用户';
$lang->action->dynamicAction->user['login']         = '用户登录';
$lang->action->dynamicAction->user['logout']        = '用户退出';
$lang->action->dynamicAction->user['undeleted']     = '还原用户';
$lang->action->dynamicAction->user['hidden']        = '隐藏用户';
$lang->action->dynamicAction->user['loginxuanxuan'] = '登录客户端';

$lang->action->dynamicAction->entry['created'] = '添加应用';
$lang->action->dynamicAction->entry['edited']  = '编辑应用';

$lang->action->label->product     = $lang->productCommon . '|product|view|productID=%s';
$lang->action->label->productplan = "计划|productplan|view|productID=%s";
$lang->action->label->release     = '发布|release|view|productID=%s';
$lang->action->label->story       = "{$lang->SRCommon}|story|view|storyID=%s";
$lang->action->label->program     = "项目集|program|product|programID=%s";
$lang->action->label->project     = "项目|project|index|projectID=%s";
if($config->systemMode == 'new')
{
    $lang->action->label->execution = "执行|execution|task|executionID=%s";
}
else
{
    $lang->action->label->execution = "$lang->executionCommon|execution|task|executionID=%s";
}
$lang->action->label->task        = '任务|task|view|taskID=%s';
$lang->action->label->build       = '版本|build|view|buildID=%s';
$lang->action->label->bug         = 'Bug|bug|view|bugID=%s';
$lang->action->label->case        = '用例|testcase|view|caseID=%s';
$lang->action->label->testtask    = '测试单|testtask|view|caseID=%s';
$lang->action->label->testsuite   = '测试套件|testsuite|view|suiteID=%s';
$lang->action->label->caselib     = '用例库|caselib|view|libID=%s';
$lang->action->label->todo        = '待办|todo|view|todoID=%s';
$lang->action->label->doclib      = '文档库|doc|objectLibs|type=&objectID=&libID=%s';
$lang->action->label->doc         = '文档|doc|view|docID=%s';
$lang->action->label->user        = '用户|user|view|account=%s';
$lang->action->label->testreport  = '报告|testreport|view|report=%s';
$lang->action->label->entry       = '应用|entry|browse|';
$lang->action->label->webhook     = 'Webhook|webhook|browse|';
$lang->action->label->space       = ' ';
$lang->action->label->risk        = '风险|risk|view|riskID=%s';
$lang->action->label->issue       = '问题|issue|view|issueID=%s';
$lang->action->label->design      = '设计|design|view|designID=%s';
$lang->action->label->stakeholder = '干系人|stakeholder|view|userID=%s';
$lang->action->label->opportunity = '机会|opportunity|view|opportunityID=%s';
$lang->action->label->trainplan   = '培训计划|trainplan|view|trainplanID=%s';
$lang->action->label->gapanalysis = '能力差距分析|gapanalysis|view|gapanalysisID=%s';

$lang->action->search = new stdclass();
$lang->action->search->objectTypeList['']            = '';
$lang->action->search->objectTypeList['product']     = $lang->productCommon;
$lang->action->search->objectTypeList['program']     = '项目集';
$lang->action->search->objectTypeList['project']     = '项目';
$lang->action->search->objectTypeList['execution']   = '执行';
$lang->action->search->objectTypeList['bug']         = 'Bug';
$lang->action->search->objectTypeList['case']        = '用例';
$lang->action->search->objectTypeList['caseresult']  = '用例结果';
$lang->action->search->objectTypeList['stepresult']  = '用例步骤';
$lang->action->search->objectTypeList['story']       = "$lang->SRCommon/$lang->URCommon";
$lang->action->search->objectTypeList['task']        = '任务';
$lang->action->search->objectTypeList['testtask']    = '测试单';
$lang->action->search->objectTypeList['user']        = '用户';
$lang->action->search->objectTypeList['doc']         = '文档';
$lang->action->search->objectTypeList['doclib']      = '文档库';
$lang->action->search->objectTypeList['todo']        = '待办';
$lang->action->search->objectTypeList['build']       = '版本';
$lang->action->search->objectTypeList['release']     = '发布';
$lang->action->search->objectTypeList['productplan'] = '计划';
$lang->action->search->objectTypeList['branch']      = '分支';
$lang->action->search->objectTypeList['testsuite']   = '套件';
$lang->action->search->objectTypeList['caselib']     = '公共库';
$lang->action->search->objectTypeList['testreport']  = '报告';

$lang->action->search->label['']                      = '';
$lang->action->search->label['created']               = $lang->action->label->created;
$lang->action->search->label['opened']                = $lang->action->label->opened;
$lang->action->search->label['changed']               = $lang->action->label->changed;
$lang->action->search->label['edited']                = $lang->action->label->edited;
$lang->action->search->label['assigned']              = $lang->action->label->assigned;
$lang->action->search->label['closed']                = $lang->action->label->closed;
$lang->action->search->label['deleted']               = $lang->action->label->deleted;
$lang->action->search->label['deletedfile']           = $lang->action->label->deletedfile;
$lang->action->search->label['editfile']              = $lang->action->label->editfile;
$lang->action->search->label['erased']                = $lang->action->label->erased;
$lang->action->search->label['undeleted']             = $lang->action->label->undeleted;
$lang->action->search->label['hidden']                = $lang->action->label->hidden;
$lang->action->search->label['commented']             = $lang->action->label->commented;
$lang->action->search->label['activated']             = $lang->action->label->activated;
$lang->action->search->label['blocked']               = $lang->action->label->blocked;
$lang->action->search->label['resolved']              = $lang->action->label->resolved;
$lang->action->search->label['reviewed']              = $lang->action->label->reviewed;
$lang->action->search->label['moved']                 = $lang->action->label->moved;
$lang->action->search->label['confirmed']             = $lang->action->label->confirmed;
$lang->action->search->label['bugconfirmed']          = $lang->action->label->bugconfirmed;
$lang->action->search->label['tostory']               = $lang->action->label->tostory;
$lang->action->search->label['frombug']               = $lang->action->label->frombug;
$lang->action->search->label['totask']                = $lang->action->label->totask;
$lang->action->search->label['svncommited']           = $lang->action->label->svncommited;
$lang->action->search->label['gitcommited']           = $lang->action->label->gitcommited;
$lang->action->search->label['linked2plan']           = $lang->action->label->linked2plan;
$lang->action->search->label['unlinkedfromplan']      = $lang->action->label->unlinkedfromplan;
$lang->action->search->label['changestatus']          = $lang->action->label->changestatus;
$lang->action->search->label['marked']                = $lang->action->label->marked;
$lang->action->search->label['linked2project']        = $lang->action->label->linked2project;
$lang->action->search->label['unlinkedfromproject']   = $lang->action->label->unlinkedfromproject;
$lang->action->search->label['linked2execution']      = $lang->action->label->linked2execution;
$lang->action->search->label['unlinkedfromexecution'] = $lang->action->label->unlinkedfromexecution;
$lang->action->search->label['started']               = $lang->action->label->started;
$lang->action->search->label['restarted']             = $lang->action->label->restarted;
$lang->action->search->label['recordestimate']        = $lang->action->label->recordestimate;
$lang->action->search->label['editestimate']          = $lang->action->label->editestimate;
$lang->action->search->label['canceled']              = $lang->action->label->canceled;
$lang->action->search->label['finished']              = $lang->action->label->finished;
$lang->action->search->label['paused']                = $lang->action->label->paused;
$lang->action->search->label['verified']              = $lang->action->label->verified;
$lang->action->search->label['login']                 = $lang->action->label->login;
$lang->action->search->label['logout']                = $lang->action->label->logout;
/* admin */
$lang->admin->index         = '后台管理首页';
$lang->admin->checkDB       = '检查数据库';
$lang->admin->sso           = 'ZDOO集成';
$lang->admin->ssoAction     = 'ZDOO集成';
$lang->admin->safeIndex     = '安全';
$lang->admin->checkWeak     = '弱口令检查';
$lang->admin->certifyMobile = '认证手机';
$lang->admin->certifyEmail  = '认证邮箱';
$lang->admin->ztCompany     = '认证公司';
$lang->admin->captcha       = '验证码';
$lang->admin->getCaptcha    = '获取验证码';
$lang->admin->register      = '登记';

$lang->admin->api     = '接口';
$lang->admin->log     = '日志';
$lang->admin->setting = '设置';
$lang->admin->days    = '日志保存天数';

$lang->admin->info = new stdclass();
$lang->admin->info->version = '当前系统的版本是%s，';
$lang->admin->info->links   = '您可以访问以下链接：';
$lang->admin->info->account = "您的禅道社区账户为%s。";
$lang->admin->info->log     = '超出存天数的日志会被删除，需要开启计划任务。';

$lang->admin->notice = new stdclass();
$lang->admin->notice->register = "友情提示：您还未在禅道社区(www.zentao.net)登记，%s进行登记，以及时获得禅道最新信息。";
$lang->admin->notice->ignore   = "不再提示";
$lang->admin->notice->int      = "『%s』应当是正整数。";

$lang->admin->registerNotice = new stdclass();
$lang->admin->registerNotice->common     = '注册新帐号绑定';
$lang->admin->registerNotice->caption    = '禅道社区登记';
$lang->admin->registerNotice->click      = '点击此处';
$lang->admin->registerNotice->lblAccount = '请设置您的用户名，英文字母和数字的组合，三位以上。';
$lang->admin->registerNotice->lblPasswd  = '请设置您的密码。数字和字母的组合，六位以上。';
$lang->admin->registerNotice->submit     = '登记';
$lang->admin->registerNotice->bind       = "绑定已有帐号";
$lang->admin->registerNotice->success    = "登记账户成功";

$lang->admin->bind = new stdclass();
$lang->admin->bind->caption = '关联社区帐号';
$lang->admin->bind->success = "关联账户成功";

$lang->admin->safe = new stdclass();
$lang->admin->safe->common       = '安全策略';
$lang->admin->safe->set          = '密码安全设置';
$lang->admin->safe->password     = '密码安全';
$lang->admin->safe->weak         = '常用弱口令';
$lang->admin->safe->reason       = '类型';
$lang->admin->safe->checkWeak    = '弱口令扫描';
$lang->admin->safe->changeWeak   = '修改弱口令密码';
$lang->admin->safe->loginCaptcha = '登录使用验证码';
$lang->admin->safe->modifyPasswordFirstLogin = '首次登录修改密码';

$lang->admin->safe->modeList[0] = '不检查';
$lang->admin->safe->modeList[1] = '中';
$lang->admin->safe->modeList[2] = '强';

$lang->admin->safe->modeRuleList[1] = '6位以上，包含大小写字母，数字。';
$lang->admin->safe->modeRuleList[2] = '10位以上，包含字母，数字，特殊字符。';

$lang->admin->safe->reasonList['weak']     = '常用弱口令';
$lang->admin->safe->reasonList['account']  = '与帐号相同';
$lang->admin->safe->reasonList['mobile']   = '与手机相同';
$lang->admin->safe->reasonList['phone']    = '与电话相同';
$lang->admin->safe->reasonList['birthday'] = '与生日相同';

$lang->admin->safe->modifyPasswordList[1] = '必须修改';
$lang->admin->safe->modifyPasswordList[0] = '不强制';

$lang->admin->safe->loginCaptchaList[1] = '是';
$lang->admin->safe->loginCaptchaList[0] = '否';

$lang->admin->safe->noticeMode   = '系统会在登录、创建和修改用户、修改密码的时候检查用户口令。';
$lang->admin->safe->noticeStrong = '密码长度越长，含有大写字母或数字或特殊符号越多，密码字母越不重复，安全度越强！';
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
$lang->api->error->disabled   = '因为安全原因，该功能被禁用。可以到config目录，修改配置项 %s，打开此功能。';
/* automation */
$lang->automation->common = '自动化测试';
$lang->automation->browse = '首页';

$lang->automation->title = '自动化测试解决方案';

$lang->automation->ztfSite     = '禅道ZTF官网';
$lang->automation->ztfDownload = 'ZTF框架下载';
$lang->automation->ztfManual   = 'ZTF框架手册';

$lang->automation->ztfFeature1 = 'ZTF为你解决各种问题';
$lang->automation->ztfFeature2 = 'ZTF为你解决如下问题';
$lang->automation->ztfFeature3 = '用例信息的管理';
$lang->automation->ztfFeature4 = '测试结果的对比';
$lang->automation->ztfFeature5 = '测试脚本的执行';
$lang->automation->ztfFeature6 = '缺陷Bug的提交';

$lang->automation->ztfFeature7  = 'ZTF对环境无任何依赖';
$lang->automation->ztfFeature8  = '使用Go语言开发';
$lang->automation->ztfFeature9  = '部署无任何依赖';
$lang->automation->ztfFeature10 = '所有平台均可运行';
$lang->automation->ztfFeature11 = '只有一个可执行文件';

$lang->automation->ztfFeature12 = 'ZTF对自动化测试方式无要求';
$lang->automation->ztfFeature13 = '支持常见的各种开发语言';
$lang->automation->ztfFeature14 = '可以和已知测试框架集成';
$lang->automation->ztfFeature15 = '对脚本实现方式无要求';

$lang->automation->ztfFeature16 = '可批量将禅道测试用例导出为脚本';
$lang->automation->ztfFeature17 = '可以将执行结果提交到禅道中';
$lang->automation->ztfFeature18 = '可以将执行结果创建为Bug';
$lang->automation->ztfFeature19 = 'ZTF和禅道深度集成';

$lang->automation->zendataSite     = 'ZenData官网';
$lang->automation->zendataDownload = 'ZenData下载';
$lang->automation->zendataManual   = 'ZenData手册';

$lang->automation->zendata         = '通用数据生成利器';
$lang->automation->zendataFeature1 = '不懂代码也可以使用,轻松上手';
$lang->automation->zendataFeature2 = '数据格式完全自定义,无任何限制';
$lang->automation->zendataFeature3 = '一键生成百万条数据,毫无压力';

$lang->automation->zendataFeature4 = '跨平台跨语言';
$lang->automation->zendataFeature5 = '运行只需要一个可执行文件';
$lang->automation->zendataFeature6 = 'Windows、Linux、MacOS都可以用';
$lang->automation->zendataFeature7 = '各种语言都可以用';

$lang->automation->zendataFeature8  = '各种黑技巧';
$lang->automation->zendataFeature9  = '区间,步长,随机,重复,引用';
$lang->automation->zendataFeature10 = '指定文件列表,从excel中查询';
$lang->automation->zendataFeature11 = '平行生成、递归生成、反向解析';

$lang->automation->groupTips        = '欢迎扫码加入自动化测试QQ交流群';
$lang->automation->groupTitle       = '软件测试交流群:';
$lang->automation->qqGroup          = '522506766';
$lang->automation->groupDescription = '为软件测试从业者提供的软件测试技术交流社群，分享软件测试工具与方法，帮助大家提升软件测试技能水平。';
/* backup */
$lang->backup->common      = '系统备份';
$lang->backup->index       = '备份首页';
$lang->backup->history     = '备份历史';
$lang->backup->delete      = '删除备份';
$lang->backup->backup      = '开始备份';
$lang->backup->restore     = '还原';
$lang->backup->change      = '保留时间';
$lang->backup->changeAB    = '修改';
$lang->backup->rmPHPHeader = '去除安全设置';
$lang->backup->setting     = '设置';

$lang->backup->settingAction = '备份设置';

$lang->backup->time     = '备份时间';
$lang->backup->files    = '备份文件';
$lang->backup->allCount = '总文件数';
$lang->backup->count    = '备份文件数';
$lang->backup->size     = '大小';
$lang->backup->status   = '状态';

$lang->backup->statusList['success'] = '成功';
$lang->backup->statusList['fail']    = '失败';

$lang->backup->settingDir = '备份目录';
$lang->backup->settingList['nofile'] = '不备份附件和代码';
$lang->backup->settingList['nosafe'] = '不需要防下载PHP文件头';

$lang->backup->waitting        = '<span id="backupType"></span>正在进行中，请稍候...';
$lang->backup->progressSQL     = '<p>SQL备份中，已备份%s</p>';
$lang->backup->progressAttach  = '<p>SQL备份完成</p><p>附件备份中，共有%s个文件，已经备份%s个</p>';
$lang->backup->progressCode    = '<p>SQL备份完成</p><p>附件备份完成</p><p>代码备份中，共有%s个文件，已经备份%s个</p>';
$lang->backup->confirmDelete   = '是否删除备份？';
$lang->backup->confirmRestore  = '是否还原该备份？';
$lang->backup->holdDays        = '备份保留最近 %s 天';
$lang->backup->copiedFail      = '复制失败的文件：';
$lang->backup->restoreTip      = '还原功能只还原附件和数据库，如果需要还原代码，可以手动还原。';

$lang->backup->success = new stdclass();
$lang->backup->success->backup  = '备份成功！';
$lang->backup->success->restore = '还原成功！';

$lang->backup->error = new stdclass();
$lang->backup->error->noCreateDir = '备份目录不存在，也无法创建该目录';
$lang->backup->error->noWritable  = "<code>%s</code> 不可写！请检查该目录权限，否则无法备份。";
$lang->backup->error->noDelete    = "文件 %s 无法删除，修改权限或手工删除。";
$lang->backup->error->restoreSQL  = "数据库还原失败，错误：%s";
$lang->backup->error->restoreFile = "附件还原失败，错误：%s";
$lang->backup->error->backupFile  = "附件备份失败，错误：%s";
$lang->backup->error->backupCode  = "代码备份失败，错误：%s";
/* block */
global $config;
$lang->block = new stdclass();
$lang->block->common     = '区块';
$lang->block->name       = '区块名称';
$lang->block->style      = '外观';
$lang->block->grid       = '位置';
$lang->block->color      = '颜色';
$lang->block->reset      = '恢复默认';
$lang->block->story      = '需求';
$lang->block->investment = '投入';
$lang->block->estimate   = '预计工时';
$lang->block->last       = '近期';

$lang->block->account = '所属用户';
$lang->block->module  = '所属模块';
$lang->block->title   = '区块名称';
$lang->block->source  = '来源模块';
$lang->block->block   = '来源区块';
$lang->block->order   = '排序';
$lang->block->height  = '高度';
$lang->block->role    = '角色';

$lang->block->lblModule    = '模块';
$lang->block->lblBlock     = '区块';
$lang->block->lblNum       = '条数';
$lang->block->lblHtml      = 'HTML内容';
$lang->block->dynamic      = '最新动态';
$lang->block->assignToMe   = '待处理';
$lang->block->done         = '已完成';
$lang->block->lblFlowchart = '流程图';
$lang->block->welcome      = '欢迎总览';
$lang->block->lblTesttask  = '查看测试详情';
$lang->block->contribute   = '我的贡献';

$lang->block->leftToday           = '今天剩余工作总计';
$lang->block->myTask              = '我的任务';
$lang->block->myStory             = "我的{$lang->SRCommon}";
$lang->block->myBug               = '我的BUG';
$lang->block->myExecution         = '未关闭的' . $lang->executionCommon;
$lang->block->myProduct           = '未关闭的' . $lang->productCommon;
$lang->block->delayed             = '已延期';
$lang->block->noData              = '当前统计类型下暂无数据';
$lang->block->emptyTip            = '暂无数据';
$lang->block->createdTodos        = '创建的待办数';
$lang->block->createdRequirements = '创建的' . $lang->URCommon . '数';
$lang->block->createdStories      = '创建的' . $lang->SRCommon . '数';
$lang->block->finishedTasks       = '完成的任务数';
$lang->block->createdBugs         = '提交的Bug数';
$lang->block->resolvedBugs        = '解决的Bug数';
$lang->block->createdCases        = '创建的用例数';
$lang->block->createdRisks        = '创建的风险数';
$lang->block->resolvedRisks       = '解决的风险数';
$lang->block->createdIssues       = '创建的问题数';
$lang->block->resolvedIssues      = '解决的问题数';
$lang->block->createdDocs         = '创建的文档数';
$lang->block->allExecutions       = '所有' . $lang->executionCommon;
$lang->block->doingExecution      = '进行中的' . $lang->executionCommon;
$lang->block->finishExecution     = '累积' . $lang->executionCommon;
$lang->block->estimatedHours      = '预计';
$lang->block->consumedHours       = '已消耗';
$lang->block->time                = '第';
$lang->block->week                = '周';
$lang->block->selectProduct       = '选择产品';
$lang->block->of                  = '的';
$lang->block->remain              = '剩余工时';

$lang->block->params = new stdclass();
$lang->block->params->name  = '参数名称';
$lang->block->params->value = '参数值';

$lang->block->createBlock        = '添加区块';
$lang->block->editBlock          = '编辑区块';
$lang->block->ordersSaved        = '排序已保存';
$lang->block->confirmRemoveBlock = '确定隐藏区块吗？';
$lang->block->noticeNewBlock     = '10.0版本以后各个视图主页提供了全新的视图，您要启用新的视图布局吗？';
$lang->block->confirmReset       = '是否恢复默认布局？';
$lang->block->closeForever       = '永久关闭';
$lang->block->confirmClose       = '确定永久关闭该区块吗？关闭后所有人都将无法使用该区块，可以在后台自定义中打开。';
$lang->block->remove             = '移除';
$lang->block->refresh            = '刷新';
$lang->block->nbsp               = '';
$lang->block->hidden             = '隐藏';
$lang->block->dynamicInfo        = "<span class='timeline-tag'>%s</span> <span class='timeline-text'>%s <em>%s</em> %s <a href='%s' title='%s'>%s</a></span>";

$lang->block->productName  = $lang->productCommon . '名称';
$lang->block->totalStory   = '总' . $lang->SRCommon;
$lang->block->totalBug     = '总Bug';
$lang->block->totalRelease = '发布次数';

$lang->block->totalInvestment = '总投入';
$lang->block->totalPeople     = '总人数';
$lang->block->spent           = '已花费';
$lang->block->budget          = '预算';
$lang->block->left            = '剩余';

$lang->block->default['waterfall']['project']['1']['title']  = '项目周报';
$lang->block->default['waterfall']['project']['1']['block']  = 'waterfallreport';
$lang->block->default['waterfall']['project']['1']['source'] = 'project';
$lang->block->default['waterfall']['project']['1']['grid']   = 8;

$lang->block->default['waterfall']['project']['2']['title']  = '估算';
$lang->block->default['waterfall']['project']['2']['block']  = 'waterfallestimate';
$lang->block->default['waterfall']['project']['2']['source'] = 'project';
$lang->block->default['waterfall']['project']['2']['grid']   = 4;

$lang->block->default['waterfall']['project']['3']['title']  = "项目计划";
$lang->block->default['waterfall']['project']['3']['block']  = 'waterfallgantt';
$lang->block->default['waterfall']['project']['3']['source'] = 'project';
$lang->block->default['waterfall']['project']['3']['grid']   = 8;

$lang->block->default['waterfall']['project']['4']['title']  = '到目前为止项目进展趋势图';
$lang->block->default['waterfall']['project']['4']['block']  = 'waterfallprogress';
$lang->block->default['waterfall']['project']['4']['grid']   = 4;

$lang->block->default['waterfall']['project']['5']['title']  = '项目问题';
$lang->block->default['waterfall']['project']['5']['block']  = 'waterfallissue';
$lang->block->default['waterfall']['project']['5']['source'] = 'project';
$lang->block->default['waterfall']['project']['5']['grid']   = 8;

$lang->block->default['waterfall']['project']['5']['params']['type']    = 'all';
$lang->block->default['waterfall']['project']['5']['params']['count']   = '15';
$lang->block->default['waterfall']['project']['5']['params']['orderBy'] = 'id_desc';

$lang->block->default['waterfall']['project']['6']['title']  = '最新动态';
$lang->block->default['waterfall']['project']['6']['block']  = 'projectdynamic';
$lang->block->default['waterfall']['project']['6']['grid']   = 4;
$lang->block->default['waterfall']['project']['6']['source'] = 'project';

$lang->block->default['waterfall']['project']['7']['title']  = '项目风险';
$lang->block->default['waterfall']['project']['7']['block']  = 'waterfallrisk';
$lang->block->default['waterfall']['project']['7']['source'] = 'project';
$lang->block->default['waterfall']['project']['7']['grid']   = 8;

$lang->block->default['waterfall']['project']['7']['params']['type']    = 'all';
$lang->block->default['waterfall']['project']['7']['params']['count']   = '15';
$lang->block->default['waterfall']['project']['7']['params']['orderBy'] = 'id_desc';

$lang->block->default['scrum']['project']['1']['title'] =  '项目概况';
$lang->block->default['scrum']['project']['1']['block'] = 'scrumoverview';
$lang->block->default['scrum']['project']['1']['grid']  = 8;

$lang->block->default['scrum']['project']['2']['title'] = $lang->executionCommon . '列表';
$lang->block->default['scrum']['project']['2']['block'] = 'scrumlist';
$lang->block->default['scrum']['project']['2']['grid']  = 8;

$lang->block->default['scrum']['project']['2']['params']['type']    = 'undone';
$lang->block->default['scrum']['project']['2']['params']['count']   = '20';
$lang->block->default['scrum']['project']['2']['params']['orderBy'] = 'id_desc';

$lang->block->default['scrum']['project']['3']['title'] = '待测版本';
$lang->block->default['scrum']['project']['3']['block'] = 'scrumtest';
$lang->block->default['scrum']['project']['3']['grid']  = 8;

$lang->block->default['scrum']['project']['3']['params']['type']    = 'wait';
$lang->block->default['scrum']['project']['3']['params']['count']   = '15';
$lang->block->default['scrum']['project']['3']['params']['orderBy'] = 'id_desc';

$lang->block->default['scrum']['project']['4']['title'] = $lang->executionCommon . '总览';
$lang->block->default['scrum']['project']['4']['block'] = 'sprint';
$lang->block->default['scrum']['project']['4']['grid']  = 4;

$lang->block->default['scrum']['project']['5']['title'] = '最新动态';
$lang->block->default['scrum']['project']['5']['block'] = 'projectdynamic';
$lang->block->default['scrum']['project']['5']['grid']  = 4;

$lang->block->default['product']['1']['title'] = $lang->productCommon . '统计';
$lang->block->default['product']['1']['block'] = 'statistic';
$lang->block->default['product']['1']['grid']  = 8;

$lang->block->default['product']['1']['params']['type']  = 'all';
$lang->block->default['product']['1']['params']['count'] = '20';

$lang->block->default['product']['2']['title'] = $lang->productCommon . '总览';
$lang->block->default['product']['2']['block'] = 'overview';
$lang->block->default['product']['2']['grid']  = 4;

$lang->block->default['product']['3']['title'] = '未关闭的' . $lang->productCommon;
$lang->block->default['product']['3']['block'] = 'list';
$lang->block->default['product']['3']['grid']  = 8;

$lang->block->default['product']['3']['params']['count'] = 15;
$lang->block->default['product']['3']['params']['type']  = 'noclosed';

$lang->block->default['product']['4']['title'] = "指派给我的{$lang->SRCommon}";
$lang->block->default['product']['4']['block'] = 'story';
$lang->block->default['product']['4']['grid']  = 4;

$lang->block->default['product']['4']['params']['count']   = 15;
$lang->block->default['product']['4']['params']['orderBy'] = 'id_desc';
$lang->block->default['product']['4']['params']['type']    = 'assignedTo';

$lang->block->default['execution']['1']['title'] = '执行统计';
$lang->block->default['execution']['1']['block'] = 'statistic';
$lang->block->default['execution']['1']['grid']  = 8;

$lang->block->default['execution']['1']['params']['type']  = 'all';
$lang->block->default['execution']['1']['params']['count'] = '20';

$lang->block->default['execution']['2']['title'] = '执行总览';
$lang->block->default['execution']['2']['block'] = 'overview';
$lang->block->default['execution']['2']['grid']  = 4;

$lang->block->default['execution']['3']['title'] = '未关闭的执行';
$lang->block->default['execution']['3']['block'] = 'list';
$lang->block->default['execution']['3']['grid']  = 8;

$lang->block->default['execution']['3']['params']['count']   = 15;
$lang->block->default['execution']['3']['params']['orderBy'] = 'id_desc';
$lang->block->default['execution']['3']['params']['type']    = 'undone';

$lang->block->default['execution']['4']['title'] = '指派给我的任务';
$lang->block->default['execution']['4']['block'] = 'task';
$lang->block->default['execution']['4']['grid']  = 4;

$lang->block->default['execution']['4']['params']['count']   = 15;
$lang->block->default['execution']['4']['params']['orderBy'] = 'id_desc';
$lang->block->default['execution']['4']['params']['type']    = 'assignedTo';

$lang->block->default['execution']['5']['title'] = '版本列表';
$lang->block->default['execution']['5']['block'] = 'build';
$lang->block->default['execution']['5']['grid']  = 8;

$lang->block->default['execution']['5']['params']['count']   = 15;
$lang->block->default['execution']['5']['params']['orderBy'] = 'id_desc';

$lang->block->default['qa']['1']['title'] = '测试统计';
$lang->block->default['qa']['1']['block'] = 'statistic';
$lang->block->default['qa']['1']['grid']  = 8;

$lang->block->default['qa']['1']['params']['type']  = 'noclosed';
$lang->block->default['qa']['1']['params']['count'] = '20';

//$lang->block->default['qa']['2']['title'] = '测试用例总览';
//$lang->block->default['qa']['2']['block'] = 'overview';
//$lang->block->default['qa']['2']['grid']  = 4;

$lang->block->default['qa']['2']['title'] = '指派给我的Bug';
$lang->block->default['qa']['2']['block'] = 'bug';
$lang->block->default['qa']['2']['grid']  = 4;

$lang->block->default['qa']['2']['params']['count']   = 15;
$lang->block->default['qa']['2']['params']['orderBy'] = 'id_desc';
$lang->block->default['qa']['2']['params']['type']    = 'assignedTo';

$lang->block->default['qa']['3']['title'] = '指派给我的用例';
$lang->block->default['qa']['3']['block'] = 'case';
$lang->block->default['qa']['3']['grid']  = 4;

$lang->block->default['qa']['3']['params']['count']   = 15;
$lang->block->default['qa']['3']['params']['orderBy'] = 'id_desc';
$lang->block->default['qa']['3']['params']['type']    = 'assigntome';

$lang->block->default['qa']['4']['title'] = '待测版本列表';
$lang->block->default['qa']['4']['block'] = 'testtask';
$lang->block->default['qa']['4']['grid']  = 8;

$lang->block->default['qa']['4']['params']['count']   = 15;
$lang->block->default['qa']['4']['params']['orderBy'] = 'id_desc';
$lang->block->default['qa']['4']['params']['type']    = 'wait';

$lang->block->default['full']['my']['1']['title']  = '欢迎';
$lang->block->default['full']['my']['1']['block']  = 'welcome';
$lang->block->default['full']['my']['1']['grid']   = 8;
$lang->block->default['full']['my']['1']['source'] = '';

$lang->block->default['full']['my']['2']['title']  = '最新动态';
$lang->block->default['full']['my']['2']['block']  = 'dynamic';
$lang->block->default['full']['my']['2']['grid']   = 4;
$lang->block->default['full']['my']['2']['source'] = '';

$lang->block->default['full']['my']['3']['title']           = '我的待办';
$lang->block->default['full']['my']['3']['block']           = 'list';
$lang->block->default['full']['my']['3']['grid']            = 4;
$lang->block->default['full']['my']['3']['source']          = 'todo';
$lang->block->default['full']['my']['3']['params']['count'] = '20';

if($config->systemMode == 'new')
{
    $lang->block->default['full']['my']['4']['title']           = '项目统计';
    $lang->block->default['full']['my']['4']['block']           = 'statistic';
    $lang->block->default['full']['my']['4']['source']          = 'project';
    $lang->block->default['full']['my']['4']['grid']            = 8;
    $lang->block->default['full']['my']['4']['params']['count'] = '20';
}

$lang->block->default['full']['my']['5']['title']  = '我的贡献';
$lang->block->default['full']['my']['5']['block']  = 'contribute';
$lang->block->default['full']['my']['5']['source'] = '';
$lang->block->default['full']['my']['5']['grid']   = 4;

$lang->block->default['full']['my']['6']['title']  = '我近期参与的项目';
$lang->block->default['full']['my']['6']['block']  = 'recentproject';
$lang->block->default['full']['my']['6']['source'] = 'project';
$lang->block->default['full']['my']['6']['grid']   = 8;

$lang->block->default['full']['my']['7']['title']  = '待处理';
$lang->block->default['full']['my']['7']['block']  = 'assigntome';
$lang->block->default['full']['my']['7']['source'] = '';
$lang->block->default['full']['my']['7']['grid']   = 8;

$lang->block->default['full']['my']['7']['params']['todoNum']  = '20';
$lang->block->default['full']['my']['7']['params']['taskNum']  = '20';
$lang->block->default['full']['my']['7']['params']['bugNum']   = '20';
$lang->block->default['full']['my']['7']['params']['riskNum']  = '20';
$lang->block->default['full']['my']['7']['params']['issueNum'] = '20';
$lang->block->default['full']['my']['7']['params']['storyNum'] = '20';

if($config->systemMode == 'new')
{
    $lang->block->default['full']['my']['8']['title']  = '项目人力投入';
    $lang->block->default['full']['my']['8']['block']  = 'projectteam';
    $lang->block->default['full']['my']['8']['source'] = 'project';
    $lang->block->default['full']['my']['8']['grid']   = 8;
}

$lang->block->default['full']['my']['9']['title']  = '项目列表';
$lang->block->default['full']['my']['9']['block']  = 'project';
$lang->block->default['full']['my']['9']['source'] = 'project';
$lang->block->default['full']['my']['9']['grid']   = 8;
if($config->systemMode == 'classic')
{
    $lang->block->default['full']['my']['9']['block']  = 'execution';
    $lang->block->default['full']['my']['9']['source'] = 'execution';
}

$lang->block->default['full']['my']['9']['params']['orderBy'] = 'id_desc';
$lang->block->default['full']['my']['9']['params']['count']   = '15';

$lang->block->count   = '数量';
$lang->block->type    = '类型';
$lang->block->orderBy = '排序';

$lang->block->availableBlocks            = new stdclass();
$lang->block->availableBlocks->todo      = '我的日程';
$lang->block->availableBlocks->task      = '我的任务';
$lang->block->availableBlocks->bug       = '我的Bug';
$lang->block->availableBlocks->case      = '我的用例';
$lang->block->availableBlocks->story     = "我的{$lang->SRCommon}";
$lang->block->availableBlocks->product   = $lang->productCommon . '列表';
$lang->block->availableBlocks->execution = $lang->executionCommon . '列表';
$lang->block->availableBlocks->plan      = "计划列表";
$lang->block->availableBlocks->release   = '发布列表';
$lang->block->availableBlocks->build     = '版本列表';
$lang->block->availableBlocks->testtask  = '测试版本列表';
$lang->block->availableBlocks->risk      = '我的风险';
$lang->block->availableBlocks->issue     = '我的问题';

if($config->systemMode == 'new') $lang->block->moduleList['project'] = '项目';
$lang->block->moduleList['product']   = $lang->productCommon;
$lang->block->moduleList['execution'] = $lang->execution->common;
$lang->block->moduleList['qa']        = '测试';
$lang->block->moduleList['todo']      = '待办';

$lang->block->modules['project'] = new stdclass();
$lang->block->modules['project']->availableBlocks = new stdclass();
$lang->block->modules['project']->availableBlocks->project       = '项目列表';
$lang->block->modules['project']->availableBlocks->recentproject = '近期项目';
$lang->block->modules['project']->availableBlocks->statistic     = '项目统计';
if($config->systemMode == 'new') $lang->block->modules['project']->availableBlocks->projectteam = '项目人力投入';

$lang->block->modules['scrum']['index'] = new stdclass();
$lang->block->modules['scrum']['index']->availableBlocks = new stdclass();
$lang->block->modules['scrum']['index']->availableBlocks->scrumoverview  = '项目概况';
$lang->block->modules['scrum']['index']->availableBlocks->scrumlist      = $lang->executionCommon . '列表';
$lang->block->modules['scrum']['index']->availableBlocks->sprint         = $lang->executionCommon . '总览';
$lang->block->modules['scrum']['index']->availableBlocks->scrumtest      = '待测版本';
$lang->block->modules['scrum']['index']->availableBlocks->projectdynamic = '最新动态';

$lang->block->modules['waterfall']['index'] = new stdclass();
$lang->block->modules['waterfall']['index']->availableBlocks = new stdclass();
$lang->block->modules['waterfall']['index']->availableBlocks->waterfallreport   = '项目周报';
$lang->block->modules['waterfall']['index']->availableBlocks->waterfallestimate = '估算';
$lang->block->modules['waterfall']['index']->availableBlocks->waterfallgantt    = "项目计划";
$lang->block->modules['waterfall']['index']->availableBlocks->waterfallprogress = '到目前为止项目进展趋势图';
$lang->block->modules['waterfall']['index']->availableBlocks->waterfallissue    = '项目问题';
$lang->block->modules['waterfall']['index']->availableBlocks->waterfallrisk     = '项目风险';
$lang->block->modules['waterfall']['index']->availableBlocks->projectdynamic    = '最新动态';

$lang->block->modules['product'] = new stdclass();
$lang->block->modules['product']->availableBlocks = new stdclass();
$lang->block->modules['product']->availableBlocks->statistic = $lang->productCommon . '统计';
$lang->block->modules['product']->availableBlocks->overview  = $lang->productCommon . '总览';
$lang->block->modules['product']->availableBlocks->list      = $lang->productCommon . '列表';
$lang->block->modules['product']->availableBlocks->story     = "{$lang->SRCommon}列表";
$lang->block->modules['product']->availableBlocks->plan      = "计划列表";
$lang->block->modules['product']->availableBlocks->release   = '发布列表';

$lang->block->modules['execution'] = new stdclass();
$lang->block->modules['execution']->availableBlocks = new stdclass();
$lang->block->modules['execution']->availableBlocks->statistic = $lang->execution->common . '统计';
$lang->block->modules['execution']->availableBlocks->overview  = $lang->execution->common . '总览';
$lang->block->modules['execution']->availableBlocks->list      = $lang->execution->common . '列表';
$lang->block->modules['execution']->availableBlocks->task      = '任务列表';
$lang->block->modules['execution']->availableBlocks->build     = '版本列表';

$lang->block->modules['qa'] = new stdclass();
$lang->block->modules['qa']->availableBlocks = new stdclass();
$lang->block->modules['qa']->availableBlocks->statistic = '测试统计';
//$lang->block->modules['qa']->availableBlocks->overview  = '测试用例总览';
$lang->block->modules['qa']->availableBlocks->bug       = 'Bug列表';
$lang->block->modules['qa']->availableBlocks->case      = '用例列表';
$lang->block->modules['qa']->availableBlocks->testtask  = '版本列表';

$lang->block->modules['todo'] = new stdclass();
$lang->block->modules['todo']->availableBlocks = new stdclass();
$lang->block->modules['todo']->availableBlocks->list = '待办列表';

$lang->block->orderByList = new stdclass();

$lang->block->orderByList->product = array();
$lang->block->orderByList->product['id_asc']      = 'ID 递增';
$lang->block->orderByList->product['id_desc']     = 'ID 递减';
$lang->block->orderByList->product['status_asc']  = '状态正序';
$lang->block->orderByList->product['status_desc'] = '状态倒序';

$lang->block->orderByList->project = array();
$lang->block->orderByList->project['id_asc']      = 'ID 递增';
$lang->block->orderByList->project['id_desc']     = 'ID 递减';
$lang->block->orderByList->project['status_asc']  = '状态正序';
$lang->block->orderByList->project['status_desc'] = '状态倒序';

$lang->block->orderByList->execution = array();
$lang->block->orderByList->execution['id_asc']      = 'ID 递增';
$lang->block->orderByList->execution['id_desc']     = 'ID 递减';
$lang->block->orderByList->execution['status_asc']  = '状态正序';
$lang->block->orderByList->execution['status_desc'] = '状态倒序';

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
$lang->block->orderByList->case['id_asc']   = 'ID 递增';
$lang->block->orderByList->case['id_desc']  = 'ID 递减';
$lang->block->orderByList->case['pri_asc']  = '优先级递增';
$lang->block->orderByList->case['pri_desc'] = '优先级递减';

$lang->block->orderByList->story = array();
$lang->block->orderByList->story['id_asc']      = 'ID 递增';
$lang->block->orderByList->story['id_desc']     = 'ID 递减';
$lang->block->orderByList->story['pri_asc']     = '优先级递增';
$lang->block->orderByList->story['pri_desc']    = '优先级递减';
$lang->block->orderByList->story['status_asc']  = '状态正序';
$lang->block->orderByList->story['status_desc'] = '状态倒序';
$lang->block->orderByList->story['stage_asc']   = '阶段正序';
$lang->block->orderByList->story['stage_desc']  = '阶段倒序';

$lang->block->todoNum  = '待办数';
$lang->block->taskNum  = '任务数';
$lang->block->bugNum   = 'Bug数';
$lang->block->riskNum  = '风险数';
$lang->block->issueNum = '问题数';
$lang->block->storyNum = '需求数';

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
$lang->block->typeList->product['involved'] = '我参与';

$lang->block->typeList->project['undone']   = '未完成';
$lang->block->typeList->project['doing']    = '进行中';
$lang->block->typeList->project['all']      = '全部';
$lang->block->typeList->project['involved'] = '我参与的';

$lang->block->typeList->execution['undone']   = '未完成';
$lang->block->typeList->execution['doing']    = '进行中';
$lang->block->typeList->execution['all']      = '全部';
$lang->block->typeList->execution['involved'] = '我参与';

$lang->block->typeList->scrum['undone']   = '未完成';
$lang->block->typeList->scrum['doing']    = '进行中';
$lang->block->typeList->scrum['all']      = '全部';
$lang->block->typeList->scrum['involved'] = '我参与';

$lang->block->typeList->testtask['wait']    = '待测版本';
$lang->block->typeList->testtask['doing']   = '测试中版本';
$lang->block->typeList->testtask['blocked'] = '阻塞版本';
$lang->block->typeList->testtask['done']    = '已测版本';
$lang->block->typeList->testtask['all']     = '全部';

$lang->block->modules['project']->moreLinkList = new stdclass();
$lang->block->modules['project']->moreLinkList->recentproject  = 'project|browse|';
$lang->block->modules['project']->moreLinkList->statistic      = 'project|browse|';
$lang->block->modules['project']->moreLinkList->project        = 'project|browse|';
$lang->block->modules['project']->moreLinkList->cmmireport     = 'weekly|index|';
$lang->block->modules['project']->moreLinkList->cmmiestimate   = 'workestimation|index|';
$lang->block->modules['project']->moreLinkList->cmmiissue      = 'issue|browse|';
$lang->block->modules['project']->moreLinkList->cmmirisk       = 'risk|browse|';
$lang->block->modules['project']->moreLinkList->scrumlist      = 'project|execution|';
$lang->block->modules['project']->moreLinkList->scrumtest      = 'project|testtask|';
$lang->block->modules['project']->moreLinkList->scrumproduct   = 'product|all|';
$lang->block->modules['project']->moreLinkList->sprint         = 'project|execution|';
$lang->block->modules['project']->moreLinkList->projectdynamic = 'project|dynamic|';

$lang->block->modules['product']->moreLinkList        = new stdclass();
$lang->block->modules['product']->moreLinkList->list  = 'product|all|';
$lang->block->modules['product']->moreLinkList->story = 'my|story|type=%s';

$lang->block->modules['execution']->moreLinkList       = new stdclass();
$lang->block->modules['execution']->moreLinkList->list = 'execution|all|status=%s&executionID=';
$lang->block->modules['execution']->moreLinkList->task = 'my|task|type=%s';

$lang->block->modules['qa']->moreLinkList           = new stdclass();
$lang->block->modules['qa']->moreLinkList->bug      = 'my|bug|type=%s';
$lang->block->modules['qa']->moreLinkList->case     = 'my|testcase|type=%s';
$lang->block->modules['qa']->moreLinkList->testtask = 'testtask|browse|type=%s';

$lang->block->modules['todo']->moreLinkList       = new stdclass();
$lang->block->modules['todo']->moreLinkList->list = 'my|todo|type=all';

$lang->block->modules['common']                        = new stdclass();
$lang->block->modules['common']->moreLinkList          = new stdclass();
$lang->block->modules['common']->moreLinkList->dynamic = 'company|dynamic|';

$lang->block->welcomeList['06:00'] = '%s，早上好！';
$lang->block->welcomeList['11:30'] = '%s，中午好！';
$lang->block->welcomeList['13:30'] = '%s，下午好！';
$lang->block->welcomeList['19:00'] = '%s，晚上好！';

$lang->block->gridOptions[8] = '左侧';
$lang->block->gridOptions[4] = '右侧';

$lang->block->flowchart              = array();
$lang->block->flowchart['admin']     = array('管理员', '维护公司', '添加用户', '维护权限');
$lang->block->flowchart['product']   = array($lang->productCommon . '经理', '创建' . $lang->productCommon, '维护模块', "维护计划", "维护{$lang->SRCommon}", '创建发布');
$lang->block->flowchart['execution'] = array($lang->executionCommon . '经理', '创建' . $lang->executionCommon, '维护团队', '关联' . $lang->productCommon, "关联{$lang->SRCommon}", '分解任务');
$lang->block->flowchart['dev']       = array('研发人员', '领取任务和Bug', '更新状态', '完成任务和Bug');
$lang->block->flowchart['tester']    = array('测试人员', '撰写用例', '执行用例', '提交Bug', '验证Bug', '关闭Bug');
/* branch */
$lang->branch->common = '分支';
$lang->branch->manage = '分支管理';
$lang->branch->sort   = '分支排序';
$lang->branch->delete = '分支删除';
$lang->branch->add    = '添加';

$lang->branch->manageTitle = '%s管理';
$lang->branch->all         = '所有';

$lang->branch->id      = '编号';
$lang->branch->product = '所属产品';
$lang->branch->name    = '名称';
$lang->branch->order   = '排序';
$lang->branch->deleted = '已删除';

$lang->branch->confirmDelete = '是否删除该@branch@？';
$lang->branch->canNotDelete  = '该@branch@下已经有数据，不能删除！';
/* bug */
$lang->bug->common           = 'Bug';
$lang->bug->id               = 'Bug编号';
$lang->bug->product          = '所属' . $lang->productCommon;
$lang->bug->branch           = '分支/平台';
$lang->bug->productplan      = '所属' . '计划';
$lang->bug->module           = '所属模块';
$lang->bug->moduleAB         = '模块';
$lang->bug->project          = '所属项目';
$lang->bug->execution        = '所属' . $lang->execution->common;
$lang->bug->story            = "相关需求";
$lang->bug->storyVersion     = "{$lang->SRCommon}版本";
$lang->bug->color            = '标题颜色';
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
$lang->bug->subStatus        = '子状态';
$lang->bug->activatedCount   = '激活次数';
$lang->bug->activatedCountAB = '激活次数';
$lang->bug->activatedDate    = '激活日期';
$lang->bug->confirmed        = '是否确认';
$lang->bug->confirmedAB      = '确认';
$lang->bug->toTask           = '转任务';
$lang->bug->toStory          = "转{$lang->SRCommon}";
$lang->bug->mailto           = '抄送给';
$lang->bug->openedBy         = '由谁创建';
$lang->bug->openedByAB       = '创建者';
$lang->bug->openedDate       = '创建日期';
$lang->bug->openedDateAB     = '创建日期';
$lang->bug->openedBuild      = '影响版本';
$lang->bug->assignedTo       = '指派给';
$lang->bug->assignBug        = '指派给';
$lang->bug->assignedToAB     = '指派给';
$lang->bug->assignedDate     = '指派日期';
$lang->bug->resolvedBy       = '解决者';
$lang->bug->resolvedByAB     = '解决';
$lang->bug->resolution       = '解决方案';
$lang->bug->resolutionAB     = '方案';
$lang->bug->resolvedBuild    = '解决版本';
$lang->bug->resolvedDate     = '解决日期';
$lang->bug->resolvedDateAB   = '解决日期';
$lang->bug->deadline         = '截止日期';
$lang->bug->plan             = '所属' . '计划';
$lang->bug->closedBy         = '由谁关闭';
$lang->bug->closedDate       = '关闭日期';
$lang->bug->duplicateBug     = '重复ID';
$lang->bug->lastEditedBy     = '最后修改者';
$lang->bug->linkBug          = '相关Bug';
$lang->bug->linkBugs         = '关联相关Bug';
$lang->bug->unlinkBug        = '移除相关Bug';
$lang->bug->case             = '相关用例';
$lang->bug->caseVersion      = '用例版本';
$lang->bug->testtask         = '测试单';
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
$lang->bug->batchCreate        = '批量提Bug';
$lang->bug->confirmBug         = '确认';
$lang->bug->confirmAction      = '确认Bug';
$lang->bug->batchConfirm       = '批量确认';
$lang->bug->edit               = '编辑Bug';
$lang->bug->batchEdit          = '批量编辑';
$lang->bug->batchChangeModule  = '批量修改模块';
$lang->bug->batchChangeBranch  = '批量修改分支';
$lang->bug->batchClose         = '批量关闭';
$lang->bug->assignTo           = '指派';
$lang->bug->assignAction       = '指派Bug';
$lang->bug->batchAssignTo      = '批量指派';
$lang->bug->browse             = 'Bug列表';
$lang->bug->view               = 'Bug详情';
$lang->bug->resolve            = '解决';
$lang->bug->resolveAction      = '解决Bug';
$lang->bug->batchResolve       = '批量解决';
$lang->bug->close              = '关闭';
$lang->bug->closeAction        = '关闭Bug';
$lang->bug->activate           = '激活';
$lang->bug->activateAction     = '激活Bug';
$lang->bug->batchActivate      = '批量激活';
$lang->bug->reportChart        = '报表统计';
$lang->bug->reportAction       = 'Bug报表统计';
$lang->bug->export             = '导出数据';
$lang->bug->exportAction       = '导出Bug';
$lang->bug->delete             = '删除';
$lang->bug->deleteAction       = '删除Bug';
$lang->bug->deleted            = '已删除';
$lang->bug->confirmStoryChange = "确认{$lang->SRCommon}变动";
$lang->bug->copy               = '复制Bug';
$lang->bug->search             = '搜索';

$lang->bug->assignToMe         = '指派给我';
$lang->bug->openedByMe         = '由我创建';
$lang->bug->resolvedByMe       = '由我解决';
$lang->bug->closedByMe         = '由我关闭';
$lang->bug->assignToNull       = '未指派';
$lang->bug->unResolved         = '未解决';
$lang->bug->toClosed           = '待关闭';
$lang->bug->unclosed           = '未关闭';
$lang->bug->unconfirmed        = '未确认';
$lang->bug->longLifeBugs       = '久未处理';
$lang->bug->postponedBugs      = '被延期';
$lang->bug->overdueBugs        = '过期Bug';
$lang->bug->allBugs            = '所有';
$lang->bug->byQuery            = '搜索';
$lang->bug->needConfirm        = "{$lang->SRCommon}变动";
$lang->bug->allProduct         = '所有' . $lang->productCommon;
$lang->bug->my                 = '我的';
$lang->bug->yesterdayResolved  = '昨天解决Bug数';
$lang->bug->yesterdayConfirmed = '昨天确认';
$lang->bug->yesterdayClosed    = '昨天关闭';

$lang->bug->assignToMeAB   = '指派给我';
$lang->bug->openedByMeAB   = '由我创建';
$lang->bug->resolvedByMeAB = '由我解决';

$lang->bug->ditto         = '同上';
$lang->bug->dittoNotice   = '该bug与上一bug不属于同一产品！';
$lang->bug->noAssigned    = '未指派';
$lang->bug->noBug         = '暂时没有Bug。';
$lang->bug->noModule      = '<div>您现在还没有模块信息</div><div>请维护测试模块</div>';
$lang->bug->delayWarning  = " <strong class='text-danger'> 延期%s天 </strong>";

$lang->bug->lblAssignedTo = '当前指派';
$lang->bug->lblMailto     = '抄送给';
$lang->bug->lblLastEdited = '最后修改';
$lang->bug->lblResolved   = '由谁解决';
$lang->bug->allUsers      = '加载所有用户';
$lang->bug->allBuilds     = '所有';
$lang->bug->createBuild   = '创建';

$lang->bug->legendBasicInfo             = '基本信息';
$lang->bug->legendAttatch               = '附件';
$lang->bug->legendPRJExecStoryTask      = "项目/" . $lang->executionCommon . "/{$lang->SRCommon}/任务";
$lang->bug->legendExecStoryTask         = $lang->executionCommon . "/{$lang->SRCommon}/任务";
$lang->bug->lblTypeAndSeverity          = '类型/严重程度';
$lang->bug->lblSystemBrowserAndHardware = '系统/浏览器';
$lang->bug->legendSteps                 = '重现步骤';
$lang->bug->legendComment               = '备注';
$lang->bug->legendLife                  = 'Bug的一生';
$lang->bug->legendMisc                  = '其他相关';
$lang->bug->legendRelated               = '其他信息';

$lang->bug->buttonConfirm = '确认';

$lang->bug->summary               = "本页共 <strong>%s</strong> 个Bug，未解决 <strong>%s</strong>。";
$lang->bug->confirmChangeProduct  = "修改{$lang->productCommon}会导致相应的{$lang->executionCommon}、{$lang->SRCommon}和任务发生变化，确定吗？";
$lang->bug->confirmDelete         = '您确认要删除该Bug吗？';
$lang->bug->remindTask            = '该Bug已经转化为任务，是否更新任务(编号:%s)状态 ?';
$lang->bug->skipClose             = 'Bug %s 不是已解决状态，不能关闭。';
$lang->bug->executionAccessDenied = "您无权访问该Bug所属的{$lang->executionCommon}！";
$lang->bug->stepsNotEmpty         = "重现步骤不能为空。";

$lang->bug->tplStep   = "<p>[步骤]</p><br/>";
$lang->bug->tplResult = "<p>[结果]</p><br/>";
$lang->bug->tplExpect = "<p>[期望]</p><br/>";

$lang->bug->severityList[1] = '1';
$lang->bug->severityList[2] = '2';
$lang->bug->severityList[3] = '3';
$lang->bug->severityList[4] = '4';

$lang->bug->priList[0] = '';
$lang->bug->priList[1] = '1';
$lang->bug->priList[2] = '2';
$lang->bug->priList[3] = '3';
$lang->bug->priList[4] = '4';

$lang->bug->osList['']        = '';
$lang->bug->osList['all']     = '全部';
$lang->bug->osList['windows'] = 'Windows';
$lang->bug->osList['win10']   = 'Windows 10';
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
$lang->bug->typeList['config']       = '配置相关';
$lang->bug->typeList['install']      = '安装部署';
$lang->bug->typeList['security']     = '安全相关';
$lang->bug->typeList['performance']  = '性能问题';
$lang->bug->typeList['standard']     = '标准规范';
$lang->bug->typeList['automation']   = '测试脚本';
$lang->bug->typeList['designdefect'] = '设计缺陷';
$lang->bug->typeList['others']       = '其他';

$lang->bug->statusList['']         = '';
$lang->bug->statusList['active']   = '激活';
$lang->bug->statusList['resolved'] = '已解决';
$lang->bug->statusList['closed']   = '已关闭';

$lang->bug->confirmedList[1] = '是';
$lang->bug->confirmedList[0] = '否';

$lang->bug->resolutionList['']           = '';
$lang->bug->resolutionList['bydesign']   = '设计如此';
$lang->bug->resolutionList['duplicate']  = '重复Bug';
$lang->bug->resolutionList['external']   = '外部原因';
$lang->bug->resolutionList['fixed']      = '已解决';
$lang->bug->resolutionList['notrepro']   = '无法重现';
$lang->bug->resolutionList['postponed']  = '延期处理';
$lang->bug->resolutionList['willnotfix'] = "不予解决";
$lang->bug->resolutionList['tostory']    = "转为{$lang->SRCommon}";

$lang->bug->report = new stdclass();
$lang->bug->report->common = '报表';
$lang->bug->report->select = '请选择报表类型';
$lang->bug->report->create = '生成报表';

$lang->bug->report->charts['bugsPerExecution']      = $lang->executionCommon . 'Bug数量';
$lang->bug->report->charts['bugsPerBuild']          = '版本Bug数量';
$lang->bug->report->charts['bugsPerModule']         = '模块Bug数量';
$lang->bug->report->charts['openedBugsPerDay']      = '每天新增Bug数';
$lang->bug->report->charts['resolvedBugsPerDay']    = '每天解决Bug数';
$lang->bug->report->charts['closedBugsPerDay']      = '每天关闭的Bug数';
$lang->bug->report->charts['openedBugsPerUser']     = '每人提交的Bug数';
$lang->bug->report->charts['resolvedBugsPerUser']   = '每人解决的Bug数';
$lang->bug->report->charts['closedBugsPerUser']     = '每人关闭的Bug数';
$lang->bug->report->charts['bugsPerSeverity']       = '按Bug严重程度统计';
$lang->bug->report->charts['bugsPerResolution']     = '按Bug解决方案统计';
$lang->bug->report->charts['bugsPerStatus']         = '按Bug状态统计';
$lang->bug->report->charts['bugsPerActivatedCount'] = '按Bug激活次数统计';
$lang->bug->report->charts['bugsPerPri']            = '按Bug优先级统计';
$lang->bug->report->charts['bugsPerType']           = '按Bug类型统计';
$lang->bug->report->charts['bugsPerAssignedTo']     = '按指派给统计';
//$lang->bug->report->charts['bugLiveDays']        = 'Bug处理时间统计';
//$lang->bug->report->charts['bugHistories']       = 'Bug处理步骤统计';

$lang->bug->report->options = new stdclass();
$lang->bug->report->options->graph  = new stdclass();
$lang->bug->report->options->type   = 'pie';
$lang->bug->report->options->width  = 500;
$lang->bug->report->options->height = 140;

$lang->bug->report->bugsPerExecution      = new stdclass();
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
$lang->bug->report->bugsPerPri            = new stdclass();
$lang->bug->report->bugsPerAssignedTo     = new stdclass();
$lang->bug->report->bugLiveDays           = new stdclass();
$lang->bug->report->bugHistories          = new stdclass();

$lang->bug->report->bugsPerExecution->graph      = new stdclass();
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
$lang->bug->report->bugsPerPri->graph            = new stdclass();
$lang->bug->report->bugsPerAssignedTo->graph     = new stdclass();
$lang->bug->report->bugLiveDays->graph           = new stdclass();
$lang->bug->report->bugHistories->graph          = new stdclass();

$lang->bug->report->bugsPerExecution->graph->xAxisName = $lang->executionCommon;
$lang->bug->report->bugsPerBuild->graph->xAxisName     = '版本';
$lang->bug->report->bugsPerModule->graph->xAxisName    = '模块';

$lang->bug->report->openedBugsPerDay->type             = 'bar';
$lang->bug->report->openedBugsPerDay->graph->xAxisName = '日期';

$lang->bug->report->resolvedBugsPerDay->type             = 'bar';
$lang->bug->report->resolvedBugsPerDay->graph->xAxisName = '日期';

$lang->bug->report->closedBugsPerDay->type             = 'bar';
$lang->bug->report->closedBugsPerDay->graph->xAxisName = '日期';

$lang->bug->report->openedBugsPerUser->graph->xAxisName   = '用户';
$lang->bug->report->resolvedBugsPerUser->graph->xAxisName = '用户';
$lang->bug->report->closedBugsPerUser->graph->xAxisName   = '用户';

$lang->bug->report->bugsPerSeverity->graph->xAxisName       = '严重程度';
$lang->bug->report->bugsPerResolution->graph->xAxisName     = '解决方案';
$lang->bug->report->bugsPerStatus->graph->xAxisName         = '状态';
$lang->bug->report->bugsPerActivatedCount->graph->xAxisName = '激活次数';
$lang->bug->report->bugsPerPri->graph->xAxisName            = '优先级';
$lang->bug->report->bugsPerType->graph->xAxisName           = '类型';
$lang->bug->report->bugsPerAssignedTo->graph->xAxisName     = '指派给';
$lang->bug->report->bugLiveDays->graph->xAxisName           = '处理时间';
$lang->bug->report->bugHistories->graph->xAxisName          = '处理步骤';

$lang->bug->action = new stdclass();
$lang->bug->action->resolved            = array('main' => '$date, 由 <strong>$actor</strong> 解决，方案为 <strong>$extra</strong> $appendLink。', 'extra' => 'resolutionList');
$lang->bug->action->tostory             = array('main' => '$date, 由 <strong>$actor</strong> 转为<strong> ' . $lang->SRCommon . '</strong>，编号为 <strong>$extra</strong>。');
$lang->bug->action->totask              = array('main' => '$date, 由 <strong>$actor</strong> 导入为<strong>任务</strong>，编号为 <strong>$extra</strong>。');
$lang->bug->action->linked2plan         = array('main' => '$date, 由 <strong>$actor</strong> 关联到计划 <strong>$extra</strong>。');
$lang->bug->action->unlinkedfromplan    = array('main' => '$date, 由 <strong>$actor</strong> 从计划 <strong>$extra</strong> 移除。');
$lang->bug->action->linked2build        = array('main' => '$date, 由 <strong>$actor</strong> 关联到版本 <strong>$extra</strong>。');
$lang->bug->action->unlinkedfrombuild   = array('main' => '$date, 由 <strong>$actor</strong> 从版本 <strong>$extra</strong> 移除。');
$lang->bug->action->linked2release      = array('main' => '$date, 由 <strong>$actor</strong> 关联到发布 <strong>$extra</strong>。');
$lang->bug->action->unlinkedfromrelease = array('main' => '$date, 由 <strong>$actor</strong> 从发布 <strong>$extra</strong> 移除。');
$lang->bug->action->linkrelatedbug      = array('main' => '$date, 由 <strong>$actor</strong> 关联相关Bug <strong>$extra</strong>。');
$lang->bug->action->unlinkrelatedbug    = array('main' => '$date, 由 <strong>$actor</strong> 移除相关Bug <strong>$extra</strong>。');

$lang->bug->placeholder = new stdclass();
$lang->bug->placeholder->chooseBuilds = '选择相关版本...';
$lang->bug->placeholder->newBuildName = '新版本名称';

$lang->bug->featureBar['browse']['all']          = $lang->bug->allBugs;
$lang->bug->featureBar['browse']['unclosed']     = $lang->bug->unclosed;
$lang->bug->featureBar['browse']['openedbyme']   = $lang->bug->openedByMe;
$lang->bug->featureBar['browse']['assigntome']   = $lang->bug->assignToMe;
$lang->bug->featureBar['browse']['resolvedbyme'] = $lang->bug->resolvedByMe;
$lang->bug->featureBar['browse']['toclosed']     = $lang->bug->toClosed;
$lang->bug->featureBar['browse']['unresolved']   = $lang->bug->unResolved;
$lang->bug->featureBar['browse']['more']         = $lang->more;

$lang->bug->moreSelects['unconfirmed']   = $lang->bug->unconfirmed;
$lang->bug->moreSelects['assigntonull']  = $lang->bug->assignToNull;
$lang->bug->moreSelects['longlifebugs']  = $lang->bug->longLifeBugs;
$lang->bug->moreSelects['postponedbugs'] = $lang->bug->postponedBugs;
$lang->bug->moreSelects['overduebugs']   = $lang->bug->overdueBugs;
$lang->bug->moreSelects['needconfirm']   = $lang->bug->needConfirm;
/* build */
$lang->build->common           = "版本";
$lang->build->create           = "创建版本";
$lang->build->edit             = "编辑版本";
$lang->build->linkStory        = "关联{$lang->SRCommon}";
$lang->build->linkBug          = "关联Bug";
$lang->build->delete           = "删除版本";
$lang->build->deleted          = "已删除";
$lang->build->view             = "版本详情";
$lang->build->batchUnlink      = '批量移除';
$lang->build->batchUnlinkStory = "批量移除{$lang->SRCommon}";
$lang->build->batchUnlinkBug   = '批量移除Bug';

$lang->build->confirmDelete      = "您确认删除该版本吗？";
$lang->build->confirmUnlinkStory = "您确认移除该{$lang->SRCommon}吗？";
$lang->build->confirmUnlinkBug   = "您确认移除该Bug吗？";

$lang->build->basicInfo = '基本信息';

$lang->build->id             = 'ID';
$lang->build->product        = $lang->productCommon;
$lang->build->branch         = '平台/分支';
$lang->build->execution      = '所属' . $lang->executionCommon;
$lang->build->name           = '名称编号';
$lang->build->date           = '打包日期';
$lang->build->builder        = '构建者';
$lang->build->scmPath        = '源代码地址';
$lang->build->filePath       = '下载地址';
$lang->build->desc           = '描述';
$lang->build->files          = '上传发行包';
$lang->build->last           = '上个版本';
$lang->build->packageType    = '包类型';
$lang->build->unlinkStory    = "移除{$lang->SRCommon}";
$lang->build->unlinkBug      = '移除Bug';
$lang->build->stories        = "完成的{$lang->SRCommon}";
$lang->build->bugs           = '解决的Bug';
$lang->build->generatedBugs  = '产生的Bug';
$lang->build->noProduct      = " <span id='noProduct' style='color:red'>该{$lang->executionCommon}没有关联{$lang->productCommon}，无法创建版本，请先<a href='%s' data-app='%s' data-toggle='modal' data-type='iframe'>关联{$lang->productCommon}</a></span>";
$lang->build->noBuild        = '暂时没有版本。';
$lang->build->emptyExecution =  $lang->executionCommon . '不能为空。';

$lang->build->notice = new stdclass();
$lang->build->notice->changeProduct   = "已经关联{$lang->SRCommon}、Bug或提交测试单的版本，不能修改其所属{$lang->productCommon}";
$lang->build->notice->changeExecution = "提交测试单的版本，不能修改其所属{$lang->executionCommon}";

$lang->build->finishStories = " 本次共完成 %s 个{$lang->SRCommon}";
$lang->build->resolvedBugs  = ' 本次共解决 %s 个Bug';
$lang->build->createdBugs   = ' 本次共产生 %s 个Bug';

$lang->build->placeholder = new stdclass();
$lang->build->placeholder->scmPath  = ' 软件源代码库，如Subversion、Git库地址';
$lang->build->placeholder->filePath = ' 该版本软件包下载存储地址';

$lang->build->action = new stdclass();
$lang->build->action->buildopened = '$date, 由 <strong>$actor</strong> 创建版本 <strong>$extra</strong>。' . "\n";

$lang->backhome = '返回';
/* caselib */
$lang->caselib->common = '用例库';
$lang->caselib->all    = '所有用例库';

$lang->caselib->index            = "用例库首页";
$lang->caselib->create           = "创建用例库";
$lang->caselib->edit             = '编辑用例库';
$lang->caselib->browse           = '浏览用例库';
$lang->caselib->view             = '查看库概况';
$lang->caselib->createCase       = '创建用例';
$lang->caselib->delete           = "删除";
$lang->caselib->linkVersion      = "版本";
$lang->caselib->deleted          = '已删除';
$lang->caselib->exportTemplet    = '导出模板';
$lang->caselib->batchCreateCase  = '批量创建用例';
$lang->caselib->import           = '导入';
$lang->caselib->showImport       = '显示导入数据';

$lang->caselib->browseAction     = '用例库列表';
$lang->caselib->deleteAction     = "删除用例库";
$lang->caselib->importAction     = '导入用例';
$lang->caselib->linkVersion      = "版本";

$lang->caselib->id             = '编号';
$lang->caselib->name           = '名称';
$lang->caselib->desc           = '描述';
$lang->caselib->addedBy        = '由谁创建';
$lang->caselib->addedDate      = '创建时间';
$lang->caselib->lastEditedBy   = '最后编辑人';
$lang->caselib->lastEditedDate = '最后编辑时间';

$lang->caselib->legendDesc = '描述';

$lang->caselib->libraryDelete = '您确认要删除该用例库吗？';
$lang->caselib->noModule      = '<div>您现在还没有模块信息</div><div>请维护用例库模块</div>';
/* ci */
$lang->ci->common       = '持续集成';
$lang->ci->commitResult = '接口：提交测试结果';

$lang->ci->job     = '构建';
$lang->ci->task    = '构建任务';
$lang->ci->history = '构建历史';
/* company */
$lang->company->common   = '组织视图';
$lang->company->index    = "组织视图首页";
$lang->company->create   = "添加公司";
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
$lang->company->admins   = '管理员';

$lang->company->product   = $lang->productCommon;
$lang->company->project   = '项目';
$lang->company->execution = $lang->executionCommon;
$lang->company->user      = '用户';

$lang->company->guestOptions[0] = '不允许';
$lang->company->guestOptions[1] = '允许';
/* compile */
$lang->compile->common = '构建';
$lang->compile->browse = '构建历史';
$lang->compile->logs   = '构建日志';

$lang->compile->id     = 'ID';
$lang->compile->name   = '构建名称';
$lang->compile->status = '构建状态';
$lang->compile->time   = '构建时间';
$lang->compile->result = '构建结果';

$lang->compile->statusList['success']     = '成功';
$lang->compile->statusList['failure']     = '失败';
$lang->compile->statusList['created']     = '新建';
$lang->compile->statusList['building']    = '构建中';
$lang->compile->statusList['create_fail'] = '创建失败';
$lang->compile->statusList['timeout']     = '执行超时';
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

$lang->convert->direction             = "请选择{$lang->executionCommon}问题转换方向";
$lang->convert->questionTypeOfRedmine = 'Redmine中问题类型';
$lang->convert->aimTypeOfZentao       = '转化为Zentao中的类型';

$lang->convert->directionList['bug']   = 'Bug';
$lang->convert->directionList['task']  = '任务';
$lang->convert->directionList['story'] = $lang->SRCommon;

$lang->convert->sourceList['BugFree'] = array('bugfree_1' => '1.x', 'bugfree_2' => '2.x');
$lang->convert->sourceList['Redmine'] = array('Redmine_1.1' => '1.1');

$lang->convert->setting     = '设置';
$lang->convert->checkConfig = '检查配置';

$lang->convert->ok          = '<span class="text-success"><i class="icon-check-sign"></i> 检查通过</span>';
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
$lang->convert->bugfree->users      = '用户';
$lang->convert->bugfree->executions = $lang->executionCommon;
$lang->convert->bugfree->modules    = '模块';
$lang->convert->bugfree->bugs       = 'Bug';
$lang->convert->bugfree->cases      = '测试用例';
$lang->convert->bugfree->results    = '测试结果';
$lang->convert->bugfree->actions    = '历史记录';
$lang->convert->bugfree->files      = '附件';

$lang->convert->redmine = new stdclass();
$lang->convert->redmine->users        = '用户';
$lang->convert->redmine->groups       = '用户分组';
$lang->convert->redmine->products     = $lang->productCommon;
$lang->convert->redmine->executions   = $lang->executionCommon;
$lang->convert->redmine->stories      = $lang->SRCommon;
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
$lang->cron->common       = '定时任务';
$lang->cron->index        = '首页';
$lang->cron->list         = '任务列表';
$lang->cron->create       = '添加';
$lang->cron->createAction = '添加任务';
$lang->cron->edit         = '编辑任务';
$lang->cron->delete       = '删除任务';
$lang->cron->toggle       = '激活/禁用';
$lang->cron->turnon       = '打开/关闭';
$lang->cron->openProcess  = '重启';
$lang->cron->restart      = '重启计划任务';

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
global $config;
if($config->features->cronSystemCall) $lang->cron->typeList['system'] = '操作系统命令';

$lang->cron->toggleList['start'] = '激活';
$lang->cron->toggleList['stop']  = '禁用';

$lang->cron->confirmDelete = '是否删除该计划任务？';
$lang->cron->confirmTurnon = '是否关闭计划任务？';
$lang->cron->introduction  = <<<EOD
<p>计划任务功能可以定时执行诸如更新燃尽图、备份等操作，免除自己布置计划任务。</p>
<p>该功能还有待完善，所以默认关闭该功能。</p>
EOD;
$lang->cron->confirmOpen = <<<EOD
<p>是否开启该功能？<a href="%s" target='hiddenwin'><strong>打开计划任务</strong></a></p>
EOD;

$lang->cron->notice = new stdclass();
$lang->cron->notice->m    = '取值范围:0-59，"*"代表取值范围内的数字，"/"代表"每"， "-"代表数字范围。';
$lang->cron->notice->h    = '取值范围:0-23';
$lang->cron->notice->dom  = '取值范围:1-31';
$lang->cron->notice->mon  = '取值范围:1-12';
$lang->cron->notice->dow  = '取值范围:0-6';
$lang->cron->notice->help = '注：如果服务器重启，或者发现计划任务没有正常工作，那么计划任务已经停止工作。需要手动点击【重启】按钮，或者一分钟后刷新页面，来开启计划任务。如果任务列表中第一条记录的最后执行时间改变，说明任务开启成功。';
$lang->cron->notice->errorRule = '"%s" 填写的不是合法的值';
$lang->cron->notice->errorType = '不能创建操作系统命令类型的计划任务';
/* custom */
global $config;

$lang->custom->common               = '自定义';
$lang->custom->index                = '首页';
$lang->custom->set                  = '自定义配置';
$lang->custom->restore              = '恢复默认';
$lang->custom->key                  = '键';
$lang->custom->value                = '值';
$lang->custom->flow                 = '流程';
$lang->custom->working              = '工作方式';
$lang->custom->select               = '请选择流程：';
$lang->custom->branch               = '多分支';
$lang->custom->owner                = '所有者';
$lang->custom->module               = '模块';
$lang->custom->section              = '附加部分';
$lang->custom->lang                 = '所属语言';
$lang->custom->setPublic            = '设为公共';
$lang->custom->required             = '必填项';
$lang->custom->score                = '积分';
$lang->custom->timezone             = '时区';
$lang->custom->scoreReset           = '重置积分';
$lang->custom->scoreTitle           = '积分功能';
$lang->custom->product              = $lang->productCommon;
$lang->custom->convertFactor        = '换算系数';
$lang->custom->region               = '区间';
$lang->custom->tips                 = '提示语';
$lang->custom->setTips              = '设置提示语';
$lang->custom->isRange              = '是否目标控制范围';
$lang->custom->concept              = "项目概念";
$lang->custom->URStory              = "用户需求";
$lang->custom->SRStory              = "软件需求";
$lang->custom->epic                 = "史诗";
$lang->custom->default              = "默认";
$lang->custom->mode                 = "模式";
$lang->custom->scrumStory           = "故事";
$lang->custom->waterfallCommon      = "瀑布";
$lang->custom->buildin              = "系统内置";
$lang->custom->editStoryConcept     = "编辑需求概念";
$lang->custom->setStoryConcept      = "设置需求概念";
$lang->custom->browseStoryConcept   = "需求概念列表";
$lang->custom->deleteStoryConcept   = "删除需求概念";
$lang->custom->URConcept            = "用需概念";
$lang->custom->SRConcept            = "软需概念";
$lang->custom->reviewRule           = "评审规则";
$lang->custom->switch               = "切换";
$lang->custom->oneUnit              = "一个{$lang->hourCommon}";
$lang->custom->convertRelationTitle = "请先设置{$lang->hourCommon}转换为%s的换算系数";

if($config->systemMode == 'new') $lang->custom->execution = '执行';
if($config->systemMode == 'classic' || !$config->systemMode) $lang->custom->execution = $lang->executionCommon;

$lang->custom->unitList['efficiency'] = '工时/';
$lang->custom->unitList['manhour']    = '人时/';
$lang->custom->unitList['cost']       = '元/小时';
$lang->custom->unitList['hours']      = '小时';
$lang->custom->unitList['days']       = '天';
$lang->custom->unitList['loc']        = 'KLOC';

$lang->custom->tipProgressList['SPI'] = '项目进度绩效(SPI)';
$lang->custom->tipProgressList['SV']  = '进度偏差率(SV%)';

$lang->custom->tipCostList['CPI'] = '项目成本绩效(CPI)';
$lang->custom->tipCostList['CV']  = '成本偏差率(CV%)';

$lang->custom->tipRangeList[0]  = '否';
$lang->custom->tipRangeList[1]  = '是';

$lang->custom->regionMustNumber    = '区间必须是数字';
$lang->custom->tipNotEmpty         = '提示语不能为空';
$lang->custom->currencyNotEmpty    = '至少选择一种货币';
$lang->custom->defaultNotEmpty     = '默认货币不能为空';
$lang->custom->convertRelationTips = "{$lang->hourCommon}转换为%s后，历史数据将被统一转换为%s";
$lang->custom->saveTips            = '点击保存后，则以当前%s为默认估算单位';

$lang->custom->numberError = '区间必须大于零';

$lang->custom->closedExecution = '已关闭' . $lang->custom->execution;
$lang->custom->closedProduct   = '已关闭' . $lang->productCommon;

if($config->systemMode == 'new') $lang->custom->object['project']   = '项目';
$lang->custom->object['product']   = $lang->productCommon;
$lang->custom->object['execution'] = $lang->custom->execution;
$lang->custom->object['story']     = $lang->SRCommon;
$lang->custom->object['task']      = '任务';
$lang->custom->object['bug']       = 'Bug';
$lang->custom->object['testcase']  = '用例';
$lang->custom->object['testtask']  = '版本';
$lang->custom->object['todo']      = '待办';
$lang->custom->object['user']      = '用户';
$lang->custom->object['block']     = '区块';

$lang->custom->project = new stdClass();
$lang->custom->project->currencySetting    = '货币设置';
$lang->custom->project->defaultCurrency    = '默认货币';
$lang->custom->project->fields['unitList'] = '预算单位';

$lang->custom->story = new stdClass();
$lang->custom->story->fields['categoryList']     = '类型';
$lang->custom->story->fields['priList']          = '优先级';
$lang->custom->story->fields['sourceList']       = '来源';
$lang->custom->story->fields['reasonList']       = '关闭原因';
$lang->custom->story->fields['stageList']        = '阶段';
$lang->custom->story->fields['statusList']       = '状态';
$lang->custom->story->fields['reviewRules']      = '评审规则';
$lang->custom->story->fields['reviewResultList'] = '评审结果';
$lang->custom->story->fields['review']           = '评审流程';

$lang->custom->task = new stdClass();
$lang->custom->task->fields['priList']    = '优先级';
$lang->custom->task->fields['typeList']   = '类型';
$lang->custom->task->fields['reasonList'] = '关闭原因';
$lang->custom->task->fields['statusList'] = '状态';
$lang->custom->task->fields['hours']      = '工时';

$lang->custom->bug = new stdClass();
$lang->custom->bug->fields['priList']        = '优先级';
$lang->custom->bug->fields['severityList']   = '严重程度';
$lang->custom->bug->fields['osList']         = '操作系统';
$lang->custom->bug->fields['browserList']    = '浏览器';
$lang->custom->bug->fields['typeList']       = '类型';
$lang->custom->bug->fields['resolutionList'] = '解决方案';
$lang->custom->bug->fields['statusList']     = '状态';
$lang->custom->bug->fields['longlife']       = '久未处理天数';

$lang->custom->testcase = new stdClass();
$lang->custom->testcase->fields['priList']    = '优先级';
$lang->custom->testcase->fields['typeList']   = '类型';
$lang->custom->testcase->fields['stageList']  = '阶段';
$lang->custom->testcase->fields['resultList'] = '执行结果';
$lang->custom->testcase->fields['statusList'] = '状态';
$lang->custom->testcase->fields['review']     = '评审流程';

$lang->custom->testtask = new stdClass();
$lang->custom->testtask->fields['priList']    = '优先级';
$lang->custom->testtask->fields['statusList'] = '状态';

$lang->custom->todo = new stdClass();
$lang->custom->todo->fields['priList']    = '优先级';
$lang->custom->todo->fields['typeList']   = '类型';
$lang->custom->todo->fields['statusList'] = '状态';

$lang->custom->user = new stdClass();
$lang->custom->user->fields['roleList']     = '职位';
$lang->custom->user->fields['statusList']   = '状态';
$lang->custom->user->fields['contactField'] = '可用联系方式';
$lang->custom->user->fields['deleted']      = '列出已删除用户';

$lang->custom->system = array('required', 'flow', 'score');

$lang->custom->block = new stdclass();
$lang->custom->block->fields['closed'] = '关闭的区块';

$lang->custom->currentLang = '适用当前语言';
$lang->custom->allLang     = '适用所有语言';

$lang->custom->confirmRestore = '是否要恢复默认配置？';

$lang->custom->notice = new stdclass();
$lang->custom->notice->userFieldNotice     = '控制以上字段在用户相关页面是否显示，留空则全部显示';
$lang->custom->notice->canNotAdd           = '该项参与运算，不提供自定义添加功能';
$lang->custom->notice->forceReview         = "指定人提交的%s必须评审。";
$lang->custom->notice->forceNotReview      = "指定人提交的%s不需要评审。";
$lang->custom->notice->longlife            = 'Bug列表页面的久未处理标签中，列出设置天数之前未处理的Bug。';
$lang->custom->notice->invalidNumberKey    = '键值应为不大于255的数字';
$lang->custom->notice->invalidStringKey    = '键值应当为小写英文字母、数字或下划线的组合';
$lang->custom->notice->cannotSetTimezone   = 'date_default_timezone_set方法不存在或禁用，不能设置时区。';
$lang->custom->notice->noClosedBlock       = '没有永久关闭的区块';
$lang->custom->notice->required            = '页面提交时，选中的字段必填';
$lang->custom->notice->conceptResult       = '我们已经根据您的选择为您设置了<b> %s-%s </b>模式，使用<b>%s</b> + <b> %s</b>。';
$lang->custom->notice->conceptPath         = '您可以在：后台 -> 自定义 -> 流程页面修改。';
$lang->custom->notice->readOnlyOfProduct   = '禁止修改后，已关闭' . $lang->productCommon . '下的' . $lang->SRCommon . '、Bug、用例、日志、发布、计划都禁止修改。';
$lang->custom->notice->readOnlyOfExecution = "禁止修改后，已关闭{$lang->custom->execution}下的任务、版本、日志以及关联需求都禁止修改。";
$lang->custom->notice->URSREmpty           = '自定义需求名称不能为空！';
$lang->custom->notice->confirmDelete       = '您确定要删除吗？';

$lang->custom->notice->indexPage['product'] = "从8.2版本起增加了产品主页视图，是否默认进入产品主页？";
$lang->custom->notice->indexPage['project'] = "从8.2版本起增加了项目主页视图，是否默认进入项目主页？";
$lang->custom->notice->indexPage['qa']      = "从8.2版本起增加了测试主页视图，是否默认进入测试主页？";

$lang->custom->notice->invalidStrlen['ten']        = '键的长度必须小于10个字符！';
$lang->custom->notice->invalidStrlen['twenty']     = '键的长度必须小于20个字符！';
$lang->custom->notice->invalidStrlen['thirty']     = '键的长度必须小于30个字符！';
$lang->custom->notice->invalidStrlen['twoHundred'] = '键的长度必须小于225个字符！';

$lang->custom->storyReview    = '评审流程';
$lang->custom->forceReview    = '强制评审';
$lang->custom->forceNotReview = '不需要评审';
$lang->custom->reviewList[1]  = '开启';
$lang->custom->reviewList[0]  = '关闭';

$lang->custom->deletedList[1] = '列出';
$lang->custom->deletedList[0] = '不列出';

$lang->custom->workingHours   = '每天可用工时';
$lang->custom->weekend        = '休息日';
$lang->custom->weekendList[2] = '双休';
$lang->custom->weekendList[1] = '单休';

global $config;
if($config->systemMode == 'classic')
{
    $lang->custom->sprintConceptList[0] = '产品 - 项目';
    $lang->custom->sprintConceptList[1] = '产品 - 迭代';
    $lang->custom->sprintConceptList[2] = '产品 - 冲刺';
}
else
{
    $lang->custom->sprintConceptList[0] = '项目 - 产品 - 迭代';
    $lang->custom->sprintConceptList[1] = '项目 - 产品 - 冲刺';
}

$lang->custom->workingList['full'] = '完整研发管理工具';

$lang->custom->menuTip  = '点击显示或隐藏导航条目，拖拽来更改显示顺序。';
$lang->custom->saveFail = '保存失败！';
$lang->custom->page     = '页面';

$lang->custom->scoreStatus[1] = '开启';
$lang->custom->scoreStatus[0] = '关闭';

$lang->custom->CRProduct[1] = '允许修改';
$lang->custom->CRProduct[0] = '禁止修改';

$lang->custom->CRExecution[1] = '允许修改';
$lang->custom->CRExecution[0] = '禁止修改';

$lang->custom->moduleName['product']     = $lang->productCommon;
$lang->custom->moduleName['productplan'] = '计划';
$lang->custom->moduleName['execution']   = $lang->custom->execution;

$lang->custom->conceptQuestions['overview']   = "1. 下述哪种组合方式更适合您公司的管理现状？";
$lang->custom->conceptQuestions['URAndSR']    = "2. 是否启用{$lang->URCommon}和{$lang->SRCommon}概念？";
$lang->custom->conceptQuestions['storypoint'] = "3. 您公司是在使用以下哪种单位来做规模估算？";

$lang->custom->conceptOptions             = new stdclass;
$lang->custom->conceptOptions->story      = array();
$lang->custom->conceptOptions->story['0'] = '需求';
$lang->custom->conceptOptions->story['1'] = '故事';

$lang->custom->conceptOptions->URAndSR = array();
$lang->custom->conceptOptions->URAndSR['1'] = '是';
$lang->custom->conceptOptions->URAndSR['0'] = '否';

$lang->custom->conceptOptions->hourPoint      = array();
$lang->custom->conceptOptions->hourPoint['0'] = '工时';
$lang->custom->conceptOptions->hourPoint['1'] = '故事点';
$lang->custom->conceptOptions->hourPoint['2'] = '功能点';

$lang->custom->scrum = new stdclass();
$lang->custom->scrum->setConcept = '设置项目概念';

$lang->custom->reviewRules['allpass']  = '全部通过通过';
$lang->custom->reviewRules['halfpass'] = '半数以上通过通过';
/* datatable */
$lang->datatable = new stdclass();
$lang->datatable->common = '数据表格';
$lang->datatable->width  = '宽度';
$lang->datatable->show   = '显示';
$lang->datatable->hide   = '隐藏';
$lang->datatable->reset  = '恢复默认';

$lang->datatable->custom            = '自定义列';
$lang->datatable->customTip         = '勾选需要显示的列，拖动列名进行排序。';
$lang->datatable->switchToTable     = '切换到简单表格';
$lang->datatable->switchToDatatable = '切换到高级表格';
$lang->datatable->required          = '必选';
$lang->datatable->confirmReset      = '是否恢复默认设置？';
$lang->datatable->setGlobal         = '全局';
$lang->datatable->resetGlobal       = '全局恢复默认';

$lang->datatable->branch   = '分支';
$lang->datatable->platform = '平台';

$lang->datatable->moduleSetting          = '模块设置';
$lang->datatable->showModule             = '列表页是否显示模块名';
$lang->datatable->showAllModule          = '是否显示完整产品模块';
$lang->datatable->showModuleList[]       = '不显示';
$lang->datatable->showModuleList['base'] = '只显示一级模块';
$lang->datatable->showModuleList['end']  = '只显示最后一级模块';
$lang->datatable->showAllModuleList[0]   = '不显示';
$lang->datatable->showAllModuleList[1]   = '显示';
/* dept */
$lang->dept->common      = '部门结构';
$lang->dept->manageChild = "下级部门";
$lang->dept->edit        = "编辑部门";
$lang->dept->delete      = "删除部门";
$lang->dept->parent      = "上级部门";
$lang->dept->manager     = "负责人";
$lang->dept->name        = "部门名称";
$lang->dept->browse      = "部门维护";
$lang->dept->manage      = "维护部门";
$lang->dept->updateOrder = "更新排序";
$lang->dept->add         = "添加部门";
$lang->dept->grade       = "部门级别";
$lang->dept->order       = "排序";
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
$lang->dev->translate  = '翻译';
$lang->dev->dbList     = '数据库';
$lang->dev->moduleList = '模块列表';
$lang->dev->params     = '参数列表';
$lang->dev->type       = '类型';
$lang->dev->desc       = '描述';
$lang->dev->noParams   = '无参数';
$lang->dev->post       = 'POST参数';

$lang->dev->paramRange    = '取值范围：%s';
$lang->dev->paramDate     = '日期格式：YY-mm-dd，如：2019-01-01';
$lang->dev->paramColor    = '颜色格式：#RGB，如：#3da7f5';
$lang->dev->paramMailto   = "填写帐号，多个账号用','分隔。";
$lang->dev->noteEditor    = "编辑器功能因为安全原因被禁用。使用该功能，请到官网下载安装 <a href='https://www.zentao.net/extension-viewExt-150.html' target='_blank'>扩展编辑器</a> 插件。";
$lang->dev->noteTranslate = "翻译功能因为安全原因被禁用。使用该功能，请到官网下载安装 <a href='https://www.zentao.net/extension-viewExt-151.html' target='_blank'>翻译</a> 插件。";

$lang->dev->fields = array();
$lang->dev->fields['id']     = '序号';
$lang->dev->fields['name']   = '字段';
$lang->dev->fields['desc']   = '描述';
$lang->dev->fields['type']   = '类型';
$lang->dev->fields['length'] = '长度';
$lang->dev->fields['null']   = '是否可空';

$lang->dev->tableList = array();
$lang->dev->tableList['action']           = '系统日志';
$lang->dev->tableList['bug']              = 'Bug';
$lang->dev->tableList['build']            = '版本';
$lang->dev->tableList['burn']             = '燃尽图';
$lang->dev->tableList['case']             = '测试用例';
$lang->dev->tableList['casestep']         = '用例步骤';
$lang->dev->tableList['company']          = '公司';
$lang->dev->tableList['config']           = '配置';
$lang->dev->tableList['custom']           = '自定义';
$lang->dev->tableList['dept']             = '部门';
$lang->dev->tableList['doc']              = '文档';
$lang->dev->tableList['doclib']           = '文档库';
$lang->dev->tableList['effort']           = '日志';
$lang->dev->tableList['extension']        = '插件';
$lang->dev->tableList['file']             = '附件';
$lang->dev->tableList['group']            = '用户组';
$lang->dev->tableList['grouppriv']        = '组权限';
$lang->dev->tableList['history']          = '操作历史';
$lang->dev->tableList['lang']             = '语言定义';
$lang->dev->tableList['module']           = '模块';
$lang->dev->tableList['product']          = $lang->productCommon;
$lang->dev->tableList['productplan']      = $lang->productCommon . '计划';
$lang->dev->tableList['project']          = '项目'; 
$lang->dev->tableList['projectproduct']   = '项目' .  $lang->productCommon;
$lang->dev->tableList['projectstory']     = '项目' .  $lang->SRCommon;
$lang->dev->tableList['execution']        = $lang->executionCommon;
$lang->dev->tableList['release']          = '发布';
$lang->dev->tableList['story']            = $lang->SRCommon;
$lang->dev->tableList['storyspec']        = "{$lang->SRCommon}描述";
$lang->dev->tableList['task']             = '任务';
$lang->dev->tableList['taskestimate']     = '任务预计';
$lang->dev->tableList['team']             = '团队';
$lang->dev->tableList['testresult']       = '测试结果';
$lang->dev->tableList['testrun']          = '测试执行';
$lang->dev->tableList['testtask']         = '测试单';
$lang->dev->tableList['todo']             = '待办';
$lang->dev->tableList['user']             = '用户';
$lang->dev->tableList['usercontact']      = '用户联系人';
$lang->dev->tableList['usergroup']        = '用户组';
$lang->dev->tableList['userquery']        = '用户查询';
$lang->dev->tableList['usertpl']          = '用户模板';
$lang->dev->tableList['admin']            = '后台管理';
$lang->dev->tableList['api']              = 'API接口';
$lang->dev->tableList['backup']           = '备份';
$lang->dev->tableList['common']           = '公有模块';
$lang->dev->tableList['convert']          = '导入';
$lang->dev->tableList['dev']              = '二次开发';
$lang->dev->tableList['git']              = 'GIT';
$lang->dev->tableList['index']            = '首页';
$lang->dev->tableList['install']          = '安装';
$lang->dev->tableList['mail']             = '邮箱';
$lang->dev->tableList['misc']             = '杂项';
$lang->dev->tableList['my']               = '我的地盘';
$lang->dev->tableList['qa']               = '测试';
$lang->dev->tableList['report']           = '统计';
$lang->dev->tableList['search']           = '搜索';
$lang->dev->tableList['sso']              = '单点登录';
$lang->dev->tableList['svn']              = 'SVN';
$lang->dev->tableList['testcase']         = '测试用例';
$lang->dev->tableList['testreport']       = '测试报告';
$lang->dev->tableList['testsuite']        = '测试套件';
$lang->dev->tableList['caselib']          = '用例库';
$lang->dev->tableList['tree']             = '模块关系';
$lang->dev->tableList['upgrade']          = '更新';
$lang->dev->tableList['cron']             = '定时任务';
$lang->dev->tableList['datatable']        = '数据表格';
$lang->dev->tableList['block']            = '区块';
$lang->dev->tableList['branch']           = '平台/分支';
$lang->dev->tableList['doccontent']       = '文档内容';
$lang->dev->tableList['storystage']       = "{$lang->SRCommon}阶段";
$lang->dev->tableList['tutorial']         = '新手教程';
$lang->dev->tableList['suitecase']        = '套件用例';
$lang->dev->tableList['score']            = '积分';
$lang->dev->tableList['entry']            = '应用';
$lang->dev->tableList['webhook']          = 'WebHook';
$lang->dev->tableList['log']              = '接口日志';
$lang->dev->tableList['message']          = '消息';
$lang->dev->tableList['notify']           = '通知';
$lang->dev->tableList['userview']         = '可访问权限';
$lang->dev->tableList['repo']             = '代码';
$lang->dev->tableList['repohistory']      = '版本历史';
$lang->dev->tableList['repofiles']        = '代码文件';
$lang->dev->tableList['repobranch']       = '代码分支';
$lang->dev->tableList['ci']               = '持续集成';
$lang->dev->tableList['compile']          = '构建';
$lang->dev->tableList['jenkins']          = 'Jenkins';
$lang->dev->tableList['job']              = '构建任务';
$lang->dev->tableList['searchdict']       = '搜索字典';
$lang->dev->tableList['searchindex']      = '搜索索引';

$lang->dev->groupList['my']        = '我的地盘';
$lang->dev->groupList['program']   = '项目集';
$lang->dev->groupList['product']   = $lang->productCommon;
$lang->dev->groupList['project']   = '项目';
$lang->dev->groupList['execution'] = $lang->executionCommon;
$lang->dev->groupList['qa']        = '测试';
$lang->dev->groupList['doc']       = '文档';
$lang->dev->groupList['report']    = '统计';
$lang->dev->groupList['company']   = '组织';
$lang->dev->groupList['repo']      = '持续集成';
$lang->dev->groupList['api']       = 'API';
$lang->dev->groupList['message']   = '消息';
$lang->dev->groupList['search']    = '搜索';

$lang->dev->endGroupList['admin']  = '后台';
$lang->dev->endGroupList['system'] = '系统';
$lang->dev->endGroupList['other']  = '其他';
/* doc */
$lang->doc->common       = '文档';
$lang->doc->id           = '文档编号';
$lang->doc->product      = '所属' . $lang->productCommon;
$lang->doc->project      = '所属项目';
$lang->doc->execution    = '所属' . $lang->executionCommon;
$lang->doc->lib          = '所属文档库';
$lang->doc->module       = '所属目录';
$lang->doc->title        = '文档标题';
$lang->doc->digest       = '文档摘要';
$lang->doc->comment      = '文档备注';
$lang->doc->type         = '文档类型';
$lang->doc->content      = '文档正文';
$lang->doc->keywords     = '关键字';
$lang->doc->url          = '文档URL';
$lang->doc->files        = '附件';
$lang->doc->addedBy      = '由谁添加';
$lang->doc->addedDate    = '添加时间';
$lang->doc->editedBy     = '由谁更新';
$lang->doc->editedDate   = '更新时间';
$lang->doc->version      = '版本号';
$lang->doc->basicInfo    = '基本信息';
$lang->doc->deleted      = '已删除';
$lang->doc->fileObject   = '所属对象';
$lang->doc->whiteList    = '白名单';
$lang->doc->contentType  = '文档格式';
$lang->doc->separator    = "<i class='icon-angle-right'></i>";
$lang->doc->fileTitle    = '附件名';
$lang->doc->filePath     = '地址';
$lang->doc->extension    = '类型';
$lang->doc->size         = '大小';
$lang->doc->download     = '下载';
$lang->doc->acl          = '权限';
$lang->doc->fileName     = '附件';
$lang->doc->groups       = '分组';
$lang->doc->users        = '用户';
$lang->doc->item         = '项';
$lang->doc->num          = '文档数量';
$lang->doc->searchResult = '搜索结果';
$lang->doc->mailto       = '抄送给';
$lang->doc->noModule     = '文档库下没有目录和文档，请维护目录或者创建文档';
$lang->doc->noChapter    = '手册下没有章节和文章，请维护手册';

$lang->doc->moduleDoc    = '按模块浏览';
$lang->doc->searchDoc    = '搜索';
$lang->doc->fast         = '快速访问';
$lang->doc->allDoc       = '所有文档';
$lang->doc->openedByMe   = '由我创建';
$lang->doc->editedByMe   = '由我编辑';
$lang->doc->orderByOpen  = '最近添加';
$lang->doc->orderByEdit  = '最近更新';
$lang->doc->orderByVisit = '最近访问';
$lang->doc->todayEdited  = '今日更新';
$lang->doc->pastEdited   = '往日更新';
$lang->doc->myDoc        = '我的文档';
$lang->doc->myCollection = '我的收藏';

$lang->doc->index            = '文档主页';
$lang->doc->create           = '创建文档';
$lang->doc->edit             = '编辑文档';
$lang->doc->delete           = '删除文档';
$lang->doc->createBook       = '创建手册';
$lang->doc->browse           = '文档列表';
$lang->doc->view             = '文档详情';
$lang->doc->diff             = '对比';
$lang->doc->diffAction       = '对比文档';
$lang->doc->sort             = '文档排序';
$lang->doc->manageType       = '维护目录';
$lang->doc->editType         = '编辑目录';
$lang->doc->deleteType       = '删除目录';
$lang->doc->addType          = '增加目录';
$lang->doc->childType        = '子目录';
$lang->doc->catalogName      = '目录名称';
$lang->doc->collect          = '收藏';
$lang->doc->cancelCollection = '取消收藏';
$lang->doc->deleteFile       = '删除附件';

$lang->doc->collectAction = '收藏文档';

$lang->doc->libName        = '文档库名称';
$lang->doc->libType        = '文档库类型';
$lang->doc->custom         = '自定义文档库';
$lang->doc->customAB       = '自定义库';
$lang->doc->createLib      = '创建文档库';
$lang->doc->allLibs        = '文档库列表';
$lang->doc->objectLibs     = "{$lang->productCommon}/{$lang->executionCommon}库列表";
$lang->doc->showFiles      = '附件库';
$lang->doc->editLib        = '编辑文档库';
$lang->doc->deleteLib      = '删除文档库';
$lang->doc->fixedMenu      = '固定到菜单栏';
$lang->doc->removeMenu     = '从菜单栏移除';
$lang->doc->search         = '搜索';

global $config;
$lang->doc->allProduct    = '所有' . $lang->productCommon;
$lang->doc->allExecutions = '所有' . $lang->executionCommon;

$lang->doc->libTypeList['product']   = $lang->productCommon . '文档库';
if($config->systemMode == 'new') $lang->doc->libTypeList['project'] = '项目文档库';
$lang->doc->libTypeList['execution'] = $lang->executionCommon . '文档库';
$lang->doc->libTypeList['custom']    = '自定义文档库';

$lang->doc->libIconList['product']   = 'icon-product';
$lang->doc->libIconList['execution'] = 'icon-stack';
$lang->doc->libIconList['custom']    = 'icon-folder-o';

$lang->doc->systemLibs['product']   = $lang->productCommon;
$lang->doc->systemLibs['execution'] = $lang->executionCommon;

$lang->doc->aclList['open']    = '公开';
$lang->doc->aclList['custom']  = '自定义';
$lang->doc->aclList['private'] = '私有';

$lang->doc->typeList['html']     = '富文本';
$lang->doc->typeList['markdown'] = 'Markdown';
$lang->doc->typeList['url']      = '链接';
$lang->doc->typeList['word']     = 'Word';
$lang->doc->typeList['ppt']      = 'PPT';
$lang->doc->typeList['excel']    = 'Excel';

$lang->doc->types['text'] = '文档';
$lang->doc->types['url']  = '链接';

$lang->doc->contentTypeList['html']     = 'HTML';
$lang->doc->contentTypeList['markdown'] = 'MarkDown';

$lang->doc->browseType             = '浏览方式';
$lang->doc->browseTypeList['list'] = '列表';
$lang->doc->browseTypeList['grid'] = '目录';

$lang->doc->fastMenuList['byediteddate']  = '最近更新';
//$lang->doc->fastMenuList['visiteddate']   = '最近访问';
$lang->doc->fastMenuList['openedbyme']    = '我的文档';
$lang->doc->fastMenuList['collectedbyme'] = '我的收藏';

$lang->doc->fastMenuIconList['byediteddate']  = 'icon-folder-upload';
//$lang->doc->fastMenuIconList['visiteddate']   = 'icon-folder-move';
$lang->doc->fastMenuIconList['openedbyme']    = 'icon-folder-account';
$lang->doc->fastMenuIconList['collectedbyme'] = 'icon-folder-star';

$lang->doc->customObjectLibs['files']       = '显示附件库';
$lang->doc->customObjectLibs['customFiles'] = '显示自定义文档库';

$lang->doc->orderLib                       = '文档库排序';
$lang->doc->customShowLibs                 = '显示设置';
$lang->doc->customShowLibsList['zero']     = '显示空文档的库';
$lang->doc->customShowLibsList['children'] = '显示子分类的文档';
$lang->doc->customShowLibsList['unclosed'] = '只显示未关闭的' . $lang->executionCommon;

$lang->doc->mail = new stdclass();
$lang->doc->mail->create = new stdclass();
$lang->doc->mail->edit   = new stdclass();
$lang->doc->mail->create->title = "%s创建了文档 #%s:%s";
$lang->doc->mail->edit->title   = "%s编辑了文档 #%s:%s";

$lang->doc->confirmDelete        = "您确定删除该文档吗？";
$lang->doc->confirmDeleteLib     = "您确定删除该文档库吗？";
$lang->doc->confirmDeleteChapter = "您确定删除该章节吗？";
$lang->doc->errorEditSystemDoc   = "系统文档库无需修改。";
$lang->doc->errorEmptyProduct    = "没有{$lang->productCommon}，无法创建文档";
$lang->doc->errorEmptyProject    = "没有{$lang->executionCommon}，无法创建文档";
$lang->doc->errorMainSysLib      = "该系统文档库不能删除！";
$lang->doc->accessDenied         = "您没有权限访问！";
$lang->doc->versionNotFount      = '该版本文档不存在';
$lang->doc->noDoc                = '暂时没有文档。';
$lang->doc->noArticle            = '暂时没有文章。';
$lang->doc->noLib                = '暂时没有文档库。';
$lang->doc->noBook               = 'WIKI库还未创建手册，请新建 ：）';
$lang->doc->cannotCreateOffice   = '<p>对不起，企业版才能创建%s文档。<p><p>试用企业版，请联系我们：4006-8899-23 &nbsp; 0532-86893032。</p>';
$lang->doc->notSetOffice         = "<p>创建%s文档，需要配置<a href='%s'>Office转换设置</a>。<p>";
$lang->doc->noSearchedDoc        = '没有搜索到任何文档。';
$lang->doc->noEditedDoc          = '您还没有编辑任何文档。';
$lang->doc->noOpenedDoc          = '您还没有创建任何文档。';
$lang->doc->noCollectedDoc       = '您还没有收藏任何文档。';
$lang->doc->errorEmptyLib        = '文档库暂无数据。';

$lang->doc->noticeAcl['lib']['product']['default']   = '有所选产品访问权限的用户可以访问。';
$lang->doc->noticeAcl['lib']['product']['custom']    = '有所选产品访问权限或白名单里的用户可以访问。';
$lang->doc->noticeAcl['lib']['project']['default']   = "有所选项目访问权限的用户可以访问。";
$lang->doc->noticeAcl['lib']['project']['custom']    = "有所选项目访问权限或白名单里的用户可以访问。";
$lang->doc->noticeAcl['lib']['execution']['default'] = "有所选{$lang->executionCommon}访问权限的用户可以访问。";
$lang->doc->noticeAcl['lib']['execution']['custom']  = "有所选{$lang->executionCommon}访问权限或白名单里的用户可以访问。";
$lang->doc->noticeAcl['lib']['custom']['open']       = '所有人都可以访问。';
$lang->doc->noticeAcl['lib']['custom']['custom']     = '白名单的用户可以访问。';
$lang->doc->noticeAcl['lib']['custom']['private']    = '只有创建者自己可以访问。';

$lang->doc->noticeAcl['doc']['open']    = '有文档所属文档库访问权限的，都可以访问。';
$lang->doc->noticeAcl['doc']['custom']  = '白名单的用户可以访问。';
$lang->doc->noticeAcl['doc']['private'] = '只有创建者自己可以访问。';

$lang->doc->placeholder = new stdclass();
$lang->doc->placeholder->url = '相应的链接地址';

$lang->doclib = new stdclass();
$lang->doclib->name      = '文档库名称';
$lang->doclib->control   = '访问控制';
$lang->doclib->group     = '分组';
$lang->doclib->user      = '用户';
$lang->doclib->files     = '附件库';
$lang->doclib->all       = '所有文档库';
$lang->doclib->select    = '选择文档库';
$lang->doclib->execution = $lang->executionCommon . '库';
$lang->doclib->product   = $lang->productCommon . '库';

$lang->doclib->aclListA['default'] = '默认';
$lang->doclib->aclListA['custom']  = '自定义';

$lang->doclib->aclListB['open']    = '公开';
$lang->doclib->aclListB['custom']  = '自定义';
$lang->doclib->aclListB['private'] = '私有';

$lang->doclib->create['product']   = '创建' . $lang->productCommon . '文档库';
$lang->doclib->create['execution'] = '创建' . $lang->executionCommon . '文档库';
$lang->doclib->create['custom']    = '创建自定义文档库';

$lang->doclib->main['product']   = $lang->productCommon . '主库';
$lang->doclib->main['project']   = '项目主库';
$lang->doclib->main['execution'] = $lang->executionCommon . '主库';

$lang->doclib->tabList['product']   = $lang->productCommon;
$lang->doclib->tabList['execution'] = $lang->executionCommon;
$lang->doclib->tabList['custom']    = '自定义';

$lang->doclib->nameList['custom'] = '自定义文档库名称';
/* entry */
$lang->entry->common  = '应用';
$lang->entry->list    = '应用列表';
$lang->entry->api     = '接口';
$lang->entry->webhook = 'Webhook';
$lang->entry->log     = '日志';
$lang->entry->setting = '设置';

$lang->entry->browse    = '浏览应用';
$lang->entry->create    = '添加应用';
$lang->entry->edit      = '编辑应用';
$lang->entry->delete    = '删除应用';
$lang->entry->createKey = '重新生成密钥';

$lang->entry->id          = 'ID';
$lang->entry->name        = '名称';
$lang->entry->account     = '账号';
$lang->entry->code        = '代号';
$lang->entry->freePasswd  = '免密登录';
$lang->entry->key         = '密钥';
$lang->entry->ip          = 'IP';
$lang->entry->desc        = '描述';
$lang->entry->createdBy   = '由谁创建';
$lang->entry->createdDate = '创建时间';
$lang->entry->editedby    = '最后编辑';
$lang->entry->editedDate  = '编辑时间';
$lang->entry->date        = '请求时间';
$lang->entry->url         = '请求地址';

$lang->entry->confirmDelete = '您确认要删除该应用吗？';
$lang->entry->help          = '使用说明';
$lang->entry->notify        = '消息通知';

$lang->entry->helpLink   = 'https://www.zentao.net/book/zentaopmshelp/integration-287.html';
$lang->entry->notifyLink = 'https://www.zentao.net/book/zentaopmshelp/301.html';

$lang->entry->note = new stdClass();
$lang->entry->note->name    = '授权应用名称';
$lang->entry->note->code    = '授权应用代号，必须为字母或数字的组合';
$lang->entry->note->ip      = "允许访问API的应用ip，多个ip用逗号隔开。支持IP段，如192.168.1.*";
$lang->entry->note->allIP   = '无限制';
$lang->entry->note->account = '授权应用账号';

$lang->entry->freePasswdList[1] = '开启';
$lang->entry->freePasswdList[0] = '关闭';

$lang->entry->errmsg['PARAM_CODE_MISSING']    = '缺少code参数';
$lang->entry->errmsg['PARAM_TOKEN_MISSING']   = '缺少token参数';
$lang->entry->errmsg['SESSION_CODE_MISSING']  = '缺少session code';
$lang->entry->errmsg['EMPTY_KEY']             = '应用未设置密钥';
$lang->entry->errmsg['INVALID_TOKEN']         = '无效的token参数';
$lang->entry->errmsg['SESSION_VERIFY_FAILED'] = 'session验证失败';
$lang->entry->errmsg['IP_DENIED']             = '该IP被限制访问';
$lang->entry->errmsg['ACCOUNT_UNBOUND']       = '未绑定用户';
$lang->entry->errmsg['INVALID_ACCOUNT']       = '用户不存在';
$lang->entry->errmsg['EMPTY_ENTRY']           = '应用不存在';
$lang->entry->errmsg['CALLED_TIME']           = 'Token已失效';
$lang->entry->errmsg['ERROR_TIMESTAMP']       = '错误的时间戳。';
/* execution */
$lang->execution->allExecutions   = '所有' . $lang->executionCommon;
$lang->execution->allExecutionAB  = "所有{$lang->execution->common}";
$lang->execution->id              = $lang->executionCommon . '编号';
$lang->execution->type            = $lang->executionCommon . '类型';
$lang->execution->name            = $lang->executionCommon . '名称';
$lang->execution->code            = $lang->executionCommon . '代号';
$lang->execution->project         = '所属项目';
$lang->execution->execName        = "{$lang->execution->common}名称";
$lang->execution->execCode        = "{$lang->execution->common}代号";
$lang->execution->execType        = "{$lang->execution->common}类型";
$lang->execution->stage           = '阶段';
$lang->execution->pri             = '优先级';
$lang->execution->openedBy        = '由谁创建';
$lang->execution->openedDate      = '创建日期';
$lang->execution->closedBy        = '由谁关闭';
$lang->execution->closedDate      = '关闭日期';
$lang->execution->canceledBy      = '由谁取消';
$lang->execution->canceledDate    = '取消日期';
$lang->execution->begin           = '开始日期';
$lang->execution->end             = '结束日期';
$lang->execution->dateRange       = '起始日期';
$lang->execution->to              = '至';
$lang->execution->days            = '可用工作日';
$lang->execution->day             = '天';
$lang->execution->workHour        = '工时';
$lang->execution->workHourUnit    = 'h';
$lang->execution->totalHours      = '可用工时';
$lang->execution->totalDays       = '可用工日';
$lang->execution->status          = $lang->executionCommon . '状态';
$lang->execution->execStatus      = "{$lang->execution->common}状态";
$lang->execution->subStatus       = '子状态';
$lang->execution->desc            = $lang->executionCommon . '描述';
$lang->execution->execDesc        = "{$lang->execution->common}描述";
$lang->execution->owner           = '负责人';
$lang->execution->PO              = $lang->productCommon . '负责人';
$lang->execution->PM              = $lang->executionCommon . '负责人';
$lang->execution->execPM          = "{$lang->execution->common}负责人";
$lang->execution->QD              = '测试负责人';
$lang->execution->RD              = '发布负责人';
$lang->execution->release         = '发布';
$lang->execution->acl             = '访问控制';
$lang->execution->teamname        = '团队名称';
$lang->execution->order           = $lang->executionCommon . '排序';
$lang->execution->orderAB         = '排序';
$lang->execution->products        = '相关' . $lang->productCommon;
$lang->execution->whitelist       = '白名单';
$lang->execution->addWhitelist    = '添加白名单';
$lang->execution->unbindWhitelist = '删除白名单';
$lang->execution->totalEstimate   = '预计';
$lang->execution->totalConsumed   = '消耗';
$lang->execution->totalLeft       = '剩余';
$lang->execution->progress        = '进度';
$lang->execution->hours           = '预计 %s 消耗 %s 剩余 %s';
$lang->execution->viewBug         = '查看bug';
$lang->execution->noProduct       = "无{$lang->executionCommon}";
$lang->execution->createStory     = "提{$lang->SRCommon}";
$lang->execution->storyTitle      = "{$lang->SRCommon}名称";
$lang->execution->all             = '所有';
$lang->execution->undone          = '未完成';
$lang->execution->unclosed        = '未关闭';
$lang->execution->typeDesc        = "运维{$lang->executionCommon}没有{$lang->SRCommon}、bug、版本、测试功能。";
$lang->execution->mine            = '我负责：';
$lang->execution->involved        = '我参与：';
$lang->execution->other           = '其他：';
$lang->execution->deleted         = '已删除';
$lang->execution->delayed         = '已延期';
$lang->execution->product         = $lang->execution->products;
$lang->execution->readjustTime    = "调整{$lang->executionCommon}起止时间";
$lang->execution->readjustTask    = '顺延任务的起止时间';
$lang->execution->effort          = '日志';
$lang->execution->storyEstimate   = '需求估算';
$lang->execution->newEstimate     = '新一轮估算';
$lang->execution->reestimate      = '重新估算';
$lang->execution->selectRound     = '选择轮次';
$lang->execution->average         = '平均值';
$lang->execution->relatedMember   = '相关成员';
$lang->execution->watermark       = '由禅道导出';
$lang->execution->burnXUnit       = '(日期)';
$lang->execution->burnYUnit       = '(工时)';
$lang->execution->waitTasks       = '待处理';
$lang->execution->viewByUser      = '按用户查看';
$lang->execution->oneProduct      = "阶段只能关联一个{$lang->productCommon}";
$lang->execution->noLinkProduct   = "阶段没有关联{$lang->productCommon}";
$lang->execution->recent          = '近期访问：';
$lang->execution->copyNoExecution = '没有可用的' . $lang->executionCommon . '来复制';
$lang->execution->noTeam          = '暂时没有团队成员';

$lang->execution->start    = "开始";
$lang->execution->activate = "激活";
$lang->execution->putoff   = "延期";
$lang->execution->suspend  = "挂起";
$lang->execution->close    = "关闭";
$lang->execution->export   = "导出";

$lang->execution->endList[7]   = '一星期';
$lang->execution->endList[14]  = '两星期';
$lang->execution->endList[31]  = '一个月';
$lang->execution->endList[62]  = '两个月';
$lang->execution->endList[93]  = '三个月';
$lang->execution->endList[186] = '半年';
$lang->execution->endList[365] = '一年';

$lang->execution->lifeTimeList['short'] = "短期";
$lang->execution->lifeTimeList['long']  = "长期";
$lang->execution->lifeTimeList['ops']   = "运维";

$lang->team = new stdclass();
$lang->team->account    = '用户';
$lang->team->role       = '角色';
$lang->team->join       = '加盟日';
$lang->team->hours      = '可用工时/天';
$lang->team->days       = '可用工日';
$lang->team->totalHours = '总计';

$lang->team->limited            = '受限用户';
$lang->team->limitedList['yes'] = '是';
$lang->team->limitedList['no']  = '否';

$lang->execution->basicInfo = '基本信息';
$lang->execution->otherInfo = '其他信息';

$lang->execution->statusList['wait']      = '未开始';
$lang->execution->statusList['doing']     = '进行中';
$lang->execution->statusList['suspended'] = '已挂起';
$lang->execution->statusList['closed']    = '已关闭';

global $config;
if($config->systemMode == 'new')
{
    $lang->execution->aclList['private'] = "私有（团队成员和项目负责人、干系人可访问）";
    $lang->execution->aclList['open']    = "继承项目访问权限（能访问当前项目，即可访问）";
}
else
{
    $lang->execution->aclList['private'] = "私有（团队成员和{$lang->executionCommon}负责人可访问）";
    $lang->execution->aclList['open']    = "公开（有{$lang->executionCommon}视图权限即可访问）";
}

$lang->execution->storyPoint = '故事点';

$lang->execution->burnByList['left']       = '按剩余工时查看';
$lang->execution->burnByList['estimate']   = "按计划工时查看";
$lang->execution->burnByList['storyPoint'] = '按故事点查看';

$lang->execution->index             = "{$lang->execution->common}主页";
$lang->execution->task              = '任务列表';
$lang->execution->groupTask         = '分组浏览任务';
$lang->execution->story             = "{$lang->SRCommon}列表";
$lang->execution->qa                = '测试仪表盘';
$lang->execution->bug               = 'Bug列表';
$lang->execution->testcase          = '用例列表';
$lang->execution->dynamic           = '动态';
$lang->execution->latestDynamic     = '最新动态';
$lang->execution->build             = '所有版本';
$lang->execution->testtask          = '测试单';
$lang->execution->burn              = '燃尽图';
$lang->execution->computeBurn       = '更新燃尽图';
$lang->execution->burnData          = '燃尽图数据';
$lang->execution->fixFirst          = '修改首天工时';
$lang->execution->team              = '团队成员';
$lang->execution->doc               = '文档列表';
$lang->execution->doclib            = '文档库列表';
$lang->execution->manageProducts    = '关联' . $lang->productCommon;
$lang->execution->linkStory         = "关联{$lang->SRCommon}";
$lang->execution->linkStoryByPlan   = "按照计划关联";
$lang->execution->linkPlan          = "关联计划";
$lang->execution->unlinkStoryTasks  = "未关联{$lang->SRCommon}任务";
$lang->execution->linkedProducts    = '已关联';
$lang->execution->unlinkedProducts  = '未关联';
$lang->execution->view              = "{$lang->execution->common}概况";
$lang->execution->startAction       = "开始{$lang->execution->common}";
$lang->execution->activateAction    = "激活{$lang->execution->common}";
$lang->execution->delayAction       = "延期{$lang->execution->common}";
$lang->execution->suspendAction     = "挂起{$lang->execution->common}";
$lang->execution->closeAction       = "关闭{$lang->execution->common}";
$lang->execution->testtaskAction    = "{$lang->execution->common}测试单";
$lang->execution->teamAction        = "{$lang->execution->common}团队";
$lang->execution->kanbanAction      = "{$lang->execution->common}看板";
$lang->execution->printKanbanAction = "打印看板";
$lang->execution->treeAction        = "{$lang->execution->common}树状图";
$lang->execution->exportAction      = "导出{$lang->execution->common}";
$lang->execution->computeBurnAction = "计算燃尽图";
$lang->execution->create            = "添加{$lang->executionCommon}";
$lang->execution->createExec        = "添加{$lang->execution->common}";
$lang->execution->copyExec          = "复制{$lang->execution->common}";
$lang->execution->copy              = "复制{$lang->executionCommon}";
$lang->execution->delete            = "删除{$lang->executionCommon}";
$lang->execution->deleteAB          = "删除{$lang->execution->common}";
$lang->execution->browse            = "浏览{$lang->execution->common}";
$lang->execution->edit              = "编辑{$lang->executionCommon}";
$lang->execution->editAction        = "编辑{$lang->execution->common}";
$lang->execution->batchEdit         = "编辑";
$lang->execution->batchEditAction   = "批量编辑";
$lang->execution->manageMembers     = '团队管理';
$lang->execution->unlinkMember      = '移除成员';
$lang->execution->unlinkStory       = "移除{$lang->SRCommon}";
$lang->execution->unlinkStoryAB     = "移除{$lang->SRCommon}";
$lang->execution->batchUnlinkStory  = "批量移除{$lang->SRCommon}";
$lang->execution->importTask        = '转入任务';
$lang->execution->importPlanStories = "按计划关联{$lang->SRCommon}";
$lang->execution->importBug         = '导入Bug';
$lang->execution->tree              = '树状图';
$lang->execution->treeTask          = '只看任务';
$lang->execution->treeStory         = "只看{$lang->SRCommon}";
$lang->execution->treeOnlyTask      = '树状图只看任务';
$lang->execution->treeOnlyStory     = "树状图只看{$lang->SRCommon}";
$lang->execution->storyKanban       = "{$lang->SRCommon}看板";
$lang->execution->storySort         = "{$lang->SRCommon}排序";
$lang->execution->importPlanStory   = '创建' . $lang->executionCommon . '成功！\n是否导入计划关联的相关' . $lang->SRCommon . '？';
$lang->execution->iteration         = '版本迭代';
$lang->execution->iterationInfo     = '迭代%s次';
$lang->execution->viewAll           = '查看所有';
$lang->execution->testreport        = '测试报告';

$lang->execution->allTasks     = '所有';
$lang->execution->assignedToMe = '指派给我';
$lang->execution->myInvolved   = '由我参与';

$lang->execution->statusSelects['']             = '更多';
$lang->execution->statusSelects['wait']         = '未开始';
$lang->execution->statusSelects['doing']        = '进行中';
$lang->execution->statusSelects['undone']       = '未完成';
$lang->execution->statusSelects['finishedbyme'] = '我完成';
$lang->execution->statusSelects['done']         = '已完成';
$lang->execution->statusSelects['closed']       = '已关闭';
$lang->execution->statusSelects['cancel']       = '已取消';

$lang->execution->groups['']           = '分组查看';
$lang->execution->groups['story']      = "{$lang->SRCommon}分组";
$lang->execution->groups['status']     = '状态分组';
$lang->execution->groups['pri']        = '优先级分组';
$lang->execution->groups['assignedTo'] = '指派给分组';
$lang->execution->groups['finishedBy'] = '完成者分组';
$lang->execution->groups['closedBy']   = '关闭者分组';
$lang->execution->groups['type']       = '类型分组';

$lang->execution->groupFilter['story']['all']         = '所有';
$lang->execution->groupFilter['story']['linked']      = "已关联{$lang->SRCommon}的任务";
$lang->execution->groupFilter['pri']['all']           = '所有';
$lang->execution->groupFilter['pri']['noset']         = '未设置';
$lang->execution->groupFilter['assignedTo']['undone'] = '未完成';
$lang->execution->groupFilter['assignedTo']['all']    = '所有';

$lang->execution->byQuery = '搜索';

$lang->execution->allExecution      = "所有{$lang->executionCommon}";
$lang->execution->aboveAllProduct   = "以上所有{$lang->productCommon}";
$lang->execution->aboveAllExecution = "以上所有{$lang->executionCommon}";

$lang->execution->linkStoryByPlanTips = "此操作会将所选计划下面的{$lang->SRCommon}全部关联到此{$lang->executionCommon}中";
$lang->execution->selectExecution     = "请选择{$lang->execution->common}";
$lang->execution->beginAndEnd         = '起止时间';
$lang->execution->lblStats            = '工时统计';
$lang->execution->stats               = '可用工时 <strong>%s</strong> 工时，总共预计 <strong>%s</strong> 工时，已经消耗 <strong>%s</strong> 工时，预计剩余 <strong>%s</strong> 工时';
$lang->execution->taskSummary         = "本页共 <strong>%s</strong> 个任务，未开始 <strong>%s</strong>，进行中 <strong>%s</strong>，总预计 <strong>%s</strong> 工时，已消耗 <strong>%s</strong> 工时，剩余 <strong>%s</strong> 工时。";
$lang->execution->pageSummary         = "本页共 <strong>%total%</strong> 个任务，未开始 <strong>%wait%</strong>，进行中 <strong>%doing%</strong>，总预计 <strong>%estimate%</strong> 工时，已消耗 <strong>%consumed%</strong> 工时，剩余 <strong>%left%</strong> 工时。";
$lang->execution->checkedSummary      = "选中 <strong>%total%</strong> 个任务，未开始 <strong>%wait%</strong>，进行中 <strong>%doing%</strong>，总预计 <strong>%estimate%</strong> 工时，已消耗 <strong>%consumed%</strong> 工时，剩余 <strong>%left%</strong> 工时。";
$lang->execution->memberHoursAB       = "<div>%s有 <strong>%s</strong> 工时</div>";
$lang->execution->memberHours         = '<div class="table-col"><div class="clearfix segments"><div class="segment"><div class="segment-title">%s可用工时</div><div class="segment-value">%s</div></div></div></div>';
$lang->execution->countSummary        = '<div class="table-col"><div class="clearfix segments"><div class="segment"><div class="segment-title">总任务</div><div class="segment-value">%s</div></div><div class="segment"><div class="segment-title">进行中</div><div class="segment-value"><span class="label label-dot label-primary"></span> %s</div></div><div class="segment"><div class="segment-title">未开始</div><div class="segment-value"><span class="label label-dot label-primary muted"></span> %s</div></div></div></div>';
$lang->execution->timeSummary         = '<div class="table-col"><div class="clearfix segments"><div class="segment"><div class="segment-title">总预计</div><div class="segment-value">%s</div></div><div class="segment"><div class="segment-title">已消耗</div><div class="segment-value text-red">%s</div></div><div class="segment"><div class="segment-title">剩余</div><div class="segment-value">%s</div></div></div></div>';
$lang->execution->groupSummaryAB      = "<div>总任务 <strong>%s : </strong><span class='text-muted'>未开始</span> %s &nbsp; <span class='text-muted'>进行中</span> %s</div><div>总预计 <strong>%s : </strong><span class='text-muted'>已消耗</span> %s &nbsp; <span class='text-muted'>剩余</span> %s</div>";
$lang->execution->wbs                 = "分解任务";
$lang->execution->batchWBS            = "批量分解";
$lang->execution->howToUpdateBurn     = "<a href='https://api.zentao.net/goto.php?item=burndown&lang=zh-cn' target='_blank' title='如何更新燃尽图？' class='btn btn-link'>帮助 <i class='icon icon-help'></i></a>";
$lang->execution->whyNoStories        = "看起来没有{$lang->SRCommon}可以关联。请检查下{$lang->executionCommon}关联的{$lang->productCommon}中有没有{$lang->SRCommon}，而且要确保它们已经审核通过。";
$lang->execution->productStories      = "{$lang->executionCommon}关联的{$lang->SRCommon}是{$lang->productCommon}{$lang->SRCommon}的子集，并且只有评审通过的{$lang->SRCommon}才能关联。请<a href='%s'>关联{$lang->SRCommon}</a>。";
$lang->execution->haveDraft           = "有%s条草稿状态的{$lang->SRCommon}无法关联到该{$lang->executionCommon}";
$lang->execution->doneExecutions      = '已结束';
$lang->execution->selectDept          = '选择部门';
$lang->execution->selectDeptTitle     = '选择一个部门的成员';
$lang->execution->copyTeam            = '复制团队';
$lang->execution->copyFromTeam        = "复制自{$lang->executionCommon}团队： <strong>%s</strong>";
$lang->execution->noMatched           = "找不到包含'%s'的$lang->executionCommon";
$lang->execution->copyTitle           = "请选择一个{$lang->executionCommon}来复制";
$lang->execution->copyTeamTitle       = "选择一个{$lang->executionCommon}团队来复制";
$lang->execution->copyNoExecution     = "没有可用的{$lang->executionCommon}来复制";
$lang->execution->copyFromExecution   = "复制自{$lang->executionCommon} <strong>%s</strong>";
$lang->execution->cancelCopy          = '取消复制';
$lang->execution->byPeriod            = '按时间段';
$lang->execution->byUser              = '按用户';
$lang->execution->noExecution         = "暂时没有{$lang->executionCommon}。";
$lang->execution->noExecutions        = "暂时没有{$lang->execution->common}。";
$lang->execution->noMembers           = '暂时没有团队成员。';
$lang->execution->workloadTotal       = "工作量占比累计不应当超过100, 当前产品下的工作量之和为%s";
// $lang->execution->linkProjectStoryTip = "(关联{$lang->SRCommon}来源于项目下所关联的{$lang->SRCommon})";
$lang->execution->linkAllStoryTip     = "(项目下还未关联{$lang->SRCommon}，可直接关联该{$lang->execution->common}所关联产品的{$lang->SRCommon})";

$lang->execution->confirmDelete             = "您确定删除{$lang->executionCommon}[%s]吗？";
$lang->execution->confirmUnlinkMember       = "您确定从该{$lang->executionCommon}中移除该用户吗？";
$lang->execution->confirmUnlinkStory        = "您确定从该{$lang->executionCommon}中移除该{$lang->SRCommon}吗？";
$lang->execution->confirmUnlinkExecutionStory = "您确定从该项目中移除该{$lang->SRCommon}吗？";
$lang->execution->notAllowedUnlinkStory     = "该{$lang->SRCommon}已经与项目下{$lang->executionCommon}相关联，请从{$lang->executionCommon}中移除后再操作。";
$lang->execution->notAllowRemoveProducts    = "该{$lang->productCommon}中的{$lang->SRCommon}已与该{$lang->executionCommon}进行了关联，请取消关联后再操作。";
$lang->execution->errorNoLinkedProducts     = "该{$lang->executionCommon}没有关联的{$lang->productCommon}，系统将转到{$lang->productCommon}关联页面";
$lang->execution->errorSameProducts         = "{$lang->executionCommon}不能关联多个相同的{$lang->productCommon}。";
$lang->execution->errorBegin                = "{$lang->executionCommon}的开始时间不能小于所属项目的开始时间%s。";
$lang->execution->errorEnd                  = "{$lang->executionCommon}的结束时间不能大于所属项目的结束时间%s。";
$lang->execution->accessDenied              = "您无权访问该{$lang->executionCommon}！";
$lang->execution->tips                      = '提示';
$lang->execution->afterInfo                 = "{$lang->executionCommon}添加成功，您现在可以进行以下操作：";
$lang->execution->setTeam                   = '设置团队';
$lang->execution->linkStory                 = "关联{$lang->SRCommon}";
$lang->execution->createTask                = '创建任务';
$lang->execution->goback                    = "返回任务列表";
$lang->execution->noweekend                 = '去除周末';
$lang->execution->withweekend               = '显示周末';
$lang->execution->interval                  = '间隔';
$lang->execution->fixFirstWithLeft          = '修改剩余工时';
$lang->execution->unfinishedExecution         = "该{$lang->executionCommon}下还有";
$lang->execution->unfinishedTask            = "[%s]个未完成的任务，";
$lang->execution->unresolvedBug             = "[%s]个未解决的bug，";
$lang->execution->projectNotEmpty           = '所属项目不能为空。';

$lang->execution->charts = new stdclass();
$lang->execution->charts->burn = new stdclass();
$lang->execution->charts->burn->graph = new stdclass();
$lang->execution->charts->burn->graph->caption      = "燃尽图";
$lang->execution->charts->burn->graph->xAxisName    = "日期";
$lang->execution->charts->burn->graph->yAxisName    = "HOUR";
$lang->execution->charts->burn->graph->baseFontSize = 12;
$lang->execution->charts->burn->graph->formatNumber = 0;
$lang->execution->charts->burn->graph->animation    = 0;
$lang->execution->charts->burn->graph->rotateNames  = 1;
$lang->execution->charts->burn->graph->showValues   = 0;
$lang->execution->charts->burn->graph->reference    = '参考';
$lang->execution->charts->burn->graph->actuality    = '实际';

$lang->execution->placeholder = new stdclass();
$lang->execution->placeholder->code      = '团队内部的简称';
$lang->execution->placeholder->totalLeft = "{$lang->executionCommon}开始时的总预计工时";

$lang->execution->selectGroup = new stdclass();
$lang->execution->selectGroup->done = '(已结束)';

$lang->execution->orderList['order_asc']  = "{$lang->SRCommon}排序正序";
$lang->execution->orderList['order_desc'] = "{$lang->SRCommon}排序倒序";
$lang->execution->orderList['pri_asc']    = "{$lang->SRCommon}优先级正序";
$lang->execution->orderList['pri_desc']   = "{$lang->SRCommon}优先级倒序";
$lang->execution->orderList['stage_asc']  = "{$lang->SRCommon}阶段正序";
$lang->execution->orderList['stage_desc'] = "{$lang->SRCommon}阶段倒序";

$lang->execution->kanban        = "看板";
$lang->execution->kanbanSetting = "看板设置";
$lang->execution->resetKanban   = "恢复默认";
$lang->execution->printKanban   = "打印看板";
$lang->execution->bugList       = "Bug列表";

$lang->execution->kanbanHideCols   = '看板隐藏已关闭、已取消列';
$lang->execution->kanbanShowOption = '显示折叠信息';
$lang->execution->kanbanColsColor  = '看板列自定义颜色';

$lang->kanbanSetting = new stdclass();
$lang->kanbanSetting->noticeReset     = '是否恢复看板默认设置？';
$lang->kanbanSetting->optionList['0'] = '隐藏';
$lang->kanbanSetting->optionList['1'] = '显示';

$lang->printKanban = new stdclass();
$lang->printKanban->common  = '看板打印';
$lang->printKanban->content = '内容';
$lang->printKanban->print   = '打印';

$lang->printKanban->taskStatus = '状态';

$lang->printKanban->typeList['all']       = '全部';
$lang->printKanban->typeList['increment'] = '增量';

$lang->execution->typeList['']       = '';
$lang->execution->typeList['stage']  = '阶段';
$lang->execution->typeList['sprint'] = $lang->executionCommon;

$lang->execution->featureBar['task']['all']          = $lang->execution->allTasks;
$lang->execution->featureBar['task']['unclosed']     = $lang->execution->unclosed;
$lang->execution->featureBar['task']['assignedtome'] = $lang->execution->assignedToMe;
$lang->execution->featureBar['task']['myinvolved']   = $lang->execution->myInvolved;
$lang->execution->featureBar['task']['delayed']      = '已延期';
$lang->execution->featureBar['task']['needconfirm']  = "{$lang->SRCommon}变更";
$lang->execution->featureBar['task']['status']       = $lang->execution->statusSelects[''];

$lang->execution->featureBar['all']['all']       = $lang->execution->all;
$lang->execution->featureBar['all']['undone']    = $lang->execution->undone;
$lang->execution->featureBar['all']['wait']      = $lang->execution->statusList['wait'];
$lang->execution->featureBar['all']['doing']     = $lang->execution->statusList['doing'];
$lang->execution->featureBar['all']['suspended'] = $lang->execution->statusList['suspended'];
$lang->execution->featureBar['all']['closed']    = $lang->execution->statusList['closed'];

$lang->execution->treeLevel = array();
$lang->execution->treeLevel['all']   = '全部展开';
$lang->execution->treeLevel['root']  = '全部折叠';
$lang->execution->treeLevel['task']  = '全部显示';
$lang->execution->treeLevel['story'] = "只看{$lang->SRCommon}";

$lang->execution->action = new stdclass();
$lang->execution->action->opened  = '$date, 由 <strong>$actor</strong> 创建。$extra' . "\n";
$lang->execution->action->managed = '$date, 由 <strong>$actor</strong> 维护。$extra' . "\n";
$lang->execution->action->edited  = '$date, 由 <strong>$actor</strong> 编辑。$extra' . "\n";
$lang->execution->action->extra   = '相关产品为 %s。';
/* extension */
$lang->extension->common           = '插件管理';
$lang->extension->browse           = '浏览插件';
$lang->extension->install          = '安装插件';
$lang->extension->installAuto      = '自动安装';
$lang->extension->installForce     = '强制安装';
$lang->extension->uninstall        = '卸载';
$lang->extension->uninstallAction  = '卸载插件';
$lang->extension->activate         = '激活';
$lang->extension->activateAction   = '激活插件';
$lang->extension->deactivate       = '禁用';
$lang->extension->deactivateAction = '禁用插件';
$lang->extension->obtain           = '获得插件';
$lang->extension->view             = '详情';
$lang->extension->downloadAB       = '下载';
$lang->extension->upload           = '本地安装';
$lang->extension->erase            = '清除';
$lang->extension->eraseAction      = '清除插件';
$lang->extension->upgrade          = '升级插件';
$lang->extension->agreeLicense     = '我同意该授权';

$lang->extension->browseAction = '插件列表';

$lang->extension->structure       = '目录结构';
$lang->extension->structureAction = '目录结构';
$lang->extension->installed       = '已安装';
$lang->extension->deactivated     = '被禁用';
$lang->extension->available       = '已下载';

$lang->extension->name             = '插件名称';
$lang->extension->code             = '代号';
$lang->extension->desc             = '描述';
$lang->extension->type             = '类型';
$lang->extension->dirs             = '安装目录';
$lang->extension->files            = '安装文件';
$lang->extension->status           = '状态';
$lang->extension->version          = '版本';
$lang->extension->latest           = '<small>最新版本<strong><a href="%s" target="_blank" class="extension">%s</a></strong>，兼容禅道<a href="https://api.zentao.net/goto.php?item=latest" target="_blank" class="alert-link"><strong>%s</strong></a></small>';
$lang->extension->author           = '作者';
$lang->extension->license          = '授权';
$lang->extension->site             = '官网';
$lang->extension->downloads        = '下载量';
$lang->extension->compatible       = '兼容性';
$lang->extension->grade            = '评分';
$lang->extension->depends          = '依赖';
$lang->extension->expiredDate      = '到期日期';
$lang->extension->zentaoCompatible = '适用版本';
$lang->extension->installedTime    = '安装时间';
$lang->extension->life             = '终身';

$lang->extension->publicList[0] = '手工下载';
$lang->extension->publicList[1] = '直接下载';

$lang->extension->compatibleList[0] = '未知';
$lang->extension->compatibleList[1] = '兼容';

$lang->extension->obtainOfficial[0] = '第三方';
$lang->extension->obtainOfficial[1] = '官方';

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
$lang->extension->errorGetExtensions           = '从www.zentao.net获得插件失败。可能是因为网络方面的原因，您可以到 <a href="https://www.zentao.net/extension/" target="_blank" class="alert-link">www.zentao.net</a> 手工下载插件，然后上传安装。';
$lang->extension->errorDownloadPathNotFound    = '插件下载存储路径<strong>%s</strong>不存在。<br />linux下面请执行命令：<strong>mkdir -p %s</strong>来修正。';
$lang->extension->errorDownloadPathNotWritable = '插件下载存储路径<strong>%s</strong>不可写。<br />linux下面请执行命令：<strong>sudo chmod 777 %s</strong>来修正。';
$lang->extension->errorPackageFileExists       = '下载路径已经有一个名为的<strong>%s</strong>附件。<h5>重新%s，<a href="%s" class="alert-link">请点击此链接</a></h5>';
$lang->extension->errorDownloadFailed          = '下载失败，请重新下载。如果多次重试还不行，请尝试手工下载，然后通过上传功能上传。';
$lang->extension->errorMd5Checking             = '下载文件不完整，请重新下载。如果多次重试还不行，请尝试手工下载，然后通过上传功能上传。';
$lang->extension->errorCheckIncompatible       = '该插件与禅道版本不兼容，%s后可能无法使用。<h5>您可以选择 <a href="%s" class="btn btn-sm">强制%s</a> 或者 <a href="#" onclick=parent.location.href="%s" class="btn btn-sm">取消</a></h5>';
$lang->extension->errorFileConflicted          = '有以下文件冲突：<br />%s <h5>您可以选择 <a href="%s" class="btn btn-sm">覆盖</a> 或者 <a href="#" onclick=parent.location.href="%s" class="btn btn-sm">取消</a></h5>';
$lang->extension->errorPackageNotFound         = '包文件 <strong>%s </strong>没有找到，可能是因为自动下载失败。您可以尝试再次下载。';
$lang->extension->errorTargetPathNotWritable   = '目标路径 <strong>%s </strong>不可写。';
$lang->extension->errorTargetPathNotExists     = '目标路径 <strong>%s </strong>不存在。';
$lang->extension->errorInstallDB               = '执行数据库语句失败。错误信息如下：%s';
$lang->extension->errorConflicts               = '与插件“%s”冲突！';
$lang->extension->errorDepends                 = '以下依赖插件没有安装或版本不正确：<br /><br /> %s';
$lang->extension->errorIncompatible            = '该插件与您的禅道版本不兼容';
$lang->extension->errorUninstallDepends        = '插件“%s”依赖该插件，不能卸载';
$lang->extension->errorExtracted               = '包文件 %s 解压缩失败，可能不是一个有效的zip文件。错误信息如下：<br />%s';
$lang->extension->errorFileNotEmpty            = '上传文件不能为空';
/* file */
$lang->file = new stdclass();
$lang->file->common        = '附件';
$lang->file->uploadImages  = '多图上传';
$lang->file->download      = '下载附件';
$lang->file->uploadDate    = '上传时间：';
$lang->file->edit          = '重命名';
$lang->file->inputFileName = '请输入附件名称';
$lang->file->delete        = '删除附件';
$lang->file->label         = '标题：';
$lang->file->maxUploadSize = "（不超过%s）";
$lang->file->applyTemplate = "应用模板";
$lang->file->tplTitle      = "模板名称";
$lang->file->tplTitleAB    = "模板名称";
$lang->file->setPublic     = "设置公共模板";
$lang->file->exportFields  = "要导出字段";
$lang->file->exportRange   = "要导出的数据";
$lang->file->defaultTPL    = "默认模板";
$lang->file->setExportTPL  = "设置";
$lang->file->preview       = "预览";
$lang->file->addFile       = '添加文件';
$lang->file->beginUpload   = '开始上传';
$lang->file->uploadSuccess = '上传成功';

$lang->file->pathname  = '路径';
$lang->file->title     = '标题';
$lang->file->fileName  = '文件名';
$lang->file->untitled  = '未命名';
$lang->file->extension = '文件类型';
$lang->file->size      = '大小';
$lang->file->encoding  = '编码';
$lang->file->addedBy   = '由谁添加';
$lang->file->addedDate = '添加时间';
$lang->file->downloads = '下载次数';
$lang->file->extra     = '备注';

$lang->file->dragFile            = '请拖拽文件到此处';
$lang->file->childTaskTips       = "任务名称前有'>'标记的为子任务";
$lang->file->uploadImagesExplain = '注：请上传"jpg, jpeg, gif, png"格式的图片，程序会以文件名作为标题，以图片作为内容。';
$lang->file->saveAndNext         = '保存并跳转下一页';
$lang->file->importPager         = '共有<strong>%s</strong>条记录，当前第<strong>%s</strong>页，共有<strong>%s</strong>页';
$lang->file->importSummary       = "本次导入共有<strong id='allCount'>%s</strong>条记录，每页导入%s条，需要导入<strong id='times'>%s</strong>次";

$lang->file->errorNotExists   = "<span class='text-red'>文件夹 '%s' 不存在</span>";
$lang->file->errorCanNotWrite = "<span class='text-red'>文件夹 '%s' 不可写,请改变文件夹的权限。在linux中输入指令: <span class='code'>sudo chmod -R 777 %s</span></span>";
$lang->file->confirmDelete    = " 您确定删除该附件吗？";
$lang->file->errorFileSize    = " 文件大小已经超过%s，可能不能成功上传！";
$lang->file->errorFileUpload  = " 文件上传失败，文件大小可能超出限制";
$lang->file->errorFileFormate = " 文件上传失败，文件格式不在规定范围内";
$lang->file->errorFileMove    = " 文件上传失败，移动文件时出错";
$lang->file->dangerFile       = " 您选择的文件存在安全风险，系统将不予上传。";
$lang->file->errorSuffix      = '压缩包格式错误，只能上传zip压缩包！';
$lang->file->errorExtract     = '解压缩失败！可能文件已经损坏，或压缩包里含有非法上传文件。';
$lang->file->fileNotFound     = '未找到该文件，可能物理文件已被删除！';
$lang->file->fileContentEmpty = '上传文件内容为空，请检查后重新上传。';
/* git */
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
$lang->group->manageView         = '视野维护';
$lang->group->managePriv         = '权限维护';
$lang->group->managePrivByGroup  = '权限维护';
$lang->group->managePrivByModule = '按模块分配权限';
$lang->group->byModuleTips       = '<span class="tips">（可以按住Shift或者Ctrl键进行多选）</span>';
$lang->group->manageMember       = '成员维护';
$lang->group->manageProjectAdmin = '维护项目管理员';
$lang->group->confirmDelete      = '您确定删除该用户分组吗？';
$lang->group->successSaved       = '成功保存';
$lang->group->errorNotSaved      = '没有保存，请确认选择了权限数据。';
$lang->group->viewList           = '可访问视图';
$lang->group->manageProject      = '可管理项目';
$lang->group->programList        = '可访问项目集';
$lang->group->productList        = '可访问' . $lang->productCommon;
$lang->group->projectList        = '可访问项目';
$lang->group->dynamic            = '可查看动态';
$lang->group->noticeVisit        = '空代表没有访问限制';
$lang->group->noneProgram        = "暂时没有项目集";
$lang->group->noneProduct        = "暂时没有{$lang->productCommon}";
$lang->group->noneProject        = "暂时没有{$lang->executionCommon}";

$lang->group->id       = '编号';
$lang->group->name     = '分组名称';
$lang->group->desc     = '分组描述';
$lang->group->role     = '角色';
$lang->group->acl      = '权限';
$lang->group->users    = '用户列表';
$lang->group->module   = '模块';
$lang->group->method   = '方法';
$lang->group->priv     = '权限';
$lang->group->option   = '选项';
$lang->group->inside   = '组内用户';
$lang->group->outside  = '组外用户';
$lang->group->limited  = '受限用户组';
$lang->group->other    = '其他模块';
$lang->group->all      = '所有权限';

$lang->group->copyOptions['copyPriv'] = '复制权限';
$lang->group->copyOptions['copyUser'] = '复制用户';

$lang->group->versions['']          = '修改历史';
$lang->group->versions['15_0_rc1']  = '禅道15.0.rc1';
$lang->group->versions['12_5']      = '禅道12.5';
$lang->group->versions['12_3']      = '禅道12.3';
$lang->group->versions['11_6_2']    = '禅道11.6.2';
$lang->group->versions['10_6']      = '禅道10.6';
$lang->group->versions['10_1']      = '禅道10.1';
$lang->group->versions['10_0_alpha']= '禅道10.0.alpha';
$lang->group->versions['9_8']       = '禅道9.8';
$lang->group->versions['9_6']       = '禅道9.6';
$lang->group->versions['9_5']       = '禅道9.5';
$lang->group->versions['9_2']       = '禅道9.2';
$lang->group->versions['9_1']       = '禅道9.1';
$lang->group->versions['9_0']       = '禅道9.0';
$lang->group->versions['8_4']       = '禅道8.4';
$lang->group->versions['8_3']       = '禅道8.3';
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
$lang->index->common      = '首页';
$lang->index->index       = '首页';
$lang->index->pleaseInput = '请输入';
$lang->index->search      = '搜索';

$lang->index->app = new stdClass();
$lang->index->app->open   = '打开';
$lang->index->app->reload = '刷新';
$lang->index->app->close  = '关闭';

$lang->index->upgradeVersion = '可升级版本';
$lang->index->upgradeNow     = '现在升级';
$lang->index->upgrade        = '升级';
$lang->index->log            = '查看版本更新日志 >';
$lang->index->detailed       = '详情';
$lang->index->website        = '请访问官网';
/* install */
$lang->install = new stdclass();

$lang->install->common = '安装';
$lang->install->next   = '下一步';
$lang->install->pre    = '返回';
$lang->install->reload = '刷新';
$lang->install->error  = '错误 ';

$lang->install->officeDomain = 'https://www.zentao.net';

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
禅道项目管理软件由<strong><a href='https://www.cnezsoft.com' target='_blank' class='text-danger'>青岛易软天创网络科技有限公司</a>开发</strong>。
官方网站：<a href='https://www.zentao.net' target='_blank'>https://www.zentao.net</a>
技术支持：<a href='https://www.zentao.net/ask/' target='_blank'>https://www.zentao.net/ask/</a>
新浪微博：<a href='https://weibo.com/easysoft' target='_blank'>https://weibo.com/easysoft</a>



您现在正在安装的版本是 <strong class='text-danger'>%s</strong>。
EOT;

$lang->install->newReleased = "<strong class='text-danger'>提示</strong>：官网网站已有最新版本<strong class='text-danger'>%s</strong>, 发布日期于 %s。";
$lang->install->or          = '或者';
$lang->install->checking    = '系统检查';
$lang->install->ok          = '检查通过(√)';
$lang->install->fail        = '检查失败(×)';
$lang->install->loaded      = '已加载';
$lang->install->unloaded    = '未加载';
$lang->install->exists      = '目录存在 ';
$lang->install->notExists   = '目录不存在 ';
$lang->install->writable    = '目录可写 ';
$lang->install->notWritable = '目录不可写 ';
$lang->install->phpINI      = 'PHP配置文件';
$lang->install->checkItem   = '检查项';
$lang->install->current     = '当前配置';
$lang->install->result      = '检查结果';
$lang->install->action      = '如何修改';

$lang->install->phpVersion = 'PHP版本';
$lang->install->phpFail    = 'PHP版本必须大于5.2.0';

$lang->install->pdo          = 'PDO扩展';
$lang->install->pdoFail      = '修改PHP配置文件，加载PDO扩展。';
$lang->install->pdoMySQL     = 'PDO_MySQL扩展';
$lang->install->pdoMySQLFail = '修改PHP配置文件，加载pdo_mysql扩展。';
$lang->install->json         = 'JSON扩展';
$lang->install->jsonFail     = '修改PHP配置文件，加载JSON扩展。';
$lang->install->openssl      = 'OPENSSL扩展';
$lang->install->opensslFail  = '修改PHP配置文件，加载OPENSSL扩展。';
$lang->install->mbstring     = 'MBSTRING扩展';
$lang->install->mbstringFail = '修改PHP配置文件，加载MBSTRING扩展。';
$lang->install->zlib         = 'ZLIB扩展';
$lang->install->zlibFail     = '修改PHP配置文件，加载ZLIB扩展。';
$lang->install->curl         = 'CURL扩展';
$lang->install->curlFail     = '修改PHP配置文件，加载CURL扩展。';
$lang->install->filter       = 'FILTER扩展';
$lang->install->filterFail   = '修改PHP配置文件，加载FILTER扩展。';
$lang->install->gd           = 'GD扩展';
$lang->install->gdFail       = '修改PHP配置文件，加载GD扩展。';
$lang->install->iconv        = 'ICONV扩展';
$lang->install->iconvFail    = '修改PHP配置文件，加载ICONV扩展。';
$lang->install->tmpRoot      = '临时文件目录';
$lang->install->dataRoot     = '上传文件目录';
$lang->install->session      = 'Session存储目录';
$lang->install->sessionFail  = '修改PHP配置文件，设置session.save_path。<br />如果使用宝塔面板，可以到宝塔Web面板中“软件商店”，打开PHP设置，到“Session配置”项，选择files，点击保存。老版本需要修改php配置文件。';
$lang->install->mkdirWin     = '<p>需要创建目录%s。命令为：<br /> mkdir %s</p>';
$lang->install->chmodWin     = '需要修改目录 "%s" 的权限。';
$lang->install->mkdirLinux   = '<p>需要创建目录%s。<br /> 命令为：<br /> mkdir -p %s</p>';
$lang->install->chmodLinux   = '需要修改目录 "%s" 的权限。<br />命令为：<br />chmod o=rwx -R %s';

$lang->install->timezone       = '时区设置';
$lang->install->defaultLang    = '默认语言';
$lang->install->dbHost         = '数据库服务器';
$lang->install->dbHostNote     = '如果127.0.0.1无法访问，尝试使用localhost';
$lang->install->dbPort         = '服务器端口';
$lang->install->dbEncoding     = '数据库编码';
$lang->install->dbUser         = '数据库用户名';
$lang->install->dbPassword     = '数据库密码';
$lang->install->dbName         = 'PMS使用的库';
$lang->install->dbPrefix       = '建表使用的前缀';
$lang->install->clearDB        = '清空现有数据';
$lang->install->importDemoData = '导入demo数据';
$lang->install->working        = '工作方式';

$lang->install->requestTypes['GET']       = '普通方式';
$lang->install->requestTypes['PATH_INFO'] = '静态友好方式';

$lang->install->workingList['full']      = '完整研发管理工具';

$lang->install->errorConnectDB      = '数据库连接失败 ';
$lang->install->errorDBName         = '数据库名不能含有 “.” ';
$lang->install->errorCreateDB       = '数据库创建失败';
$lang->install->errorTableExists    = '数据表已经存在，您之前应该有安装过禅道，继续安装请返回前页并选择清空数据';
$lang->install->errorCreateTable    = '创建表失败';
$lang->install->errorImportDemoData = '导入demo数据失败';

$lang->install->setConfig          = '生成配置文件';
$lang->install->key                = '配置项';
$lang->install->value              = '值';
$lang->install->saveConfig         = '保存配置文件';
$lang->install->save2File          = '<div class="alert alert-warning">拷贝上面文本框中的内容，将其保存到 "<strong> %s </strong>"中。您以后还可继续修改此配置文件。</div>';
$lang->install->saved2File         = '配置信息已经成功保存到" <strong>%s</strong> "中。您后面还可继续修改此文件。';
$lang->install->errorNotSaveConfig = '还没有保存配置文件';

$lang->install->getPriv  = '设置帐号';
$lang->install->company  = '公司名称';
$lang->install->account  = '管理员帐号';
$lang->install->password = '管理员密码';
$lang->install->errorEmptyPassword = '密码不能为空';

$lang->install->groupList['ADMIN']['name']   = '管理员';
$lang->install->groupList['ADMIN']['desc']   = '系统管理员';
$lang->install->groupList['DEV']['name']     = '研发';
$lang->install->groupList['DEV']['desc']     = '研发人员';
$lang->install->groupList['QA']['name']      = '测试';
$lang->install->groupList['QA']['desc']      = '测试人员';
$lang->install->groupList['PM']['name']      = '项目经理';
$lang->install->groupList['PM']['desc']      = '项目经理';
$lang->install->groupList['PO']['name']      = '产品经理';
$lang->install->groupList['PO']['desc']      = '产品经理';
$lang->install->groupList['TD']['name']      = '研发主管';
$lang->install->groupList['TD']['desc']      = '研发主管';
$lang->install->groupList['PD']['name']      = '产品主管';
$lang->install->groupList['PD']['desc']      = '产品主管';
$lang->install->groupList['QD']['name']      = '测试主管';
$lang->install->groupList['QD']['desc']      = '测试主管';
$lang->install->groupList['TOP']['name']     = '高层管理';
$lang->install->groupList['TOP']['desc']     = '高层管理';
$lang->install->groupList['OTHERS']['name']  = '其他';
$lang->install->groupList['OTHERS']['desc']  = '其他';
$lang->install->groupList['LIMITED']['name'] = '受限用户';
$lang->install->groupList['LIMITED']['desc'] = '受限用户分组(只能编辑与自己相关的内容)';

$lang->install->cronList[''] = '监控定时任务';
$lang->install->cronList['moduleName=execution&methodName=computeBurn'] = '更新燃尽图';
$lang->install->cronList['moduleName=report&methodName=remind']         = '每日任务提醒';
$lang->install->cronList['moduleName=svn&methodName=run']               = '同步SVN';
$lang->install->cronList['moduleName=git&methodName=run']               = '同步GIT';
$lang->install->cronList['moduleName=backup&methodName=backup']         = '备份数据和附件';
$lang->install->cronList['moduleName=mail&methodName=asyncSend']        = '异步发信';
$lang->install->cronList['moduleName=webhook&methodName=asyncSend']     = '异步发送Webhook';
$lang->install->cronList['moduleName=admin&methodName=deleteLog']       = '删除过期日志';
$lang->install->cronList['moduleName=todo&methodName=createCycle']      = '生成周期性待办';
$lang->install->cronList['moduleName=ci&methodName=initQueue']          = '创建周期性任务';
$lang->install->cronList['moduleName=ci&methodName=checkCompileStatus'] = '同步Jenkins任务状态';
$lang->install->cronList['moduleName=ci&methodName=exec']               = '执行Jenkins任务';

$lang->install->success  = "安装成功";
$lang->install->login    = '登录禅道管理系统';
$lang->install->register = '禅道社区注册';

$lang->install->joinZentao = <<<EOT
<p>您已经成功安装禅道管理系统%s，<strong class='text-danger'>请及时删除install.php</strong>。</p><p>友情提示：为了您及时获得禅道的最新动态，请在禅道社区(<a href='https://www.zentao.net' class='alert-link' target='_blank'>www.zentao.net</a>)进行登记。</p>
EOT;

$lang->install->product = array('chanzhi', 'zdoo', 'xuanxuan', 'ydisk', 'meshiot');

$lang->install->promotion = "为您推荐易软天创旗下其他产品：";

$lang->install->chanzhi       = new stdclass();
$lang->install->chanzhi->name = '蝉知门户';
$lang->install->chanzhi->logo = 'images/main/chanzhi.ico';
$lang->install->chanzhi->url  = 'https://www.zsite.com';
$lang->install->chanzhi->desc = <<<EOD
<ul>
  <li>专业的企业营销门户系统</li>
  <li>功能丰富，操作简洁方便</li>
  <li>大量细节针对SEO优化</li>
  <li>开源免费，不限商用！</li>
</ul>
EOD;

$lang->install->zdoo = new stdclass();
$lang->install->zdoo->name = 'ZDOO协同';
$lang->install->zdoo->logo = 'images/main/zdoo.ico';
$lang->install->zdoo->url  = 'https://www.zdoo.com';
$lang->install->zdoo->desc = <<<EOD
<ul>
  <li>客户管理，订单跟踪</li>
  <li>项目任务，公告文档</li>
  <li>收入支出，出帐入账</li>
  <li>论坛博客，动态消息</li>
</ul>
EOD;

$lang->install->xuanxuan = new stdclass();
$lang->install->xuanxuan->name = '喧喧聊天';
$lang->install->xuanxuan->logo = 'images/main/xuanxuan.ico';
$lang->install->xuanxuan->url  = 'https://www.xuanim.com';
$lang->install->xuanxuan->desc = <<<EOD
<ul>
  <li>轻：轻量级架构，容易部署</li>
  <li>跨：真正完整跨平台解决方案</li>
  <li>美：基于Html5开发，界面美观</li>
  <li>开：开放架构，方便二开集成</li>
</ul>
EOD;

$lang->install->ydisk = new stdclass();
$lang->install->ydisk->name = '悦库网盘';
$lang->install->ydisk->logo = 'images/main/ydisk.ico';
$lang->install->ydisk->url  = 'http://www.ydisk.cn';
$lang->install->ydisk->desc = <<<EOD
<ul>
  <li>绝对私有：只部署在自己的机器上</li>
  <li>海量存储：只取决于您的硬盘大小</li>
  <li>极限传输：只取决于您的网络带宽</li>
  <li>极度安全：十二种权限组合</li>
</ul>
EOD;

$lang->install->meshiot = new stdclass();
$lang->install->meshiot->name = '易天物联';
$lang->install->meshiot->logo = 'images/main/meshiot.ico';
$lang->install->meshiot->url  = 'https://www.meshiot.com';
$lang->install->meshiot->desc = <<<EOD
<ul>
  <li>超性能网关，一个可管6万个设备</li>
  <li>自研通讯协议，2.5公里穿墙无障碍</li>
  <li>上百款传感器控制器，独创调光系统</li>
  <li>可配电池，对既有场地无任何要求</li>
</ul>
EOD;
/* jenkins */
$lang->jenkins->common        = 'Jenkins';
$lang->jenkins->browse        = '浏览Jenkins';
$lang->jenkins->create        = '添加Jenkins';
$lang->jenkins->edit          = '编辑Jenkins';
$lang->jenkins->delete        = '删除';
$lang->jenkins->confirmDelete = '确认删除该Jenkins吗？';

$lang->jenkins->browseAction = 'Jenkins列表';
$lang->jenkins->deleteAction = '删除Jenkins';

$lang->jenkins->id       = 'ID';
$lang->jenkins->name     = '名称';
$lang->jenkins->url      = '服务地址';
$lang->jenkins->token    = 'Token';
$lang->jenkins->account  = '用户名';
$lang->jenkins->password = '密码';

$lang->jenkins->lblCreate  = '添加Jenkins服务器';
$lang->jenkins->desc       = '描述';
$lang->jenkins->tokenFirst = 'Token不为空时，优先使用Token。';
$lang->jenkins->tips       = '使用密码时，请在Jenkins全局安全设置中禁用"防止跨站点请求伪造"选项。';
/* job */
$lang->job->common        = '构建任务';
$lang->job->browse        = '浏览构建任务';
$lang->job->create        = '创建构建任务';
$lang->job->edit          = '编辑构建任务';
$lang->job->exec          = '执行构建';
$lang->job->view          = '执行详情';
$lang->job->delete        = '删除构建任务';
$lang->job->confirmDelete = '确认删除该构建任务';
$lang->job->dirChange     = '目录改动';
$lang->job->buildTag      = '打标签';

$lang->job->browseAction = '构建任务列表';

$lang->job->id          = 'ID';
$lang->job->name        = '名称';
$lang->job->repo        = '代码库';
$lang->job->product     = '关联' . $lang->productCommon;
$lang->job->svnDir      = 'SVN监控路径';
$lang->job->jenkins     = 'Jenkins';
$lang->job->jkHost      = 'Jenkins服务器';
$lang->job->buildType   = '构建类型';
$lang->job->jkJob       = 'Jenkins任务';
$lang->job->frame       = '工具/框架';
$lang->job->triggerType = '触发方式';
$lang->job->atDay       = '自定义日期';
$lang->job->atTime      = '执行时间';
$lang->job->lastStatus  = '最后执行状态';
$lang->job->lastExec    = '最后执行时间';
$lang->job->comment     = '匹配关键字';
$lang->job->customParam = '自定义构建参数';
$lang->job->paramName   = '名称';
$lang->job->paramValue  = '值';
$lang->job->custom      = '自定义';

$lang->job->lblBasic = '基本信息';

$lang->job->example     = '举例';
$lang->job->commitEx    = "用于匹配创建构建任务的关键字，多个关键字用','分割";
$lang->job->cronSample  = '如 0 0 2 * * 2-6/1 表示每个工作日凌晨2点';
$lang->job->sendExec    = '发送执行请求成功！执行结果：%s';
$lang->job->inputName   = '请输入参数名称。';
$lang->job->invalidName = '参数名称应该是英文字母、数字或下划线的组合。';

$lang->job->buildTypeList['build']          = '仅构建';
$lang->job->buildTypeList['buildAndDeploy'] = '构建部署';
$lang->job->buildTypeList['buildAndTest']   = '构建测试';

$lang->job->triggerTypeList['tag']      = '打标签';
$lang->job->triggerTypeList['commit']   = '提交注释包含关键字';
$lang->job->triggerTypeList['schedule'] = '定时计划';

$lang->job->frameList['']        = '';
$lang->job->frameList['junit']   = 'JUnit';
$lang->job->frameList['testng']  = 'TestNG';
$lang->job->frameList['phpunit'] = 'PHPUnit';
$lang->job->frameList['pytest']  = 'Pytest';
$lang->job->frameList['jtest']   = 'JTest';
$lang->job->frameList['cppunit'] = 'CppUnit';
$lang->job->frameList['gtest']   = 'GTest';
$lang->job->frameList['qtest']   = 'QTest';

$lang->job->paramValueList['']                 = '';
$lang->job->paramValueList['$zentao_version']  = '当前版本号';
$lang->job->paramValueList['$zentao_account']  = '当前用户名';
$lang->job->paramValueList['$zentao_product']  = '当前产品ID';
$lang->job->paramValueList['$zentao_repopath'] = '当前版本库路径';
/* mail */
$lang->mail->common        = '发信配置';
$lang->mail->index         = '首页';
$lang->mail->detect        = '检测';
$lang->mail->detectAction  = '通过邮箱地址检测';
$lang->mail->edit          = '编辑配置';
$lang->mail->save          = '保存';
$lang->mail->saveAction    = '保存发信设置';
$lang->mail->test          = '测试发信';
$lang->mail->reset         = '重置';
$lang->mail->resetAction   = '重置发信设置';
$lang->mail->resend        = '重发';
$lang->mail->resendAction  = '重发邮件';
$lang->mail->browse        = '邮件列表';
$lang->mail->delete        = '删除邮件';
$lang->mail->ztCloud       = '禅道云发信';
$lang->mail->gmail         = 'GMAIL发信';
$lang->mail->sendCloud     = 'Notice发信';
$lang->mail->batchDelete   = '批量删除';
$lang->mail->sendcloudUser = '同步联系人';
$lang->mail->agreeLicense  = '同意';
$lang->mail->disagree      = '不同意';

$lang->mail->turnon      = '是否打开';
$lang->mail->async       = '异步发送';
$lang->mail->fromAddress = '发信邮箱';
$lang->mail->fromName    = '发信人';
$lang->mail->domain      = '禅道域名';
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
$lang->mail->license     = '禅道云发信使用须知';

$lang->mail->selectMTA = '请选择发信方式：';
$lang->mail->smtp      = 'SMTP发信';

$lang->mail->syncedUser = '已经同步';
$lang->mail->unsyncUser = '未同步';
$lang->mail->sync       = '同步';
$lang->mail->remove     = '移除';

$lang->mail->toList      = '收信人';
$lang->mail->ccList      = '抄送给';
$lang->mail->subject     = '主题';
$lang->mail->createdBy   = '发送者';
$lang->mail->createdDate = '创建时间';
$lang->mail->sendTime    = '发送时间';
$lang->mail->status      = '状态';
$lang->mail->failReason  = '失败原因';

$lang->mail->statusList['wait']   = '待发送';
$lang->mail->statusList['sended'] = '成功';
$lang->mail->statusList['fail']   = '失败';

$lang->mail->turnonList[1] = '打开';
$lang->mail->turnonList[0] = '关闭';

$lang->mail->asyncList[1] = '是';
$lang->mail->asyncList[0] = '否';

$lang->mail->debugList[0] = '关闭';
$lang->mail->debugList[1] = '一般';
$lang->mail->debugList[2] = '较高';

$lang->mail->authList[1] = '需要';
$lang->mail->authList[0] = '不需要';

$lang->mail->secureList['']    = '不加密';
$lang->mail->secureList['ssl'] = 'ssl';
$lang->mail->secureList['tls'] = 'tls';

$lang->mail->more           = '更多...';
$lang->mail->noticeResend   = '已经重新发信！';
$lang->mail->inputFromEmail = '请输入发信邮箱：';
$lang->mail->nextStep       = '下一步';
$lang->mail->successSaved   = '配置信息已经成功保存。';
$lang->mail->setForUser     = '系统内用户都没有维护可用邮箱，无法测试发信，请先为用户维护邮箱。';
$lang->mail->testSubject    = '测试邮件';
$lang->mail->testContent    = '邮箱设置成功';
$lang->mail->successSended  = '成功发送！';
$lang->mail->confirmDelete  = '是否删除邮件？';
$lang->mail->sendmailTips   = '提示：系统不会为当前操作者发信。';
$lang->mail->needConfigure  = '无法找到邮件配置信息，请先配置邮件发送参数。';
$lang->mail->connectFail    = '无法连接禅道网站。';
$lang->mail->centifyFail    = '验证失败，可能密钥已经修改。请重新绑定！';
$lang->mail->nofsocket      = 'fsocket相关函数被禁用，不能发信！请在php.ini中修改allow_url_fopen为On，打开openssl扩展。 保存并重新启动apache。';
$lang->mail->noOpenssl      = 'ssl和tls加密，请打开openssl扩展。 保存并重新启动apache。';
$lang->mail->disableSecure  = '没有openssl扩展，禁用ssl和tls加密';
$lang->mail->sendCloudFail  = '操作失败，原因：';
$lang->mail->sendCloudHelp  = <<<EOD
<p>1、Notice SendCloud是SendCloud的团队通知服务。具体可以到<a href="http://notice.sendcloud.net/" target="_blank">notice.sendcloud.net</a>查看</p>
<p>2、accessKey和secretKey可以到登陆后的"设置"页面查看。发信人地址和名称也在"设置"页面设置。</p>
<p>3、发信时，Notice SendCloud联系人里面的昵称要跟邮箱一致，否则无法成功发信。可以到[<a href='%s'>同步联系人</a>]页面，将禅道用户同步到SendCloud联系人中</p>
EOD;
$lang->mail->sendCloudSuccess = '操作成功';
$lang->mail->closeSendCloud   = '关闭SendCloud';
$lang->mail->addressWhiteList = '为防止邮件被屏蔽，请在邮件服务器里面将发信邮箱设为白名单';
$lang->mail->ztCloudNotice    = <<<EOD
<p>禅道云发信是由禅道开发团队和<a href='http://sendcloud.sohu.com/' target='_blank'>SendCloud</a>联合推出的一个免费发信服务。</p>
<p>您只需要在禅道官网注册帐号，并完成手机和邮箱的验证，即可享受免费的发信服务。</p>
<p style='color:red'>您的认证信息我们会帮您提交到SendCloud的团队进行认证，以获得每天200封邮件的免费额度。</p>
<ul>
<li>您在禅道官网提交认证之后，即可享受每天<strong style='color:red'>50</strong>封的发信额度，为期<strong style='color:red'>3</strong>天。</li>
<li>您的信息经由禅道官网审核之后，即可享受每天<strong style='color:red'>200</strong>封的发信额度，为期<strong style='color:red'>7</strong>天。</li>
<li>您的信息经由SendCloud最终审核之后，即可长期享受每天<strong style='color:red'>200</strong>封的发信额度。</li>
</ul>
<p>如果不同意以上条款，就不能该服务。</p>
EOD;

$lang->mail->placeholder = new stdclass();
$lang->mail->placeholder->password = '有些邮箱需要填写单独申请的授权码，具体请到邮箱相关设置查询。';
/* message */
$lang->message->common  = '消息';
$lang->message->index   = '首页';
$lang->message->setting = '设置';
$lang->message->browser = '浏览器通知';

$lang->message->typeList['mail']     = '邮件';
$lang->message->typeList['message']  = '浏览器通知';
$lang->message->typeList['webhook']  = 'Webhook';

$lang->message->browserSetting = new stdclass();
$lang->message->browserSetting->turnon   = '是否打开';
$lang->message->browserSetting->pollTime = '轮询时间';

$lang->message->browserSetting->pollTimePlaceholder = '通知的时间间隔，以秒为单位。';

$lang->message->browserSetting->turnonList[1] = '打开';
$lang->message->browserSetting->turnonList[0] = '关闭';
/* misc */
$lang->misc = new stdclass();
$lang->misc->common  = '杂项';
$lang->misc->ping    = '防超时';

$lang->misc->zentao = new stdclass();
$lang->misc->zentao->version           = '版本%s';
$lang->misc->zentao->labels['about']   = '关于禅道';
$lang->misc->zentao->labels['support'] = '技术支持';
$lang->misc->zentao->labels['cowin']   = '帮助我们';
$lang->misc->zentao->labels['service'] = '服务列表';
$lang->misc->zentao->labels['others']  = '其他产品';

$lang->misc->zentao->icons['about']   = 'group';
$lang->misc->zentao->icons['support'] = 'question-sign';
$lang->misc->zentao->icons['cowin']   = 'hand-right';
$lang->misc->zentao->icons['service'] = 'heart';

$lang->misc->zentao->about['proversion']   = '升级专业版本';
$lang->misc->zentao->about['official']     = "官方网站";
$lang->misc->zentao->about['changelog']    = "版本历史";
$lang->misc->zentao->about['license']      = "授权协议";
$lang->misc->zentao->about['extension']    = "插件平台";
$lang->misc->zentao->about['follow']       = "关注我们";

$lang->misc->zentao->support['vip']        = "商业技术支持";
$lang->misc->zentao->support['manual']     = "用户手册";
$lang->misc->zentao->support['faq']        = "常见问题";
$lang->misc->zentao->support['ask']        = "官方问答";
$lang->misc->zentao->support['video']      = "使用视频";
$lang->misc->zentao->support['qqgroup']    = "官方QQ群";

$lang->misc->zentao->cowin['reportbug']    = "汇报Bug";
$lang->misc->zentao->cowin['feedback']     = "反馈需求";
$lang->misc->zentao->cowin['translate']    = "参与翻译";
$lang->misc->zentao->cowin['recommend']    = "推荐给朋友";

$lang->misc->zentao->service['zentaotrain']= '禅道使用培训';
$lang->misc->zentao->service['idc']        = '禅道在线托管';
$lang->misc->zentao->service['custom']     = '禅道定制开发';
$lang->misc->zentao->service['servicemore']= '更多服务...';

global $config;
$lang->misc->zentao->others['chanzhi']  = "<img src='{$config->webRoot}theme/default/images/main/chanzhi.ico' /> 蝉知门户";
$lang->misc->zentao->others['zdoo']     = "<img src='{$config->webRoot}theme/default/images/main/zdoo.ico' /> ZDOO协同";
$lang->misc->zentao->others['xuanxuan'] = "<img src='{$config->webRoot}theme/default/images/main/xuanxuan.ico' /> 喧喧聊天";
$lang->misc->zentao->others['ydisk']    = "<img src='{$config->webRoot}theme/default/images/main/ydisk.ico' /> 悦库网盘";
$lang->misc->zentao->others['meshiot' ] = "<img src='{$config->webRoot}theme/default/images/main/meshiot.ico' /> 易天物联";

$lang->misc->mobile      = "手机访问";
$lang->misc->noGDLib     = "请用手机浏览器访问：<strong>%s</strong>";
$lang->misc->copyright   = "&copy; 2009 - 2018 <a href='http://www.cnezsoft.com' target='_blank'>青岛易软天创网络科技有限公司</a> 电话：4006-8899-23 Email：<a href='mailto:co@zentao.net'>co@zentao.net</a>  QQ：1492153927";
$lang->misc->checkTable  = "检查修复数据表";
$lang->misc->needRepair  = "修复表";
$lang->misc->repairTable = "数据库表可能因为断电原因损坏，需要检查修复！！";
$lang->misc->repairFail  = "修复失败，请到该数据库的数据目录下，尝试执行<code>myisamchk -r -f %s.MYI</code>进行修复。";
$lang->misc->connectFail = "连接数据库失败，错误：%s，<br/> 请检查mysql错误日志，排查错误。";
$lang->misc->tableName   = "表名";
$lang->misc->tableStatus = "状态";
$lang->misc->novice      = "您可能初次使用禅道，是否进入新手模式？";
$lang->misc->showAnnual  = '新增年度总结功能';
$lang->misc->annualDesc  = '12.0版本后，新增年度总结功能，可以到『统计->年度总结』页面查看。 是否现在<a href="%s" target="_blank" id="showAnnual" class="btn btn-mini btn-primary">查看</a>';
$lang->misc->remind      = '新功能提醒';

$lang->misc->noticeRepair = "<h5>普通用户请联系管理员进行修复</h5>
    <h5>管理员请登录禅道所在的服务器，创建<span>%s</span>文件。</h5>
    <p>注意：</p>
    <ol>
    <li>文件内容为空。</li>
    <li>如果之前文件存在，删除之后重新创建。</li>
    </ol>";

$lang->misc->feature = new stdclass();
$lang->misc->feature->lastest  = '最新版本';
$lang->misc->feature->detailed = '详情';

$lang->misc->releaseDate['15.0.rc3']    = '2021-04-16';
$lang->misc->releaseDate['15.0.rc2']    = '2021-04-09';
$lang->misc->releaseDate['15.0.rc1']    = '2021-04-05';
$lang->misc->releaseDate['12.5.3']      = '2021-01-06';
$lang->misc->releaseDate['12.5.2']      = '2020-12-18';
$lang->misc->releaseDate['12.5.1']      = '2020-11-30';
$lang->misc->releaseDate['12.5.stable'] = '2020-11-19';
$lang->misc->releaseDate['20.0.alpha1'] = '2020-10-30';
$lang->misc->releaseDate['12.4.4']      = '2020-10-30';
$lang->misc->releaseDate['12.4.3']      = '2020-10-13';
$lang->misc->releaseDate['12.4.2']      = '2020-09-18';
$lang->misc->releaseDate['12.4.1']      = '2020-08-10';
$lang->misc->releaseDate['12.4.stable'] = '2020-07-28';
$lang->misc->releaseDate['12.3.3']      = '2020-07-02';
$lang->misc->releaseDate['12.3.2']      = '2020-06-01';
$lang->misc->releaseDate['12.3.1']      = '2020-05-15';
$lang->misc->releaseDate['12.3']        = '2020-04-08';
$lang->misc->releaseDate['12.2']        = '2020-03-25';
$lang->misc->releaseDate['12.1']        = '2020-03-10';
$lang->misc->releaseDate['12.0.1']      = '2020-02-12';
$lang->misc->releaseDate['12.0']        = '2020-01-03';
$lang->misc->releaseDate['11.7']        = '2019-11-28';
$lang->misc->releaseDate['11.6.5']      = '2019-11-08';
$lang->misc->releaseDate['11.6.4']      = '2019-10-17';
$lang->misc->releaseDate['11.6.3']      = '2019-09-24';
$lang->misc->releaseDate['11.6.2']      = '2019-09-06';
$lang->misc->releaseDate['11.6.1']      = '2019-08-23';
$lang->misc->releaseDate['11.6.stable'] = '2019-07-12';
$lang->misc->releaseDate['11.5.2']      = '2019-06-26';
$lang->misc->releaseDate['11.5.1']      = '2019-06-24';
$lang->misc->releaseDate['11.5.stable'] = '2019-05-08';
$lang->misc->releaseDate['11.4.1']      = '2019-04-08';
$lang->misc->releaseDate['11.4.stable'] = '2019-03-25';
$lang->misc->releaseDate['11.3.stable'] = '2019-02-27';
$lang->misc->releaseDate['11.2.stable'] = '2019-01-30';
$lang->misc->releaseDate['11.1.stable'] = '2019-01-04';
$lang->misc->releaseDate['11.0.stable'] = '2018-12-21';
$lang->misc->releaseDate['10.6.stable'] = '2018-11-20';
$lang->misc->releaseDate['10.5.stable'] = '2018-10-25';
$lang->misc->releaseDate['10.4.stable'] = '2018-09-28';
$lang->misc->releaseDate['10.3.stable'] = '2018-08-10';
$lang->misc->releaseDate['10.2.stable'] = '2018-08-02';
$lang->misc->releaseDate['10.0.stable'] = '2018-06-26';
$lang->misc->releaseDate['9.8.stable']  = '2018-01-17';
$lang->misc->releaseDate['9.7.stable']  = '2017-12-22';
$lang->misc->releaseDate['9.6.stable']  = '2017-11-06';
$lang->misc->releaseDate['9.5.1']       = '2017-09-27';
$lang->misc->releaseDate['9.3.beta']    = '2017-06-21';
$lang->misc->releaseDate['9.1.stable']  = '2017-03-23';
$lang->misc->releaseDate['9.0.beta']    = '2017-01-03';
$lang->misc->releaseDate['8.3.stable']  = '2016-11-09';
$lang->misc->releaseDate['8.2.stable']  = '2016-05-17';
$lang->misc->releaseDate['7.4.beta']    = '2015-11-13';
$lang->misc->releaseDate['7.2.stable']  = '2015-05-22';
$lang->misc->releaseDate['7.1.stable']  = '2015-03-07';
$lang->misc->releaseDate['6.3.stable']  = '2014-11-07';

$lang->misc->feature->all['15.0.rc3'][]    = array('title' => '完善细节，修复Bug', 'desc' => '');
$lang->misc->feature->all['15.0.rc2'][]    = array('title' => '修复Bug，优化界面交互', 'desc' => '');
$lang->misc->feature->all['15.0.rc1'][]    = array('title' => '升级到15版本，重构导航、文档库，增加项目集管理', 'desc' => '');
$lang->misc->feature->all['12.5.3'][]      = array('title' => '优化年度总结', 'desc' => '');
$lang->misc->feature->all['12.5.2'][]      = array('title' => '修复Bug', 'desc' => '');
$lang->misc->feature->all['12.5.1'][]      = array('title' => '修复漏洞。', 'desc' => '');
$lang->misc->feature->all['12.5.stable'][] = array('title' => '解决bug，完成高优先级需求。', 'desc' => '');

$lang->misc->feature->all['12.4.4'][] = array('title'=>'兼容专业版和企业版', 'desc' => '');
$lang->misc->feature->all['12.4.3'][] = array('title'=>'修复Bug', 'desc' => '');
$lang->misc->feature->all['12.4.2'][] = array('title'=>'修复Bug', 'desc' => '');
$lang->misc->feature->all['12.4.1'][] = array('title'=>'修复Bug', 'desc' => '');

$lang->misc->feature->all['12.4.stable'][] = array('title'=>'修复Bug', 'desc' => '');

$lang->misc->feature->all['12.3.3'][] = array('title'=>'修复Bug', 'desc' => '');
$lang->misc->feature->all['12.3.2'][] = array('title'=>'修复工作流。', 'desc' => '');
$lang->misc->feature->all['12.3.1'][] = array('title'=>'修复重要程度高的Bug。', 'desc' => '');
$lang->misc->feature->all['12.3'][]   = array('title'=>'集成单元测试，打通持续集成闭环。', 'desc' => '');
$lang->misc->feature->all['12.2'][]   = array('title'=>'增加父子需求，兼容最新喧喧。', 'desc' => '');
$lang->misc->feature->all['12.1'][]   = array('title'=>'增加构建功能', 'desc' => '<p>增加构建功能，集成Jenkins进行构建</p>');
$lang->misc->feature->all['12.0.1'][] = array('title'=>'修复Bug', 'desc' => '');

$lang->misc->feature->all['12.0'][]   = array('title'=>'将代码功能版本浏览功能转移到开源版', 'desc' => '');
$lang->misc->feature->all['12.0'][]   = array('title'=>'增加年度总结', 'desc' => '根据角色显示年度总结。');
$lang->misc->feature->all['12.0'][]   = array('title'=>'完善细节，修复Bug', 'desc' => '');

$lang->misc->feature->all['11.7'][]   = array('title'=>'完善细节，修复Bug', 'desc' => '<p>增加用户是否使用敏捷概念的选择</p><p>webhook类型中增加企业微信</p><p>实现到钉钉个人消息的通知</p>');
$lang->misc->feature->all['11.6.5'][] = array('title'=>'修复Bug', 'desc' => '');
$lang->misc->feature->all['11.6.4'][] = array('title'=>'完善细节，修复Bug', 'desc' => '');
$lang->misc->feature->all['11.6.3'][] = array('title'=>'修复Bug', 'desc' => '');
$lang->misc->feature->all['11.6.2'][] = array('title'=>'完善细节，修复Bug', 'desc' => '');
$lang->misc->feature->all['11.6.1'][] = array('title'=>'完善细节，修复Bug', 'desc' => '');

$lang->misc->feature->all['11.6.stable'][] = array('title'=>'改善国际版界面', 'desc' => '');
$lang->misc->feature->all['11.6.stable'][] = array('title'=>'添加翻译功能', 'desc' => '');

$lang->misc->feature->all['11.5.2'][] = array('title'=>'增加禅道安全性，增加登录禅道弱口令检查', 'desc' => '');
$lang->misc->feature->all['11.5.1'][] = array('title'=>'新增第三方应用免密登录禅道，修复Bug', 'desc' => '');

$lang->misc->feature->all['11.5.stable'][] = array('title'=>'完善细节，修复Bug', 'desc' => '');
$lang->misc->feature->all['11.5.stable'][] = array('title'=>'新增动态过滤机制', 'desc' => '');
$lang->misc->feature->all['11.5.stable'][] = array('title'=>'集成新版本客户端', 'desc' => '');

$lang->misc->feature->all['11.4.1'][]      = array('title'=>'完善细节，修复Bug', 'desc' => '');

$lang->misc->feature->all["11.4.stable"][] = array("title"=>"完善细节，修复Bug", "desc" => "<p>增强测试任务管理</p><p>优化计划、发布、版本关联{$lang->SRCommon}和bug的交互</p><p>文档库可以自定义是否显示子分类里的文档</p><p>修复bug，完善细节</p>");

$lang->misc->feature->all['11.3.stable'][] = array('title'=>'完善细节，修复Bug', 'desc' => '<p>计划添加子计划功能</p><p>优化chosen交互</p><p>添加时区设置</p><p>优化文档库和文档</p>');

$lang->misc->feature->all['11.2.stable'][] = array('title'=>'完善细节，修复Bug', 'desc' => '<p>增加升级日志和升级后数据库检查的功能</p><p>修复禅道集成客户端和其他若干bug，完善细节</p>');

$lang->misc->feature->all['11.1.stable'][] = array('title'=>'主要修复Bug。', 'desc' => '');

$lang->misc->feature->all['11.0.stable'][] = array('title'=>'禅道集成喧喧', 'desc' => '');

$lang->misc->feature->all['10.6.stable'][] = array('title'=>'调整备份机制', 'desc' => '<p>增加备份设置，备份更加灵活</p><p>显示备份进度</p><p>可以更改备份目录</p>');
$lang->misc->feature->all['10.6.stable'][] = array('title'=>'优化和调整菜单', 'desc' => '<p>调整后台菜单</p><p>调整我的地盘和项目的二级菜单</p>');

$lang->misc->feature->all['10.5.stable'][] = array('title'=>'调整文档显示', 'desc' => '<p>调整文档库左侧的布局方式</p><p>文档库左侧导航底部增加筛选条件</p>');
$lang->misc->feature->all['10.5.stable'][] = array('title'=>'调整子任务逻辑，优化父子任务显示。', 'desc' => '');

$lang->misc->feature->all['10.4.stable'][] = array('title'=>'优化调整新界面', 'desc' => '<p>详情页面还原我们之前的排版布局</p><p>重构添加用户页面的表单</p><p>用例执行时，如果用户手工选择了通过，写结果的时候不要更新用例状态</p>');
$lang->misc->feature->all['10.4.stable'][] = array('title'=>'用户机器休眠登录失效后，重新刷新session', 'desc' => '');
$lang->misc->feature->all['10.4.stable'][] = array('title'=>'提升现有的接口机制', 'desc' => '');

$lang->misc->feature->all['10.3.stable'][] = array('title'=>'修复Bug', 'desc' => '');
$lang->misc->feature->all['10.2.stable'][] = array('title'=>'集成喧喧IM', 'desc' => '');

$lang->misc->feature->all['10.0.stable'][] = array('title'=>'全新的界面和交互体验', 'desc' => '<ol><li>全新的我的地盘</li><li>全新的动态页面</li><li>全新的产品主页</li><li>全新的产品概况</li><li>全新的路线图</li><li>全新的项目主页</li><li>全新的项目概况</li><li>全新的测试主页</li><li>全新的文档主页</li><li>我的地盘新增工作统计区块</li><li>我的地盘待办区块可以直接添加、编辑、完成待办</li><li>产品主页新增产品统计区块</li><li>产品主页新增产品总览区块</li><li>项目主页新增项目统计区块</li><li>项目主页新增项目总览区块</li><li>测试主页新增测试统计区块</li><li>所有产品、产品主页、所有项目、项目主页、测试主页等按钮从二级导航右侧移动到了左侧</li><li>项目任务列表看板、燃尽图、树状图、分组查看等按钮从三级导航中移动到二级导航中，树状图、分组查看和任务列表集成到一个下拉列表中</li><li>项目下二级导航中Bug、版本、测试单三个跟测试相关的导航集成到一个下拉列表中</li><li>版本、测试单列表按照产品分组展示，布局更加合理</li><li>文档左侧增加树状图显示</li><li>文档增加快速访问功能，包括最近更新、我的文档、我的收藏三个入口</li><li>文档增加收藏功能</li><ol>');

$lang->misc->feature->all['9.8.stable'][] = array('title'=>'实现集中的消息处理机制', 'desc' => '<p>邮件，短信，webhook都放统一的消息发送</p><p>移植ZDOO里面的消息通知功能</p>');
$lang->misc->feature->all['9.8.stable'][] = array('title'=>'实现周期性待办功能', 'desc' => '');
$lang->misc->feature->all['9.8.stable'][] = array('title'=>'增加指派给我的区块', 'desc' => '');
$lang->misc->feature->all['9.8.stable'][] = array('title'=>'项目可以选择多个测试单生成报告', 'desc' => '');

$lang->misc->feature->all['9.7.stable'][] = array('title'=>'调整国际版，增加英文Demo数据。', 'desc' => '');

$lang->misc->feature->all['9.6.stable'][] = array('title'=>'新增了webhook功能', 'desc' => '实现与倍冾、钉钉的消息通知接口');
$lang->misc->feature->all['9.6.stable'][] = array('title'=>'新增禅道操作获取积分的功能', 'desc' => '');
$lang->misc->feature->all['9.6.stable'][] = array('title'=>'项目任务新增了多人任务和子任务功能', 'desc' => '');
$lang->misc->feature->all['9.6.stable'][] = array('title'=>'产品视图新增了产品线功能', 'desc' => '');

$lang->misc->feature->all['9.5.1'][] = array('title'=>'新增受限操作', 'desc' => '');

$lang->misc->feature->all['9.3.beta'][] = array('title'=>'升级框架，增强程序安全', 'desc' => '');

$lang->misc->feature->all['9.1.stable'][] = array('title'=>'完善测试视图', 'desc' => '<p>增加测试套件、公共测试库和测试总结功能</p>');
$lang->misc->feature->all['9.1.stable'][] = array('title'=>'支持测试步骤分组', 'desc' => '');

$lang->misc->feature->all['9.0.beta'][] = array('title'=>'增加禅道云发信功能', 'desc' => '<p>禅道云发信是禅道联合SendCloud推出的一项免费发信服务，只有用户绑定禅道，并通过验证即可使用。</p>');
$lang->misc->feature->all['9.0.beta'][] = array('title'=>'优化富文本编辑器和markdown编辑器', 'desc' => '');

$lang->misc->feature->all['8.3.stable'][] = array('title'=>'调整文档功能', 'desc' => '<p>增加文档模块首页，重新组织文档库结构，增加权限</p><p>多种文件浏览方式，文档支持Markdown，增加文档权限管理，增加文件版本管理。</p>');

$lang->misc->feature->all['8.2.stable'][] = array('title'=>'首页自定义', 'desc' => '<p>我的地盘由我做主。现在开始，你可以向首页添加多种多样的内容区块，而且还可以决定如何排列和显示他们。</p><p>我的地盘、产品、项目、测试模块下均支持首页自定义功能。</p>');
$lang->misc->feature->all['8.2.stable'][] = array('title'=>'导航定制', 'desc' => '<p>导航上显示的项目现在完全由你来决定，不仅仅可以决定在导航上展示哪些内容，还可以决定展示的顺序。</p><p>将鼠标悬浮在导航上稍后会在右侧显示定制按钮，点击打开定制对话框，通过点击切换是否显示，拖放操作来更改显示顺序。</p>');
$lang->misc->feature->all['8.2.stable'][] = array('title'=>'批量添加、编辑自定义', 'desc' => '<p>可以在批量添加和批量编辑页面自定义操作的字段。</p>');
$lang->misc->feature->all['8.2.stable'][] = array('title'=>"添加{$lang->SRCommon}、任务、Bug、用例自定义", 'desc' => "<p>可以在添加{$lang->SRCommon}、任务、Bug、用例页面，自定义部分字段是否显示。</p>");
$lang->misc->feature->all['8.2.stable'][] = array('title'=>'导出自定义', 'desc' => "<p>在导出{$lang->SRCommon}、任务、Bug、用例的时候，用户可以自定义导出的字段，也可以保存模板方便每次导出。</p>");
$lang->misc->feature->all['8.2.stable'][] = array('title'=>"{$lang->SRCommon}、任务、Bug、用例组合检索功能", 'desc' => "<p>在{$lang->SRCommon}、任务、Bug、用例列表页面，可以实现模块和标签的组合检索。</p>");
$lang->misc->feature->all['8.2.stable'][] = array('title'=>'增加新手教程', 'desc' => '<p>增加新手教程，方便新用户了解禅道使用。</p>');

$lang->misc->feature->all['7.4.beta'][] = array('title'=>'产品实现分支功能', 'desc' => "<p>产品增加分支/平台类型，相应的{$lang->SRCommon}、计划、Bug、用例、模块等都增加分支。</p>");
$lang->misc->feature->all['7.4.beta'][] = array('title'=>'调整发布模块', 'desc' => '<p>发布增加停止维护操作，当发布停止维护时，创建Bug将不显示这个发布。</p><p>发布中遗留的bug改为手工关联。</p>');
$lang->misc->feature->all['7.4.beta'][] = array('title'=>"调整{$lang->SRCommon}和Bug的创建页面", 'desc' => '');

$lang->misc->feature->all['7.2.stable'][] = array('title'=>'增强安全', 'desc' => '<p>加强对管理员弱口令的检查。</p><p>写插件，上传插件的时候需要创建ok文件。</p><p>敏感操作增加管理员口令的检查</p><p>对输入内容做striptags, specialchars处理。</p>');
$lang->misc->feature->all['7.2.stable'][] = array('title'=>'完善细节', 'desc' => '');

$lang->misc->feature->all['7.1.stable'][] = array('title'=>'提供计划任务框架', 'desc' => '增加计划任务框架，加入每日提醒、更新燃尽图、备份、发信等重要任务。');
$lang->misc->feature->all['7.1.stable'][] = array('title'=>'提供rpm和deb包', 'desc' => '');

$lang->misc->feature->all['6.3.stable'][] = array('title'=>'增加数据表格功能', 'desc' => '<p>可配置数据表格中可显示的字段，按照配置字段显示想看的数据</p>');
$lang->misc->feature->all['6.3.stable'][] = array('title'=>'继续完善细节', 'desc' => '');
/* my */
global $config;

$lang->my->index           = '首页';
$lang->my->todo            = '我的待办';
$lang->my->calendar        = '日程';
$lang->my->work            = '待处理';
$lang->my->contribute      = '贡献';
$lang->my->task            = '我的任务';
$lang->my->bug             = '我的Bug';
$lang->my->testTask        = '我的版本';
$lang->my->testCase        = '我的用例';
$lang->my->story           = "我的{$lang->SRCommon}";
$lang->my->doc             = "我的文档";
$lang->my->createProgram   = '添加项目';
$lang->my->project         = "我的项目";
$lang->my->execution       = "我的{$lang->executionCommon}";
$lang->my->issue           = '我的问题';
$lang->my->risk            = '我的风险';
$lang->my->profile         = '我的档案';
$lang->my->dynamic         = '我的动态';
$lang->my->team            = '团队';
$lang->my->editProfile     = '修改档案';
$lang->my->changePassword  = '修改密码';
$lang->my->preference      = '个性化设置';
$lang->my->unbind          = '解除ZDOO绑定';
$lang->my->manageContacts  = '维护联系人';
$lang->my->deleteContacts  = '删除联系人';
$lang->my->shareContacts   = '共享联系人列表';
$lang->my->limited         = '受限操作(只能编辑与自己相关的内容)';
$lang->my->score           = '我的积分';
$lang->my->scoreRule       = '积分规则';
$lang->my->noTodo          = '暂时没有待办。';
$lang->my->noData          = "暂时没有%s。";
$lang->my->storyChanged    = "需求变更";
$lang->my->hours           = '工时/天';
$lang->my->uploadAvatar    = '更换头像';
$lang->my->requirement     = "我的{$lang->URCommon}";
$lang->my->testtask        = '我的测试单';
$lang->my->testcase        = '我的用例';
$lang->my->storyConcept    = $config->URAndSR ? '默认需求概念组合' : '默认需求概念';

$lang->my->indexAction      = '地盘仪表盘';
$lang->my->calendarAction   = '我的日程';
$lang->my->workAction       = '我的待处理';
$lang->my->contributeAction = '我的贡献';
$lang->my->profileAction    = '个人档案';
$lang->my->dynamicAction    = '动态';

$lang->my->myExecutions = "我参与的阶段/冲刺/迭代";
$lang->my->name         = '名称';
$lang->my->code         = '代号';
$lang->my->projects     = '所属项目';
$lang->my->executions   = "所属{$lang->executionCommon}";

$lang->my->executionMenu = new stdclass();
$lang->my->executionMenu->undone = '未结束';
$lang->my->executionMenu->done   = '已完成';

$lang->my->taskMenu = new stdclass();
$lang->my->taskMenu->assignedToMe = '指派给我';
$lang->my->taskMenu->openedByMe   = '由我创建';
$lang->my->taskMenu->finishedByMe = '由我完成';
$lang->my->taskMenu->closedByMe   = '由我关闭';
$lang->my->taskMenu->canceledByMe = '由我取消';

$lang->my->storyMenu = new stdclass();
$lang->my->storyMenu->assignedToMe = '指派给我';
$lang->my->storyMenu->reviewByMe   = '待我评审';
$lang->my->storyMenu->openedByMe   = '由我创建';
$lang->my->storyMenu->reviewedByMe = '由我评审';
$lang->my->storyMenu->closedByMe   = '由我关闭';

$lang->my->projectMenu = new stdclass();
$lang->my->projectMenu->doing      = '进行中';
$lang->my->projectMenu->wait       = '未开始';
$lang->my->projectMenu->suspended  = '已挂起';
$lang->my->projectMenu->closed     = '已关闭';
$lang->my->projectMenu->openedbyme = '由我创建';

$lang->my->form = new stdclass();
$lang->my->form->lblBasic   = '基本信息';
$lang->my->form->lblContact = '联系信息';
$lang->my->form->lblAccount = '帐号信息';

$lang->my->programLink   = '项目集默认着陆页';
$lang->my->productLink   = '产品默认着陆页';
$lang->my->projectLink   = '项目默认着陆页';
if($config->systemMode == 'classic') $lang->my->executionLink = $lang->executionCommon . '默认着陆页';
if($config->systemMode == 'new') $lang->my->executionLink = '执行默认着陆页';

$lang->my->programLinkList = array();
$lang->my->programLinkList['program-browse']  = '默认进入项目集列表，可以查看所有的项目集';
$lang->my->programLinkList['program-project'] = '默认进入最近一个项目集的项目列表，可以查看当前项目集下所有项目';

$lang->my->productLinkList = array();
$lang->my->productLinkList['product-index']     = '默认进入产品主页，可以了解公司整体的产品状况';
$lang->my->productLinkList['product-all']       = '默认进入产品列表，可以查看所有的产品';
$lang->my->productLinkList['product-dashboard'] = '默认进入最近一个产品仪表盘，可以查看当前产品概况';
$lang->my->productLinkList['product-browse']    = '默认进入最近一个产品的需求列表，可以查看当前产品下的需求信息';

global $config;
$lang->my->projectLinkList = array();
$lang->my->projectLinkList['project-browse']    = '默认进入项目列表，可以查看所有的项目';
$lang->my->projectLinkList['project-execution'] = '默认进入项目下所有执行列表，查看所有执行信息';
$lang->my->projectLinkList['project-index']     = '默认进入最近一个项目仪表盘，可以查看当前项目概况';

$lang->my->executionLinkList = array();
if($config->systemMode == 'new')
{
    $lang->my->executionLinkList['execution-task']  = '默认进入最近一个执行的任务列表，可以查看当前迭代下的任务信息';
    $lang->my->executionLinkList['execution-index'] = '默认进入执行仪表盘，可以了解所有执行的统计数据和概况';
    $lang->my->executionLinkList['execution-all']   = '默认进入执行列表，可以查看所有的执行';
}
if($config->systemMode == 'classic') $lang->my->executionLinkList['execution-task'] = "默认进入最近一个{$lang->executionCommon}的任务列表，可以查看当前{$lang->executionCommon}下的任务信息";
/* personnel */
$lang->personnel->common     = '项目集人员';
$lang->personnel->accessible = '可访问人员列表';
$lang->personnel->invest    = '投入人员列表';
$lang->personnel->department = '部门';
$lang->personnel->realName   = '真实姓名';
$lang->personnel->userName   = '用户名';
$lang->personnel->job        = '岗位';
$lang->personnel->genders    = '性别';
$lang->personnel->project    = '项目';
$lang->personnel->search     = '搜索';
$lang->personnel->delete     = '移除';
$lang->personnel->role       = '角色';

$lang->personnel->name          = '人员名称';
$lang->personnel->projects      = '项目数';
$lang->personnel->executions    = '执行数';
$lang->personnel->workingHours  = '工时';
$lang->personnel->task          = '任务';
$lang->personnel->bug           = 'Bug';
$lang->personnel->createStories = '创建需求数';
$lang->personnel->risk          = '风险';
$lang->personnel->issue         = '问题';
$lang->personnel->invest       = '已投入';
$lang->personnel->left          = '剩余';
$lang->personnel->created       = '创建';
$lang->personnel->finished      = '完成';
$lang->personnel->wait          = '待处理';
$lang->personnel->resolved      = '解决';
$lang->personnel->UR            = $lang->URCommon;
$lang->personnel->SR            = $lang->SRCommon;

$lang->personnel->whitelist      = '白名单列表';
$lang->personnel->addWhitelist   = '添加白名单';
$lang->personnel->unbindWhitelist = '删除白名单';
$lang->personnel->confirmDelete  = '确认将该用户移除白名单？';

$lang->personnel->openedPGMTip = '该项目集是公开状态，有项目集视图权限的人员即可访问。';
/* product */
$lang->product->index           = $lang->productCommon . '主页';
$lang->product->browse          = "{$lang->SRCommon}列表";
$lang->product->dynamic         = $lang->productCommon . '动态';
$lang->product->view            = "{$lang->productCommon}概况";
$lang->product->edit            = "编辑{$lang->productCommon}";
$lang->product->batchEdit       = '批量编辑';
$lang->product->create          = "添加{$lang->productCommon}";
$lang->product->delete          = "删除{$lang->productCommon}";
$lang->product->deleted         = '已删除';
$lang->product->close           = '关闭';
$lang->product->select          = "请选择{$lang->productCommon}";
$lang->product->mine            = '我负责：';
$lang->product->other           = '其他：';
$lang->product->closed          = '已关闭';
$lang->product->updateOrder     = '排序';
$lang->product->all             = "所有{$lang->productCommon}";
$lang->product->manageLine      = "维护{$lang->productCommon}线";
$lang->product->newLine         = "新建{$lang->productCommon}线";
$lang->product->export          = '导出数据';
$lang->product->dashboard       = "{$lang->productCommon}仪表盘";
$lang->product->changeProgram   = "{$lang->productCommon}调整所属项目集影响范围确认";
$lang->product->addWhitelist    = '添加白名单';
$lang->product->unbindWhitelist = '移除白名单';

$lang->product->indexAction   = "所有{$lang->productCommon}仪表盘";
$lang->product->closeAction   = "关闭{$lang->productCommon}";
$lang->product->orderAction   = "{$lang->productCommon}排序";
$lang->product->exportAction  = "导出{$lang->productCommon}";

$lang->product->basicInfo = '基本信息';
$lang->product->otherInfo = '其他信息';

$lang->product->plans       = "计划数";
$lang->product->releases    = '发布数';
$lang->product->docs        = '文档数';
$lang->product->bugs        = '相关Bug';
$lang->product->projects    = "关联项目数";
$lang->product->executions  = "关联{$lang->execution->common}数";
$lang->product->cases       = '用例数';
$lang->product->builds      = '版本数';
$lang->product->roadmap     = "{$lang->productCommon}路线图";
$lang->product->doc         = '文档列表';
$lang->product->project     = $lang->executionCommon . '列表';
$lang->product->build       = '版本列表';
$lang->product->moreProduct = "更多产品";
$lang->product->projectInfo = "所有与此产品关联的项目";

$lang->product->currentExecution      = "当前执行";
$lang->product->activeStories         = "激活{$lang->SRCommon}";
$lang->product->activeStoriesTitle    = "激活{$lang->SRCommon}";
$lang->product->changedStories        = "已变更{$lang->SRCommon}";
$lang->product->changedStoriesTitle   = "已变更{$lang->SRCommon}";
$lang->product->draftStories          = "草稿{$lang->SRCommon}";
$lang->product->draftStoriesTitle     = "草稿{$lang->SRCommon}";
$lang->product->closedStories         = "已关闭{$lang->SRCommon}";
$lang->product->closedStoriesTitle    = "已关闭{$lang->SRCommon}";
$lang->product->unResolvedBugs        = '未解决Bug';
$lang->product->unResolvedBugsTitle   = '未解决Bug';
$lang->product->assignToNullBugs      = '未指派Bug';
$lang->product->assignToNullBugsTitle = '未指派Bug';

$lang->product->confirmDelete        = " 您确定删除该{$lang->productCommon}吗？";
$lang->product->errorNoProduct       = "还没有创建{$lang->productCommon}！";
$lang->product->accessDenied         = "您无权访问该{$lang->productCommon}";
$lang->product->programChangeTip     = "如下项目只关联了该{$lang->productCommon}， 将直接转移至新项目集下。";
$lang->product->notChangeProgramTip  = "该{$lang->productCommon}的{$lang->SRCommon}已经关联到如下项目，请取消关联后再操作";
$lang->product->confirmChangeProgram = "如下项目既关联了该{$lang->productCommon}又关联了其他{$lang->productCommon}，请确认是否继续关联该{$lang->productCommon}，勾选后将取消与其他{$lang->productCommon}的关联关系，同时转移至新项目集下。";
$lang->product->changeProgramError   = "该{$lang->productCommon}的{$lang->SRCommon}已经关联到项目，请取消关联后再操作";

$lang->product->id             = '编号';
$lang->product->program        = "所属项目集";
$lang->product->name           = "{$lang->productCommon}名称";
$lang->product->code           = "{$lang->productCommon}代号";
$lang->product->line           = "{$lang->productCommon}线";
$lang->product->lineName       = "{$lang->productCommon}线名称";
$lang->product->order          = '排序';
$lang->product->type           = "{$lang->productCommon}类型";
$lang->product->typeAB         = "类型";
$lang->product->status         = '状态';
$lang->product->subStatus      = '子状态';
$lang->product->desc           = "{$lang->productCommon}描述";
$lang->product->manager        = '负责人';
$lang->product->PO             = "{$lang->productCommon}负责人";
$lang->product->QD             = '测试负责人';
$lang->product->RD             = '发布负责人';
$lang->product->acl            = '访问控制';
$lang->product->whitelist      = '白名单';
$lang->product->branch         = '所属%s';
$lang->product->qa             = '测试';
$lang->product->release        = '发布';
$lang->product->allRelease     = '所有发布';
$lang->product->maintain       = '维护中';
$lang->product->latestDynamic  = '最新动态';
$lang->product->plan           = '计划';
$lang->product->iteration      = '版本迭代';
$lang->product->iterationInfo  = '迭代 %s 次';
$lang->product->iterationView  = '查看详情';
$lang->product->createdBy      = '由谁创建';
$lang->product->createdDate    = '创建日期';

$lang->product->searchStory  = '搜索';
$lang->product->assignedToMe = '指给我';
$lang->product->openedByMe   = '我创建';
$lang->product->reviewedByMe = '我评审';
$lang->product->closedByMe   = '我关闭';
$lang->product->draftStory   = '草稿';
$lang->product->activeStory  = '激活';
$lang->product->changedStory = '已变更';
$lang->product->willClose    = '待关闭';
$lang->product->closedStory  = '已关闭';
$lang->product->unclosed     = '未关闭';
$lang->product->unplan       = "未计划";
$lang->product->viewByUser   = '按用户查看';

$lang->product->allStory             = '所有';
$lang->product->allProduct           = '全部' . $lang->productCommon;
$lang->product->allProductsOfProject = '全部关联' . $lang->productCommon;

$lang->product->typeList['']         = '';
$lang->product->typeList['normal']   = '正常';
$lang->product->typeList['branch']   = '多分支';
$lang->product->typeList['platform'] = '多平台';

$lang->product->typeTips = array();
$lang->product->typeTips['branch']   = '(适用于客户定制场景)';
$lang->product->typeTips['platform'] = '(适用于跨平台应用开发，比如IOS、安卓、PC端等)';

$lang->product->branchName['normal']   = '';
$lang->product->branchName['branch']   = '分支';
$lang->product->branchName['platform'] = '平台';

$lang->product->statusList['']       = '';
$lang->product->statusList['normal'] = '正常';
$lang->product->statusList['closed'] = '结束';

global $config;
if($config->systemMode == 'new')
{
    $lang->product->aclList['private'] = "私有({$lang->productCommon}相关负责人、所属项目集的干系人、相关联项目的团队成员和干系人可访问)";
}
else
{
    $lang->product->aclList['private'] = "私有({$lang->productCommon}相关负责人、相关联{$lang->executionCommon}的团队成员可访问)";
}
$lang->product->aclList['open']    = "公开(有{$lang->productCommon}视图权限，即可访问)";
//$lang->product->aclList['custom']  = '自定义白名单(团队成员和白名单的成员可以访问)';

$lang->product->acls['private'] = '私有';
$lang->product->acls['open']    = "公开";

$lang->product->aclTips['open']    = "有{$lang->productCommon}视图权限，即可访问";
$lang->product->aclTips['private'] = "{$lang->productCommon}相关负责人、所属项目集的干系人、相关联项目的团队成员和干系人可访问";

$lang->product->storySummary   = "本页共 <strong>%s</strong> 个%s，预计 <strong>%s</strong> 个{$lang->hourCommon}，用例覆盖率 <strong>%s</strong>。";
$lang->product->checkedSummary = "选中 <strong>%total%</strong> 个%storyCommon%，预计 <strong>%estimate%</strong> 个{$lang->hourCommon}，用例覆盖率 <strong>%rate%</strong>。";
$lang->product->noModule       = "<div>您现在还没有模块信息</div><div>请维护{$lang->productCommon}模块</div>";
$lang->product->noProduct      = "暂时没有{$lang->productCommon}。";
$lang->product->noMatched      = '找不到包含"%s"的' . $lang->productCommon;

$lang->product->featureBar['browse']['allstory']     = $lang->product->allStory;
$lang->product->featureBar['browse']['unclosed']     = $lang->product->unclosed;
$lang->product->featureBar['browse']['assignedtome'] = $lang->product->assignedToMe;
$lang->product->featureBar['browse']['openedbyme']   = $lang->product->openedByMe;
$lang->product->featureBar['browse']['reviewedbyme'] = $lang->product->reviewedByMe;
$lang->product->featureBar['browse']['draftstory']   = $lang->product->draftStory;
$lang->product->featureBar['browse']['more']         = $lang->more;

$lang->product->featureBar['all']['all']      = '所有' . $lang->productCommon;
$lang->product->featureBar['all']['noclosed'] = $lang->product->unclosed;
$lang->product->featureBar['all']['closed']   = $lang->product->statusList['closed'];

$lang->product->moreSelects['closedbyme']   = $lang->product->closedByMe;
$lang->product->moreSelects['activestory']  = $lang->product->activeStory;
$lang->product->moreSelects['changedstory'] = $lang->product->changedStory;
$lang->product->moreSelects['willclose']    = $lang->product->willClose;
$lang->product->moreSelects['closedstory']  = $lang->product->closedStory;
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
$lang->productplan->project    = '项目';

$lang->productplan->batchUnlink      = "批量移除";
$lang->productplan->linkStory        = "关联{$lang->SRCommon}";
$lang->productplan->unlinkStory      = "移除{$lang->SRCommon}";
$lang->productplan->unlinkStoryAB    = "移除";
$lang->productplan->batchUnlinkStory = "批量移除{$lang->SRCommon}";
$lang->productplan->linkedStories    = $lang->SRCommon;
$lang->productplan->unlinkedStories  = "未关联{$lang->SRCommon}";
$lang->productplan->updateOrder      = '排序';
$lang->productplan->createChildren   = "创建子计划";
$lang->productplan->createExecution  = "创建{$lang->executionCommon}";

$lang->productplan->linkBug          = "关联Bug";
$lang->productplan->unlinkBug        = "移除Bug";
$lang->productplan->batchUnlinkBug   = "批量移除Bug";
$lang->productplan->linkedBugs       = 'Bug';
$lang->productplan->unlinkedBugs     = '未关联Bug';
$lang->productplan->unexpired        = "未过期计划";
$lang->productplan->all              = "所有计划";

$lang->productplan->confirmDelete      = "您确认删除该计划吗？";
$lang->productplan->confirmUnlinkStory = "您确认移除该{$lang->SRCommon}吗？";
$lang->productplan->confirmUnlinkBug   = "您确认移除该Bug吗？";
$lang->productplan->noPlan             = "暂时没有计划。";
$lang->productplan->cannotDeleteParent = "不能删除父计划";
$lang->productplan->selectProjects     = "请选择所属项目";
$lang->productplan->nextStep           = "下一步";

$lang->productplan->id         = '编号';
$lang->productplan->product    = $lang->productCommon;
$lang->productplan->branch     = '平台/分支';
$lang->productplan->title      = '名称';
$lang->productplan->desc       = '描述';
$lang->productplan->begin      = '开始日期';
$lang->productplan->end        = '结束日期';
$lang->productplan->last       = "上次计划";
$lang->productplan->future     = '待定';
$lang->productplan->stories    = "{$lang->SRCommon}数";
$lang->productplan->bugs       = 'Bug数';
$lang->productplan->hour       = $lang->hourCommon;
$lang->productplan->execution  = $lang->executionCommon;
$lang->productplan->parent     = "父计划";
$lang->productplan->parentAB   = "父";
$lang->productplan->children   = "子计划";
$lang->productplan->childrenAB = "子";
$lang->productplan->order      = "排序";
$lang->productplan->deleted    = "已删除";

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

$lang->productplan->featureBar['browse']['all']       = '全部';
$lang->productplan->featureBar['browse']['unexpired'] = '未过期';
$lang->productplan->featureBar['browse']['overdue']   = '已过期';
/* program */
$lang->program->name      = '项目集名称';
$lang->program->template  = '项目集模板';
$lang->program->category  = '项目集类型';
$lang->program->desc      = '项目集描述';
$lang->program->copy      = '复制项目集';
$lang->program->status    = '状态';
$lang->program->PM        = '负责人';
$lang->program->budget    = '预算';
$lang->program->progress  = '项目进度';
$lang->program->children  = '子项目集';
$lang->program->parent    = '父项目集';
$lang->program->allInput  = '项目集总投入';
$lang->program->teamCount = '总人数';
$lang->program->longTime  = '长期';
$lang->program->view      = '项目集详情';

$lang->program->common                  = '项目集';
$lang->program->index                   = '项目集主页';
$lang->program->create                  = '添加项目集';
$lang->program->createGuide             = '选择项目模板';
$lang->program->edit                    = '编辑项目集';
$lang->program->browse                  = '项目集列表';
$lang->program->product                 = '产品列表';
$lang->program->project                 = '项目集项目列表';
$lang->program->all                     = '所有项目集';
$lang->program->start                   = '启动项目集';
$lang->program->finish                  = '完成项目集';
$lang->program->suspend                 = '挂起项目集';
$lang->program->delete                  = '删除项目集';
$lang->program->close                   = '关闭项目集';
$lang->program->activate                = '激活项目集';
$lang->program->export                  = '导出';
$lang->program->stakeholder             = '干系人列表';
$lang->program->createStakeholder       = '添加干系人';
$lang->program->unlinkStakeholder       = '移除干系人';
$lang->program->batchUnlinkStakeholders = '批量移除干系人';
$lang->program->unlink                  = '移除';
$lang->program->moreProgram             = '更多项目集';
$lang->program->confirmBatchUnlink      = "您确定要批量移除这些干系人吗？";
$lang->program->stakeholderType         = '干系人类型';
$lang->program->isStakeholderKey        = '关键干系人';
$lang->program->importStakeholder       = '从父项目集导入';
$lang->program->unbindWhitelist         = '移除白名单';
$lang->program->importStakeholder       = '从父项目集导入';
$lang->program->manageMembers           = '项目集团队';
$lang->program->beyondParentBudget      = '已超出所属项目集的剩余预算';
$lang->program->parentBudget            = '所属项目集剩余预算：';
$lang->program->beginLetterParent       = "父项目集的开始日期：%s，开始日期不能小于父项目集的开始日期";
$lang->program->endGreaterParent        = "父项目集的完成日期：%s，完成日期不能大于父项目集的完成日期";
$lang->program->beginGreateChild        = "子项目集的最小开始日期：%s，父项目集的开始日期不能大于子项目集的最小开始日期";
$lang->program->endLetterChild          = "子项目的最大完成日期：%s，父项目的完成日期不能小于子项目的最大完成日期";
$lang->program->closeErrorMessage       = '存在子项目集或项目为未关闭状态';
$lang->program->hasChildren             = '该项目集有子项目集或项目存在，不能删除。';
$lang->program->confirmDelete           = "您确定要删除吗？";
$lang->program->readjustTime            = '重新调整项目集起止时间';

$lang->program->stakeholderTypeList['inside']  = '内部';
$lang->program->stakeholderTypeList['outside'] = '外部';

$lang->program->noProgram  = '暂时没有项目集';
$lang->program->showClosed = '显示已关闭';
$lang->program->tips       = '选择了父项目集，则可关联该父项目集下的产品。如果项目未选择任何项目集，则系统会默认创建一个和该项目同名的产品并关联该项目。';

$lang->program->endList[31]  = '一个月';
$lang->program->endList[93]  = '三个月';
$lang->program->endList[186] = '半年';
$lang->program->endList[365] = '一年';
$lang->program->endList[999] = '长期';

$lang->program->aclList['private'] = "私有（项目集负责人和干系人可访问，干系人可后续维护）";
$lang->program->aclList['open']    = "公开（有项目集视图权限，即可访问）";

$lang->program->subAclList['private'] = "私有（本项目集负责人和干系人可访问，干系人可后续维护）";
$lang->program->subAclList['open']    = "全部公开（有项目集视图权限，即可访问）";
$lang->program->subAclList['program'] = "项目集内公开（所有上级项目集负责人和干系人、本项目集负责人和干系人可访问）";

$lang->program->subAcls['private'] = '私有';
$lang->program->subAcls['open']    = '全部公开';
$lang->program->subAcls['program'] = '项目集内公开';

$lang->program->authList['extend'] = '继承 (取项目权限与组织权限的并集)';
$lang->program->authList['reset']  = '重新定义 (只取项目权限)';

$lang->program->statusList['wait']      = '未开始';
$lang->program->statusList['doing']     = '进行中';
$lang->program->statusList['suspended'] = '已挂起';
$lang->program->statusList['closed']    = '已关闭';

$lang->program->featureBar['all'] = '所有';
/* project */
$lang->project->createGuide       = '选择项目模板';
$lang->project->index             = '项目仪表盘';
$lang->project->home              = '项目主页';
$lang->project->create            = '创建项目';
$lang->project->edit              = '编辑项目';
$lang->project->batchEdit         = '批量编辑项目';
$lang->project->view              = '项目概况';
$lang->project->batchEdit         = '批量编辑';
$lang->project->browse            = '项目列表';
$lang->project->all               = '所有项目';
$lang->project->start             = '启动项目';
$lang->project->finish            = '完成项目';
$lang->project->suspend           = '挂起项目';
$lang->project->delete            = '删除项目';
$lang->project->close             = '关闭项目';
$lang->project->activate          = '激活项目';
$lang->project->group             = '项目权限分组';
$lang->project->createGroup       = '项目创建分组';
$lang->project->editGroup         = '项目编辑分组';
$lang->project->copyGroup         = '项目复制分组';
$lang->project->manageView        = '项目维护视野';
$lang->project->managePriv        = '项目维护权限';
$lang->project->manageMembers     = '项目团队';
$lang->project->export            = '导出';
$lang->project->addProduct        = '新建产品';
$lang->project->manageGroupMember = '维护分组用户';
$lang->project->moduleSetting     = '列表设置';
$lang->project->moduleOpen        = '显示项目集名';
$lang->project->dynamic           = '动态';
$lang->project->execution         = '执行列表';
$lang->project->qa                = '测试仪表盘';
$lang->project->bug               = 'Bug列表';
$lang->project->testcase          = '用例列表';
$lang->project->testtask          = '测试单';
$lang->project->build             = '版本';
$lang->project->updateOrder       = '排序';
$lang->project->sort              = '项目排序';
$lang->project->whitelist         = '项目白名单';
$lang->project->addWhitelist      = '项目添加白名单';
$lang->project->unbindWhitelist   = '项目删除白名单';
$lang->project->manageProducts    = '关联产品';
$lang->project->copyTitle         = '请选择要复制的项目';
$lang->project->errorSameProducts = '项目不能关联多个相同的产品。';
$lang->project->errorNoProducts   = '最少关联一个产品';
$lang->project->copyNoProject     = '没有可用的项目来复制';
$lang->project->searchByName      = '输入项目名称进行检索';
$lang->project->deleted           = '已删除';
$lang->project->linkedProducts    = '已关联';
$lang->project->unlinkedProducts  = '未关联';
$lang->project->testreport        = '测试报告';

$lang->project->common             = '项目';
$lang->project->stage              = '阶段';
$lang->project->PM                 = '负责人';
$lang->project->name               = '项目名称';
$lang->project->category           = '项目类型';
$lang->project->desc               = '项目描述';
$lang->project->code               = '项目代号';
$lang->project->copy               = '复制项目';
$lang->project->begin              = '计划开始';
$lang->project->end                = '计划完成';
$lang->project->status             = '状态';
$lang->project->budget             = '预算';
$lang->project->template           = '项目模板';
$lang->project->estimate           = '预计';
$lang->project->consume            = '消耗';
$lang->project->surplus            = '剩余';
$lang->project->progress           = '进度';
$lang->project->dateRange          = '起止日期';
$lang->project->to                 = '至';
$lang->project->realEnd            = '实际完成日期';
$lang->project->realBegan          = '实际开始日期';
$lang->project->bygrid             = '看板';
$lang->project->bylist             = '列表';
$lang->project->mine               = '我参与的';
$lang->project->myProject          = '我负责：';
$lang->project->other              = '其他：';
$lang->project->acl                = '访问控制';
$lang->project->setPlanduration    = '设置工期';
$lang->project->auth               = '权限控制';
$lang->project->durationEstimation = '工作量估算';
$lang->project->leftStories        = '剩余需求';
$lang->project->leftTasks          = '剩余任务';
$lang->project->leftBugs           = '剩余Bug';
$lang->project->children           = '子项目';
$lang->project->parent             = '所属项目集';
$lang->project->allStories         = '总需求';
$lang->project->doneStories        = '已完成';
$lang->project->doneProjects       = '已结束';
$lang->project->allInput           = '项目总投入';
$lang->project->weekly             = '项目周报';
$lang->project->pv                 = 'PV';
$lang->project->ev                 = 'EV';
$lang->project->sv                 = 'SV';
$lang->project->ac                 = 'AC';
$lang->project->cv                 = 'CV';
$lang->project->pvTitle            = '计划完成';
$lang->project->evTitle            = '实际完成';
$lang->project->svTitle            = '进度偏差';
$lang->project->acTitle            = '实际花费';
$lang->project->cvTitle            = '成本偏差';
$lang->project->teamCount          = '人数';
$lang->project->longTime           = '长期';
$lang->project->future             = '待定';
$lang->project->moreProject        = '更多项目';
$lang->project->days               = '可用工作日';

$lang->project->productNotEmpty        = '请关联产品或创建产品。';
$lang->project->existProductName       = '产品名称已存在。';
$lang->project->changeProgram          = '%s > 修改项目集';
$lang->project->changeProgramTip       = '修改项目集后，该项目关联的产品也会同时修改所属项目集，请确认是否修改。';
$lang->project->linkedProjectsTip      = '关联的项目如下';
$lang->project->multiLinkedProductsTip = '该项目关联的如下产品还关联了其他项目，请取消关联后再操作';
$lang->project->linkStoryByPlanTips    = "此操作会将所选计划下面的{$lang->SRCommon}全部关联到此项目中";
$lang->project->createExecution        = "该项目下没有{$lang->executionCommon}，请先创建{$lang->executionCommon}";

$lang->project->tenThousand = '万';

$lang->project->unitList['CNY'] = '人民币';
$lang->project->unitList['USD'] = '美元';
$lang->project->unitList['HKD'] = '港元';
$lang->project->unitList['NTD'] = '台元';
$lang->project->unitList['EUR'] = '欧元';
$lang->project->unitList['DEM'] = '马克';
$lang->project->unitList['CHF'] = '瑞士法郎';
$lang->project->unitList['FRF'] = '法国法郎';
$lang->project->unitList['GBP'] = '英镑';
$lang->project->unitList['NLG'] = '荷兰盾';
$lang->project->unitList['CAD'] = '加拿大元';
$lang->project->unitList['RUR'] = '卢布';
$lang->project->unitList['INR'] = '卢比';
$lang->project->unitList['AUD'] = '澳大利亚元';
$lang->project->unitList['NZD'] = '新西兰元';
$lang->project->unitList['THB'] = '泰国铢';
$lang->project->unitList['SGD'] = '新加坡元';

$lang->project->currencySymbol['CNY'] = '¥';
$lang->project->currencySymbol['USD'] = '$';
$lang->project->currencySymbol['HKD'] = 'HK$';
$lang->project->currencySymbol['NTD'] = 'NT$';
$lang->project->currencySymbol['EUR'] = '€';
$lang->project->currencySymbol['DEM'] = 'DEM';
$lang->project->currencySymbol['CHF'] = '₣';
$lang->project->currencySymbol['FRF'] = '₣';
$lang->project->currencySymbol['GBP'] = '£';
$lang->project->currencySymbol['NLG'] = 'ƒ';
$lang->project->currencySymbol['CAD'] = '$';
$lang->project->currencySymbol['RUR'] = '₽';
$lang->project->currencySymbol['INR'] = '₹';
$lang->project->currencySymbol['AUD'] = 'A$';
$lang->project->currencySymbol['NZD'] = 'NZ$';
$lang->project->currencySymbol['THB'] = '฿';
$lang->project->currencySymbol['SGD'] = 'S$';

$lang->project->modelList['scrum']     = "Scrum";
$lang->project->modelList['waterfall'] = "瀑布";

$lang->project->featureBar['all']       = '所有';
$lang->project->featureBar['doing']     = '进行中';
$lang->project->featureBar['wait']      = '未开始';
$lang->project->featureBar['suspended'] = '已挂起';
$lang->project->featureBar['closed']    = '已关闭';

$lang->project->aclList['private'] = "私有 (只有项目团队成员和干系人可访问)";
$lang->project->aclList['open']    = "公开 (有项目视图权限即可访问)";

$lang->project->acls['private'] = '私有';
$lang->project->acls['open']    = '公开';

$lang->project->subAclList['private'] = "私有 (只有本项目负责人、团队成员和干系人可访问)";
$lang->project->subAclList['open']    = "公开 (有项目视图权限即可访问)";
$lang->project->subAclList['program'] = '项目集内公开（所有上级项目集负责人和干系人、本项目负责人、团队成员和干系人可访问）';

$lang->project->authList['extend'] = '继承 (取系统权限与项目权限的合集)';
$lang->project->authList['reset']  = '重新定义 (只取项目权限)';

$lang->project->statusList['wait']      = '未开始';
$lang->project->statusList['doing']     = '进行中';
$lang->project->statusList['suspended'] = '已挂起';
$lang->project->statusList['closed']    = '已关闭';

$lang->project->endList[31]  = '一个月';
$lang->project->endList[93]  = '三个月';
$lang->project->endList[186] = '半年';
$lang->project->endList[365] = '一年';
$lang->project->endList[999] = '长期';

$lang->project->empty                  = '暂时没有项目';
$lang->project->accessDenied           = '您无权访问该项目！';
$lang->project->chooseProgramType      = '选中项目管理模型';
$lang->project->nextStep               = '下一步';
$lang->project->hoursUnit              = '%s 工时';
$lang->project->membersUnit            = '%s人';
$lang->project->lastIteration          = "近期{$lang->executionCommon}";
$lang->project->ongoingStage           = '进行中的阶段';
$lang->project->scrum                  = 'Scrum';
$lang->project->waterfall              = '瀑布';
$lang->project->waterfallTitle         = '瀑布式项目管理';
$lang->project->cannotCreateChild      = '该项目已经有实际的内容，无法直接添加子项目。您可以为当前项目创建一个父项目，然后在新的父项目下面添加子项目。';
$lang->project->confirmDelete          = "您确定要删除吗？";
$lang->project->emptyPM                = '暂无';
$lang->project->cannotChangeToCat      = "该项目已经有实际的内容，无法修改为父项目";
$lang->project->cannotCancelCat        = "该项目下已经有子项目，无法取消父项目标记";
$lang->project->parentBeginEnd         = "父项目起止时间：%s ~ %s";
$lang->project->childLongTime          = "子项目中有长期项目，父项目也应该是长期项目";
$lang->project->readjustTime           = '重新调整项目起止时间';
$lang->project->notAllowRemoveProducts = '该产品中的需求已与项目进行了关联，请取消关联后再操作。';

$lang->project->programTitle['0']    = '不显示';
$lang->project->programTitle['base'] = '只显示一级项目集';
$lang->project->programTitle['end']  = '只显示最后一级项目集';

$lang->project->accessDenied      = '您无权访问该项目！';
$lang->project->chooseProgramType = '选择项目管理方式';
$lang->project->scrumTitle        = '敏捷开发全流程项目管理';
$lang->project->cannotCreateChild = '该项目已经有实际的内容，无法直接添加子项目。您可以为当前项目创建一个父项目，然后在新的父项目下面添加子项目。';
$lang->project->hasChildren       = '该项目有子项目存在，不能删除。';
$lang->project->confirmDelete     = "您确定删除项目[%s]吗？";
$lang->project->cannotChangeToCat = "该项目已经有实际的内容，无法修改为父项目";
$lang->project->cannotCancelCat   = "该项目下已经有子项目，无法取消父项目标记";
$lang->project->parentBeginEnd    = "父项目起止时间：%s ~ %s";
$lang->project->parentBudget      = "父项目预算：";
$lang->project->beginLetterParent = "父项目的开始日期：%s，开始日期不能小于父项目的开始日期";
$lang->project->endGreaterParent  = "父项目的完成日期：%s，完成日期不能大于父项目的完成日期";
$lang->project->beginGreateChild  = "项目集的最小开始日期：%s，项目的开始日期不能小于项目集的最小开始日期";
$lang->project->endLetterChild    = "项目集的最大完成日期：%s，项目的完成日期不能大于项目集的最大完成日期";
$lang->project->childLongTime     = "子项目中有长期项目，父项目也应该是长期项目";
/* projectbuild */
$lang->projectbuild->common   = '项目版本';
$lang->projectbuild->browse   = '版本列表';
/* projectrelease */
$lang->projectrelease->common           = '项目发布';
$lang->projectrelease->create           = "创建发布";
$lang->projectrelease->edit             = "编辑发布";
$lang->projectrelease->linkStory        = "关联{$lang->SRCommon}";
$lang->projectrelease->linkBug          = "关联Bug";
$lang->projectrelease->delete           = "删除发布";
$lang->projectrelease->deleted          = '已删除';
$lang->projectrelease->view             = "发布详情";
$lang->projectrelease->browse           = "浏览发布";
$lang->projectrelease->changeStatus     = "修改状态";
$lang->projectrelease->batchUnlink      = "批量移除";
$lang->projectrelease->batchUnlinkStory = "批量移除{$lang->SRCommon}";
$lang->projectrelease->batchUnlinkBug   = "批量移除Bug";
$lang->projectrelease->unlinkStory      = "移除{$lang->SRCommon}";
$lang->projectrelease->unlinkBug        = '移除Bug';
$lang->projectrelease->export           = '导出HTML';
$lang->projectrelease->browseAction     = "发布列表";
/* projectstory */
$lang->projectstory->common            = "项目{$lang->SRCommon}";
$lang->projectstory->index             = "{$lang->SRCommon}主页";
$lang->projectstory->view              = "{$lang->SRCommon}详情";
$lang->projectstory->story             = "{$lang->SRCommon}列表";
$lang->projectstory->track             = '矩阵';
$lang->projectstory->linkStory         = '关联' . $lang->SRCommon;
$lang->projectstory->unlinkStory       = '移除' . $lang->SRCommon;
$lang->projectstory->importplanstories = '按计划关联' . $lang->SRCommon;
$lang->projectstory->whyNoStories      = "看起来没有{$lang->SRCommon}可以关联。请检查下项目关联的{$lang->productCommon}中有没有{$lang->SRCommon}，而且要确保它们已经审核通过。";

$lang->projectstory->trackAction = '跟踪矩阵';

global $app;
$app->loadLang('product');
$lang->projectstory->featureBar['story']['allstory'] = $lang->product->allStory;
$lang->projectstory->featureBar['story']['unclosed'] = $lang->product->unclosed;
$lang->projectstory->featureBar['story']['changed']  = $lang->product->changedStory;
$lang->projectstory->featureBar['story']['closed']   = $lang->product->closedStory;
/* qa */
$lang->qa->index       = '测试主页';
$lang->qa->indexAction = '测试仪表盘';
/* release */
$lang->release->common           = '产品发布';
$lang->release->create           = "创建发布";
$lang->release->edit             = "编辑发布";
$lang->release->linkStory        = "关联{$lang->SRCommon}";
$lang->release->linkBug          = "关联Bug";
$lang->release->delete           = "删除发布";
$lang->release->deleted          = '已删除';
$lang->release->view             = "发布详情";
$lang->release->browse           = "浏览发布";
$lang->release->changeStatus     = "修改状态";
$lang->release->batchUnlink      = "批量移除";
$lang->release->batchUnlinkStory = "批量移除{$lang->SRCommon}";
$lang->release->batchUnlinkBug   = "批量移除Bug";

$lang->release->confirmDelete      = "您确认删除该发布吗？";
$lang->release->confirmUnlinkStory = "您确认移除该{$lang->SRCommon}吗？";
$lang->release->confirmUnlinkBug   = "您确认移除该Bug吗？";
$lang->release->existBuild         = '『版本』已经有『%s』这条记录了。您可以更改『发布名称』或者选择一个『版本』。';
$lang->release->noRelease          = '暂时没有发布。';
$lang->release->errorDate          = '发布日期不能大于今天。';

$lang->release->basicInfo = '基本信息';

$lang->release->id            = 'ID';
$lang->release->product       = $lang->productCommon;
$lang->release->branch        = '平台/分支';
$lang->release->project       = '所属项目';
$lang->release->build         = '版本';
$lang->release->name          = '发布名称';
$lang->release->marker        = '里程碑';
$lang->release->date          = '发布日期';
$lang->release->desc          = '描述';
$lang->release->status        = '状态';
$lang->release->subStatus     = '子状态';
$lang->release->last          = '上次发布';
$lang->release->unlinkStory   = "移除{$lang->SRCommon}";
$lang->release->unlinkBug     = '移除Bug';
$lang->release->stories       = "完成的{$lang->SRCommon}";
$lang->release->bugs          = '解决的Bug';
$lang->release->leftBugs      = '遗留的Bug';
$lang->release->generatedBugs = '遗留的Bug';
$lang->release->finishStories = "本次共完成 %s 个{$lang->SRCommon}";
$lang->release->resolvedBugs  = '本次共解决 %s 个Bug';
$lang->release->createdBugs   = '本次共遗留 %s 个Bug';
$lang->release->export        = '导出HTML';
$lang->release->yesterday     = '昨日发布';
$lang->release->all           = '所有';

$lang->release->filePath = '下载地址：';
$lang->release->scmPath  = '版本库地址：';

$lang->release->exportTypeList['all']     = '所有';
$lang->release->exportTypeList['story']   = $lang->SRCommon;
$lang->release->exportTypeList['bug']     = 'Bug';
$lang->release->exportTypeList['leftbug'] = '遗留Bug';

$lang->release->statusList['']          = '';
$lang->release->statusList['normal']    = '正常';
$lang->release->statusList['terminate'] = '停止维护';

$lang->release->changeStatusList['normal']    = '激活';
$lang->release->changeStatusList['terminate'] = '停止维护';

$lang->release->action = new stdclass();
$lang->release->action->changestatus = array('main' => '$date, 由 <strong>$actor</strong> $extra。', 'extra' => 'changeStatusList');
/* repo */
$lang->repo->common          = '代码';
$lang->repo->browse          = '浏览';
$lang->repo->viewRevision    = '查看修订';
$lang->repo->product         = '所属产品';
$lang->repo->execution       = '所属' . $lang->execution->common;
$lang->repo->create          = '创建';
$lang->repo->maintain        = '版本库列表';
$lang->repo->edit            = '编辑';
$lang->repo->delete          = '删除版本库';
$lang->repo->showSyncCommit  = '显示同步进度';
$lang->repo->ajaxSyncCommit  = '接口：AJAX同步注释';
$lang->repo->setRules        = '指令配置';
$lang->repo->download        = '下载';
$lang->repo->downloadDiff    = '下载Diff';
$lang->repo->addBug          = '添加评审';
$lang->repo->editBug         = '编辑评审';
$lang->repo->deleteBug       = '删除评审';
$lang->repo->addComment      = '添加备注';
$lang->repo->editComment     = '编辑备注';
$lang->repo->deleteComment   = '删除备注';

$lang->repo->browseAction    = '浏览版本库';
$lang->repo->createAction    = '创建版本库';
$lang->repo->editAction      = '编辑版本库';
$lang->repo->diffAction      = '版本对比';
$lang->repo->downloadAction  = '下载代码库文件';
$lang->repo->revisionAction  = '版本详情';
$lang->repo->blameAction     = '版本追溯';
$lang->repo->reviewAction    = '评审列表';

$lang->repo->submit     = '提交';
$lang->repo->cancel     = '取消';
$lang->repo->addComment = '添加评论';

$lang->repo->module   = '模块';
$lang->repo->type     = '类型';
$lang->repo->assign   = '指派';
$lang->repo->title    = '标题';
$lang->repo->detile   = '详情';
$lang->repo->lines    = '代码行';
$lang->repo->line     = '行';
$lang->repo->expand   = '点击展开';
$lang->repo->collapse = '点击折叠';

$lang->repo->id        = '编号';
$lang->repo->SCM       = '类型';
$lang->repo->name      = '名称';
$lang->repo->path      = '地址';
$lang->repo->prefix    = '地址扩展';
$lang->repo->config    = '配置目录';
$lang->repo->desc      = '描述';
$lang->repo->account   = '用户名';
$lang->repo->password  = '密码';
$lang->repo->encoding  = '编码';
$lang->repo->client    = '客户端';
$lang->repo->size      = '大小';
$lang->repo->revision  = '查看版本';
$lang->repo->revisionA = '版本';
$lang->repo->revisions = '版本';
$lang->repo->time      = '提交时间';
$lang->repo->committer = '作者';
$lang->repo->commits   = '提交数';
$lang->repo->synced    = '初始化同步';
$lang->repo->lastSync  = '最后同步时间';
$lang->repo->deleted   = '已删除';
$lang->repo->commit    = '提交';
$lang->repo->comment   = '注释';
$lang->repo->view      = '查看文件';
$lang->repo->viewA     = '查看';
$lang->repo->log       = '版本历史';
$lang->repo->blame     = '追溯';
$lang->repo->date      = '日期';
$lang->repo->diff      = '比较差异';
$lang->repo->diffAB    = '比较';
$lang->repo->diffAll   = '全部比较';
$lang->repo->viewDiff  = '查看差异';
$lang->repo->allLog    = '所有版本';
$lang->repo->location  = '位置';
$lang->repo->file      = '文件';
$lang->repo->action    = '操作';
$lang->repo->code      = '代码';
$lang->repo->review    = '评审';
$lang->repo->acl       = '权限';
$lang->repo->group     = '分组';
$lang->repo->user      = '用户';
$lang->repo->info      = '版本信息';

$lang->repo->title      = '标题';
$lang->repo->status     = '状态';
$lang->repo->openedBy   = '创建者';
$lang->repo->assignedTo = '指派给';
$lang->repo->openedDate = '创建日期';

$lang->repo->latestRevision = '最近修订版本';
$lang->repo->actionInfo     = "由%s在%s添加";
$lang->repo->changes        = "修改记录";
$lang->repo->reviewLocation = "%s@%s，%s行 - %s行";
$lang->repo->commentEdit    = '<i class="icon-pencil"></i>';
$lang->repo->commentDelete  = '<i class="icon-remove"></i>';
$lang->repo->allChanges     = "其他改动";
$lang->repo->commitTitle    = "第%s次提交";
$lang->repo->mark           = "开始标记";
$lang->repo->split          = "多ID间隔";

$lang->repo->objectRule   = '对象匹配规则';
$lang->repo->objectIdRule = '对象ID匹配规则';
$lang->repo->actionRule   = '动作匹配规则';
$lang->repo->manHourRule  = '工时匹配规则';
$lang->repo->ruleUnit     = "单位";
$lang->repo->ruleSplit    = "多关键字用';'分割，如：任务多关键字： Task;任务";

$lang->repo->viewDiffList['inline'] = '直列';
$lang->repo->viewDiffList['appose'] = '并排';

$lang->repo->encryptList['plain']  = '不加密';
$lang->repo->encryptList['base64'] = 'BASE64';

$lang->repo->logStyles['A'] = '添加';
$lang->repo->logStyles['M'] = '修改';
$lang->repo->logStyles['D'] = '删除';

$lang->repo->encodingList['utf_8'] = 'UTF-8';
$lang->repo->encodingList['gbk']   = 'GBK';

$lang->repo->scmList['Git']        = 'Git';
$lang->repo->scmList['Subversion'] = 'Subversion';
$lang->repo->scmList['Gitlab']     = 'Gitlab';

$lang->repo->gitlabHost    = 'Gitlab 地址';
$lang->repo->gitlabToken   = 'Gitlab Token';
$lang->repo->gitlabProject = '项目';

$lang->repo->placeholder = new stdclass;
$lang->repo->placeholder->gitlabHost = '请填写gitlab访问地址';

$lang->repo->notice                 = new stdclass();
$lang->repo->notice->syncing        = '正在同步中, 请稍等...';
$lang->repo->notice->syncComplete   = '同步完成，正在跳转...';
$lang->repo->notice->syncedCount    = '已经同步记录条数';
$lang->repo->notice->delete         = '是否要删除该版本库？';
$lang->repo->notice->successDelete  = '已经成功删除版本库。';
$lang->repo->notice->commentContent = '输入回复内容';
$lang->repo->notice->deleteBug      = '确认删除该Bug？';
$lang->repo->notice->deleteComment  = '确认删除该回复？';
$lang->repo->notice->lastSyncTime   = '最后更新于：';

$lang->repo->rules = new stdclass();
$lang->repo->rules->exampleLabel = "注释示例";
$lang->repo->rules->example['task']['start']  = "%start% %task% %id%1%split%2 %cost%%consumedmark%1%cunit% %left%%leftmark%3%lunit%";
$lang->repo->rules->example['task']['finish'] = "%finish% %task% %id%1%split%2 %cost%%consumedmark%10%cunit%";
$lang->repo->rules->example['task']['effort'] = "%effort% %task% %id%1%split%2 %cost%%consumedmark%1%cunit% %left%%leftmark%3%lunit%";
$lang->repo->rules->example['bug']['resolve'] = "%resolve% %bug% %id%1%split%2";

$lang->repo->error                = new stdclass();
$lang->repo->error->useless       = '你的服务器禁用了exec,shell_exec方法，无法使用该功能';
$lang->repo->error->connect       = '连接版本库失败，请填写正确的用户名、密码和版本库地址！';
$lang->repo->error->version       = "https和svn协议需要1.8及以上版本的客户端，请升级到最新版本！详情访问:http://subversion.apache.org/";
$lang->repo->error->path          = '版本库地址直接填写文件路径，如：/home/test。';
$lang->repo->error->cmd           = '客户端错误！';
$lang->repo->error->diff          = '必须选择两个版本';
$lang->repo->error->safe          = '因为安全原因，需要检测客户端版本，请将版本号写入文件 %s <br /> 可以执行命令：%s';
$lang->repo->error->product       = "请选择{$lang->productCommon}！";
$lang->repo->error->commentText   = '请填写评审内容';
$lang->repo->error->comment       = '请填写内容';
$lang->repo->error->title         = '请填写标题';
$lang->repo->error->accessDenied  = '你没有权限访问该版本库';
$lang->repo->error->noFound       = '你访问的版本库不存在';
$lang->repo->error->noFile        = '目录 %s 不存在';
$lang->repo->error->noPriv        = '程序没有权限切换到目录 %s';
$lang->repo->error->output        = "执行命令：%s\n错误结果(%s)： %s\n";
$lang->repo->error->clientVersion = "客户端版本过低，请升级或更换SVN客户端";
$lang->repo->error->encoding      = "编码可能错误，请更换编码重试。";
$lang->repo->error->deleted       = "删除版本库失败，当前版本库有提交记录与设计关联";
$lang->repo->error->clientPath    = "客户端安装目录不能有空格！";

$lang->repo->syncTips      = '请参照<a target="_blank" href="https://www.zentao.net/book/zentaopmshelp/207.html">这里</a>，设置版本库定时同步。';
$lang->repo->encodingsTips = "提交日志的编码，可以用逗号连接起来的多个，比如utf-8。";

$lang->repo->example              = new stdclass();
$lang->repo->example->client      = new stdclass();
$lang->repo->example->path        = new stdclass();
$lang->repo->example->client->git = "例如：/usr/bin/git";
$lang->repo->example->client->svn = "例如：/usr/bin/svn";
$lang->repo->example->path->git   = "例如：/home/user/myproject";
$lang->repo->example->path->svn   = "例如：http://example.googlecode.com/svn/trunk/myproject";
$lang->repo->example->config      = "https需要填写配置目录的位置，通过config-dir选项生成配置目录";
$lang->repo->example->encoding    = "填写版本库中文件的编码";

$lang->repo->typeList['standard']    = '规范';
$lang->repo->typeList['performance'] = '性能';
$lang->repo->typeList['security']    = '安全';
$lang->repo->typeList['redundancy']  = '冗余';
$lang->repo->typeList['logicError']  = '逻辑错误';
/* report */
$lang->report->index      = '统计首页';
$lang->report->list       = '统计报表';
$lang->report->item       = '条目';
$lang->report->value      = '值';
$lang->report->percent    = '百分比';
$lang->report->undefined  = '未设定';
$lang->report->query      = '查询';
$lang->report->annual     = '年度总结';
$lang->report->project    = '项目';

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

$lang->report->assign['noassign'] = '未指派';
$lang->report->assign['assign']   = '已指派';

$lang->report->singleColor[] = 'F6BD0F';

$lang->report->projectDeviation = '项目偏差报表';
$lang->report->productSummary   = $lang->productCommon . '汇总表';
$lang->report->bugCreate        = 'Bug创建表';
$lang->report->bugAssign        = 'Bug指派表';
$lang->report->workload         = '员工负载表';
$lang->report->workloadAB       = '工作负载';
$lang->report->bugOpenedDate    = 'Bug创建时间';
$lang->report->beginAndEnd      = '起止时间';
$lang->report->begin            = '起始日期';
$lang->report->end              = '结束日期';
$lang->report->dept             = '部门';
$lang->report->deviationChart   = '项目偏差曲线';

$lang->reportList = new stdclass();
$lang->reportList->project = new stdclass();
$lang->reportList->product = new stdclass();
$lang->reportList->test    = new stdclass();
$lang->reportList->staff   = new stdclass();

$lang->reportList->project->lists[10] = '项目偏差报表|report|projectdeviation';
$lang->reportList->product->lists[10] = $lang->productCommon . '汇总表|report|productsummary';
$lang->reportList->test->lists[10]    = 'Bug创建表|report|bugcreate';
$lang->reportList->test->lists[13]    = 'Bug指派表|report|bugassign';
$lang->reportList->staff->lists[10]   = '员工负载表|report|workload';

$lang->report->id            = '编号';
$lang->report->execution     = $lang->executionCommon;
$lang->report->product       = $lang->productCommon;
$lang->report->user          = '姓名';
$lang->report->bugTotal      = 'Bug';
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
$lang->report->unplanned     = "未计划";
$lang->report->workday       = '每天工时';
$lang->report->diffDays      = '工作日天数';

$lang->report->typeList['default'] = '默认';
$lang->report->typeList['pie']     = '饼图';
$lang->report->typeList['bar']     = '柱状图';
$lang->report->typeList['line']    = '折线图';

$lang->report->conditions    = '筛选条件：';
$lang->report->closedProduct = '关闭' . $lang->productCommon;
$lang->report->overduePlan   = "过期计划";

$lang->report->idAB         = 'ID';
$lang->report->bugTitle     = 'Bug标题';
$lang->report->taskName     = '任务名称';
$lang->report->todoName     = '待办名称';
$lang->report->testTaskName = '版本名称';
$lang->report->deadline     = '截止日期';

$lang->report->mailTitle           = new stdclass();
$lang->report->mailTitle->begin    = '提醒：您有';
$lang->report->mailTitle->bug      = " Bug(%s),";
$lang->report->mailTitle->task     = " 任务(%s),";
$lang->report->mailTitle->todo     = " 待办(%s),";
$lang->report->mailTitle->testTask = " 测试版本(%s),";

$lang->report->proVersion   = '<a href="https://api.zentao.net/goto.php?item=proversion&from=reportpage" target="_blank">更多精彩，尽在专业版！</a>';
$lang->report->proVersionEn = '<a href="http://api.zentao.pm/goto.php?item=proversion&from=reportpage" target="_blank">Try ZenTao Pro for more!</a>';

$lang->report->annualData = new stdclass();
$lang->report->annualData->title            = "%s %s年工作汇总";
$lang->report->annualData->exportByZentao   = "由禅道系统导出";
$lang->report->annualData->scope            = "统计范围";
$lang->report->annualData->allUser          = "所有用户";
$lang->report->annualData->allDept          = "全公司";
$lang->report->annualData->soFar            = "（%s年）";
$lang->report->annualData->baseInfo         = "基本数据";
$lang->report->annualData->actionData       = "操作数据";
$lang->report->annualData->contributionData = "贡献数据";
$lang->report->annualData->radar            = "能力雷达图";
$lang->report->annualData->executions       = "{$lang->executionCommon}数据";
$lang->report->annualData->products         = "{$lang->productCommon}数据";
$lang->report->annualData->stories          = "需求数据";
$lang->report->annualData->tasks            = "任务数据";
$lang->report->annualData->bugs             = "Bug数据";
$lang->report->annualData->cases            = "用例数据";
$lang->report->annualData->statusStat       = "{$lang->SRCommon}/任务/Bug状态分布（截止今日）";

$lang->report->annualData->companyUsers     = "公司总人数";
$lang->report->annualData->deptUsers        = "部门人数";
$lang->report->annualData->logins           = "登录次数";
$lang->report->annualData->actions          = "操作次数";
$lang->report->annualData->contributions    = "贡献数";
$lang->report->annualData->consumed         = "消耗工时";
$lang->report->annualData->todos            = "待办数";

$lang->report->annualData->storyStatusStat = "需求状态分布";
$lang->report->annualData->taskStatusStat  = "任务状态分布";
$lang->report->annualData->bugStatusStat   = "Bug状态分布";
$lang->report->annualData->caseResultStat  = "用例结果分布";
$lang->report->annualData->allStory        = "总需求";
$lang->report->annualData->allTask         = "总任务";
$lang->report->annualData->allBug          = "总Bug";
$lang->report->annualData->undone          = "未完成";
$lang->report->annualData->unresolve       = "未解决";

$lang->report->annualData->storyMonthActions = "每月需求操作情况";
$lang->report->annualData->taskMonthActions  = "每月任务操作情况";
$lang->report->annualData->bugMonthActions   = "每月Bug操作情况";
$lang->report->annualData->caseMonthActions  = "每月用例操作情况";

$lang->report->annualData->executionFields['name']  = "{$lang->executionCommon}名称";
$lang->report->annualData->executionFields['story'] = "完成{$lang->SRCommon}数";
$lang->report->annualData->executionFields['task']  = "完成任务数";
$lang->report->annualData->executionFields['bug']   = "解决Bug数";

$lang->report->annualData->productFields['name'] = "{$lang->productCommon}名称";
$lang->report->annualData->productFields['plan'] = "计划数";
global $config;
if(!empty($config->URAndSR))
{
    $lang->report->annualData->productFields['requirement'] = "创建{$lang->URCommon}数";
}
$lang->report->annualData->productFields['story']    = "创建{$lang->SRCommon}数";
$lang->report->annualData->productFields['finished'] = "完成需求数";

$lang->report->annualData->objectTypeList['product']     = $lang->productCommon;
$lang->report->annualData->objectTypeList['story']       = "需求";
$lang->report->annualData->objectTypeList['productplan'] = "计划";
$lang->report->annualData->objectTypeList['release']     = "发布";
$lang->report->annualData->objectTypeList['execution']   = $lang->executionCommon;
$lang->report->annualData->objectTypeList['task']        = '任务';
$lang->report->annualData->objectTypeList['repo']        = '代码';
$lang->report->annualData->objectTypeList['bug']         = 'Bug';
$lang->report->annualData->objectTypeList['build']       = '版本';
$lang->report->annualData->objectTypeList['testtask']    = '测试单';
$lang->report->annualData->objectTypeList['case']        = '用例';
$lang->report->annualData->objectTypeList['doc']         = '文档';

$lang->report->annualData->actionList['create']    = '创建';
$lang->report->annualData->actionList['edit']      = '编辑';
$lang->report->annualData->actionList['close']     = '关闭';
$lang->report->annualData->actionList['review']    = '评审';
$lang->report->annualData->actionList['gitCommit'] = 'GIT提交';
$lang->report->annualData->actionList['svnCommit'] = 'SVN提交';
$lang->report->annualData->actionList['start']     = '开始';
$lang->report->annualData->actionList['finish']    = '完成';
$lang->report->annualData->actionList['assign']    = '指派';
$lang->report->annualData->actionList['activate']  = '激活';
$lang->report->annualData->actionList['resolve']   = '解决';
$lang->report->annualData->actionList['run']       = '执行';
$lang->report->annualData->actionList['change']    = '变更';
$lang->report->annualData->actionList['pause']     = '暂停';
$lang->report->annualData->actionList['cancel']    = '取消';
$lang->report->annualData->actionList['confirm']   = '确认';
$lang->report->annualData->actionList['createBug'] = '转Bug';

$lang->report->annualData->todoStatus['all']    = '所有待办';
$lang->report->annualData->todoStatus['undone'] = '未完成';
$lang->report->annualData->todoStatus['done']   = '已完成';

$lang->report->annualData->radarItems['product']   = '产品';
$lang->report->annualData->radarItems['execution'] = $lang->executionCommon;
$lang->report->annualData->radarItems['devel']     = "研发";
$lang->report->annualData->radarItems['qa']        = "测试";
$lang->report->annualData->radarItems['other']     = "其他";
/* score */
$lang->score->common       = '我的积分';
$lang->score->record       = '积分记录';
$lang->score->current      = '当前积分';
$lang->score->level        = '等级积分';
$lang->score->reset        = '重置';
$lang->score->tips         = '昨天增加了积分：<strong>%d</strong><br/>总积分：<strong>%d</strong>';
$lang->score->resetTips    = '重置积分执行时间可能会比较长，<br/><strong>请不要关闭窗口。</strong>';
$lang->score->resetStart   = '开始重置';
$lang->score->resetLoading = '正在重置中，已处理：';
$lang->score->resetFinish  = '重置完成';

$lang->score->id      = '编号';
$lang->score->userID  = '用户ID';
$lang->score->account = '用户';
$lang->score->module  = '模块';
$lang->score->method  = '动作';
$lang->score->before  = '之前';
$lang->score->score   = '分值';
$lang->score->after   = '之后';
$lang->score->time    = '时间';
$lang->score->desc    = '描述';
$lang->score->noLimit = '不限制';
$lang->score->times   = '次数';
$lang->score->hour    = '时间间隔';

$lang->score->modules['task']        = '任务';
$lang->score->modules['tutorial']    = '新手教程';
$lang->score->modules['user']        = '用户';
$lang->score->modules['ajax']        = '其它';
$lang->score->modules['doc']         = '文档';
$lang->score->modules['todo']        = '待办';
$lang->score->modules['story']       = $lang->SRCommon;
$lang->score->modules['bug']         = 'Bug';
$lang->score->modules['testcase']    = '用例';
$lang->score->modules['testtask']    = '测试单';
$lang->score->modules['build']       = 'Build';
$lang->score->modules['execution']   = $lang->executionCommon;
$lang->score->modules['productplan'] = '计划';
$lang->score->modules['release']     = '发布';
$lang->score->modules['block']       = '区块';
$lang->score->modules['search']      = '搜索';

$lang->score->methods['task']['create']              = '创建任务';
$lang->score->methods['task']['close']               = '关闭任务';
$lang->score->methods['task']['finish']              = '完成任务';
$lang->score->methods['tutorial']['finish']          = '学习完成';
$lang->score->methods['user']['login']               = '登录';
$lang->score->methods['user']['changePassword']      = '修改密码';
$lang->score->methods['user']['editProfile']         = '修改个人资料';
$lang->score->methods['ajax']['selectTheme']         = '切换主题';
$lang->score->methods['ajax']['selectLang']          = '切换语言';
$lang->score->methods['ajax']['showSearchMenu']      = '搜索高级用法';
$lang->score->methods['ajax']['customMenu']          = '自定义菜单';
$lang->score->methods['ajax']['dragSelected']        = '列表页面拖动选中';
$lang->score->methods['ajax']['lastNext']            = '快捷键翻页';
$lang->score->methods['ajax']['switchToDataTable']   = '使用高级表格';
$lang->score->methods['ajax']['submitPage']          = '修改分页数量';
$lang->score->methods['ajax']['quickJump']           = '使用快速跳转';
$lang->score->methods['ajax']['batchCreate']         = '首次使用批量添加';
$lang->score->methods['ajax']['batchEdit']           = '首次使用批量编辑';
$lang->score->methods['ajax']['batchOther']          = '其它批量操作';
$lang->score->methods['doc']['create']               = '创建文档';
$lang->score->methods['todo']['create']              = '创建待办';
$lang->score->methods['story']['create']             = "创建{$lang->SRCommon}";
$lang->score->methods['story']['close']              = "{$lang->SRCommon}关闭";
$lang->score->methods['bug']['create']               = '创建Bug';
$lang->score->methods['bug']['confirmBug']           = '确认Bug';
$lang->score->methods['bug']['createFormCase']       = '从用例创建';
$lang->score->methods['bug']['resolve']              = '解决Bug';
$lang->score->methods['bug']['saveTplModal']         = '保存模板';
$lang->score->methods['testtask']['runCase']         = '执行用例';
$lang->score->methods['testcase']['create']          = '创建用例';
$lang->score->methods['build']['create']             = '创建版本';
$lang->score->methods['execution']['create']         = "创建{$lang->executionCommon}";
$lang->score->methods['execution']['close']          = "{$lang->executionCommon}完成";
$lang->score->methods['productplan']['create']       = "创建计划";
$lang->score->methods['release']['create']           = '创建发布';
$lang->score->methods['block']['set']                = '区块自定义设置';
$lang->score->methods['search']['saveQuery']         = '保存搜索条件';
$lang->score->methods['search']['saveQueryAdvanced'] = '使用高级搜索';

$lang->score->extended['user']['changePassword'] = '密码强度为中，额外获得##strength,1##个积分；为强，额外获得##strength,2##个积分。';
$lang->score->extended['execution']['close']     = "项目经理增加##manager,close##个积分，{$lang->executionCommon}成员增加##member,close##个积分。按期或者提前完成，项目经理额外增加##manager,onTime##个积分，{$lang->executionCommon}成员额外增加##member,onTime##个积分。";
$lang->score->extended['bug']['resolve']         = 'Bug解决后，额外增加严重程度积分：s1 + ##severity,1##, s2 + ##severity,2##, s3 + ##severity,3##。';
$lang->score->extended['bug']['confirmBug']      = 'Bug确认后，额外增加严重程度积分：s1 + ##severity,1##, s2 + ##severity,2##, s3 + ##severity,3##。';
$lang->score->extended['task']['finish']         = '额外增加工时积分 round(工时 / 10 * 预计 / 消耗) + 优先级积分(p1 ##pri,1##, p2 ##pri,2##)。';
$lang->score->extended['story']['close']         = "{$lang->SRCommon}的创建者额外增加##createID##分";
/* search */
$lang->search->common        = '搜索';
$lang->search->reset         = '重置';
$lang->search->saveQuery     = '保存查询';
$lang->search->myQuery       = '我的查询';
$lang->search->group1        = '第一组';
$lang->search->group2        = '第二组';
$lang->search->buildForm     = '搜索表单';
$lang->search->buildQuery    = '执行搜索';
$lang->search->savedQuery    = '已保存的查询条件';
$lang->search->deleteQuery   = '删除查询';
$lang->search->setQueryTitle = '请输入查询标题（保存之前请先查询）：';
$lang->search->select        = "{$lang->SRCommon}/任务筛选";
$lang->search->me            = '自己';
$lang->search->noQuery       = '还没有保存查询！';
$lang->search->onMenuBar     = '显示在菜单栏';
$lang->search->custom        = '自定义';

$lang->search->account  = '用户名';
$lang->search->module   = '模块';
$lang->search->title    = '名称';
$lang->search->form     = '表单字段';
$lang->search->sql      = 'SQL条件';
$lang->search->shortcut = $lang->search->onMenuBar;

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

$lang->userquery        = new stdclass();
$lang->userquery->title = '标题';

$lang->searchObjects['todo']      = '待办';
$lang->searchObjects['effort']    = '日志';
$lang->searchObjects['testsuite'] = '套件';

$lang->search->objectType = '对象类型';
$lang->search->objectID   = '对象编号';
$lang->search->content    = '内容';
$lang->search->addedDate  = '添加时间';

$lang->search->index      = '全文检索';
$lang->search->buildIndex = '重建索引';
$lang->search->preview    = '预览';

$lang->search->result            = '搜索结果';
$lang->search->buildSuccessfully = '初始化搜索索引成功';
$lang->search->executeInfo       = '为您找到相关结果%s个，耗时%s秒';
$lang->search->buildResult       = '创建 %s 索引, 新增  %s 条记录；';

$lang->search->modules['all']         = '全部';
$lang->search->modules['task']        = '任务';
$lang->search->modules['bug']         = 'Bug';
$lang->search->modules['case']        = '用例';
$lang->search->modules['doc']         = '文档';
$lang->search->modules['todo']        = '待办';
$lang->search->modules['build']       = '版本';
$lang->search->modules['effort']      = '日志';
$lang->search->modules['caselib']     = '测试库';
$lang->search->modules['product']     = $lang->productCommon;
$lang->search->modules['release']     = '发布';
$lang->search->modules['testtask']    = '测试单';
$lang->search->modules['testsuite']   = '测试套件';
$lang->search->modules['testreport']  = '报告';
$lang->search->modules['productplan'] = '计划';
$lang->search->modules['program']     = '项目集';
$lang->search->modules['project']     = '项目';
$lang->search->modules['execution']   = $lang->executionCommon;
$lang->search->modules['story']       = '需求';

$lang->search->objectTypeList['story']            = $lang->SRCommon;
$lang->search->objectTypeList['requirement']      = $lang->URCommon;
$lang->search->objectTypeList['stage']            = '阶段';
$lang->search->objectTypeList['sprint']           = $lang->executionCommon;
$lang->search->objectTypeList['commonIssue']      = '问题';
$lang->search->objectTypeList['stakeholderIssue'] = '干系人问题';
/* sso */
$lang->sso = new stdclass();
$lang->sso->settings = '配置';
$lang->sso->turnon   = '是否打开';
$lang->sso->redirect = '自动跳回ZDOO';
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
<p>1、接口地址的填写，如果是PATH_INFO ：http://ZDOO网址/sys/sso-check.html，如果是GET：http://ZDOO网址/sys/index.php?m=sso&f=check</p>
<p>2、代号和密钥必须与ZDOO后台设置的一致。</p>
EOD;
$lang->sso->bindNotice     = '添加的新用户暂时没有权限，需要联系禅道管理员，给该用户分配权限。';
$lang->sso->bindNoPassword = '密码不能为空';
$lang->sso->bindNoUser     = '该用户的登录密码错误，或该用户不存在！';
$lang->sso->bindHasAccount = '该用户名已经存在，请更换用户名，或直接绑定到该用户。';
/* stakeholder */
$lang->stakeholder->common       = '干系人';
$lang->stakeholder->browse       = '干系人列表';
$lang->stakeholder->batchCreate  = '批量添加';
$lang->stakeholder->create       = '添加干系人';
$lang->stakeholder->edit         = '编辑干系人';
$lang->stakeholder->view         = '干系人详情';
$lang->stakeholder->delete       = '移除干系人';
$lang->stakeholder->createdBy    = '创建者';
$lang->stakeholder->createdDate  = '创建时间';
$lang->stakeholder->search       = '搜索';
$lang->stakeholder->browse       = '浏览列表';
$lang->stakeholder->view         = '用户信息';
$lang->stakeholder->basicInfo    = '基本信息';
$lang->stakeholder->add          = '新建';
$lang->stakeholder->communicate  = '沟通记录';
$lang->stakeholder->expect       = '期望内容';
$lang->stakeholder->progress     = '达成进展';
$lang->stakeholder->expectation  = '期望管理';
$lang->stakeholder->createExpect = '添加期望';
$lang->stakeholder->deleteExpect = '删除期望';
$lang->stakeholder->editExpect   = '编辑期望';
$lang->stakeholder->viewExpect   = '期望信息';
$lang->stakeholder->issue        = '问题管理';
$lang->stakeholder->viewIssue    = '活动问题列表';
$lang->stakeholder->userIssue    = '干系人问题列表';

$lang->stakeholder->viewAction      = '干系人详情';
$lang->stakeholder->viewIssueAction = '问题列表';

$lang->stakeholder->id          = '编号';
$lang->stakeholder->user        = '用户';
$lang->stakeholder->type        = '类型';
$lang->stakeholder->name        = '姓名';
$lang->stakeholder->phone       = '手机';
$lang->stakeholder->qq          = 'QQ';
$lang->stakeholder->weixin      = '微信';
$lang->stakeholder->email       = '邮箱';
$lang->stakeholder->isKey       = '关键干系人';
$lang->stakeholder->inside      = '内部干系人';
$lang->stakeholder->outside     = '外部干系人';
$lang->stakeholder->from        = '类型';
$lang->stakeholder->company     = '所属公司';
$lang->stakeholder->nature      = '性格特征';
$lang->stakeholder->analysis    = '影响分析';
$lang->stakeholder->strategy    = '应对策略';
$lang->stakeholder->expect      = '期望内容';
$lang->stakeholder->progress    = '达成进展';
$lang->stakeholder->createdBy   = '创建者';
$lang->stakeholder->createdDate = '创建日期';
$lang->stakeholder->emptyTip    = '暂无问题。';

$lang->stakeholder->keyList[0] = '否';
$lang->stakeholder->keyList[1] = '是';

$lang->stakeholder->typeList['inside']  = '内部';
$lang->stakeholder->typeList['outside'] = '外部';

$lang->stakeholder->fromList['team']    = '项目团队成员';
$lang->stakeholder->fromList['company'] = '公司同事';
$lang->stakeholder->fromList['outside'] = '外部人员';

$lang->stakeholder->userEmpty           = '用户不能为空！';
$lang->stakeholder->nameEmpty           = '姓名不能为空！';
$lang->stakeholder->companyEmpty        = '所属公司不能为空！';
$lang->stakeholder->confirmDelete       = "您确定删除该干系人吗？";
$lang->stakeholder->confirmDeleteExpect = "您确定删除该干系人期望吗？";
$lang->stakeholder->createCommunicate   = '<i class="icon icon-chat-line"></i>添加沟通记录';

$lang->stakeholder->action = new stdclass();
$lang->stakeholder->action->communicate = array('main' => '$date, 由 <strong>$actor</strong> 沟通。');
/* story */
global $config;
$lang->story->create            = "提{$lang->SRCommon}";
$lang->story->createStory       = "提{$lang->SRCommon}";
$lang->story->createRequirement = "提{$lang->SRCommon}";

$lang->story->requirement       = zget($lang, 'URCommon', "需求");
$lang->story->story             = zget($lang, 'SRCommon', "故事");
$lang->story->createStory       = '添加' . $lang->story->story;
$lang->story->createRequirement = '添加' . $lang->story->requirement;
$lang->story->affectedStories   = "影响的{$lang->story->story}";

$lang->story->batchCreate        = "批量创建";
$lang->story->change             = "变更";
$lang->story->changed            = "{$lang->SRCommon}变更";
$lang->story->assignTo           = '指派';
$lang->story->review             = '评审';
$lang->story->needReview         = '需要评审';
$lang->story->batchReview        = '批量评审';
$lang->story->edit               = "编辑";
$lang->story->batchEdit          = "批量编辑";
$lang->story->subdivide          = '细分';
$lang->story->link               = '关联';
$lang->story->unlink             = '移除';
$lang->story->track              = '跟踪矩阵';
$lang->story->trackAB            = '矩阵';
$lang->story->processStoryChange = '处理需求变更';
$lang->story->splitRequirent     = '拆分';
$lang->story->close              = '关闭';
$lang->story->batchClose         = '批量关闭';
$lang->story->activate           = '激活';
$lang->story->delete             = "删除";
$lang->story->view               = "{$lang->SRCommon}详情";
$lang->story->setting            = "设置";
$lang->story->tasks              = "相关任务";
$lang->story->bugs               = "相关Bug";
$lang->story->cases              = "相关用例";
$lang->story->taskCount          = '任务数';
$lang->story->bugCount           = 'Bug数';
$lang->story->caseCount          = '用例数';
$lang->story->taskCountAB        = 'T';
$lang->story->bugCountAB         = 'B';
$lang->story->caseCountAB        = 'C';
$lang->story->linkStory          = "关联{$lang->SRCommon}";
$lang->story->unlinkStory        = "移除相关{$lang->SRCommon}";
$lang->story->export             = "导出数据";
$lang->story->zeroCase           = "零用例{$lang->SRCommon}";
$lang->story->zeroTask           = "只列零任务{$lang->SRCommon}";
$lang->story->reportChart        = "统计报表";
$lang->story->copyTitle          = "同{$lang->SRCommon}名称";
$lang->story->batchChangePlan    = "批量修改计划";
$lang->story->batchChangeBranch  = "批量修改分支";
$lang->story->batchChangeStage   = "批量修改阶段";
$lang->story->batchAssignTo      = "批量指派";
$lang->story->batchChangeModule  = "批量修改模块";
$lang->story->viewAll            = '查看全部';
$lang->story->toTask             = '转任务';
$lang->story->batchToTask        = '批量转任务';
$lang->story->convertRelations   = '换算关系';

$lang->story->editAction      = "编辑{$lang->SRCommon}";
$lang->story->changeAction    = "变更{$lang->SRCommon}";
$lang->story->assignAction    = "指派{$lang->SRCommon}";
$lang->story->reviewAction    = "评审{$lang->SRCommon}";
$lang->story->subdivideAction = "细分{$lang->SRCommon}";
$lang->story->closeAction     = "关闭{$lang->SRCommon}";
$lang->story->activateAction  = "激活{$lang->SRCommon}";
$lang->story->deleteAction    = "删除{$lang->SRCommon}";
$lang->story->exportAction    = "导出{$lang->SRCommon}";
$lang->story->reportAction    = "统计报表";

$lang->story->skipStory       = '需求：%s 为父需求，将不会被关闭。';
$lang->story->closedStory     = '需求：%s 已关闭，将不会被关闭。';
$lang->story->batchToTaskTips = "此操作会创建与所选{$lang->SRCommon}同名的任务，并将{$lang->SRCommon}关联到任务中，已关闭的需求不会转为任务。";
$lang->story->successToTask   = '批量转任务成功';
$lang->story->storyRound      = '第 %s 轮估算';

$lang->story->common         = $lang->SRCommon;
$lang->story->id             = '编号';
$lang->story->parent         = '父需求';
$lang->story->product        = "所属{$lang->productCommon}";
$lang->story->project        = "所属项目";
$lang->story->branch         = "分支/平台";
$lang->story->module         = '所属模块';
$lang->story->moduleAB       = '模块';
$lang->story->source         = "来源";
$lang->story->sourceNote     = '来源备注';
$lang->story->fromBug        = '来源Bug';
$lang->story->title          = "{$lang->SRCommon}名称";
$lang->story->category       = "类型";
$lang->story->color          = '标题颜色';
$lang->story->toBug          = '转Bug';
$lang->story->spec           = "描述";
$lang->story->assign         = '指派给';
$lang->story->verify         = '验收标准';
$lang->story->pri            = '优先级';
$lang->story->estimate       = "预计{$lang->hourCommon}";
$lang->story->estimateAB     = '预计';
$lang->story->hour           = $lang->hourCommon;
$lang->story->status         = '当前状态';
$lang->story->subStatus      = '子状态';
$lang->story->stage          = '所处阶段';
$lang->story->stageAB        = '阶段';
$lang->story->stagedBy       = '设置阶段者';
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
$lang->story->reviewers      = '评审人员';
$lang->story->reviewedDate   = '评审时间';
$lang->story->version        = '版本号';
$lang->story->plan           = "所属计划";
$lang->story->planAB         = '计划';
$lang->story->comment        = '备注';
$lang->story->children       = "子{$lang->SRCommon}";
$lang->story->childrenAB     = "子";
$lang->story->linkStories    = "相关{$lang->SRCommon}";
$lang->story->childStories   = "细分{$lang->SRCommon}";
$lang->story->duplicateStory = "重复{$lang->SRCommon}ID";
$lang->story->reviewResult   = '评审结果';
$lang->story->preVersion     = '之前版本';
$lang->story->keywords       = '关键词';
$lang->story->newStory       = "继续添加{$lang->SRCommon}";
$lang->story->colorTag       = '颜色标签';
$lang->story->files          = '附件';
$lang->story->copy           = "复制{$lang->SRCommon}";
$lang->story->total          = "总{$lang->SRCommon}";
$lang->story->allStories     = "所有{$lang->SRCommon}";
$lang->story->draft          = '草稿';
$lang->story->unclosed       = '未关闭';
$lang->story->deleted        = '已删除';
$lang->story->released       = "已发布{$lang->SRCommon}数";
$lang->story->URChanged      = '用需变更';
$lang->story->design         = '相关设计';
$lang->story->case           = '相关用例';
$lang->story->bug            = '相关Bug';
$lang->story->repoCommit     = '相关提交';
$lang->story->noRequirement  = '无需求';
$lang->story->one            = '一个';
$lang->story->field          = '同步的字段';
$lang->story->completeRate   = '完成率';
$lang->story->reviewed       = '已评审';
$lang->story->toBeReviewed   = '待评审';

$lang->story->ditto       = '同上';
$lang->story->dittoNotice = "该{$lang->SRCommon}与上一{$lang->SRCommon}不属于同一产品！";

$lang->story->needNotReviewList[0] = '需要评审';
$lang->story->needNotReviewList[1] = '不需要评审';

$lang->story->useList[0] = '不使用';
$lang->story->useList[1] = '使用';

$lang->story->statusList['']        = '';
$lang->story->statusList['draft']   = '草稿';
$lang->story->statusList['active']  = '激活';
$lang->story->statusList['closed']  = '已关闭';
$lang->story->statusList['changed'] = '已变更';

$lang->story->stageList['']           = '';
$lang->story->stageList['wait']       = '未开始';
$lang->story->stageList['planned']    = "已计划";
$lang->story->stageList['projected']  = '已立项';
$lang->story->stageList['developing'] = '研发中';
$lang->story->stageList['developed']  = '研发完毕';
$lang->story->stageList['testing']    = '测试中';
$lang->story->stageList['tested']     = '测试完毕';
$lang->story->stageList['verified']   = '已验收';
$lang->story->stageList['released']   = '已发布';
$lang->story->stageList['closed']     = '已关闭';

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
$lang->story->sourceList['forum']      = '论坛';
$lang->story->sourceList['other']      = '其他';

$lang->story->priList[]  = '';
$lang->story->priList[1] = '1';
$lang->story->priList[2] = '2';
$lang->story->priList[3] = '3';
$lang->story->priList[4] = '4';

$lang->story->changeList = array();
$lang->story->changeList['no']  = '不变更';
$lang->story->changeList['yes'] = '变更';

$lang->story->legendBasicInfo      = '基本信息';
$lang->story->legendLifeTime       = "{$lang->SRCommon}的一生";
$lang->story->legendRelated        = '相关信息';
$lang->story->legendMailto         = '抄送给';
$lang->story->legendAttatch        = '附件';
$lang->story->legendProjectAndTask = $lang->executionCommon . '任务';
$lang->story->legendBugs           = '相关Bug';
$lang->story->legendFromBug        = '来源Bug';
$lang->story->legendCases          = '相关用例';
$lang->story->legendLinkStories    = "相关{$lang->SRCommon}";
$lang->story->legendChildStories   = "细分{$lang->SRCommon}";
$lang->story->legendSpec           = "{$lang->SRCommon}描述";
$lang->story->legendVerify         = '验收标准';
$lang->story->legendMisc           = '其他相关';

$lang->story->lblChange            = "变更{$lang->SRCommon}";
$lang->story->lblReview            = "评审{$lang->SRCommon}";
$lang->story->lblActivate          = "激活{$lang->SRCommon}";
$lang->story->lblClose             = "关闭{$lang->SRCommon}";
$lang->story->lblTBC               = '任务Bug用例';

$lang->story->checkAffection       = '影响范围';
$lang->story->affectedProjects     = "影响的{$lang->project->common}或{$lang->execution->common}";
$lang->story->affectedBugs         = '影响的Bug';
$lang->story->affectedCases        = '影响的用例';

$lang->story->specTemplate          = "建议参考的模板：作为一名<某种类型的用户>，我希望<达成某些目的>，这样可以<开发的价值>。";
$lang->story->needNotReview         = '不需要评审';
$lang->story->successSaved          = "{$lang->SRCommon}成功添加，";
$lang->story->confirmDelete         = "您确认删除该{$lang->SRCommon}吗?";
$lang->story->errorEmptyChildStory  = "『细分{$lang->SRCommon}』不能为空。";
$lang->story->errorNotSubdivide     = "状态不是激活，或者阶段不是未开始的{$lang->SRCommon}，或者是子需求，则不能细分。";
$lang->story->errorEmptyReviewedBy  = "『由谁评审』不能为空。";
$lang->story->mustChooseResult      = '必须选择评审结果';
$lang->story->mustChoosePreVersion  = '必须选择回溯的版本';
$lang->story->noStory               = "暂时没有{$lang->SRCommon}。";
$lang->story->noRequirement         = "暂时没有{$lang->URCommon}。";
$lang->story->ignoreChangeStage     = "{$lang->SRCommon} %s 为草稿状态或已关闭状态，没有修改其阶段。";
$lang->story->cannotDeleteParent    = "不能删除父{$lang->SRCommon}";
$lang->story->moveChildrenTips      = "修改父{$lang->SRCommon}的所属产品会将其下的子{$lang->SRCommon}也移动到所选产品下。";
$lang->story->changeTips            = '该软件需求关联的用户需求有变更，点击“不变更”忽略此条变更，点击“变更”来进行该软件需求的变更。';
$lang->story->estimateMustBeNumber  = '估算值必须是数字';

$lang->story->form = new stdclass();
$lang->story->form->area      = "该{$lang->SRCommon}所属范围";
$lang->story->form->desc      = "描述及标准，什么{$lang->SRCommon}？如何验收？";
$lang->story->form->resource  = '资源分配，有谁完成？需要多少时间？';
$lang->story->form->file      = "附件，如果该{$lang->SRCommon}有相关文件，请点此上传。";

$lang->story->action = new stdclass();
$lang->story->action->reviewed              = array('main' => '$date, 由 <strong>$actor</strong> 记录评审结果，结果为 <strong>$extra</strong>。', 'extra' => 'reviewResultList');
$lang->story->action->passreviewed          = array('main' => '$date, 由 <strong>系统</strong> 判定，结果为 <strong>确认通过</strong>。');
$lang->story->action->clarifyreviewed       = array('main' => '$date, 由 <strong>系统</strong> 判定，结果为 <strong>评审不通过</strong>，请变更后重新发起评审。');
$lang->story->action->rejectreviewed        = array('main' => '$date, 由 <strong>$actor</strong> 记录评审结果，结果为 <strong>$extra</strong>，原因为 <strong>$reason</strong>。', 'extra' => 'reviewResultList', 'reason' => 'reasonList');
$lang->story->action->closed                = array('main' => '$date, 由 <strong>$actor</strong> 关闭，原因为 <strong>$extra</strong> $appendLink。', 'extra' => 'reasonList');
$lang->story->action->reviewclosed          = array('main' => '$date, 由 <strong>系统</strong> 关闭，原因为 <strong>评审失败</strong>。');
$lang->story->action->linked2plan           = array('main' => '$date, 由 <strong>$actor</strong> 关联到计划 <strong>$extra</strong>。');
$lang->story->action->unlinkedfromplan      = array('main' => '$date, 由 <strong>$actor</strong> 从计划 <strong>$extra</strong> 移除。');
$lang->story->action->linked2execution      = array('main' => '$date, 由 <strong>$actor</strong> 关联到' . $lang->executionCommon . ' <strong>$extra</strong>。');
$lang->story->action->unlinkedfromexecution = array('main' => '$date, 由 <strong>$actor</strong> 从' . $lang->executionCommon . ' <strong>$extra</strong> 移除。');
$lang->story->action->linked2project        = array('main' => '$date, 由 <strong>$actor</strong> 关联到项目 <strong>$extra</strong>。');
$lang->story->action->unlinkedfromproject   = array('main' => '$date, 由 <strong>$actor</strong> 从项目 <strong>$extra</strong> 移除。');
$lang->story->action->linked2build          = array('main' => '$date, 由 <strong>$actor</strong> 关联到版本 <strong>$extra</strong>。');
$lang->story->action->unlinkedfrombuild     = array('main' => '$date, 由 <strong>$actor</strong> 从版本 <strong>$extra</strong> 移除。');
$lang->story->action->linked2release        = array('main' => '$date, 由 <strong>$actor</strong> 关联到发布 <strong>$extra</strong>。');
$lang->story->action->unlinkedfromrelease   = array('main' => '$date, 由 <strong>$actor</strong> 从发布 <strong>$extra</strong> 移除。');
$lang->story->action->linkrelatedstory      = array('main' => "\$date, 由 <strong>\$actor</strong> 关联相关{$lang->SRCommon} <strong>\$extra</strong>。");
$lang->story->action->subdividestory        = array('main' => "\$date, 由 <strong>\$actor</strong> 细分为{$lang->SRCommon}   <strong>\$extra</strong>。");
$lang->story->action->unlinkrelatedstory    = array('main' => "\$date, 由 <strong>\$actor</strong> 移除相关{$lang->SRCommon} <strong>\$extra</strong>。");
$lang->story->action->unlinkchildstory      = array('main' => "\$date, 由 <strong>\$actor</strong> 移除细分{$lang->SRCommon} <strong>\$extra</strong>。");

$lang->story->report = new stdclass();
$lang->story->report->common = '报表';
$lang->story->report->select = '请选择报表类型';
$lang->story->report->create = '生成报表';
$lang->story->report->value  = "需求数";

$lang->story->report->charts['storysPerProduct']        = $lang->productCommon . "{$lang->SRCommon}数量";
$lang->story->report->charts['storysPerModule']         = "模块{$lang->SRCommon}数量";
$lang->story->report->charts['storysPerSource']         = "按{$lang->SRCommon}来源统计";
$lang->story->report->charts['storysPerPlan']           = "按计划进行统计";
$lang->story->report->charts['storysPerStatus']         = '按状态进行统计';
$lang->story->report->charts['storysPerStage']          = '按所处阶段进行统计';
$lang->story->report->charts['storysPerPri']            = '按优先级进行统计';
$lang->story->report->charts['storysPerEstimate']       = "按预计{$lang->hourCommon}进行统计";
$lang->story->report->charts['storysPerOpenedBy']       = '按由谁创建来进行统计';
$lang->story->report->charts['storysPerAssignedTo']     = '按当前指派来进行统计';
$lang->story->report->charts['storysPerClosedReason']   = '按关闭原因来进行统计';
$lang->story->report->charts['storysPerChange']         = '按变更次数来进行统计';

$lang->story->report->options = new stdclass();
$lang->story->report->options->graph  = new stdclass();
$lang->story->report->options->type   = 'pie';
$lang->story->report->options->width  = 500;
$lang->story->report->options->height = 140;

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
$lang->story->report->storysPerOpenedBy->item     = '由谁创建';
$lang->story->report->storysPerAssignedTo->item   = '指派给';
$lang->story->report->storysPerClosedReason->item = '原因';
$lang->story->report->storysPerEstimate->item     = "预计{$lang->hourCommon}";
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

$lang->story->notice = new stdClass();
$lang->story->notice->closed = "您选择的{$lang->SRCommon}已经被关闭了！";

$lang->story->convertToTask = new stdClass();
$lang->story->convertToTask->fieldList = array();
$lang->story->convertToTask->fieldList['module']     = '所属模块';
$lang->story->convertToTask->fieldList['spec']       = "{$lang->SRCommon}描述";
$lang->story->convertToTask->fieldList['pri']        = '优先级';
$lang->story->convertToTask->fieldList['mailto']     = '抄送给';
$lang->story->convertToTask->fieldList['assignedTo'] = '指派给';

$lang->story->categoryList['feature']     = '功能';
$lang->story->categoryList['interface']   = '接口';
$lang->story->categoryList['performance'] = '性能';
$lang->story->categoryList['safe']        = '安全';
$lang->story->categoryList['experience']  = '体验';
$lang->story->categoryList['improve']     = '改进';
$lang->story->categoryList['other']       = '其他';
/* svn */
$lang->svn->common  = 'Subversion';
$lang->svn->cat     = '查看源代码';
$lang->svn->diff    = '比较源代码';
$lang->svn->apiSync = '接口：同步svn日志';
/* task */
$lang->task->index               = "任务一览";
$lang->task->create              = "建任务";
$lang->task->batchCreate         = "批量创建";
$lang->task->batchCreateChildren = "批量建子任务";
$lang->task->batchEdit           = "批量编辑";
$lang->task->batchChangeModule   = "批量修改模块";
$lang->task->batchClose          = "批量关闭";
$lang->task->batchCancel         = "批量取消";
$lang->task->edit                = "编辑任务";
$lang->task->delete              = "删除";
$lang->task->deleteAction        = "删除任务";
$lang->task->deleted             = "已删除";
$lang->task->delayed             = '延期';
$lang->task->view                = "查看任务";
$lang->task->logEfforts          = "记录工时";
$lang->task->record              = "工时";
$lang->task->start               = "开始";
$lang->task->startAction         = "开始任务";
$lang->task->restart             = "继续";
$lang->task->restartAction       = "继续任务";
$lang->task->finishAction        = "完成任务";
$lang->task->finish              = "完成";
$lang->task->pause               = "暂停";
$lang->task->pauseAction         = "暂停任务";
$lang->task->close               = "关闭";
$lang->task->closeAction         = "关闭任务";
$lang->task->cancel              = "取消";
$lang->task->cancelAction        = "取消任务";
$lang->task->activateAction      = "激活任务";
$lang->task->activate            = "激活";
$lang->task->export              = "导出数据";
$lang->task->exportAction        = "导出任务";
$lang->task->reportChart         = "报表统计";
$lang->task->fromBug             = '来源Bug';
$lang->task->case                = '相关用例';
$lang->task->confirmStoryChange  = "确认{$lang->SRCommon}变动";
$lang->task->storyChange         = "{$lang->SRCommon}变更";
$lang->task->progress            = '进度';
$lang->task->progressAB          = '进度';
$lang->task->progressTips        = '已消耗/(已消耗+剩余)';
$lang->task->copy                = '复制任务';
$lang->task->waitTask            = '未开始的任务';
$lang->task->allModule           = '所有模块';

$lang->task->common           = '任务';
$lang->task->id               = '编号';
$lang->task->project          = '所属项目';
$lang->task->execution        = '所属' . $lang->execution->common;
$lang->task->module           = '所属模块';
$lang->task->moduleAB         = '模块';
$lang->task->story            = "相关{$lang->SRCommon}";
$lang->task->storyAB          = $lang->SRCommon;
$lang->task->storySpec        = "{$lang->SRCommon}描述";
$lang->task->storyVerify      = '验收标准';
$lang->task->storyVersion     = "{$lang->SRCommon}版本";
$lang->task->color            = '标题颜色';
$lang->task->name             = '任务名称';
$lang->task->type             = '任务类型';
$lang->task->pri              = '优先级';
$lang->task->mailto           = '抄送给';
$lang->task->estimate         = '最初预计';
$lang->task->estimateAB       = '预计';
$lang->task->left             = '预计剩余';
$lang->task->leftAB           = '剩余';
$lang->task->consumed         = '总计消耗';
$lang->task->currentConsumed  = '本次消耗';
$lang->task->myConsumed       = '我的总消耗';
$lang->task->consumedAB       = '消耗';
$lang->task->hour             = '小时';
$lang->task->consumedThisTime = '工时';
$lang->task->leftThisTime     = '剩余';
$lang->task->datePlan         = '日程规划';
$lang->task->estStarted       = '预计开始';
$lang->task->realStarted      = '实际开始';
$lang->task->date             = '日期';
$lang->task->deadline         = '截止日期';
$lang->task->deadlineAB       = '截止';
$lang->task->status           = '任务状态';
$lang->task->subStatus        = '子状态';
$lang->task->desc             = '任务描述';
$lang->task->assign           = '指派';
$lang->task->assignAction     = '指派任务';
$lang->task->assignTo         = $lang->task->assign;
$lang->task->batchAssignTo    = '批量指派';
$lang->task->assignedTo       = '指派给';
$lang->task->assignedToAB     = '指派给';
$lang->task->assignedDate     = '指派日期';
$lang->task->openedBy         = '由谁创建';
$lang->task->openedDate       = '创建日期';
$lang->task->openedDateAB     = '创建';
$lang->task->finishedBy       = '由谁完成';
$lang->task->finishedByAB     = '完成者';
$lang->task->finishedDate     = '实际完成';
$lang->task->finishedDateAB   = '实际完成';
$lang->task->finishedList     = '完成者列表';
$lang->task->canceledBy       = '由谁取消';
$lang->task->canceledDate     = '取消时间';
$lang->task->closedBy         = '由谁关闭';
$lang->task->closedDate       = '关闭时间';
$lang->task->closedReason     = '关闭原因';
$lang->task->lastEditedBy     = '最后修改';
$lang->task->lastEditedDate   = '最后修改日期';
$lang->task->lastEdited       = '最后编辑';
$lang->task->recordEstimate   = '工时';
$lang->task->editEstimate     = '编辑工时';
$lang->task->deleteEstimate   = '删除工时';
$lang->task->colorTag         = '颜色标签';
$lang->task->files            = '附件';
$lang->task->hasConsumed      = '之前消耗';
$lang->task->multiple         = '多人任务';
$lang->task->multipleAB       = '多人';
$lang->task->team             = '团队';
$lang->task->transfer         = '转交';
$lang->task->transferTo       = '转交给';
$lang->task->children         = '子任务';
$lang->task->childrenAB       = '子';
$lang->task->parent           = '父任务';
$lang->task->parentAB         = '父';
$lang->task->lblPri           = 'P';
$lang->task->lblHour          = '(h)';
$lang->task->lblTestStory     = "测试{$lang->SRCommon}";

$lang->task->recordEstimateAction = '添加工时';

$lang->task->ditto             = '同上';
$lang->task->dittoNotice       = "该任务与上一任务不属于同一%s！";
$lang->task->selectTestStory   = "选择测试需求";
$lang->task->selectAllUser     = '全部';
$lang->task->noStory           = "无{$lang->SRCommon}";
$lang->task->noAssigned        = '未指派';
$lang->task->noFinished        = '未完成';
$lang->task->noClosed          = '未关闭';
$lang->task->yesterdayFinished = '昨日完成任务数';
$lang->task->allTasks          = '总任务';

$lang->task->statusList['']       = '';
$lang->task->statusList['wait']   = '未开始';
$lang->task->statusList['doing']  = '进行中';
$lang->task->statusList['done']   = '已完成';
$lang->task->statusList['pause']  = '已暂停';
$lang->task->statusList['cancel'] = '已取消';
$lang->task->statusList['closed'] = '已关闭';

$lang->task->typeList['']        = '';
$lang->task->typeList['design']  = '设计';
$lang->task->typeList['devel']   = '开发';
$lang->task->typeList['request'] = '需求';
$lang->task->typeList['test']    = '测试';
$lang->task->typeList['study']   = '研究';
$lang->task->typeList['discuss'] = '讨论';
$lang->task->typeList['ui']      = '界面';
$lang->task->typeList['affair']  = '事务';
$lang->task->typeList['misc']    = '其他';

$lang->task->priList[0] = '';
$lang->task->priList[1] = '1';
$lang->task->priList[2] = '2';
$lang->task->priList[3] = '3';
$lang->task->priList[4] = '4';

$lang->task->reasonList['']       = '';
$lang->task->reasonList['done']   = '已完成';
$lang->task->reasonList['cancel'] = '已取消';

$lang->task->afterChoices['continueAdding'] = "继续为该{$lang->SRCommon}添加任务";
$lang->task->afterChoices['toTaskList']     = '返回任务列表';
$lang->task->afterChoices['toStoryList']    = "返回{$lang->SRCommon}列表";

$lang->task->legendBasic  = '基本信息';
$lang->task->legendEffort = '工时信息';
$lang->task->legendLife   = '任务的一生';
$lang->task->legendDesc   = '任务描述';

$lang->task->confirmDelete          = "您确定要删除这个任务吗？";
$lang->task->confirmDeleteEstimate  = "您确定要删除这个记录吗？";
$lang->task->copyStoryTitle         = "同{$lang->SRCommon}";
$lang->task->afterSubmit            = "添加之后";
$lang->task->successSaved           = "成功添加，";
$lang->task->delayWarning           = " <strong class='text-danger'> 延期%s天 </strong>";
$lang->task->remindBug              = "该任务为Bug转化得到，是否更新Bug:%s ?";
$lang->task->confirmChangeExecution = "修改{$lang->executionCommon}会导致相应的所属模块、相关{$lang->SRCommon}和指派人发生变化，确定吗？";
$lang->task->confirmFinish          = '"预计剩余"为0，确认将任务状态改为"已完成"吗？';
$lang->task->confirmRecord          = '"剩余"为0，任务将标记为"已完成"，您确定吗？';
$lang->task->confirmTransfer        = '"当前剩余"为0，任务将被转交，您确定吗？';
$lang->task->noticeTaskStart        = '"总计消耗"和"预计剩余"不能同时为0';
$lang->task->noticeLinkStory        = "没有可关联的相关{$lang->SRCommon}，您可以为当前项目%s，然后%s";
$lang->task->noticeSaveRecord       = '您有尚未保存的工时记录，请先将其保存。';
$lang->task->commentActions         = '%s. %s, 由 <strong>%s</strong> 添加备注。';
$lang->task->deniedNotice           = '当前任务只有%s才可以%s。';
$lang->task->noTask                 = '暂时没有任务。';
$lang->task->createDenied           = '你不能在该项目添加任务';
$lang->task->cannotDeleteParent     = '不能删除父任务。';
$lang->task->addChildTask           = '因该任务已经产生消耗，为保证数据一致性，我们会帮您创建一条同名子任务记录该消耗。';

$lang->task->error                    = new stdclass();
$lang->task->error->totalNumber       = '"总计消耗"必须为数字';
$lang->task->error->consumedNumber    = '"本次消耗"必须为数字';
$lang->task->error->estimateNumber    = '"最初预计"必须为数字';
$lang->task->error->recordMinus       = '工时不能为负数';
$lang->task->error->leftNumber        = '"预计剩余"必须为数字';
$lang->task->error->recordMinus       = '工时不能为负数';
$lang->task->error->consumedSmall     = '"总计消耗"必须大于之前消耗';
$lang->task->error->consumedThisTime  = '请填写"工时"';
$lang->task->error->left              = '请填写"剩余"';
$lang->task->error->work              = '"备注"必须小于%d个字符';
$lang->task->error->skipClose         = '任务：%s 不是“已完成”或“已取消”状态，确定要关闭吗？';
$lang->task->error->consumed          = '任务：%s工时不能小于0，忽略该任务工时的改动';
$lang->task->error->assignedTo        = '当前状态的多人任务不能指派给任务团队外的成员。';
$lang->task->error->consumedEmpty     = '"本次消耗"不能为0';
$lang->task->error->deadlineSmall     = '"截止日期"必须大于"预计开始"';
$lang->task->error->alreadyStarted    = '此任务已被启动，不能重复启动！';
$lang->task->error->realStartedEmpty  = '实际开始不能为空';
$lang->task->error->finishedDateEmpty = '实际完成不能为空';
$lang->task->error->alreadyConsumed   = '当前选中的父任务已有消耗。';

$lang->task->report         = new stdclass();
$lang->task->report->common = '报表';
$lang->task->report->select = '请选择报表类型';
$lang->task->report->create = '生成报表';
$lang->task->report->value  = '任务数';

$lang->task->report->charts['tasksPerExecution']    = '按' . $lang->executionCommon . '任务数统计';
$lang->task->report->charts['tasksPerModule']       = '按模块任务数统计';
$lang->task->report->charts['tasksPerAssignedTo']   = '按指派给统计';
$lang->task->report->charts['tasksPerType']         = '按任务类型统计';
$lang->task->report->charts['tasksPerPri']          = '按优先级统计';
$lang->task->report->charts['tasksPerStatus']       = '按任务状态统计';
$lang->task->report->charts['tasksPerDeadline']     = '按截止日期统计';
$lang->task->report->charts['tasksPerEstimate']     = '按预计时间统计';
$lang->task->report->charts['tasksPerLeft']         = '按剩余时间统计';
$lang->task->report->charts['tasksPerConsumed']     = '按消耗时间统计';
$lang->task->report->charts['tasksPerFinishedBy']   = '按由谁完成统计';
$lang->task->report->charts['tasksPerClosedReason'] = '按关闭原因统计';
$lang->task->report->charts['finishedTasksPerDay']  = '按每天完成统计';

$lang->task->report->options         = new stdclass();
$lang->task->report->options->graph  = new stdclass();
$lang->task->report->options->type   = 'pie';
$lang->task->report->options->width  = 500;
$lang->task->report->options->height = 140;

$lang->task->report->tasksPerExecution    = new stdclass();
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

$lang->task->report->tasksPerExecution->item    = $lang->executionCommon;
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

$lang->task->report->tasksPerExecution->graph    = new stdclass();
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

$lang->task->report->tasksPerExecution->graph->xAxisName    = $lang->executionCommon;
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

$lang->task->report->finishedTasksPerDay->type             = 'bar';
$lang->task->report->finishedTasksPerDay->graph->xAxisName = '日期';

$lang->taskestimate           = new stdclass();
$lang->taskestimate->consumed = '工时';
/* testcase */
$lang->testcase->id               = '用例编号';
$lang->testcase->product          = "所属{$lang->productCommon}";
$lang->testcase->module           = '所属模块';
$lang->testcase->lib              = "所属库";
$lang->testcase->branch           = "分支/平台";
$lang->testcase->moduleAB         = '模块';
$lang->testcase->story            = "相关{$lang->SRCommon}";
$lang->testcase->storyVersion     = "{$lang->SRCommon}版本";
$lang->testcase->color            = '标题颜色';
$lang->testcase->order            = '排序';
$lang->testcase->title            = '用例标题';
$lang->testcase->precondition     = '前置条件';
$lang->testcase->pri              = '优先级';
$lang->testcase->type             = '用例类型';
$lang->testcase->status           = '用例状态';
$lang->testcase->subStatus        = '子状态';
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
$lang->testcase->reviewedBy       = '由谁评审';
$lang->testcase->reviewedDate     = '评审时间';
$lang->testcase->reviewResult     = '评审结果';
$lang->testcase->reviewedByAB     = '评审人';
$lang->testcase->reviewedDateAB   = '日期';
$lang->testcase->reviewResultAB   = '结果';
$lang->testcase->forceNotReview   = '不需要评审';
$lang->testcase->lastEditedByAB   = '修改者';
$lang->testcase->lastEditedDateAB = '修改日期';
$lang->testcase->lastEditedDate   = '修改日期';
$lang->testcase->version          = '用例版本';
$lang->testcase->lastRunner       = '执行人';
$lang->testcase->lastRunDate      = '执行时间';
$lang->testcase->assignedTo       = '指派给';
$lang->testcase->colorTag         = '颜色标签';
$lang->testcase->lastRunResult    = '结果';
$lang->testcase->desc             = '步骤';
$lang->testcase->xml              = 'XML';
$lang->testcase->expect           = '预期';
$lang->testcase->allProduct       = "所有{$lang->productCommon}";
$lang->testcase->fromBug          = '来源Bug';
$lang->testcase->toBug            = '生成Bug';
$lang->testcase->changed          = '原用例更新';
$lang->testcase->bugs             = '产生Bug数';
$lang->testcase->bugsAB           = 'B';
$lang->testcase->results          = '执行结果数';
$lang->testcase->resultsAB        = 'R';
$lang->testcase->stepNumber       = '用例步骤数';
$lang->testcase->stepNumberAB     = 'S';
$lang->testcase->createBug        = '转Bug';
$lang->testcase->fromModule       = '来源模块';
$lang->testcase->fromCase         = '来源用例';
$lang->testcase->sync             = '同步';
$lang->testcase->ignore           = '忽略';
$lang->testcase->fromTesttask     = '来自测试单用例';
$lang->testcase->fromCaselib      = '来自用例库用例';
$lang->testcase->deleted          = '是否删除';
$lang->testcase->browseUnits      = '单元测试';

$lang->case = $lang->testcase;  // 用于DAO检查时使用。因为case是系统关键字，所以无法定义该模块为case，只能使用testcase，但表还是使用的case。

$lang->testcase->stepID      = '编号';
$lang->testcase->stepDesc    = '步骤';
$lang->testcase->stepExpect  = '预期';
$lang->testcase->stepVersion = '版本';

$lang->testcase->common                  = '用例';
$lang->testcase->index                   = "用例管理首页";
$lang->testcase->create                  = "建用例";
$lang->testcase->batchCreate             = "批量建用例";
$lang->testcase->delete                  = "删除";
$lang->testcase->deleteAction            = "删除用例";
$lang->testcase->view                    = "用例详情";
$lang->testcase->review                  = "评审";
$lang->testcase->reviewAB                = "评审";
$lang->testcase->batchReview             = "批量评审";
$lang->testcase->edit                    = "编辑用例";
$lang->testcase->batchEdit               = "批量编辑 ";
$lang->testcase->batchChangeModule       = "批量修改模块";
$lang->testcase->confirmLibcaseChange    = "同步用例库用例修改";
$lang->testcase->ignoreLibcaseChange     = "忽略用例库用例修改";
$lang->testcase->batchChangeBranch       = "批量修改分支";
$lang->testcase->groupByStories          = "{$lang->SRCommon}分组";
$lang->testcase->batchDelete             = "批量删除 ";
$lang->testcase->batchConfirmStoryChange = "批量确认变更";
$lang->testcase->batchCaseTypeChange     = "批量修改类型";
$lang->testcase->browse                  = "用例列表";
$lang->testcase->groupCase               = "分组浏览用例";
$lang->testcase->import                  = "导入";
$lang->testcase->importAction            = "导入用例";
$lang->testcase->fileImport              = "导入CSV";
$lang->testcase->importFromLib           = "从用例库中导入";
$lang->testcase->showImport              = "显示导入内容";
$lang->testcase->exportTemplet           = "导出模板";
$lang->testcase->export                  = "导出数据";
$lang->testcase->exportAction            = "导出用例";
$lang->testcase->reportChart             = '报表统计';
$lang->testcase->reportAction            = '用例报表统计';
$lang->testcase->confirmChange           = '确认用例变动';
$lang->testcase->confirmStoryChange      = "确认{$lang->SRCommon}变动";
$lang->testcase->copy                    = '复制用例';
$lang->testcase->group                   = '分组';
$lang->testcase->groupName               = '分组名称';
$lang->testcase->step                    = '步骤';
$lang->testcase->stepChild               = '子步骤';
$lang->testcase->viewAll                 = '查看所有';

$lang->testcase->new = '新增';

$lang->testcase->num = '用例记录数：';

$lang->testcase->deleteStep   = '删除';
$lang->testcase->insertBefore = '之前添加';
$lang->testcase->insertAfter  = '之后添加';

$lang->testcase->assignToMe   = '指派给我的用例';
$lang->testcase->openedByMe   = '我建的用例';
$lang->testcase->allCases     = '所有';
$lang->testcase->allTestcases = '所有用例';
$lang->testcase->needConfirm  = "{$lang->SRCommon}变动";
$lang->testcase->bySearch     = '搜索';
$lang->testcase->unexecuted   = '未执行';

$lang->testcase->lblStory       = "相关{$lang->SRCommon}";
$lang->testcase->lblLastEdited  = '最后编辑';
$lang->testcase->lblTypeValue   = '类型可选值列表';
$lang->testcase->lblStageValue  = '阶段可选值列表';
$lang->testcase->lblStatusValue = '状态可选值列表';

$lang->testcase->legendBasicInfo   = '基本信息';
$lang->testcase->legendAttatch     = '附件';
$lang->testcase->legendLinkBugs    = '相关Bug';
$lang->testcase->legendOpenAndEdit = '创建编辑';
$lang->testcase->legendComment     = '备注';

$lang->testcase->summary            = "本页共 <strong>%s</strong> 个用例，已执行<strong>%s</strong>个。";
$lang->testcase->confirmDelete      = '您确认要删除该测试用例吗？';
$lang->testcase->confirmBatchDelete = '您确认要批量删除这些测试用例吗？';
$lang->testcase->ditto              = '同上';
$lang->testcase->dittoNotice        = '该用例与上一用例不属于同一产品！';

$lang->testcase->reviewList[0] = '否';
$lang->testcase->reviewList[1] = '是';

$lang->testcase->priList[0] = '';
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
$lang->testcase->typeList['unit']        = '单元测试';
$lang->testcase->typeList['other']       = '其他';

$lang->testcase->stageList['']           = '';
$lang->testcase->stageList['unittest']   = '单元测试阶段';
$lang->testcase->stageList['feature']    = '功能测试阶段';
$lang->testcase->stageList['intergrate'] = '集成测试阶段';
$lang->testcase->stageList['system']     = '系统测试阶段';
$lang->testcase->stageList['smoke']      = '冒烟测试阶段';
$lang->testcase->stageList['bvt']        = '版本验证阶段';

$lang->testcase->reviewResultList['']        = '';
$lang->testcase->reviewResultList['pass']    = '确认通过';
$lang->testcase->reviewResultList['clarify'] = '继续完善';

$lang->testcase->statusList['']            = '';
$lang->testcase->statusList['wait']        = '待评审';
$lang->testcase->statusList['normal']      = '正常';
$lang->testcase->statusList['blocked']     = '被阻塞';
$lang->testcase->statusList['investigate'] = '研究中';

$lang->testcase->resultList['n/a']     = '忽略';
$lang->testcase->resultList['pass']    = '通过';
$lang->testcase->resultList['fail']    = '失败';
$lang->testcase->resultList['blocked'] = '阻塞';

$lang->testcase->buttonToList = '返回';

$lang->testcase->errorEncode      = '无数据，请选择正确的编码重新上传！';
$lang->testcase->noFunction       = '不存在iconv和mb_convert_encoding转码方法，不能将数据转成想要的编码！';
$lang->testcase->noRequire        = "%s行的“%s”是必填字段，不能为空";
$lang->testcase->noLibrary        = "现在还没有公共库，请先创建！";
$lang->testcase->mustChooseResult = '必须选择评审结果';
$lang->testcase->noModule         = '<div>您现在还没有模块信息</div><div>请维护测试模块</div>';
$lang->testcase->noCase           = '暂时没有用例。';

$lang->testcase->searchStories = "键入来搜索{$lang->SRCommon}";
$lang->testcase->selectLib     = '请选择库';

$lang->testcase->action = new stdclass();
$lang->testcase->action->fromlib               = array('main' => '$date, 由 <strong>$actor</strong> 从用例库 <strong>$extra</strong>导入。');
$lang->testcase->action->reviewed              = array('main' => '$date, 由 <strong>$actor</strong> 记录评审结果，结果为 <strong>$extra</strong>。', 'extra' => 'reviewResultList');
$lang->testcase->action->linked2project        = array('main' => '$date, 由 <strong>$actor</strong> 关联到项目 <strong>$extra</strong>。');
$lang->testcase->action->unlinkedfromproject   = array('main' => '$date, 由 <strong>$actor</strong> 从项目 <strong>$extra</strong> 移除。');
$lang->testcase->action->linked2execution      = array('main' => '$date, 由 <strong>$actor</strong> 关联到' . $lang->executionCommon . ' <strong>$extra</strong>。');
$lang->testcase->action->unlinkedfromexecution = array('main' => '$date, 由 <strong>$actor</strong> 从' . $lang->executionCommon . ' <strong>$extra</strong> 移除。');

$lang->testcase->featureBar['browse']['all']         = $lang->testcase->allCases;
$lang->testcase->featureBar['browse']['wait']        = '待评审';
$lang->testcase->featureBar['browse']['needconfirm'] = $lang->testcase->needConfirm;
$lang->testcase->featureBar['browse']['group']       = '分组查看';
$lang->testcase->featureBar['browse']['suite']       = '套件';
$lang->testcase->featureBar['browse']['zerocase']    = "零用例{$lang->SRCommon}";
$lang->testcase->featureBar['browse']['browseunits'] = '单元测试';
$lang->testcase->featureBar['groupcase']             = $lang->testcase->featureBar['browse'];
/* testreport */
$lang->testreport->common       = '测试报告';
$lang->testreport->browse       = '报告列表';
$lang->testreport->create       = '创建报告';
$lang->testreport->edit         = '编辑报告';
$lang->testreport->delete       = '删除报告';
$lang->testreport->export       = '导出';
$lang->testreport->exportAction = '导出报告';
$lang->testreport->view         = '报告详情';
$lang->testreport->recreate     = '重新生成报告';

$lang->testreport->title       = '标题';
$lang->testreport->product     = "所属{$lang->productCommon}";
$lang->testreport->bugTitle    = 'Bug 标题';
$lang->testreport->storyTitle  = "{$lang->SRCommon}标题";
$lang->testreport->project     = '所属项目';
$lang->testreport->execution   = '所属执行';
$lang->testreport->testtask    = '测试版本';
$lang->testreport->tasks       = $lang->testreport->testtask;
$lang->testreport->startEnd    = '起止时间';
$lang->testreport->owner       = '负责人';
$lang->testreport->members     = '参与人员';
$lang->testreport->begin       = '开始时间';
$lang->testreport->end         = '结束时间';
$lang->testreport->stories     = "测试的{$lang->SRCommon}";
$lang->testreport->bugs        = '测试的Bug';
$lang->testreport->builds      = '版本信息';
$lang->testreport->goal        = '项目目标';
$lang->testreport->cases       = '用例';
$lang->testreport->bugInfo     = 'Bug分布';
$lang->testreport->report      = '总结';
$lang->testreport->legacyBugs  = '遗留的Bug';
$lang->testreport->createdBy   = '由谁创建';
$lang->testreport->createdDate = '创建时间';
$lang->testreport->objectID    = '所属对象';
$lang->testreport->objectType  = '对象类型';
$lang->testreport->profile     = '概况';
$lang->testreport->value       = '值';
$lang->testreport->none        = '无';
$lang->testreport->all         = '所有报告';
$lang->testreport->deleted     = '已删除';
$lang->testreport->selectTask  = '按测试单创建报告';

$lang->testreport->legendBasic       = '基本信息';
$lang->testreport->legendStoryAndBug = '测试范围';
$lang->testreport->legendBuild       = '测试轮次';
$lang->testreport->legendCase        = '关联的用例';
$lang->testreport->legendLegacyBugs  = '遗留的Bug';
$lang->testreport->legendReport      = '报表';
$lang->testreport->legendComment     = '总结';
$lang->testreport->legendMore        = '更多功能';
$lang->testreport->date              = '日期';

$lang->testreport->bugSeverityGroups   = 'Bug严重级别分布';
$lang->testreport->bugTypeGroups       = 'Bug类型分布';
$lang->testreport->bugStatusGroups     = 'Bug状态分布';
$lang->testreport->bugOpenedByGroups   = 'Bug创建者分布';
$lang->testreport->bugResolvedByGroups = 'Bug解决者分布';
$lang->testreport->bugResolutionGroups = 'Bug解决方案分布';
$lang->testreport->bugModuleGroups     = 'Bug模块分布';
$lang->testreport->bugStageGroups      = 'Bug重要程度阶段分布';
$lang->testreport->bugHandleGroups     = 'Bug每日处理情况分布';
$lang->testreport->legacyBugs          = '遗留的Bug';
$lang->testreport->bugConfirmedRate    = '有效Bug率 (方案为已解决或延期 / 状态为已解决或已关闭)';
$lang->testreport->bugCreateByCaseRate = '用例发现Bug率 (用例创建的Bug / 时间区间中新增的Bug)';

$lang->testreport->bugStageList = array();
$lang->testreport->bugStageList['generated'] = '产生的Bug';
$lang->testreport->bugStageList['legacy']    = '遗留的Bug';
$lang->testreport->bugStageList['resolved']  = '解决的Bug';

$lang->testreport->caseSummary    = '共有<strong>%s</strong>个用例，共执行<strong>%s</strong>个用例，产生了<strong>%s</strong>个结果，失败的用例有<strong>%s</strong>个。';
$lang->testreport->buildSummary   = '共测试了<strong>%s</strong>个版本。';
$lang->testreport->confirmDelete  = '是否删除该报告？';
$lang->testreport->moreNotice     = '更多功能可以参考禅道扩展机制进行扩展，也可以联系我们进行定制。';
$lang->testreport->exportNotice   = "由<a href='https://www.zentao.net' target='_blank' style='color:grey'>禅道项目管理软件</a>导出";
$lang->testreport->noReport       = "暂无报告，请选择测试单生成测试报告。";
$lang->testreport->foundBugTip    = "影响版本在测试轮次内，并且创建时间在测试时间范围内产生的Bug数。";
$lang->testreport->legacyBugTip   = "Bug状态是激活，或Bug的解决时间在测试结束时间之后。";
$lang->testreport->fromCaseBugTip = "测试时间范围内，用例执行失败后创建的Bug。";
$lang->testreport->errorTrunk     = "主干版本不能创建测试报告，请修改关联版本！";
$lang->testreport->noTestTask     = "该{$lang->productCommon}下还没有关联非Trunk的测试单，不能创建报告。请先创建测试单，再创建。";
$lang->testreport->noObjectID     = "没有选定测试单或{$lang->executionCommon}，无法创建测试报告！";
$lang->testreport->moreProduct    = "只能对同一个{$lang->productCommon}生成测试报告。";
$lang->testreport->hiddenCase     = "隐藏 %s 个用例";

$lang->testreport->bugSummary = <<<EOD
共发现<strong>%s</strong>个Bug <a data-toggle='tooltip' class='text-warning' title='{$lang->testreport->foundBugTip}'><i class='icon-help'></i></a>，
遗留<strong>%s</strong>个Bug <a data-toggle='tooltip' class='text-warning' title='{$lang->testreport->legacyBugTip}'><i class='icon-help'></i></a>。
用例执行产生<strong>%s</strong>个Bug <a data-toggle='tooltip' class='text-warning' title='{$lang->testreport->fromCaseBugTip}'><i class='icon-help'></i></a>。
有效Bug率（方案为已解决或延期 / 状态为已解决或已关闭）：<strong>%s</strong>，用例发现Bug率（用例创建的Bug / 发现Bug数）：<strong>%s</strong>
EOD;
/* testsuite */
$lang->testsuite->index            = "套件首页";
$lang->testsuite->create           = "建套件";
$lang->testsuite->delete           = "删除";
$lang->testsuite->view             = "概况";
$lang->testsuite->edit             = "编辑套件";
$lang->testsuite->browse           = "套件列表";
$lang->testsuite->linkCase         = "关联用例";
$lang->testsuite->linkVersion      = "版本";
$lang->testsuite->unlinkCase       = "移除";
$lang->testsuite->unlinkCaseAction = "移除用例";
$lang->testsuite->batchUnlinkCases = "批量移除用例";
$lang->testsuite->deleted          = '已删除';
$lang->testsuite->successSaved     = '保存成功';

$lang->testsuite->id             = '编号';
$lang->testsuite->common         = '套件';
$lang->testsuite->product        = '所属' . $lang->productCommon;
$lang->testsuite->name           = '名称';
$lang->testsuite->type           = '类型';
$lang->testsuite->desc           = '描述';
$lang->testsuite->author         = '访问权限';
$lang->testsuite->addedBy        = '由谁创建';
$lang->testsuite->addedDate      = '创建时间';
$lang->testsuite->lastEditedBy   = '最后编辑人';
$lang->testsuite->lastEditedDate = '最后编辑时间';

$lang->testsuite->legendDesc      = '描述';
$lang->testsuite->legendBasicInfo = '基本信息';

$lang->testsuite->unlinkedCases = '未关联';

$lang->testsuite->confirmDelete     = '您确认要删除该套件吗？';
$lang->testsuite->confirmUnlinkCase = '您确认要移除该用例吗？';
$lang->testsuite->noticeNone        = '您还没有创建套件';
$lang->testsuite->noModule          = '<div>您现在还没有模块信息</div><div>请维护用例库模块</div>';
$lang->testsuite->noTestsuite       = '暂时没有套件。';

$lang->testsuite->lblCases      = '用例列表';
$lang->testsuite->lblUnlinkCase = '移除用例';

$lang->testsuite->authorList['private'] = '私有';
$lang->testsuite->authorList['public']  = '公开';
/* testtask */
$lang->testtask->index            = "测试单首页";
$lang->testtask->create           = "提交测试";
$lang->testtask->reportChart      = '报表统计';
$lang->testtask->delete           = "删除测试单";
$lang->testtask->importUnitResult = "导入单元测试结果";
$lang->testtask->importunitresult = "导入单元测试"; //Fix bug custom required testtask.
$lang->testtask->browseUnits      = "单元测试列表";
$lang->testtask->unitCases        = "单元测试用例";
$lang->testtask->view             = "概况";
$lang->testtask->edit             = "编辑测试单";
$lang->testtask->browse           = "测试单列表";
$lang->testtask->linkCase         = "关联用例";
$lang->testtask->selectVersion    = "选择测试单";
$lang->testtask->unlinkCase       = "移除";
$lang->testtask->batchUnlinkCases = "批量移除用例";
$lang->testtask->batchAssign      = "批量指派";
$lang->testtask->runCase          = "执行";
$lang->testtask->batchRun         = "批量执行";
$lang->testtask->results          = "结果";
$lang->testtask->createBug        = "提Bug";
$lang->testtask->assign           = '指派';
$lang->testtask->cases            = '用例';
$lang->testtask->groupCase        = "分组浏览用例";
$lang->testtask->pre              = '上一个';
$lang->testtask->next             = '下一个';
$lang->testtask->start            = "开始";
$lang->testtask->close            = "关闭";
$lang->testtask->wait             = "待测测试单";
$lang->testtask->block            = "阻塞";
$lang->testtask->activate         = "激活";
$lang->testtask->testing          = "测试中测试单";
$lang->testtask->blocked          = "被阻塞测试单";
$lang->testtask->done             = "已测测试单";
$lang->testtask->totalStatus      = "全部";
$lang->testtask->all              = "全部" . $lang->productCommon;
$lang->testtask->allTasks         = '所有测试';
$lang->testtask->collapseAll      = '全部折叠';
$lang->testtask->expandAll        = '全部展开';

$lang->testtask->viewAction       = "测试单概况";
$lang->testtask->casesAction      = '查看用例';
$lang->testtask->activateAction   = "激活测试单";
$lang->testtask->blockAction      = "阻塞测试单";
$lang->testtask->closeAction      = "关闭测试单";
$lang->testtask->startAction      = "开始测试单";
$lang->testtask->resultsAction    = "用例结果";
$lang->testtask->reportAction     = '用例报表统计';

$lang->testtask->id             = '编号';
$lang->testtask->common         = '测试单';
$lang->testtask->product        = '所属' . $lang->productCommon;
$lang->testtask->project        = '所属项目';
$lang->testtask->execution      = '所属' . $lang->execution->common;
$lang->testtask->type           = '测试类型';
$lang->testtask->build          = '版本';
$lang->testtask->owner          = '负责人';
$lang->testtask->executor       = '执行人';
$lang->testtask->execTime       = '执行时间';
$lang->testtask->pri            = '优先级';
$lang->testtask->name           = '名称';
$lang->testtask->begin          = '开始日期';
$lang->testtask->end            = '结束日期';
$lang->testtask->desc           = '描述';
$lang->testtask->mailto         = '抄送给';
$lang->testtask->status         = '当前状态';
$lang->testtask->subStatus      = '子状态';
$lang->testtask->testreport     = '相关测试报告';
$lang->testtask->assignedTo     = '指派给';
$lang->testtask->linkVersion    = '版本';
$lang->testtask->lastRunAccount = '执行人';
$lang->testtask->lastRunTime    = '执行时间';
$lang->testtask->lastRunResult  = '结果';
$lang->testtask->reportField    = '测试总结';
$lang->testtask->files          = '上传附件';
$lang->testtask->case           = '用例';
$lang->testtask->version        = '版本';
$lang->testtask->caseResult     = '测试结果';
$lang->testtask->stepResults    = '步骤结果';
$lang->testtask->lastRunner     = '最后执行人';
$lang->testtask->lastRunDate    = '最后执行时间';
$lang->testtask->date           = '测试时间';
$lang->testtask->deleted        = "已删除";
$lang->testtask->resultFile     = "结果文件";
$lang->testtask->caseCount      = '用例数';
$lang->testtask->passCount      = '成功';
$lang->testtask->failCount      = '失败';
$lang->testtask->summary        = '有%s个用例，失败%s个，耗时%s。';

$lang->testtask->beginAndEnd    = '起止时间';
$lang->testtask->to             = '至';

$lang->testtask->legendDesc      = '测试单描述';
$lang->testtask->legendReport    = '测试总结';
$lang->testtask->legendBasicInfo = '基本信息';

$lang->testtask->statusList['wait']    = '未开始';
$lang->testtask->statusList['doing']   = '进行中';
$lang->testtask->statusList['done']    = '已关闭';
$lang->testtask->statusList['blocked'] = '被阻塞';

$lang->testtask->priList[0] = '';
$lang->testtask->priList[3] = '3';
$lang->testtask->priList[1] = '1';
$lang->testtask->priList[2] = '2';
$lang->testtask->priList[4] = '4';

$lang->testtask->unlinkedCases = '未关联';
$lang->testtask->linkByBuild   = '复制测试单';
$lang->testtask->linkByStory   = "按{$lang->SRCommon}关联";
$lang->testtask->linkByBug     = '按Bug关联';
$lang->testtask->linkBySuite   = '按套件关联';
$lang->testtask->passAll       = '全部通过';
$lang->testtask->pass          = '通过';
$lang->testtask->fail          = '失败';
$lang->testtask->showResult    = '共执行<span class="text-info">%s</span>次';
$lang->testtask->showFail      = '失败<span class="text-danger">%s</span>次';

$lang->testtask->confirmDelete     = '您确认要删除该测试单吗？';
$lang->testtask->confirmUnlinkCase = '您确认要移除该用例吗？';
$lang->testtask->noticeNoOther     = '该产品还没有其他测试单';
$lang->testtask->noTesttask        = '暂时没有测试单。';
$lang->testtask->checkLinked       = "请检查测试单的产品是否与{$lang->executionCommon}相关联";
$lang->testtask->noImportData      = '导入的XML没有解析出数据。';
$lang->testtask->unitXMLFormat     = '请选择Junit XML 格式的文件。';
$lang->testtask->titleOfAuto       = "%s 自动化测试";
$lang->testtask->cannotBeParsed    = '导入的XML文件内容格式错误，无法解析。';

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
$lang->testtask->mail->create->title = "%s创建了测试单 #%s:%s";
$lang->testtask->mail->edit->title   = "%s编辑了测试单 #%s:%s";
$lang->testtask->mail->close->title  = "%s关闭了测试单 #%s:%s";

$lang->testtask->action = new stdclass();
$lang->testtask->action->testtaskopened  = '$date, 由 <strong>$actor</strong> 创建测试单 <strong>$extra</strong>。' . "\n";
$lang->testtask->action->testtaskstarted = '$date, 由 <strong>$actor</strong> 启动测试单 <strong>$extra</strong>。' . "\n";
$lang->testtask->action->testtaskclosed  = '$date, 由 <strong>$actor</strong> 完成测试单 <strong>$extra</strong>。' . "\n";

$lang->testtask->unexecuted = '未执行';

$lang->testtask->report = new stdclass();
$lang->testtask->report->common = '报表';
$lang->testtask->report->select = '请选择报表类型';
$lang->testtask->report->create = '生成报表';

$lang->testtask->report->charts['testTaskPerRunResult'] = '按用例结果统计';
$lang->testtask->report->charts['testTaskPerType']      = '按用例类型统计';
$lang->testtask->report->charts['testTaskPerModule']    = '按用例模块统计';
$lang->testtask->report->charts['testTaskPerRunner']    = '按用例执行人统计';
$lang->testtask->report->charts['bugSeverityGroups']    = 'Bug严重级别分布';
$lang->testtask->report->charts['bugStatusGroups']      = 'Bug状态分布';
$lang->testtask->report->charts['bugOpenedByGroups']    = 'Bug创建者分布';
$lang->testtask->report->charts['bugResolvedByGroups']  = 'Bug解决者分布';
$lang->testtask->report->charts['bugResolutionGroups']  = 'Bug解决方案分布';
$lang->testtask->report->charts['bugModuleGroups']      = 'Bug模块分布';
$lang->testtask->report->charts['bugStageGroups']       = 'Bug重要程度阶段分布';
$lang->testtask->report->charts['bugHandleGroups']      = 'Bug每日处理情况分布';

$lang->testtask->report->options = new stdclass();
$lang->testtask->report->options->graph  = new stdclass();
$lang->testtask->report->options->type   = 'pie';
$lang->testtask->report->options->width  = 500;
$lang->testtask->report->options->height = 140;

$lang->testtask->featureBar['browse']['totalStatus'] = $lang->testtask->totalStatus;
$lang->testtask->featureBar['browse']['wait']        = $lang->testtask->wait;
$lang->testtask->featureBar['browse']['doing']       = $lang->testtask->testing;
$lang->testtask->featureBar['browse']['blocked']     = $lang->testtask->blocked;
$lang->testtask->featureBar['browse']['done']        = $lang->testtask->done;

$lang->testtask->unitTag['all']       = '所有';
$lang->testtask->unitTag['newest']    = '最近';
$lang->testtask->unitTag['thisWeek']  = '本周';
$lang->testtask->unitTag['lastWeek']  = '上周';
$lang->testtask->unitTag['thisMonth'] = '本月';
$lang->testtask->unitTag['lastMonth'] = '上月';

$lang->testtask->typeList['integrate']   = '集成测试';
$lang->testtask->typeList['system']      = '系统测试';
$lang->testtask->typeList['acceptance']  = '验收测试';
$lang->testtask->typeList['performance'] = '性能测试';
$lang->testtask->typeList['safety']      = '安全测试';
/* todo */
$lang->todo->common       = '待办';
$lang->todo->index        = "待办一览";
$lang->todo->create       = "添加待办";
$lang->todo->createCycle  = "创建周期待办";
$lang->todo->assignTo     = "指派给";
$lang->todo->assignedDate = "指派日期";
$lang->todo->assignAction = "指派待办";
$lang->todo->start        = "开始待办";
$lang->todo->activate     = "激活待办";
$lang->todo->batchCreate  = "批量添加";
$lang->todo->edit         = "编辑待办";
$lang->todo->close        = "关闭待办";
$lang->todo->batchClose   = "批量关闭";
$lang->todo->batchEdit    = "批量编辑";
$lang->todo->view         = "待办详情";
$lang->todo->finish       = "完成待办";
$lang->todo->batchFinish  = "批量完成";
$lang->todo->export       = "导出待办";
$lang->todo->delete       = "删除待办";
$lang->todo->import2Today = "导入到今天";
$lang->todo->import       = "导入";
$lang->todo->legendBasic  = "基本信息";
$lang->todo->cycle        = "周期";
$lang->todo->cycleConfig  = "周期设置";
$lang->todo->project      = "所属项目";
$lang->todo->product      = "所属产品";
$lang->todo->execution    = "所属执行";

$lang->todo->reasonList['story'] = "转{$lang->SRCommon}";
$lang->todo->reasonList['task']  = "转任务";
$lang->todo->reasonList['bug']   = "转Bug";
$lang->todo->reasonList['done']  = "完成";

$lang->todo->id           = '编号';
$lang->todo->account      = '所有者';
$lang->todo->date         = '日期';
$lang->todo->begin        = '开始';
$lang->todo->end          = '结束';
$lang->todo->beginAB      = '开始';
$lang->todo->endAB        = '结束';
$lang->todo->beginAndEnd  = '起止时间';
$lang->todo->idvalue      = '关联编号';
$lang->todo->type         = '类型';
$lang->todo->pri          = '优先级';
$lang->todo->name         = '待办名称';
$lang->todo->status       = '状态';
$lang->todo->desc         = '描述';
$lang->todo->private      = '私人事务';
$lang->todo->cycleDay     = '天';
$lang->todo->cycleWeek    = '周';
$lang->todo->cycleMonth   = '月';
$lang->todo->day          = '日';
$lang->todo->assignedTo   = '指派给';
$lang->todo->assignedBy   = '由谁指派';
$lang->todo->finishedBy   = '由谁完成';
$lang->todo->finishedDate = '完成时间';
$lang->todo->closedBy     = '由谁关闭';
$lang->todo->closedDate   = '关闭时间';
$lang->todo->deadline     = '过期时间';
$lang->todo->deleted      = '已删除';

$lang->todo->every        = '间隔';
$lang->todo->specify      = '指定';
$lang->todo->everyYear    = '每年';
$lang->todo->beforeDays   = "<span class='input-group-addon'>提前</span>%s<span class='input-group-addon'>天生成待办</span>";
$lang->todo->dayNames     = array(1 => '星期一', 2 => '星期二', 3 => '星期三', 4 => '星期四', 5 => '星期五', 6 => '星期六', 0 => '星期日');
$lang->todo->specifiedDay = array(1 => 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31);

$lang->todo->confirmBug   = '该Todo关联的是Bug #%s，需要修改它吗？';
$lang->todo->confirmTask  = '该Todo关联的是Task #%s，需要修改它吗？';
$lang->todo->confirmStory = '该Todo关联的是Story #%s，需要修改它吗？';

$lang->todo->statusList['wait']   = '未开始';
$lang->todo->statusList['doing']  = '进行中';
$lang->todo->statusList['done']   = '已完成';
$lang->todo->statusList['closed'] = '已关闭';
//$lang->todo->statusList['cancel']   = '已取消';
//$lang->todo->statusList['postpone'] = '已延期';

$lang->todo->priList[1] = 1;
$lang->todo->priList[2] = 2;
$lang->todo->priList[3] = 3;
$lang->todo->priList[4] = 4;

$lang->todo->typeList['custom']   = '自定义';
$lang->todo->typeList['cycle']    = '周期';
$lang->todo->typeList['bug']      = 'Bug';
$lang->todo->typeList['task']     = '任务';
$lang->todo->typeList['story']    = $lang->SRCommon;
$lang->todo->typeList['testtask'] = '测试单';

$lang->todo->confirmDelete  = "您确定要删除这条待办吗？";
$lang->todo->thisIsPrivate  = '这是一条私人事务。:)';
$lang->todo->lblDisableDate = '暂时不设定时间';
$lang->todo->lblBeforeDays  = "提前%s天生成待办";
$lang->todo->lblClickCreate = "点击添加待办";
$lang->todo->noTodo         = '该类型没有待办事务';
$lang->todo->noAssignedTo   = '被指派人不能为空';
$lang->todo->unfinishedTodo = '待办ID %s 不是完成状态，不能关闭。';

$lang->todo->periods['all']             = '所有';
$lang->todo->periods['before']          = '未完';
$lang->todo->periods['future']          = '待定';
$lang->todo->periods['thisWeek']        = '本周';
$lang->todo->periods['thisMonth']       = '本月';
$lang->todo->periods['thisYear']        = '本年';
$lang->todo->periods['assignedToOther'] = '指派他人';
$lang->todo->periods['cycle']           = '周期';

$lang->todo->action = new stdclass();
$lang->todo->action->finished = array('main' => '$date, 由 <strong>$actor</strong> $extra。$appendLink', 'extra' => 'reasonList');
$lang->todo->action->marked   = array('main' => '$date, 由 <strong>$actor</strong> 标记为<strong>$extra</strong>。', 'extra' => 'statusList');
/* tree */
$lang->tree = new stdclass();
$lang->tree->common             = '模块维护';
$lang->tree->edit               = '编辑模块';
$lang->tree->delete             = '删除模块';
$lang->tree->browse             = '通用模块维护';
$lang->tree->browseTask         = '任务模块维护';
$lang->tree->manage             = '维护模块';
$lang->tree->fix                = '修正数据';
$lang->tree->manageProduct      = "维护{$lang->productCommon}视图模块";
$lang->tree->manageExecution    = "维护{$lang->executionCommon}视图模块";
$lang->tree->manageLine         = "维护{$lang->productCommon}线";
$lang->tree->manageBug          = '维护测试视图模块';
$lang->tree->manageCase         = '维护用例视图模块';
$lang->tree->manageCaseLib      = '维护用例库模块';
$lang->tree->manageCustomDoc    = '维护文档库分类';
$lang->tree->updateOrder        = '更新排序';
$lang->tree->manageChild        = '维护子模块';
$lang->tree->manageStoryChild   = '维护子模块';
$lang->tree->manageLineChild    = "维护{$lang->productCommon}线";
$lang->tree->manageBugChild     = '维护Bug子模块';
$lang->tree->manageCaseChild    = '维护用例子模块';
$lang->tree->manageCaselibChild = '维护用例库子模块';
$lang->tree->manageTaskChild    = "维护{$lang->executionCommon}子模块";
$lang->tree->syncFromProduct    = '复制模块';
$lang->tree->dragAndSort        = "拖放排序";
$lang->tree->sort               = "排序";
$lang->tree->addChild           = "增加子模块";
$lang->tree->confirmDelete      = '该模块及其子模块都会被删除，您确定删除吗？';
$lang->tree->confirmDelCategory = '该分类及其子分类都会被删除，您确定删除吗？';
$lang->tree->confirmDeleteLine  = "您确定删除该{$lang->productCommon}线吗？";
$lang->tree->confirmRoot        = "模块的所属{$lang->productCommon}修改，会关联修改该模块下的{$lang->SRCommon}、Bug、用例的所属{$lang->productCommon}，以及{$lang->executionCommon}和{$lang->productCommon}的关联关系。该操作比较危险，请谨慎操作。是否确认修改？";
$lang->tree->confirmRoot4Doc    = "修改所属文档库，会同时修改该分类下文档的关联关系。该操作比较危险，请谨慎操作。是否确认修改？";
$lang->tree->successSave        = '成功保存';
$lang->tree->successFixed       = '成功修正数据！';
$lang->tree->repeatName         = '模块名“%s”已经存在！';
$lang->tree->shouldNotBlank     = '模块名不能为空格！';

$lang->tree->module       = '模块';
$lang->tree->name         = '模块名称';
$lang->tree->line         = "{$lang->productCommon}线名称";
$lang->tree->cate         = '分类名称';
$lang->tree->root         = '所属根';
$lang->tree->branch       = '平台/分支';
$lang->tree->path         = '路径';
$lang->tree->type         = '类型';
$lang->tree->parent       = '上级模块';
$lang->tree->parentCate   = '上级分类';
$lang->tree->child        = '子模块';
$lang->tree->subCategory  = '子分类';
$lang->tree->editCategory = '编辑分类';
$lang->tree->delCategory  = '删除分类';
$lang->tree->lineChild    = "子{$lang->productCommon}线";
$lang->tree->owner        = '负责人';
$lang->tree->order        = '排序';
$lang->tree->short        = '简称';
$lang->tree->all          = '所有模块';
$lang->tree->executionDoc = "{$lang->executionCommon}文档";
$lang->tree->product      = "所属{$lang->productCommon}";
/* tutorial */
$lang->tutorial = new stdclass();
$lang->tutorial->common           = '新手教程';
$lang->tutorial->desc             = '通过完成一系列任务，快速了解禅道的基本使用方法。这可能会花费你10分钟，你可以随时退出任务。';
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
$lang->tutorial->novice           = "你可能初次使用禅道，是否进入新手教程";
$lang->tutorial->dataNotSave      = "教程任务中，数据不会保存。";

$lang->tutorial->tasks = array();

$lang->tutorial->tasks['createAccount']         = array('title' => '创建帐号');
$lang->tutorial->tasks['createAccount']['nav']  = array('module' => 'user', 'method' => 'create', 'menuModule' => 'company', 'menu' => 'browseUser', 'form' => '#createForm', 'submit' => '#submit', 'target' => '.create-user-btn', 'targetPageName' => '添加用户');
$lang->tutorial->tasks['createAccount']['desc'] = "<p>在系统创建一个新的用户帐号：</p><ul><li data-target='nav'>打开 <span class='task-nav'>组织 <i class='icon icon-angle-right'></i> 用户 <i class='icon icon-angle-right'></i> 添加用户</span> 页面；</li><li data-target='form'>在添加用户表单中填写新用户信息；</li><li data-target='submit'>保存用户信息。</li></ul>";

global $config;
if($config->global->flow == 'full' or $config->global->flow != 'onlyTask')
{
    $lang->tutorial->tasks['createProduct']         = array('title' => '创建' . $lang->productCommon);
    $lang->tutorial->tasks['createProduct']['nav']  = array('module' => 'product', 'method' => 'create', 'menu' => '#pageNav', 'form' => '#createForm', 'submit' => '#submit', 'target' => '.create-product-btn', 'targetPageName' => '添加' . $lang->productCommon);
    $lang->tutorial->tasks['createProduct']['desc'] = "<p>在系统创建一个新的{$lang->productCommon}：</p><ul><li data-target='nav'>打开 <span class='task-nav'>{$lang->productCommon} <i class='icon icon-angle-right'></i> 添加{$lang->productCommon}</span> 页面；</li><li data-target='form'>在表单中填写要创建的{$lang->productCommon}信息；</li><li data-target='submit'>保存{$lang->productCommon}信息。</li></ul>";
}

if($config->global->flow == 'full' or $config->global->flow == 'onlyStory')
{
    $lang->tutorial->tasks['createStory']         = array('title' => "创建{$lang->SRCommon}");
    $lang->tutorial->tasks['createStory']['nav']  = array('module' => 'story', 'method' => 'create', 'menuModule' => 'product', 'menu' => 'story', 'target' => '.create-story-btn', 'form' => '#dataform', 'submit' => '#submit', 'targetPageName' => "提{$lang->SRCommon}");
    $lang->tutorial->tasks['createStory']['desc'] = "<p>在系统创建一个新的{$lang->SRCommon}：</p><ul><li data-target='nav'>打开 <span class='task-nav'>{$lang->productCommon} <i class='icon icon-angle-right'></i> {$lang->SRCommon} <i class='icon icon-angle-right'></i> 添加{$lang->SRCommon}</span> 页面；</li><li data-target='form'>在表单中填写要创建的{$lang->SRCommon}信息；</li><li data-target='submit'>保存{$lang->SRCommon}信息。</li></ul>";
}

if($config->global->flow == 'full' or $config->global->flow == 'onlyTask')
{
    $lang->tutorial->tasks['createProject']         = array('title' => '创建' . $lang->executionCommon);
    $lang->tutorial->tasks['createProject']['nav']  = array('module' => 'execution', 'method' => 'create', 'menu' => '#pageNav', 'form' => '#dataform', 'submit' => '#submit', 'target' => '.create-project-btn', 'targetPageName' => '添加' . $lang->executionCommon);
    $lang->tutorial->tasks['createProject']['desc'] = "<p>在系统创建一个新的{$lang->executionCommon}：</p><ul><li data-target='nav'>打开 <span class='task-nav'> {$lang->executionCommon} <i class='icon icon-angle-right'></i> 添加{$lang->executionCommon}</span> 页面；</li><li data-target='form'>在表单中填写要创建的{$lang->executionCommon}信息；</li><li data-target='submit'>保存{$lang->executionCommon}信息。</li></ul>";

    $lang->tutorial->tasks['manageTeam']         = array('title' => '管理团队');
    $lang->tutorial->tasks['manageTeam']['nav']  = array('module' => 'execution', 'method' => 'managemembers', 'menu' => 'team', 'target' => '.manage-team-btn', 'form' => '#teamForm', 'requiredFields' => 'account1', 'submit' => '#submit', 'targetPageName' => '团队管理');
    $lang->tutorial->tasks['manageTeam']['desc'] = "<p>管理{$lang->executionCommon}团队成员：</p><ul><li data-target='nav'>打开 <span class='task-nav'> {$lang->executionCommon} <i class='icon icon-angle-right'></i> 团队 <i class='icon icon-angle-right'></i> 团队管理</span> 页面；</li><li data-target='form'>选择要加入团队的成员；</li><li data-target='submit'>保存团队成员信息。</li></ul>";

    if($config->global->flow == 'full')
    {
        $lang->tutorial->tasks['linkStory']         = array('title' => "关联{$lang->SRCommon}");
        $lang->tutorial->tasks['linkStory']['nav']  = array('module' => 'execution', 'method' => 'linkStory', 'menu' => 'story', 'target' => '.link-story-btn', 'form' => '#linkStoryForm', 'formType' => 'table', 'submit' => '#submit', 'targetPageName' => "关联{$lang->SRCommon}");
        $lang->tutorial->tasks['linkStory']['desc'] = "<p>将{$lang->SRCommon}关联到{$lang->executionCommon}：</p><ul><li data-target='nav'>打开 <span class='task-nav'> {$lang->executionCommon} <i class='icon icon-angle-right'></i> {$lang->SRCommon} <i class='icon icon-angle-right'></i> 关联{$lang->SRCommon}</span> 页面；</li><li data-target='form'>在{$lang->SRCommon}列表中勾选要关联的{$lang->SRCommon}；</li><li data-target='submit'>保存关联的{$lang->SRCommon}信息。</li></ul>";
    }

    $lang->tutorial->tasks['createTask']         = array('title' => '分解任务');
    $lang->tutorial->tasks['createTask']['nav']  = array('module' => 'task', 'method' => 'create', 'menuModule' => 'execution', 'menu' => 'story', 'target' => '.btn-task-create', 'form' => '#dataform', 'submit' => '#submit', 'targetPageName' => '建任务');
    $lang->tutorial->tasks['createTask']['desc'] = "<p>将{$lang->executionCommon}{$lang->SRCommon}分解为任务：</p><ul><li data-target='nav'>打开 <span class='task-nav'> {$lang->executionCommon} <i class='icon icon-angle-right'></i> {$lang->SRCommon} <i class='icon icon-angle-right'></i> 分解任务</span> 页面；</li><li data-target='form'>在表单中填写任务信息；</li><li data-target='submit'>保存任务信息。</li></ul>";
}

if($config->global->flow == 'full' or $config->global->flow == 'onlyTest')
{
    $lang->tutorial->tasks['createBug']         = array('title' => '提Bug');
    $lang->tutorial->tasks['createBug']['nav']  = array('module' => 'bug', 'method' => 'create', 'menuModule' => 'qa', 'menu' => 'bug', 'target' => '.btn-bug-create', 'form' => '#dataform', 'submit' => '#submit', 'targetPageName' => '提Bug');
    $lang->tutorial->tasks['createBug']['desc'] = "<p>在系统中提交一个Bug：</p><ul><li data-target='nav'>打开 <span class='task-nav'> 测试 <i class='icon icon-angle-right'></i> Bug <i class='icon icon-angle-right'></i> 提Bug</span>；</li><li data-target='form'>在表单中填写Bug信息；</li><li data-target='submit'>保存Bug信息。</li></ul>";
}
/* upgrade */
$lang->upgrade->common          = '升级';
$lang->upgrade->start           = '开始';
$lang->upgrade->result          = '升级结果';
$lang->upgrade->fail            = '升级失败';
$lang->upgrade->successTip      = '升级成功';
$lang->upgrade->success         = "<p><i class='icon icon-check-circle'></i></p><p>恭喜您！</p><p>您的禅道已经成功升级。</p>";
$lang->upgrade->tohome          = '访问禅道';
$lang->upgrade->license         = '禅道项目管理软件已更换授权协议至 Z PUBLIC LICENSE(ZPL) 1.2';
$lang->upgrade->warnning        = '警告';
$lang->upgrade->checkExtension  = '检查插件';
$lang->upgrade->consistency     = '一致性检查';
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

$lang->upgrade->createFileWinCMD   = '打开命令行，执行<strong style="color:#ed980f">echo > %s</strong>';
$lang->upgrade->createFileLinuxCMD = '在命令行执行: <strong style="color:#ed980f">touch %s</strong>';
$lang->upgrade->setStatusFile      = '<h4>升级之前请先完成下面的操作：</h4>
                                      <ul style="line-height:1.5;font-size:13px;">
                                      <li>%s</li>
                                      <li>或者删掉"<strong style="color:#ed980f">%s</strong>" 这个文件 ，重新创建一个<strong style="color:#ed980f">ok.txt</strong>文件，不需要内容。</li>
                                      </ul>
                                      <p><strong style="color:red">我已经仔细阅读上面提示且完成上述工作，<a href="#" onclick="location.reload()">继续更新</a></strong></p>';

$lang->upgrade->selectVersion  = '选择版本';
$lang->upgrade->continue       = '继续';
$lang->upgrade->noteVersion    = "务必选择正确的版本，否则会造成数据丢失。";
$lang->upgrade->fromVersion    = '原来的版本';
$lang->upgrade->toVersion      = '升级到';
$lang->upgrade->confirm        = '确认要执行的SQL语句';
$lang->upgrade->sureExecute    = '确认执行';
$lang->upgrade->forbiddenExt   = '以下插件与新版本不兼容，已经自动禁用：';
$lang->upgrade->updateFile     = '需要更新附件信息。';
$lang->upgrade->noticeSQL      = '检查到你的数据库跟标准不一致，尝试修复失败。请执行以下SQL语句，再刷新页面检查。';
$lang->upgrade->afterDeleted   = '以上文件未能删除， 删除后刷新！';
$lang->upgrade->mergeProgram   = '数据迁移';
$lang->upgrade->mergeTips      = '数据迁移提示';
$lang->upgrade->toPMS15Guide   = '禅道开源版15版本升级';
$lang->upgrade->toPRO10Guide   = '禅道专业版10版本升级';
$lang->upgrade->toBIZ5Guide    = '禅道企业版5版本升级';
$lang->upgrade->toMAXGuide     = '禅道旗舰版版本升级';
$lang->upgrade->to15Desc       = <<<EOD
<p>尊敬的用户，禅道从15版本开始对导航和概念做了调整，主要改动如下：</p>
<ol>
<p><li>增加了项目集概念。一个项目集可以包括多个产品和多个项目。</li></p>
<p><li>细分了项目和迭代概念，一个项目可以包含多个迭代。</li></p>
<p><li>导航增加了左侧菜单并支持多页面操作。</li></p>
</ol>
<br/>
<p>您可以在线体验最新版本的功能，以决定是否启用的模式：<a class='text-info' href='http://zentaomax.demo.zentao.net' target='_blank'>演示demo</a></p>
</br>
<p><strong>请问您计划如何使用禅道的新版本呢？</strong></p>
EOD;

$lang->upgrade->mergeProgramDesc = <<<EOD
<p>接下来我们会把之前历史产品和迭代数据迁移到项目集和项目下，迁移的方案如下：</p><br />
<h4>方案一：以产品线组织的产品和迭代 </h4>
<p>可以将整个产品线及其下面的产品和迭代迁移到一个项目集和项目中，当然您也可以根据需要分开迁移。</p>
<h4>方案二：以产品组织的迭代 </h4>
<p>可以选择多个产品及其下面的迭代迁移到一个项目集和项目中，也可以选择某一个产品和产品下面的迭代迁移到项目集和项目中。</p>
<h4>方案三：独立的迭代</h4>
<p>可以选择若干个迭代迁移到一个项目集中，也可以独立迁移。</p>
<h4>方案四：关联多个产品的迭代</h4>
<p>可以选择这些迭代归属于某个新项目下。</p>
EOD;

$lang->upgrade->to15Mode['classic'] = '保持老版本的习惯';
$lang->upgrade->to15Mode['new']     = '全新项目集管理模式';

$lang->upgrade->selectedModeTips['classic'] = '后续您还可以在后台-自定义里面切换为全新项目集管理的模式。';
$lang->upgrade->selectedModeTips['new']     = '切换为项目集管理模式需要对之前的数据进行归并处理，系统会引导您完成这个操作。';

$lang->upgrade->line         = '产品线';
$lang->upgrade->program      = '目标项目集和项目';
$lang->upgrade->existProgram = '已有项目集';
$lang->upgrade->existProject = '已有项目';
$lang->upgrade->existLine    = '已有' . $lang->productCommon . '线';
$lang->upgrade->product      = $lang->productCommon;
$lang->upgrade->project      = '迭代';
$lang->upgrade->repo         = '版本库';
$lang->upgrade->mergeRepo    = '归并版本库';

$lang->upgrade->newProgram         = '新建';
$lang->upgrade->projectEmpty       = '所属项目不能为空！';
$lang->upgrade->mergeSummary       = "尊敬的用户，您的系统中共有%s个产品，%s个迭代等待迁移。";
$lang->upgrade->mergeByProductLine = "以产品线组织的产品和迭代：将整个产品线及其下面的产品和迭代归并到一个项目集和项目中，也可以分开归并。";
$lang->upgrade->mergeByProduct     = "以产品组织的迭代：可以选择多个产品及其下面的迭代归并到一个项目集和项目中，也可以选择某一个产品将其下面所属的迭代归并到项目集和项目中。";
$lang->upgrade->mergeByProject     = "独立的迭代：可以选择若干迭代归并到一个项目中，也可以独立归并。";
$lang->upgrade->mergeByMoreLink    = "关联多个产品的迭代：选择这个迭代归属于哪一个产品。";
$lang->upgrade->mergeRepoTips      = "将选中的版本库归并到所选产品下。";

$lang->upgrade->needBuild4Add    = '本次升级新增全文检索功能，需要创建索引。';
$lang->upgrade->needBuild4Adjust = '本次升级全文检索功能有调整，需要创建索引。';
$lang->upgrade->buildIndex       = '创建索引';

include dirname(__FILE__) . '/version.php';
/* user */
$lang->user->common           = '用户';
$lang->user->id               = '用户编号';
$lang->user->inside           = '内部人员';
$lang->user->outside          = '外部人员';
$lang->user->company          = '所属公司';
$lang->user->dept             = '部门';
$lang->user->account          = '用户名';
$lang->user->password         = '密码';
$lang->user->password2        = '请重复密码';
$lang->user->role             = '职位';
$lang->user->group            = '权限分组';
$lang->user->realname         = '姓名';
$lang->user->nickname         = '昵称';
$lang->user->commiter         = '源代码帐号';
$lang->user->birthyear        = '出生年';
$lang->user->gender           = '性别';
$lang->user->email            = '邮箱';
$lang->user->basicInfo        = '基本信息';
$lang->user->accountInfo      = '帐号信息';
$lang->user->verify           = '安全验证';
$lang->user->contactInfo      = '联系方式';
$lang->user->skype            = 'Skype';
$lang->user->qq               = 'QQ';
$lang->user->mobile           = '手机';
$lang->user->phone            = '电话';
$lang->user->weixin           = '微信';
$lang->user->dingding         = '钉钉';
$lang->user->slack            = 'Slack';
$lang->user->whatsapp         = 'WhatsApp';
$lang->user->address          = '通讯地址';
$lang->user->zipcode          = '邮编';
$lang->user->join             = '入职日期';
$lang->user->visits           = '访问次数';
$lang->user->ip               = '最后IP';
$lang->user->last             = '最后登录';
$lang->user->ranzhi           = 'ZDOO帐号';
$lang->user->ditto            = '同上';
$lang->user->originalPassword = '原密码';
$lang->user->newPassword      = '新密码';
$lang->user->verifyPassword   = '您的密码';
$lang->user->resetPassword    = '忘记密码';
$lang->user->score            = '积分';
$lang->user->name             = '名称';
$lang->user->type             = '用户类型';
$lang->user->cropAvatar       = '剪切头像';
$lang->user->cropAvatarTip    = '拖拽选框来选择头像剪切范围';
$lang->user->cropImageTip     = '所使用的头像图片过小，建议图片大小至少为 48x48，当前图片大小为 %s';
$lang->user->captcha          = '验证码';

$lang->user->legendBasic        = '基本资料';
$lang->user->legendContribution = '个人贡献';

$lang->user->index         = "用户视图首页";
$lang->user->view          = "用户详情";
$lang->user->create        = "添加用户";
$lang->user->batchCreate   = "批量添加用户";
$lang->user->edit          = "编辑用户";
$lang->user->batchEdit     = "批量编辑";
$lang->user->unlock        = "解锁用户";
$lang->user->delete        = "删除用户";
$lang->user->unbind        = "解除ZDOO绑定";
$lang->user->login         = "用户登录";
$lang->user->bind          = "绑定已有账户";
$lang->user->oauthRegister = "注册新账号";
$lang->user->mobileLogin   = "手机访问";
$lang->user->editProfile   = "编辑档案";
$lang->user->deny          = "访问受限";
$lang->user->confirmDelete = "您确定删除该用户吗？";
$lang->user->confirmUnlock = "您确定解除该用户的锁定状态吗？";
$lang->user->confirmUnbind = "您确定解除该用户跟ZDOO的绑定吗？";
$lang->user->relogin       = "重新登录";
$lang->user->asGuest       = "游客访问";
$lang->user->goback        = "返回前一页";
$lang->user->deleted       = '(已删除)';
$lang->user->search        = '搜索';
$lang->user->else          = '其他';

$lang->user->saveTemplate          = '保存模板';
$lang->user->setPublic             = '设为公共模板';
$lang->user->deleteTemplate        = '删除模板';
$lang->user->setTemplateTitle      = '请输入模板标题';
$lang->user->applyTemplate         = '应用模板';
$lang->user->confirmDeleteTemplate = '您确认要删除该模板吗？';
$lang->user->setPublicTemplate     = '设为公共模板';
$lang->user->tplContentNotEmpty    = '模板内容不能为空!';

$lang->user->profile   = '档案';
$lang->user->project   = $lang->executionCommon;
$lang->user->execution = $lang->execution->common;
$lang->user->task      = '任务';
$lang->user->bug       = 'Bug';
$lang->user->test      = '测试';
$lang->user->testTask  = '测试单';
$lang->user->testCase  = '用例';
$lang->user->issue     = '问题';
$lang->user->risk      = '风险';
$lang->user->schedule  = '日程';
$lang->user->todo      = '待办';
$lang->user->story     = $lang->SRCommon;
$lang->user->dynamic   = '动态';

$lang->user->openedBy    = '由%s创建';
$lang->user->assignedTo  = '指派给%s';
$lang->user->finishedBy  = '由%s完成';
$lang->user->resolvedBy  = '由%s解决';
$lang->user->closedBy    = '由%s关闭';
$lang->user->reviewedBy  = '由%s评审';
$lang->user->canceledBy  = '由%s取消';

$lang->user->testTask2Him = '%s负责的';
$lang->user->case2Him     = '指派给%s';
$lang->user->caseByHim    = '由%s创建';

$lang->user->errorDeny    = "抱歉，您无权访问『<b>%s</b>』模块的『<b>%s</b>』功能。请联系管理员获取权限。点击后退返回上页。";
$lang->user->errorView    = "抱歉，您无权访问『<b>%s</b>』视图。请联系管理员获取权限。点击后退返回上页。";
$lang->user->loginFailed  = "登录失败，请检查您的用户名或密码是否填写正确。";
$lang->user->lockWarning  = "您还有%s次尝试机会。";
$lang->user->loginLocked  = "密码尝试次数太多，请联系管理员解锁，或%s分钟后重试。";
$lang->user->weakPassword = "您的密码强度小于系统设定。";
$lang->user->errorWeak    = "密码不能使用【%s】这些常用弱口令。";
$lang->user->errorCaptcha = "验证码不正确！";

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

$lang->user->thirdPerson['m'] = '他';
$lang->user->thirdPerson['f'] = '她';

$lang->user->typeList['inside']  = $lang->user->inside;
$lang->user->typeList['outside'] = $lang->user->outside;

$lang->user->passwordStrengthList[0] = "<span style='color:red'>弱</span>";
$lang->user->passwordStrengthList[1] = "<span style='color:#000'>中</span>";
$lang->user->passwordStrengthList[2] = "<span style='color:green'>强</span>";

$lang->user->statusList['active'] = '正常';
$lang->user->statusList['delete'] = '删除';

$lang->user->personalData['createdTodos']        = '创建的待办数';
$lang->user->personalData['createdRequirements'] = "创建的用需/史诗数";
$lang->user->personalData['createdStories']      = "创建的软需/故事数";
$lang->user->personalData['finishedTasks']       = '完成的任务数';
$lang->user->personalData['createdBugs']         = '提交的Bug数';
$lang->user->personalData['resolvedBugs']        = '解决的Bug数';
$lang->user->personalData['createdCases']        = '创建的用例数';
$lang->user->personalData['createdRisks']        = '创建的风险数';
$lang->user->personalData['resolvedRisks']       = '解决的风险数';
$lang->user->personalData['createdIssues']       = '创建的问题数';
$lang->user->personalData['resolvedIssues']      = '解决的问题数';
$lang->user->personalData['createdDocs']         = '创建的文档数';

$lang->user->keepLogin['on']      = '保持登录';
$lang->user->loginWithDemoUser    = '使用demo帐号登录：';

$lang->user->tpl = new stdclass();
$lang->user->tpl->type    = '类型';
$lang->user->tpl->title   = '模板名';
$lang->user->tpl->content = '内容';
$lang->user->tpl->public  = '是否公开';

$lang->usertpl = new stdclass();
$lang->usertpl->title = '模板名称';

$lang->user->placeholder = new stdclass();
$lang->user->placeholder->account     = '英文、数字和下划线的组合，三位以上';
$lang->user->placeholder->password1   = '六位以上';
$lang->user->placeholder->role        = '职位影响内容和用户列表的顺序。';
$lang->user->placeholder->group       = '分组决定用户的权限列表。';
$lang->user->placeholder->commiter    = '版本控制系统(subversion)中的帐号';
$lang->user->placeholder->verify      = '请输入您的系统登录密码';

$lang->user->placeholder->passwordStrength[1] = '6位以上，包含大小写字母，数字。';
$lang->user->placeholder->passwordStrength[2] = '10位以上，包含大小写字母，数字，特殊字符。';

$lang->user->error = new stdclass();
$lang->user->error->account        = "【ID %s】的用户名应该为：三位以上的英文、数字或下划线的组合";
$lang->user->error->accountDupl    = "【ID %s】的用户名已经存在";
$lang->user->error->realname       = "【ID %s】的真实姓名必须填写";
$lang->user->error->password       = "【ID %s】的密码必须为六位以上";
$lang->user->error->mail           = "【ID %s】的邮箱地址不正确";
$lang->user->error->reserved       = "【ID %s】的用户名已被系统预留";
$lang->user->error->weakPassword   = "【ID %s】的密码强度小于系统设定。";
$lang->user->error->dangerPassword = "【ID %s】的密码不能使用【%s】这些常用若口令。";

$lang->user->error->verifyPassword   = "验证失败，请检查您的系统登录密码是否正确";
$lang->user->error->originalPassword = "原密码不正确";
$lang->user->error->companyEmpty     = "公司名称不能为空！";
$lang->user->error->noAccess         = "该人员和你不是同一部门，你无权访问该人员的工作信息。";

$lang->user->contactFieldList['phone']    = $lang->user->phone;
$lang->user->contactFieldList['mobile']   = $lang->user->mobile;
$lang->user->contactFieldList['qq']       = $lang->user->qq;
$lang->user->contactFieldList['dingding'] = $lang->user->dingding;
$lang->user->contactFieldList['weixin']   = $lang->user->weixin;
$lang->user->contactFieldList['skype']    = $lang->user->skype;
$lang->user->contactFieldList['slack']    = $lang->user->slack;
$lang->user->contactFieldList['whatsapp'] = $lang->user->whatsapp;

$lang->user->executionTypeList['stage']  = '阶段';
$lang->user->executionTypeList['sprint'] = $lang->iterationCommon;

$lang->user->contacts = new stdclass();
$lang->user->contacts->common   = '联系人';
$lang->user->contacts->listName = '列表名称';
$lang->user->contacts->userList = '用户列表';

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
$lang->user->noticeResetFile = "<h5>普通用户请联系管理员重置密码</h5>
    <h5>管理员请登录禅道所在的服务器，创建<span> '%s' </span>文件。</h5>
    <p>注意：</p>
    <ol>
    <li>文件内容为空。</li>
    <li>如果之前文件存在，删除之后重新创建。</li>
    </ol>";
$lang->user->notice4Safe = "警告：检测到一键安装包密码口令弱";
$lang->user->process4DIR = "检测到您可能在使用一键安装包环境，该环境中其他站点还在用简单密码，安全起见，如果不使用其他站点，请及时处理。将 %s 目录删除或改名。详情查看：<a href='https://www.zentao.net/book/zentaopmshelp/467.html' target='_blank'>https://www.zentao.net/book/zentaopmshelp/467.html</a>";
$lang->user->process4DB  = "检测到您可能在使用一键安装包环境，该环境中其他站点还在用简单密码，安全起见，如果不使用其他站点，请及时处理。请登录数据库，修改 %s 数据库的zt_user表的password字段。详情查看：<a href='https://www.zentao.net/book/zentaopmshelp/467.html' target='_blank'>https://www.zentao.net/book/zentaopmshelp/467.html</a>";
/* webhook */
$lang->webhook->common     = 'Webhook';
$lang->webhook->list       = 'Webhook列表';
$lang->webhook->api        = '接口';
$lang->webhook->entry      = '应用';
$lang->webhook->log        = '日志';
$lang->webhook->bind       = '绑定用户';
$lang->webhook->chooseDept = '选择同步部门';
$lang->webhook->assigned   = '指派给';
$lang->webhook->setting    = '设置';

$lang->webhook->logAction = 'Webhook日志';

$lang->webhook->browse = '浏览Webhook';
$lang->webhook->create = '添加Webhook';
$lang->webhook->edit   = '编辑Webhook';
$lang->webhook->delete = '删除Webhook';

$lang->webhook->id          = 'ID';
$lang->webhook->type        = '类型';
$lang->webhook->name        = '名称';
$lang->webhook->url         = 'Hook地址';
$lang->webhook->domain      = '禅道域名';
$lang->webhook->contentType = '内容类型';
$lang->webhook->sendType    = '发送方式';
$lang->webhook->secret      = '密钥';
$lang->webhook->product     = "关联{$lang->productCommon}";
$lang->webhook->execution   = "关联{$lang->execution->common}";
$lang->webhook->params      = '参数';
$lang->webhook->action      = '触发动作';
$lang->webhook->desc        = '描述';
$lang->webhook->createdBy   = '由谁创建';
$lang->webhook->createdDate = '创建时间';
$lang->webhook->editedby    = '最后编辑';
$lang->webhook->editedDate  = '编辑时间';
$lang->webhook->date        = '发送时间';
$lang->webhook->data        = '数据';
$lang->webhook->result      = '结果';

$lang->webhook->typeList['']            = '';
$lang->webhook->typeList['dinggroup']   = '钉钉群通知机器人';
$lang->webhook->typeList['dinguser']    = '钉钉工作消息通知';
$lang->webhook->typeList['wechatgroup'] = '企业微信群机器人';
$lang->webhook->typeList['wechatuser']  = '企业微信应用消息';
$lang->webhook->typeList['feishugroup'] = '飞书群通知机器人';
$lang->webhook->typeList['feishuuser']  = '飞书工作消息通知';
$lang->webhook->typeList['default']     = '其他';

$lang->webhook->sendTypeList['sync']  = '同步';
$lang->webhook->sendTypeList['async'] = '异步';

$lang->webhook->dingAgentId     = '钉钉AgentId';
$lang->webhook->dingAppKey      = '钉钉AppKey';
$lang->webhook->dingAppSecret   = '钉钉AppSecret';
$lang->webhook->dingUserid      = '钉钉用户';
$lang->webhook->dingBindStatus  = '钉钉绑定状态';
$lang->webhook->chooseDeptAgain = '重选部门';

$lang->webhook->wechatCorpId     = '企业ID';
$lang->webhook->wechatCorpSecret = '应用的凭证密钥';
$lang->webhook->wechatAgentId    = '企业应用的ID';
$lang->webhook->wechatUserid     = '微信用户';
$lang->webhook->wechatBindStatus = '微信绑定状态';

$lang->webhook->feishuAppId       = '飞书App ID';
$lang->webhook->feishuAppSecret   = '飞书App Secret';
$lang->webhook->feishuUserid      = '飞书用户';
$lang->webhook->feishuBindStatus  = '飞书绑定状态';

$lang->webhook->zentaoUser  = '禅道用户';

$lang->webhook->dingBindStatusList['0'] = '未绑定';
$lang->webhook->dingBindStatusList['1'] = '已绑定';

$lang->webhook->paramsList['objectType'] = '对象类型';
$lang->webhook->paramsList['objectID']   = '对象ID';
$lang->webhook->paramsList['product']    = "所属{$lang->productCommon}";
$lang->webhook->paramsList['execution']  = "所属{$lang->execution->common}";
$lang->webhook->paramsList['action']     = '动作';
$lang->webhook->paramsList['actor']      = '操作者';
$lang->webhook->paramsList['date']       = '操作日期';
$lang->webhook->paramsList['comment']    = '备注';
$lang->webhook->paramsList['text']       = '操作内容';

$lang->webhook->confirmDelete = '您确认要删除该webhook吗？';

$lang->webhook->trimWords = '了';

$lang->webhook->note = new stdClass();
$lang->webhook->note->async     = '异步需要打开计划任务。';
$lang->webhook->note->bind      = '只有[钉钉/微信]工作通知类型才需要绑定用户。';
$lang->webhook->note->product   = "此项为空时所有{$lang->productCommon}的动作都会触发钩子，否则只有关联{$lang->productCommon}的动作才会触发。";
$lang->webhook->note->execution = "此项为空时所有{$lang->execution->common}的动作都会触发钩子，否则只有关联{$lang->execution->common}的动作才会触发。";

$lang->webhook->note->dingHelp   = " <a href='http://www.zentao.net/book/zentaopmshelp/358.html' target='_blank'><i class='icon-help'></i></a>";
$lang->webhook->note->wechatHelp = " <a href='http://www.zentao.net/book/zentaopmshelp/367.html' target='_blank'><i class='icon-help'></i></a>";

$lang->webhook->note->typeList['bearychat'] = '请在倍洽中添加一个禅道机器人，并将其webhook填写到此处。';
$lang->webhook->note->typeList['dingding']  = '请在钉钉中添加一个自定义机器人，并将其webhook填写到此处。';
$lang->webhook->note->typeList['weixin']    = '请在企业微信中添加一个自定义机器人，并将其webhook填写到此处。';
$lang->webhook->note->typeList['default']   = '从第三方系统获取webhook并填写到此处。';

$lang->webhook->error = new stdclass();
$lang->webhook->error->curl   = '需要加载php-curl扩展。';
$lang->webhook->error->noDept = '没有选择部门，请先选择同步部门。';
