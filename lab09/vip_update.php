<?php
	session_start();
	
	if (!isset($_SESSION['email'])){
		header("Location: index.php");
	} else {
		$email = $_SESSION['email'];
	}
	
	if (isset($_POST["update_button"])){
		$fname = $_POST["first_name"];
		$lname = $_POST["last_name"];
		$password = $_POST["password"];
		$confirm_password = $_POST["confirm_password"];
		
		// Validating for Empty inputs
		if ((empty($fname)) || (empty($lname)) || (empty($password)) || (empty($confirm_password))){
			$status_msg = "<p style='color:red'><strong>Incomplete input. Please try again.</strong></p>";
		// Validating for Non matching passwords
		} else if ($confirm_password != $password){
			$status_msg = "<p style='color:red'><strong>Both passwords do not match. Please try again.</strong></p>";
		} else {
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
			
			$hased_password = hash('sha256', $password);
			$query = "UPDATE tb1_member_info SET fname=?, lname=?, login_pwd=? WHERE email=?";
			$prepared_query = mysqli_prepare($conn, $query);
			mysqli_stmt_bind_param($prepared_query, 'ssss', $fname, $lname, $hased_password, $email);
			mysqli_stmt_execute($prepared_query);
			$query_result = mysqli_stmt_get_result($prepared_query);
			
			$status_msg = "<p style='color:green'><strong>Your account is updated successfully.</strong></p>";
		}
	} else {
		$status_msg = "";
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>VIP</title>
</head>
<body>
	<h1>Lab 9 - VIP Account Update</h1>
	<form action = "vip_update.php" method="post">
		<p>First name: <input type="text" name="first_name"></p>
		<p>Last name: <input type="text" name="last_name"></p>
		<p>Email address: <input type="text" name="email" placeholder="<?php echo $email; ?>" disabled="disabled"></p>
		<p>Password: <input type="password" name="password"></p>
		<p>Confirm password: <input type="password" name="confirm_password"></p>
		<input type="submit" value="Update" name="update_button">
		<p><?php echo $status_msg; ?></p>
		<p><a href="vip_private.php">Back to VIP Private page</a></p>
	</form>
</body>
</html>