<?
	$arr=array('min'=>rand(1,10),'max'=>rand(10,20));
	for($x;$x<$arr['max'];$x++){
		$y=3*pow($x,2)+$x-4;
	}
	echo 'min = '. $arr['min'].'<br>';
	echo "max = $y ".'<br>';
?>