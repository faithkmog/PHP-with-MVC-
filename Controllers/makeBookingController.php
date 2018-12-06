<?php
 
include 'models/makeBookingModel.php';
include 'models/allBookingModel.php';


class addBooking{
	
	public $allVehicle;
   
    function __construct()
    {
        
    }

    public static function makeBooking()
    {

        if (isset($_POST['btnaddBooking'])) 
        {
		   
                    session_start();	
                    
   $numBedroom=$_POST['numBedroom'];
						$numToilets=$_POST['numToilet'];
						$numBathroom=$_POST['numBathroom'];
						$numKitchen=$_POST['numKitchen'];
						$numSeatRoom=$_POST['numLounch'];
                    
                         $bedroom=90.00*$numBedroom;
						 $kitchen=100.00*$numKitchen;
						 $toilet=40.00*$numToilets;
						 $bathroom=50.00*$numBathroom;
						 $seatRoom=100.00*$numSeatRoom;
			 
						$totCost=$bedroom +$kitchen+ $toilet+$bathroom+$seatRoom;		
						
                    $bkDesc =$numBedroom.' Bedrooms' .','.
                    $numToilets.' Toilets'.','.
                    $numBathroom.' Bathrooms'.','.
                    $numKitchen.' Kitchens'.','.
                    $numSeatRoom.' Lounces';
                    $servDate=$_POST['date'];
                    $town=$_POST['town'];
                    $suburb=$_POST['suburb'];
                    $street=$_POST['street'];
                    $Hnum=$_POST['Hnum']; 
                    $address =  $town.','. $suburb.','.$street.','.$Hnum;
                    $time=$_POST['time']; 
             $servDate= $_POST['bkdesc']; 
             date_default_timezone_get();
            $datePlaced =date("y-m-d");
             //$datePlaced="2018-11-16";
						
          $username = $_SESSION['username'];
			
          //echo "username $username ";
                booking::addBooking($bkDesc,$address,$datePlaced,$servDate,$totCost,$time,$username);
             $allbooking = viewBooking::all($username);
			require_once('views/bookDetailsView.php');
        }
		
		else
		{ 
                    require_once 'views/makeBookingView.php';
		}
    }
}