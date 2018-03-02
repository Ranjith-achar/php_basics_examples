<?php


$a=5;
$b=9;
$z;

function access(){

$GLOBALS['z']=$GLOBALS['a']+$GLOBALS['b'];

echo $GLOBALS['z'];

}



access();





?>
