<?php 

class NotificationAdmin implements ObserverInterface {
    public function update($livre, $action) {
        echo "Notification Admin : Livre {$action} - Titre : {$livre->getTitle()}, Auteur : {$livre->getAuthor()}\n";
        $adminNotifier = new AdminNotifier();
        $adminNotifier->sendNotification($livre->getTitle(), $livre->getAuthor(), $action);
    }
}
