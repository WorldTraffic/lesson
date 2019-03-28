<?
	define("DB_HOST",'localhost');
	define("DB_LOGIN",'root');
	define("DB_PASSWORD",'');
	define("DB_NAME",'gbook');
	$link=mysqli_connect(DB_HOST,DB_LOGIN,DB_PASSWORD,DB_NAME);
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name = mysqli_real_escape_string($link, trim(strip_tags($_POST['name'])));
        $email = mysqli_real_escape_string($link, trim(strip_tags($_POST['email'])));
        $msg = mysqli_real_escape_string($link, trim(strip_tags($_POST['msg'])));
        $sql = "INSERT INTO msgs (name, email, msg) VALUES ('$name', '$email', '$msg')";
        mysqli_query($link, $sql);
        header('Location: '.$_SERVER['REQUEST_URI']);
        exit;
    }
?>
<!-- Основные настройки -->

<!-- Сохранение записи в БД -->
<!-- Сохранение записи в БД -->

<!-- Удаление записи из БД -->
<?
	if(isset($_GET['del'])){
		$del=abs((int)$_GET['del']);
		if($del){
			$sql='DELETE FROM msgs WHERE id='.$del;
			mysqli_query($link,$sql);
		}
	}
?>
<!-- Удаление записи из БД -->
<h3>Оставьте запись в нашей Гостевой книге</h3>

<form method="post" action="/gbook.inc.php">
Имя: <br /><input type="text" name="name" /><br />
Email: <br /><input type="text" name="email" /><br />
Сообщение: <br /><textarea name="msg"></textarea><br />

<br />

<input type="submit" value="Отправить!" />

</form>
<!-- Вывод записей из БД -->
<?
	$sql='SELECT id,name,email,msg, UNIX_TIMESTAMP(datetime) as dt FROM msgs ORDER BY id DESC';
	$res=mysqli_query($link,$sql);
	echo '<p>Записей в базе ' .mysqli_num_rows($res) .'</p>';
	while($row = mysqli_fetch_assoc($res)){
		$dt = date('d-m-Y, H:i:s', $row['dt']);
		echo "<p><a href='mailto:{$row['email']}'>{$row['name']}</a> $dt написал: <br> {$row['msg']}</p>";
		echo "<p><a href='/index.php?id=gbook&del={$row['id']}'>Удалить</a></p>";
	}
?>
<!-- Вывод записей из БД -->
