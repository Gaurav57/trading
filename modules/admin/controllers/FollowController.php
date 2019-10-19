<?php

namespace app\modules\admin\controllers;
use app\modules\admin\models\Follow;

use yii; 


class FollowController extends \yii\web\Controller
{
    public function actionIndex()
    {
		//$model=new Follow();
		$model= Follow::find()->where(['category_name'=>'distrubutor'])->one();
		//print_r($model);die;
		return $this->render('index',['model'=>$model]);
    }
	


}
