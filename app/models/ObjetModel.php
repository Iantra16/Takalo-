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
            "SELECT * FROM v_objet_owner
            WHERE user_id != ?
            ORDER BY created_at DESC"
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
            "SELECT * FROM v_objet_owner
            WHERE user_id = ?
            ORDER BY created_at DESC"
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
            "SELECT * FROM v_objet_detail
            WHERE id = ?"
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
            "SELECT * FROM v_objet_categorie
            ORDER BY created_at DESC"
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