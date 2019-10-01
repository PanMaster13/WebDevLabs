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
	<h1>Lab04 Task 2 - Standard Palindrome</h1>
	
	<hr/>
	<?php
		if (isset ($_POST["submit_btn"]))
		{
			$str = $_POST["text"];
			$noSpace = str_replace(" ", "", $str);
			$noPunctuation = preg_replace("#[[:punct:]]#", "", $noSpace);
			$lowerCase = strtolower($noPunctuation);
			$reverse = strrev($lowerCase);
			$result = strcmp($lowerCase, $reverse);
			
			if ($result == 0)
			{
				echo "<p style='color:green'>The text you entered: <strong>'", $str, "'</strong> is a standard palindrome!</p>";
			}
			else
			{
				echo "<p style='color:red'>The text you entered: <strong>'", $str, "'</strong> is <strong>not</strong> a standard palindrome!</p>";
			}
		}
	?>
	
	<form action="standardpalindromeself.php" method="post">
	<p>String: <input type="text" name="text"/></p>
	<p><input type="submit" name="submit_btn" value="Checkfor Standard Palindrome"/></p>
	</form>
	
	<hr/>
</body>

</html>