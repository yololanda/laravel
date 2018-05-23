<?php
	namespace Bookstore\domain\customer;

	use Bookstore\domain\customer;
	use Bookstore\domain\person;

	class Basic extends Person implements Customer {
		public function getMonthlyFee(){
			return 5.0;
		}
		

		public function getAmountToBorrow(){
			return 4;
		}


		public function getType(){
			return 'Basic';
		}

		public function pay(float $amount){
			return "Paying $amount";
		}

		public function isExtentOfTaxes(){
			return 'Basic no need tax, good to go';
		}

		
	}



?>