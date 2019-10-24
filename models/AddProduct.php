<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "add_product".
 *
 * @property int $product_id
 * @property string $name_product
 * @property string $price
 * @property string $code
 * @property string $imageFile
 * @property string $description
 * @property int $cat_id
 * @property string $latest_featured
 * @property string $new_arrival
 * @property string $best_seller
 * @property string $new
 * @property string $offers
 * @property string $trends
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
            [['name_product', 'price', 'code', 'imageFile', 'description', 'cat_id', 'latest_featured', 'new_arrival', 'best_seller', 'new', 'offers', 'trends'], 'required'],
            [['description'], 'string'],
            [['cat_id'], 'integer'],
            [['name_product', 'imageFile', 'latest_featured', 'new_arrival', 'best_seller', 'new', 'offers', 'trends'], 'string', 'max' => 50],
            [['price'], 'string', 'max' => 10],
            [['code'], 'string', 'max' => 255],
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
            'code' => 'Code',
            'imageFile' => 'Image File',
            'description' => 'Description',
            'cat_id' => 'Cat ID',
            'latest_featured' => 'Latest Featured',
            'new_arrival' => 'New Arrival',
            'best_seller' => 'Best Seller',
            'new' => 'New',
            'offers' => 'Offers',
            'trends' => 'Trends',
        ];
    }
}
