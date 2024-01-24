<?php
require_once 'Services/Render.php';
require_once 'Services/Model/User/Adherent.php';
require_once 'Services/Toolbox.php';
class UserController extends Render {
    private $adherent;

    public function __construct(){
        parent::__construct(Render::class);
        $this->adherent = new Adherent;
    }

    public function createUser($fname, $lname, $email, $password){

        try
        {
            $mdp = password_hash($password, PASSWORD_DEFAULT);
            $this->adherent->saveUser($fname, $lname, $email, $mdp);
            echo('bonjour');
            Toolbox::addAlert('Compte créé avec succès', Toolbox::COULEUR_VERTE);
            header("Location: " . URL . "login");
        }
        catch (Exception $e)
        {
            
            Toolbox::addAlert($e->getMessage(), Toolbox::COULEUR_VERTE);
            $data_page = [
                "page_description" => "Description de la page erreur",
                "page_title" => "Se connecter",
                "view" => "Views/login.view.php",
                "template" => "Views/Layouts/base.php"
            ];

        }
    }

    public function login($email, $password)
    {
        $datas = $this->adherent->getUserByEmail($email);
        if (password_verify($password, $datas[0]['password'])) {
            $_SESSION['fname'] = $datas[0]['first_name'];
            $_SESSION['lname'] = $datas[0]['last_name'];
            $_SESSION['email'] = $datas[0]['mail'];
            $_SESSION['role'] = $datas[0]['role'];
            Toolbox::addAlert("Vous êtes connecté", Toolbox::COULEUR_VERTE);         
            header("Location: " . URL . "accueil");
        } else {
            echo "Le mot de passe est incorrect!";
        }
    }

}