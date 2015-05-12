<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\User;

class DashboardController extends AdminController
{
    
    public function actionIndex()
    {
        return $this->render('dashboard', []);
    }
}
