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
            [['name_product', 'price', 'code','description'], 'required'],
            [['price'], 'integer'],
            [['name_product', 'code'], 'string', 'max' => 255],
			[['imageFile'], 'file','extensions' => 'png, jpg, jpeg, gif','skipOnEmpty' => true, 'on' => 'update-photo-upload'],

			
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
			'imageFile' => 'Logo',
			'description'=>'Description',
        ];
    }
	
	 public function imexcel($rowData) {
        
        
        $parameters=array(
                    'product_id' => $rowData[0][0],
                    'name_product' =>$rowData[0][1],
                    'price' => $rowData[0][1],	
                    'code' =>$rowData[0][2],
                    
					
            );
      
        $returnval = Yii::$app->db->createCommand()->insert('add_product', $parameters)->execute();
        return "Sucesss";
    }
	public function upload(){
		
		if ($this->validate()) {
            $this->imageFile->saveAs('images/' . $this->imageFile->baseName . '.' . $this->imageFile->extension);
            return $this->imageFile->baseName . '.' . $this->imageFile->extension;
        } else {
            return '';
        }
	}
	public function savedata($data, $path, $lastID)
	{
			
					$formdata = array(
					//'user_id' => $lastID,
					'name_product' => $data['AddProduct']['name_product'],
					'price' => $data['AddProduct']['price'],
					'code' => $data['AddProduct']['code'],
					'imageFile' => $path,
					'description' => $data['AddProduct']['description'],
				
						);
				
				$data = Yii::$app->db->createCommand()->insert('add_product', $formdata)->execute();
				return "Success";
				}
}
