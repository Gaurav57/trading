<?php

namespace app\modules\admin\models;
use yii\helpers\ArrayHelper;

use Yii;

/**
 * This is the model class for table "product_category".
 *
 * @property int $cat_id
 * @property string $category_name
 */
class ProductCategory extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'product_category';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['cat_id', 'category_name'], 'required'],
            [['cat_id'], 'integer'],
            [['category_name'], 'string', 'max' => 50],
            [['cat_id'], 'unique'],
			['category_name', 'each', 'rule' => [
				'exist', 'targetClass' => ProductCategory::className(), 'targetAttribute' => 'category_name']]
				];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'cat_id' => 'Cat ID',
            'category_name' => 'Category',
        ];
    }
	
	public static function getCategoryList() {
		$data = static::find()
			->select(['cat_id', 'category_name'])
			->orderBy('category_name')->asArray()->all();
		return ArrayHelper::map($data, 'cat_id', 'category_name');
	}
}