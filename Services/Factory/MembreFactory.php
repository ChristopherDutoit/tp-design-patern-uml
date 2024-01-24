<?php 

class MembreFactory implements FactoryInterface {
    public static function create($nom, $prenom) {
        return new Membre($nom, $prenom);
    }
}