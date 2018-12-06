<?php
 
include 'models/updateServiceModel.php';


class updateServDetails{
	
	 
    function __construct()
    {
        
    }

	
	public function updateService() {
		
		
		
                
		$serv = updateService::getServ(3);
	
	if(!isset($_GET['btnUpdate']))
	{ echo "popopo";
		require_once('views/updateServiceView.php');
	}
	
	elseif(isset($_GET['btnUpdate']))
		
		{
                     
        $name = $_GET['name'];
		$desc = $_GET['desc'];
		$cost = $_GET['cost'];
		$categ = $_GET['categ'];
				$serv_id = $_GET['serv_id'];
                
            
                
			updateService::updateService($name,$desc,$cost,$serv_id,$categ );
			require_once('views/updateServiceView.php');
		}
		
		
     	
	}
	
	
	
}