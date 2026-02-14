<?php

namespace app\models;

use Flight;

class ObjetModel
{

    private $db;

    public function __construct($db){
        $this->db = $db;
    }

    public function getAll() {
        $sql = $this->db->query("SELECT * FROM v_objet_propri_actuel");
        return $sql->fetchAll();
    }

    public function getMy($idUser) {
        $sql = $this->db->prepare("SELECT * FROM v_objet_propri_actuel WHERE id_proprietaire = ?");
        $sql->execute([$idUser]);
        return $sql->fetchAll();
    }

    public function getOthers($idUser) {
        $sql = $this->db->prepare("SELECT * FROM v_objet_propri_actuel WHERE id_proprietaire != ? OR id_proprietaire IS NULL");
        $sql->execute([$idUser]);
        return $sql->fetchAll();
    }

}
