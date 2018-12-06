<?php

class Home {
    
    public  $allSearch;
                function __construct()
    {
        
    }
    public function homePage()
    {
    
     require_once 'views/home.php';
         
    }
    
    public function contact()
    {
        require_once 'views/whyUsView.php';
    }

    public function about()
    {
        require_once 'views/aboutView.php';
    }
	
	public function adminHome()
    {
        require_once 'views/adminHome.php';
    }
	
	public function custHome()
    {
        require_once 'views/custHome.php';
    }
    	public function booking()
    {
        require_once 'views/custHome.php';
    }
 
}


