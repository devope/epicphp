<?php

//  Принимаем post данные
if(!empty($_POST)){
	$entry__title = $_POST['entry__title'];
	$entry__text = $_POST['etry__text'];


// Подключаемся к файлу
$path = __DIR__ . "/posts/";
$filename = "$path"."$entry__title.txt";
$fp = fopen($filename, 'w+');

// Записываем
$file = fwrite($fp, "$entry__title\n\n$etry__text");
}
//

// Ограничение на добавление записи
if (isset($_COOKIE['limit'])) {
	$_COOKIE['limit'] =+ 1;
} else {
	$_COOKIE['limit'] = 1;
}
setcookie($limit, $i, time() + 120);
echo $_COOKIE['limit'] ;
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Blog</title>
</head>
<body>
<?php include "header.inc.php" ?>	

<form name="entry" action="index.php" method="post">
	<input name="entry__title" type="text"><br>
	<textarea name="etry__text" id="" cols="30" rows="10"></textarea><br>
<input type="submit">
</form>

<? var_dump($_COOKIE) ?>
</body>
</html>