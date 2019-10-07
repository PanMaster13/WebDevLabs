<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta name="description" content="Web application development" />
	<meta name="keywords" content="PHP" />
	<meta name="author" content="Jason" />
	<title>Lab 5 - Files & Directories</title>
</head>

<body>
	<h1>Lab05 Task 2 - Show Guestbook</h1>
	<?php
		$filename = "data/guestbook.txt";
		$handle = fopen($filename, "r");
		$data = file_get_contents($filename);
		$names = stripslashes($data);
		echo "<pre>" . $names . "</pre>";
		fclose($handle);
	?>
</body>

</html>