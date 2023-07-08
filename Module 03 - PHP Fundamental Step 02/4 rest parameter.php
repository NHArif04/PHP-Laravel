<?php 

function sumMachine(int $num1 = 0 , int $num2 = 0 , int ...$nums):int{
    $result = $num1+$num2;
    $count = count($nums);  //? count() is for count the number of item stored in array
    while($count--){
        $result += $nums[$count];
    }
    return $result;
}

echo sumMachine(1,4,5,6,2,34,5);

