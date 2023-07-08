<?php 
    $name = "Nahid Hasan Arif";   //super global
function myName(){
    echo $GLOBALS['name'].PHP_EOL;
    global $name, $intro;         //! local variable should be declare as global inside of the function
    $intro = sprintf("My name is %s",$name);

}

myName();               //! calling the function to initialize the value of $intro and make it global
echo $intro;            //global


function staticFunc(){
    static $num;
    $num = $num ?? 1;
    echo $num++.PHP_EOL;
    if($num>10) return;
    staticFunc();
}

staticFunc();

/**
*? There are three type of scope of variable & their declaration:
*!   i. local scope
*!  ii. global scope => $GLOBALS[""] 0r $GLOBALS[''], global $variable
*! iii. static scope => static
*/