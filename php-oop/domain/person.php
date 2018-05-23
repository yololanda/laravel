<?php
namespace Bookstore\domain;
use Bookstore\utils\unique;

class Person{

	//use unique from path namespace
	use unique;


	protected $first_name;
	protected $surname;
	/*private static $lastId = 0;
	private $id;*/
	private $email;

	//this is magic method for allowing var_dump
	//this variables are restricted to customer class only
	// isn't this field constructor?
	public function __construct($id, $first_name, $surname, $email){
		//Comment below is for using construct on init.php
		//calling parent constructor like $firstname, $surname
		//this is called inheritance
		//parent::__construct($first_name, $surname);
		/*$this->id = $id;*/

		//use self:: cause the $lastId is static
		/*if($id == null){
			$this->id = ++self::$lastId;
		} else {
			$this->id == $id;
			if ($id > self::$lastId){
				self::$lastId = $id;
			}
		}*/

		
		//use thread;
		$this->setId($id);



		$this->first_name = $first_name;
		$this->surname = $surname;
		$this->email = $email;
	}





	//this will displya first_name and surname as string rather than object to
	//init.php
	//this is magic method for allowing echo directly
	//this variable is accessable by other classes
	public function __toString(){
		$result = $this->first_name . ' '.$this->surname;
		return $result;
	}


	//accessor
	public static function getLastId(){
		return self::$lastId;
	}


	//Getter & Setter in PHP, this is encapsulation where it 
	//encapsulated the variable through method.
	public function getFirstName() {
		return $this->first_name;
	}

	public function getSurname(){
		return $this->surname;
	}
	//this is sample of getter
	public function getFullName(){
		return strtoupper($this->first_name . ' ' . $this->surname);
	}

	public function getEmail(){
		return $this->email;
	}
	//this is sample of setter / Mutator
	public function setEmail(String $email){
		 $this->email = $email;
	}

	
	public function sayHi(){
		return 'Howdy '. $this->first_name;
	}


}

?>