<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "trading_reg".
 *
 * @property int $id
 * @property string $name
 * @property int $contact
 * @property string $email
 * @property string $password
 * @property string $category
 */
class TradingReg extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'trading_reg';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'contact', 'email', 'password', 'category'], 'required'],
            [['contact'], 'integer'],
            [['name', 'email', 'password', 'category'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'contact' => 'Contact',
            'email' => 'Email',
            'password' => 'Password',
            'category' => 'Category',
        ];
    }
}
