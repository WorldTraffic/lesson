<? 
	require('../inc/lib.inc.php');
	require('../inc/db.inc.php');

	/*
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
	$title = clearString($link, $_POST['title']);
	$author = clearString($link, $_POST['author']);
	$pubyear = clearString($link, $_POST['pubyear']);
	$price = clearString($link, $_POST['price']);
*/
	if(!addItemToCatalog($title,$author,$pubyear,$price)){
		echo 'произошла ошибка';
	} else {
		header('Location: add2cat.php');
		exit;
	}
?>