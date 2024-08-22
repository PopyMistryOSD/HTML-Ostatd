<?php 
$name="Earth";
var_dump($name);

echo "\n";
$age=13;
var_dump($age);

echo "\n";
$age1=13.0566;
var_dump($age1);

echo "\n";
$age2=null;
var_dump($age2);

echo "\n";
$age3='';
var_dump($age3);

echo "\n";
$name1 = "Popy";
$name2 = "Mistry";
var_dump($name1,$name2);

/* Integer Type/php data types
1.Integer Int 
2.Double / Float 
3.Boolean
4.Null 
5.String 
6.Array 
7.Object 
8.Resourced 
*/
//Boolean
echo "\n";
$result = true;
var_dump($result);

echo "\n";
$name1 ="Earth";
$uname1 = strtoupper($name1);
echo "we're  living on {$name1}\n";
printf("we're  living on %s", $name1);

echo"\n";
$fname = "Jit";
$lname = "Halder";
//printf("His name is %s %s", $fname, $lname);
printf("His %s name is %s %s", "Full", $fname, $lname);

//multipol line print
echo"\n";
echo"My 
name is 
Popy Mistry.
{$fname} {$lname}\n
How are you?";

echo "\n";
$planet1 = "Mercury";
$planet2 = "Jupiter";
$planet3 = "Saturn";
$planet4 = "Epsilon";
echo "The smallest planet is " .$planet1. " and the biggest planet is " .$planet2."\n";
echo "The smallest planet is {$planet1} and the biggest planet is {$planet2}\n";
printf("The smallest planet is %s and the biggest planet is %s \n", strtoupper($planet1), strrev($planet2));