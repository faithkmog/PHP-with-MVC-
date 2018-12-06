<?php
 
include 'models/customerModel.php';


class addNew{
	
	public $allVehicle;
   
    function __construct()
    {
        
    }

     
    
    public static function signUp()
    {
     
      
		 
        if (isset($_POST['btnregister'])) 
        {
		    
			 
			 
            $Fname = $_POST['name'];
            $Lname = $_POST['surname'];
			$idNum = $_POST['idNumber'];
			$gen = $_POST['gender'];
			$city =$_POST['city'];
			$email =$_POST['email'];
			$pass =$_POST['password'];      // 
                        $confirm = $_POST['confirmpassword'];
                        
			
                        if($pass != $confirm)
                        {
                            require_once 'views/newCustView.php';
                            echo '<font color =red size2 align=center>Password does not match</font>';
                        }
                        else 
                            {
                                Customer::addCust($Fname,$Lname,$idNum,$gen,$city,$email,$pass);
                                require_once('views/loginView.php');
                            }
              
        }
		
		else
		{ 
          require_once 'views/newCustView.php';
		}
    }
}