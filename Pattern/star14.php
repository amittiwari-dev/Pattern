<?php
/**
 
*
**
***
****
*****
****
***
**
*
  
 */
$rows = 5;

for ($i = 1; $i <= $rows * 2 - 1; $i++) {
    for ($j = 1; $j <= $rows; $j++) {
        if (($i <= $rows && $j <= $i) || ($i > $rows && $j <= 2 * $rows - $i)) {
            echo "*";
        } else {
            echo " ";
        }
    }
    echo "\n";
}
?>
