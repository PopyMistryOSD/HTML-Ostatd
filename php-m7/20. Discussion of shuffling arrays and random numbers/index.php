<?php 
$numbers = range(40,72);
//print_r($numbers);
//echo count($numbers);
$random = mt_rand(0,32);
echo $numbers[$random]. "\n";

$random = mt_rand(0,32);

$luck = $numbers[$random];
if($luck % 2 ==0){
    echo "Head";
}else{
    echo "Tail";
} 

echo "\n";

shuffle($numbers);
print_r($numbers);
$randomNumber = $numbers[3];
echo $randomNumber;