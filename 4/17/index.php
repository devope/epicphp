<?
$filename = __DIR__ . '/hipster.txt';
if($filename){
	$handle = file($filename);
} else {
	echo "File doesn't exist";
}

// function reverseArray($arr){
// 	$arr = array_reverse($arr);
// }

// reverseArray($handle);


$resultFile = __DIR__ . '/result.txt';
$handle2 = fopen($resultFile, 'w+');
if($resultFile){
	$fileFirstContent = implode("\n", $handle);
	$file2 = fwrite($handle2, $fileFirstContent);

	echo "<pre>" . $fileFirstContent . "</pre>";
} else {
	echo "File doesn't exist";
}

//fclose($handle2);

