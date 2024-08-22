<?php 
$n = 12;
$r = $n % 2;

switch ($n){
    case 0:
        echo "{$n} is an even number \n";
        break;
    default:
        echo "{$n} is an odd number\n";
}

echo "\n";
$color = "green";
switch($color){
    case "red":
        echo "Red is our favorite color";
        break;
    case "green":
        echo "Green is our favorite color";
        break;
    case "blue":
        echo "Blue is not our favorite color";
        break;
    default:
        echo "This color is ok";

}

echo "\n";
$color = "red";
switch($color){

    case "red":
    case "green":
        echo ucwords($color)." is our favorite color";
        break;
    case "blue":
        echo "Blue is not our favorite color";
        break;
    default:
        echo "This color is ok";
}

/*
echo "\n";
if('red' == $color || 'green' == $color){
    echo "Blue is not our favorite color";
}
*/