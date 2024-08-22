<?php 
//$numbers =array(12,13,14,15,16,17,18,19,20);
//$numbers = array();
//for($i=12; $i<21; $i++){
//    array_push($numbers,$i);
//}
//print_r($numbers);


//$numbers = range(12,20,2);
//print_r($numbers);


//foreach(range(11,20,2) as $evenNumbers){
//    echo $evenNumbers. "\n";
//}


foreach(range(0,60,11) as $number){
    if($number > 0){
        echo $number. "\n";
    }   
}