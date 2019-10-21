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
	<h2>Sign Guestbook</h2>
	<hr/>
	
	<?php
		if (isset ($_POST["submit_btn"]))
		{
			$errorMsg = "";
			$name = $_POST["name"];
			$email = $_POST["email"];
			$filename = "data/guestbook.txt";
			
			// Validating name field
			if (empty($name)){
				$errorMsg .= "Name field cannot be empty!<br/>";
			}
			// Validating email field
			if (empty($email)){
				$errorMsg .= "Email field cannot be empty!<br/>";
			} else if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
				$errorMsg .= "Email format is invalid!<br/>";
			}
			// Error message is empty, means there are no errors
			if (empty($errorMsg)){
				$working_data = array();
				// Checks if name of email is in record
				$guest_name_list = array();
				$guest_email_list = array();
				$handle = fopen($filename, "r");
				while (!feof($handle)){
					$curr_line = fgets($handle);
					if ($curr_line != ""){
						$data = explode(",", $curr_line);
						$working_data [] = $data;
						array_push($guest_name_list, $data[0]);
						// trim() needed to remove extra whitespace
						array_push($guest_email_list, trim($data[1]));
					}
				}
				fclose($handle);
				$is_new_name = !(in_array($name, $guest_name_list));
				$is_new_email = !(in_array($email, $guest_email_list));
				
				// Both data inputed is new (not duplicate)
				if ($is_new_name && $is_new_email){
					$handle = fopen($filename, "a");
					$line_to_write = $name . "," . $email . "\n";
					fputs($handle, $line_to_write);
					fclose($handle);
					
					$working_data [] = array($name, $email);
					
					echo "<p style='color:green'>Thank you for signing our guest book.</p>";
					echo "<br/>";
					echo "<p><strong>Name</strong>: " . $name . "</p>";
					echo "<p><strong>E-mail</strong>: " . $email . "</p>";
				// There is duplicate data
				} else {
					echo "<p style='color:red'>You have already signed the guest book!";
				}
			// There is error in validation
			} else {
				echo "<p style='color:red'>", $errorMsg, "</p>";
				echo "<p style='color:red'>Use the Browser's 'Go Back' button to return to the Guestbook form.</p>";
			}
		}
		else
		{
			echo "<p>Please enter your first name and last name in the input form.</p>";
		}
	?>
	
	<hr/>
	
	<p><a href="guestbookform.php">Add Another Visitor</a></p>
	<p><a href="guestbookshow.php">View Guest Book</a></p>
</body>

</html>