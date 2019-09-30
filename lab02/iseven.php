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
		$num = round($_GET["number"]);
		
		$status = ($num%2==0) ? "odd" : "even";
		
		echo "<p>The variable ", $num, " <strong>does not contain an ", $status, "</strong> number.</p>";
	?>

</body>

</html>