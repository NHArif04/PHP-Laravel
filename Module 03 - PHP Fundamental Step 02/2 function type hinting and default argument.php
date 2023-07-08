<?php
function isEven(int $number=0){       //*? check for argument to be integer or type hinting for function parameter
    $num = $number;
    if("integer" != gettype($num)) //*? another check for argument to be integer => below php 7
        return "invalid";
    return $num%2==0;
}

function findFactorial(int $num=1){
    $result = 1;
    while($num>1){
        $result *= $num--;
    }
    return $result;
}