<?

$str = "one two three four";

function countEvenWords($str){
	$arr = explode(' ', $str);
	foreach ($arr as $key => $value) {
		if(strlen($value)%2 == 0){
			$arr2[] = $value;
		}
	}
	//var_dump($arr2);

	$count = count($arr2);
	echo $count;
}

countEvenWords($str);