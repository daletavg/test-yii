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


class RegistrationForm extends Model
{
    public $name;
    public $email;
    public $password;
    public $confirm_password;

    private $_user = false;


    public function rules()
    {
        return [
            // username and password are both required
            [['email', 'password','confirm_password','name'], 'required'],
            ['email', 'email'],
            ['email','validateEmail'],
            // password is validated by validatePassword()
            ['password', 'validatePassword'],
        ];
    }

    public function validateEmail($attribute, $params)
    {
        if (!$this->hasErrors()){
            $user = $this->getUser();
            if ($user !== null) {
                $this->addError($attribute, 'This user is avaible');
            }
        }
    }
    public function validatePassword($attribute, $params)
    {
        if (!$this->hasErrors()) {
            if($this->password!=$this->confirm_password){
                $this->addError($attribute, 'Passwords do not meet');
                $this->addError('confirm_password', '');
            }
            else if(strlen($this->password)<6){
                $this->addError($attribute, 'Passwords => 6 symbols');
                $this->addError('password2', '');
            }
        }
    }

    /**
     * Logs in a user using the provided username and password.
     * @return bool whether the user is logged in successfully
     */
    public function registrate()
    {
        if ($this->validate()) {
            $users = new User();
            $users->password = md5($this->password);
            $users->email=$this->email;
            $users->name=$this->name;
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