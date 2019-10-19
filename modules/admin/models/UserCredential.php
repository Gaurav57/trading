<?php

namespace app\modules\admin\models;

use Yii;

class UserCredential extends \yii\db\ActiveRecord
{

    public function rules()
    {
        return [
            [['category', 'username', 'contact', 'email', 'password'], 'required'],
			['email', 'email'],
			/*[['contact'], 'match', 'pattern' => '/((\+[0-9]{6})|0)[-]?[0-9]{7}/'],*/
        ];
    }

    /*
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'user_id' => 'User ID',
            'category' => 'Category',
            'username' => 'Username',
            'contact' => 'Contact',
            'email' => 'Email',
            'password' => 'Password',
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
					'category' => $data['UserCredential']['category'],
					'username' => $data['UserCredential']['username'],
					'contact' => $data['UserCredential']['contact'],
					'email' => $data['UserCredential']['email'],
					'password' => md5($data['UserCredential']['password']),
					'create_date' => date('Y-m-d'),
					'update_date' => date('Y-m-d'),
						);
	
					$returndata = Yii::$app->db->createCommand()->insert('user_credential', $formdata)->execute();
					return $returndata;
				}
		}
}