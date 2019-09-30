<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta name="description" content="Web application development" />
	<meta name="keywords" content="PHP" />
	<meta name="author" content="Jason" />
	<title>Lab04</title>
</head>

<body>
	<h1>Lab04 Task 2 - Perfect Palindrome</h1>
	
	<hr/>
	<?php
		if (isset ($_POST["submit_btn"]))
		{
			$str = $_POST["text"];
			$lowerCase = strtolower($str);
			$reverse = strrev($lowerCase);
			$result = strcmp($lowerCase, $reverse);
			
			if ($result == 0)
			{
				echo "<p style='color:green'>The text you entered: <strong>'", $str, "'</strong> is a perfect palindrome!";
			}
			else
			{
				echo "<p style='color:red'>The text you entered: <strong>'", $str, "'</strong> is <strong>not</strong> a perfect palindrome!";
			}
		}
		else
		{
			echo "<p>Please enter string from the input form.</p>";
		}
	?>
</body>

</html>