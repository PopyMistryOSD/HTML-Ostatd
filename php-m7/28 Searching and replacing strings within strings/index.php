<?php 
//$string = "Quick brown Brown Fox fox jumps over the lazy dog";
//$replacedString = str_replace('brown','red',$string, $count);
//echo $replacedString;
//echo PHP_EOL;
//echo $string;
//echo PHP_EOL;
//echo "Total Replacement: {$count}";


//------
//$string = "Quick brown Brown Fox fox jumps over the lazy dog";
//$string = str_ireplace(array('brown','red'),array('red','cat'),$string, $count);

//echo $string;
//echo PHP_EOL;
//echo "Total Replacement: {$count}";

//----
$string = "Quick brown Brown Fox fox jumps over the lazy dog";
$string = str_ireplace(array('brown','fox','dog'),'word',$string, $count);

echo $string;
echo PHP_EOL;
echo "Total Replacement: {$count}";