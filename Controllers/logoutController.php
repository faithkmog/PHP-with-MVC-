<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class logout
{
    public function logout()
    {
  
       
        session_unset();
        
        require_once('views/home.php');
    }
    
    
}