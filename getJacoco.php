<!DOCTYPE html>
<html>
<body>

<h1>My first PHP page</h1>
    
<?php
function hello($who) {
    return "Hello " . $who;
}
?>
<p>The program says <?= hello("World") ?>.</p>
</body>
</html>