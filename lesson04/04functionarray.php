<?
	$arr=array('min'=>rand(1,10),'max'=>rand(11,20));
	for($arr['min'];$arr['min']<$arr['max'];$arr['min']++){
		$array[]=3*pow($arr['min'],2)+$arr['min']-4;
	} 
	echo 'Минимальное значение функции '.min($array).'<br>';
	echo 'Миксимальное значение функции '.max($array).'<br>';
?>