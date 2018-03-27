<!DOCTYPE html>
<html>
    <body>

        <h1>Report has been generated. but im not going to show it 2 u just now</h1>
    
        <?php
            $buildno = $_GET['buildno'];
            $teamname = $_GET['teamname'];
    
            // download test resources
            exec('C:\xampp\htdocs\Coyote\Scripts\dltestres.bat ' .$buildno.'');
        
            // download team exec and jacoco
            exec('C:\xampp\htdocs\Coyote\Scripts\dlteamrep.bat ' .$teamname.' '.teampath.' '.$piepline.' '.$buildno.'');
        
            // reset baseline
            exec('C:\xampp\htdocs\Coyote\Scripts\CustomResetBaselineAndCopy.bat ' .$teamname.'');
        ?>
    </body>
</html>