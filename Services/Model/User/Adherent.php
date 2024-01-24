<?php
require_once "User.php";

class Adherent extends User
{
    public function __construct()
    {
        parent::__construct();
        $this->roleId = 1; 
    }

    public function saveUser($fname, $lname, $email, $password) : void
    {
        $userManager = new UserManager;
        $info = []; 
        $info['first_name'] = $fname;
        $info['last_name'] = $lname;
        $info['mail'] = $email;
        $info['password'] = $password;  
        $info['role'] = $this->roleId;
        var_dump($info);      
        $userManager->setUser($info);
    }

  
}
