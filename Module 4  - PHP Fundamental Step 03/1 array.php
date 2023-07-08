<?php 
$students = [
    "Nahid",
    "Hasan",
    "Arif"
];

array_unshift($students, "Md.");
array_push($students, "\n");
$student = ["Most","Maharin","Khan","Mithi"];
array_push($students, $student);
$arraySize = count($students);
for ( $i=0; $i<$arraySize; $i++){
    echo $students[$i].PHP_EOL;
}

/** 
** Array declaration 
$array_name = array(value1, value2, ...);
$array_name = [value1, value2, ...];

*? To add value to array
array_unshift($array, value); -> insert on [0] or first index
array_push($array, value); -> insert on [count] or last index
$array[] = value; -> insert on last index

*! To remove value from array
array_shift($array); -> remove from first
array_pop(); -> remove from last
*/