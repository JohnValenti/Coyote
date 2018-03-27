@ECHO OFF
PowerShell -NoProfile -ExecutionPolicy Bypass -Command "& 'C:\xampp\htdocs\Coyote\Scripts\copyteamexecs.ps1' -teamname %1 -buildno %2;