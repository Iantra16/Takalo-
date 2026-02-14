<?php
namespace app\controllers;
use app\models\AdminModel;
use app\models\UserModel;

use Flight;

class AdminController {
    
    public function showDashboard() {
        $adminModel = new AdminModel(Flight::db());
        $users = $adminModel->getAllUsers();
        
        // Rendre le dashboard dans la variable `content`
        Flight::render('admin/dashboard', ['users' => $users], 'content');

        // Afficher le layout (utilise la variable `content`)
        Flight::render('admin/layout', [
            'title' => 'Dashboard'
        ]);
    }
    
    public function showAllUser() {
        $adminModel = new AdminModel(Flight::db());
        $users = $adminModel->getAllUsers();
        
        // Rendre la liste des utilisateurs dans la variable `content`
        Flight::render('admin/utilisateurs', [
            'users' => $users,
        ], 'content');

        // Afficher le layout (utilise la variable `content`)
        Flight::render('admin/layout', [
            'title' => 'Liste des Utilisateurs'
        ]);
    }

    public function showCategories() {
        Flight::render('admin/categories', [], 'content');
        Flight::render('admin/layout', [
            'title' => 'Categories'
        ]);
    }
}
    
    
