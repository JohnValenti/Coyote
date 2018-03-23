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

    if($teamName === 'QueueX'){
  header( 'Location: https:\\localhost\Coyote\localReports\queuex\index.html' ) ;
    }
    if($teamName === 'Delphi'){

        //pclose(popen("start /B C:\xampp\htdocs\Coyote\Scripts\dltestres.bat", "r")); die();
        //exec('c:\WINDOWS\system32\cmd.exe /c START C:\xampp\htdocs\Coyote\Scripts\dltestres.bat');
        exec('cmd /c C:\xampp\htdocs\Coyote\Scripts\dltestres.bat');
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