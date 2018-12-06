<?php

class User
{
    public $username;
    public $role;


    public function __construct($username, $role)
     {
        $this->username = $username;
        $this->role = $role;
     }
     
     public static function find($username, $password)
     {
         $list = array();
         $db = Db::getInstance();
         $sql = "select cust_email, role_name from tbl_customer c, tbl_role r where r.role_id = c.cust_role and cust_email = '$username' and cust_password = '$password'";
         
         $sqlExe = $db->query($sql);
         
         $i = 0;
         foreach ($sqlExe->fetchAll() as $user)
         {
             $list[] = new User($user['cust_email'], $user['role_name']);
             $i++;
         }
         if($i>0)
         {
             return $list[0];
         }
         
         //bambi admin
            else 
	{
				$list = array();
         $db = Db::getInstance();
         $sql = "select admin_username, role_name from tbl_admin a, tbl_role r where r.role_id = a.admin_role and admin_username = '$username' and admin_password = '$password'";
         
         $sqlExe = $db->query($sql);
         
         $i = 0;
         foreach ($sqlExe->fetchAll() as $user)
         {
             $list[] = new User($user['admin_username'], $user['role_name']);
             $i++;
         }
         if($i>0)
         {
             return $list[0];
         }
         else
         { 
             $list = array();
         $db = Db::getInstance();
         $sql = "select staff_email, role_name from tbl_staff s, tbl_role r where r.role_id = s.staff_role and staff_email = '$username' and staff_password = '$password'";
         
         $sqlExe = $db->query($sql);
         
         $i = 0;
         foreach ($sqlExe->fetchAll() as $user)
         {
             $list[] = new User($user['staff_email'], $user['role_name']);
             $i++;
         }
         if($i>0)
         {
             return $list[0];
         }
         else
         { 
             false;
         }
         }
         
     }
			

        }	
}	
			
