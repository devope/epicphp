<?php 
#1
// // Имя пользователя
// $name = "Kirill";
// // Вывод приветствия
// echo "Hello , " . $name . "!";

#2
// $values = array(14, 42, array("text", "test", "best"));
// $stringValue = "Hello you";
// $digital = 1234;
// var_dump($values, $stringValue, $digital);

#3
// $age = 23;

// if($age < 20){
// 	echo "Все впереди!";
// } elseif ($age >= 20 || $age < 30) {
// 	echo "Самое время взяться за ум";
// } elseif ($age >= 30) {
// 	echo "У вас есть чему поучиться";
// };

#4
for ($i=1; $i <= 100; $i++) {

 	if($i%3 == 0 && $i%5 == 0)
 		echo $i . " FizzBuzz" . "<br>";
 	
	elseif($i%3 == 0)
		echo $i . " Fizz" . "<br>";

	elseif($i%5 == 0)
		echo $i . " Buzz" . "<br>";

	else
		echo $i. "<br>";

}