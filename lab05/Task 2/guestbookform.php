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
	<h1>Lab05 Task 2 - Guestbook</h1>
	
	<hr/>
	
	<form action="guestbooksave.php" method="post">
		<fieldset>
			<legend>Enter your details to sign our guest book</legend>
			<p>First Name: <input type="text" name="fName"/></p>
			<p>Last Name: <input type="text" name="lName"/></p>
			<p><input type="submit" name="submit_btn" value="Submit"/></p>
		</fieldset>
	</form>
	
	<p><a href="guestbookshow.php">Show Guest Book</a></p>
</body>

</html>