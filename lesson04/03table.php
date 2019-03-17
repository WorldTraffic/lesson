<!doctype html>
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
}
.cod {
	background:#FFFFFF;
	margin-top:20px;
	padding:5px;
}
table {
	margin:auto;
}
table tr {
	height:30px;
}
table td, table th {
	width:50px;
	text-align:center;
}
.first {
	background:#A69DF8;
}
</style>
</head>

<body>
<header>
</header>
<section>
<?
//function drawTable() {
$cols = 1;
$rows = 1;
$x=1;
$y=1;
	echo '<table>'."\n";
			for($rows=1;$rows<=10;$rows++){
		echo '<tr>'."\n";
				for($cols=1;$cols<=10;$cols++){

				if($cols==1){
					echo '<th class="first">';
						$x=$cols*$rows;
							echo $x;
							echo '</th>'."\n";
							
					} elseif($rows==1){
					echo '<th class="first">';
						$x=$cols*$rows;
							echo $x;
							echo '</th>'."\n";
							
					} else {
					echo '<td>';
						$x=$cols*$rows;
							echo $x;
							echo '</td>'."\n";
								if ($cols == 10){
									echo '</tr>'."\n";
								}
					}
				}
			}
	echo '</table>'."\n";
?>
<? //drawTable(); ?>
</section>

</body>
</html>
