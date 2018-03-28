@ECHO OFF
PowerShell -NoProfile -ExecutionPolicy Bypass -Command "& 'C:\xampp\htdocs\Coyote\Scripts\RunReport.ps1' -teamname %1 -reportname %2 -buildno %3";