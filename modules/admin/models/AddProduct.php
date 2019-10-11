<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "add_product".
 *
 * @property int $product_id
 * @property string $name_product
 * @property int $price
 * @property string $image
 */
class AddProduct extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'add_product';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name_product', 'price', 'image'], 'required'],
            [['price'], 'integer'],
            [['name_product', 'image'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'product_id' => 'Product ID',
            'name_product' => 'Name Product',
            'price' => 'Price',
            'image' => 'Image',
        ];
    }
}
