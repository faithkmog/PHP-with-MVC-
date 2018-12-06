<?php

  class ViewCustomers {
       
    	public $cust_lName;
		public $cust_fName;
		public $cust_email;
		public $cust_gender;
		public $cust_city;
		
		//public $staff_id;
   
    	public function __construct($cust_lName,$cust_fName,$cust_email,$cust_gender,$cust_city) {
      		$this->cust_lName  = $cust_lName;
      		$this->cust_fName  = $cust_fName;
      		$this->cust_email  = $cust_email;
      		$this->cust_gender  = $cust_gender;
      		$this->cust_city  = $cust_city;
      	
			
    	}

	public static function all() {
      		$list = array();
      		$db = Db::getInstance();
      		$req = $db->query('SELECT * FROM tbl_customer');
      
	  
      		foreach($req->fetchAll() as $customer) {
        		$list[] = new ViewCustomers($customer['cust_lName'], $customer['cust_fName'], $customer['cust_email'], $customer['cust_gender'], $customer['cust_city']);
      		}

      	return $list;
    	}
	


}