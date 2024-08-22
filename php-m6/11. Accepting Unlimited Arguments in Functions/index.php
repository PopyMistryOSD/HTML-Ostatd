<?php 
/*
function sum(int $x=0, int $y=0, int $z=0):int{
    return $x+$y+$z;
}
echo sum(5,6,7); 
*/

function sum($x, $y, int ...$numbers):int{
    $result = 0;
    for($i=0; $i<count($numbers); $i++){
        $result += $numbers[$i];
    }
    return $result;
}
echo sum(5,6,1,2,3,4);