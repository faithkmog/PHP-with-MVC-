<?php

class Home {
    
    public  $allSearch;
                function __construct()
    {
        
    }
    public function homePage()
    {
    
     require_once 'view/home.php';
     
        
    }
    
    public function contact()
    {
        require_once 'view/publicPages/contact.php';
    }

    public function about()
    {
        require_once 'view/publicPages/aboutUs.php';
    }
	
	public function signfsdsup()
	{
		require_once 'views/newCustView.php';

	}
	
	public function insert()
	{
		require_once 'views/newServiceView.php';
               
	}
}