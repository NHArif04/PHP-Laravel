<?php 
$name = false? "Nahid" : (false? "Arif" : (true?"Mithi":"Hasan"));

switch ($name){
    case "Nahid":
    case "Hasan":
    case "Arif":
        echo "{$name} is my name";
        break;
    case "Mithi":
    case "Maharin":
    case "Khan":
        echo "{$name} is her name";
        break;
    default:
        echo "$name is not of us";
        break;
}


/** 
**    $n =10;
**    $result = ( $n % 2 == 0 ) ? "A" : ( $n == 11 ) ? "B" : "C" ;
**    echo $result; 
run hoy na;
*/