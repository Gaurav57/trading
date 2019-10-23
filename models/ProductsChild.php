<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "products_child".
 *
 * @property int $child_id
 * @property string $child_name
 * @property int $menu_id
 *
 * @property ProductsMenu $menu
 */
class ProductsChild extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'products_child';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['child_name', 'menu_id'], 'required'],
            [['menu_id'], 'integer'],
            [['child_name'], 'string', 'max' => 255],
            [['menu_id'], 'exist', 'skipOnError' => true, 'targetClass' => ProductsMenu::className(), 'targetAttribute' => ['menu_id' => 'menu_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'child_id' => 'Child ID',
            'child_name' => 'Child Name',
            'menu_id' => 'Menu ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMenu()
    {
        return $this->hasOne(ProductsMenu::className(), ['menu_id' => 'menu_id']);
    }
}
