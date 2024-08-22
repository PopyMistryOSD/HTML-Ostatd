<?php 
$i = 0;
while ($i<5){
    echo $i;
    echo PHP_EOL;
    $i++;
}
echo "=======\n";
$j=0;
while ($j++ <5){
    echo $j;
    echo PHP_EOL;
}
echo "=======\n";
$j=0;
while (++$j <5){
    echo $j;
    echo PHP_EOL;
}
/*$x=$y++; ay katha ter mana holo 
$x = $y;
$y = $y + 1;
*/
$x = $y = 5;
$x = $y++;
echo $x.":".$y;