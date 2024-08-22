<?php 
function fibonacci($old, $new,  $end){

    static $start;
    $start = $start ?? 0;

    if($start>$end){
        return;
    }
    $start++;

    echo $old." ";
    $_temp =$old+$new;
    $old = $new;
    $new = $_temp;

    fibonacci($old, $new,  $end);
}
fibonacci(0,1,15);