<?php 
$n = "12";
$students = array("rahime", "karim", 123, "monir");
//var_dump($students);
$n = count($students);
for($i=0; $i<$n; $i++){
    echo $students[$i]. "\n";
}


for($i=$n-1; $i>=0; $i--){
    echo $students[$i]. "\n";
}