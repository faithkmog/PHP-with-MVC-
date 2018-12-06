<?php
 
include 'models/allServiceModel.php';


class allService{
	
	 
    function __construct()
    {
        
    }

	
	public function allService() {
	
		$allService = ViewService::all();
		if(!$allService)
		{
			echo"No service Data Found";
		}
		else
		{
			// call your view class here
			require_once('views/allServiceView.php');
		}
     	
	}
	
	
	
}