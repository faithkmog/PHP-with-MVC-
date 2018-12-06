<?php
 
include 'models/newServiceModel.php';


class addBooking{
	
	public $allVehicle;
        
   
    function __construct()
    {
        
    }
 
    public static function insert()
    {
       
        $username = $_SESSION['username'];
      
		 
        if (isset($_POST['btnregister'])) 
        {
		  //  echo"In button register ";
			 
						 //costs
		 $bedroom=90.00*$numBedroom;
		 $kitchen=100.00*$numKitchen;
		 $toilet=40.00*$numToilets;
		 $bathroom=50.00*$numBathroom;
		 $seatRoom=100.00*$numSeatRoom;
                 
		 $totCost=$bedroom +$kitchen+ $toilet+$bathroom+$seatRoom;
						
		$numBedroom=$_POST['numBedroom'];
		$numToilets=$_POST['numToilets'];
		$numBathroom=$_POST['numBathroom'];
		$numKitchen=$_POST['numKitchen'];
		$numSeatRoom=$_POST['numSeatRoom'];
						
			 
                $bkDate = $_POST['bkDate'];
                $bkDesc = $_POST['bkDesc'];
		$bkCost = $_POST['bkCost'];
		$bkDatePalced  = $_POST['bkDatePalced'];
		$avaiLablePhone=$_POST['avaiLablePhone'];
						
						//address
						$town=$_POST['town'];
						$suburb=$_POST['suburb'];
						$street=$_POST['street'];
						$Hnum=$_POST['Hnum'];
						
                Service::addBooking($bkDate,$bkDesc,$bkCost,$servCat);
            
                $allbooking = viewBooking::all($username);
			require_once('views/bookDetailsView.php');
        }
		
		else
		{ 
                    require_once 'views/newServiceView.php';
		}
    }
}