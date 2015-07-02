<?

$str = "one two three";

function countWords($str){
	$arr = explode(' ', $str);
	$count = count($arr);

	echo $count;
}

countWords($str);