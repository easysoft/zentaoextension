<?php
/* common */
$lang->arrow     = '&nbsp;<i class="icon-angle-right"></i>&nbsp;';
$lang->colon     = '::';
$lang->comma     = ',';
$lang->dot       = '.';
$lang->at        = ' on ';
$lang->downArrow = '↓';
$lang->null      = 'null';
$lang->ellipsis  = '…';
$lang->percent   = '%';

$lang->zentaoPMS      = 'ZenTao';
$lang->welcome        = "%s PMS";
$lang->logout         = 'Logout';
$lang->login          = 'Login';
$lang->help           = 'Help';
$lang->aboutZenTao    = 'ZenTao';
$lang->profile        = 'Profile';
$lang->changePassword = 'Password';
$lang->runInfo        = "<div class='row'><div class='u-1 a-center' id='debugbar'>Time %s MS, Memory %s KB, Query %s.  </div></div>";
$lang->agreement      = "I have read and agreed to the terms and conditions of <a href='http://zpl.pub/page/zplv12.html' target='_blank'> Z PUBLIC LICENSE 1.2 </a>. <span class='text-danger'>Without authorization, I should not remove, hide or cover any logos/links of ZenTao.</span>";

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
$lang->saveSuccess  = 'Saved.';
$lang->confirm      = 'Confirm';
$lang->preview      = 'View';
$lang->goback       = 'Back';
$lang->goPC         = 'PC';
$lang->more         = 'More';
$lang->day          = 'Day';
$lang->customConfig = 'Custom Config';
$lang->public       = 'Public';
$lang->trunk        = 'Trunk';
$lang->sort         = 'Sort';
$lang->required     = 'Required';
$lang->noData       = 'No record';

$lang->actions         = 'Actions';
$lang->restore         = 'Restore';
$lang->comment         = 'Note';
$lang->history         = 'History';
$lang->attatch         = 'Attachment';
$lang->reverse         = 'Reverse';
$lang->switchDisplay   = 'Toggle';
$lang->expand          = 'Expand All';
$lang->collapse        = 'Collapse';
$lang->saveSuccess     = 'Saved';
$lang->fail            = 'Fail';
$lang->addFiles        = 'Add';
$lang->files           = 'File ';
$lang->pasteText       = 'Paste';
$lang->uploadImages    = 'Upload';
$lang->timeout         = 'Timeout. Pease check your network settings, or try it again!';
$lang->repairTable     = 'Database table might be damaged. Please use phpmyadmin or myisamchk to fix it.';
$lang->duplicate       = '%s has the same title as that of an existing file.';
$lang->ipLimited       = "<html><head><meta http-equiv='Content-Type' content='text/html; charset=utf-8' /></head><body>Sorry, current IP Login has been restricted. PLease contact Admin to unrestrict it.</body></html>";
$lang->unfold          = '+';
$lang->fold            = '-';
$lang->homepage        = 'Set as Home';
$lang->tutorial        = 'Tutorial';
$lang->changeLog       = 'Change Log';
$lang->manual          = 'Manual';
$lang->manualUrl       = 'http://www.zentao.net/book/zentaopmshelp.html?fullScreen=zentao';
$lang->customMenu      = 'Custom Menu';
$lang->customField     = 'Custom Field';
$lang->lineNumber      = 'Line No.';
$lang->tutorialConfirm = 'You are using tutorial. Do you want to exit right now？';
$lang->youCould        = 'You could ';

$lang->preShortcutKey  = '[Shortcut:←]';
$lang->nextShortcutKey = '[Shortcut:→]';
$lang->backShortcutKey = '[Shortcut:Alt+↑]';

$lang->select        = 'Select';
$lang->selectAll     = 'Select All';
$lang->selectReverse = 'Select Reverse';
$lang->loading       = 'Loading...';
$lang->notFound      = 'Not found!';
$lang->showAll       = '[[Show All]]';

$lang->future       = 'Pending';
$lang->year         = 'Year';
$lang->workingHour  = 'Hour';

$lang->idAB         = 'ID';
$lang->priAB        = 'P';
$lang->statusAB     = 'Status';
$lang->openedByAB   = 'Creator';
$lang->assignedToAB = 'Assignee';
$lang->typeAB       = 'Type';

$lang->common = new stdclass();
$lang->common->common = 'Common Module';

$lang->menu = new stdclass();
$lang->menu->my      = '<span>Dashboard</span>|my|index';
$lang->menu->product = $lang->productCommon . '|product|index|locate=no';
$lang->menu->project = $lang->projectCommon . '|project|index|locate=no';
$lang->menu->qa      = 'QA|qa|index';
$lang->menu->doc     = 'Doc|doc|index';
$lang->menu->report  = 'Report|report|index';
$lang->menu->company = 'Company|company|index';

$lang->adminMenu = 'Admin|admin|index';

$lang->dividerMenu = ',qa,';

$lang->searchObjects['bug']         = 'Bug';
$lang->searchObjects['story']       = 'Story';
$lang->searchObjects['task']        = 'Task';
$lang->searchObjects['testcase']    = 'Case';
$lang->searchObjects['project']     = $lang->projectCommon;
$lang->searchObjects['product']     = $lang->productCommon;
$lang->searchObjects['user']        = 'User';
$lang->searchObjects['build']       = 'Build';
$lang->searchObjects['release']     = 'Release';
$lang->searchObjects['productplan'] = $lang->productCommon . 'Plan';
$lang->searchObjects['testtask']    = 'Test Task';
$lang->searchObjects['doc']         = 'Doc';
$lang->searchObjects['testsuite']   = 'Case Library';
$lang->searchObjects['testreport']  = 'Test Report';
$lang->searchTips                   = 'ID (ctrl+g)';

$lang->importEncodeList['gbk']   = 'GBK';
$lang->importEncodeList['big5']  = 'BIG5';
$lang->importEncodeList['utf-8'] = 'UTF-8';

$lang->exportFileTypeList['csv']  = 'csv';
$lang->exportFileTypeList['xml']  = 'xml';
$lang->exportFileTypeList['html'] = 'html';

$lang->exportTypeList['all']      = 'All';
$lang->exportTypeList['selected'] = 'Selected';

$lang->lang = 'Language';

$lang->theme                = 'Theme';
$lang->themes['default']    = 'ZenTao Blue (default)';
$lang->themes['green']      = 'Green';
$lang->themes['red']        = 'Red';
$lang->themes['purple']     = 'Purple';
$lang->themes['pink']       = 'Pink';
$lang->themes['blackberry'] = 'Blackberry';
$lang->themes['classic']    = 'Classic';

$lang->index = new stdclass();
$lang->index->menu = new stdclass();

$lang->index->menu->product = "{$lang->productCommon}|product|browse";
$lang->index->menu->project = "{$lang->projectCommon}|project|browse";

$lang->my = new stdclass();
$lang->my->menu = new stdclass();

$lang->my->menu->index          = 'Home|my|index';
$lang->my->menu->calendar       = array('link' => 'Calendar|my|calendar|', 'subModule' => 'todo', 'alias' => 'todo');
$lang->my->menu->task           = array('link' => 'Task|my|task|', 'subModule' => 'task');
$lang->my->menu->bug            = array('link' => 'Bug|my|bug|',   'subModule' => 'bug');
$lang->my->menu->testtask       = array('link' => 'Test Task|my|testtask|', 'subModule' => 'testcase,testtask', 'alias' => 'testcase');
$lang->my->menu->story          = array('link' => 'Story|my|story|',   'subModule' => 'story');
$lang->my->menu->myProject      = "{$lang->projectCommon}|my|project|";
$lang->my->menu->dynamic        = 'Dynamic|my|dynamic|';
$lang->my->menu->profile        = array('link' => 'Profile|my|profile', 'alias' => 'editprofile');
$lang->my->menu->changePassword = 'Password|my|changepassword';
$lang->my->menu->manageContacts = 'Contact|my|managecontacts';
$lang->my->menu->score          = 'Score|my|score';

$lang->todo = new stdclass();
$lang->todo->menu = $lang->my->menu;

$lang->score       = new stdclass();
$lang->score->menu = $lang->my->menu;

$lang->product = new stdclass();
$lang->product->menu = new stdclass();

$lang->product->menu->story    = array('link' => 'Story|product|browse|productID=%s', 'alias' => 'batchedit', 'subModule' => 'story');
$lang->product->menu->plan     = array('link' => 'Plan|productplan|browse|productID=%s', 'subModule' => 'productplan');
$lang->product->menu->release  = array('link' => 'Release|release|browse|productID=%s',     'subModule' => 'release');
$lang->product->menu->project  = "{$lang->projectCommon}|product|project|status=all&productID=%s";
$lang->product->menu->doc      = array('link' => 'Doc|doc|objectLibs|type=product&objectID=%s&from=product', 'subModule' => 'doc');
$lang->product->menu->dynamic  = 'Dynamic|product|dynamic|productID=%s';
$lang->product->menu->roadmap  = 'Roadmap|product|roadmap|productID=%s';
$lang->product->menu->branch   = '@branch@|branch|manage|productID=%s';
$lang->product->menu->module   = 'Module|tree|browse|productID=%s&view=story';
$lang->product->menu->view     = array('link' => 'Overview|product|view|productID=%s', 'alias' => 'edit');

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

$lang->project->menu->list     = array('link' => 'Task List|project|task|projectID=%s', 'subModule' => 'task,grouptask,tree', 'alias' => 'grouptask,importtask,importbug,tree', 'class' => 'dropdown dropdown-hover');
$lang->project->menu->kanban   = array('link' => 'Kanban|project|kanban|projectID=%s');
$lang->project->menu->burn     = array('link' => 'Burn|project|burn|projectID=%s');
$lang->project->menu->story    = array('link' => 'Story|project|story|projectID=%s', 'subModule' => 'story', 'alias' => 'linkstory,storykanban');
$lang->project->menu->qa       = array('link' => 'Bug|project|bug|projectID=%s', 'subModule' => 'bug,build,testtask', 'alias' => 'build,testtask', 'class' => 'dropdown dropdown-hover');
$lang->project->menu->doc      = array('link' => 'Doc|doc|objectLibs|type=project&objectID=%s&from=project', 'subModule' => 'doc');
$lang->project->menu->action   = array('link' => 'Dynamic|project|dynamic|projectID=%s', 'subModule' => 'dynamic', 'class' => 'dropdown dropdown-hover');
$lang->project->menu->product  = $lang->productCommon . '|project|manageproducts|projectID=%s';
$lang->project->menu->team     = array('link' => 'Team|project|team|projectID=%s', 'alias' => 'managemembers');
$lang->project->menu->view     = array('link' => 'Overview|project|view|projectID=%s', 'alias' => 'edit,start,suspend,putoff,close');

$lang->project->subMenu = new stdclass();
$lang->project->subMenu->list = new stdclass();
$lang->project->subMenu->list->task      = 'Task List|project|task|projectID=%s';
$lang->project->subMenu->list->groupTask = 'Group View|project|groupTask|projectID=%s';
$lang->project->subMenu->list->tree      = 'Tree View|project|tree|projectID=%s';

$lang->project->subMenu->qa = new stdclass();
$lang->project->subMenu->qa->bug      = 'Bug|project|bug|projectID=%s';
$lang->project->subMenu->qa->build    = array('link' => 'Build|project|build|projectID=%s', 'subModule' => 'build');
$lang->project->subMenu->qa->testtask = array('link' => 'Test Task|project|testtask|projectID=%s', 'subModule' => 'testreport,testtask');

$lang->project->subMenu->action = new stdclass();
$lang->project->subMenu->action->dynamic  = 'Dynamic|project|dynamic|projectID=%s';

$lang->project->dividerMenu = ',story,doc,';

$lang->task  = new stdclass();
$lang->build = new stdclass();
$lang->task->menu  = $lang->project->menu;
$lang->build->menu = $lang->project->menu;

$lang->qa = new stdclass();
$lang->qa->menu = new stdclass();

$lang->qa->menu->bug       = array('link' => 'Bug|bug|browse|productID=%s');
$lang->qa->menu->testcase  = array('link' => 'Case|testcase|browse|productID=%s');
$lang->qa->menu->testtask  = array('link' => 'Test Task|testtask|browse|productID=%s');
$lang->qa->menu->testsuite = array('link' => 'Suite|testsuite|browse|productID=%s');
$lang->qa->menu->report    = array('link' => 'Report|testreport|browse|productID=%s');
$lang->qa->menu->caselib   = array('link' => 'Library|testsuite|library');

$lang->bug = new stdclass();
$lang->bug->menu = new stdclass();

$lang->bug->menu->bug       = array('link' => 'Bug|bug|browse|productID=%s', 'alias' => 'view,create,batchcreate,edit,resolve,close,activate,report,batchedit,batchactivate,confirmbug,assignto', 'subModule' => 'tree');
$lang->bug->menu->testcase  = array('link' => 'Case|testcase|browse|productID=%s');
$lang->bug->menu->testtask  = array('link' => 'Build|testtask|browse|productID=%s');
$lang->bug->menu->testsuite = array('link' => 'Suite|testsuite|browse|productID=%s');
$lang->bug->menu->report    = array('link' => 'Report|testreport|browse|productID=%s');
$lang->bug->menu->caselib   = array('link' => 'Library|testsuite|library');

$lang->testcase = new stdclass();
$lang->testcase->menu = new stdclass();
$lang->testcase->menu->bug       = array('link' => 'Bug|bug|browse|productID=%s');
$lang->testcase->menu->testcase  = array('link' => 'Case|testcase|browse|productID=%s', 'alias' => 'view,create,batchcreate,edit,batchedit,showimport,groupcase,importfromlib', 'subModule' => 'tree');
$lang->testcase->menu->testtask  = array('link' => 'Build|testtask|browse|productID=%s');
$lang->testcase->menu->testsuite = array('link' => 'Suite|testsuite|browse|productID=%s');
$lang->testcase->menu->report    = array('link' => 'Report|testreport|browse|productID=%s');
$lang->testcase->menu->caselib   = array('link' => 'Library|testsuite|library');

$lang->testtask = new stdclass();
$lang->testtask->menu = new stdclass();
$lang->testtask->menu->bug       = array('link' => 'Bug|bug|browse|productID=%s');
$lang->testtask->menu->testcase  = array('link' => 'Case|testcase|browse|productID=%s');
$lang->testtask->menu->testtask  = array('link' => 'Build|testtask|browse|productID=%s', 'alias' => 'view,create,edit,linkcase,cases,start,close,batchrun,groupcase,report');
$lang->testtask->menu->testsuite = array('link' => 'Suite|testsuite|browse|productID=%s');
$lang->testtask->menu->report    = array('link' => 'Report|testreport|browse|productID=%s');
$lang->testtask->menu->caselib   = array('link' => 'Library|testsuite|library');

$lang->testsuite = new stdclass();
$lang->testsuite->menu = new stdclass();
$lang->testsuite->menu->bug       = array('link' => 'Bug|bug|browse|productID=%s');
$lang->testsuite->menu->testcase  = array('link' => 'Case|testcase|browse|productID=%s');
$lang->testsuite->menu->testtask  = array('link' => 'Build|testtask|browse|productID=%s');
$lang->testsuite->menu->testsuite = array('link' => 'Suite|testsuite|browse|productID=%s', 'alias' => 'view,create,edit,linkcase');
$lang->testsuite->menu->report    = array('link' => 'Report|testreport|browse|productID=%s');
$lang->testsuite->menu->caselib   = array('link' => 'Library|testsuite|library');

$lang->testreport = new stdclass();
$lang->testreport->menu = new stdclass();
$lang->testreport->menu->bug       = array('link' => 'Bug|bug|browse|productID=%s');
$lang->testreport->menu->testcase  = array('link' => 'Case|testcase|browse|productID=%s');
$lang->testreport->menu->testtask  = array('link' => 'Build|testtask|browse|productID=%s');
$lang->testreport->menu->testsuite = array('link' => 'Suite|testsuite|browse|productID=%s');
$lang->testreport->menu->report    = array('link' => 'Report|testreport|browse|productID=%s', 'alias' => 'view,create,edit');
$lang->testreport->menu->caselib   = array('link' => 'Library|testsuite|library');

$lang->caselib = new stdclass();
$lang->caselib->menu = new stdclass();
$lang->caselib->menu->bug       = array('link' => 'Bug|bug|browse|');
$lang->caselib->menu->testcase  = array('link' => 'Case|testcase|browse|');
$lang->caselib->menu->testtask  = array('link' => 'Build|testtask|browse|');
$lang->caselib->menu->testsuite = array('link' => 'Suite|testsuite|browse|');
$lang->caselib->menu->report    = array('link' => 'Report|testreport|browse|');
$lang->caselib->menu->caselib   = array('link' => 'Library|testsuite|library', 'alias' => 'createlib,createcase,libview,edit,batchcreatecase,showimport', 'subModule' => 'tree,testcase');

$lang->doc = new stdclass();
$lang->doc->menu = new stdclass();
//$lang->doc->menu->createLib = array('link' => '<i class="icon icon-folder-plus"></i>&nbsp;Add Doc Lib|doc|createLib', 'float' => 'right');

$lang->report = new stdclass();
$lang->report->menu = new stdclass();

$lang->report->menu->product = array('link' => $lang->productCommon . '|report|productsummary');
$lang->report->menu->prj     = array('link' => $lang->projectCommon . '|report|projectdeviation');
$lang->report->menu->test    = array('link' => 'Test|report|bugcreate', 'alias' => 'bugassign');
$lang->report->menu->staff   = array('link' => 'Company|report|workload');

$lang->report->notice = new stdclass();
$lang->report->notice->help = 'Note: Report is generated from search results. Please search in the list page before you generate a report.';

$lang->company = new stdclass();
$lang->company->menu = new stdclass();
$lang->company->menu->browseUser  = array('link' => 'User|company|browse', 'subModule' => 'user');
$lang->company->menu->dept        = array('link' => 'Department|dept|browse', 'subModule' => 'dept');
$lang->company->menu->browseGroup = array('link' => 'Group|group|browse', 'subModule' => 'group');
$lang->company->menu->view        = array('link' => 'Company|company|view');
$lang->company->menu->dynamic     = 'Dynamic|company|dynamic|';

$lang->dept  = new stdclass();
$lang->group = new stdclass();
$lang->user  = new stdclass();

$lang->dept->menu  = $lang->company->menu;
$lang->group->menu = $lang->company->menu;
$lang->user->menu  = $lang->company->menu;

$lang->admin = new stdclass();
$lang->admin->menu = new stdclass();
$lang->admin->menu->index     = array('link' => 'Home|admin|index', 'alias' => 'register,certifytemail,certifyztmobile,ztcompany');

$lang->admin->menu->custom    = array('link' => 'Custom|custom|set', 'subModule' => 'custom');
$lang->admin->menu->message   = array('link' => 'Message|message|index', 'subModule' => 'message,mail,webhook');
$lang->admin->menu->backup    = array('link' => 'Backup|backup|index', 'subModule' => 'backup');
$lang->admin->menu->safe      = array('link' => 'Security|admin|safe', 'alias' => 'checkweak');
$lang->admin->menu->cron      = array('link' => 'Cron|cron|index', 'subModule' => 'cron');
$lang->admin->menu->trashes   = array('link' => 'Recycle|action|trash', 'subModule' => 'action');
$lang->admin->menu->dev       = array('link' => 'Develop|dev|api', 'alias' => 'db', 'subModule' => 'dev,editor');
$lang->admin->menu->sso       = 'Zdoo|admin|sso';

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
$lang->entry     = new stdclass();
$lang->webhook   = new stdclass();
$lang->message   = new stdclass();
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
$lang->entry->menu     = $lang->admin->menu;
$lang->webhook->menu   = $lang->admin->menu;
$lang->message->menu   = $lang->admin->menu;

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
$lang->menugroup->testsuite   = 'qa';
$lang->menugroup->caselib     = 'qa';
$lang->menugroup->testreport  = 'qa';
$lang->menugroup->people      = 'company';
$lang->menugroup->dept        = 'company';
$lang->menugroup->todo        = 'my';
$lang->menugroup->score       = 'my';
$lang->menugroup->action      = 'admin';
$lang->menugroup->backup      = 'admin';
$lang->menugroup->cron        = 'admin';
$lang->menugroup->extension   = 'admin';
$lang->menugroup->custom      = 'admin';
$lang->menugroup->editor      = 'admin';
$lang->menugroup->mail        = 'admin';
$lang->menugroup->dev         = 'admin';
$lang->menugroup->entry       = 'admin';
$lang->menugroup->webhook     = 'admin';
$lang->menugroup->message     = 'admin';

$lang->error = new stdclass();
$lang->error->companyNotFound = "The domain %s cannot be found!";
$lang->error->length          = array("『%s』Length Error. It should be『%s』", "『%s』length should be <=『%s』and >『%s』.");
$lang->error->reg             = "『%s』Format Error. It should be『%s』.";
$lang->error->unique          = "『%s』『%s』existed. Please go to Admin->Recycle to restore it, if you are sure it is deleted.";
$lang->error->gt              = "『%s』should be >『%s』.";
$lang->error->ge              = "『%s』should be >=『%s』.";
$lang->error->notempty        = "『%s』should not be blank.";
$lang->error->empty           = "『%s』should be null.";
$lang->error->equal           = "『%s』has to be『%s』.";
$lang->error->int             = array("『%s』should be numbers", "『%s』should be 『%s-%s』.");
$lang->error->float           = "『%s』should be numbers, decimals included.";
$lang->error->email           = "『%s』should be valid Email.";
$lang->error->date            = "『%s』should be valid date.";
$lang->error->datetime        = "『%s』should be valid date.";
$lang->error->code            = "『%s』should be letters or numbers.";
$lang->error->account         = "『%s』should be valid account.";
$lang->error->passwordsame    = "Two passwords should be consistent.";
$lang->error->passwordrule    = "Password should follow rules. It must be at least 6 characters.";
$lang->error->accessDenied    = 'Access is denied.';
$lang->error->pasteImg        = 'Image is not allowed to be pasted in your browser!';
$lang->error->noData          = 'No Data';
$lang->error->editedByOther   = 'This record might have been changed. Please refresh and try to edit again!';
$lang->error->tutorialData    = 'No data can be imported in tutorial mode. Please exit tutorial first!';

$lang->pager = new stdclass();
$lang->pager->noRecord     = "No Records";
$lang->pager->digest       = " <strong>%s</strong> in total. %s <strong>%s/%s</strong> &nbsp; ";
$lang->pager->recPerPage   = " <strong>%s</strong> per page";
$lang->pager->first        = "<i class='icon-step-backward' title='Home'></i>";
$lang->pager->pre          = "<i class='icon-play icon-flip-horizontal' title='Previous Page'></i>";
$lang->pager->next         = "<i class='icon-play' title='Next Page'></i>";
$lang->pager->last         = "<i class='icon-step-forward' title='Last Page'></i>";
$lang->pager->locate       = "Go!";
$lang->pager->previousPage = "Prev";
$lang->pager->nextPage     = "Next";
$lang->pager->summery      = "<strong>%s-%s</strong> of <strong>%s</strong>.";

$lang->proVersion     = "<a href='http://api.zentao.net/goto.php?item=proversion&from=footer' target='_blank' id='proLink' class='text-important'>ZenTao Pro <i class='text-danger icon-pro-version'></i></a> &nbsp; ";
$lang->downNotify     = "Download Desktop Notification";
$lang->website        = "http://www.zentao.net";

$lang->suhosinInfo     = "Warning! Data is reaching the limit. Please change <font color=red>sohusin.post.max_vars</font> and <font color=red>sohusin.request.max_vars</font> (set larger %s value) in php.ini, then save and restart Apache or php-fpm, or some data will not be saved.";
$lang->maxVarsInfo     = "Warning! Data is reaching the limit. Please change <font color=red>max_input_vars</font> (set larger %s value) in php.ini, then save and restart Apache or php-fpm, or some data will not be saved.";
$lang->pasteTextInfo   = "Paste text here. Each line will be the title of each record. ";
$lang->noticeImport    = "Imported data contains data that has already existed in system. Please confirm you actions on the date.";
$lang->importConfirm   = "Import Confirm";
$lang->importAndCover  = "Override";
$lang->importAndInsert = "New Insertion";


$lang->noResultsMatch     = "No results match!";
$lang->searchMore         = "More results：";
$lang->chooseUsersToMail  = "Choose users that will be notified.";
$lang->browserNotice      = 'Your current browser might not show the best effect. Please use Chrome, Firefox, IE9+, Opera or Safari.';
$lang->noticePasteImg     = "Paste images here";

if(!defined('DT_DATETIME1')) define('DT_DATETIME1',  'Y-m-d H:i:s');
if(!defined('DT_DATETIME2')) define('DT_DATETIME2',  'y-m-d H:i');
if(!defined('DT_MONTHTIME1'))define('DT_MONTHTIME1', 'n/d H:i');
if(!defined('DT_MONTHTIME2'))define('DT_MONTHTIME2', 'n/d H:i');
if(!defined('DT_DATE1'))     define('DT_DATE1',     'Y-m-d');
if(!defined('DT_DATE2'))     define('DT_DATE2',     'Ymd');
if(!defined('DT_DATE3'))     define('DT_DATE3',     'Y/m/d');
if(!defined('DT_DATE4'))     define('DT_DATE4',     'n/j');
if(!defined('DT_TIME1'))     define('DT_TIME1',     'H:i:s');
if(!defined('DT_TIME2'))     define('DT_TIME2',     'H:i');

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
$lang->datepicker->dpText->TEXT_DATE        = 'Choose Time';
$lang->datepicker->dpText->TEXT_CHOOSE_DATE = 'Choose Date';

$lang->datepicker->dayNames     = array('Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday');
$lang->datepicker->abbrDayNames = array('Sun', 'Mon', 'Tues', 'Wed', 'Thur', 'Fri', 'Sat');
$lang->datepicker->monthNames   = array('Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec');

$lang->icons['todo']      = 'check';
$lang->icons['product']   = 'cube';
$lang->icons['bug']       = 'bug';
$lang->icons['task']      = 'check-sign';
$lang->icons['tasks']     = 'tasks';
$lang->icons['project']   = 'stack';
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
$lang->icons['company']   = 'sitemap';
$lang->icons['user']      = 'user';
$lang->icons['dept']      = 'sitemap';
$lang->icons['tree']      = 'sitemap';
$lang->icons['usecase']   = 'sitemap';
$lang->icons['testcase']  = 'sitemap';
$lang->icons['result']    = 'list-alt';
$lang->icons['mail']      = 'envelope';
$lang->icons['trash']     = 'trash';
$lang->icons['extension'] = 'th-large';
$lang->icons['app']       = 'th-large';

$lang->icons['results']            = 'list-alt';
$lang->icons['create']             = 'plus';
$lang->icons['post']               = 'edit';
$lang->icons['batchCreate']        = 'plus-sign';
$lang->icons['batchEdit']          = 'edit-sign';
$lang->icons['batchClose']         = 'off';
$lang->icons['edit']               = 'edit';
$lang->icons['delete']             = 'trash';
$lang->icons['copy']               = 'copy';
$lang->icons['report']             = 'bar-chart';
$lang->icons['export']             = 'export';
$lang->icons['report-file']        = 'file-powerpoint';
$lang->icons['import']             = 'import';
$lang->icons['finish']             = 'checked';
$lang->icons['resolve']            = 'check';
$lang->icons['start']              = 'play';
$lang->icons['restart']            = 'play';
$lang->icons['run']                = 'play';
$lang->icons['runCase']            = 'play';
$lang->icons['batchRun']           = 'play-sign';
$lang->icons['assign']             = 'hand-right';
$lang->icons['assignTo']           = 'hand-right';
$lang->icons['change']             = 'fork';
$lang->icons['link']               = 'link';
$lang->icons['close']              = 'off';
$lang->icons['activate']           = 'magic';
$lang->icons['review']             = 'glasses';
$lang->icons['confirm']            = 'search';
$lang->icons['confirmBug']         = 'search';
$lang->icons['putoff']             = 'calendar';
$lang->icons['suspend']            = 'pause';
$lang->icons['pause']              = 'pause';
$lang->icons['cancel']             = 'ban-circle';
$lang->icons['recordEstimate']     = 'time';
$lang->icons['customFields']       = 'cogs';
$lang->icons['manage']             = 'cog';
$lang->icons['unlock']             = 'unlock-alt';
$lang->icons['confirmStoryChange'] = 'search';
$lang->icons['score']              = 'tint';

include (dirname(__FILE__) . '/menuOrder.php');

global $config;
if(isset($config->global->flow) and $config->global->flow == 'onlyStory')
{
        unset($lang->menu->project);
    unset($lang->menu->report);
    unset($lang->menu->qa);

    unset($lang->menuOrder[15]);
    unset($lang->menuOrder[20]);
    unset($lang->menuOrder[30]);

        unset($lang->my->menu->bug);
    unset($lang->my->menu->testtask);
    unset($lang->my->menu->task);
    unset($lang->my->menu->myProject);

        unset($lang->product->menu->project);
    unset($lang->product->menu->doc);

        $lang->menu->product = "{$lang->productCommon}|product|index";

        unset($lang->searchObjects['bug']);
    unset($lang->searchObjects['task']);
    unset($lang->searchObjects['testcase']);
    unset($lang->searchObjects['project']);
    unset($lang->searchObjects['build']);
    unset($lang->searchObjects['testtask']);
    unset($lang->searchObjects['testsuite']);
    unset($lang->searchObjects['testreport']);
}

if(isset($config->global->flow) and $config->global->flow == 'onlyTask')
{
        unset($lang->menu->product);
    unset($lang->menu->report);
    unset($lang->menu->qa);

    unset($lang->menuOrder[10]);
    unset($lang->menuOrder[20]);
    unset($lang->menuOrder[30]);

        unset($lang->my->menu->bug);
    unset($lang->my->menu->testtask);
    unset($lang->my->menu->story);

        unset($lang->project->menu->story);
    unset($lang->project->menu->build);
    unset($lang->project->menu->bug);
    unset($lang->project->menu->testtask);
    unset($lang->project->menu->product);
    unset($lang->project->menu->doc);

        unset($lang->product->menu);
    unset($lang->product->menuOrder);

    unset($lang->searchObjects['story']);
    unset($lang->searchObjects['product']);
    unset($lang->searchObjects['testcase']);
    unset($lang->searchObjects['release']);
    unset($lang->searchObjects['productplan']);
    unset($lang->searchObjects['testsuite']);
    unset($lang->searchObjects['testreport']);
}

if(isset($config->global->flow) and $config->global->flow == 'onlyTest')
{
        unset($lang->menu->project);
    unset($lang->menu->qa);
    unset($lang->menu->report);

    unset($lang->menuOrder[15]);
    unset($lang->menuOrder[20]);
    unset($lang->menuOrder[30]);

        $lang->menu->product = "{$lang->productCommon}|product|index";

        unset($lang->my->menu->task);
    unset($lang->my->menu->myProject);
    unset($lang->my->menu->story);

        unset($lang->project->menu);
    unset($lang->project->menuOrder);

        $lang->menu->bug       = 'Bug|bug|index';
    $lang->menu->testcase  = 'Test Case|testcase|index';
    $lang->menu->testsuite = 'Test Suite|testsuite|index';
    $lang->menu->testtask  = 'Test Task|testtask|index';
    $lang->menu->caselib   = 'Case Library|testsuite|library';

    $lang->menuOrder[6]  = 'bug';
    $lang->menuOrder[7]  = 'testcase';
    $lang->menuOrder[8]  = 'testsuite';
    $lang->menuOrder[9]  = 'testtask';
    $lang->menuOrder[10] = 'caselib';
    $lang->menuOrder[11] = 'product';

        $lang->bug->menu = new stdclass();
    $lang->bug->menu->all           = 'All|bug|browse|productID=%s&branch=%s&browseType=all&param=%s';
    $lang->bug->menu->unclosed      = 'Open|bug|browse|productID=%s&branch=%s&browseType=unclosed&param=%s';
    $lang->bug->menu->openedbyme    = 'CreatedByMe|bug|browse|productID=%s&branch=%s&browseType=openedbyme&param=%s';
    $lang->bug->menu->assigntome    = 'AssignedToMe|bug|browse|productID=%s&branch=%s&browseType=assigntome&param=%s';
    $lang->bug->menu->resolvedbyme  = 'ResolvedByMe|bug|browse|productID=%s&branch=%s&browseType=resolvedbyme&param=%s';
    $lang->bug->menu->toclosed      = 'ToBeClosed|bug|browse|productID=%s&branch=%s&browseType=toclosed&param=%s';
    $lang->bug->menu->unresolved    = 'Unresolved|bug|browse|productID=%s&branch=%s&browseType=unresolved&param=%s';
    $lang->bug->menu->more          = array('link' => 'More|bug|browse|productID=%s&branch=%s&browseType=unconfirmed&param=%s', 'class' => 'dropdown dropdown-hover');

    $lang->bug->subMenu = new stdclass();
    $lang->bug->subMenu->more = new stdclass();
    $lang->bug->subMenu->more->unconfirmed   = 'Unconfirmed|bug|browse|productID=%s&branch=%s&browseType=unconfirmed&param=%s';
    $lang->bug->subMenu->more->assigntonull  = 'Unassigned|bug|browse|productID=%s&branch=%s&browseType=assigntonull&param=%s';
    $lang->bug->subMenu->more->longlifebugs  = 'Pending|bug|browse|productID=%s&branch=%s&browseType=longlifebugs&param=%s';
    $lang->bug->subMenu->more->postponedbugs = 'PostPoned|bug|browse|productID=%s&branch=%s&browseType=postponedbugs&param=%s';
    $lang->bug->subMenu->more->overduebugs   = 'Overdue|bug|browse|productID=%s&branch=%s&browseType=overduebugs&param=%s';
    $lang->bug->subMenu->more->needconfirm   = 'NeedConfirm|bug|browse|productID=%s&branch=%s&browseType=needconfirm&param=%s';

    $lang->bug->menuOrder[5]  = 'product';
    $lang->bug->menuOrder[10] = 'all';
    $lang->bug->menuOrder[15] = 'unclosed';
    $lang->bug->menuOrder[20] = 'openedbyme';
    $lang->bug->menuOrder[25] = 'assigntome';
    $lang->bug->menuOrder[30] = 'resolvedbyme';
    $lang->bug->menuOrder[35] = 'toclosed';
    $lang->bug->menuOrder[40] = 'unresolved';
    $lang->bug->menuOrder[45] = 'unconfirmed';
    $lang->bug->menuOrder[50] = 'assigntonull';
    $lang->bug->menuOrder[55] = 'longlifebugs';
    $lang->bug->menuOrder[60] = 'postponedbugs';
    $lang->bug->menuOrder[65] = 'overduebugs';
    $lang->bug->menuOrder[70] = 'needconfirm';

        $lang->testcase->menu = new stdclass();
    $lang->testcase->menu->all     = 'All|testcase|browse|productID=%s&branch=%s&browseType=all';
    $lang->testcase->menu->wait    = 'Wait|testcase|browse|productID=%s&branch=%s&browseType=wait';
    $lang->testcase->menu->bysuite = array('link' => 'Test Suite|testsuite|create|productID=%s', 'class' => 'dropdown dropdown-hover');

    $lang->testcase->subMenu = new stdclass();
    $lang->testcase->subMenu->bysuite = new stdclass();
    $lang->testcase->subMenu->bysuite->create = 'Create Suite|testsuite|create|productID=%s';

    $lang->testcase->menuOrder[5]  = 'product';
    $lang->testcase->menuOrder[10] = 'all';
    $lang->testcase->menuOrder[15] = 'wait';
    $lang->testcase->menuOrder[20] = 'suite';

        $lang->testsuite->menu = new stdclass();

    $lang->testsuite->menuOrder[5]  = 'product';

        $lang->testtask->menu = new stdclass();
    $lang->testtask->menu->totalStatus = 'All|testtask|browse|productID=%s&branch=%s&type=%s,totalStatus';
    $lang->testtask->menu->wait        = 'Wait|testtask|browse|productID=%s&branch=%s&type=%s,wait';
    $lang->testtask->menu->doing       = 'Doing|testtask|browse|productID=%s&branch=%s&type=%s,doing';
    $lang->testtask->menu->blocked     = 'Blocked|testtask|browse|productID=%s&branch=%s&type=%s,blocked';
    $lang->testtask->menu->done        = 'Done|testtask|browse|productID=%s&branch=%s&type=%s,done';
    $lang->testtask->menu->report      = array('link' => 'Report|testreport|browse');

    $lang->testtask->menuOrder[5]  = 'product';
    $lang->testtask->menuOrder[10] = 'scope';
    $lang->testtask->menuOrder[15] = 'totalStatus';
    $lang->testtask->menuOrder[20] = 'wait';
    $lang->testtask->menuOrder[25] = 'doing';
    $lang->testtask->menuOrder[30] = 'blocked';
    $lang->testtask->menuOrder[35] = 'done';
    $lang->testtask->menuOrder[40] = 'report';

    $lang->testreport->menu      = $lang->testtask->menu;
    $lang->testreport->menuOrder = $lang->testtask->menuOrder;

        $lang->caselib->menu = new stdclass();
    $lang->caselib->menu->all  = 'All|testsuite|library|libID=%s&browseType=all';
    $lang->caselib->menu->wait = 'Wait|testsuite|library|libID=%s&browseType=wait';
    $lang->caselib->menu->view = 'View|testsuite|libview|libID=%s';

    $lang->caselib->menuOrder[5]  = 'lib';
    $lang->caselib->menuOrder[10] = 'all';
    $lang->caselib->menuOrder[15] = 'wait';
    $lang->caselib->menuOrder[20] = 'view';

        unset($lang->product->menu->story);
    unset($lang->product->menu->project);
    unset($lang->product->menu->release);
    unset($lang->product->menu->dynamic);
    unset($lang->product->menu->plan);
    unset($lang->product->menu->roadmap);
    unset($lang->product->menu->doc);
    unset($lang->product->menu->module);
    unset($lang->product->menu->index);

    $lang->product->menu->build = array('link' => 'Build|product|build', 'subModule' => 'build');

    $lang->product->menuOrder[5]  = 'build';
    $lang->product->menuOrder[10] = 'view';
    $lang->product->menuOrder[15] = 'order';

    $lang->build->menu      = $lang->product->menu;
    $lang->build->menuOrder = $lang->product->menuOrder;

        $lang->menugroup->bug        = 'bug';
    $lang->menugroup->testcase   = 'testcase';
    $lang->menugroup->testtask   = 'testtask';
    $lang->menugroup->testsuite  = 'testsuite';
    $lang->menugroup->testreport = 'testtask';
    $lang->menugroup->build      = 'product';

        unset($lang->searchObjects['story']);
    unset($lang->searchObjects['task']);
    unset($lang->searchObjects['release']);
    unset($lang->searchObjects['project']);
    unset($lang->searchObjects['productplan']);
}
/* action */
$lang->action->common     = 'Log';
$lang->action->product    = $lang->productCommon;
$lang->action->project    = $lang->projectCommon;
$lang->action->objectType = 'Object Type';
$lang->action->objectID   = 'ID';
$lang->action->objectName = 'Object Name';
$lang->action->actor      = 'Handler';
$lang->action->action     = 'Action';
$lang->action->actionID   = 'Action ID';
$lang->action->date       = 'Date';

$lang->action->trash       = 'Recycle';
$lang->action->undelete    = 'Restore';
$lang->action->hideOne     = 'Hide';
$lang->action->hideAll     = 'Hide All';
$lang->action->editComment = 'Edit';
$lang->action->create      = 'Add Comment';
$lang->action->comment     = 'Comment';

$lang->action->trashTips      = 'Note: All Deletion in ZenTao are logical.';
$lang->action->textDiff       = 'Text Format';
$lang->action->original       = 'Original Format';
$lang->action->confirmHideAll = 'Do you want to hide all the records?';
$lang->action->needEdit       = '%s that you want to restore exists. Please edit it.';
$lang->action->historyEdit    = 'The history editor cannot be empty.';
$lang->action->noDynamic      = 'No dynamics. ';

$lang->action->history = new stdclass();
$lang->action->history->action = 'Link';
$lang->action->history->field  = 'Field';
$lang->action->history->old    = 'Old value';
$lang->action->history->new    = 'New value';
$lang->action->history->diff   = 'Diff';

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
$lang->action->objectTypes['story']       = 'Story';
$lang->action->objectTypes['productplan'] = 'Plan';
$lang->action->objectTypes['release']     = 'Release';
$lang->action->objectTypes['project']     = $lang->projectCommon;
$lang->action->objectTypes['task']        = 'Task';
$lang->action->objectTypes['build']       = 'Build';
$lang->action->objectTypes['bug']         = 'Bug';
$lang->action->objectTypes['case']        = 'Case';
$lang->action->objectTypes['caseresult']  = 'Case Result';
$lang->action->objectTypes['stepresult']  = 'Case Steps';
$lang->action->objectTypes['testtask']    = 'Test Build';
$lang->action->objectTypes['user']        = 'User';
$lang->action->objectTypes['doc']         = 'Doc';
$lang->action->objectTypes['doclib']      = 'Doc Lib';
$lang->action->objectTypes['todo']        = 'Todo';
$lang->action->objectTypes['branch']      = 'Branch';
$lang->action->objectTypes['module']      = 'Module';
$lang->action->objectTypes['testsuite']   = 'Suite';
$lang->action->objectTypes['caselib']     = 'Library';
$lang->action->objectTypes['testreport']  = 'Report';
$lang->action->objectTypes['entry']       = 'Entry';
$lang->action->objectTypes['webhook']     = 'Webhook';

$lang->action->desc = new stdclass();
$lang->action->desc->common         = '$date, <strong>$action</strong> by <strong>$actor</strong>.' . "\n";
$lang->action->desc->extra          = '$date, <strong>$action</strong> as <strong>$extra</strong> by <strong>$actor</strong>.' . "\n";
$lang->action->desc->opened         = '$date, created by <strong>$actor</strong> .' . "\n";
$lang->action->desc->created        = '$date, created by  <strong>$actor</strong> .' . "\n";
$lang->action->desc->changed        = '$date, changed by <strong>$actor</strong> .' . "\n";
$lang->action->desc->edited         = '$date, edited by <strong>$actor</strong> .' . "\n";
$lang->action->desc->assigned       = '$date, <strong>$actor</strong> assigned to <strong>$extra</strong>.' . "\n";
$lang->action->desc->closed         = '$date, closed by <strong>$actor</strong> .' . "\n";
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
$lang->action->desc->recordestimate = '$date, recorded by <strong>$actor</strong> and it consumed <strong>$extra</strong> hours.';
$lang->action->desc->editestimate   = '$date, <strong>$actor</strong> edited Hour.';
$lang->action->desc->deleteestimate = '$date, <strong>$actor</strong> deleted Hour.';
$lang->action->desc->canceled       = '$date, cancelled by <strong>$actor</strong>.' . "\n";
$lang->action->desc->svncommited    = '$date, <strong>$actor</strong> committed and the build is <strong>#$extra</strong>.' . "\n";
$lang->action->desc->gitcommited    = '$date, <strong>$actor</strong> committed and the build is <strong>#$extra</strong>.' . "\n";
$lang->action->desc->finished       = '$date, finished by <strong>$actor</strong>.' . "\n";
$lang->action->desc->paused         = '$date, paused by <strong>$actor</strong>.' . "\n";
$lang->action->desc->verified       = '$date, verified by <strong>$actor</strong>.' . "\n";
$lang->action->desc->diff1          = '<strong><i>%s</i></strong> has been changed. It was "%s" and it is "%s".<br />' . "\n";
$lang->action->desc->diff2          = '<strong><i>%s</i></strong> has been changed. The difference is ' . "\n" . "<blockquote class='textdiff'>%s</blockquote>" . "\n<blockquote class='original'>%s</blockquote>";
$lang->action->desc->diff3          = 'File Name %s was changed to %s .' . "\n";
$lang->action->desc->linked2bug     = '$date Linked to <strong>$extra</strong> by <strong>$actor</strong>';

$lang->action->desc->linkrelatedcase   = '$date, <strong>$actor</strong> linked relevant use case <strong>$extra</strong>.' . "\n";
$lang->action->desc->unlinkrelatedcase = '$date, <strong>$actor</strong> unlinked relevant use case <strong>$extra</strong>.' . "\n";

$lang->action->label = new stdclass();
$lang->action->label->created             = 'created ';
$lang->action->label->opened              = 'opened ';
$lang->action->label->changed             = 'changed ';
$lang->action->label->edited              = 'edited ';
$lang->action->label->assigned            = 'assigned ';
$lang->action->label->closed              = 'closed ';
$lang->action->label->deleted             = 'deleted ';
$lang->action->label->deletedfile         = 'deleted ';
$lang->action->label->editfile            = 'edit ';
$lang->action->label->erased              = 'erased ';
$lang->action->label->undeleted           = 'restored ';
$lang->action->label->hidden              = 'hid ';
$lang->action->label->commented           = 'commented ';
$lang->action->label->activated           = 'activated ';
$lang->action->label->blocked             = 'blocked ';
$lang->action->label->resolved            = 'resolved ';
$lang->action->label->reviewed            = 'reviewed ';
$lang->action->label->moved               = 'moved ';
$lang->action->label->confirmed           = 'Confirm Story';
$lang->action->label->bugconfirmed        = 'Confirmed';
$lang->action->label->tostory             = 'Convert to Story';
$lang->action->label->frombug             = 'Converted from Bug';
$lang->action->label->fromlib             = 'Import from library';
$lang->action->label->totask              = 'Convert to Task';
$lang->action->label->svncommited         = 'SVN Commit';
$lang->action->label->gitcommited         = 'Git Commit';
$lang->action->label->linked2plan         = 'Link to Plan';
$lang->action->label->unlinkedfromplan    = 'Unlink';
$lang->action->label->changestatus        = 'Change Status';
$lang->action->label->marked              = 'marked';
$lang->action->label->linked2project      = "Link {$lang->projectCommon}";
$lang->action->label->unlinkedfromproject = "Unlink {$lang->projectCommon}";
$lang->action->label->unlinkedfrombuild   = "Unlink Build";
$lang->action->label->linked2release      = "Link Release";
$lang->action->label->unlinkedfromrelease = "Unlink Release";
$lang->action->label->linkrelatedbug      = "Link to Bug";
$lang->action->label->unlinkrelatedbug    = "Unlink";
$lang->action->label->linkrelatedcase     = "Link to Case";
$lang->action->label->unlinkrelatedcase   = "Unlink";
$lang->action->label->linkrelatedstory    = "Link to Story";
$lang->action->label->unlinkrelatedstory  = "Unlink";
$lang->action->label->subdividestory      = "Decompose Story";
$lang->action->label->unlinkchildstory    = "Unlink";
$lang->action->label->started             = 'started ';
$lang->action->label->restarted           = 'continued ';
$lang->action->label->recordestimate      = 'recorded ';
$lang->action->label->editestimate        = 'edited ';
$lang->action->label->canceled            = 'cancelled ';
$lang->action->label->finished            = 'finished ';
$lang->action->label->paused              = 'paused ';
$lang->action->label->verified            = 'verified ';
$lang->action->label->delayed             = 'delayed ';
$lang->action->label->suspended           = 'suspended ';
$lang->action->label->login               = 'Login';
$lang->action->label->logout              = "Logout";
$lang->action->label->deleteestimate      = "deleted ";
$lang->action->label->linked2build        = "linked ";
$lang->action->label->linked2bug          = "linked ";

$lang->action->label->product     = $lang->productCommon . '|product|view|productID=%s';
$lang->action->label->productplan = 'Plan|productplan|view|productID=%s';
$lang->action->label->release     = 'Release|release|view|productID=%s';
$lang->action->label->story       = 'Story|story|view|storyID=%s';
$lang->action->label->project     = "{$lang->projectCommon}|project|view|projectID=%s";
$lang->action->label->task        = 'Task|task|view|taskID=%s';
$lang->action->label->build       = 'Build|build|view|buildID=%s';
$lang->action->label->bug         = 'Bug|bug|view|bugID=%s';
$lang->action->label->case        = 'Case|testcase|view|caseID=%s';
$lang->action->label->testtask    = 'Test Task|testtask|view|caseID=%s';
$lang->action->label->testsuite   = 'Test Suite|testsuite|view|suiteID=%s';
$lang->action->label->caselib     = 'Case Library|testsuite|libview|libID=%s';
$lang->action->label->todo        = 'Todo|todo|view|todoID=%s';
$lang->action->label->doclib      = 'Doc Lib|doc|browse|libID=%s';
$lang->action->label->doc         = 'Doc|doc|view|docID=%s';
$lang->action->label->user        = 'User|user|view|account=%s';
$lang->action->label->testreport  = 'Report|testreport|view|report=%s';
$lang->action->label->entry       = 'Entry|entry|browse|';
$lang->action->label->webhook     = 'Webhook|webhook|browse|';
$lang->action->label->space       = ' ';

$lang->action->search->objectTypeList['']            = '';    
$lang->action->search->objectTypeList['product']     = $lang->productCommon;
$lang->action->search->objectTypeList['project']     = $lang->projectCommon;
$lang->action->search->objectTypeList['bug']         = 'Bug';
$lang->action->search->objectTypeList['case']        = 'Case'; 
$lang->action->search->objectTypeList['caseresult']  = 'Case Results';
$lang->action->search->objectTypeList['stepresult']  = 'Case Steps';
$lang->action->search->objectTypeList['story']       = 'Story';  
$lang->action->search->objectTypeList['task']        = 'Task'; 
$lang->action->search->objectTypeList['testtask']    = 'Test Task';     
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
$lang->action->search->label['blocked']             = $lang->action->label->blocked;
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
$lang->action->search->label['verified']            = $lang->action->label->verified;
$lang->action->search->label['login']               = $lang->action->label->login;
$lang->action->search->label['logout']              = $lang->action->label->logout;
/* admin */
$lang->admin->common        = 'Admin';
$lang->admin->index         = 'Admin Home';
$lang->admin->checkDB       = 'Check Database';
$lang->admin->sso           = 'Zdoo';
$lang->admin->safeIndex     = 'Security';
$lang->admin->checkWeak     = 'Weak Password Check';
$lang->admin->certifyMobile = 'Verify your cellphone';
$lang->admin->certifyEmail  = 'Verify your Email';
$lang->admin->ztCompany     = 'Verify your company';
$lang->admin->captcha       = 'Verification Code';
$lang->admin->getCaptcha    = 'Get Verification Code';

$lang->admin->api     = 'API';
$lang->admin->log     = 'Log';
$lang->admin->setting = 'Setting';
$lang->admin->days    = 'Valid Days';

$lang->admin->info = new stdclass();
$lang->admin->info->version = 'Current Version is %s. ';
$lang->admin->info->links   = 'You can visit links below';
$lang->admin->info->account = 'Your ZenTao account is %s.';
$lang->admin->info->log     = 'Logs that is beyond valid days will be deleted and it has to run cron.';

$lang->admin->notice = new stdclass();
$lang->admin->notice->register = "Note: You haven't registered in ZenTao(www.zentao.pm). %s then get the Latest ZenTao Upgrades and News.";
$lang->admin->notice->ignore   = "Ignore";
$lang->admin->notice->int      = "『%s』should be a positive integer.";

$lang->admin->register = new stdclass();
$lang->admin->register->common     = 'Binding New Account';
$lang->admin->register->caption    = 'Register in Zentao Community';
$lang->admin->register->click      = 'Please Register here';
$lang->admin->register->lblAccount = 'at least 3 characters pls; contains letters and numbers.';
$lang->admin->register->lblPasswd  = 'at least 6 characters pls; contains letters and numbers.';
$lang->admin->register->submit     = 'Register';
$lang->admin->register->bind       = "Binding Exsit Account";
$lang->admin->register->success    = "You have registered with us!";

$lang->admin->bind = new stdclass();
$lang->admin->bind->caption = 'Link Account';
$lang->admin->bind->success = "Account has been linked!";

$lang->admin->safe = new stdclass();
$lang->admin->safe->common     = 'Security Policy';
$lang->admin->safe->set        = 'PasswordStrength';
$lang->admin->safe->password   = 'Password Strength';
$lang->admin->safe->weak       = 'Weak Passwords';
$lang->admin->safe->reason     = 'Type';
$lang->admin->safe->checkWeak  = 'WeakPasswords';
$lang->admin->safe->changeWeak = 'Your password is weak. Change it.';
$lang->admin->safe->modifyPasswordFirstLogin = 'Change password after first login';

$lang->admin->safe->modeList[0] = 'N/A';
$lang->admin->safe->modeList[1] = 'Medium';
$lang->admin->safe->modeList[2] = 'Strong';

$lang->admin->safe->modeRuleList[1] = 'Contains upper and lower case, numbers. Length >= 6';
$lang->admin->safe->modeRuleList[2] = 'Contains upper and lower case, numbers and special characters.  Length >= 10.';

$lang->admin->safe->reasonList['weak']     = 'Common Weak Password';
$lang->admin->safe->reasonList['account']  = 'Same as your account';
$lang->admin->safe->reasonList['mobile']   = 'Same as your cellphone number';
$lang->admin->safe->reasonList['phone']    = 'Same as your phone number';
$lang->admin->safe->reasonList['birthday'] = 'Same as your DOB';

$lang->admin->safe->modifyPasswordList[1] = 'Yes';
$lang->admin->safe->modifyPasswordList[0] = 'No';

$lang->admin->safe->noticeMode   = 'Password will be checked when login, add/edit user.';
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
/* backup */
$lang->backup->common   = 'Backup';
$lang->backup->index    = 'Home';
$lang->backup->history  = 'History';
$lang->backup->delete   = 'Delete';
$lang->backup->backup   = 'Backup';
$lang->backup->restore  = 'Restore';
$lang->backup->change   = 'Modify expiration';
$lang->backup->changeAB = 'Modify';

$lang->backup->time  = 'Date';
$lang->backup->files = 'Files';
$lang->backup->size  = 'Size';

$lang->backup->waitting       = '<span id="backupType"></span> In Progress. Please wait...';
$lang->backup->confirmDelete  = 'Do you want to delete the backup？';
$lang->backup->confirmRestore = 'Do you want to restore the backup？';
$lang->backup->holdDays       = 'Reserve latest %s days of backups';
$lang->backup->restoreTip     = 'Only files and databases can be restored when you click Restore. Code can be restored manually.';

$lang->backup->success = new stdclass();
$lang->backup->success->backup  = 'Done!';
$lang->backup->success->restore = 'Restored!';

$lang->backup->error = new stdclass();
$lang->backup->error->noWritable  = "<code>%s</code> is not writable! Please check the privilege, or backup cannot be done.";
$lang->backup->error->noDelete    = "%s cannot be deleted. Please modify the privilege or manually delete it.";
$lang->backup->error->restoreSQL  = "Database library restoration failed. Error %s.";
$lang->backup->error->restoreFile = "File restoration failed. Error %s.";
$lang->backup->error->backupFile  = "File backup failed. Error %s.";
$lang->backup->error->backupCode  = "Code backup failed. Error %s.";
/* block */
$lang->block = new stdclass();
$lang->block->common = 'Block';
$lang->block->name   = 'Name';
$lang->block->style  = 'Style';
$lang->block->grid   = 'Grid';
$lang->block->color  = 'Color';
$lang->block->reset  = 'Restore the default';

$lang->block->account = 'Account';
$lang->block->module  = 'Module';
$lang->block->title   = 'Title';
$lang->block->source  = 'Source module';
$lang->block->block   = 'Source block';
$lang->block->order   = 'Order';
$lang->block->height  = 'Height';
$lang->block->role    = 'Role';

$lang->block->lblModule    = 'Module';
$lang->block->lblBlock     = 'Block';
$lang->block->lblNum       = 'Number';
$lang->block->lblHtml      = 'HTML';
$lang->block->dynamic      = 'Dynamic';
$lang->block->assignToMe   = 'Assign To Me';
$lang->block->lblFlowchart = 'Workflow';
$lang->block->welcome      = 'Welcome';

$lang->block->leftToday = 'Works for Today';
$lang->block->myTask    = 'My Task';
$lang->block->myStory   = 'My Story';
$lang->block->myBug     = 'My Bug';
$lang->block->myProject = 'My ' . $lang->projectCommon;
$lang->block->myProduct = 'My ' . $lang->productCommon;
$lang->block->delayed   = 'Delayed';
$lang->block->noData    = 'There is no data in this type of reports.';
$lang->block->emptyTip  = 'No Information';

$lang->block->params = new stdclass();
$lang->block->params->name  = 'Name';
$lang->block->params->value = 'Value';

$lang->block->createBlock        = 'Add Block';
$lang->block->editBlock          = 'Edit';
$lang->block->ordersSaved        = 'Order is saved.';
$lang->block->confirmRemoveBlock = 'Do you want to remove Block?';
$lang->block->noticeNewBlock     = 'ZenTao 10.+ has a new layout for each view. Do you want to start the new view?';
$lang->block->confirmReset       = 'Whether to restore the default';
$lang->block->closeForever       = 'Permanent Close';
$lang->block->confirmClose       = 'Do you want to permanently close this block? Once done, it is not available to anyone. It can be activiated at Admin->Custom.';
$lang->block->remove             = 'Remove';
$lang->block->refresh            = 'Refresh';
$lang->block->hidden             = 'Hide';
$lang->block->dynamicInfo        = "<span class='timeline-tag'>%s</span> <span class='timeline-text'>%s <em>%s</em> %s <a href='%s'>%s</a></span>";

$lang->block->default['product']['1']['title'] = $lang->productCommon . ' Report';
$lang->block->default['product']['1']['block'] = 'statistic';
$lang->block->default['product']['1']['grid']  = 8;

$lang->block->default['product']['1']['params']['orderBy'] = 'id_desc';
$lang->block->default['product']['1']['params']['type']    = 'all';
$lang->block->default['product']['1']['params']['num']     = 5;

$lang->block->default['product']['2']['title'] = $lang->productCommon . ' Overview';
$lang->block->default['product']['2']['block'] = 'overview';
$lang->block->default['product']['2']['grid']  = 4;

$lang->block->default['product']['3']['title'] = 'Open ' . $lang->productCommon . 's';
$lang->block->default['product']['3']['block'] = 'list';
$lang->block->default['product']['3']['grid']  = 8;

$lang->block->default['product']['3']['params']['num']  = 15;
$lang->block->default['product']['3']['params']['type'] = 'noclosed';

$lang->block->default['product']['4']['title'] = 'My Story';
$lang->block->default['product']['4']['block'] = 'story';
$lang->block->default['product']['4']['grid']  = 4;

$lang->block->default['product']['4']['params']['num']     = 15;
$lang->block->default['product']['4']['params']['orderBy'] = 'id_desc';
$lang->block->default['product']['4']['params']['type']    = 'assignedTo';

$lang->block->default['project']['1']['title'] = $lang->projectCommon . ' Report';
$lang->block->default['project']['1']['block'] = 'statistic';
$lang->block->default['project']['1']['grid']  = 8;

$lang->block->default['project']['1']['params']['orderBy'] = 'id_desc';
$lang->block->default['project']['1']['params']['type']    = 'all';
$lang->block->default['project']['1']['params']['num']     = 5;

$lang->block->default['project']['2']['title'] = $lang->projectCommon . ' Overview';
$lang->block->default['project']['2']['block'] = 'overview';
$lang->block->default['project']['2']['grid']  = 4;

$lang->block->default['project']['3']['title'] = 'Active ' . $lang->projectCommon . 's';
$lang->block->default['project']['3']['block'] = 'list';
$lang->block->default['project']['3']['grid']  = 8;

$lang->block->default['project']['3']['params']['num']     = 15;
$lang->block->default['project']['3']['params']['orderBy'] = 'id_desc';
$lang->block->default['project']['3']['params']['type']    = 'undone';

$lang->block->default['project']['4']['title'] = 'My Tasks';
$lang->block->default['project']['4']['block'] = 'task';
$lang->block->default['project']['4']['grid']  = 4;

$lang->block->default['project']['4']['params']['num']     = 15;
$lang->block->default['project']['4']['params']['orderBy'] = 'id_desc';
$lang->block->default['project']['4']['params']['type']    = 'assignedTo';

$lang->block->default['qa']['1']['title'] = 'Test Report';
$lang->block->default['qa']['1']['block'] = 'statistic';
$lang->block->default['qa']['1']['grid']  = 8;

$lang->block->default['qa']['1']['params']['orderBy'] = 'id_desc';
$lang->block->default['qa']['1']['params']['type']    = 'noclosed';

//$lang->block->default['qa']['2']['title'] = 'Testcase Overview';
//$lang->block->default['qa']['2']['block'] = 'overview';
//$lang->block->default['qa']['2']['grid']  = 4;

$lang->block->default['qa']['2']['title'] = 'My Bug';
$lang->block->default['qa']['2']['block'] = 'bug';
$lang->block->default['qa']['2']['grid']  = 4;

$lang->block->default['qa']['2']['params']['num']     = 15;
$lang->block->default['qa']['2']['params']['orderBy'] = 'id_desc';
$lang->block->default['qa']['2']['params']['type']    = 'assignedTo';

$lang->block->default['qa']['3']['title'] = 'My Case';
$lang->block->default['qa']['3']['block'] = 'case';
$lang->block->default['qa']['3']['grid']  = 4;

$lang->block->default['qa']['3']['params']['num']     = 15;
$lang->block->default['qa']['3']['params']['orderBy'] = 'id_desc';
$lang->block->default['qa']['3']['params']['type']    = 'assigntome';

$lang->block->default['qa']['4']['title'] = 'Pending Builds';
$lang->block->default['qa']['4']['block'] = 'testtask';
$lang->block->default['qa']['4']['grid']  = 4;

$lang->block->default['qa']['4']['params']['num']     = 15;
$lang->block->default['qa']['4']['params']['orderBy'] = 'id_desc';
$lang->block->default['qa']['4']['params']['type']    = 'wait';

$lang->block->default['full']['my']['1']['title']  = 'Welcome';
$lang->block->default['full']['my']['1']['block']  = 'welcome';
$lang->block->default['full']['my']['1']['grid']   = 8;
$lang->block->default['full']['my']['1']['source'] = '';
$lang->block->default['full']['my']['2']['title']  = 'Dynamic';
$lang->block->default['full']['my']['2']['block']  = 'dynamic';
$lang->block->default['full']['my']['2']['grid']   = 4;
$lang->block->default['full']['my']['2']['source'] = '';
$lang->block->default['full']['my']['3']['title']  = 'Flowchart';
$lang->block->default['full']['my']['3']['block']  = 'flowchart';
$lang->block->default['full']['my']['3']['grid']   = 8;
$lang->block->default['full']['my']['3']['source'] = '';
$lang->block->default['full']['my']['4']['title']  = 'My Todo';
$lang->block->default['full']['my']['4']['block']  = 'list';
$lang->block->default['full']['my']['4']['grid']   = 4;
$lang->block->default['full']['my']['4']['source'] = 'todo';
$lang->block->default['full']['my']['4']['params']['num'] = '20';
$lang->block->default['full']['my']['5'] = $lang->block->default['project']['1'];
$lang->block->default['full']['my']['5']['source'] = 'project';
$lang->block->default['full']['my']['6'] = $lang->block->default['project']['2'];
$lang->block->default['full']['my']['6']['source'] = 'project';
$lang->block->default['full']['my']['7'] = $lang->block->default['product']['1'];
$lang->block->default['full']['my']['7']['source'] = 'product';
$lang->block->default['full']['my']['8'] = $lang->block->default['product']['2'];
$lang->block->default['full']['my']['8']['source'] = 'product';
$lang->block->default['full']['my']['9'] = $lang->block->default['qa']['2'];
$lang->block->default['full']['my']['9']['source'] = 'qa';

$lang->block->default['onlyTest']['my']['1'] = $lang->block->default['qa']['1'];
$lang->block->default['onlyTest']['my']['1']['source'] = 'qa';
$lang->block->default['onlyTest']['my']['1']['grid']   = '8';
$lang->block->default['onlyTest']['my']['2']['title']  = 'Dynamic';
$lang->block->default['onlyTest']['my']['2']['block']  = 'dynamic';
$lang->block->default['onlyTest']['my']['2']['grid']   = 4;
$lang->block->default['onlyTest']['my']['2']['source'] = '';
$lang->block->default['onlyTest']['my']['3']['title']  = 'My Todo';
$lang->block->default['onlyTest']['my']['3']['block']  = 'list';
$lang->block->default['onlyTest']['my']['3']['grid']   = 6;
$lang->block->default['onlyTest']['my']['3']['source'] = 'todo';
$lang->block->default['onlyTest']['my']['3']['params']['num'] = '20';
$lang->block->default['onlyTest']['my']['4'] = $lang->block->default['qa']['2'];
$lang->block->default['onlyTest']['my']['4']['source'] = 'qa';
$lang->block->default['onlyTest']['my']['4']['grid']   = 6;

$lang->block->default['onlyStory']['my']['1'] = $lang->block->default['project']['1'];
$lang->block->default['onlyStory']['my']['1']['source'] = 'project';
$lang->block->default['onlyStory']['my']['1']['grid']   = 8;
$lang->block->default['onlyStory']['my']['2']['title']  = 'Dynamic';
$lang->block->default['onlyStory']['my']['2']['block']  = 'dynamic';
$lang->block->default['onlyStory']['my']['2']['grid']   = 4;
$lang->block->default['onlyStory']['my']['2']['source'] = '';
$lang->block->default['onlyStory']['my']['3']['title']  = 'My Todo';
$lang->block->default['onlyStory']['my']['3']['block']  = 'list';
$lang->block->default['onlyStory']['my']['3']['grid']   = 6;
$lang->block->default['onlyStory']['my']['3']['source'] = 'todo';
$lang->block->default['onlyStory']['my']['3']['params']['num'] = '20';
$lang->block->default['onlyStory']['my']['4'] = $lang->block->default['product']['2'];
$lang->block->default['onlyStory']['my']['4']['source'] = 'product';
$lang->block->default['onlyStory']['my']['4']['grid']   = 6;

$lang->block->default['onlyTask']['my']['1'] = $lang->block->default['project']['1'];
$lang->block->default['onlyTask']['my']['1']['source'] = 'project';
$lang->block->default['onlyTask']['my']['1']['grid']   = 8;
$lang->block->default['onlyTask']['my']['2']['title']  = 'Dynamic';
$lang->block->default['onlyTask']['my']['2']['block']  = 'dynamic';
$lang->block->default['onlyTask']['my']['2']['grid']   = 4;
$lang->block->default['onlyTask']['my']['2']['source'] = '';
$lang->block->default['onlyTask']['my']['3']['title']  = 'My Todo';
$lang->block->default['onlyTask']['my']['3']['block']  = 'list';
$lang->block->default['onlyTask']['my']['3']['grid']   = 6;
$lang->block->default['onlyTask']['my']['3']['source'] = 'todo';
$lang->block->default['onlyTask']['my']['3']['params']['num'] = '20';
$lang->block->default['onlyTask']['my']['4'] = $lang->block->default['project']['2'];
$lang->block->default['onlyTask']['my']['4']['source'] = 'project';
$lang->block->default['onlyTask']['my']['4']['grid']   = 6;

$lang->block->num     = 'Number';
$lang->block->type    = 'Type';
$lang->block->orderBy = 'Order by';

$lang->block->availableBlocks = new stdclass();

$lang->block->availableBlocks->todo     = 'My Todo';
$lang->block->availableBlocks->task     = 'My Task';
$lang->block->availableBlocks->bug      = 'My Bug';
$lang->block->availableBlocks->case     = 'My Case';
$lang->block->availableBlocks->story    = 'My Story';
$lang->block->availableBlocks->product  = $lang->productCommon . 'List';
$lang->block->availableBlocks->project  = $lang->projectCommon . 'List';
$lang->block->availableBlocks->plan     = 'Plan';
$lang->block->availableBlocks->release  = 'Release';
$lang->block->availableBlocks->build    = 'Build';
$lang->block->availableBlocks->testtask = 'Test Build';

$lang->block->moduleList['product'] = $lang->productCommon;
$lang->block->moduleList['project'] = $lang->projectCommon;
$lang->block->moduleList['qa']      = 'QA';
$lang->block->moduleList['todo']    = 'Todo';

$lang->block->modules['product'] = new stdclass();
$lang->block->modules['product']->availableBlocks = new stdclass();
$lang->block->modules['product']->availableBlocks->statistic = $lang->productCommon . ' Report';
$lang->block->modules['product']->availableBlocks->overview  = $lang->productCommon . ' Overview';
$lang->block->modules['product']->availableBlocks->list      = $lang->productCommon . ' List';
$lang->block->modules['product']->availableBlocks->story     = 'Story';
$lang->block->modules['product']->availableBlocks->plan      = 'Plan';
$lang->block->modules['product']->availableBlocks->release   = 'Release';
$lang->block->modules['project'] = new stdclass();
$lang->block->modules['project']->availableBlocks = new stdclass();
$lang->block->modules['project']->availableBlocks->statistic = $lang->projectCommon . ' Report';
$lang->block->modules['project']->availableBlocks->overview  = $lang->projectCommon . ' Overview';
$lang->block->modules['project']->availableBlocks->list  = $lang->projectCommon . ' List';
$lang->block->modules['project']->availableBlocks->task  = 'Task';
$lang->block->modules['project']->availableBlocks->build = 'Build';
$lang->block->modules['qa'] = new stdclass();
$lang->block->modules['qa']->availableBlocks = new stdclass();
$lang->block->modules['qa']->availableBlocks->statistic = 'Test Report';
//$lang->block->modules['qa']->availableBlocks->overview  = 'Testcase Overview';
$lang->block->modules['qa']->availableBlocks->bug      = 'Bug';
$lang->block->modules['qa']->availableBlocks->case     = 'Case';
$lang->block->modules['qa']->availableBlocks->testtask = 'Test Build';
$lang->block->modules['todo'] = new stdclass();
$lang->block->modules['todo']->availableBlocks = new stdclass();
$lang->block->modules['todo']->availableBlocks->list = 'Todo';

$lang->block->orderByList = new stdclass();

$lang->block->orderByList->product = array();
$lang->block->orderByList->product['id_asc']      = 'ID Ascending';
$lang->block->orderByList->product['id_desc']     = 'ID Descending';
$lang->block->orderByList->product['status_asc']  = 'Status Ascending';
$lang->block->orderByList->product['status_desc'] = 'Status Descending';

$lang->block->orderByList->project = array();
$lang->block->orderByList->project['id_asc']      = 'ID Ascending';
$lang->block->orderByList->project['id_desc']     = 'ID Descending';
$lang->block->orderByList->project['status_asc']  = 'Status Ascending';
$lang->block->orderByList->project['status_desc'] = 'Status Descending';

$lang->block->orderByList->task = array();
$lang->block->orderByList->task['id_asc']        = 'ID Ascending';
$lang->block->orderByList->task['id_desc']       = 'ID Descending';
$lang->block->orderByList->task['pri_asc']       = 'Priority Ascending';
$lang->block->orderByList->task['pri_desc']      = 'Priority Descending';
$lang->block->orderByList->task['estimate_asc']  = 'Estimate Ascending';
$lang->block->orderByList->task['estimate_desc'] = 'Estimate Descending';
$lang->block->orderByList->task['status_asc']    = 'Status Ascending';
$lang->block->orderByList->task['status_desc']   = 'Status Descending';
$lang->block->orderByList->task['deadline_asc']  = 'Deadline Ascending';
$lang->block->orderByList->task['deadline_desc'] = 'Deadline Descending';

$lang->block->orderByList->bug = array();
$lang->block->orderByList->bug['id_asc']        = 'ID Ascending';
$lang->block->orderByList->bug['id_desc']       = 'ID Descending';
$lang->block->orderByList->bug['pri_asc']       = 'Priority Ascending';
$lang->block->orderByList->bug['pri_desc']      = 'Priority Descending';
$lang->block->orderByList->bug['severity_asc']  = 'Severity Ascending';
$lang->block->orderByList->bug['severity_desc'] = 'Severity Descending';

$lang->block->orderByList->case = array();
$lang->block->orderByList->case['id_asc']   = 'ID Ascending';
$lang->block->orderByList->case['id_desc']  = 'ID Descending';
$lang->block->orderByList->case['pri_asc']  = 'Priority Ascending';
$lang->block->orderByList->case['pri_desc'] = 'Priority Descending';

$lang->block->orderByList->story = array();
$lang->block->orderByList->story['id_asc']      = 'ID Ascending';
$lang->block->orderByList->story['id_desc']     = 'ID Descending';
$lang->block->orderByList->story['pri_asc']     = 'Priority Ascending';
$lang->block->orderByList->story['pri_desc']    = 'Priority Descending';
$lang->block->orderByList->story['status_asc']  = 'Status Ascending';
$lang->block->orderByList->story['status_desc'] = 'Status Descending';
$lang->block->orderByList->story['stage_asc']   = 'Phase Ascending';
$lang->block->orderByList->story['stage_desc']  = 'Phase Descending';

$lang->block->todoNum = 'Todo';
$lang->block->taskNum = 'Task';
$lang->block->bugNum  = 'Bug';

$lang->block->typeList = new stdclass();

$lang->block->typeList->task['assignedTo'] = 'Assigned to Me';
$lang->block->typeList->task['openedBy']   = 'Created by Me';
$lang->block->typeList->task['finishedBy'] = 'Finished by Me';
$lang->block->typeList->task['closedBy']   = 'Closed by Me';
$lang->block->typeList->task['canceledBy'] = 'Cancelled by Me';

$lang->block->typeList->bug['assignedTo'] = 'Assigned to Me';
$lang->block->typeList->bug['openedBy']   = 'Created by Me';
$lang->block->typeList->bug['resolvedBy'] = 'Resolved by Me';
$lang->block->typeList->bug['closedBy']   = 'Closed by Me';

$lang->block->typeList->case['assigntome'] = 'Assigned to Me';
$lang->block->typeList->case['openedbyme'] = 'Created by Me';

$lang->block->typeList->story['assignedTo'] = 'Assigned to Me';
$lang->block->typeList->story['openedBy']   = 'Created by Me';
$lang->block->typeList->story['reviewedBy'] = 'Reviewed by Me';
$lang->block->typeList->story['closedBy']   = 'Closed by Me' ;
 
$lang->block->typeList->product['noclosed'] = 'Open';
$lang->block->typeList->product['closed']   = 'Closed';
$lang->block->typeList->product['all']      = 'All';
$lang->block->typeList->product['involved'] = 'Involved';

$lang->block->typeList->project['undone']   = 'Unfinished';
$lang->block->typeList->project['isdoing']  = 'Doing';
$lang->block->typeList->project['all']      = 'All';
$lang->block->typeList->project['involved'] = 'Involved';

$lang->block->typeList->testtask['wait']    = 'Wait';
$lang->block->typeList->testtask['doing']   = 'Doing';
$lang->block->typeList->testtask['blocked'] = 'Blocked';
$lang->block->typeList->testtask['done']    = 'Done';
$lang->block->typeList->testtask['all']     = 'All';

$lang->block->modules['product']->moreLinkList = new stdclass();
$lang->block->modules['product']->moreLinkList->list  = 'product|all|product=&line=0&status=%s';
$lang->block->modules['product']->moreLinkList->story = 'my|story|type=%s';
$lang->block->modules['project']->moreLinkList = new stdclass();
$lang->block->modules['project']->moreLinkList->list  = 'project|all|status=%s&project=';
$lang->block->modules['project']->moreLinkList->task  = 'my|task|type=%s';
$lang->block->modules['qa']->moreLinkList = new stdclass();
$lang->block->modules['qa']->moreLinkList->bug      = 'my|bug|type=%s';
$lang->block->modules['qa']->moreLinkList->case     = 'my|testcase|type=%s';
$lang->block->modules['qa']->moreLinkList->testtask = 'testtask|browse|type=%s';
$lang->block->modules['todo']->moreLinkList = new stdclass();
$lang->block->modules['todo']->moreLinkList->list = 'my|todo|type=all';
$lang->block->modules['common'] = new stdclass();
$lang->block->modules['common']->moreLinkList = new stdclass();
$lang->block->modules['common']->moreLinkList->dynamic = 'company|dynamic|';

$lang->block->welcomeList['06:00'] = 'Good morning, %s';
$lang->block->welcomeList['11:30'] = 'Good noon, %s';
$lang->block->welcomeList['13:30'] = 'Good afternoon, %s';
$lang->block->welcomeList['19:00'] = 'Good evening, %s';

$lang->block->gridOptions[8] = 'Left';
$lang->block->gridOptions[4] = 'Right';

$lang->block->flowchart   = array();
$lang->block->flowchart[] = array('Administlrator', 'Add Department', 'Add User', 'Maintain Privileges');
$lang->block->flowchart[] = array($lang->productCommon . ' Owner', 'Add ' . $lang->productCommon, 'Maintain Modules', 'Maintain Plans', 'Maintain Stories', 'Create Releases');
$lang->block->flowchart[] = array('Scrum Master', 'Add ' . $lang->projectCommon, 'Maintain Teams', 'Link ' . $lang->productCommon . 's', 'Link Stories', 'Decompose Tasks');
$lang->block->flowchart[] = array('Dev Team', 'Claim Tasks/Bugs', 'Update Status', 'Finish Tasks/Bugs');
$lang->block->flowchart[] = array('QA Team', 'Write Cases', 'Run Cases', 'Report Bugs', 'Verify Bugs', 'Close Bugs');
/* branch */
$lang->branch->common = 'Branch';
$lang->branch->manage = 'Manage Branch';
$lang->branch->sort   = 'Sort';
$lang->branch->delete = 'Delete Branch';
$lang->branch->add    = 'Add';

$lang->branch->manageTitle = '%s Management';
$lang->branch->all         = 'All';

$lang->branch->id      = 'ID';
$lang->branch->product = 'Product';
$lang->branch->name    = 'Name';
$lang->branch->order   = 'Order';

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
$lang->bug->project          = $lang->projectCommon;
$lang->bug->story            = 'Story';
$lang->bug->task             = 'Task';
$lang->bug->title            = 'Title';
$lang->bug->severity         = 'Severity(S)';
$lang->bug->severityAB       = 'S';
$lang->bug->pri              = 'Priority(P)';
$lang->bug->type             = 'Type';
$lang->bug->os               = 'OS';
$lang->bug->browser          = 'Browser';
$lang->bug->steps            = 'Repro Steps';
$lang->bug->status           = 'Status';
$lang->bug->statusAB         = 'Status';
$lang->bug->activatedCount   = 'Active';
$lang->bug->activatedCountAB = 'Active';
$lang->bug->activatedDate    = 'Active On';
$lang->bug->confirmed        = 'Confirmed';
$lang->bug->toTask           = 'Convert to Task';
$lang->bug->toStory          = 'Convert to Story';
$lang->bug->mailto           = 'Mail To';
$lang->bug->openedBy         = 'Creator';
$lang->bug->openedDate       = 'Created on';
$lang->bug->openedDateAB     = 'Created';
$lang->bug->openedBuild      = 'Open Build';
$lang->bug->assignedTo       = 'To';
$lang->bug->assignBug        = 'Assign To';
$lang->bug->assignedToAB     = 'To';
$lang->bug->assignedDate     = 'Assigned On';
$lang->bug->resolvedBy       = 'Resolved';
$lang->bug->resolvedByAB     = 'Resolved';
$lang->bug->resolution       = 'Solution';
$lang->bug->resolutionAB     = 'Solution';
$lang->bug->resolvedBuild    = 'Resolved Build';
$lang->bug->resolvedDate     = 'Resolved on';
$lang->bug->resolvedDateAB   = 'Resolved';
$lang->bug->deadline         = 'Deadline';
$lang->bug->plan             = 'Plan';
$lang->bug->closedBy         = 'Closed By';
$lang->bug->closedDate       = 'Closed On';
$lang->bug->duplicateBug     = 'Duplicate';
$lang->bug->lastEditedBy     = 'Edited By';
$lang->bug->linkBug          = 'Linked Bug';
$lang->bug->linkBugs         = 'Link Bug';
$lang->bug->unlinkBug        = 'Unlink';
$lang->bug->case             = 'Case';
$lang->bug->files            = 'File';
$lang->bug->keywords         = 'Tags';
$lang->bug->lastEditedByAB   = 'Edited By';
$lang->bug->lastEditedDateAB = 'Edit On';
$lang->bug->lastEditedDate   = 'Edit On';
$lang->bug->fromCase         = 'From Case';
$lang->bug->toCase           = 'To Case';
$lang->bug->colorTag         = 'Color Tag';

$lang->bug->index              = 'Home';
$lang->bug->create             = 'Report Bug';
$lang->bug->batchCreate        = 'Batch Report Bug';
$lang->bug->confirmBug         = 'Confirm';
$lang->bug->batchConfirm       = 'Batch Confirm';
$lang->bug->edit               = 'Edit';
$lang->bug->batchEdit          = 'Batch Edit';
$lang->bug->batchChangeModule  = 'Batch Modify Module';
$lang->bug->batchChangeBranch  = 'Batch Modify Branch';
$lang->bug->batchClose         = 'Batch Close';
$lang->bug->assignTo           = 'Assign';
$lang->bug->batchAssignTo      = 'Batch Assign';
$lang->bug->browse             = 'Bugs';
$lang->bug->view               = 'Bug Details';
$lang->bug->resolve            = 'Resolve';
$lang->bug->batchResolve       = 'Batch Resolve';
$lang->bug->close              = 'Close';
$lang->bug->activate           = 'Activate';
$lang->bug->batchActivate      = 'Batch Activate';
$lang->bug->reportChart        = 'Report';
$lang->bug->export             = 'Export';
$lang->bug->delete             = 'Delete';
$lang->bug->deleted            = 'Deleted';
$lang->bug->saveTemplate       = 'Save as Template';
$lang->bug->setPublic          = 'Set as Public Template';
$lang->bug->deleteTemplate     = 'Delete Template';
$lang->bug->confirmStoryChange = 'Confirm Story Change';
$lang->bug->copy               = 'Copy';
$lang->bug->search             = 'Search';

$lang->bug->assignToMe         = 'Assigned To Me';
$lang->bug->openedByMe         = 'Created By Me';
$lang->bug->resolvedByMe       = 'Resolved By Me';
$lang->bug->closedByMe         = 'Closed By Me';
$lang->bug->assignToNull       = 'Unassigned';
$lang->bug->unResolved         = 'Unresolved';
$lang->bug->toClosed           = 'Unclosed';
$lang->bug->unclosed           = 'Active';
$lang->bug->unconfirmed        = 'UnConfirmed';
$lang->bug->longLifeBugs       = 'Pending';
$lang->bug->postponedBugs      = 'Postponed';
$lang->bug->overdueBugs        = 'Overdue';
$lang->bug->allBugs            = 'All';
$lang->bug->byQuery            = 'Search';
$lang->bug->needConfirm        = 'StoryChanged';
$lang->bug->allProduct         = 'All' . $lang->productCommon;
$lang->bug->my                 = 'My';
$lang->bug->yesterdayResolved  = 'Resolved Yesterday ';
$lang->bug->yesterdayConfirmed = 'Confirmed Yesterday ';
$lang->bug->yesterdayClosed    = 'Closed Yesterday ';

$lang->bug->assignToMeAB   = 'Assigned To Me';
$lang->bug->openedByMeAB   = 'Created By Me';
$lang->bug->resolvedByMeAB = 'Resolved By Me';

$lang->bug->ditto       = 'Ditto';
$lang->bug->dittoNotice = 'This bug is not linked to the same product as the last one!';
$lang->bug->noAssigned  = 'Assign';
$lang->bug->noBug       = 'No bugs. ';
$lang->bug->noModule    = '<div>You have no modules</div><div>Manage now</div>';

$lang->bug->lblAssignedTo = 'Assignee';
$lang->bug->lblMailto     = 'Mail To';
$lang->bug->lblLastEdited = 'Last Edited';
$lang->bug->lblResolved   = 'Resolved By';
$lang->bug->allUsers      = 'Load All User';
$lang->bug->allBuilds     = 'All';
$lang->bug->createBuild   = 'New';

$lang->bug->legendBasicInfo             = 'Basic Info';
$lang->bug->legendAttatch               = 'Attachment';
$lang->bug->legendPrjStoryTask          = $lang->projectCommon . '/Story/Task';
$lang->bug->lblTypeAndSeverity          = 'Type/Severity';
$lang->bug->lblSystemBrowserAndHardware = 'System/Browser';
$lang->bug->legendSteps                 = 'Repro Steps';
$lang->bug->legendComment               = 'Note';
$lang->bug->legendLife                  = 'About the Bug';
$lang->bug->legendMisc                  = 'Misc';
$lang->bug->legendRelated               = 'Related Info';

$lang->bug->buttonConfirm = 'Confirm';

$lang->bug->summary               = "Bugs on this page : <strong>%s</strong> Total, <strong>%s</strong> Unresolved.";
$lang->bug->confirmChangeProduct  = "Change {$lang->productCommon} will cause linked {$lang->projectCommon},Story and Task change. Do you want to do this?";
$lang->bug->confirmDelete         = 'Do you want to delete this bug?';
$lang->bug->setTemplateTitle      = 'Please enter the title of template.';
$lang->bug->remindTask            = 'This Bug has been converted to Task. Do you want to update Status of Task(ID %s)?';
$lang->bug->skipClose             = 'Bug %s is not resolved. You cannot close it.';
$lang->bug->applyTemplate         = 'Template';
$lang->bug->confirmDeleteTemplate = 'Do you want to delete this template?';
$lang->bug->hasSubmittedTest      = 'Developer has submitted test task,';
$lang->bug->nowToTest             = 'Now to test';

$lang->bug->tplStep   = "<p>[Steps]</p><br/>";
$lang->bug->tplResult = "<p>[Results]</p><br/>";
$lang->bug->tplExpect = "<p>[Expectations]</p><br/>";

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
$lang->bug->osList['all']     = 'All';
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
$lang->bug->osList['others']  = 'Other';

$lang->bug->browserList['']         = '';
$lang->bug->browserList['all']      = 'All';
$lang->bug->browserList['ie']       = 'IE series';
$lang->bug->browserList['ie11']     = 'IE11';
$lang->bug->browserList['ie10']     = 'IE10';
$lang->bug->browserList['ie9']      = 'IE9';
$lang->bug->browserList['ie8']      = 'IE8';
$lang->bug->browserList['ie7']      = 'IE7';
$lang->bug->browserList['ie6']      = 'IE6';
$lang->bug->browserList['chrome']   = 'chrome';
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
$lang->bug->browserList['other']    = 'Other';

$lang->bug->typeList['']             = '';
$lang->bug->typeList['codeerror']    = 'Code Error';
$lang->bug->typeList['interface']    = 'UI Optimization';
$lang->bug->typeList['config']       = 'Configuration';
$lang->bug->typeList['install']      = 'Install/Deploy';
$lang->bug->typeList['security']     = 'Security';
$lang->bug->typeList['performance']  = 'Performance';
$lang->bug->typeList['standard']     = 'Standard';
$lang->bug->typeList['automation']   = 'Testing Script';
$lang->bug->typeList['others']       = 'Other';
$lang->bug->typeList['designchange'] = 'Design Change';
$lang->bug->typeList['newfeature']   = 'New Feature';
$lang->bug->typeList['designdefect'] = 'Design Defect';
$lang->bug->typeList['trackthings']  = 'Track Work';

$lang->bug->statusList['']         = '';
$lang->bug->statusList['active']   = 'Active';
$lang->bug->statusList['resolved'] = 'Resolved';
$lang->bug->statusList['closed']   = 'Closed';

$lang->bug->confirmedList[1] = 'Confirmed';
$lang->bug->confirmedList[0] = 'Unconfirmed';

$lang->bug->resolutionList['']           = '';
$lang->bug->resolutionList['bydesign']   = 'As Design';
$lang->bug->resolutionList['duplicate']  = 'Duplicated Bug';
$lang->bug->resolutionList['external']   = 'External Cause';
$lang->bug->resolutionList['fixed']      = 'Resolved';
$lang->bug->resolutionList['notrepro']   = 'Irreproducible';
$lang->bug->resolutionList['postponed']  = 'Postpone';
$lang->bug->resolutionList['willnotfix'] = "Ignore";
$lang->bug->resolutionList['tostory']    = 'Convert to Story';

$lang->bug->report = new stdclass();
$lang->bug->report->common = 'Report';
$lang->bug->report->select = 'Select Type ';
$lang->bug->report->create = 'Generate Report';

$lang->bug->report->charts['bugsPerProject']        = $lang->projectCommon . ' Bugs';
$lang->bug->report->charts['bugsPerBuild']          = 'Bugs Per Build';
$lang->bug->report->charts['bugsPerModule']         = 'Bugs Per Module';
$lang->bug->report->charts['openedBugsPerDay']      = 'Reported Bugs Per Day';
$lang->bug->report->charts['resolvedBugsPerDay']    = 'Resolved Bugs Per Day';
$lang->bug->report->charts['closedBugsPerDay']      = 'Closed Bugs Per Day';
$lang->bug->report->charts['openedBugsPerUser']     = 'Reported Bugs Per User';
$lang->bug->report->charts['resolvedBugsPerUser']   = 'Resolved Bugs Per User';
$lang->bug->report->charts['closedBugsPerUser']     = 'Closed Bugs Per User';
$lang->bug->report->charts['bugsPerSeverity']       = 'Bug Priority Report';
$lang->bug->report->charts['bugsPerResolution']     = 'Bug Solution Report';
$lang->bug->report->charts['bugsPerStatus']         = 'Bug Status Report';
$lang->bug->report->charts['bugsPerActivatedCount'] = 'Bug Activation Report';
$lang->bug->report->charts['bugsPerPri']            = 'Bug Priority Report';
$lang->bug->report->charts['bugsPerType']           = 'Bug Type Report';
$lang->bug->report->charts['bugsPerAssignedTo']     = 'Bug Assignment Report';
//$lang->bug->report->charts['bugLiveDays']        = 'Bug Handling Time Report';
//$lang->bug->report->charts['bugHistories']       = 'Bug Handling Steps Report';

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
$lang->bug->report->bugsPerPri            = new stdclass();
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
$lang->bug->report->bugsPerPri->graph            = new stdclass();
$lang->bug->report->bugsPerAssignedTo->graph     = new stdclass();
$lang->bug->report->bugLiveDays->graph           = new stdclass();
$lang->bug->report->bugHistories->graph          = new stdclass();

$lang->bug->report->bugsPerProject->graph->xAxisName     = $lang->projectCommon;
$lang->bug->report->bugsPerBuild->graph->xAxisName       = 'Build';
$lang->bug->report->bugsPerModule->graph->xAxisName      = 'Module';

$lang->bug->report->openedBugsPerDay->type               = 'bar';
$lang->bug->report->openedBugsPerDay->graph->xAxisName   = 'Date';

$lang->bug->report->resolvedBugsPerDay->type             = 'bar';
$lang->bug->report->resolvedBugsPerDay->graph->xAxisName = 'Date';

$lang->bug->report->closedBugsPerDay->type               = 'bar';
$lang->bug->report->closedBugsPerDay->graph->xAxisName   = 'Date';

$lang->bug->report->openedBugsPerUser->graph->xAxisName   = 'User';
$lang->bug->report->resolvedBugsPerUser->graph->xAxisName = 'User';
$lang->bug->report->closedBugsPerUser->graph->xAxisName   = 'User';

$lang->bug->report->bugsPerSeverity->graph->xAxisName       = 'Priority';
$lang->bug->report->bugsPerResolution->graph->xAxisName     = 'Solution';
$lang->bug->report->bugsPerStatus->graph->xAxisName         = 'Status';
$lang->bug->report->bugsPerActivatedCount->graph->xAxisName = 'Activation Count';
$lang->bug->report->bugsPerPri->graph->xAxisName            = 'Priority';
$lang->bug->report->bugsPerType->graph->xAxisName           = 'Type';
$lang->bug->report->bugsPerAssignedTo->graph->xAxisName     = 'Assigned To';
$lang->bug->report->bugLiveDays->graph->xAxisName           = 'Handling Time';
$lang->bug->report->bugHistories->graph->xAxisName          = 'Handling Steps';

$lang->bug->action = new stdclass();
$lang->bug->action->resolved            = array('main' => '$date, resolved by <strong>$actor</strong> and the solution is <strong>$extra</strong> $appendLink.', 'extra' => 'resolutionList');
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
$lang->bug->placeholder->chooseBuilds = 'Choose Build...';
$lang->bug->placeholder->newBuildName = 'The name of new build';

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
$lang->build->edit             = "Edit";
$lang->build->linkStory        = "Link Story";
$lang->build->linkBug          = "Link Bug";
$lang->build->delete           = "Delete Build";
$lang->build->deleted          = "Deleted";
$lang->build->view             = "Build Details";
$lang->build->batchUnlink      = 'Batch Unlink';
$lang->build->batchUnlinkStory = 'Batch Story Unlink';
$lang->build->batchUnlinkBug   = 'Batch Bug Unlink';

$lang->build->confirmDelete      = "Do you want to delete this Build?";
$lang->build->confirmUnlinkStory = "Do you want to unlink this Story?";
$lang->build->confirmUnlinkBug   = "Do you want to unlink this Bug?";

$lang->build->basicInfo = 'Basic Info';

$lang->build->id            = 'ID';
$lang->build->product       = $lang->productCommon;
$lang->build->branch        = 'Platform/Branch';
$lang->build->project       = $lang->projectCommon;
$lang->build->name          = 'Name';
$lang->build->date          = 'Date';
$lang->build->builder       = 'Builder';
$lang->build->scmPath       = 'SCM Path';
$lang->build->filePath      = 'File Path';
$lang->build->desc          = 'Description';
$lang->build->files         = 'Upload Files';
$lang->build->last          = 'Last Build';
$lang->build->packageType   = 'Package Type';
$lang->build->unlinkStory   = 'Unlink Story';
$lang->build->unlinkBug     = 'Unlink Bug';
$lang->build->stories       = 'Finished Story';
$lang->build->bugs          = 'Resolved Bug';
$lang->build->generatedBugs = 'Left Bug';
$lang->build->noProduct     = " <span style='color:red'>This {$lang->projectCommon} has not linked to {$lang->productCommon}, so Build cannot be created. Please first <a href='%s'> link {$lang->productCommon}</a></span>";
$lang->build->noBuild       = 'No builds. ';

$lang->build->finishStories = '  %s Stories have been finished.';
$lang->build->resolvedBugs  = '  %s Bugs have been resolved.';
$lang->build->createdBugs   = '  %s Bugs have been created.';

$lang->build->placeholder = new stdclass();
$lang->build->placeholder->scmPath  = ' Source code repository, e.g. Subversion/Git Library path';
$lang->build->placeholder->filePath = ' Path of this Build package for downloading.';

$lang->build->action = new stdclass();
$lang->build->action->buildopened = '$date, created by <strong>$actor</strong>, Build <strong>$extra</strong>.' . "\n";
$lang->backhome = 'back';
/* company */
$lang->company->common   = 'Company';
$lang->company->index    = "Home";
$lang->company->edit     = "Edit Company";
$lang->company->view     = "Company Information";
$lang->company->browse   = "User List";
$lang->company->dynamic  = "Dynamic";
$lang->company->orgView  = 'View';

$lang->company->name     = 'Name';
$lang->company->phone    = 'Phone';
$lang->company->fax      = 'Fax';
$lang->company->address  = 'Mailing Address';
$lang->company->zipcode  = 'Zip Code';
$lang->company->website  = 'Website';
$lang->company->backyard = 'Intranet';
$lang->company->guest    = 'Guest Login';
$lang->company->admins   = 'Administrators';

$lang->company->product = $lang->productCommon;
$lang->company->project = $lang->projectCommon;
$lang->company->user    = 'User';

$lang->company->guestOptions[0] = 'Deny';
$lang->company->guestOptions[1] = 'Allow';
/* convert */
$lang->convert->common  = 'Imported';
$lang->convert->index   = 'Home';

$lang->convert->start   = 'Start';
$lang->convert->desc    = <<<EOT
<p>Welcome to the System Conversion Wizard, this program will assist you to convert data to ZenTao PMS.</p>
<strong>There is certain risk of conversion, so it is strongly recommended that you back up your databse and relavant files before conversion, and make sure no one is operating on either systems.</strong>
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

$lang->convert->direction             = "{$lang->projectCommon} converted to";
$lang->convert->questionTypeOfRedmine = 'Type in Redmine';
$lang->convert->aimTypeOfZentao       = 'Convert to Type in Zentao';

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
$lang->convert->dbUser      = 'Databse User Name';
$lang->convert->dbPassword  = 'Database Password';
$lang->convert->dbName      = 'Databse used in %s';
$lang->convert->dbCharset   = '%s Database Code';
$lang->convert->dbPrefix    = '%s Table Prefix';
$lang->convert->installPath = '%s Installed path';

$lang->convert->checkDB    = 'Database';
$lang->convert->checkTable = 'Table';
$lang->convert->checkPath  = 'Installed Path';

$lang->convert->execute    = 'Convert';
$lang->convert->item       = 'Item Converted';
$lang->convert->count      = 'Count';
$lang->convert->info       = 'Info';

$lang->convert->bugfree = new stdclass();
$lang->convert->bugfree->users    = 'User';
$lang->convert->bugfree->projects = $lang->projectCommon;
$lang->convert->bugfree->modules  = 'Module';
$lang->convert->bugfree->bugs     = 'Bug';
$lang->convert->bugfree->cases    = 'Test Case';
$lang->convert->bugfree->results  = 'Result';
$lang->convert->bugfree->actions  = 'History';
$lang->convert->bugfree->files    = 'File';

$lang->convert->redmine = new stdclass();
$lang->convert->redmine->users        = 'User';
$lang->convert->redmine->groups       = 'Group';
$lang->convert->redmine->products     = $lang->productCommon;
$lang->convert->redmine->projects     = $lang->projectCommon;
$lang->convert->redmine->stories      = 'Story';
$lang->convert->redmine->tasks        = 'Task';
$lang->convert->redmine->bugs         = 'Bug';
$lang->convert->redmine->productPlans = $lang->productCommon . 'Plan';
$lang->convert->redmine->teams        = 'Team';
$lang->convert->redmine->releases     = 'Release';
$lang->convert->redmine->builds       = 'Build';
$lang->convert->redmine->docLibs      = 'Doc Lib';
$lang->convert->redmine->docs         = 'Doc';
$lang->convert->redmine->files        = 'File';

$lang->convert->errorFileNotExits  = 'File %s is not found.';
$lang->convert->errorUserExists    = 'User %s existed.';
$lang->convert->errorGroupExists   = 'Group %s existed.';
$lang->convert->errorBuildExists   = 'Build %s existed.';
$lang->convert->errorReleaseExists = 'Release %s existed.';
$lang->convert->errorCopyFailed    = 'File %s copy failed.';

$lang->convert->setParam = 'Please set parameters.';

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
$lang->cron->common      = 'Scheduled Task';
$lang->cron->index       = 'Home';
$lang->cron->list        = 'Tasks';
$lang->cron->create      = 'Add';
$lang->cron->edit        = 'Edit';
$lang->cron->delete      = 'Delete';
$lang->cron->toggle      = 'Activate/Deactivate';
$lang->cron->turnon      = 'On/Off';
$lang->cron->openProcess = 'Restart';

$lang->cron->m        = 'Min';
$lang->cron->h        = 'Hour';
$lang->cron->dom      = 'Day';
$lang->cron->mon      = 'Month';
$lang->cron->dow      = 'Week';
$lang->cron->command  = 'Command';
$lang->cron->status   = 'Status';
$lang->cron->type     = 'Type';
$lang->cron->remark   = 'Remark';
$lang->cron->lastTime = 'Last Executed';

$lang->cron->turnonList['1'] = 'On';
$lang->cron->turnonList['0'] = 'Shutdown';

$lang->cron->statusList['normal']  = 'Normal';
$lang->cron->statusList['running'] = 'Running';
$lang->cron->statusList['stop']    = 'Stop';

$lang->cron->typeList['zentao'] = 'Self call';
$lang->cron->typeList['system'] = 'System Command';

$lang->cron->toggleList['start'] = 'Activate';
$lang->cron->toggleList['stop']  = 'Deactivate';

$lang->cron->confirmDelete = 'Do you want to delete the Scheduled Task?';
$lang->cron->confirmTurnon = 'Do you want to truncoff the Cron?';
$lang->cron->introduction  = <<<EOD
<p>Scheduled Task can do scheduled execution, such as update burndown chart, backup, etc.</p>
<p>This function need to be improved, so it is turned off by default.</p>
EOD;
$lang->cron->confirmOpen = <<<EOD
<p>Do you want to turn it on?<a href="%s" target='hiddenwin'><strong>Turn On Scheduled Task<strong></a></p>
EOD;

$lang->cron->notice = new stdclass();
$lang->cron->notice->m    = 'Range:0-59，"*" means the numbers within the range, "/" means "per", "-" means ranger.';
$lang->cron->notice->h    = 'Range:0-23';
$lang->cron->notice->dom  = 'Range:1-31';
$lang->cron->notice->mon  = 'Range:1-12';
$lang->cron->notice->dow  = 'Range:0-6';
$lang->cron->notice->help = 'Note：If server restarted, or Scheduled Task is not working, it means Scheduled Task has stopped. You can restart it by clicking 【Restart】 or reload this page. If the last execution time in  changed, it means the Task is running.';
$lang->cron->notice->errorRule = '"%s" is not valid';
/* custom */
$lang->custom->common     = 'Custom';
$lang->custom->index      = 'Home';
$lang->custom->set        = 'Customize';
$lang->custom->restore    = 'Reset to Default';
$lang->custom->key        = 'Key';
$lang->custom->value      = 'Value';
$lang->custom->flow       = 'Workflow';
$lang->custom->working    = 'WorkStyle';
$lang->custom->select     = 'Select Workflow';
$lang->custom->branch     = 'Multi Branch';
$lang->custom->owner      = 'Owner';
$lang->custom->module     = 'Module';
$lang->custom->section    = 'Section';
$lang->custom->lang       = 'Language';
$lang->custom->setPublic  = 'Set Public';
$lang->custom->required   = 'Required';
$lang->custom->score      = 'Score';
$lang->custom->scoreReset = 'Reset Score';

$lang->custom->object['story']    = 'Story';
$lang->custom->object['task']     = 'Task';
$lang->custom->object['bug']      = 'Bug';
$lang->custom->object['testcase'] = 'Case';
$lang->custom->object['testtask'] = 'Build';
$lang->custom->object['todo']     = 'Todo';
$lang->custom->object['user']     = 'User';
$lang->custom->object['block']    = 'ClosedBlock';

$lang->custom->story = new stdClass();
$lang->custom->story->fields['priList']          = 'Priority';
$lang->custom->story->fields['sourceList']       = 'Source';
$lang->custom->story->fields['reasonList']       = 'Close Reason';
$lang->custom->story->fields['stageList']        = 'Phase';
$lang->custom->story->fields['statusList']       = 'Status';
$lang->custom->story->fields['reviewResultList'] = 'Review Result';
$lang->custom->story->fields['review']           = 'Review Required';

$lang->custom->task = new stdClass();
$lang->custom->task->fields['priList']    = 'Priority';
$lang->custom->task->fields['typeList']   = 'Type';
$lang->custom->task->fields['reasonList'] = 'Close Reason';
$lang->custom->task->fields['statusList'] = 'Status';
$lang->custom->task->fields['hours']      = 'Man-hours';

$lang->custom->bug = new stdClass();
$lang->custom->bug->fields['priList']        = 'Priority';
$lang->custom->bug->fields['severityList']   = 'Severity';
$lang->custom->bug->fields['osList']         = 'OS';
$lang->custom->bug->fields['browserList']    = 'Browser';
$lang->custom->bug->fields['typeList']       = 'Type';
$lang->custom->bug->fields['resolutionList'] = 'Solution';
$lang->custom->bug->fields['statusList']     = 'Status';
$lang->custom->bug->fields['longlife']       = 'Shelved Days';

$lang->custom->testcase = new stdClass();
$lang->custom->testcase->fields['priList']    = 'Priority';
$lang->custom->testcase->fields['typeList']   = 'Type';
$lang->custom->testcase->fields['stageList']  = 'Phase';
$lang->custom->testcase->fields['resultList'] = 'Result';
$lang->custom->testcase->fields['statusList'] = 'Status';
$lang->custom->testcase->fields['review']     = 'Review Required';

$lang->custom->testtask = new stdClass();
$lang->custom->testtask->fields['priList']    = 'Priority';
$lang->custom->testtask->fields['statusList'] = 'Status';

$lang->custom->todo = new stdClass();
$lang->custom->todo->fields['priList']    = 'Priority';
$lang->custom->todo->fields['typeList']   = 'Type';
$lang->custom->todo->fields['statusList'] = 'Status';

$lang->custom->user = new stdClass();
$lang->custom->user->fields['roleList']   = 'Role';
$lang->custom->user->fields['statusList'] = 'Status';
$lang->custom->user->fields['deleted']    = 'Show deleted user';

$lang->custom->block->fields['closed'] = 'Closed Block';

$lang->custom->currentLang = 'Current Language';
$lang->custom->allLang     = 'All Language';

$lang->custom->confirmRestore = 'Do you want to reset to Default?';

$lang->custom->notice = new stdclass();
$lang->custom->notice->canNotAdd            = 'These items are parameters of calculation, so customized creation is not enabled.';
$lang->custom->notice->forceReview          = '%s Review is required for certain submitters.';
$lang->custom->notice->forceNotReview       = "%s Review is NOT required for certain submitters.";
$lang->custom->notice->longlife             = 'Define shelved bugs.';
$lang->custom->notice->invalidNumberKey     = 'Priority list key should be a natural and not greater than 255.';
$lang->custom->notice->invalidStringKey     = 'The key should be a combination of lowercase English letters, numbers or underscores';

$lang->custom->notice->indexPage['product'] = "ZenTao 8.2+ has Product Homepage. Do you want to go to Product Homepage?";
$lang->custom->notice->indexPage['project'] = "ZenTao 8.2+ has Project Homepage. Do you want to go to Project Homepage?";
$lang->custom->notice->indexPage['qa']      = "ZenTao 8.2+ has QA Homepage. Do you want to go to QA Homepage?";

$lang->custom->notice->invalidStrlen['ten']        = 'The length of the key must be less than 10 characters.';
$lang->custom->notice->invalidStrlen['twenty']     = 'The length of the key must be less than 20 characters.';
$lang->custom->notice->invalidStrlen['thirty']     = 'The length of the key must be less than 30 characters.';
$lang->custom->notice->invalidStrlen['twoHundred'] = 'The length of the key must be less than 225 characters.';

$lang->custom->storyReview    = 'Review';
$lang->custom->forceReview    = 'Selective Review';
$lang->custom->forceNotReview = 'No review';
$lang->custom->reviewList[1]  = 'On';
$lang->custom->reviewList[0]  = 'Off';

$lang->custom->deletedList[1] = 'Show';
$lang->custom->deletedList[0] = 'Hide';

$lang->custom->workingHours   = 'hours/day';
$lang->custom->weekend        = 'Weekend';
$lang->custom->weekendList[2] = '2-Day Off';
$lang->custom->weekendList[1] = '1-Day Off';

$lang->custom->productProject = new stdclass();
$lang->custom->productProject->relation['0_0'] = 'Product - Project';
$lang->custom->productProject->relation['0_1'] = 'Product - Sprint';
$lang->custom->productProject->relation['1_1'] = 'Project - Sprint';

$lang->custom->productProject->notice = 'Please select according to your team.';

$lang->custom->workingList['full']      = 'Full Management of Dev';
$lang->custom->workingList['onlyTest']  = 'Test Management';
$lang->custom->workingList['onlyStory'] = 'Story Management';
$lang->custom->workingList['onlyTask']  = 'Task Management';

$lang->custom->menuTip  = 'Click to show/hide navigation bar. Drag to swtich display order.';
$lang->custom->saveFail = 'Failed to save!';

$lang->custom->scoreStatus[0] = 'Off';
$lang->custom->scoreStatus[1] = 'On';

$lang->custom->moduleName['product']     = $lang->productCommon;
$lang->custom->moduleName['productplan'] = 'Plan';
$lang->custom->moduleName['project']     = $lang->projectCommon;
/* datatable */
$lang->datatable = new stdclass();
$lang->datatable->common = 'Data Table';
$lang->datatable->width  = 'Width';
$lang->datatable->show   = 'Show';
$lang->datatable->hide   = 'Hide';
$lang->datatable->reset  = 'Reset';

$lang->datatable->custom             = 'Custom Columns';
$lang->datatable->customTip          = 'Check Columns to Display，Drag Column name to Sort';
$lang->datatable->switchToTable      = 'Switch to Common Table';
$lang->datatable->switchToDatatable  = 'Switch to Advanced Table';
$lang->datatable->required           = 'Required';
$lang->datatable->confirmReset       = 'Do you want to restore the default settings?';
$lang->datatable->setGlobal          = 'Global';
$lang->datatable->resetGlobal        = 'Reset Global Default';

$lang->datatable->branch   = 'Branch';
$lang->datatable->platform = 'Platform';

$lang->datatable->showModule             = 'Show/Hide module name';
$lang->datatable->showModuleList[]       = 'N/A';
$lang->datatable->showModuleList['base'] = 'Base Node';
$lang->datatable->showModuleList['end']  = 'End Node';
/* dept */
$lang->dept->common      = 'Department';
$lang->dept->manageChild = "Department";
$lang->dept->edit        = "Edit";
$lang->dept->delete      = "Delete";
$lang->dept->parent      = "Parent";
$lang->dept->manager     = "Manager";
$lang->dept->name        = "Dept Name";
$lang->dept->browse      = "Manage";
$lang->dept->manage      = "Maintain Dept";
$lang->dept->updateOrder = "Sort";
$lang->dept->add         = "Add Dept";
$lang->dept->dragAndSort = "Drag and Sort";

$lang->dept->confirmDelete = " Do you want to delete this Dept?";
$lang->dept->successSave   = " Saved!";

$lang->dept->error = new stdclass();
$lang->dept->error->hasSons  = 'This Dept has child Dept. You cannot be deleted!';
$lang->dept->error->hasUsers = 'This Dept has staff. It cannot be deleted!';
/* dev */
$lang->dev->common     = 'Develop';
$lang->dev->api        = 'API';
$lang->dev->db         = 'Database';
$lang->dev->editor     = 'Editor';
$lang->dev->dbList     = 'Database';
$lang->dev->moduleList = 'Modules';
$lang->dev->params     = 'Parameters';
$lang->dev->type       = 'Type';
$lang->dev->desc       = 'Description';
$lang->dev->noParams   = 'No Parameters';

$lang->dev->fields = array();
$lang->dev->fields['id']     = 'ID';
$lang->dev->fields['name']   = 'Feild';
$lang->dev->fields['desc']   = 'Description';
$lang->dev->fields['type']   = 'Type';
$lang->dev->fields['length'] = 'Length';
$lang->dev->fields['null']   = 'Null';

$lang->dev->tableList = array();
$lang->dev->tableList['action']         = 'Action';
$lang->dev->tableList['bug']            = 'Bug';
$lang->dev->tableList['build']          = 'Build';
$lang->dev->tableList['burn']           = 'Burndown';
$lang->dev->tableList['case']           = 'Test Case';
$lang->dev->tableList['casestep']       = 'Case Steps';
$lang->dev->tableList['company']        = 'Company';
$lang->dev->tableList['config']         = 'Config';
$lang->dev->tableList['custom']         = 'Custom';
$lang->dev->tableList['dept']           = 'Dept';
$lang->dev->tableList['doc']            = 'Doc';
$lang->dev->tableList['doclib']         = 'Doc Lib';
$lang->dev->tableList['effort']         = 'Effort';
$lang->dev->tableList['extension']      = 'Extension';
$lang->dev->tableList['file']           = 'File';
$lang->dev->tableList['group']          = 'Group';
$lang->dev->tableList['grouppriv']      = 'Privilege';
$lang->dev->tableList['history']        = 'History';
$lang->dev->tableList['lang']           = 'Language';
$lang->dev->tableList['module']         = 'Module';
$lang->dev->tableList['product']        = $lang->productCommon;
$lang->dev->tableList['productplan']    = $lang->productCommon . 'Plan';
$lang->dev->tableList['project']        = $lang->projectCommon;
$lang->dev->tableList['projectproduct'] = $lang->projectCommon . $lang->productCommon;
$lang->dev->tableList['projectstory']   = $lang->projectCommon . 'Story';
$lang->dev->tableList['release']        = 'Release';
$lang->dev->tableList['story']          = 'Story';
$lang->dev->tableList['storyspec']      = 'Description';
$lang->dev->tableList['task']           = 'Task';
$lang->dev->tableList['taskestimate']   = 'Est. Task';
$lang->dev->tableList['team']           = 'Team';
$lang->dev->tableList['testresult']     = 'Testing Result';
$lang->dev->tableList['testrun']        = 'Run Testing ';
$lang->dev->tableList['testtask']       = 'Test Task';
$lang->dev->tableList['todo']           = 'Todo';
$lang->dev->tableList['user']           = 'User';
$lang->dev->tableList['usercontact']    = 'User Contact';
$lang->dev->tableList['usergroup']      = 'User Group';
$lang->dev->tableList['userquery']      = 'User Query';
$lang->dev->tableList['usertpl']        = 'User Template';
$lang->dev->tableList['admin']          = 'Admin';
$lang->dev->tableList['api']            = 'API';
$lang->dev->tableList['backup']         = 'Backup';
$lang->dev->tableList['common']         = 'Common';
$lang->dev->tableList['convert']        = 'Convert';
$lang->dev->tableList['dev']            = 'Develope';
$lang->dev->tableList['git']            = 'GIT';
$lang->dev->tableList['index']          = 'Home';
$lang->dev->tableList['install']        = 'Install';
$lang->dev->tableList['mail']           = 'Email';
$lang->dev->tableList['misc']           = 'Misc';
$lang->dev->tableList['my']             = 'Dashboard';
$lang->dev->tableList['qa']             = 'QA';
$lang->dev->tableList['report']         = 'Report';
$lang->dev->tableList['search']         = 'Search';
$lang->dev->tableList['sso']            = 'SSO';
$lang->dev->tableList['svn']            = 'SVN';
$lang->dev->tableList['testcase']       = 'Test Case';
$lang->dev->tableList['testreport']     = 'Test Report';
$lang->dev->tableList['testsuite']      = 'Test Suite';
$lang->dev->tableList['tree']           = 'Module Tree';
$lang->dev->tableList['upgrade']        = 'Update';
$lang->dev->tableList['cron']           = 'Scheduled Task';
$lang->dev->tableList['datatable']      = 'Data Table';
$lang->dev->tableList['block']          = 'Block';
$lang->dev->tableList['branch']         = 'Branch';
$lang->dev->tableList['doccontent']     = 'Doc Content';
$lang->dev->tableList['storystage']     = 'Story Phase';
$lang->dev->tableList['tutorial']       = 'Tutorial';
$lang->dev->tableList['suitecase']      = 'Suite Case';
$lang->dev->tableList['score']          = 'Score';
$lang->dev->tableList['entry']          = 'Entry';
$lang->dev->tableList['webhook']        = 'WebHook';
$lang->dev->tableList['log']            = 'Log';
$lang->dev->tableList['message']        = 'Message';
$lang->dev->tableList['notify']         = 'Notify';

$lang->dev->groupList['my']      = 'Dashboard';
$lang->dev->groupList['product'] = $lang->productCommon;
$lang->dev->groupList['project'] = $lang->projectCommon;
$lang->dev->groupList['qa']      = 'QA';
$lang->dev->groupList['doc']     = 'Doc';
$lang->dev->groupList['company'] = 'Company';
$lang->dev->groupList['admin']   = 'Admin';
$lang->dev->groupList['other']   = 'Others';
/* doc */
$lang->doc->common         = 'Doc';
$lang->doc->id             = 'ID';
$lang->doc->product        = $lang->productCommon;
$lang->doc->project        = $lang->projectCommon;
$lang->doc->lib            = 'Library';
$lang->doc->module         = 'Module';
$lang->doc->title          = 'Title';
$lang->doc->digest         = 'Summary';
$lang->doc->comment        = 'Remark';
$lang->doc->type           = 'Type';
$lang->doc->content        = 'Text';
$lang->doc->keywords       = 'Tags';
$lang->doc->url            = 'URL';
$lang->doc->files          = 'File';
$lang->doc->addedBy        = 'Add By';
$lang->doc->addedDate      = 'Add Date';
$lang->doc->editedBy       = 'Edit By';
$lang->doc->editedDate     = 'Edit Date';
$lang->doc->version        = 'Version';
$lang->doc->basicInfo      = 'Basic Info';
$lang->doc->deleted        = 'Deleted';
$lang->doc->fileObject     = 'The Object';
$lang->doc->whiteList      = 'White List';
$lang->doc->contentType    = 'Format';
$lang->doc->separator      = "<i class='icon-angle-right'></i>";
$lang->doc->fileTitle      = 'File Name';
$lang->doc->filePath       = 'File Path';
$lang->doc->extension      = 'Extension';
$lang->doc->size           = 'Size';
$lang->doc->download       = 'Download';
$lang->doc->acl            = 'Right';
$lang->doc->groups         = 'Groups';
$lang->doc->users          = 'Users';
$lang->doc->item           = ' Items';
$lang->doc->num            = 'Docs';
$lang->doc->searchResult   = 'Search Result';

$lang->doc->moduleDoc      = 'By Module';
$lang->doc->searchDoc      = 'Search';
$lang->doc->fast           = 'Qucik Entry';
$lang->doc->allDoc         = 'All Doc';
$lang->doc->openedByMe     = 'My';
$lang->doc->orderByOpen    = 'Last Added';
$lang->doc->orderByEdit    = 'Last Modified';
$lang->doc->orderByVisit   = 'Last Visited';
$lang->doc->todayEdited    = 'Update Today';
$lang->doc->pastEdited     = 'Updated';
$lang->doc->myDoc          = 'My Doc';
$lang->doc->myCollection   = 'My Favorite';

$lang->doc->index            = 'Doc Home';
$lang->doc->create           = 'Add Doc';
$lang->doc->edit             = 'Edit';
$lang->doc->delete           = 'Delete';
$lang->doc->browse           = 'List';
$lang->doc->view             = 'Details';
$lang->doc->diff             = 'Diff';
$lang->doc->sort             = 'Sort';
$lang->doc->manageType       = 'Manage Category';
$lang->doc->editType         = 'Edit';
$lang->doc->deleteType       = 'Delete';
$lang->doc->addType          = 'Add';
$lang->doc->childType        = 'Child';
$lang->doc->collect          = 'Add Favorites';
$lang->doc->cancelCollection = 'Remove Favorites';

$lang->doc->libName        = 'Name';
$lang->doc->libType        = 'Category';
$lang->doc->custom         = 'Custom Doc Library';
$lang->doc->customAB       = 'Custom Library';
$lang->doc->createLib      = 'Create Library';
$lang->doc->allLibs        = 'Library';
$lang->doc->objectLibs     = "{$lang->productCommon}/{$lang->projectCommon} Library List";
$lang->doc->showFiles      = 'Doc Library';
$lang->doc->editLib        = 'Edit Library';
$lang->doc->deleteLib      = 'Delete Library';
$lang->doc->fixedMenu      = 'Fix to Menu';
$lang->doc->removeMenu     = 'Remove from Menu';
$lang->doc->search         = 'Search';

$lang->doc->allProduct     = 'All' . $lang->productCommon;
$lang->doc->allProject     = 'All' . $lang->projectCommon;

$lang->doc->libTypeList['product'] = $lang->productCommon . ' Library';
$lang->doc->libTypeList['project'] = $lang->projectCommon . ' Library';
$lang->doc->libTypeList['custom']  = 'Custom Library';

$lang->doc->systemLibs['product'] = $lang->productCommon . 'Doc Lib';
$lang->doc->systemLibs['project'] = $lang->projectCommon . 'Doc Lib';

global $config;
if($config->global->flow == 'onlyStory' or $config->global->flow == 'onlyTest') unset($lang->doc->systemLibs['project']);
if($config->global->flow == 'onlyStory' or $config->global->flow == 'onlyTest') unset($lang->doc->libTypeList['project']);
if($config->global->flow == 'onlyTask')  unset($lang->doc->systemLibs['product']);
if($config->global->flow == 'onlyTask')  unset($lang->doc->libTypeList['product']);

$lang->doc->aclList['open']    = 'Public';
$lang->doc->aclList['custom']  = 'Custom';
$lang->doc->aclList['private'] = 'Private';

$lang->doc->types['text'] = 'Text';
$lang->doc->types['url']  = 'URL';

$lang->doc->contentTypeList['html']     = 'HTML';
$lang->doc->contentTypeList['markdown'] = 'MarkDown';

$lang->doc->browseType             = 'Category';
$lang->doc->browseTypeList['list'] = 'List';
$lang->doc->browseTypeList['grid'] = 'Card';

$lang->doc->fastMenuList['byediteddate']  = 'Last Modified';
//$lang->doc->fastMenuList['visiteddate']   = 'Recently Visited';
$lang->doc->fastMenuList['openedbyme']    = 'My Doc';
$lang->doc->fastMenuList['collectedbyme'] = 'My Favorite';

$lang->doc->fastMenuIconList['byediteddate']  = 'icon-folder-upload';
//$lang->doc->fastMenuIconList['visiteddate']   = 'icon-folder-move';
$lang->doc->fastMenuIconList['openedbyme']    = 'icon-folder-account';
$lang->doc->fastMenuIconList['collectedbyme'] = 'icon-folder-star';

$lang->doc->customObjectLibs['files']       = 'Show File Library';
$lang->doc->customObjectLibs['customFiles'] = 'Show Custom Library';

$lang->doc->confirmDelete      = "Do you want to delete this document?";
$lang->doc->confirmDeleteLib   = "Do you want to delete this Doc Lib?";
$lang->doc->errorEditSystemDoc = "Ssytem document library doesn't have to be changed.";
$lang->doc->errorEmptyProduct  = "No {$lang->productCommon}. It cannot be created.";
$lang->doc->errorEmptyProject  = "No {$lang->projectCommon}. It cannot be created.";
$lang->doc->errorMainSysLib    = "This library cannot be deleted.";
$lang->doc->accessDenied       = "Access denied!";
$lang->doc->versionNotFount    = 'It does not exist in this build.';
$lang->doc->noDoc              = 'No docs. ';
$lang->doc->noSearchedDoc      = 'Nothing searched.';
$lang->doc->noEditedDoc        = 'You have not edited any document.';
$lang->doc->noOpenedDoc        = 'You have not created any document.';
$lang->doc->noCollectedDoc     = 'You have not collected any document.';

$lang->doc->placeholder = new stdclass();
$lang->doc->placeholder->url = 'Url';

$lang->doclib = new stdclass();
$lang->doclib->name    = 'Name';
$lang->doclib->control = 'Access Control';
$lang->doclib->group   = 'Group';
$lang->doclib->user    = 'User';
$lang->doclib->files   = 'Files';
$lang->doclib->all     = 'All Libraries';
$lang->doclib->select  = 'Select';
$lang->doclib->project = $lang->projectCommon . ' Library';
$lang->doclib->product = $lang->productCommon . ' Library';

$lang->doclib->main['product'] =  'Main Library';
$lang->doclib->main['project'] =  'Main Library';
/* editor */
$lang->editor->common    = 'Editor';
$lang->editor->api       = 'API';
$lang->editor->index     = 'Home';
$lang->editor->newMethod = 'New Method';
$lang->editor->extend    = 'Extension';
$lang->editor->api       = 'API';
$lang->editor->newLang   = 'New Language';
$lang->editor->newConfig = 'New Config';
$lang->editor->newHook   = 'New Hook';
$lang->editor->newExtend = 'New Extension';
$lang->editor->newPage   = 'New Page';
$lang->editor->override  = 'Override';
$lang->editor->edit      = 'Edit Extension';
$lang->editor->save      = 'Save Page';
$lang->editor->delete    = 'Delete Page';

$lang->editor->moduleList   = 'Modules';
$lang->editor->filePath     = "Extension:";
$lang->editor->sourceFile   = 'Source File:';
$lang->editor->fileName     = "File Name:";
$lang->editor->isOverride   = "Overrode Duplicated File";
$lang->editor->exampleHook  = "(e.g. ***.html.hook.php)";
$lang->editor->exampleJs    = "(e.g. ***.js)";
$lang->editor->exampleCss   = "(e.g. ***.css)";
$lang->editor->examplePHP   = "(e.g. ***.php)";
$lang->editor->pageName     = "Page Name:";

$lang->editor->deleteConfirm = 'Do you want to delete it?';
$lang->editor->extendConfirm = 'Do you want to use original code?';
$lang->editor->repeatFile    = 'File Name Dupliceted';
$lang->editor->repeatPage    = 'Page existed. Do you want to override it?';
$lang->editor->noticeOkFile  = 'For security reasons, your Admin account has to be confirmed. \n Please login ZenTao server and create %sFile.\n Note:\n 1. File is blank.\n 2. If the file existed, delete it and then create a new one.';
$lang->editor->editFileError = 'You can only modify Zentao files!';

$lang->editor->notWritable   = "Not wirtable. Privilege is required. Please try chmod 777 -R ";
$lang->editor->notDelete     = 'Cannot be deleted. Please check your permission!';
$lang->editor->emptyFileName = 'Please enter a File Name!';

$lang->editor->translate['config.php']  = 'config';
$lang->editor->translate['control.php'] = 'control';
$lang->editor->translate['model.php']   = 'model';

$lang->editor->modules['action']      = 'System Log';
$lang->editor->modules['admin']       = 'Admin';
$lang->editor->modules['api']         = 'API';
$lang->editor->modules['bug']         = 'Bug';
$lang->editor->modules['build']       = 'Build';
$lang->editor->modules['common']      = 'Common Modules';
$lang->editor->modules['company']     = 'Company';
$lang->editor->modules['convert']     = 'Convert';
$lang->editor->modules['dept']        = 'Department';
$lang->editor->modules['doc']         = 'Doc';
$lang->editor->modules['extension']   = 'Extensiona';
$lang->editor->modules['file']        = 'File';
$lang->editor->modules['group']       = 'Group';
$lang->editor->modules['index']       = 'Homepage';
$lang->editor->modules['install']     = 'Install';
$lang->editor->modules['misc']        = 'Misc';
$lang->editor->modules['my']          = 'Dashboard';
$lang->editor->modules['product']     = $lang->productCommon;
$lang->editor->modules['productplan'] = 'Plan';
$lang->editor->modules['project']     = $lang->projectCommon;
$lang->editor->modules['qa']          = 'QA';
$lang->editor->modules['release']     = 'Release';
$lang->editor->modules['report']      = 'Report';
$lang->editor->modules['search']      = 'Search';
$lang->editor->modules['story']       = 'Story';
$lang->editor->modules['task']        = 'Task';
$lang->editor->modules['testcase']    = 'Case';
$lang->editor->modules['testtask']    = 'Test Task';
$lang->editor->modules['todo']        = 'Todo';
$lang->editor->modules['tree']        = 'Module';
$lang->editor->modules['upgrade']     = 'Upgrade';
$lang->editor->modules['user']        = 'User';
/* entry */
$lang->entry->common  = 'Entry';
$lang->entry->list    = 'Entry List';
$lang->entry->api     = 'API';
$lang->entry->webhook = 'Webhook';
$lang->entry->log     = 'Log';
$lang->entry->setting = 'Setting';

$lang->entry->browse    = 'Browse';
$lang->entry->create    = 'Create';
$lang->entry->edit      = 'Edit';
$lang->entry->delete    = 'Delete';
$lang->entry->createKey = 'Regenerate';

$lang->entry->id          = 'ID';
$lang->entry->name        = 'Name';
$lang->entry->code        = 'Code';
$lang->entry->key         = 'Key';
$lang->entry->ip          = 'IP';
$lang->entry->desc        = 'Desc';
$lang->entry->createdBy   = 'Created By';
$lang->entry->createdDate = 'Created Date';
$lang->entry->editedby    = 'Edited By';
$lang->entry->editedDate  = 'Edited Date';
$lang->entry->date        = 'Request Time';
$lang->entry->url         = 'Request URL';

$lang->entry->confirmDelete = 'Are you sure delete this entry?';
$lang->entry->help          = 'Help';

$lang->entry->note = new stdClass();
$lang->entry->note->name  = 'Name';
$lang->entry->note->code  = 'Code, should be english and number.';
$lang->entry->note->ip    = "Use comma between two IPs. IP segment is supported, e.g. 192.168.1.*";
$lang->entry->note->allIP = 'All';

$lang->entry->errmsg['PARAM_CODE_MISSING']    = 'Param code is missing.';
$lang->entry->errmsg['PARAM_TOKEN_MISSING']   = 'Param token is missing.';
$lang->entry->errmsg['SESSION_CODE_MISSING']  = 'Session code is missing.';
$lang->entry->errmsg['EMPTY_KEY']             = 'Key of entry is missing.';
$lang->entry->errmsg['INVALID_TOKEN']         = 'Invalid token.';
$lang->entry->errmsg['SESSION_VERIFY_FAILED'] = 'Session verification failed.';
$lang->entry->errmsg['IP_DENIED']             = 'IP is denied.';
$lang->entry->errmsg['EMPTY_ENTRY']           = 'Key of entry is missing.';
/* extension */
$lang->extension->common        = 'Extension';
$lang->extension->browse        = 'Browse';
$lang->extension->install       = 'Install';
$lang->extension->installAuto   = 'Auto Install';
$lang->extension->installForce  = 'Force Install';
$lang->extension->uninstall     = 'Uninstall';
$lang->extension->activate      = 'Activate';
$lang->extension->deactivate    = 'Deactivate';
$lang->extension->obtain        = 'Get Extension';
$lang->extension->view          = 'Details';
$lang->extension->downloadAB    = 'Download';
$lang->extension->upload        = 'Local Install';
$lang->extension->erase         = 'Erase';
$lang->extension->upgrade       = 'Extension Upgrade';
$lang->extension->agreeLicense  = 'License';

$lang->extension->structure   = 'Structure';
$lang->extension->installed   = 'Installed';
$lang->extension->deactivated = 'Deactivated';
$lang->extension->available   = 'Downloaded';

$lang->extension->name        = 'Extension Name';
$lang->extension->code        = 'Code';
$lang->extension->desc        = 'Describe';
$lang->extension->type        = 'Type';
$lang->extension->dirs        = 'Directories';
$lang->extension->files       = 'Files';
$lang->extension->status      = 'Status';
$lang->extension->version     = 'Version';
$lang->extension->latest      = '<small>Latest:<strong><a href="%s" target="_blank" class="extension">%s</a></strong>，need zentao <a href="http://api.zentao.net/goto.php?item=latest" target="_blank"><strong>%s</strong></small>';
$lang->extension->author      = 'Author';
$lang->extension->license     = 'License';
$lang->extension->site        = 'Website';
$lang->extension->downloads   = 'Downloads';
$lang->extension->compatible  = 'Compatibility';
$lang->extension->grade       = 'Score';
$lang->extension->depends     = 'Dependent';
$lang->extension->expireDate  = 'Expire';
$lang->extension->zentaoCompatible  = 'Compatible Version';
$lang->extension->installedTime     = 'Installed Time';

$lang->extension->publicList[0] = 'Manually';
$lang->extension->publicList[1] = 'Auto';

$lang->extension->compatibleList[0] = 'Unknown';
$lang->extension->compatibleList[1] = 'Compatible';

$lang->extension->obtainOfficial[0] = 'Third party';
$lang->extension->obtainOfficial[1] = 'Official';

$lang->extension->byDownloads   = 'Downloads';
$lang->extension->byAddedTime   = 'Latest Added';
$lang->extension->byUpdatedTime = 'Latest Update';
$lang->extension->bySearch      = 'Search';
$lang->extension->byCategory    = 'Category';

$lang->extension->installFailed            = '%s failed. Error:';
$lang->extension->uninstallFailed          = 'Uninstall failed. Error:';
$lang->extension->confirmUninstall         = 'Uninstal the extension will delete or change related database. Do you want to uninstall?';
$lang->extension->installFinished          = 'Congrats! The extension has been %sed!';
$lang->extension->refreshPage              = 'Refresh';
$lang->extension->uninstallFinished        = 'Extension has been uninstalled.';
$lang->extension->deactivateFinished       = 'Extension has been deactivated.';
$lang->extension->activateFinished         = 'Extension has been activated.';
$lang->extension->eraseFinished            = 'Extension has been removed.';
$lang->extension->unremovedFiles           = 'File or direcroty cannot be deleted. You have to manually delete';
$lang->extension->executeCommands          = '<h3>Execute command lines below to fix the problem:</h3>';
$lang->extension->successDownloadedPackage = 'Extension downloaded!';
$lang->extension->successCopiedFiles       = 'File copied!';
$lang->extension->successInstallDB         = 'Database installed!';
$lang->extension->viewInstalled            = 'Installed';
$lang->extension->viewAvailable            = 'Available';
$lang->extension->viewDeactivated          = 'Deactivated';
$lang->extension->backDBFile               = 'Extension data has been backed up to %s!';
$lang->extension->noticeOkFile             = '<h5>For security reasons, your Admin account has to be confirmed.</h5>
    <h5>Plese Login your ZenTao server and create %s.</h5>
    <p>Note</p>
    <ol>
    <li>The file you will create is empty.</li>
    <li>If there is one such file exists, delete it first, and then create yours.</li>
    </ol>'; 

$lang->extension->upgradeExt     = 'Upgrade';
$lang->extension->installExt     = 'Install';
$lang->extension->upgradeVersion = '(Upgrade %s to %s.)';

$lang->extension->waring = 'Warning!';

$lang->extension->errorOccurs                  = 'Error:';
$lang->extension->errorGetModules              = 'Get Extension Category from www.zentao.net failed. It could be network error. Plase check your network and refresh it.';
$lang->extension->errorGetExtensions           = 'Get Extension from www.zentao.net failed. It could be network error. Please go to <a href="http://www.zentao.net/extension/" target="_blank" class="alert-link">www.zentao.net</a> and download the extension, and then upload it to install.';
$lang->extension->errorDownloadPathNotFound    = 'Extension download path <strong>%s</strong> is not found.<br /> Please run <strong>mkdir -p %s</strong> in Linux to fix it.';
$lang->extension->errorDownloadPathNotWritable = 'Extensiond ownload path <strong>%s</strong>is not writable. <br />Please run <strong>sudo chmod 777 %s</strong> in Linux to fix it.';
$lang->extension->errorPackageFileExists       = '<strong>%s</strong> has existed in the download path.<h5> Please %s it again, <a href="%s" class="alert-link">CLICK HERE</a></h5>';
$lang->extension->errorDownloadFailed          = 'Download failed. Please try it again. If still not OK, try to download it manually and upload it to install.';
$lang->extension->errorMd5Checking             = 'Incomplete File. Please download it again. If still not OK, try to download it manually and upload it to install.';
$lang->extension->errorCheckIncompatible       = 'Incompatible with this version of ZenTao. It may not be used %s later.<h5>You can choose to <a href="%s" class="btn btn-sm">force%s</a> or <a href="#" onclick=parent.location.href="%s" class="btn btn-sm">cancel</a></h5>';
$lang->extension->errorFileConflicted          = '<br />%s <h5> is conflicted with others. Choose <a href="%s" class="btn btn-sm">Override</a> or <a href="#" onclick=parent.location.href="%s" class="btn btn-sm">Cancel</a></h5>';
$lang->extension->errorPackageNotFound         = '<strong>%s </strong> is not found. Downloading might be failed. Please download it again.';
$lang->extension->errorTargetPathNotWritable   = '<strong>%s </strong> is not writable.';
$lang->extension->errorTargetPathNotExists     = '<strong>%s </strong> is not found.';
$lang->extension->errorInstallDB               = 'Database report execution failed. Error: %s';
$lang->extension->errorConflicts               = 'Conflicted with “%s”!';
$lang->extension->errorDepends                 = 'Dependent extension has not been installed or the version is incorrect:<br /><br /> %s';
$lang->extension->errorIncompatible            = 'Incompatible with this version of ZenTao.';
$lang->extension->errorUninstallDepends        = '“%s” is dependent on this extension. Please do not install it.';
/* file */
$lang->file = new stdclass();
$lang->file->common        = 'File';
$lang->file->uploadImages  = 'Batch Upload Images';
$lang->file->download      = 'Download Files';
$lang->file->uploadDate    = 'Uploaded on';
$lang->file->edit          = 'Rename';
$lang->file->inputFileName = 'Enter File Name';
$lang->file->delete        = 'Delete File';
$lang->file->label         = 'Label:';
$lang->file->maxUploadSize = "<span class='text-red'>%s</span>";
$lang->file->applyTemplate = "Apply Template";
$lang->file->tplTitle      = "Template Name";
$lang->file->setPublic     = "Set Public Template";
$lang->file->exportFields  = "Fileds to be Exported";
$lang->file->exportRange   = "Data Range";
$lang->file->defaultTPL    = "Default Template";
$lang->file->setExportTPL  = "Settings";
$lang->file->preview       = "Preview";
$lang->file->addFile       = 'Add';
$lang->file->beginUpload   = 'Upload';
$lang->file->uploadSuccess = 'Uploaded!';

$lang->file->pathname  = 'Path Name';
$lang->file->title     = 'Title';
$lang->file->fileName  = 'File Name';
$lang->file->untitled  = 'Untitled';
$lang->file->extension = 'Extension';
$lang->file->size      = 'Size';
$lang->file->encoding  = 'Encoding';
$lang->file->addedBy   = 'Added By';
$lang->file->addedDate = 'Added On';
$lang->file->downloads = 'Downloads';
$lang->file->extra     = 'Extra';

$lang->file->dragFile         = 'Please drag here.';
$lang->file->errorNotExists   = "<span class='text-red'>'%s' is not found.</span>";
$lang->file->errorCanNotWrite = "<span class='text-red'>'%s' is not writable. Please change its permission. Enter <span class='code'>sudo chmod -R 777 '%s'</span></span> in Linux.";
$lang->file->confirmDelete    = " Do you want to delete it?";
$lang->file->errorFileSize    = " File size exceeds the limit. It cannot be uploaded!";
$lang->file->errorFileUpload  = " Uploading failed. File size might exceeds the limit.";
$lang->file->errorFileFormate = " Uploading failed, file format is limited.";
$lang->file->errorFileMove    = " Uploading failed, there was an error when moving file.";
$lang->file->dangerFile       = " File has been rejected to upload for security issues.";
$lang->file->errorSuffix      = 'Format is incorrect. .zip files ONLY!';
$lang->file->errorExtract     = 'Extracting file failed. File might be damaged or invalid files in the zip package.';
$lang->file->uploadImagesExplain = 'Note: upload .jpg, .jpeg, .gif, and .png images. The image name will be taken as the title of the story and the image as its content.';
/* git */
$lang->git = new stdclass();
$lang->git->common  = 'Git';
$lang->git->cat     = 'View Code';
$lang->git->diff    = 'Diff Code';
$lang->git->apiSync = 'API: Sync Git Log';
/* group */
$lang->group->common             = 'Privilege';
$lang->group->browse             = 'Group Privilges';
$lang->group->create             = 'Add Group';
$lang->group->edit               = 'Edit';
$lang->group->copy               = 'Copy';
$lang->group->delete             = 'Delete';
$lang->group->manageView         = 'View';
$lang->group->managePriv         = 'Batch Assign Privileges';
$lang->group->managePrivByGroup  = 'Privilege';
$lang->group->managePrivByModule = 'Module Privileges';
$lang->group->byModuleTips       = '<span class="tips">(Press Shift/Ctrl to Multi-select)</span>';
$lang->group->manageMember       = 'Member';
$lang->group->confirmDelete      = 'Do you want to delete this User Group?';
$lang->group->successSaved       = 'Saved!';
$lang->group->errorNotSaved      = 'Failed. Please select actions and groups.';
$lang->group->viewList           = 'Views can be accessed.';
$lang->group->productList        = 'Products can be accessed.';
$lang->group->projectList        = 'Projects can be accessed.';
$lang->group->noticeVisit        = 'Empty means you have no access.';

$lang->group->id       = 'ID';
$lang->group->name     = 'Name';
$lang->group->desc     = 'Description';
$lang->group->role     = 'Role';
$lang->group->acl      = 'Right';
$lang->group->users    = 'Users';
$lang->group->module   = 'Module';
$lang->group->method   = 'Method';
$lang->group->priv     = 'Group';
$lang->group->option   = 'Option';
$lang->group->inside   = 'Group Users';
$lang->group->outside  = 'Other Users';
$lang->group->other    = 'Others';
$lang->group->all      = 'All';

$lang->group->copyOptions['copyPriv'] = 'Copy Privilege';
$lang->group->copyOptions['copyUser'] = 'Copy User';

$lang->group->versions['']          = 'History';
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
$lang->index->common = 'Home';
$lang->index->index  = 'Home';
/* install */
$lang->install = new stdclass();

$lang->install->common  = 'Install';
$lang->install->next    = 'Next';
$lang->install->pre     = 'Back';
$lang->install->reload  = 'Reload';
$lang->install->error   = 'Error ';

$lang->install->officeDomain     = 'https://www.zentao.pm';

$lang->install->start            = 'Start to Install';
$lang->install->keepInstalling   = 'Continue installing this version.';
$lang->install->seeLatestRelease = 'View Latest Version';
$lang->install->welcome          = 'Thanks for choosing ZenTao Project Management Software!';
$lang->install->license          = 'ZenTao PMS is under Z PUBLIC LICENSE(ZPL) 1.2';
$lang->install->desc             = <<<EOT
ZenTao Project Management Software is an Open Source software released under <a href='http://zpl.pub/page/zplv12.html' target='_blank'>ZPL</a> license. It integrates with Product Management, Project Management, QA Management, Document Management, Todos Management, Company Management etc. ZenTao is the best choice for software project management.

ZenTao PMS is built on PHP + MySQL and based on ZenTaoPHP framework, an independent framework developed by our team. Third party developers/organizations can develop extensions or customize for their requirements.
EOT;
$lang->install->links = <<<EOT
ZenTao PMS is developed by <strong><a href='http://easysoft.ltd' target='_blank' class='text-danger'>Nature Easy Soft Co., LTD</a></strong>.
Official Website : <a href='http://www.zentao.pm' target='_blank'>http://www.zentao.pm</a>
Technical Support : <a href='http://www.zentao.pm/forum/' target='_blank'>http://www.zentao.pm/forum/</a>
WhatsApp Group : <a href='https://chat.whatsapp.com/B6pi6b3gv0S7x7jqMxwhbF' target='_blank'>https://chat.whatsapp.com/B6pi6b3gv0S7x7jqMxwhbF</a>
Twitter: <a href='https://twitter.com/cneasysoft' target='_blank'>cneasysoft</a>

You are installing ZenTao <strong class='text-danger'>%s</strong> Version.
EOT;

$lang->install->newReleased= "<strong class='text-danger'>Notice</strong>：Official Website has the latest version<strong class='text-danger'>%s</strong>, released on %s.";
$lang->install->or         = 'Or';
$lang->install->checking   = 'System Checking';
$lang->install->ok         = 'Passed(√)';
$lang->install->fail       = 'Failed(×)';
$lang->install->loaded     = 'Loaded';
$lang->install->unloaded   = 'Not Loaded';
$lang->install->exists     = 'Found ';
$lang->install->notExists  = 'Not found ';
$lang->install->writable   = 'Writable ';
$lang->install->notWritable= 'Not Writable ';
$lang->install->phpINI     = 'PHP ini File';
$lang->install->checkItem  = 'Item';
$lang->install->current    = 'Current Settings';
$lang->install->result     = 'Results';
$lang->install->action     = 'Actions';

$lang->install->phpVersion = 'PHP Version';
$lang->install->phpFail    = 'PHP Version has to be 5.2.0+';

$lang->install->pdo          = 'PDO';
$lang->install->pdoFail      = 'Edit PHP ini file to load PDO extsion.';
$lang->install->pdoMySQL     = 'PDO_MySQL';
$lang->install->pdoMySQLFail = 'Edit PHP ini file to load PDO_MySQL extsion.';
$lang->install->json         = 'JSON Extension';
$lang->install->jsonFail     = 'Edit the php.ini file to load JSON extension.';
$lang->install->openssl      = 'OpenSSL Extension';
$lang->install->opensslFail  = 'Edit the php.ini file to load openssl extension.';
$lang->install->mbstring     = 'Mbstring Extension';
$lang->install->mbstringFail = 'Edit the php.ini file to load mbstring extension.';
$lang->install->zlib         = 'Zlib Extension';
$lang->install->zlibFail     = 'Edit the php.ini file to load zlib extension.';
$lang->install->curl         = 'Curl Extension';
$lang->install->curlFail     = 'Edit the php.ini file to load curl extension.';
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
$lang->install->chmodLinux   = ' "%s" privilege has to be changed.<br /> Run <code>chmod o=rwx -R %s</code> to change it.';

$lang->install->defaultLang    = 'Default Language';
$lang->install->dbHost         = 'Database Host';
$lang->install->dbHostNote     = 'If 127.0.0.1 is not accessible, try localhost.';
$lang->install->dbPort         = 'Host Port';
$lang->install->dbUser         = 'Database User';
$lang->install->dbPassword     = 'Database Password';
$lang->install->dbName         = 'Database Name';
$lang->install->dbPrefix       = 'Table Prefix';
$lang->install->clearDB        = 'Clean tables if already exist.';
$lang->install->importDemoData = 'Import Demo Data';
$lang->install->working        = 'Work Mode';

$lang->install->requestTypes['GET']       = 'GET';
$lang->install->requestTypes['PATH_INFO'] = 'PATH_INFO';

$lang->install->workingList['full']      = 'Full Development Management';
$lang->install->workingList['onlyTest']  = 'Only Test Management';
$lang->install->workingList['onlyStory'] = 'Only Story Management';
$lang->install->workingList['onlyTask']  = 'Only Task Management';

$lang->install->errorConnectDB      = 'Connection to database Failed. ';
$lang->install->errorDBName         = 'Database name should exclude “.” ';
$lang->install->errorCreateDB       = 'Failed to create the database.';
$lang->install->errorTableExists    = 'Data table has existed. If ZenTao has been installed before, please return to last step and clear data. Then continue the installation.';
$lang->install->errorCreateTable    = 'Failed to create the table.';
$lang->install->errorImportDemoData = 'Failed to import demo data.';

$lang->install->setConfig  = 'Create Config File';
$lang->install->key        = 'Item';
$lang->install->value      = 'Value';
$lang->install->saveConfig = 'Save Config';
$lang->install->save2File  = '<div class="alert alert-warning">Copy the content in the text box above and save it to "<strong> %s </strong>". You can change this config file later.</div>';
$lang->install->saved2File = 'Config file has been saved to " <strong>%s</strong> ". You can change this file later.';
$lang->install->errorNotSaveConfig = 'Config file is not saved.';

$lang->install->getPriv  = 'Set Admin';
$lang->install->company  = 'Company Name';
$lang->install->account  = 'Admin Account';
$lang->install->password = 'Admin Password';
$lang->install->errorEmptyPassword = 'Password should not be blank.';

$lang->install->groupList['ADMIN']['name']   = 'Admin';
$lang->install->groupList['ADMIN']['desc']   = 'System Administrator';
$lang->install->groupList['DEV']['name']     = 'Dev';
$lang->install->groupList['DEV']['desc']     = 'Developer';
$lang->install->groupList['QA']['name']      = 'QA';
$lang->install->groupList['QA']['desc']      = 'tester';
$lang->install->groupList['PM']['name']      = 'PM';
$lang->install->groupList['PM']['desc']      = 'Project Manager';
$lang->install->groupList['PO']['name']      = 'PO';
$lang->install->groupList['PO']['desc']      = 'Product Owner';
$lang->install->groupList['TD']['name']      = 'Dev Manager';
$lang->install->groupList['TD']['desc']      = 'Development Manager';
$lang->install->groupList['PD']['name']      = 'PD';
$lang->install->groupList['PD']['desc']      = 'Product Director';
$lang->install->groupList['QD']['name']      = 'QD';
$lang->install->groupList['QD']['desc']      = 'QA Director';
$lang->install->groupList['TOP']['name']     = 'Senior';
$lang->install->groupList['TOP']['desc']     = 'Senior Manager';
$lang->install->groupList['OTHERS']['name']  = 'Other';
$lang->install->groupList['OTHERS']['desc']  = 'other users';
$lang->install->groupList['LIMITED']['name'] = 'Limited User';
$lang->install->groupList['LIMITED']['desc'] = 'can only edit contents related to itself';

$lang->install->cronList[''] = 'Monitor cron';
$lang->install->cronList['moduleName=project&methodName=computeburn'] = 'Update Burndown Chart';
$lang->install->cronList['moduleName=report&methodName=remind']       = 'Daily task reminder';
$lang->install->cronList['moduleName=svn&methodName=run']             = 'Synchronize SVN';
$lang->install->cronList['moduleName=git&methodName=run']             = 'Synchronize GIT';
$lang->install->cronList['moduleName=backup&methodName=backup']       = 'Backup data&file';
$lang->install->cronList['moduleName=mail&methodName=asyncSend']      = 'Async sending Message';
$lang->install->cronList['moduleName=webhook&methodName=asyncSend']   = 'Async sending Webhook';
$lang->install->cronList['moduleName=admin&methodName=deleteLog']     = 'Delete overdue log';
$lang->install->cronList['moduleName=todo&methodName=createCycle']    = 'Create repeat todos';

$lang->install->success  = "Installed!";
$lang->install->login    = 'Login ZenTao';
$lang->install->register = 'Register in ZenTao';

$lang->install->joinZentao = <<<EOT
<p>You have installed ZenTao %s.<strong class='text-danger'> Please delete install.php asap</strong>.</p><p>Note: In order to get the latest news of ZenTao, please register in ZenTao(<a href='http://www.zentao.pm' class='alert-link' target='_blank'>www.zentao.pm</a>).</p>
EOT;

$lang->install->product = array('chanzhi', 'ranzhi');

$lang->install->promotion     = "Products of Nature Easy Soft:";
$lang->install->chanzhi       = new stdclass();
$lang->install->chanzhi->name = 'ZSITE content management system.';
$lang->install->chanzhi->logo = 'images/main/chanzhi_en.png';
$lang->install->chanzhi->url  = 'http://www.zsite.net';
$lang->install->chanzhi->desc = <<<EOD
<ul>
  <li>Article, Blog, Manual, Member, Shop, Forum, Feedback……</li>
  <li>Customize page freely by theme, effect, widget, css, js and layout</li>
  <li>Support desktop and mobile in one system</li>
  <li>Deeply optimized for search engine</li>
</ul>
EOD;

$lang->install->ranzhi = new stdclass();
$lang->install->ranzhi->name = 'ZDOO Collaborative System';
$lang->install->ranzhi->logo = 'images/main/zdoo_org.png';
$lang->install->ranzhi->url  = 'http://www.zdoo.org';
$lang->install->ranzhi->desc = <<<EOD
<ul>
  <li>CRM: Customer Management and Order Tracking</li>
  <li>OA: Approve, Announce, Trip, Leave and so on. </li>
  <li>Project，Task and Document management </li>
  <li>Money: Income, Expense, Transfer, Invest and Debt</li>
</ul>
EOD;
/* mail */
$lang->mail->common        = 'Email Settings';
$lang->mail->index         = 'Home';
$lang->mail->detect        = 'Testing';
$lang->mail->edit          = 'Edit Settings';
$lang->mail->save          = 'Save';
$lang->mail->test          = 'Email Sending Test';
$lang->mail->reset         = 'Reset';
$lang->mail->resend        = 'Resend';
$lang->mail->browse        = 'Email List';
$lang->mail->delete        = 'Delete Email';
$lang->mail->ztCloud       = 'ZenTao CloudMail';
$lang->mail->gmail         = 'GMAIL';
$lang->mail->sendCloud     = 'Notice SendCloud';
$lang->mail->batchDelete   = 'Batch Delete';
$lang->mail->sendcloudUser = 'Sync Contact';
$lang->mail->agreeLicense  = 'Yes';
$lang->mail->disagree      = 'No';

$lang->mail->turnon      = 'Turn On Mail';
$lang->mail->async       = 'Async Sending';
$lang->mail->fromAddress = 'Sender Email';
$lang->mail->fromName    = 'Sender';
$lang->mail->domain      = 'Zentao Domain';
$lang->mail->host        = 'SMTP Server';
$lang->mail->port        = 'SMTP Port';
$lang->mail->auth        = 'Validation Required';
$lang->mail->username    = 'SMTP Account';
$lang->mail->password    = 'SMTP Password';
$lang->mail->secure      = 'Encryption';
$lang->mail->debug       = 'Debug Level';
$lang->mail->charset     = 'Charset';
$lang->mail->accessKey   = 'Access Key';
$lang->mail->secretKey   = 'Secret Key';
$lang->mail->license     = 'ZenTao Cloud Notice';

$lang->mail->selectMTA = 'Select MTA(Mail Transfer Agent)';
$lang->mail->smtp      = 'SMTP';

$lang->mail->syncedUser = 'Synchronized';
$lang->mail->unsyncUser = 'Not Synchronized';
$lang->mail->sync       = 'Synchronize';
$lang->mail->remove     = 'Remove';

$lang->mail->toList      = 'Addressee';
$lang->mail->ccList      = 'Copy to';
$lang->mail->subject     = 'Subject';
$lang->mail->createdBy   = 'Sender';
$lang->mail->createdDate = 'Added Date';
$lang->mail->sendTime    = 'Send Date';
$lang->mail->status      = 'Status';
$lang->mail->failReason  = 'Fail Reason';

$lang->mail->statusList['sended'] = 'Sent';
$lang->mail->statusList['fail']   = 'Failed';

$lang->mail->turnonList[1]  = 'On';
$lang->mail->turnonList[0] = 'Off';

$lang->mail->asyncList[1] = 'Yes';
$lang->mail->asyncList[0] = 'No';

$lang->mail->debugList[0] = 'Off';
$lang->mail->debugList[1] = 'Normal';
$lang->mail->debugList[2] = 'High';

$lang->mail->authList[1]  = 'Required';
$lang->mail->authList[0] = 'Not Required';

$lang->mail->secureList['']    = 'Plain';
$lang->mail->secureList['ssl'] = 'ssl';
$lang->mail->secureList['tls'] = 'tls';

$lang->mail->more           = 'More';
$lang->mail->noticeResend   = 'Sent it again!';
$lang->mail->inputFromEmail = 'Sender Email';
$lang->mail->nextStep       = 'Next';
$lang->mail->successSaved   = 'Configuration has been saved.';
$lang->mail->testSubject    = 'Testing Email';
$lang->mail->testContent    = 'Email configured!';
$lang->mail->successSended  = 'Sent!';
$lang->mail->confirmDelete  = 'Do you want to delete it?';
$lang->mail->sendmailTips   = 'Note: Email author will not receive this email.';
$lang->mail->needConfigure  = 'Email configuration is not found. Please cinfigure the Email first.';
$lang->mail->connectFail    = 'Connection to ZenTao failed.';
$lang->mail->centifyFail    = 'Verification failed. Please try to bind again!';
$lang->mail->nofsocket      = 'fsocket related function has been deactivated. Mails cannot send out. Please modify allow_url_fopen in php.ini to turn on Onopenssl, and restart Apache.';
$lang->mail->noOpenssl      = 'Please turn on Onopenssl, and restart Apache.';
$lang->mail->disableSecure  = 'No openssl. Disable ssl and tls.';
$lang->mail->sendCloudFail  = 'Failed. Reason:';
$lang->mail->sendCloudHelp  = <<<EOD



EOD;
$lang->mail->sendCloudSuccess = 'Done';
$lang->mail->closeSendCloud   = 'Close';
$lang->mail->addressWhiteList = 'Please add to the whilte list of email server to avoid being blocked';
$lang->mail->ztCloudNotice    = <<<EOD









EOD;

$lang->mail->placeholder = new stdclass();
$lang->mail->placeholder->password = 'Some mail server needs auth code, refer to your mail supplier.';
/* message */
$lang->message->common  = 'Message';
$lang->message->index   = 'Index';
$lang->message->setting = 'Setting';

$lang->message->typeList['mail']    = 'Mail';
$lang->message->typeList['message'] = 'Browser notifications';
$lang->message->typeList['webhook'] = 'Webhook';
/* misc */
$lang->misc = new stdclass();
$lang->misc->common = 'Misc';
$lang->misc->ping   = 'Ping';
$lang->misc->api    = 'http://api.zentao.net';

$lang->misc->zentao = new stdclass();
$lang->misc->zentao->version           = 'Version %s';
$lang->misc->zentao->labels['about']   = 'About';
$lang->misc->zentao->labels['support'] = 'Support';
$lang->misc->zentao->labels['cowin']   = 'Help Us';
$lang->misc->zentao->labels['service'] = 'Service';

$lang->misc->zentao->icons['about']   = 'group';
$lang->misc->zentao->icons['support'] = 'question-sign';
$lang->misc->zentao->icons['cowin']   = 'hand-right';
$lang->misc->zentao->icons['service'] = 'heart';

$lang->misc->zentao->about['proversion']   = 'ZenTao Pro';
$lang->misc->zentao->about['official']     = "Official Website";
$lang->misc->zentao->about['changelog']    = "Change Log";
$lang->misc->zentao->about['license']      = "License";



$lang->misc->zentao->support['vip']        = "VIP Technical Support";
$lang->misc->zentao->support['manual']     = "User Manual";






$lang->misc->zentao->cowin['reportbug']    = "Report Bug ";
$lang->misc->zentao->cowin['feedback']     = "Feedback";

$lang->misc->zentao->cowin['cowinmore']    = "More";




$lang->misc->zentao->service['servicemore']= 'More';

$lang->misc->mobile      = "Mobile Access";
$lang->misc->noGDLib     = "Please use the browser on your phone to visit <strong>%s</strong>";
$lang->misc->copyright   = "&copy; 2009 - 2018 <a href='http://easysoft.ltd' target='_blank'>Nature Easy Soft Network Technology Co,LTD</a> Email <a href='mailto:Max@easysoft.ltd'>Max@easysoft.ltd</a>";
$lang->misc->checkTable  = "Check Data Table";
$lang->misc->needRepair  = "Repair Table";
$lang->misc->repairTable = "Database table is damaged due to power outage. Please chech and repair!";
$lang->misc->repairFail  = "Failed to repair. Please go to the database data directory, try to perform <code>myisamchk -r -f %s.MYI</code> repair.";
$lang->misc->tableName   = "Table Name";
$lang->misc->tableStatus = "Status";
$lang->misc->novice      = "First time to ZenTao? Do you want to start rookie mode?";

$lang->misc->noticeRepair = "<h5>If you are not Administrator, please contact Administrator to repair table.</h5>
    <h5>If you are, please login into your Zentao host and create a file named <span>%s</span>.</h5>
    <p>Note:</p>
    <ol>
    <li>Keep the file empty.</li>
    <li>If the file exists, remove it and create one again.</li>
    </ol>";

$lang->misc->feature = new stdclass();
$lang->misc->feature->lastest  = 'Latest Version';
$lang->misc->feature->detailed = 'Details';

$lang->misc->releaseDate['9.8.stable'] = '2018-01-17';
$lang->misc->releaseDate['9.7.stable'] = '2017-12-22';
$lang->misc->releaseDate['9.6.stable'] = '2017-11-06';
$lang->misc->releaseDate['9.5.1']      = '2017-09-27';
$lang->misc->releaseDate['9.3.beta']   = '2017-06-21';
$lang->misc->releaseDate['9.1.stable'] = '2017-03-23';
$lang->misc->releaseDate['9.0.beta']   = '2017-01-03';
$lang->misc->releaseDate['8.3.stable'] = '2016-11-09';
$lang->misc->releaseDate['8.2.stable'] = '2016-05-17';
$lang->misc->releaseDate['7.4.beta']   = '2015-11-13';
$lang->misc->releaseDate['7.2.stable'] = '2015-05-22';
$lang->misc->releaseDate['7.1.stable'] = '2015-03-07';
$lang->misc->releaseDate['6.3.stable'] = '2014-11-07';

$lang->misc->feature->all['9.8.stable'][] = array('title'=>'Message centralized management', 'desc' => '<p>Centring Mail，SMS，webhook into Message</p>');
$lang->misc->feature->all['9.8.stable'][] = array('title'=>'Add Periodic Todo function', 'desc' => '');
$lang->misc->feature->all['9.8.stable'][] = array('title'=>"Add Block of 'Assigned to Me'", 'desc' => '');
$lang->misc->feature->all['9.8.stable'][] = array('title'=>'Support Generating TestStatements of TestBuilds', 'desc' => '');

$lang->misc->feature->all['9.7.stable'][] = array('title'=>'optimize International package，Added Demo data。', 'desc' => '');

$lang->misc->feature->all['9.6.stable'][] = array('title'=>'added Webhook Interface feature', 'desc' => 'support communication with BearyChat,dingding');
$lang->misc->feature->all['9.6.stable'][] = array('title'=>'added Score feature', 'desc' => 'More skilled Use, More score');
$lang->misc->feature->all['9.6.stable'][] = array('title'=>'added Multiplayer task and subTask to project tasks', 'desc' => '');
$lang->misc->feature->all['9.6.stable'][] = array('title'=>'added Product line management to Product View', 'desc' => '');

$lang->misc->feature->all['9.5.1'][] = array('title'=>'added Restricted Operatio', 'desc' => '');

$lang->misc->feature->all['9.3.beta'][] = array('title'=>'upgraded framework，Enhanced security', 'desc' => '');

$lang->misc->feature->all['9.1.stable'][] = array('title'=>'optimize Test View', 'desc' => '<p>added TestSuite,CaseLib and Test Statements</p>');
$lang->misc->feature->all['9.1.stable'][] = array('title'=>'support Group steps of TestCase', 'desc' => '');

$lang->misc->feature->all['9.0.beta'][] = array('title'=>'ZenTao CloudMail has been added.', 'desc' => '<p>ZenTao CloudMail is a free Email service launched jointly with SendCloud. Once binded with ZenTao and passed verification, users can use this service.</p>');
$lang->misc->feature->all['9.0.beta'][] = array('title'=>'Optimized Rich Text Editor and Markdown Editor.', 'desc' => '');

$lang->misc->feature->all['8.3.stable'][] = array('title'=>'Improved Documentation.', 'desc' => '<p>Added Document Home, restructured document library, and added privileges.</p><p>Markdown Editor is supported，and privilege and version managment is added.</p>');

$lang->misc->feature->all['8.2.stable'][] = array('title'=>'Custom Home', 'desc' => '<p>You can add blocks to Dashboard and arrange the layout.</p><p> My Zone, Product, Project, and QA all support home custom mentioned before. </p>');
$lang->misc->feature->all['8.2.stable'][] = array('title'=>'Custom Navigation', 'desc' => '<p>You can decide which project show in navigation bar and the order of projects shown in the bar.</p><p> Hover on the navigation bar and a sign will show to its right. Click the sign and a dialog box "Custom Navigation" will show. Drag the block name to switch its order on navigation bar.</p>');
$lang->misc->feature->all['8.2.stable'][] = array('title'=>'Batch Add/Edit Custom', 'desc' => '<p>You can batch add and edit fields on custom pages.</p>');
$lang->misc->feature->all['8.2.stable'][] = array('title'=>'Custom Story/Task/Bug/Case', 'desc' => '<p>You can custom fileds when add a Story/Task/Bug/Case.</p>');
$lang->misc->feature->all['8.2.stable'][] = array('title'=>'Custom Export', 'desc' => '<p>You can custom fileds when export a Story/Task/Bug/Case pages. You can also save it as template for next export.</p>');
$lang->misc->feature->all['8.2.stable'][] = array('title'=>'Story/Task/Bug/Case Search ', 'desc' => '<p>On Story/Task/Bug/Case List page, you can do a combined search on Modules and Tabs.</p>');
$lang->misc->feature->all['8.2.stable'][] = array('title'=>"Rookie's Tutorial", 'desc' => '<p>Tutorial for Rookies is added for first-time users to know how to use ZenTao.</p>');

$lang->misc->feature->all['7.4.beta'][] = array('title'=>'Product branch feature is added.', 'desc' => '<p>Product branch/platform is added, and its related Story/Plan/Bug/Case/Module has Branch added too.</p>');
$lang->misc->feature->all['7.4.beta'][] = array('title'=>'Release Module is improved.', 'desc' => '<p>Stop action has been added. If Stop to manage it, the Release will not show when Report Bug.</p><p>Bugs that have been omitted in the Release will be related manually.</p>');
$lang->misc->feature->all['7.4.beta'][] = array('title'=>'Create pages of Story and Bug are improved.', 'desc' => '');

$lang->misc->feature->all['7.2.stable'][] = array('title'=>'Security Enhanced', 'desc' => '<p>Admin weak passwork check is enhanced.</p><p>ok file is required when code/upload an extension.</p><p>Sensitive action requires Admin password.</p><p>Do striptags, specialchars to content entered in ZenTao.</p>');
$lang->misc->feature->all['7.2.stable'][] = array('title'=>'Details Improved', 'desc' => '');

$lang->misc->feature->all['7.1.stable'][] = array('title'=>'Framework of scheduled tasks is added.', 'desc' => 'Framework of scheduled tasks is added. Daily notification, Burndown Update, Backup, Send Email and so on have been added.');
$lang->misc->feature->all['7.1.stable'][] = array('title'=>'rpm and deb packages are provided.', 'desc' => '');

$lang->misc->feature->all['6.3.stable'][] = array('title'=>'Data table is added.', 'desc' => '<p>Fields can be customized in data table and data will be displayed according to customized fields.</p>');
$lang->misc->feature->all['6.3.stable'][] = array('title'=>'Continue improving details', 'desc' => '');
/* my */
$lang->my->common = 'Dashboard';

$lang->my->index          = 'Home';
$lang->my->todo           = 'My Todo';
$lang->my->calendar       = 'Calendar';
$lang->my->task           = 'My Task';
$lang->my->bug            = 'My Bug';
$lang->my->testTask       = 'My Build';
$lang->my->testCase       = 'My Case';
$lang->my->story          = 'My Story';
$lang->my->myProject      = "My {$lang->projectCommon}";
$lang->my->profile        = 'My Profile';
$lang->my->dynamic        = 'My Dynamic';
$lang->my->editProfile    = 'Edit Profile';
$lang->my->changePassword = 'Edit Password';
$lang->my->unbind         = 'Unbind Ranger';
$lang->my->manageContacts = 'Maintain Contact';
$lang->my->deleteContacts = 'Delete Contact';
$lang->my->shareContacts  = 'Share the list';
$lang->my->limited        = 'Restricted operation (editing only content related to itself)';
$lang->my->score          = 'My Score';
$lang->my->scoreRule      = 'Score Rule';
$lang->my->noTodo         = 'No todos. ';

$lang->my->taskMenu = new stdclass();
$lang->my->taskMenu->assignedToMe = 'Assigned To Me';
$lang->my->taskMenu->openedByMe   = 'Created By Me';
$lang->my->taskMenu->finishedByMe = 'Finished By Me';
$lang->my->taskMenu->closedByMe   = 'Closed By Me';
$lang->my->taskMenu->canceledByMe = 'Cancelled By Me';

$lang->my->storyMenu = new stdclass();
$lang->my->storyMenu->assignedToMe = 'Assigned To Me';
$lang->my->storyMenu->openedByMe   = 'Created By Me';
$lang->my->storyMenu->reviewedByMe = 'Reviewed By Me';
$lang->my->storyMenu->closedByMe   = 'Closed By Me';

$lang->my->home = new stdclass();
$lang->my->home->latest        = 'Dynamic';
$lang->my->home->action        = "%s, %s <em>%s</em> %s <a href='%s'>%s</a>.";
$lang->my->home->projects      = $lang->projectCommon;
$lang->my->home->products      = $lang->productCommon;
$lang->my->home->createProject = "Create {$lang->projectCommon}";
$lang->my->home->createProduct = "Create {$lang->productCommon}";
$lang->my->home->help          = "<a href='http://www.zentao.net/help-read-79236.html' target='_blank'>Help</a>";
$lang->my->home->noProductsTip = "No {$lang->productCommon} found here.";

$lang->my->form = new stdclass();
$lang->my->form->lblBasic   = 'Basic Info';
$lang->my->form->lblContact = 'Contact Info';
$lang->my->form->lblAccount = 'Account Info';
/* product */
$lang->product->common      = $lang->productCommon;
$lang->product->index       = $lang->productCommon . 'Home';
$lang->product->browse      = 'Story List';
$lang->product->dynamic     = 'Dynamic';
$lang->product->view        = 'Overview';
$lang->product->edit        = "Edit {$lang->productCommon}";
$lang->product->batchEdit   = 'Batch Edit';
$lang->product->create      = "Create {$lang->productCommon}";
$lang->product->delete      = "Delete {$lang->productCommon}";
$lang->product->deleted     = 'Deleted';
$lang->product->close       = 'Close';
$lang->product->select      = "Select {$lang->productCommon}";
$lang->product->mine        = 'My responsibility:';
$lang->product->other       = 'Other:';
$lang->product->closed      = 'Closed';
$lang->product->updateOrder = 'Ranking';
$lang->product->all         = "All {$lang->productCommon}";
$lang->product->export      = 'Export Data';

$lang->product->basicInfo = 'Basic Info';
$lang->product->otherInfo = 'Other Info';

$lang->product->plans    = 'Plan';
$lang->product->releases = 'Release';
$lang->product->docs     = 'Doc';
$lang->product->bugs     = 'Linked Bug';
$lang->product->projects = "Linked {$lang->projectCommon}";
$lang->product->cases    = 'Case';
$lang->product->builds   = 'Build';
$lang->product->roadmap  = 'Roadmap';
$lang->product->doc      = 'Doc';
$lang->product->project  = $lang->projectCommon . 'List';
$lang->product->build    = 'Build';

$lang->product->currentProject   = 'Current Project';
$lang->product->activeStories    = 'Activated Story';
$lang->product->changedStories   = 'Changed Story';
$lang->product->draftStories     = 'Draft Story';
$lang->product->closedStories    = 'Closed Story';
$lang->product->unResolvedBugs   = 'Unresolved Bug';
$lang->product->assignToNullBugs = 'Unassigned Bug';

$lang->product->confirmDelete  = " Do you want to delete {$lang->productCommon}?";
$lang->product->errorNoProduct = "No {$lang->productCommon} is created yet!";
$lang->product->accessDenied   = "You have no access to {$lang->productCommon}.";

$lang->product->id            = 'ID';
$lang->product->name          = 'Name';
$lang->product->code          = 'Alias';
$lang->product->line          = 'Product Line';
$lang->product->order         = 'Sort';
$lang->product->type          = 'Type';
$lang->product->status        = 'Status';
$lang->product->desc          = 'Description';
$lang->product->manager       = 'Manager';
$lang->product->PO            = 'PO';
$lang->product->QD            = 'QA Manager';
$lang->product->RD            = 'Release Manager';
$lang->product->acl           = 'Access Control';
$lang->product->whitelist     = 'Whitelist';
$lang->product->branch        = '%s';
$lang->product->qa            = 'QA';
$lang->product->release       = 'Release';
$lang->product->latestDynamic = 'Dynamic';
$lang->product->plan          = 'Plan';
$lang->product->iteration     = 'Version Iteration';
$lang->product->iterationInfo = '%s Iterations';
$lang->product->iterationView = 'Details';

$lang->product->searchStory  = 'Search';
$lang->product->assignedToMe = 'Assigned To Me';
$lang->product->openedByMe   = 'Created By Me';
$lang->product->reviewedByMe = 'Reviewed By Me';
$lang->product->closedByMe   = 'Closed By Me';
$lang->product->draftStory   = 'Draft';
$lang->product->activeStory  = 'Activated';
$lang->product->changedStory = 'Changed';
$lang->product->willClose    = 'ToBeClosed';
$lang->product->closedStory  = 'Closed';
$lang->product->unclosed     = 'Open';
$lang->product->unplan       = 'Wait';

$lang->product->allStory             = 'All';
$lang->product->allProduct           = 'All' . $lang->productCommon;
$lang->product->allProductsOfProject = 'All linked' . $lang->productCommon;

$lang->product->typeList['']         = '';
$lang->product->typeList['normal']   = 'Normal';
$lang->product->typeList['branch']   = 'Multi Branch';
$lang->product->typeList['platform'] = 'Multi Platform';

$lang->product->typeTips = array();
$lang->product->typeTips['branch']   = '(for the custom content)';
$lang->product->typeTips['platform'] = '(for IOS, Android, PC, etc.)';

$lang->product->branchName['normal']   = '';
$lang->product->branchName['branch']   = 'Branch';
$lang->product->branchName['platform'] = 'Platform';

$lang->product->statusList['']       = '';
$lang->product->statusList['normal'] = 'Normal';
$lang->product->statusList['closed'] = 'Closed';

$lang->product->aclList['open']    = "Default (User with privilege to {$lang->productCommon} can access to it.)";
$lang->product->aclList['private'] = "Private {$lang->productCommon} ({$lang->projectCommon} team members only)";
$lang->product->aclList['custom']  = 'Custom (Team members and Whitelist members have access to it.)';

$lang->product->storySummary   = " <strong>%s</strong> Story(ies), <strong>%s</strong> hour(s) estimated, case coverage is <strong>%s</strong> on this page.";
$lang->product->checkedSummary = " <strong>%total%</strong> Checked, <strong>%estimate%</strong> hour(s) estimated, case coverage is <strong>%rate%</strong>.";
$lang->product->noModule       = '<div>You have no modules</div><div>Manage now</div>';
$lang->product->noProduct      = 'No product. ';
$lang->product->noMatched      = '"%s" cannot be found.' . $lang->productCommon;

$lang->product->featureBar['browse']['allstory']     = $lang->product->allStory;
$lang->product->featureBar['browse']['unclosed']     = $lang->product->unclosed;
$lang->product->featureBar['browse']['assignedtome'] = $lang->product->assignedToMe;
$lang->product->featureBar['browse']['openedbyme']   = $lang->product->openedByMe;
$lang->product->featureBar['browse']['reviewedbyme'] = $lang->product->reviewedByMe;
$lang->product->featureBar['browse']['draftstory']   = $lang->product->draftStory;
$lang->product->featureBar['browse']['more']         = $lang->more;

$lang->product->featureBar['all']['noclosed'] = $lang->product->unclosed;
$lang->product->featureBar['all']['closed']   = $lang->product->statusList['closed'];
$lang->product->featureBar['all']['all']      = $lang->product->allProduct;

$lang->product->moreSelects['closedbyme']   = $lang->product->closedByMe;
$lang->product->moreSelects['activestory']  = $lang->product->activeStory;
$lang->product->moreSelects['changedstory'] = $lang->product->changedStory;
$lang->product->moreSelects['willclose']    = $lang->product->willClose;
$lang->product->moreSelects['closedstory']  = $lang->product->closedStory;
/* productplan */
$lang->productplan->common     = $lang->productCommon . ' Plan';
$lang->productplan->browse     = "View";
$lang->productplan->index      = "List";
$lang->productplan->create     = "Create Plan";
$lang->productplan->edit       = "Edit";
$lang->productplan->delete     = "Delete";
$lang->productplan->view       = "Details";
$lang->productplan->bugSummary = "<strong>%s</strong> Bugs in total on this page.";
$lang->productplan->basicInfo  = 'Basic Info';
$lang->productplan->batchEdit  = 'Batch Edit';

$lang->productplan->batchUnlink      = "Batch Unlink";
$lang->productplan->linkStory        = "Link Story";
$lang->productplan->unlinkStory      = "Unlink Story";
$lang->productplan->batchUnlinkStory = "Batch Unlink";
$lang->productplan->linkedStories    = 'Linked Story';
$lang->productplan->unlinkedStories  = 'Unlinked Story';
$lang->productplan->updateOrder      = 'Sort';

$lang->productplan->linkBug          = "Link Bug";
$lang->productplan->unlinkBug        = "Unlink Bug";
$lang->productplan->batchUnlinkBug   = "Batch Unlink Bug";
$lang->productplan->linkedBugs       = 'Linked Bug';
$lang->productplan->unlinkedBugs     = 'Unlinked';

$lang->productplan->confirmDelete      = "Do you want to delete this Plan?";
$lang->productplan->confirmUnlinkStory = "Do you want to unlink this Story?";
$lang->productplan->confirmUnlinkBug   = "Do you want to unlink this Bug?";
$lang->productplan->noPlan             = 'No plans. ';

$lang->productplan->id      = 'ID';
$lang->productplan->product = $lang->productCommon;
$lang->productplan->branch  = 'Platform/Branch';
$lang->productplan->title   = 'Title';
$lang->productplan->desc    = 'Description';
$lang->productplan->begin   = 'Begin';
$lang->productplan->end     = 'End';
$lang->productplan->last    = 'Last plan';
$lang->productplan->future  = 'Pending';
$lang->productplan->stories = 'Stories';
$lang->productplan->bugs    = 'Bugs';
$lang->productplan->hour    = 'Hour';
$lang->productplan->project = $lang->projectCommon;

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
$lang->productplan->beginGeEnd   = 'ID %s begin time value should not be greater than t.';

$lang->productplan->featureBar['browse']['all']       = 'All';
$lang->productplan->featureBar['browse']['unexpired'] = 'Unexpired';
$lang->productplan->featureBar['browse']['overdue']   = 'Expired';
/* project */
$lang->project->common        = $lang->projectCommon;
$lang->project->allProjects   = 'All';
$lang->project->type          = 'Type';
$lang->project->name          = 'Name';
$lang->project->code          = 'Alias';
$lang->project->begin         = 'Begin';
$lang->project->end           = 'End';
$lang->project->dateRange     = 'Duration';
$lang->project->to            = 'To';
$lang->project->days          = 'Man-Day';
$lang->project->day           = 'day';
$lang->project->workHour      = 'Hours';
$lang->project->totalHours    = 'Working Hours';
$lang->project->totalDays     = 'Working Days';
$lang->project->status        = 'Status';
$lang->project->desc          = 'Description';
$lang->project->owner         = 'Owner';
$lang->project->PO            = 'PO';
$lang->project->PM            = 'PM';
$lang->project->QD            = 'QA Manager';
$lang->project->RD            = 'Release Manager';
$lang->project->qa            = 'Test';
$lang->project->release       = 'Release';
$lang->project->acl           = 'Access Control';
$lang->project->teamname      = 'Team Name';
$lang->project->order         = "Sort {$lang->projectCommon}";
$lang->project->products      = "Link {$lang->productCommon}";
$lang->project->whitelist     = 'Whitelist';
$lang->project->totalEstimate = 'Est';
$lang->project->totalConsumed = 'Cost';
$lang->project->totalLeft     = 'Left';
$lang->project->progress      = 'Progress';
$lang->project->hours         = '%s Estimates, %s Cost, %s Left.';
$lang->project->viewBug       = 'Bugs';
$lang->project->noProduct     = "No {$lang->productCommon}";
$lang->project->createStory   = "Create Story";
$lang->project->all           = 'All';
$lang->project->undone        = 'Unfinished';
$lang->project->unclosed      = 'Unclosed';
$lang->project->typeDesc      = 'No story, bug, build, test task or burndown is allowed in OPS';
$lang->project->mine          = 'My Responsibility: ';
$lang->project->other         = 'Other:';
$lang->project->deleted       = 'Deleted';
$lang->project->delayed       = 'Delayed';
$lang->project->product       = $lang->project->products;
$lang->project->readjustTime  = 'Adjust project begin and end time';
$lang->project->readjustTask  = 'Adjust task start date and deadline';
$lang->project->effort        = 'Effort';
$lang->project->relatedMember = 'Team Members';

$lang->project->start    = 'Start';
$lang->project->activate = 'Activate';
$lang->project->putoff   = 'Delay';
$lang->project->suspend  = 'Suspend';
$lang->project->close    = 'Close';
$lang->project->export   = 'Export';

$lang->project->typeList['sprint']    = 'Sprint';
$lang->project->typeList['waterfall'] = 'Waterfall';
$lang->project->typeList['ops']       = 'OPS';

$lang->project->endList[7]   = '1 Week';
$lang->project->endList[14]  = '2 Weeks';
$lang->project->endList[31]  = '1 Month';
$lang->project->endList[62]  = '2 Months';
$lang->project->endList[93]  = '3 Months';
$lang->project->endList[186] = '6 Months';
$lang->project->endList[365] = '1 Year';

$lang->team = new stdclass();
$lang->team->account    = 'Account';
$lang->team->role       = 'Role';
$lang->team->join       = 'Joined';
$lang->team->hours      = 'Hour/Day';
$lang->team->days       = 'Workdays';
$lang->team->totalHours = 'Total';

$lang->team->limited            = 'Limited User';
$lang->team->limitedList['no']  = 'No';
$lang->team->limitedList['yes'] = 'Yes';

$lang->project->basicInfo = 'Basic Info';
$lang->project->otherInfo = 'Other Info';

$lang->project->statusList['wait']      = 'Wait';
$lang->project->statusList['doing']     = 'Doing';
$lang->project->statusList['suspended'] = 'Suspend';
$lang->project->statusList['closed']    = 'Closed';

$lang->project->aclList['open']    = "Default (Users who can visit Project have access to it.)";
$lang->project->aclList['private'] = 'Private (For team members only.)';
$lang->project->aclList['custom']  = 'Whitelist (Team members and the whitelist members have access to it.)';

$lang->project->index             = "Home";
$lang->project->task              = 'Tasks';
$lang->project->groupTask         = 'View by Group';
$lang->project->story             = 'Stories';
$lang->project->bug               = 'Bugs';
$lang->project->dynamic           = 'Dynamic';
$lang->project->latestDynamic     = 'Latest Dynamic';
$lang->project->build             = 'Builds';
$lang->project->testtask          = 'Test Tasks';
$lang->project->burn              = 'Burndown';
$lang->project->computeBurn       = 'Update';
$lang->project->burnData          = 'Burndown Data';
$lang->project->fixFirst          = 'Edit Man-hour of 1st Day';
$lang->project->team              = 'Team Member';
$lang->project->doc               = 'Doc';
$lang->project->doclib            = 'Doc Library';
$lang->project->manageProducts    = 'Link ' . $lang->productCommon;
$lang->project->linkStory         = 'Link Story';
$lang->project->linkStoryByPlan   = 'Link Story From Plan';
$lang->project->linkPlan          = 'Link Plan';
$lang->project->unlinkStoryTasks  = 'Unlink';
$lang->project->linkedProducts    = 'Linked Products';
$lang->project->unlinkedProducts  = 'Unlinked Products';
$lang->project->view              = "Overview";
$lang->project->create            = "Create Project";
$lang->project->copy              = "Copy {$lang->projectCommon}";
$lang->project->delete            = "Delete";
$lang->project->browse            = "Browse";
$lang->project->edit              = "Edit";
$lang->project->batchEdit         = "Batch Edit";
$lang->project->manageMembers     = 'Manange Teams';
$lang->project->unlinkMember      = 'Unlink Member';
$lang->project->unlinkStory       = 'Unlink Story';
$lang->project->batchUnlinkStory  = 'Batch Unlink Story';
$lang->project->importTask        = 'Import Tasks';
$lang->project->importPlanStories = 'Link Story From Plan';
$lang->project->importBug         = 'Import Bugs';
$lang->project->updateOrder       = 'Sort';
$lang->project->tree              = 'Tree';
$lang->project->treeTask          = 'Show Task';
$lang->project->treeStory         = 'Show Story';
$lang->project->storyKanban       = 'Story Kanban';
$lang->project->storySort         = 'Sort Story';
$lang->project->importPlanStory   = '' . $lang->projectCommon . ' is created!\nDo you want to iport stories linked to the plan?';
$lang->project->iteration         = 'Iteration';
$lang->project->iterationInfo     = '%s Iterations';
$lang->project->viewAll           = 'View All';

$lang->project->allTasks     = 'All';
$lang->project->assignedToMe = 'My';
$lang->project->myInvolved   = 'Involved';

$lang->project->statusSelects['']             = 'More';
$lang->project->statusSelects['wait']         = 'Wait';
$lang->project->statusSelects['doing']        = 'Doing';
$lang->project->statusSelects['finishedbyme'] = 'FinishedbyMe';
$lang->project->statusSelects['done']         = 'Done';
$lang->project->statusSelects['closed']       = 'Closed';
$lang->project->statusSelects['cancel']       = 'Canceled';

$lang->project->groups['']           = 'Groups';
$lang->project->groups['story']      = 'By Story';
$lang->project->groups['status']     = 'By Status';
$lang->project->groups['pri']        = 'By Priority';
$lang->project->groups['assignedTo'] = 'By AssignedTo';
$lang->project->groups['finishedBy'] = 'By FinishedBy';
$lang->project->groups['closedBy']   = 'By ClosedBy';
$lang->project->groups['type']       = 'By Type';

$lang->project->groupFilter['story']['all']         = $lang->project->all;
$lang->project->groupFilter['story']['linked']      = 'Tasks Linked to Story';
$lang->project->groupFilter['pri']['all']           = $lang->project->all;
$lang->project->groupFilter['pri']['noset']         = 'Not set';
$lang->project->groupFilter['assignedTo']['undone'] = 'Unfinished';
$lang->project->groupFilter['assignedTo']['all']    = $lang->project->all;

$lang->project->byQuery = 'Search';

$lang->project->allProject      = "All {$lang->projectCommon}";
$lang->project->aboveAllProduct = "All the above {$lang->productCommon}";
$lang->project->aboveAllProject = "All the above {$lang->projectCommon}";

$lang->project->selectProject   = "Select {$lang->projectCommon}";
$lang->project->beginAndEnd     = 'Duration';
$lang->project->begin           = 'Begin';
$lang->project->end             = 'End';
$lang->project->lblStats        = 'Man-Hour Summary(h) : ';
$lang->project->stats           = '<strong>%s</strong> Available, <strong>%s</strong> Total Estimates, <strong>%s</strong> Cost, <strong>%s</strong> Left.';
$lang->project->taskSummary     = "Tasks on this page : <strong>%s</strong> Total, <strong>%s</strong> Wait, <strong>%s</strong> Doing;  &nbsp;&nbsp;&nbsp;  Hours : <strong>%s</strong> Est., <strong>%s</strong> Cost, <strong>%s</strong> Left.";
$lang->project->checkedSummary  = " <strong>%total%</strong> Checked, <strong>%wait%</strong> Wait, <strong>%doing%</strong> Doing;    Hours: <strong>%estimate%</strong>  Est., <strong>%consumed%</strong> Cost, <strong>%left%</strong> Left.";
$lang->project->memberHoursAB   = "%s has <strong>%s</strong> Hours";
$lang->project->memberHours     = '<div class="table-col"><div class="clearfix segments"><div class="segment"><div class="segment-title">%s Working Hours</div><div class="segment-value">%s</div></div></div></div>';
$lang->project->countSummary    = '<div class="table-col"><div class="clearfix segments"><div class="segment"><div class="segment-title">Tasks</div><div class="segment-value">%s</div></div><div class="segment"><div class="segment-title">Doing</div><div class="segment-value"><span class="label label-dot label-primary"></span> %s</div></div><div class="segment"><div class="segment-title">Wait</div><div class="segment-value"><span class="label label-dot label-primary muted"></span> %s</div></div></div></div>';
$lang->project->timeSummary     = '<div class="table-col"><div class="clearfix segments"><div class="segment"><div class="segment-title">Est.</div><div class="segment-value">%s</div></div><div class="segment"><div class="segment-title">Cost</div><div class="segment-value text-red">%s</div></div><div class="segment"><div class="segment-title">Left</div><div class="segment-value">%s</div></div></div></div>';
$lang->project->groupSummaryAB  = "<div>Tasks <strong>%s</strong></div><div><span class='text-muted'>Wait</span> %s &nbsp; <span class='text-muted'>Doing</span> %s</div><div>Est. <strong>%s</strong></div><div><span class='text-muted'>Cost</span> %s &nbsp; <span class='text-muted'>Left</span> %s</div>";
$lang->project->wbs             = "Decompose Tasks";
$lang->project->batchWBS        = "Batch Decompose";
$lang->project->howToUpdateBurn = "<a href='http://api.zentao.net/goto.php?item=burndown&lang=zh-cn' target='_blank' title='How to Update the Burndown Chart?' class='btn btn-link'>Help <i class='icon icon-help'></i></a>";
$lang->project->whyNoStories    = "No Story can be linked. Please check whether there is Story in {$lang->projectCommon} linked {$lang->productCommon} and make sure it has been reviewed.";
$lang->project->productStories  = "{$lang->projectCommon} linked  story is the subeset of {$lang->productCommon}, which can only be linked after review. Please <a href='%s'> Link Story</a>。";
$lang->project->haveDraft       = "There are %s draft stories can't be linked.";
$lang->project->doneProjects    = 'Done';
$lang->project->selectDept      = 'Select Department';
$lang->project->selectDeptTitle = 'Select Department';
$lang->project->copyTeam        = 'Copy Team';
$lang->project->copyFromTeam    = "Copy from {$lang->projectCommon} Team: <strong>%s</strong>";
$lang->project->noMatched       = "No $lang->projectCommon including '%s'can be found.";
$lang->project->copyTitle       = "Choose a {$lang->projectCommon} to copy.";
$lang->project->copyTeamTitle   = "Choose {$lang->projectCommon}Team to copy.";
$lang->project->copyNoProject   = "No {$lang->projectCommon} can be copied.";
$lang->project->copyFromProject = "Copy from {$lang->projectCommon} <strong>%s</strong>";
$lang->project->cancelCopy      = 'Cancel Copy';
$lang->project->byPeriod        = 'By Time';
$lang->project->byUser          = 'By User';
$lang->project->noProject       = 'No projects. ';
$lang->project->noMembers       = 'No members. ';

$lang->project->confirmDelete         = "Do you want to delete {$lang->projectCommon}[%s]?";
$lang->project->confirmUnlinkMember   = "Do you want to unlink this User from {$lang->projectCommon}?";
$lang->project->confirmUnlinkStory    = "Do you want to unlink this Story from {$lang->projectCommon}?";
$lang->project->errorNoLinkedProducts = "No linked {$lang->productCommon} found in {$lang->projectCommon}. You will be directed to {$lang->productCommon}linked page.";
$lang->project->errorSameProducts     = "{$lang->projectCommon} cannot be linked with multiple identical {$lang->productCommon}。";
$lang->project->accessDenied          = "Access to {$lang->projectCommon} is denied!";
$lang->project->tips                  = 'Note';
$lang->project->afterInfo             = "{$lang->projectCommon} is created. Next you can ";
$lang->project->setTeam               = 'Set Team';
$lang->project->linkStory             = 'Link Story';
$lang->project->createTask            = 'Create Task';
$lang->project->goback                = "Return";
$lang->project->noweekend             = 'Without Weekend';
$lang->project->withweekend           = 'With Weekend';
$lang->project->interval              = 'Intervals';
$lang->project->fixFirstWithLeft      = 'Modify the left';

$lang->project->charts = new stdclass();
$lang->project->charts->burn = new stdclass();
$lang->project->charts->burn->graph = new stdclass();
$lang->project->charts->burn->graph->caption      = "Burndown";
$lang->project->charts->burn->graph->xAxisName    = "Date";
$lang->project->charts->burn->graph->yAxisName    = "Hour";
$lang->project->charts->burn->graph->baseFontSize = 12;
$lang->project->charts->burn->graph->formatNumber = 0;
$lang->project->charts->burn->graph->animation    = 0;
$lang->project->charts->burn->graph->rotateNames  = 1;
$lang->project->charts->burn->graph->showValues   = 0;
$lang->project->charts->burn->graph->reference    = 'Reference';
$lang->project->charts->burn->graph->actuality    = 'Actuality';

$lang->project->placeholder = new stdclass();
$lang->project->placeholder->code      = 'Abbreviation of project name';
$lang->project->placeholder->totalLeft = 'Estimates at the beginning of the Project.';

$lang->project->selectGroup = new stdclass();
$lang->project->selectGroup->done = '(Done)';

$lang->project->orderList['order_asc']  = "Order Asc";
$lang->project->orderList['order_desc'] = "Order Desc";
$lang->project->orderList['pri_asc']    = "Priority Asc";
$lang->project->orderList['pri_desc']   = "Priority Desc";
$lang->project->orderList['stage_asc']  = "Phase Asc";
$lang->project->orderList['stage_desc'] = "Phase Desc";

$lang->project->kanban        = "Kanban";
$lang->project->kanbanSetting = "Kanban Setting";
$lang->project->resetKanban   = "Reset Setting";
$lang->project->printKanban   = "Print Kanban";
$lang->project->bugList       = "Bugs";

$lang->project->kanbanHideCols   = 'Hide closed and canceled columns in Kanban';
$lang->project->kanbanShowOption = 'Unfold';
$lang->project->kanbanColsColor  = 'Custom column color';

$lang->kanbanSetting = new stdclass();
$lang->kanbanSetting->noticeReset     = 'Do you want to restore the default setting of Kanban?';
$lang->kanbanSetting->optionList['0'] = 'Hide';
$lang->kanbanSetting->optionList['1'] = 'Show';

$lang->printKanban = new stdclass();
$lang->printKanban->common  = 'Print Kanban';
$lang->printKanban->content = 'Content';
$lang->printKanban->print   = 'Print';

$lang->printKanban->taskStatus = 'Status';

$lang->printKanban->typeList['all']       = 'All';
$lang->printKanban->typeList['increment'] = 'Increment';

$lang->project->featureBar['task']['all']          = $lang->project->allTasks;
$lang->project->featureBar['task']['unclosed']     = $lang->project->unclosed;
$lang->project->featureBar['task']['assignedtome'] = $lang->project->assignedToMe;
$lang->project->featureBar['task']['myinvolved']   = $lang->project->myInvolved;
$lang->project->featureBar['task']['delayed']      = 'Delayed';
$lang->project->featureBar['task']['needconfirm']  = 'StoryChanged';
$lang->project->featureBar['task']['status']       = $lang->project->statusSelects[''];

$lang->project->treeLevel = array();
$lang->project->treeLevel['all']   = 'Expand All';
$lang->project->treeLevel['root']  = 'Collapse All';
$lang->project->treeLevel['story'] = 'Show Story';
$lang->project->treeLevel['task']  = 'Show Task';

global $config;
if($config->global->flow == 'onlyTask')
{
    unset($lang->project->groups['story']);
    unset($lang->project->featureBar['task']['needconfirm']);
}
/* qa */
$lang->qa->common = 'QA';
$lang->qa->index  = 'QA Home';
/* release */
$lang->release->common           = 'Release';
$lang->release->create           = "Create Release";
$lang->release->edit             = "Edit";
$lang->release->linkStory        = "Link Story";
$lang->release->linkBug          = "Link Bug";
$lang->release->delete           = "Delete";
$lang->release->deleted          = 'Deleted';
$lang->release->view             = "Overview";
$lang->release->browse           = "Browse";
$lang->release->changeStatus     = "Change Status";
$lang->release->batchUnlink      = "Batch Unlink";
$lang->release->batchUnlinkStory = "Batch Unlink Story";
$lang->release->batchUnlinkBug   = "Batch Unlink";

$lang->release->confirmDelete      = "Do you want to delete this Release?";
$lang->release->confirmUnlinkStory = "Do you want to remove this Story?";
$lang->release->confirmUnlinkBug   = "Do you want to remove this Bug?";
$lang->release->existBuild         = '『Build』『%s』existed. You could change『name』or choose a『build』.';
$lang->release->noRelease          = 'No releases. ';

$lang->release->basicInfo = 'Basic Info';

$lang->release->id            = 'ID';
$lang->release->product       = $lang->productCommon;
$lang->release->branch        = 'Platform/Branch';
$lang->release->build         = 'Build';
$lang->release->name          = 'Name';
$lang->release->marker        = 'Milestone';
$lang->release->date          = 'Date';
$lang->release->desc          = 'Description';
$lang->release->status        = 'Status';
$lang->release->last          = 'Last Release';
$lang->release->unlinkStory   = 'Unlink Story';
$lang->release->unlinkBug     = 'Unlink Bug';
$lang->release->stories       = 'Finished Story';
$lang->release->bugs          = 'Solved Bug';
$lang->release->leftBugs      = 'Remained Bug';
$lang->release->generatedBugs = 'Remained Bug';
$lang->release->finishStories = 'Finished %s Story';
$lang->release->resolvedBugs  = 'Solved %s Bug';
$lang->release->createdBugs   = 'Generated %s Bug';
$lang->release->export        = 'Export as HTML';
$lang->release->yesterday     = 'Released Yesterday';

$lang->release->filePath = 'Download : ';
$lang->release->scmPath  = 'SCM Path : ';

$lang->release->exportTypeList['all']     = 'All';
$lang->release->exportTypeList['story']   = 'Story';
$lang->release->exportTypeList['bug']     = 'Bug';
$lang->release->exportTypeList['leftbug'] = 'Unresolved Bug';

$lang->release->statusList['']          = '';
$lang->release->statusList['normal']    = 'Normal';
$lang->release->statusList['terminate'] = 'Terminate';

$lang->release->changeStatusList['normal']    = 'Activate';
$lang->release->changeStatusList['terminate'] = 'Terminate';

$lang->release->action = new stdclass();
$lang->release->action->changestatus = array('main' => '$date, 由 <strong>$actor</strong> $extra。', 'extra' => 'changeStatusList');
/* report */
$lang->report->common     = 'Report';
$lang->report->index      = 'Home';
$lang->report->list       = 'Report List';
$lang->report->item       = 'Item';
$lang->report->value      = 'Value';
$lang->report->percent    = '%';
$lang->report->undefined  = 'Undefined';
$lang->report->query      = 'Query';

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

$lang->report->assign['noassign'] = 'Not assigned';
$lang->report->assign['assign'] = 'Assigned';

$lang->report->singleColor[] = 'F6BD0F';

$lang->report->projectDeviation = $lang->projectCommon . ' Deviation';
$lang->report->productSummary   = $lang->productCommon . ' Summary';
$lang->report->bugCreate        = 'Bug Reported';
$lang->report->bugAssign        = 'Bug Assigned';
$lang->report->workload         = 'Team Workload ';
$lang->report->workloadAB       = 'Workload';
$lang->report->bugOpenedDate    = 'Bug reported from';
$lang->report->taskAssignedDate = 'From';
$lang->report->beginAndEnd      = ' : from';
$lang->report->dept             = 'Dept';
$lang->report->deviationChart   = $lang->projectCommon . ' Deviation Chart';

$lang->reportList->project->lists[10] = $lang->projectCommon . ' Deviation|report|projectdeviation';
$lang->reportList->product->lists[10] = $lang->productCommon . ' Summary|report|productsummary';
$lang->reportList->test->lists[10]    = 'Bugs Reported|report|bugcreate';
$lang->reportList->test->lists[13]    = 'Bugs Assigned|report|bugassign';
$lang->reportList->staff->lists[10]   = 'Team Workload|report|workload';

$lang->report->id            = 'ID';
$lang->report->project       = $lang->projectCommon;
$lang->report->product       = $lang->productCommon;
$lang->report->user          = 'Name';
$lang->report->bugTotal      = 'Bug';
$lang->report->task          = 'Task';
$lang->report->estimate      = 'Est.(h)';
$lang->report->consumed      = 'Cost';
$lang->report->remain        = 'Left';
$lang->report->deviation     = 'Deviation';
$lang->report->deviationRate = 'Deviation Rate';
$lang->report->total         = 'Total';
$lang->report->to            = 'to';
$lang->report->taskTotal     = "Total Tasks";
$lang->report->manhourTotal  = "Total Hours";
$lang->report->validRate     = "Valid Rate";
$lang->report->validRateTips = "Solution is fixed/postponed or status is resolved/closed.";
$lang->report->unplanned     = 'Unplanned';
$lang->report->workday       = 'Hours/Day';
$lang->report->diffDays      = 'Man-Day';

$lang->report->typeList['']     = 'Default';
$lang->report->typeList['pie']  = 'Pie';
$lang->report->typeList['bar']  = 'Bar';
$lang->report->typeList['line'] = 'Line';

$lang->report->conditions    = 'Filter by:';
$lang->report->closedProduct = 'Closed ' . $lang->productCommon;
$lang->report->overduePlan   = 'Expired Plan';

$lang->report->idAB  = 'ID';
$lang->report->bugTitle     = 'Bug Name';
$lang->report->taskName     = 'Task Name';
$lang->report->todoName     = 'Todo Name';
$lang->report->testTaskName = 'TestTask Name';
$lang->report->deadline     = 'Deadline';

$lang->report->mailTitle           = new stdclass();
$lang->report->mailTitle->begin    = 'Notice: You have';
$lang->report->mailTitle->bug      = " Bug (%s),";
$lang->report->mailTitle->task     = " Task (%s),";
$lang->report->mailTitle->todo     = " Todo (%s),";
$lang->report->mailTitle->testTask = " Test Task (%s),";

$lang->report->proVersion   = '<a href="http://api.zentao.net/goto.php?item=proversion&from=reportpage" target="_blank">Try ZenTao Pro for more!</a>';
$lang->report->proVersionEn = '<a href="http://api.zentao.pm/goto.php?item=proversion&from=reportpage" target="_blank">Try ZenTao Pro for more!</a>';
/* score */
$lang->score->common       = 'My Score';
$lang->score->record       = 'Score Record';
$lang->score->current      = 'Current Score';
$lang->score->level        = 'Level Score';
$lang->score->reset        = 'Reset';
$lang->score->tips         = 'Yesterday added score: <strong>%d</strong><br/>Total score: <strong>%d</strong>';
$lang->score->resetTips    = 'It will take a long time. <strong>Do not close the window.</strong>';
$lang->score->resetStart   = 'Start';
$lang->score->resetLoading = 'Processing: ';
$lang->score->resetFinish  = 'Finished';

$lang->score->id      = 'ID';
$lang->score->userID  = 'UserID';
$lang->score->account = 'User';
$lang->score->module  = 'Module';
$lang->score->method  = 'Method';
$lang->score->before  = 'Before';
$lang->score->score   = 'Score';
$lang->score->after   = 'After';
$lang->score->time    = 'Time';
$lang->score->desc    = 'Description';
$lang->score->noLimit = 'No limited';
$lang->score->times   = 'Times';
$lang->score->hour    = 'Hour';

$lang->score->modules['task']        = 'Task';
$lang->score->modules['tutorial']    = 'Tutorial';
$lang->score->modules['user']        = 'User';
$lang->score->modules['ajax']        = 'Other';
$lang->score->modules['doc']         = 'Doc';
$lang->score->modules['todo']        = 'Todo';
$lang->score->modules['story']       = 'Story';
$lang->score->modules['bug']         = 'Bug';
$lang->score->modules['testcase']    = 'TestCase';
$lang->score->modules['testtask']    = 'TestTask';
$lang->score->modules['build']       = 'Build';
$lang->score->modules['project']     = 'Project';
$lang->score->modules['productplan'] = 'Plan';
$lang->score->modules['release']     = 'Release';
$lang->score->modules['block']       = 'Block';
$lang->score->modules['search']      = 'Search';

$lang->score->methods['task']['create']              = 'Create task';
$lang->score->methods['task']['close']               = 'Close task';
$lang->score->methods['task']['finish']              = 'Finish task';
$lang->score->methods['tutorial']['finish']          = 'Finish tutorial';
$lang->score->methods['user']['login']               = 'Login';
$lang->score->methods['user']['changePassword']      = 'Change password';
$lang->score->methods['user']['editProfile']         = 'Edit profile';
$lang->score->methods['ajax']['selectTheme']         = 'Change theme';
$lang->score->methods['ajax']['selectLang']          = 'Change lang';
$lang->score->methods['ajax']['showSearchMenu']      = 'Advanced search';
$lang->score->methods['ajax']['customMenu']          = 'Custom menu';
$lang->score->methods['ajax']['dragSelected']        = 'Drag selected';
$lang->score->methods['ajax']['lastNext']            = 'Page turned';
$lang->score->methods['ajax']['switchToDataTable']   = 'Switch dataTable';
$lang->score->methods['ajax']['submitPage']          = 'Change page number';
$lang->score->methods['ajax']['quickJump']           = 'Quick jump';
$lang->score->methods['ajax']['batchCreate']         = 'Batch create';
$lang->score->methods['ajax']['batchEdit']           = 'Batch update';
$lang->score->methods['ajax']['batchOther']          = 'Batch other';
$lang->score->methods['doc']['create']               = 'Create doc';
$lang->score->methods['todo']['create']              = 'Create todo';
$lang->score->methods['story']['create']             = 'Create story';
$lang->score->methods['story']['close']              = 'Close story';
$lang->score->methods['bug']['create']               = 'Create bug';
$lang->score->methods['bug']['confirmBug']           = 'Confirm bug';
$lang->score->methods['bug']['createFormCase']       = 'Create bug form case';
$lang->score->methods['bug']['resolve']              = 'Resolve bug';
$lang->score->methods['bug']['saveTplModal']         = 'Bug save template';
$lang->score->methods['testtask']['runCase']         = 'Run test case';
$lang->score->methods['testcase']['create']          = 'Create test case';
$lang->score->methods['build']['create']             = 'Create build';
$lang->score->methods['project']['create']           = 'Create project';
$lang->score->methods['project']['close']            = 'Project finish';
$lang->score->methods['productplan']['create']       = 'Create plan';
$lang->score->methods['release']['create']           = 'Create release';
$lang->score->methods['block']['set']                = 'Custom block';
$lang->score->methods['search']['saveQuery']         = 'Save search query';
$lang->score->methods['search']['saveQueryAdvanced'] = 'Advanced search';

$lang->score->extended['user']['changePassword'] = 'Get ##strength,1## point, if password is medium. Get ##strength,2## points, if it is strong.';
$lang->score->extended['project']['close']       = 'After the project is close, project manager gets ##manager,close## point and team members get ##member,close## points. If it is done on time or earlier, project manager gets ##manager,onTime## point and team members get ##member,onTime## points.';
$lang->score->extended['bug']['resolve']         = 'After a bug is resolved, get extra points according to its severity. S1, + ##severity,3##; S2 + ##severity,2##, S3 + ##severity,1##.';
$lang->score->extended['bug']['confirmBug']      = 'After a bug is confirmed, get extra points according to its severity. S1, + ##severity,3##; S2 + ##severity,2##, S3 + ##severity,1##.';
$lang->score->extended['task']['finish']         = 'After a task is done, get extra points by round(man-hour / 10  Estimated / Consumed) + Priority point (p1 ##pri,1##, p2 ##pri,2##).';
$lang->score->extended['story']['close']         = 'After a story is closed, its creator will get extra ##createID## points.';
/* search */
$lang->search->common        = 'Search';
$lang->search->reset         = 'Reset';
$lang->search->saveQuery     = 'Save';
$lang->search->myQuery       = 'My Queries';
$lang->search->group1        = 'Group 1';
$lang->search->group2        = 'Group 2';
$lang->search->buildForm     = 'Search Form';
$lang->search->buildQuery    = 'Execute Query';
$lang->search->savedQuery     = 'Save Query';
$lang->search->deleteQuery   = 'Delete Query';
$lang->search->setQueryTitle = 'Enter the query title. Save it After searching.';
$lang->search->select        = 'Stories/Tasks Filter';
$lang->search->me            = 'Me';
$lang->search->noQuery       = 'No query saved!';
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
$lang->search->operators['include']    = 'including';
$lang->search->operators['between']    = 'between';
$lang->search->operators['notinclude'] = 'excluding';
$lang->search->operators['belong']     = 'belong to';

$lang->search->andor['and']         = 'And';
$lang->search->andor['or']          = 'Or';

$lang->search->null = 'Null';
/* sso */
$lang->sso = new stdclass();
$lang->sso->settings = 'Settings';
$lang->sso->turnon   = 'On';
$lang->sso->redirect = 'Redirect ranzhi';
$lang->sso->code     = 'Alias';
$lang->sso->key      = 'Key';
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
<p>1. Interface address is required. If use PATH_INFO, it is http://YOUR RANGER ADDRESS/sys/sso-check.html If GET, it is http://YOUR RANGER ADDRESS/sys/index.php?m=sso&f=check</p>
<p>2. Code and Key must be the same as set in Ranger.</p>
EOD;
$lang->sso->bindNotice     = 'User that is just added has no privilege. You have to ask ZenTao Admin to grant permissions to the User.';
$lang->sso->bindNoPassword = 'Password should not be empty.';
$lang->sso->bindNoUser     = 'Password is wrong/User cannot be found!';
$lang->sso->bindHasAccount = 'This username already exists. Change your username or bind to it.';
/* story */
$lang->story->create      = "Add Story";
$lang->story->batchCreate = "Batch Add";
$lang->story->change      = "Change";
$lang->story->changed     = 'Change';
$lang->story->review      = 'Review';
$lang->story->batchReview = 'Batch Review';
$lang->story->edit        = "Edit";
$lang->story->batchEdit   = "Batch Edit";
$lang->story->subdivide   = 'Decompose';
$lang->story->close       = 'Close';
$lang->story->batchClose  = 'Batch Close';
$lang->story->activate    = 'Activate';
$lang->story->delete      = "Delete";
$lang->story->view        = "Story Details";
$lang->story->setting     = "Setting";
$lang->story->tasks       = "Linked Task";
$lang->story->bugs        = "Linked Bug";
$lang->story->cases       = "Linked Case";
$lang->story->taskCount   = 'Tasks';
$lang->story->bugCount    = 'Bugs';
$lang->story->caseCount   = 'Cases';
$lang->story->taskCountAB = 'T';
$lang->story->bugCountAB  = 'B';
$lang->story->caseCountAB = 'C';
$lang->story->linkStory   = 'Link';
$lang->story->unlinkStory = 'UnLinked';
$lang->story->export      = "Export Data";
$lang->story->zeroCase    = "Stories w/o cases";
$lang->story->zeroTask    = "Display stories w/o tasks";
$lang->story->reportChart = "Report";
$lang->story->copyTitle   = "Copy Title";
$lang->story->batchChangePlan   = "Batch Change Plans";
$lang->story->batchChangeBranch = "Batch Change Branches";
$lang->story->batchChangeStage  = "Batch Change Phases";
$lang->story->batchAssignTo     = "Batch Assign";
$lang->story->batchChangeModule = "Batch Change Modules";
$lang->story->viewAll           = "All";

$lang->story->common         = 'Story';
$lang->story->id             = 'ID';
$lang->story->product        = $lang->productCommon;
$lang->story->branch         = "Branch/Platform";
$lang->story->module         = 'Module';
$lang->story->moduleAB       = 'Module';
$lang->story->source         = 'From';
$lang->story->sourceNote     = 'Note';
$lang->story->fromBug        = 'From Bug';
$lang->story->title          = 'Title';
$lang->story->spec           = 'Description';
$lang->story->verify         = 'Acceptance';
$lang->story->pri            = 'Priority';
$lang->story->estimate       = 'Est.(h)';
$lang->story->estimateAB     = 'Est.(h)';
$lang->story->hour           = 'Hour';
$lang->story->status         = 'Status';
$lang->story->stage          = 'Phase';
$lang->story->stageAB        = 'Phase';
$lang->story->mailto         = 'Mail to';
$lang->story->openedBy       = 'Creator';
$lang->story->openedDate     = 'Create on';
$lang->story->assignedTo     = 'Assignee';
$lang->story->assignedDate   = 'Assigned on';
$lang->story->lastEditedBy   = 'Last Edited';
$lang->story->lastEditedDate = 'Edited on';
$lang->story->closedBy       = 'Closed by';
$lang->story->closedDate     = 'Closed on';
$lang->story->closedReason   = 'Close Reason';
$lang->story->rejectedReason = 'Reject Reason';
$lang->story->reviewedBy     = 'Reviewer';
$lang->story->reviewedDate   = 'Reviewed on';
$lang->story->version        = 'Version';
$lang->story->plan           = 'Plan';
$lang->story->planAB         = 'Plan';
$lang->story->comment        = 'Comment';
$lang->story->linkStories    = 'Linked Story';
$lang->story->childStories   = 'Decompose Story';
$lang->story->duplicateStory = 'Copy Story';
$lang->story->reviewResult   = 'Review Result';
$lang->story->preVersion     = 'Previous Version';
$lang->story->keywords       = 'Tags';
$lang->story->newStory       = 'Continue adding';
$lang->story->colorTag       = 'Color Tag';
$lang->story->files          = 'Files';
$lang->story->copy           = "Copy Story";
$lang->story->total          = "Total Stories";
$lang->story->allStories     = 'All';
$lang->story->unclosed       = 'Unclosed';
$lang->story->deleted        = 'Deleted';

$lang->story->ditto       = 'Ditto';
$lang->story->dittoNotice = 'This Story does not belong to the same Product as the last one does!';

$lang->story->useList[0] = 'Yes';
$lang->story->useList[1] = 'No';

$lang->story->statusList['']          = '';
$lang->story->statusList['draft']     = 'Draft';
$lang->story->statusList['active']    = 'Active';
$lang->story->statusList['closed']    = 'Closed';
$lang->story->statusList['changed']   = 'Changed';

$lang->story->stageList['']           = '';
$lang->story->stageList['wait']       = 'Wait';
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
$lang->story->reasonList['done']       = 'Done';
$lang->story->reasonList['subdivided'] = 'Decomposed';
$lang->story->reasonList['duplicate']  = 'Duplicated';
$lang->story->reasonList['postponed']  = 'Postponed';
$lang->story->reasonList['willnotdo']  = "Ignore";
$lang->story->reasonList['cancel']     = 'Cancelled';
$lang->story->reasonList['bydesign']   = 'By Design';
//$lang->story->reasonList['isbug']      = 'Bug!';

$lang->story->reviewResultList['']        = '';
$lang->story->reviewResultList['pass']    = 'Pass';
$lang->story->reviewResultList['revert']  = 'Revert';
$lang->story->reviewResultList['clarify'] = 'Clarify';
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
$lang->story->sourceList['other']      = 'Other';

$lang->story->priList[]  = '';
$lang->story->priList[3] = '3';
$lang->story->priList[1] = '1';
$lang->story->priList[2] = '2';
$lang->story->priList[4] = '4';

$lang->story->legendBasicInfo      = 'Basic Info';
$lang->story->legendLifeTime       = 'Story Life ';
$lang->story->legendRelated        = 'Related Info';
$lang->story->legendMailto         = 'Mail to';
$lang->story->legendAttatch        = 'Files';
$lang->story->legendProjectAndTask = $lang->projectCommon . ' Task';
$lang->story->legendBugs           = 'Linked Bug';
$lang->story->legendFromBug        = 'From Bug';
$lang->story->legendCases          = 'Linked Case';
$lang->story->legendLinkStories    = 'Linked Story';
$lang->story->legendChildStories   = 'Decompose Story';
$lang->story->legendSpec           = 'Description';
$lang->story->legendVerify         = 'Acceptance';
$lang->story->legendMisc           = 'Misc ';

$lang->story->lblChange            = 'Change';
$lang->story->lblReview            = 'Review';
$lang->story->lblActivate          = 'Activate';
$lang->story->lblClose             = 'Close';

$lang->story->checkAffection       = 'Impact';
$lang->story->affectedProjects     = '' . $lang->projectCommon;
$lang->story->affectedBugs         = 'Bug';
$lang->story->affectedCases        = 'Case';

$lang->story->specTemplate          = "As a < type of user >, I want < some goal > so that < some reason >.";
$lang->story->needNotReview         = 'No Review';
$lang->story->successSaved          = "Story is saved!";
$lang->story->confirmDelete         = "Do you want to delete this Story?";
$lang->story->errorEmptyChildStory  = '『Subdivide Story』canot be blank.';
$lang->story->mustChooseResult      = 'Select Result';
$lang->story->mustChoosePreVersion  = 'Select the Version to revert to.';
$lang->story->noStory               = 'No stories. ';
$lang->story->failChangeStage       = 'The status of story %s is draft, that fail to change stage.';

$lang->story->form = new stdclass();
$lang->story->form->area      = 'Story Scope';
$lang->story->form->desc      = 'What Story is it? What is the acceptance criteria?';
$lang->story->form->resource  = 'Who will allocate resources? How long does it take?';
$lang->story->form->file      = 'If there are Story linked files, please click Here to upload it.';

$lang->story->action = new stdclass();
$lang->story->action->reviewed            = array('main' => '$date, recorded by <strong>$actor</strong>. The result is <strong>$extra</strong>.', 'extra' => 'reviewResultList');
$lang->story->action->closed              = array('main' => '$date, closed by <strong>$actor</strong>. The reasion is <strong>$extra</strong> $appendLink.', 'extra' => 'reasonList');
$lang->story->action->linked2plan         = array('main' => '$date, linked by <strong>$actor</strong> to Plan <strong>$extra</strong>');
$lang->story->action->unlinkedfromplan    = array('main' => '$date, unlinked by <strong>$actor</strong> from Plan <strong>$extra</strong>.');
$lang->story->action->linked2project      = array('main' => '$date, linked by <strong>$actor</strong> to ' . $lang->projectCommon . ' <strong>$extra</strong>.');
$lang->story->action->unlinkedfromproject = array('main' => '$date, unlinked by <strong>$actor</strong> from ' . $lang->projectCommon . ' <strong>$extra</strong>.');
$lang->story->action->linked2build        = array('main' => '$date, linked by <strong>$actor</strong> to Build <strong>$extra</strong>');
$lang->story->action->unlinkedfrombuild   = array('main' => '$date, unlinked by <strong>$actor</strong> from Build <strong>$extra</strong>.');
$lang->story->action->linked2release      = array('main' => '$date, linked by <strong>$actor</strong> to Release <strong>$extra</strong>');
$lang->story->action->unlinkedfromrelease = array('main' => '$date, unlinked by <strong>$actor</strong> from Release <strong>$extra</strong>.');
$lang->story->action->linkrelatedstory    = array('main' => '$date, linked by <strong>$actor</strong> to Story <strong>$extra</strong>.');
$lang->story->action->subdividestory      = array('main' => '$date, decomposed by <strong>$actor</strong> to Story <strong>$extra</strong>.');
$lang->story->action->unlinkrelatedstory  = array('main' => '$date, unlinked by <strong>$actor</strong> from Story <strong>$extra</strong>.');
$lang->story->action->unlinkchildstory    = array('main' => '$date, unlinked by <strong>$actor</strong> Decomposed Story <strong>$extra</strong>.');

$lang->story->report = new stdclass();
$lang->story->report->common = 'Report';
$lang->story->report->select = 'Group Stories by';
$lang->story->report->create = 'Generate';
$lang->story->report->value  = 'Story Count';

$lang->story->report->charts['storysPerProduct']        = 'by ' . $lang->productCommon;
$lang->story->report->charts['storysPerModule']         = 'by Module';
$lang->story->report->charts['storysPerSource']         = 'by Source';
$lang->story->report->charts['storysPerPlan']           = 'by Plan';
$lang->story->report->charts['storysPerStatus']         = 'by Status';
$lang->story->report->charts['storysPerStage']          = 'by Phase';
$lang->story->report->charts['storysPerPri']            = 'by Priority';
$lang->story->report->charts['storysPerEstimate']       = 'by Hour';
$lang->story->report->charts['storysPerOpenedBy']       = 'by CreatedBy';
$lang->story->report->charts['storysPerAssignedTo']     = 'by Assignee';
$lang->story->report->charts['storysPerClosedReason']   = 'by Closed Reason';
$lang->story->report->charts['storysPerChange']         = 'by Change times';

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
$lang->story->report->storysPerModule->item       = 'Module';
$lang->story->report->storysPerSource->item       = 'Source';
$lang->story->report->storysPerPlan->item         = 'Plan';
$lang->story->report->storysPerStatus->item       = 'Status';
$lang->story->report->storysPerStage->item        = 'Phase';
$lang->story->report->storysPerPri->item          = 'Priority';
$lang->story->report->storysPerOpenedBy->item     = 'Account';
$lang->story->report->storysPerAssignedTo->item   = 'User';
$lang->story->report->storysPerClosedReason->item = 'Reason';
$lang->story->report->storysPerEstimate->item     = 'Hour';
$lang->story->report->storysPerChange->item       = 'Change';

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
$lang->story->report->storysPerOpenedBy->graph->xAxisName     = 'Created By';
$lang->story->report->storysPerAssignedTo->graph->xAxisName   = 'Assigned To';
$lang->story->report->storysPerClosedReason->graph->xAxisName = 'Closed Reason';
$lang->story->report->storysPerEstimate->graph->xAxisName     = 'Hour ';
$lang->story->report->storysPerChange->graph->xAxisName       = 'Change';

$lang->story->placeholder = new stdclass();
$lang->story->placeholder->estimate = $lang->story->hour;

$lang->story->chosen = new stdClass();
$lang->story->chosen->reviewedBy = 'Choose Reviewer';

$lang->story->notice = new stdClass();
$lang->story->notice->closed = 'Stories you selected have already been closed!';
/* svn */
$lang->svn = new stdclass();
$lang->svn->common  = 'Subversion';
$lang->svn->cat     = 'View Code';
$lang->svn->diff    = 'Diff Code';
$lang->svn->apiSync = 'API: Sync svn log';
/* task */
$lang->task->index               = "Index";
$lang->task->create              = "Create Task";
$lang->task->batchCreate         = "Batch Create";
$lang->task->batchCreateChildren = "Batch Create Children";
$lang->task->batchEdit           = "Batch Edit";
$lang->task->batchChangeModule   = "Batch Change Module";
$lang->task->batchClose          = "Batch Close";
$lang->task->batchCancel         = "Batch Cancel";
$lang->task->edit                = "Edit";
$lang->task->delete              = "Delete";
$lang->task->deleted             = "Deleted";
$lang->task->delayed             = 'Delayed';
$lang->task->view                = "Overview";
$lang->task->logEfforts          = "Hour";
$lang->task->record              = "Est.";
$lang->task->start               = "Start";
$lang->task->restart             = "Continue";
$lang->task->finish              = "Finish";
$lang->task->pause               = "Pause";
$lang->task->close               = "Close";
$lang->task->cancel              = "Cancel";
$lang->task->activate            = "Activate";
$lang->task->export              = "Export Data";
$lang->task->reportChart         = "Report Chart";
$lang->task->fromBug             = 'From Bug';
$lang->task->case                = 'Related Case';
$lang->task->confirmStoryChange  = "Confirm Story Change";
$lang->task->progress            = 'Progress';
$lang->task->progressTips        = 'Cost/(Cost+Left)';
$lang->task->copy                = 'Duplicate Task';

$lang->task->common            = 'Task';
$lang->task->id                = 'ID';
$lang->task->project           = $lang->projectCommon;
$lang->task->module            = 'Module';
$lang->task->moduleAB          = 'Module';
$lang->task->story             = 'Story';
$lang->task->storyAB           = 'Story';
$lang->task->storySpec         = 'Story Description';
$lang->task->storyVerify       = 'Acceptance Criteria';
$lang->task->name              = 'Name';
$lang->task->type              = 'Type';
$lang->task->pri               = 'Priority';
$lang->task->mailto            = 'Mail to';
$lang->task->estimate          = 'Est.(h)';
$lang->task->estimateAB        = 'Est.(h)';
$lang->task->left              = 'Left';
$lang->task->leftAB            = 'Left';
$lang->task->consumed          = 'Cost';
$lang->task->myConsumed        = 'My Cost';
$lang->task->consumedAB        = 'Cost';
$lang->task->hour              = 'Hour';
$lang->task->consumedThisTime  = 'Hour';
$lang->task->leftThisTime      = 'Left';
$lang->task->datePlan          = 'Plan';
$lang->task->estStarted        = 'Estimate Start';
$lang->task->realStarted       = 'Actual Start';
$lang->task->date              = 'Date';
$lang->task->deadline          = 'Deadline';
$lang->task->deadlineAB        = 'Deadline';
$lang->task->status            = 'Status';
$lang->task->desc              = 'Description';
$lang->task->assign            = 'Assign';
$lang->task->assignTo          = $lang->task->assign;
$lang->task->batchAssignTo     = 'Batch Assign';
$lang->task->assignedTo        = 'Assignee';
$lang->task->assignedToAB      = 'Assignee';
$lang->task->assignedDate      = 'Assign on';
$lang->task->openedBy          = 'Created by';
$lang->task->openedDate        = 'Created on';
$lang->task->openedDateAB      = 'Add';
$lang->task->finishedBy        = 'Finished';
$lang->task->finishedByAB      = 'Finished';
$lang->task->finishedDate      = 'Finished on';
$lang->task->finishedDateAB    = 'Finished on';
$lang->task->canceledBy        = 'Cancelled by';
$lang->task->canceledDate      = 'Cancelled on';
$lang->task->closedBy          = 'Closed by';
$lang->task->closedDate        = 'Close Date';
$lang->task->closedReason      = 'Cancel Reason';
$lang->task->lastEditedBy      = 'Edited by';
$lang->task->lastEditedDate    = 'Edited on';
$lang->task->lastEdited        = 'Last Edited';
$lang->task->recordEstimate    = 'Make Progress';
$lang->task->editEstimate      = 'Edit Est.';
$lang->task->deleteEstimate    = 'Delete Est.';
$lang->task->colorTag          = 'Color Tag';
$lang->task->files             = 'Files';
$lang->task->hasConsumed       = 'Cost';
$lang->task->multiple          = 'Multiple Tasks';
$lang->task->multipleAB        = ' Multiple';
$lang->task->team              = 'Team';
$lang->task->transfer          = 'Transfer';
$lang->task->transferTo        = 'Transfer To';
$lang->task->children          = 'Child Task';
$lang->task->childrenAB        = 'Child';
$lang->task->parent            = 'Parent Task';
$lang->task->parentAB          = 'Parent Task';
$lang->task->lblPri            = 'P';
$lang->task->lblHour           = '(h)';

$lang->task->ditto             = 'Ditto';
$lang->task->dittoNotice       = "This Task does not belong to the Project as the previous one does!";
$lang->task->selectAllUser     = 'All';
$lang->task->noStory           = 'No Story';
$lang->task->noAssigned        = 'Unassigned';
$lang->task->noFinished        = 'Unfinished';
$lang->task->noClosed          = 'Unclosed';
$lang->task->yesterdayFinished = 'Finished Yesterday';
$lang->task->allTasks          = 'All Tasks';

$lang->task->statusList['']        = '';
$lang->task->statusList['wait']    = 'Wait';
$lang->task->statusList['doing']   = 'Doing';
$lang->task->statusList['done']    = 'Done';
$lang->task->statusList['pause']   = 'Paused';
$lang->task->statusList['cancel']  = 'Cancelled';
$lang->task->statusList['closed']  = 'Closed';

$lang->task->typeList['']        = '';
$lang->task->typeList['design']  = 'Design';
$lang->task->typeList['devel']   = 'Develop';
$lang->task->typeList['test']    = 'Testing';
$lang->task->typeList['study']   = 'Study';
$lang->task->typeList['discuss'] = 'Discuss';
$lang->task->typeList['ui']      = 'UI';
$lang->task->typeList['affair']  = 'Work';
$lang->task->typeList['misc']    = 'Misc';

$lang->task->priList[0]  = '';
$lang->task->priList[3]  = '3';
$lang->task->priList[1]  = '1';
$lang->task->priList[2]  = '2';
$lang->task->priList[4]  = '4';

$lang->task->reasonList['']       = '';
$lang->task->reasonList['done']   = 'Done';
$lang->task->reasonList['cancel'] = 'Cancelled';

$lang->task->afterChoices['continueAdding'] = ' Continue adding Tasks';
$lang->task->afterChoices['toTaskList']     = 'Back to Task List';
$lang->task->afterChoices['toStoryList']    = 'Back to Story List';

$lang->task->legendBasic  = 'Basic Info';
$lang->task->legendEffort = 'Effort';
$lang->task->legendLife   = 'Task Life';
$lang->task->legendDesc   = 'Task Description';

$lang->task->confirmDelete         = "Do you want to delete this Task?";
$lang->task->confirmDeleteEstimate = "Do you want to delete it?";
$lang->task->copyStoryTitle        = "Copy Story";
$lang->task->afterSubmit           = "After Created,";
$lang->task->successSaved          = "Created!";
$lang->task->delayWarning          = " <strong class='text-danger'> Delay %s days </strong>";
$lang->task->remindBug             = "This Task is converted from a Bug. Do you want to update the Bug:%s?";
$lang->task->confirmChangeProject  = "If you change {$lang->projectCommon}, the related Module, Story and Assignor will be changed. Do you want to do it?";
$lang->task->confirmFinish         = '"Left Hour" is 0. Do you want to change the Status to "Done"?';
$lang->task->confirmRecord         = '"Left Hour" is 0. Do you want to set Task as "Done"?';
$lang->task->confirmTransfer       = '"Left Hour" is 0，Do you want to transfer task?';
$lang->task->noticeLinkStory       = "No story has been linked. You can %s for this project, then %s.";
$lang->task->noticeSaveRecord      = 'Your Hour is not saved. Please save it first.';
$lang->task->commentActions        = '%s. %s, commented by <strong>%s</strong>.';
$lang->task->deniedNotice          = 'Only the %s can %s the task.';
$lang->task->noTask                = 'No tasks. ';
$lang->task->createDenied          = 'Create task is denied in this project';

$lang->task->error = new stdclass();
$lang->task->error->consumedNumber   = '"Consumed" must be numbers.';
$lang->task->error->estimateNumber   = '"Hour" must be numbers.';
$lang->task->error->consumedSmall    = '"Consumed" must larger than before.';
$lang->task->error->consumedThisTime = 'Please enter "Hour"';
$lang->task->error->left             = 'Please enter "Left Hour"';
$lang->task->error->work             = '"Remark" must be less than %d characteres.';
$lang->task->error->skipClose        = 'Task: %s is not “Done” or “Cancelled”. Do you want to close it?';
$lang->task->error->consumed         = 'Task: %s Hour must be more than 0. Ignore changes to this Task.';
$lang->task->error->assignedTo       = 'Multiple task in the current state cannot be assigned to member who outside the task team.';

$lang->task->report = new stdclass();
$lang->task->report->common = 'Report';
$lang->task->report->select = 'Group Tasks by';
$lang->task->report->create = 'Create';
$lang->task->report->value  = 'Task Count';

$lang->task->report->charts['tasksPerProject']      = 'by ' . $lang->projectCommon;
$lang->task->report->charts['tasksPerModule']       = 'by Module';
$lang->task->report->charts['tasksPerAssignedTo']   = 'by Assignee';
$lang->task->report->charts['tasksPerType']         = 'by Category';
$lang->task->report->charts['tasksPerPri']          = 'by Priority';
$lang->task->report->charts['tasksPerStatus']       = 'by Status';
$lang->task->report->charts['tasksPerDeadline']     = 'by Deadline';
$lang->task->report->charts['tasksPerEstimate']     = 'by Hour';
$lang->task->report->charts['tasksPerLeft']         = 'by Left Hour';
$lang->task->report->charts['tasksPerConsumed']     = 'by Cost Hour';
$lang->task->report->charts['tasksPerFinishedBy']   = 'by FinishedBy';
$lang->task->report->charts['tasksPerClosedReason'] = 'by Close Reason';
$lang->task->report->charts['finishedTasksPerDay']  = 'by Finished/Day';

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
$lang->task->report->tasksPerModule->item       = 'Module';
$lang->task->report->tasksPerAssignedTo->item   = 'Account';
$lang->task->report->tasksPerType->item         = 'Type';
$lang->task->report->tasksPerPri->item          = 'Priority';
$lang->task->report->tasksPerStatus->item       = 'Status';
$lang->task->report->tasksPerDeadline->item     = 'Date';
$lang->task->report->tasksPerEstimate->item     = 'Hour';
$lang->task->report->tasksPerLeft->item         = 'Left';
$lang->task->report->tasksPerConsumed->item     = 'Cost';
$lang->task->report->tasksPerFinishedBy->item   = 'User';
$lang->task->report->tasksPerClosedReason->item = 'Reason';
$lang->task->report->finishedTasksPerDay->item  = 'Date';

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
$lang->task->report->tasksPerModule->graph->xAxisName       = 'Module';
$lang->task->report->tasksPerAssignedTo->graph->xAxisName   = 'User';
$lang->task->report->tasksPerType->graph->xAxisName         = 'Type';
$lang->task->report->tasksPerPri->graph->xAxisName          = 'Priority';
$lang->task->report->tasksPerStatus->graph->xAxisName       = 'Status';
$lang->task->report->tasksPerDeadline->graph->xAxisName     = 'Date';
$lang->task->report->tasksPerEstimate->graph->xAxisName     = 'Hour';
$lang->task->report->tasksPerLeft->graph->xAxisName         = 'Left';
$lang->task->report->tasksPerConsumed->graph->xAxisName     = 'Cost';
$lang->task->report->tasksPerFinishedBy->graph->xAxisName   = 'User';
$lang->task->report->tasksPerClosedReason->graph->xAxisName = 'Close Reason';

$lang->task->report->finishedTasksPerDay->type               = 'bar';
$lang->task->report->finishedTasksPerDay->graph->xAxisName   = 'Date';
/* testcase */
$lang->testcase->id               = 'ID';
$lang->testcase->product          = $lang->productCommon;
$lang->testcase->module           = 'Module';
$lang->testcase->lib              = "Library";
$lang->testcase->branch           = "Branch/Platform";
$lang->testcase->moduleAB         = 'Module';
$lang->testcase->story            = 'Story';
$lang->testcase->title            = 'Title';
$lang->testcase->precondition     = 'Prerequisite';
$lang->testcase->pri              = 'Priority';
$lang->testcase->type             = 'Type';
$lang->testcase->status           = 'Status';
$lang->testcase->steps            = 'Steps';
$lang->testcase->openedBy         = 'Created by';
$lang->testcase->openedDate       = 'Created on';
$lang->testcase->lastEditedBy     = 'Edited by';
$lang->testcase->result           = 'Result';
$lang->testcase->real             = 'Details';
$lang->testcase->keywords         = 'Tags';
$lang->testcase->files            = 'Files';
$lang->testcase->linkCase         = 'Linked Cases';
$lang->testcase->linkCases        = 'Link Cases';
$lang->testcase->unlinkCase       = 'Unlink Cases';
$lang->testcase->stage            = 'Phase';
$lang->testcase->reviewedBy       = 'Reviewed by';
$lang->testcase->reviewedDate     = 'Reviewed on';
$lang->testcase->reviewResult     = 'Review Result';
$lang->testcase->reviewedByAB     = 'By';
$lang->testcase->reviewedDateAB   = 'Date';
$lang->testcase->reviewResultAB   = 'Result';
$lang->testcase->forceNotReview   = 'No Review';
$lang->testcase->lastEditedByAB   = 'Edited by';
$lang->testcase->lastEditedDateAB = 'Edited on';
$lang->testcase->lastEditedDate   = 'Edited on';
$lang->testcase->version          = 'Case Version';
$lang->testcase->lastRunner       = 'LastRun';
$lang->testcase->lastRunDate      = 'Time';
$lang->testcase->assignedTo       = 'To';
$lang->testcase->colorTag         = 'Color Tag';
$lang->testcase->lastRunResult    = 'Result';
$lang->testcase->desc             = 'Step';
$lang->testcase->expect           = 'Expect';
$lang->testcase->allProduct       = "All {$lang->productCommon}";
$lang->testcase->fromBug          = 'From Bug';
$lang->testcase->toBug            = 'To Bug';
$lang->testcase->changed          = 'Changed';
$lang->testcase->bugs             = 'Bugs Generated';
$lang->testcase->bugsAB           = 'B';
$lang->testcase->results          = 'Results';
$lang->testcase->resultsAB        = 'R';
$lang->testcase->stepNumber       = 'Number of steps';
$lang->testcase->stepNumberAB     = 'S';
$lang->testcase->createBug        = 'Convert to Bug';
$lang->testcase->fromModule       = 'Source Module';
$lang->case = $lang->testcase;  // For dao checking using. Because 'case' is a php keywords, so the module name is testcase, table name is still case.

$lang->testcase->stepID      = 'ID';
$lang->testcase->stepDesc    = 'Step';
$lang->testcase->stepExpect  = 'Expect';
$lang->testcase->stepVersion = 'Version';

$lang->testcase->common                  = 'Case';
$lang->testcase->index                   = "Home";
$lang->testcase->create                  = "Add Case";
$lang->testcase->batchCreate             = "Batch Add";
$lang->testcase->delete                  = "Delete";
$lang->testcase->view                    = "Overview";
$lang->testcase->review                  = "Review";
$lang->testcase->batchReview             = "Batch Review";
$lang->testcase->edit                    = "Edit";
$lang->testcase->batchEdit               = "Batch Edit ";
$lang->testcase->batchChangeModule       = "Batch Change Module";
$lang->testcase->batchChangeBranch       = "Batch Change Branch";
$lang->testcase->delete                  = "Delete";
$lang->testcase->batchDelete             = "Batch Delete ";
$lang->testcase->batchConfirmStoryChange = "Batch Confirm";
$lang->testcase->batchCaseTypeChange     = "Batch Change Type";
$lang->testcase->browse                  = "Cases";
$lang->testcase->groupCase               = "By Group";
$lang->testcase->import                  = "Import";
$lang->testcase->importFile              = "Import CSV";
$lang->testcase->importFromLib           = "Import From Library";
$lang->testcase->showImport              = "Show Import";
$lang->testcase->exportTemplet           = "Export Template";
$lang->testcase->export                  = "Export Data";
$lang->testcase->reportChart             = 'Report Chart';
$lang->testcase->confirmChange           = 'Confirm Case Change';
$lang->testcase->confirmStoryChange      = 'Confirm Story Change';
$lang->testcase->copy                    = 'Duplicate Case';
$lang->testcase->group                   = 'Group';
$lang->testcase->groupName               = 'Group Name';
$lang->testcase->step                    = 'Step';
$lang->testcase->stepChild               = 'Child';
$lang->testcase->viewAll                 = 'View All';

$lang->testcase->new = 'New';

$lang->testcase->num = 'Cases:';

$lang->testcase->deleteStep   = 'Delete';
$lang->testcase->insertBefore = 'Inserted Before';
$lang->testcase->insertAfter  = 'Inserted After';

$lang->testcase->assignToMe   = 'Assigned To Me';
$lang->testcase->openedByMe   = 'Created By Me';
$lang->testcase->allCases     = 'All';
$lang->testcase->allTestcases = 'All Cases';
$lang->testcase->needConfirm  = 'Story Changed';
$lang->testcase->bySearch     = 'Search';
$lang->testcase->unexecuted   = 'Wait';

$lang->testcase->lblStory       = 'Story';
$lang->testcase->lblLastEdited  = 'Last Edit';
$lang->testcase->lblTypeValue   = 'Type List';
$lang->testcase->lblStageValue  = 'Stage List';
$lang->testcase->lblStatusValue = 'Status List';

$lang->testcase->legendBasicInfo    = 'Basic Info';
$lang->testcase->legendAttatch      = 'File';
$lang->testcase->legendLinkBugs     = 'Bug';
$lang->testcase->legendOpenAndEdit  = 'Create/Edit';
$lang->testcase->legendComment      = 'Remark';

$lang->testcase->summary            = "Cases on this page : <strong>%s</strong> Total, <strong>%s</strong> runed.";
$lang->testcase->confirmDelete      = 'Do you want to delete this Test Case?';
$lang->testcase->confirmBatchDelete = 'Do you want to batch delete these Test Cases?';
$lang->testcase->ditto              = 'Ditto';
$lang->testcase->dittoNotice        = 'This Case does not belong to the Product as the previous one!';

$lang->testcase->reviewList[0] = 'NO';
$lang->testcase->reviewList[1] = 'YES';

$lang->testcase->priList[3] = 3;
$lang->testcase->priList[1] = 1;
$lang->testcase->priList[2] = 2;
$lang->testcase->priList[4] = 4;

$lang->testcase->typeList['']            = '';
$lang->testcase->typeList['feature']     = 'Feature';
$lang->testcase->typeList['performance'] = 'Performance';
$lang->testcase->typeList['config']      = 'Config';
$lang->testcase->typeList['install']     = 'Install';
$lang->testcase->typeList['security']    = 'Security';
$lang->testcase->typeList['interface']   = 'Interface';
$lang->testcase->typeList['other']       = 'Other';

$lang->testcase->stageList['']           = '';
$lang->testcase->stageList['unittest']   = 'Unit Test';
$lang->testcase->stageList['feature']    = 'Function Test';
$lang->testcase->stageList['intergrate'] = 'Integration Test';
$lang->testcase->stageList['system']     = 'System Test';
$lang->testcase->stageList['smoke']      = 'Smoking Test';
$lang->testcase->stageList['bvt']        = 'BVT Test';

$lang->testcase->reviewResultList['']        = '';
$lang->testcase->reviewResultList['pass']    = 'Pass';
$lang->testcase->reviewResultList['clarify'] = 'Clarify';

$lang->testcase->groups['']           = 'Group ';
$lang->testcase->groups['story']      = 'Group by Story';
$lang->testcase->groups['assignedTo'] = 'Group by Assignee';

$lang->testcase->statusList['']            = '';
$lang->testcase->statusList['wait']        = 'Wait';
$lang->testcase->statusList['normal']      = 'Normal';
$lang->testcase->statusList['blocked']     = 'Blocked';
$lang->testcase->statusList['investigate'] = 'Investigating';

$lang->testcase->resultList['n/a']     = 'Ignore';
$lang->testcase->resultList['pass']    = 'Pass';
$lang->testcase->resultList['fail']    = 'Fail';
$lang->testcase->resultList['blocked'] = 'Blocked';

$lang->testcase->buttonToList = 'Back';

$lang->testcase->errorEncode      = 'No Data. Please select right encoding and upload again!';
$lang->testcase->noFunction       = 'Iconv and mb_convert_encoding is not found. You cannot convert the data into the desired one!';
$lang->testcase->noRequire        = "Row %s has“%s”which is a required field and it should not be blank.";
$lang->testcase->noLibrary        = "No library exists. Please create one first.";
$lang->testcase->mustChooseResult = 'Review result is required.';
$lang->testcase->noModule         = '<div>You have no modules</div><div>Manage now</div>';
$lang->testcase->noCase           = 'No cases. ';

$lang->testcase->searchStories = 'Enter to searcu Story';
$lang->testcase->selectLib     = 'Select Library';

$lang->testcase->action = new stdclass();
$lang->testcase->action->fromlib  = array('main' => '$date, imported by <strong>$actor</strong> from Library <strong>$extra</strong>.');
$lang->testcase->action->reviewed = array('main' => '$date, recorded by <strong>$actor</strong> and the review result is <strong>$extra</strong>.', 'extra' => 'reviewResultList');

$lang->testcase->featureBar['browse']['all']         = $lang->testcase->allCases;
$lang->testcase->featureBar['browse']['wait']        = 'Wait';
$lang->testcase->featureBar['browse']['needconfirm'] = $lang->testcase->needConfirm;
$lang->testcase->featureBar['browse']['group']       = '';
$lang->testcase->featureBar['browse']['suite']       = 'Suite';
$lang->testcase->featureBar['browse']['zerocase']    = '';
$lang->testcase->featureBar['groupcase']             = $lang->testcase->featureBar['browse'];
/* testreport */
$lang->testreport->common   = 'Test Report';
$lang->testreport->browse   = 'Test Report';
$lang->testreport->create   = 'Create Report';
$lang->testreport->edit     = 'Edit Report';
$lang->testreport->delete   = 'Delete';
$lang->testreport->export   = 'Export';
$lang->testreport->view     = 'Report Details';
$lang->testreport->recreate = 'Re-Create';

$lang->testreport->title       = 'Title';
$lang->testreport->bugTitle    = 'Bug Title';
$lang->testreport->storyTitle  = 'Story Title';
$lang->testreport->project     = 'Project';
$lang->testreport->testtask    = 'Test Build';
$lang->testreport->tasks       = $lang->testreport->testtask;
$lang->testreport->startEnd    = 'Start&End';
$lang->testreport->owner       = 'Owner';
$lang->testreport->members     = 'Members';
$lang->testreport->begin       = 'Begin';
$lang->testreport->end         = 'End';
$lang->testreport->stories     = 'Stories of Test';
$lang->testreport->bugs        = 'Bugs';
$lang->testreport->builds      = 'Build Info';
$lang->testreport->goal        = 'Project Goal';
$lang->testreport->cases       = 'Cases';
$lang->testreport->bugInfo     = 'Bug Distribution';
$lang->testreport->report      = 'Summary';
$lang->testreport->legacyBugs  = 'Legacy Bugs';
$lang->testreport->createdDate = 'Date';
$lang->testreport->objectID    = 'Object';
$lang->testreport->profile     = 'Profile';
$lang->testreport->value       = 'Value';
$lang->testreport->none        = 'None';
$lang->testreport->all         = 'All Report';
$lang->testreport->deleted     = 'Deleted';

$lang->testreport->legendBasic       = 'Basic Info';
$lang->testreport->legendStoryAndBug = 'Stories and Bugs of Test';
$lang->testreport->legendBuild       = 'Build Info';
$lang->testreport->legendCase        = 'Linked Case';
$lang->testreport->legendLegacyBugs  = 'Legacy Bugs';
$lang->testreport->legendReport      = 'Report';
$lang->testreport->legendComment     = 'Sum up';
$lang->testreport->legendMore        = 'More';

$lang->testreport->bugSeverityGroups   = 'Bug Severity Distribution';
$lang->testreport->bugTypeGroups       = 'Bug Type Distribution';
$lang->testreport->bugStatusGroups     = 'Bug Status Distribution';
$lang->testreport->bugOpenedByGroups   = 'Bug Creator Distribution';
$lang->testreport->bugResolvedByGroups = 'Bug Solver Distribution';
$lang->testreport->bugResolutionGroups = 'Bug Resolution Distribution';
$lang->testreport->bugModuleGroups     = 'Bug Module Distribution';
$lang->testreport->legacyBugs          = 'Legacy Bugs';
$lang->testreport->bugConfirmedRate    = 'Confirmed Bug Rate (Solution is fixed or postponed / status is resolved or closed)';
$lang->testreport->bugCreateByCaseRate = 'Bug Created in Case Rate (Bugs created in cases / Newly added bugs)';

$lang->testreport->caseSummary    = ' <strong>%s</strong> cases in Total : <strong>%s</strong> performed, <strong>%s</strong> results, <strong>%s</strong> failed.';
$lang->testreport->buildSummary   = 'Tested <strong>%s</strong> build.';
$lang->testreport->confirmDelete  = 'Do you want tot delete this report?';
$lang->testreport->moreNotice     = 'More features can be extended with reference to the ZenTao extension mechanism, or you can contact us for customization.';
$lang->testreport->exportNotice   = "Export By <a href='http://www.zentao.net' target='_blank' style='color:grey'>ZenTaoPMS</a>";
$lang->testreport->noReport       = "No report has been generated. Please check it later.";
$lang->testreport->foundBugTip    = "Bugs created in this build and created in the test period.";
$lang->testreport->legacyBugTip   = "Active Bugs, or the resolved beyond the test period.";
$lang->testreport->fromCaseBugTip = "Bugs created after case-failure in the test period.";
$lang->testreport->errorTrunk     = "The trunk version cannot create a test report. Please modify the associated version!";
$lang->testreport->moreProduct    = "A test report can only be generated for the same product.";

$lang->testreport->bugSummary = <<<EOD
<strong>%s</strong> Bug(s) generated in total <a data-toggle='tooltip' class='text-warning' title='{$lang->testreport->foundBugTip}'><i class='icon-exclamation-sign'></i></a>,
<strong>%s</strong> Bug(s) remained unresolve <a data-toggle='tooltip' class='text-warning' title='{$lang->testreport->legacyBugTip}'><i class='icon-exclamation-sign'></i></a>,
<strong>%s</strong> Bug(s) failure of case <a data-toggle='tooltip' class='text-warning' title='{$lang->testreport->fromCaseBugTip}'><i class='icon-exclamation-sign'></i></a>.
Bug Effective Rate <a data-toggle='tooltip' class='text-warning' title='resolution is resolved or delayedg / status is resolved or closed'><i class='icon-exclamation-sign'></i></a>: <strong>%s</strong>，Bugs created from case Rate<a data-toggle='tooltip' class='text-warning' title='Bugs created from cases / bugs'><i class='icon-exclamation-sign'></i></a>: <strong>%s</strong>
EOD;
/* testsuite */
$lang->testsuite->index            = "Home";
$lang->testsuite->create           = "Create Suite";
$lang->testsuite->delete           = "Delete";
$lang->testsuite->view             = "Overview";
$lang->testsuite->edit             = "Edit";
$lang->testsuite->browse           = "Suite List";
$lang->testsuite->linkCase         = "Link Cases";
$lang->testsuite->linkVersion      = "Version";
$lang->testsuite->unlinkCase       = "Unlink";
$lang->testsuite->batchUnlinkCases = "Batch unlink cases";
$lang->testsuite->deleted          = 'deleted';
$lang->testsuite->exportTemplet    = 'Export template';
$lang->testsuite->batchCreateCase  = 'Batch create cases';
$lang->testsuite->import           = 'Import';
$lang->testsuite->showImport       = 'Show import data';
$lang->testsuite->successSaved     = 'Success Saved';

$lang->testsuite->common         = 'Test Suite';
$lang->testsuite->product        = $lang->productCommon;
$lang->testsuite->name           = 'Name';
$lang->testsuite->desc           = 'Description';
$lang->testsuite->author         = 'Access Control';
$lang->testsuite->addedBy        = 'Creator';
$lang->testsuite->addedDate      = 'Date';

$lang->testsuite->legendDesc      = 'Description';
$lang->testsuite->legendBasicInfo = 'Base Info';

$lang->testsuite->unlinkedCases = 'Unlinked Cases';

$lang->testsuite->confirmDelete     = 'Do you want to delete this suite?';
$lang->testsuite->libraryDelete     = 'Do you want to delete this library？';
$lang->testsuite->confirmUnlinkCase = 'Do you want to unlink this Case?';
$lang->testsuite->noticeNone        = 'You have not created a suite yet.';
$lang->testsuite->noModule          = '<div>You have no modules</div><div>Manage now</div>';
$lang->testsuite->noTestsuite       = 'No suites. ';

$lang->testsuite->lblCases      = 'Cases';
$lang->testsuite->lblUnlinkCase = 'Unlink Case';

$lang->testsuite->authorList['private'] = 'Private';
$lang->testsuite->authorList['public']  = 'Public';

$lang->caselib->common = 'Case Library';
$lang->caselib->all    = 'All';

$lang->testsuite->createLib  = 'Create Library';
$lang->testsuite->editLib    = 'Edit';
$lang->testsuite->library    = 'Browse cases in Library';
$lang->testsuite->createCase = 'Create Case';
$lang->testsuite->libView    = 'Overview';
/* testtask */
$lang->testtask->index            = "Home";
$lang->testtask->create           = "Submit Test";
$lang->testtask->reportChart      = 'Report';
$lang->testtask->delete           = "Delete";
$lang->testtask->view             = "Overview";
$lang->testtask->edit             = "Edit";
$lang->testtask->browse           = "Test Tasks";
$lang->testtask->linkCase         = "Link Cases";
$lang->testtask->selectVersion    = "Select Version";
$lang->testtask->unlinkCase       = "Unlink";
$lang->testtask->batchUnlinkCases = "Batch unlink cases";
$lang->testtask->batchAssign      = "Batch Assign";
$lang->testtask->runCase          = "Run";
$lang->testtask->batchRun         = "Batch Run";
$lang->testtask->results          = "Result";
$lang->testtask->createBug        = "Bug(+)";
$lang->testtask->assign           = 'Assign';
$lang->testtask->cases            = 'Cases';
$lang->testtask->groupCase        = "By Group";
$lang->testtask->pre              = 'Previous';
$lang->testtask->next             = 'Next';
$lang->testtask->start            = "Start";
$lang->testtask->close            = "Close";
$lang->testtask->wait             = "Wait";
$lang->testtask->block            = "Block";
$lang->testtask->activate         = "Activate";
$lang->testtask->testing          = "Testing";
$lang->testtask->blocked          = "Blocked";
$lang->testtask->done             = "Tested";
$lang->testtask->totalStatus      = "All";
$lang->testtask->all              = "All " . $lang->productCommon;
$lang->testtask->allTasks         = 'All';
$lang->testtask->collapseAll      = 'Collapse';
$lang->testtask->expandAll        = 'Expand';

$lang->testtask->id             = 'ID';
$lang->testtask->common         = 'TestTask';
$lang->testtask->product        = $lang->productCommon;
$lang->testtask->project        = $lang->projectCommon;
$lang->testtask->build          = 'Build';
$lang->testtask->owner          = 'Owner';
$lang->testtask->pri            = 'Priority';
$lang->testtask->name           = 'Name';
$lang->testtask->begin          = 'Begin';
$lang->testtask->end            = 'End';
$lang->testtask->desc           = 'Description';
$lang->testtask->mailto         = 'Mailto';
$lang->testtask->status         = 'Status';
$lang->testtask->assignedTo     = 'Assigned';
$lang->testtask->linkVersion    = 'Version';
$lang->testtask->lastRunAccount = 'Run By';
$lang->testtask->lastRunTime    = 'Last Run';
$lang->testtask->lastRunResult  = 'Result';
$lang->testtask->reportField    = 'Report';
$lang->testtask->files          = 'Upload';
$lang->testtask->case           = 'Case';
$lang->testtask->version        = 'Version';
$lang->testtask->caseResult     = 'Test Result';
$lang->testtask->stepResults    = 'Step Results';
$lang->testtask->lastRunner     = 'Last Run By';
$lang->testtask->lastRunDate    = 'Last Run Date';
$lang->testtask->date           = 'Date';

$lang->testtask->beginAndEnd    = 'Date';
$lang->testtask->to             = 'To';

$lang->testtask->legendDesc      = 'Desc';
$lang->testtask->legendReport    = 'Report';
$lang->testtask->legendBasicInfo = 'Basic Info';

$lang->testtask->statusList['wait']    = 'Wait';
$lang->testtask->statusList['doing']   = 'Doing';
$lang->testtask->statusList['done']    = 'Done';
$lang->testtask->statusList['blocked'] = 'Blocked';

$lang->testtask->priList[0] = '';
$lang->testtask->priList[3] = '3';
$lang->testtask->priList[1] = '1';
$lang->testtask->priList[2] = '2';
$lang->testtask->priList[4] = '4';

$lang->testtask->unlinkedCases = 'Unlinked Cases';
$lang->testtask->linkByBuild   = 'Copy from build';
$lang->testtask->linkByStory   = 'Link by Story';
$lang->testtask->linkByBug     = 'Linked by Bug';
$lang->testtask->linkBySuite   = 'Link by Suite';
$lang->testtask->passAll       = 'All Pass';
$lang->testtask->pass          = 'Pass';
$lang->testtask->fail          = 'Failed';
$lang->testtask->showResult    = 'Executed <span class="text-info">%s</span> times';
$lang->testtask->showFail      = 'Failed <span class="text-danger">%s</span> times';

$lang->testtask->confirmDelete     = 'Do you want to delete this test build?';
$lang->testtask->confirmUnlinkCase = 'Do you want to unlink this Case?';
$lang->testtask->noticeNoOther     = 'There are no other test task for this product';
$lang->testtask->noTesttask        = 'No test tasks. ';

$lang->testtask->assignedToMe  = 'My';
$lang->testtask->allCases      = 'AllCases';

$lang->testtask->lblCases      = 'Cases';
$lang->testtask->lblUnlinkCase = 'Unlink Case';
$lang->testtask->lblRunCase    = 'Run Case';
$lang->testtask->lblResults    = 'Results';

$lang->testtask->placeholder = new stdclass();
$lang->testtask->placeholder->begin = 'Begin';
$lang->testtask->placeholder->end   = 'End';

$lang->testtask->mail = new stdclass();
$lang->testtask->mail->create = new stdclass();
$lang->testtask->mail->edit   = new stdclass();
$lang->testtask->mail->close  = new stdclass();
$lang->testtask->mail->create->title = "%s created test task #%s:%s";
$lang->testtask->mail->edit->title   = "%s finished test task #%s:%s";
$lang->testtask->mail->close->title  = "%s closed test task #%s:%s";

$lang->testtask->action = new stdclass();
$lang->testtask->action->testtaskopened  = '$date,  <strong>$actor</strong> opened test task <strong>$extra</strong>.' . "\n";
$lang->testtask->action->testtaskstarted = '$date,  <strong>$actor</strong> started test task <strong>$extra</strong>.' . "\n";
$lang->testtask->action->testtaskclosed  = '$date,  <strong>$actor</strong> finished test task<strong>$extra</strong>.' . "\n";

$lang->testtask->unexecuted = 'Not performed';

$lang->testtask->report = new stdclass();
$lang->testtask->report->common = 'Report';
$lang->testtask->report->select = 'Select report type';
$lang->testtask->report->create = 'Generate';

$lang->testtask->report->charts['testTaskPerRunResult'] = 'Result Report';
$lang->testtask->report->charts['testTaskPerType']      = 'Type Report';
$lang->testtask->report->charts['testTaskPerModule']    = 'Module Report';
$lang->testtask->report->charts['testTaskPerRunner']    = 'Run By Report';
$lang->testtask->report->charts['bugSeverityGroups']    = 'Bug Severity Distribution';
$lang->testtask->report->charts['bugStatusGroups']      = 'Bug Status Distribution';
$lang->testtask->report->charts['bugOpenedByGroups']    = 'Bug Creator Distribution';
$lang->testtask->report->charts['bugResolvedByGroups']  = 'Bug Solver Distribution';
$lang->testtask->report->charts['bugResolutionGroups']  = 'Bug Resolution Distribution';
$lang->testtask->report->charts['bugModuleGroups']      = 'Bug Module Distribution';

$lang->testtask->report->options = new stdclass();
$lang->testtask->report->options->graph  = new stdclass();
$lang->testtask->report->options->type   = 'pie';
$lang->testtask->report->options->width  = 500;
$lang->testtask->report->options->height = 140;
/* todo */
$lang->todo->common       = 'Todo';
$lang->todo->index        = "Home";
$lang->todo->create       = "Add Todo";
$lang->todo->createCycle  = "Add Recurring Todo";
$lang->todo->assignTo     = "Assign";
$lang->todo->activate     = "Activate";
$lang->todo->batchCreate  = "Batch Add";
$lang->todo->edit         = "Edit";
$lang->todo->close        = "Close";
$lang->todo->batchClose   = "Batch Close";
$lang->todo->batchEdit    = "Batch Edit";
$lang->todo->view         = "Overview";
$lang->todo->finish       = "Finish";
$lang->todo->batchFinish  = "Batch Finish";
$lang->todo->export       = "Export";
$lang->todo->delete       = "Delete";
$lang->todo->import2Today = "Import to Today";
$lang->todo->import       = "Import";
$lang->todo->legendBasic  = "Basic Info";
$lang->todo->cycle        = "Recurrence";
$lang->todo->cycleConfig  = "Set Recurrence";

$lang->todo->reasonList['story'] = "Transfer Story";
$lang->todo->reasonList['task']  = "Transfer Task";
$lang->todo->reasonList['bug']   = "Transfer Bug";
$lang->todo->reasonList['done']  = "Done";

$lang->todo->id          = 'ID';
$lang->todo->account     = 'Owner';
$lang->todo->date        = 'Date';
$lang->todo->begin       = 'Begin';
$lang->todo->end         = 'End';
$lang->todo->beginAB     = 'Begin';
$lang->todo->endAB       = 'End';
$lang->todo->beginAndEnd = 'Duration';
$lang->todo->idvalue     = 'Link ID';
$lang->todo->type        = 'Type';
$lang->todo->pri         = 'Priority';
$lang->todo->name        = 'Title';
$lang->todo->status      = 'Status';
$lang->todo->desc        = 'Description';
$lang->todo->private     = 'Private';
$lang->todo->cycleDay    = 'Day';
$lang->todo->cycleWeek   = 'Week';
$lang->todo->cycleMonth  = 'Month';
$lang->todo->deadline    = 'Deadline';

$lang->todo->every      = 'Every';
$lang->todo->beforeDays = "%s<span class='input-group-addon'>early in advance to be done</span>";
$lang->todo->dayNames   = array(1 => 'Monday', 2 => 'Tuesday', 3 => 'Wednesday', 4 => 'Thursday', 5 => 'Friday', 6 => 'Saturday', 0 => 'Sunday');

$lang->todo->confirmBug   = 'This Todo is related to Bug #%s. Do you want to edit it?';
$lang->todo->confirmTask  = 'This Todo is related to Task #%s，Do you want to edit it?';
$lang->todo->confirmStory = 'This Todo is related to Story #%s，Do you want to edit it?';

$lang->todo->statusList['wait']   = 'Wait';
$lang->todo->statusList['doing']  = 'Doing';
$lang->todo->statusList['done']   = 'Done';
$lang->todo->statusList['closed'] = 'Closed';
//$lang->todo->statusList['cancel']   = 'Cancelled';
//$lang->todo->statusList['postpone'] = 'Delayed';

$lang->todo->priList[3] = 'Normal';
$lang->todo->priList[1] = 'Highest';
$lang->todo->priList[2] = 'High';
$lang->todo->priList[4] = 'Low';
$lang->todo->priList[0] = '';

$lang->todo->typeList['custom'] = 'Custom';
$lang->todo->typeList['cycle']  = 'Recurrence';
$lang->todo->typeList['bug']    = 'Bug';
$lang->todo->typeList['task']   = $lang->projectCommon . 'Task';
$lang->todo->typeList['story']  = $lang->projectCommon . 'Story';

global $config;
if($config->global->flow == 'onlyTest' or $config->global->flow == 'onlyStory') unset($lang->todo->typeList['task']);
if($config->global->flow == 'onlyTask' or $config->global->flow == 'onlyStory') unset($lang->todo->typeList['bug']);

$lang->todo->confirmDelete  = "Do you want to delete this Todo?";
$lang->todo->thisIsPrivate  = 'This is a private Todo';
$lang->todo->lblDisableDate = 'Set it later';
$lang->todo->lblBeforeDays  = "Create a todo %s days(s) earlier";
$lang->todo->lblClickCreate = "Click to add a todo";
$lang->todo->noTodo         = 'No todos of this type.';
$lang->todo->noAssignedTo   = "The AssignedTo should not be empty.";

$lang->todo->periods['all']        = 'All';
$lang->todo->periods['thisYear']   = 'ThisYear';
$lang->todo->periods['future']     = 'Pending';
$lang->todo->periods['before']     = 'Unfinished';
$lang->todo->periods['cycle']      = 'Recurrence';

$lang->todo->action = new stdclass();
$lang->todo->action->finished = array('main' => '$date, is $extra by <strong>$actor</strong>.', 'extra' => 'reasonList');
$lang->todo->action->marked   = array('main' => '$date, is marked by <strong>$actor</strong> as <strong>$extra</strong>.', 'extra' => 'statusList');
/* tree */
$lang->tree = new stdclass();
$lang->tree->common             = 'Module';
$lang->tree->edit               = 'Edit';
$lang->tree->delete             = 'Delete';
$lang->tree->browse             = 'Manage General Module';
$lang->tree->browseTask         = 'Manage Task Module';
$lang->tree->manage             = 'Manage module';
$lang->tree->fix                = 'Fix';
$lang->tree->manageProduct      = "Manage {$lang->productCommon}";
$lang->tree->manageProject      = "Manage {$lang->projectCommon}";
$lang->tree->manageLine         = 'Manage Product Line';
$lang->tree->manageBug          = 'Manage Bug';
$lang->tree->manageCase         = 'Manage Case';
$lang->tree->manageCaseLib      = 'Manage Library';
$lang->tree->manageCustomDoc    = 'Manage DocLib';
$lang->tree->updateOrder        = 'Sort';
$lang->tree->manageChild        = 'Manage Child Module';
$lang->tree->manageStoryChild   = 'Manage Child Module';
$lang->tree->manageLineChild    = 'Manage Product Line';
$lang->tree->manageBugChild     = 'Manage Child Bug';
$lang->tree->manageCaseChild    = 'Manage Child Case';
$lang->tree->manageCaselibChild = 'Manage Child Library';
$lang->tree->manageTaskChild    = "Manage Child {$lang->projectCommon}";
$lang->tree->syncFromProduct    = 'Copy';
$lang->tree->dragAndSort        = "Drag and Sort";
$lang->tree->sort               = "Sort";
$lang->tree->addChild           = "Add Child";
$lang->tree->confirmDelete      = 'Do you want to delete this Module and its Children?';
$lang->tree->confirmDeleteLine  = 'Do you want to delete this Product Line and its Children?';
$lang->tree->confirmRoot        = "Changes on {$lang->productCommon} will change the Story, Bug, Case of {$lang->productCommon} it belongs to, as well as the realtion of {$lang->projectCommon} and {$lang->productCommon}, which is dangerous, please be aware of it. Do you want to change?";
$lang->tree->successSave        = 'Saved.';
$lang->tree->successFixed       = 'Fixed.';
$lang->tree->repeatName         = 'The name "%s" has existed!';

$lang->tree->module     = 'Module';
$lang->tree->name       = 'Name';
$lang->tree->line       = 'Product Line';
$lang->tree->cate       = 'Category Name';
$lang->tree->root       = 'Root';
$lang->tree->branch     = 'Platform/Branch';
$lang->tree->path       = 'Path';
$lang->tree->type       = 'Type';
$lang->tree->parent     = 'Parent';
$lang->tree->child      = 'Child';
$lang->tree->lineChild  = 'Child';
$lang->tree->owner      = 'Owner';
$lang->tree->order      = 'Order';
$lang->tree->short      = 'Sort';
$lang->tree->all        = 'All Modules';
$lang->tree->projectDoc = "{$lang->projectCommon} Doc";
$lang->tree->product    = $lang->productCommon;
/* tutorial */
$lang->tutorial = new stdclass();
$lang->tutorial->common           = 'Tutorial';
$lang->tutorial->desc             = 'Get know ZenTao by doing tasks. It takes about 10 minutes, and you can quit it anytime.';
$lang->tutorial->start            = "Let's go!";
$lang->tutorial->exit             = 'Quit';
$lang->tutorial->congratulation   = 'Congratulations! You have finished all tasks.';
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
$lang->tutorial->novice           = "For a quick start, let's go through a smart (2 min) Tutorial?";
$lang->tutorial->dataNotSave      = "Data generated in the Tutorial will not be saved!";

$lang->tutorial->tasks = array();

$lang->tutorial->tasks['createAccount']         = array('title' => 'Create a User');
$lang->tutorial->tasks['createAccount']['nav']  = array('module' => 'user', 'method' => 'create', 'menuModule' => 'company', 'menu' => 'browseUser', 'form' => '#createForm', 'submit' => '#submit', 'target' => '.create-user-btn', 'targetPageName' => 'Add User');
$lang->tutorial->tasks['createAccount']['desc'] = "<p>Create a User: </p><ul><li data-target='nav'>Open <span class='task-nav'>Company <i class='icon icon-angle-right'></i> Users<i class='icon icon-angle-right'></i> New;</span></li><li data-target='form'>Fill the form with user information;</li><li data-target='submit'>Save</li></ul>";

$lang->tutorial->tasks['createProduct']         = array('title' => 'Create a Product');
$lang->tutorial->tasks['createProduct']['nav']  = array('module' => 'product', 'method' => 'create', 'menu' => '#pageNav', 'form' => '#createForm', 'submit' => '#submit', 'target' => '.create-product-btn', 'targetPageName' => 'Product');
$lang->tutorial->tasks['createProduct']['desc'] = "<p>Create a product: </p><ul><li data-target='nav'> Open <span class='task-nav'>Product <i class='icon icon-angle-right'></i> New;</span></li><li data-target='form'>Fill the form with product information;</li><li data-target='submit'>Save</li></ul>";

$lang->tutorial->tasks['createStory']         = array('title' => 'Create a Story');
$lang->tutorial->tasks['createStory']['nav']  = array('module' => 'story', 'method' => 'create', 'menuModule' => 'product', 'menu' => 'story', 'target' => '.create-story-btn', 'form' => '#dataform', 'submit' => '#submit', 'targetPageName' => 'Create Story');
$lang->tutorial->tasks['createStory']['desc'] = "<p>Create a story: </p><ul><li data-target='nav'>Open <span class='task-nav'>Product <i class='icon icon-angle-right'></i>Story <i class='icon icon-angle-right'></i>Create;</span></li><li data-target='form'>Fill the form with story information;</li><li data-target='submit'>Save</li></ul>";

$lang->tutorial->tasks['createProject']         = array('title' => 'Create a Project');
$lang->tutorial->tasks['createProject']['nav']  = array('module' => 'project', 'method' => 'create', 'menu' => '#pageNav', 'form' => '#dataform', 'submit' => '#submit', 'target' => '.create-project-btn', 'targetPageName' => 'Create Project');
$lang->tutorial->tasks['createProject']['desc'] = "<p>Create a project: </p><ul><li data-target='nav'>Open <span class='task-nav'> Project <i class='icon icon-angle-right'></i> New</span> Page;</li><li data-target='form'>Fill the form with project information;</li><li data-target='submit'>Save</li></ul>";

$lang->tutorial->tasks['manageTeam']         = array('title' => 'Manage Project Team');
$lang->tutorial->tasks['manageTeam']['nav']  = array('module' => 'project', 'method' => 'managemembers', 'menu' => 'team', 'target' => '.manage-team-btn', 'form' => '#teamForm', 'requiredFields' => 'account1', 'submit' => '#submit', 'targetPageName' => 'Manage team members');
$lang->tutorial->tasks['manageTeam']['desc'] = "<p>Manage project team members: </p><ul><li data-target='nav'>Open <span class='task-nav'> Project <i class='icon icon-angle-right'></i> Team <i class='icon icon-angle-right'></i> Manage Team Members</span> Page；</li><li data-target='form'>Choose users for the team.</li><li data-target='submit'>Save</li></ul>";

$lang->tutorial->tasks['linkStory']         = array('title' => 'Link Story');
$lang->tutorial->tasks['linkStory']['nav']  = array('module' => 'project', 'method' => 'linkStory', 'menu' => 'story', 'target' => '.link-story-btn', 'form' => '#linkStoryForm', 'formType' => 'table', 'submit' => '#submit', 'targetPageName' => 'Relate Story');
$lang->tutorial->tasks['linkStory']['desc'] = "<p>Link Story to Project: </p><ul><li data-target='nav'>Open <span class='task-nav'> Project <i class='icon icon-angle-right'></i> Story <i class='icon icon-angle-right'></i>Relate Story;</span></li><li data-target='form'>Select stories from story list to relate;</li><li data-target='submit'>Save</li></ul>";

$lang->tutorial->tasks['createTask']         = array('title' => 'Subdivide Tasks');
$lang->tutorial->tasks['createTask']['nav']  = array('module' => 'task', 'method' => 'create', 'menuModule' => 'project', 'menu' => 'story', 'target' => '.btn-task-create', 'form' => '#dataform', 'submit' => '#submit', 'targetPageName' => 'Create Task');
$lang->tutorial->tasks['createTask']['desc'] = "<p>Subdivide tasks for Story: </p><ul><li data-target='nav'>Open <span class='task-nav'> Project <i class='icon icon-angle-right'></i> Story <i class='icon icon-angle-right'></i> WBS;</span></li><li data-target='form'>Fill the form with task information;</li><li data-target='submit'>Save</li></ul>";

$lang->tutorial->tasks['createBug']         = array('title' => 'Report a Bug');
$lang->tutorial->tasks['createBug']['nav']  = array('module' => 'bug', 'method' => 'create', 'menuModule' => 'qa', 'menu' => 'bug', 'target' => '.btn-bug-create', 'form' => '#dataform', 'submit' => '#submit', 'targetPageName' => 'Create Bug');
$lang->tutorial->tasks['createBug']['desc'] = "<p>Report a Bug: </p><ul><li data-target='nav'>Open <span class='task-nav'> Test <i class='icon icon-angle-right'></i> Bug <i class='icon icon-angle-right'></i> Create a Bug</span>；</li><li data-target='form'>Fill the form with bug information:</li><li data-target='submit'>Save</li></ul>";
/* upgrade */
$lang->upgrade->common  = 'Upgrade';
$lang->upgrade->result  = 'Result';
$lang->upgrade->fail    = 'Failed';
$lang->upgrade->success = 'Upgraded';
$lang->upgrade->tohome  = 'Visit ZenTao';
$lang->upgrade->license = 'Zentao PMS has started using Z PUBLIC LICENSE(ZPL) 1.2.';
$lang->upgrade->warnning= 'Warning!';
$lang->upgrade->checkExtension  = 'Check Extension';
$lang->upgrade->warnningContent = <<<EOT
<p>Please backup your database before upgrading ZenTao!</p>
<pre>
1. Use phpMyAdmin to backup.
2. Use mysqlCommand to backup.
   $> mysqldump -u <span class='text-danger'>username</span> -p <span class='text-danger'>dbname</span> > <span class='text-danger'>filename</span> 
   Change the red text into corresponding Username and Database name.
   e.g. mysqldump -u root -p zentao >zentao.bak
</pre>
EOT;
$lang->upgrade->createFileWinCMD   = 'Open command line, execute <strong style="color:#ed980f">echo > %s</strong>';
$lang->upgrade->createFileLinuxCMD = 'Execute in command line: <strong style="color:#ed980f">touch %s</strong>';
$lang->upgrade->setStatusFile      = '<h4>Please finish the following action</h4>
                                      <ul style="line-height:1.5;font-size:13px;">
                                      <li>%s</li>
                                      <li>Or delete "<strong style="color:#ed980f">%s</strong>" and create <strong style="color:#ed980f">ok.txt</strong> and leave it blank.</li>
                                      </ul>
                                      <p><strong style="color:red">I have read and done as instructed above. <a href="upgrade.php">Continue update.</a></strong></p>';
$lang->upgrade->selectVersion = 'Select Version';
$lang->upgrade->continue      = 'Continue';
$lang->upgrade->noteVersion   = "Select the compatible version, or it might cause data loss.";
$lang->upgrade->fromVersion   = 'From Version';
$lang->upgrade->toVersion     = 'Upgrade to Version';
$lang->upgrade->confirm       = 'Confirm SQL';
$lang->upgrade->sureExecute   = 'Execute';
$lang->upgrade->forbiddenExt  = 'Extension is not compatible with the upgraded version. It has been deactivated:';
$lang->upgrade->updateFile    = 'Attachment information has to be updated.';

include dirname(__FILE__) . '/version.php';
/* user */
$lang->user->common      = 'User';
$lang->user->id          = 'ID';
$lang->user->company     = 'Company';
$lang->user->dept        = 'Department';
$lang->user->account     = 'Account';
$lang->user->password    = 'Password';
$lang->user->password2   = 'Repeat Password';
$lang->user->role        = 'Role';
$lang->user->group       = 'Group';
$lang->user->realname    = 'Name';
$lang->user->nickname    = 'Nickname';
$lang->user->commiter    = 'SCM Account';
$lang->user->birthyear   = 'Birth Year';
$lang->user->gender      = 'Gender';
$lang->user->email       = 'Email';
$lang->user->basicInfo   = 'Basic Info';
$lang->user->accountInfo = 'Account';
$lang->user->verify      = 'Verification';
$lang->user->contactInfo = 'Contact';
$lang->user->skype       = 'Skype';
$lang->user->qq          = 'QQ';
$lang->user->yahoo       = 'Yahoo!';
$lang->user->gtalk       = 'GTalk';
$lang->user->wangwang    = 'Wangwang';
$lang->user->mobile      = 'Mobile';
$lang->user->phone       = 'Phone';
$lang->user->address     = 'Address';
$lang->user->zipcode     = 'Zip Code';
$lang->user->join        = 'Join Date';
$lang->user->visits      = 'Visits';
$lang->user->ip          = 'Last IP';
$lang->user->last        = 'Last Login';
$lang->user->ranzhi      = 'Zdoo Account';
$lang->user->ditto       = 'Ditto';
$lang->user->originalPassword = 'Old Password';
$lang->user->verifyPassword   = 'Your Login Password';
$lang->user->resetPassword    = 'Forgot Password?';

$lang->user->index           = "Home";
$lang->user->view            = "Overview";
$lang->user->create          = "Add User";
$lang->user->batchCreate     = "Batch Add";
$lang->user->edit            = "Edit";
$lang->user->batchEdit       = "Batch Edit";
$lang->user->unlock          = "Unlock";
$lang->user->delete          = "Delete";
$lang->user->unbind          = "Unbind Zdoo";
$lang->user->login           = "Login";
$lang->user->mobileLogin     = "Mobile";
$lang->user->editProfile     = "Edit";
$lang->user->deny            = "Access is denied.";
$lang->user->confirmDelete   = "Are you sure to delete this user?";
$lang->user->confirmUnlock   = "Are you sure to unlock this user?";
$lang->user->confirmUnbind   = "Are you sure to unbind this user from Zdoo?";
$lang->user->relogin         = "Login Again";
$lang->user->asGuest         = "Guest";
$lang->user->goback          = "Back";
$lang->user->deleted         = '(Deleted)';
$lang->user->search          = 'Search';

$lang->user->profile     = 'Profile';
$lang->user->project     = $lang->projectCommon;
$lang->user->task        = 'Task';
$lang->user->bug         = 'Bug';
$lang->user->test        = 'Test';
$lang->user->testTask    = 'TestTask';
$lang->user->testCase    = 'TestCase';
$lang->user->todo        = 'Todo';
$lang->user->story       = 'Story';
$lang->user->dynamic     = 'Dynamic';

$lang->user->openedBy    = 'Opened';
$lang->user->assignedTo  = 'Assigned';
$lang->user->finishedBy  = 'Finished';
$lang->user->resolvedBy  = 'Resolved';
$lang->user->closedBy    = 'Closed';
$lang->user->reviewedBy  = 'Reviewed';
$lang->user->canceledBy  = 'Canceled';

$lang->user->testTask2Him = 'Build';
$lang->user->case2Him     = 'Case Assigned';
$lang->user->caseByHim    = 'Case Opened';

$lang->user->errorDeny    = "Sorry, your access to <b>%s</b> of <b>%s</b> has been denied. Please contact your Admin to get permissions. Click Back to return.";
$lang->user->loginFailed  = "Login failed. Please check your account and password.";
$lang->user->lockWarning  = "You can try %s times.";
$lang->user->loginLocked  = "Please contact the administrator to unlock your account or try %s mins later.";
$lang->user->weakPassword = "Your password does not meet the complexity requirements.";

$lang->user->roleList['']       = '';
$lang->user->roleList['dev']    = 'Developer';
$lang->user->roleList['qa']     = 'QA';
$lang->user->roleList['pm']     = 'Scrum Master';
$lang->user->roleList['po']     = 'Product Owner';
$lang->user->roleList['td']     = 'Technical Manager';
$lang->user->roleList['pd']     = 'Product Manager';
$lang->user->roleList['qd']     = 'QA Manager';
$lang->user->roleList['top']    = 'Senior Manager';
$lang->user->roleList['others'] = 'Other';

$lang->user->genderList['m'] = 'M';
$lang->user->genderList['f'] = 'F';

$lang->user->passwordStrengthList[0] = "<span style='color:red'>Weak</span>";
$lang->user->passwordStrengthList[1] = "<span style='color:#000'>Good</span>";
$lang->user->passwordStrengthList[2] = "<span style='color:green'>Strong</span>";

$lang->user->statusList['active'] = 'Activated';
$lang->user->statusList['delete'] = 'Deleted';

$lang->user->keepLogin['on']      = 'Remember Me';
$lang->user->loginWithDemoUser    = 'Login as Demo User:';

$lang->user->tpl = new stdclass();
$lang->user->tpl->type    = 'Type';
$lang->user->tpl->title   = 'TPL Title';
$lang->user->tpl->content = 'Content';
$lang->user->tpl->public  = 'Public';

$lang->user->placeholder = new stdclass();
$lang->user->placeholder->account   = 'Letters, Underline and Numbers, at least 3 characters';
$lang->user->placeholder->password1 = 'six characters at lease ';
$lang->user->placeholder->role      = "Role affects content and user order.";
$lang->user->placeholder->group     = "Group decides user privilege.";
$lang->user->placeholder->commiter  = 'SVN/Git account';
$lang->user->placeholder->verify    = 'Please input your login password.';

$lang->user->placeholder->passwordStrength[1] = 'Letters and Numbers, at least 6 characters';
$lang->user->placeholder->passwordStrength[2] = 'Letters, Numbers and special characters, at lease 10 characters';

$lang->user->error = new stdclass();
$lang->user->error->account       = "ID %s，account must contain letters, underline, or numbers,at lease three characters";
$lang->user->error->accountDupl   = "ID %s，account has been used.";
$lang->user->error->realname      = "ID %s，must be real name";
$lang->user->error->password      = "ID %s，password must be 6 characters at least.";
$lang->user->error->mail          = "ID %s，please enter valid Email address";
$lang->user->error->role          = "ID %s，role cannot be null.";
$lang->user->error->reserved      = "ID %s，account is reserved.";

$lang->user->error->verifyPassword   = "Verification failed. Please enter your Login Password.";
$lang->user->error->originalPassword = "Old password is incorrect.";

$lang->user->contacts = new stdclass();
$lang->user->contacts->common   = 'Contact';
$lang->user->contacts->listName = 'List Name';
$lang->user->contacts->userList = 'User List';

$lang->user->contacts->manage        = 'Manage';
$lang->user->contacts->contactsList  = 'Contacts';
$lang->user->contacts->selectedUsers = 'Select';
$lang->user->contacts->selectList    = 'List';
$lang->user->contacts->createList    = 'Create Contact List';
$lang->user->contacts->noListYet     = 'No contact list exists. Please create one first.';
$lang->user->contacts->confirmDelete = 'Do you want to delete this list?';
$lang->user->contacts->or            = ' or ';

$lang->user->resetFail       = "Failed. Please check the account";
$lang->user->resetSuccess    = "Reset! Please use your new password to login.";
$lang->user->noticeResetFile = "<h5>Contact the Administrator to reset your password.</h5>
    <h5>If you are, please login your Zentao host and create a file named <span> '%s' </span>.</h5>
    <p>Note:</p>
    <ol>
    <li>Keep the file empty.</li>
    <li>If the file exists, remove it and create it again.</li>
    </ol>";
/* webhook */
$lang->webhook->common   = 'Webhook';
$lang->webhook->list     = 'Hook List';
$lang->webhook->api      = 'API';
$lang->webhook->entry    = 'Entry';
$lang->webhook->log      = 'Log';
$lang->webhook->assigned = 'Assigned To';
$lang->webhook->setting  = 'Setting';

$lang->webhook->browse = 'Browse';
$lang->webhook->create = 'Create';
$lang->webhook->edit   = 'Edit';
$lang->webhook->delete = 'Delete';

$lang->webhook->id          = 'ID';
$lang->webhook->type        = 'Type';
$lang->webhook->name        = 'Name';
$lang->webhook->url         = 'Webhook Address';
$lang->webhook->domain      = 'Zentao Domain';
$lang->webhook->contentType = 'Content Type';
$lang->webhook->sendType    = 'Send Type';
$lang->webhook->product     = "{$lang->productCommon}";
$lang->webhook->project     = "{$lang->projectCommon}";
$lang->webhook->params      = 'Params';
$lang->webhook->action      = 'Action';
$lang->webhook->desc        = 'Desc';
$lang->webhook->createdBy   = 'Created By';
$lang->webhook->createdDate = 'Created Date';
$lang->webhook->editedby    = 'Edited By';
$lang->webhook->editedDate  = 'Edited Date';
$lang->webhook->date        = 'Date';
$lang->webhook->data        = 'Data';
$lang->webhook->result      = 'Result';

$lang->webhook->typeList['bearychat'] = 'Bearychat';
$lang->webhook->typeList['dingding']  = 'Dingding';
$lang->webhook->typeList['default']   = 'Default';

$lang->webhook->sendTypeList['sync']  = 'Synchronization';
$lang->webhook->sendTypeList['async'] = 'Asynchronous';

$lang->webhook->paramsList['objectType'] = 'Object Type';
$lang->webhook->paramsList['objectID']   = 'Object ID';
$lang->webhook->paramsList['product']    = "{$lang->productCommon}";
$lang->webhook->paramsList['project']    = "{$lang->projectCommon}";
$lang->webhook->paramsList['action']     = 'Action';
$lang->webhook->paramsList['actor']      = 'Actor';
$lang->webhook->paramsList['date']       = 'Date';
$lang->webhook->paramsList['comment']    = 'Comment';
$lang->webhook->paramsList['text']       = 'Action Desc';

$lang->webhook->confirmDelete = 'Are your sure delete this hook?';

$lang->webhook->trimWords = '';

$lang->webhook->note = new stdClass();
$lang->webhook->note->async   = 'If the send type is asynchronous, need open cron.';
$lang->webhook->note->product = "All actions will trigger the hook if the {$lang->productCommon} is empty, else only actions of the {$lang->productCommon} will trigger it.";
$lang->webhook->note->project = "All actions will trigger the hook if the {$lang->projectCommon} is empty, else only actions of the {$lang->projectCommon} will trigger it.";

$lang->webhook->note->typeList['bearychat'] = 'Add a zentao bot in bearychat and get the webhook address.';
$lang->webhook->note->typeList['dingding']  = 'Add a customed bot in dingding and get the webhook address.';
$lang->webhook->note->typeList['default']   = 'Get webhook address from others';

$lang->webhook->error = new stdclass();
$lang->webhook->error->curl = 'Load php-curl in php.ini.';
