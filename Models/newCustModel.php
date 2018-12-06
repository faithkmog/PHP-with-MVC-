<?php

  class Customer {
    
 
    	 
   
    	public function __construct($studnr, $firstname, $surname, $username) {
      		$this->studnr= $studnr;
      		$this->firstname= $firstname;
		$this->surname  = $surname;
	  	$this->username= $username;
    	}

 

		public static function addService($name, $surname)
  {
		$sql = "INSERT INTO tbl_customer (cust_fName,cust_lName) VALUES ('$name', '$surname')";    
 		$db = Db::getInstance();
		 
		$db->query($sql);
		 
	 
	}
	public function signUp($data)
{
 
}
}

?>
