<?php 
$string = "Hello World";
$length = strlen($string)-1;
for($i=$length; $i>=0;$i--){
    echo $string[$i];
}
echo PHP_EOL;

for($i=0;$i<$length;$i++){
    echo $string[$i*-1];
}
echo PHP_EOL;
echo strrev($string);