<?php
require_once "User.php";

class Adherent extends User
{
    public function __construct()
    {
        parent::__construct();
        $this->roleId = 1; 
    }

    public function createUser($fname, $lname, $email, $mdp) : void
    {
        $mdp = password_hash($mdp, PASSWORD_DEFAULT);
        $userManager = new UserManager;
        $info = []; 
        $info['first_name'] = $fname;
        $info['last_name'] = $lname;
        $info['tel'] = $email;
        $info['mail'] = $email;
        $info['role'] = $this->roleId;
        $info['password'] = $mdp;  
        var_dump($info);      
        $userManager->setUser($info);
    }
}
