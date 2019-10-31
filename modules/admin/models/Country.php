<?php

namespace app\modules\admin\models;

use Yii;

class Country extends \yii\db\ActiveRecord
{

    public static function tableName(){
        return 'country';
    }

    public function rules(){
        return [
            [['country'], 'required'],
            [['country'], 'string', 'max' => 255],
        ];
    }

    public function attributeLabels(){
        return [
            'id' => 'ID',
            'country' => 'Country',
        ];
    }
}