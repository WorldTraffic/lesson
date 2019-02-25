<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Урок 3 Бактерий</title>
<style>
body {
	background:#EDEDED;
	font-family:Cambria, "Hoefler Text", "Liberation Serif", Times, "Times New Roman", serif;
	font-size:16px;
	margin:0 auto;
	text-align:center;
	padding:0;
	width:50%;
}
header {
	font-size:20px;
	padding-top:25px;
}
section {
	font-size:18px;
	padding:30px;
	text-align:left;
}
.cod {
	background:#FFFFFF;
	margin-top:20px;
	padding:5px;
}
</style>
</head>

<body>
<header>
Условие: Каждая бактерия делится на две в течение одной минуты. Начальное значение бактерий X. Сколько их станет через Y минут. Начальные значение сгенерировать с помощью функции rand(1,50)
</header>
<section>
<?
	$x = rand(1,50);
	$y = rand(1,50);
	echo "Если начальное количество бактерий = $x шт.";
	echo '<br>';
	echo "А время = $y м. ";
	echo '<br>';
	echo "То через $y м. ";
	while ($y < 51) {
		$x=$x*2;
		$y--;
		if ($y == 0)
		break;
	}		
		echo 'образуется'.' '.$x.' '.'бактерий';
?>

<div class="cod">
код программы:<br>
$x = rand(1,50);<br>
$y = rand(1,50);<br>
echo "Если начальное количество бактерий = $x шт.";<br>
echo '<\br>';<br>
echo "А время = $y м. ";<br>
echo '<\br>';<br>
echo "То через $y м. ";<br>
while ($y < 51) {<br>
$x=$x*2;<br>
$y--;<br>
if ($y == 0)<br>
break;<br>
}<br>
echo 'образуется'.' '.$x.' '.'бактерий';<br>
</div>
</section>

</body>
</html>
