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
