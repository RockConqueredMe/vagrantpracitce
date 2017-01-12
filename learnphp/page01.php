<!DOCTYPE html>
<html>
<body>

<h1>My Second PHP page</h1>

<!--php scripting starts here-->
<?php
echo "<h4>" . "Hello World!" . "</h4>";

$mySting = "Hello World2";
$x = 15;
$y = 30;
$z = $x + $y;

echo "<p>" . $mySting . "</p>";
echo "<p>" . $z . "</p>";

define("PI", 3.14159265358979823);
echo "<h1>" . PI . "</h1>";

echo 012;
?>

<!--php scripting stops-->

</body>
</html>