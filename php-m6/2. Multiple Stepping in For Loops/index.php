<?php 
for($i = 10; $i > 0; $i--){ //($-=1) same to same ($i--)
    echo $i;
    echo PHP_EOL;
}

echo "\n";

for($i = 10; $i > 0; $i-=1){ 
    echo $i.":".(11-$i);
    echo PHP_EOL;
}

echo "\n";

for($i = 10, $j=1; $i > 0; $i-=1, $j++){ 
    echo $i.":".$j;
    echo PHP_EOL;
}




