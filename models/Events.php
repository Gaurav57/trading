<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "events".
 *
 * @property int $event_id
 * @property string $title
 * @property string $image
 * @property string $discription
 */
class Events extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'events';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'image', 'discription'], 'required'],
            [['image'], 'string'],
            [['title'], 'string', 'max' => 20],
            [['discription'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'event_id' => 'Event ID',
            'title' => 'Title',
            'image' => 'Image',
            'discription' => 'Discription',
        ];
    }
}
