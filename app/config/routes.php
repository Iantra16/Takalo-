<?php

use app\controllers\AuthController;
use app\controllers\AdminController;
use app\controllers\ObjetController;
use flight\Engine;
use flight\net\Router;

/** 
 * @var Router $router 
 * @var Engine $app
 */

// Group principal
$router->group('', function (Router $router) use ($app) {

    $router->get('/', function () use ($app) {
        $app->redirect('/user/login');
    });

    // ============================================
    // ADMIN
    // ============================================
    $router->group('/admin', function (Router $router) use ($app) {
        $admin_controller = new AdminController();
        $auth_controller = new AuthController();

        $router->get('/login', function () use ($app) {
            $app->render('admin/login');
        });
        $router->post('/login',[$auth_controller,'loginAdmin']);

        // Dashboard
        $router->get('/', [$admin_controller,'showDashboard']);

        // categories
        $router->get('/categories', [$admin_controller, 'showCategories']);

        //utilisateurs
        $router->get('/utilisateurs', [$admin_controller, 'showAllUser']);
        
          // Déconnexion admin
        $router->get('/logout', function () use ($app) {
            $auth_controller = new AuthController();
            $auth_controller->logoutAdmin();
        });


    });

    // ============================================
    // USER
    // ============================================
    $router->group('/user', function (Router $router) use ($app) {
        $auth_controller = new AuthController();
        $objet_controller = new ObjetController();
        //login
        $router->get('/login', function () use ($app) {
            $app->render('front/login');
        });
        $router->post('/login',[$auth_controller,'loginUser']);

        //inscription
        $router->get('/inscription', function () use ($app) {
            $app->render('front/inscription');
        });
        $router->post('/inscription',[$auth_controller,'registerUser']);

        // accueil: liste objets
        $router->get('/', [$objet_controller, 'findOtherObj']);
        $router->get('/listobject', [$objet_controller, 'findOtherObj']);

        // mes objets
        $router->get('/myobject', [$objet_controller, 'showMyObjects']);
        // Déconnexion
        $router->get('/logout', function () use ($app) {
            $auth_controller = new AuthController();
            $auth_controller->logout();
        });
    });


});
