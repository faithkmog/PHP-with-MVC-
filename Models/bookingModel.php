<?php

class Service {

    public $regFea;
    public $carsFea;
            
    function __construct($regFea, $carsFea) 
    {
        $this->regFea = $regFea;
        $this->carsFea = $carsFea;
    }
    
     
 
    
    
    public static function addBooking($name,$desc,$cost,$categ)
    {
        $sql = "INSERT INTO tbl_service (serv_name,serv_desc,serv_cost,serv_categ) "
        . "VALUES ('$name','$desc','$cost','$categ')" ;
		
		
        
        $db = Db::getInstance();
          
            $execute = $db->query($sql);
       
        
    }
    
     
   

}
?>