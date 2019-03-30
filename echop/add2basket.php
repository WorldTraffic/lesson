<?
	require('./inc/lib.inc.php');
	require('./inc/db.inc.php');
	
	$id=abs((int)$_GET['put']);
	if($id){
		$count=$count+1;
		global $count;
	}
	add2Basket($id);
	header("Location: catalog.php");
	exit;
?>