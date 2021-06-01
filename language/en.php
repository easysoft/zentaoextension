<?php
/* common */

include (dirname(__FILE__) . '/common.php');

global $config;

$lang->arrow     = '&nbsp;<i class="icon-angle-right"></i>&nbsp;';
$lang->colon     = '-';
$lang->comma     = ',';
$lang->dot       = '.';
$lang->at        = ' on ';
$lang->downArrow = '↓';
$lang->null      = 'Null';
$lang->ellipsis  = '…';
$lang->percent   = '%';
$lang->dash      = '-';

$lang->zentaoPMS       = 'ZenTao';
$lang->logoImg         = 'zt-logo-en.png';
$lang->welcome         = "%s ALM";
$lang->logout          = 'Logout';
$lang->login           = 'Login';
$lang->help            = 'Help';
$lang->aboutZenTao     = 'About';
$lang->profile         = 'Profile';
$lang->changePassword  = 'Password';
$lang->unfoldMenu      = 'Unfold Menu';
$lang->collapseMenu    = 'Collapse Menu';
$lang->preference      = 'Preference';
$lang->runInfo         = "<div class='row'><div class='u-1 a-center' id='debugbar'>Time %s MS, Memory %s KB, Query %s.  </div></div>";
$lang->agreement       = "I have read and agreed to the terms and conditions of <a href='http://zpl.pub/page/zplv12.html' target='_blank'> Z PUBLIC LICENSE 1.2 </a>. <span class='text-danger'>Without authorization, I should not remove, hide or cover any logos/links of ZenTao.</span>";
$lang->designedByAIUX  = "<a href='https://api.zentao.net/goto.php?item=aiux' class='link-aiux' target='_blank'><i class='icon icon-aiux'></i> AIUX</a>";

$lang->reset        = 'Reset';
$lang->cancel       = 'Cancel';
$lang->refresh      = 'Refresh';
$lang->edit         = 'Edit';
$lang->delete       = 'Delete';
$lang->close        = 'Close';
$lang->unlink       = 'Unlink';
$lang->import       = 'Import';
$lang->export       = 'Export';
$lang->setFileName  = 'File Name';
$lang->submitting   = 'Saving...';
$lang->save         = 'Save';
$lang->saveSuccess  = 'Saved';
$lang->confirm      = 'Confirm';
$lang->preview      = 'View';
$lang->goback       = 'Back';
$lang->goPC         = 'PC';
$lang->more         = 'More';
$lang->moreLink     = 'MORE';
$lang->day          = ' Day';
$lang->customConfig = 'Custom Config';
$lang->public       = 'Public';
$lang->trunk        = 'Trunk';
$lang->sort         = 'Order';
$lang->required     = 'Required';
$lang->noData       = 'No data.';
$lang->fullscreen   = 'Fullscreen';
$lang->retrack      = 'Retrack';
$lang->whitelist    = 'Access whitelist';

$lang->actions         = 'Action';
$lang->restore         = 'Reset';
$lang->comment         = 'Note';
$lang->history         = 'History';
$lang->attatch         = 'Files';
$lang->reverse         = 'Inverse';
$lang->switchDisplay   = 'Toggle';
$lang->expand          = 'Expand';
$lang->collapse        = 'Collapse';
$lang->saveSuccess     = 'Saved';
$lang->fail            = 'Fail';
$lang->addFiles        = 'Added Files';
$lang->files           = 'Files ';
$lang->pasteText       = 'Multi-lines Paste';
$lang->uploadImages    = 'Multi-images Upload';
$lang->timeout         = 'Timeout. Check your newtwork connections, or try it again!';
$lang->repairTable     = 'Database table might be damaged. Run phpmyadmin or myisamchk to fix it.';
$lang->duplicate       = '%s has the same title as a file existed.';
$lang->ipLimited       = "<html><head><meta http-equiv='Content-Type' content='text/html; charset=utf-8' /></head><body>Sorry, your current IP is restricted. PLease contact your Administer to grant your permissions.</body></html>";
$lang->unfold          = '+';
$lang->fold            = '-';
$lang->homepage        = 'Set Home';
$lang->noviceTutorial  = 'ZenTao Tutorial';
$lang->changeLog       = 'Change Log';
$lang->manual          = 'User Manual';
$lang->customMenu      = 'Custom Menu';
$lang->customField     = 'Custom Field';
$lang->lineNumber      = 'Line No.';
$lang->tutorialConfirm = 'You are using ZenTao tutorial. Do you want to quit right now？';

$lang->preShortcutKey  = '[Shortcut:←]';
$lang->nextShortcutKey = '[Shortcut:→]';
$lang->backShortcutKey = '[Shortcut:Alt+↑]';

$lang->select        = 'Select';
$lang->selectAll     = 'Select All';
$lang->selectReverse = 'Select Inverse';
$lang->loading       = 'Loading...';
$lang->notFound      = 'Not found!';
$lang->notPage       = 'Sorry, the features you are visiting are in development!';
$lang->showAll       = '[[Show All]]';
$lang->selectedItems = 'Seleted <strong>{0}</strong> items';

$lang->future      = 'Waiting';
$lang->year        = 'Year';
$lang->workingHour = 'Hours';

$lang->idAB         = 'ID';
$lang->priAB        = 'P';
$lang->statusAB     = 'Status';
$lang->openedByAB   = 'CreatedBy';
$lang->assignedToAB = 'AssignedTo';
$lang->typeAB       = 'Type';
$lang->nameAB       = 'Name';

$lang->common->common     = 'Common Module';
$lang->my->common         = 'Dashboard';
$lang->program->common    = 'Program';
$lang->product->common    = 'Product';
$lang->project->common    = 'Project';
$lang->execution->common  = $config->systemMode == 'new' ? 'Execution' : $lang->executionCommon;
$lang->qa->common         = 'QA';
$lang->devops->common     = 'DevOps';
$lang->doc->common        = 'Doc';
$lang->repo->common       = 'Code';
$lang->report->common     = 'Statistic';
$lang->system->common     = 'System';
$lang->admin->common      = 'Admin';
$lang->task->common       = 'Task';
$lang->bug->common        = 'Bug';
$lang->testcase->common   = 'Testcase';
$lang->testtask->common   = 'Testtask';
$lang->score->common      = 'Score';
$lang->build->common      = 'Build';
$lang->testreport->common = 'Report';
$lang->automation->common = 'Automation';
$lang->team->common       = 'Team';
$lang->user->common       = 'User';
$lang->custom->common     = 'Custom';
$lang->extension->common  = 'Extension';
$lang->company->common    = 'Company';
$lang->dept->common       = 'Dept';
$lang->program->list      = 'Program List';
$lang->execution->list    = "{$lang->executionCommon} List";

$lang->personnel->common     = 'Member';
$lang->personnel->invest     = 'Investment';
$lang->personnel->accessible = 'Accessible';

$lang->stakeholder->common = 'Stakeholder';
$lang->release->common     = 'Release';
$lang->message->common     = 'Message';
$lang->mail->common        = 'Mail';

$lang->my->shortCommon          = 'My';
$lang->testcase->shortCommon    = 'Case';
$lang->productplan->shortCommon = 'Plan';
$lang->score->shortCommon       = 'Score';
$lang->testreport->shortCommon  = 'Report';
$lang->qa->shortCommon          = 'QA';

$lang->dashboard  = 'Dashboard';
$lang->contribute = 'Contribute';
$lang->dynamic    = 'Dynamic';
$lang->contact    = 'Contacts';
$lang->whitelist  = 'Whitelist';
$lang->roadmap    = 'Roadmap';
$lang->track      = 'Track';
$lang->settings   = 'Settings';
$lang->overview   = 'Overview';
$lang->module     = 'Module';
$lang->priv       = 'Priv Group';
$lang->design     = 'Design';
$lang->other      = 'Other';
$lang->estimation = 'Estimation';
$lang->issue      = 'Issue';
$lang->risk       = 'Risk';
$lang->measure    = 'Report';
$lang->treeView   = 'Tree View';
$lang->groupView  = 'Group View';
$lang->kanban     = 'Kanban';
$lang->burn       = 'Burndown';
$lang->view       = 'View';
$lang->intro      = 'Introduction';
$lang->indexPage  = 'Index';
$lang->model      = 'Model';
$lang->redev      = 'Develop';
$lang->browser    = 'Browser';
$lang->db         = 'Database';
$lang->editor     = 'Editor';
$lang->timezone   = 'Timezone';
$lang->security   = 'Security';
$lang->calendar   = 'Calendar';

$lang->my->work = 'Work';

$lang->project->list = 'Project List';

$lang->execution->list = "{$lang->executionCommon} List";

$lang->doc->recent    = 'Recent';
$lang->doc->my        = 'My';
$lang->doc->favorite  = 'Favorite';
$lang->doc->product   = 'Product';
$lang->doc->project   = 'Project';
$lang->doc->execution = $lang->executionCommon;
$lang->doc->custom    = 'Custom';
$lang->doc->wiki      = 'WIKI';

$lang->product->list = $lang->productCommon . ' List';

$lang->project->report = 'Report';

$lang->report->weekly = 'Weekly';
$lang->report->annual = 'Annual Summary';
$lang->report->notice = new stdclass();
$lang->report->notice->help = 'Note: The report is generated on the results of browsing the list. Click, e.g. AssignedToMe, then click Create Report to generate a report based on AssignedToMe list.';

$lang->testcase->case      = 'Test Case';
$lang->testcase->testsuite = 'Test Suite';
$lang->testcase->caselib   = 'Case Library';

$lang->devops->compile = 'Compile';
$lang->devops->repo    = 'Repo';
$lang->devops->rules   = 'Rule';

$lang->admin->system     = 'System';
$lang->admin->entry      = 'Application';
$lang->admin->data       = 'Data';
$lang->admin->cron       = 'Cron';
$lang->admin->buildIndex = 'Full Text Search';

$lang->storyConcept = 'Story Concpet';

$lang->searchTips = '';
$lang->searchAB   = 'Search';

$lang->searchObjects['all']         = 'All';
$lang->searchObjects['bug']         = 'Bug';
$lang->searchObjects['story']       = 'Story';
$lang->searchObjects['task']        = 'Task';
$lang->searchObjects['testcase']    = 'Case';
$lang->searchObjects['product']     = $lang->productCommon;
$lang->searchObjects['build']       = 'Build';
$lang->searchObjects['release']     = 'Release';
$lang->searchObjects['productplan'] = $lang->productCommon . ' Plan';
$lang->searchObjects['testtask']    = 'Request';
$lang->searchObjects['doc']         = 'Document';
$lang->searchObjects['caselib']     = 'Case Library';
$lang->searchObjects['testreport']  = 'Test Report';
$lang->searchObjects['program']     = 'Program';
$lang->searchObjects['project']     = 'Project';
$lang->searchObjects['execution']   = $lang->executionCommon;
$lang->searchObjects['user']        = 'User';
$lang->searchTips                   = 'ID (ctrl+g)';

$lang->importEncodeList['gbk']   = 'GBK';
$lang->importEncodeList['big5']  = 'BIG5';
$lang->importEncodeList['utf-8'] = 'UTF-8';

$lang->exportFileTypeList['csv']  = 'csv';
$lang->exportFileTypeList['xml']  = 'xml';
$lang->exportFileTypeList['html'] = 'html';

$lang->exportTypeList['all']      = 'All Data';
$lang->exportTypeList['selected'] = 'Selected Data';

$lang->lang = 'Language';

$lang->theme                = 'Theme';
$lang->themes['default']    = 'Default';
$lang->themes['green']      = 'Green';
$lang->themes['red']        = 'Red';
$lang->themes['purple']     = 'Purple';
$lang->themes['pink']       = 'Pink';
$lang->themes['blackberry'] = 'Blackberry';
$lang->themes['classic']    = 'Classic';

$lang->error = new stdclass();
$lang->error->companyNotFound = "The domain %s cannot be found!";
$lang->error->length          = array("『%s』length error. It should be『%s』", "『%s』length should be <=『%s』and >『%s』.");
$lang->error->reg             = "『%s』format error. It should be『%s』.";
$lang->error->unique          = "『%s』『%s』exists. Go to Admin->Data->Recycle Bin to restore it, if you are sure it is deleted.";
$lang->error->gt              = "『%s』should be >『%s』.";
$lang->error->ge              = "『%s』should be >=『%s』.";
$lang->error->notempty        = "『%s』should not be blank.";
$lang->error->empty           = "『%s』should be null.";
$lang->error->equal           = "『%s』has to be『%s』.";
$lang->error->int             = array("『%s』should be numbers", "『%s』should be 『%s-%s』.");
$lang->error->float           = "『%s』should have numbers, or decimals.";
$lang->error->email           = "『%s』should be valid Email.";
$lang->error->URL             = "『%s』should be url.";
$lang->error->date            = "『%s』should be valid date.";
$lang->error->datetime        = "『%s』should be valid date.";
$lang->error->code            = "『%s』should be letters or numbers.";
$lang->error->account         = "『%s』should be >= 3 letters, underline or numbers.";
$lang->error->passwordsame    = "The two passwords should be the same.";
$lang->error->passwordrule    = "Password should conform to rules. It should be >= 6 characters.";
$lang->error->accessDenied    = 'Access is denied.';
$lang->error->pasteImg        = 'Images are not allowed to be pasted in your browser!';
$lang->error->noData          = 'No data.';
$lang->error->editedByOther   = 'This record might have been changed. Please refresh and try to edit again!';
$lang->error->tutorialData    = 'No data can be imported in tutorial mode. Please quit tutorial first!';
$lang->error->noCurlExt       = 'No Curl module installed';

$lang->pager = new stdclass();
$lang->pager->noRecord     = "No records.";
$lang->pager->digest       = "Total: <strong>%s</strong>. %s <strong>%s/%s</strong> &nbsp; ";
$lang->pager->recPerPage   = " <strong>%s</strong> per page";
$lang->pager->first        = "<i class='icon-step-backward' title='Home'></i>";
$lang->pager->pre          = "<i class='icon-play icon-flip-horizontal' title='Previous Page'></i>";
$lang->pager->next         = "<i class='icon-play' title='Next Page'></i>";
$lang->pager->last         = "<i class='icon-step-forward' title='Last Page'></i>";
$lang->pager->locate       = "Go!";
$lang->pager->previousPage = "Prev";
$lang->pager->nextPage     = "Next";
$lang->pager->summery      = "<strong>%s-%s</strong> of <strong>%s</strong>.";
$lang->pager->pageOfText   = "Page {0}";
$lang->pager->firstPage    = "First";
$lang->pager->lastPage     = "Last";
$lang->pager->goto         = "Goto";
$lang->pager->pageOf       = "Page <strong>{page}</strong>";
$lang->pager->totalPage    = "<strong>{totalPage}</strong> pages";
$lang->pager->totalCount   = "Total: <strong>{recTotal}</strong> items";
$lang->pager->pageSize     = "<strong>{recPerPage}</strong> per page";
$lang->pager->itemsRange   = "From <strong>{start}</strong> to <strong>{end}</strong>";
$lang->pager->pageOfTotal  = "Page <strong>{page}</strong> of <strong>{totalPage}</strong>";

$lang->colorPicker = new stdclass();
$lang->colorPicker->errorTip = 'Not a valid color value';

$lang->downNotify     = "Download Desktop Notification";
$lang->clientName     = "Desktop";
$lang->downloadClient = "Download ZenTao Desktop";
$lang->clientHelp     = "Client Help";
$lang->clientHelpLink = "https://www.zentao.pm/book/zentaomanual/scrum-tool-im-integration-206.html";
$lang->website        = "https://www.zentao.pm";

$lang->suhosinInfo     = "Warning! Data is reaching the limit. Please change <font color=red>sohusin.post.max_vars</font> and <font color=red>sohusin.request.max_vars</font> (set larger %s value) in php.ini, then save and restart Apache or php-fpm, or some data will not be saved.";
$lang->maxVarsInfo     = "Warning! Data is reaching the limit. Please change <font color=red>max_input_vars</font> (set larger %s value) in php.ini, then save and restart Apache or php-fpm, or some data will not be saved.";
$lang->pasteTextInfo   = "Paste the text here. Each line will be a title. ";
$lang->noticeImport    = "Imported data contains data that has already existed in system. Please confirm you actions on the date.";
$lang->importConfirm   = "Import";
$lang->importAndCover  = "Override";
$lang->importAndInsert = "Insert";

$lang->noResultsMatch     = "No results match found!";
$lang->searchMore         = "More results：";
$lang->chooseUsersToMail  = "Choose users that will be notified.";
$lang->noticePasteImg     = "You can paste images into the editor.";
$lang->pasteImgFail       = "Failed to paste images. Try again later.";
$lang->pasteImgUploading  = "Uploading...";

if(!defined('DT_DATETIME1')) define('DT_DATETIME1',  'Y-m-d H:i:s');
if(!defined('DT_DATETIME2')) define('DT_DATETIME2',  'y-m-d H:i');
if(!defined('DT_MONTHTIME1'))define('DT_MONTHTIME1', 'n/d H:i');
if(!defined('DT_MONTHTIME2'))define('DT_MONTHTIME2', 'n/d H:i');
if(!defined('DT_DATE1'))     define('DT_DATE1',     'Y-m-d');
if(!defined('DT_DATE2'))     define('DT_DATE2',     'Ymd');
if(!defined('DT_DATE3'))     define('DT_DATE3',     'Y/m/d');
if(!defined('DT_DATE4'))     define('DT_DATE4',     'M d');
if(!defined('DT_DATE5'))     define('DT_DATE5',     'j/n');
if(!defined('DT_TIME1'))     define('DT_TIME1',     'H:i:s');
if(!defined('DT_TIME2'))     define('DT_TIME2',     'H:i');
if(!defined('LONG_TIME'))    define('LONG_TIME',    '2059-12-31');

$lang->datepicker = new stdclass();

$lang->datepicker->dpText = new stdclass();
$lang->datepicker->dpText->TEXT_OR          = 'or ';
$lang->datepicker->dpText->TEXT_PREV_YEAR   = 'Last Year';
$lang->datepicker->dpText->TEXT_PREV_MONTH  = 'Last Month';
$lang->datepicker->dpText->TEXT_PREV_WEEK   = 'Last Week';
$lang->datepicker->dpText->TEXT_YESTERDAY   = 'Yesterday';
$lang->datepicker->dpText->TEXT_THIS_MONTH  = 'This Month';
$lang->datepicker->dpText->TEXT_THIS_WEEK   = 'This Week';
$lang->datepicker->dpText->TEXT_TODAY       = 'Today';
$lang->datepicker->dpText->TEXT_NEXT_YEAR   = 'Next Year';
$lang->datepicker->dpText->TEXT_NEXT_MONTH  = 'Next Month';
$lang->datepicker->dpText->TEXT_CLOSE       = 'Close';
$lang->datepicker->dpText->TEXT_DATE        = '';
$lang->datepicker->dpText->TEXT_CHOOSE_DATE = 'Choose Date';

$lang->datepicker->dayNames     = array('Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday');
$lang->datepicker->abbrDayNames = array('Sun', 'Mon', 'Tues', 'Wed', 'Thur', 'Fri', 'Sat');
$lang->datepicker->monthNames   = array('Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec');

include (dirname(__FILE__) . '/menu.php');
/* action */
global $config;

$lang->action->common     = 'Log';
$lang->action->product    = $lang->productCommon;
$lang->action->project    = 'Project';
$lang->action->execution  = $lang->executionCommon;
$lang->action->objectType = 'Object Type';
$lang->action->objectID   = 'ID';
$lang->action->objectName = 'Object Name';
$lang->action->actor      = 'User';
$lang->action->action     = 'Action';
$lang->action->actionID   = 'Action ID';
$lang->action->date       = 'Date';
$lang->action->extra      = 'Extra';

$lang->action->trash       = 'Recycle';
$lang->action->undelete    = 'Restore';
$lang->action->hideOne     = 'Hide';
$lang->action->hideAll     = 'Hide All';
$lang->action->editComment = 'Edit Comment';
$lang->action->create      = 'Add Comment';
$lang->action->comment     = 'Comment';

$lang->action->undeleteAction = 'Reset Data';
$lang->action->hideOneAction  = 'Hide Data';

$lang->action->trashTips      = 'Note: Delete in ZenTao is logic.';
$lang->action->textDiff       = 'Text Format';
$lang->action->original       = 'Original Format';
$lang->action->confirmHideAll = 'Do you want to hide all the records?';
$lang->action->needEdit       = '%s that you want to restore. Please edit it.';
$lang->action->historyEdit    = 'The history EditBy cannot be empty.';
$lang->action->noDynamic      = 'No dynamics. ';

$lang->action->history = new stdclass();
$lang->action->history->action = 'Link';
$lang->action->history->field  = 'Field';
$lang->action->history->old    = 'Old value';
$lang->action->history->new    = 'New value';
$lang->action->history->diff   = 'Compare';

$lang->action->dynamic = new stdclass();
$lang->action->dynamic->today      = 'Today';
$lang->action->dynamic->yesterday  = 'Yesterday';
$lang->action->dynamic->twoDaysAgo = '2 Days Ago';
$lang->action->dynamic->thisWeek   = 'This Week';
$lang->action->dynamic->lastWeek   = 'Last Week';
$lang->action->dynamic->thisMonth  = 'This Month';
$lang->action->dynamic->lastMonth  = 'Last Month';
$lang->action->dynamic->all        = 'All';
$lang->action->dynamic->hidden     = 'Hidden';
$lang->action->dynamic->search     = 'Search';

$lang->action->periods['all']       = $lang->action->dynamic->all;
$lang->action->periods['today']     = $lang->action->dynamic->today;
$lang->action->periods['yesterday'] = $lang->action->dynamic->yesterday;
$lang->action->periods['thisweek']  = $lang->action->dynamic->thisWeek;
$lang->action->periods['lastweek']  = $lang->action->dynamic->lastWeek;
$lang->action->periods['thismonth'] = $lang->action->dynamic->thisMonth;
$lang->action->periods['lastmonth'] = $lang->action->dynamic->lastMonth;

$lang->action->objectTypes['product']     = $lang->productCommon;
$lang->action->objectTypes['branch']      = 'Branch';
$lang->action->objectTypes['story']       = $lang->SRCommon;
$lang->action->objectTypes['design']      = 'Design';
$lang->action->objectTypes['productplan'] = 'Plan';
$lang->action->objectTypes['release']     = 'Release';
$lang->action->objectTypes['program']     = 'Program';
$lang->action->objectTypes['project']     = 'Project';
$lang->action->objectTypes['execution']   = $lang->executionCommon;
$lang->action->objectTypes['task']        = 'Task';
$lang->action->objectTypes['build']       = 'Build';
$lang->action->objectTypes['job']         = 'Job';
$lang->action->objectTypes['bug']         = 'Bug';
$lang->action->objectTypes['case']        = 'Case';
$lang->action->objectTypes['caseresult']  = 'Case Result';
$lang->action->objectTypes['stepresult']  = 'Case Steps';
$lang->action->objectTypes['caselib']     = 'Library';
$lang->action->objectTypes['testsuite']   = 'Suite';
$lang->action->objectTypes['testtask']    = 'Test Build';
$lang->action->objectTypes['testreport']  = 'Report';
$lang->action->objectTypes['doc']         = 'Document';
$lang->action->objectTypes['doclib']      = 'Document Library';
$lang->action->objectTypes['todo']        = 'Todo';
$lang->action->objectTypes['risk']        = 'Risk';
$lang->action->objectTypes['issue']       = 'Issue';
$lang->action->objectTypes['module']      = 'Module';
$lang->action->objectTypes['user']        = 'User';
$lang->action->objectTypes['stakeholder'] = 'Stakeholder';
$lang->action->objectTypes['budget']      = 'Cost Estimate';
$lang->action->objectTypes['entry']       = 'Entry';
$lang->action->objectTypes['webhook']     = 'Webhook';
$lang->action->objectTypes['team']        = 'Team';
$lang->action->objectTypes['whitelist']   = 'Whitelist';
$lang->action->objectTypes['opportunity'] = 'Opportunity';
$lang->action->objectTypes['trainplan']   = 'Trainplan';
$lang->action->objectTypes['gapanalysis'] = 'Gap Analysis';

$lang->action->desc = new stdclass();
$lang->action->desc->common         = '$date, <strong>$action</strong> by <strong>$actor</strong>.' . "\n";
$lang->action->desc->extra          = '$date, <strong>$action</strong> as <strong>$extra</strong> by <strong>$actor</strong>.' . "\n";
$lang->action->desc->opened         = '$date, created by <strong>$actor</strong> .' . "\n";
$lang->action->desc->openedbysystem = '$date, opened by system.' . "\n";
$lang->action->desc->created        = '$date, created by  <strong>$actor</strong> .' . "\n";
$lang->action->desc->added          = '$date, added by  <strong>$actor</strong> .' . "\n";
$lang->action->desc->changed        = '$date, changed by <strong>$actor</strong> .' . "\n";
$lang->action->desc->edited         = '$date, edited by <strong>$actor</strong> .' . "\n";
$lang->action->desc->assigned       = '$date, <strong>$actor</strong> assigned to <strong>$extra</strong>.' . "\n";
$lang->action->desc->closed         = '$date, closed by <strong>$actor</strong> .' . "\n";
$lang->action->desc->closedbysystem = '$date, closed by system.' . "\n";
$lang->action->desc->deleted        = '$date, deleted by <strong>$actor</strong> .' . "\n";
$lang->action->desc->deletedfile    = '$date, <strong>$actor</strong> deleted <strong><i>$extra</i></strong>.' . "\n";
$lang->action->desc->editfile       = '$date, <strong>$actor</strong> edited <strong><i>$extra</i></strong>.' . "\n";
$lang->action->desc->erased         = '$date, deleted by <strong>$actor</strong> .' . "\n";
$lang->action->desc->undeleted      = '$date, restored by <strong>$actor</strong> .' . "\n";
$lang->action->desc->hidden         = '$date, hidden by <strong>$actor</strong> .' . "\n";
$lang->action->desc->commented      = '$date, added by <strong>$actor</strong>.' . "\n";
$lang->action->desc->activated      = '$date, activated by <strong>$actor</strong> .' . "\n";
$lang->action->desc->blocked        = '$date, blocked by <strong>$actor</strong> .' . "\n";
$lang->action->desc->moved          = '$date, moved by <strong>$actor</strong> , which was "$extra".' . "\n";
$lang->action->desc->confirmed      = '$date, <strong>$actor</strong> confirmed the story change. The latest build is <strong>#$extra</strong>.' . "\n";
$lang->action->desc->caseconfirmed  = '$date, <strong>$actor</strong> confirmed the case change. The latest build is <strong>#$extra</strong>' . "\n";
$lang->action->desc->bugconfirmed   = '$date, <strong>$actor</strong> confirmed Bug.' . "\n";
$lang->action->desc->frombug        = '$date, converted from <strong>$actor</strong>. Its ID was <strong>$extra</strong>.';
$lang->action->desc->started        = '$date, started by <strong>$actor</strong>.' . "\n";
$lang->action->desc->restarted      = '$date, continued by <strong>$actor</strong>.' . "\n";
$lang->action->desc->delayed        = '$date, postponed by <strong>$actor</strong>.' . "\n";
$lang->action->desc->suspended      = '$date, suspended by <strong>$actor</strong>.' . "\n";
$lang->action->desc->recordestimate = '$date, recorded by <strong>$actor</strong> and it cost <strong>$extra</strong> hours.';
$lang->action->desc->editestimate   = '$date, <strong>$actor</strong> edited Hour.';
$lang->action->desc->deleteestimate = '$date, <strong>$actor</strong> deleted Hour.';
$lang->action->desc->canceled       = '$date, cancelled by <strong>$actor</strong>.' . "\n";
$lang->action->desc->svncommited    = '$date, <strong>$actor</strong> committed and the build is <strong>#$extra</strong>.' . "\n";
$lang->action->desc->gitcommited    = '$date, <strong>$actor</strong> committed and the build is <strong>#$extra</strong>.' . "\n";
$lang->action->desc->finished       = '$date, finished by <strong>$actor</strong>.' . "\n";
$lang->action->desc->paused         = '$date, paused by <strong>$actor</strong>.' . "\n";
$lang->action->desc->verified       = '$date, verified by <strong>$actor</strong>.' . "\n";
$lang->action->desc->diff1          = '<strong><i>%s</i></strong> is changed. It was "%s" and it is "%s".<br />' . "\n";
$lang->action->desc->diff2          = '<strong><i>%s</i></strong> is changed. The difference is ' . "\n" . "<blockquote class='textdiff'>%s</blockquote>" . "\n<blockquote class='original'>%s</blockquote>";
$lang->action->desc->diff3          = 'File Name %s was changed to %s .' . "\n";
$lang->action->desc->linked2bug     = '$date, linked to <strong>$extra</strong> by <strong>$actor</strong>';
$lang->action->desc->resolved       = '$date, resolved by <strong>$actor</strong> ' . "\n";
$lang->action->desc->managed        = '$date, by <strong>$actor</strong> managed.' . "\n";
$lang->action->desc->estimated      = '$date, by <strong>$actor</strong> estimated。' . "\n";

$lang->action->desc->createchildren     = '$date, <strong>$actor</strong> created a child task <strong>$extra</strong>。' . "\n";
$lang->action->desc->linkchildtask      = '$date, <strong>$actor</strong> linked a child task <strong>$extra</strong>。' . "\n";
$lang->action->desc->unlinkchildrentask = '$date, <strong>$actor</strong> unlinked a child task <strong>$extra</strong>。' . "\n";
$lang->action->desc->linkparenttask     = '$date, <strong>$actor</strong> linked to a parent task <strong>$extra</strong>。' . "\n";
$lang->action->desc->unlinkparenttask   = '$date, <strong>$actor</strong> unlinked a parent task <strong>$extra</strong>。' . "\n";
$lang->action->desc->deletechildrentask = '$date, <strong>$actor</strong> deleted a child task <strong>$extra</strong>。' . "\n";

$lang->action->desc->createchildrenstory = '$date, <strong>$actor</strong> created a child story <strong>$extra</strong>。' . "\n";
$lang->action->desc->linkchildstory      = '$date, <strong>$actor</strong> linked a child story <strong>$extra</strong>。' . "\n";
$lang->action->desc->unlinkchildrenstory = '$date, <strong>$actor</strong> unlinked a child story <strong>$extra</strong>。' . "\n";
$lang->action->desc->linkparentstory     = '$date, <strong>$actor</strong> linked to a parent story <strong>$extra</strong>。' . "\n";
$lang->action->desc->unlinkparentstory   = '$date, <strong>$actor</strong> unlinked a parent story <strong>$extra</strong>。' . "\n";
$lang->action->desc->deletechildrenstory = '$date, <strong>$actor</strong> deleted a child story <strong>$extra</strong>。' . "\n";

$lang->action->desc->linkrelatedcase   = '$date, <strong>$actor</strong> linked a case <strong>$extra</strong>.' . "\n";
$lang->action->desc->unlinkrelatedcase = '$date, <strong>$actor</strong> unlinked a case <strong>$extra</strong>.' . "\n";

$lang->action->label                        = new stdclass();
$lang->action->label->created               = 'created ';
$lang->action->label->opened                = 'opened ';
$lang->action->label->openedbysystem        = 'Opened by system ';
$lang->action->label->closedbysystem        = 'Closed by system ';
$lang->action->label->added                 = 'added';
$lang->action->label->changed               = 'changed ';
$lang->action->label->edited                = 'edited ';
$lang->action->label->assigned              = 'assigned ';
$lang->action->label->closed                = 'closed ';
$lang->action->label->deleted               = 'deleted ';
$lang->action->label->deletedfile           = 'deleted ';
$lang->action->label->editfile              = 'edited ';
$lang->action->label->erased                = 'erased ';
$lang->action->label->undeleted             = 'restored ';
$lang->action->label->hidden                = 'hid ';
$lang->action->label->commented             = 'commented ';
$lang->action->label->communicated          = 'communicated';
$lang->action->label->activated             = 'activated ';
$lang->action->label->blocked               = 'blocked ';
$lang->action->label->resolved              = 'resolved ';
$lang->action->label->reviewed              = 'reviewed ';
$lang->action->label->moved                 = 'moved ';
$lang->action->label->confirmed             = 'confirmed Story ';
$lang->action->label->bugconfirmed          = 'confirmed';
$lang->action->label->tostory               = 'converted to Story ';
$lang->action->label->frombug               = 'converted from Bug ';
$lang->action->label->fromlib               = 'imported from Library ';
$lang->action->label->totask                = 'converted to Task ';
$lang->action->label->svncommited           = 'committed SVN ';
$lang->action->label->gitcommited           = 'committed Git ';
$lang->action->label->linked2plan           = 'linked to Plan ';
$lang->action->label->unlinkedfromplan      = 'unlinked from ';
$lang->action->label->changestatus          = 'changed status';
$lang->action->label->marked                = 'marked';
$lang->action->label->linked2execution      = "linked to {$lang->executionCommon}";
$lang->action->label->unlinkedfromexecution = "unlinked from {$lang->executionCommon}";
$lang->action->label->linked2project        = "linked to project";
$lang->action->label->unlinkedfromproject   = "unlinked from project";
$lang->action->label->unlinkedfrombuild     = "unlinked Build ";
$lang->action->label->linked2release        = "linked Release ";
$lang->action->label->unlinkedfromrelease   = "unlinked Release ";
$lang->action->label->linkrelatedbug        = "linked Bug ";
$lang->action->label->unlinkrelatedbug      = "unlinked Bug ";
$lang->action->label->linkrelatedcase       = "linked Case ";
$lang->action->label->unlinkrelatedcase     = "unlinked Case ";
$lang->action->label->linkrelatedstory      = "linked Story ";
$lang->action->label->unlinkrelatedstory    = "unlinked Story ";
$lang->action->label->subdividestory        = "decomposed Story ";
$lang->action->label->unlinkchildstory      = "unlinked Story ";
$lang->action->label->started               = 'started ';
$lang->action->label->restarted             = 'continued ';
$lang->action->label->recordestimate        = 'recorded ';
$lang->action->label->editestimate          = 'edited ';
$lang->action->label->canceled              = 'cancelled ';
$lang->action->label->finished              = 'finished ';
$lang->action->label->paused                = 'paused ';
$lang->action->label->verified              = 'verified ';
$lang->action->label->delayed               = 'delayed ';
$lang->action->label->suspended             = 'suspended ';
$lang->action->label->login                 = 'login';
$lang->action->label->logout                = "logout";
$lang->action->label->deleteestimate        = "deleted ";
$lang->action->label->linked2build          = "linked ";
$lang->action->label->linked2bug            = "linked ";
$lang->action->label->linked2testtask       = "linked";
$lang->action->label->unlinkedfromtesttask  = "unlinked";
$lang->action->label->linkchildtask         = "linked a child task";
$lang->action->label->unlinkchildrentask    = "unlinked a child task";
$lang->action->label->linkparenttask        = "linked a parent task";
$lang->action->label->unlinkparenttask      = "unlink from parent task";
$lang->action->label->batchcreate           = "batch created tasks";
$lang->action->label->createchildren        = "create child tasks";
$lang->action->label->managed               = "managed";
$lang->action->label->managedteam           = "managed";
$lang->action->label->managedwhitelist      = "managed";
$lang->action->label->deletechildrentask    = "delete children task";
$lang->action->label->createchildrenstory   = "create child stories";
$lang->action->label->linkchildstory        = "linked a child story";
$lang->action->label->unlinkchildrenstory   = "unlinked a child story";
$lang->action->label->linkparentstory       = "linked a parent story";
$lang->action->label->unlinkparentstory     = "unlink from parent story";
$lang->action->label->deletechildrenstory   = "delete children story";
$lang->action->label->tracked               = 'tracked';
$lang->action->label->hangup                = 'hangup';
$lang->action->label->run                   = 'run';
$lang->action->label->estimated             = 'estimated';
$lang->action->label->reviewclosed          = 'Review Failed';
$lang->action->label->passreviewed          = 'Pass';
$lang->action->label->clarifyreviewed       = 'Clarify';
$lang->action->label->commitsummary         = 'Commit Summary';
$lang->action->label->updatetrainee         = 'Update Trainee';

$lang->action->dynamicAction                    = new stdclass;
$lang->action->dynamicAction->todo['opened']    = 'Create Todo';
$lang->action->dynamicAction->todo['edited']    = 'Edit Todo';
$lang->action->dynamicAction->todo['erased']    = 'Delete Todo';
$lang->action->dynamicAction->todo['finished']  = 'Finish Todo';
$lang->action->dynamicAction->todo['activated'] = 'Activate Todo';
$lang->action->dynamicAction->todo['closed']    = 'Close Todo';
$lang->action->dynamicAction->todo['assigned']  = 'Assign Todo';
$lang->action->dynamicAction->todo['undeleted'] = 'Restore Todo';
$lang->action->dynamicAction->todo['hidden']    = 'Hide Todo';

$lang->action->dynamicAction->program['create']   = 'Create Program';
$lang->action->dynamicAction->program['edit']     = 'Edit Program';
$lang->action->dynamicAction->program['activate'] = 'Activate Program';
$lang->action->dynamicAction->program['delete']   = 'Delete Program';
$lang->action->dynamicAction->program['close']    = 'Close Program';

$lang->action->dynamicAction->project['create']   = 'Create Project';
$lang->action->dynamicAction->project['edit']     = 'Edit Project';
$lang->action->dynamicAction->project['start']    = 'Start Project';
$lang->action->dynamicAction->project['suspend']  = 'Suspend Project';
$lang->action->dynamicAction->project['activate'] = 'Activate Project';
$lang->action->dynamicAction->project['close']    = 'Close Project';

$lang->action->dynamicAction->product['opened']    = 'Create ' . $lang->productCommon;
$lang->action->dynamicAction->product['edited']    = 'Edit ' . $lang->productCommon;
$lang->action->dynamicAction->product['deleted']   = 'Delete ' . $lang->productCommon;
$lang->action->dynamicAction->product['closed']    = 'Close ' . $lang->productCommon;
$lang->action->dynamicAction->product['undeleted'] = 'Restore ' . $lang->productCommon;
$lang->action->dynamicAction->product['hidden']    = 'Hide ' . $lang->productCommon;

$lang->action->dynamicAction->productplan['opened'] = 'Create Plan';
$lang->action->dynamicAction->productplan['edited'] = 'Edit Plan';

$lang->action->dynamicAction->release['opened']       = 'Create Release';
$lang->action->dynamicAction->release['edited']       = 'Edit Release';
$lang->action->dynamicAction->release['changestatus'] = 'Change Release Status';
$lang->action->dynamicAction->release['undeleted']    = 'Restore Release';
$lang->action->dynamicAction->release['hidden']       = 'Hide Release';

$lang->action->dynamicAction->story['opened']                = 'Create Story';
$lang->action->dynamicAction->story['edited']                = 'Edit Story';
$lang->action->dynamicAction->story['activated']             = 'Activate Story';
$lang->action->dynamicAction->story['reviewed']              = 'Review Story';
$lang->action->dynamicAction->story['closed']                = 'Close Story';
$lang->action->dynamicAction->story['assigned']              = 'Assign Story';
$lang->action->dynamicAction->story['changed']               = 'Change Story';
$lang->action->dynamicAction->story['linked2plan']           = 'Link Story to Plan';
$lang->action->dynamicAction->story['unlinkedfromplan']      = 'Unlink Story from Plan';
$lang->action->dynamicAction->story['linked2release']        = 'Link Story to Release';
$lang->action->dynamicAction->story['unlinkedfromrelease']   = 'Unlink Story from Plan';
$lang->action->dynamicAction->story['linked2build']          = 'Link Story to Build';
$lang->action->dynamicAction->story['unlinkedfrombuild']     = 'Unlink Story from Build';
$lang->action->dynamicAction->story['unlinkedfromproject']   = 'Unlink Project';
$lang->action->dynamicAction->story['undeleted']             = 'Restore Story';
$lang->action->dynamicAction->story['hidden']                = 'Hide Story';
$lang->action->dynamicAction->story['linked2execution']      = "Link Story";
$lang->action->dynamicAction->story['unlinkedfromexecution'] = "Unlink Story";
$lang->action->dynamicAction->story['estimated']             = "Estimate $lang->SRCommon";

$lang->action->dynamicAction->execution['opened']    = 'Create ' . $lang->executionCommon;
$lang->action->dynamicAction->execution['edited']    = 'Edit ' . $lang->executionCommon;
$lang->action->dynamicAction->execution['deleted']   = 'Delete ' . $lang->executionCommon;
$lang->action->dynamicAction->execution['started']   = 'Start ' . $lang->executionCommon;
$lang->action->dynamicAction->execution['delayed']   = 'Delay ' . $lang->executionCommon;
$lang->action->dynamicAction->execution['suspended'] = 'Suspend ' . $lang->executionCommon;
$lang->action->dynamicAction->execution['activated'] = 'Activate ' . $lang->executionCommon;
$lang->action->dynamicAction->execution['closed']    = 'Close ' . $lang->executionCommon;
$lang->action->dynamicAction->execution['managed']   = 'Manage ' . $lang->executionCommon;
$lang->action->dynamicAction->execution['undeleted'] = 'Restore ' . $lang->executionCommon;
$lang->action->dynamicAction->execution['hidden']    = 'Hide ' . $lang->executionCommon;
$lang->action->dynamicAction->execution['moved']     = 'Improt Task';

$lang->action->dynamicAction->team['managedTeam'] = 'Manage Team';

$lang->action->dynamicAction->task['opened']              = 'Create Task';
$lang->action->dynamicAction->task['edited']              = 'Edit Task';
$lang->action->dynamicAction->task['commented']           = 'Task Comment';
$lang->action->dynamicAction->task['assigned']            = 'Assign Task';
$lang->action->dynamicAction->task['confirmed']           = 'Confirm Task';
$lang->action->dynamicAction->task['started']             = 'Start Task';
$lang->action->dynamicAction->task['finished']            = 'Finish Task';
$lang->action->dynamicAction->task['recordestimate']      = 'Add Estimates';
$lang->action->dynamicAction->task['editestimate']        = 'Edit Estimates';
$lang->action->dynamicAction->task['deleteestimate']      = 'Delete Estimates';
$lang->action->dynamicAction->task['paused']              = 'Pause Task';
$lang->action->dynamicAction->task['closed']              = 'Close Task';
$lang->action->dynamicAction->task['canceled']            = 'Cancel Task';
$lang->action->dynamicAction->task['activated']           = 'Activate Task';
$lang->action->dynamicAction->task['createchildren']      = 'Create Child Task';
$lang->action->dynamicAction->task['unlinkparenttask']    = 'Unlink Parent Task';
$lang->action->dynamicAction->task['deletechildrentask']  = 'Delete children task';
$lang->action->dynamicAction->task['linkparenttask']      = 'Link Parent Task';
$lang->action->dynamicAction->task['linkchildtask']       = 'Link Child Task';
$lang->action->dynamicAction->task['createchildrenstory'] = 'Create Child Story';
$lang->action->dynamicAction->task['unlinkparentstory']   = 'Unlink Parent Story';
$lang->action->dynamicAction->task['deletechildrenstory'] = 'Delete children story';
$lang->action->dynamicAction->task['linkparentstory']     = 'Link Parent Story';
$lang->action->dynamicAction->task['linkchildstory']      = 'Link Child Story';
$lang->action->dynamicAction->task['undeleted']           = 'Restore Task';
$lang->action->dynamicAction->task['hidden']              = 'Hide Task';
$lang->action->dynamicAction->task['svncommited']         = 'SVN Commit';
$lang->action->dynamicAction->task['gitcommited']         = 'GIT Commit';

$lang->action->dynamicAction->build['opened']  = 'Create Build';
$lang->action->dynamicAction->build['edited']  = 'Edit Build';
$lang->action->dynamicAction->build['deleted'] = 'Delete Build';

$lang->action->dynamicAction->bug['opened']              = 'Report Bug';
$lang->action->dynamicAction->bug['edited']              = 'Edit Bug';
$lang->action->dynamicAction->bug['activated']           = 'Activate Bug';
$lang->action->dynamicAction->bug['assigned']            = 'Assign Bug';
$lang->action->dynamicAction->bug['closed']              = 'Close Bug';
$lang->action->dynamicAction->bug['bugconfirmed']        = 'Confirm Bug';
$lang->action->dynamicAction->bug['resolved']            = 'Resolve Bug';
$lang->action->dynamicAction->bug['undeleted']           = 'Restore Bug';
$lang->action->dynamicAction->bug['hidden']              = 'Hide Bug';
$lang->action->dynamicAction->bug['deleted']             = 'Delete Bug';
$lang->action->dynamicAction->bug['confirmed']           = 'Confirm Story Change';
$lang->action->dynamicAction->bug['tostory']             = 'Convert to Story';
$lang->action->dynamicAction->bug['totask']              = 'Convert to Task';
$lang->action->dynamicAction->bug['linked2plan']         = 'Link Plan';
$lang->action->dynamicAction->bug['unlinkedfromplan']    = 'Unlink Plan';
$lang->action->dynamicAction->bug['linked2release']      = 'Link Release';
$lang->action->dynamicAction->bug['unlinkedfromrelease'] = 'Unlink Plan';
$lang->action->dynamicAction->bug['linked2bug']          = 'Link Build';
$lang->action->dynamicAction->bug['unlinkedfrombuild']   = 'Unlink Build';

$lang->action->dynamicAction->testtask['opened']    = 'Create Test Request';
$lang->action->dynamicAction->testtask['edited']    = 'Edit Test Request';
$lang->action->dynamicAction->testtask['started']   = 'Start Test Request';
$lang->action->dynamicAction->testtask['activated'] = 'Activate Test Request';
$lang->action->dynamicAction->testtask['closed']    = 'Close Test Request';
$lang->action->dynamicAction->testtask['blocked']   = 'Blocked Test Request';

$lang->action->dynamicAction->case['opened']    = 'Create Case';
$lang->action->dynamicAction->case['edited']    = 'Edit Case';
$lang->action->dynamicAction->case['deleted']   = 'Delete Case';
$lang->action->dynamicAction->case['undeleted'] = 'Restore Case';
$lang->action->dynamicAction->case['hidden']    = 'Hide Case';
$lang->action->dynamicAction->case['reviewed']  = 'Add Review Result';
$lang->action->dynamicAction->case['confirmed'] = 'Confirm Case';
$lang->action->dynamicAction->case['fromlib']   = 'Import from Case Lib';

$lang->action->dynamicAction->testreport['opened']    = 'Create Test Report';
$lang->action->dynamicAction->testreport['edited']    = 'Edit Test Report';
$lang->action->dynamicAction->testreport['deleted']   = 'Delete Test Report';
$lang->action->dynamicAction->testreport['undeleted'] = 'Restore Test Report';
$lang->action->dynamicAction->testreport['hidden']    = 'Hide Test Report';

$lang->action->dynamicAction->testsuite['opened']    = 'Create Test Suite';
$lang->action->dynamicAction->testsuite['edited']    = 'Edit Test Suite';
$lang->action->dynamicAction->testsuite['deleted']   = 'Delete Test Suite';
$lang->action->dynamicAction->testsuite['undeleted'] = 'Restore Test Suite';
$lang->action->dynamicAction->testsuite['hidden']    = 'Hide Test Suite';

$lang->action->dynamicAction->caselib['opened']    = 'Create Case Lib';
$lang->action->dynamicAction->caselib['edited']    = 'Edit Case Lib';
$lang->action->dynamicAction->caselib['deleted']   = 'Delete Case Lib';
$lang->action->dynamicAction->caselib['undeleted'] = 'Restore Case Lib';
$lang->action->dynamicAction->caselib['hidden']    = 'Hide Case Lib';

$lang->action->dynamicAction->doclib['created'] = 'Create Doc Library';
$lang->action->dynamicAction->doclib['edited']  = 'Edit Doc Library';
$lang->action->dynamicAction->doclib['deleted'] = 'Delete Doc Library';

$lang->action->dynamicAction->doc['created']   = 'Create Document';
$lang->action->dynamicAction->doc['edited']    = 'Edit Document';
$lang->action->dynamicAction->doc['commented'] = 'Comment Document';
$lang->action->dynamicAction->doc['deleted']   = 'Delete Document';
$lang->action->dynamicAction->doc['undeleted'] = 'Restore Document';
$lang->action->dynamicAction->doc['hidden']    = 'Hide Document';

$lang->action->dynamicAction->user['created']       = 'Create User';
$lang->action->dynamicAction->user['edited']        = 'Edit User';
$lang->action->dynamicAction->user['login']         = 'Login';
$lang->action->dynamicAction->user['logout']        = 'Logout';
$lang->action->dynamicAction->user['undeleted']     = 'Restore User';
$lang->action->dynamicAction->user['hidden']        = 'Hide User';
$lang->action->dynamicAction->user['loginxuanxuan'] = 'Login Desktop';

$lang->action->dynamicAction->entry['created'] = 'Add Application';
$lang->action->dynamicAction->entry['edited']  = 'Edit Application';

$lang->action->label->product     = $lang->productCommon . '|product|view|productID=%s';
$lang->action->label->productplan = 'Plan|productplan|view|productID=%s';
$lang->action->label->release     = 'Release|release|view|productID=%s';
$lang->action->label->story       = 'Story|story|view|storyID=%s';
$lang->action->label->program     = "Program|program|product|programID=%s";
$lang->action->label->project     = "Project|project|index|projectID=%s";
if($config->systemMode == 'new')
{
    $lang->action->label->execution = "Execution|execution|task|executionID=%s";
}
else
{
    $lang->action->label->execution = "$lang->executionCommon|execution|task|executionID=%s";
}
$lang->action->label->task        = 'Task|task|view|taskID=%s';
$lang->action->label->build       = 'Build|build|view|buildID=%s';
$lang->action->label->bug         = 'Bug|bug|view|bugID=%s';
$lang->action->label->case        = 'Case|testcase|view|caseID=%s';
$lang->action->label->testtask    = 'Request|testtask|view|caseID=%s';
$lang->action->label->testsuite   = 'Test Suite|testsuite|view|suiteID=%s';
$lang->action->label->caselib     = 'Case Library|caselib|view|libID=%s';
$lang->action->label->todo        = 'Todo|todo|view|todoID=%s';
$lang->action->label->doclib      = 'Doc Library|doc|browse|libID=%s';
$lang->action->label->doc         = 'Doc|doc|view|docID=%s';
$lang->action->label->user        = 'User|user|view|account=%s';
$lang->action->label->testreport  = 'Report|testreport|view|report=%s';
$lang->action->label->entry       = 'Application|entry|browse|';
$lang->action->label->webhook     = 'Webhook|webhook|browse|';
$lang->action->label->space       = ' ';
$lang->action->label->risk        = 'Risk|risk|view|riskID=%s';
$lang->action->label->issue       = 'Issue|issue|view|issueID=%s';
$lang->action->label->design      = 'Design|design|view|designID=%s';
$lang->action->label->stakeholder = 'Stakeholder|stakeholder|view|userID=%s';
$lang->action->label->opportunity = 'Opportunity|opportunity|view|opportunityID=%s';
$lang->action->label->trainplan   = 'Trainplan|trainplan|view|trainplanID=%s';
$lang->action->label->gapanalysis = 'Gap Analysis|gapanalysis|view|gapanalysisID=%s';

$lang->action->search = new stdclass();
$lang->action->search->objectTypeList['']            = '';
$lang->action->search->objectTypeList['product']     = $lang->productCommon;
$lang->action->search->objectTypeList['program']     = 'Program';
$lang->action->search->objectTypeList['project']     = 'Project';
$lang->action->search->objectTypeList['execution']   = 'Execution';
$lang->action->search->objectTypeList['bug']         = 'Bug';
$lang->action->search->objectTypeList['case']        = 'Case';
$lang->action->search->objectTypeList['caseresult']  = 'Case Result';
$lang->action->search->objectTypeList['stepresult']  = 'Case Steps';
$lang->action->search->objectTypeList['story']       = "$lang->SRCommon/$lang->URCommon";
$lang->action->search->objectTypeList['task']        = 'Task';
$lang->action->search->objectTypeList['testtask']    = 'Request';
$lang->action->search->objectTypeList['user']        = 'User';
$lang->action->search->objectTypeList['doc']         = 'Doc';
$lang->action->search->objectTypeList['doclib']      = 'Doc Lib';
$lang->action->search->objectTypeList['todo']        = 'Todo';
$lang->action->search->objectTypeList['build']       = 'Build';
$lang->action->search->objectTypeList['release']     = 'Release';
$lang->action->search->objectTypeList['productplan'] = 'Plan';
$lang->action->search->objectTypeList['branch']      = 'Branch';
$lang->action->search->objectTypeList['testsuite']   = 'Suite';
$lang->action->search->objectTypeList['caselib']     = 'Library';
$lang->action->search->objectTypeList['testreport']  = 'Report';

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
$lang->admin->index         = 'Admin Home';
$lang->admin->checkDB       = 'Check Database';
$lang->admin->sso           = 'Zdoo';
$lang->admin->ssoAction     = 'Link Zdoo';
$lang->admin->safeIndex     = 'Security';
$lang->admin->checkWeak     = 'Check Weak Password';
$lang->admin->certifyMobile = 'Verify your cellphone';
$lang->admin->certifyEmail  = 'Verify your Email';
$lang->admin->ztCompany     = 'Verify your company';
$lang->admin->captcha       = 'Verification Code';
$lang->admin->getCaptcha    = 'Send Verification Code';
$lang->admin->register      = 'Register';

$lang->admin->api     = 'API';
$lang->admin->log     = 'Log';
$lang->admin->setting = 'Setting';
$lang->admin->days    = 'Valid Day';

$lang->admin->info = new stdclass();
$lang->admin->info->version = 'Current Version is %s. ';
$lang->admin->info->links   = 'You can visit links below';
$lang->admin->info->account = 'Your ZenTao account is %s.';
$lang->admin->info->log     = 'Log that exceeds valid days will be deleted and you have to run cron.';

$lang->admin->notice = new stdclass();
$lang->admin->notice->register = "Note: You haven't registered in ZenTao official website(www.zentao.pm). %s then get the Latest ZenTao Upgrades and News.";
$lang->admin->notice->ignore   = "Ignore";
$lang->admin->notice->int      = "『%s』should be a positive integer.";

$lang->admin->registerNotice = new stdclass();
$lang->admin->registerNotice->common     = 'Bind Account';
$lang->admin->registerNotice->caption    = 'ZenTao Community Signup';
$lang->admin->registerNotice->click      = 'Sign Up';
$lang->admin->registerNotice->lblAccount = '>= 3 letters and numbers';
$lang->admin->registerNotice->lblPasswd  = '>= 6 letters and numbers';
$lang->admin->registerNotice->submit     = 'Submit';
$lang->admin->registerNotice->bind       = "Bind Exsiting Account";
$lang->admin->registerNotice->success    = "You have signed up!";

$lang->admin->bind = new stdclass();
$lang->admin->bind->caption = 'Link Account';
$lang->admin->bind->success = "Account is linked!";

$lang->admin->safe = new stdclass();
$lang->admin->safe->common       = 'Security Policy';
$lang->admin->safe->set          = 'Password Settings';
$lang->admin->safe->password     = 'Password Strength';
$lang->admin->safe->weak         = 'Common Weak Passwords';
$lang->admin->safe->reason       = 'Type';
$lang->admin->safe->checkWeak    = 'Weak Password Scan';
$lang->admin->safe->changeWeak   = 'Force to change weak password';
$lang->admin->safe->loginCaptcha = 'Login using CAPTCHA';
$lang->admin->safe->modifyPasswordFirstLogin = 'Force to change password after first login';

$lang->admin->safe->modeList[0] = 'I don\'t care.';
$lang->admin->safe->modeList[1] = 'Medium';
$lang->admin->safe->modeList[2] = 'Strong';

$lang->admin->safe->modeRuleList[1] = ' >= 6 upper and lower case, and numbers';
$lang->admin->safe->modeRuleList[2] = ' >= 10 upper and lower case, numbers and special characters.';

$lang->admin->safe->reasonList['weak']     = 'Common Weak Password';
$lang->admin->safe->reasonList['account']  = 'Same as account';
$lang->admin->safe->reasonList['mobile']   = 'Same as mobilephone number';
$lang->admin->safe->reasonList['phone']    = 'Same as phone number';
$lang->admin->safe->reasonList['birthday'] = 'Same as DOB';

$lang->admin->safe->modifyPasswordList[1] = 'Yes';
$lang->admin->safe->modifyPasswordList[0] = 'No';

$lang->admin->safe->loginCaptchaList[1] = 'Yes';
$lang->admin->safe->loginCaptchaList[0] = 'No';

$lang->admin->safe->noticeMode   = 'Password will be checked when a user logs in, or a user is added or edited.';
$lang->admin->safe->noticeStrong = '';
/* api */
$lang->api = new stdclass();
$lang->api->common   = 'API';
$lang->api->getModel = 'Super Model API';
$lang->api->sql      = 'SQL Query API';

$lang->api->position  = 'Position';
$lang->api->startLine = "%s,%s";
$lang->api->desc      = 'Description';
$lang->api->debug     = 'Debug';
$lang->api->submit    = 'Submit';
$lang->api->url       = 'Request URL';
$lang->api->result    = 'Results';
$lang->api->status    = 'Status';
$lang->api->data      = 'Data';
$lang->api->noParam   = 'No parameters required if GET Debug';
$lang->api->post      = 'Refer to page list if POST Debug';

$lang->api->error = new stdclass();
$lang->api->error->onlySelect = 'SQL interface only allow SELECT query.';
$lang->api->error->disabled   = 'For security reasons, this feature is disabled. You can go to the config directory and modify the configuration item %s to open this function.';
/* automation */
$lang->automation->common = 'Automated Testing';
$lang->automation->browse = 'Home';

$lang->automation->title = 'Test Automation Solutions';

$lang->automation->ztfSite     = 'ZTF Website';
$lang->automation->ztfDownload = 'ZTF Download';
$lang->automation->ztfManual   = 'ZTF Manual';

$lang->automation->ztfFeature1 = 'ZTF solves problems for you.';
$lang->automation->ztfFeature2 = 'ZTF solves the following problems for you:';
$lang->automation->ztfFeature3 = 'Management of use cases';
$lang->automation->ztfFeature4 = 'Comparison of test results';
$lang->automation->ztfFeature5 = 'Execution of test scripts';
$lang->automation->ztfFeature6 = 'Bug reporting';

$lang->automation->ztfFeature7  = 'ZTF is not depended on the environment';
$lang->automation->ztfFeature8  = 'Written in Go';
$lang->automation->ztfFeature9  = 'Deploy with no dependencies';
$lang->automation->ztfFeature10 = 'Works on all platforms';
$lang->automation->ztfFeature11 = 'Has only one executable';

$lang->automation->ztfFeature12 = 'ZTF is for all automated testing types';
$lang->automation->ztfFeature13 = 'Support for common development languages';
$lang->automation->ztfFeature14 = 'Can be integrated with known testing frameworks';
$lang->automation->ztfFeature15 = 'No specific script implementation requried';

$lang->automation->ztfFeature16 = 'Export test cases to scripts in bulk';
$lang->automation->ztfFeature17 = 'Submit execution results to ZenTao';
$lang->automation->ztfFeature18 = 'Create bugs from execution results';
$lang->automation->ztfFeature19 = 'Integrate ZenTao ALM';

$lang->automation->zendataSite     = 'ZenData Website';
$lang->automation->zendataDownload = 'ZenData Download';
$lang->automation->zendataManual   = 'ZenData Manual';

$lang->automation->zendata         = 'A generic data generation tool';
$lang->automation->zendataFeature1 = 'Easy to get started with no coding knowledge required';
$lang->automation->zendataFeature2 = 'Customizable data format with no restrictions';
$lang->automation->zendataFeature3 = 'Generate a million pieces of data with one click';

$lang->automation->zendataFeature4 = 'Cross-platform and cross-language';
$lang->automation->zendataFeature5 = 'Only one executable is required to run it';
$lang->automation->zendataFeature6 = 'For Windows, Linux, and MacOS';
$lang->automation->zendataFeature7 = 'For various languages';

$lang->automation->zendataFeature8  = 'All kinds of black tricks';
$lang->automation->zendataFeature9  = 'Interval, Step Size, Random, Repeat, and Reference';
$lang->automation->zendataFeature10 = 'Specify a list of files to be queried in Excel';
$lang->automation->zendataFeature11 = 'Parallel generation, recursive generation, and reverse parsing';

$lang->automation->groupTips        = 'Welcome to the automated testing QQ group';
$lang->automation->groupTitle       = 'Software testing group:';
$lang->automation->qqGroup          = '522506766';
$lang->automation->groupDescription = 'Software testing community for software testers to share software testing tools and methods and improve software testing skills';
/* backup */
$lang->backup->common      = 'Backup';
$lang->backup->index       = 'Backup Home';
$lang->backup->history     = 'History';
$lang->backup->delete      = 'Delete Backup';
$lang->backup->backup      = 'Backup';
$lang->backup->restore     = 'Restore';
$lang->backup->change      = 'Edit Expiration';
$lang->backup->changeAB    = 'Edit';
$lang->backup->rmPHPHeader = 'Remove PHP header';
$lang->backup->setting     = 'Setting';

$lang->backup->settingAction = 'Backup Setting';

$lang->backup->time     = 'Date';
$lang->backup->files    = 'Files';
$lang->backup->allCount = 'All Count';
$lang->backup->count    = 'Backup Count';
$lang->backup->size     = 'Size';
$lang->backup->status   = 'Status';

$lang->backup->statusList['success'] = 'Success';
$lang->backup->statusList['fail']    = 'Fail';

$lang->backup->settingDir = 'Backup Directory';
$lang->backup->settingList['nofile'] = 'Do not back up files or codes.';
$lang->backup->settingList['nosafe'] = 'Do not prevent downloading PHP file header.';

$lang->backup->waitting       = '<span id="backupType"></span> is ongoing. Please wait...';
$lang->backup->progressSQL    = '<p>SQL backup: %s is backed up.</p>';
$lang->backup->progressAttach = '<p>SQL backup is completed.</p><p>Attachment backing up.</p>';
$lang->backup->progressCode   = '<p>SQL backup is completed.</p><p>Attachment backup is completed.</p><p>Code backing up.</p>';
$lang->backup->confirmDelete  = 'Do you want to delete the backup?';
$lang->backup->confirmRestore = 'Do you want to restore the backup?';
$lang->backup->holdDays       = 'Hold last %s days of backup';
$lang->backup->copiedFail     = 'Copy failed files: ';
$lang->backup->restoreTip     = 'Only files and databases can be restored by clicking Restore. Code can be restored manually.';

$lang->backup->success = new stdclass();
$lang->backup->success->backup  = 'Done!';
$lang->backup->success->restore = 'Restored!';

$lang->backup->error = new stdclass();
$lang->backup->error->noCreateDir = 'Directory does not exist and cannot be created';
$lang->backup->error->noWritable  = "<code>%s</code> is not writable! Please check the privilege, or backup will not be done.";
$lang->backup->error->noDelete    = "%s cannot be deleted. Please modify the privilege or manually delete it.";
$lang->backup->error->restoreSQL  = "Failed to restore the database library. Error %s.";
$lang->backup->error->restoreFile = "Failed to restore the file. Error %s.";
$lang->backup->error->backupFile  = "Failed to back up the file. Error %s.";
$lang->backup->error->backupCode  = "Failed to back up the code. Error %s.";
/* block */
global $config;
$lang->block = new stdclass();
$lang->block->common     = 'Block';
$lang->block->name       = 'Name';
$lang->block->style      = 'Style';
$lang->block->grid       = 'Position';
$lang->block->color      = 'Color';
$lang->block->reset      = 'Reset Layout';
$lang->block->story      = 'Story';
$lang->block->investment = 'Investment';
$lang->block->estimate   = 'Estimate';
$lang->block->last       = 'Last';

$lang->block->account = 'Account';
$lang->block->module  = 'Module';
$lang->block->title   = 'Title';
$lang->block->source  = 'Source Module';
$lang->block->block   = 'Source Block';
$lang->block->order   = 'Order';
$lang->block->height  = 'Height';
$lang->block->role    = 'Role';

$lang->block->lblModule    = 'Module';
$lang->block->lblBlock     = 'Block';
$lang->block->lblNum       = 'Number';
$lang->block->lblHtml      = 'HTML';
$lang->block->dynamic      = 'Dynamics';
$lang->block->assignToMe   = 'Todo';
$lang->block->done         = 'Done';
$lang->block->lblFlowchart = 'Flowchart';
$lang->block->welcome      = 'Welcome';
$lang->block->lblTesttask  = 'Test Request Detail';
$lang->block->contribute   = 'Personal Contribution';

$lang->block->leftToday           = 'Remained Work';
$lang->block->myTask              = 'My Tasks';
$lang->block->myStory             = 'Stories';
$lang->block->myBug               = 'Bugs';
$lang->block->myExecution         = 'Unclosed ' . $lang->executionCommon . 's';
$lang->block->myProduct           = 'Unclosed ' . $lang->productCommon . 's';
$lang->block->delayed             = 'Delayed';
$lang->block->noData              = 'No data on this type of reports.';
$lang->block->emptyTip            = 'No data.';
$lang->block->createdTodos        = 'Todos Created';
$lang->block->createdRequirements = 'UR/Epics Created';
$lang->block->createdStories      = 'SR/Stories Created';
$lang->block->finishedTasks       = 'Tasks Finished';
$lang->block->createdBugs         = 'Bugs Created';
$lang->block->resolvedBugs        = 'Bugs Resolved';
$lang->block->createdCases        = 'Cases Created';
$lang->block->createdRisks        = 'Risks Created';
$lang->block->resolvedRisks       = 'Risks Resolved';
$lang->block->createdIssues       = 'Issues Created';
$lang->block->resolvedIssues      = 'Issues Resolved';
$lang->block->createdDocs         = 'Docs Created';
$lang->block->allExecutions       = 'All ' . $lang->executionCommon;
$lang->block->doingExecution      = 'Doning ' . $lang->executionCommon;
$lang->block->finishExecution     = 'Finish ' . $lang->executionCommon;
$lang->block->estimatedHours      = 'Estimated Hours';
$lang->block->consumedHours       = 'Consumed Hours';
$lang->block->time                = 'No';
$lang->block->week                = 'Week';
$lang->block->selectProduct       = 'Product selection';
$lang->block->of                  = ' of ';
$lang->block->remain              = 'Left';

$lang->block->params = new stdclass();
$lang->block->params->name  = 'Name';
$lang->block->params->value = 'Value';

$lang->block->createBlock        = 'Add Block';
$lang->block->editBlock          = 'Edit Block';
$lang->block->ordersSaved        = 'The order is saved.';
$lang->block->confirmRemoveBlock = 'Do you want to remove the Block?';
$lang->block->noticeNewBlock     = 'A new layout is available. Do you want to switch to the new one?';
$lang->block->confirmReset       = 'Do you want to reset the layout?';
$lang->block->closeForever       = 'Permanent Close';
$lang->block->confirmClose       = 'Do you want to permanently close this block? Once done, it is not available to anyone. It can be activiated at Admin->Custom.';
$lang->block->remove             = 'Remove';
$lang->block->refresh            = 'Refresh';
$lang->block->nbsp               = ' ';
$lang->block->hidden             = 'Hide';
$lang->block->dynamicInfo        = "<span class='timeline-tag'>%s</span> <span class='timeline-text'>%s <em>%s</em> %s <a href='%s' title='%s'>%s</a></span>";

$lang->block->productName  = $lang->productCommon . ' Name';
$lang->block->totalStory   = 'The Total ' . $lang->SRCommon;
$lang->block->totalBug     = 'The Total Bug';
$lang->block->totalRelease = 'Release The Number';

$lang->block->totalInvestment = 'Total investment';
$lang->block->totalPeople     = 'Total number';
$lang->block->spent           = 'Has Been Spent';
$lang->block->budget          = 'Budget';
$lang->block->left            = 'Residuals';

$lang->block->default['waterfall']['project']['1']['title']  = 'Project Weekly';
$lang->block->default['waterfall']['project']['1']['block']  = 'waterfallreport';
$lang->block->default['waterfall']['project']['1']['source'] = 'project';
$lang->block->default['waterfall']['project']['1']['grid']   = 8;

$lang->block->default['waterfall']['project']['2']['title']  = 'Estimate';
$lang->block->default['waterfall']['project']['2']['block']  = 'waterfallestimate';
$lang->block->default['waterfall']['project']['2']['source'] = 'project';
$lang->block->default['waterfall']['project']['2']['grid']   = 4;

$lang->block->default['waterfall']['project']['3']['title']  = 'Plan Gantt Chart';
$lang->block->default['waterfall']['project']['3']['block']  = 'waterfallgantt';
$lang->block->default['waterfall']['project']['3']['source'] = 'project';
$lang->block->default['waterfall']['project']['3']['grid']   = 8;

$lang->block->default['waterfall']['project']['4']['title']  = 'Progress Chart';
$lang->block->default['waterfall']['project']['4']['block']  = 'waterfallprogress';
$lang->block->default['waterfall']['project']['4']['grid']   = 4;

$lang->block->default['waterfall']['project']['5']['title']  = 'Project Issue';
$lang->block->default['waterfall']['project']['5']['block']  = 'waterfallissue';
$lang->block->default['waterfall']['project']['5']['source'] = 'project';
$lang->block->default['waterfall']['project']['5']['grid']   = 8;

$lang->block->default['waterfall']['project']['5']['params']['type']    = 'all';
$lang->block->default['waterfall']['project']['5']['params']['count']   = '15';
$lang->block->default['waterfall']['project']['5']['params']['orderBy'] = 'id_desc';

$lang->block->default['waterfall']['project']['6']['title']  = 'Dynamic';
$lang->block->default['waterfall']['project']['6']['block']  = 'projectdynamic';
$lang->block->default['waterfall']['project']['6']['grid']   = 4;
$lang->block->default['waterfall']['project']['6']['source'] = 'project';

$lang->block->default['waterfall']['project']['7']['title']  = 'Project Risk';
$lang->block->default['waterfall']['project']['7']['block']  = 'waterfallrisk';
$lang->block->default['waterfall']['project']['7']['source'] = 'project';
$lang->block->default['waterfall']['project']['7']['grid']   = 8;

$lang->block->default['waterfall']['project']['7']['params']['type']    = 'all';
$lang->block->default['waterfall']['project']['7']['params']['count']   = '15';
$lang->block->default['waterfall']['project']['7']['params']['orderBy'] = 'id_desc';

$lang->block->default['scrum']['project']['1']['title'] =  'Project Overview';
$lang->block->default['scrum']['project']['1']['block'] = 'scrumoverview';
$lang->block->default['scrum']['project']['1']['grid']  = 8;

$lang->block->default['scrum']['project']['2']['title'] = $lang->executionCommon . ' List';
$lang->block->default['scrum']['project']['2']['block'] = 'scrumlist';
$lang->block->default['scrum']['project']['2']['grid']  = 8;

$lang->block->default['scrum']['project']['2']['params']['type']    = 'undone';
$lang->block->default['scrum']['project']['2']['params']['count']   = '20';
$lang->block->default['scrum']['project']['2']['params']['orderBy'] = 'id_desc';

$lang->block->default['scrum']['project']['3']['title'] = 'Test Version';
$lang->block->default['scrum']['project']['3']['block'] = 'scrumtest';
$lang->block->default['scrum']['project']['3']['grid']  = 8;

$lang->block->default['scrum']['project']['3']['params']['type']    = 'wait';
$lang->block->default['scrum']['project']['3']['params']['count']   = '15';
$lang->block->default['scrum']['project']['3']['params']['orderBy'] = 'id_desc';

$lang->block->default['scrum']['project']['4']['title'] = $lang->executionCommon . ' Overview';
$lang->block->default['scrum']['project']['4']['block'] = 'sprint';
$lang->block->default['scrum']['project']['4']['grid']  = 4;

$lang->block->default['scrum']['project']['5']['title'] = 'Dynamic';
$lang->block->default['scrum']['project']['5']['block'] = 'projectdynamic';
$lang->block->default['scrum']['project']['5']['grid']  = 4;

$lang->block->default['product']['1']['title'] = $lang->productCommon . ' Report';
$lang->block->default['product']['1']['block'] = 'statistic';
$lang->block->default['product']['1']['grid']  = 8;

$lang->block->default['product']['1']['params']['type']  = 'all';
$lang->block->default['product']['1']['params']['count'] = '20';

$lang->block->default['product']['2']['title'] = $lang->productCommon . ' Overview';
$lang->block->default['product']['2']['block'] = 'overview';
$lang->block->default['product']['2']['grid']  = 4;

$lang->block->default['product']['3']['title'] = 'Active ' . $lang->productCommon . 's';
$lang->block->default['product']['3']['block'] = 'list';
$lang->block->default['product']['3']['grid']  = 8;

$lang->block->default['product']['3']['params']['count'] = 15;
$lang->block->default['product']['3']['params']['type']  = 'noclosed';

$lang->block->default['product']['4']['title'] = 'My Stories';
$lang->block->default['product']['4']['block'] = 'story';
$lang->block->default['product']['4']['grid']  = 4;

$lang->block->default['product']['4']['params']['count']   = 15;
$lang->block->default['product']['4']['params']['orderBy'] = 'id_desc';
$lang->block->default['product']['4']['params']['type']    = 'assignedTo';

$lang->block->default['execution']['1']['title'] = 'Execution Report';
$lang->block->default['execution']['1']['block'] = 'statistic';
$lang->block->default['execution']['1']['grid']  = 8;

$lang->block->default['execution']['1']['params']['type']  = 'all';
$lang->block->default['execution']['1']['params']['count'] = '20';

$lang->block->default['execution']['2']['title'] = 'Execution Overview';
$lang->block->default['execution']['2']['block'] = 'overview';
$lang->block->default['execution']['2']['grid']  = 4;

$lang->block->default['execution']['3']['title'] = 'Active Executions';
$lang->block->default['execution']['3']['block'] = 'list';
$lang->block->default['execution']['3']['grid']  = 8;

$lang->block->default['execution']['3']['params']['count']   = 15;
$lang->block->default['execution']['3']['params']['orderBy'] = 'id_desc';
$lang->block->default['execution']['3']['params']['type']    = 'undone';

$lang->block->default['execution']['4']['title'] = 'My Tasks';
$lang->block->default['execution']['4']['block'] = 'task';
$lang->block->default['execution']['4']['grid']  = 4;

$lang->block->default['execution']['4']['params']['count']   = 15;
$lang->block->default['execution']['4']['params']['orderBy'] = 'id_desc';
$lang->block->default['execution']['4']['params']['type']    = 'assignedTo';

$lang->block->default['execution']['5']['title'] = 'Build List';
$lang->block->default['execution']['5']['block'] = 'build';
$lang->block->default['execution']['5']['grid']  = 8;

$lang->block->default['execution']['5']['params']['count']   = 15;
$lang->block->default['execution']['5']['params']['orderBy'] = 'id_desc';

$lang->block->default['qa']['1']['title'] = 'Test Report';
$lang->block->default['qa']['1']['block'] = 'statistic';
$lang->block->default['qa']['1']['grid']  = 8;

$lang->block->default['qa']['1']['params']['type']  = 'noclosed';
$lang->block->default['qa']['1']['params']['count'] = '20';

//$lang->block->default['qa']['2']['title'] = 'Testcase Overview';
//$lang->block->default['qa']['2']['block'] = 'overview';
//$lang->block->default['qa']['2']['grid']  = 4;

$lang->block->default['qa']['2']['title'] = 'My Bugs';
$lang->block->default['qa']['2']['block'] = 'bug';
$lang->block->default['qa']['2']['grid']  = 4;

$lang->block->default['qa']['2']['params']['count']   = 15;
$lang->block->default['qa']['2']['params']['orderBy'] = 'id_desc';
$lang->block->default['qa']['2']['params']['type']    = 'assignedTo';

$lang->block->default['qa']['3']['title'] = 'My Cases';
$lang->block->default['qa']['3']['block'] = 'case';
$lang->block->default['qa']['3']['grid']  = 4;

$lang->block->default['qa']['3']['params']['count']   = 15;
$lang->block->default['qa']['3']['params']['orderBy'] = 'id_desc';
$lang->block->default['qa']['3']['params']['type']    = 'assigntome';

$lang->block->default['qa']['4']['title'] = 'Waiting Builds';
$lang->block->default['qa']['4']['block'] = 'testtask';
$lang->block->default['qa']['4']['grid']  = 4;

$lang->block->default['qa']['4']['params']['count']   = 15;
$lang->block->default['qa']['4']['params']['orderBy'] = 'id_desc';
$lang->block->default['qa']['4']['params']['type']    = 'wait';

$lang->block->default['full']['my']['1']['title']  = 'Welcome';
$lang->block->default['full']['my']['1']['block']  = 'welcome';
$lang->block->default['full']['my']['1']['grid']   = 8;
$lang->block->default['full']['my']['1']['source'] = '';

$lang->block->default['full']['my']['2']['title']  = 'Dynamics';
$lang->block->default['full']['my']['2']['block']  = 'dynamic';
$lang->block->default['full']['my']['2']['grid']   = 4;
$lang->block->default['full']['my']['2']['source'] = '';

$lang->block->default['full']['my']['3']['title']           = 'My Todos';
$lang->block->default['full']['my']['3']['block']           = 'list';
$lang->block->default['full']['my']['3']['grid']            = 4;
$lang->block->default['full']['my']['3']['source']          = 'todo';
$lang->block->default['full']['my']['3']['params']['count'] = '20';

if($config->systemMode == 'new')
{
    $lang->block->default['full']['my']['4']['title']           = 'Project Statistic';
    $lang->block->default['full']['my']['4']['block']           = 'statistic';
    $lang->block->default['full']['my']['4']['source']          = 'project';
    $lang->block->default['full']['my']['4']['grid']            = 8;
    $lang->block->default['full']['my']['4']['params']['count'] = '20';
}

$lang->block->default['full']['my']['5']['title']  = 'Personal Contribution';
$lang->block->default['full']['my']['5']['block']  = 'contribute';
$lang->block->default['full']['my']['5']['source'] = '';
$lang->block->default['full']['my']['5']['grid']   = 4;

$lang->block->default['full']['my']['6']['title']  = 'Recent Projects';
$lang->block->default['full']['my']['6']['block']  = 'recentproject';
$lang->block->default['full']['my']['6']['source'] = 'project';
$lang->block->default['full']['my']['6']['grid']   = 8;

$lang->block->default['full']['my']['7']['title']  = 'Todo';
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
    $lang->block->default['full']['my']['8']['title']  = 'Human Input';
    $lang->block->default['full']['my']['8']['block']  = 'projectteam';
    $lang->block->default['full']['my']['8']['source'] = 'project';
    $lang->block->default['full']['my']['8']['grid']   = 8;
}

$lang->block->default['full']['my']['9']['title']  = 'Project List';
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

$lang->block->count   = 'Count';
$lang->block->type    = 'Type';
$lang->block->orderBy = 'Order by';

$lang->block->availableBlocks            = new stdclass();
$lang->block->availableBlocks->todo      = 'My schedule';
$lang->block->availableBlocks->task      = 'My Tasks';
$lang->block->availableBlocks->bug       = 'My Bugs';
$lang->block->availableBlocks->case      = 'My Cases';
$lang->block->availableBlocks->story     = 'My Stories';
$lang->block->availableBlocks->product   = $lang->productCommon . 's';
$lang->block->availableBlocks->execution = $lang->executionCommon . 's';
$lang->block->availableBlocks->plan      = 'Plans';
$lang->block->availableBlocks->release   = 'Releases';
$lang->block->availableBlocks->build     = 'Builds';
$lang->block->availableBlocks->testtask  = 'Requests';
$lang->block->availableBlocks->risk      = 'My Risks';
$lang->block->availableBlocks->issue     = 'My Issues';

if($config->systemMode == 'new') $lang->block->moduleList['project'] = 'Project';
$lang->block->moduleList['product']   = $lang->productCommon;
$lang->block->moduleList['execution'] = $lang->execution->common;
$lang->block->moduleList['qa']        = 'Test';
$lang->block->moduleList['todo']      = 'Todo';

$lang->block->modules['project'] = new stdclass();
$lang->block->modules['project']->availableBlocks = new stdclass();
$lang->block->modules['project']->availableBlocks->project       = 'Project List';
$lang->block->modules['project']->availableBlocks->recentproject = 'Recent Project';
$lang->block->modules['project']->availableBlocks->statistic     = 'Project Statistic';
$lang->block->modules['project']->availableBlocks->projectteam   = 'Project Human Input';

$lang->block->modules['scrum']['index'] = new stdclass();
$lang->block->modules['scrum']['index']->availableBlocks = new stdclass();
$lang->block->modules['scrum']['index']->availableBlocks->scrumoverview  = 'Project Overview';
$lang->block->modules['scrum']['index']->availableBlocks->scrumlist      = $lang->executionCommon . ' List';
$lang->block->modules['scrum']['index']->availableBlocks->sprint         = $lang->executionCommon . ' Overview';
$lang->block->modules['scrum']['index']->availableBlocks->scrumtest      = 'Test Version';
$lang->block->modules['scrum']['index']->availableBlocks->projectdynamic = 'Dynamics';

$lang->block->modules['waterfall']['index'] = new stdclass();
$lang->block->modules['waterfall']['index']->availableBlocks = new stdclass();
$lang->block->modules['waterfall']['index']->availableBlocks->waterfallreport   = 'Project Weekly';
$lang->block->modules['waterfall']['index']->availableBlocks->waterfallestimate = 'Estimate';
$lang->block->modules['waterfall']['index']->availableBlocks->waterfallgantt    = 'Plan Gantt Chart';
$lang->block->modules['waterfall']['index']->availableBlocks->waterfallprogress = 'Progress Chart';
$lang->block->modules['waterfall']['index']->availableBlocks->waterfallissue    = 'Project Issue';
$lang->block->modules['waterfall']['index']->availableBlocks->waterfallrisk     = 'Project Risk';
$lang->block->modules['waterfall']['index']->availableBlocks->projectdynamic    = 'Dynamics';

$lang->block->modules['product'] = new stdclass();
$lang->block->modules['product']->availableBlocks = new stdclass();
$lang->block->modules['product']->availableBlocks->statistic = $lang->productCommon . ' Report';
$lang->block->modules['product']->availableBlocks->overview  = $lang->productCommon . ' Overview';
$lang->block->modules['product']->availableBlocks->list      = $lang->productCommon . ' List';
$lang->block->modules['product']->availableBlocks->story     = 'Story';
$lang->block->modules['product']->availableBlocks->plan      = 'Plan';
$lang->block->modules['product']->availableBlocks->release   = 'Release';

$lang->block->modules['execution'] = new stdclass();
$lang->block->modules['execution']->availableBlocks = new stdclass();
$lang->block->modules['execution']->availableBlocks->statistic = $lang->execution->common . ' Statistics';
$lang->block->modules['execution']->availableBlocks->overview  = $lang->execution->common . ' Overview';
$lang->block->modules['execution']->availableBlocks->list      = $lang->execution->common . ' List';
$lang->block->modules['execution']->availableBlocks->task      = 'Task';
$lang->block->modules['execution']->availableBlocks->build     = 'Build';

$lang->block->modules['qa'] = new stdclass();
$lang->block->modules['qa']->availableBlocks = new stdclass();
$lang->block->modules['qa']->availableBlocks->statistic = 'Test Report';
//$lang->block->modules['qa']->availableBlocks->overview  = 'Testcase Overview';
$lang->block->modules['qa']->availableBlocks->bug      = 'Bug';
$lang->block->modules['qa']->availableBlocks->case     = 'Case';
$lang->block->modules['qa']->availableBlocks->testtask = 'Build';

$lang->block->modules['todo'] = new stdclass();
$lang->block->modules['todo']->availableBlocks = new stdclass();
$lang->block->modules['todo']->availableBlocks->list = 'Todo';

$lang->block->orderByList = new stdclass();

$lang->block->orderByList->product = array();
$lang->block->orderByList->product['id_asc']      = 'Product ID ASC';
$lang->block->orderByList->product['id_desc']     = 'Product ID DESC';
$lang->block->orderByList->product['status_asc']  = 'Product Status ASC';
$lang->block->orderByList->product['status_desc'] = 'Product Status DESC';

$lang->block->orderByList->project = array();
$lang->block->orderByList->project['id_asc']      = 'Project ID ASC';
$lang->block->orderByList->project['id_desc']     = 'Project ID DESC';
$lang->block->orderByList->project['status_asc']  = 'Project Status ASC';
$lang->block->orderByList->project['status_desc'] = 'Project Status DESC';

$lang->block->orderByList->execution = array();
$lang->block->orderByList->execution['id_asc']      = 'Execution ID ASC';
$lang->block->orderByList->execution['id_desc']     = 'Execution ID DESC';
$lang->block->orderByList->execution['status_asc']  = 'Execution Status ASC';
$lang->block->orderByList->execution['status_desc'] = 'Execution Status DESC';

$lang->block->orderByList->task = array();
$lang->block->orderByList->task['id_asc']        = 'Task ID ASC';
$lang->block->orderByList->task['id_desc']       = 'Task ID DESC';
$lang->block->orderByList->task['pri_asc']       = 'Task Priority ASC';
$lang->block->orderByList->task['pri_desc']      = 'Task Priority DESC';
$lang->block->orderByList->task['estimate_asc']  = 'Task Estimates ASC';
$lang->block->orderByList->task['estimate_desc'] = 'Task Estimates DESC';
$lang->block->orderByList->task['status_asc']    = 'Task Status ASC';
$lang->block->orderByList->task['status_desc']   = 'Task Status DESC';
$lang->block->orderByList->task['deadline_asc']  = 'Task Deadline ASC';
$lang->block->orderByList->task['deadline_desc'] = 'Task Deadline DESC';

$lang->block->orderByList->bug = array();
$lang->block->orderByList->bug['id_asc']        = 'Bug ID ASC';
$lang->block->orderByList->bug['id_desc']       = 'Bug ID DESC';
$lang->block->orderByList->bug['pri_asc']       = 'Bug Priority ASC';
$lang->block->orderByList->bug['pri_desc']      = 'Bug Priority DESC';
$lang->block->orderByList->bug['severity_asc']  = 'Bug Severity ASC';
$lang->block->orderByList->bug['severity_desc'] = 'Bug Severity DESC';

$lang->block->orderByList->case = array();
$lang->block->orderByList->case['id_asc']   = 'Case ID ASC';
$lang->block->orderByList->case['id_desc']  = 'Case ID DESC';
$lang->block->orderByList->case['pri_asc']  = 'Case Priority ASC';
$lang->block->orderByList->case['pri_desc'] = 'Case Priority DESC';

$lang->block->orderByList->story = array();
$lang->block->orderByList->story['id_asc']      = 'Story ID AES';
$lang->block->orderByList->story['id_desc']     = 'Story ID DESC';
$lang->block->orderByList->story['pri_asc']     = 'Story Priority ASC';
$lang->block->orderByList->story['pri_desc']    = 'Story Priority DESC';
$lang->block->orderByList->story['status_asc']  = 'Story Status ASC';
$lang->block->orderByList->story['status_desc'] = 'Story Status DESC';
$lang->block->orderByList->story['stage_asc']   = 'Story Phase ASC';
$lang->block->orderByList->story['stage_desc']  = 'Story Phase DESC';

$lang->block->todoNum  = 'Todo';
$lang->block->taskNum  = 'Task';
$lang->block->bugNum   = 'Bug';
$lang->block->riskNum  = 'Risk';
$lang->block->issueNum = 'Issues';
$lang->block->storyNum = 'Stories';

$lang->block->typeList = new stdclass();

$lang->block->typeList->task['assignedTo'] = 'AssignedToMe';
$lang->block->typeList->task['openedBy']   = 'CreatedByMe';
$lang->block->typeList->task['finishedBy'] = 'FinishedByMe';
$lang->block->typeList->task['closedBy']   = 'ClosedByMe';
$lang->block->typeList->task['canceledBy'] = 'CancelledByMe';

$lang->block->typeList->bug['assignedTo'] = 'AssignedToMe';
$lang->block->typeList->bug['openedBy']   = 'CreatedByMe';
$lang->block->typeList->bug['resolvedBy'] = 'ResolvedByMe';
$lang->block->typeList->bug['closedBy']   = 'ClosedByMe';

$lang->block->typeList->case['assigntome'] = 'AssignedToMe';
$lang->block->typeList->case['openedbyme'] = 'CreatedByMe';

$lang->block->typeList->story['assignedTo'] = 'AssignedToMe';
$lang->block->typeList->story['openedBy']   = 'CreatedByMe';
$lang->block->typeList->story['reviewedBy'] = 'ReviewedByMe';
$lang->block->typeList->story['closedBy']   = 'ClosedByMe' ;

$lang->block->typeList->product['noclosed'] = 'Open';
$lang->block->typeList->product['closed']   = 'Closed';
$lang->block->typeList->product['all']      = 'All';
$lang->block->typeList->product['involved'] = 'Involved';

$lang->block->typeList->project['undone']   = 'Unfinished';
$lang->block->typeList->project['doing']    = 'Ongoing';
$lang->block->typeList->project['all']      = 'All';
$lang->block->typeList->project['involved'] = 'Involved';

$lang->block->typeList->execution['undone']   = 'Unfinished';
$lang->block->typeList->execution['doing']    = 'Ongoing';
$lang->block->typeList->execution['all']      = 'All';
$lang->block->typeList->execution['involved'] = 'Involved';

$lang->block->typeList->scrum['undone']   = 'Unfinished';
$lang->block->typeList->scrum['doing']    = 'Ongoing';
$lang->block->typeList->scrum['all']      = 'All';
$lang->block->typeList->scrum['involved'] = 'Involved';

$lang->block->typeList->testtask['wait']    = 'Waiting';
$lang->block->typeList->testtask['doing']   = 'Ongoing';
$lang->block->typeList->testtask['blocked'] = 'Blocked';
$lang->block->typeList->testtask['done']    = 'Done';
$lang->block->typeList->testtask['all']     = 'All';

$lang->block->modules['project']->moreLinkList = new stdclass();
$lang->block->modules['project']->moreLinkList->recentproject  = 'project|browse|';
$lang->block->modules['project']->moreLinkList->statistic      = 'project|browse|';
$lang->block->modules['project']->moreLinkList->project        = 'project|browse|';
$lang->block->modules['project']->moreLinkList->cmmireport     = 'weekly|index|';
$lang->block->modules['project']->moreLinkList->cmmiestimate   = 'workestimation|index|';
$lang->block->modules['project']->moreLinkList->cmmiissue      = 'issue|browse|';
$lang->block->modules['project']->moreLinkList->cmmirisk       = 'risk|browse|';
$lang->block->modules['project']->moreLinkList->scrumlist      = 'project|execution|';
$lang->block->modules['project']->moreLinkList->scrumtest      = 'testtask|browse|';
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

$lang->block->welcomeList['06:00'] = 'Good morning, %s';
$lang->block->welcomeList['11:30'] = 'Good day, %s';
$lang->block->welcomeList['13:30'] = 'Good afternoon, %s';
$lang->block->welcomeList['19:00'] = 'Good evening, %s';

$lang->block->gridOptions[8] = 'Left';
$lang->block->gridOptions[4] = 'Right';

$lang->block->flowchart              = array();
$lang->block->flowchart['admin']     = array('Administrator', 'Add Departments', 'Add Users', 'Maintain Privileges');
$lang->block->flowchart['product']   = array($lang->productCommon . ' Owner', 'Add ' . $lang->productCommon, 'Maintain Modules', 'Maintain Plans', 'Maintain Stories', 'Create Releases');
$lang->block->flowchart['execution'] = array('Scrum Master', 'Add ' . $lang->executionCommon . 's', 'Maintain Teams', 'Link ' . $lang->productCommon . 's', 'Link Stories', 'Create Tasks');
$lang->block->flowchart['dev']       = array('Dev Team', 'Claim Tasks/Bugs', 'Update Status', 'Finish Tasks/Bugs');
$lang->block->flowchart['tester']    = array('Test Team', 'Write Cases', 'Run Cases', 'Report Bugs', 'Verify Bugs', 'Close Bugs');
/* branch */
$lang->branch->common = 'Branch';
$lang->branch->manage = 'Manage Branch';
$lang->branch->sort   = 'Rank Branch';
$lang->branch->delete = 'Delete Branch';
$lang->branch->add    = 'Add';

$lang->branch->manageTitle = '%s Management';
$lang->branch->all         = 'All ';

$lang->branch->id      = 'ID';
$lang->branch->product = 'Product';
$lang->branch->name    = 'Name';
$lang->branch->order   = 'Order';
$lang->branch->deleted = 'Delete';

$lang->branch->confirmDelete = 'Do you want to delete this @branch@?';
$lang->branch->canNotDelete  = 'There is data in @branch@. It cannot be deleted.';
/* bug */
$lang->bug->common           = 'Bug';
$lang->bug->id               = 'ID';
$lang->bug->product          = $lang->productCommon;
$lang->bug->branch           = 'Branch/Platform';
$lang->bug->productplan      = 'Plan';
$lang->bug->module           = 'Module';
$lang->bug->moduleAB         = 'Module';
$lang->bug->project          = 'Project';
$lang->bug->execution        = $lang->execution->common;
$lang->bug->story            = 'Story';
$lang->bug->storyVersion     = 'Story Version';
$lang->bug->color            = 'Color';
$lang->bug->task             = 'Task';
$lang->bug->title            = 'Title';
$lang->bug->severity         = 'Severity';
$lang->bug->severityAB       = 'S';
$lang->bug->pri              = 'Priority';
$lang->bug->type             = 'Type';
$lang->bug->os               = 'OS';
$lang->bug->browser          = 'Browser';
$lang->bug->steps            = 'Repro Steps';
$lang->bug->status           = 'Status';
$lang->bug->statusAB         = 'Status';
$lang->bug->subStatus        = 'Sub Status';
$lang->bug->activatedCount   = 'Activated Times';
$lang->bug->activatedCountAB = 'Active';
$lang->bug->activatedDate    = 'ActivatedDate';
$lang->bug->confirmed        = 'Confirmed';
$lang->bug->confirmedAB      = 'C';
$lang->bug->toTask           = 'Convert to Task';
$lang->bug->toStory          = 'Convert to Story';
$lang->bug->mailto           = 'Mailto';
$lang->bug->openedBy         = 'ReportedBy';
$lang->bug->openedByAB       = 'Reporter';
$lang->bug->openedDate       = 'ReportedDate';
$lang->bug->openedDateAB     = 'Reported';
$lang->bug->openedBuild      = 'Open Build';
$lang->bug->assignedTo       = 'AssignTo';
$lang->bug->assignBug        = 'AssignedTo';
$lang->bug->assignedToAB     = 'AssignedTo';
$lang->bug->assignedDate     = 'AssignedDate';
$lang->bug->resolvedBy       = 'ResolvedBy';
$lang->bug->resolvedByAB     = 'ResolvedBy';
$lang->bug->resolution       = 'Resolution';
$lang->bug->resolutionAB     = 'Resolution';
$lang->bug->resolvedBuild    = 'Build';
$lang->bug->resolvedDate     = 'Resolved Date';
$lang->bug->resolvedDateAB   = 'ResolvedDate';
$lang->bug->deadline         = 'Deadline';
$lang->bug->plan             = 'Plan';
$lang->bug->closedBy         = 'ClosedBy';
$lang->bug->closedDate       = 'ClosedDate';
$lang->bug->duplicateBug     = 'Duplicated Bug ID';
$lang->bug->lastEditedBy     = 'EditedBy';
$lang->bug->linkBug          = 'Linked Bugs';
$lang->bug->linkBugs         = 'Link Bug';
$lang->bug->unlinkBug        = 'Unlink';
$lang->bug->case             = 'Cases';
$lang->bug->caseVersion      = 'Case Version';
$lang->bug->testtask         = 'Request';
$lang->bug->files            = 'Files';
$lang->bug->keywords         = 'Tags';
$lang->bug->lastEditedByAB   = 'EditedBy';
$lang->bug->lastEditedDateAB = 'EditedDate';
$lang->bug->lastEditedDate   = 'EditedDate';
$lang->bug->fromCase         = 'From Case';
$lang->bug->toCase           = 'To Case';
$lang->bug->colorTag         = 'Color';

$lang->bug->index              = 'Bug Home';
$lang->bug->create             = 'Report Bug';
$lang->bug->batchCreate        = 'Batch Report';
$lang->bug->confirmBug         = 'Confirm';
$lang->bug->confirmAction      = 'Confirm Bug';
$lang->bug->batchConfirm       = 'Batch Confirm';
$lang->bug->edit               = 'Edit Bug';
$lang->bug->batchEdit          = 'Batch Edit';
$lang->bug->batchChangeModule  = 'Batch Edit Modules';
$lang->bug->batchChangeBranch  = 'Batch Edit Branches';
$lang->bug->batchClose         = 'Batch Close';
$lang->bug->assignTo           = 'Assign';
$lang->bug->assignAction       = 'Assign Bug';
$lang->bug->batchAssignTo      = 'Batch Assign';
$lang->bug->browse             = 'Bug List';
$lang->bug->view               = 'Bug Detail';
$lang->bug->resolve            = 'Resolve';
$lang->bug->resolveAction      = 'Resolve Bug';
$lang->bug->batchResolve       = 'Batch Resolve';
$lang->bug->close              = 'Close';
$lang->bug->closeAction        = 'Close Bug';
$lang->bug->activate           = 'Activate';
$lang->bug->activateAction     = 'Activate Bug';
$lang->bug->batchActivate      = 'Batch Activate';
$lang->bug->reportChart        = 'Report';
$lang->bug->reportAction       = 'Bug Report';
$lang->bug->export             = 'Export Data';
$lang->bug->exportAction       = 'Export Bug';
$lang->bug->delete             = 'Delete';
$lang->bug->deleteAction       = 'Delete Bug';
$lang->bug->deleted            = 'Deleted';
$lang->bug->confirmStoryChange = 'Confirm Story Change';
$lang->bug->copy               = 'Copy';
$lang->bug->search             = 'Search';

$lang->bug->assignToMe         = 'AssignedToMe';
$lang->bug->openedByMe         = 'ReportedByMe';
$lang->bug->resolvedByMe       = 'ResolvedByMe';
$lang->bug->closedByMe         = 'ClosedByMe';
$lang->bug->assignToNull       = 'Unassigned';
$lang->bug->unResolved         = 'Active';
$lang->bug->toClosed           = 'ToBeClosed';
$lang->bug->unclosed           = 'Unclosed';
$lang->bug->unconfirmed        = 'Unconfirmed';
$lang->bug->longLifeBugs       = 'Stalled';
$lang->bug->postponedBugs      = 'Postponed';
$lang->bug->overdueBugs        = 'Overdue';
$lang->bug->allBugs            = 'All Bugs';
$lang->bug->byQuery            = 'Search';
$lang->bug->needConfirm        = 'Story Changed';
$lang->bug->allProduct         = 'All' . $lang->productCommon . 's';
$lang->bug->my                 = 'My';
$lang->bug->yesterdayResolved  = 'Bug Resolved Yesterday ';
$lang->bug->yesterdayConfirmed = 'Bug Confirmed Yesterday ';
$lang->bug->yesterdayClosed    = 'Bug Closed Yesterday ';

$lang->bug->assignToMeAB   = 'AssignedToMe';
$lang->bug->openedByMeAB   = 'ReportedByMe';
$lang->bug->resolvedByMeAB = 'ResolvedByMe';

$lang->bug->ditto        = 'Ditto';
$lang->bug->dittoNotice  = 'This bug is not linked to the same product as the last one is!';
$lang->bug->noAssigned   = 'Unassigned';
$lang->bug->noBug        = 'No bugs yet.';
$lang->bug->noModule     = '<div>You have no modules.</div><div>Manage now</div>';
$lang->bug->delayWarning = " <strong class='text-danger'> Delay %s days </strong>";

$lang->bug->lblAssignedTo = 'AssignTo';
$lang->bug->lblMailto     = 'Mailto';
$lang->bug->lblLastEdited = 'EditedBy';
$lang->bug->lblResolved   = 'ResolvedBy';
$lang->bug->allUsers      = 'Load All Users';
$lang->bug->allBuilds     = 'All Builds';
$lang->bug->createBuild   = 'New';

$lang->bug->legendBasicInfo             = 'Basic Info';
$lang->bug->legendAttatch               = 'Files';
$lang->bug->legendPRJExecStoryTask      = 'Project/' . $lang->executionCommon . '/Story/Task';
$lang->bug->legendExecStoryTask         = $lang->executionCommon . '/Story/Task';
$lang->bug->lblTypeAndSeverity          = 'Type/Severity';
$lang->bug->lblSystemBrowserAndHardware = 'System/Browser';
$lang->bug->legendSteps                 = 'Repro Steps';
$lang->bug->legendComment               = 'Note';
$lang->bug->legendLife                  = 'Bug Life';
$lang->bug->legendMisc                  = 'Misc.';
$lang->bug->legendRelated               = 'Related Info';

$lang->bug->buttonConfirm = 'Confirm';

$lang->bug->summary               = "Total <strong>%s</strong> bugs on this page, and <strong>%s</strong> Active.";
$lang->bug->confirmChangeProduct  = "Any change to {$lang->productCommon} will cause linked {$lang->executionCommon}s, stories and tasks change. Do you want to do this?";
$lang->bug->confirmDelete         = 'Do you want to delete this bug?';
$lang->bug->remindTask            = 'This bug has been converted to a task. Do you want to update the status of Task(ID %s)?';
$lang->bug->skipClose             = 'Bug %s is active. You cannot close it.';
$lang->bug->executionAccessDenied = "You access to the {$lang->executionCommon} to which this bug belongs is denied!";
$lang->bug->stepsNotEmpty         = "The reproduction step cannot be empty.";

$lang->bug->tplStep   = "<p>[Steps]</p><br/>";
$lang->bug->tplResult = "<p>[Results]</p><br/>";
$lang->bug->tplExpect = "<p>[Expectations]</p><br/>";

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
$lang->bug->osList['all']     = 'All';
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
$lang->bug->osList['others']  = 'Others';

$lang->bug->browserList['']         = '';
$lang->bug->browserList['all']      = 'All';
$lang->bug->browserList['ie']       = 'IE series';
$lang->bug->browserList['ie11']     = 'IE11';
$lang->bug->browserList['ie10']     = 'IE10';
$lang->bug->browserList['ie9']      = 'IE9';
$lang->bug->browserList['ie8']      = 'IE8';
$lang->bug->browserList['ie7']      = 'IE7';
$lang->bug->browserList['ie6']      = 'IE6';
$lang->bug->browserList['chrome']   = 'Chrome';
$lang->bug->browserList['firefox']  = 'Firefox series';
$lang->bug->browserList['firefox4'] = 'Firefox4';
$lang->bug->browserList['firefox3'] = 'Firefox3';
$lang->bug->browserList['firefox2'] = 'Firefox2';
$lang->bug->browserList['opera']    = 'Opera series';
$lang->bug->browserList['oprea11']  = 'Opera11';
$lang->bug->browserList['oprea10']  = 'Opera10';
$lang->bug->browserList['opera9']   = 'Opera9';
$lang->bug->browserList['safari']   = 'Safari';
$lang->bug->browserList['maxthon']  = 'Maxthon';
$lang->bug->browserList['uc']       = 'UC';
$lang->bug->browserList['other']    = 'Others';

$lang->bug->typeList['']             = '';
$lang->bug->typeList['codeerror']    = 'CodeError';
$lang->bug->typeList['config']       = 'Configuration';
$lang->bug->typeList['install']      = 'Installation';
$lang->bug->typeList['security']     = 'Security';
$lang->bug->typeList['performance']  = 'Performance';
$lang->bug->typeList['standard']     = 'CodingConventions';
$lang->bug->typeList['automation']   = 'TestScript';
$lang->bug->typeList['designdefect'] = 'DesignDefect';
$lang->bug->typeList['others']       = 'Others';

$lang->bug->statusList['']         = '';
$lang->bug->statusList['active']   = 'Active';
$lang->bug->statusList['resolved'] = 'Resolved';
$lang->bug->statusList['closed']   = 'Closed';

$lang->bug->confirmedList[1] = 'Yes';
$lang->bug->confirmedList[0] = 'No';

$lang->bug->resolutionList['']           = '';
$lang->bug->resolutionList['bydesign']   = 'As Designed';
$lang->bug->resolutionList['duplicate']  = 'Duplicate';
$lang->bug->resolutionList['external']   = 'External';
$lang->bug->resolutionList['fixed']      = 'Resolved';
$lang->bug->resolutionList['notrepro']   = 'Irreproducible';
$lang->bug->resolutionList['postponed']  = 'Postponed';
$lang->bug->resolutionList['willnotfix'] = "Won't Fix";
$lang->bug->resolutionList['tostory']    = 'Convert to Story';

$lang->bug->report = new stdclass();
$lang->bug->report->common = 'Report';
$lang->bug->report->select = 'Select Report Type';
$lang->bug->report->create = 'Create Report';

$lang->bug->report->charts['bugsPerExecution']      = $lang->executionCommon . ' Bugs';
$lang->bug->report->charts['bugsPerBuild']          = 'Bugs Per Build';
$lang->bug->report->charts['bugsPerModule']         = 'Bugs Per Module';
$lang->bug->report->charts['openedBugsPerDay']      = 'Reported Bugs Per Day';
$lang->bug->report->charts['resolvedBugsPerDay']    = 'Resolved Bugs Per Day';
$lang->bug->report->charts['closedBugsPerDay']      = 'Closed Bugs Per Day';
$lang->bug->report->charts['openedBugsPerUser']     = 'Reported Bugs Per User';
$lang->bug->report->charts['resolvedBugsPerUser']   = 'Resolved Bugs Per User';
$lang->bug->report->charts['closedBugsPerUser']     = 'Closed Bugs Per User';
$lang->bug->report->charts['bugsPerSeverity']       = 'Bug Severity';
$lang->bug->report->charts['bugsPerResolution']     = 'Bug Resolution';
$lang->bug->report->charts['bugsPerStatus']         = 'Bug Status';
$lang->bug->report->charts['bugsPerActivatedCount'] = 'Bug Activation Times';
$lang->bug->report->charts['bugsPerPri']            = 'Bug Priority';
$lang->bug->report->charts['bugsPerType']           = 'Bug Type';
$lang->bug->report->charts['bugsPerAssignedTo']     = 'Bug Assignment';
//$lang->bug->report->charts['bugLiveDays']        = 'Bug Handling Time Report';
//$lang->bug->report->charts['bugHistories']       = 'Bug Handling Steps Report';

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
$lang->bug->report->bugsPerBuild->graph->xAxisName     = 'Build';
$lang->bug->report->bugsPerModule->graph->xAxisName    = 'Module';

$lang->bug->report->openedBugsPerDay->type             = 'bar';
$lang->bug->report->openedBugsPerDay->graph->xAxisName = 'Date';

$lang->bug->report->resolvedBugsPerDay->type             = 'bar';
$lang->bug->report->resolvedBugsPerDay->graph->xAxisName = 'Date';

$lang->bug->report->closedBugsPerDay->type             = 'bar';
$lang->bug->report->closedBugsPerDay->graph->xAxisName = 'Date';

$lang->bug->report->openedBugsPerUser->graph->xAxisName   = 'User';
$lang->bug->report->resolvedBugsPerUser->graph->xAxisName = 'User';
$lang->bug->report->closedBugsPerUser->graph->xAxisName   = 'User';

$lang->bug->report->bugsPerSeverity->graph->xAxisName       = 'Priority';
$lang->bug->report->bugsPerResolution->graph->xAxisName     = 'Resolution';
$lang->bug->report->bugsPerStatus->graph->xAxisName         = 'Status';
$lang->bug->report->bugsPerActivatedCount->graph->xAxisName = 'Activation Times';
$lang->bug->report->bugsPerPri->graph->xAxisName            = 'Priority';
$lang->bug->report->bugsPerType->graph->xAxisName           = 'Type';
$lang->bug->report->bugsPerAssignedTo->graph->xAxisName     = 'AssignTo';
$lang->bug->report->bugLiveDays->graph->xAxisName           = 'Handling Time';
$lang->bug->report->bugHistories->graph->xAxisName          = 'Handling Steps';

$lang->bug->action = new stdclass();
$lang->bug->action->resolved            = array('main' => '$date, resolved by <strong>$actor</strong> and the resolution is <strong>$extra</strong> $appendLink.', 'extra' => 'resolutionList');
$lang->bug->action->tostory             = array('main' => '$date, converted by <strong>$actor</strong> to <strong>Story</strong> with ID <strong>$extra</strong>.');
$lang->bug->action->totask              = array('main' => '$date, imported by <strong>$actor</strong> as <strong>Task</strong> with ID <strong>$extra</strong>.');
$lang->bug->action->linked2plan         = array('main' => '$date, linked by <strong>$actor</strong> to Plan <strong>$extra</strong>.');
$lang->bug->action->unlinkedfromplan    = array('main' => '$date, deleted by <strong>$actor</strong> from Plan <strong>$extra</strong>.');
$lang->bug->action->linked2build        = array('main' => '$date, linked by <strong>$actor</strong> to Build <strong>$extra</strong>.');
$lang->bug->action->unlinkedfrombuild   = array('main' => '$date, unlinked by <strong>$actor</strong> from Build <strong>$extra</strong>.');
$lang->bug->action->linked2release      = array('main' => '$date, linked by <strong>$actor</strong> to Release <strong>$extra</strong>.');
$lang->bug->action->unlinkedfromrelease = array('main' => '$date, unlinked by <strong>$actor</strong> from Release <strong>$extra</strong>.');
$lang->bug->action->linkrelatedbug      = array('main' => '$date, linked by <strong>$actor</strong> to Bug <strong>$extra</strong>.');
$lang->bug->action->unlinkrelatedbug    = array('main' => '$date, unlinked by <strong>$actor</strong> from Bug <strong>$extra</strong>.');

$lang->bug->placeholder = new stdclass();
$lang->bug->placeholder->chooseBuilds = 'Select Build';
$lang->bug->placeholder->newBuildName = 'New Build Name';

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
$lang->build->common           = "Build";
$lang->build->create           = "Create Build";
$lang->build->edit             = "Edit Build";
$lang->build->linkStory        = "Link {$lang->SRCommon}";
$lang->build->linkBug          = "Link Bug";
$lang->build->delete           = "Delete Build";
$lang->build->deleted          = "Deleted";
$lang->build->view             = "Build Detail";
$lang->build->batchUnlink      = 'Batch Unlink';
$lang->build->batchUnlinkStory = "Batch Unlink {$lang->SRCommon}";
$lang->build->batchUnlinkBug   = 'Batch Unlink Bugs';

$lang->build->confirmDelete      = "Do you want to delete this build?";
$lang->build->confirmUnlinkStory = "Do you want to unlink this {$lang->SRCommon}?";
$lang->build->confirmUnlinkBug   = "Do you want to unlink this Bug?";

$lang->build->basicInfo = 'Basic Info';

$lang->build->id             = 'ID';
$lang->build->product        = $lang->productCommon;
$lang->build->branch         = 'Platform/Branch';
$lang->build->execution      = $lang->executionCommon;
$lang->build->name           = 'Name';
$lang->build->date           = 'Date';
$lang->build->builder        = 'Builder';
$lang->build->scmPath        = 'SCM Path';
$lang->build->filePath       = 'File Path';
$lang->build->desc           = 'Description';
$lang->build->files          = 'Files';
$lang->build->last           = 'Last Build';
$lang->build->packageType    = 'Package Type';
$lang->build->unlinkStory    = "Unlink {$lang->SRCommon}";
$lang->build->unlinkBug      = 'Unlink Bug';
$lang->build->stories        = "Finished {$lang->SRCommon}";
$lang->build->bugs           = 'Resolved Bugs';
$lang->build->generatedBugs  = 'Reported Bugs';
$lang->build->noProduct      = " <span id='noProduct' style='color:red'>This {$lang->executionCommon} is not linked to {$lang->productCommon}, so the Build cannot be created. Please first <a href='%s' data-app='%s' data-toggle='modal' data-type='iframe'> link {$lang->productCommon}</a></span>";
$lang->build->noBuild        = 'No builds yet.';
$lang->build->emptyExecution =  $lang->executionCommon . 'should be not empty.';

$lang->build->notice = new stdclass();
$lang->build->notice->changeProduct   = "The {$lang->SRCommon}, bug, or the version of the submitted test order has been linked, and its {$lang->productCommon} cannot be modified";
$lang->build->notice->changeExecution = "The version of the submitted test order cannot be modified {$lang->executionCommon}";

$lang->build->finishStories = "  Finished {$lang->SRCommon} %s";
$lang->build->resolvedBugs  = '  Resolved Bug %s';
$lang->build->createdBugs   = '  Reported Bug %s';

$lang->build->placeholder = new stdclass();
$lang->build->placeholder->scmPath  = ' Source code repository, e.g. Subversion/Git Library path';
$lang->build->placeholder->filePath = ' Download path for this Build.';

$lang->build->action = new stdclass();
$lang->build->action->buildopened = '$date, created by <strong>$actor</strong>, Build <strong>$extra</strong>.' . "\n";

$lang->backhome = 'back';
/* caselib */
$lang->caselib->common = 'Case Library';
$lang->caselib->all    = 'All Case Libraries';

$lang->caselib->index            = "Library Home";
$lang->caselib->create           = "Create Case Library";
$lang->caselib->edit             = 'Edit Case Library';
$lang->caselib->browse           = 'View Cases in Library';
$lang->caselib->view             = 'Library Detail';
$lang->caselib->createCase       = 'Create Case';
$lang->caselib->delete           = "Delete Suite";
$lang->caselib->linkVersion      = "Version";
$lang->caselib->deleted          = 'Deleted';
$lang->caselib->exportTemplet    = 'Export Template';
$lang->caselib->batchCreateCase  = 'Batch Create';
$lang->caselib->import           = 'Import';
$lang->caselib->showImport       = 'Imported Data';

$lang->caselib->browseAction     = 'Caselib List';
$lang->caselib->deleteAction     = "Delete Caselib";
$lang->caselib->importAction     = 'Import Case';
$lang->caselib->linkVersion      = "Version";

$lang->caselib->id             = 'ID';
$lang->caselib->name           = 'Name';
$lang->caselib->desc           = 'Description';
$lang->caselib->addedBy        = 'CreatedBy';
$lang->caselib->addedDate      = 'CreatedDate';
$lang->caselib->lastEditedBy   = 'LastEditedBy';
$lang->caselib->lastEditedDate = 'LastEditedDate';

$lang->caselib->legendDesc = 'Description';

$lang->caselib->libraryDelete = 'Do you want to delete this library？';
$lang->caselib->noModule      = '<div>You have no modules.</div><div>Manage it now.</div>';
/* ci */
$lang->ci->common       = 'CI';
$lang->ci->commitResult = 'Interface: Commit Test Result.';

$lang->ci->job     = 'Job';
$lang->ci->task    = 'Task';
$lang->ci->history = 'History';
/* company */
$lang->company->common   = 'Company';
$lang->company->index    = "Company Home";
$lang->company->create   = "Add Company";
$lang->company->edit     = "Edit Company";
$lang->company->view     = "Company Information";
$lang->company->browse   = "User List";
$lang->company->dynamic  = "Dynamics";
$lang->company->orgView  = 'View';

$lang->company->name     = 'Company Name';
$lang->company->phone    = 'Phone';
$lang->company->fax      = 'Fax';
$lang->company->address  = 'Mailing Address';
$lang->company->zipcode  = 'Zip Code';
$lang->company->website  = 'Website';
$lang->company->backyard = 'Intranet';
$lang->company->guest    = 'Guest Login';
$lang->company->admins   = 'Administrator';

$lang->company->product   = $lang->productCommon;
$lang->company->project   = 'Project';
$lang->company->execution = $lang->executionCommon;
$lang->company->user      = 'User';

$lang->company->guestOptions[0] = 'Deny';
$lang->company->guestOptions[1] = 'Allow';
/* compile */
$lang->compile->common = 'Compile';
$lang->compile->browse = 'History';
$lang->compile->logs   = 'Log';

$lang->compile->id     = 'ID';
$lang->compile->name   = 'Name';
$lang->compile->status = 'Status';
$lang->compile->time   = 'Time';
$lang->compile->result = 'Result';

$lang->compile->statusList['success']     = 'Done';
$lang->compile->statusList['failure']     = 'Failed';
$lang->compile->statusList['created']     = 'Created';
$lang->compile->statusList['building']    = 'Creating';
$lang->compile->statusList['create_fail'] = 'Failed to create';
$lang->compile->statusList['timeout']     = 'Timeout';
/* convert */
$lang->convert->common  = 'Imported';
$lang->convert->index   = 'Home';

$lang->convert->start   = 'Start';
$lang->convert->desc    = <<<EOT
<p>Welcome to the System Conversion Wizard, this program will assist you to convert data to ZenTao.</p>
<strong>There are risks in the conversion, so it is strongly recommended that you back up your databse and relavant files before conversion, and make sure that no one is using either system.</strong>
EOT;

$lang->convert->setConfig      = 'Source Config';
$lang->convert->setBugfree     = 'Bugfree Config';
$lang->convert->setRedmine     = 'Redmine Config';
$lang->convert->checkBugFree   = 'Check Bugfree';
$lang->convert->checkRedmine   = 'Check Redmine';
$lang->convert->convertRedmine = 'Convert Redmine';
$lang->convert->convertBugFree = 'Convert BugFree';

$lang->convert->selectSource     = 'Select source system and its version';
$lang->convert->mustSelectSource = "You must select a source system.";

$lang->convert->direction             = "{$lang->executionCommon} converted to";
$lang->convert->questionTypeOfRedmine = 'Type in Redmine';
$lang->convert->aimTypeOfZentao       = 'Convert to Type in ZenTao';

$lang->convert->directionList['bug']   = 'Bug';
$lang->convert->directionList['task']  = 'Task';
$lang->convert->directionList['story'] = 'Story';

$lang->convert->sourceList['BugFree'] = array('bugfree_1' => '1.x', 'bugfree_2' => '2.x');
$lang->convert->sourceList['Redmine'] = array('Redmine_1.1' => '1.1');

$lang->convert->setting     = 'Settings';
$lang->convert->checkConfig = 'Check Settings';

$lang->convert->ok          = '<span class="text-success"><i class="icon-check-sign"></i> OK </span>';
$lang->convert->fail        = '<span class="text-danger"><i class="icon-remove-sign"></i> Failed</span>';

$lang->convert->dbHost      = 'Database Server';
$lang->convert->dbPort      = 'Server Port';
$lang->convert->dbUser      = 'Database User Name';
$lang->convert->dbPassword  = 'Database Password';
$lang->convert->dbName      = 'Database used in %s';
$lang->convert->dbCharset   = '%s Database Coding';
$lang->convert->dbPrefix    = '%s Table Prefix';
$lang->convert->installPath = '%s Installation Root Directory';

$lang->convert->checkDB    = 'Database';
$lang->convert->checkTable = 'Table';
$lang->convert->checkPath  = 'Installation Path';

$lang->convert->execute    = 'Convert';
$lang->convert->item       = 'Item Converted';
$lang->convert->count      = 'No.';
$lang->convert->info       = 'Info';

$lang->convert->bugfree = new stdclass();
$lang->convert->bugfree->users      = 'User';
$lang->convert->bugfree->executions = $lang->executionCommon;
$lang->convert->bugfree->modules    = 'Module';
$lang->convert->bugfree->bugs       = 'Bug';
$lang->convert->bugfree->cases      = 'Test Case';
$lang->convert->bugfree->results    = 'Result';
$lang->convert->bugfree->actions    = 'History';
$lang->convert->bugfree->files      = 'Files';

$lang->convert->redmine = new stdclass();
$lang->convert->redmine->users        = 'User';
$lang->convert->redmine->groups       = 'Group';
$lang->convert->redmine->products     = $lang->productCommon;
$lang->convert->redmine->executions   = $lang->executionCommon;
$lang->convert->redmine->stories      = 'Story';
$lang->convert->redmine->tasks        = 'Task';
$lang->convert->redmine->bugs         = 'Bug';
$lang->convert->redmine->productPlans = $lang->productCommon . 'Plan';
$lang->convert->redmine->teams        = 'Team';
$lang->convert->redmine->releases     = 'Release';
$lang->convert->redmine->builds       = 'Build';
$lang->convert->redmine->docLibs      = 'Doc Lib';
$lang->convert->redmine->docs         = 'Doc';
$lang->convert->redmine->files        = 'Files';

$lang->convert->errorFileNotExits  = 'File %s is not found.';
$lang->convert->errorUserExists    = 'User %s existed.';
$lang->convert->errorGroupExists   = 'Group %s existed.';
$lang->convert->errorBuildExists   = 'Build %s existed.';
$lang->convert->errorReleaseExists = 'Release %s existed.';
$lang->convert->errorCopyFailed    = 'File %s copy failed.';

$lang->convert->setParam = 'Set parameters.';

$lang->convert->statusType = new stdclass();
$lang->convert->priType    = new stdclass();

$lang->convert->aimType           = 'Convert Issue';
$lang->convert->statusType->bug   = 'Convert Status (Bug Status)';
$lang->convert->statusType->story = 'Convert Status (Story Status)';
$lang->convert->statusType->task  = 'Convert Status (Task Status)';
$lang->convert->priType->bug      = 'Convert Priority (Bug Status)';
$lang->convert->priType->story    = 'Convert Priority (Story Status)';
$lang->convert->priType->task     = 'Convert Priority (Task Status)';

$lang->convert->issue = new stdclass();
$lang->convert->issue->redmine = 'Redmine';
$lang->convert->issue->zentao  = 'ZenTao';
$lang->convert->issue->goto    = 'Convert To';
/* cron */
$lang->cron->common       = 'Cron';
$lang->cron->index        = 'Cron Home';
$lang->cron->list         = 'Task';
$lang->cron->create       = 'Add';
$lang->cron->createAction = 'Add Cron';
$lang->cron->edit         = 'Edit Cron';
$lang->cron->delete       = 'Delete Cron';
$lang->cron->toggle       = 'Activate/Deactivate';
$lang->cron->turnon       = 'On/Off';
$lang->cron->openProcess  = 'Restart';
$lang->cron->restart      = 'Restart Cron';

$lang->cron->m        = 'Minute';
$lang->cron->h        = 'Hour';
$lang->cron->dom      = 'Day';
$lang->cron->mon      = 'Month';
$lang->cron->dow      = 'Week';
$lang->cron->command  = 'Command';
$lang->cron->status   = 'Status';
$lang->cron->type     = 'Type';
$lang->cron->remark   = 'Comment';
$lang->cron->lastTime = 'Last Run';

$lang->cron->turnonList['1'] = 'On';
$lang->cron->turnonList['0'] = 'Off';

$lang->cron->statusList['normal']  = 'Normal';
$lang->cron->statusList['running'] = 'Running';
$lang->cron->statusList['stop']    = 'Stop';

$lang->cron->typeList['zentao'] = 'Self Call';
global $config;
if($config->features->cronSystemCall) $lang->cron->typeList['system'] = 'System Command';

$lang->cron->toggleList['start'] = 'Activate';
$lang->cron->toggleList['stop']  = 'Deactivate';

$lang->cron->confirmDelete = 'Do you want to delete the cron?';
$lang->cron->confirmTurnon = 'Do you want to turn off the cron?';
$lang->cron->introduction  = <<<EOD
<p>Cron is set to do scheduled actions, such as update burndown chart, backup, etc.</p>
<p>Features of Cron need to be improved, so it is turned off by default.</p>
EOD;
$lang->cron->confirmOpen = <<<EOD
<p>Do you want to turn it on?<a href="%s" target='hiddenwin'><strong>Turn On Cron<strong></a></p>
EOD;

$lang->cron->notice = new stdclass();
$lang->cron->notice->m    = 'Range:0-59，"*" means the numbers within the range, "/" means "per", "-" means the range.';
$lang->cron->notice->h    = 'Range:0-23';
$lang->cron->notice->dom  = 'Range:1-31';
$lang->cron->notice->mon  = 'Range:1-12';
$lang->cron->notice->dow  = 'Range:0-6';
$lang->cron->notice->help = 'Note：If the server is restarted or the Cron is not working, it means the Cron has stopped. You can restart it by clicking 【Restart】 or refresh this page. If the last execution time changes, it means the Cron is running.';
$lang->cron->notice->errorRule = '"%s" is not valid';
/* custom */
global $config;

$lang->custom->common               = 'Custom';
$lang->custom->index                = 'Home';
$lang->custom->set                  = 'Customize';
$lang->custom->restore              = 'Reset';
$lang->custom->key                  = 'Key';
$lang->custom->value                = 'Value';
$lang->custom->flow                 = 'Concept';
$lang->custom->working              = 'Mode';
$lang->custom->select               = 'Select Concept';
$lang->custom->branch               = 'Multi-Branch';
$lang->custom->owner                = 'Owner';
$lang->custom->module               = 'Module';
$lang->custom->section              = 'Section';
$lang->custom->lang                 = 'Language';
$lang->custom->setPublic            = 'Set Public';
$lang->custom->required             = 'Required Field';
$lang->custom->score                = 'Point';
$lang->custom->timezone             = 'Timezone';
$lang->custom->scoreReset           = 'Reset Points';
$lang->custom->scoreTitle           = 'Point Feature';
$lang->custom->product              = $lang->productCommon;
$lang->custom->convertFactor        = 'Convert factor';
$lang->custom->region               = 'Interval';
$lang->custom->tips                 = 'Tips';
$lang->custom->setTips              = 'Set Tips';
$lang->custom->isRange              = 'Is Target Control';
$lang->custom->concept              = "Concept";
$lang->custom->URStory              = "User requirements";
$lang->custom->SRStory              = "Software requirements";
$lang->custom->epic                 = "Epic";
$lang->custom->default              = "Default";
$lang->custom->mode                 = "Mode";
$lang->custom->scrumStory           = "Story";
$lang->custom->waterfallCommon      = "Waterfall";
$lang->custom->buildin              = "Buildin";
$lang->custom->editStoryConcept     = "Edit Story Concept";
$lang->custom->setStoryConcept      = "Set Story Concept";
$lang->custom->browseStoryConcept   = "List of story concepts";
$lang->custom->deleteStoryConcept   = "Delete story Concept";
$lang->custom->URConcept            = "UR Concept";
$lang->custom->SRConcept            = "SR Concept";
$lang->custom->reviewRule           = 'Review Rules';
$lang->custom->switch               = "Switch";
$lang->custom->oneUnit              = "One {$lang->hourCommon}";
$lang->custom->convertRelationTitle = "Please set the conversion factor of {$lang->hourCommon} to %s first";

if($config->systemMode == 'new') $lang->custom->execution = 'Execution';
if($config->systemMode == 'classic' || !$config->systemMode) $lang->custom->execution = $lang->executionCommon;

$lang->custom->unitList['efficiency'] = 'Working Hours/';
$lang->custom->unitList['manhour']    = 'Man-hour/';
$lang->custom->unitList['cost']       = 'Yuan/Hour';
$lang->custom->unitList['hours']      = 'Hours';
$lang->custom->unitList['days']       = 'Days';
$lang->custom->unitList['loc']        = 'KLOC';

$lang->custom->tipProgressList['SPI'] = 'Schedule Performance Index(SPI)';
$lang->custom->tipProgressList['SV']  = 'Schedule Variance(SV%)';

$lang->custom->tipCostList['CPI'] = 'Cost Performed Index(CPI)';
$lang->custom->tipCostList['CV']  = 'Cost Variance(CV%)';

$lang->custom->tipRangeList[0]  = 'No';
$lang->custom->tipRangeList[1]  = 'Yes';

$lang->custom->regionMustNumber    = 'The interval must be a number!';
$lang->custom->tipNotEmpty         = 'The prompt can not be empty!';
$lang->custom->currencyNotEmpty    = 'You have to select one currency at least.';
$lang->custom->defaultNotEmpty     = 'The default currency can not be empty';
$lang->custom->convertRelationTips = "After {$lang->hourCommon} is converted to %s, historical data will be uniformly converted to %s";
$lang->custom->saveTips            = 'After clicking save, the current %s will be used as the default estimation unit';

$lang->custom->numberError = 'The interval must be greater than zero!';

$lang->custom->closedExecution = 'Closed ' . $lang->executionCommon;
$lang->custom->closedProduct   = 'Closed ' . $lang->productCommon;

if($config->systemMode == 'new') $lang->custom->object['project']   = 'Project';
$lang->custom->object['product']   = $lang->productCommon;
$lang->custom->object['execution'] = $lang->custom->execution;
$lang->custom->object['story']     = 'Story';
$lang->custom->object['task']      = 'Task';
$lang->custom->object['bug']       = 'Bug';
$lang->custom->object['testcase']  = 'Case';
$lang->custom->object['testtask']  = 'Build';
$lang->custom->object['todo']      = 'Todo';
$lang->custom->object['user']      = 'User';
$lang->custom->object['block']     = 'Block';

$lang->custom->project = new stdClass();
$lang->custom->project->currencySetting    = 'Currency Setting';
$lang->custom->project->defaultCurrency    = 'Default Currency';
$lang->custom->project->fields['unitList'] = 'Unit List';

$lang->custom->story = new stdClass();
$lang->custom->story->fields['categoryList']     = 'Category';
$lang->custom->story->fields['priList']          = 'Priority';
$lang->custom->story->fields['sourceList']       = 'Source';
$lang->custom->story->fields['reasonList']       = 'Close Reason';
$lang->custom->story->fields['stageList']        = 'Phase';
$lang->custom->story->fields['statusList']       = 'Status';
$lang->custom->story->fields['reviewRules']      = 'Review Rules';
$lang->custom->story->fields['reviewResultList'] = 'Review Result';
$lang->custom->story->fields['review']           = 'Need Review';

$lang->custom->task = new stdClass();
$lang->custom->task->fields['priList']    = 'Priority';
$lang->custom->task->fields['typeList']   = 'Type';
$lang->custom->task->fields['reasonList'] = 'Close Reason';
$lang->custom->task->fields['statusList'] = 'Status';
$lang->custom->task->fields['hours']      = 'Effort';

$lang->custom->bug = new stdClass();
$lang->custom->bug->fields['priList']        = 'Priority';
$lang->custom->bug->fields['severityList']   = 'Severity';
$lang->custom->bug->fields['osList']         = 'OS';
$lang->custom->bug->fields['browserList']    = 'Browser';
$lang->custom->bug->fields['typeList']       = 'Type';
$lang->custom->bug->fields['resolutionList'] = 'Resolution';
$lang->custom->bug->fields['statusList']     = 'Status';
$lang->custom->bug->fields['longlife']       = 'Stalled Days';

$lang->custom->testcase = new stdClass();
$lang->custom->testcase->fields['priList']    = 'Priority';
$lang->custom->testcase->fields['typeList']   = 'Type';
$lang->custom->testcase->fields['stageList']  = 'Phase';
$lang->custom->testcase->fields['resultList'] = 'Result';
$lang->custom->testcase->fields['statusList'] = 'Status';
$lang->custom->testcase->fields['review']     = 'Need Review';

$lang->custom->testtask = new stdClass();
$lang->custom->testtask->fields['priList']    = 'Priority';
$lang->custom->testtask->fields['statusList'] = 'Status';

$lang->custom->todo = new stdClass();
$lang->custom->todo->fields['priList']    = 'Priority';
$lang->custom->todo->fields['typeList']   = 'Type';
$lang->custom->todo->fields['statusList'] = 'Status';

$lang->custom->user = new stdClass();
$lang->custom->user->fields['roleList']     = 'Role';
$lang->custom->user->fields['statusList']   = 'Status';
$lang->custom->user->fields['contactField'] = 'Available Contact';
$lang->custom->user->fields['deleted']      = 'Deleted User';

$lang->custom->system = array('required', 'flow', 'score');

$lang->custom->block = new stdclass();
$lang->custom->block->fields['closed'] = 'Closed Block';

$lang->custom->currentLang = 'Current Language';
$lang->custom->allLang     = 'All Languages';

$lang->custom->confirmRestore = 'Do you want to reset?';

$lang->custom->notice = new stdclass();
$lang->custom->notice->userFieldNotice     = 'Control whether the above fields are displayed on the user-related page. Leave it blank to display all.';
$lang->custom->notice->canNotAdd           = 'It will be calculated, so customization is not enabled.';
$lang->custom->notice->forceReview         = '%s review is required for committers selected.';
$lang->custom->notice->forceNotReview      = "%s review is not required for committers selected.";
$lang->custom->notice->longlife            = 'Define stalled bugs.';
$lang->custom->notice->invalidNumberKey    = 'The key should be =< 255.';
$lang->custom->notice->invalidStringKey    = 'The key should be lowercase letters, numbers or underlines.';
$lang->custom->notice->cannotSetTimezone   = 'date_default_timezone_set does not exist or is disabled. Timezone cannot be set.';
$lang->custom->notice->noClosedBlock       = 'You have no blocks that are closed permanently.';
$lang->custom->notice->required            = 'The selected field is required.';
$lang->custom->notice->conceptResult       = 'According to your preference, <b> %s-%s </b> is set for you. Use <b>%s</b> + <b> %s</b>.';
$lang->custom->notice->conceptPath         = 'Go to Admin -> Custom -> Concept to set it.';
$lang->custom->notice->readOnlyOfProduct   = 'If Change Forbidden, any change on stories, bugs, cases, efforts, releases and plans of the closed product is also forbidden.';
$lang->custom->notice->readOnlyOfExecution = "If Change Forbidden, any change on tasks, builds, efforts and stories of the closed {$lang->executionCommon} is also forbidden.";
$lang->custom->notice->URSREmpty           = 'Custom requirement name can not be empty!';
$lang->custom->notice->confirmDelete       = 'Are you sure you want to delete it?';

$lang->custom->notice->indexPage['product'] = "ZenTao 8.2+ has Product Home. Do you want to go to Product Home?";
$lang->custom->notice->indexPage['project'] = "ZenTao 8.2+ has Project Home. Do you want to go to Project Home?";
$lang->custom->notice->indexPage['qa']      = "ZenTao 8.2+ has Test Homepage. Do you want to go to Test Homepage?";

$lang->custom->notice->invalidStrlen['ten']        = 'The key should be <= 10 characters.';
$lang->custom->notice->invalidStrlen['twenty']     = 'The key should be <= 20 characters.';
$lang->custom->notice->invalidStrlen['thirty']     = 'The key should be <= 30 characters.';
$lang->custom->notice->invalidStrlen['twoHundred'] = 'The key should be <= 225 characters.';

$lang->custom->storyReview    = 'Review';
$lang->custom->forceReview    = 'Review Required';
$lang->custom->forceNotReview = 'No Review Required';
$lang->custom->reviewList[1]  = 'On';
$lang->custom->reviewList[0]  = 'Off';

$lang->custom->deletedList[1] = 'Show';
$lang->custom->deletedList[0] = 'Hide';

$lang->custom->workingHours   = 'Hours/Day';
$lang->custom->weekend        = 'Weekend';
$lang->custom->weekendList[2] = '2-Day Off';
$lang->custom->weekendList[1] = '1-Day Off';

global $config;
if($config->systemMode == 'classic')
{
    $lang->custom->sprintConceptList[0] = 'Product - Project';
    $lang->custom->sprintConceptList[1] = 'Product - Iteration';
    $lang->custom->sprintConceptList[2] = 'Product - Sprint';
}
else
{
    $lang->custom->sprintConceptList[0] = 'Program - Product - Iteration';
    $lang->custom->sprintConceptList[1] = 'Program - Product - Sprint';
}

$lang->custom->workingList['full'] = 'Application Lifecycle Management';

$lang->custom->menuTip  = 'Click to show/hide the menu. Drag to switch display order.';
$lang->custom->saveFail = 'Failed to save!';
$lang->custom->page     = ' Page';

$lang->custom->scoreStatus[1] = 'On';
$lang->custom->scoreStatus[0] = 'Off';

$lang->custom->CRProduct[1] = 'Change Allowed';
$lang->custom->CRProduct[0] = 'Change Forbidden';

$lang->custom->CRExecution[1] = 'Change Allowed';
$lang->custom->CRExecution[0] = 'Change Forbidden';

$lang->custom->moduleName['product']     = $lang->productCommon;
$lang->custom->moduleName['productplan'] = 'Plan';
$lang->custom->moduleName['execution']   = $lang->custom->execution;

$lang->custom->conceptQuestions['overview'] = "1. Which combination of management fits your company?";
$lang->custom->conceptQuestions['URAndSR']  = "2. Do you want to use the concept of {$lang->URCommon} and {$lang->SRCommon} in ZenTao?";


$lang->custom->conceptOptions             = new stdclass;
$lang->custom->conceptOptions->story      = array();
$lang->custom->conceptOptions->story['0'] = 'Requirement';
$lang->custom->conceptOptions->story['1'] = 'Story';

$lang->custom->conceptOptions->URAndSR = array();
$lang->custom->conceptOptions->URAndSR['1'] = 'Yes';
$lang->custom->conceptOptions->URAndSR['0'] = 'No';

$lang->custom->conceptOptions->hourPoint      = array();
$lang->custom->conceptOptions->hourPoint['0'] = 'Hours';
$lang->custom->conceptOptions->hourPoint['1'] = 'Story Point';
$lang->custom->conceptOptions->hourPoint['2'] = 'Function Point';

$lang->custom->scrum = new stdclass();
$lang->custom->scrum->setConcept = 'Set concept';

$lang->custom->reviewRules['allpass']  = 'All passed';
$lang->custom->reviewRules['halfpass'] = 'More than half passed';
/* datatable */
$lang->datatable = new stdclass();
$lang->datatable->common = 'Data Table';
$lang->datatable->width  = 'Width';
$lang->datatable->show   = 'Show';
$lang->datatable->hide   = 'Hide';
$lang->datatable->reset  = 'Reset';

$lang->datatable->custom             = 'Customize Columns';
$lang->datatable->customTip          = 'Check columns to display and drag columns to order.';
$lang->datatable->switchToTable      = 'Switch to Common Table';
$lang->datatable->switchToDatatable  = 'Switch to Advanced Table';
$lang->datatable->required           = 'Required';
$lang->datatable->confirmReset       = 'Do you want to restore the default settings?';
$lang->datatable->setGlobal          = 'Set as Global';
$lang->datatable->resetGlobal        = 'Global Reset';

$lang->datatable->branch   = 'Branch';
$lang->datatable->platform = 'Platform';

$lang->datatable->moduleSetting          = 'Set Module';
$lang->datatable->showModule             = 'Show modules in the list';
$lang->datatable->showAllModule          = 'Show product modules';
$lang->datatable->showModuleList[]       = 'N/A';
$lang->datatable->showModuleList['base'] = 'Base Node';
$lang->datatable->showModuleList['end']  = 'End Node';
$lang->datatable->showAllModuleList[0]   = 'Hide';
$lang->datatable->showAllModuleList[1]   = 'Show';
/* dept */
$lang->dept->common      = 'Department';
$lang->dept->manageChild = "Child Department";
$lang->dept->edit        = "Edit Department";
$lang->dept->delete      = "Delete Department";
$lang->dept->parent      = "Parent Dept";
$lang->dept->manager     = "Manager";
$lang->dept->name        = "Department Name";
$lang->dept->browse      = "Manage Department";
$lang->dept->manage      = "Manage Department";
$lang->dept->updateOrder = "Rank Department";
$lang->dept->add         = "Add Department";
$lang->dept->grade       = "Department Grade";
$lang->dept->order       = "Department Order";
$lang->dept->dragAndSort = "Drag to order";

$lang->dept->confirmDelete = " Do you want to delete this department?";
$lang->dept->successSave   = " Saved!";

$lang->dept->error = new stdclass();
$lang->dept->error->hasSons  = 'This Department has child departments. You cannot delete it!';
$lang->dept->error->hasUsers = 'This Department has users. You cannot delete it!';
/* dev */
$lang->dev->common     = 'Develop';
$lang->dev->api        = 'API';
$lang->dev->db         = 'Database';
$lang->dev->editor     = 'Editor';
$lang->dev->translate  = 'Translate';
$lang->dev->dbList     = 'Database';
$lang->dev->moduleList = 'Modules';
$lang->dev->params     = 'Parameters';
$lang->dev->type       = 'Type';
$lang->dev->desc       = 'Description';
$lang->dev->noParams   = 'No Parameters';
$lang->dev->post       = 'POST Parameter';

$lang->dev->paramRange    = 'Parameter Range: %s';
$lang->dev->paramDate     = 'Date format: YY-mm-dd, e.g 2019-01-01';
$lang->dev->paramColor    = 'Color format: #RGB, e.g. #3da7f5';
$lang->dev->paramMailto   = "User account. Separate accounts by ','.";
$lang->dev->noteEditor    = "The editor is disabled for security reasons. To use this feature, please go to the official website to download and install the plugin of the <a href='https://www.zentao.net/extension-viewExt-150.html' target='_blank'>editor</a>.";
$lang->dev->noteTranslate = "The translation is disabled for security reasons. To use this feature, please go to the official website to download and install the plugin of <a href='https://www.zentao.net/extension-viewExt-151.html' target='_blank'>translation</a>.";

$lang->dev->fields = array();
$lang->dev->fields['id']     = 'ID';
$lang->dev->fields['name']   = 'Feild';
$lang->dev->fields['desc']   = 'Description';
$lang->dev->fields['type']   = 'Type';
$lang->dev->fields['length'] = 'Length';
$lang->dev->fields['null']   = 'Null';

$lang->dev->tableList = array();
$lang->dev->tableList['action']           = 'Action';
$lang->dev->tableList['bug']              = 'Bug';
$lang->dev->tableList['build']            = 'Build';
$lang->dev->tableList['burn']             = 'Burndown Chart';
$lang->dev->tableList['case']             = 'Test Case';
$lang->dev->tableList['casestep']         = 'Case Step';
$lang->dev->tableList['company']          = 'Company';
$lang->dev->tableList['config']           = 'Configuration';
$lang->dev->tableList['custom']           = 'Custom';
$lang->dev->tableList['dept']             = 'Department';
$lang->dev->tableList['doc']              = 'Document';
$lang->dev->tableList['doclib']           = 'Document Library';
$lang->dev->tableList['effort']           = 'Effort';
$lang->dev->tableList['extension']        = 'Extension';
$lang->dev->tableList['file']             = 'File';
$lang->dev->tableList['group']            = 'Group';
$lang->dev->tableList['grouppriv']        = 'Privilege';
$lang->dev->tableList['history']          = 'History';
$lang->dev->tableList['lang']             = 'Language';
$lang->dev->tableList['module']           = 'Module';
$lang->dev->tableList['product']          = $lang->productCommon;
$lang->dev->tableList['productplan']      = $lang->productCommon . 'Plan';
$lang->dev->tableList['project']          = 'Project'; 
$lang->dev->tableList['projectproduct']   = 'Project' . $lang->productCommon;
$lang->dev->tableList['projectstory']     = 'Project Story';
$lang->dev->tableList['execution']        = $lang->executionCommon;
$lang->dev->tableList['release']          = 'Release';
$lang->dev->tableList['story']            = 'Story';
$lang->dev->tableList['storyspec']        = 'Story Description';
$lang->dev->tableList['task']             = 'Task';
$lang->dev->tableList['taskestimate']     = 'Estimates';
$lang->dev->tableList['team']             = 'Team';
$lang->dev->tableList['testresult']       = 'Test Result';
$lang->dev->tableList['testrun']          = 'Test Run';
$lang->dev->tableList['testtask']         = 'Test Request';
$lang->dev->tableList['todo']             = 'Todo';
$lang->dev->tableList['user']             = 'User';
$lang->dev->tableList['usercontact']      = 'User Contact';
$lang->dev->tableList['usergroup']        = 'User Group';
$lang->dev->tableList['userquery']        = 'User Query';
$lang->dev->tableList['usertpl']          = 'User Template';
$lang->dev->tableList['admin']            = 'Admin';
$lang->dev->tableList['api']              = 'API';
$lang->dev->tableList['backup']           = 'Backup';
$lang->dev->tableList['common']           = 'Common';
$lang->dev->tableList['convert']          = 'Convert';
$lang->dev->tableList['dev']              = 'Develop';
$lang->dev->tableList['git']              = 'GIT';
$lang->dev->tableList['index']            = 'Home';
$lang->dev->tableList['install']          = 'Install';
$lang->dev->tableList['mail']             = 'Email';
$lang->dev->tableList['misc']             = 'Misc.';
$lang->dev->tableList['my']               = 'Dashboard';
$lang->dev->tableList['qa']               = 'Test';
$lang->dev->tableList['report']           = 'Report';
$lang->dev->tableList['search']           = 'Search';
$lang->dev->tableList['sso']              = 'SSO';
$lang->dev->tableList['svn']              = 'SVN';
$lang->dev->tableList['testcase']         = 'Test Case';
$lang->dev->tableList['testreport']       = 'Test Report';
$lang->dev->tableList['testsuite']        = 'Test Suite';
$lang->dev->tableList['caselib']          = 'Case Library';
$lang->dev->tableList['tree']             = 'Module Tree';
$lang->dev->tableList['upgrade']          = 'Update';
$lang->dev->tableList['cron']             = 'Cron';
$lang->dev->tableList['datatable']        = 'Data Table';
$lang->dev->tableList['block']            = 'Block';
$lang->dev->tableList['branch']           = 'Branch';
$lang->dev->tableList['doccontent']       = 'Doc Content';
$lang->dev->tableList['storystage']       = 'Story Phase';
$lang->dev->tableList['tutorial']         = 'Tutorial';
$lang->dev->tableList['suitecase']        = 'Suite Case';
$lang->dev->tableList['score']            = 'Score';
$lang->dev->tableList['entry']            = 'Application';
$lang->dev->tableList['webhook']          = 'WebHook';
$lang->dev->tableList['log']              = 'Log';
$lang->dev->tableList['message']          = 'Message';
$lang->dev->tableList['notify']           = 'Notification';
$lang->dev->tableList['userview']         = 'User Privilege';
$lang->dev->tableList['repo']             = 'Code';
$lang->dev->tableList['repohistory']      = 'Repo History';
$lang->dev->tableList['repofiles']        = 'Repo Files';
$lang->dev->tableList['repobranch']       = 'Repo Branch';
$lang->dev->tableList['ci']               = 'CI';
$lang->dev->tableList['compile']          = 'Compile';
$lang->dev->tableList['jenkins']          = 'Jenkins';
$lang->dev->tableList['job']              = 'Job';
$lang->dev->tableList['searchdict']       = 'Search dict';
$lang->dev->tableList['searchindex']      = 'Search index';

$lang->dev->groupList['my']        = 'Dashboard';
$lang->dev->groupList['program']   = 'Program';
$lang->dev->groupList['product']   = $lang->productCommon;
$lang->dev->groupList['project']   = 'project';
$lang->dev->groupList['execution'] = $lang->executionCommon;
$lang->dev->groupList['qa']        = 'Test';
$lang->dev->groupList['doc']       = 'Doc';
$lang->dev->groupList['report']    = 'Report';
$lang->dev->groupList['company']   = 'Company';
$lang->dev->groupList['repo']      = 'CI';
$lang->dev->groupList['api']       = 'API';
$lang->dev->groupList['message']   = 'Message';
$lang->dev->groupList['search']    = 'Search';

$lang->dev->endGroupList['admin']  = 'Admin';
$lang->dev->endGroupList['system'] = 'System';
$lang->dev->endGroupList['other']  = 'Others';
/* doc */
$lang->doc->common       = 'Document';
$lang->doc->id           = 'ID';
$lang->doc->product      = $lang->productCommon;
$lang->doc->project      = 'Project';
$lang->doc->execution    = $lang->executionCommon;
$lang->doc->lib          = 'Library';
$lang->doc->module       = 'Catalog';
$lang->doc->title        = 'Name';
$lang->doc->digest       = 'Summary';
$lang->doc->comment      = 'Comment';
$lang->doc->type         = 'Type';
$lang->doc->content      = 'Text';
$lang->doc->keywords     = 'Tags';
$lang->doc->url          = 'URL';
$lang->doc->files        = 'Files';
$lang->doc->addedBy      = 'Author';
$lang->doc->addedDate    = 'Added';
$lang->doc->editedBy     = 'UpdatedBy';
$lang->doc->editedDate   = 'UpdatedDate';
$lang->doc->version      = 'Version';
$lang->doc->basicInfo    = 'Basic Info';
$lang->doc->deleted      = 'Deleted';
$lang->doc->fileObject   = 'Dependent Item';
$lang->doc->whiteList    = 'White List';
$lang->doc->contentType  = 'Format';
$lang->doc->separator    = "<i class='icon-angle-right'></i>";
$lang->doc->fileTitle    = 'File Name';
$lang->doc->filePath     = 'File Path';
$lang->doc->extension    = 'Extension';
$lang->doc->size         = 'Size';
$lang->doc->download     = 'Download';
$lang->doc->acl          = 'Right';
$lang->doc->fileName     = 'Files';
$lang->doc->groups       = 'Groups';
$lang->doc->users        = 'Users';
$lang->doc->item         = ' Items';
$lang->doc->num          = 'Documents';
$lang->doc->searchResult = 'Search Result';
$lang->doc->mailto       = 'Mailto';
$lang->doc->noModule     = 'No document in this lib, please create it';
$lang->doc->noChapter    = 'No chapters or articles in this book. Please add chapters and articles.';

$lang->doc->moduleDoc    = 'By Module';
$lang->doc->searchDoc    = 'Search';
$lang->doc->fast         = 'Quick Entry';
$lang->doc->allDoc       = 'All Documents';
$lang->doc->openedByMe   = 'My';
$lang->doc->editedByMe   = 'Edited By Me';
$lang->doc->orderByOpen  = 'Recent Added';
$lang->doc->orderByEdit  = 'Recent Updated';
$lang->doc->orderByVisit = 'Last Visited';
$lang->doc->todayEdited  = 'Updated Today';
$lang->doc->pastEdited   = 'Total Updated';
$lang->doc->myDoc        = 'My Documents';
$lang->doc->myCollection = 'My Favorites';

$lang->doc->index            = 'Document Home';
$lang->doc->create           = 'Create Document';
$lang->doc->edit             = 'Edit Document';
$lang->doc->delete           = 'Delete Document';
$lang->doc->createBook       = 'Create Book';
$lang->doc->browse           = 'Document List';
$lang->doc->view             = 'Document Detail';
$lang->doc->diff             = 'Diff';
$lang->doc->diffAction       = 'Diff Document';
$lang->doc->sort             = 'Rank Document';
$lang->doc->manageType       = 'Manage Category';
$lang->doc->editType         = 'Edit';
$lang->doc->deleteType       = 'Delete';
$lang->doc->addType          = 'Add';
$lang->doc->childType        = 'Catalog';
$lang->doc->catalogName      = 'Catalog Name';
$lang->doc->collect          = 'Add Favorite';
$lang->doc->cancelCollection = 'Remove Favorite';
$lang->doc->deleteFile       = 'Delete File';

$lang->doc->collectAction = 'Add Favorite';

$lang->doc->libName        = 'Document Library';
$lang->doc->libType        = 'Category';
$lang->doc->custom         = 'Custom Document Library';
$lang->doc->customAB       = 'Custom Doc Lib';
$lang->doc->createLib      = 'Create Document Library';
$lang->doc->allLibs        = 'Library List';
$lang->doc->objectLibs     = "{$lang->productCommon}/{$lang->executionCommon} Libraries";
$lang->doc->showFiles      = 'Attachments';
$lang->doc->editLib        = 'Edit Document Library';
$lang->doc->deleteLib      = 'Delete Document Library';
$lang->doc->fixedMenu      = 'Fix to Menu';
$lang->doc->removeMenu     = 'Remove from Menu';
$lang->doc->search         = 'Search';

global $config;
$lang->doc->allProduct    = 'All' . $lang->productCommon . 's';
$lang->doc->allExecutions = 'All' . $lang->executionCommon . 's';

$lang->doc->libTypeList['product']   = $lang->productCommon . ' Library';
if($config->systemMode == 'new') $lang->doc->libTypeList['project'] = 'Project Library';
$lang->doc->libTypeList['execution'] = $lang->executionCommon . ' Library';
$lang->doc->libTypeList['custom']    = 'Custom Library';

$lang->doc->libIconList['product']   = 'icon-product';
$lang->doc->libIconList['execution'] = 'icon-stack';
$lang->doc->libIconList['custom']    = 'icon-folder-o';

$lang->doc->systemLibs['product']   = $lang->productCommon;
$lang->doc->systemLibs['execution'] = $lang->executionCommon;

$lang->doc->aclList['open']    = 'Public';
$lang->doc->aclList['custom']  = 'Custom';
$lang->doc->aclList['private'] = 'Private';

$lang->doc->typeList['html']     = 'Html';
$lang->doc->typeList['markdown'] = 'Markdown';
$lang->doc->typeList['url']      = 'URL';
$lang->doc->typeList['word']     = 'Word';
$lang->doc->typeList['ppt']      = 'PPT';
$lang->doc->typeList['excel']    = 'Excel';

$lang->doc->types['text'] = 'Text';
$lang->doc->types['url']  = 'URL';

$lang->doc->contentTypeList['html']     = 'HTML';
$lang->doc->contentTypeList['markdown'] = 'MarkDown';

$lang->doc->browseType             = 'Category';
$lang->doc->browseTypeList['list'] = 'List';
$lang->doc->browseTypeList['grid'] = 'Card';

$lang->doc->fastMenuList['byediteddate']  = 'Recent Edited';
//$lang->doc->fastMenuList['visiteddate']   = 'Recently Visited';
$lang->doc->fastMenuList['openedbyme']    = 'My Documents';
$lang->doc->fastMenuList['collectedbyme'] = 'My Favorites';

$lang->doc->fastMenuIconList['byediteddate']  = 'icon-folder-upload';
//$lang->doc->fastMenuIconList['visiteddate']   = 'icon-folder-move';
$lang->doc->fastMenuIconList['openedbyme']    = 'icon-folder-account';
$lang->doc->fastMenuIconList['collectedbyme'] = 'icon-folder-star';

$lang->doc->customObjectLibs['files']       = 'Show Attachment Library';
$lang->doc->customObjectLibs['customFiles'] = 'Show Custom Library';

$lang->doc->orderLib = 'Rank Settings';
$lang->doc->customShowLibs = 'Display Settings';
$lang->doc->customShowLibsList['zero']     = 'Display Empty Library';
$lang->doc->customShowLibsList['children'] = 'Display Child-category Documents';
$lang->doc->customShowLibsList['unclosed'] = "Display Active {$lang->executionCommon}s Only";

$lang->doc->mail = new stdclass();
$lang->doc->mail->create = new stdclass();
$lang->doc->mail->edit   = new stdclass();
$lang->doc->mail->create->title = "%s created document #%s:%s";
$lang->doc->mail->edit->title   = "%s edited document #%s:%s";

$lang->doc->confirmDelete        = "Do you want to delete this document?";
$lang->doc->confirmDeleteLib     = "Do you want to delete this document library?";
$lang->doc->confirmDeleteChapter = "Do you want to delete this chapter?";
$lang->doc->errorEditSystemDoc   = "You don't have to change system document library.";
$lang->doc->errorEmptyProduct    = "No {$lang->productCommon}. It cannot be created.";
$lang->doc->errorEmptyProject    = "No {$lang->executionCommon}. It cannot be created.";
$lang->doc->errorMainSysLib      = "This library cannot be deleted.";
$lang->doc->accessDenied         = "Access is denied!";
$lang->doc->versionNotFount      = 'It does not exist in this build.';
$lang->doc->noDoc                = 'No documents. ';
$lang->doc->noArticle            = 'No articles.';
$lang->doc->noLib                = 'No libraries. ';
$lang->doc->noBook               = 'The WIKI library has not created a manual, please create a new one :)';
$lang->doc->cannotCreateOffice   = 'Sorry, %s can only be created in ZenTao Enterprise. Contact us at renee@easysoft.ltd to try ZenTao Enterprise.';
$lang->doc->notSetOffice         = "<p>To create a %s document, you need to configure <a href='%s'>office convert</a>.<p>";
$lang->doc->noSearchedDoc        = 'No documents found.';
$lang->doc->noEditedDoc          = 'You have not edited any documents.';
$lang->doc->noOpenedDoc          = 'You have not created any documents.';
$lang->doc->noCollectedDoc       = 'You have not favorited any documents.';
$lang->doc->errorEmptyLib        = 'No data in document library.';

$lang->doc->noticeAcl['lib']['product']['default']   = 'Users who can access the selected product can access it.';
$lang->doc->noticeAcl['lib']['product']['custom']    = 'Users who can access the selected product or users in the whiltelist can access it.';
$lang->doc->noticeAcl['lib']['project']['default']   = 'Users who can access the selected project can access it.';
$lang->doc->noticeAcl['lib']['project']['custom']    = 'Users who can access the selected project or users in the whiltelist can access it.';
$lang->doc->noticeAcl['lib']['execution']['default'] = "Users who can access the selected {$lang->executionCommon} can access it.";
$lang->doc->noticeAcl['lib']['execution']['custom']  = "Users who can access the selected {$lang->executionCommon} or users in the whiltelist can access it.";
$lang->doc->noticeAcl['lib']['custom']['open']       = 'All users can access it.';
$lang->doc->noticeAcl['lib']['custom']['custom']     = 'Users in the whitelist can access it.';
$lang->doc->noticeAcl['lib']['custom']['private']    = 'Only the one who created it can access it.';

$lang->doc->noticeAcl['doc']['open']    = 'Users who can access the document library which the document belongs can access it.';
$lang->doc->noticeAcl['doc']['custom']  = 'Users in the whiltelist can access it.';
$lang->doc->noticeAcl['doc']['private'] = 'Only the one who created it can access it.';

$lang->doc->placeholder = new stdclass();
$lang->doc->placeholder->url = 'URL';

$lang->doclib = new stdclass();
$lang->doclib->name      = 'Name';
$lang->doclib->control   = 'Access Control';
$lang->doclib->group     = 'Group';
$lang->doclib->user      = 'User';
$lang->doclib->files     = 'Attachments';
$lang->doclib->all       = 'All Libraries';
$lang->doclib->select    = 'Select';
$lang->doclib->execution = $lang->executionCommon . ' Library';
$lang->doclib->product   = $lang->productCommon . ' Library';

$lang->doclib->aclListA['default'] = 'Default';
$lang->doclib->aclListA['custom']  = 'Custom';

$lang->doclib->aclListB['open']    = 'Public';
$lang->doclib->aclListB['custom']  = 'Custom';
$lang->doclib->aclListB['private'] = 'Private';

$lang->doclib->create['product']   = 'Create ' . $lang->productCommon . ' Library';
$lang->doclib->create['execution'] = 'Create ' . $lang->executionCommon . ' Library';
$lang->doclib->create['custom']    = 'Create Custom Library';

$lang->doclib->main['product']   = 'Primary Library';
$lang->doclib->main['project']   = 'Primary Library';
$lang->doclib->main['execution'] = 'Primary Library';

$lang->doclib->tabList['product']   = $lang->productCommon;
$lang->doclib->tabList['execution'] = $lang->executionCommon;
$lang->doclib->tabList['custom']    = 'Custom';

$lang->doclib->nameList['custom'] = 'Custom Name';
/* entry */
$lang->entry->common  = 'Application';
$lang->entry->list    = 'Applications';
$lang->entry->api     = 'API';
$lang->entry->webhook = 'Webhook';
$lang->entry->log     = 'Log';
$lang->entry->setting = 'Settings';

$lang->entry->browse    = 'Browse';
$lang->entry->create    = 'Add Application';
$lang->entry->edit      = 'Edit';
$lang->entry->delete    = 'Delete';
$lang->entry->createKey = 'Regenerate Secret Key';

$lang->entry->id          = 'ID';
$lang->entry->name        = 'Name';
$lang->entry->account     = 'Account';
$lang->entry->code        = 'Code';
$lang->entry->freePasswd  = 'Password-Free Login';
$lang->entry->key         = 'Key';
$lang->entry->ip          = 'IP';
$lang->entry->desc        = 'Description';
$lang->entry->createdBy   = 'CreatedBy';
$lang->entry->createdDate = 'CreateDate';
$lang->entry->editedby    = 'EditedBy';
$lang->entry->editedDate  = 'EditedDate';
$lang->entry->date        = 'Requesting Time';
$lang->entry->url         = 'Requesting URL';

$lang->entry->confirmDelete = 'Do you want to delete this entry?';
$lang->entry->help          = 'Help';
$lang->entry->notify        = 'Notification';

$lang->entry->helpLink   = 'https://www.zentao.pm/book/zentaomanual/scrum-tool-open-source-integrate-third-party-application-221.html';
$lang->entry->notifyLink = 'https://www.zentao.net/book/zentaopmshelp/301.html';

$lang->entry->note = new stdClass();
$lang->entry->note->name    = 'Name';
$lang->entry->note->code    = 'Code should be letters and numbers';
$lang->entry->note->ip      = "Use comma to seperate IPs. IP segment is supported, e.g. 192.168.1.*";
$lang->entry->note->allIP   = 'All IPs';
$lang->entry->note->account = 'Application Account';

$lang->entry->freePasswdList[1] = 'On';
$lang->entry->freePasswdList[0] = 'Off';

$lang->entry->errmsg['PARAM_CODE_MISSING']    = 'Parameter code is missing.';
$lang->entry->errmsg['PARAM_TOKEN_MISSING']   = 'Parameter token is missing.';
$lang->entry->errmsg['SESSION_CODE_MISSING']  = 'Session code is missing.';
$lang->entry->errmsg['EMPTY_KEY']             = 'Secret key is missing.';
$lang->entry->errmsg['INVALID_TOKEN']         = 'Invalid token.';
$lang->entry->errmsg['SESSION_VERIFY_FAILED'] = 'Session verification failed.';
$lang->entry->errmsg['IP_DENIED']             = 'IP is denied.';
$lang->entry->errmsg['ACCOUNT_UNBOUND']       = 'Account is not bound.';
$lang->entry->errmsg['INVALID_ACCOUNT']       = 'Invalid account.';
$lang->entry->errmsg['EMPTY_ENTRY']           = 'Application does not exist.';
$lang->entry->errmsg['CALLED_TIME']           = 'Token has expired';
$lang->entry->errmsg['ERROR_TIMESTAMP']       = 'Timestamp Error';
/* execution */
$lang->execution->allExecutions   = 'All ' . $lang->executionCommon . 's';
$lang->execution->allExecutionAB  = 'All Executions';
$lang->execution->id              = $lang->executionCommon . ' ID';
$lang->execution->type            = $lang->executionCommon . 'Type';
$lang->execution->name            = $lang->executionCommon . 'Name';
$lang->execution->code            = $lang->executionCommon . 'Code';
$lang->execution->project         = 'Project';
$lang->execution->execName        = 'Execution Name';
$lang->execution->execCode        = 'Execution Code';
$lang->execution->execType        = 'Execution Type';
$lang->execution->stage           = 'Stage';
$lang->execution->pri             = 'Priority';
$lang->execution->openedBy        = 'OpenedBy';
$lang->execution->openedDate      = 'OpenedDate';
$lang->execution->closedBy        = 'ClosedBy';
$lang->execution->closedDate      = 'ClosedDate';
$lang->execution->canceledBy      = 'CanceledBy';
$lang->execution->canceledDate    = 'CanceledDate';
$lang->execution->begin           = 'Begin';
$lang->execution->end             = 'End';
$lang->execution->dateRange       = 'Duration';
$lang->execution->to              = 'To';
$lang->execution->days            = 'Available Days';
$lang->execution->day             = ' Days';
$lang->execution->workHour        = ' Hours';
$lang->execution->workHourUnit    = 'H';
$lang->execution->totalHours      = 'Available Hours';
$lang->execution->totalDays       = 'Available Days';
$lang->execution->status          = $lang->executionCommon . 'Status';
$lang->execution->execStatus      = 'Status';
$lang->execution->subStatus       = 'Sub Status';
$lang->execution->desc            = $lang->executionCommon . 'Description';
$lang->execution->execDesc        = 'Description';
$lang->execution->owner           = 'Owner';
$lang->execution->PO              = "{$lang->executionCommon} Owner";
$lang->execution->PM              = "{$lang->executionCommon} Manager";
$lang->execution->execPM          = "Execution Manager";
$lang->execution->QD              = 'Test Manager';
$lang->execution->RD              = 'Release Manager';
$lang->execution->release         = 'Release';
$lang->execution->acl             = 'Access Control';
$lang->execution->teamname        = 'Team Name';
$lang->execution->order           = "Rank {$lang->executionCommon}";
$lang->execution->orderAB         = "Rank";
$lang->execution->products        = "Link {$lang->productCommon}";
$lang->execution->whitelist       = 'Whitelist';
$lang->execution->addWhitelist    = 'Add Whitelist';
$lang->execution->unbindWhitelist = 'Remove Whitelist';
$lang->execution->totalEstimate   = 'Estimates';
$lang->execution->totalConsumed   = 'Cost';
$lang->execution->totalLeft       = 'Left';
$lang->execution->progress        = ' Progress';
$lang->execution->hours           = 'Estimates: %s, Cost: %s, Left: %s.';
$lang->execution->viewBug         = 'Bugs';
$lang->execution->noProduct       = "No {$lang->productCommon} yet.";
$lang->execution->createStory     = "Create Story";
$lang->execution->storyTitle      = "Story Name";
$lang->execution->all             = "All {$lang->executionCommon}s";
$lang->execution->undone          = 'Unfinished ';
$lang->execution->unclosed        = 'Unclosed';
$lang->execution->typeDesc        = "OPS {$lang->executionCommon} has no {$lang->SRCommon}, Bug, Build, or Test features.";
$lang->execution->mine            = 'Mine: ';
$lang->execution->involved        = 'Mine: ';
$lang->execution->other           = 'Others:';
$lang->execution->deleted         = 'Deleted';
$lang->execution->delayed         = 'Delayed';
$lang->execution->product         = $lang->execution->products;
$lang->execution->readjustTime    = "Adjust {$lang->executionCommon} Begin and End";
$lang->execution->readjustTask    = 'Adjust Task Begin and End';
$lang->execution->effort          = 'Effort';
$lang->execution->storyEstimate   = 'Story Estimate';
$lang->execution->newEstimate     = 'New Estimate';
$lang->execution->reestimate      = 'Reestimate';
$lang->execution->selectRound     = 'Select Round';
$lang->execution->average         = 'Average';
$lang->execution->relatedMember   = 'Team';
$lang->execution->watermark       = 'Exported by ZenTao';
$lang->execution->burnXUnit       = '(Date)';
$lang->execution->burnYUnit       = '(Hours)';
$lang->execution->waitTasks       = 'Waiting Tasks';
$lang->execution->viewByUser      = 'By User';
$lang->execution->oneProduct      = "Only one stage can be linked {$lang->productCommon}";
$lang->execution->noLinkProduct   = "Stage not linked {$lang->productCommon}";
$lang->execution->recent          = 'Recent visits: ';
$lang->execution->copyNoExecution = 'There are no ' . $lang->executionCommon . 'available to copy.';
$lang->execution->noTeam          = 'No team members at the moment';

$lang->execution->start    = 'Start';
$lang->execution->activate = 'Activate';
$lang->execution->putoff   = 'Delay';
$lang->execution->suspend  = 'Suspend';
$lang->execution->close    = 'Close';
$lang->execution->export   = 'Export';

$lang->execution->endList[7]   = '1 Week';
$lang->execution->endList[14]  = '2 Weeks';
$lang->execution->endList[31]  = '1 Month';
$lang->execution->endList[62]  = '2 Months';
$lang->execution->endList[93]  = '3 Months';
$lang->execution->endList[186] = '6 Months';
$lang->execution->endList[365] = '1 Year';

$lang->execution->lifeTimeList['short'] = "Short-Term";
$lang->execution->lifeTimeList['long']  = "Long-Term";
$lang->execution->lifeTimeList['ops']   = "DevOps";

$lang->team = new stdclass();
$lang->team->account    = 'User';
$lang->team->role       = 'Role';
$lang->team->join       = 'Joined';
$lang->team->hours      = 'Hours/day';
$lang->team->days       = 'Day';
$lang->team->totalHours = 'Total Hours';

$lang->team->limited            = 'Limited User';
$lang->team->limitedList['yes'] = 'Yes';
$lang->team->limitedList['no']  = 'No';

$lang->execution->basicInfo = 'Basic Information';
$lang->execution->otherInfo = 'Other Information';

$lang->execution->statusList['wait']      = 'Waiting';
$lang->execution->statusList['doing']     = 'Doing';
$lang->execution->statusList['suspended'] = 'Suspended';
$lang->execution->statusList['closed']    = 'Closed';

global $config;
if($config->systemMode == 'new')
{
    $lang->execution->aclList['private'] = 'Private (for team members and execution stakeholders)';
    $lang->execution->aclList['open']    = 'Inherited Execution ACL (for who can access the current execution)';
}
else
{
    $lang->execution->aclList['private'] = 'Private (for team members and execution stakeholders)';
    $lang->execution->aclList['open']    = "Public (Users who can visit {$lang->executionCommon} can access it.)";
}

$lang->execution->storyPoint = 'Story Point';

$lang->execution->burnByList['left']       = 'View by remaining hours';
$lang->execution->burnByList['estimate']   = "View by plan hours";
$lang->execution->burnByList['storyPoint'] = 'View by story point';

$lang->execution->index             = "{$lang->executionCommon} Home";
$lang->execution->task              = 'Task List';
$lang->execution->groupTask         = 'Group View';
$lang->execution->story             = 'Story List';
$lang->execution->qa                = 'QA';
$lang->execution->bug               = 'Bug List';
$lang->execution->testcase          = 'Testcase List';
$lang->execution->dynamic           = 'Dynamics';
$lang->execution->latestDynamic     = 'Dynamics';
$lang->execution->build             = 'Build List';
$lang->execution->testtask          = 'Request';
$lang->execution->burn              = 'Burndown';
$lang->execution->computeBurn       = 'Update';
$lang->execution->burnData          = 'Burndown Data';
$lang->execution->fixFirst          = 'Edit 1st-Day Estimates';
$lang->execution->team              = 'Members';
$lang->execution->doc               = 'Document';
$lang->execution->doclib            = 'Docoment Library';
$lang->execution->manageProducts    = 'Linked ' . $lang->productCommon . 's';
$lang->execution->linkStory         = 'Link Stories';
$lang->execution->linkStoryByPlan   = 'Link Stories By Plan';
$lang->execution->linkPlan          = 'Linked Plan';
$lang->execution->unlinkStoryTasks  = 'Unlink';
$lang->execution->linkedProducts    = "Linked {$lang->productCommon}s";
$lang->execution->unlinkedProducts  = "Unlinked {$lang->productCommon}s";
$lang->execution->view              = "Execution Detail";
$lang->execution->startAction       = "Start Execution";
$lang->execution->activateAction    = "Activate Execution";
$lang->execution->delayAction       = "Delay Execution";
$lang->execution->suspendAction     = "Suspend Execution";
$lang->execution->closeAction       = "Close Execution";
$lang->execution->testtaskAction    = "Execution Request";
$lang->execution->teamAction        = "Execution Members";
$lang->execution->kanbanAction      = "Execution Kanban";
$lang->execution->printKanbanAction = "Print Kanban";
$lang->execution->treeAction        = "Execution Tree View";
$lang->execution->exportAction      = "Export Execution";
$lang->execution->computeBurnAction = "Update Burndown";
$lang->execution->create            = "Create {$lang->executionCommon}";
$lang->execution->createExec        = "Create Execution";
$lang->execution->copyExec          = "Copy Execution";
$lang->execution->copy              = "Copy {$lang->executionCommon}";
$lang->execution->delete            = "Delete {$lang->executionCommon}";
$lang->execution->deleteAB          = "Delete Execution";
$lang->execution->browse            = "{$lang->executionCommon} List";
$lang->execution->edit              = "Edit {$lang->executionCommon}";
$lang->execution->editAction        = "Edit Execution";
$lang->execution->batchEdit         = "Edit";
$lang->execution->batchEditAction   = "Batch Edit";
$lang->execution->manageMembers     = 'Manage Team';
$lang->execution->unlinkMember      = 'Remove Member';
$lang->execution->unlinkStory       = 'Unlink Story';
$lang->execution->unlinkStoryAB     = 'Unlink';
$lang->execution->batchUnlinkStory  = 'Batch Unlink Stories';
$lang->execution->importTask        = 'Transfer Task';
$lang->execution->importPlanStories = 'Link Stories By Plan';
$lang->execution->importBug         = 'Import Bug';
$lang->execution->tree              = 'Tree';
$lang->execution->treeTask          = 'Show Task Only';
$lang->execution->treeStory         = 'Show Story Only';
$lang->execution->treeOnlyTask      = 'Show Task Only';
$lang->execution->treeOnlyStory     = 'Show Story Only';
$lang->execution->storyKanban       = 'Story Kanban';
$lang->execution->storySort         = 'Rank Story';
$lang->execution->importPlanStory   = $lang->executionCommon . ' is created!\nDo you want to import stories that have been linked to the plan?';
$lang->execution->iteration         = 'Iterations';
$lang->execution->iterationInfo     = '%s Iterations';
$lang->execution->viewAll           = 'View All';
$lang->execution->testreport        = 'Test Report';

$lang->execution->allTasks     = 'All';
$lang->execution->assignedToMe = 'My';
$lang->execution->myInvolved   = 'Involved';

$lang->execution->statusSelects['']             = 'More';
$lang->execution->statusSelects['wait']         = 'Waiting';
$lang->execution->statusSelects['doing']        = 'Doing';
$lang->execution->statusSelects['undone']       = 'Unfinished';
$lang->execution->statusSelects['finishedbyme'] = 'FinishedByMe';
$lang->execution->statusSelects['done']         = 'Done';
$lang->execution->statusSelects['closed']       = 'Closed';
$lang->execution->statusSelects['cancel']       = 'Cancelled';

$lang->execution->groups['']           = 'View by Groups';
$lang->execution->groups['story']      = 'Group by Story';
$lang->execution->groups['status']     = 'Group by Status';
$lang->execution->groups['pri']        = 'Group by Priority';
$lang->execution->groups['assignedTo'] = 'Group by AssignedTo';
$lang->execution->groups['finishedBy'] = 'Group by FinishedBy';
$lang->execution->groups['closedBy']   = 'Group by ClosedBy';
$lang->execution->groups['type']       = 'Group by Type';

$lang->execution->groupFilter['story']['all']         = 'All';
$lang->execution->groupFilter['story']['linked']      = 'Tasks linked to stories';
$lang->execution->groupFilter['pri']['all']           = 'All';
$lang->execution->groupFilter['pri']['noset']         = 'Not Set';
$lang->execution->groupFilter['assignedTo']['undone'] = 'Unfinished';
$lang->execution->groupFilter['assignedTo']['all']    = 'All';

$lang->execution->byQuery = 'Search';

$lang->execution->allExecution      = "All {$lang->executionCommon}s";
$lang->execution->aboveAllProduct   = "All the above {$lang->productCommon}s";
$lang->execution->aboveAllExecution = "All the above {$lang->executionCommon}s";

$lang->execution->linkStoryByPlanTips = "This action will link all stories in this plan to the {$lang->executionCommon}.";
$lang->execution->selectExecution     = "Select {$lang->executionCommon}";
$lang->execution->beginAndEnd         = 'Duration';
$lang->execution->lblStats            = 'Efforts';
$lang->execution->stats               = 'Available: <strong>%s</strong>(h). Estimates: <strong>%s</strong>(h). Cost: <strong>%s</strong>(h). Left: <strong>%s</strong>(h).';
$lang->execution->taskSummary         = "Total tasks on this page:<strong>%s</strong>. Waiting: <strong>%s</strong>. Doing: <strong>%s</strong>.  &nbsp;&nbsp;&nbsp;  Estimates: <strong>%s</strong>(h). Cost: <strong>%s</strong>(h). Left: <strong>%s</strong>(h).";
$lang->execution->pageSummary         = "Total tasks: <strong>%total%</strong>. Waiting: <strong>%wait%</strong>. Doing: <strong>%doing%</strong>.    Estimates: <strong>%estimate%</strong>(h). Cost: <strong>%consumed%</strong>(h). Left: <strong>%left%</strong>(h).";
$lang->execution->checkedSummary      = "Selected: <strong>%total%</strong>. Waiting: <strong>%wait%</strong>. Doing: <strong>%doing%</strong>.    Estimates: <strong>%estimate%</strong>(h). Cost: <strong>%consumed%</strong>(h). Left: <strong>%left%</strong>(h).";
$lang->execution->memberHoursAB       = "%s has <strong>%s</ strong> hours.";
$lang->execution->memberHours         = '<div class="table-col"><div class="clearfix segments"><div class="segment"><div class="segment-title">%s Available Hours</div><div class="segment-value">%s</div></div></div></div>';
$lang->execution->countSummary        = '<div class="table-col"><div class="clearfix segments"><div class="segment"><div class="segment-title">Tasks</div><div class="segment-value">%s</div></div><div class="segment"><div class="segment-title">Doing</div><div class="segment-value"><span class="label label-dot label-primary"></span> %s</div></div><div class="segment"><div class="segment-title">Waiting</div><div class="segment-value"><span class="label label-dot label-primary muted"></span> %s</div></div></div></div>';
$lang->execution->timeSummary         = '<div class="table-col"><div class="clearfix segments"><div class="segment"><div class="segment-title">Estimates</div><div class="segment-value">%s</div></div><div class="segment"><div class="segment-title">Cost</div><div class="segment-value text-red">%s</div></div><div class="segment"><div class="segment-title">Left</div><div class="segment-value">%s</div></div></div></div>';
$lang->execution->groupSummaryAB      = "<div>Tasks <strong>%s ：</strong><span class='text-muted'>Waiting</span> %s &nbsp; <span class='text-muted'>Doing</span> %s</div><div>Estimates <strong>%s ：</strong><span class='text-muted'>Cost</span> %s &nbsp; <span class='text-muted'>Left</span> %s</div>";
$lang->execution->wbs                 = "Create Task";
$lang->execution->batchWBS            = "Batch Create Tasks";
$lang->execution->howToUpdateBurn     = "<a href='https://api.zentao.pm/goto.php?item=burndown' target='_blank' title='How to update the Burndown Chart?' class='btn btn-link'>Help <i class='icon icon-help'></i></a>";
$lang->execution->whyNoStories        = "No story can be linked. Please check whether there is any story in {$lang->executionCommon} which is linked to {$lang->productCommon} and make sure it has been reviewed.";
$lang->execution->productStories      = "Stories linked to {$lang->executionCommon} are the subeset of stories linked to {$lang->productCommon}. Stories can only be linked after they pass the review. <a href='%s'> Link Stories</a> now.";
$lang->execution->haveDraft           = "%s stories in draft, so they can't be linked.";
$lang->execution->doneExecutions      = 'Finished';
$lang->execution->selectDept          = 'Select Department';
$lang->execution->selectDeptTitle     = 'Select User';
$lang->execution->copyTeam            = 'Copy Team';
$lang->execution->copyFromTeam        = "Copy from {$lang->executionCommon} Team: <strong>%s</strong>";
$lang->execution->noMatched           = "No $lang->executionCommon including '%s'can be found.";
$lang->execution->copyTitle           = "Choose a {$lang->executionCommon} to copy.";
$lang->execution->copyTeamTitle       = "Choose a {$lang->executionCommon} Team to copy.";
$lang->execution->copyNoExecution     = "No {$lang->executionCommon} can be copied.";
$lang->execution->copyFromExecution   = "Copy from {$lang->executionCommon} <strong>%s</strong>";
$lang->execution->cancelCopy          = 'Cancel Copy';
$lang->execution->byPeriod            = 'By Time';
$lang->execution->byUser              = 'By User';
$lang->execution->noExecution         = "No {$lang->executionCommon}. ";
$lang->execution->noExecutions        = "No {$lang->execution->common}.";
$lang->execution->noMembers           = 'No team members yet. ';
$lang->execution->workloadTotal       = "The cumulative workload ratio should not exceed 100, and the total workload under the current product is: %s";
// $lang->execution->linkProjectStoryTip = "(Link {$lang->SRCommon} comes from {$lang->SRCommon} linked under the execution)";
$lang->execution->linkAllStoryTip     = "({$lang->SRCommon} has never been linked under the execution, and can be directly linked with {$lang->SRCommon} of the product linked with the sprint/stage)";

$lang->execution->confirmDelete             = "Do you want to delete the {$lang->executionCommon}[%s]?";
$lang->execution->confirmUnlinkMember       = "Do you want to unlink this User from {$lang->executionCommon}?";
$lang->execution->confirmUnlinkStory        = "Do you want to unlink this Story from {$lang->executionCommon}?";
$lang->execution->confirmUnlinkExecutionStory = "Do you want to unlink this Story from the execution?";
$lang->execution->notAllowedUnlinkStory     = "This {$lang->SRCommon} is linked to the {$lang->executionCommon} of the execution. Remove it from the {$lang->executionCommon}, then try again.";
$lang->execution->notAllowRemoveProducts    = "The story of this product is linked with the {$lang->executionCommon}. Unlink it before doing any action.";
$lang->execution->errorNoLinkedProducts     = "No {$lang->productCommon} is linked to {$lang->executionCommon}. You will be directed to {$lang->productCommon} page to link one.";
$lang->execution->errorSameProducts         = "{$lang->executionCommon} cannot be linked to the same {$lang->productCommon} twice.";
$lang->execution->errorBegin                = "The start time of {$lang->executionCommon} cannot be less than the start time of the project %s.";
$lang->execution->errorEnd                  = "The end time of {$lang->executionCommon} cannot be greater than the end time %s of the project.";
$lang->execution->accessDenied              = "Your access to {$lang->executionCommon} is denied!";
$lang->execution->tips                      = 'Note';
$lang->execution->afterInfo                 = "{$lang->executionCommon} is created. Next you can ";
$lang->execution->setTeam                   = 'Set Team';
$lang->execution->linkStory                 = 'Link Story';
$lang->execution->createTask                = 'Create Task';
$lang->execution->goback                    = "Go Back";
$lang->execution->noweekend                 = 'Exclude Weekend';
$lang->execution->withweekend               = 'Include Weekend';
$lang->execution->interval                  = 'Intervals ';
$lang->execution->fixFirstWithLeft          = 'Update hours left too';
$lang->execution->unfinishedExecution         = "This {$lang->executionCommon} has ";
$lang->execution->unfinishedTask            = "[%s] unfinished tasks. ";
$lang->execution->unresolvedBug             = "[%s] unresolved bugs. ";
$lang->execution->projectNotEmpty           = 'Project cannot be empty.';

$lang->execution->charts = new stdclass();
$lang->execution->charts->burn = new stdclass();
$lang->execution->charts->burn->graph = new stdclass();
$lang->execution->charts->burn->graph->caption      = " Burndown Chart";
$lang->execution->charts->burn->graph->xAxisName    = "Date";
$lang->execution->charts->burn->graph->yAxisName    = "Hour";
$lang->execution->charts->burn->graph->baseFontSize = 12;
$lang->execution->charts->burn->graph->formatNumber = 0;
$lang->execution->charts->burn->graph->animation    = 0;
$lang->execution->charts->burn->graph->rotateNames  = 1;
$lang->execution->charts->burn->graph->showValues   = 0;
$lang->execution->charts->burn->graph->reference    = 'Ideal';
$lang->execution->charts->burn->graph->actuality    = 'Actual';

$lang->execution->placeholder = new stdclass();
$lang->execution->placeholder->code      = "Abbreviation of {$lang->executionCommon} name";
$lang->execution->placeholder->totalLeft = "Hours estimated on the first day of the {$lang->executionCommon}.";

$lang->execution->selectGroup = new stdclass();
$lang->execution->selectGroup->done = '(Done)';

$lang->execution->orderList['order_asc']  = "Story Rank Ascending";
$lang->execution->orderList['order_desc'] = "Story Rank Descending";
$lang->execution->orderList['pri_asc']    = "Story Priority Ascending";
$lang->execution->orderList['pri_desc']   = "Story Priority Descending";
$lang->execution->orderList['stage_asc']  = "Story Phase Ascending";
$lang->execution->orderList['stage_desc'] = "Story Phase Descending";

$lang->execution->kanban        = "Kanban";
$lang->execution->kanbanSetting = "Settings";
$lang->execution->resetKanban   = "Reset";
$lang->execution->printKanban   = "Print";
$lang->execution->bugList       = "Bugs";

$lang->execution->kanbanHideCols   = 'Closed & Cancelled Columns';
$lang->execution->kanbanShowOption = 'Unfold';
$lang->execution->kanbanColsColor  = 'Customize Column Color';

$lang->kanbanSetting = new stdclass();
$lang->kanbanSetting->noticeReset     = 'Do you want to reset Kanban?';
$lang->kanbanSetting->optionList['0'] = 'Hide';
$lang->kanbanSetting->optionList['1'] = 'Show';

$lang->printKanban = new stdclass();
$lang->printKanban->common  = 'Print Kanban';
$lang->printKanban->content = 'Content';
$lang->printKanban->print   = 'Print';

$lang->printKanban->taskStatus = 'Status';

$lang->printKanban->typeList['all']       = 'All';
$lang->printKanban->typeList['increment'] = 'Increment';

$lang->execution->typeList['']       = '';
$lang->execution->typeList['stage']  = 'Stage';
$lang->execution->typeList['sprint'] = $lang->executionCommon;

$lang->execution->featureBar['task']['all']          = $lang->execution->allTasks;
$lang->execution->featureBar['task']['unclosed']     = $lang->execution->unclosed;
$lang->execution->featureBar['task']['assignedtome'] = $lang->execution->assignedToMe;
$lang->execution->featureBar['task']['myinvolved']   = $lang->execution->myInvolved;
$lang->execution->featureBar['task']['delayed']      = 'Delayed';
$lang->execution->featureBar['task']['needconfirm']  = 'Changed';
$lang->execution->featureBar['task']['status']       = $lang->execution->statusSelects[''];

$lang->execution->featureBar['all']['all']       = $lang->execution->all;
$lang->execution->featureBar['all']['undone']    = $lang->execution->undone;
$lang->execution->featureBar['all']['wait']      = $lang->execution->statusList['wait'];
$lang->execution->featureBar['all']['doing']     = $lang->execution->statusList['doing'];
$lang->execution->featureBar['all']['suspended'] = $lang->execution->statusList['suspended'];
$lang->execution->featureBar['all']['closed']    = $lang->execution->statusList['closed'];

$lang->execution->treeLevel = array();
$lang->execution->treeLevel['all']   = 'Expand All';
$lang->execution->treeLevel['root']  = 'Collapse All';
$lang->execution->treeLevel['task']  = 'Stories&Tasks';
$lang->execution->treeLevel['story'] = 'Only Stories';

$lang->execution->action = new stdclass();
$lang->execution->action->opened  = '$date, created by <strong>$actor</strong>. $extra' . "\n";
$lang->execution->action->managed = '$date, managed by <strong>$actor</strong>. $extra' . "\n";
$lang->execution->action->edited  = '$date, edited by <strong>$actor</strong>. $extra' . "\n";
$lang->execution->action->extra   = 'Linked products is %s.';
/* extension */
$lang->extension->common           = 'Extension';
$lang->extension->browse           = 'Extensions';
$lang->extension->install          = 'Install Extension';
$lang->extension->installAuto      = 'Auto Installation';
$lang->extension->installForce     = 'Force Installation';
$lang->extension->uninstall        = 'Uninstall';
$lang->extension->uninstallAction  = 'Uninstall Extension';
$lang->extension->activate         = 'Activate';
$lang->extension->activateAction   = 'Activate Extension';
$lang->extension->deactivate       = 'Deactivate';
$lang->extension->deactivateAction = 'Deactivate Extension';
$lang->extension->obtain           = 'Get Extension';
$lang->extension->view             = 'Detail';
$lang->extension->downloadAB       = 'Download';
$lang->extension->upload           = 'Local Installation';
$lang->extension->erase            = 'Erase';
$lang->extension->eraseAction      = 'Erase Extension';
$lang->extension->upgrade          = 'Upgrade Extension';
$lang->extension->agreeLicense     = 'I agree to the license.';

$lang->extension->browseAction = 'Extension List';

$lang->extension->structure        = 'Structure';
$lang->extension->structureAction  = 'Extension Structure';
$lang->extension->installed        = 'Installed';
$lang->extension->deactivated      = 'Deactivated';
$lang->extension->available        = 'Downloaded';

$lang->extension->name             = 'Extension Name';
$lang->extension->code             = 'Code';
$lang->extension->desc             = 'Description';
$lang->extension->type             = 'Type';
$lang->extension->dirs             = 'Installation Directory';
$lang->extension->files            = 'Installation Files';
$lang->extension->status           = 'Status';
$lang->extension->version          = 'Version';
$lang->extension->latest           = '<small>Latest:<strong><a href="%s" target="_blank" class="extension">%s</a></strong>，need zentao <a href="https://api.zentao.net/goto.php?item=latest" target="_blank"><strong>%s</strong></small>';
$lang->extension->author           = 'Author';
$lang->extension->license          = 'License';
$lang->extension->site             = 'Website';
$lang->extension->downloads        = 'Downloads';
$lang->extension->compatible       = 'Compatibility';
$lang->extension->grade            = 'Score';
$lang->extension->depends          = 'Dependency';
$lang->extension->expiredDate      = 'Expire';
$lang->extension->zentaoCompatible = 'Compatible Version';
$lang->extension->installedTime    = 'Installed Time';
$lang->extension->life             = 'lifetime';

$lang->extension->publicList[0] = 'Manual';
$lang->extension->publicList[1] = 'Auto';

$lang->extension->compatibleList[0] = 'Unknown';
$lang->extension->compatibleList[1] = 'Compatible';

$lang->extension->obtainOfficial[0] = 'Third-party';
$lang->extension->obtainOfficial[1] = 'Official';

$lang->extension->byDownloads   = 'Downloads';
$lang->extension->byAddedTime   = 'Latest Added';
$lang->extension->byUpdatedTime = 'Latest Update';
$lang->extension->bySearch      = 'Search';
$lang->extension->byCategory    = 'Category';

$lang->extension->installFailed            = '%s failed. Error:';
$lang->extension->uninstallFailed          = 'Uninstallation failed. Error:';
$lang->extension->confirmUninstall         = 'Uninstallation will delete or change related database. Do you want to uninstall it?';
$lang->extension->installFinished          = 'Congrats! The extension is %sed!';
$lang->extension->refreshPage              = 'Refresh';
$lang->extension->uninstallFinished        = 'This extension is uninstalled.';
$lang->extension->deactivateFinished       = 'This extension is deactivated.';
$lang->extension->activateFinished         = 'This extension is activated.';
$lang->extension->eraseFinished            = 'This extension is removed.';
$lang->extension->unremovedFiles           = 'File or direcroty cannot be deleted. You have to manually delete';
$lang->extension->executeCommands          = '<h3>Execute command lines below to fix the problem:</h3>';
$lang->extension->successDownloadedPackage = 'This extension is downloaded!';
$lang->extension->successCopiedFiles       = 'File is copied!';
$lang->extension->successInstallDB         = 'Database is installed!';
$lang->extension->viewInstalled            = 'Installed Extensions';
$lang->extension->viewAvailable            = 'Available Extensions';
$lang->extension->viewDeactivated          = 'Deactivated Extensions';
$lang->extension->backDBFile               = 'This extension data has been backed up to %s!';
$lang->extension->noticeOkFile             = '<h5>For security reasons, your Admin account has to be confirmed.</h5>
    <h5>Plese login your ZenTao server and create %s.</h5>
    <p>Note</p>
    <ol>
    <li>The file you will create is empty.</li>
    <li>If such file exists, delete it first, and then create one.</li>
    </ol>'; 

$lang->extension->upgradeExt     = 'Upgrade';
$lang->extension->installExt     = 'Install';
$lang->extension->upgradeVersion = '(Upgrade %s to %s.)';

$lang->extension->waring = 'Warning!';

$lang->extension->errorOccurs                  = 'Error:';
$lang->extension->errorGetModules              = 'Get Extension Category from www.zentao.pm failed. It could be network error. Plase check your network and refresh it.';
$lang->extension->errorGetExtensions           = 'Get Extensions from www.zentao.pm failed. It could be network error. Please go to <a href="https://www.zentao.net/extension/" target="_blank" class="alert-link">www.zentao.pm</a> and download the extension, and then upload it to install.';
$lang->extension->errorDownloadPathNotFound    = 'Extension download path <strong>%s</strong> is not found.<br /> Please run <strong>mkdir -p %s</strong> in Linux to fix it.';
$lang->extension->errorDownloadPathNotWritable = 'Extension download path <strong>%s</strong>is not writable. <br />Please run <strong>sudo chmod 777 %s</strong> in Linux to fix it.';
$lang->extension->errorPackageFileExists       = '<strong>%s</strong> exists in the download path.<h5> Please %s it again, <a href="%s" class="alert-link">CLICK HERE</a></h5>';
$lang->extension->errorDownloadFailed          = 'Download failed. Please try it again. If still not OK, try to download it manually and upload it to install.';
$lang->extension->errorMd5Checking             = 'Incomplete File. Please download it again. If still not OK, try to download it manually and upload it to install.';
$lang->extension->errorCheckIncompatible       = 'Incompatible with your ZenTao. It may not be used %s later.<h5>You can choose to <a href="%s" class="btn btn-sm">force%s</a> or <a href="#" onclick=parent.location.href="%s" class="btn btn-sm">cancel</a></h5>';
$lang->extension->errorFileConflicted          = '<br />%s <h5> is conflicted with others. Choose <a href="%s" class="btn btn-sm">Override</a> or <a href="#" onclick=parent.location.href="%s" class="btn btn-sm">Cancel</a></h5>';
$lang->extension->errorPackageNotFound         = '<strong>%s </strong> is not found. Downloading might be failed. Please download it again.';
$lang->extension->errorTargetPathNotWritable   = '<strong>%s </strong> is not writable.';
$lang->extension->errorTargetPathNotExists     = '<strong>%s </strong> is not found.';
$lang->extension->errorInstallDB               = 'Database report execution failed. Error: %s';
$lang->extension->errorConflicts               = 'Conflicted with “%s”!';
$lang->extension->errorDepends                 = 'Dependent extension has not been installed or the version is incorrect:<br /><br /> %s';
$lang->extension->errorIncompatible            = 'Incompatible with your ZenTao.';
$lang->extension->errorUninstallDepends        = '“%s” is dependent on this extension. Please do not uninstall it.';
$lang->extension->errorExtracted               = 'The package file %s extracted failed. The error is:<br />%s';
$lang->extension->errorFileNotEmpty            = 'Please upload the file.';
/* file */
$lang->file = new stdclass();
$lang->file->common        = 'File';
$lang->file->uploadImages  = 'Batch Upload Images';
$lang->file->download      = 'Download Files';
$lang->file->uploadDate    = 'Uploaded';
$lang->file->edit          = 'Rename File';
$lang->file->inputFileName = 'Enter File Name';
$lang->file->delete        = 'Delete File';
$lang->file->label         = 'Label:';
$lang->file->maxUploadSize = "<span class='text-red'>%s</span>";
$lang->file->applyTemplate = "Apply Template";
$lang->file->tplTitle      = "Template Name";
$lang->file->tplTitleAB    = "Templates";
$lang->file->setPublic     = "Set Public Template";
$lang->file->exportFields  = "Fields";
$lang->file->exportRange   = "Data";
$lang->file->defaultTPL    = "Default";
$lang->file->setExportTPL  = "Settings";
$lang->file->preview       = "Preview";
$lang->file->addFile       = 'Add';
$lang->file->beginUpload   = 'Click to Upload';
$lang->file->uploadSuccess = 'Uploaded!';

$lang->file->pathname  = 'Path Name';
$lang->file->title     = 'Title';
$lang->file->fileName  = 'File Name';
$lang->file->untitled  = 'Untitled';
$lang->file->extension = 'Format';
$lang->file->size      = 'Size';
$lang->file->encoding  = 'Encoding';
$lang->file->addedBy   = 'AddedBy';
$lang->file->addedDate = 'Added';
$lang->file->downloads = 'Downloads';
$lang->file->extra     = 'Comment';

$lang->file->dragFile            = 'Drag images here.';
$lang->file->childTaskTips       = 'It\'s a child task if there is a \'>\' before the name.';
$lang->file->uploadImagesExplain = 'Note: upload .jpg, .jpeg, .gif, or .png images. The image name will be the name of the story and the image will be the description.';
$lang->file->saveAndNext         = 'Save and Next';
$lang->file->importPager         = 'Total: <strong>%s</strong>. Page <strong>%s</strong> of <strong>%s</strong>';
$lang->file->importSummary       = "Import <strong id='allCount'>%s</strong> items  You can <strong>%s</strong> items/page, so you have to import <strong id='times'>%s</strong> times.";

$lang->file->errorNotExists   = "<span class='text-red'>'%s' is not found.</span>";
$lang->file->errorCanNotWrite = "<span class='text-red'>'%s' is not writable. Please change its permission. Enter <span class='code'>sudo chmod -R 777 '%s'</span></span> in Linux.";
$lang->file->confirmDelete    = " Do you want to delete it?";
$lang->file->errorFileSize    = " File size exceeds the limit. It cannot be uploaded!";
$lang->file->errorFileUpload  = " Uploading failed. The file size might exceeds the limit.";
$lang->file->errorFileFormate = " Uploading failed. The file format is not in the prescribed scope.";
$lang->file->errorFileMove    = " Uploading failed. An error prompts when moving file.";
$lang->file->dangerFile       = " The file failed to be uploaded for security reasons.";
$lang->file->errorSuffix      = 'Format is incorrect. .zip files ONLY!';
$lang->file->errorExtract     = 'Extracting files failed. Files might be damaged or there might be invalid files in the zip package.';
$lang->file->fileNotFound     = 'The file was not found. The physical file might have been deleted!';
$lang->file->fileContentEmpty = 'The file is empty. Check the file and upload it again.';
/* git */
$lang->git->common  = 'Git';
$lang->git->cat     = 'View Source Code';
$lang->git->diff    = 'Compare Source Code';
$lang->git->apiSync = 'API: Synchronize Git Logs';
/* group */
$lang->group->common             = 'Privilege';
$lang->group->browse             = 'Privilege Group';
$lang->group->create             = 'Create Group';
$lang->group->edit               = 'Edit Group';
$lang->group->copy               = 'Copy Group';
$lang->group->delete             = 'Delete Group';
$lang->group->manageView         = 'Manage Sight';
$lang->group->managePriv         = 'Manage Privileges';
$lang->group->managePrivByGroup  = 'Manage Privileges by Group';
$lang->group->managePrivByModule = 'Manage Privileges by Module';
$lang->group->byModuleTips       = '<span class="tips">(Press Shift/Ctrl to Multi-select)</span>';
$lang->group->manageMember       = 'Manage Members';
$lang->group->manageProjectAdmin = 'Manage Program Admins';
$lang->group->confirmDelete      = 'Do you want to delete this user group?';
$lang->group->successSaved       = 'Saved.';
$lang->group->errorNotSaved      = 'Failed. Please select actions and groups.';
$lang->group->viewList           = 'Access Sight';
$lang->group->manageProject      = 'Manage Project';
$lang->group->programList        = 'Access Program';
$lang->group->productList        = 'Access Product';
$lang->group->projectList        = 'Access Project';
$lang->group->dynamic            = 'Access Dynamics';
$lang->group->noticeVisit        = 'Blank means no access limit.';
$lang->group->noneProgram        = "No Program";
$lang->group->noneProduct        = "No {$lang->productCommon}";
$lang->group->noneProject        = "No {$lang->executionCommon}";

$lang->group->id       = 'ID';
$lang->group->name     = 'Group';
$lang->group->desc     = 'Description';
$lang->group->role     = 'Role';
$lang->group->acl      = 'Right';
$lang->group->users    = 'Group Members';
$lang->group->module   = 'Module';
$lang->group->method   = 'Method';
$lang->group->priv     = 'Privilege Group';
$lang->group->option   = 'Option';
$lang->group->inside   = 'Group Users';
$lang->group->outside  = 'Other Users';
$lang->group->limited  = 'Limited Users';
$lang->group->other    = 'Others';
$lang->group->all      = 'All Privileges';

$lang->group->copyOptions['copyPriv'] = 'Copy Privileges';
$lang->group->copyOptions['copyUser'] = 'Copy Users';

$lang->group->versions['']          = 'History';
$lang->group->versions['15_0_rc1']  = 'ZenTao15.0.rc1';
$lang->group->versions['12_5']      = 'ZenTao12.5';
$lang->group->versions['12_3']      = 'ZenTao12.3';
$lang->group->versions['11_6_2']    = 'ZenTao11.6.2';
$lang->group->versions['10_6']      = 'ZenTao10.6';
$lang->group->versions['10_1']      = 'ZenTao10.1';
$lang->group->versions['10_0_alpha']= 'ZenTao10.0.alpha';
$lang->group->versions['9_8']       = 'ZenTao9.8';
$lang->group->versions['9_6']       = 'ZenTao9.6';
$lang->group->versions['9_5']       = 'ZenTao9.5';
$lang->group->versions['9_2']       = 'ZenTao9.2';
$lang->group->versions['9_1']       = 'ZenTao9.1';
$lang->group->versions['9_0']       = 'ZenTao9.0';
$lang->group->versions['8_4']       = 'ZenTao8.4';
$lang->group->versions['8_3']       = 'ZenTao8.3';
$lang->group->versions['8_2_beta']  = 'ZenTao8.2.beta';
$lang->group->versions['8_0_1']     = 'ZenTao8.0.1';
$lang->group->versions['8_0']       = 'ZenTao8.0';
$lang->group->versions['7_4_beta']  = 'ZenTao7.4.beta';
$lang->group->versions['7_3']       = 'ZenTao7.3';
$lang->group->versions['7_2']       = 'ZenTao7.2';
$lang->group->versions['7_1']       = 'ZenTao7.1';
$lang->group->versions['6_4']       = 'ZenTao6.4';
$lang->group->versions['6_3']       = 'ZenTao6.3';
$lang->group->versions['6_2']       = 'ZenTao6.2';
$lang->group->versions['6_1']       = 'ZenTao6.1';
$lang->group->versions['5_3']       = 'ZenTao5.3';
$lang->group->versions['5_1']       = 'ZenTao5.1';
$lang->group->versions['5_0_beta2'] = 'ZenTao5.0.beta2';
$lang->group->versions['5_0_beta1'] = 'ZenTao5.0.beta1';
$lang->group->versions['4_3_beta']  = 'ZenTao4.3.beta';
$lang->group->versions['4_2_beta']  = 'ZenTao4.2.beta';
$lang->group->versions['4_1']       = 'ZenTao4.1';
$lang->group->versions['4_0_1']     = 'ZenTao4.0.1';
$lang->group->versions['4_0']       = 'ZenTao4.0';
$lang->group->versions['4_0_beta2'] = 'ZenTao4.0.beta2';
$lang->group->versions['4_0_beta1'] = 'ZenTao4.0.beta1';
$lang->group->versions['3_3']       = 'ZenTao3.3';
$lang->group->versions['3_2_1']     = 'ZenTao3.2.1';
$lang->group->versions['3_2']       = 'ZenTao3.2';
$lang->group->versions['3_1']       = 'ZenTao3.1';
$lang->group->versions['3_0_beta2'] = 'ZenTao3.0.beta2';
$lang->group->versions['3_0_beta1'] = 'ZenTao3.0.beta1';
$lang->group->versions['2_4']       = 'ZenTao2.4';
$lang->group->versions['2_3']       = 'ZenTao2.3';
$lang->group->versions['2_2']       = 'ZenTao2.2';
$lang->group->versions['2_1']       = 'ZenTao2.1';
$lang->group->versions['2_0']       = 'ZenTao2.0';
$lang->group->versions['1_5']       = 'ZenTao1.5';
$lang->group->versions['1_4']       = 'ZenTao1.4';
$lang->group->versions['1_3']       = 'ZenTao1.3';
$lang->group->versions['1_2']       = 'ZenTao1.2';
$lang->group->versions['1_1']       = 'ZenTao1.1';
$lang->group->versions['1_0_1']     = 'ZenTao1.0.1';

include (dirname(__FILE__) . '/resource.php');
/* index */
$lang->index->common      = 'Home';
$lang->index->index       = 'Home';
$lang->index->pleaseInput = 'Please input';
$lang->index->search      = 'Search';

$lang->index->app = new stdClass();
$lang->index->app->open   = 'Open';
$lang->index->app->reload = 'Reload';
$lang->index->app->close  = 'Close';

$lang->index->upgradeVersion = 'Upgradable version';
$lang->index->upgradeNow     = 'Upgrade now';
$lang->index->upgrade        = 'Upgrade';
$lang->index->log            = 'Log';
$lang->index->detailed       = 'Details';
$lang->index->website        = 'Please visit the official website';
/* install */
$lang->install = new stdclass();

$lang->install->common = 'Install';
$lang->install->next   = 'Next';
$lang->install->pre    = 'Back';
$lang->install->reload = 'Refresh';
$lang->install->error  = 'Error ';

$lang->install->officeDomain = 'https://www.zentao.pm';

$lang->install->start            = 'Start';
$lang->install->keepInstalling   = 'Continue installing this version';
$lang->install->seeLatestRelease = 'View the latest version';
$lang->install->welcome          = 'Thanks for choosing ZenTao!';
$lang->install->license          = 'ZenTao is under Z PUBLIC LICENSE(ZPL) 1.2';
$lang->install->desc             = <<<EOT
ZenTao ALM is an open source software released under <a href='http://zpl.pub/page/zplv12.html' target='_blank'>Z Public License</a>. It integrates with Product Management, Project Management, Test Management, Document Management, CI Management, etc. ZenTao is a perfect choice for managing software development projects.

ZenTao ALM is built on PHP + MySQL + zentaoPHP which is an independent framework developed by EasyCorp. Third-party developers/organizations can develop extensions or customize ZenTao accordingly.
EOT;
$lang->install->links = <<<EOT
ZenTao ALM is developed by <strong><a href='https://en.easysoft.ltd' target='_blank' class='text-danger'>EasyCorp</a></strong>.
Official Website: <a href='https://www.zentao.pm' target='_blank'>https://www.zentao.pm</a>
Technical Support: <a href='https://www.zentao.pm/forum/' target='_blank'>https://www.zentao.pm/forum/</a>
LinkedIn: <a href='https://www.linkedin.com/company/1156596/' target='_blank'>EasyCorp</a>
Facebook: <a href='https://www.facebook.com/natureeasysoft' target='_blank'>EasyCorp</a>
Twitter: <a href='https://twitter.com/ZentaoA' target='_blank'>ZenTao ALM</a>

You are installing ZenTao <strong class='text-danger'>%s</strong>.
EOT;

$lang->install->newReleased = "<strong class='text-danger'>Notice</strong>: Official Website has the latest version<strong class='text-danger'>%s</strong>, released on %s.";
$lang->install->or          = 'Or';
$lang->install->checking    = 'System Checkup';
$lang->install->ok          = 'Passed(√)';
$lang->install->fail        = 'Failed(×)';
$lang->install->loaded      = 'Loaded';
$lang->install->unloaded    = 'Not loaded';
$lang->install->exists      = 'Found ';
$lang->install->notExists   = 'Not found ';
$lang->install->writable    = 'Writable ';
$lang->install->notWritable = 'Not writable ';
$lang->install->phpINI      = 'PHP ini File';
$lang->install->checkItem   = 'Item';
$lang->install->current     = 'Current Setting';
$lang->install->result      = 'Result';
$lang->install->action      = 'Action';

$lang->install->phpVersion = 'PHP Version';
$lang->install->phpFail    = 'PHP Version should be 5.2.0+';

$lang->install->pdo          = 'PDO';
$lang->install->pdoFail      = 'Edit php.ini to load PDO extension.';
$lang->install->pdoMySQL     = 'PDO_MySQL';
$lang->install->pdoMySQLFail = 'Edit php.ini to load PDO_MySQL extension.';
$lang->install->json         = 'JSON Extension';
$lang->install->jsonFail     = 'Edit php.ini to load JSON extension.';
$lang->install->openssl      = 'OpenSSL Extension';
$lang->install->opensslFail  = 'Edit php.ini to load openssl extension.';
$lang->install->mbstring     = 'Mbstring Extension';
$lang->install->mbstringFail = 'Edit php.ini to load mbstring extension.';
$lang->install->zlib         = 'Zlib Extension';
$lang->install->zlibFail     = 'Edit php.ini to load zlib extension.';
$lang->install->curl         = 'Curl Extension';
$lang->install->curlFail     = 'Edit php.ini to load curl extension.';
$lang->install->filter       = 'Filter Extension';
$lang->install->filterFail   = 'Edit the php.ini file to load filter extension.';
$lang->install->gd           = 'GD Extension';
$lang->install->gdFail       = 'Edit the php.ini file to load gd extension.';
$lang->install->iconv        = 'Iconv Extension';
$lang->install->iconvFail    = 'Edit the php.ini file to load iconv extension.';
$lang->install->tmpRoot      = 'Temp Directory';
$lang->install->dataRoot     = 'Uploaded File Directory';
$lang->install->session      = 'Session Save Path';
$lang->install->sessionFail  = 'Edit the php.ini file to set session.save_path.';
$lang->install->mkdirWin     = '<p>%s directory has to be created.<br /> Run <code>mkdir %s</code> to create it.</p>';
$lang->install->chmodWin     = ' "%s" privilege has to be changed.';
$lang->install->mkdirLinux   = '<p>%s directory has to be created.<br /> Run <code>mkdir -p %s</code> to create it.</p>';
$lang->install->chmodLinux   = ' "%s" permison has to be changed.<br /> Run <code>chmod o=rwx -R %s</code> to change it.';

$lang->install->timezone       = 'Set Timezone';
$lang->install->defaultLang    = 'Default Language';
$lang->install->dbHost         = 'Database Host';
$lang->install->dbHostNote     = 'If 127.0.0.1 is not accessible, try localhost.';
$lang->install->dbPort         = 'Host Port';
$lang->install->dbEncoding     = 'Database Charset';
$lang->install->dbUser         = 'Database Username';
$lang->install->dbPassword     = 'Database Password';
$lang->install->dbName         = 'Database Name';
$lang->install->dbPrefix       = 'Table Prefix';
$lang->install->clearDB        = 'Clean up existing data';
$lang->install->importDemoData = 'Import Demo Data';
$lang->install->working        = 'Operation Mode';

$lang->install->requestTypes['GET']       = 'GET';
$lang->install->requestTypes['PATH_INFO'] = 'PATH_INFO';

$lang->install->workingList['full']      = 'Application Lifecycle Management';

$lang->install->errorConnectDB      = 'Connection to the database Failed. ';
$lang->install->errorDBName         = 'Database name should exclude “.” ';
$lang->install->errorCreateDB       = 'Failed to create the database.';
$lang->install->errorTableExists    = 'The data table has existed. If ZenTao has been installed before, please return to the previous step and clear data, then continue the installation.';
$lang->install->errorCreateTable    = 'Failed to create the table.';
$lang->install->errorImportDemoData = 'Failed to import the demo data.';

$lang->install->setConfig          = 'Create config file';
$lang->install->key                = 'Item';
$lang->install->value              = 'Value';
$lang->install->saveConfig         = 'Save config file';
$lang->install->save2File          = '<div class="alert alert-warning">Copy the content in the text box above and save it to "<strong> %s </strong>". You can change this configuration file later.</div>';
$lang->install->saved2File         = 'The configuration file has been saved to " <strong>%s</strong> ". You can change this file later.';
$lang->install->errorNotSaveConfig = 'The configuration file is not saved.';

$lang->install->getPriv            = 'Set Admin';
$lang->install->company            = 'Company Name';
$lang->install->account            = 'Admin Account';
$lang->install->password           = 'Admin Password';
$lang->install->errorEmptyPassword = 'Password should not be blank.';

$lang->install->groupList['ADMIN']['name']   = 'Admin';
$lang->install->groupList['ADMIN']['desc']   = 'System Admin';
$lang->install->groupList['DEV']['name']     = 'Dev';
$lang->install->groupList['DEV']['desc']     = 'Developer';
$lang->install->groupList['QA']['name']      = 'Test';
$lang->install->groupList['QA']['desc']      = 'Tester';
$lang->install->groupList['PM']['name']      = 'PM';
$lang->install->groupList['PM']['desc']      = 'Project Manager';
$lang->install->groupList['PO']['name']      = 'PO';
$lang->install->groupList['PO']['desc']      = 'Product Owner';
$lang->install->groupList['TD']['name']      = 'Dev Manager';
$lang->install->groupList['TD']['desc']      = 'Development Manager';
$lang->install->groupList['PD']['name']      = 'PD';
$lang->install->groupList['PD']['desc']      = 'Product Director';
$lang->install->groupList['QD']['name']      = 'QD';
$lang->install->groupList['QD']['desc']      = 'Test Director';
$lang->install->groupList['TOP']['name']     = 'Senior';
$lang->install->groupList['TOP']['desc']     = 'Senior Manager';
$lang->install->groupList['OTHERS']['name']  = 'Others';
$lang->install->groupList['OTHERS']['desc']  = 'other users';
$lang->install->groupList['LIMITED']['name'] = 'Limited User';
$lang->install->groupList['LIMITED']['desc'] = 'Users can only edit contents related to themselves.';

$lang->install->cronList[''] = 'Monitor Cron';
$lang->install->cronList['moduleName=execution&methodName=computeBurn'] = 'Update Burndown Chart';
$lang->install->cronList['moduleName=report&methodName=remind']         = 'Daily Task Reminder';
$lang->install->cronList['moduleName=svn&methodName=run']               = 'Synchronize SVN';
$lang->install->cronList['moduleName=git&methodName=run']               = 'Synchronize GIT';
$lang->install->cronList['moduleName=backup&methodName=backup']         = 'Backup data&file';
$lang->install->cronList['moduleName=mail&methodName=asyncSend']        = 'Asynchronize sending emails';
$lang->install->cronList['moduleName=webhook&methodName=asyncSend']     = 'Asynchronize sending webhook';
$lang->install->cronList['moduleName=admin&methodName=deleteLog']       = 'Delete overdue logs';
$lang->install->cronList['moduleName=todo&methodName=createCycle']      = 'Create recurring todos';
$lang->install->cronList['moduleName=ci&methodName=initQueue']          = 'Create recurring tasks';
$lang->install->cronList['moduleName=ci&methodName=checkCompileStatus'] = 'Synchronize Jenkins Status';
$lang->install->cronList['moduleName=ci&methodName=exec']               = 'Execute Jenkins';

$lang->install->success  = "Installed!";
$lang->install->login    = 'ZenTao Login';
$lang->install->register = 'ZenTao Community Signup';

$lang->install->joinZentao = <<<EOT
<p>You have installed ZenTao %s.<strong class='text-danger'> Please delete install.php</strong>.</p><p>Note: In order to get the latest news of ZenTao, please sign up on ZenTao Community(<a href='https://www.zentao.pm' class='alert-link' target='_blank'>www.zentao.pm</a>).</p>
EOT;

$lang->install->product = array('chanzhi', 'zdoo', 'ydisk', 'meshiot');

$lang->install->promotion = "Products also from EasyCorp:";

$lang->install->chanzhi       = new stdclass();
$lang->install->chanzhi->name = 'ZSITE';
$lang->install->chanzhi->logo = 'images/main/chanzhi.ico';
$lang->install->chanzhi->url  = 'https://www.zsite.net';
$lang->install->chanzhi->desc = <<<EOD
<ul>
  <li>Article, Blog, Manual, Member, Shop, Forum, Feedback</li>
  <li>Customize page at will by Theme, Effect, Widget, CSS, JS and layout</li>
  <li>Support both desktop and mobile in one system</li>
  <li>Highly optimized for search engines</li>
</ul>
EOD;

$lang->install->zdoo = new stdclass();
$lang->install->zdoo->name = 'ZDOO';
$lang->install->zdoo->logo = 'images/main/zdoo.ico';
$lang->install->zdoo->url  = 'https://www.zdoo.co/';
$lang->install->zdoo->desc = <<<EOD
<ul>
  <li>CRM: Customer Management and Order Tracking</li>
  <li>OA: Approve, Announce, Trip, Leave and more </li>
  <li>Project, Task and Document management </li>
  <li>Cash: Income, Expense, Transfer, Invest and Debt</li>
</ul>
EOD;














$lang->install->ydisk = new stdclass();
$lang->install->ydisk->name = 'YDisk';
$lang->install->ydisk->logo = 'images/main/ydisk.ico';
$lang->install->ydisk->url  = 'http://www.ydisk.cn';
$lang->install->ydisk->desc = <<<EOD
<ul>
  <li>Self-Hosted: deploy on your own machine</li>
  <li>Unlimited Storage: depend on your hard drive size</li>
  <li>Fast Transmission: as fast as your bandwidth allows</li>
  <li>Secure: 12 permissions for any strict settings</li>
</ul>
EOD;

$lang->install->meshiot = new stdclass();
$lang->install->meshiot->name = 'MeshIoT';
$lang->install->meshiot->logo = 'images/main/meshiot.ico';
$lang->install->meshiot->url  = 'https://www.meshiot.com';
$lang->install->meshiot->desc = <<<EOD
<ul>
  <li>Performance: one gateway can monitor 65,536 equipments</li>
  <li>Accessibility: unique radio communication protocol covers 2,500m radius</li>
  <li>Dimming System: 200+ sensors and monitors</li>
  <li>Battery Available: no changes required to any equipment on your site</li>
</ul>
EOD;
/* jenkins */
$lang->jenkins->common        = 'Jenkins';
$lang->jenkins->browse        = 'Jenkins';
$lang->jenkins->create        = 'Create Jenkins';
$lang->jenkins->edit          = 'Edit Jenkins';
$lang->jenkins->delete        = 'Delete';
$lang->jenkins->confirmDelete = 'Do you want to delete this Jenkins server?';

$lang->jenkins->browseAction = 'Jenkins List';
$lang->jenkins->deleteAction = 'Delete Jenkins';

$lang->jenkins->id       = 'ID';
$lang->jenkins->name     = 'Name';
$lang->jenkins->url      = 'URL';
$lang->jenkins->token    = 'Token';
$lang->jenkins->account  = 'Username';
$lang->jenkins->password = 'Password';

$lang->jenkins->lblCreate  = 'Create Jenkins Server';
$lang->jenkins->desc       = 'Description';
$lang->jenkins->tokenFirst = 'Use token if not empty.';
$lang->jenkins->tips       = 'Cancel "Prevent Cross Site Request Forgery exploits" when using password.';
/* job */
$lang->job->common        = 'Job';
$lang->job->browse        = 'Browse Job';
$lang->job->create        = 'Create Job';
$lang->job->edit          = 'Edit Job';
$lang->job->exec          = 'Execute Job';
$lang->job->view          = 'Execute Details';
$lang->job->delete        = 'Delete Job';
$lang->job->confirmDelete = 'Do you want to delete this job?';
$lang->job->dirChange     = 'Directory Changed';
$lang->job->buildTag      = 'Build Tag';

$lang->job->browseAction = 'Job List';

$lang->job->id          = 'ID';
$lang->job->name        = 'Name';
$lang->job->repo        = 'Repo';
$lang->job->product     = $lang->productCommon;
$lang->job->svnDir      = 'SVN Tag Watch Path';
$lang->job->jenkins     = 'Jenkins';
$lang->job->jkHost      = 'Jenkins Server';
$lang->job->buildType   = 'Build Type';
$lang->job->jkJob       = 'Jenkins Task';
$lang->job->frame       = 'Frame';
$lang->job->triggerType = 'Trigger';
$lang->job->atDay       = 'Custom Days';
$lang->job->atTime      = 'At Time';
$lang->job->lastStatus  = 'Last Status';
$lang->job->lastExec    = 'Last Executed';
$lang->job->comment     = 'Match Keywords';
$lang->job->customParam = 'Custom build parameters';
$lang->job->paramName   = 'Name';
$lang->job->paramValue  = 'Value';
$lang->job->custom      = 'Custom';

$lang->job->lblBasic = 'Basic Info';

$lang->job->example     = 'e.g.';
$lang->job->commitEx    = "Used to match the keywords used to create a compile. Multiple keywords are separated by ','";
$lang->job->cronSample  = 'e.g. 0 0 2 * * 2-6/1 means 2:00 a.m. every weekday.';
$lang->job->sendExec    = 'Send execute request success.';
$lang->job->inputName   = 'Please enter parameter name.';
$lang->job->invalidName = 'The parameter name should be letters, numbers or underlines.';

$lang->job->buildTypeList['build']          = 'Only Build';
$lang->job->buildTypeList['buildAndDeploy'] = 'Build And Deploy';
$lang->job->buildTypeList['buildAndTest']   = 'Build And Test';

$lang->job->triggerTypeList['tag']      = 'Tag';
$lang->job->triggerTypeList['commit']   = 'Code Commit';
$lang->job->triggerTypeList['schedule'] = 'Schedule';

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
$lang->job->paramValueList['$zentao_version']  = 'Current version';
$lang->job->paramValueList['$zentao_account']  = 'Current user';
$lang->job->paramValueList['$zentao_product']  = 'Current product ID';
$lang->job->paramValueList['$zentao_repopath'] = 'Current version library path';
/* mail */
$lang->mail->common        = 'Email Settings';
$lang->mail->index         = 'Email Home';
$lang->mail->detect        = 'Detect';
$lang->mail->detectAction  = 'Detect By Email Address';
$lang->mail->edit          = 'Edit Settings';
$lang->mail->save          = 'Save';
$lang->mail->saveAction    = 'Save Settings';
$lang->mail->test          = 'Email Sending Test';
$lang->mail->reset         = 'Reset';
$lang->mail->resetAction   = 'Reset Settings';
$lang->mail->resend        = 'Resend';
$lang->mail->resendAction  = 'Resend Email';
$lang->mail->browse        = 'Email List';
$lang->mail->delete        = 'Delete Email';
$lang->mail->ztCloud       = 'ZenTao CloudMail';
$lang->mail->gmail         = 'Gmail';
$lang->mail->sendCloud     = 'Notice SendCloud';
$lang->mail->batchDelete   = 'Batch Delete';
$lang->mail->sendcloudUser = 'Sync. Contact';
$lang->mail->agreeLicense  = 'Yes';
$lang->mail->disagree      = 'No';

$lang->mail->turnon      = 'Email Notification';
$lang->mail->async       = 'Async Sending';
$lang->mail->fromAddress = 'Sender Email';
$lang->mail->fromName    = 'Sender';
$lang->mail->domain      = 'ZenTao Domain';
$lang->mail->host        = 'SMTP Server';
$lang->mail->port        = 'SMTP Port';
$lang->mail->auth        = 'SMTP Validation';
$lang->mail->username    = 'SMTP Account';
$lang->mail->password    = 'SMTP Password';
$lang->mail->secure      = 'Encryption';
$lang->mail->debug       = 'Debugging';
$lang->mail->charset     = 'Charset';
$lang->mail->accessKey   = 'Access Key';
$lang->mail->secretKey   = 'Secret Key';
$lang->mail->license     = 'ZenTao CloudMail Notice';

$lang->mail->selectMTA = 'Select Type';
$lang->mail->smtp      = 'SMTP';

$lang->mail->syncedUser = 'Synchronized';
$lang->mail->unsyncUser = 'Not Synchronized';
$lang->mail->sync       = 'Synchronize';
$lang->mail->remove     = 'Remove';

$lang->mail->toList      = 'Recipient';
$lang->mail->ccList      = 'Copy to';
$lang->mail->subject     = 'Subject';
$lang->mail->createdBy   = 'Sender';
$lang->mail->createdDate = 'CreatedDate';
$lang->mail->sendTime    = 'Sent';
$lang->mail->status      = 'Status';
$lang->mail->failReason  = 'Reason';

$lang->mail->statusList['wait']   = 'Wait';
$lang->mail->statusList['sended'] = 'Sent';
$lang->mail->statusList['fail']   = 'Failed';

$lang->mail->turnonList[1]  = 'On';
$lang->mail->turnonList[0] = 'Off';

$lang->mail->asyncList[1] = 'Yes';
$lang->mail->asyncList[0] = 'No';

$lang->mail->debugList[0] = 'Off';
$lang->mail->debugList[1] = 'Normal';
$lang->mail->debugList[2] = 'High';

$lang->mail->authList[1]  = 'Yes';
$lang->mail->authList[0] = 'No';

$lang->mail->secureList['']    = 'Plain';
$lang->mail->secureList['ssl'] = 'ssl';
$lang->mail->secureList['tls'] = 'tls';

$lang->mail->more           = 'More';
$lang->mail->noticeResend   = 'The Email has been re-sent!';
$lang->mail->inputFromEmail = 'Sender Email';
$lang->mail->nextStep       = 'Next';
$lang->mail->successSaved   = 'Email settings are saved.';
$lang->mail->setForUser     = 'Could not test mail configure because the users are without mail in system. Please set mail for user first.';
$lang->mail->testSubject    = 'Testing Email';
$lang->mail->testContent    = 'Email settings are done!';
$lang->mail->successSended  = 'Sent!';
$lang->mail->confirmDelete  = 'Do you want to delete it?';
$lang->mail->sendmailTips   = 'Note: Email sender will not receive this email.';
$lang->mail->needConfigure  = 'Email settings are not found. Please do the Email settings first.';
$lang->mail->connectFail    = 'Connection to ZenTao failed.';
$lang->mail->centifyFail    = 'Verification failed. The secret key might be changed. Please try to bind again!';
$lang->mail->nofsocket      = 'fsocket related functions are deactivated. so Emails cannot be sent out. Please modify allow_url_fopen in php.ini to turn on Onopenssl, and restart Apache.';
$lang->mail->noOpenssl      = 'Please turn on Onopenssl, and restart Apache.';
$lang->mail->disableSecure  = 'No openssl. Disable ssl and tls.';
$lang->mail->sendCloudFail  = 'Failed. Reason:';
$lang->mail->sendCloudHelp  = <<<EOD



EOD;
$lang->mail->sendCloudSuccess = 'Done';
$lang->mail->closeSendCloud   = 'Close SendCloud';
$lang->mail->addressWhiteList = 'Add it to the whiltelist of your email server to avoid being blocked.';
$lang->mail->ztCloudNotice    = <<<EOD









EOD;

$lang->mail->placeholder = new stdclass();
$lang->mail->placeholder->password = 'Some Email servers require auth code, refer to your Email service provider.';
/* message */
$lang->message->common  = 'Notification';
$lang->message->index   = 'Home';
$lang->message->setting = 'Settings';
$lang->message->browser = 'Browser Notification';

$lang->message->typeList['mail']     = 'Email';
$lang->message->typeList['message']  = 'Browser Notifications';
$lang->message->typeList['webhook']  = 'Webhook';

$lang->message->browserSetting = new stdclass();
$lang->message->browserSetting->turnon   = 'Notification';
$lang->message->browserSetting->pollTime = 'Polling Time';

$lang->message->browserSetting->pollTimePlaceholder = 'Notify the time intervals for the search by seconds.';

$lang->message->browserSetting->turnonList[1] = 'On';
$lang->message->browserSetting->turnonList[0] = 'Off';
/* misc */
$lang->misc = new stdclass();
$lang->misc->common  = 'Misc';
$lang->misc->ping    = 'Ping';

$lang->misc->zentao = new stdclass();
$lang->misc->zentao->version           = 'Version %s';
$lang->misc->zentao->labels['about']   = 'About ZenTao';
$lang->misc->zentao->labels['support'] = 'Tech Support';
$lang->misc->zentao->labels['cowin']   = 'Help Us';
$lang->misc->zentao->labels['service'] = 'Service';
$lang->misc->zentao->labels['others']  = 'EasyCorp Products';

$lang->misc->zentao->icons['about']   = 'group';
$lang->misc->zentao->icons['support'] = 'question-sign';
$lang->misc->zentao->icons['cowin']   = 'hand-right';
$lang->misc->zentao->icons['service'] = 'heart';

$lang->misc->zentao->about['proversion']   = 'ZenTao Pro';
$lang->misc->zentao->about['official']     = "Official Website";
$lang->misc->zentao->about['changelog']    = "Change Log";
$lang->misc->zentao->about['license']      = "License";



$lang->misc->zentao->support['vip']        = "VIP Support";
$lang->misc->zentao->support['manual']     = "User Manual";





$lang->misc->zentao->cowin['reportbug']    = "Report Bug ";
$lang->misc->zentao->cowin['feedback']     = "Feedback";
$lang->misc->zentao->cowin['translate']    = "Translate";
$lang->misc->zentao->cowin['recommend']    = "More";


$lang->misc->zentao->service['idc']        = 'ZenTao Cloud';
$lang->misc->zentao->service['custom']     = 'ZenTao Custom';
$lang->misc->zentao->service['servicemore']= 'More';

global $config;
$lang->misc->zentao->others['chanzhi']  = "<img src='{$config->webRoot}theme/default/images/main/chanzhi.ico' /> Zsite";
$lang->misc->zentao->others['zdoo']     = "<img src='{$config->webRoot}theme/default/images/main/zdoo.ico' /> ZDOO";

$lang->misc->zentao->others['ydisk']    = "<img src='{$config->webRoot}theme/default/images/main/ydisk.ico' /> Y Disk";
$lang->misc->zentao->others['meshiot' ] = "<img src='{$config->webRoot}theme/default/images/main/meshiot.ico' /> MeshioT";

$lang->misc->mobile      = "Mobile Access";
$lang->misc->noGDLib     = "Please visit <strong>%s</strong> in the browser of your phone.";
$lang->misc->copyright   = "&copy; 2009 - 2019 <a href='https://easycorp.ltd/' target='_blank'>EasyCorp</a> Email <a href='mailto:Renee@easycorp.ltd'>Renee@easycorp.ltd</a>";
$lang->misc->checkTable  = "Check Data Table";
$lang->misc->needRepair  = "Repair Table";
$lang->misc->repairTable = "Database table might be damaged due to power outage. Please check and repair!";
$lang->misc->repairFail  = "Failed to repair. Please go to the data directory of your database, and try to execute <code>myisamchk -r -f %s.MYI</code> repair.";
$lang->misc->connectFail = "Failed to connect to the database. Error: %s，<br/> Please check the MySQL error log and troubleshoot.";
$lang->misc->tableName   = "Table Name";
$lang->misc->tableStatus = "Status";
$lang->misc->novice      = "New to ZenTao? Do you want to start ZenTao Tutorial?";
$lang->misc->showAnnual  = 'Add Annual Summary';
$lang->misc->annualDesc  = 'After version 12.0, the Annual Summary can be viewed on 『Report->Annual Summary』 page. <a href="%s" target="_blank" id="showAnnual" class="btn btn-mini btn-primary">See now</a>.';
$lang->misc->remind      = 'New feature reminders';

$lang->misc->noticeRepair = "<h5>If you are not Administrator, contact your ZenTao Administrator to repair tables.</h5>
    <h5>If you are the Administrator, login your ZenTao host and create a file named <span>%s</span>.</h5>
    <p>Note:</p>
    <ol>
    <li>Keep the file empty.</li>
    <li>If the file exists, remove it and create a new one.</li>
    </ol>";

$lang->misc->feature = new stdclass();
$lang->misc->feature->lastest  = 'Latest Version';
$lang->misc->feature->detailed = 'Detail';

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

$lang->misc->feature->all['15.0.rc3'][]    = array('title' => 'Adjust details，Fix bug', 'desc' => '');
$lang->misc->feature->all['15.0.rc2'][]    = array('title' => 'Fix Bug.', 'desc' => '');
$lang->misc->feature->all['15.0.rc1'][]    = array('title' => 'Upgrade to 15,reframe menu, add program.', 'desc' => '');
$lang->misc->feature->all['12.5.3'][]      = array('title' => 'Adjust annual data.', 'desc' => '');
$lang->misc->feature->all['12.5.2'][]      = array('title' => 'Fix Bug', 'desc' => '');
$lang->misc->feature->all['12.5.1'][]      = array('title' => 'Fix Bug', 'desc' => '');
$lang->misc->feature->all['12.5.stable'][] = array('title' => 'Fix Bug. Complete high priority story.', 'desc' => '');

$lang->misc->feature->all['12.4.4'][] = array('title'=>'Compatible with professional and enterprise editions', 'desc' => '');
$lang->misc->feature->all['12.4.3'][] = array('title'=>'Fix Bug', 'desc' => '');
$lang->misc->feature->all['12.4.2'][] = array('title'=>'Fix Bug', 'desc' => '');
$lang->misc->feature->all['12.4.1'][] = array('title'=>'Fix Bug', 'desc' => '');

$lang->misc->feature->all['12.4.stable'][] = array('title'=>'Fix Bug', 'desc' => '');

$lang->misc->feature->all['12.3.3'][] = array('title'=>'Fix Bug', 'desc' => '');
$lang->misc->feature->all['12.3.2'][] = array('title'=>'Fix workflow', 'desc' => '');
$lang->misc->feature->all['12.3.1'][] = array('title'=>'Fix bugs of high severity.', 'desc' => '');
$lang->misc->feature->all['12.3'][]   = array('title'=>'Integrate unit test, open the continuous integration closed-loop.', 'desc' => '');
$lang->misc->feature->all['12.2'][]   = array('title'=>'Add parent-child story, compatible Xuanxuan IM.', 'desc' => '');
$lang->misc->feature->all['12.1'][]   = array('title'=>'Add Integration.', 'desc' => '<p>Add integration, and build in Jenkins</p>');
$lang->misc->feature->all['12.0.1'][] = array('title'=>'Fix Bug.', 'desc' => '');

$lang->misc->feature->all['12.0'][]   = array('title'=>'Move repo function to zentao', 'desc' => '');
$lang->misc->feature->all['12.0'][]   = array('title'=>'Add annual summary', 'desc' => 'Show annual summary by role.');
$lang->misc->feature->all['12.0'][]   = array('title'=>'Optimize details and fix bug.', 'desc' => '');

$lang->misc->feature->all['11.7'][]   = array('title'=>'Optimize details and fix bug.', 'desc' => '<p>Added choices for users to choose agile or not.</p><p>Added WeChat Enterprise to the types of webhook</p><p>Added the notifier of Dingding personal messages</p>');
$lang->misc->feature->all['11.6.5'][] = array('title'=>'Fix bug.', 'desc' => '');
$lang->misc->feature->all['11.6.4'][] = array('title'=>'Optimize details and fix bug.', 'desc' => '');
$lang->misc->feature->all['11.6.3'][] = array('title'=>'Fix bug.', 'desc' => '');
$lang->misc->feature->all['11.6.2'][] = array('title'=>'Optimize details and fix bug.', 'desc' => '');
$lang->misc->feature->all['11.6.1'][] = array('title'=>'Optimize details and fix bug.', 'desc' => '');

$lang->misc->feature->all['11.6.stable'][] = array('title'=>'Improving the International Edition Interface', 'desc' => '');
$lang->misc->feature->all['11.6.stable'][] = array('title'=>'Add translate function', 'desc' => '');

$lang->misc->feature->all['11.5.2'][] = array('title'=>'Increase the security of ZenTao and increase the login password for weak password check', 'desc' => '');
$lang->misc->feature->all['11.5.1'][] = array('title'=>'Add a third-party authentication and fix bugs.', 'desc' => '');

$lang->misc->feature->all['11.5.stable'][] = array('title'=>'Optimize details and fix bug.', 'desc' => '');
$lang->misc->feature->all['11.5.stable'][] = array('title'=>'Added filters to Dynamics', 'desc' => '');
$lang->misc->feature->all['11.5.stable'][] = array('title'=>'Integrated the latest ZenTao Desktop', 'desc' => '');

$lang->misc->feature->all['11.4.1'][]      = array('title'=>'Optimize details and fix bug.', 'desc' => '');

$lang->misc->feature->all["11.4.stable"][] = array('title'=>'Optimize details and fix bug.', 'desc' => "<p>Enhanced test management.</p><p>Optimized the UI of Plan, Release, and Build linked stories and bugs.</p><p>Customize the feature whether to display files in child category.</p><p>Optimize details and fix bug.</p>");

$lang->misc->feature->all['11.3.stable'][] = array('title'=>'Optimize details and fix bug.', 'desc' => '<p>Add Child Plan to a Plan</p><p>Optimize the chosen</p><p>Add Timezone settings</p><p>Optimize Document Library and Document modules</p>');

$lang->misc->feature->all['11.2.stable'][] = array('title'=>'Optimize details and fix bug.', 'desc' => '<p>Add upgrade logs and database checkup after upgrading</p><p>Fixed ZenTao client and other bugs, and optimized details.</p>');

$lang->misc->feature->all['11.1.stable'][] = array('title'=>'Fix Bug.', 'desc' => '');

$lang->misc->feature->all['11.0.stable'][] = array('title'=>'ZenTao integrated desktop.', 'desc' => '');

$lang->misc->feature->all['10.6.stable'][] = array('title'=>'Adjust backup mechanism', 'desc' => '<p>Increase backup settings and make backup more flexible</p><p>Show backup progress</p><p>Change the backup directory</p>');
$lang->misc->feature->all['10.6.stable'][] = array('title'=>'Optimize and adjust menu', 'desc' => '<p>Adjust admin menu</p><p>Adjust the secondary menu of My and Project</p>');

$lang->misc->feature->all['10.5.stable'][] = array('title'=>'Adjust document layout', 'desc' => "<p>Adjust the layout method on the left side of the document library.</p><p>Add filter conditions at the bottom of the document library menu.</p>");
$lang->misc->feature->all['10.5.stable'][] = array('title'=>'Adjust the child task logic and optimize the display of parent-child task.', 'desc' => '');

$lang->misc->feature->all['10.4.stable'][] = array('title'=>'Optimize and adjust new interface', 'desc' => '<p>Detail page restore to the previous layout.</p><p>Refactore forms to add user pages</p><p>When use cases are executed, do not update the use case stause if the user manually chooses to pass and write the results.</p>');
$lang->misc->feature->all['10.4.stable'][] = array('title'=>'After the user machine hibernates and the login fails, the session will be refreshed again.', 'desc' => '');
$lang->misc->feature->all['10.4.stable'][] = array('title'=>'Upgrade existing interface mechanisms', 'desc' => '');

$lang->misc->feature->all['10.3.stable'][] = array('title'=>'Fix Bug.', 'desc' => '');
$lang->misc->feature->all['10.2.stable'][] = array('title'=>'ZenTao desktop is integrated!', 'desc' => '');

$lang->misc->feature->all['10.0.stable'][] = array('title'=>'New UI/UX and new experience', 'desc' => '<ol><li>My Dashboard</li><li>Dynamics</li><li>Product Home</li><li>Product Overview</li><li>Roadmap</li><li>Project Home</li><li>Project overview</li><li>Test Home</li><li>Document Home</li><li>Added work report on My Dashboard</li><li>Add/Edit/Finish todos on My Dashboard</li><li>Add prodcut report on Product Home</li><li>Add prodcut overview on Product Home</li><li>Add project report on Project Home</li><li>Add project overview on Project Home</li><li>Add Testing report on Test Home</li><li>All Product/product Home/All Project/Project Home/Test Home is moved from the right of the secondary Navbar to the left.</li><li>Kanban/Burndown/Tree/ByGroup of Project/Task has been moved from the third Navbar to the secondary one; Tree/ByGroup/Task List has been integrated to a drop-down.</li><li>Bug/Build of Project on the secondary Navbar has been integrated to a drop-down.</li><li>Display build and list by group, which is more reasonable.</li><li>Added tree to display document on the left of the page.</li><li>Added quick entry to document, including Last Update, My Doc and My Favorite</li><li>Added My Favorite to Doc module.</li></ol>');

$lang->misc->feature->all['9.8.stable'][] = array('title'=>'Message centralized management', 'desc' => '<p>Gather Mail，SMS，webhook into Message</p>');
$lang->misc->feature->all['9.8.stable'][] = array('title'=>'Add recurred Todo', 'desc' => '');
$lang->misc->feature->all['9.8.stable'][] = array('title'=>"Add Block of 'AssignedToMe'", 'desc' => '');
$lang->misc->feature->all['9.8.stable'][] = array('title'=>'Support generating reports on Test Builds', 'desc' => '');

$lang->misc->feature->all['9.7.stable'][] = array('title'=>'Optimize International package. Added Demo data.', 'desc' => '');

$lang->misc->feature->all['9.6.stable'][] = array('title'=>'Added Webhook Interface feature', 'desc' => 'Support communication with BearyChat, Dingding');
$lang->misc->feature->all['9.6.stable'][] = array('title'=>'Added Point', 'desc' => 'More skilled application, more score');
$lang->misc->feature->all['9.6.stable'][] = array('title'=>'Added multiple user task and child tasks to Project', 'desc' => '');
$lang->misc->feature->all['9.6.stable'][] = array('title'=>'Added Product line management to Product', 'desc' => '');

$lang->misc->feature->all['9.5.1'][] = array('title'=>'Added restricted actions.', 'desc' => '');

$lang->misc->feature->all['9.3.beta'][] = array('title'=>'Upgraded ZenTao framework，enhanced security', 'desc' => '');

$lang->misc->feature->all['9.1.stable'][] = array('title'=>'optimize Test View', 'desc' => '<p>Added TestSuite, CaseLibrary and QA Report</p>');
$lang->misc->feature->all['9.1.stable'][] = array('title'=>'Support Group steps of TestCase', 'desc' => '');

$lang->misc->feature->all['9.0.beta'][] = array('title'=>'ZenTao CloudMail has been added.', 'desc' => '<p>ZenTao CloudMail is a free Email service launched jointly with SendCloud. Once binded with ZenTao and passed verification, users can use this service.</p>');
$lang->misc->feature->all['9.0.beta'][] = array('title'=>'Optimized Rich Text Editor and Markdown Editor.', 'desc' => '');

$lang->misc->feature->all['8.3.stable'][] = array('title'=>'Improved Documentation.', 'desc' => '<p>Added Document Home, restructured document library, and added privileges.</p><p>Markdown Editor is supported，and privilege and version managment is added.</p>');

$lang->misc->feature->all['8.2.stable'][] = array('title'=>'Custom Home', 'desc' => '<p>You can add blocks to Dashboard and arrange the layout.</p><p> My Zone, Product, Project, and QA all support home custom mentioned before. </p>');
$lang->misc->feature->all['8.2.stable'][] = array('title'=>'Custom Navigation', 'desc' => '<p>You can decide which project show in navigation bar and the order of projects shown in the bar.</p><p> Hover on the navigation bar and a sign will show to its right. Click the sign and a dialog box "Custom Navigation" will show. Drag the block name to switch its order on navigation bar.</p>');
$lang->misc->feature->all['8.2.stable'][] = array('title'=>'Batch Add/Edit Custom', 'desc' => '<p>You can batch add and edit fields on custom pages.</p>');
$lang->misc->feature->all['8.2.stable'][] = array('title'=>'Custom Story/Task/Bug/Case', 'desc' => '<p>You can custom fileds when add a Story/Task/Bug/Case.</p>');
$lang->misc->feature->all['8.2.stable'][] = array('title'=>'Custom Export', 'desc' => '<p>You can custom fileds when export a Story/Task/Bug/Case pages. You can also save it as template for next export.</p>');
$lang->misc->feature->all['8.2.stable'][] = array('title'=>'Story/Task/Bug/Case Search ', 'desc' => '<p>On Story/Task/Bug/Case List page, you can do a combined search on Modules and Tabs.</p>');
$lang->misc->feature->all['8.2.stable'][] = array('title'=>"ZenTao Tutorial", 'desc' => '<p>Tutorial for rookies is added for first-time users to know how to use ZenTao.</p>');

$lang->misc->feature->all['7.4.beta'][] = array('title'=>'Product branch feature is added.', 'desc' => '<p>Product branch/platform is added, and its related Story/Plan/Bug/Case/Module has Branch added too.</p>');
$lang->misc->feature->all['7.4.beta'][] = array('title'=>'Release Module is improved.', 'desc' => '<p>Stop action has been added. If Stop to manage it, the Release will not show when Report Bug.</p><p>Bugs that have been omitted in the Release will be related manually.</p>');
$lang->misc->feature->all['7.4.beta'][] = array('title'=>'Create pages of Story and Bug are improved.', 'desc' => '');

$lang->misc->feature->all['7.2.stable'][] = array('title'=>'Security Enhanced', 'desc' => '<p>Admin weak passwork check is enhanced.</p><p>ok file is required when code/upload an extension.</p><p>Sensitive action requires Admin password.</p><p>Do striptags, specialchars to content entered in ZenTao.</p>');
$lang->misc->feature->all['7.2.stable'][] = array('title'=>'Details Improved', 'desc' => '');

$lang->misc->feature->all['7.1.stable'][] = array('title'=>'Framework of Cron is added.', 'desc' => 'Framework of Cron is added. Daily notification, Burndown Update, Backup, Send Email and so on have been added.');
$lang->misc->feature->all['7.1.stable'][] = array('title'=>'rpm and deb packages are provided.', 'desc' => '');

$lang->misc->feature->all['6.3.stable'][] = array('title'=>'Data table is added.', 'desc' => '<p>Fields can be customized in data table and data will be displayed according to customized fields.</p>');
$lang->misc->feature->all['6.3.stable'][] = array('title'=>'Continue improving details', 'desc' => '');
/* my */
global $config;

$lang->my->index           = 'Home';
$lang->my->todo            = 'My Todos';
$lang->my->calendar        = 'Schedule';
$lang->my->work            = 'Work';
$lang->my->contribute      = 'Contribute';
$lang->my->task            = 'My Tasks';
$lang->my->bug             = 'My Bugs';
$lang->my->testTask        = 'My Builds';
$lang->my->testCase        = 'My Cases';
$lang->my->story           = 'My Stories';
$lang->my->doc             = "My Docs";
$lang->my->createProgram   = 'Create Program';
$lang->my->project         = "My Projects";
$lang->my->execution       = "My {$lang->executionCommon}s";
$lang->my->issue           = 'My Issues';
$lang->my->risk            = 'My Risks';
$lang->my->profile         = 'My Profile';
$lang->my->dynamic         = 'My Dynamics';
$lang->my->team            = 'My Team';
$lang->my->editProfile     = 'Edit';
$lang->my->changePassword  = 'Edit Password';
$lang->my->preference      = 'Preference';
$lang->my->unbind          = 'Unbind from Zdoo';
$lang->my->manageContacts  = 'Manage Contact';
$lang->my->deleteContacts  = 'Delete Contact';
$lang->my->shareContacts   = 'Public';
$lang->my->limited         = 'Limited Actions (Users can only edit what involves them.)';
$lang->my->score           = 'My Points';
$lang->my->scoreRule       = 'Point Rules';
$lang->my->noTodo          = 'No todos yet. ';
$lang->my->noData          = 'No %s yet. ';
$lang->my->storyChanged    = "Story Changed";
$lang->my->hours           = "Hours/day";
$lang->my->uploadAvatar    = 'Upload Avatar';
$lang->my->requirement     = "My {$lang->URCommon}";
$lang->my->testtask        = 'My Test Task';
$lang->my->testcase        = 'My Case';
$lang->my->storyConcept    = 'Story Concept';

$lang->my->indexAction      = 'My Index';
$lang->my->calendarAction   = 'My Calendar';
$lang->my->workAction       = 'My Work';
$lang->my->contributeAction = 'My Contribute';
$lang->my->profileAction    = 'Profile';
$lang->my->dynamicAction    = 'Dynamic';

$lang->my->myExecutions = "My Executions";
$lang->my->name         = 'Name';
$lang->my->code         = 'Code';
$lang->my->projects     = 'Projects';
$lang->my->executions   = 'Executions';

$lang->my->executionMenu = new stdclass();
$lang->my->executionMenu->undone = 'Undone';
$lang->my->executionMenu->done   = 'Done';

$lang->my->taskMenu = new stdclass();
$lang->my->taskMenu->assignedToMe = 'AssignedToMe';
$lang->my->taskMenu->openedByMe   = 'CreatedByMe';
$lang->my->taskMenu->finishedByMe = 'FinishedByMe';
$lang->my->taskMenu->closedByMe   = 'ClosedByMe';
$lang->my->taskMenu->canceledByMe = 'CancelledByMe';

$lang->my->storyMenu = new stdclass();
$lang->my->storyMenu->assignedToMe = 'AssignedToMe';
$lang->my->storyMenu->reviewByMe   = 'ReviewByMe';
$lang->my->storyMenu->openedByMe   = 'CreatedByMe';
$lang->my->storyMenu->reviewedByMe = 'ReviewedByMe';
$lang->my->storyMenu->closedByMe   = 'ClosedByMe';

$lang->my->projectMenu = new stdclass();
$lang->my->projectMenu->doing      = 'Doing';
$lang->my->projectMenu->wait       = 'Waiting';
$lang->my->projectMenu->suspended  = 'Suspended';
$lang->my->projectMenu->closed     = 'Closed';
$lang->my->projectMenu->openedbyme = 'CreatedByMe';

$lang->my->form = new stdclass();
$lang->my->form->lblBasic   = 'Basic Info';
$lang->my->form->lblContact = 'Contact Info';
$lang->my->form->lblAccount = 'Account Info';

$lang->my->programLink   = 'Program Default Page';
$lang->my->productLink   = 'Product Default Page';
$lang->my->projectLink   = 'Project Default Page';
if($config->systemMode == 'classic') $lang->my->executionLink = $lang->executionCommon . ' Default Page';
if($config->systemMode == 'new') $lang->my->executionLink = 'Execution Default Page';

$lang->my->programLinkList = array();
$lang->my->programLinkList['program-browse']  = 'By default, you go to the program list, where you can view all of the programs';
$lang->my->programLinkList['program-project'] = 'By default, you go to the list of items in the most recent program, and you can view all items under the current program';

$lang->my->productLinkList = array();
$lang->my->productLinkList['product-index']     = 'The default access to the product home page, you can understand the company’s overall product status';
$lang->my->productLinkList['product-all']       = 'By default, you go to the product list, where you can view all the products';
$lang->my->productLinkList['product-dashboard'] = 'By default, go to the latest product dashboard to see the current product overview';
$lang->my->productLinkList['product-browse']    = 'By default, go to the list of requirements for the most recent product and see the requirements under the current product';

global $config;
$lang->my->projectLinkList = array();
$lang->my->projectLinkList['project-browse']    = 'By default, you go to the project list, where you can view all the projects';
$lang->my->projectLinkList['project-execution'] = 'Go to Project-Exection by default. You can check all information in Execution';
$lang->my->projectLinkList['project-index']     = 'By default, go to the most recent project dashboard to see the current project overview';

$lang->my->executionLinkList = array();
if($config->systemMode == 'new')
{
$lang->my->executionLinkList['execution-index'] = 'Enter the execution dashboard by default, you can understand all the execution statistics and overview';
$lang->my->executionLinkList['execution-all']   = 'Enter the execution list by default, you can view all executions';
$lang->my->executionLinkList['execution-task']  = 'By default, enter the list of the most recently executed task, and you can view the task information under the current iteration';
}
if($config->systemMode == 'classic') $lang->my->executionLinkList['execution-task'] = "By default, enter the list of the most recently {$lang->executionCommon} task, and you can view the task information under the current {$lang->executionCommon}";
/* personnel */
$lang->personnel->common     = 'Program Personnel';
$lang->personnel->accessible = 'Acess List';
$lang->personnel->invest    = 'Input Resource';
$lang->personnel->department = 'Department';
$lang->personnel->realName   = 'Name';
$lang->personnel->userName   = 'Account';
$lang->personnel->job        = 'Position';
$lang->personnel->genders    = 'Gender';
$lang->personnel->project    = 'Project';
$lang->personnel->search     = 'Search';
$lang->personnel->delete     = 'Remove';
$lang->personnel->role       = 'Role';

$lang->personnel->name          = 'User';
$lang->personnel->projects      = 'Projects';
$lang->personnel->executions    = 'Executions';
$lang->personnel->workingHours  = 'Hours';
$lang->personnel->task          = 'Task';
$lang->personnel->bug           = 'Bug';
$lang->personnel->createStories = 'Story';
$lang->personnel->risk          = 'Risk';
$lang->personnel->issue         = 'Issue';
$lang->personnel->invest       = 'Input';
$lang->personnel->left          = 'Remained';
$lang->personnel->created       = 'Created';
$lang->personnel->finished      = 'Finished';
$lang->personnel->wait          = 'Pending';
$lang->personnel->resolved      = 'Resolved';
$lang->personnel->UR            = $lang->URCommon;
$lang->personnel->SR            = $lang->SRCommon;

$lang->personnel->whitelist      = 'Whitelist';
$lang->personnel->addWhitelist   = 'Add Whitelist';
$lang->personnel->unbindWhitelist = 'Remove Whitelist';
$lang->personnel->confirmDelete  = 'Confirm removal of the user from the whitelist?';

$lang->personnel->openedPGMTip = 'The program is public and can be accessed by users with Program privileges.';
/* product */
$lang->product->index           = $lang->productCommon . ' Home';
$lang->product->browse          = 'Story List';
$lang->product->dynamic         = 'Dynamics';
$lang->product->view            = "{$lang->productCommon} Detail";
$lang->product->edit            = "Edit {$lang->productCommon}";
$lang->product->batchEdit       = 'Batch Edit';
$lang->product->create          = "Create {$lang->productCommon}";
$lang->product->delete          = "Delete {$lang->productCommon}";
$lang->product->deleted         = 'Deleted';
$lang->product->close           = "Close";
$lang->product->select          = "Select {$lang->productCommon}";
$lang->product->mine            = 'Mine:';
$lang->product->other           = 'Others:';
$lang->product->closed          = 'Closed';
$lang->product->updateOrder     = 'Order';
$lang->product->all             = "All {$lang->productCommon}s";
$lang->product->manageLine      = "Manage {$lang->productCommon} Line";
$lang->product->newLine         = "Create {$lang->productCommon} Line";
$lang->product->export          = 'Export';
$lang->product->dashboard       = "Dashboard";
$lang->product->changeProgram   = "{$lang->productCommon} confirmation of the scope of influence of adjustment of the program set";
$lang->product->addWhitelist    = 'Add Whitelist';
$lang->product->unbindWhitelist = 'Unbind Whitelist';

$lang->product->indexAction   = "All {$lang->productCommon}";
$lang->product->closeAction   = "Close {$lang->productCommon}";
$lang->product->orderAction   = "Sort {$lang->productCommon}";
$lang->product->exportAction  = "Export {$lang->productCommon}";

$lang->product->basicInfo = 'Basic Info';
$lang->product->otherInfo = 'Other Info';

$lang->product->plans       = 'Plans';
$lang->product->releases    = 'Releases';
$lang->product->docs        = 'Doc';
$lang->product->bugs        = 'Linked Bug';
$lang->product->projects    = "Linked Project";
$lang->product->executions  = "Linked {$lang->execution->common}";
$lang->product->cases       = 'Case';
$lang->product->builds      = 'Build';
$lang->product->roadmap     = "{$lang->productCommon} Roadmap";
$lang->product->doc         = "{$lang->productCommon} Documents";
$lang->product->project     = $lang->executionCommon . ' List';
$lang->product->build       = 'Build List';
$lang->product->moreProduct = "More Product";
$lang->product->projectInfo = "Projects that are linked to this {$lang->productCommon} are listed below.";

$lang->product->currentExecution      = "Current Execution";
$lang->product->activeStories         = 'Active [S]';
$lang->product->activeStoriesTitle    = 'Active Stories';
$lang->product->changedStories        = 'Changed [S]';
$lang->product->changedStoriesTitle   = 'Changed Stories';
$lang->product->draftStories          = 'Draft [S]';
$lang->product->draftStoriesTitle     = 'Draft Stories';
$lang->product->closedStories         = 'Closed [S]';
$lang->product->closedStoriesTitle    = 'Closed Stories';
$lang->product->unResolvedBugs        = 'Active [B]';
$lang->product->unResolvedBugsTitle   = 'Active Bugs';
$lang->product->assignToNullBugs      = 'Unassigned [B]';
$lang->product->assignToNullBugsTitle = 'Unassigned Bugs';

$lang->product->confirmDelete        = " Do you want to delete the {$lang->productCommon}?";
$lang->product->errorNoProduct       = "No {$lang->productCommon} is created yet!";
$lang->product->accessDenied         = "You have no access to the {$lang->productCommon}.";
$lang->product->programChangeTip     = "The projects linked with this {$lang->productCommon}: %s will be transferred to the modified program set together.";
$lang->product->notChangeProgramTip  = "The {$lang->SRCommon} of {$lang->productCommon} has been linked to the following projects, please cancel the link before proceeding";
$lang->product->confirmChangeProgram = "The projects linked with this {$lang->productCommon}: %s is also linked with other products, whether to transfer projects to the modified program set.";
$lang->product->changeProgramError   = "The {$lang->SRCommon} of this {$lang->productCommon} has been linked to the project, please unlink it before proceeding";

$lang->product->id             = 'ID';
$lang->product->program        = "Program";
$lang->product->name           = "{$lang->productCommon} Name";
$lang->product->code           = 'Code';
$lang->product->line           = "{$lang->productCommon} Line";
$lang->product->lineName       = "{$lang->productCommon} Line Name";
$lang->product->order          = 'Rank';
$lang->product->type           = 'Type';
$lang->product->typeAB         = 'Type';
$lang->product->status         = 'Status';
$lang->product->subStatus      = 'Sub Status';
$lang->product->desc           = 'Description';
$lang->product->manager        = 'Managers';
$lang->product->PO             = "{$lang->productCommon} Owner";
$lang->product->QD             = 'QA Manager';
$lang->product->RD             = 'Release Manager';
$lang->product->acl            = 'Access Control';
$lang->product->whitelist      = 'Whitelist';
$lang->product->branch         = '%s';
$lang->product->qa             = 'Test';
$lang->product->release        = 'Release';
$lang->product->allRelease     = 'All Releases';
$lang->product->maintain       = 'Maintenance';
$lang->product->latestDynamic  = 'Dynamics';
$lang->product->plan           = 'Plan';
$lang->product->iteration      = 'Iterations';
$lang->product->iterationInfo  = '%s Iteration';
$lang->product->iterationView  = 'More';
$lang->product->createdBy      = 'CreatedBy';
$lang->product->createdDate    = 'createdDate';

$lang->product->searchStory  = 'Search';
$lang->product->assignedToMe = 'AssignedToMe';
$lang->product->openedByMe   = 'CreatedByMe';
$lang->product->reviewedByMe = 'ReviewedByMe';
$lang->product->closedByMe   = 'ClosedByMe';
$lang->product->draftStory   = 'Draft';
$lang->product->activeStory  = 'Activated';
$lang->product->changedStory = 'Changed';
$lang->product->willClose    = 'ToBeClosed';
$lang->product->closedStory  = 'Closed';
$lang->product->unclosed     = 'Open';
$lang->product->unplan       = 'Unplanned';
$lang->product->viewByUser   = 'By User';

$lang->product->allStory             = 'All ';
$lang->product->allProduct           = 'All';
$lang->product->allProductsOfProject = 'All Linked ' . $lang->productCommon;

$lang->product->typeList['']         = '';
$lang->product->typeList['normal']   = 'Normal';
$lang->product->typeList['branch']   = 'Multi-Branch';
$lang->product->typeList['platform'] = 'Multi-Platform';

$lang->product->typeTips = array();
$lang->product->typeTips['branch']   = ' (for the customized context. e.g. outsourcing teams)';
$lang->product->typeTips['platform'] = ' (for cross-platform applications, e.g. IOS, Android, PC, etc.)';

$lang->product->branchName['normal']   = '';
$lang->product->branchName['branch']   = 'Branch';
$lang->product->branchName['platform'] = 'Platform';

$lang->product->statusList['']       = '';
$lang->product->statusList['normal'] = 'Normal';
$lang->product->statusList['closed'] = 'Closed';

global $config;
if($config->systemMode == 'new')
{
    $lang->product->aclList['private'] = "Private {$lang->productCommon} (Stakeholders of the respective program, team members and stakeholders of the associated project can access)";
}
else
{
    $lang->product->aclList['private'] = "Private {$lang->productCommon} ({$lang->executionCommon} team members only)";
}
$lang->product->aclList['open']    = "Default (Users with privileges to {$lang->productCommon} can access it.)";
//$lang->product->aclList['custom']  = 'Custom (Team members and Whitelist members can access it.)';

$lang->product->acls['private'] = 'Private {$lang->productCommon}';
$lang->product->acls['open']    = 'Default';

$lang->product->aclTips['open']    = "Users with privileges to {$lang->productCommon} can access it.";
$lang->product->aclTips['private'] = "{$lang->executionCommon} team members only";

$lang->product->storySummary   = "Total <strong>%s</strong> %s on this page. Estimates: <strong>%s</strong> ({$lang->hourCommon}), and Case Coverage: <strong>%s</strong>.";
$lang->product->checkedSummary = "<strong>%total%</strong> %storyCommon% selected, Esitmates: <strong>%estimate%</strong> ({$lang->hourCommon}), and Case Coverage: <strong>%rate%</strong>.";
$lang->product->noModule       = '<div>You have no modules. </div><div>Manage Now</div>';
$lang->product->noProduct      = "No {$lang->productCommon} yet. ";
$lang->product->noMatched      = '"%s" cannot be found.' . $lang->productCommon;

$lang->product->featureBar['browse']['allstory']     = $lang->product->allStory;
$lang->product->featureBar['browse']['unclosed']     = $lang->product->unclosed;
$lang->product->featureBar['browse']['assignedtome'] = $lang->product->assignedToMe;
$lang->product->featureBar['browse']['openedbyme']   = $lang->product->openedByMe;
$lang->product->featureBar['browse']['reviewedbyme'] = $lang->product->reviewedByMe;
$lang->product->featureBar['browse']['draftstory']   = $lang->product->draftStory;
$lang->product->featureBar['browse']['more']         = $lang->more;

$lang->product->featureBar['all']['all']      = $lang->product->allProduct;
$lang->product->featureBar['all']['noclosed'] = $lang->product->unclosed;
$lang->product->featureBar['all']['closed']   = $lang->product->statusList['closed'];

$lang->product->moreSelects['closedbyme']   = $lang->product->closedByMe;
$lang->product->moreSelects['activestory']  = $lang->product->activeStory;
$lang->product->moreSelects['changedstory'] = $lang->product->changedStory;
$lang->product->moreSelects['willclose']    = $lang->product->willClose;
$lang->product->moreSelects['closedstory']  = $lang->product->closedStory;
/* productplan */
$lang->productplan->common     = $lang->productCommon . ' Plan';
$lang->productplan->browse     = "Plan List";
$lang->productplan->index      = "List";
$lang->productplan->create     = "Create Plan";
$lang->productplan->edit       = "Edit Plan";
$lang->productplan->delete     = "Delete Plan";
$lang->productplan->view       = "Plan Detail";
$lang->productplan->bugSummary = "Total <strong>%s</strong> Bugs on this page.";
$lang->productplan->basicInfo  = 'Basic Info';
$lang->productplan->batchEdit  = 'Batch Edit';
$lang->productplan->project    = 'Project';

$lang->productplan->batchUnlink      = "Batch Unlink";
$lang->productplan->linkStory        = "Link Story";
$lang->productplan->unlinkStory      = "Unlink Story";
$lang->productplan->unlinkStoryAB    = "Unlink";
$lang->productplan->batchUnlinkStory = "Batch Unlink";
$lang->productplan->linkedStories    = 'Linked Stories';
$lang->productplan->unlinkedStories  = 'Unlinked Stories';
$lang->productplan->updateOrder      = 'Order';
$lang->productplan->createChildren   = "Create Child Plans";
$lang->productplan->createExecution  = "Create {$lang->executionCommon}";

$lang->productplan->linkBug          = "Link Bug";
$lang->productplan->unlinkBug        = "Unlink Bug";
$lang->productplan->batchUnlinkBug   = "Batch Unlink Bugs";
$lang->productplan->linkedBugs       = 'Linked Bugs';
$lang->productplan->unlinkedBugs     = 'Unlinked Bugs';
$lang->productplan->unexpired        = 'Unexpired Plans';
$lang->productplan->all              = 'All Plans';

$lang->productplan->confirmDelete      = "Do you want to delete this plan?";
$lang->productplan->confirmUnlinkStory = "Do you want to unlink this story?";
$lang->productplan->confirmUnlinkBug   = "Do you want to unlink this bug?";
$lang->productplan->noPlan             = 'No plans yet. ';
$lang->productplan->cannotDeleteParent = 'Cannot delete parent plan';
$lang->productplan->selectProjects     = "Please select the project";
$lang->productplan->nextStep           = "Next step";

$lang->productplan->id         = 'ID';
$lang->productplan->product    = $lang->productCommon;
$lang->productplan->branch     = 'Platform/Branch';
$lang->productplan->title      = 'Title';
$lang->productplan->desc       = 'Description';
$lang->productplan->begin      = 'Begin';
$lang->productplan->end        = 'End';
$lang->productplan->last       = 'Last Plan';
$lang->productplan->future     = 'TBD';
$lang->productplan->stories    = 'Story';
$lang->productplan->bugs       = 'Bug';
$lang->productplan->hour       = $lang->hourCommon;
$lang->productplan->execution  = $lang->executionCommon;
$lang->productplan->parent     = "Parent Plan";
$lang->productplan->parentAB   = "Parent";
$lang->productplan->children   = "Child Plan";
$lang->productplan->childrenAB = "C";
$lang->productplan->order      = "Order";
$lang->productplan->deleted    = "Deleted";

$lang->productplan->endList[7]    = '1 Week';
$lang->productplan->endList[14]   = '2 Weeks';
$lang->productplan->endList[31]   = '1 Month';
$lang->productplan->endList[62]   = '2 Months';
$lang->productplan->endList[93]   = '3 Months';
$lang->productplan->endList[186]  = '6 Months';
$lang->productplan->endList[365]  = '1 Year';

$lang->productplan->errorNoTitle = 'ID %s title should not be empty.';
$lang->productplan->errorNoBegin = 'ID %s begin time should not be empty.';
$lang->productplan->errorNoEnd   = 'ID %s end time should not be empty.';
$lang->productplan->beginGeEnd   = 'ID %s begin time should not be >= end time.';

$lang->productplan->featureBar['browse']['all']       = 'All';
$lang->productplan->featureBar['browse']['unexpired'] = 'Unexpired';
$lang->productplan->featureBar['browse']['overdue']   = 'Expired';
/* program */
$lang->program->name      = 'Name';
$lang->program->template  = 'Template';
$lang->program->category  = 'Type';
$lang->program->desc      = 'Description';
$lang->program->copy      = 'Copy Program';
$lang->program->status    = 'Status';
$lang->program->PM        = 'Manager';
$lang->program->budget    = 'Budget';
$lang->program->progress  = 'Progress';
$lang->program->children  = 'Child';
$lang->program->parent    = 'Parent';
$lang->program->allInput  = 'Input';
$lang->program->teamCount = 'Team';
$lang->program->longTime  = 'Long-Term';
$lang->program->view      = 'Program Detail';

$lang->program->common                  = 'Program';
$lang->program->index                   = 'Home';
$lang->program->create                  = 'Create Program';
$lang->program->createGuide             = 'Select Template';
$lang->program->edit                    = 'Edit Program';
$lang->program->browse                  = 'Programs';
$lang->program->product                 = 'Products';
$lang->program->project                 = 'Program Project List';
$lang->program->all                     = 'All Programs';
$lang->program->start                   = 'Start';
$lang->program->finish                  = 'Finish';
$lang->program->suspend                 = 'Suspend';
$lang->program->delete                  = 'Delete';
$lang->program->close                   = 'Close';
$lang->program->activate                = 'Activate';
$lang->program->export                  = 'Export';
$lang->program->stakeholder             = 'Stakeholder';
$lang->program->createStakeholder       = 'Create Stakeholder';
$lang->program->unlinkStakeholder       = 'Unlink Stakeholder';
$lang->program->batchUnlinkStakeholders = 'Batch Remove Stakeholder';
$lang->program->unlink                  = 'Unlink';
$lang->program->moreProgram             = 'More program';
$lang->program->confirmBatchUnlink      = "Do you want to batch unlink these stakeholders?";
$lang->program->stakeholderType         = 'Stakeholder type';
$lang->program->isStakeholderKey        = 'Key stakeholder';
$lang->program->importStakeholder       = 'Import program';
$lang->program->unbindWhitelist         = 'Unbind Whitelist';
$lang->program->importStakeholder       = 'Import from program';
$lang->program->manageMembers           = 'Program Team';
$lang->program->beyondParentBudget      = 'The remaining budget of the owned program has been exceeded.';
$lang->program->parentBudget            = 'Parent program surplus budget：';
$lang->program->beginLetterParent       = "Parent begin date: %s, begin date should be >                  = parent begin date.";
$lang->program->endGreaterParent        = "Parent end date: %s, end date should be <                      = parent end date.";
$lang->program->beginGreateChild        = "Child earliest begin: %s, parent begin date <                  = child earliest begin date.";
$lang->program->endLetterChild          = "Child latest end: %s, parent end date >                        = child latest end date.";
$lang->program->closeErrorMessage       = 'There are subprograms or projects that are not closed';
$lang->program->hasChildren             = 'The program has a child program or the project exists and can not be deleted.';
$lang->program->confirmDelete           = "Do you want to delete it?";
$lang->program->readjustTime            = 'Change the program begin&end date.';

$lang->program->stakeholderTypeList['inside']  = 'Inside';
$lang->program->stakeholderTypeList['outside'] = 'Outside';

$lang->program->noProgram  = 'No program.';
$lang->program->showClosed = 'Closed programs.';
$lang->program->tips       = 'If a parent item set is selected, products under that parent item set can be associated. If no item set is selected, a product with the same name as the item is created by default and associated with that item.';

$lang->program->endList[31]  = 'One month';
$lang->program->endList[93]  = 'Trimester';
$lang->program->endList[186] = 'Half yearly';
$lang->program->endList[365] = 'One year';
$lang->program->endList[999] = 'Longtime';

$lang->program->aclList['private'] = "Private (accessible to project portfolio holders and stakeholders, stakeholders can follow up maintenance)";
$lang->program->aclList['open']    = "Default(user who can visit the program can access it)";

$lang->program->subAclList['private'] = "Private (accessible to this program set leader and stakeholders, stakeholders can follow up maintenance)";
$lang->program->subAclList['open']    = "Default (user who can visit the program can access it)";
$lang->program->subAclList['program'] = "Open within the program (accessible to all higher-level program directors and affiliates, as well as to this program director and affiliates)";

$lang->program->subAcls['private'] = 'Private';
$lang->program->subAcls['open']    = 'Default';
$lang->program->subAcls['program'] = 'Open within the program';

$lang->program->authList['extend'] = 'Inherit (program privileges and company privileges)';
$lang->program->authList['reset']  = 'Reset (program privileges only)';

$lang->program->statusList['wait']      = 'Waiting';
$lang->program->statusList['doing']     = 'Doing';
$lang->program->statusList['suspended'] = 'Suspended';
$lang->program->statusList['closed']    = 'Closed';

$lang->program->featureBar['all'] = 'All';
/* project */
$lang->project->createGuide       = 'Select Template';
$lang->project->index             = 'Dashboard';
$lang->project->home              = 'Home';
$lang->project->create            = 'Create Project';
$lang->project->edit              = 'Edit';
$lang->project->batchEdit         = 'Batch Edit Projects';
$lang->project->view              = 'Project View';
$lang->project->batchEdit         = 'Batch Edit';
$lang->project->browse            = 'Projects';
$lang->project->all               = 'All';
$lang->project->start             = 'Start';
$lang->project->finish            = 'Finish';
$lang->project->suspend           = 'Suspend';
$lang->project->delete            = 'Delete';
$lang->project->close             = 'Close';
$lang->project->activate          = 'Activate';
$lang->project->group             = 'Privilege Group';
$lang->project->createGroup       = 'Create Group';
$lang->project->editGroup         = 'Edit Group';
$lang->project->copyGroup         = 'Copy Group';
$lang->project->manageView        = 'Manage View';
$lang->project->managePriv        = 'Manage Privilege';
$lang->project->manageMembers     = 'Manage Team';
$lang->project->export            = 'Export';
$lang->project->addProduct        = 'Add Product';
$lang->project->manageGroupMember = 'Manage Group';
$lang->project->moduleSetting     = 'List Settings';
$lang->project->moduleOpen        = 'Program Name';
$lang->project->dynamic           = 'Dynamic';
$lang->project->execution         = 'Execution';
$lang->project->qa                = 'QA';
$lang->project->bug               = 'Bug List';
$lang->project->testcase          = 'Case List';
$lang->project->testtask          = 'Test Task';
$lang->project->build             = 'Build';
$lang->project->updateOrder       = 'Order';
$lang->project->sort              = 'Order';
$lang->project->whitelist         = 'Project Whitelist';
$lang->project->addWhitelist      = 'Project Add Whitelist';
$lang->project->unbindWhitelist   = 'Project Remove Whitelist';
$lang->project->manageProducts    = 'Manage Products';
$lang->project->copyTitle         = 'Please select an project to copy';
$lang->project->errorSameProducts = 'Project cannot be associated with multiple identical products.';
$lang->project->errorNoProducts   = 'At least one product is associated';
$lang->project->copyNoProject     = 'There are no items available to copy.';
$lang->project->searchByName      = 'Enter the project name to retrieve';
$lang->project->deleted           = 'Deleted';
$lang->project->linkedProducts    = "Linked {$lang->productCommon}s";
$lang->project->unlinkedProducts  = "Unlinked {$lang->productCommon}s";
$lang->project->testreport        = 'Test Report';

$lang->project->common             = 'Project';
$lang->project->stage              = 'Stage';
$lang->project->PM                 = 'Manager';
$lang->project->name               = 'Name';
$lang->project->category           = 'Category';
$lang->project->desc               = 'Description';
$lang->project->code               = 'Code';
$lang->project->copy               = 'Copy';
$lang->project->begin              = 'Begin';
$lang->project->end                = 'End';
$lang->project->status             = 'Status';
$lang->project->budget             = 'Budget';
$lang->project->template           = 'Template';
$lang->project->estimate           = 'Estimates';
$lang->project->consume            = 'Cost';
$lang->project->surplus            = 'Left';
$lang->project->progress           = 'Progress';
$lang->project->dateRange          = 'Duration';
$lang->project->to                 = ' to ';
$lang->project->realEnd            = 'Actual End';
$lang->project->realBegan          = 'Actual Began';
$lang->project->bygrid             = 'Kanban';
$lang->project->bylist             = 'List';
$lang->project->mine               = 'My';
$lang->project->myProject          = 'Mine: ';
$lang->project->other              = 'Others: ';
$lang->project->acl                = 'Access control';
$lang->project->setPlanduration    = 'Set Duration';
$lang->project->auth               = 'Access Control';
$lang->project->durationEstimation = 'Estimated Workload';
$lang->project->leftStories        = 'Left Stories';
$lang->project->leftTasks          = 'Left Tasks';
$lang->project->leftBugs           = 'Left Bugs';
$lang->project->children           = 'Child Project';
$lang->project->parent             = 'Parent Program';
$lang->project->allStories         = 'All Stories';
$lang->project->doneStories        = 'Finished Stories';
$lang->project->doneProjects       = 'Finished';
$lang->project->allInput           = 'Total Input';
$lang->project->weekly             = 'Program Weekly';
$lang->project->pv                 = 'PV';
$lang->project->ev                 = 'EV';
$lang->project->sv                 = 'SV%';
$lang->project->ac                 = 'AC';
$lang->project->cv                 = 'CV%';
$lang->project->pvTitle            = 'Planed Value';
$lang->project->evTitle            = 'Earn Value';
$lang->project->svTitle            = 'Schedule Variance';
$lang->project->acTitle            = 'Actual Cost';
$lang->project->cvTitle            = 'Cost Variance';
$lang->project->teamCount          = 'Team';
$lang->project->longTime           = 'Long-Term Program';
$lang->project->future             = 'TBD';
$lang->project->moreProject        = 'More Project';
$lang->project->days               = 'Available Days';

$lang->project->productNotEmpty        = 'Please link products or create products.';
$lang->project->existProductName       = 'Product name already exists.';
$lang->project->changeProgram          = '%s > Change project';
$lang->project->changeProgramTip       = 'After modifying the project set, the products linked with the project will also modify the project set to which it belongs. Please confirm whether to modify it.';
$lang->project->linkedProjectsTip      = 'Linked projects are as follows';
$lang->project->multiLinkedProductsTip = 'The following products linked to this project are also linked to other projects, please unlink before proceeding.';
$lang->project->linkStoryByPlanTips    = "This action will associate all {$lang->SRCommon} under the selected plan to this project";
$lang->project->createExecution        = "There is no {$lang->executionCommon} under this project, please create {$lang->executionCommon} first";

$lang->project->tenThousand = '';

$lang->project->unitList['CNY'] = 'RMB';
$lang->project->unitList['USD'] = 'USD';
$lang->project->unitList['HKD'] = 'HKD';
$lang->project->unitList['NTD'] = 'New Taiwan';
$lang->project->unitList['EUR'] = 'Euro';
$lang->project->unitList['DEM'] = 'Deutsche Mark';
$lang->project->unitList['CHF'] = 'Swiss Franc';
$lang->project->unitList['FRF'] = 'French Franc';
$lang->project->unitList['GBP'] = 'Pound';
$lang->project->unitList['NLG'] = 'Florin';
$lang->project->unitList['CAD'] = 'Canadian';
$lang->project->unitList['RUR'] = 'Russian Ruble';
$lang->project->unitList['INR'] = 'Indian';
$lang->project->unitList['AUD'] = 'Australian';
$lang->project->unitList['NZD'] = 'New Zealand';
$lang->project->unitList['THB'] = 'Thai Baht';
$lang->project->unitList['SGD'] = 'Singapore';

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
$lang->project->modelList['waterfall'] = "CMMI";

$lang->project->featureBar['all']       = 'All';
$lang->project->featureBar['doing']     = 'Going';
$lang->project->featureBar['wait']      = 'Waiting';
$lang->project->featureBar['suspended'] = 'Suspended';
$lang->project->featureBar['closed']    = 'Closed';

$lang->project->aclList['private'] = 'Private (For team members and stakeholders only)';
$lang->project->aclList['open']    = "Open (accessible with project view permissions)";

$lang->project->acls['private'] = 'Private';
$lang->project->acls['open']    = 'Open';

$lang->project->authList['extend'] = 'Inherit (system privilege and project privilege)';
$lang->project->authList['reset']  = 'Reset (project privilege only)';

$lang->project->statusList['wait']      = 'Waiting';
$lang->project->statusList['doing']     = 'Doing';
$lang->project->statusList['suspended'] = 'Suspended';
$lang->project->statusList['closed']    = 'Closed';

$lang->project->endList[31]  = 'One month';
$lang->project->endList[93]  = 'Trimester';
$lang->project->endList[186] = 'Half yearly';
$lang->project->endList[365] = 'One year';
$lang->project->endList[999] = 'Longtime';

$lang->project->empty                  = 'No project.';
$lang->project->accessDenied           = 'Access denied!';
$lang->project->chooseProgramType      = 'Select the project management model';
$lang->project->nextStep               = 'Next step';
$lang->project->hoursUnit              = '%s hours';
$lang->project->membersUnit            = '%s men';
$lang->project->lastIteration          = "Recent {$lang->executionCommon}";
$lang->project->ongoingStage           = 'Ongoing stage';
$lang->project->scrum                  = 'Scrum';
$lang->project->waterfall              = 'CMMI';
$lang->project->waterfallTitle         = 'CMMI';
$lang->project->cannotCreateChild      = 'It is not empty, so you cannot add a child. You can add a parent for it, and then create a child.';
$lang->project->confirmDelete          = "Do you want to delete [%s]?";
$lang->project->emptyPM                = 'No manager';
$lang->project->cannotChangeToCat      = "It is not empty, so you cannot change it to a parent.";
$lang->project->cannotCancelCat        = "It has child projects, so you cannot unmark the parent.";
$lang->project->parentBeginEnd         = "Parent begin&end date: %s ~ %s";
$lang->project->childLongTime          = "If a child as long-term projects, the parent should be long-term too.";
$lang->project->readjustTime           = 'Change the project begin&end date.';
$lang->project->notAllowRemoveProducts = 'The story of this product is linked with the project. Unlink it before doing any action.';

$lang->project->programTitle['0']    = 'Hidden';
$lang->project->programTitle['base'] = 'Base-level project only';
$lang->project->programTitle['end']  = 'End-level project only';

$lang->project->accessDenied      = 'Access denied to this project';
$lang->project->chooseProgramType = 'Select management type';
$lang->project->scrumTitle        = 'Agile Development Management';
$lang->project->cannotCreateChild = 'The project has contents, so you cannot add a child project. You can create a parent project for this one and then add a child project for the parent project.';
$lang->project->hasChildren       = 'This project has a child project, so it cannot be deleted.';
$lang->project->confirmDelete     = 'Do you want to delete this project?';
$lang->project->cannotChangeToCat = "The project has contents, so you cannot it to a parent project.";
$lang->project->cannotCancelCat   = "There are child projects of this project. You cannot cancel the parent project mark.";
$lang->project->parentBeginEnd    = "The begin and end date of the parent project: %s ~ %s";
$lang->project->parentBudget      = "The budget of the parent project: ";
$lang->project->beginLetterParent = "The begin date of the parent project: %s. It cannot be < the begin date of its parent project.";
$lang->project->endGreaterParent  = "The end date of the parent project: %s. It cannot be > the end date of its parent project.";
$lang->project->beginGreateChild  = "The minimum start date of the project set: %s. The start date of the project cannot be less than the minimum start date of the project set.";
$lang->project->endLetterChild    = "The maximum finish date for the project set: %s. The completion date of a project cannot be greater than the maximum completion date of the project set.";
$lang->project->childLongTime     = "There are long-term projects in the child project, and the parent project should also be a long-term project.";
/* projectbuild */
$lang->projectbuild->common   = 'Project Build';
$lang->projectbuild->browse   = 'Build List';
/* projectrelease */
$lang->projectrelease->common           = 'Release';
$lang->projectrelease->create           = "Create Release";
$lang->projectrelease->edit             = "Edit Release";
$lang->projectrelease->linkStory        = "Link Story";
$lang->projectrelease->linkBug          = "Link Bug";
$lang->projectrelease->delete           = "Delete Release";
$lang->projectrelease->deleted          = 'Deleted';
$lang->projectrelease->view             = "Release Detail";
$lang->projectrelease->browse           = "Release List";
$lang->projectrelease->changeStatus     = "Change Status";
$lang->projectrelease->batchUnlink      = "Batch Unlink";
$lang->projectrelease->batchUnlinkStory = "Batch Unlink Stories";
$lang->projectrelease->batchUnlinkBug   = "Batch Unlink Bugs";
$lang->projectrelease->unlinkStory      = "Unlink {$lang->SRCommon}";
$lang->projectrelease->unlinkBug        = 'Unlink Bug';
$lang->projectrelease->export           = 'Export as HTML';
$lang->projectrelease->browseAction     = "Release List";
/* projectstory */
$lang->projectstory->common            = "Project {$lang->SRCommon}";
$lang->projectstory->index             = "{$lang->SRCommon} Home";
$lang->projectstory->view              = "{$lang->SRCommon} Detail";
$lang->projectstory->story             = "{$lang->SRCommon} List";
$lang->projectstory->track             = 'Tracking Matrix';
$lang->projectstory->linkStory         = 'Linked' . $lang->SRCommon;
$lang->projectstory->unlinkStory       = 'Unlinked' . $lang->SRCommon;
$lang->projectstory->importplanstories = 'Linked by plan' . $lang->SRCommon;
$lang->projectstory->whyNoStories      = "No story can be linked. Please check whether there is any story in project which is linked to {$lang->productCommon} and make sure it has been reviewed.";

$lang->projectstory->trackAction = 'Matrix';

global $app;
$app->loadLang('product');
$lang->projectstory->featureBar['story']['allstory'] = $lang->product->allStory;
$lang->projectstory->featureBar['story']['unclosed'] = $lang->product->unclosed;
$lang->projectstory->featureBar['story']['changed']  = $lang->product->changedStory;
$lang->projectstory->featureBar['story']['closed']   = $lang->product->closedStory;
/* qa */
$lang->qa->index       = 'QA Home';
$lang->qa->indexAction = 'QA Index';
/* release */
$lang->release->common           = 'Product Release';
$lang->release->create           = "Create Release";
$lang->release->edit             = "Edit Release";
$lang->release->linkStory        = "Link Story";
$lang->release->linkBug          = "Link Bug";
$lang->release->delete           = "Delete Release";
$lang->release->deleted          = 'Deleted';
$lang->release->view             = "Release Detail";
$lang->release->browse           = "Release List";
$lang->release->changeStatus     = "Change Status";
$lang->release->batchUnlink      = "Batch Unlink";
$lang->release->batchUnlinkStory = "Batch Unlink Stories";
$lang->release->batchUnlinkBug   = "Batch Unlink Bugs";

$lang->release->confirmDelete      = "Do you want to delete this release?";
$lang->release->confirmUnlinkStory = "Do you want to remove this story?";
$lang->release->confirmUnlinkBug   = "Do you want to remove this bug?";
$lang->release->existBuild         = '『Build』『%s』existed. You could change『name』or choose a『build』.';
$lang->release->noRelease          = 'No releases yet.';
$lang->release->errorDate          = 'The release date should not be greater than today.';

$lang->release->basicInfo = 'Basic Info';

$lang->release->id            = 'ID';
$lang->release->product       = $lang->productCommon;
$lang->release->branch        = 'Platform/Branch';
$lang->release->project       = 'Project';
$lang->release->build         = 'Build';
$lang->release->name          = 'Name';
$lang->release->marker        = 'Milestone';
$lang->release->date          = 'Release Date';
$lang->release->desc          = 'Description';
$lang->release->status        = 'Status';
$lang->release->subStatus     = 'Sub Status';
$lang->release->last          = 'Last Release';
$lang->release->unlinkStory   = 'Unlink Story';
$lang->release->unlinkBug     = 'Unlink Bug';
$lang->release->stories       = 'Finished Story';
$lang->release->bugs          = 'Resolved Bug';
$lang->release->leftBugs      = 'Active Bug';
$lang->release->generatedBugs = 'Active Bug';
$lang->release->finishStories = 'Finished %s Stories';
$lang->release->resolvedBugs  = 'Resolved %s Bugs';
$lang->release->createdBugs   = 'Unresolved %s Bug';
$lang->release->export        = 'Export as HTML';
$lang->release->yesterday     = 'Released Yesterday';
$lang->release->all           = 'All';

$lang->release->filePath = 'Download : ';
$lang->release->scmPath  = 'SCM Path : ';

$lang->release->exportTypeList['all']     = 'All';
$lang->release->exportTypeList['story']   = 'Story';
$lang->release->exportTypeList['bug']     = 'Bug';
$lang->release->exportTypeList['leftbug'] = 'Active Bug';

$lang->release->statusList['']          = '';
$lang->release->statusList['normal']    = 'Active';
$lang->release->statusList['terminate'] = 'Terminated';

$lang->release->changeStatusList['normal']    = 'Active';
$lang->release->changeStatusList['terminate'] = 'Terminated';

$lang->release->action = new stdclass();
$lang->release->action->changestatus = array('main' => '$date,  $extra by  <strong>$actor</strong>', 'extra' => 'changeStatusList');
/* repo */
$lang->repo->common          = 'Repo';
$lang->repo->browse          = 'View';
$lang->repo->viewRevision    = 'View Revision';
$lang->repo->product         = 'Product';
$lang->repo->execution       = $lang->execution->common;
$lang->repo->create          = 'Create';
$lang->repo->maintain        = 'Repo List';
$lang->repo->edit            = 'Edit';
$lang->repo->delete          = 'Delete Repo';
$lang->repo->showSyncCommit  = 'Display Sync';
$lang->repo->ajaxSyncCommit  = 'Interface: Ajax Sync Note';
$lang->repo->setRules        = 'Set Rules';
$lang->repo->download        = 'Download File';
$lang->repo->downloadDiff    = 'Download Diff';
$lang->repo->addBug          = 'Add Review';
$lang->repo->editBug         = 'Edit Bug';
$lang->repo->deleteBug       = 'Delete Bug';
$lang->repo->addComment      = 'Add Comment';
$lang->repo->editComment     = 'Edit Comment';
$lang->repo->deleteComment   = 'Delete Comment';

$lang->repo->browseAction    = 'Browse Repo';
$lang->repo->createAction    = 'Create Repo';
$lang->repo->editAction      = 'Edit Repo';
$lang->repo->diffAction      = 'Diff Revision';
$lang->repo->downloadAction  = 'Download File';
$lang->repo->revisionAction  = 'Revision Detail';
$lang->repo->blameAction     = 'Blame';
$lang->repo->reviewAction    = 'Review List';

$lang->repo->submit     = 'Submit';
$lang->repo->cancel     = 'Cancel';
$lang->repo->addComment = 'Add Comment';

$lang->repo->module   = 'Module';
$lang->repo->type     = 'Type';
$lang->repo->assign   = 'AssignTo';
$lang->repo->title    = 'Title';
$lang->repo->detile   = 'Detail';
$lang->repo->lines    = 'Lines';
$lang->repo->line     = 'Line';
$lang->repo->expand   = 'Unfold';
$lang->repo->collapse = 'Fold';

$lang->repo->id        = 'ID';
$lang->repo->SCM       = 'Type';
$lang->repo->name      = 'Name';
$lang->repo->path      = 'Path';
$lang->repo->prefix    = 'Prefix';
$lang->repo->config    = 'Config';
$lang->repo->desc      = 'Description';
$lang->repo->account   = 'Username';
$lang->repo->password  = 'Password';
$lang->repo->encoding  = 'Encoding';
$lang->repo->client    = 'Client Path';
$lang->repo->size      = 'Size';
$lang->repo->revision  = 'Revision';
$lang->repo->revisionA = 'Revision';
$lang->repo->revisions = 'Revision';
$lang->repo->time      = 'Date';
$lang->repo->committer = 'Committer';
$lang->repo->commits   = 'Commits';
$lang->repo->synced    = 'Initialize Sync';
$lang->repo->lastSync  = 'Last Sync';
$lang->repo->deleted   = 'Deleted';
$lang->repo->commit    = 'Commit';
$lang->repo->comment   = 'Comment';
$lang->repo->view      = 'View File';
$lang->repo->viewA     = 'View';
$lang->repo->log       = 'Revision Log';
$lang->repo->blame     = 'Blame';
$lang->repo->date      = 'Date';
$lang->repo->diff      = 'Diff';
$lang->repo->diffAB    = 'Diff';
$lang->repo->diffAll   = 'Diff All';
$lang->repo->viewDiff  = 'View diff';
$lang->repo->allLog    = 'All Revisions';
$lang->repo->location  = 'Location';
$lang->repo->file      = 'File';
$lang->repo->action    = 'Action';
$lang->repo->code      = 'Code';
$lang->repo->review    = 'Repo Review';
$lang->repo->acl       = 'Privilege';
$lang->repo->group     = 'Group';
$lang->repo->user      = 'User';
$lang->repo->info      = 'Version Info';

$lang->repo->title      = 'Title';
$lang->repo->status     = 'Status';
$lang->repo->openedBy   = 'CreatedBy';
$lang->repo->assignedTo = 'AssignedTo';
$lang->repo->openedDate = 'CreatedDate';

$lang->repo->latestRevision = 'Latest Revision';
$lang->repo->actionInfo     = "Add by %s in %s";
$lang->repo->changes        = "Change Log";
$lang->repo->reviewLocation = "File: %s@%s, Line: %s - %s";
$lang->repo->commentEdit    = '<i class="icon-pencil"></i>';
$lang->repo->commentDelete  = '<i class="icon-remove"></i>';
$lang->repo->allChanges     = "Other Changes";
$lang->repo->commitTitle    = "The %sth Commit";
$lang->repo->mark           = "Mark Tag";
$lang->repo->split          = "Split Mark";

$lang->repo->objectRule   = 'Object Rule';
$lang->repo->objectIdRule = 'Object ID Rule';
$lang->repo->actionRule   = 'Action Rule';
$lang->repo->manHourRule  = 'Man-hour Rule';
$lang->repo->ruleUnit     = "Unit";
$lang->repo->ruleSplit    = "Multiple keywords are divided by ';', e.g. task multiple keywords: Task;task";

$lang->repo->viewDiffList['inline'] = 'Inline';
$lang->repo->viewDiffList['appose'] = 'Parallel';

$lang->repo->encryptList['plain']  = 'No encryption';
$lang->repo->encryptList['base64'] = 'BASE64';

$lang->repo->logStyles['A'] = 'Add';
$lang->repo->logStyles['M'] = 'Modification';
$lang->repo->logStyles['D'] = 'Delete';

$lang->repo->encodingList['utf_8'] = 'UTF-8';
$lang->repo->encodingList['gbk']   = 'GBK';

$lang->repo->scmList['Git']        = 'Git';
$lang->repo->scmList['Subversion'] = 'SVN';
$lang->repo->scmList['Gitlab']     = 'Gitlab';

$lang->repo->gitlabHost    = 'Gitlab Host';
$lang->repo->gitlabToken   = 'Gitlab Token';
$lang->repo->gitlabProject = 'Projects';

$lang->repo->placeholder = new stdclass;
$lang->repo->placeholder->gitlabHost = 'Input url of gitlab';

$lang->repo->notice                 = new stdclass();
$lang->repo->notice->syncing        = 'Synchronizing. Please wait ...';
$lang->repo->notice->syncComplete   = 'Synchronized. Now redirecting ...';
$lang->repo->notice->syncedCount    = 'The number of records synchronized is ';
$lang->repo->notice->delete         = 'Do you want to delete this repo?';
$lang->repo->notice->successDelete  = 'Repository is removed.';
$lang->repo->notice->commentContent = 'Comment';
$lang->repo->notice->deleteBug      = 'Do you want to delete this bug?';
$lang->repo->notice->deleteComment  = 'Do you want to delete this comment?';
$lang->repo->notice->lastSyncTime   = 'Last Sync:';

$lang->repo->rules = new stdclass();
$lang->repo->rules->exampleLabel = "Comment Example";
$lang->repo->rules->example['task']['start']  = "%start% %task% %id%1%split%2 %cost%%consumedmark%1%cunit% %left%%leftmark%3%lunit%";
$lang->repo->rules->example['task']['finish'] = "%finish% %task% %id%1%split%2 %cost%%consumedmark%10%cunit%";
$lang->repo->rules->example['task']['effort'] = "%effort% %task% %id%1%split%2 %cost%%consumedmark%1%cunit% %left%%leftmark%3%lunit%";
$lang->repo->rules->example['bug']['resolve'] = "%resolve% %bug% %id%1%split%2";

$lang->repo->error                = new stdclass();
$lang->repo->error->useless       = 'Your server disabled exec and shell_exec, so it cannot be applied.';
$lang->repo->error->connect       = 'Connection to the repo failed. Please enter username, password and repo address correctly!';
$lang->repo->error->version       = 'Version 1.8+ of https and svn protocol is required. Please update to latest version! Go to http://subversion.apache.org/';
$lang->repo->error->path          = 'Repo address is the file path, e.g. /home/test.';
$lang->repo->error->cmd           = 'Client Error!';
$lang->repo->error->diff          = 'Two versions must be selected.';
$lang->repo->error->safe          = 'For security reasons, the client version needs to be detected. Please write the version to the file %s. <br /> Execute command: %s';
$lang->repo->error->product       = "Please select {$lang->productCommon}!";
$lang->repo->error->commentText   = 'Please enter content for review!';
$lang->repo->error->comment       = 'Please enter content!';
$lang->repo->error->title         = 'Please enter title!';
$lang->repo->error->accessDenied  = 'You do not have the privilege to access the repository.';
$lang->repo->error->noFound       = 'The repo is not found.';
$lang->repo->error->noFile        = '%s does not exist.';
$lang->repo->error->noPriv        = 'The program does not have the privilege  to switch to %s';
$lang->repo->error->output        = "The command is: %s\nThe error is(%s): %s\n";
$lang->repo->error->clientVersion = "Client version is too low, please upgrade or change SVN client";
$lang->repo->error->encoding      = "The encoding might be wrong. Please change the encoding and try again.";
$lang->repo->error->deleted       = "Deletion of the repository failed. The current repository has a commit record associated with the design.";
$lang->repo->error->clientPath    = "The client installation directory cannot have spaces!";

$lang->repo->syncTips      = '<strong>You may find the reference about how to set Git sync from <a target="_blank" href="https://www.zentao.pm/book/zentaomanual/free-open-source-project-management-software-git-105.html">here</a>.</strong>';
$lang->repo->encodingsTips = "The encodings of comments can be comma separated values, e.g. utf-8.";

$lang->repo->example              = new stdclass();
$lang->repo->example->client      = new stdclass();
$lang->repo->example->path        = new stdclass();
$lang->repo->example->client->git = "e.g. /usr/bin/git";
$lang->repo->example->client->svn = "e.g. /usr/bin/svn";
$lang->repo->example->path->git   = "e.g. /home/user/myproject";
$lang->repo->example->path->svn   = "e.g. http://example.googlecode.com/svn/trunk/myproject";
$lang->repo->example->config      = "Config directory is required in https. Use '--config-dir' to generate config dir.";
$lang->repo->example->encoding    = "input encoding of files";

$lang->repo->typeList['standard']    = 'Standard';
$lang->repo->typeList['performance'] = 'Performance';
$lang->repo->typeList['security']    = 'Security';
$lang->repo->typeList['redundancy']  = 'Redundancy';
$lang->repo->typeList['logicError']  = 'Logic Error';
/* report */
$lang->report->index     = 'Report Home';
$lang->report->list      = 'Report';
$lang->report->item      = 'Item';
$lang->report->value     = 'Value';
$lang->report->percent   = '%';
$lang->report->undefined = 'Undefined';
$lang->report->query     = 'Query';
$lang->report->annual    = 'Annual Summary';
$lang->report->project   = 'Project';

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

$lang->report->assign['noassign'] = 'Unassigned';
$lang->report->assign['assign']   = 'Assigned';

$lang->report->singleColor[] = 'F6BD0F';

$lang->report->projectDeviation = 'Project Deviation';
$lang->report->productSummary   = $lang->productCommon . ' Summary';
$lang->report->bugCreate        = 'Bug Reported Summary';
$lang->report->bugAssign        = 'Bug Assigned Summary';
$lang->report->workload         = 'Team Workload Summary';
$lang->report->workloadAB       = 'Workload';
$lang->report->bugOpenedDate    = 'Bug reported from';
$lang->report->beginAndEnd      = ' From';
$lang->report->begin            = 'Begin';
$lang->report->end              = 'End';
$lang->report->dept             = 'Department';
$lang->report->deviationChart   = 'Project Deviation Chart';

$lang->reportList = new stdclass();
$lang->reportList->project = new stdclass();
$lang->reportList->product = new stdclass();
$lang->reportList->test    = new stdclass();
$lang->reportList->staff   = new stdclass();

$lang->reportList->project->lists[10] = 'Execution Deviation|report|projectdeviation';
$lang->reportList->product->lists[10] = $lang->productCommon . ' Summary|report|productsummary';
$lang->reportList->test->lists[10]    = 'Bug Reported Summary|report|bugcreate';
$lang->reportList->test->lists[13]    = 'Bug Assigned Summary|report|bugassign';
$lang->reportList->staff->lists[10]   = 'Team Workload Summary|report|workload';

$lang->report->id            = 'ID';
$lang->report->execution     = $lang->executionCommon;
$lang->report->product       = $lang->productCommon;
$lang->report->user          = 'User';
$lang->report->bugTotal      = 'Bug';
$lang->report->task          = 'Task';
$lang->report->estimate      = 'Estimates';
$lang->report->consumed      = 'Cost';
$lang->report->remain        = 'Left';
$lang->report->deviation     = 'Deviation';
$lang->report->deviationRate = 'Deviation Rate';
$lang->report->total         = 'Total';
$lang->report->to            = 'to';
$lang->report->taskTotal     = "Total Tasks";
$lang->report->manhourTotal  = "Total Hours";
$lang->report->validRate     = "Valid Rate";
$lang->report->validRateTips = "Resolution is Resolved/Postponed or status is Resolved/Closed.";
$lang->report->unplanned     = 'Unplanned';
$lang->report->workday       = 'Hours/Day';
$lang->report->diffDays      = 'days';

$lang->report->typeList['default'] = 'Default';
$lang->report->typeList['pie']     = 'Pie';
$lang->report->typeList['bar']     = 'Bar';
$lang->report->typeList['line']    = 'Line';

$lang->report->conditions    = 'Filter by:';
$lang->report->closedProduct = 'Closed ' . $lang->productCommon . 's';
$lang->report->overduePlan   = 'Expired Plans';

$lang->report->idAB         = 'ID';
$lang->report->bugTitle     = 'Bug Name';
$lang->report->taskName     = 'Task Name';
$lang->report->todoName     = 'Todo Name';
$lang->report->testTaskName = 'Request Name';
$lang->report->deadline     = 'Deadline';

$lang->report->mailTitle           = new stdclass();
$lang->report->mailTitle->begin    = 'Notice: You have';
$lang->report->mailTitle->bug      = " Bug (%s),";
$lang->report->mailTitle->task     = " Task (%s),";
$lang->report->mailTitle->todo     = " Todo (%s),";
$lang->report->mailTitle->testTask = " Request (%s),";

$lang->report->proVersion   = '<a href="https://api.zentao.net/goto.php?item=proversion&from=reportpage" target="_blank">Try ZenTao Pro for more!</a>';
$lang->report->proVersionEn = '<a href="http://api.zentao.pm/goto.php?item=proversion&from=reportpage" target="_blank">Try ZenTao Pro for more!</a>';

$lang->report->annualData = new stdclass();
$lang->report->annualData->title            = "%s work summary in %s";
$lang->report->annualData->exportByZentao   = "Export By ZenTao";
$lang->report->annualData->scope            = "Scope";
$lang->report->annualData->allUser          = "All Users";
$lang->report->annualData->allDept          = "Whole Company";
$lang->report->annualData->soFar            = " (%s)";
$lang->report->annualData->baseInfo         = "Basic Data";
$lang->report->annualData->actionData       = "Operation Data";
$lang->report->annualData->contributionData = "Contribution Data";
$lang->report->annualData->radar            = "Capability Radar Chart";
$lang->report->annualData->executions       = "{$lang->executionCommon} Data";
$lang->report->annualData->products         = "{$lang->productCommon} Data";
$lang->report->annualData->stories          = "Story Data";
$lang->report->annualData->tasks            = "Task Data";
$lang->report->annualData->bugs             = "Bug Data";
$lang->report->annualData->cases            = "Case Data";
$lang->report->annualData->statusStat       = "{$lang->SRCommon}/task/bug status distribution (as of today)";

$lang->report->annualData->companyUsers     = "Number of company";
$lang->report->annualData->deptUsers        = "Number of departments";
$lang->report->annualData->logins           = "Login times";
$lang->report->annualData->actions          = "Number of operations";
$lang->report->annualData->contributions    = "Number of contributions";
$lang->report->annualData->consumed         = "Consumed";
$lang->report->annualData->todos            = "Number of Todos";

$lang->report->annualData->storyStatusStat = "Story status distribution";
$lang->report->annualData->taskStatusStat  = "Task status distribution";
$lang->report->annualData->bugStatusStat   = "Bug status distribution";
$lang->report->annualData->caseResultStat  = "Case result distribution";
$lang->report->annualData->allStory        = "Total";
$lang->report->annualData->allTask         = "Total";
$lang->report->annualData->allBug          = "Total";
$lang->report->annualData->undone          = "Undone";
$lang->report->annualData->unresolve       = "Unresolve";

$lang->report->annualData->storyMonthActions = "Monthly story operation";
$lang->report->annualData->taskMonthActions  = "Monthly task operation";
$lang->report->annualData->bugMonthActions   = "Monthly bug operation";
$lang->report->annualData->caseMonthActions  = "Monthly case operation";

$lang->report->annualData->executionFields['name']  = "{$lang->executionCommon} name";
$lang->report->annualData->executionFields['story'] = "Finished stories";
$lang->report->annualData->executionFields['task']  = "Finished tasks";
$lang->report->annualData->executionFields['bug']   = "Resolved bugs";

$lang->report->annualData->productFields['name'] = "{$lang->productCommon} name";
$lang->report->annualData->productFields['plan'] = "Plans";
global $config;
if(!empty($config->URAndSR))
{
    $lang->report->annualData->productFields['requirement'] = "Created requirements";
}
$lang->report->annualData->productFields['story']    = "Created stories";
$lang->report->annualData->productFields['finished'] = "Finished stories";

$lang->report->annualData->objectTypeList['product']     = $lang->productCommon;
$lang->report->annualData->objectTypeList['story']       = $lang->SRCommon;
$lang->report->annualData->objectTypeList['productplan'] = "Plan";
$lang->report->annualData->objectTypeList['release']     = "Release";
$lang->report->annualData->objectTypeList['execution']   = $lang->executionCommon;
$lang->report->annualData->objectTypeList['task']        = 'Task';
$lang->report->annualData->objectTypeList['repo']        = 'Code';
$lang->report->annualData->objectTypeList['bug']         = 'Bug';
$lang->report->annualData->objectTypeList['build']       = 'Build';
$lang->report->annualData->objectTypeList['testtask']    = 'TestTask';
$lang->report->annualData->objectTypeList['case']        = 'Case';
$lang->report->annualData->objectTypeList['doc']         = 'Document';

$lang->report->annualData->actionList['create']    = 'Created';
$lang->report->annualData->actionList['edit']      = 'Edited';
$lang->report->annualData->actionList['close']     = 'Closed';
$lang->report->annualData->actionList['review']    = 'Reviewed';
$lang->report->annualData->actionList['gitCommit'] = 'GIT Commited';
$lang->report->annualData->actionList['svnCommit'] = 'SVN Commited';
$lang->report->annualData->actionList['start']     = 'Started';
$lang->report->annualData->actionList['finish']    = 'Finished';
$lang->report->annualData->actionList['assign']    = 'Assigned';
$lang->report->annualData->actionList['activate']  = 'Activated';
$lang->report->annualData->actionList['resolve']   = 'Resolved';
$lang->report->annualData->actionList['run']       = 'Execute';
$lang->report->annualData->actionList['change']    = 'Changed';
$lang->report->annualData->actionList['pause']     = 'Paused';
$lang->report->annualData->actionList['cancel']    = 'Canceled';
$lang->report->annualData->actionList['confirm']   = 'Confirmed';
$lang->report->annualData->actionList['createBug'] = 'Turn to bug';

$lang->report->annualData->todoStatus['all']    = 'All';
$lang->report->annualData->todoStatus['undone'] = 'Undone';
$lang->report->annualData->todoStatus['done']   = 'Done';

$lang->report->annualData->radarItems['product']   = "Product";
$lang->report->annualData->radarItems['execution'] = "Project";
$lang->report->annualData->radarItems['devel']     = "Development";
$lang->report->annualData->radarItems['qa']        = "QA";
$lang->report->annualData->radarItems['other']     = "Other";
/* score */
$lang->score->common       = 'My Points';
$lang->score->record       = 'Points';
$lang->score->current      = 'My Points';
$lang->score->level        = 'Level Point';
$lang->score->reset        = 'Reset';
$lang->score->tips         = 'Points added yesterday: <strong>%d</strong><br/> Total Points: <strong>%d</strong>';
$lang->score->resetTips    = 'It will take a while. <strong>Do not close the window.</strong>';
$lang->score->resetStart   = 'Start';
$lang->score->resetLoading = 'Processing: ';
$lang->score->resetFinish  = 'Finish';

$lang->score->id      = 'ID';
$lang->score->userID  = 'UserID';
$lang->score->account = 'User';
$lang->score->module  = 'Module';
$lang->score->method  = 'Actions';
$lang->score->before  = 'Before';
$lang->score->score   = '+/-';
$lang->score->after   = 'After';
$lang->score->time    = 'Time';
$lang->score->desc    = 'Description';
$lang->score->noLimit = 'No limit';
$lang->score->times   = 'Times';
$lang->score->hour    = 'Hours';

$lang->score->modules['task']        = 'Task';
$lang->score->modules['tutorial']    = 'Tutorial';
$lang->score->modules['user']        = 'User';
$lang->score->modules['ajax']        = 'Other';
$lang->score->modules['doc']         = 'Document';
$lang->score->modules['todo']        = 'Todo';
$lang->score->modules['story']       = 'Story';
$lang->score->modules['bug']         = 'Bug';
$lang->score->modules['testcase']    = 'Case';
$lang->score->modules['testtask']    = 'Request';
$lang->score->modules['build']       = 'Build';
$lang->score->modules['execution']   = $lang->executionCommon;
$lang->score->modules['productplan'] = 'Plan';
$lang->score->modules['release']     = 'Release';
$lang->score->modules['block']       = 'Block';
$lang->score->modules['search']      = 'Search';

$lang->score->methods['task']['create']              = 'Create Task';
$lang->score->methods['task']['close']               = 'Close Task';
$lang->score->methods['task']['finish']              = 'Finish Task';
$lang->score->methods['tutorial']['finish']          = 'Finish Tutorial';
$lang->score->methods['user']['login']               = 'Login';
$lang->score->methods['user']['changePassword']      = 'Change Password';
$lang->score->methods['user']['editProfile']         = 'Edit Profile';
$lang->score->methods['ajax']['selectTheme']         = 'Change Theme';
$lang->score->methods['ajax']['selectLang']          = 'Change Language';
$lang->score->methods['ajax']['showSearchMenu']      = 'Advanced Search';
$lang->score->methods['ajax']['customMenu']          = 'Custom Menu';
$lang->score->methods['ajax']['dragSelected']        = 'Drag on List Page';
$lang->score->methods['ajax']['lastNext']            = 'Next Page Shortcut';
$lang->score->methods['ajax']['switchToDataTable']   = 'Switch Data Table';
$lang->score->methods['ajax']['submitPage']          = 'Change Paging Number';
$lang->score->methods['ajax']['quickJump']           = 'Quick Jump';
$lang->score->methods['ajax']['batchCreate']         = 'First Batch Create';
$lang->score->methods['ajax']['batchEdit']           = 'First Batch Edit';
$lang->score->methods['ajax']['batchOther']          = 'Other Batch Actions';
$lang->score->methods['doc']['create']               = 'Create Document';
$lang->score->methods['todo']['create']              = 'Create Todo';
$lang->score->methods['story']['create']             = 'Create Story';
$lang->score->methods['story']['close']              = 'Close Story';
$lang->score->methods['bug']['create']               = 'Report Bug';
$lang->score->methods['bug']['confirmBug']           = 'Confirm Bug';
$lang->score->methods['bug']['createFormCase']       = 'Report Bug form Case';
$lang->score->methods['bug']['resolve']              = 'Resolve Bug';
$lang->score->methods['bug']['saveTplModal']         = 'Save Template';
$lang->score->methods['testtask']['runCase']         = 'Run Test Case';
$lang->score->methods['testcase']['create']          = 'Create Test Case';
$lang->score->methods['build']['create']             = 'Create Build';
$lang->score->methods['execution']['create']         = "Create {$lang->executionCommon}";
$lang->score->methods['execution']['close']          = "Finish {$lang->executionCommon}";
$lang->score->methods['productplan']['create']       = 'Create Plan';
$lang->score->methods['release']['create']           = 'Create Release';
$lang->score->methods['block']['set']                = 'Custom Block';
$lang->score->methods['search']['saveQuery']         = 'Save Query';
$lang->score->methods['search']['saveQueryAdvanced'] = 'Advanced Search';

$lang->score->extended['user']['changePassword'] = 'Get ##strength,1## point, if the password strength is medium. Get ##strength,2## points, if it is strong.';
$lang->score->extended['execution']['close']     = "After the execution is close, project manager gets ##manager,close## point and team members get ##member,close## points. If it is done on time or earlier, the project manager gets ##manager,onTime## point and team members get ##member,onTime## points.";
$lang->score->extended['bug']['resolve']         = 'After a bug is resolved, get extra points according to its severity. S1, + ##severity,1##; S2 + ##severity,2##, S3 + ##severity,3##.';
$lang->score->extended['bug']['confirmBug']      = 'After a bug is confirmed, get extra points according to its severity. S1, + ##severity,1##; S2 + ##severity,2##, S3 + ##severity,3##.';
$lang->score->extended['task']['finish']         = 'After a task is done, get extra points by round(man-hour / 10  Estimates / Cost) + Priority point (p1 ##pri,1##, p2 ##pri,2##).';
$lang->score->extended['story']['close']         = 'After a story is closed, its creator will get extra ##createID## points.';
/* search */
$lang->search->common        = 'Search';
$lang->search->reset         = 'Reset';
$lang->search->saveQuery     = 'Save Query';
$lang->search->myQuery       = 'My Query';
$lang->search->group1        = 'Group 1';
$lang->search->group2        = 'Group 2';
$lang->search->buildForm     = 'Search Form';
$lang->search->buildQuery    = 'Execute Query';
$lang->search->savedQuery    = 'Saved Query';
$lang->search->deleteQuery   = 'Delete Query';
$lang->search->setQueryTitle = 'Enter a title. Search then the query is saved.';
$lang->search->select        = 'Story/Task Filter';
$lang->search->me            = 'Me';
$lang->search->noQuery       = 'No query is saved yet!';
$lang->search->onMenuBar     = 'Show in Menu';
$lang->search->custom        = 'Custom';

$lang->search->account  = 'Account';
$lang->search->module   = 'Module';
$lang->search->title    = 'Title';
$lang->search->form     = 'Form Field';
$lang->search->sql      = 'SQL Condition';
$lang->search->shortcut = $lang->search->onMenuBar;

$lang->search->operators['=']          = '=';
$lang->search->operators['!=']         = '!=';
$lang->search->operators['>']          = '>';
$lang->search->operators['>=']         = '>=';
$lang->search->operators['<']          = '<';
$lang->search->operators['<=']         = '<=';
$lang->search->operators['include']    = 'Include';
$lang->search->operators['between']    = 'Between';
$lang->search->operators['notinclude'] = 'Exclude';
$lang->search->operators['belong']     = 'Belong';

$lang->search->andor['and']         = 'And';
$lang->search->andor['or']          = 'Or';

$lang->search->null = 'Null';

$lang->userquery        = new stdclass();
$lang->userquery->title = 'Title';

$lang->searchObjects['todo']      = 'Todo';
$lang->searchObjects['effort']    = 'Effort';
$lang->searchObjects['testsuite'] = 'Test Suite';

$lang->search->objectType = 'Object Type';
$lang->search->objectID   = 'Object ID';
$lang->search->content    = 'Content';
$lang->search->addedDate  = 'Added';

$lang->search->index      = 'Full Text Search';
$lang->search->buildIndex = 'Rebuild Index';
$lang->search->preview    = 'Preview';

$lang->search->result            = 'Search Results';
$lang->search->buildSuccessfully = 'Search index initialized.';
$lang->search->executeInfo       = '%s search results for you in %s seconds.';
$lang->search->buildResult       = 'Created index %s and added %s records.';

$lang->search->modules['all']         = 'All';
$lang->search->modules['task']        = 'Task';
$lang->search->modules['bug']         = 'Bug';
$lang->search->modules['case']        = 'Case';
$lang->search->modules['doc']         = 'Doc';
$lang->search->modules['todo']        = 'Todo';
$lang->search->modules['build']       = 'Build';
$lang->search->modules['effort']      = 'Effort';
$lang->search->modules['caselib']     = 'CaseLib';
$lang->search->modules['product']     = $lang->productCommon;
$lang->search->modules['release']     = 'Release';
$lang->search->modules['testtask']    = 'Test Request';
$lang->search->modules['testsuite']   = 'Test Suite';
$lang->search->modules['testreport']  = 'Testing Report';
$lang->search->modules['productplan'] = 'Plan';
$lang->search->modules['program']     = 'Program';
$lang->search->modules['project']     = 'Project';
$lang->search->modules['execution']   = $lang->executionCommon;
$lang->search->modules['story']       = 'Story';

$lang->search->objectTypeList['story']            = $lang->SRCommon;
$lang->search->objectTypeList['requirement']      = $lang->URCommon;
$lang->search->objectTypeList['stage']            = 'stage';
$lang->search->objectTypeList['sprint']           = $lang->executionCommon;
$lang->search->objectTypeList['commonIssue']      = 'Issue';
$lang->search->objectTypeList['stakeholderIssue'] = 'Stakeholder Issue';
/* sso */
$lang->sso = new stdclass();
$lang->sso->settings = 'Settings';
$lang->sso->turnon   = 'Zdoo';
$lang->sso->redirect = 'Auto Jump to Zdoo';
$lang->sso->code     = 'Code';
$lang->sso->key      = 'Secret Key';
$lang->sso->addr     = 'Address';
$lang->sso->bind     = 'User Binding';
$lang->sso->addrNotice = 'Example http://www.ranzhi.com/sys/sso-check.html';

$lang->sso->turnonList = array();
$lang->sso->turnonList[1] = 'On';
$lang->sso->turnonList[0] = 'Off';

$lang->sso->bindType = 'Binding Type';
$lang->sso->bindUser = 'User Binding';

$lang->sso->bindTypeList['bind'] = 'Bind to existing User';
$lang->sso->bindTypeList['add']  = 'Add User';

$lang->sso->help = <<<EOD
<p>1. Zdoo address is required. If use PATH_INFO, it is http://YOUR ZDOO ADDRESS/sys/sso-check.html If GET, it is http://YOUR ZDOO ADDRESS/sys/index.php?m=sso&f=check</p>
<p>2. Code and Secret Key must be the same as set in Zdoo.</p>
EOD;
$lang->sso->bindNotice     = 'User that is just added has no permissions. You have to ask ZenTao Admin to grant permissions to the User.';
$lang->sso->bindNoPassword = 'Password should not be empty.';
$lang->sso->bindNoUser     = 'Password is wrong/User cannot be found!';
$lang->sso->bindHasAccount = 'This username already exists. Change your username or bind to it.';
/* stakeholder */
$lang->stakeholder->common       = 'Stakeholder';
$lang->stakeholder->browse       = 'Stakeholder List';
$lang->stakeholder->batchCreate  = 'Batch Add';
$lang->stakeholder->create       = 'Add Stakeholder';
$lang->stakeholder->edit         = 'Edit Stakeholder';
$lang->stakeholder->view         = 'Stakeholder Details';
$lang->stakeholder->delete       = 'Remove Stakeholder';
$lang->stakeholder->createdBy    = 'CreatedBy';
$lang->stakeholder->createdDate  = 'CreatedDate';
$lang->stakeholder->search       = 'Search';
$lang->stakeholder->browse       = 'List';
$lang->stakeholder->view         = 'User Info';
$lang->stakeholder->basicInfo    = 'Basic Info';
$lang->stakeholder->add          = 'Create';
$lang->stakeholder->communicate  = 'Communications';
$lang->stakeholder->expect       = 'Expectation';
$lang->stakeholder->progress     = 'Progress';
$lang->stakeholder->expectation  = 'Manage Expectation';
$lang->stakeholder->createExpect = 'Add Expectation';
$lang->stakeholder->deleteExpect = 'Delete Expectation';
$lang->stakeholder->editExpect   = 'Edit Expectation';
$lang->stakeholder->viewExpect   = 'Expectation Info';
$lang->stakeholder->issue        = 'Issue Management';
$lang->stakeholder->viewIssue    = 'Active Issues';
$lang->stakeholder->userIssue    = 'Stakeholder Issues';

$lang->stakeholder->viewAction      = 'View Stakeholder';
$lang->stakeholder->viewIssueAction = 'Issue List';

$lang->stakeholder->id          = 'ID';
$lang->stakeholder->user        = 'User';
$lang->stakeholder->type        = 'Type';
$lang->stakeholder->name        = 'Name';
$lang->stakeholder->phone       = 'Mobile';
$lang->stakeholder->qq          = 'QQ';
$lang->stakeholder->weixin      = 'WeChat';
$lang->stakeholder->email       = 'EMail';
$lang->stakeholder->isKey       = 'Key Stakeholder';
$lang->stakeholder->inside      = 'Internal Stakeholder';
$lang->stakeholder->outside     = 'External Stakeholder';
$lang->stakeholder->from        = 'Type';
$lang->stakeholder->company     = 'Company';
$lang->stakeholder->nature      = 'Personality';
$lang->stakeholder->analysis    = 'Impact Analysis';
$lang->stakeholder->strategy    = 'Response';
$lang->stakeholder->expect      = 'Expectation';
$lang->stakeholder->progress    = 'Progress';
$lang->stakeholder->createdBy   = 'CreatedBy';
$lang->stakeholder->createdDate = 'CreatedDate';
$lang->stakeholder->emptyTip    = 'No issue for now.';

$lang->stakeholder->keyList[0] = 'No';
$lang->stakeholder->keyList[1] = 'Yes';

$lang->stakeholder->typeList['inside']  = 'Internal';
$lang->stakeholder->typeList['outside'] = 'External';

$lang->stakeholder->fromList['team']    = 'Project Team';
$lang->stakeholder->fromList['company'] = 'Internal';
$lang->stakeholder->fromList['outside'] = 'External';

$lang->stakeholder->userEmpty           = 'User cannot be empty!';
$lang->stakeholder->nameEmpty           = 'Name cannot be empty!';
$lang->stakeholder->companyEmpty        = 'Company cannot be empty!';
$lang->stakeholder->confirmDelete       = "Do you want to delete the stakeholder?";
$lang->stakeholder->confirmDeleteExpect = "Do you want to remove the expectation?";
$lang->stakeholder->createCommunicate   = '<i class="icon icon-chat-line"></i>added Communication History.';

$lang->stakeholder->action = new stdclass();
$lang->stakeholder->action->communicate = array('main' => '$date, communicatedby <strong>$actor</strong>.');
/* story */
global $config;
$lang->story->create            = "Create Story";
$lang->story->createStory       = 'Create Story';
$lang->story->createRequirement = 'Create Requirement';

$lang->story->requirement       = zget($lang, 'URCommon', "Requirement");
$lang->story->story             = zget($lang, 'SRCommon', "Story");
$lang->story->createStory       = 'Create ' . $lang->story->story;
$lang->story->createRequirement = 'Create ' . $lang->story->requirement;
$lang->story->affectedStories   = "Affected {$lang->story->story}";

$lang->story->batchCreate       = "Batch Create";
$lang->story->change            = "Change";
$lang->story->changed           = 'Change';
$lang->story->assignTo          = 'Assign';
$lang->story->review            = 'Review';
$lang->story->needReview        = 'Need Review';
$lang->story->batchReview       = 'Batch Review';
$lang->story->edit              = "Edit Story";
$lang->story->batchEdit         = "Batch Edit";
$lang->story->subdivide         = 'Decompose';
$lang->story->link              = 'Link';
$lang->story->unlink            = 'Unlink';
$lang->story->track             = 'Track';
$lang->story->trackAB           = 'Track';
$lang->story->processStoryChange= 'Process Story Change';
$lang->story->splitRequirent    = 'Decompose';
$lang->story->close             = 'Close';
$lang->story->batchClose        = 'Batch Close';
$lang->story->activate          = 'Activate';
$lang->story->delete            = "Delete";
$lang->story->view              = "Story Detail";
$lang->story->setting           = "Settings";
$lang->story->tasks             = "Linked Tasks";
$lang->story->bugs              = "Linked Bugs";
$lang->story->cases             = "Linked Cases";
$lang->story->taskCount         = 'Tasks';
$lang->story->bugCount          = 'Bugs';
$lang->story->caseCount         = 'Cases';
$lang->story->taskCountAB       = 'T';
$lang->story->bugCountAB        = 'B';
$lang->story->caseCountAB       = 'C';
$lang->story->linkStory         = 'Link Story';
$lang->story->unlinkStory       = 'UnLinked';
$lang->story->export            = "Export Data";
$lang->story->zeroCase          = "Stories without cases";
$lang->story->zeroTask          = "Only list stories without tasks";
$lang->story->reportChart       = "Report";
$lang->story->copyTitle         = "Copy Title";
$lang->story->batchChangePlan   = "Batch Change Plans";
$lang->story->batchChangeBranch = "Batch Change Branches";
$lang->story->batchChangeStage  = "Batch Change Phases";
$lang->story->batchAssignTo     = "Batch Assign";
$lang->story->batchChangeModule = "Batch Change Modules";
$lang->story->viewAll           = "See All";
$lang->story->toTask            = 'Convert to Task';
$lang->story->batchToTask       = 'Batch Convert to Task';
$lang->story->convertRelations  = 'Convert Relations';

$lang->story->editAction      = "Edit {$lang->SRCommon}";
$lang->story->changeAction    = "Change {$lang->SRCommon}";
$lang->story->assignAction    = "Assign {$lang->SRCommon}";
$lang->story->reviewAction    = "Review {$lang->SRCommon}";
$lang->story->subdivideAction = "Subdivide {$lang->SRCommon}";
$lang->story->closeAction     = "Close {$lang->SRCommon}";
$lang->story->activateAction  = "Activate {$lang->SRCommon}";
$lang->story->deleteAction    = "Delete {$lang->SRCommon}";
$lang->story->exportAction    = "Export {$lang->SRCommon}";
$lang->story->reportAction    = "Report";

$lang->story->skipStory       = '%s is a parent story. It cannot be closed.';
$lang->story->closedStory     = 'Story %s is closed and will not be closed.';
$lang->story->batchToTaskTips = "This action will create a task with the same name as the selected {$lang->SRCommon} and link {$lang->SRCommon} to the task. The closed {$lang->SRCommon} will not be converted into tasks.";
$lang->story->successToTask   = "Converted to task.";
$lang->story->storyRound      = '%s time estimation';

$lang->story->common         = 'Story';
$lang->story->id             = 'ID';
$lang->story->parent         = 'Parent';
$lang->story->product        = $lang->productCommon;
$lang->story->project        = 'Project';
$lang->story->branch         = "Branch/Platform";
$lang->story->module         = 'Module';
$lang->story->moduleAB       = 'Module';
$lang->story->source         = 'From';
$lang->story->sourceNote     = 'Note';
$lang->story->fromBug        = 'From Bug';
$lang->story->title          = 'Title';
$lang->story->category       = 'Category';
$lang->story->color          = 'Color';
$lang->story->toBug          = 'ToBug';
$lang->story->spec           = 'Description';
$lang->story->assign         = 'Assign';
$lang->story->verify         = 'Acceptance';
$lang->story->pri            = 'Priority';
$lang->story->estimate       = "Estimates {$lang->hourCommon}";
$lang->story->estimateAB     = 'Est.' . $lang->hourCommon == 'hour' ? '(h)' : '(SP)';
$lang->story->hour           = $lang->hourCommon;
$lang->story->status         = 'Status';
$lang->story->subStatus      = 'Sub Status';
$lang->story->stage          = 'Phase';
$lang->story->stageAB        = 'Phase';
$lang->story->stagedBy       = 'SetBy';
$lang->story->mailto         = 'Mailto';
$lang->story->openedBy       = 'CreatedBy';
$lang->story->openedDate     = 'CreatedDate';
$lang->story->assignedTo     = 'AssignTo';
$lang->story->assignedDate   = 'AssignedDate';
$lang->story->lastEditedBy   = 'EditedBy';
$lang->story->lastEditedDate = 'EditedDate';
$lang->story->closedBy       = 'ClosedBy';
$lang->story->closedDate     = 'ClosedDate';
$lang->story->closedReason   = 'Reason';
$lang->story->rejectedReason = 'Reject Reason';
$lang->story->reviewedBy     = 'ReviewedBy';
$lang->story->reviewers      = 'Reviewers';
$lang->story->reviewedDate   = 'ReviewedDate';
$lang->story->version        = 'Version';
$lang->story->plan           = 'Linked Plan';
$lang->story->planAB         = 'Plan';
$lang->story->comment        = 'Comment';
$lang->story->children       = "Child {$lang->SRCommon}";
$lang->story->childrenAB     = "C";
$lang->story->linkStories    = 'Linked Stories';
$lang->story->childStories   = 'Decomposed Stories';
$lang->story->duplicateStory = 'Duplicated Story ID';
$lang->story->reviewResult   = 'Review Result';
$lang->story->preVersion     = 'Last Version';
$lang->story->keywords       = 'Tags';
$lang->story->newStory       = 'Continue adding';
$lang->story->colorTag       = 'Color';
$lang->story->files          = 'Files';
$lang->story->copy           = "Copy Story";
$lang->story->total          = "Total Stories";
$lang->story->allStories     = 'All Stories';
$lang->story->draft          = 'Draft';
$lang->story->unclosed       = 'Unclosed';
$lang->story->deleted        = 'Deleted';
$lang->story->released       = 'Released Stories';
$lang->story->URChanged      = 'Requirement Changed';
$lang->story->design         = 'Designs';
$lang->story->case           = 'Cases';
$lang->story->bug            = 'Bugs';
$lang->story->repoCommit     = 'Commits';
$lang->story->noRequirement  = 'No Requirements';
$lang->story->one            = 'One';
$lang->story->field          = 'Synchronized fields';
$lang->story->completeRate   = 'Completion Rate';
$lang->story->reviewed       = 'Reviewed';
$lang->story->toBeReviewed   = 'To Be Reviewed';

$lang->story->ditto       = 'Ditto';
$lang->story->dittoNotice = 'This story is not linked to the same product as the last one is!';

$lang->story->needNotReviewList[0] = 'Need Review';
$lang->story->needNotReviewList[1] = 'Need Not Review';

$lang->story->useList[0] = 'Yes';
$lang->story->useList[1] = 'No';

$lang->story->statusList['']        = '';
$lang->story->statusList['draft']   = 'Draft';
$lang->story->statusList['active']  = 'Active';
$lang->story->statusList['closed']  = 'Closed';
$lang->story->statusList['changed'] = 'Changed';

$lang->story->stageList['']           = '';
$lang->story->stageList['wait']       = 'Waiting';
$lang->story->stageList['planned']    = 'Planned';
$lang->story->stageList['projected']  = 'Projected';
$lang->story->stageList['developing'] = 'Developing';
$lang->story->stageList['developed']  = 'Developed';
$lang->story->stageList['testing']    = 'Testing';
$lang->story->stageList['tested']     = 'Tested';
$lang->story->stageList['verified']   = 'Accepted';
$lang->story->stageList['released']   = 'Released';
$lang->story->stageList['closed']     = 'Closed';

$lang->story->reasonList['']           = '';
$lang->story->reasonList['done']       = 'Already Done';
$lang->story->reasonList['subdivided'] = 'Decomposed';
$lang->story->reasonList['duplicate']  = 'Duplicate';
$lang->story->reasonList['postponed']  = 'Postponed';
$lang->story->reasonList['willnotdo']  = "Won't Do";
$lang->story->reasonList['cancel']     = 'Cancelled';
$lang->story->reasonList['bydesign']   = 'As Designed';
//$lang->story->reasonList['isbug']      = 'Bug!';

$lang->story->reviewResultList['']        = '';
$lang->story->reviewResultList['pass']    = 'Pass';
$lang->story->reviewResultList['revert']  = 'Revert';
$lang->story->reviewResultList['clarify'] = 'To Be Clarified';
$lang->story->reviewResultList['reject']  = 'Reject';

$lang->story->reviewList[0] = 'No';
$lang->story->reviewList[1] = 'Yes';

$lang->story->sourceList['']           = '';
$lang->story->sourceList['customer']   = 'Customer';
$lang->story->sourceList['user']       = 'User';
$lang->story->sourceList['po']         = $lang->productCommon . ' Owner';
$lang->story->sourceList['market']     = 'Marketing';
$lang->story->sourceList['service']    = 'Customer Service';
$lang->story->sourceList['operation']  = 'Operations';
$lang->story->sourceList['support']    = 'Technical Support';
$lang->story->sourceList['competitor'] = 'Competitor';
$lang->story->sourceList['partner']    = 'Partner';
$lang->story->sourceList['dev']        = 'Dev Team';
$lang->story->sourceList['tester']     = 'QA Team';
$lang->story->sourceList['bug']        = 'Bug';
$lang->story->sourceList['forum']      = 'Forum';
$lang->story->sourceList['other']      = 'Others';

$lang->story->priList[]  = '';
$lang->story->priList[1] = '1';
$lang->story->priList[2] = '2';
$lang->story->priList[3] = '3';
$lang->story->priList[4] = '4';

$lang->story->changeList = array();
$lang->story->changeList['no']  = 'Cancel';
$lang->story->changeList['yes'] = 'Confirm';

$lang->story->legendBasicInfo      = 'Basic Info';
$lang->story->legendLifeTime       = 'Story Life ';
$lang->story->legendRelated        = 'Related Info';
$lang->story->legendMailto         = 'Mailto';
$lang->story->legendAttatch        = 'Files';
$lang->story->legendProjectAndTask = $lang->executionCommon . ' And Task';
$lang->story->legendBugs           = 'Linked Bugs';
$lang->story->legendFromBug        = 'From Bug';
$lang->story->legendCases          = 'Linked Cases';
$lang->story->legendLinkStories    = 'Linked Stories';
$lang->story->legendChildStories   = 'Child Stories';
$lang->story->legendSpec           = 'Description';
$lang->story->legendVerify         = 'Acceptance';
$lang->story->legendMisc           = 'Misc.';

$lang->story->lblChange   = 'Change';
$lang->story->lblReview   = 'Review';
$lang->story->lblActivate = 'Activate';
$lang->story->lblClose    = 'Close';
$lang->story->lblTBC      = 'Task/Bug/Case';

$lang->story->checkAffection       = 'Influence';
$lang->story->affectedProjects     = "{$lang->project->common}s/{$lang->execution->common}s";
$lang->story->affectedBugs         = 'Bugs';
$lang->story->affectedCases        = 'Cases';

$lang->story->specTemplate         = "As a < type of user >, I want < some goal > so that < some reason >.";
$lang->story->needNotReview        = 'No Review Required';
$lang->story->successSaved         = "Story is saved!";
$lang->story->confirmDelete        = "Do you want to delete this story?";
$lang->story->errorEmptyChildStory = '『Decomposed Stories』canot be blank.';
$lang->story->errorNotSubdivide    = "If the status is not active, or the stage is not wait, or a sub story, it cannot be subdivided.";
$lang->story->errorEmptyReviewedBy = "『ReviewedBy』canot be blank.";
$lang->story->mustChooseResult     = 'Select Result';
$lang->story->mustChoosePreVersion = 'Select a version to revert to.';
$lang->story->noStory              = 'No stories yet. ';
$lang->story->noRequirement        = 'No requirements yet. ';
$lang->story->ignoreChangeStage    = 'Story %s is in Draft or Closed status. Please review it..';
$lang->story->cannotDeleteParent   = "Can not delete parent {$lang->SRCommon}";
$lang->story->moveChildrenTips     = "Its Child {$lang->SRCommon} will be moved to the selected product when editing the linked product of Parent {$lang->SRCommon}.";
$lang->story->changeTips           = 'The story associated with the requirements to change, click "Cancel" ignore this change, click "Confirm" to change the story.';
$lang->story->estimateMustBeNumber = 'Estimate value must be number.';

$lang->story->form = new stdclass();
$lang->story->form->area     = 'Scope';
$lang->story->form->desc     = 'What story is it? What is the acceptance?';
$lang->story->form->resource = 'Who will allocate resources? How long does it take?';
$lang->story->form->file     = 'If any file that is linked to a story, please click Here to upload it.';

$lang->story->action = new stdclass();
$lang->story->action->reviewed              = array('main' => '$date, recorded by <strong>$actor</strong>. The result is <strong>$extra</strong>.', 'extra' => 'reviewResultList');
$lang->story->action->passreviewed          = array('main' => '$date, determined by the <strong>System</strong>. The result is <strong>Pass</strong>.');
$lang->story->action->clarifyreviewed       = array('main' => '$date, determined by the <strong>System</strong>. The result is <strong>Review Failed</strong>. Please re-initiate the review after changing.');
$lang->story->action->rejectreviewed        = array('main' => '$date, recorded by <strong>$actor</strong>. The result is <strong>$extra</strong>. The reasion is <strong>$reason</strong>.', 'extra' => 'reviewResultList', 'reason' => 'reasonList');
$lang->story->action->closed                = array('main' => '$date, closed by <strong>$actor</strong>. The reasion is <strong>$extra</strong> $appendLink.', 'extra' => 'reasonList');
$lang->story->action->reviewclosed          = array('main' => '$date, closed by <strong>System</strong>. The reasion is <strong>Review Failed</strong>.');
$lang->story->action->linked2plan           = array('main' => '$date, linked by <strong>$actor</strong> to Plan <strong>$extra</strong>');
$lang->story->action->unlinkedfromplan      = array('main' => '$date, unlinked by <strong>$actor</strong> from Plan <strong>$extra</strong>.');
$lang->story->action->linked2execution      = array('main' => '$date, linked by <strong>$actor</strong> to ' . $lang->executionCommon . ' <strong>$extra</strong>.');
$lang->story->action->unlinkedfromexecution = array('main' => '$date, unlinked by <strong>$actor</strong> from ' . $lang->executionCommon . ' <strong>$extra</strong>.');
$lang->story->action->linked2project        = array('main' => '$date, linked by <strong>$actor</strong> to project <strong>$extra</strong>.');
$lang->story->action->unlinkedfromproject   = array('main' => '$date, unlinked by <strong>$actor</strong> from project <strong>$extra</strong>.');
$lang->story->action->linked2build          = array('main' => '$date, linked by <strong>$actor</strong> to Build <strong>$extra</strong>');
$lang->story->action->unlinkedfrombuild     = array('main' => '$date, unlinked by <strong>$actor</strong> from Build <strong>$extra</strong>.');
$lang->story->action->linked2release        = array('main' => '$date, linked by <strong>$actor</strong> to Release <strong>$extra</strong>');
$lang->story->action->unlinkedfromrelease   = array('main' => '$date, unlinked by <strong>$actor</strong> from Release <strong>$extra</strong>.');
$lang->story->action->linkrelatedstory      = array('main' => '$date, linked by <strong>$actor</strong> to Story <strong>$extra</strong>.');
$lang->story->action->subdividestory        = array('main' => '$date, decomposed by <strong>$actor</strong> to Story <strong>$extra</strong>.');
$lang->story->action->unlinkrelatedstory    = array('main' => '$date, unlinked by <strong>$actor</strong> from Story <strong>$extra</strong>.');
$lang->story->action->unlinkchildstory      = array('main' => '$date, unlinked by <strong>$actor</strong> Decomposed Story <strong>$extra</strong>.');

$lang->story->report = new stdclass();
$lang->story->report->common = 'Report';
$lang->story->report->select = 'Select Report Type';
$lang->story->report->create = 'Create Report';
$lang->story->report->value  = 'Reports';

$lang->story->report->charts['storysPerProduct']      = 'Group by ' . $lang->productCommon . ' Story';
$lang->story->report->charts['storysPerModule']       = 'Group by Module Story';
$lang->story->report->charts['storysPerSource']       = 'Group by Story Source';
$lang->story->report->charts['storysPerPlan']         = 'Group by Plan';
$lang->story->report->charts['storysPerStatus']       = 'Group by Status';
$lang->story->report->charts['storysPerStage']        = 'Group by Phase';
$lang->story->report->charts['storysPerPri']          = 'Group by Priority';
$lang->story->report->charts['storysPerEstimate']     = 'Group by Estimates';
$lang->story->report->charts['storysPerOpenedBy']     = 'Group by CreatedBy';
$lang->story->report->charts['storysPerAssignedTo']   = 'Group by AssignedTo';
$lang->story->report->charts['storysPerClosedReason'] = 'Group by Closed Reason';
$lang->story->report->charts['storysPerChange']       = 'Group by Changed Story';

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
$lang->story->report->storysPerModule->item       = 'Module';
$lang->story->report->storysPerSource->item       = 'Source';
$lang->story->report->storysPerPlan->item         = 'Plan';
$lang->story->report->storysPerStatus->item       = 'Status';
$lang->story->report->storysPerStage->item        = 'Phase';
$lang->story->report->storysPerPri->item          = 'Priority';
$lang->story->report->storysPerOpenedBy->item     = 'OpenedBy';
$lang->story->report->storysPerAssignedTo->item   = 'AssignedTo';
$lang->story->report->storysPerClosedReason->item = 'Reason';
$lang->story->report->storysPerEstimate->item     = 'Estimates';
$lang->story->report->storysPerChange->item       = 'Changed Story';

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
$lang->story->report->storysPerModule->graph->xAxisName       = 'Module';
$lang->story->report->storysPerSource->graph->xAxisName       = 'Source';
$lang->story->report->storysPerPlan->graph->xAxisName         = 'Plan';
$lang->story->report->storysPerStatus->graph->xAxisName       = 'Status';
$lang->story->report->storysPerStage->graph->xAxisName        = 'Phase';
$lang->story->report->storysPerPri->graph->xAxisName          = 'Priority';
$lang->story->report->storysPerOpenedBy->graph->xAxisName     = 'CreatedBy';
$lang->story->report->storysPerAssignedTo->graph->xAxisName   = 'AssignedTo';
$lang->story->report->storysPerClosedReason->graph->xAxisName = 'Close Reason';
$lang->story->report->storysPerEstimate->graph->xAxisName     = 'Estimates ';
$lang->story->report->storysPerChange->graph->xAxisName       = 'Change Times';

$lang->story->placeholder = new stdclass();
$lang->story->placeholder->estimate = $lang->story->hour;

$lang->story->chosen = new stdClass();
$lang->story->chosen->reviewedBy = 'Choose ReviewedBy';

$lang->story->notice = new stdClass();
$lang->story->notice->closed = 'Story that you select is closed!';

$lang->story->convertToTask = new stdClass();
$lang->story->convertToTask->fieldList = array();
$lang->story->convertToTask->fieldList['module']     = 'Module';
$lang->story->convertToTask->fieldList['spec']       = "Description";
$lang->story->convertToTask->fieldList['pri']        = 'Priority';
$lang->story->convertToTask->fieldList['mailto']     = 'Mailto';
$lang->story->convertToTask->fieldList['assignedTo'] = 'AssignTo';

$lang->story->categoryList['feature']     = 'Feature';
$lang->story->categoryList['interface']   = 'Interface';
$lang->story->categoryList['performance'] = 'Performance';
$lang->story->categoryList['safe']        = 'Safe';
$lang->story->categoryList['experience']  = 'Experience';
$lang->story->categoryList['improve']     = 'Improve';
$lang->story->categoryList['other']       = 'Other';
/* svn */
$lang->svn->common  = 'Subversion';
$lang->svn->cat     = 'View Source Code';
$lang->svn->diff    = 'Compare Source Code';
$lang->svn->apiSync = 'API: Syncrhonize SVN Logs';
/* task */
$lang->task->index               = "Home";
$lang->task->create              = "Create Task";
$lang->task->batchCreate         = "Batch Create";
$lang->task->batchCreateChildren = "Batch Create Child Tasks";
$lang->task->batchEdit           = "Batch Edit";
$lang->task->batchChangeModule   = "Batch Change Modules";
$lang->task->batchClose          = "Batch Close";
$lang->task->batchCancel         = "Batch Cancel";
$lang->task->edit                = "Edit Task";
$lang->task->delete              = "Delete";
$lang->task->deleteAction        = "Delete Task";
$lang->task->deleted             = "Deleted";
$lang->task->delayed             = 'Delayed';
$lang->task->view                = "Task Detail";
$lang->task->logEfforts          = "Effort";
$lang->task->record              = "Estimates";
$lang->task->start               = "Start";
$lang->task->startAction         = "Start Task";
$lang->task->restart             = "Continue";
$lang->task->restartAction       = "Continue Task";
$lang->task->finishAction        = "Finish Task";
$lang->task->finish              = "Finish";
$lang->task->pause               = "Pause";
$lang->task->pauseAction         = "Pause Task";
$lang->task->close               = "Close";
$lang->task->closeAction         = "Close Task";
$lang->task->cancel              = "Cancel";
$lang->task->cancelAction        = "Cancel Task";
$lang->task->activateAction      = "Activate Task";
$lang->task->activate            = "Activate";
$lang->task->export              = "Export Data";
$lang->task->exportAction        = "Export Task";
$lang->task->reportChart         = "Report Chart";
$lang->task->fromBug             = 'From Bug';
$lang->task->case                = 'Linked Case';
$lang->task->confirmStoryChange  = "Confirm Change";
$lang->task->storyChange         = "Story Changed";
$lang->task->progress            = 'Progress';
$lang->task->progressAB          = '%';
$lang->task->progressTips        = 'Cost/(Cost+Left)';
$lang->task->copy                = 'Copy Task';
$lang->task->waitTask            = 'Waiting Task';
$lang->task->allModule           = 'All Module';

$lang->task->common            = 'Task';
$lang->task->id                = 'ID';
$lang->task->project           = 'Project';
$lang->task->execution         = $lang->executionCommon;
$lang->task->module            = 'Module';
$lang->task->moduleAB          = 'Module';
$lang->task->story             = 'Story';
$lang->task->storyAB           = 'Story';
$lang->task->storySpec         = 'Story Description';
$lang->task->storyVerify       = 'Acceptance Criteria';
$lang->task->storyVersion      = 'Story Version';
$lang->task->color             = 'Color';
$lang->task->name              = 'Name';
$lang->task->type              = 'Type';
$lang->task->pri               = 'Priority';
$lang->task->mailto            = 'Mailto';
$lang->task->estimate          = 'Estimates';
$lang->task->estimateAB        = 'Est.';
$lang->task->left              = 'Hours Left';
$lang->task->leftAB            = 'Left';
$lang->task->consumed          = 'Total Cost';
$lang->task->currentConsumed   = 'Current Cost';
$lang->task->myConsumed        = 'My Cost';
$lang->task->consumedAB        = 'Cost';
$lang->task->hour              = 'Hours';
$lang->task->consumedThisTime  = 'Cost';
$lang->task->leftThisTime      = 'Left';
$lang->task->datePlan          = 'Timeframe';
$lang->task->estStarted        = 'StartDate';
$lang->task->realStarted       = 'ActualStart';
$lang->task->date              = 'Date';
$lang->task->deadline          = 'Deadline';
$lang->task->deadlineAB        = 'Deadline';
$lang->task->status            = 'Status';
$lang->task->subStatus         = 'Sub Status';
$lang->task->desc              = 'Description';
$lang->task->assign            = 'Assign';
$lang->task->assignAction      = 'Assign Task';
$lang->task->assignTo          = $lang->task->assign;
$lang->task->batchAssignTo     = 'Batch Assign';
$lang->task->assignedTo        = 'AssignTo';
$lang->task->assignedToAB      = 'AssignedTo';
$lang->task->assignedDate      = 'AssignedDate';
$lang->task->openedBy          = 'CreatedBy';
$lang->task->openedDate        = 'CreatedDate';
$lang->task->openedDateAB      = 'CreatedOn';
$lang->task->finishedBy        = 'FinishedBy';
$lang->task->finishedByAB      = 'FinishedBy';
$lang->task->finishedDate      = 'ActualFinished';
$lang->task->finishedDateAB    = 'ActualFinish';
$lang->task->finishedList      = 'FinishedBy';
$lang->task->canceledBy        = 'CancelledBy';
$lang->task->canceledDate      = 'CancelledDate';
$lang->task->closedBy          = 'ClosedBy';
$lang->task->closedDate        = 'ClosedDate';
$lang->task->closedReason      = 'CloseReason';
$lang->task->lastEditedBy      = 'EditedBy';
$lang->task->lastEditedDate    = 'EditedDate';
$lang->task->lastEdited        = 'EditedBy';
$lang->task->recordEstimate    = 'Effort';
$lang->task->editEstimate      = 'Edit Estimates';
$lang->task->deleteEstimate    = 'Delete Estimates';
$lang->task->colorTag          = 'Color';
$lang->task->files             = 'Files';
$lang->task->hasConsumed       = 'Already Cost';
$lang->task->multiple          = 'Multiple Users';
$lang->task->multipleAB        = 'M';
$lang->task->team              = 'Team';
$lang->task->transfer          = 'Transfer';
$lang->task->transferTo        = 'Transfer To';
$lang->task->children          = 'Child Task';
$lang->task->childrenAB        = 'C';
$lang->task->parent            = 'Parent Task';
$lang->task->parentAB          = 'Parent';
$lang->task->lblPri            = 'P';
$lang->task->lblHour           = '(h)';
$lang->task->lblTestStory      = 'Story Tested';

$lang->task->recordEstimateAction = 'Record Estimate';

$lang->task->ditto             = 'Ditto';
$lang->task->dittoNotice       = "This Task is not linked to the %s as the previous one is!";
$lang->task->selectTestStory   = 'Select Story Testd';
$lang->task->selectAllUser     = 'All Users';
$lang->task->noStory           = 'No Story Linked';
$lang->task->noAssigned        = 'Unassigned';
$lang->task->noFinished        = 'Unfinished';
$lang->task->noClosed          = 'Unclosed';
$lang->task->yesterdayFinished = 'Task Finished Yesterday';
$lang->task->allTasks          = 'Task';

$lang->task->statusList['']        = '';
$lang->task->statusList['wait']    = 'Waiting';
$lang->task->statusList['doing']   = 'Doing';
$lang->task->statusList['done']    = 'Done';
$lang->task->statusList['pause']   = 'Paused';
$lang->task->statusList['cancel']  = 'Cancelled';
$lang->task->statusList['closed']  = 'Closed';

$lang->task->typeList['']        = '';
$lang->task->typeList['design']  = 'Design';
$lang->task->typeList['devel']   = 'Develop';
$lang->task->typeList['request'] = 'Request';
$lang->task->typeList['test']    = 'Testing';
$lang->task->typeList['study']   = 'Study';
$lang->task->typeList['discuss'] = 'Discuss';
$lang->task->typeList['ui']      = 'UI';
$lang->task->typeList['affair']  = 'Work';
$lang->task->typeList['misc']    = 'Misc.';

$lang->task->priList[0]  = '';
$lang->task->priList[1]  = '1';
$lang->task->priList[2]  = '2';
$lang->task->priList[3]  = '3';
$lang->task->priList[4]  = '4';

$lang->task->reasonList['']       = '';
$lang->task->reasonList['done']   = 'Done';
$lang->task->reasonList['cancel'] = 'Cancelled';

$lang->task->afterChoices['continueAdding'] = ' Continue Adding Tasks';
$lang->task->afterChoices['toTaskList']     = 'Go to Task List Page';
$lang->task->afterChoices['toStoryList']    = 'Go to Story List Page';

$lang->task->legendBasic  = 'Basic Info';
$lang->task->legendEffort = 'Effort';
$lang->task->legendLife   = 'Task Life';
$lang->task->legendDesc   = 'Task Description';

$lang->task->confirmDelete          = "Do you want to delete this task?";
$lang->task->confirmDeleteEstimate  = "Do you want to delete it?";
$lang->task->copyStoryTitle         = "Copy Story";
$lang->task->afterSubmit            = "Next ";
$lang->task->successSaved           = "Created!";
$lang->task->delayWarning           = " <strong class='text-danger'> Delay %s days </strong>";
$lang->task->remindBug              = "This task is converted from a bug. Do you want to update the Bug:%s?";
$lang->task->confirmChangeExecution = "If you change {$lang->executionCommon}, Module, Story and AssignedTo will also be changed. Do you want to change it?";
$lang->task->confirmFinish          = '"Left Hour" is 0. Do you want to change the status to "Finished"?';
$lang->task->confirmRecord          = '"Left Hour" is 0. Do you want to set the task as "Finished"?';
$lang->task->confirmTransfer        = '"Left Hour" is 0，Do you want to transfer task?';
$lang->task->noticeTaskStart        = '"Cost Hour" and "Left Hour" cannot be 0 at the same time.';
$lang->task->noticeLinkStory        = "No story has been linked. You can %s for this project, then %s.";
$lang->task->noticeSaveRecord       = 'Your Hour is not saved. Please save it first.';
$lang->task->commentActions         = '%s. %s, commented by <strong>%s</strong>.';
$lang->task->deniedNotice           = 'Only the %s can %s the task.';
$lang->task->noTask                 = 'No tasks yet. ';
$lang->task->createDenied           = 'Create Task is denied in this project';
$lang->task->cannotDeleteParent     = 'Cannot delete parent task';
$lang->task->addChildTask           = 'Because the task has already consumed consumption, to ensure data consistency, we will help you create a subtask with the same name to record the consumption.';

$lang->task->error = new stdclass();
$lang->task->error->totalNumber       = '"Total Cost" must be numbers.';
$lang->task->error->consumedNumber    = '"Current Cost" must be numbers.';
$lang->task->error->estimateNumber    = '"Estimates" must be numbers.';
$lang->task->error->recordMinus       = 'Work hours should not be negative number.';
$lang->task->error->leftNumber        = '"Left" must be numbers.';
$lang->task->error->recordMinus       = 'Work hours should not be negative number.';
$lang->task->error->consumedSmall     = '"Total Cost" must be > the last number.';
$lang->task->error->consumedThisTime  = 'Please enter "Hours Cost"';
$lang->task->error->left              = 'Please enter "Hours Left"';
$lang->task->error->work              = '"Comment" must be <  %d characters.';
$lang->task->error->skipClose         = 'Task: %s is not "Finished” or “Cancelled”. Do you want to close it?';
$lang->task->error->consumed          = 'Task: %s hour must be < 0. Ignore changes to this task.';
$lang->task->error->assignedTo        = 'Multi-user task in the current status cannot be assigned to a member who is not in the task team.';
$lang->task->error->consumedEmpty     = '"Current Cost" should not be 0.';
$lang->task->error->deadlineSmall     = '"Deadline" must be greater than "StartDate".';
$lang->task->error->alreadyStarted    = 'You cannot start this task, because it is started.';
$lang->task->error->realStartedEmpty  = '"Real Started" should not be empty.';
$lang->task->error->finishedDateEmpty = '"Finished Date" should not be empty.';
$lang->task->error->alreadyConsumed   = 'The currently selected parent task has been consumed.';

$lang->task->report = new stdclass();
$lang->task->report->common = 'Report';
$lang->task->report->select = 'Select Report Type';
$lang->task->report->create = 'Create Report';
$lang->task->report->value  = 'Tasks';

$lang->task->report->charts['tasksPerExecution']    = 'Group by ' . $lang->executionCommon . 'Task';
$lang->task->report->charts['tasksPerModule']       = 'Group by Module Task';
$lang->task->report->charts['tasksPerAssignedTo']   = 'Group by AssignedTo';
$lang->task->report->charts['tasksPerType']         = 'Group by Task Type';
$lang->task->report->charts['tasksPerPri']          = 'Group by Task Priority';
$lang->task->report->charts['tasksPerStatus']       = 'Group by Task Status';
$lang->task->report->charts['tasksPerDeadline']     = 'Group by Task Deadline';
$lang->task->report->charts['tasksPerEstimate']     = 'Group by Estimates';
$lang->task->report->charts['tasksPerLeft']         = 'Group by Hours Left';
$lang->task->report->charts['tasksPerConsumed']     = 'Group by Hours Cost';
$lang->task->report->charts['tasksPerFinishedBy']   = 'Group by FinishedBy';
$lang->task->report->charts['tasksPerClosedReason'] = 'Group by Close Reason';
$lang->task->report->charts['finishedTasksPerDay']  = 'Group by Tasks Finished/Day';

$lang->task->report->options = new stdclass();
$lang->task->report->options->graph = new stdclass();
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
$lang->task->report->tasksPerModule->item       = 'Module';
$lang->task->report->tasksPerAssignedTo->item   = 'AssignedTo';
$lang->task->report->tasksPerType->item         = 'Type';
$lang->task->report->tasksPerPri->item          = 'Priority';
$lang->task->report->tasksPerStatus->item       = 'Status';
$lang->task->report->tasksPerDeadline->item     = 'Date';
$lang->task->report->tasksPerEstimate->item     = 'Estimates';
$lang->task->report->tasksPerLeft->item         = 'Hours Left';
$lang->task->report->tasksPerConsumed->item     = 'Hours Cost';
$lang->task->report->tasksPerFinishedBy->item   = 'FinishedBy';
$lang->task->report->tasksPerClosedReason->item = 'Reason';
$lang->task->report->finishedTasksPerDay->item  = 'Date';

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
$lang->task->report->tasksPerModule->graph->xAxisName       = 'Module';
$lang->task->report->tasksPerAssignedTo->graph->xAxisName   = 'User';
$lang->task->report->tasksPerType->graph->xAxisName         = 'Type';
$lang->task->report->tasksPerPri->graph->xAxisName          = 'Priority';
$lang->task->report->tasksPerStatus->graph->xAxisName       = 'Status';
$lang->task->report->tasksPerDeadline->graph->xAxisName     = 'Date';
$lang->task->report->tasksPerEstimate->graph->xAxisName     = 'Estimates';
$lang->task->report->tasksPerLeft->graph->xAxisName         = 'Hours Left';
$lang->task->report->tasksPerConsumed->graph->xAxisName     = 'Hours Cost';
$lang->task->report->tasksPerFinishedBy->graph->xAxisName   = 'User';
$lang->task->report->tasksPerClosedReason->graph->xAxisName = 'Close Reason';

$lang->task->report->finishedTasksPerDay->type             = 'bar';
$lang->task->report->finishedTasksPerDay->graph->xAxisName = 'Date';

$lang->taskestimate = new stdclass();
$lang->taskestimate->consumed = 'Estimates';
/* testcase */
$lang->testcase->id               = 'ID';
$lang->testcase->product          = $lang->productCommon;
$lang->testcase->module           = 'Module';
$lang->testcase->lib              = "Case Library";
$lang->testcase->branch           = "Branch/Platform";
$lang->testcase->moduleAB         = 'Module';
$lang->testcase->story            = 'Story';
$lang->testcase->storyVersion     = 'Story Version';
$lang->testcase->color            = 'Color';
$lang->testcase->order            = 'Order';
$lang->testcase->title            = 'Title';
$lang->testcase->precondition     = 'Prerequisite';
$lang->testcase->pri              = 'Priority';
$lang->testcase->type             = 'Type';
$lang->testcase->status           = 'Status';
$lang->testcase->subStatus        = 'Sub Status';
$lang->testcase->steps            = 'Steps';
$lang->testcase->openedBy         = 'CreatedBy';
$lang->testcase->openedDate       = 'CreatedDate';
$lang->testcase->lastEditedBy     = 'EditedBy';
$lang->testcase->result           = 'Result';
$lang->testcase->real             = 'Details';
$lang->testcase->keywords         = 'Tags';
$lang->testcase->files            = 'Files';
$lang->testcase->linkCase         = 'Linked Cases';
$lang->testcase->linkCases        = 'Link Case';
$lang->testcase->unlinkCase       = 'Unlink Cases';
$lang->testcase->stage            = 'Phase';
$lang->testcase->reviewedBy       = 'ReviewedBy';
$lang->testcase->reviewedDate     = 'ReviewedDate';
$lang->testcase->reviewResult     = 'Review Result';
$lang->testcase->reviewedByAB     = 'ReviewedBy';
$lang->testcase->reviewedDateAB   = 'ReviewedDate';
$lang->testcase->reviewResultAB   = 'Result';
$lang->testcase->forceNotReview   = 'No Review Required';
$lang->testcase->lastEditedByAB   = 'EditedBy';
$lang->testcase->lastEditedDateAB = 'Edited';
$lang->testcase->lastEditedDate   = 'EditedDate';
$lang->testcase->version          = 'Case Version';
$lang->testcase->lastRunner       = 'RunBy';
$lang->testcase->lastRunDate      = 'LastRun';
$lang->testcase->assignedTo       = 'AssingedTo';
$lang->testcase->colorTag         = 'Color';
$lang->testcase->lastRunResult    = 'Result';
$lang->testcase->desc             = 'Steps';
$lang->testcase->xml              = 'XML';
$lang->testcase->expect           = 'Expectations';
$lang->testcase->allProduct       = "All {$lang->productCommon}s";
$lang->testcase->fromBug          = 'From Bug';
$lang->testcase->toBug            = 'To Bug';
$lang->testcase->changed          = 'Changed';
$lang->testcase->bugs             = 'Reported Bug';
$lang->testcase->bugsAB           = 'B';
$lang->testcase->results          = 'Result';
$lang->testcase->resultsAB        = 'R';
$lang->testcase->stepNumber       = 'Steps';
$lang->testcase->stepNumberAB     = 'S';
$lang->testcase->createBug        = 'Report Bug';
$lang->testcase->fromModule       = 'Source Module';
$lang->testcase->fromCase         = 'Source Case';
$lang->testcase->sync             = 'Synchronize Case';
$lang->testcase->ignore           = 'Ignore';
$lang->testcase->fromTesttask     = 'From Test Request';
$lang->testcase->fromCaselib      = 'From Case Library';
$lang->testcase->deleted          = 'Deleted';
$lang->testcase->browseUnits      = 'Unit Test';

$lang->case = $lang->testcase;  // For dao checking using. Because 'case' is a php keywords, so the module name is testcase, table name is still case.

$lang->testcase->stepID      = 'ID';
$lang->testcase->stepDesc    = 'Step';
$lang->testcase->stepExpect  = 'Expectation';
$lang->testcase->stepVersion = 'Version';

$lang->testcase->common                  = 'Case';
$lang->testcase->index                   = "Case Home";
$lang->testcase->create                  = "Add Case";
$lang->testcase->batchCreate             = "Batch Add";
$lang->testcase->delete                  = "Delete";
$lang->testcase->deleteAction            = "Delete Case";
$lang->testcase->view                    = "Case Detail";
$lang->testcase->review                  = "Need Review";
$lang->testcase->reviewAB                = "Review";
$lang->testcase->batchReview             = "Batch Review";
$lang->testcase->edit                    = "Edit Case";
$lang->testcase->batchEdit               = "Batch Edit ";
$lang->testcase->batchChangeModule       = "Batch Change Modules";
$lang->testcase->confirmLibcaseChange    = "Confirm CaseLib Change";
$lang->testcase->ignoreLibcaseChange     = "Ignore CaseLib Change";
$lang->testcase->batchChangeBranch       = "Batch Change Branches";
$lang->testcase->groupByStories          = 'Group by Story';
$lang->testcase->batchDelete             = "Batch Delete ";
$lang->testcase->batchConfirmStoryChange = "Batch Confirm";
$lang->testcase->batchCaseTypeChange     = "Batch Change Types";
$lang->testcase->browse                  = "Case List";
$lang->testcase->groupCase               = "View By Group";
$lang->testcase->import                  = "Import";
$lang->testcase->importAction            = "Import Case";
$lang->testcase->fileImport              = "Import CSV";
$lang->testcase->importFromLib           = "Import From Library";
$lang->testcase->showImport              = "Show Import";
$lang->testcase->exportTemplet           = "Export Template";
$lang->testcase->export                  = "Export Data";
$lang->testcase->exportAction            = "Export Case";
$lang->testcase->reportChart             = 'Report Chart';
$lang->testcase->reportAction            = 'Case Report';
$lang->testcase->confirmChange           = 'Confirm Case Change';
$lang->testcase->confirmStoryChange      = 'Confirm Story Change';
$lang->testcase->copy                    = 'Copy Case';
$lang->testcase->group                   = 'Group';
$lang->testcase->groupName               = 'Group Name';
$lang->testcase->step                    = 'Steps';
$lang->testcase->stepChild               = 'Child Steps';
$lang->testcase->viewAll                 = 'All Cases';

$lang->testcase->new = 'New';

$lang->testcase->num = 'Case Rows:';

$lang->testcase->deleteStep   = 'Delete';
$lang->testcase->insertBefore = 'Inserted Before';
$lang->testcase->insertAfter  = 'Inserted After';

$lang->testcase->assignToMe   = 'AssignedToMe';
$lang->testcase->openedByMe   = 'CreatedByMe';
$lang->testcase->allCases     = 'All';
$lang->testcase->allTestcases = 'All Cases';
$lang->testcase->needConfirm  = 'Story Changed';
$lang->testcase->bySearch     = 'Search';
$lang->testcase->unexecuted   = 'Pending';

$lang->testcase->lblStory       = 'Linked Story';
$lang->testcase->lblLastEdited  = 'EditedBy';
$lang->testcase->lblTypeValue   = 'Type Value';
$lang->testcase->lblStageValue  = 'Phase Value';
$lang->testcase->lblStatusValue = 'Status Value';

$lang->testcase->legendBasicInfo    = 'Basic Information';
$lang->testcase->legendAttatch      = 'Files';
$lang->testcase->legendLinkBugs     = 'Bugs';
$lang->testcase->legendOpenAndEdit  = 'Create/Edit';
$lang->testcase->legendComment      = 'Comment';

$lang->testcase->summary            = "Total <strong>%s</strong> cases on this page, and <strong>%s</strong> cases run.";
$lang->testcase->confirmDelete      = 'Do you want to delete this case?';
$lang->testcase->confirmBatchDelete = 'Do you want to batch delete cases?';
$lang->testcase->ditto              = 'Ditto';
$lang->testcase->dittoNotice        = 'This Case is not linked to the Product as the last one is!';

$lang->testcase->reviewList[0] = 'NO';
$lang->testcase->reviewList[1] = 'YES';

$lang->testcase->priList[0] = '';
$lang->testcase->priList[3] = 3;
$lang->testcase->priList[1] = 1;
$lang->testcase->priList[2] = 2;
$lang->testcase->priList[4] = 4;

$lang->testcase->typeList['']            = '';
$lang->testcase->typeList['feature']     = 'Feature';
$lang->testcase->typeList['performance'] = 'Performance';
$lang->testcase->typeList['config']      = 'Configuration';
$lang->testcase->typeList['install']     = 'Installation';
$lang->testcase->typeList['security']    = 'Security';
$lang->testcase->typeList['interface']   = 'Interface';
$lang->testcase->typeList['unit']        = 'Unit';
$lang->testcase->typeList['other']       = 'Others';

$lang->testcase->stageList['']           = '';
$lang->testcase->stageList['unittest']   = 'Unit Testing';
$lang->testcase->stageList['feature']    = 'Function Testing';
$lang->testcase->stageList['intergrate'] = 'Integration Testing';
$lang->testcase->stageList['system']     = 'System Testing';
$lang->testcase->stageList['smoke']      = 'Smoking Testing';
$lang->testcase->stageList['bvt']        = 'BVT Testing';

$lang->testcase->reviewResultList['']        = '';
$lang->testcase->reviewResultList['pass']    = 'Pass';
$lang->testcase->reviewResultList['clarify'] = 'To Be Clarified';

$lang->testcase->statusList['']            = '';
$lang->testcase->statusList['wait']        = 'Waiting';
$lang->testcase->statusList['normal']      = 'Normal';
$lang->testcase->statusList['blocked']     = 'Blocked';
$lang->testcase->statusList['investigate'] = 'Studying';

$lang->testcase->resultList['n/a']     = 'Ignore';
$lang->testcase->resultList['pass']    = 'Pass';
$lang->testcase->resultList['fail']    = 'Fail';
$lang->testcase->resultList['blocked'] = 'Blocked';

$lang->testcase->buttonToList = 'Back';

$lang->testcase->errorEncode      = 'No data. Please select right encoding and upload again!';
$lang->testcase->noFunction       = 'Iconv and mb_convert_encoding are not found. You cannot convert the data to the encoding you want!';
$lang->testcase->noRequire        = "Row %s has“%s ”which is a required field and it should not be blank.";
$lang->testcase->noLibrary        = "No library exists. Please create one first.";
$lang->testcase->mustChooseResult = 'Review result is required.';
$lang->testcase->noModule         = '<div>You have no modules.</div><div>Manage it now.</div>';
$lang->testcase->noCase           = 'No cases yet. ';

$lang->testcase->searchStories = 'Enter to search for stories';
$lang->testcase->selectLib     = 'Select Library';

$lang->testcase->action = new stdclass();
$lang->testcase->action->fromlib               = array('main' => '$date, imported by <strong>$actor</strong> from <strong>$extra</strong>.');
$lang->testcase->action->reviewed              = array('main' => '$date, recorded by <strong>$actor</strong> and the review result is <strong>$extra</strong>.', 'extra' => 'reviewResultList');
$lang->testcase->action->linked2project        = array('main' => '$date, 由 <strong>$actor</strong> 关联到项目 <strong>$extra</strong>。');
$lang->testcase->action->unlinkedfromproject   = array('main' => '$date, 由 <strong>$actor</strong> 从项目 <strong>$extra</strong> 移除。');
$lang->testcase->action->linked2execution      = array('main' => '$date, 由 <strong>$actor</strong> 关联到' . $lang->executionCommon . ' <strong>$extra</strong>。');
$lang->testcase->action->unlinkedfromexecution = array('main' => '$date, 由 <strong>$actor</strong> 从' . $lang->executionCommon . ' <strong>$extra</strong> 移除。');

$lang->testcase->featureBar['browse']['all']         = $lang->testcase->allCases;
$lang->testcase->featureBar['browse']['wait']        = 'Waiting';
$lang->testcase->featureBar['browse']['needconfirm'] = $lang->testcase->needConfirm;
$lang->testcase->featureBar['browse']['group']       = 'Group View';
$lang->testcase->featureBar['browse']['suite']       = 'Suite';
$lang->testcase->featureBar['browse']['zerocase']    = 'Zero Case Story';
$lang->testcase->featureBar['browse']['browseunits'] = 'Unit Test';
$lang->testcase->featureBar['groupcase']             = $lang->testcase->featureBar['browse'];
/* testreport */
$lang->testreport->common       = 'Testing Report';
$lang->testreport->browse       = 'Testing Reports';
$lang->testreport->create       = 'Create Report';
$lang->testreport->edit         = 'Edit Report';
$lang->testreport->delete       = 'Delete Report';
$lang->testreport->export       = 'Export';
$lang->testreport->exportAction = 'Export Report';
$lang->testreport->view         = 'Report Detail';
$lang->testreport->recreate     = 'ReCreate';

$lang->testreport->title       = 'Title';
$lang->testreport->product     = $lang->productCommon;
$lang->testreport->bugTitle    = 'Bug';
$lang->testreport->storyTitle  = 'Story';
$lang->testreport->project     = 'Project';
$lang->testreport->execution   = 'Execution';
$lang->testreport->testtask    = 'Test Build';
$lang->testreport->tasks       = $lang->testreport->testtask;
$lang->testreport->startEnd    = 'Begin&End';
$lang->testreport->owner       = 'Owner';
$lang->testreport->members     = 'Users';
$lang->testreport->begin       = 'Begin';
$lang->testreport->end         = 'End';
$lang->testreport->stories     = 'Story Tested';
$lang->testreport->bugs        = 'Bug Tested';
$lang->testreport->builds      = 'Build Info';
$lang->testreport->goal        = 'Project Goal';
$lang->testreport->cases       = 'Case';
$lang->testreport->bugInfo     = 'Bug Distribution';
$lang->testreport->report      = 'Summary';
$lang->testreport->legacyBugs  = 'Left Bugs';
$lang->testreport->createdBy   = 'CreatedBy';
$lang->testreport->createdDate = 'CreatedDate';
$lang->testreport->objectID    = 'Object';
$lang->testreport->objectType  = 'Object Type';
$lang->testreport->profile     = 'Profile';
$lang->testreport->value       = 'Value';
$lang->testreport->none        = 'None';
$lang->testreport->all         = 'All Reports';
$lang->testreport->deleted     = 'Deleted';
$lang->testreport->selectTask  = 'Create report by request';

$lang->testreport->legendBasic       = 'Basic Info';
$lang->testreport->legendStoryAndBug = 'Test Scope';
$lang->testreport->legendBuild       = 'Test Rounds';
$lang->testreport->legendCase        = 'Linked Cases';
$lang->testreport->legendLegacyBugs  = 'Left Bugs';
$lang->testreport->legendReport      = 'Report';
$lang->testreport->legendComment     = 'Summary';
$lang->testreport->legendMore        = 'More';
$lang->testreport->date              = 'Date';

$lang->testreport->bugSeverityGroups   = 'Bug Severity Distribution';
$lang->testreport->bugTypeGroups       = 'Bug Type Distribution';
$lang->testreport->bugStatusGroups     = 'Bug Status Distribution';
$lang->testreport->bugOpenedByGroups   = 'Bug ReportedBy Distribution';
$lang->testreport->bugResolvedByGroups = 'Bug ResolvedBy Distribution';
$lang->testreport->bugResolutionGroups = 'Bug Resolution Distribution';
$lang->testreport->bugModuleGroups     = 'Bug Module Distribution';
$lang->testreport->bugStageGroups      = 'Bug importance stage distribution';
$lang->testreport->bugHandleGroups     = 'Distribution of daily bug processing';
$lang->testreport->legacyBugs          = 'Left Bugs';
$lang->testreport->bugConfirmedRate    = 'Confirmed-Bug Rate (Resolution is fixed or postponed / status is resolved or closed)';
$lang->testreport->bugCreateByCaseRate = 'Bug-Reported-in-Case Rate (Bugs reported in cases / New added bugs)';

$lang->testreport->bugStageList = array();
$lang->testreport->bugStageList['generated'] = 'Generated Bugs';
$lang->testreport->bugStageList['legacy']    = 'Legacy Bugs';
$lang->testreport->bugStageList['resolved']  = 'Resolved Bugs';

$lang->testreport->caseSummary    = 'Total <strong>%s</strong> cases. <strong>%s</strong> cases run. <strong>%s</strong> results generated. <strong>%s</strong> cases failed.';
$lang->testreport->buildSummary   = 'Tested <strong>%s</strong> builds.';
$lang->testreport->confirmDelete  = 'Do you want to delete this report?';
$lang->testreport->moreNotice     = 'More features can be extended with reference to the ZenTao extension manual, or you can contact us at renee@easysoft.ltd for customization.';
$lang->testreport->exportNotice   = "Exported By <a href='https://www.zentao.net' target='_blank' style='color:grey'>ZenTao</a>";
$lang->testreport->noReport       = "No report has been generated. Please check it later.";
$lang->testreport->foundBugTip    = "Bugs found in this build period and the affected build is in this test period.";
$lang->testreport->legacyBugTip   = "Active bugs, or bugs that are not resolved in the test period.";
$lang->testreport->fromCaseBugTip = "Bugs found from the running of cases in the test period.";
$lang->testreport->errorTrunk     = "You cannot create a Testing report for the trunk. Please modify the linked build!";
$lang->testreport->noTestTask     = "No test requests for this {$lang->productCommon}, so no reports can be generated. Please go to {$lang->productCommon} which has test requests and then generate the report.";
$lang->testreport->noObjectID     = "No test request or {$lang->executionCommon} is selected, so no report can be generated.";
$lang->testreport->moreProduct    = "Testing reports can only be generated for the same {$lang->productCommon}.";
$lang->testreport->hiddenCase     = "Hide %s use cases";

$lang->testreport->bugSummary = <<<EOD
Total <strong>%s</strong> Bugs reported <a data-toggle='tooltip' class='text-warning' title='{$lang->testreport->foundBugTip}'><i class='icon-help'></i></a>,
<strong>%s</strong> Bugs remained unresolved <a data-toggle='tooltip' class='text-warning' title='{$lang->testreport->legacyBugTip}'><i class='icon-help'></i></a>,
<strong>%s</strong> Bugs found from the running of cases<a data-toggle='tooltip' class='text-warning' title='{$lang->testreport->fromCaseBugTip}'><i class='icon-help'></i></a>.
Bug Effective Rate <a data-toggle='tooltip' class='text-warning' title='Resolution is resolved or delayed / status is resolved or closed'><i class='icon-help'></i></a>: <strong>%s</strong>，Bugs-reported-from-cases rate<a data-toggle='tooltip' class='text-warning' title='Bugs created from cases / bugs'><i class='icon-help'></i></a>: <strong>%s</strong>
EOD;
/* testsuite */
$lang->testsuite->index            = "Suite Home";
$lang->testsuite->create           = "Create Suite";
$lang->testsuite->delete           = "Delete Suite";
$lang->testsuite->view             = "Suite Detail";
$lang->testsuite->edit             = "Edit Suite";
$lang->testsuite->browse           = "Suite List";
$lang->testsuite->linkCase         = "Link Case";
$lang->testsuite->linkVersion      = "Version";
$lang->testsuite->unlinkCase       = "Unlink";
$lang->testsuite->unlinkCaseAction = "Unlink Case";
$lang->testsuite->batchUnlinkCases = "Batch Unlink Cases";
$lang->testsuite->deleted          = 'Deleted';
$lang->testsuite->successSaved     = 'Saved';

$lang->testsuite->id             = 'ID';
$lang->testsuite->common         = 'Test Suite';
$lang->testsuite->product        = $lang->productCommon;
$lang->testsuite->name           = 'Name';
$lang->testsuite->type           = 'Type';
$lang->testsuite->desc           = 'Description';
$lang->testsuite->author         = 'Access Control';
$lang->testsuite->addedBy        = 'CreatedBy';
$lang->testsuite->addedDate      = 'CreatedDate';
$lang->testsuite->lastEditedBy   = 'LastEditedBy';
$lang->testsuite->lastEditedDate = 'LastEditedDate';

$lang->testsuite->legendDesc      = 'Description';
$lang->testsuite->legendBasicInfo = 'Basic Info';

$lang->testsuite->unlinkedCases = 'Unlinked Cases';

$lang->testsuite->confirmDelete     = 'Do you want to delete this test suite?';
$lang->testsuite->confirmUnlinkCase = 'Do you want to unlink this Case?';
$lang->testsuite->noticeNone        = 'You have not created any suite yet.';
$lang->testsuite->noModule          = '<div>You have no modules.</div><div>Manage it now.</div>';
$lang->testsuite->noTestsuite       = 'No suites yet.';

$lang->testsuite->lblCases      = 'Cases';
$lang->testsuite->lblUnlinkCase = 'Unlink Case';

$lang->testsuite->authorList['private'] = 'Private';
$lang->testsuite->authorList['public']  = 'Public';
/* testtask */
$lang->testtask->index            = "Request Home";
$lang->testtask->create           = "Submit Request";
$lang->testtask->reportChart      = 'Report';
$lang->testtask->delete           = "Delete Request";
$lang->testtask->importUnitResult = "Import Unit Result";
$lang->testtask->importunitresult = "Import Unit Result"; //Fix bug custom required testtask.
$lang->testtask->browseUnits      = "Unit Test List";
$lang->testtask->unitCases        = "Unit Test Cases";
$lang->testtask->view             = "Request Detail";
$lang->testtask->edit             = "Edit Request";
$lang->testtask->browse           = "Test Request";
$lang->testtask->linkCase         = "Link Case";
$lang->testtask->selectVersion    = "Select Version";
$lang->testtask->unlinkCase       = "Unlink";
$lang->testtask->batchUnlinkCases = "Batch Unlink Cases";
$lang->testtask->batchAssign      = "Batch Assign";
$lang->testtask->runCase          = "Run";
$lang->testtask->batchRun         = "Batch Run";
$lang->testtask->results          = "Results";
$lang->testtask->createBug        = "Bug(+)";
$lang->testtask->assign           = 'Assign';
$lang->testtask->cases            = 'Case List';
$lang->testtask->groupCase        = "View By Group";
$lang->testtask->pre              = 'Prev.';
$lang->testtask->next             = 'Next';
$lang->testtask->start            = "Start";
$lang->testtask->close            = "Close";
$lang->testtask->wait             = "Waiting";
$lang->testtask->block            = "Block";
$lang->testtask->activate         = "Activate";
$lang->testtask->testing          = "Testing";
$lang->testtask->blocked          = "Blocked";
$lang->testtask->done             = "Tested";
$lang->testtask->totalStatus      = "All";
$lang->testtask->all              = "All " . $lang->productCommon . "s";
$lang->testtask->allTasks         = 'All Requests';
$lang->testtask->collapseAll      = 'Collapse';
$lang->testtask->expandAll        = 'Expand';

$lang->testtask->viewAction       = "View Testtask";
$lang->testtask->casesAction      = 'View Case';
$lang->testtask->activateAction   = "Activate Testtask";
$lang->testtask->blockAction      = "Block Testtask";
$lang->testtask->closeAction      = "Close Testtask";
$lang->testtask->startAction      = "Start Testtask";
$lang->testtask->resultsAction    = "Case Result";
$lang->testtask->reportAction     = 'Report';

$lang->testtask->id             = 'ID';
$lang->testtask->common         = 'Request';
$lang->testtask->product        = $lang->productCommon;
$lang->testtask->project        = 'Project';
$lang->testtask->execution      = $lang->execution->common;
$lang->testtask->type           = 'Type';
$lang->testtask->build          = 'Build';
$lang->testtask->owner          = 'Owner';
$lang->testtask->executor       = 'Executor';
$lang->testtask->execTime       = 'Exec Time';
$lang->testtask->pri            = 'Priority';
$lang->testtask->name           = 'Request Name';
$lang->testtask->begin          = 'Begin';
$lang->testtask->end            = 'End';
$lang->testtask->desc           = 'Description';
$lang->testtask->mailto         = 'Mailto';
$lang->testtask->status         = 'Status';
$lang->testtask->subStatus      = 'Sub Status';
$lang->testtask->testreport     = 'Test Report';
$lang->testtask->assignedTo     = 'Assigned';
$lang->testtask->linkVersion    = 'Build';
$lang->testtask->lastRunAccount = 'RunBy';
$lang->testtask->lastRunTime    = 'Last Run';
$lang->testtask->lastRunResult  = 'Result';
$lang->testtask->reportField    = 'Report';
$lang->testtask->files          = 'Upload';
$lang->testtask->case           = 'Case List';
$lang->testtask->version        = 'Version';
$lang->testtask->caseResult     = 'Test Result';
$lang->testtask->stepResults    = 'Step Result';
$lang->testtask->lastRunner     = 'RunBy';
$lang->testtask->lastRunDate    = 'Last Run';
$lang->testtask->date           = 'Tested on';;
$lang->testtask->deleted        = "Deleted";
$lang->testtask->resultFile     = "Result File";
$lang->testtask->caseCount      = 'Case Count';
$lang->testtask->passCount      = 'Pass';
$lang->testtask->failCount      = 'Fail';
$lang->testtask->summary        = '%s cases, %s failures, %s time.';

$lang->testtask->beginAndEnd    = 'Duration';
$lang->testtask->to             = 'To';

$lang->testtask->legendDesc      = 'Description';
$lang->testtask->legendReport    = 'Report';
$lang->testtask->legendBasicInfo = 'Basic Info';

$lang->testtask->statusList['wait']    = 'Waiting';
$lang->testtask->statusList['doing']   = 'Doing';
$lang->testtask->statusList['done']    = 'Closed';
$lang->testtask->statusList['blocked'] = 'Blocked';

$lang->testtask->priList[0] = '';
$lang->testtask->priList[3] = '3';
$lang->testtask->priList[1] = '1';
$lang->testtask->priList[2] = '2';
$lang->testtask->priList[4] = '4';

$lang->testtask->unlinkedCases = 'Unlinked Case';
$lang->testtask->linkByBuild   = 'Copy from build';
$lang->testtask->linkByStory   = 'Link by Story';
$lang->testtask->linkByBug     = 'Link by Bug';
$lang->testtask->linkBySuite   = 'Link by Suite';
$lang->testtask->passAll       = 'Pass All';
$lang->testtask->pass          = 'Pass';
$lang->testtask->fail          = 'Failed';
$lang->testtask->showResult    = 'Run <span class="text-info">%s</span> times';
$lang->testtask->showFail      = 'Failed <span class="text-danger">%s</span> times';

$lang->testtask->confirmDelete     = 'Do you want to delete this build?';
$lang->testtask->confirmUnlinkCase = 'Do you want to unlink this case?';
$lang->testtask->noticeNoOther     = 'No test builds for this product.';
$lang->testtask->noTesttask        = 'No requests. ';
$lang->testtask->checkLinked       = "Please check whether the product that the test request is linked to has been linked to a {$lang->executionCommon}.";
$lang->testtask->noImportData      = 'The imported XML does not parse the data.';
$lang->testtask->unitXMLFormat     = 'Please select a file in JUnit XML format.';
$lang->testtask->titleOfAuto       = "%s automated testing";
$lang->testtask->cannotBeParsed    = 'The content of the imported XML file is in the wrong format and cannot be parsed.';

$lang->testtask->assignedToMe  = 'AssignedToMe';
$lang->testtask->allCases      = 'All Cases';

$lang->testtask->lblCases      = 'Case';
$lang->testtask->lblUnlinkCase = 'Unlink Case';
$lang->testtask->lblRunCase    = 'Run Case';
$lang->testtask->lblResults    = 'Result';

$lang->testtask->placeholder = new stdclass();
$lang->testtask->placeholder->begin = 'Begin';
$lang->testtask->placeholder->end   = 'End';

$lang->testtask->mail = new stdclass();
$lang->testtask->mail->create = new stdclass();
$lang->testtask->mail->edit   = new stdclass();
$lang->testtask->mail->close  = new stdclass();
$lang->testtask->mail->create->title = "%s created test request #%s:%s";
$lang->testtask->mail->edit->title   = "%s finished test request #%s:%s";
$lang->testtask->mail->close->title  = "%s closed test request #%s:%s";

$lang->testtask->action = new stdclass();
$lang->testtask->action->testtaskopened  = '$date,  <strong>$actor</strong> submitted Test Request<strong>$extra</strong>.' . "\n";
$lang->testtask->action->testtaskstarted = '$date,  <strong>$actor</strong> started Test Request<strong>$extra</strong>.' . "\n";
$lang->testtask->action->testtaskclosed  = '$date,  <strong>$actor</strong> completed Test Request<strong>$extra</strong>.' . "\n";

$lang->testtask->unexecuted = 'Pending';

$lang->testtask->report = new stdclass();
$lang->testtask->report->common = 'Report';
$lang->testtask->report->select = 'Select Report Type';
$lang->testtask->report->create = 'Create Report';

$lang->testtask->report->charts['testTaskPerRunResult'] = 'Test Case Result';
$lang->testtask->report->charts['testTaskPerType']      = 'Test Case Type';
$lang->testtask->report->charts['testTaskPerModule']    = 'Test Case Module';
$lang->testtask->report->charts['testTaskPerRunner']    = 'Test Case RunBy';
$lang->testtask->report->charts['bugSeverityGroups']    = 'Bug Severity Distribution';
$lang->testtask->report->charts['bugStatusGroups']      = 'Bug Status Distribution';
$lang->testtask->report->charts['bugOpenedByGroups']    = 'Bug ReportedBy Distribution';
$lang->testtask->report->charts['bugResolvedByGroups']  = 'Bug ResolvedBy Distribution';
$lang->testtask->report->charts['bugResolutionGroups']  = 'Bug Resolution Distribution';
$lang->testtask->report->charts['bugModuleGroups']      = 'Bug Module Distribution';
$lang->testtask->report->charts['bugStageGroups']       = 'Bug importance stage distribution';
$lang->testtask->report->charts['bugHandleGroups']      = 'Distribution of daily bug processing';

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

$lang->testtask->unitTag['all']       = 'All';
$lang->testtask->unitTag['newest']    = 'Recently';
$lang->testtask->unitTag['thisWeek']  = 'This week';
$lang->testtask->unitTag['lastWeek']  = 'Last week';
$lang->testtask->unitTag['thisMonth'] = 'This month';
$lang->testtask->unitTag['lastMonth'] = 'Last month';

$lang->testtask->typeList['integrate']   = 'Integrate';
$lang->testtask->typeList['system']      = 'System';
$lang->testtask->typeList['acceptance']  = 'Acceptance';
$lang->testtask->typeList['performance'] = 'Performance';
$lang->testtask->typeList['safety']      = 'Safety';
/* todo */
$lang->todo->common       = 'Todo';
$lang->todo->index        = "Home";
$lang->todo->create       = "Add Todo";
$lang->todo->createCycle  = "Add Recurred Todo";
$lang->todo->assignTo     = "Assigned To";
$lang->todo->assignedDate = "Assigned Date";
$lang->todo->assignAction = "Assign Todo";
$lang->todo->start        = "Start Todo";
$lang->todo->activate     = "Activate Todo";
$lang->todo->batchCreate  = "Batch Add ";
$lang->todo->edit         = "Edit Todo";
$lang->todo->close        = "Close Todo";
$lang->todo->batchClose   = "Batch Close";
$lang->todo->batchEdit    = "Batch Edit Todos";
$lang->todo->view         = "Todo Detail";
$lang->todo->finish       = "Finish Todo";
$lang->todo->batchFinish  = "Batch Finish";
$lang->todo->export       = "Export Todo";
$lang->todo->delete       = "Delete Todo";
$lang->todo->import2Today = "Import to Today";
$lang->todo->import       = "Import";
$lang->todo->legendBasic  = "Basic Info";
$lang->todo->cycle        = "Recur";
$lang->todo->cycleConfig  = "Recurrence";
$lang->todo->project      = "Project";
$lang->todo->product      = "Product";
$lang->todo->execution    = $lang->executionCommon;

$lang->todo->reasonList['story'] = "Convert to Story";
$lang->todo->reasonList['task']  = "Convert to Task";
$lang->todo->reasonList['bug']   = "Convert to Bug";
$lang->todo->reasonList['done']  = "Done";

$lang->todo->id           = 'ID';
$lang->todo->account      = 'Owner';
$lang->todo->date         = 'Date';
$lang->todo->begin        = 'Begin';
$lang->todo->end          = 'End';
$lang->todo->beginAB      = 'Begin';
$lang->todo->endAB        = 'End';
$lang->todo->beginAndEnd  = 'Begin and End';
$lang->todo->idvalue      = 'Link ID';
$lang->todo->type         = 'Type';
$lang->todo->pri          = 'Priority';
$lang->todo->name         = 'Title';
$lang->todo->status       = 'Status';
$lang->todo->desc         = 'Description';
$lang->todo->private      = 'Private';
$lang->todo->cycleDay     = 'Day';
$lang->todo->cycleWeek    = 'Week';
$lang->todo->cycleMonth   = 'Month';
$lang->todo->day          = 'Day';
$lang->todo->assignedTo   = 'AssignedTo';
$lang->todo->assignedBy   = 'AssignedBy';
$lang->todo->finishedBy   = 'FinishedBy';
$lang->todo->finishedDate = 'FinishedDate';
$lang->todo->closedBy     = 'ClosedBy';
$lang->todo->closedDate   = 'ClosedDate';
$lang->todo->deadline     = 'Expiration';
$lang->todo->deleted      = 'Deleted';

$lang->todo->every        = 'Every';
$lang->todo->specify      = 'Specify';
$lang->todo->everyYear    = 'Annually';
$lang->todo->beforeDays   = "<span class='input-group-addon'>Auto create the todo</span>%s<span class='input-group-addon'>days before</span>";
$lang->todo->dayNames     = array(1 => 'Monday', 2 => 'Tuesday', 3 => 'Wednesday', 4 => 'Thursday', 5 => 'Friday', 6 => 'Saturday', 0 => 'Sunday');
$lang->todo->specifiedDay = array(1 => 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31);

$lang->todo->confirmBug   = 'This Todo is linked to Bug #%s. Do you want to edit it?';
$lang->todo->confirmTask  = 'This Todo is linked to Task #%s，Do you want to edit it?';
$lang->todo->confirmStory = 'This Todo is linked to Story #%s，Do you want to edit it?';

$lang->todo->statusList['wait']   = 'Waiting';
$lang->todo->statusList['doing']  = 'Doing';
$lang->todo->statusList['done']   = 'Done';
$lang->todo->statusList['closed'] = 'Closed';
//$lang->todo->statusList['cancel']   = 'Cancelled';
//$lang->todo->statusList['postpone'] = 'Delayed';

$lang->todo->priList[1] = 'Critical';
$lang->todo->priList[2] = 'Important';
$lang->todo->priList[3] = 'Normal';
$lang->todo->priList[4] = 'Low';

$lang->todo->typeList['custom']   = 'Custom';
$lang->todo->typeList['cycle']    = 'Recur';
$lang->todo->typeList['bug']      = 'Bug';
$lang->todo->typeList['task']     = 'Task';
$lang->todo->typeList['story']    = 'Story';
$lang->todo->typeList['review']   = 'Review';
$lang->todo->typeList['testtask'] = 'Testtask';

$lang->todo->confirmDelete  = "Do you want to delete this todo?";
$lang->todo->thisIsPrivate  = 'This is a private todo';
$lang->todo->lblDisableDate = 'TBD';
$lang->todo->lblBeforeDays  = "Create a todo %s day(s) earlier";
$lang->todo->lblClickCreate = "Click to Add Todo";
$lang->todo->noTodo         = 'No todos of this type.';
$lang->todo->noAssignedTo   = "The AssignedTo should not be empty.";
$lang->todo->unfinishedTodo = 'The todos of ID %s are not finished, and can not close.';

$lang->todo->periods['all']             = 'All Todos';
$lang->todo->periods['before']          = 'Unfinished';
$lang->todo->periods['future']          = 'TBD';
$lang->todo->periods['thisWeek']        = 'This Week';
$lang->todo->periods['thisMonth']       = 'This Month';
$lang->todo->periods['thisYear']        = 'This Year';
$lang->todo->periods['assignedToOther'] = 'Assigned To Other';
$lang->todo->periods['cycle']           = 'Recurrence';

$lang->todo->action = new stdclass();
$lang->todo->action->finished = array('main' => '$date, is $extra by <strong>$actor</strong>.', 'extra' => 'reasonList');
$lang->todo->action->marked   = array('main' => '$date, is marked by <strong>$actor</strong> as <strong>$extra</strong>.', 'extra' => 'statusList');
/* tree */
$lang->tree = new stdclass();
$lang->tree->common             = 'Module';
$lang->tree->edit               = 'Edit Module';
$lang->tree->delete             = 'Delete Module';
$lang->tree->browse             = 'Manage General Module';
$lang->tree->browseTask         = 'Manage Task Module';
$lang->tree->manage             = 'Manage Module';
$lang->tree->fix                = 'Fix Module';
$lang->tree->manageProduct      = "Manage {$lang->productCommon} Modules";
$lang->tree->manageExecution    = "Manage {$lang->executionCommon} Modules";
$lang->tree->manageLine         = "Manage {$lang->productCommon} Line";
$lang->tree->manageBug          = 'Manage Bug';
$lang->tree->manageCase         = 'Manage Case';
$lang->tree->manageCaseLib      = 'Manage Library';
$lang->tree->manageCustomDoc    = 'Manage Document Library';
$lang->tree->updateOrder        = 'Rank Module';
$lang->tree->manageChild        = 'Manage Child Modules';
$lang->tree->manageStoryChild   = 'Manage Child Modules';
$lang->tree->manageLineChild    = "Manage {$lang->productCommon} Line";
$lang->tree->manageBugChild     = 'Manage Child Bugs';
$lang->tree->manageCaseChild    = 'Manage Child Cases';
$lang->tree->manageCaselibChild = 'Manage Child Libraries';
$lang->tree->manageTaskChild    = "Manage Child {$lang->executionCommon} Modules";
$lang->tree->syncFromProduct    = "Copy from Other {$lang->productCommon}s";
$lang->tree->dragAndSort        = "Drag to order";
$lang->tree->sort               = "Order";
$lang->tree->addChild           = "Add Child Module";
$lang->tree->confirmDelete      = 'Do you want to delete this module and its child modules?';
$lang->tree->confirmDelCategory = 'Do you want to delete this category and its child categories?';
$lang->tree->confirmDeleteLine  = "Do you want to delete this {$lang->productCommon} line?";
$lang->tree->confirmRoot        = "Any changes to the {$lang->productCommon} will change the stories, bugs, cases of {$lang->productCommon} it belongs to, as well as the linkage of {$lang->executionCommon} and {$lang->productCommon}, which is dangerous. Do you want to change it?";
$lang->tree->confirmRoot4Doc    = "Any changes to the library will change the document of library it belongs to, which is dangerous. Do you want to change it?";
$lang->tree->successSave        = 'Saved.';
$lang->tree->successFixed       = 'Fixed.';
$lang->tree->repeatName         = 'The name "%s" exists!';
$lang->tree->shouldNotBlank     = 'Module name should not be blank!';

$lang->tree->module       = 'Module';
$lang->tree->name         = 'Name';
$lang->tree->line         = "{$lang->productCommon} Line";
$lang->tree->cate         = 'Category';
$lang->tree->root         = 'Root';
$lang->tree->branch       = 'Platform/Branch';
$lang->tree->path         = 'Path';
$lang->tree->type         = 'Type';
$lang->tree->parent       = 'Parent Module';
$lang->tree->parentCate   = 'Parent Category';
$lang->tree->child        = 'Children';
$lang->tree->subCategory  = 'SubCategory';
$lang->tree->editCategory = 'Edit Category';
$lang->tree->delCategory  = 'Delete Category';
$lang->tree->lineChild    = "Child {$lang->productCommon} Line";
$lang->tree->owner        = 'Owner';
$lang->tree->order        = 'Order';
$lang->tree->short        = 'Abbr.';
$lang->tree->all          = 'All Modules';
$lang->tree->executionDoc = "{$lang->executionCommon} Document";
$lang->tree->product      = $lang->productCommon;
/* tutorial */
$lang->tutorial = new stdclass();
$lang->tutorial->common           = 'Tutorial';
$lang->tutorial->desc             = 'You can know how to use ZenTao by doing tasks. It takes about 10 minutes, and you can quit anytime.';
$lang->tutorial->start            = "Let's go!";
$lang->tutorial->exit             = 'Quit';
$lang->tutorial->congratulation   = 'Congratulations! You have completed all tasks.';
$lang->tutorial->restart          = 'Restart';
$lang->tutorial->currentTask      = 'Current Task';
$lang->tutorial->allTasks         = 'All Tasks';
$lang->tutorial->previous         = 'Previous';
$lang->tutorial->nextTask         = 'Next';
$lang->tutorial->openTargetPage   = 'Open <strong class="task-page-name">target</strong>';
$lang->tutorial->atTargetPage     = 'On <strong class="task-page-name">target</strong>';
$lang->tutorial->reloadTargetPage = 'Reload';
$lang->tutorial->target           = 'Target';
$lang->tutorial->targetPageTip     = 'Open【%s】page by following this instruction.';
$lang->tutorial->requiredTip      = '【%s】is required.';
$lang->tutorial->congratulateTask = 'Congratulations! You have finished【<span class="task-name-current"></span>】!';
$lang->tutorial->serverErrorTip   = 'Error!';
$lang->tutorial->ajaxSetError     = 'Finished task must be defined. If you want to reset the Task, please set its value as null.';
$lang->tutorial->novice           = "For a quick start, let's go through a two-minute Tutorial.";
$lang->tutorial->dataNotSave      = "Data generated in this Tutorial will not be saved!";

$lang->tutorial->tasks = array();

$lang->tutorial->tasks['createAccount']         = array('title' => 'Create a User');
$lang->tutorial->tasks['createAccount']['nav']  = array('module' => 'user', 'method' => 'create', 'menuModule' => 'company', 'menu' => 'browseUser', 'form' => '#createForm', 'submit' => '#submit', 'target' => '.create-user-btn', 'targetPageName' => 'Add User');
$lang->tutorial->tasks['createAccount']['desc'] = "<p>Create a User: </p><ul><li data-target='nav'>Open <span class='task-nav'>Company <i class='icon icon-angle-right'></i> Users<i class='icon icon-angle-right'></i> New;</span></li><li data-target='form'>Fill the form with user information;</li><li data-target='submit'>Save</li></ul>";

$lang->tutorial->tasks['createProduct']         = array('title' => 'Create a ' . $lang->productCommon);
$lang->tutorial->tasks['createProduct']['nav']  = array('module' => 'product', 'method' => 'create', 'menu' => '#pageNav', 'form' => '#createForm', 'submit' => '#submit', 'target' => '.create-product-btn', 'targetPageName' => $lang->executionCommon);
$lang->tutorial->tasks['createProduct']['desc'] = "<p>Create a {$lang->productCommon}: </p><ul><li data-target='nav'> Open <span class='task-nav'>{$lang->productCommon} <i class='icon icon-angle-right'></i> New;</span></li><li data-target='form'>Fill the form with {$lang->productCommon} information;</li><li data-target='submit'>Save</li></ul>";

$lang->tutorial->tasks['createStory']         = array('title' => 'Create a Story');
$lang->tutorial->tasks['createStory']['nav']  = array('module' => 'story', 'method' => 'create', 'menuModule' => 'product', 'menu' => 'story', 'target' => '.create-story-btn', 'form' => '#dataform', 'submit' => '#submit', 'targetPageName' => 'Create Story');
$lang->tutorial->tasks['createStory']['desc'] = "<p>Create a story: </p><ul><li data-target='nav'>Open <span class='task-nav'>{$lang->productCommon} <i class='icon icon-angle-right'></i>Story <i class='icon icon-angle-right'></i>Create;</span></li><li data-target='form'>Fill the form with story information;</li><li data-target='submit'>Save</li></ul>";

$lang->tutorial->tasks['createProject']         = array('title' => 'Create a ' . $lang->executionCommon);
$lang->tutorial->tasks['createProject']['nav']  = array('module' => 'execution', 'method' => 'create', 'menu' => '#pageNav', 'form' => '#dataform', 'submit' => '#submit', 'target' => '.create-project-btn', 'targetPageName' => 'Create ' . $lang->executionCommon);
$lang->tutorial->tasks['createProject']['desc'] = "<p>Create a {$lang->executionCommon}: </p><ul><li data-target='nav'>Open <span class='task-nav'> {$lang->executionCommon} <i class='icon icon-angle-right'></i> New</span> Page;</li><li data-target='form'>Fill the form with {$lang->executionCommon} information;</li><li data-target='submit'>Save</li></ul>";

$lang->tutorial->tasks['manageTeam']         = array('title' => "Manage {$lang->executionCommon} Team");
$lang->tutorial->tasks['manageTeam']['nav']  = array('module' => 'execution', 'method' => 'managemembers', 'menu' => 'team', 'target' => '.manage-team-btn', 'form' => '#teamForm', 'requiredFields' => 'account1', 'submit' => '#submit', 'targetPageName' => 'Manage team members');
$lang->tutorial->tasks['manageTeam']['desc'] = "<p>Manage {$lang->executionCommon} team members: </p><ul><li data-target='nav'>Open <span class='task-nav'> {$lang->executionCommon} <i class='icon icon-angle-right'></i> Team <i class='icon icon-angle-right'></i> Manage Team Members</span> Page；</li><li data-target='form'>Choose users for the team.</li><li data-target='submit'>Save</li></ul>";

$lang->tutorial->tasks['linkStory']         = array('title' => 'Link a Story');
$lang->tutorial->tasks['linkStory']['nav']  = array('module' => 'execution', 'method' => 'linkStory', 'menu' => 'story', 'target' => '.link-story-btn', 'form' => '#linkStoryForm', 'formType' => 'table', 'submit' => '#submit', 'targetPageName' => 'Relate Story');
$lang->tutorial->tasks['linkStory']['desc'] = "<p>Link a Story to {$lang->executionCommon}: </p><ul><li data-target='nav'>Open <span class='task-nav'> {$lang->executionCommon} <i class='icon icon-angle-right'></i> Story <i class='icon icon-angle-right'></i>Relate Story;</span></li><li data-target='form'>Select stories from story list to relate;</li><li data-target='submit'>Save</li></ul>";

$lang->tutorial->tasks['createTask']         = array('title' => 'Task Breakdown');
$lang->tutorial->tasks['createTask']['nav']  = array('module' => 'task', 'method' => 'create', 'menuModule' => 'execution', 'menu' => 'story', 'target' => '.btn-task-create', 'form' => '#dataform', 'submit' => '#submit', 'targetPageName' => 'Create Task');
$lang->tutorial->tasks['createTask']['desc'] = "<p>Task breakdown for a story: </p><ul><li data-target='nav'>Open <span class='task-nav'> {$lang->executionCommon} <i class='icon icon-angle-right'></i> Story <i class='icon icon-angle-right'></i> WBS;</span></li><li data-target='form'>Fill the form with task information;</li><li data-target='submit'>Save</li></ul>";

$lang->tutorial->tasks['createBug']         = array('title' => 'Report Bug');
$lang->tutorial->tasks['createBug']['nav']  = array('module' => 'bug', 'method' => 'create', 'menuModule' => 'qa', 'menu' => 'bug', 'target' => '.btn-bug-create', 'form' => '#dataform', 'submit' => '#submit', 'targetPageName' => 'Report Bug');
$lang->tutorial->tasks['createBug']['desc'] = "<p>Report a Bug: </p><ul><li data-target='nav'>Open <span class='task-nav'> Test <i class='icon icon-angle-right'></i> Bug <i class='icon icon-angle-right'></i> Report Bug</span>；</li><li data-target='form'>Fill the form with bug information:</li><li data-target='submit'>Save</li></ul>";
/* upgrade */
$lang->upgrade->common          = 'Update';
$lang->upgrade->start           = 'Start';
$lang->upgrade->result          = 'Result';
$lang->upgrade->fail            = 'Failed';
$lang->upgrade->successTip      = 'Successed';
$lang->upgrade->success         = "<p><i class='icon icon-check-circle'></i></p><p>Congratulations!</p><p>Your ZenTao is updated.</p>";
$lang->upgrade->tohome          = 'Visit ZenTao';
$lang->upgrade->license         = 'ZenTao is under Z PUBLIC LICENSE(ZPL) 1.2.';
$lang->upgrade->warnning        = 'Warning!';
$lang->upgrade->checkExtension  = 'Check Extensions';
$lang->upgrade->consistency     = 'Check Consistency';
$lang->upgrade->warnningContent = <<<EOT
<p>Please backup your database before updating ZenTao!</p>
<pre>
1. Use phpMyAdmin to backup.
2. Use mysqlCommand to backup.
   $> mysqldump -u <span class='text-danger'>username</span> -p <span class='text-danger'>dbname</span> > <span class='text-danger'>filename</span>
   Change the red text into corresponding Username and Database name.
   e.g. mysqldump -u root -p zentao >zentao.bak
</pre>
EOT;

$lang->upgrade->createFileWinCMD   = 'Open command line and execute <strong style="color:#ed980f">echo > %s</strong>';
$lang->upgrade->createFileLinuxCMD = 'Execute command line: <strong style="color:#ed980f">touch %s</strong>';
$lang->upgrade->setStatusFile      = '<h4>Please complete the following actions</h4>
                                      <ul style="line-height:1.5;font-size:13px;">
                                      <li>%s</li>
                                      <li>Or delete "<strong style="color:#ed980f">%s</strong>" and create <strong style="color:#ed980f">ok.txt</strong> and leave it blank.</li>
                                      </ul>
                                      <p><strong style="color:red">I have read and done as instructed above. <a href="upgrade.php">Continue upgrading.</a></strong></p>';

$lang->upgrade->selectVersion = 'Version';
$lang->upgrade->continue      = 'Continue';
$lang->upgrade->noteVersion   = "Select the compatible version, or it might cause data loss.";
$lang->upgrade->fromVersion   = 'From';
$lang->upgrade->toVersion     = 'To';
$lang->upgrade->confirm       = 'Confirm SQL';
$lang->upgrade->sureExecute   = 'Execute';
$lang->upgrade->forbiddenExt  = 'The extension is incompatible with the version. It has been deactivated:';
$lang->upgrade->updateFile    = 'File information has to be updated.';
$lang->upgrade->noticeSQL     = 'Your database is inconsistent with the standard and it failed to fix it. Please run the following SQL and refresh.';
$lang->upgrade->afterDeleted  = 'File is not deleted. Please refresh after you delete it.';
$lang->upgrade->mergeProgram  = 'Data Merge';
$lang->upgrade->mergeTips     = 'Data Migration Tips';
$lang->upgrade->toPMS15Guide  = 'ZenTao open source version 15.0.beta1 upgrade';
$lang->upgrade->toPRO10Guide  = 'ZenTao profession version 10.0.rc1 upgrade';
$lang->upgrade->toBIZ5Guide   = 'ZenTao enterprise version 5.0.rc1 upgrade';
$lang->upgrade->toMAXGuide    = 'ZenTao ultimate version upgrade';
$lang->upgrade->to15Desc      = <<<EOD
<p>Dear users, ZenTao has made adjustments to navigation and concepts since version 15. The main changes are as follows:</p>
<ol>
<p><li>Added the concept of program. A program set can include multiple products and multiple projects.</li></p>
<p><li>Subdivided the concept of project and iteration, a project can contain multiple iterations.</li></p>
<p><li>The navigation adds a left menu and supports multi-page operations.</li></p>
</ol>
<br/>
<p>You can experience the latest version of the function online to decide whether to enable the mode: <a class='text-info' href='http://zentaomax.demo.zentao.net' target='_blank'>Demo</a></p>
</br>
<p><strong>How do you plan to use the new version of ZenTao?</strong></p>
EOD;

$lang->upgrade->mergeProgramDesc = <<<EOD
<p>Next, we will migrate the previous historical product and iteration data to the project set and under the project, with the following scenario for migration.</p><br />
<h4>Option 1: Product and iteration organized by product line </h4>
<p>It is possible to migrate the entire product line and its following products and iterations into one project set and project, although you can also migrate them separately as needed.</p>
<h4>Option 2: Iteration of product-based organizations </h4>
<p>You can select multiple products and the iterations below them to migrate to a project set and project, or you can select a particular product and the iterations below it to migrate to a project set and project.</p>
<h4>Option 3: Independent iterations </h4>
<p>Several iterations can be selected to migrate to a single project set, or independently.</p>
<h4>Option 4: Iterations linked to multiple products.</h4>
<p>These iterations can be selected to fall under a new project.</p>
EOD;

$lang->upgrade->to15Mode['classic'] = 'Keep the old version';
$lang->upgrade->to15Mode['new']     = 'New program management mode';

$lang->upgrade->selectedModeTips['classic'] = 'You can also switch to the new program set management mode in the background-Customize in the future.';
$lang->upgrade->selectedModeTips['new']     = 'Switching to the program management mode requires merging the previous data, and the system will guide you to complete this operation.';

$lang->upgrade->line         = 'Product Line';
$lang->upgrade->program      = 'Merge Project';
$lang->upgrade->existProgram = 'Existing programs';
$lang->upgrade->existProject = 'Existing projects';
$lang->upgrade->existLine    = 'Existing' . $lang->productCommon . ' lines';
$lang->upgrade->product      = $lang->productCommon;
$lang->upgrade->project      = 'Iteration';
$lang->upgrade->repo         = 'Repo';
$lang->upgrade->mergeRepo    = 'Merge Repo';

$lang->upgrade->newProgram         = 'Create';
$lang->upgrade->projectEmpty       = 'Project must be not empty.';
$lang->upgrade->mergeSummary       = "Dear users, there are %s products and %s iterations in your system waiting for Migration. By System Calculation, we recommend your migration plan as follows, you can also adjust according to your own situation:";
$lang->upgrade->mergeByProductLine = "PRODUCTLINE-BASED iterations: Consolidate the entire product line and the products and iterations below it into one large project.";
$lang->upgrade->mergeByProduct     = "PRODUCT-BASED iterations: You can select multiple products and their lower iterations to merge into a large project, or you can select a product to merge its lower iterations into a larger project";
$lang->upgrade->mergeByProject     = "Independent iterations: You can select several iterations and merge them into one large project, or merge them independently";
$lang->upgrade->mergeByMoreLink    = "Iteration that relates multiple products: select which product the iteration belongs to.";
$lang->upgrade->mergeRepoTips      = "Merge the selected version library under the selected product.";

$lang->upgrade->needBuild4Add    = 'Full text retrieval has been added in this upgrad. Please create an index.';
$lang->upgrade->needBuild4Adjust = 'Full text retrieval has been adjusted. Please create an index.';
$lang->upgrade->buildIndex       = 'Create Index';

include dirname(__FILE__) . '/version.php';
/* user */
$lang->user->common           = 'User';
$lang->user->id               = 'ID';
$lang->user->inside           = 'Inside Members';
$lang->user->outside          = 'Outside Members';
$lang->user->company          = 'Company';
$lang->user->dept             = 'Department';
$lang->user->account          = 'Account';
$lang->user->password         = 'Password';
$lang->user->password2        = 'Repeat Password';
$lang->user->role             = 'Role';
$lang->user->group            = 'Privilege Group';
$lang->user->realname         = 'Name';
$lang->user->nickname         = 'Nickname';
$lang->user->commiter         = 'SVN/GIT Account';
$lang->user->birthyear        = 'DOB';
$lang->user->gender           = 'Gender';
$lang->user->email            = 'Email';
$lang->user->basicInfo        = 'Basic Info.';
$lang->user->accountInfo      = 'Account Info.';
$lang->user->verify           = 'Verification';
$lang->user->contactInfo      = 'Contact';
$lang->user->skype            = 'Skype';
$lang->user->qq               = 'QQ';
$lang->user->mobile           = 'Mobile';
$lang->user->phone            = 'Phone';
$lang->user->weixin           = 'WeChat';
$lang->user->dingding         = 'DingDing';
$lang->user->slack            = 'Slack';
$lang->user->whatsapp         = 'WhatsApp';
$lang->user->address          = 'Address';
$lang->user->zipcode          = 'ZipCode';
$lang->user->join             = 'Joined';
$lang->user->visits           = 'Visits';
$lang->user->ip               = 'Last IP';
$lang->user->last             = 'Last Login';
$lang->user->ranzhi           = 'Zdoo Account';
$lang->user->ditto            = 'Ditto';
$lang->user->originalPassword = 'Old Password';
$lang->user->newPassword      = 'New Password';
$lang->user->verifyPassword   = 'Password';
$lang->user->resetPassword    = 'Forgot Password?';
$lang->user->score            = 'Score';
$lang->user->name             = 'Name';
$lang->user->type             = 'User Type';
$lang->user->cropAvatar       = 'Crop Avatar';
$lang->user->cropAvatarTip    = 'Drag and drop the box to select the image clipping range.';
$lang->user->cropImageTip     = 'The image used is too small, the recommended image size is at least 48x48, the current image size is %s';
$lang->user->captcha          = 'Captcha';

$lang->user->legendBasic        = 'Basic Information';
$lang->user->legendContribution = 'Contribution';

$lang->user->index         = "Home";
$lang->user->view          = "User Detail";
$lang->user->create        = "Add User";
$lang->user->batchCreate   = "Batch Add";
$lang->user->edit          = "Edit User";
$lang->user->batchEdit     = "Batch Edit";
$lang->user->unlock        = "Unlock User";
$lang->user->delete        = "Delete User";
$lang->user->unbind        = "Unbind from Zdoo";
$lang->user->login         = "Login";
$lang->user->bind          = "Bind User";
$lang->user->oauthRegister = "Register a new account";
$lang->user->mobileLogin   = "Mobile";
$lang->user->editProfile   = "Edit Profile";
$lang->user->deny          = "Your access is denied.";
$lang->user->confirmDelete = "Do you want to delete this user?";
$lang->user->confirmUnlock = "Do you want to unlock this user?";
$lang->user->confirmUnbind = "Do you want to unbind this user from Zdoo?";
$lang->user->relogin       = "Login Again";
$lang->user->asGuest       = "Guest";
$lang->user->goback        = "Back";
$lang->user->deleted       = '(Deleted)';
$lang->user->search        = 'Search';
$lang->user->else          = 'Else';

$lang->user->saveTemplate          = 'Save as Template';
$lang->user->setPublic             = 'Set as Public Template';
$lang->user->deleteTemplate        = 'Delete Template';
$lang->user->setTemplateTitle      = 'Please enter the title of template.';
$lang->user->applyTemplate         = 'Templates';
$lang->user->confirmDeleteTemplate = 'Do you want to delete this template?';
$lang->user->setPublicTemplate     = 'Set as Public Template';
$lang->user->tplContentNotEmpty    = 'The template content cannot be empty!';

$lang->user->profile   = 'Profile';
$lang->user->project   = $lang->executionCommon . 's';
$lang->user->execution = $lang->execution->common;
$lang->user->task      = 'Tasks';
$lang->user->bug       = 'Bugs';
$lang->user->test      = 'Test';
$lang->user->testTask  = 'Requests';
$lang->user->testCase  = 'Cases';
$lang->user->issue     = 'Issue';
$lang->user->risk      = 'Risk';
$lang->user->schedule  = 'Schedule';
$lang->user->todo      = 'Todos';
$lang->user->story     = 'Stories';
$lang->user->dynamic   = 'Dynamics';

$lang->user->openedBy    = 'CreatedBy%s';
$lang->user->assignedTo  = 'AssignedTo%s';
$lang->user->finishedBy  = 'FinishedBy%s';
$lang->user->resolvedBy  = 'ResolvedBy%s';
$lang->user->closedBy    = 'ClosedBy%s';
$lang->user->reviewedBy  = 'ReviewedBy%s';
$lang->user->canceledBy  = 'CancelledBy%s';

$lang->user->testTask2Him = 'RequestsAssignedTo%s';
$lang->user->case2Him     = 'CasesAssignedTo%s';
$lang->user->caseByHim    = 'CasesCreatedBy%s';

$lang->user->errorDeny    = "Sorry, your access to <b>%s</b> of <b>%s</b> is denied. Please contact your Admin to get privileges. Click Back to return.";
$lang->user->errorView    = "Sorry, your access view <b>%s</b> is denied. Please contact your Admin to get privileges. Click Back to return.";
$lang->user->loginFailed  = "Login failed. Please check your account and password.";
$lang->user->lockWarning  = "You can try %s times.";
$lang->user->loginLocked  = "Please contact the administrator to unlock your account or try %s minutes later.";
$lang->user->weakPassword = "Your password does not meet the requirements.";
$lang->user->errorWeak    = "Passwords cannot use [%s] these commonly used weak passwords.";
$lang->user->errorCaptcha = "Captcha Error";

$lang->user->roleList['']       = '';
$lang->user->roleList['dev']    = 'Developer';
$lang->user->roleList['qa']     = 'Tester';
$lang->user->roleList['pm']     = 'Scrum Master';
$lang->user->roleList['po']     = 'Product Owner';
$lang->user->roleList['td']     = 'Technical Manager';
$lang->user->roleList['pd']     = 'Product Manager';
$lang->user->roleList['qd']     = 'QA Manager';
$lang->user->roleList['top']    = 'Senior Manager';
$lang->user->roleList['others'] = 'Others';

$lang->user->genderList['m'] = 'Male';
$lang->user->genderList['f'] = 'Female';

$lang->user->thirdPerson['m'] = 'Him';
$lang->user->thirdPerson['f'] = 'Her';

$lang->user->typeList['inside']  = $lang->user->inside;
$lang->user->typeList['outside'] = $lang->user->outside;

$lang->user->passwordStrengthList[0] = "<span style='color:red'>Weak</span>";
$lang->user->passwordStrengthList[1] = "<span style='color:#000'>Good</span>";
$lang->user->passwordStrengthList[2] = "<span style='color:green'>Strong</span>";

$lang->user->statusList['active'] = 'Active';
$lang->user->statusList['delete'] = 'Deleted';

$lang->user->personalData['createdTodos']        = 'Todos Created';
$lang->user->personalData['createdRequirements'] = "Requirements Created";
$lang->user->personalData['createdStories']      = "Stories Created";
$lang->user->personalData['finishedTasks']       = 'Tasks Finished';
$lang->user->personalData['createdBugs']         = 'Bugs Created';
$lang->user->personalData['resolvedBugs']        = 'Bugs Resolved';
$lang->user->personalData['createdCases']        = 'Cases Created';
$lang->user->personalData['createdRisks']        = 'Risks Created';
$lang->user->personalData['resolvedRisks']       = 'Risks Resolved';
$lang->user->personalData['createdIssues']       = 'Issues Created';
$lang->user->personalData['resolvedIssues']      = 'Issues Resolved';
$lang->user->personalData['createdDocs']         = 'Docs Created';

$lang->user->keepLogin['on']      = 'Keep Login';
$lang->user->loginWithDemoUser    = 'Login as Demo User:';

$lang->user->tpl = new stdclass();
$lang->user->tpl->type    = 'Type';
$lang->user->tpl->title   = 'TPL Title';
$lang->user->tpl->content = 'Content';
$lang->user->tpl->public  = 'Public';

$lang->usertpl = new stdclass();
$lang->usertpl->title = 'Template Name';

$lang->user->placeholder = new stdclass();
$lang->user->placeholder->account   = '>= 3 letters, underline and numbers';
$lang->user->placeholder->password1 = '>= 6 characters';
$lang->user->placeholder->role      = "Role is related to content and user listing order.";
$lang->user->placeholder->group     = "Group is related to user privileges.";
$lang->user->placeholder->commiter  = 'SVN/Git account';
$lang->user->placeholder->verify    = 'Please enter your ZenTao login password to verify..';

$lang->user->placeholder->passwordStrength[1] = '>= 6 letters and numbers';
$lang->user->placeholder->passwordStrength[2] = '>= 10 letters, numbers and special characters';

$lang->user->error = new stdclass();
$lang->user->error->account        = "ID %s，account must be >= 3 letters, underline or numbers";
$lang->user->error->accountDupl    = "ID %s，account is used.";
$lang->user->error->realname       = "ID %s，must be real name";
$lang->user->error->password       = "ID %s，password must be >= 6 characters.";
$lang->user->error->mail           = "ID %s，please enter valid Email address";
$lang->user->error->reserved       = "ID %s，account is reserved.";
$lang->user->error->weakPassword   = "ID %s，the password strength is less than the system setting.";
$lang->user->error->dangerPassword = "ID %s，Passwords cannot be used with [%s] these commonly used if-passwords.";

$lang->user->error->verifyPassword   = "Verification failed. Please enter your Login Password.";
$lang->user->error->originalPassword = "Old password is incorrect.";
$lang->user->error->companyEmpty     = "Company name must be not empty.";
$lang->user->error->noAccess         = "This user is not from your department. You have no access to this user information.";

$lang->user->contactFieldList['phone']    = $lang->user->phone;
$lang->user->contactFieldList['mobile']   = $lang->user->mobile;
$lang->user->contactFieldList['qq']       = $lang->user->qq;
$lang->user->contactFieldList['dingding'] = $lang->user->dingding;
$lang->user->contactFieldList['weixin']   = $lang->user->weixin;
$lang->user->contactFieldList['skype']    = $lang->user->skype;
$lang->user->contactFieldList['slack']    = $lang->user->slack;
$lang->user->contactFieldList['whatsapp'] = $lang->user->whatsapp;

$lang->user->executionTypeList['stage']  = 'Stage';
$lang->user->executionTypeList['sprint'] = $lang->iterationCommon;

$lang->user->contacts = new stdclass();
$lang->user->contacts->common   = 'Contacts';
$lang->user->contacts->listName = 'List Name';
$lang->user->contacts->userList = 'User List';

$lang->user->contacts->manage        = 'Manage List';
$lang->user->contacts->contactsList  = 'Contact List';
$lang->user->contacts->selectedUsers = 'Users';
$lang->user->contacts->selectList    = 'List';
$lang->user->contacts->createList    = 'Create List';
$lang->user->contacts->noListYet     = 'No contact list exists. Please create one first.';
$lang->user->contacts->confirmDelete = 'Do you want to delete this list?';
$lang->user->contacts->or            = ' or ';

$lang->user->resetFail       = "Failed. Please check the account.";
$lang->user->resetSuccess    = "Reset! Please use your new password to login.";
$lang->user->noticeResetFile = "<h5>Contact the Administrator to reset your password.</h5>
    <h5>If you are, please login your Zentao host and create a file named <span> '%s' </span>.</h5>
    <p>Note:</p>
    <ol>
    <li>Keep the file empty.</li>
    <li>If the file exists, remove it and create it again.</li>
    </ol>";
$lang->user->notice4Safe = "Warning: Weak password of one click package detected";
$lang->user->process4DIR = "It is detected that you may be using the one click installation package environment. Other sites in the environment are still using simple passwords. For security reasons, if you do not use other sites, please handle them in time. Delete or rename the %s directory. Visit: <a href='https://www.zentao.pm/book/zentaomanual/fix-weak-password-564.html' target='_blank'>https://www.zentao.pm/book/zentaomanual/fix-weak-password-564.html</a>";
$lang->user->process4DB  = "It is detected that you may be using the one click installation package environment. Other sites in the environment are still using simple passwords. For security reasons, if you do not use other sites, please handle them in time. Please login database and modify password field of zt_user table of %s database. Visit: <a href='https://www.zentao.pm/book/zentaomanual/fix-weak-password-564.html' target='_blank'>https://www.zentao.pm/book/zentaomanual/fix-weak-password-564.html</a>";
/* webhook */
$lang->webhook->common     = 'Webhook';
$lang->webhook->list       = 'Hook List';
$lang->webhook->api        = 'API';
$lang->webhook->entry      = 'Entry';
$lang->webhook->log        = 'Log';
$lang->webhook->bind       = 'Bind User';
$lang->webhook->chooseDept = 'Choose department';
$lang->webhook->assigned   = 'AssignedTo';
$lang->webhook->setting    = 'Settings';

$lang->webhook->logAction = 'Webhook Log';

$lang->webhook->browse = 'Browse';
$lang->webhook->create = 'Create';
$lang->webhook->edit   = 'Edit';
$lang->webhook->delete = 'Delete';

$lang->webhook->id          = 'ID';
$lang->webhook->type        = 'Type';
$lang->webhook->name        = 'Name';
$lang->webhook->url         = 'Webhook URL';
$lang->webhook->domain      = 'ZenTao Domain';
$lang->webhook->contentType = 'Content Type';
$lang->webhook->sendType    = 'Sending Type';
$lang->webhook->secret      = 'Secret';
$lang->webhook->product     = "{$lang->productCommon}";
$lang->webhook->execution   = "{$lang->execution->common}";
$lang->webhook->params      = 'Parameters';
$lang->webhook->action      = 'Trigger Action';
$lang->webhook->desc        = 'Description';
$lang->webhook->createdBy   = 'CreatedBy';
$lang->webhook->createdDate = 'CreatedDate';
$lang->webhook->editedby    = 'EditedBy';
$lang->webhook->editedDate  = 'EditedDate';
$lang->webhook->date        = 'Sent';
$lang->webhook->data        = 'Data';
$lang->webhook->result      = 'Result';

$lang->webhook->typeList['']            = '';
$lang->webhook->typeList['dinggroup']   = 'Dingding Robot';
$lang->webhook->typeList['dinguser']    = 'Dingding Notifier';
$lang->webhook->typeList['wechatgroup'] = 'Enterprise WeChat Robot';
$lang->webhook->typeList['wechatuser']  = 'Enterprise WeChat Notifier';
$lang->webhook->typeList['feishugroup'] = 'Feishu Robot';
$lang->webhook->typeList['feishuuser']  = 'Feishu Notifier';
$lang->webhook->typeList['default']     = 'Others';

$lang->webhook->sendTypeList['sync']  = 'Synchronous';
$lang->webhook->sendTypeList['async'] = 'Asynchronous';

$lang->webhook->dingAgentId     = 'AgentID';
$lang->webhook->dingAppKey      = 'AppKey';
$lang->webhook->dingAppSecret   = 'AppSecret';
$lang->webhook->dingUserid      = 'Ding UserID';
$lang->webhook->dingBindStatus  = 'Bind Status';
$lang->webhook->chooseDeptAgain = 'Rechoose department';

$lang->webhook->wechatCorpId     = 'Corp ID';
$lang->webhook->wechatCorpSecret = 'Corp Secret';
$lang->webhook->wechatAgentId    = 'Agent ID';
$lang->webhook->wechatUserid     = 'Wechat Userid';
$lang->webhook->wechatBindStatus = 'Bind Status';

$lang->webhook->feishuAppId       = 'Feishu App ID';
$lang->webhook->feishuAppSecret   = 'Feishu App Secret';
$lang->webhook->feishuUserid      = 'Feishu Users';
$lang->webhook->feishuBindStatus  = 'Feishu Bind Status';

$lang->webhook->zentaoUser  = 'Zentao User';

$lang->webhook->dingBindStatusList['0'] = 'No';
$lang->webhook->dingBindStatusList['1'] = 'Yes';

$lang->webhook->paramsList['objectType'] = 'Object Type';
$lang->webhook->paramsList['objectID']   = 'Object ID';
$lang->webhook->paramsList['product']    = "{$lang->productCommon}";
$lang->webhook->paramsList['execution']  = "{$lang->execution->common}";
$lang->webhook->paramsList['action']     = 'Action';
$lang->webhook->paramsList['actor']      = 'ActedBy';
$lang->webhook->paramsList['date']       = 'ActedDate';
$lang->webhook->paramsList['comment']    = 'Comment';
$lang->webhook->paramsList['text']       = 'Action Description';

$lang->webhook->confirmDelete = 'Do you want to delete this hook?';

$lang->webhook->trimWords = '';

$lang->webhook->note = new stdClass();
$lang->webhook->note->async     = 'If it is asynchronous, you have to go to Admin-System to turn on the cron.';
$lang->webhook->note->bind      = 'Bind User is only required for Dingding Notifier.';
$lang->webhook->note->product   = "All actions will trigger the hook if {$lang->productCommon} is empty, or only actions of selected {$lang->productCommon} will trigger it.";
$lang->webhook->note->execution = "All actions will trigger the hook if {$lang->execution->common} is empty, or only actions of selected {$lang->execution->common} will trigger it.";

$lang->webhook->note->dingHelp   = " <a href='http://www.zentao.net/book/zentaopmshelp/358.html' target='_blank'><i class='icon-help'></i></a>";
$lang->webhook->note->wechatHelp = " <a href='http://www.zentao.net/book/zentaopmshelp/367.html' target='_blank'><i class='icon-help'></i></a>";

$lang->webhook->note->typeList['bearychat'] = 'Add a ZenTao bot in bearychat and get the webhook url.';
$lang->webhook->note->typeList['dingding']  = 'Add a customized bot in dingding and get the webhook url.';
$lang->webhook->note->typeList['weixin']    = 'Add a customized bot in WeChat and get the webhook url.';
$lang->webhook->note->typeList['default']   = 'Get a webhook url from others';

$lang->webhook->error = new stdclass();
$lang->webhook->error->curl   = 'Load php-curl in php.ini.';
$lang->webhook->error->noDept = 'There is no department selected. Please choose department first.';
