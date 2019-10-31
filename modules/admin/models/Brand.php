<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "brand".
 *
 * @property int $id
 * @property int $user_id
 * @property string $brandName
 * @property string $logo
 * @property string $catlog
 */
class Brand extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'brand';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'user_id', 'brandName', 'logo', 'catlog'], 'required'],
            [['id', 'user_id'], 'integer'],
            [['brandName', 'logo', 'catlog'], 'string', 'max' => 255],
            [['id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'brandName' => 'Brand Name',
            'logo' => 'Logo',
            'catlog' => 'Catlog',
        ];
    }
}
