<?php 
$fruits = array('apple','banana','orange','plum','dates','mango');
 
$random = array("a"=>12,"b"=>45,"c"=>34,"d"=>22,"e"=>77,"f"=>31,12=>78,"g"=>87);
//$someFruits =array_slice($fruits,2);
//$someFruits =array_slice($fruits,2,2);
//$someFruits =array_slice($fruits,-5,-1);
//$someFruits =array_slice($fruits,-5,-1,true);
//$someFruits =array_slice($fruits,3,3,true);
$randomData = array_slice($random,3,null,true);
//print_r($someFruits);
print_r($randomData);