<?php 
$n = 12;
if ($n % 2 == 0){
    echo "Even Number";
}else{
    echo "Odd Number";
}
echo PHP_EOL;
//Alternative Syntax a
if ($n % 2 == 0):
    echo "Even Number";
    echo PHP_EOL;
    echo "Some Text";
    
else:
    echo "Odd Number";
    echo PHP_EOL;
    echo "Some Text++";
endif;

echo PHP_EOL;

switch ($n % 2):
    case 0:
    echo "Even Number";
    break;
    default:
    echo "Odd Number";
    endswitch;


    echo PHP_EOL;