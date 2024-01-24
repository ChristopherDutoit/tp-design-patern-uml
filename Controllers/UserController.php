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

}