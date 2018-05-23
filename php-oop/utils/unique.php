<?php

namespace Bookstore\utils;

/*
==========================================
THREAD CANNOT BE INITIATED
==========================================
*/
use Exception;

trait  Unique{

	private static $lastId = 0;
	private $id;


	public function setId($id){
		//try and catch here to remove all warning and error as the condition is catch in Exception $e
		try{
		if($id < 1){
			//this will throw exception error message , without try and catch
			throw new Exception('Id cannot be negative');
		}

		
		if(empty($id)){
			$this->id = ++self::$lastId;
		} else {
			$this->id = $id;
			if ($id > self::$lastId){
				self::$lastId = $id;
			}
		}
		}catch(Exception $e){
			echo $e->getMessage();
		}finally{
			echo 'Done with try and catch';
		}
	}


	//public static cause $lastId is declared as private static
	public static function getLastId(){
		return self::$lastId;
	}

	public  function getId(){
		return $this->id;
	}


}

?>