<?php

namespace app\modules\admin\models;

use Yii;

class UserBusiness extends \yii\db\ActiveRecord
{
	public $imageFile;
	
    public function rules() {
        return [
            [['organisation_name', 'GST', 'IMP_EXP_CODE', 'latch_on', 'brands', 'b_address'], 'required'],
            [['organisation_name', 'GST', 'IMP_EXP_CODE', 'latch_on', 'brands', 'b_address'], 'string', 'max' => 255],
			[['imageFile'], 'file', 'skipOnEmpty' => true, 'extensions' => 'jpg, jpeg, png'],
        ];
    }

    public function attributeLabels(){
        return [
            'organisation_name' => 'Organisation Name',
            'GST' => 'Gst',
            'IMP_EXP_CODE' => 'Imp Exp Code',
            'latch_on' => 'Latch On',
            'brands' => 'Brands',
            'imageFile' => 'Logo',
            'b_address' => 'Business Address',
        ];
    }
	
	public function upload(){
		
		if ($this->validate()) {
            $this->imageFile->saveAs('uploads/' . $this->imageFile->baseName . '.' . $this->imageFile->extension);
            return $this->imageFile->baseName . '.' . $this->imageFile->extension;
        } else {
            return '';
        }
	}
	
	public function savedata($data, $path, $lastID){
			
					$formdata = array(
					'user_id' => $lastID,
					'organisation_name' => $data['UserBusiness']['organisation_name'],
					'GST' => $data['UserBusiness']['GST'],
					'IMP_EXP_CODE' => $data['UserBusiness']['IMP_EXP_CODE'],
					'latch_on' => $data['UserBusiness']['latch_on'],
					'brands' => $data['UserBusiness']['brands'],
					'imageFile' => $path,
					'b_address' => $data['UserBusiness']['b_address'],
					'create_date' => date('Y-m-d'),
					'update_date' => date('Y-m-d'),
						);
				
				$data = Yii::$app->db->createCommand()->insert('user_business', $formdata)->execute();
				return "Success";
				}
}