<?



function evenToUpper($str){
	$
	$len = strlen($str);
	for ($i=0; $i < $len; $i++) { 
		if($i%2 == 0) {
			echo $str[$i]; 
		} else {
			echo strtoupper($str[$i]);
			
		}
	}

}

$str = "hello world";

evenToUpper($str);