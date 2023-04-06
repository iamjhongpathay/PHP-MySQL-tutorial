<?php 

//constants
 define('NAME', 'Jhong');
 define("hobbies", ["Photography", "Candle Making", "Mobile App Developing"]); //constant array


//variables
 $name = "Jhong";	//String
 $age = 26;			//Integer
 $grade = 76.50;	//Float/Double
 $isPresent = true;	//Boolean
 $favColor = array("Red","Green","Gray"); //Array


//overriding
 // $name = "Jefferson";


 echo "Name: $name";
 echo "<br>";
 echo "Age: $age";
 echo "<br>";
 echo "Grade: $grade";
 echo "<br>";
 echo "Attendance(1/2 = Yes/No): $isPresent";
 echo "<br>";
 echo "Favorite Colors: ".$favColor[0].", ".$favColor[1].", ".$favColor[2];


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
	<div><?php echo hobbies[2]; ?></div>


</body>
</html>

