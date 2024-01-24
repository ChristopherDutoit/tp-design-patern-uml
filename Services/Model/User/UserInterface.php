<?php

interface UserInterface {

    public function getUserByEmail($email);

    public function saveUser($fname, $lname, $email, $password) :void ;

    public function updateUserEmail($userId, $email) : void;

    public function deleteUser($userId) : void;

   
}