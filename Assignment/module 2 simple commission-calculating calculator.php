<?php
    $tuitionFee = (int)readline("Enter an ammount : ");
    echo $tuitionFee>20000? $tuitionFee*0.25 : ($tuitionFee>10000? $tuitionFee*0.2:($tuitionFee>7000?$tuitionFee*0.15:"invalid"));