<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Урок 3 Стоимость груза</title>
</head>

<body>
<?
	$price=30;
	$pas=rand(1,50);
	$passanger=0;
	echo "В самолете летит $pas пассажиров" . '<br>';
	while ($pas >= 1){
		$gryz=rand(1,100);
		$gryzprice = $gryz*$price;
		--$pas;
		$passanger++;
		$all=$all+$gryz;
		echo "У $passanger пассажира $gryz кг груза, стоимость перевозки составит " . $gryzprice . ' USD <br>';		
	} echo "всего перевезено $all кг груза";
?>
<br>

</body>
</html>
