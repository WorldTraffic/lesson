<?

/* НЕ РАБОТАЕТ
class MyClass{
	public $name = 'John';
	public function sayHello(){
		//обращение к свойству
		echo 'привет' . $this->name . '!';
		//обращение к методу
		$this-> drawHr();
	}
	public function drawHr(){
		echo '<hr/>';
	}
}
/*
class MyClass {
	public function sayHello($who){
		echo "Привет $who!";
	}
}
$person = new MyClass();
	echo $person->sayHello('Jon');

/*
	class User {
		public $name = 'Pety';
		public $login = 'login';
		public $password = 'password';
	}
	$user1 = new User();
	$user1->name=Kosty;
	$user2 = new User('Маша','login2','pass2');
	$user3 = new User('Хряк','login3','pass3');
	echo $user1->name;
*/
?>