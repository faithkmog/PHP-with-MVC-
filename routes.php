<?php
//session_start();
function call($controller, $action)
{
    require_once 'controllers/'.$controller.'Controller.php';
    
    session_start(); //we create more of a role sesion for every user that logs in
    
    switch ($controller)
    {
        case 'login':
            
                $controller = new loginController();
                require_once 'models/loginModel.php';
                break;
				
        case 'homePage': 
            $controller = new Home();
            break;
			
        case 'admin':
            
            break;
			
			 
		case 'updateCustomer': 
            $controller = new updateDetails();
			
			require_once 'models/updateProfileModel.php';
            break;	 
					
        case 'signUp': 
            $controller = new addNew();
            
			
			require_once 'models/customerModel.php';
            break;
        
        
		 case 'makeBooking': 
            $controller = new addBooking();
                     	require_once 'models/makeBookingModel.php';
                     break;
                 
                 
			case 'newService': 
            $controller = new addService();
			
			require_once 'models/newServiceModel.php';
            break;
			
        case 'customer':
            $controller = new custController();
            require_once 'model/custModel.php';
          
             case 'cust':
            $controller = new custController();
            require_once 'models/custModel.php';
		  
		  
		     case 'updateService':
            $controller = new updateServDetails();
            require_once 'models/updateServiceModel.php';
        
            break;
            case 'allService': 
            $controller = new allService();
        
			require_once 'models/allServiceModel.php';
                      break; 
                  
                  break;
              
            case 'allBookingZ': 
            $controller = new allBookingZ();
        
			require_once 'models/allBookingZModel.php';
                      break; 
			 
			case 'allBooking': 
            $controller = new allBooking();
        
			require_once 'models/allBookingModel.php';
                      break;
                  
                  case 'custBooking': 
            $controller = new custBooking();
        
			require_once 'models/custBookingModel.php';
                      break; 
                  
           case 'addStaff': 
            $controller = new addNew();
			
			require_once 'models/staffModel.php';
            break;
			
		case 'updateStaff': 
            $controller = new updateProfile();
			
			require_once 'models/updateStaffModel.php';
			break;
            
                        
         case 'showAllStaff': 
            $controller = new addNew();
			
			require_once 'models/staffModel.php';
            break;
			
                     
            case 'allDetails': 
            $controller = new allDetails();
        
			require_once 'models/custDetailsModel.php';
            break;
        
                  
            case 'logout': 
            $controller = new logout();
        
			require_once 'index.php';
            break;
        
        case 'ViewBookinDetails': 
            $controller = new ViewBookinDetails();
        
			require_once 'models/allBookinDetailsModel.php';
            break;
        case 'makeBooking': 
            $controller = new allDetails();
        
			require_once 'models/custDetailsModel.php';
            break;
		
		case 'showAllCustomer': 
            $controller = new allDetails();
        
			require_once 'models/showAllCustomerModel.php';
            break;
		
			case 'bookingReport': 
            $controller = new addBooking();
        
			require_once 'models/bookingReportModel.php';
            break;
		
		case 'amountReport': 
            $controller = new addBooking();
        
			require_once 'models/totalAmountReportModel.php';
            break;
         
        
    }
    $controller-> {$action}();
    
}



$controllers = array('login' => array('login'),'allBooking'=>array('allBooking'),'allBookingZ'=>array('allBookingZ'),'ViewBookinDetails'=>array('ViewBookinDetails'),'allDetails'=>array('allDetails'),'allService'=>array('allService'),'updateCustomer'=>array('updateCustomer'), 'homePage'=>array('homePage', 'contact', 'about','adminHome','custHome','booking'), 'admin'=>array('addStaff', 'viewStaff', 'home'),'updateCustomer'=>array('updateCustomer'), 'updateService'=>array('view', 'updateService'),'makeBooking'=>array('makeBooking'),'signUp'=>array('signUp'),'cust'=>array('myProfile'),

'newService'=>array('insert','book'),'makeBooking'=>array('makeBooking'),'logout'=>array('logout'),'custBooking'=>array('custBooking'),'updateStaff'=>array('updateStaff'),'addStaff'=>array('addStaff'),'showAllCustomer'=>array('showAllCustomer'),'showAllStaff'=>array('showAllStaff'),'bookingReport'=>array('bookingReport'), 'amountReport'=>array('amountReport'));
          if (array_key_exists($controller, $controllers)) 
		  {
					if (in_array($action, $controllers[$controller])) 
					{
					call($controller, $action);
					}
          }
?>