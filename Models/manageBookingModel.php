<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class manageBooking
{
    public function cancelBooking($bookid)        
    {
        
      	$db = Db::getInstance();
	$sql = "UPDATE tbl_booking SET bk_status = 'Cancelled' WHERE bk_num = '".$bookid."' ";
	$db->prepare($sql);
	 $db->query($sql);
    }
    
    public function attendBooking($bookid)
    {
        $db = Db::getInstance();
	$sql = "UPDATE tbl_booking SET bk_status = 'Attended' WHERE bk_num = '".$bookid."' ";
	$db->prepare($sql);
	 $db->query($sql);
         
         
    }
}

