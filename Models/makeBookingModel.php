<?php

class booking {

    public $regFea;
    public $carsFea;
            
    function __construct($regFea, $carsFea) 
    {
        $this->regFea = $regFea;
        $this->carsFea = $carsFea;
    }
    
     
 
    
    
    public static function addBooking($desc,$address,$datePlaced,$servDate,$totCost,$time,$uname)
    {
        $sql = "CALL make_booking ('$desc','$address','$datePlaced','$servDate',$totCost,'$time','$uname')" ;
		
		
        
        $db = Db::getInstance();
        $execute = $db->query($sql);
       
        
    }
    
     
   

}

