<?php 
//ternary operator
$n =12;
if(12 == $n){
    echo "Twelve";
}else if (10 == $n){
    echo "Ten";
}else{
    echo "A Number";
}

echo "\n";

//$numberInWord = (12 == $n) ? "Twelve" : "A Number";
$numberInWord = (12 == $n) ? "Twelve" : ((10 == $n)? "Ten" : "A Number");
echo $numberInWord;

echo "\n";

if($n % 2 == 0){
    echo "Even Number";
}else{
    echo "Odd Number";
}

echo "\n";
// ternary operator
$result = ($n % 2 == 0) ? "{$n} is a EVEN number" : "{$n} is a Odd Number";
echo $result;
