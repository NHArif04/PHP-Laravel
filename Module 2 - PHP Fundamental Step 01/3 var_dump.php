<?php

$var = "nahid";
echo ucwords($var).PHP_EOL; // {$var} or $var is same
//unset($var);  # Unset the variable
var_dump($var); //variable information will print
$uvar = strtoupper($var);

echo "\n{$uvar}\n";

printf("My name is %s",$var);
