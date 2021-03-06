<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "admin_login".
 *
 * @property int $id
 * @property string $mobile
 * @property string $password
 */
class AdminLogin extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'admin_login';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['mobile', 'password'], 'required'],
            [['mobile', 'password'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'mobile' => 'Mobile',
            'password' => 'Password',
        ];
    }
}
