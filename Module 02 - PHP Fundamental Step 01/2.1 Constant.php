<?php
define('PI', 3.1415927001);
echo PI;
$const = 'CONSTANT';
echo PHP_EOL."Value 
using 
'CONSTANT() : '{$const('PI')}";

// Output:  3.1415927001
/**
** in this program $const holds a string 
** that is similar to a function. 
** When the value of $const is extracted 
** then it acts as function;
*/
//Output Value using CONSTANT():   3.1415927001