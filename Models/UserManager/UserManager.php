<?php

require_once("Services/Model/Model.php");

class UserManager extends Model {

    public function getUsers(){
        $req = $this->getBdd()->prepare("SELECT * FROM users");
    }

}