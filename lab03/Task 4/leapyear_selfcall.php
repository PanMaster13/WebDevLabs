<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="description" content="Web Application Development :: Lab 3" />
	<meta name="keywords" content="Web, programming" />
	<title>Using if and while statements</title>
</head>

<body>
	<?php
	function is_leapyear($year)
	{
		if ($year % 100 == 0)
		{
			if($year % 400 == 0)
			{
				return true;
			}
			else
			{
				return false;
			}
		}
		else if ($year % 4 == 0)
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	?>

	<h1>Lab03 Task 4 - Leap Year (Self Call Method)</h1>
	<hr/>
	<?php
		if (isset ($_GET["submit_button"]))
		{
			$year = $_GET["year"];
			if (is_leapyear($year))
			{
				$message = "The year you entered $year is a leap year.";
			}
			else
			{
				$message = "The year you entered $year is a standard year.";
			}
		}
		else
		{
			$message = "";
		}
	?>
	
	<form action="leapyear_selfcall.php" method="get">
		<p>Enter a year: <input type="text" name="year"></p>
		<p><input type="submit" name="submit_button"></p>
	</form>
	
	<?php
		echo $message;
	?>
</body>
</html>