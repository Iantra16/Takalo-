<?php

namespace app\models;

use Flight;

class AdminModel
{

    private $db;

    public function __construct($db){
        $this->db = $db;
    }

    public function adminExist($username){
        $sql = $this->db->prepare("SELECT * FROM admin WHERE username = ?");
        $sql->execute([$username]);
        return $sql->fetch();
    }

    public function getAllUsers() {
        $sql = $this->db->query("SELECT * FROM user");
        return $sql->fetchAll();
    }



}
