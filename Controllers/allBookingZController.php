<?php
 
include 'models/allBookingZModel.php';


class allbookingZ{
	
	 
    function __construct()
    {
        
    }

	
	public function allbookingZ() {
	
		$allbookingZ = viewBooking::all();
		if(!$allbookingZ)
		{
			echo"No booking Data Found";
		}
		else
		{
			// call your view class here
			require_once('views/bookDetailZView.php');
		}
     	
	}
	
	
	
}
