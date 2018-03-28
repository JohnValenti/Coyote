@ECHO OFF
PowerShell -NoProfile -ExecutionPolicy Bypass -Command "& 'C:\Coyote\Scripts\dlteamrep.ps1' -teamname %1 -version %2 -pipeline %3 -buildno %4";