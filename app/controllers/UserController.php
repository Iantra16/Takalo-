<?php
namespace app\controllers;
use app\models\ObjetModel;
use app\models\UserModel;

use Flight;

class UserController {
    
    public function findAllObjet() {
        $objModel = new ObjetModel(Flight::db());
        $allobjets = $objModel->getAll();
        Flight::render('front/liste_objets' , ['allobjets' => $allobjets]);
    }

    public function findOtherObj() {
        $objModel = new ObjetModel(Flight::db());
        $user = Flight::get('user');
        $me = $user->idUser;
        $objets = $objModel->getOthers($me);
        Flight::render('front/liste_objets', ['objets' => $objets]);
    }

    public function findMyObj() {
        $objModel = new ObjetModel(Flight::db());
        $user = Flight::get('user');
        $me = $user->idUser;
        $objets = $objModel->getMy($me);
        Flight::render('front/liste_objets', ['objets' => $objets]);
    }
    
    public function showObjet($idObjet) {
        $objModel = new ObjetModel(Flight::db());
        $objet = $objModel->getOne($idObjet);
        Flight::render('front/objet', ['objet' => $objet]);
    }
}