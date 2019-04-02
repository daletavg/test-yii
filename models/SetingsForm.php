<?php
/**
 * Created by PhpStorm.
 * User: akerz
 * Date: 4/2/2019
 * Time: 11:42 AM
 */

namespace app\models;

use Yii;
use yii\base\Model;


class SetingsForm extends Model
{
    public $name;
    public $email;
    public $password;
    public $confirm_password;
    public $previos_email;
    private $_user = false;


    public function rules()
    {
        return [
            [['password','confirm_password','name'],'required'],
            // username and password are both required
            // password is validated by validatePassword()
            ['password', 'validatePassword'],
        ];
    }


    public function validatePassword($attribute, $params)
    {
        if (!$this->hasErrors()) {
            if(strlen($this->password)!=0 || strlen($this->confirm_password)!=0) {
                if ($this->password != $this->confirm_password) {
                    $this->addError($attribute, 'Passwords do not meet');
                    $this->addError('confirm_password', '');
                } else if (strlen($this->password) < 6) {
                    $this->addError($attribute, 'Passwords => 6 symbols');
                    $this->addError('password2', '');
                }
            }
        }
    }

    /**
     * Logs in a user using the provided username and password.
     * @return bool whether the user is logged in successfully
     */
    public function new_seting()
    {
        if ($this->validate()) {
            $users = UserIdentity::findByUsername($this->previos_email);
            $users->email = $this->email;
            if (strlen($this->password)!=0 && strlen($this->confirm_password)!=0) {
                $users->password = md5($this->password);
                Yii::$app->user->identity->password=md5($this->password);
            }
            if(strlen($this->name)!=0) {
                $users->name = $this->name;
                Yii::$app->user->identity->name = $this->name;
            }
            $users->save();


            return true/*Yii::$app->user->login($this->getUser(),  0)*/;
        }
        return false;
    }

    /**
     * Finds user by [[username]]
     *
     * @return User|null
     */
    public function getUser()
    {
        if ($this->_user === false) {
            $this->_user = User::findByUsername($this->email);
        }

        return $this->_user;
    }
}