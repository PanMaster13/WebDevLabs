<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta name="description" content="Web application development" />
	<meta name="keywords" content="PHP" />
	<meta name="author" content="Jason" />
	<title>Lab 6 - Arrays</title>
</head>

<body>
	<h1>Lab06 Task 2 - Guestbook</h1>
	<h2>View Guestbook</h2>
	<hr/>
	<table border="1">
	<?php
		echo "<tr><th>Number</th><th>Name</th><th>Email</th></tr>";
		$filename = "data/guestbook.txt";
		$working_data = array();
		$handle = fopen($filename, "r");
		while (!feof($handle)){
			$curr_line = fgets($handle);
			if ($curr_line != ""){
				$working_data [] = $curr_line;
			}
		}
		fclose($handle);
		$length = count($working_data);
		sort($working_data);
		for ($i = 0; $i < $length; $i++){
			$line = $working_data[$i];
			$data = explode(",", $line);
			$display = $i + 1;
			echo "<tr>";
			echo "<th>" . $display . "</th>";
			echo "<td>" . $data[0] . "</td>";
			echo "<td>" . $data[1] . "</td>";
			echo "</tr>";
		}
	?>
	</table>
	<hr/>
	<p><a href="guestbookform.php">Add Another Visitor</a></p>
</body>

</html>