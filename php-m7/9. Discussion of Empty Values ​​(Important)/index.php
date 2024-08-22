<?php 
$name = false;

if(isset($name)){
    echo "Name is set";
}else{
    echo "Not set";
}
echo "\n";

if(empty($name)){
    echo "Name is empty";
}else{
    echo "Not empty";
}
echo "\n";

if(isset($name)&& (is_numeric($name) || $name != '')){
    echo "Name is set and it's not empty";
}else{
    echo "Name is either not set or it's empty";
}