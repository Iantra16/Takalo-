<?php

namespace app\models;

use Flight;

class ObjetModel
{

    private $db;

    public function __construct($db){
        $this->db = $db;
    }

    private function getImagesForObjet($objetId) {
        $sql = $this->db->prepare("SELECT idImg, urlImg FROM image WHERE idOb = ? ORDER BY idImg");
        $sql->execute([$objetId]);
        return $sql->fetchAll();
    }

    public function getObjetsNotOwnedBy($userId) {
        $sql = $this->db->prepare(
            "SELECT o.*, 
                    c.nom as categorie_nom
            FROM objet o
            INNER JOIN appartenance a ON a.idObjet = o.id AND a.date_fin IS NULL
            LEFT JOIN categorie c ON o.idCat = c.idCat
            WHERE a.idUser != ?
            ORDER BY o.created_at DESC"
        );
        $sql->execute([$userId]);
        $objets = $sql->fetchAll();
        
        // Ajouter les images pour chaque objet
        foreach ($objets as &$objet) {
            $objet['images'] = $this->getImagesForObjet($objet['id']);
        }
        
        return $objets;
    }

    public function getObjetsOwnedBy($userId) {
        $sql = $this->db->prepare(
            "SELECT o.*, 
                    c.nom as categorie_nom
            FROM objet o
            INNER JOIN appartenance a ON a.idObjet = o.id AND a.date_fin IS NULL
            LEFT JOIN categorie c ON o.idCat = c.idCat
            WHERE a.idUser = ?
            ORDER BY o.created_at DESC"
        );
        $sql->execute([$userId]);
        $objets = $sql->fetchAll();
        
        // Ajouter les images pour chaque objet
        foreach ($objets as &$objet) {
            $objet['images'] = $this->getImagesForObjet($objet['id']);
        }
        
        return $objets;
    }

    public function getObjetById($objetId) {
        $sql = $this->db->prepare(
            "SELECT o.*, 
                    c.nom as categorie_nom,
                    u.nom as proprietaire_nom,
                    u.prenom as proprietaire_prenom,
                    u.email as proprietaire_email,
                    u.telephone as proprietaire_telephone
            FROM objet o
            LEFT JOIN categorie c ON o.idCat = c.idCat
            LEFT JOIN appartenance a ON a.idObjet = o.id AND a.date_fin IS NULL
            LEFT JOIN user u ON a.idUser = u.idUser
            WHERE o.id = ?"
        );
        $sql->execute([$objetId]);
        $objet = $sql->fetch();
        
        if ($objet) {
            $objet['images'] = $this->getImagesForObjet($objet['id']);
        }
        
        return $objet;
    }

    public function getAllObjets() {
        $sql = $this->db->prepare(
            "SELECT o.*, 
                    c.nom as categorie_nom
            FROM objet o
            LEFT JOIN categorie c ON o.idCat = c.idCat
            ORDER BY o.created_at DESC"
        );
        $sql->execute();
        $objets = $sql->fetchAll();
        
        // Ajouter les images pour chaque objet
        foreach ($objets as &$objet) {
            $objet['images'] = $this->getImagesForObjet($objet['id']);
        }
        
        return $objets;
    }

}