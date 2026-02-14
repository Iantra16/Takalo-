<?php


    function pathImage($image) {
        $path = "/images/" . $image;
        if (file_exists($path)) {
            return $path;
        } else {
            return "/images/default.png"; // Chemin vers une image par défaut
        }
    }

    function afficheprix($prix) {
        // number_format($objet['prix'] ?? 0, 2) ? €
        return number_format($prix ?? 0, 2, ',', ' ') . ' €';
    }

?>