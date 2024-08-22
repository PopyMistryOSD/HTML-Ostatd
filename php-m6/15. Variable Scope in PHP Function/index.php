<?php 
/*
$name = "Earth"; //global scope

function doSomething(){
    global $name;
    echo $name;
    //echo $GLOBALS['name'];
}

doSomething();
*/

/*
function doSomething(){
    $name = "Earth";  //local scope
    echo $name;
}
doSomething();
echo $name;
*/

function doSomething(){
    static $i; //static scope
    $i = $i ?? 0;
    $i++;
    echo $i;
    echo "\n";
}
function doExtra(){
    static $i;
    $i = $i ?? 0;
    $i++;
    echo $i;
    echo "\n";
}
doSomething();
doSomething();
doSomething();
doExtra();
doExtra();
doSomething();
doExtra();