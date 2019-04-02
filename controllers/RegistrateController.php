<?php
/**
 * Created by PhpStorm.
 * User: akerz
 * Date: 4/2/2019
 * Time: 12:58 AM
 */

namespace app\controllers;


use app\models\RegistrationForm;
use app\models\User;
use yii\web\Controller;
use Yii;
use yii\filters\AccessControl;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;


class RegistrateController extends Controller
{
    public function actionIndex(){
        if (!Yii::$app->user->isGuest){
            $this->redirect('index.php');
        }
        $model = new RegistrationForm();
        $model->password='';
        $model->confirm_password='';
        if ($model->load(Yii::$app->request->post()) && $model->registrate()) {
            return $this->redirect('index.php?r=login');
        }
        return $this->render('registrate',['model'=>$model]);

    }
    public function actionRegistrate()
    {
        if (!Yii::$app->user->isGuest){
            $this->redirect('index.php');
        }
        $model = new RegistrationForm();
        $model->password='';
        $model->confirm_password='';
        if ($model->load(Yii::$app->request->post()) && $model->registrate()) {
            return $this->redirect('index.php?r=login%2Flogin');
        }
        return $this->render('registrate',['model'=>$model]);
    }
}