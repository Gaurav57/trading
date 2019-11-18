<?php

namespace app\modules\admin\controllers;

use yii;
use app\modules\admin\models\AdminLogin;

class LoginController extends \yii\web\Controller
{
    public function actionIndex()
    {
	   $model = new \app\modules\admin\models\AdminLogin();
	 	$formdata=Yii::$app->request->post();
		if ($model->load($formdata)) {
		 $mobile = $formdata['AdminLogin']['mobile'];
         $password = $formdata['AdminLogin']['password'];
			
         $query = new \yii\db\Query();	
         $data = $query->select('mobile,password')
        ->from('acc_register')
        ->where(['mobile' => $mobile])
        ->andwhere(['password' => $password])
        ->one();
		   //echo '<pre>';
		  //print_r($data);die;
		if(!empty($data)){
             Yii::$app->session["mobile"] = $data['mobile'];
             Yii::$app->session["isGuest"] = 'No';
	         Yii::$app->session->setFlash('success', "User successfully login."); 
             $this->redirect(['../admin/dashboard']);
	
    }else {   
                Yii::$app->session->setFlash('error', "Invalid Credential");
                return $this->refresh();
            }
		}
	         $this->layout = false;	
			 return $this->render('index', [
            'model' => $model,
        ]);
            
	
	}
	 public function actionLogout()
    {
        unset(Yii::$app->session["mobile"]);
        Yii::$app->session["isGuest"] = true;
        Yii::$app->session->destroy();
		return $this->redirect(['../admin/login']);	
        //return $this->goHome();
    }
	
}
