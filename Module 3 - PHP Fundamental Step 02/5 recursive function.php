<?php 
$value=>[];
function fibonacci($old, $new, $end){
    static $start;
    $start = $start ?? 1;
    if ($start>$end) {
        return;
    }
    $start++;
    echo $GLOBALS["value"]." ";
    fibonacci($new, $old+$new, $end);
}


fibonacci(0,1,10);