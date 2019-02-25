<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Урок 3 Задание 2.2</title>
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
Условие: С помощью цикла while() напишите скрипт вывода всех четных чисел в диапазоне от 2 до 100 включительно
</header>
<section>
<?
	$x = 2;
	echo "Если начальное число = $x ";
	echo '<br>';
	echo "то четные числа от 2 до 100 = ";
	while ($x < 100) {
		echo $x.', ';
		$x=$x + 2;
		if ($x == 100)
		echo $x;
		}		
?>

<div class="cod">
код программы:<br>
$x = 2;<br>
echo '<\br>';<br>
echo "то четные числа от 2 до 100 = ";
while ($x < 100) {<br>
echo $x.', ';<br>
$x=$x + 2;<br>
if ($x == 100)<br>
echo $x;<br>
}<br>
</div>
</section>

</body>
</html>
