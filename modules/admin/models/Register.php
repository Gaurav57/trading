<?php

namespace app\modules\admin\models;

use Yii;

class UserCredential extends \yii\db\ActiveRecord
{

    public function rules()
    {
        return [
            [['registerAs', 'orgName', 'contact', 'email', 'password', 'fName', 'lName', 'gst', 'iecode', 'brands', 'latchOn', 'iPartner', 'catalouge', 'street', 'city', 'state', 'country', 'zip'], 'required'],
			['email', 'email'],
			[['imageFile'], 'file', 'skipOnEmpty' => true, 'extensions' => 'jpg, jpeg, png'],
			[['catalouge'], 'file', 'skipOnEmpty' => true, 'extensions' => 'jpg, jpeg, png'],
			['password' ,'validatePassword'],
        ];
    }

	public function validatePassword($attribute, $params)
    {
        if (!$this->hasErrors()) {
            $user = $this->getUser();

            if (!$user || !$user->validatePassword($this->password)) {
                $this->addError($attribute, 'Incorrect Username or Password.');
            }
        }
    }
	
    public function attributeLabels()
    {
        return [
            'user_id' => 'User ID',
			'registerAs' => 'Register As',
			'orgName' => 'Organisation',
            'contact' => 'Contact',
            'email' => 'Email',
            'password' => 'Password',
			'fName' => 'First Name',
			'lName' => 'Last Name',
			'iecode' => 'Import/Export Code',
			'gst' => 'GST No.',
			'brands', => 'Brands/Logo',
			'latchOn', => 'Latch On',
			'catalouge', => 'Catalouge',
			'street', => 'street',
			'city', => 'City',
			'state', => 'State',
			'country', => 'Country',
			'zip' => 'Zip'
            'create_date' => 'Create Date',
            'update_date' => 'Update Date',
        ];
    }
	
	public function savedata($data){
		//print_r($data); die;
				$sqldata = (new \yii\db\Query())->select(['email'])->from('user_credential')->
				where(["email" => $data['UserCredential']['email']])->all();
				//print_r($data); die;
				if(count($sqldata) > 0){
					return "You are already registered.";
				} else {
					$formdata = array(
					'RegisterAs' => $data['UserCredential']['RegisterAs'],
					'orgName' => $data['UserCredential']['orgName'],
					'category' => $data['UserCredential']['category'],
					'username' => $data['UserCredential']['username'],
					'contact' => $data['UserCredential']['contact'],
					'email' => $data['UserCredential']['email'],
					'password' => md5($data['UserCredential']['password']),
					'fName' => $data['UserCredential']['fName'],
					'lName' => $data['UserCredential']['lName'],
					'iecode' => $data['UserCredential']['iecode'],
					'gst' => $data['UserCredential']['gst'],
					'brands' => $data['UserCredential']['brands'],
					'latchOn' => $data['UserCredential']['latchOn'],
					'catalouge' => $data['UserCredential']['catalouge'],
					'street' => $data['UserCredential']['street'],
					'city' => $data['UserCredential']['city'],
					'state' => $data['UserCredential']['state'],
					'country' => $data['UserCredential']['country'],
					'zip' => $data['UserCredential']['zip'],
					'create_date' => date('Y-m-d'),
					'update_date' => date('Y-m-d'),
						);
	
					$returndata = Yii::$app->db->createCommand()->insert('user_credential', $formdata)->execute();
					return $returndata;
				}
		}
}