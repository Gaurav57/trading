<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "product".
 *
 * @property int $product_id
 * @property string $name
 * @property string $price
 * @property string $description
 * @property string $image
 * @property int $cat_id
 * @property string $latest_featured
 * @property string $new_arrival
 * @property string $best_seller
 * @property string $new
 * @property string $offers
 */
class Product extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'product';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'price', 'description', 'image', 'cat_id', 'latest_featured', 'new_arrival', 'best_seller', 'new', 'offers'], 'required'],
            [['description'], 'string'],
            [['cat_id'], 'integer'],
            [['name', 'image', 'latest_featured', 'new_arrival', 'best_seller', 'new', 'offers'], 'string', 'max' => 50],
            [['price'], 'string', 'max' => 10],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'product_id' => 'Product ID',
            'name' => 'Name',
            'price' => 'Price',
            'description' => 'Description',
            'image' => 'Image',
            'cat_id' => 'Cat ID',
            'latest_featured' => 'Latest Featured',
            'new_arrival' => 'New Arrival',
            'best_seller' => 'Best Seller',
            'new' => 'New',
            'offers' => 'Offers',
        ];
    }
    
   
}
