<?php

$radius = 25;	//Integer
$pi = 3.14;	//Float or Double

$numOne = 24;
$numTwo = 54;

 //operators
	echo $numOne / $numTwo;	//Division
echo "<br>";
	echo $numOne * $numTwo;	//Multiplication
echo "<br>";
	echo $numOne + $numTwo;	//Addition
echo "<br>";
	echo $numOne - $numTwo;	//Subtraction
echo "<br>";
	echo $pi * $radius**2;	//Exponentiation (Area of the Circle)
echo "<br>";
	echo $numOne % $numTwo;	//Modulus


//order of operation ( B I D M A S )
echo "<br>"; echo "<br>";
	echo 2 * (4 + 9) / 3;


//increment & decrement operators
echo "<br>"; echo "<br>";
	echo $numOne++;	//increment 1 into next line
echo "<br>";
	echo $numOne;	//next line

echo "<br>"; echo "<br>";
	echo $numTwo--;	//decrement 1 into next line
echo "<br>";
	echo $numTwo;	//next line


//shorthand operators
	$age = 20;
echo "<br>"; echo "<br>";
	// echo $age = $age + 10;
//short way
	echo $age += 10;	
echo "<br>";
	echo $age -= 10;
echo "<br>";
	echo $age *= 2;


//numbers function
echo "<br>"; echo "<br>";
	echo floor($pi);	//rounds it down to the next lowest integer
echo "<br>";
	echo ceil($pi);	//rounds it up to the nearest integer, if necessary
echo "<br>";
	echo pi()



/*
Source:

https://www.youtube.com/watch?v=lT2AvQ17F_w&list=PL4cUxeGkcC9gksOX3Kd9KPo-O68ncT05o&index=6

https://www.w3schools.com/php/php_numbers.asp

https://www.w3schools.com/php/php_operators.asp
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