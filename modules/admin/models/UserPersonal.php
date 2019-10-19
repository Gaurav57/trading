<?php

namespace app\modules\admin\models;

use Yii;

class UserPersonal extends \yii\db\ActiveRecord
{
	
    public function rules()
    {
        return [
            [['f_name', 'l_name', 'p_address'], 'required'],        
            [['f_name', 'l_name'], 'string', 'max' => 20],
            [['p_address'], 'string', 'max' => 255],
        ];
    }
	
    public function attributeLabels()
    {
        return [
            'f_name' => 'First Name',
            'l_name' => 'Last Name',
            'p_address' => 'Address',
            'create_date' => 'Create Date',
            'update_date' => 'Update Date',
        ];
    }
	
	public function savedata($data ,$lastID){
		
				$formdata = array(
				'user_id' => $lastID,
				'f_name' => $data['UserPersonal']['f_name'],
				'l_name' => $data['UserPersonal']['l_name'],
				'p_address' => $data['UserPersonal']['p_address'],
				'create_date' => date('Y-m-d'),
				'update_date' => date('Y-m-d'),
					);
					
				$data = Yii::$app->db->createCommand()->insert('user_personal', $formdata)->execute();
				return"Success";
			}
}
