<?php

  class custBooking {
       
   
		public $desc;
		public $cost;
		public $servDate;
		public $datePlaced;
               public $time;
               public $address;
		//public $booking_id;
   
    	public function __construct($desc,$cost,$servDate,$datePlaced,$time,$address) {
      	
      		$this->desc  = $desc;
      		$this->cost  = $cost;
      		$this->servDate  = $servDate;
			$this->datePlaced  = $datePlaced;
                        $this->time  = $time;
                        $this->address  = $address;
			//$this->booking_id = $booking_id;
			
    	}

	public static function all() {
      		$list = array();
      		$db = Db::getInstance();
      		$req = $db->query('SELECT * FROM tbl_booking');
       
	  
      		foreach($req->fetchAll() as $booking) {
        		$list[] = new custBooking($booking['bk_desc'], $booking['bk_price'], $booking['bk_servDate'], $booking['bk_datePlaced'],$booking['bk_startTime'],$booking['bk_address']);
      		}

      	return $list;
	}


}