<?
	define(DB_HOST,'localhost');
	define(DB_LOGIN,'root');
	define(DB_PASSWORD,'');
	define(DB_NAME,'eshop');
	define(ORDERS_LOG,'orders.log');
	$basket=[];
	$count=0;
	$link=mysqli_connect(DB_HOST,DB_LOGIN,DB_PASSWORD,DB_NAME);
	if (!$link){
		echo 'не подключено';
	} echo 'подключено';
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $title = mysqli_real_escape_string($link, trim(strip_tags($_POST['title'])));
        $author = mysqli_real_escape_string($link, trim(strip_tags($_POST['author'])));
        $pubyear = mysqli_real_escape_string($link, trim(strip_tags($_POST['pubyear'])));
        $price = mysqli_real_escape_string($link, trim(strip_tags($_POST['price'])));
        $sql = "INSERT INTO catalog (title, author, pubyear, price) VALUES ('$title', '$author', '$pubyear', '$price')";
        mysqli_query($link, $sql);
        header('Location: '.$_SERVER['REQUEST_URI']);
        exit;
    }
?>
<form method="post" action="<? echo $_SERVER['REQUEST_URI'] ?>">
	<input type="text" name="title" placeholder="Название"><br>
	<input type="text" name="author" placeholder="Автор"><br>
	<input type="text" name="pubyear" placeholder="Год публикации"><br>
	<input type="text" name="price" placeholder="Цена"><br>
</form>

<input type="submit" value="Добавить!" />
