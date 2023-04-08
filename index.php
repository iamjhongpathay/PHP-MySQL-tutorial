<?php

//multi-dimensional INDEXED arrays
	$blogsOne = [
		['mario party', 'mario', 'lorem', 30],
		['mario kart cheats', 'toad', 'lorem', 25],
		['zelda hidden chests', 'link', 'lorem', 50 ]
	];

	print_r($blogsOne);	//print all

echo "<br>";
	print_r($blogsOne[1]);	//print specific array

echo "<br>";
	print_r($blogsOne[1][1]);	//print specific value from specific array

echo "<br>"; echo "<br>";



//multi-dimensional ASSOCIATIVE arrays (KEY & VALUE Pairs)
	$blogsTwo = [
		['title'=>'mario party', 'author'=>'mario', 'content'=>'lorem', 'likes'=>30],
		['title'=>'mario kart cheats', 'author'=>'toad', 'content'=>'lorem', 'likes'=>25],
		['title'=>'zelda hidden chests', 'author'=>'link', 'content'=>'lorem', 'likes'=>50]
	];

	echo $blogsTwo[2]['author'];	//print specific value using its key from specific array

echo "<br>";

	echo count($blogsTwo);

echo "<br>";
	
	$blogsTwo[] = ['title'=>'castle party', 'author'=>'peach', 'content'=>'lorem', 'likes'=>100];	//add new element
	print_r($blogsTwo);

echo "<br>";
	
	$popped = array_pop($blogsTwo);	//removed the last element of array
	print_r($popped);


/*
Source:

https://www.youtube.com/watch?v=G1iDSoAXyvM&list=PL4cUxeGkcC9gksOX3Kd9KPo-O68ncT05o&index=8

https://www.w3schools.com/php/php_arrays.asp

https://www.w3schools.com/php/php_arrays_multidimensional.asp
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