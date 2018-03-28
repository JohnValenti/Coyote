<!DOCTYPE html>
<html>
    <body>

        <h1>Jacoco Report Generated</h1>
    
        <?php
            $buildno = $_GET['buildno'];
            $teamname = $_GET['teamname'];
            $version = $_GET['version'];
            $pipeline = $_GET['pipeline'];
        
            ini_set('max_execution_time', 300); //300 seconds = 5 minutes
            
            // download test resources
            exec('C:\Coyote\Scripts\dltestres.bat ' .$buildno.'');
        
            // download team exec
            exec('C:\Coyote\Scripts\dlteamrep.bat ' .$teamname.' '.$version.' '.$pipeline.' '.$buildno.'');
                   
            //run ant command, move generated report and clean up
            exec('C:\Coyote\Scripts\RunTeamReport.bat ' .$teamname.' '.$pipeline.' '.$buildno.'');
        ?>
    </body>
</html>
