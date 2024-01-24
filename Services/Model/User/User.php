<?php

require_once('UserInterface.php');
require_once('Models/UserManager/UserManager.php');

abstract class User implements UserInterface {

    public string $fname;
    public string $lname;
    public string $tel;
    public string $email;
    public int $roleId;
    private string $password;

    function __construct()
    {

    }

    public function getUserByEmail($email)
    {
        $userManager = new UserManager;
        $datas = $userManager->getUser($email);
        return $datas;
        
    }



    public function updateUserEmail($userId, $email) : void
    {

    }

    public function deleteUser($userId) : void
    {

    }

    


}