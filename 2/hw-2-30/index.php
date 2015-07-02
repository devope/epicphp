<? include_once('header.php');

if(isset($_GET['pid'])){
	$pid = $_GET['pid']; 
}

?>

<body>
<?
	if($pid == 'about' || $pid == 'product' || $pid == 'catalog'){
		$fname = $pid .  ".inc.php";
		include($fname);	
	}
	
?>
</body>


<? include_once('footer.php') ?>