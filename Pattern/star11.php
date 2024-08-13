<?php

/*
A
BC
DEF
GHIJ
KLMNO


*/
$a='A';
for($i=1;$i<=5;$i++)
{
	for($j=1;$j<=$i;$j++)
	{
		
		echo $a;
		$a++;
	}
	echo PHP_EOL;
}

?>