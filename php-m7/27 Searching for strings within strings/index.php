<?php 
$string = "Quick brown Fox fox jumps over the lazy dog";
//$offset = strpos($string,"Quick");
$offset = strrpos($string,"fox");
//if($offset!==false){
//    echo "\nWorld is found\n";
//}else{
//    echo "\nWorld was not found\n";
//}
echo $offset;