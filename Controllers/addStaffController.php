<?php
 
include 'models/staffModel.php';
	

class addNew{
	
	 
    function __construct()
    {
        
    }

         
    public static function addStaff()
    {               session_start();
            $_SESSION['username'] = $user->username;
     
      
		 
        if (isset($_POST['btnaddStaff'])) 
        {
		    
			 
			 
            $lName = $_POST['lName'];
			$fName = $_POST['fName'];
			$gender = $_POST['gender'];
			$idNo = $_POST['idNo'];
			$email =$_POST['email'];
			$password =$_POST['password'];
			$hireDate =$_POST['hireDate'];
			

                Staff::addStaff($lName,$fName,$gender,$idNo,$email,$password,$hireDate);
				
				
					require_once('views/newStaffView.php');
        }
		
		else
		{ 
          require_once 'views/newStaffView.php';
		}
    }
	
	public function showAllStaff() {
		
		Staff::allStaffView();
		require_once('views/home.php');
     	require_once('views/allStaffView.php');
	}
	
	
	
	
}