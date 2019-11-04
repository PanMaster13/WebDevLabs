<?php
	session_start();
	
	if (!isset($_SESSION['email'])){
		header("Location: index.php");
	} else {
		$email = $_SESSION['email'];
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>VIP</title>
</head>
<body>
	<h3>Welcome <span style="color:green"><?php echo $email; ?></span> to our VIP private page</h3>
	<a href="index.php">Logout</a>
</body>
</html>