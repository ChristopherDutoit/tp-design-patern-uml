<?php

class ProfesseurDecorator implements MembreInterface {
    protected $membre;

    public function __construct(MembreInterface $membre) {
        $this->membre = $membre;
    }

    public function emprunter() {
        $this->membre->emprunter();
        echo "Pas de limite d'emprunt pour les professeurs.\n";
    }

    public function retourner() {
        $this->membre->retourner();
    }
}
