<?php

  class UpdateStaff {
       
    	public $lName;
		public $fName;
		public $email;
		public $staff_id;
   
    	public function __construct($lName, $fName,$email,$staff_id)
		{
      		$this->lName  = $lName;
      		$this->fName  = $fName;
      		$this->email  = $email;
                $this->staff_id = $staff_id;
			
    	}
	
	public static function updateStaff($lName,$fName,$email,$staff_id) {
      	$db = Db::getInstance();
      		
	  	$sql = "UPDATE tbl_staff SET staff_lName = '".$lName."', staff_fName = '".$fName."',staff_email = '".$email."' WHERE staff_id = ".$staff_id;
	  	$db->prepare($sql);
	      	$db->query($sql);
       }


	   public static function getStaff($username)
	   {
		  	$list = array();
      		$db = Db::getInstance();
      		$req = $db->query("SELECT * FROM tbl_staff where staff_email = '$username' LIMIT 1");
      
	  
      		foreach($req->fetchAll() as $staff) {
        		$list[] = new UpdateStaff($staff['staff_lName'], $staff['staff_fName'], $staff['staff_email'], $staff['staff_id']);
      		}

      	return $list;
	   }
}