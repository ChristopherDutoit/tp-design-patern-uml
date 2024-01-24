<?php

class SortByTitle implements SortingInterface {
    public function sort(array $livres): array {
        usort($livres, function ($a, $b) {
            return strcmp($a->getTile(), $b->getTile());
        });
        return $livres;
    }
}
