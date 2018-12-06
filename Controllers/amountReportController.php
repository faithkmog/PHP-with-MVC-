<?php
 
include 'models/totalAmountReportModel.php';


class addBooking{
	
	public $allVehicle;
   
    function __construct()
    {
        
    }
	
	  public function bookingReport() {
		
             if (isset($_GET['date1']))  
			 {  
                $date1 = $_GET['date1'];
                $date2 = $_GET['date2'];
				
				$booking = Booking::bookingReport($date1,$date2);
				require_once 'views/bookingReportView.php';
            } 
			
			else {
                 $prev = date_create('first day of October 2018');
 
                $date1 = $prev->format('Y-m-d');
                $future = date_create('last day of November 2018');
                $date2 = $future->format('Y-m-d');
				
				$booking = Booking::bookingReport($date1,$date2);
				require_once 'views/bookingReportView.php';
            }    
                  
            
           
            }
	
	  public function amountReport() {
		
          if (isset($_GET['date1']))  {  
                $date1 = $_GET['date1'];
                $date2 = $_GET['date2'];
                
				$booking = Booking::bookingReport($date1,$date2);
				
                $totalList = Booking::bookingReport($date1,$date2);
                $total = $totalList[0]->totalAmnt + $totalList[1]->totalAmnt + $totalList[2]->totalAmnt + $totalList[3]->totalAmnt;		
     	    
			//$booking = Booking::bookingReport($date1,$date2);
			
            require_once('views/totalAmountReportView.php');
            } 
			
			else {
                  $prev = date_create('first day of October 2018');
 
                $date1 = $prev->format('Y-m-d');
                $future = date_create('last day of November 2018');
                $date2 = $future->format('Y-m-d');
                //$booking = Booking::bookingReport($date1,$date2);
				
                $totalList = Booking::bookingReport($date1,$date2);
                $total = $totalList[0]->totalAmnt + $totalList[1]->totalAmnt + $totalList[2]->totalAmnt + $totalList[3]->totalAmnt;
                   	    
				$booking = Booking::bookingReport($date1,$date2);
            require_once('views/totalAmountReportView.php');
            }   
                  
            
           
    }
			
	
}
