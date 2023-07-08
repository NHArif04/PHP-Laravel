<?php 
include_once "2 function type hinting and default argument.php";
$fact = findFactorial(5);
echo $fact.PHP_EOL;

$num = 4;         //*! in another scope so memory address is not the same
echo PHP_EOL.isEven($num)?"Even":"Odd";

function findFibonacci(int $num=0, int $num1=0, int $num2=1):int{
    if($num<=0) return 0;
    $result = 0;
    while(--$num > 0){
        $result = $num1 + $num2;
        $num1 = $num2;
        $num2 = $result;
    }
    return $result;
}

$first = readline('Enter the first number of the series:');
$second = readline('Enter the second number of the series:');
$series = readline('Enter the number position you want to know:');

//! list($first, $second, $series) = explode(' ', readline('Enter the first number, second number and series position separated by spaces: '));

echo findFibonacci($series, $first, $second);