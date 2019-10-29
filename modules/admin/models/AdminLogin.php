<?php

namespace app\modules\admin\models;

use Yii;
use yii\db\ActiveRecord;

class AdminLogin extends ActiveRecord
{
    public static function tableName()
    {
        return 'register';
    } 

    public function rules()
    {
        return [
            [['email', 'password'], 'required'],
           ['password' ,'validatePassword'],
        ];
    }

     public function validatePassword($attribute, $params, $password)
    {
        if (!$this->hasErrors()) {
            $user = $this->getUser();

            if (!$user || !$user->validatePassword($this->password)) {
                $this->addError($attribute, 'Incorrect username or password.');
            }
        }
        return $this->password === md5($password);
    }
    
    public function attributeLabels()
    {
        return [
            'user_id' => 'User ID',
            'email' => 'Email',
            'password' => 'Password',
        ];
    }



   




}