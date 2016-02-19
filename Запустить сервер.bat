@net stop NginxTrayRu
@cd %~dp0\web-server\patches\patch
call patch.bat
@cd ..\..\trays
start NginxTrayRu.exe
start http://localhost