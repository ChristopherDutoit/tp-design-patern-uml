<?php

require_once("Services/Model/Model.php");

class UserManager extends Model {

    public function getUser($mail){
        $req = $this->getBdd()->prepare("SELECT * FROM users WHERE mail = :mail");
        $req->bindParam(':mail', $mail, PDO::PARAM_STR);
        $req->execute();
        $datas = $req->fetchAll(PDO::FETCH_ASSOC);
        $req->closeCursor();
        return $datas;
    }

    public function setUser(array $info){
        $req = $this->getBdd()->prepare("INSERT INTO users (first_name, last_name, tel, mail, role) VALUES (:first_name, :last_name, :tel, :mail, :role)");
    
        $req->bindParam(':first_name', $info['first_name'], PDO::PARAM_STR);
        $req->bindParam(':last_name', $info['last_name'], PDO::PARAM_STR);
        $req->bindParam(':tel', $info['tel'], PDO::PARAM_STR);
        $req->bindParam(':mail', $info['mail'], PDO::PARAM_STR);
        $req->bindParam(':role', $info['role'], PDO::PARAM_INT);
    
        $req->execute();
    }
    

}