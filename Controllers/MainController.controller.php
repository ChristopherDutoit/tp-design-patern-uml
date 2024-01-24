<?php
require_once 'Services/Render.php';
require_once 'Models/MainManager/MainManager.php';
require_once 'Services/Toolbox.php';
class MainController extends Render{

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

    public function page1(){
        $datas = $this->mainManager->getDatas();
        Toolbox::addAlert('test', Toolbox::COULEUR_VERTE);
        $data_page = [
            "page_description" => "Description de la page 1",
            "page_title" => "Page 1",
            "page_css" => ["pages.css"],
            "datas" => $datas,
            "view" => "Views/Page1.view.php",
            "template" => "Views/Layouts/base.php"
        ];
        $this->render($data_page);
    }

    public function page2(){
        $data_page = [
            "page_description" => "Description de la page 2",
            "page_title" => "Page 2",
            "view" => "Views/Page2.view.php",
            "template" => "Views/Layouts/base.php"
        ];
        $this->render($data_page);
    }

    public function page3(){
        $data_page = [
            "page_description" => "Description de la page 3",
            "page_title" => "Page 3",
            "view" => "Views/Page3.view.php",
            "template" => "Views/Layouts/base.php",
            "page_javascript" => "page3.js"
        ];
        $this->render($data_page);
    }

    public function pageErreur($msg){
        $data_page = [
            "page_description" => "Description de la page erreur",
            "page_title" => "Page erreur",
            "msg" => $msg,
            "view" => "Views/404.error.view.php",
            "template" => "Views/Layouts/base.php"
        ];
        $this->render($data_page);
    }
}