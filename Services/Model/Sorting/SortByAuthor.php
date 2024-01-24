<?php

class SortByAuthor implements SortingInterface {
    public function sort(array $livres): array {
        usort($livres, function ($a, $b) {
            return strcmp($a->getAuthor(), $b->getAuthor());
        });
        return $livres;
    }
}