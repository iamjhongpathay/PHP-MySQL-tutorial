<?php

 $stringOne = 'My email is';
 $stringTwo = 'jeffersonpathay@gmail.com';
 $name = 'Jhong';

//concatenate
 	echo $stringOne ." ". $stringTwo;
 echo "<br>";
 	echo 'Hi my name is ' . $name;	//single quote
 echo "<br>";
 	echo "Hi my name is $name";		//double quote


 echo "<br>"; echo "<br>";


//escape
 	echo 'The owl makes a noise "Hoot! Hoot!"';		//single quote
 echo "<br>";
 	echo "The owl makes a noise \"Hoot! Hoot!\""; 	//double quote

 echo "<br>"; echo "<br>";

//functions
 	echo $name[2];				//retrieve single character
 echo "<br>";
 	echo strlen($name);			//lenght of string
 echo "<br>";
 	echo strtoupper($name);		//to uppercase
 echo "<br>";
 	echo strtolower($name);		//to lowercase
 echo "<br>";
 	echo str_replace('J', 'l', $name);		//replace character



/*Source:
 https://www.youtube.com/watch?v=U2EliFC9NrQ&list=PL4cUxeGkcC9gksOX3Kd9KPo-O68ncT05o&index=5

 https://www.w3schools.com/php/php_string.asp
*/
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PHP Tutorials</title>
</head>
<body>

</body>
</html>