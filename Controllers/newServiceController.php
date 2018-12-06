<?php
 
include 'models/newServiceModel.php';


class addService{
	
	public $allVehicle;
        
   
    function __construct()
    {
        
    }

     
    
    public static function insert()
    {
     // session_start();
        $username = $_SESSION['username'];
      
		 
        if (isset($_POST['btnregister'])) 
        {
		    //echo"In button register ";
			
                        $servName = $_POST['serv_name'];
                        $servDesc = $_POST['serv_desc'];
                        $image = $_POST['servImage'];
			$servCost = $_POST['serv_cost'];
                        //echo "Image path = $image";
                Service::addService($servName,$servDesc,$servCost,$image,$username);
				require_once 'views/newServiceView.php';
            
        }
		
		else
		{ 
          require_once 'views/newServiceView.php';
		}
    }
}