﻿<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Урок 5 function table</title>
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
table {
	background: #FFFFAD;
}
table tr {
	height:30px;
}
table td {
	width:50px;
	background:#19DD91;
	text-align:center;
}
</style>
</head>

<body>
<header>
Создание функции отрисовки таблицы умножения
</header>
<section>
<?
function drawTable() {
$cols = 1;
$rows = 1;
$x=1;
$y=1;
$color = red;
        function rows(){
			echo '<table>'."\n";
               echo '<tr>'."\n";
            for($rows=1;$rows<=10;$rows++){
					for($cols=1;$cols<=10;$cols++){
                    echo '<td>';
					$x=$cols*$rows;
					echo $x;
					echo '</td>'."\n";
					if ($cols == 10){
						echo '</tr>'."\n";
					}
				}

            }
		echo '</table>'."\n";
        }
}
	
?>
<? drawTable(); ?>
<? rows(); ?>
<? //cols(); ?>


</section>

</body>
</html>
