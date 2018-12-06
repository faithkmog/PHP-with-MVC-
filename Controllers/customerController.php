<?php
include 'models/customerModel.php';



class customerController {
    //public $allVehicle;
   // public $allFeatures;
    function __construct()
    {
        
    }

     
    
    public static function addCust()
    {
       // $allVehicle = Admin::getSpecificCar();
        require_once 'views/newCustView.php';
        if (isset($_GET['register'])) 
        {
            $Fname = $_GET['name'];
            $Lname = $_GET['surname'];
             
            
           
                Customer::addCust($Fname, $Lname);
                
            
            
        }
        
        
    }
    
     
        

}

