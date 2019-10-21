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
	
	<hr/>
	
	<form action="guestbooksave.php" method="post">
		<fieldset>
			<legend><strong>Enter your details to sign our guest book</strong></legend>
			<p>Name: <input type="text" name="name"/></p>
			<p>E-mail: <input type="text" name="email"/></p>
			<p>
				<input type="submit" name="submit_btn" value="Sign"/>
				<input type="reset" value="Reset Form"/>
			</p>
		</fieldset>
	</form>
	
	<p><a href="guestbookshow.php">View Guest Book</a></p>
</body>

</html>