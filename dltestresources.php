<!DOCTYPE html>
<html>
   <body>
      <h1>WFM test resources have been downloaded</h1>
      <?php
         $buildno = $_GET['buildno'];
         exec('C:\xampp\htdocs\Coyote\Scripts\dltestres.bat'. $buildno .'');
         ?>
   </body>
</html>