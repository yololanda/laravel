<?php
// VISIBILITY, PIRVATE, PUBLIC, PROTECTED

//namespace to differentiate 2 classes with same names.
//then should put Bookstore\domain as mycustomer
namespace Bookstore\domain;
//need to include the file path for extending from the parent
//either use include pr use namespace like current example
/*include 'domain/person.php';*/
//by default since they are in the same namespace they should not need to use namespace path like below.
use Bookstore\domain\person;
use Bookstore\domain\payer;

interface Customer extends Payer{


/*
*===========================================================
*interfaces Explaination
*===========================================================
*/

/**
		*an Interface is a OOP element that groups a set of function declaration without implementing them
		*Interfaces are different from abstract classes, since they cannot contain any implementation at all whereas abstract classes could mix both method definitions and implemented ones.
		*Interface cannot contain any properties of functions so lets move the code from customer to person class leaving only this lef in
		*from the developer's point of view, using a class that implements an interface is like writing a contract;
		*you ensure that you class will always have the methods declared in the interface, regardless of the implementation
*/





	//define abstract method
	//calling them from child child so it wont null
	//this abstract functions refer from premium and basic class that extend from customer, and customer extends from person.
	//abstract classes cannot be instantiated 
	/*abstract public function getMonthlyFee();
	abstract public function getAmountToBorrow();
	abstract public function getType();
*/
	//this is interface
	public function getMonthlyFee();
	public function getAmountToBorrow();
	public function getType();
	public function getFirstName();


}
?>