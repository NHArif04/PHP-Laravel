<?php 
$val1 = false || true;
$val2 = false or true;

var_dump($val1, $val2);

$var1 = true and false;
$var2 = false or true;

var_dump($var1, $var2);


/** 
 * operator precedence &&, || > assignment > and, or;
*/