<?php

namespace Bookstore\domain;

interface Payer{

	public function pay(float $amount);
	public function isExtentOfTaxes();

}

?>