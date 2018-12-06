<?php
 
include 'models/updateStaffModel.php';


class updateProfile{
	
	 
    function __construct()
    {
        
    }

	
	public function updateStaff() {
		
		$username = $_SESSION['username'];
		
                
		$staff = UpdateStaff::getStaff($username);
	
	if(!isset($_GET['btnUpdate']))
	{
		require_once('views/updateStaffView.php');
	}
	
	elseif(isset($_GET['btnUpdate']))
		
		{
            
                $lName = $_GET['lName'];
		$fName = $_GET['fName'];
		$email = $_GET['email'];
		$staff_id = $_GET['staff_id'];
			UpdateStaff::updateStaff($lName,$fName,$email,$staff_id);
                        $staff = UpdateStaff::getStaff($username);
			require_once('views/updateStaffView.php');
		}
		
		
     	
	}
	
	
	
}