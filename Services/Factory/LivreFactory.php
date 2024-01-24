<?php 

require_once './Services/Model/Book/Book.php';

class LivreFactory {
    public static function create($title, $author, $isbn) {
        return new Book($title, $author, $isbn);
    }
}