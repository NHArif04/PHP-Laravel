<?php
//By this double slash this line is hidden from compiler but it should be inside of start and end syntax;
/** 
** Variable's data types:
** Integer int 
** Double / Float
**String
**Void
**Boolean bool 
**Resource
**Object
 */
$var = "first variable\n"; //any data type can be define using $ sign
echo $var;
var_dump(strrev($var));//strinng reverse and print size, type and value using var_dump 
$var = 12;          //changing variable's value with another data type
echo "{$var} \n";   // "\n" is for print new line
var_dump(strrev($var)); //trying to reverse the string



//End syntax is not necessary
?> 