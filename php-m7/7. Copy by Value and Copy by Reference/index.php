<?php 
$person = array('fname'=>'Hello','lname'=>'World');
$newperson = $person;  //copy by reference //shallow copy
$newperson['lname']='Pluto';  //copy by value //deep copy

print_r($person);
print_r($newperson);


function printData($person){
    $person['fname'].= " Changed";
    print_r($person);
}
printData($person);
print_r($person);