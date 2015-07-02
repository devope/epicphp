<?

$func = $_GET['function'];
$text = $_GET['text'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>ДЗ</title>
</head>
<body>
	<form action="" method="get">
		<select name="function" id="">
			<option value="?f=substr">substr</option>
			<option value="?f=strlen">strlen</option>
		</select><br>
		<textarea name="text" id="" cols="30" rows="10"></textarea>
		<input type="submit">
	</form>

	<div id="result"><? echo $text ?></div>
</body>
</html>