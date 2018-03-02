<?php

define("name","ranjith");

echo name;

/*
shoud not use $ to declare name of constants
conastant name and value should be inside
double quotes

if we specify second argument as true then
we can use case insensitive whike accesing
constatans

constanst are variables theat we cannot chnge
obce we defined

*/
echo "</br>";
define("LASTNAME","kuyamr",true);
echo lastname;

echo "</br>";
define("MIDDLENAME","BC",true);
echo middlename;//if we not it as true it ill return error


echo "</br>";


$string5="michel jackson";

echo addcslashes($string5,"k");

/*n PHP, \0, \r, \n, \t, \f and \v are predefined escape sequences.*/

/*<?php
$str = "Welcome to my humble Homepage!";
echo $str."<br>";
echo addcslashes($str,'m')."<br>";
echo addcslashes($str,'H')."<br>";
?>*/


?>
