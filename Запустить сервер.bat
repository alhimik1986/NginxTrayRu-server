@rem Останавливаю службу "NginxTrayRu", если она есть
@net stop NginxTrayRu

@rem Перехожу в нужную папку патча и запускаю нужный патч
@cd /d %~dp0\web-server\patches\patch
call patch.bat

@rem Перехожу в нужную папку трея и запускаю трей с нужными нам компонентами веб-сервера
@cd ..\..\trays
start NginxTrayRu.exe

@rem Открываю браузер с адресом http://localhost
start http://localhost