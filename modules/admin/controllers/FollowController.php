<?php

namespace app\modules\admin\controllers;
use app\modules\admin\models\Follow;
use yii\web\Session;

use yii; 


class FollowController extends \yii\web\Controller
{
    public function actionIndex()
    {
		$model=new Follow();	
		$session = Yii::$app->session;
		$email = $session['email'];
		//echo "<pre>";
		//print_r ($data['email']);die;;
		if(isset($data['email']=='Manufacturer'))
		{
			   $model= Follow::find()->where(['category'=>'Manufacturer'])->all();
				return $this->render('index',['model'=>$model]);
		}
		elseif(isset($data['email']=='Distributer'))
		{
			   $model1= Follow::find()->where(['category'=>'Distributer'])->all();
				return $this->render('index',['model1'=>$model1]);
		}
		elseif(isset($data['email']=='Dealer'))
		{
			   $model2= Follow::find()->where(['category'=>'Dealer'])->all();
				return $this->render('index',['model2'=>$model2]);
		}
		elseif(isset($data['email']=='vendor'))
		{
			   $model3= Follow::find()->where(['category'=>'vendor'])->all();
				return $this->render('index',['model3'=>$model3]);
		}
		else{
		return $this->render('index',['model'=>$model]);
          }
	
	}

}
