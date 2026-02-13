<?php

use app\controllers\AuthController;
use app\controllers\AdminController;
use app\controllers\ObjetController;
use app\controllers\EchangeController;
use app\controllers\CategorieController;
use flight\Engine;
use flight\net\Router;

/** 
 * @var Router $router 
 * @var Engine $app
 */

// Group principal
$router->group('', function (Router $router) use ($app) {

    // ============================================
    // ROUTES AUTHENTIFICATION - FRONT OFFICE
    // ============================================

    // Page de login utilisateur (GET)
    $router->get('/', function () use ($app) {
        $app->redirect('user/login');
    });

    // ============================================
    // ADMIN
    // ============================================
    $router->group('/admin', function (Router $router) use ($app) {
        // Page de login utilisateur (GET)
        $router->get('/login', function () use ($app) {
            $app->render('admin/login');
        });
    });

    // ============================================
    // USER
    // ============================================
    $router->group('/user', function (Router $router) use ($app) {
        // Page de login utilisateur (GET)
        $router->get('/login', function () use ($app) {
            $app->render('front/login');
        });


        $router->get('/myobject', function () use ($app) {
            $app->render('admin/listobject');
        });

        // $router->get('/login', function() use ($app) {
        //     $app->render('front/login');
        // });

        $router->post('/login', function () use ($app) {
            $auth_controller = new AuthController();
            $auth_controller->loginUser();
        });

        // Page d'inscription (GET)
        $router->get('/inscription', function () use ($app) {
            $app->render('front/inscription');
        });

        // Traitement inscription (POST)
        $router->post('/inscription', function () use ($app) {
            $auth_controller = new AuthController();
            $auth_controller->registerUser();
        });

        // Déconnexion
        $router->get('/logout', function () use ($app) {
            $auth_controller = new AuthController();
            $auth_controller->logout();
        });
    });


    // Traitement login utilisateur (POST)
    // $router->post('/login', function() use ($app) {
    //     $auth_controller = new AuthController();
    //     $auth_controller->loginUser();
    // });

    // // Page d'inscription (GET)
    // $router->get('/inscription', function() use ($app) {
    //     $app->render('front/inscription');
    // });

    // // Traitement inscription (POST)
    // $router->post('/inscription', function() use ($app) {
    //     $auth_controller = new AuthController();
    //     $auth_controller->registerUser();
    // });

    // // Déconnexion
    // $router->get('/logout', function() use ($app) {
    //     $auth_controller = new AuthController();
    //     $auth_controller->logout();
    // });

    // ============================================
    // ROUTES AUTHENTIFICATION - BACK OFFICE
    // ============================================

    // Page de login admin (GET)
    $router->get('/admin/login', function () use ($app) {
        $app->render('admin/login');
    });

    // Traitement login admin (POST)
    $router->post('/admin/login', function () use ($app) {
        $auth_controller = new AuthController();
        $auth_controller->loginAdmin();
    });

    // Déconnexion admin
    $router->get('/admin/logout', function () use ($app) {
        $auth_controller = new AuthController();
        $auth_controller->logoutAdmin();
    });

    // ============================================
    // ROUTES FRONT OFFICE - PUBLIC
    // ============================================

    // // Page d'accueil - Liste des objets
    // $router->get('/', function() use ($app) {
    //     $objet_controller = new ObjetController();
    //     $objet_controller->listeObjets();
    // });

    // // Recherche d'objets
    // $router->get('/recherche', function() use ($app) {
    //     $objet_controller = new ObjetController();
    //     $objet_controller->rechercheObjets();
    // });

    // // Fiche détail d'un objet
    // $router->get('/objet/@id:[0-9]+', function($id) use ($app) {
    //     $objet_controller = new ObjetController();
    //     $objet_controller->ficheObjet($id);
    // });

    // // Historique d'un objet (public)
    // $router->get('/objet/@id:[0-9]+/historique', function($id) use ($app) {
    //     $objet_controller = new ObjetController();
    //     $objet_controller->historiqueObjet($id);
    // });

    // // ============================================
    // // ROUTES FRONT OFFICE - UTILISATEUR CONNECTÉ
    // // ============================================

    // // Mes objets
    // $router->get('/mes-objets', function() use ($app) {
    //     $objet_controller = new ObjetController();
    //     $objet_controller->mesObjets();
    // });

    // // Ajouter un objet (GET - afficher le formulaire)
    // $router->get('/objet/ajouter', function() use ($app) {
    //     $objet_controller = new ObjetController();
    //     $objet_controller->ajouterObjetForm();
    // });

    // // Ajouter un objet (POST - traiter le formulaire)
    // $router->post('/objet/ajouter', function() use ($app) {
    //     $objet_controller = new ObjetController();
    //     $objet_controller->ajouterObjet();
    // });

    // // Modifier un objet (GET)
    // $router->get('/objet/@id:[0-9]+/modifier', function($id) use ($app) {
    //     $objet_controller = new ObjetController();
    //     $objet_controller->modifierObjetForm($id);
    // });

    // // Modifier un objet (POST)
    // $router->post('/objet/@id:[0-9]+/modifier', function($id) use ($app) {
    //     $objet_controller = new ObjetController();
    //     $objet_controller->modifierObjet($id);
    // });

    // // Supprimer un objet
    // $router->get('/objet/@id:[0-9]+/supprimer', function($id) use ($app) {
    //     $objet_controller = new ObjetController();
    //     $objet_controller->supprimerObjet($id);
    // });

    // // ============================================
    // // ROUTES ÉCHANGES
    // // ============================================

    // // Mes échanges
    // $router->get('/mes-echanges', function() use ($app) {
    //     $echange_controller = new EchangeController();
    //     $echange_controller->mesEchanges();
    // });

    // // Proposer un échange (POST)
    // $router->post('/echange/proposer', function() use ($app) {
    //     $echange_controller = new EchangeController();
    //     $echange_controller->proposerEchange();
    // });

    // // Accepter une proposition
    // $router->post('/echange/@id:[0-9]+/accepter', function($id) use ($app) {
    //     $echange_controller = new EchangeController();
    //     $echange_controller->accepterEchange($id);
    // });

    // // Refuser une proposition
    // $router->post('/echange/@id:[0-9]+/refuser', function($id) use ($app) {
    //     $echange_controller = new EchangeController();
    //     $echange_controller->refuserEchange($id);
    // });

    // // ============================================
    // // ROUTES BACK OFFICE - ADMIN
    // // ============================================

    // // Dashboard admin
    // $router->get('/admin', function() use ($app) {
    //     $admin_controller = new AdminController();
    //     $admin_controller->dashboard();
    // });

    // // ============================================
    // // GESTION DES CATÉGORIES
    // // ============================================

    // // Liste des catégories
    // $router->get('/admin/categories', function() use ($app) {
    //     $categorie_controller = new CategorieController();
    //     $categorie_controller->liste();
    // });

    // // Ajouter une catégorie (GET)
    // $router->get('/admin/categories/ajouter', function() use ($app) {
    //     $categorie_controller = new CategorieController();
    //     $categorie_controller->ajouterForm();
    // });

    // // Ajouter une catégorie (POST)
    // $router->post('/admin/categories/ajouter', function() use ($app) {
    //     $categorie_controller = new CategorieController();
    //     $categorie_controller->ajouter();
    // });

    // // Modifier une catégorie (GET)
    // $router->get('/admin/categories/@id:[0-9]+/modifier', function($id) use ($app) {
    //     $categorie_controller = new CategorieController();
    //     $categorie_controller->modifierForm($id);
    // });

    // // Modifier une catégorie (POST)
    // $router->post('/admin/categories/@id:[0-9]+/modifier', function($id) use ($app) {
    //     $categorie_controller = new CategorieController();
    //     $categorie_controller->modifier($id);
    // });

    // // Supprimer une catégorie
    // $router->get('/admin/categories/@id:[0-9]+/supprimer', function($id) use ($app) {
    //     $categorie_controller = new CategorieController();
    //     $categorie_controller->supprimer($id);
    // });

    // // ============================================
    // // GESTION DES UTILISATEURS (ADMIN)
    // // ============================================

    // // Liste des utilisateurs
    // $router->get('/admin/utilisateurs', function() use ($app) {
    //     $admin_controller = new AdminController();
    //     $admin_controller->listeUtilisateurs();
    // });

    // // Détails utilisateur
    // $router->get('/admin/utilisateurs/@id:[0-9]+', function($id) use ($app) {
    //     $admin_controller = new AdminController();
    //     $admin_controller->detailsUtilisateur($id);
    // });

    // // Statistiques admin
    // $router->get('/admin/statistiques', function() use ($app) {
    //     $admin_controller = new AdminController();
    //     $admin_controller->statistiques();
    // });

});
