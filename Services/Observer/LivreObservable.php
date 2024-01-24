<?php

class LivreObservable {
    private $observers = [];
    private $title;
    private $author;


    public function addObserver(ObserverInterface $observer) {
        $this->observers[] = $observer;
    }

    public function notifyObservers($action) {
        foreach ($this->observers as $observer) {
            $observer->update($this, $action);
        }
    }

    public function emprunter() {
        $this->notifyObservers('emprunt');
    }

    public function retourner() {
        $this->notifyObservers('retour');
    }

    public function getTitle() {
        return $this->title;
    }

    public function getAuthor() {
        return $this->author;
    }
}
