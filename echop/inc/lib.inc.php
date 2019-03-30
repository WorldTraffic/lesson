<?
	function addItemToCatalog($title,$autor,$pubyear,$price){
		$link=mysqli_connect(DB_HOST,DB_LOGIN,DB_PASSWORD,DB_NAME);
		$sql="INSERT INTO catalog (title,author,pubyear,price) VALUES (?,?,?,?)";
		if(!$stmt = mysqli_prepare($link, $sql)){
			return false;
		} else {
		mysqli_stmt_bind_param($stmt,'ssii',$title,$autor,$pubyear,$price);
		mysqli_stmt_execute($stmt);
		mysqli_stmt_close($stmt);
		return true;
		}
	}
	function selectAllItems (){
		$link=mysqli_connect(DB_HOST,DB_LOGIN,DB_PASSWORD,DB_NAME);
		$sql="SELECT id,title,author,pubyear,price FROM catalog";
		if(!$result=mysqli_query($link,$sql)){
			return false;
		} else {
			$items=mysqli_fetch_all($result, MYSQLI_ASSOC);
			mysqli_free_result($result);
			return $items;
		}
	}
	function saveBasket(){
		global $basket;
		$basket=base64_encode(serialize($basket));
		setcookie('basket','$basket','0x7FFFFFFF');
	}
	function basketInit(){
		global $basket, $count;
		if(!isset($_COOKIE['basket'])){
			$basket = array('orderid'=>uniqid());
			saveBasket();
		} else {
			$basket=unserialize(base64_decode($_COOKIE['basket']));
			$count=count($basket)-1;
		}
	}
	function add2Basket($id){
		global $basket;
		$basket['$id']=1;
		if($basket!=0){
			$coutn++;
		}
		saveBasket();
	}
	function myBasket(){
		global $link, $basket;
		$goods=array_keys($basket);
		array_shift($goods);
		$ids=implode(",",$goods);
		$sql="SELECT id,title,autor,pubyear,price FROM catalog WERE id IN ($ids)";
		if(!$result=mysqli_query($link,$sql))
			return false;
			$items=result2Array($result);
			mysqli_free_result($result);
			return $items;
	}
	function result2Array($data){
		global $basket;
		$arr=array();
		while($row=mysqli_fetch_assoc($data)){
			$row['quantity']=$basket[$row['id']];
			$arr[]=$row;
		}
		return $arr;
	}