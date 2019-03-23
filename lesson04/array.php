<?
	$arr=array('min'=>rand(1,10),'max'=>rand(10,20));
	for($x;$x<$arr['max'];$x++){
		$y=3*pow($x,2)+$x-4;
	}
	echo 'min = '. $arr['min'].'<br>';
	echo "max = $y ".'<br>';


	/*

	$min=rand(1,10);
	$max=rand(10,20);
	for($x=1;$x<$max;$x+=0.5){
		$y=3*pow($x,2)+$x-4;
	} 
	echo "min = $min ".'<br>';
	echo "max = $y ".'<br>';
		var_dump ($x);die();	
	$arr=array('key1'=>1,'key2'=>6);
	unset($arr['key2']);
	print_r ($arr);
	echo $arr['key2'];
	$arr = array(1,2,3,4,5,6,7);
	unset($arr[2]);
	unset($arr[4]);
	print_r($arr);
	for($i=1;$i<7;$i++){
		$arr[$i]=$arr[$i]*10;
	}
		var_dump ($arr);die();	
*/		
?>