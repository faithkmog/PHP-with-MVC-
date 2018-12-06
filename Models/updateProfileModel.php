<?php

  class updateCustomer {
       
    	        public $lName;
		public $fName;
		public $email;
		public $cust_id;
                public $city;
                public $password;
   
    	public function __construct($lName, $fName,$email,$cust_id,$city,$password)
		{
      		$this->lName  = $lName;
      		$this->fName  = $fName;
      		$this->email  = $email;
                $this->city= $city;
                $this->password=$password;
                $this->cust_id = $cust_id;
			
    	}
	
	public static function updateCustomer($lName,$fName,$email,$cust_id,$city,$password) {
      	$db = Db::getInstance();
      		
	  	$sql = "UPDATE tbl_customer SET cust_lName = '".$lName."', cust_fName = '".$fName."',cust_email = '".$email."',cust_id = '".$cust_id."',cust_city = '".$city."',cust_password = '".$password."' WHERE cust_id = ".$cust_id;
	  	$db->prepare($sql);
	      	$db->query($sql);
			
			  
       }


	   public static function getCus($username)
	   {
		  	$list = array();
      		$db = Db::getInstance();
      		$req = $db->query("SELECT * FROM tbl_customer where cust_email = '$username' LIMIT 1");
      
	  
      		foreach($req->fetchAll() as $cust) {
        		$list[] = new updateCustomer($cust['cust_lName'], $cust['cust_fName'], $cust['cust_email'],$cust['cust_id'],$cust['cust_city'],$cust['cust_password']);
      		}

      	return $list;
		
	   }
}    
             