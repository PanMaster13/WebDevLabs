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
	<h1>Lab05 Task 2 - Sign Guestbook</h1>
	
	<hr/>
	
	<?php
		if (isset ($_POST["submit_btn"]))
		{
			$errorMsg = "";
			$fName = $_POST["fName"];
			$lName = $_POST["lName"];
			
			if (empty($fName))
			{
				$errorMsg = $errorMsg . "First name cannot be empty! <br/>";
			}
			
			if (empty($lName))
			{
				$errorMsg = $errorMsg . "Last name cannot be empty! <br/>";
			}
			
			if (empty($errorMsg))
			{
				$filename = "data/guestbook.txt";
				$handle = fopen($filename, "a");
				$name = $fName . ", " . $lName . "<br/>";
				$data = addslashes($name);
				$writing = fwrite($handle, $data);
				if ($writing === false)
				{
					echo "<p>Cannot add your name to the Guest book.</p>";
				}
				else
				{
					echo "<p style='color:green'>Thank you for signing our guest book!</p>";
				}
				fclose($handle);
			}
			else
			{
				echo "<p style='color:red'>", $errorMsg, "</p>";
				echo "<p style='color:red'>Use the Browser's 'Go Back' button to return to the Guestbook form.</p>";
			}
		}
		else
		{
			echo "<p>Please enter your first name and last name in the input form.</p>";
		}
	?>
	
	<p><a href="guestbookshow.php">Show Guest Book</a></p>
</body>

</html>