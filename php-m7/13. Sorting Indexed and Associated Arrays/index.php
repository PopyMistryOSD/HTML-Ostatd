<?php 
$fruits = array('a'=>'apple','b'=>'banana','f'=>'orange','p'=>'plum','d'=>'dates','m'=>'mango');
$numbers = array(11,2,56,3,2,77,5);
ksort($numbers,SORT_STRING);
print_r($numbers);

$random = array("apple","Apple","banana","Banana","Pineapple");
sort($random,SORT_STRING | SORT_FLAG_CASE);
print_r($random);


//for ($i = 0; $i<count($numbers);$i++){
//   echo $numbers[$i]. "\n";
//}

//foreach($numbers as $number){
//    echo $number. "\n";
//}