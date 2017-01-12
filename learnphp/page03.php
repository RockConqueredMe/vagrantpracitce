<!--<?php 
$x = 100; 

while($x >= 0) {
    echo "The number is: $x <br>";
    $x -= 5;
} 
?>-->

<!--<?php 
$x = 0; 

while($x <= 22) {
    if($x % 2 == 0 && $x % 5 != 0 || $x == 0)
    echo "The number is: $x <br>";
    $x++; 
} 
?>-->

<?php

$fruit = array("cherry", "apple", "peach", "plum");
// echo $fruit[3];
echo "<ol type = '1'>";
foreach($fruit as $value){
    echo "<li> $value </li><br>";
}
echo "</ol>"

?>