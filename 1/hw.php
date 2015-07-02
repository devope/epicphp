<?php

for ($i=1; $i < 10; $i++) { 
	// echo $i . " ";
	$limit = $i * $i;
	$sum = 0;
	for ($n=$i; $n <= 10 || $n <= $limit; $n+=$i) {
		$n;
		echo $n . " ";
	}
	echo "<br>";
}

?>

<?php

// for ($i=1; $i < 10; $i++) { 
// 	echo $i . ' ';
// 	for ($j=1; $j < 10; $j++) { 
// 		$result = $i * $j;
// 		echo $result . ' ';
// 	}
// 	echo "<br>";
// }
?>
<!-- 
1 2 3 4 5
2 4 6 8 10
3 6 9 12 15
4 8 12 16 20

 -->















<style>
	body {
		background: #000;
		color: #fff;
	}
</style>