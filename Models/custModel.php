<?php
 
  class cust {
    // we define 2 attributes
    // they are public so that we can access them using $cust->surname (e.g.) directly
    	public $custID;
	public $name;
    	public $surname;
	public $email;
   
    	public function __construct($custID, $name, $surname, $email) {
      		$this->custID      = $custID;
      		$this->name  = $name;
		$this->surname  = $surname;
	  	$this->email= $email;
    	}

	 
	    	public static function find($email) {
      		$db = Db::getInstance();
		$qry = 'SELECT * FROM tbl_customer WHERE cust_email = "'.$email.'"';
		//echo $qry;
      		$db->prepare($qry);
		$req = $db->query($qry);

      		// the query was prepared, now we replace :username with our actual $username value
      		//$req->execute();
                  
      		$cust = $req->fetch();   // fetch; we know there is just one cust

      		return new cust($cust['cust_id'], $cust['cust_fName'], $cust['cust_lName'], $cust['cust_email']);
    	}
		
	public static function updateCust($custID, $surname, $name) {
      		$db = Db::getInstance();
      		// we make sure $custID is an integer
      		$custID = intval($custID) or die ('cust number must be integer');
	  	$sql = "UPDATE tbl_customer SET tbl_lName = '".$surname."', cust_fName = '".$name."' WHERE cust_id = $custID";
	  	$db->prepare($sql);
	      	$db->query($sql);
       }
	 
		
	}


?>
