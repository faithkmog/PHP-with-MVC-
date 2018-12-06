<?php

  class viewBooking {
       
   
		public $desc;
		public $cost;
		public $servDate;
		public $datePlaced;
               public $time;
               public $address;
	       public $bookid;
   
    	public function __construct($desc,$cost,$servDate,$datePlaced,$time,$address,$bookid) {
      	
                        $this->desc  = $desc;
                        $this->cost  = $cost;
                        $this->servDate  = $servDate;
			$this->datePlaced  = $datePlaced;
                        $this->time  = $time;
                        $this->address  = $address;
			$this->bookid = $bookid;
			
    	}

	public static function all($uname) {
      		$list = array();
      		$db = Db::getInstance();
      		$req = $db->query("SELECT * FROM tbl_booking WHERE bk_status NOT LIKE 'Cancelled' AND cust_ID = (SELECT cust_id FROM tbl_customer WHERE cust_email= '$uname' LIMIT 1)ORDER BY 1 ASC ");
      
	  
      		foreach($req->fetchAll() as $booking) {
        		$list[] = new viewBooking($booking['bk_desc'], $booking['bk_price'], $booking['bk_servDate'], $booking['bk_datePlaced'],$booking['bk_startTime'],$booking['bk_address'],$booking['bk_num']);
      		}

      	return $list;
	}


}