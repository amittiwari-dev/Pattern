<?php
/*
   *
  **
 ***
  **
   *



*/

$rows =3;

    // Upper part of the pattern
    for ($i = 1; $i <= $rows; $i++) {
        for ($j = 1; $j <= $rows - $i; $j++) {
            echo " ";
        }
        for ($k = 1; $k <= $i; $k++) {
            echo "*";
        }
        echo "\n";
    }

    // Lower part of the pattern
    for ($i = $rows - 1; $i >= 1; $i--) {
        for ($j = 1; $j <= $rows - $i; $j++) {
            echo " ";
        }
        for ($k = 1; $k <= $i; $k++) {
            echo "*";
        }
        echo "\n";
    }


// Number of rows for the pattern


?>

