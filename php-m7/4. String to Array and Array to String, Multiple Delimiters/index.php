<?php
 $vegetables = explode(',', 'brinjal,brocolli, carrot, capsicam,potato,sweet-potato');
 //delimeter
 //var_dump($vegetables);
 //echo $vegetables[0];
 $vegetablesString= join(',', $vegetables);
 echo count($vegetables);