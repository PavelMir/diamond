<?php
$enter = $argv[1];
if($enter % 2 === 0){print "incorrect number, the number must be odd";}
else{
$limit = ceil($enter/2);
$space = $limit;
 
    for ($i = 1; $i <= $limit; $i++) {
        for ($j = 1; $j <= $space; $j++) {
            echo " ";
			
        }
        $space--;
 
        for ($j = 1; $j <= 2 * $i - 1; $j++) {
            echo "*";
        }
 
        echo PHP_EOL;
    }
 
    $space = 2;
 
	for ($i = 1; $i <= $limit; $i++) {
        for ($j = 1; $j <= $space; $j++) {
            echo " ";
        }
        $space++;
    
        for ($j = 1; $j <= 2 * ($limit - $i) - 1; $j++) {
            echo "*";
        }
    
        echo PHP_EOL;
    }
}
	



