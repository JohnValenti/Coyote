@ECHO OFF
SET arg1=%1
PowerShell -NoProfile -ExecutionPolicy Bypass -Command "& 'C:\xampp\htdocs\Coyote\Scripts\dltestres.ps1' -buildno arg1";