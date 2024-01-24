<?php

interface UserInterface {

    public function getUserById($userId);

    public function saveUser($fname, $lname, $email, $password) :void ;

    public function updateUserEmail($userId, $email) : void;

    public function deleteUser($userId) : void;
}