<?php
$a=10;
$b=20;
$c=15;

$a = (int)readline();

switch(true){
    case ($a>$b && $a>$c):
        echo $a;
        break;    
        
    case ($a>$b && $a<$c):
        echo $c;
        break;

    default:
        echo $b;
        break;
}

echo " is the largest of three";