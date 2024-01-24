<?php
require_once 'Services/Render.php';
require_once 'Services/Model/BookManager.php';
require_once 'Services/Model/LivreObservable.php';
require_once 'Services/Model/LivreFactory.php';
require_once 'Services/Toolbox.php';

class BookController extends Render {
    private $bookManager;
    private $livreObservable;

    public function __construct(){
        parent::__construct(Render::class);
        $this->bookManager = new BookManager();
        $this->livreObservable = new LivreObservable();
    }

    public function addBook($title, $author, $isbn){
        try {
            // LivreFactory pour créer un nouvel objet Livre
            $livre = LivreFactory::create($title, $author, $isbn);
    
            // Créer un tableau à partir de l'objet Livre
            $bookInfo = [
                'title' => $livre->getTitle(),
                'author' => $livre->getAuthor(),
                'isbn' => $livre->getIsbn()
            ];
    
            // Utiliser le tableau pour ajouter le livre via BookManager
            $this->bookManager->setBook($bookInfo);
    
            Toolbox::addAlert('Livre ajouté avec succès', Toolbox::COULEUR_VERTE);
    
            // Redirection ou chargement d'une vue après l'ajout
            $data_page = [
                "page_description" => "Livre ajouté avec succès",
                "page_title" => "Ajouter un livre",
                // "view" => "Views/bookAdded.view.php", // Créer cette vue
                "template" => "Views/Layouts/base.php"
            ];
            $this->render($data_page);
        } catch (Exception $e) {
            Toolbox::addAlert($e->getMessage(), Toolbox::COULEUR_ROUGE);
    
            // Gestion des erreurs
            $data_page = [
                "page_description" => "Erreur lors de l'ajout du livre",
                "page_title" => "Erreur",
                "view" => "Views/error.view.php",
                "template" => "Views/Layouts/base.php"
            ];
            $this->render($data_page);
        }
    }    

    public function emprunterLivre($isbn){
        try {
            // Logique pour l'emprunt d'un livre
            $this->livreObservable->emprunter();
            Toolbox::addAlert('Livre emprunté avec succès', Toolbox::COULEUR_VERTE);
            // Redirection ou chargement d'une vue
        } catch (Exception $e) {
            Toolbox::addAlert($e->getMessage(), Toolbox::COULEUR_ROUGE);
            // Gestion des erreurs
        }
    }

    public function retournerLivre($isbn){
        try {
            // Logique pour le retour d'un livre
            $this->livreObservable->retourner();
            Toolbox::addAlert('Livre retourné avec succès', Toolbox::COULEUR_VERTE);
            // Redirection ou chargement d'une vue
        } catch (Exception $e) {
            Toolbox::addAlert($e->getMessage(), Toolbox::COULEUR_ROUGE);
            // Gestion des erreurs
        }
    }
}
?>
