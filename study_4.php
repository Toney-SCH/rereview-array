<?php
echo "数组排序.<br>";


function show_array($demo){
	echo '<br>';
	while(list($key,$value)=each($demo)){
		echo "demo[".$key."] = $value<br>";
	}
	echo '<br>';
}

$demo = array('cat','fish','dog','ant','bee');
show_array($demo);

sort($demo);//从小到大排序
show_array($demo);

$demo = array('Tires' =>100 , 'Oil' =>10,'Spark plugs'=>8);
show_array($demo);

asort($demo);
show_array($demo);//对value排序

ksort($demo);
show_array($demo);//对key排序

rsort($demo);
show_array($demo);//从大到小（其他同理）
