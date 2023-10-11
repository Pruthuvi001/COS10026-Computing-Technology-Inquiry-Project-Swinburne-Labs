<!DOCTYPE html>
<html lang = "en">
<head>
	<meta charset="utf-8"/>
	<title>Using PHP Variables, arrays and operators</title>
	<meta name="description"	content="COS10026 Lab 06 task 2">
	<meta name="keywords"		content="Swinburne COS10026 Lab06 Using PHP Variables, arrays and operators">	
	<meta name="author"			content="Janaka Muthunayake">
</head>
<body>
<?php
    function main($input){
        for ($i = 0; $i < count($input); $i++) {
            echo $input[$i];
            if ($i != count($input)-1) {
                echo ", ";
            }else {
                echo ".";
            }
        }
    }
    $days = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
    $days_fr = ["Dimanche", "Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi"];
    echo"The days of the week in English are:<br>";
    main($days);
    echo "<br><br>";
    echo"The days of the week in French are:<br>";
    $days = array_replace($days,$days_fr);
    main($days);
?>
</body>
</html>