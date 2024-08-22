<?php 
$fruits = array('a'=>'Array','b'=>'Banana','c'=>'Cherry','d'=>'Dates');
//shuffle($fruits);
//print_r($fruits);
$_fruits = $fruits;
shuffle($_fruits);
$key = array_rand($fruits);
echo $key;

echo "\n";

echo $fruits[$key];

print_r($_fruits);