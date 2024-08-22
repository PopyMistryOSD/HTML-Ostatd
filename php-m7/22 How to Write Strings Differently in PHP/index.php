<?php 
$name = "Rakib";

$string01 = "My name is $name \n \t New data";
echo $string01;

$heredoc = <<< EOD
data 1
new line {$name} \n
more text 
EOD;
echo $heredoc;