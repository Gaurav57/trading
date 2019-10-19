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
 
   
}