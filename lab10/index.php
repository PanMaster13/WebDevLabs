<?php
	include('guest_class.php');

	session_start();

	if (isset($_POST['checkout_button'])){
		$checking = unserialize($_SESSION['savedClass']);
		$checking->set_name($_POST['guest_name']);
		$checking->calc_bill($_POST['num_nights']);
		$_SESSION['savedClass'] = serialize($checking);
		header("Location: guest_checkout.php");
	} else {
		$checking = new Guest();
		$_SESSION['savedClass'] = serialize($checking);
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>PHP - OOP</title>
</head>
<body>
	<h1>Lab 10 - Hotel Checkout System</h1>
	<form action="index.php" method="post">
		<p>Enter your name: <input type="text" name="guest_name"></p>
		<p>Number of nights: <input type="number" name="num_nights"></p>
		<input type="submit" value="Pay & Checkout" name="checkout_button">
	</form>
</body>
</html>