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

	<h1>Lab03 Task 2 - Leap Year</h1>
	<hr/>
	<?php
		if (isset ($_GET["year"]))
		{
			$year = $_GET["year"];
			if (is_leapyear($year))
			{
				echo "<p>The year you entered ", $year, " is a leap year.</p>";
			}
			else
			{
				echo "<p>The year you entered ", $year, " is a standard year.</p>";
			}
		}
		else
		{
			echo "<p>Please enter a year.</p>";
		}
	?>