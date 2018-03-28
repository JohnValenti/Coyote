<!DOCTYPE html>
<html>
   <body>
      <h1>My first PHP page</h1>
      <?php
         $teamName = $_POST['teamName'];
         
         if(empty($teamName)) 
         {
             echo("You didn't select any apartment!.");
         } 
         else{
             // Change to switch statement when refactoring
             //C:\Coyote\Reports\report\
             if($teamName === 'AllTeams'){
           header( 'Location: http://coyote.lab.local/Reports/report/coreteams/index.html' ) ;
             }
             else if($teamName === 'Delphi'){
           header( 'Location: http://coyote.lab.local/Reports/report/delphi/index.html' ) ;
             }
             else if($teamName === 'QueueX'){
           header( 'Location: http://coyote.lab.local/Reports/report/queuex/index.html' ) ;
             }
             else if($teamName === 'Firebirds'){
           header( 'Location: http://coyote.lab.local/Reports/report/firebirds/index.html' ) ;
             }
             else if($teamName === 'Fis'){
           header( 'Location: http://coyote.lab.local/Reports/report/fis/index.html' ) ;
             }
             else if($teamName === 'Sustaining'){
           header( 'Location: http://coyote.lab.local/Reports/report/sustaining/index.html' ) ;
             }
         }
         echo("You picked ('$teamName')");
         echo("Come back soon for more jacoco fun!");
             
             
         function textspitter($who) {
             return "Jacoco " . $who;
         }
         ?>
      <p>Come back soon for more <?= textspitter("fun") ?>.</p>
   </body>
</html>