<?php

//2-1-?
$title = $_GET['title'];
$description = $_GET['description'];
$category = $_GET['category'];
$price = $_GET['price'];


echo $title;
echo "<br>";
echo $description;
echo "<br>";
echo $category;
echo "<br>";
echo $price;
echo "<br>";

/*
http://xampp/epicphp/2/lesson.php?title=shop&description=beatiful&category=cloth&price=1 USD
*/



#2-2-16
// Показывает советы людям от 15 до 35
// function showAdvice($age){
// 	if($age < 20){
// 		echo "все впереди!";
// 	} 
// 	elseif ($age >= 20 && $age < 30) {
// 		echo "самое время взяться за ум";
// 	} 
// 	elseif ($age >= 30) {
// 		echo "у вас есть чему поучиться";
// 	};
// }


// for ($i=15; $i <= 35; $i++) { 
// 	echo "Тебе $i лет, а это значит, что ";
// 	showAdvice($i);
// 	echo "<br>";
// }


#2-3-19
const NAME = "Kirill";
echo NAME;
