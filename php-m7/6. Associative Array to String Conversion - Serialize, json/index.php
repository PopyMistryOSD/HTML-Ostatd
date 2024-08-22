<?php 
$student=array(
    'fname'=> 'Jamal',
    'lname'=> 'Ahmed',
    'age'=>'20',
    'class'=>8,
    'section'=>'8'
);
print_r($student);

echo $student['fname']." ".$student['lname']. "\n";

printf("%s %s \n",$student['fname'], $student['lname']);

$serialized = serialize($student);
echo $serialized;
echo "\n";

$newstudent = unserialize($serialized);
print_r($newstudent);

$jsondata = json_encode($student);
echo $jsondata;
echo "\n";
$student2 = json_decode($jsondata, true);
print_r($student2);


