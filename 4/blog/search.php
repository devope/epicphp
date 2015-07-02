<?php

// принимаем запрос
if(isset($_GET['query'])) {
	$query = $_GET['query'];
}

echo $query;



?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<?php include "header.inc.php" ?>	

<h3>Поиск</h3>
<form action="" method="get">
	<input name="query" type="text">
	<input type="submit">
</form>

</body>
</html>
