<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "reward_point".
 *
 * @property int $reward_id
 * @property string $product_name
 * @property string $reward_points
 */
class RewardPoint extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'reward_point';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['product_name', 'reward_points'], 'required'],
            [['product_name', 'reward_points'], 'string', 'max' => 300],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'reward_id' => 'Reward ID',
            'product_name' => 'Product Name',
            'reward_points' => 'Reward Points',
        ];
    }
}
