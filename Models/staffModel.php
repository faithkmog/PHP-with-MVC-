<?php

class Staff {

    public $regFea;
    public $carsFea;
            
    function __construct($regFea, $carsFea) 
    {
        $this->regFea = $regFea;
        $this->carsFea = $carsFea;
    }
    
        
    
    public static function addStaff($lName,$fName,$gender,$idNo,$email,$password,$hireDate)
    {
        $sql = "INSERT INTO tbl_staff (staff_lName,staff_fName,staff_gender,staff_idNo,staff_email,staff_password,staff_hireDate) "
        . "VALUES ('$lName','$fName','$gender','$idNo','$email','$password','$hireDate')" ;
		
		
        
        $db = Db::getInstance();
          
            $execute = $db->query($sql);
       
        
    }
    
	   
   

}