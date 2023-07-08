<?php
$varsity = "BAUST";
$college = "Wins";
$online = "Ostad";
if ("BAUST" == $varsity || "Wins" == $college) {
    if ("BAUST" == $varsity)
        echo "It has few worst teacher";
    else
        echo "It has bad teacher";
} elseif ("Ostad" == $online) {
    echo "It doesn't have any worst teacher";
} else {
    "It may have bad teacher";
}


/**
 ** When we writing conditional statement we need to be sure about that 
 ** the scalar value is in left to avoid programming error;
 */