<!-- Основные настройки -->
<?
	//include('/db.php');
	$link=mysqli_connect("localhost","root","","gbook");
	/*if(!$link){
		echo 'Невозможно установить подключение';
	}
	echo 'подключено';*/
?>
<!-- Основные настройки -->

<!-- Сохранение записи в БД -->
<?
	mysqli_query ($link, "INSERT INTO msgs (name, email, msg) VALUES ('$name','$email','$msg')")
?>
<!-- Сохранение записи в БД -->

<!-- Удаление записи из БД -->

<!-- Удаление записи из БД -->
<h3>Оставьте запись в нашей Гостевой книге</h3>

<form method="post" action="<?= $_SERVER['REQUEST_URI']?>">
Имя: <br /><input type="text" name="name" /><br />
Email: <br /><input type="text" name="email" /><br />
Сообщение: <br /><textarea name="msg"></textarea><br />

<br />

<input type="submit" value="Отправить!" />

</form>
<!-- Вывод записей из БД -->

<!-- Вывод записей из БД -->
