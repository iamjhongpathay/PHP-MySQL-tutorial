<?php

//INDEXED arrays
	$peopleOne = ['greg', 'leo', 'fred'];	//new way
	echo $peopleOne[1];

echo "<br>";

	$peopleTwo = array('grey', 'lim');	//older way
	echo $peopleTwo[1];

echo "<br>";

//merging the arrays
	$allPeople = array_merge($peopleOne, $peopleTwo);
	print_r($allPeople);

echo "<br>";

	$ages = [20, 30, 40, 50];

	$ages[1] = 25;	//overwrite value

	$ages[] = 60;	//add new value in array

	array_push($ages, 70);	//another way to add new value in array

	print_r($ages);

echo "<br>";

	echo count($ages);	//total length

echo "<br>";



//ASSOCIATIVE array (KEY & VALUE Pairs)
	$colorsOne = ['apple'=>'red', 'banana'=>'yellow', 'grapes'=>'purple'];	//new way
	echo $colorsOne['banana'];

echo "<br>";

	print_r($colorsOne);

echo "<br>";

	$colorsTwo = array('sky'=>'blue', 'leaf'=>'green');	//older way

	$colorsTwo['wood'] = 'brown';	//add new value

	$colorsTwo['leaf'] = 'black';	//overwrite the value using key
	print_r($colorsTwo);



/*
Source:

https://www.youtube.com/watch?v=bWygRxrlD44&list=PL4cUxeGkcC9gksOX3Kd9KPo-O68ncT05o&index=7

https://www.w3schools.com/php/php_arrays.asp

https://www.w3schools.com/php/php_arrays_indexed.asp

https://www.w3schools.com/php/php_arrays_associative.asp

*/
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PHP Tutorial</title>
</head>
<body>

</body>
</html>