<?php
$arr=["Tiwari","amit","hello"];
$arr1="";
// foreach($arr as $index=>$item)
// {
    
// }
$index = count($arr)-1;

for($index;$index>=0;$index--)
{
    $arr1=$arr1.$arr[$index].' ';
}
print_r(explode(' ',$arr1));



?>