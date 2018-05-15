@ECHO OFF
PowerShell -NoProfile -ExecutionPolicy Bypass -Command "& 'C:\Coyote\Scripts\RunReport.ps1' -teamname %1 -pipeline %2 -buildno %3";