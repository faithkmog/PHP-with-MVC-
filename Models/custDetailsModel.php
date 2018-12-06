<?php

  class ViewDetails {
       
    	public $name;
		public $surname;
		public $gender;
		public $idNum;
		public $email;
		public $city;
		public $password;
                public $status;
                
                
		//public $customer_id;
   
    	public function __construct($name,$surname,$gender,$idNum,$email,$city,$password) {
      		$this->name  = $name;
      		$this->surname  = $surname;
      		$this->gender  = $gender;
      		$this->idNum  = $idNum;
			$this->email  = $email;
			$this->city  = $city;
			$this->password  = $password;
			//$this->customer_id = $customer_id;
			
    	}

	public static function all() {
              $username = $_SESSION['username'];
    
      		$list = array();
      		$db = Db::getInstance();
      		$req = $db->query("SELECT * FROM tbl_customer where cust_active='Y' AND  cust_email='".$username."' ");
      
	  
      		foreach($req->fetchAll() as $customer) {
        		$list[] = new ViewDetails(
                                $customer['cust_fName'],
                                $customer['cust_lName'], 
                                $customer['cust_gender'],
                                $customer['cust_idNum'], 
                                $customer['cust_email'],
                                 $customer['cust_city'],
                                $customer['cust_password']);
      		}

      	return $list;
    	}
	public static function updateCustomerStatus($stat,$uname) 
        {
            $password="xxxxxx";
      	 $db = Db::getInstance();
	 $sql = "UPDATE tbl_customer SET cust_active = '".$stat."',cust_password='".$password."' WHERE cust_email = '".$uname."' ";
	 $db->prepare($sql);
	 $db->query($sql);
         
         
         require_once 'views/home';
       }
	

}