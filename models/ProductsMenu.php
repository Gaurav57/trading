<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "products_menu".
 *
 * @property int $menu_id
 * @property string $menu_name
 *
 * @property ProductsChild[] $productsChildren
 */
class ProductsMenu extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'products_menu';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['menu_name'], 'required'],
            [['menu_name'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'menu_id' => 'Menu ID',
            'menu_name' => 'Menu Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProductsChildren()
    {
        return $this->hasMany(ProductsChild::className(), ['menu_id' => 'menu_id']);
    }
}
