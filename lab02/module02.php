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
		$marks = array(85, 85, 95);
		$marks[1] = 90;
		$sum = $marks[0] + $marks[1] + $marks[2];
		$ave = $sum / 3;
		
		/* Shorthand for IF statements */
		$status = ($ave < 50) ? "FAILED" : "PASSED";
		
		echo "<p>The average score is ", $ave, ".</p>";
		echo "<p>You ", $status, ".</p>";
	?>

</body>

</html>