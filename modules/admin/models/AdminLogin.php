<?php

namespace app\modules\admin\models;

use Yii;
use yii\db\ActiveRecord;

class AdminLogin extends ActiveRecord
{
    public static function tableName()
    {
        return 'admin_login';
    } 

    public function rules()
    {
        return [
            [['email', 'password'], 'required'],
            ['password' ,'validatePassword'],
        ];
    }

     public function validatePassword($attribute, $params)
    {
        if (!$this->hasErrors()) {
            $user = $this->getUser();

            if (!$user || !$user->validatePassword($this->password)) {
                $this->addError($attribute, 'Incorrect username or password.');
            }
        }
    }
    
    public function attributeLabels()
    {
        return [
            'user_id' => 'User ID',
            'email' => 'Email',
            'password' => 'Password',
        ];
    }



public static function findByEmail($email) {
    $admin_login = admin_login::find()
            ->where([
                "email" => $email
            ])
            ->one();
    if (!count($admin_login)) {
        return null;
    }
    return new static($admin_login);
}




}