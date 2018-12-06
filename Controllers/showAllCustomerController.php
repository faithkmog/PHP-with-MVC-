<?php
 
include 'models/showAllCustomerModel.php';
			    

class allDetails{
	
	 
    function __construct()
    {
        
    }

	
	
	
	public function showAllCustomer() {
	
		$allCustomer = ViewCustomers::all();
		if(!$allCustomer)
		{
			echo"No customer Data Found";
		}
		else
		{
			// call your view class here
			require_once('views/allCustomerView.php');
		}
     	
	}
		
	
}