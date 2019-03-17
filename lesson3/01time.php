<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Урок 3 </title>
</head>

<body>
<?
	//получаем текущий час
	$hour = (int) strftime('%H');
	$welcome = ''; //инициализируем переменную для привествия
	if ($hour > '0' && $hour < '6') 
		echo $welcome = "Доброй ночи";
	 elseif ($hour >= '6' && $hour < '12') 
		echo $welcome = "Доброе утро";
	 elseif ($hour >= '12' && $hour < '18') 
		echo $welcome = 'Добрый день';
	 elseif ($hour >= '18' && $hour < '23') 
		echo $welcome = "Добрый вечер";
	 else 
		 echo $welcome = "Доброй ночи!";
?>
<br>

</body>
</html>
