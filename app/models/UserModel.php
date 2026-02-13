<?php

namespace app\models;

use Flight;

class UserModel
{

    private $db;

    public function __construct($db){
        $this->db = $db;
    }

    public function verifieUser($email, $password_hash){
        $sql = $this->db->prepare("SELECT * FROM user WHERE email = ? AND password_hash = ?");
        $sql->execute([$email, $password_hash]);
        return $sql->fetch();
    }

    public function insertUser($nom, $prenom, $email, $telephone, $password_hash){
        $sql = $this->db->prepare("INSERT INTO user (nom, prenom, email, telephone, password_hash) VALUES (?, ?, ?, ?, ?)");
        return $sql->execute([$nom, $prenom, $email, $telephone, $password_hash]);
    }

    




}
