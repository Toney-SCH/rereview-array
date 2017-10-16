<?php
echo "数组操作符.<br>";

$a=array(1,3,5);
$k=array(1,3,5);
$b=array(3=>2,4,6);
$c=array(1,2,3,4,5);
$d=$a+$b;//联合有条件
for($i=0;$i<count($d);$i++)
	echo $d[$i]." ";
echo '<br>';
if($a!=$b) echo '不相等<br>';else echo '相等<br>';
if($a!=$k) echo '不相等<br>';else echo '相等<br>';
