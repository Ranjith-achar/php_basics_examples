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

?>
