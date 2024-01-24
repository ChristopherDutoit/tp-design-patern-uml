<?php 

require_once("Services/Model/Model.php");

class BookManager extends Model {

    public function getBook($isbn){
        $req = $this->getBdd()->prepare("SELECT * FROM books WHERE isbn = :isbn");
        $req->bindParam(':isbn', $isbn, PDO::PARAM_STR);
        $req->execute();
        $datas = $req->fetchAll(PDO::FETCH_ASSOC);
        $req->closeCursor();
        return $datas;
    }

    public function setBook(array $info){
        $req = $this->getBdd()->prepare("INSERT INTO books (title, author, isbn,) VALUES (:title, :author, :isbn, )");
    
        $req->bindParam(':title', $info['title'], PDO::PARAM_STR);
        $req->bindParam(':author', $info['author'], PDO::PARAM_STR);
        $req->bindParam(':isbn', $info['isbn'], PDO::PARAM_STR);
    
        $req->execute();
    }
}
