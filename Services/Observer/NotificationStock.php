<?php

class NotificationStockObserver implements ObserverInterface {
    public function update($livre, $action) {
        echo "Notification Stock : Livre {$action} - Titre : {$livre->getTitle()}, Auteur : {$livre->getAuthor()}\n";
    }
}

class NotificationAdminObserver implements ObserverInterface {
    public function update($livre, $action) {
        echo "Notification Admin : Livre {$action} - Titre : {$livre->getTitle()}, Auteur : {$livre->getAuthor()}\n";
    }
}