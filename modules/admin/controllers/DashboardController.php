<?php

namespace app\modules\admin\controllers;

use yii;
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
	/* public function beforeAction($action)
{
    if (parent::beforeAction($action)) {
        // If you want to change it only in one or few actions, add additional check

   
return $this->redirect(['./login-form']);	
        return true;
    } else {
        return false;
    }
}
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
