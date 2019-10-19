<?php

namespace app\modules\admin\models;

use app\modules\admin\models\Importexcel;
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
	
	 public function imexcel($rowData) {
        
        
        $parameters=array(
                    'product_id' => $rowData[0][0],
                    'name_product' =>$rowData[0][1],
                    'price' => $rowData[0][1],	
                    'image' =>$rowData[0][2],
                    
					
            );
      
        $returnval = Yii::$app->db->createCommand()->insert('add_product', $parameters)->execute();
        return "Sucesss";
    }
}
