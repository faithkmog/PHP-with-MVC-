<?php

  class updateService {
       
    	public $name;
		public $desc;
		public $cost;
		public $serv_id;
               public  $categ;
               
   
    	public function __construct($name,$desc,$cost,$serv_id,$categ)
		{
      		$this->name  = $name;
      		$this->desc  = $desc;
      		$this->cost  = $cost;
            $this->categ= $categ;      
            $this->serv_id = $serv_id;
			
    	}
	
	public static function updateService($name,$desc,$cost,$serv_id,$categ) {
      	$db = Db::getInstance();
      		
	  	$sql = "UPDATE tbl_service SET serv_name = '".$name."', serv_desc = '".$desc."',serv_cost = '".$cost."',serv_id = '".$serv_id."',serv_categ = '".$categ."' WHERE serv_id = ".$serv_id;
	  	$db->prepare($sql);
	      	$db->query($sql);
       }


	   public static function getServ($id)
	   {
		  	$list = array();
      		$db = Db::getInstance();
      		$req = $db->query("SELECT * FROM tbl_service where serv_id = '$id'");
      
	  
      		foreach($req->fetchAll() as $serv) {
        		$list[] = new updateService($serv['serv_name'], $serv['serv_desc'], $serv['serv_cost'],  $serv['serv_id'],$serv['serv_categ']);
      		}

      	return $list;
	   }
}