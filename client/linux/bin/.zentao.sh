#!/bin/bash
svnpath=/usr/bin/svn
gitpath=/usr/bin/git
zentaopath=~/.zentao/bin/zentao
exepath=$svnpath
commitFile=~/.zentao/tmp/.zentao.commit
logInfoFile=~/.zentao/tmp/.commit.log
logCommond=""
function svn(){
	exepath=$svnpath;
	logCommond="log -r COMMITTED -v --xml"
	
	case $1 in 
		commit)
			runZentao $@;
			;;
		ci)
			runZentao $@;
			;;
		*)
			$exepath $@;
			;;
	esac
}

function git(){
	exepath=$gitpath;
	logCommond="log -1 --name-status --pretty=oneline"
	case $1 in 
		commit)
			runZentao $@;
			;;
		ci)
			runZentao $@;
			;;
		*)
			$exepath $@;
			;;
	esac

}

function runZentao(){
	
	#清除上次执行生成的文件
	if [ -f $commitFile ]; then
		rm $commitFile;
	fi
	
	#清除上次执行生成的文件
	if [ -f $logInfoFile ]; then
		rm $logInfoFile;
	fi
	
	#执行禅道TUI操作命令
	$zentaopath $exepath;
	
	#当zentao执行成功并生成了提交文件才执行提交命令
	if [ -f $commitFile ]; then
		#提交之前先更新
		$exepath update
		#提交文件
		$exepath $@ -F $commitFile;
		
		#commit命令成功时执行
		if [ $? -eq 0 ]; then
			echo "$exepath">$logInfoFile
			$exepath $logCommond>>$logInfoFile
			$zentaopath $exepath;
		fi
	else
		#说明TUI中什么操作也没有做
		$exepath $@
	fi
}
