<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>VIP</title>
</head>
<body>
	<h1>Lab 9 - VIP Registration</h1>
	<form action="vip_confirm.php" method="post">
		<p>First name: <input type="text" name="first_name"></p>
		<p>Last name: <input type="text" name="last_name"></p>
		<p>Email address (as login ID): <input type="text" name="email"></p>
		<p>Password: <input type="password" name="password"></p>
		<p>Confirm password: <input type="password" name="confirm_password"></p>
		<p><input type="submit" value="Register" name="register_button"></p>
		<p><a href="index.php">Back to Home</a></p>
	</form>
</body>
</html>