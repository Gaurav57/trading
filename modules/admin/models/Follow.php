<?php

namespace app\modules\admin\models;

use Yii;


class Follow extends \yii\db\ActiveRecord
{
	 public static function tableName()
    {
        return 'add_category';
    }
    
 /*  public function getRawmaterial()
  {
	$rows = (new \yii\db\Query())
    ->select(['category_name'])
    ->from('add_category')
    ->where(['category_name','distributor'])
    ->limit(10)
    ->all();
return $rows;
  } */

    
    
   
}
