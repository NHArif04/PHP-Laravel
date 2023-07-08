<?php 
$number = "8balls";

switch ($number):
    case (string)"9balls":
        echo "Nine balls";
        break;
    case (string)8:
        echo "Eight";
        break;
    case (string)"8balls":
        echo "Eight balls";
        break;
endswitch;


$num = 1;

if(0 == $num):
    echo "\nthis number is zero";
    echo "\nthis number is not a negative number";

elseif (0 > $num):
    echo "\nthis number is negative number";
    echo "\nzero is greater than this number";

else :
    echo "\nthis number is positive number";
    echo "\nthis number is greater than negative number";
    echo "\nthis number is also greater than zero";
endif;