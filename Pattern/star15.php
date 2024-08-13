<?php
/** 
  *
 **
***
 **
  *

*/
  for ($i = 1; $i <= 3; $i++) {
        for ($j = 1; $j <= 3 - $i; $j++) {
            echo " ";
        }
        for ($k = 1; $k <= $i; $k++) {
            echo "*";
        }
        echo "\n";
    }
	
	  for ($i1 = 1; $i1 <= 3; $i1++) {
        for ($j1 = 1; $j1 <=$i1; $j1++) {
            echo " ";
        }
        for ($k1 = $i1; $k1 <=2; $k1++) {
            echo "*";
        }
        echo "\n";
    }
?>