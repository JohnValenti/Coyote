<!DOCTYPE html>
<html>
    <body>

        <h1>WFM test resources have been downloaded</h1>
    
        <?php
            $buildno = $_GET['buildno'];
            $teampath = $_GET['teampath'];
            $teampath = $_GET['teamname'];
            //$teampath = "15.2HFR3/delphi/RequestManagement_Experimental.zip";
            //$teamname = "delphi";
    
            // download test resources
            exec('C:\xampp\htdocs\Coyote\Scripts\dltestres.bat ' .$buildno.'');
        
            // download team exec and jacoco
            exec('C:\xampp\htdocs\Coyote\Scripts\dlteamrep.bat ' .$teampath.' '.$teamname. '');
        
            // reset baseline
            exec('C:\xampp\htdocs\Coyote\Scripts\CustomResetBaselineAndCopy.bat ' .$teamname.' ');
        ?>
    </body>
</html>
