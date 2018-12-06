<?php

class Customer {

    public $regFea;
    public $carsFea;
            
    function __construct($regFea, $carsFea) 
    {
        $this->regFea = $regFea;
        $this->carsFea = $carsFea;
    }
    
     
 
    
    
    public static function addCust($name,$surname,$idNum,$gen,$city,$email,$pass)
    {
        $sql = "INSERT INTO tbl_customer (cust_fName, cust_lName,cust_idNum,cust_gender,cust_city,cust_email,cust_password) "
        . "VALUES ('$name','$surname','$idNum','$gen','$city','$email','$pass')" ;
		
		
        
        $db = Db::getInstance();
          
            $execute = $db->query($sql);
       
        
    }
    
     
   

}

