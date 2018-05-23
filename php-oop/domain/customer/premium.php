<?php
	namespace Bookstore\domain\customer;

	use Bookstore\domain\customer;
	use Bookstore\domain\person;

	class Premium extends Person implements Customer {
		public function getMonthlyFee(){
			return 15.0;
		}
		

		public function getAmountToBorrow(){
			return 10;
		}


		public function getType(){
			return 'Premium';
		}

		public function pay(float $amount){
			return "Paying $amount";
		}

		public function isExtentOfTaxes(){
			return 'Get your shit together mate, pay tax';
		}


	}



?>