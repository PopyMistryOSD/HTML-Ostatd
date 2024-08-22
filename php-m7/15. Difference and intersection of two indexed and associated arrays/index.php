<?php 
$numbers1 = array(1,4,3,65,54,7,23,1,2);
$numbers2 = array(88,3,21,44,3,28,1,2,7);

$fruits1 = array("a"=>"apple","b"=>"banana","c"=>"lemon"); 
$fruits2 = array("d"=>"pineapple","b"=>"malta","e"=>"grapes","c"=>"lemon");

$common = array_intersect($numbers1,$numbers2);
//$common = array_intersect($number1,$number2);
$commonf = array_intersect_assoc($fruits1,$fruits2);
print_r($common);
print_r($commonf);

$diff = array_diff($numbers1,$numbers2);
//$diff = array_diff($fruits1,$fruits2);
$diff = array_diff_assoc($fruits1,$fruits2);
print_r($diff);
print_r($diff);