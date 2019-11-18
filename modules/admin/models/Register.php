<?php


namespace app\modules\admin\models;

use Yii;
use yii\base\model;

class Register extends Model
{
	public $name;
	public $email;
	public $contact;
	public $password;
	public $rememberMe = true;
	
	private $_user = false;
	
	public function rules()
	{
		return [
			[['name', 'email', 'contact', 'password'], 'required'],
			['rememberMe', 'boolean'],
			['password', 'validatePassword'],
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
	
}