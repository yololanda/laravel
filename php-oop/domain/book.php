<?php
//this name space for dirrent dir
namespace Bookstore\domain;

class Book{
	//properties are like variable
	//class contains variables
	public $isbn;
	public $title;
	public $author;
	public $available;

	//this is built in construct where it allow to take direct input into class constructor.
	public function __construct(int $isbn, String $title, String $author, int $available =0){
		$this->isbn = $isbn;
		$this->title = $title;
		$this->author = $author;
		$this->available = $available;
	}

	/*
	* to convert object to string 
	*/
	public function __toString(){
		$result = $this->title . ' by ' . $this->author;
		if(!$this->available) {
			// .= here is to concatenate the available status
			$result .= ' Not available';
		}


		return $result;
	}

	
	/*
	*	Magic Method From PHP
	*	__construct() == for creating automated instantiate
	*
	*/
	public function getCopy(){
		if($this->available < 1){
			return false;

		}
		else {
			$this->available--;
			return true;
		}
	}
}



?>




<?php

/*
*================================================
* Normal OOP
*================================================
*/
/*class Book{*/
		//properties are like variable
		//class contains variables
		/*public $isbn;
		public $title;
		public $author;
		public $available;
	*/

		/*
		==============================
		THIS IS METHOD IF NEEDED IN CLASS
		==============================
		*/
		//$this here refer to variable within this class
		//public function getPrintableTitle(){
		/*	$result = $this->title . ' by ' . $this->author;
		if(!$this->available) {
			// .= here is to concatenate the available status
			$result .= 'Not available';
		}

		return $result;
		}
		*/
/*	}*/
		//instantiate
		//Instantiate is bad if the data that need to be inputed more than one. use construct for data that more than 1.
/*	$harry_potter = new Book();
	$harry_potter->isbn = 98003;
	$harry_potter->title = 'Harry Potter';
	$harry_potter->author = 'Ryan';
	$harry_potter->available = 0;*/
	//displays structured information about variable like type and value
	
	/*var_dump($harry_potter);*/
	
?>

