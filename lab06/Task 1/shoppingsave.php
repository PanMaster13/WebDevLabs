<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Lab 6 - Arrays</title>
</head>
<body>
	<h1>Web Programming - Lab06</h1>
	<?php
		if (isset($_POST["submit-btn"])){
			$item = $_POST["itemName"];
			$qty = $_POST["itemQuantity"];
			$filename = "../shop.txt";
			
			$working_data = array();
			if (is_readable($filename)){
				$item_name_list = array();
				$handle = fopen($filename, "r");
				while (!feof($handle)){
					$curr_line = fgets($handle);
					if ($curr_line != ""){
						$data = explode(",", $curr_line);
						$working_data [] = $data;
						$item_name_list[] = $data [0];
					}
				}
				fclose($handle);
				$is_newdata = !(in_array($item, $item_name_list));
			} else {
				$is_newdata = true;
			}
			if ($is_newdata){
				$handle = fopen($filename, "a");
				$line_to_write = $item . "," . $qty . "\n";
				
				fputs($handle, $line_to_write);
				fclose($handle);
				
				$working_data [] = array($item, $qty);
				
				echo "<p>Shopping item added</p>";
			} else {
				echo "<p>Shopping item already exists</p>";
			}
			
			sort($working_data);
			
			echo "<p>Shopping List</p>";
			foreach ($working_data as $data){
				echo "<p>", $data [0], " -- ", $data[1], "</p>";
			}
		} else {
			echo "<p>Please enter item and quantity in the input form.</p>";
		}
	?>
</body>
</html>