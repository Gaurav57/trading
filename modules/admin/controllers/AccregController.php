<?php

namespace app\modules\admin\controllers;

use yii;	
use app\modules\admin\models\AccRegister;

class AccregController extends \yii\web\Controller
{
    public function actionIndex()
    {
		$model = new \app\modules\admin\models\AccRegister();
		$postdata=Yii::$app->request->post();
	
     if ($model->load($postdata)) {
             if ($model->validate()) {
             $model->save();
			 Yii::$app->session->setFlash('success','category inserted'); 
            return $this->redirect(['../admin/login']);	
            }
			else
			{
				 Yii::$app->session->setFlash('error','category insertion failed'); 
			}				
    }
	 $this->layout = false;
    return $this->render('index', [
        'model' => $model,
    ]);
    }

}
