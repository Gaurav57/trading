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
class TradingReg extends \yii\db\ActiveRecord implements \yii\web\IdentityInterface 
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
            [['name', 'contact', 'email', 'password'], 'required'],
            [['contact'], 'integer'],
            [['name', 'email', 'password'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    //  public function attributeLabels()
    //  {
    //     return [
    //         'id' => 'ID',
    //         'name' => 'Name',
    //         'contact' => 'Contact',
    //         'email' => 'Email',
    //         'password' => 'Password',
    //         'category' => 'Category',
    //     ];
    // }
    public function getAuthKey()
    {
        throw new \yii\base\NotSupportedException();
    }
     public function getId()
    {
        return $this->id;
    }
    public function validateAuthKey($authKey)
    {
        throw new \yii\base\NotSupportedException();
    }
    public static function findIdentity($id)
    {
        return self::findOne($id);
    }
    public static function findIdentityByAccessToken($token, $type = null)
    {
        throw new \yii\base\NotSupportedException();
        
    }







    public static function findByEmail($email)
    {
        return self::findOne(['email' => $email]);
    }
    public function validatePassword($password)
    {
        return $this->password === $password;
    }
}
