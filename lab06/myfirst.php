<!DOCTYPE html>
<html lang = "en">
<head>
	<meta charset="utf-8"/>
	<title>Using PHP Variables, arrays and operators</title>
	<meta name="description"	content="COS10026 Lab 06 task 1">
	<meta name="keywords"		content="Swinburne COS10026 Lab06 Using PHP Variables, arrays and operators">	
	<meta name="author"			content="Janaka Muthunayake">
</head>
<body>
<?php
    $marks = array(85, 85, 95);
    $marks[1] = 90;
	$ave = ($marks[0]+ $marks[1] + $marks[2])/3;
    if ($ave >= 50)
        $status = "PASSED";
    else
        $status = "FAILED";
    echo "<p>The average is $ave. You $status.</p>"

?>
</body>
</html>