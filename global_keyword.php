<?php
//acessing global variables inside a function using a global keyworrd



$x=5;
$y=10;
function acees_global_values(){
global $x,$y,$z;

echo $z=$x+$y;

}
acees_global_values();
?>
