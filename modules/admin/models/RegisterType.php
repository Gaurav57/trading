<?php

namespace app\modules\admin\models;

use Yii;

class RegisterType extends \yii\db\ActiveRecord
{
	
    public static function tableName(){
        return 'register_type';
    }

    public function rules(){
        return [
            [['type'], 'required'],
            [['type'], 'string', 'max' => 255],
        ];
    }
	
    public function attributeLabels(){
        return [
            'user_id' => 'User ID',
            'type' => 'Type',
        ];
    }
}
