<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;

class AdminController extends Controller
{
    public $layout = 'admin';
    
    public function beforeAction($action)
    {
        if (Yii::$app->user->isGuest){
            $this->goHome();
        }
        return parent::beforeAction($action);
    }
}