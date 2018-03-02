<?php


$x=5;

$y=4.6;



var_dump($x);

var_dump($y);

//global variables
echo "</br>";


$global_var=5;// we can acces only outside the function

function simplefunction(){

    //echo "trying to acces insidefunction".$global_var;//we ill get an error


}


simplefunction();
echo "trying to acces insidefunction ".$global_var;//samething we declared outside we ill get output


echo "</br>";


function localscope(){ //loca; variables we can aaces only within the function

  $variable1=55;
echo "trying to acces outside the function ".$variable1;


}

localscope();
//if u try to acces outside the function of this variable you ill get an error
//echo "trying to acces outside the function".$variable1;


?>
