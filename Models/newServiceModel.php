<?php

class Service {

    public $regFea;
    public $carsFea;
            
    function __construct($regFea, $carsFea) 
    {
        $this->regFea = $regFea;
        $this->carsFea = $carsFea;
    }
    
     
 
    
    
    public static function addService($name,$desc,$cost,$image,$username)
    {
        $sql = "CALL new_service ('$name','$desc','$cost','$image','$username')" ;
		
		
        
        $db = Db::getInstance();
            $execute = $db->query($sql);
       
        
    }
    
     
   

}
?>