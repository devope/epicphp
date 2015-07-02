<?
#1
// function getDomen($email){
// 	$pos = strpos($email, "@");
// 	echo substr($email, ++$pos);
// }

// $email = "devope@icloud.com";
// getDomen($email);


#2
// Рисуем массив
$arr = array(
	'1' => ' One ',
	'2' => '  Two ',
	'3' => '  Three  '
);

function fuckArray($arr){
	// Создаем пустую переменную
	$message = '';
	// Перебираем каждый элемент пришедшего массива
	foreach ($arr as $key => &$value) {
		// Переназначаем значение каждому элементу
		// меняем регистр, тримим...
		$arr[$key] = strtolower(trim($arr[$key]));
		// Пишем сообщение...
		$message .= $key . " : " . $value . "<br>";
	}
	return $message;
	echo $message;
}

// Вызываем функцию
fuckArray($arr);
