<?php

namespace app\modules\admin\models;

use Yii;
use yii\base\Model;


class Change extends Model
{
    public $password;
    public $email;

 public function rules()
    {
		return [
           
            	[['password'], 'required']
        	];
    }
 
   public function pass($data){
 
        $sqldata = (new \yii\db\Query())->select(['email'])->from('admin_login')->
        where (["email" => $this->email])->all();
         if(count($sqldata) > 0){
         $formdata = array('password' => ($data ['admin_login']['password']));
          
            $returndata = Yii::$app->db->createCommand("UPDATE admin_login SET password=:password, WHERE email=:email")->execute();

            return "Success";
         }
    }

}