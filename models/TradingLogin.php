<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "trading_login".
 *
 * @property int $id
 * @property string $email
 * @property string $password
 */
class TradingLogin extends \yii\db\ActiveRecord
{
    public $email;
    public $password;

    private $_user = false;
    /**
     * {@inheritdoc}
     */
    

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['email', 'password'], 'required'],
            [['email', 'password'], 'string', 'max' => 255],
            ['password','validatePassword'],
        ];
    }
public function validatePassword($attribute, $params)
    {
        if (!$this->hasErrors()) {
            $user = $this->getUser();

            if (!$user || !$user->validatePassword($this->password)) {
                $this->addError($attribute, 'Incorrect username or password.');
            }
        }
    }

    /**
     * Logs in a user using the provided username and password.
     * @return bool whether the user is logged in successfully
     */
    public function login()
    {
        if ($this->validate()) {
            return Yii::$app->user->login($this->getUser());
        }
        return false;
    }

    /**
     * Finds user by [[username]]
     *
     * @return User|null
     */
    public function getUser()
    {
        if ($this->_user === false) {
            $this->_user = TradingReg::findByEmail($this->email);
        }

        return $this->_user;
    }
}
