<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "acc_register".
 *
 * @property int $id
 * @property string $email
 * @property string $mobile
 * @property string $username
 * @property string $password
 */
class AccRegister extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'acc_register';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['email', 'mobile', 'username', 'password'], 'required'],
            [['email', 'username', 'password'], 'string', 'max' => 255],
            [['mobile'], 'string', 'max' => 15],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'email' => 'Email',
            'mobile' => 'Mobile',
            'username' => 'Username',
            'password' => 'Password',
        ];
    }
}
