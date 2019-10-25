<?php

namespace app\modules\admin\controllers;

use yii\web\Controller;

/**
 * Default controller for the `admin` module
 */
class DashboardController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }
	public function getId()
	{
		
		//$model= AddProduct::find()->where(['id'=>'2'])->all();
		//print_r($model);die;
	}
	
}
