<?php
 
include 'models/updateProfileModel.php';

 

class updateDetails{
	
	 
    function __construct()
    {
        
    }

	
	public function updateCustomer() {
 $username = $_SESSION['username'];
		$cust = updateCustomer::getCus($username);
	
	if(!isset($_GET['btnUpdate']))
	{ 
            
		require_once('views/updateCustomerView.php');
	}
	
	elseif(isset($_GET['btnUpdate']))
		
		{
                     
                $lName = $_GET['lName'];
		$fName = $_GET['fName'];
		$email = $_GET['email'];
		$cust_id = $_GET['cust_id'];
                $city = $_GET['city'];
                $password = $_GET['password'];
                
			updateCustomer::updateCustomer($lName,$fName,$email,$cust_id,$city,$password);
			
		require_once('views/updateCustomerView.php');
		
			 
		}
		
		  
     	
	}
	
	
	
}