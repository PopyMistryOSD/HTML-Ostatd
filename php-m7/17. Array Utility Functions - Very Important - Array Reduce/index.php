<?php 
//$numbers = array(1,2,3,4,5,6);
//function sum($oldValue,$newValue){
//    return $oldValue+$newValue;
//}
//$sum = array_reduce($numbers, 'sum');
//echo $sum;



//sum(0,1); //1
//sum(1,2); //3
//sum(3,3); //6
//sum(6,4); //10
$numbers = array(1,2,3,4,5,6,7,8,9,10);
function sum($oldValue,$newValue){
    if($newValue%2==0){
       return $oldValue+$newValue; 
    }
    return $oldValue;
}
$sum = array_reduce($numbers, 'sum');
echo $sum;

echo count($numbers);