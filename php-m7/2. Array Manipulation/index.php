<?php 

$students =["rahime", "karim", 123, "monir"];

//var_dump($students);
$students[2] = "shafik";
$n = count($students);
for($i=0; $i<$n; $i++){
    echo $students[$i]."\n";
}

$student = array_pop($students);
$student = array_shift($students);
//echo $students."\n";

/*$n = count($students);
for($i=0; $i<$n; $i++){
    echo $students[$i]. "\n";
}
*/

$students[] ="jamal";
array_push($students, "kamal");

array_unshift($students, "salam");
array_push($students, "salam");

$n = count($students);
for($i=0; $i<$n; $i++){
    echo $students[$i]. "\n";
}