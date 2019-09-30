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
	function is_prime($num)
	{
		$primeStatus = true;
		
		/* Loop Function */
		for ($i = 2; $i < $num; $i++)
		{
			if ($num % $i == 0)
			{
				$primeStatus = false;
				break;
			}
		}
		return $primeStatus;
	}
	?>

	<h1>Lab03 Task 2 - Prime Number</h1>
	<hr/>
	<?php
		if (isset ($_GET["number"]))
		{
			$num = $_GET["number"];
			if (is_prime($num))
			{
				echo "<p>The number you entered ", $num, " is a prime number.</p>";
			}
			else
			{
				echo "<p>The number you entered ", $num, " is not a prime number.</p>";
			}
		}
		else
		{
			echo "<p>Please enter a number between 1 & 999.</p>";
		}
	?>