<?php 
//encapsulation 
function isEven($n){ //parameter 
    if($n%2==0){
        return true;
    }
    return false;
    
}
function factorial( int $n){
    //if(gettype($n)!="integer"){
    //    return "invalid";
    //}
    $result = 1;
    for ($i=$n; $i>1; $i--){
        $result *= $i;
    }
    return $result;

}
function serve($foodType,$numberOfItems = "1 cup"){
    echo "{$numberOfItems} of {$foodType} have been served";
}
