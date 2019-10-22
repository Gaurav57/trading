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



public function pass($data){
 
        $sqldata = (new \yii\db\Query())->select(['email'])->from('admin_login')->
        where (["email" => $this->email])->all();
         if(count($sqldata) > 0){
         $formdata = array('password' => ($data ['admin_login']['password']));
          
            $data = Yii::$app->db->createCommand("UPDATE admin_login SET password=:password, WHERE email=:email");

            return $data;
         }
    }
   




}