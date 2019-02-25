<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Урок 3 Фибоначи</title>
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
Условие: В 1202г. Итальянский математик Леонард Пизанский (Фибоначчи) предложил такую задачу: пара кроликов каждый месяц дает приплод – двух кроликов (самца и самку), от которых через два месяца уже получается новый приплод, Сколько кроликов будет через год, если в начале года имелась одна пара? Согласно условию задачи числа, соответствующие количеству кроликов, которые появляются через каждый месяц, составляют последовательность 1, 1, 2, 3, 5, 8, 13, 21, 37, … Составьте программу, позволяющую найти все числа Фибоначчи, меньшие заданного числа N.
</header>
<section>
<?
	$x = 1;
	$n = rand(1,50);
	echo "если N = $n то числа фибоначи = " . '<br>';
	while ($n <= 50){
		echo $x . '<br>';
		$y = $x + $y;
		$x = $y + $x;
		echo $y . '<br>';
		if ($n < $y or $n < $x)
		break;
	}
?>
<div class="cod">
код программы:<br>
$x = 1;<br>
$n = rand(1,50);<br>
echo "если N = $n то числа фибоначи = " . '<\br>';<br>
while ($n <= 50){<br>
echo $x . '<\br>';<br>
$y = $x + $y;<br>
$x = $y + $x;<br>
echo $y . '<\br>';<br>
if ($n < $y or $n < $x)<br>
break;<br>
}<br>
</div>
</section>

</body>
</html>
