<?php

namespace app\modules\admin\models;

use Yii;
use yii\base\Model;


class Forgot extends Model
{
    public $email;

 public function rules()
    {
		return [

            	[['email'], 'required'],
            	['email', 'email'],

        	];
    }
}