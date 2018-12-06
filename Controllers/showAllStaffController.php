<?php
 
include 'models/viewStaffModel.php';


class addNew{
	
	 
    function __construct()
    {
        
    }

	
	public function showAllStaff() {
	
		$allStaff = ViewStaff::all();
		if(!$allStaff)
		{
			echo"No staff Data Found";
		}
		else
		{
			// call your view class here
			require_once('views/allStaffView.php');
		}
     	
	}
	
	
	
}