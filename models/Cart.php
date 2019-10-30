<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cart".
 *
 * @property int $cart_id
 * @property int $product_id
 * @property int $user_id
 * @property int $quantity
 *
 * @property AddProduct $product
 */
class Cart extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cart';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            ['product_id','unique','message' => 'This Item Already Added To Cart'],
            [['product_id', 'user_id', 'quantity'], 'integer'],
            [['product_id'], 'exist', 'skipOnError' => true, 'targetClass' => AddProduct::className(), 'targetAttribute' => ['product_id' => 'product_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    // public function attributeLabels()
    // {
    //     return [
    //         'cart_id' => 'Cart ID',
    //         'product_id' => 'Product ID',
    //         'user_id' => 'User ID',
    //         'quantity' => 'Quantity',
    //     ];
    // }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProduct()
    {
        return $this->hasOne(AddProduct::className(), ['product_id' => 'product_id']);
    }
}
