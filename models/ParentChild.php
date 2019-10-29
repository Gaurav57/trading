<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "parent_child".
 *
 * @property int $para_id
 * @property string $para_name
 * @property int $child_id
 *
 * @property ProductsChild $child
 */
class ParentChild extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'parent_child';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['para_name', 'child_id'], 'required'],
            [['child_id'], 'integer'],
            [['para_name'], 'string', 'max' => 255],
            [['child_id'], 'exist', 'skipOnError' => true, 'targetClass' => ProductsChild::className(), 'targetAttribute' => ['child_id' => 'child_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'para_id' => 'Para ID',
            'para_name' => 'Para Name',
            'child_id' => 'Child ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getChild()
    {
        return $this->hasOne(ProductsChild::className(), ['child_id' => 'child_id']);
    }
}
