<?php

  class ViewService {
       
    	public $name;
		public $desc;
		public $cost;
		public $categ;
		//public $service_id;
   
    	public function __construct($name, $desc,$cost,$categ) {
      		$this->name  = $name;
      		$this->desc  = $desc;
      		$this->cost  = $cost;
      		$this->categ  = $categ;
			//$this->service_id = $service_id;
			
    	}

	public static function all() {
      		$list = array();
      		$db = Db::getInstance();
      		$req = $db->query('SELECT * FROM tbl_service');
      
	  
      		foreach($req->fetchAll() as $service) {
        		$list[] = new ViewService($service['serv_name'], $service['serv_desc'], $service['serv_cost'], $service['serv_categ']);
      		}

      	return $list;
    	}
	
	//public static function updateStaff($name, $desc,$cost) {
      		//$db = Db::getInstance();
      		
	  	//$sql = "UPDATE tbl_service SET service_name = '".$name."', service_desc = '".$desc."',service_cost = '".$cost."' WHERE service_id = $service_id";
	  	//$db->prepare($sql);
	      	//$db->query($sql);
       //}


}