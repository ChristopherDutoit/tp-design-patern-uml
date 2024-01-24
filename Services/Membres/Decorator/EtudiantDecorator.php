<?php 

class EtudiantDecorator implements MembreInterface {
    protected $membre;

    public function __construct(MembreInterface $membre) {
        $this->membre = $membre;
    }

    public function emprunter() {
        $this->membre->emprunter();
        echo "Limite d'emprunt pour les étudiants.\n";
    }

    public function retourner() {
        $this->membre->retourner();
    }
}


