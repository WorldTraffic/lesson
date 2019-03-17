<?
	$fa=1;
	$n=rand(1,15);
	echo "если N = $n то факториал = ";
	while ($n > 1){
		$fa = $n * $fa;
		$n--;
	} echo $fa;
?>
