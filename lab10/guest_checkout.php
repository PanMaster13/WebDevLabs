<?php
	include('guest_class.php');
	
	session_start();
	
	$checkout = unserialize($_SESSION['savedClass']);
	
	if (isset($_POST['submit_button'])){
		$checkout->pay_bill($_POST['payment_amount']);
		$_SESSION['savedClass'] = serialize($checkout);
	}
	
	$disabled_flag = '';
	$amount_color = 'green';
	if ($checkout->get_bill() > 0.00) {
		$disabled_flag = 'disabled="disabled"';
		$amount_color = 'red';
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
	<form action = "guest_checkout.php" method = "POST" >
		<h3>Checking out for guest - <span style="color:blue"><?php echo $checkout->get_name(); ?></span>
		</h3>
		<hr>
		<p>Enter the amount you wish to pay:
			<input type="number" name="payment_amount">
		</p>
		<input type="submit" value="Pay" name="submit_button">
		<p><a href="index.php">Back to Home</a></p>
		<br>
	</form>
	<form action = "http://ctanswin.byethost15.com/lab10/thank_you.php" method="POST" >
		<h3>Total amount due:
		<span style="color:<?php echo $amount_color ?>">RM
		<?php echo $checkout->get_bill(); ?>
		</span>
		</h3>
		<input type="submit" value="Checkout" name="checkout_button" <?php echo $disabled_flag; ?>>
	</form>
</body>
</html>