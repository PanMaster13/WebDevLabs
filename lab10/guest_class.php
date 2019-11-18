<?php
	class Guest {
		private $name;
		private $bill_amount;
		
		function __construct() {
			$this->name = "";
			$this->bill_amount = 10.00;
		}
		
		public function get_name() {
			return $this->name;
		}
		
		public function get_bill() {
			return $this->bill_amount;
		}
		
		public function set_name($new_name) {
			$this->name = $new_name;
		}
		
		public function calc_bill($num_of_nights) {
			$this->bill_amount = $this->bill_amount + (50 * $num_of_nights);
		}
		
		public function pay_bill($payment) {
			$this->bill_amount = $this->bill_amount - $payment;
		}
	}
?>