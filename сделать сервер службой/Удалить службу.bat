if %PROCESSOR_ARCHITECTURE%==x86 (
  cd %~dp0\nssm\win32 
) else (
  cd %~dp0\nssm\win64
)

nssm stop NginxTrayRu
nssm remove NginxTrayRu confirm

pause