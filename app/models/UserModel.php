<?php

namespace app\models;

use Flight;

class UserModel
{

    private $db;

    public function __construct($db){
        $this->db = $db;
    }

    public function verifieUser($email, $password){
        $sql = $this->db->prepare("SELECT * FROM user WHERE email = ?");
        $sql->execute([$email]);
        $user = $sql->fetch();

        if (!$user) {
            return false;
        }

        return password_verify($password, $user['password_hash'] ?? '') ? $user : false;
    }

    public function insertUser($nom, $prenom, $email, $telephone, $password_hash){
        $sql = $this->db->prepare("INSERT INTO user (nom, prenom, email, telephone, password_hash) VALUES (?, ?, ?, ?, ?)");
        return $sql->execute([$nom, $prenom, $email, $telephone, $password_hash]);
    }

    




}
