<?php

namespace app\models;

use Flight;

class ObjetModel
{

    private $db;

    public function __construct($db){
        $this->db = $db;
    }

    public function getAllObjets() {
        $sql = $this->db->query("SELECT * FROM objet");
        return $sql->fetchAll();
    }

    public function getObjetOthers($me) {
        $sql = $this->db->prepare("SELECT * FROM objet WHERE id_user != ?");
        $sql->execute([$me]);
        return $sql->fetchAll();
    }

}
