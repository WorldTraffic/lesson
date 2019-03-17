<?php
	$visitCouters = 0;
	if (isset($_COOKIE['visitCouters'])){
		$visitCouters = $_COOKIE['visitCouters'];
		} 
		$visitCouters++;
		setcookie('visitCouters', $visitCouters);
	$lastVisit= '';
	if (isset($_COOKIE['lastVisit'])){
		$lastVisit = date('d-m-Y', $_COOKIE['lastVisit']);
	}
	if (date('d-m-Y', $_COOKIE['lastVisit']) != date('d-m-Y')){
		setcookie('visitCouters', $visitCouters);
		setcookie('lastVisit', time());
	}
	/*$user = array (
		'name' => 'Jon',
		'login' => 'admin',
		'pass' => '1234'
		);
	$str = serialize($user);
	setcookie("user",$str);

	$user = unserialize($_COOKIE["user"]);
	print_r($user);
	*/
?>