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
		$filename = "data/guestbook.txt";
		if (!file_exists($filename) || filesize($filename) == 0){
			echo "<p>There are no records in the guestbook.</p>";
		} else {
			$record = file($filename);
			echo "<tr><th>Number</th><th>Name</th><th>Email</th></tr>";
			
			for ($i = 0; $i < count($record); $i++){
				$line = explode(",", $record[$i]);
				$display = $i + 1;
				echo "<tr>";
				echo "<th>" . $display . "</th>";
				echo "<td>" . $line[0] . "</td>";
				echo "<td>" . $line[1] . "</td>";
				echo "</tr>";
			}
		}
		$handle = fopen($filename, "r");
		
		fclose($handle);
	?>
	</table>
	<hr/>
	<p><a href="guestbookform.php">Add Another Visitor</a></p>
</body>

</html>