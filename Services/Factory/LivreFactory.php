<?php 

class LivreFactory implements FactoryInterface {
    public static function create($titre, $auteur) {
        return new Livre($titre, $auteur);
    }
}