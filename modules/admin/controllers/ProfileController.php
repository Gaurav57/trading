<?php

namespace app\modules\admin\controllers;
use app\modules\admin\models\Register;

class ProfileController extends \yii\web\Controller
{
    public function actionIndex()
    { 
	
		 $model=Register::find()->all();
		return $this->render('index', ['model' => $model]);
    }
}