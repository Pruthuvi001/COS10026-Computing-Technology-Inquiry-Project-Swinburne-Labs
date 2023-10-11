<!DOCTYPE html>
<html lang="">
<head>
	<meta charset="utf-8">
	<meta name="description"	content="COS10026 Lab 10">
	<meta name="keywords"		content="Swinburne COS10026 Lab10 PHP and MySQL Database Operations">	
	<meta name="author"			content="Janaka Muthunayake">
	<title>Adding cars to MySQL</title>
</head>
<body>
	<?php
		function sanitise_input($data){
			$data = trim($data);				
			$data = stripslashes($data);		
			$data = htmlspecialchars($data);	
			return $data;
		}
		if (isset($_POST["carmake"])){		
			//get information from form
			$make = sanitise_input($_POST["carmake"]);
			$model = sanitise_input($_POST["carmodel"]);
			$price = sanitise_input($_POST["price"]);
			$yom = sanitise_input($_POST["yom"]);

			require_once("settings.php");	
			$conn = @mysqli_connect($host,$user,$pwd,$sql_db);	
			$sql_table = "cars";	
			$query = "insert into $sql_table (make, model, price, yom) values ('$make', '$model', '$price', '$yom');";		//MySQL command
			$result = mysqli_query($conn, $query);	
			if (!$result){		
				echo "<p>Something is wrong with ", $query, "</p>";
			}
			else{		
				echo "<p>Successfully added New Car record</p>";
			}
			mysqli_close($conn);		
		}
		else{
			header("location: addcar.html");
		}
	?>
</body>
</html>
