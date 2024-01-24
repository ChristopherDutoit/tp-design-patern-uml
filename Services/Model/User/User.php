<?php

require_once('Services/Model/User/UserInterface.php');

abstract class User implements UserInterface {

    public string $fname;
    public string $lname;
    public string $email;
    public int $roleId;

    private string $passWord;

    function __construct()
    {

    }

    public function getUserById($userId);
    {

    }

    public function createUser($fname, $lname, $email, $password)
    {

    }

    public function updateUserEmail($userId, $email)
    {

    }

    public function deleteUser($userId)
    {

    }
}