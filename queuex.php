<!DOCTYPE html>
<html>
   <body>
      <h1>WFM test resources have been downloaded for Queuex</h1>
      <?php
         $buildno = $_GET['buildno'];
         exec('cmd /c mkdir C:\xampp\htdocs\\'. $buildno .'');
         ?>
   </body>
</html>