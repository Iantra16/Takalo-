<?php
namespace app\controllers;
use app\models\ObjetModel;
use app\models\UserModel;

use Flight;

class ObjetController {
    

    public function findOtherObj() {
        $objModel = new ObjetModel(Flight::db());
        $me = $_SESSION['iduser'] ?? null;
        if (!$me) {
            Flight::redirect('/user/login');
            return;
        }
        $objets = $objModel->getObjetsNotOwnedBy($me);
        // Flight::render('front/liste_objets', ['objets' => $objets] , 'content');
        Flight::render('front/layout', [
            'page' => 'liste_objets' ,
            'title' => 'Liste des objets' , 
            'objets' => $objets
        ]);
    }

    public function showMyObjects() {
        $objModel = new ObjetModel(Flight::db());
        $me = $_SESSION['iduser'] ?? null;
        if (!$me) {
            Flight::redirect('/user/login');
            return;
        }
        $objets = $objModel->getObjetsOwnedBy($me);
        // Flight::render('front/mes_objets', ['myobjets' => $myobjets], 'content');
        Flight::render('front/layout', [
            'page' => 'liste_objets' ,
            'title' => 'Mes objets' ,
            'objets' => $objets
        ]);
    }
    

}