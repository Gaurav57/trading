<?php

namespace app\modules\admin\models;

use Yii;
use yii\base\Model;


class Change extends Model
{
    public $password;
   
    public function rules()
    {
		return [
           
            	[['password'], 'required']
        	];
    }
    public function savedata($data,$email){
 
        $sqldata = (new \yii\db\Query())->select(['email'])->from('user_credential')->
        where (["email" => $email])->all();
         if(count($sqldata) > 0){
         $formdata = array('password' => ($data ['user_credential']['password']));

          ->bindValue(':email', $email)
            ->bindValue(':password', $formdata)
            ->execute();
            return "Success";
         }
    }
 

}