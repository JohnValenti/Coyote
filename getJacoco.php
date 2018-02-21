<!DOCTYPE html>
<html>
<body>

<h1>My first PHP page</h1>
    
<?php
    
$apart = $_POST['teamName'];

if(empty($apart)) 
{
    echo("You didn't select any apartment!.");
} 
else{
    
}
echo("You picked ('$apart')");
echo("Come back soon for more jacoco fun!");
    
    
function textspitter($who) {
    return "Jacoco " . $who;
}
?>
<p>Come back soon for more <?= textspitter("fun") ?>.</p>
</body>
</html>