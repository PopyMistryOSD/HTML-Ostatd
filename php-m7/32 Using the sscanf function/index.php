<?php 
$name = "Popy Mistry 01758325987 popymistry@gmail.com";
$parts = sscanf($name, "%s %s %11s");
print_r($parts);

sscanf($name, "%s %s %11s %s", $fname, $lname, $mobile, $email);
echo $email;

$hexColor = "#FF2F44";
ssCanf($hexColor, "#%2x%2x%2x", $red, $green, $blue);
echo $blue;