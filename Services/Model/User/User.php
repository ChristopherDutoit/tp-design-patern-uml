<?php

require_once('UserInterface.php');
require_once('Models/UserManager/UserManager.php');

abstract class User implements UserInterface {

    public string $fname;
    public string $lname;
    public string $email;
    public int $roleId;
    private string $passWord;

    function __construct()
    {

    }

    public function getUserById($userId)
    {

    }



    public function updateUserEmail($userId, $email) : void
    {

    }

    public function deleteUser($userId) : void
    {

    }
}