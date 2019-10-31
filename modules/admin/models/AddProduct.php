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
            [['name_product', 'price_distributer', 'sp_distributer', 'loyality_pt_distributer', 'moq_distributer', 'price_dealer', 'sp_dealer', 'loyality_pt_dealer', 'moq_dealer', 'price_reseller', 'sp_reseller', 'loyality_pt_reseller', 'moq_reseller', 'price_user','sp_price','loyality_point', 'description','cat_id', 'latest_featured', 'new_arrival', 'best_seller', 'new', 'offers', 'trends'], 'required'],
            [['price_distributer', 'sp_distributer', 'loyality_pt_distributer', 'moq_distributer', 'price_dealer', 'sp_dealer', 'loyality_pt_dealer', 'moq_dealer', 'price_reseller', 'sp_reseller', 'loyality_pt_reseller', 'moq_reseller', 'price_user', 'cat_id'], 'integer'],
            [['description'], 'string'],
			[['imageFile'], 'file','extensions' => 'jpg, jpeg','maxFiles' => 5,'skipOnEmpty' => true],
			[['casestudies'], 'file','extensions' => 'pdf','maxFiles' => 5,'skipOnEmpty' => true],
			[['specsheet'], 'file','extensions' => 'pdf','maxFiles' => 5,'skipOnEmpty' => true],
			[['video'], 'file','extensions' => 'mp4','skipOnEmpty' => true],
            [['name_product',  'latest_featured', 'new_arrival', 'best_seller', 'new', 'offers', 'trends'], 'string', 'max' => 50],
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
/* 	public function upload($images){
        $images->saveAs('images/products/' . $images->baseName . '.' . $images->extension);
        return $images->baseName . '.' . $images->extension;
       
	}
		public function uploadcasestudies($casestudies){
			
        $casestudies->saveAs('casestudies' . $casestudies->baseName . '.' . $casestudies->extension);
        return $casestudies->baseName . '.' . $casestudies->extension;
		}
		
		public function uploadspecsheet($pathsheet){
          $pathsheet->saveAs('specsheet/' . $pathsheet->baseName . '.' . $pathsheet->extension);
            return  $pathsheet->baseName . '.'.$pathsheet->extension;
		}
		
		public function uploadvideo($pathvideo){
		
         $pathvideo->saveAs('video/' .$pathvideo->baseName . '.' . $pathvideo->extension);
            return  $pathvideo->baseName . '.' .  $pathvideo->extension;
       }

 */	public function savedata($data,$lastID)
	{
			
					$formdata = array(
					'product_id' => $lastID,
					'name_product' => $data['AddProduct']['name_product'],
					'price_distributer' => $data['AddProduct']['price_distributer'],
					'sp_distributer' => $data['AddProduct']['sp_distributer'],
					'loyality_pt_distributer' => $data['AddProduct']['loyality_pt_distributer'],
					'moq_distributer' => $data['AddProduct']['moq_distributer'],
					'price_dealer' => $data['AddProduct']['price_dealer'],
					'sp_dealer' => $data['AddProduct']['sp_dealer'],
					'loyality_pt_dealer' => $data['AddProduct']['loyality_pt_dealer'],
	                'moq_dealer' => $data['AddProduct']['moq_dealer'],				
					'price_reseller' => $data['AddProduct']['price_reseller'],
					'sp_reseller' => $data['AddProduct']['sp_reseller'],
					'loyality_pt_reseller' => $data['AddProduct']['loyality_pt_reseller'],
					'moq_reseller' => $data['AddProduct']['moq_reseller'],
					'price_user' => $data['AddProduct']['price_user'],
					'sp_price' => $data['AddProduct']['sp_price'],
					'moq_dealer' => $data['AddProduct']['moq_dealer'],
					/* 'imageFile' => $path,
					'casestudies' =>$pathstudies,
					'specsheet' =>$pathsheet,
					'video' =>$pathvideo,*/
					 'warranty' => $data['AddProduct']['warranty'],
					'ref_client' => $data['AddProduct']['ref_client'],
					'description' => $data['AddProduct']['description'],
				
					);
				
				$data = Yii::$app->db->createCommand()->insert('product', $formdata)->execute();
				return "Success";
				}
}
