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
	<h1>Web Programming - Lab 5</h1>
	<?php
		if (isset ($_POST["submit_btn"]))
		{
			// Writing into file
			$item = $_POST["item"];
			$qty = $_POST["quantity"];
			$filename = "data/shop.txt";
			$handle = fopen($filename, "a");
			$data = $item . "," . $qty . "<br/>";
			fwrite($handle, $data);
			fclose($handle);
			
			// Echoing from file
			echo "<p>Shopping List</p>";
			$handle = fopen($filename, "r");
			while(!feof($handle))
			{
				$data = fgets($handle);
				echo "<p>", $data, "</p>";
			}
			fclose($handle);
		}
		else
		{
			echo "<p>Please enter item and quantity in the input form.</p>";
		}
	?>
</body>

</html>