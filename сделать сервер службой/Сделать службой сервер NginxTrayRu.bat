if %PROCESSOR_ARCHITECTURE%==x86 (
  cd %~dp0\nssm\win32 
) else (
  cd %~dp0\nssm\win64
)

set rel_path=..\..\..\web-server
pushd %rel_path%
set abs_path=%CD%
popd

nssm install NginxTrayRu %ABS_PATH%\NginxTrayRu.exe
net start NginxTrayRu

pause