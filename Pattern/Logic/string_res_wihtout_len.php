<?php
error_reporting(0);
$a="Amit Tiri";
$k=0;
while($a[$k] != null)
{
    $k++;
}

for($i=$k-1;$i>=0;$i--)
{
   echo strtolower($a[$i]);
}

?>