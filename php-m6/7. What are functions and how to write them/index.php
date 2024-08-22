<?php 
//encapsulation 
function evenOrOdd($n){ //parameter 
    if($n%2==0){
        return true;
    }else{
        return false;
    }
}
$x = 12;
if(evenOrOdd($x)){ //argument
    echo "{$x} is the even number";
}else{
    echo "{$x} is the odd number";
}