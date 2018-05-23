<?php

//use namespace
use Bookstore\domain\book;
use Bookstore\domain\customer;
use Bookstore\domain\manager;
use Bookstore\domain\customer\basic;
use Bookstore\domain\customer\premium;
use Bookstore\domain\payer;



/*
* How autolaoding namespace path work
*this is the sample code below here
*
*/

function autoloader($classname){
	$lastSlash = strpos($classname, '\\')+ 1;
	$classname = substr($classname, $lastSlash);
	$directory = str_replace('\\', '/', $classname);
	$filename = __DIR__. '/' . $directory . '.php';
	require_once $filename;
}

//use this method to load autoloader
//This is build it function
spl_autoload_register('autoloader');


/*
=======================================================
Without Autoload use require_once
=======================================================
*/
//require classes path from file location same as namespace.
//comment these out if using autoloader
/*require_once __DIR__ .'/domain/book.php';
require_once __DIR__ .'/domain/customer.php';*/

//instantiate
//this is direct to the customer or book class
/*$customer_detail = new Customer(null,'Toin','Chang','toin.chang31@gmail.com');
$customer_detail2 = new Customer(1,'Felix','Demas','felix@gmail.com');
$harry_potter = new Book(98003,'Harry Potter','Ryan', 0);
*/

/*
========================================================
Instantiate Basic Customer through abstract
========================================================
Basic will get the details like first_name, surname and etc from main class to the top. from customer to person. 
*/
$harry_potter = new Book(98003,'Harry Potter','Ryan', 2);
$lord_of_the_ring = new Book(98003,'Harry lord_of_the_ring','Hobbit', 24);
$hobbit = new Book(91344, 'Hobbit', 'gundalf',12);

$customer_detail = new Basic(-1,'Toin','Chang','toin.chang31@gmail.com');

$customer_premium = new premium(null, 'Felix', 'Demas', 'Demas@felix.com');

$book_array = array($harry_potter, $lord_of_the_ring, $hobbit);

//var_dump($harry_potter);
/*echo '<br />';*/

//var_dump will read everything inside __construct();
//var_dump($customer_detail->email);

//this is how to use getter and setter method
//var_dump($customer_detail->getFirstName());
/*
echo $customer_detail->getFullName() . '<br />';
$customer_detail->setEmail('snow_boards87@yahoo.com');
echo $customer_detail->getEmail(). '<br />';

echo $customer_detail2->getFullName() . '<br />';
echo $customer_detail2->getEmail();*/

//this is how you get static variable from the other class
//this is reference it using existing instance
/*echo $customer_detail::getLastId();*/
//this is reference it using class name itself
/*Customer::getLastId();*/
/*echo '<br />' . $customer_detail->sayHi();*/

//take class as Customer and book into function
function checkIfValid(Customer $customer_detail, $book){
	return $customer_detail->getAmountToBorrow() >= count($book);
}

//example of polymorphism
function processPayment(Payer $payer, float $amount) {
	if($payer->isExtentOfTaxes()){
		return $payer->isExtentOfTaxes();
	} else {
		$amount *=1.20;
	}
	$payer->pay($amount);
}

//var_dump(checkIfValid($customer_detail, $book_array));
 var_dump($customer_detail->getType());
 var_dump($customer_detail->getFirstName());
 var_dump($customer_detail->getFullName());
 var_dump(processPayment($customer_premium, 600.00));
 echo '<br />';
 var_dump($customer_detail->getId());
 echo '<br />';
 var_dump($customer_premium->getId());

 //testing trait manager
 $manager = new Manager();
 echo $manager->sign();

/* var_dump($customer_detail->pay(2000.00));
 echo '<br />';
 var_dump($customer_premium->getFullName());
 var_dump($customer_premium->pay(30000.00));*/
?>