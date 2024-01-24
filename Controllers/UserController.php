<?php
require_once 'Services/Render.php';

class UserController extends Render {

    private $mainManager;

    public function __construct(){
        parent::__construct(Render::class);
        $this->mainManager = new MainManager;
    }
    public function accueil(){
        $data_page = [
            "page_description" => "Description de la page d'accueil",
            "page_title" => "Titre de la page d'accueil",
            "page_css" => ["accueil.css"],
            "view" => "Views/Accueil.view.php",
            "template" => "Views/Layouts/base.php"
        ];
        $this->render($data_page);
    }
}