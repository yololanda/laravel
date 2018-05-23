<?php
namespace Bookstore\utils;

//cannot have 2 traits that have same name functions
//it will cause collison
//to solve it use = insteadof - as 
//example in manager make use as "use Contract, Communicator"
/*
put this inside Manager class
use Contract, Communicator {
	Contract::sign insteadof Communicator; //this use Contract rather than commincator
	Commmunicator ::sign as makeSign; //alias communicator to make sign	
};

so in init.php, use echo $manager->makeSign() to access Communicator
*/
trait Contract{
	public function sign(){
		echo 'sign the contract';
	}
}
?>