<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\ContactForm;

class ContactController extends AdminController
{   
    public function actionIndex()
    {

        $model = new ContactForm();

        if (Yii::$app->request->isPost){
            Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
            if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
                return ['status' => '1', 'message' => Yii::t('app', 'Thank you for contacting us. We will respond to you as soon as possible.')];
            } else {
                return ['status' => '0', 'message' => Yii::t('app', 'Sorry, error request')];
            }
        }
        return $this->renderAjax('contact', [
            'model' => $model,
        ]);

    }
}


