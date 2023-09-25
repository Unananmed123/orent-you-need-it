<?php
namespace app\controllers;

use app\core\InitController;
use app\lib\UserOperation;
use app\models\UserModel;

class MagazineController extends InitController
{
    public function actionCreateAsentense()
    {
        
    }
    public function actionMagazine()
    {
        $this->view->title = 'Магазин';
        $this->render('magazine',[
            'sidebar'=>UserOperation::getMenuLinks()

        ]);
    }
}