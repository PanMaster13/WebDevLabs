<?php
	if (isset($_POST["register_button"])){
		$fname = $_POST["first_name"];
		$lname = $_POST["last_name"];
		$email = $_POST["email"];
		$password = $_POST["password"];
		$confirm_password = $_POST["confirm_password"];
		
		// Validating for Empty inputs
		if ((empty($fname)) || (empty($lname)) || (empty($email)) || (empty($password)) || (empty($confirm_password))){
			echo "<p style='color:red'><strong>Incomplete input. Please try again.</strong></p>";
		// Validating for Non matching passwords
		} else if ($confirm_password != $password){
			echo "<p style='color:red'><strong>Both passwords do not match. Please try again.</strong></p>";
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
			
			$query1 = "SELECT * FROM tb1_member_info WHERE email=?";
			$prepared_query = mysqli_prepare($conn, $query1);
			mysqli_stmt_bind_param($prepared_query, 's', $email);
			mysqli_stmt_execute($prepared_query);
			$query_1_result = mysqli_stmt_get_result($prepared_query);
			$numRows = mysqli_num_rows($query_1_result);
			
			if ($numRows == 0){
				
				$hased_password = hash('sha256', $password);
				$query2 = "INSERT INTO tb1_member_info (fname, lname, email, login_pwd) VALUES (?, ?, ?, ?)";
				$prepared_query_2 = mysqli_prepare($conn, $query2);
				mysqli_stmt_bind_param($prepared_query_2, 'ssss', $fname, $lname, $email, $hased_password);
				mysqli_stmt_execute($prepared_query_2);
				$query_2_result = mysqli_stmt_get_result($prepared_query_2);
				
				echo "<p style='color:green'><strong>Your account registration is successful.</strong></p>";
				// Free query result
				//mysqli_free_result($query_2_result);	
			} else {
				echo "<p style='color:red'><strong>Registration failed!</strong></p>";
				echo "<p style='color:red'><strong>An account with the same email already exists.</strong></p>";
			}
			// Free query result
			mysqli_free_result($query_1_result);
			// Close connection
			mysqli_close($conn);
		}
	} else {
		echo "<p style='color:red'><strong>Please complete the form in the Registration page.</strong></p>";
	}
	echo "<p><a href='index.php'>Back to Home</a></p>"
?>