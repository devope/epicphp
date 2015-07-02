<h3>Это результат</h3>

<pre>
<?

$message = '';

foreach ($_GET as $key => $value) {
	$message .=  $key . " : " . $value . "<br>";
}

echo $message;
?>
</pre>


<a href="index.php">Назад</a>