<?php 
$string = "Hello World, world How are you?";
$string2 = "Quick brown fox jumps over the lazy dog";
$parts = explode(" ", $string);
print_r($parts);
echo PHP_EOL;
$original = join(" ", $parts);
echo $original;

//$parts2 = str_split($string);
//print_r($parts2);

$parts3 = strtok($string, ",");
//while($parts3 !== false){
//    echo $parts3. "\n";
//    $parts3 = strtok(" ,");
//}
print_r($parts3);

//$parts4 = strtok($string2," ");
//while($parts4 !== false){
//    echo $parts4. "\n";
//    $parts4 = strtok(" ,");
//}
echo PHP_EOL;
$parts5 = preg_split("/ |,/",$string);
print_r($parts5);