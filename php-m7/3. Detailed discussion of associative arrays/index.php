<?php 
//$students = ['12k'=>'Hasan', '13k'=>'Kamal', '14k'=>'Jamal'];

//$students =['Hasan', 'Karime', 'Jamal'];
//echo $students['12k'];

$foods = [
    'vegetables' => 'brinjal,brocolli, carrot,capsicam',
    'fruits' => 'orange, banana,apple',
    'drinks' => 'water, milk'

];
//echo $foods['vegetables'];
 
/*for($i=0;$i<count($foods);$i++){
    echo $foods[$i];
}*/  //obset a kono element ny 

//foreach($foods as $key=>$value){  //associative array ar modda loop ar niom
//    echo $key. "=". $value. "\n";
//}
$keys=array_keys($foods);
//print_r($keys);
for($i=0;$i<count($keys);$i++){
    $key=$keys[$i];
    echo $foods[$key]."\n";
}