<?php 

//constants
 define('NAME', 'Jhong');
 define("hobbies", ["Photography", "Candle Making", "Mobile App Developing"]); //constant array


//variables
 // $name = "Jhong";
 $age = 26;


//overriding
 // $name = "Jefferson";


 // echo $name
 // echo hobbies[0];



/*
Source:
https://www.youtube.com/watch?v=2CXme275t9k&list=PL4cUxeGkcC9gksOX3Kd9KPo-O68ncT05o&index=4

https://www.w3schools.com/php/php_variables.asp

https://www.w3schools.com/php/php_constants.asp
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

	<h1>User Profile Page</h1>

	<div><?php echo NAME; ?></div>
	<div><?php echo $age; ?></div>
	<div><?php echo hobbies[2]; ?></div>


</body>
</html>

