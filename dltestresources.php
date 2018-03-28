<!DOCTYPE html>
<html>
    <body>

        <h1>WFM test resources have been downloaded</h1>
    
        <?php
            $buildno = $_GET['buildno'];
            $teamname = $_GET['teamname'];
            $version = $_GET['version'];
            $pipeline = $_GET['pipeline'];
            
            //$teampath = "15.2HFR3/delphi/RequestManagement_Experimental.zip";
            //$teamname = "delphi";
            //buildno =15.2.3.2597
    
            // download test resources
            exec('C:\xampp\htdocs\Coyote\Scripts\dltestres.bat ' .$buildno.'');
        
            // download team exec
            exec('C:\xampp\htdocs\Coyote\Scripts\dlteamrep.bat ' .$teamname.' '.$version.' '.$pipeline.' '.$buildno.'');
        
            // clean dump out +
            // copy files for report gen to jacoco/dump-out/jacoc
            //exec('C:\xampp\htdocs\Coyote\Scripts\copyteamexecs.bat ' .$teamname.' '.$buildno.'');
            
            //run ant command, move generated report and clean up
            //exec('C:\xampp\htdocs\Coyote\Scripts\RunTeamReport.bat' .$teamname.' '.$pipeline.' '.$buildno.'');
        
        ?>
    </body>
</html>
