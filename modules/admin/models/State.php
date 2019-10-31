<?php

namespace app\modules\admin\models;

use Yii;

class State extends \yii\db\ActiveRecord
{
 
 public static function tableName(){
        return 'state';
    }

    public function rules(){
        return [
            [['stateName'], 'required'],
            [['stateName'], 'string', 'max' => 255],
        ];
    }

    public function attributeLabels(){
        return [
            'id' => 'ID',
            'stateName' => 'State Name',
        ];
    }
}