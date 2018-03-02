<?php

$stringtocheck="hello  world";


echo strlen($stringtocheck);


echo "</br>";

$stringtwo="ranjith";
echo strrev($stringtwo);

echo "</br>";

$string_three="difid dfodof fdjofd fodfdfjd dfjdlf";//it has to return 5

echo str_word_count($string_three);

echo "</br>";


$string_four="ranjit kumar";

echo strpos($string_four,"kumar");//returns the position of a string

echo "</br>";


$string_five="java is a secured programming language";

echo str_replace("java","php",$string_five);
/*two part arguments

in first part of first argument
we nned to write which text to change as above in php
in second part of first aarguent we need to change metion which
sting to be change from exiesting string
*/

/*

strings completed

strlen->
strrev->
strpos->
str_count_word
str_replace

<!-- only str_count_word and str_replavce need to add those iphens>







*/



?>
