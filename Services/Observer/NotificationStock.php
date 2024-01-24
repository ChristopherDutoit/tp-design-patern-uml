<?php

class NotificationStock implements ObserverInterface {
    public function update($livre, $action) {
        echo "Notification Stock : Livre {$action} - Titre : {$livre->getTitle()}, Auteur : {$livre->getAuthor()}\n";
        $stockManager = new StockManager();
        $stockManager->updateStock($livre->getTitle(), $livre->getAuthor(), $action);
    }
}
