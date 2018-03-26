<!DOCTYPE html>
<html>
<body>

<h1>WFM test resources have been downloaded</h1>
    
<?php
        $buildno="15.2.3.2597";
    //exec('cmd /c C:\xampp\htdocs\Coyote\Scripts\dltestres.bat $buildno');
          //pclose(popen("start /B C:\xampp\htdocs\Coyote\Scripts\dltestres.bat", "r")); die();
        //exec('c:\WINDOWS\system32\cmd.exe /c START C:\xampp\htdocs\Coyote\Scripts\dltestres.bat');
        //exec('cmd /c C:\xampp\htdocs\Coyote\Scripts\dltestres.bat');
        exec('C:\xampp\htdocs\Coyote\Scripts\dltestres.bat',$buildno);
?>
</body>
</html>