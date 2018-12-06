<?php
 
include 'models/custBookingModel.php';


class allbooking{
	
	 
    function __construct()
    {
        
    }

	
	public function allbooking() {
	
		$allbooking = custBooking::all();
		if(!$allbooking)
		{
			echo"No booking Data Found";
		}
		else
		{
			// call your view class here
			require_once('views/bookDetailsView.php');
		}
     	
	}
	
	
	
}
