<?php 
for( $num = 0; $num <= 10; $num++){
    echo "{$num} : ".(10-$num);
    echo PHP_EOL;
}

echo "===================\n";

while(--$num > 5):          //*? {} or : end[ loop/conditional ]
    echo $num.PHP_EOL;
endwhile;

echo "===================\n";

do{
    echo $num.PHP_EOL;
}while($num-->0);