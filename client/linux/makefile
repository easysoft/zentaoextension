targetDir=~/.zentao
sourceDir=.

ARCH = 64
ifeq ($(shell getconf LONG_BIT), 32)
    ARCH = 86
else
    ARCH = 64
endif
nodefile=node-v6.9.1-linux-x$(ARCH)
nodeFileGz=$(nodefile).tar.xz
nodeFileTar=$(nodefile).tar

install:
	mkdir $(targetDir)
	mkdir $(targetDir)/log
	mkdir $(targetDir)/tmp
	mkdir $(targetDir)/conf
	
ifeq ($(nodeFileGz), $(wildcard $(nodeFileGz)))
		echo "$(nodeFileGz) found"
else
		wget https://nodejs.org/dist/v6.9.1/$(nodefile).tar.xz --no-check-certificate
		xz -d $(nodeFileGz)
endif
	
ifeq ($(nodeFileTar), $(wildcard $(nodeFileTar)))
		tar xvf $(nodeFileTar)
endif
	
	cp -R $(sourceDir)/bin $(targetDir)
	cp $(nodefile)/bin/node $(targetDir)/bin/node
	
	chmod 777 $(targetDir)/bin/zentao
	echo "source $(targetDir)/bin/.zentao.sh">~/.bashrc
	chmod 777 $(targetDir)/bin/.zentao.sh
	$(targetDir)/bin/.zentao.sh
uninstall:
	rm -rf $(targetDir)
	sed -i "/source .*\/bin\/\.zentao\.sh/d" ~/.bashrc
