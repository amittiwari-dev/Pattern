<?php
/* 

 *
 *  *
 *  *  *
 *  *  *  *
 *  *  *  *  *
 *  *  *  *
 *  *  *
 *  *
 *
 
*/
$i;$j;
for($i=0;$i<=5;$i++)
{
	for($j=1;$j<=$i;$j++)
	{
		echo " * ";
	}
	echo PHP_EOL;
	if($i==5)
		{
			for($i=4;$i>=0;$i--)
		{
			for($j=1;$j<=$i;$j++)
			{
				echo " * ";
			}
			echo PHP_EOL;
		}
		break;
		
		}
}



?>