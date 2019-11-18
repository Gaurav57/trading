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
 * @property string $catalogue
 *
 * @property Register $user
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
            [['user_id', 'brandName', 'logo', 'catalogue'], 'required'],
            [['user_id'], 'integer'],
            [['brandName', 'logo', 'catalogue'], 'string', 'max' => 200],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => Register::className(), 'targetAttribute' => ['user_id' => 'user_id']],
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
            'catalogue' => 'Catalogue',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser(){
        return $this->hasOne(Register::className(), ['user_id' => 'user_id']);
    }
	
	public function upload(){
		
		
            $this->logo->saveAs('brands/' . $this->logo->baseName . '.' . $this->logo->extension);
            return $this->logo->baseName . '.' . $this->logo->extension;
       
	}
	
	public function savedata($data, $path)
	{
			
		$formdata = array(
			'brandName' => $data['Brand']['brandName'],
			'logo' => $path,
		);
		
		$data = Yii::$app->db->createCommand()->insert('brand', $formdata)->execute();
		return "Success";
	}
}
