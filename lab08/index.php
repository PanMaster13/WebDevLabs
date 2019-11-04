<?php
session_start();
if (isset($_SESSION['email'])){
	session_unset();
	session_destroy();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>VIP</title>
</head>
<body>
	<h1>Lab 8 - Welcome to VIP Home</h1>
	<h3>
		<a href="vip_register.php">Register New VIP account</a>
	</h3>
	
	<h3>
		<a href="vip_login.php">Login</a></h3>
	<h3>
</body>
</html>