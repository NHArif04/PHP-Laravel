<?php
$num=5;
$num>0? $result = "Positive" : ($num<0? $result = ($num<-10? "Value is below -10":"Negative") : $result = "Zero");
echo $result;