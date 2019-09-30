<!DOCTYPE html>
<html lang="en">
<head>
	<title>Lab 2 - Working with Data Types and Operators</title>
	<meta charset="utf-8">
	<meta name="description" content="Web development">
	<meta name="keywords" content="HTML, CSS, JavaScript">
	<meta name="author" content="Jason">
</head>
<body>
	<h1>Learning How To Use Arrays</h1>
	
	<?php
		$days[0] = "Sunday, ";
		$days[1] = "Monday, ";
		$days[2] = "Tuesday, ";
		$days[3] = "Wednesday, ";
		$days[4] = "Thursday, ";
		$days[5] = "Friday, ";
		$days[6] = "Saturday";
		
		echo "<p>The days of the week in English are: </p><p>", $days[0], $days[1], $days[2], $days[3], $days[4], $days[5], $days[6], ".</p>";
		
		$days[0] = "Dimanche, ";
		$days[1] = "Lundi, ";
		$days[2] = "Mardi, ";
		$days[3] = "Mercredi, ";
		$days[4] = "Jeudi, ";
		$days[5] = "Vendredi, ";
		$days[6] = "Samedi";
		
		echo "<p>The days of the week in French are: </p><p>", $days[0], $days[1], $days[2], $days[3], $days[4], $days[5], $days[6], ".</p>";
	?>

</body>

</html>