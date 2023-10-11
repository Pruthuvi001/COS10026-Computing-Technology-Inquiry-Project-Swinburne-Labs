<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="description"	content="COS10026 Lab 07">
	<meta name="keywords"		content="Swinburne COS10026 Lab07 Functions and Passing Data to Server">	
	<meta name="author"			content="Janaka Muthunayake">
	<title>COS10026 - Lab 07</title>
</head>
<body>
<?php
	include ("mathfunctions.php");
?>
<h1>Factorial</h1>
<?php
	//$num = 5;
	if (isset($_GET["number"]))
	{
		$num = $_GET["number"];
		if(isPositiveInteger($num)) {
			echo "<p>", $num, "! is ", factorial ($num), ".</p>";
			} 
		else{
			echo "<p>Please enter a positive integer.</p>";
			}
	}		
	echo "<p><a href='factorial.html'>Return to the Entry Page</a></p>";
?>
</body>
</html>