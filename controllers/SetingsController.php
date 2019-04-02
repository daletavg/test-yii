<?php
/**
 * Created by PhpStorm.
 * User: akerz
 * Date: 4/2/2019
 * Time: 12:58 AM
 */

namespace app\controllers;


use app\models\RegistrationForm;
use app\models\SetingsForm;
use app\models\User;
use yii\web\Controller;
use Yii;
use yii\filters\AccessControl;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class SetingsController extends Controller
{

    public function actionSetings()
    {
        if(Yii::$app->user->isGuest){
            return $this->redirect('index.php?r=login');
        }


        $model = new SetingsForm();
        $model->email=Yii::$app->user->identity->email;
        $model->previos_email=Yii::$app->user->identity->email;
        $model->name=Yii::$app->user->identity->name;
        $model->password='';
        $model->confirm_password='';
        if ($model->load(Yii::$app->request->post()) && $model->new_seting()) {
            return $this->redirect('index.php');
        }
        return $this->render('setings',['model'=>$model]);


    }
}