<?php
$num = 5;
if($num > 0){
    $result = "positive";
}
else if($num < 0){
    $result = "negative";
if($num < -10){
    $result = "value is below -10";
}
}
else{
    $result = "its zero";
}

echo $result;