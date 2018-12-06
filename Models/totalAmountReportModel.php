<?php

  class Booking {
	  
        //public $bk_desc;
        //public $bk_price;
        public $totalAmnt;
        public $total;
        //public $count;
		//public $bk_servDate;




        public function __construct($total,$totalAmnt) {
      		
                //$this->bk_desc  = $bk_desc;
                //$this->bk_price  = $bk_price;
				$this->totalAmnt  = $totalAmnt;
				$this->totalAmnt  = $total;
				//$this->bk_servDate  = $bk_servDate;
                //$this->count = $count;
    	}

	
        
        public static function bookingReport($date1,$date2) {
      		$list = array();
      		$db = Db::getInstance();
      		$req = $db->query("SELECT COUNT(*) AS total, COUNT(*) * bk_price AS totalAmnt
							   FROM tbl_booking
							   WHERE bk_servDate BETWEEN '$date1' AND '$date2'");
									
      
      		foreach($req->fetchAll() as $book) {
        		$list[] = new Booking($book['total'],$book['totalAmnt']);
      		}

      	return $list;
    	}
		      
        
     
        
     
}