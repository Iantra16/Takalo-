<?php
namespace app\controllers;
use app\models\ObjetModel;
use app\models\UserModel;

use Flight;

class ObjetController {
    
    public function findAllObjet() {
        $objModel = new ObjetModel(Flight::db());
        $allobjets = $objModel->getAllObjets();
        Flight::render('front/liste_objets', ['allobjets' => $allobjets]);
    }

    public function findOtherObj() {
        $objModel = new ObjetModel(Flight::db());
        $me = Flight::request()->data->id_user;
        $objets = $objModel->getObjetOthers($me);
        Flight::render('front/liste_objets', ['objets' => $objets]);
    }
    

}