<?php
class loginController
{
    public function login()
    {
        $username = filter_input(INPUT_GET, "username")? filter_input(INPUT_GET, "username"):'';
        $password = filter_input(INPUT_GET, "password")? filter_input(INPUT_GET, "password"):'';
        
        $user = User::find($username,$password);
        if (!$user)
        {
            //echo 'please provide the correct user details';
            include 'views/loginView.php';
        }
        else
        {
            $user = User::find($username,$password);
			
            //session_cache_limiter(FALSE);
            session_start();
            $_SESSION['username'] = $user->username;
			
		 
                
            if($user->role == 'cust')
            {
               require_once 'Views/custHome.php';
			  
			
            }
            
            else if($user->role == 'admi')
            {
                require_once 'Views/adminHome.php';
            }
            else if($user->role == 'staf')
            { 
                require_once 'Views/staffHome.php';
            }
            
          
        }
    }
    }
    ?>