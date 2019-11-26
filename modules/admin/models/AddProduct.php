<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "add_product".
 *
 * @property int $product_id
 * @property string $name_product
 * @property int $price_distributer
 * @property int $sp_distributer
 * @property int $loyality_pt_distributer
 * @property int $moq_distributer
 * @property int $price_dealer
 * @property int $sp_dealer
 * @property int $loyality_pt_dealer
 * @property int $moq_dealer
 * @property int $price_reseller
 * @property int $sp_reseller
 * @property int $loyality_pt_reseller
 * @property int $moq_reseller
 * @property int $price_user
 * @property string $description
 * @property string $image
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
	 public $brandName;
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
            [['name_product', 'price_distributer', 'sp_distributer', 'loyality_pt_distributer', 'moq_distributer', 'price_dealer', 'sp_dealer', 'loyality_pt_dealer', 'moq_dealer', 'price_reseller', 'sp_reseller', 'loyality_pt_reseller', 'moq_reseller', 'price_user','sp_price','loyality_point', 'description'], 'required'],
            [['price_distributer', 'sp_distributer', 'loyality_pt_distributer', 'moq_distributer', 'price_dealer', 'sp_dealer', 'loyality_pt_dealer', 'moq_dealer', 'price_reseller', 'sp_reseller', 'loyality_pt_reseller', 'moq_reseller', 'price_user'], 'integer'],
            [['description'], 'string'],
			[['imageFile'], 'file','extensions' => 'jpg, png, jpeg','skipOnEmpty' => false],
			[['casestudies'], 'file','extensions' => 'pdf','skipOnEmpty' => true],
			[['specsheet'], 'file','extensions' => 'pdf','skipOnEmpty' => true],
			[['video'], 'file','skipOnEmpty' => true],
            [['name_product'], 'string', 'max' => 50],
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
            'price_distributer' => 'Price Distributer',
            'sp_distributer' => 'Special Price Distributer',
            'loyality_pt_distributer' => 'Loyality Point Distributer',
            'moq_distributer' => 'MOQ Distributer',
            'price_dealer' => 'Price Dealer',
            'sp_dealer' => 'Special Price Dealer',
            'loyality_pt_dealer' => 'Loyality Point Dealer',
            'moq_dealer' => 'MOQ Dealer',
            'price_reseller' => 'Price Reseller',
            'sp_reseller' => 'Special Price Reseller',
            'loyality_pt_reseller' => 'Loyality Point Reseller',
            'moq_reseller' => 'MOQ Reseller',
            'price_user' => 'Price User',
			'sp_price' => 'Special Price',
            'description' => 'Description',
            'image' => 'Image',
			'casestudies' => 'Case-Studies',
			'specsheet' => 'Spec-	sheet',
            'video' => 'Upload Video',
            'warranty' => 'Warranty Support',
            'ref_client' => 'Reference Client',				
            'cat_id' => 'Cat ID',
            'latest_featured' => 'Latest Featured',
            'new_arrival' => 'New Arrival',
            'best_seller' => 'Best Seller',
            'new' => 'New',
            'offers' => 'Offers',
            'trends' => 'Trends',
        ];
    }
	 public function upload() {
         if ($this->validate()) {
			 
			   //for image file
               $this->imageFile->saveAs('uploads/' . $this->imageFile->baseName . '.' .
               $this->imageFile->extension);
			   
              //for specsheet file
			   $this->specsheet->saveAs('uploads/' . $this->specsheet->baseName . '.' .
               $this->specsheet->extension);
			   
			   //for casestudies file
			   $this->casestudies->saveAs('uploads/' . $this->casestudies->baseName . '.' .
               $this->casestudies->extension);
			   
			   //for video file
			   $this->video->saveAs('uploads/' . $this->video->baseName . '.' .
               $this->video->extension);
			   
            return true;
         } else {
            return false;
         }
      }
	
	
	  
}
