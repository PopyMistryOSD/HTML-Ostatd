<?php 
$fruits = array('a'=>'apple','b'=>'banana','f'=>'orange','p'=>'plum','d'=>'dates','m'=>'mango');
$numbers = array(11,2,56,3,2,77,5);
if(in_array(56,$numbers,true)){
    echo '56 is found'. "\n";
}
$offset = array_search(56,$numbers);
echo $offset. "\n";

if(key_exists('bb',$fruits)){
    echo "key_exists";
}