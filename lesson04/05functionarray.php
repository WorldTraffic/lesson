<?
	$arr=array('min'=>rand(1,10),'max'=>rand(11,20));
	for($arr['min'];$arr['min']<$arr['max'];$arr['min']++){
		$array[]=3*pow($arr['min'],2)+$arr['min']-4;
	} 
	var_dump($array);die();
	echo 'Минимальное значение функции y='.min($array).'<br>';
	echo 'Миксимальное значение функции y='.max($array).'<br>';
?>