<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "importexcel".
 *
 * @property int $import_id
 * @property string $importFile
 */
class Importexcel extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'importexcel';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['importFile'], 'required'],
            
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'import_id' => 'Import ID',
            'importFile' => 'Import File',
        ];
    }
	 public function upload()
    {
        if ($this->validate()) {
            $this->importFile->saveAs('uploads/' . $this->importFile->baseName . '.' . $this->importFile->extension);
            return true;
        } else {
            return false;
        }
    }
}
