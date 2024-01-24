<?php
require_once "User.php";

class Adherent extends User
{
    public function __construct()
    {
        parent::__construct();
        $this->roleId = 1; 
    }

    public function createUser($fname, $lname, $email, $password) : void
    {
        $mdp = password_hash($password, PASSWORD_DEFAULT);
        $userManager = new UserManager;
        $info = []; 
        $info['fisrt_name'] = $fname;
        $info['last_name'] = $lname;
        $info['tel'] = $email;
        $info['mail'] = $email;
        $info['role'] = $this->roleId;
        $info['password'] = $mdp;        
        $userManager->setUser($info);
    }
}
