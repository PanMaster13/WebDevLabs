<?php
	// Initialise database variables
	$host = "localhost";
	$username = "root";
	$db_password = "";
	$database = "lab8";

	// Create connection
	$conn = mysqli_connect($host, $username, $db_password, $database);

	// Check connection
	if (!$conn){
		die("<p style='color:red'><strong>Failed to connect to database: " . mysqli_connect_error() . "</strong></p>");
	}
	
	if (isset($_POST["login_button"])){
		$email = mysqli_real_escape_string($conn, $_POST["login_id"]);
		$password = mysqli_real_escape_string($conn, $_POST["password"]);
		$hased_password = hash('sha256', $password);
		
		$query = "SELECT * FROM tb1_member_info WHERE email=?";
		$prepared_query = mysqli_prepare($conn, $query);
		mysqli_stmt_bind_param($prepared_query, 's', $email);
		mysqli_stmt_execute($prepared_query);
		$query_result = mysqli_stmt_get_result($prepared_query);
		$numRows = mysqli_num_rows($query_result);
		
		if ($numRows > 0){
			$row = mysqli_fetch_assoc($query_result);
			if ($hased_password == $row["login_pwd"]){
				session_start();
				$_SESSION['email'] = $email;
				// Redirects to VIP Private page
				header("Location: vip_private.php");
			} else {
				$error_msg = "<p style='color:red'>The password for this account is incorrect. Please try again.</p>";
			}
		} else {
			$error_msg = "<p style='color:red'>There are no accounts with this email address. Please try again.</p>";	
		}
	} else {
		$error_msg = "";
	}
	
	mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>VIP</title>
</head>
<body>
	<h1>Lab 9 - VIP Login</h1>
	<form action="vip_login.php" method="post">
		<p>Login ID: <input type="text" name="login_id" placeholder="Your Email"></p>
		<p>Password: <input type="password" name="password"></p>
		<p><input type="submit" value="Login" name="login_button"></p>
		<p><a href="index.php">Back to Home</a></p>
		<?php echo $error_msg; ?>
	</form>
</body>
</html>