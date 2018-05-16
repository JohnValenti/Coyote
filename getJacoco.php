<!DOCTYPE html>
<html>
   <body>
      <h1>Get JaCoCo'd</h1>
      <?php

        $teamName = $_POST['teamName'];
         var_dump($teamName);
        if(empty($teamName)) 
        {
          echo("You didn't select any team!.");
        } 
        else{
          // Change to switch statement when refactoring
          //C:\Coyote\Reports\report\
          if (TEAMS[$teamName]){
            header('Location: http://coyote.lab.local/Reports/report/'.$teamName.'/index.html');
          }
          else{
            echo("You picked ('$teamName')");
            echo("Come back soon for more jacoco fun!");
          }
      }

         function textspitter($who) {
             return "Jacoco " . $who;
         }
         ?>
      <p>Come back soon for more <?= textspitter("fun") ?>.</p>
   </body>
</html>