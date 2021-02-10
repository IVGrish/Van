<?php
    $year = 1600;
    $a = $year % 4;
    $b = $year % 100;
    $c = $year % 400;
    if ($a==0 && $b!=0 || $c==0)
        echo 'The given year has February 29';
    else echo 'Not a leap year';
    echo '<br>';

    $w = 'abcde';
    if($w[0]=='a') echo 'Yes'; else echo 'No';
    echo '<br>';

    $n = '12345';
    switch($n[0]){
        case '1': echo 'yes'; break; 
        case '2': echo 'yes'; break;
        case '3': echo 'yes'; break;
        default: echo 'no'; break;
    }
    echo '<br>';
    
    $arr=['Коля'=>'200', 'Вася'=>'300', 'Петя'=>'400'];
    foreach ($arr as $key=>$elem){
        echo $key.' - зарплата '.$elem.' долларов. ';
    }
    echo '<br>';

    $res=0;
    for ($i=1; $i<=100; $i++){
        $res+=$i;
    }
    echo $res.'<br>';

    $arr=[1, 2, 3, 4, 5, 6, 7, 8, 9];
    echo '\'';
    foreach($arr as $elem){
        echo '-'.$elem;
        }
    echo '\'';
    echo '<br>';

    $arr=['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'];
    foreach ($arr as $elem) {
        if($elem=='Saturday' || $elem=='Sunday'){
            echo '<b>'.$elem.' </b>';
        }
        elseif ($elem=='Friday') {
            $day=$elem;
            echo '<i> '.$day.' </i>';
        }
    else echo ' '.$elem;
    }
    echo '<br>';

    $arr = ['green'=>'зеленый', 'red'=>'красный', 'blue'=>'голубой'];
    foreach ($arr as $key => $elem) {
        $en[]=$key;
        $ru[]=$elem;
    }
    var_dump($en,$ru);
    echo '<br>';

    $kol=0;
    for($num=1000; $num>50; $num/=2){
        $kol++;}
    echo 'Количество - '.$kol.', число - '.$num.'.<br>';

?>
		<form action="" method="GET">
			<input type="text" name="city">
			<input type="submit">
		</form>
<?php
	//Если форма была отправлена и город не пустой:
	if (isset($_REQUEST['city']) && $_REQUEST['city'] != '') {
		$city = strip_tags($_REQUEST['city']);
        echo 'Ваш город: '.$city;
    }
?>
<form action="" method="GET">
	<input name="name" value="<?php if (isset($_GET['name'])) echo $_GET['name']; ?>">
	<input type="submit">
</form>
<?php
	if (isset($_REQUEST['submit'])) {
		$name = $_REQUEST['name'];
		echo $name;
	}
?>
<?php
	function hello($name) { //укажем здесь параметр $name, в котором будет лежать имя человека
		//Введем переменную $text, в которую запишем всю фразу:
		$text = 'Привет, '.$name.'!';
	
		/*
			Укажем функции с помощью инструкции 'return', 
			что мы хотим, чтобы она ВЕРНУЛА содержимое переменной $text:
		*/
		return $text;
	}
	
	//Теперь вызовем нашу функцию и запишем значение в переменную $message:
	$message = hello('Дима');
	
	//И теперь в переменной $text лежит 'Привет, Дима!':
	echo $message; //убедимся в этом
	
	//Поздороваемся сразу с группой людей из трех человек:
	echo hello('Вася'.' '.hello('Петя').' '.hello('Коля'));
?>
<?php
	function getDivisors($num) 
	{
		$result = [];
	
		for ($i = 1; $i <= $num; $i++) {
			if($num % $i == 0) {
				$result[] = $i;
			}
		}
	
		return $result;
	}
	
	var_dump(getDivisors(24)); //выведет [1, 2, 3, 4, 6, 12, 24]
?>
<br>
<?php
	$arr = [1, 2, 3, 4, 5];

	last($arr);

	function last($arr)
	{
		echo array_pop($arr).'<br>'; //выводим последний элемент массива
    
		if(!empty($arr)) {
			last($arr); //это рекурсия
		}
	}
?>
<?php
	function lowNum($num)
	{
        $result = array_sum(str_split($num));
		if ($result > 9) {
			$result = lowNum($result);
        }
		return $result;
    }
    echo lowNum(59);
?>
<form action="" method="GET">
	<p>html<input type="checkbox" name="lang[]" value="html"></p>
	<p>css<input type="checkbox" name="lang[]" value="css"></p>
	<p>php<input type="checkbox" name="lang[]" value="php"></p>
	<p>javascript<input type="checkbox" name="lang[]" value="javascript"></p>
	<input type="submit">
</form>
<?php
	if(isset($_REQUEST['lang']))
	{
		echo 'Вы знаете: ' . implode(',', $_REQUEST['lang']);
	}
?>
<?php
	function input($type, $name, $value)
	{
		if(isset($_REQUEST[$name])) {
			$value = $_REQUEST[$name];
		}

        return '<form><input type="text" name="'.$name.'" value="'.$value.'">
        <input type="submit"></form>';
	}
	echo input('text', 'input', '1');
?>
<?php
	$arr = [
		['name'=>'Коля', 'age'=>30, 'salary'=>500],
		['name'=>'Вася', 'age'=>31, 'salary'=>600],
		['name'=>'Петя', 'age'=>32, 'salary'=>700],
	];
	echo "<table>";
	foreach ($arr as $elem){
		echo 	"<tr>
					<td>$elem[name]</td>
					<td>$elem[age]</td>
					<td>$elem[salary]</td>
				</tr>";
	}	
	echo "</table>";
?>
<?php
	class Student
	{
		public $name;
		public $course;

		public function setCourse ($course){
			if ($this->validCourse ($course)){
				$this->course = $course;
				return $this->course.'th';
			}
			else return $this->course = "no";
		}
		public function transferToNextCourse ($course){
			if ($this->validCourse ($course) && $course < 5){
			$val = $course + 1;
			return $this->course = $val.'th';
			}
			else {
				return $this->course = "no";
			}
		}
		private function validCourse ($course) {
			return $course >= 1 && $course <= 5;
		}
	}
	$kit = new Student;
	$kit->name = "Christopher";
	$cor = $kit->setCourse(4);
	$cou = $kit->transferToNextCourse($kit->course);
	echo $kit->name.' is a '.$cor.' year student'.' and he is transferred to '.$cou.' course.<br>';
?>
<?php
	 class Arr {
		private $numbers = [];
		public function add ($number) {
			$this->numbers[] = $number;
			return $this;
		}
		public function getSum () {
			return array_sum($this->numbers);
		}
		public function append ($numbers) {
			$this->numbers[] = $numbers;
			return $this;
		}
	 }
	 echo (new Arr)->add(1)->append([2, 3, 4])->add(5)->getSum();
?>
<?php
	class User {
		private $surname;
		private $name;
		private $patronymic;
		public function setSurname($surname) {
			$this->surname = $surname;
			return $this;
		}
		public function setName ($name) {
			$this->name = $name;
			return $this;
		}		public function setPatronymic($patronymic) {
			$this->patronymic = $patronymic;
			return $this;
		}
		public function getFullName() {
			return $this->surname[0].$this->name[0].$this->patronymic[0];
		}
	}
	echo (new User)->setName('Nick')->setPatronymic('John')->setSurname('Petrov')->getFullName();
?>
<?php
	class Assist {
		private $name;
		private $surname;
		private $birthday;
		private $age;
		public function __construct ($name, $surname, $birthday) {
			$this->name = $name;
			$this->surname = $surname;
			$this->birthday = $birthday;
			function calculateAge($birthday) {
				$userBirthday = date_create($birthday);
				$timeNow = date_create(date('Y-m-d', time()));
				$years = date_diff($timeNow, $userBirthday);
				return $years->format('%y years ');
			}
			$this->age = calculateAge($this->birthday);
		}
		public function getName () {
			return $this->name;
		}
		public function getSurname () {
			return $this->surname;
		}
		public function getBirthday () {
			return $this->birthday;
		}
		public function getAge () {
			return $this->age;
		}

	}
	class Employee extends Assist {
		private $salary;
		public function __construct ($name, $surname, $birthday, $salary) {
			parent::__construct ($name, $surname, $birthday);
			$this->salary = $salary;
		}
		public function getSalary () {
			return $this->salary;
		}
	}
		$gol = new Employee ('John', 'Fishermann', '1990-02-02', '500$');
		echo '<br>'.$gol->getAge();
		echo $gol->getName();
		echo $gol->getSurname();
		echo $gol->getBirthday();
		echo $gol->getSalary();
?>
<?php
$origin = date_create('2009-10-11');
$target = date_create('2000-10-10');
$interval = date_diff($origin, $target);
echo $interval->format('%y years').'<br>';
?>
<?php
	class Rra {
		private $nums = [];
		private $sumHelper;
		public function __construct() {
			$this->sumHelper = new SumHelper;
		}
		public function getAvgMeanSum() {
			$nums = $this->nums;
			return $this->sumHelper->getAvg($nums) + $this->sumHelper->getMeanSquare($nums);
		}
		public function add($number) {
			$this->nums[] = $number;
		}
	}
	class SumHelper {
		public function getAvg($arr) {
			return array_sum($arr) / count($arr);
		}
		public function getMeanSquare($arr) {
			$sum = 0;
			foreach ($arr as $elem) {
				$sum += pow($elem, 2);
			}
			return sqrt($sum) / count($arr);
		}
	}
	$a = new Rra();
	$a->add(5); $a->add(5); $a->add(7);
	echo $a->getAvgMeanSum().'<br>';
?>
<?php
	class Product {
		private $name;
		private $price;
		private $quantity;
		public function __construct($n, $sum, $kol) {
			$this->name =$n;
			$this->price = $sum;
			$this->quantity = $kol;
		}
		public function getCost() {
			return $this->price * $this->quantity;
		}
		public function getName () {
			return $this->name;
		}
		public function getPrice () {
			return $this->price;
		}
		public function getQuantity () {
			return $this->quantity;
		}
	}
	class Cart {
		private $products = [];
		public function add($product) {
			$this->products[] = $product;
		}
		public function remove($product) {
			foreach($this->products as $key => $item){
    			if ($item == $product){
      				unset($this->products[$key]);
    			}
			}
		}
		public function getTotalCost() {
			$sum = 0;
			foreach($this->products as $item) {
				$sum += $item->getCost();
			}
			return $sum;
		}
		public function getTotalQuantity() {
			$sum = 0;
			foreach($this->products as $item) {
				$sum += $item->getQuantity();
			}
			return $sum;
		}
		public function getAvgPrice() {
			return $this->getTotalCost() / $this->getTotalQuantity();
		}
	}
	$cart = new Cart;
	$cart->add(new Product('Banana', 1, 4));
	$cart->add(new Product('Milk', 2, 1));
	$cart->add(new Product('Cheese', 3, 1));
	$cart->remove(new Product('Banana', 1, 4));
	echo $cart->getTotalCost().' ';
	echo $cart->getTotalQuantity().' ';
	echo $cart->getAvgPrice().'<br>';
?>
<?php
	//вывод ошибок
	error_reporting(E_ALL);
	ini_set('display_errors', 'on');

	$host = 'localhost';
	$user = 'root';
	$password = 'mysql';
	$db_name = 'task';
	$link = mysqli_connect($host, $user, $password, $db_name) or die(mysqli_error($link));
	mysqli_query($link, "SET NAMES 'utf8'");
	$result = mysqli_query($link, "SELECT*FROM people WHERE ID>0") or die(mysqli_error($link));
	
	for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
	var_dump($data);
?><br>
<?php
	//Устанавливаем доступы к базе данных:
		$host = 'localhost'; //имя хоста, на локальном компьютере это localhost
		$user = 'root'; //имя пользователя, по умолчанию это root
		$password = 'mysql'; //пароль, по умолчанию пустой
		$db_name = 'test'; //имя базы данных

	//Соединяемся с базой данных используя наши доступы:
		$link = mysqli_connect($host, $user, $password, $db_name);

	//Устанавливаем кодировку (не обязательно, но поможет избежать проблем):
		mysqli_query($link, "SET NAMES 'utf8'");

	//Формируем тестовый запрос:
		$query = "SELECT * FROM workers WHERE id > 0";

	//Делаем запрос к БД, результат запроса пишем в $result:
		$result = mysqli_query($link, $query) or die(mysqli_error($link));

	/*$query = "INSERT INTO workers (name, age, salary) VALUES ('Гена', 30, 1000)";
		$query = "INSERT INTO workers SET name='Гена', age=30, salary=1000";
		$query = "INSERT INTO workers (name, age, salary) VALUES ('Гена', 30, 1000), ('Вася', 25, 500), ('Иван', 27, 1500)";*/
		$query = "SELECT * FROM workers WHERE id>0 ORDER BY id DESC LIMIT 2,5";
		$result = mysqli_query($link, $query) or die(mysqli_error($link));
	
	//В $result будет лежать количество строк:
		$query = "SELECT COUNT(*) as count FROM workers WHERE id>0"; 
		$result = mysqli_query($link, $query) or die( mysqli_error($link) );
		$count = mysqli_fetch_assoc($result);

	//В $count будет лежать массив 'count'=>кол-во:
		var_dump($count);
	//Проверяем что же нам отдала база данных, если null – то какие-то проблемы:
		for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
		var_dump($data);
?>
<table>
	<tr>
		<th>ID</th>
		<th>name</th>
		<th>age</th>
		<th>salary</th>
		<th>delete</th>
	</tr>
	<?php
		//соединение БД
		$host = 'localhost'; 
		$user = 'root'; 
		$password = 'mysql'; 
		$db_name = 'test'; 
	
		$link = mysqli_connect($host, $user, $password, $db_name);
	
		mysqli_query($link, "SET NAMES 'utf8'");

		//функция input1
		function input1($name) {
			if (isset($_POST[$name])) {
				$value = $_POST[$name];
			} else {
				$value = '';
			}

			return '<input name = "'.$name.'"value = "'.$value.'">';
		}

		//сохранение нового до получения!
		if (!empty($_POST)) {
			$name = $_POST['name'];
			$age = $_POST['age'];
			$salary = $_POST['salary'];
	
			$query = "INSERT INTO `workers` SET 
				`name`='$name', `age`='$age', `salary`='$salary'";
			mysqli_query($link, $query) or die(mysqli_error($link));
		}

		//удаление по ID до получения!
		if (isset($_GET['del'])) {
			$del = $_GET['del'];
			$query = "DELETE FROM workers WHERE id=$del";
			mysqli_query($link, $query) or die(mysqli_error($link));
		}

		//получение всех работников
		$query = "SELECT * FROM workers";
		$result = mysqli_query($link, $query) or 
			die( mysqli_error($link) ); 
		for ($data = []; $row = mysqli_fetch_assoc($result); 
			$data[] = $row);
			
		//вывод на экран
		$result = '';
		foreach ($data as $elem) {
			$result .= '<tr>';

			$result .= '<td>'. $elem['ID'].'</td>';
			$result .= '<td>'. $elem['name'].'</td>';
			$result .= '<td>'. $elem['age'].'</td>';
			$result .= '<td>'. $elem['salary'].'</td>';
			$result .= '<td>'. $elem['salary'].'</td>';
			$result .= '<td><a href="?del='.$elem['ID'].'">удалить</a></td>';

			$result .= '</tr>';
		}

		echo $result;
	?>
</table>
<form action = "" method="POST">
	<?php echo input1('name'); ?>
	<?php echo input1('age'); ?>
	<?php echo input1('salary'); ?>
	<input type = "submit" value = "добавить работника">
</form>

