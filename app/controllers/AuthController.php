<?php
namespace app\controllers;
use app\models\AdminModel;
use app\models\UserModel;

use Flight;

class AuthController {
    
    // Login admin
    public function loginAdmin() {
        $adminModel = new AdminModel(Flight::db());
        $username = Flight::request()->data->username;
        $admin = $adminModel->adminExist($username);
        
        if ($admin) {
            Flight::redirect('/admin');
        } else {
            Flight::render('admin/login', ['error' => 'Identifiants invalides']);
        }
    }
    
    // Login utilisateur
    public function loginUser() {
        $userModel = new UserModel(Flight::db());
        $email = Flight::request()->data->email;
        $password = Flight::request()->data->password;
        $user = $userModel->verifieUser($email, $password);
        Flight::render('front/layout', ['user' => $user]);
    }
    
    // Register utilisateur
    public function registerUser() {
        $userModel = new UserModel(Flight::db());
            $nom = Flight::request()->data->nom;
            $prenom = Flight::request()->data->prenom;
            $email = Flight::request()->data->email;
            $telephone = Flight::request()->data->telephone;
            $password_hash = password_hash(Flight::request()->data->password, PASSWORD_BCRYPT);
        $newUser = $userModel->insertUser($nom, $prenom, $email, $telephone, $password_hash);
        Flight::render('front/layout', ['newUser' => $newUser]);
    }
    
    // Logout
    public function logout() {
        Flight::redirect('/');
    }
    
    // Logout admin
    public function logoutAdmin() {
        Flight::redirect('/admin/login');
    }
}