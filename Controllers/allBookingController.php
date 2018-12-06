<?php
 
include 'models/allBookingModel.php';
include 'models/manageBookingModel.php';


class allbooking{
	
	 
    function __construct()
    {
        
    }

	
	public function allbooking() {
	
     

                 if(isset($_POST['btnAttended']))
                    {
                        echo"atending ";
                        if(isset($_POST['bookid']))
                        {
                            $pid = $_POST['bookid'];
                            
                            manageBooking::attendBooking($pid);
                             $username = $_SESSION['username'];
                             $allbooking = viewBooking::all($username);
			require_once('views/bookDetailsView.php');
                            //echo "book id $pid";
                        }
                        else
                        {
                            echo"NO book Id";
                        }
                    }
                    
                    else if (isset($_POST['btnCancel']))
                    {
                        if(isset($_POST['bookid']))
                        {
                            $pid = $_POST['bookid'];
                            
                            manageBooking::cancelBooking($pid);
                             $username = $_SESSION['username'];
                             $allbooking = viewBooking::all($username);
			require_once('views/bookDetailsView.php');
                            //echo "book id $pid";
                        }
                        else
                        {
                            echo"NO book Id";
                        }
                        
                    }
		else
		{
                $username = $_SESSION['username'];
		$allbooking = viewBooking::all($username);
                
                if(!$allbooking)
		{
			echo"No booking Data Found";
		}else
                {
			// call your view class here
			require_once('views/bookDetailsView.php');
                }
                
                }
                

     	
	}
	
	
	
}