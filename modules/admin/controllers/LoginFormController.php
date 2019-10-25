<?php

namespace app\modules\admin\controllers;

use Yii;
use app\models\User;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\Session;
use app\modules\admin\models\AdminLogin;
use app\modules\admin\models\Forgot;
use app\modules\admin\models\Change;


    /**
     * Lists all UserLogin models.
     * @return mixed
     */
    class LoginFormController extends Controller
    {

    public function actionIndex() 
{
        $model = new AdminLogin();
        $postdata = Yii::$app->request->post(); 
    if($model->load($postdata)){
        $email = $postdata['AdminLogin']['email'];
        $password = $postdata['AdminLogin']['password'];
        
        $query = new \yii\db\Query();
        $data = $query->select('email,password')
        ->from('admin_login')
        ->andwhere(['email' => $email])
        ->andwhere(['password' => $password])
        ->one();
              //  echo $query->createCommand()->getRawSql();die;
       
        if(!empty($data)){
            Yii::$app->session["admin"] = $data['email'];
			 
            Yii::$app->session["isGuest"] = 'No';
			return $this->redirect(['./dashboard']);
          
     }
     else{
        //echo "invalid";
     }
    }
        $this->layout = false;
        return $this->render('index',['model' => $model]);
       
    }

    public function actionForgot()
    {
        $model = new Forgot();
        $postdata = Yii::$app->request->post();
        //print_r($postdata); die; 
    if($model->load($postdata)){
        //print_r($postdata); die;
        $email = $postdata['Forgot']['email'];
      
        $query = new \yii\db\Query();
        $data = $query->select('email')
        ->from('admin_login')
        ->andwhere(['email' => $email])
         ->one();
              //  echo $query->createCommand()->getRawSql();die;
         
        if(!empty($data)){
            Yii::$app->session["admin"] = $data['email'];
            //
            Yii::$app->session["isGuest"] = 'No';
            $this->redirect(['login-form/change']);
         }
        else{
        //echo "invalid";
        }
    }

        $this->layout = false;
        return $this->render('forgot', ['model' => $model]);
}

     public function actionChange()

      {

            $model = new Change();
          
            $returndata = Yii::$app->request->post();
		print_r($returndata);die;
            if($model->load($returndata) && $model->save()) {
				return ;
            }
            
            $this->layout = false;
            return $this->render('change', ['model' => $model]);
        }
		 public function actionLogout()
    {
       
        Yii::$app->session->destroy();
        return $this->redirect(['./login-form']);
    }
}