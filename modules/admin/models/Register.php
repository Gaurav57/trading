<?php

namespace app\modules\admin\models;

use Yii;

class Register extends \yii\db\ActiveRecord
{
	public $agree;
	public $logo;
	public $catalouge;
	public $brandName;
	public $country;
	public $checkBox;
	public $stateName;
	public $country_id;
	public $cat_id;
	
    public function rules()
    {
        return [
            [['registerAs', 'orgName', 'contact', 'email', 'password', 'confirmPassword', 'fName', 'lName', 'iecode', 'iPartner', 'address', 'city', 'stateName', 'country', 'zip', 'cat_id', 'agree'], 'required'],
			['email', 'email'],
			[['logo'], 'file', 'skipOnEmpty' => true, 'extensions' => 'jpg, jpeg, png', 'maxFiles' => 10],
			[['catalouge'], 'file', 'skipOnEmpty' => true, 'extensions' => 'jpg, jpeg, png', 'maxFiles' => 10],
			//['password' ,'validatePassword'],
			array('agree', 'required', 'requiredValue' => 1,),
        ];
    }
/*
	public function validatePassword($attribute, $params)
    {
        if (!$this->hasErrors()) {
            $user = $this->getUser();

            if (!$user || !$user->validatePassword($this->password)) {
                $this->addError($attribute, 'Incorrect Username or Password.');
            }
        }
    }
*/	

    public function attributeLabels()
    {
        return [
            'user_id' => 'User ID',
			'registerAs' => 'Register As',
			'orgName' => 'Organisation',
            'contact' => 'Contact',
            'email' => 'Email',
            'password' => 'Password',
            'confirmPassword' => 'Confirm Password',
			'fName' => 'First Name',
			'lName' => 'Last Name',
			'iecode' => 'Import/Export Code',
			'gst' => 'GST/VAT',
			'brandName' => 'Brands/Logo',
			'latchOn' => 'Latch On',
			'catalouge' => 'Catalouge',
			'address' => 'Address',
			'city' => 'City',
			'stateName' => 'State',
			'country' => 'Country',
			'zip' => 'Zip',
			'cat_id' => 'Category',
			'agree' => 'I accept Terms and Conditions.',
			'iPartner' => 'Installation Partner',
            'create_date' => 'Create Date',
            'update_date' => 'Update Date',
        ];
    }
	
	
	public function upload(){
		
		if ($this->validate()) {
            $this->logo->saveAs('uploads/' . $this->logo->baseName . '.' . $this->logo->extension);
            return $this->logo->baseName . '.' . $this->logo->extension;
        } else {
            return '';
        }
	}
	
	public function upload1(){
		
		if ($this->validate()) {
            $this->catalouge->saveAs('uploads/' . $this->catalouge->baseName . '.' . $this->catalouge->extension);
            return $this->catalouge->baseName . '.' . $this->catalouge->extension;
        } else {
            return '';
        }
	}
	
	public function savedata($data, $path, $path1){
		//print_r($data); die;
				$sqldata = (new \yii\db\Query())->select(['email'])->from('register')->
				where(["email" => $data['Register']['email']])->all();
				//echo"<pre>";
				//print_r($data); die;
				if(count($sqldata) > 0){
					return "You are already registered.";
				} else {
					$formdata = array(
					'registerAs' => $data['Register']['registerAs'],
					'orgName' => $data['Register']['orgName'],
					'contact' => $data['Register']['contact'],
					'email' => $data['Register']['email'],
					'password' => md5($data['Register']['password']),
					'confirmPassword' => md5($data['Register']['confirmPassword']),
					'fName' => $data['Register']['fName'],
					'lName' => $data['Register']['lName'],
					'iecode' => $data['Register']['iecode'],
					'gst' => $data['Register']['gst'],
					'latchOn' => $data['Register']['latchOn'],
					'address' => $data['Register']['address'],
					'city' => $data['Register']['city'],
					'stateName' => $data['Register']['stateName'],
					'country' => $data['Register']['country'],
					'zip' => $data['Register']['zip'],
					'create_date' => date('Y-m-d'),
					'update_date' => date('Y-m-d'),
						);
			
					$returndata = Yii::$app->db->createCommand()->insert('register', $formdata)->execute();
					echo Yii::$app->db->createCommand()->getRawSql(); die;
					foreach($data['Register']['cat_id'] as $category){
						$fdata = array(
							'user_id' => $returndata['id'],
							'cat_id' => $category,
						);
						$returndata = Yii::$app->db->createCommand()->insert('user_category', $fdata)->execute();
					//print_r($returndata);die;
					}
					
					$bdata = array(
							'user_id' => $returndata['id'],
							'brandName' => $data['Register']['brandName'],
							'logo' => $path,
							'catalouge' => $path1,
						);
					$returndata = Yii::$app->db->createCommand()->insert('brand', $bdata)->execute();
					
					$sdata = array(
							'user_id' => $returndata['id'],
							'stateName' => $data['Register']['stateName'],
						);
					$returndata = Yii::$app->db->createCommand()->insert('state', $sdata)->execute();
					
					$sdata = array(
							'user_id' => $returndata['id'],
							'country' => $data['Register']['country'],
						);
					$returndata = Yii::$app->db->createCommand()->insert('country', $cdata)->execute();
					return $returndata;
				}
		}
}