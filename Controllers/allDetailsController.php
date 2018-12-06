<?php
 
include 'models/custDetailsModel.php';


class allDetails{
	
	public function allDetails() 
       {
	session_start();
        
     	
        if(isset($_POST['btnDeactivateProfile']))
	{ 
            $status="N";
             $username = $_SESSION['username'];
             ViewDetails::updateCustomerStatus($status,$username);
             $allDetails = ViewDetails::all(); //refreshing allDetails object
             require_once('views/home.php');
             
        } 
        else
        {
            $allDetails = ViewDetails::all();
            	if(!$allDetails)
		{
			echo"No customer Data Found";
                        return;
		}
            
            require_once('views/custDetailsView.php');
        }
        
        
        
	}
        
    
	
}