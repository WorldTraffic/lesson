<?
	// подключение библиотек
	require('./inc/lib.inc.php');
	require('./inc/db.inc.php');
		if(isset($_COOKIE['counts'])){
		setcookie('counts',$counts,'0');
		} 
	?>
<html>
<head>
	<title>Корзина пользователя</title>
</head>
<body>
	<h1>Ваша корзина</h1>
<?
if (myBasket()==false){
echo "<h1>Корзина пуста<h1>";
?>
<div align="left">
	<input type="button" value="Вернутся в каталог"
                      onClick="location.href='catalog.php'" />
</div>
<? exit;
}
?>
<?
myBasket();
$i=0; //порядковый номер
$sum=0; //общая сумма заказа
?>
<table border="1" cellpadding="5" cellspacing="0" width="100%">
<tr>
	<th>N п/п</th>
	<th>Название</th>
	<th>Автор</th>
	<th>Год издания</th>
	<th>Цена, грн.</th>
	<th>Количество</th>
	<th>Удалить</th>
</tr>
<?
$goods2=myBasket();
foreach($goods2 as $item){
	$i++;
	$sum+=$item['price'];
	?>
	<tr>
		<td><? echo $i ?></td>
		<td><?=$item['title']?></td>
		<td><?=$item['author']?></td>
		<td><?=$item['pubyear']?></td>
		<td><?=$item['price']?></td>
		<td><? echo 1?></td>
		<td><a href="http://eshop/delete_from_basket.php?id=eshop&del=<? echo $item['id'] ?> ">Удалить с корзины</a></td>
		
<?}	
?>
</table>

<p>Всего товаров в корзине на сумму: грн. <? echo $sum?></p>

<div align="center">
	<input type="button" value="Оформить заказ!"
                      onClick="location.href='orderform.php'" />
</div>

</body>
</html>