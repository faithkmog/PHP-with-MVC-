<?php

  class ViewStaff {
       
    	public $lName;
		public $fName;
		public $email;
		public $hireDate;
		//public $staff_id;
   
    	public function __construct($lName, $fName,$email,$hireDate) {
      		$this->lName  = $lName;
      		$this->fName  = $fName;
      		$this->email  = $email;
      		$this->hireDate  = $hireDate;
			//$this->staff_id = $staff_id;
			
    	}

	public static function all() {
      		$list = array();
      		$db = Db::getInstance();
      		$req = $db->query('SELECT * FROM tbl_staff');
      
	  
      		foreach($req->fetchAll() as $staff) {
        		$list[] = new ViewStaff($staff['staff_lName'], $staff['staff_fName'], $staff['staff_email'], $staff['staff_hireDate']);
      		}

      	return $list;
    	}
	
	//public static function updateStaff($lName, $fName,$email) {
      		//$db = Db::getInstance();
      		
	  	//$sql = "UPDATE tbl_staff SET staff_lName = '".$lName."', staff_fName = '".$fName."',staff_email = '".$email."' WHERE staff_id = $staff_id";
	  	//$db->prepare($sql);
	      	//$db->query($sql);
       //}


}