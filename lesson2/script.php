1. обьем куба <br>
<?php
	$s = 15; // ширина стороны
	echo ("Ширина = $s" . '<br>');
	echo ('формула куба s^3' . '<br>');
	echo ('s^3' . ' = ' . "$s^3" . ' = ');
	echo pow($s,3);
?>
<br>
<br>
2. длина вектора <br>
<?
	$ax = 5;
	$ay = 4;
	$az = 6;
	$a = (pow($ax,2)+pow($ay,2)+pow($az,2));
	//echo ($a . '<br>');
	echo sqrt($a);
?>
<br>
<br>
3. км/ч в м/с <br>
<?php
	$u = 35;
	echo ("скорость = $u км/ч") . '<br>';
	echo ("это = $u * 5 / 18 = ");
	echo ($u * 5 / 18 . " м/с");
?>
<br>
<br>
4. a^4 <br>
<?php
	$a = 5;
	echo pow($a,4);
?>
