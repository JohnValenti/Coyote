<!DOCTYPE html>
<html>
    <body>

        <h1>WFM test resources have been downloaded</h1>
    
        <?php
            $buildno = $_GET['buildno'];
            $teamname = $_GET['teamname'];
            $teampath = $_GET['version'];
            $pipeline = $_GET['pipeline'];
            $jacocopath = "C:";
            
            //$teampath = "15.2HFR3/delphi/RequestManagement_Experimental.zip";
            //$teamname = "delphi";
        //buildno =15.2.3.2597
    
            // download test resources
            exec('C:\xampp\htdocs\Coyote\Scripts\dltestres.bat ' .$buildno.'');
        
            // download team exec
            exec('C:\xampp\htdocs\Coyote\Scripts\dlteamrep.bat ' .$teamname.' '.version.' '.$piepline.' '.$buildno.'');
        
            // dl jacoco
            //exec('C:\xampp\htdocs\Coyote\Scripts\dljacoco.bat ');
        
            // reset baseline
            exec('C:\xampp\htdocs\Coyote\Scripts\ResetBaseAndCopyAndPurge.bat ' .$jacocopath.'');
        
            //copy files for report gen
            exec('C:\xampp\htdocs\Coyote\Scripts\copyteamexecs.bat ' .$teamname.' '.$buildno.'');
            
            //run ant
            
            //C:\jacoco\apache-ant-1.9.2-bin\bin\ant -Dbasedir="C:\jacoco" -f C:\jacoco\build.xml %ReportFilter%
        
        ?>
    </body>
</html>
