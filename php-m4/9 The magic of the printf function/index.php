<?php 
$fname = "Isaac";
$lname = "Newton";
$middlename = "Nothing";

//printf("His name is %s %s.", $fname, $lname);

printf('His name is %3$s %1$s %2$s.', $fname, $middlename, $lname);//argument

echo"\n";

Printf('The binary equivalent of %1$d is %1$b',12);

echo"\n";

$n = 45.1267;
printf("%.2f",$n);
echo"\n";

$m =123;//0123
$n = 27;//0023
printf("%04d \n", $m);
printf("%05d \n", $n);
echo"\n";

$m =123.3253;//0123.3253
$n = 27.155;//0023.155
printf("%07.2f \n", $m);
printf("%07.2f \n", $n);