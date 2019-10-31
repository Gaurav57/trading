<?php

namespace app\modules\admin\models;

use Yii;

class Register extends \yii\db\ActiveRecord
{
	public $type;
	public $category_name;
	public $password_repeat;
	public $logo;
	public $catalouge;
	public $brandName;
	public $country;
	public $checkBox;
	public $stateName;
	public $country_id;
	public $cat_id;
	public $vendor;
	public $returnPolicy;
	public $servicePolicy;
	public $webPolicy;
	public $installerPolicy;
	public $loyaltyPoint;
	
    public function rules()
    {
        return [
            [['type', 'orgName', 'contact', 'email', 'password', 'fName', 'lName',
				'iecode', 'iPartner', 'address', 'city', 'stateName', 'country', 'zip',
				'cat_id', 'vendor', 'returnPolicy', 'servicePolicy', 'webPolicy', 'installerPolicy', 'loyaltyPoint'],'required'
			],
			['email', 'email'],
			[['logo'], 'file', 'skipOnEmpty' => true, 'extensions' => 'jpg, jpeg, png', 'maxFiles' => 10],
			[['catalouge'], 'file', 'skipOnEmpty' => true, 'extensions' => 'jpg, jpeg, png', 'maxFiles' => 10],
			['password_repeat', 'compare', 'compareAttribute'=>'password', 'skipOnEmpty' => false, 'message'=>"Both password should be same!"],
        ];
    }

    public function attributeLabels()
    {
        return [
            'user_id' => 'User ID',
			'type' => 'Register As',
			'orgName' => 'Organisation',
            'contact' => 'Contact',
            'email' => 'Email',
            'password' => 'Password',
            'password_repeat' => 'Confirm Password',
			'fName' => 'First Name',
			'lName' => 'Last Name',
			'iecode' => 'Import/Export Code',
			'gst' => 'GST/VAT',
			'brandName' => 'Brands',
			'latchOn' => 'Latch On',
			'catalouge' => 'Catalouge',
			'address' => 'Address',
			'city' => 'City',
			'stateName' => 'State',
			'country' => 'Country',
			'zip' => 'Zip',
			'cat_id' => 'Category',
			'iPartner' => 'Installation Partner',
			'vendor' => 'Accept Vendor Policy',
			'returnPolicy' => 'Accept Return Policy',
			'servicePolicy' => 'Accept Service Policy',
			'webPolicy' => 'Accept Web Site Service Policy',
			'installerPolicy' => 'Accept Installer Policy',
			'loyaltyPoint' => 'Accept Loyalty Point Redemption',
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
					'registerAs' => $data['Register']['type'],
					'orgName' => $data['Register']['orgName'],
					'contact' => $data['Register']['contact'],
					'email' => $data['Register']['email'],
					'password' => md5($data['Register']['password']),
					'fName' => $data['Register']['fName'],
					'lName' => $data['Register']['lName'],
					'gst' => $data['Register']['gst'],
					'iecode' => $data['Register']['iecode'],
					'brandName' => $data['Register']['brandName'],
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
						$returndata = Yii::$app->db->createCommand()->insert('product_category', $fdata)->execute();
					//print_r($returndata);die;
					}
					
					$rdata = array(
							'user_id' => $returndata['id'],
							'type' => $data['Register']['registerAs'],
						);
					$returndata = Yii::$app->db->createCommand()->insert('register_type', $rdata)->execute();
					/*	
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
					$returndata = Yii::$app->db->createCommand()->insert('country', $cdata)->execute();*/
					return $returndata;
				}
		}
}