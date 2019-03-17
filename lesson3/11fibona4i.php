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
	$y = 0;
	$n = rand(1,200);
	echo "если N = $n то числа фибоначи = ";
		echo $x;
	while ($n <= "$n+1"){
		$y = $x + $y;
		$x = $y + $x;
		if ("$n" < "$y"){
		break;
		} else 
		echo ', ' . $y;
		if ("$n" < "$x"){
		break;
		} else 
		echo ', ' . $x;
	}
?>
<div class="cod">
код программы:<br>
$x = 1;<br>
$n = rand(1,200);<br>
echo "если N = $n то числа фибоначи = ";<br>
echo $x;<br>
while ($n <= "$n+1"){<br>
$y = $x + $y;<br>
$x = $y + $x;<br>
if ("$n" < "$y"){<br>
break;<br>
} else <br>
echo ', ' . $y;<br>
if ("$n" < "$x"){<br>
break;<br>
} else <br>
echo ', ' . $x;<br>
}<br>
</div>
</section>

</body>
</html>
