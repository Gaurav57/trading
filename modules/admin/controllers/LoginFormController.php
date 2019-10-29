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
    if($model->load($postdata) && $model->validate()){
    //print_r($model); die;
        $email = $postdata['AdminLogin']['email'];
        $password = $postdata['AdminLogin']['password'];

        
        $query = new \yii\db\Query();
        $data = $query->select('email,password')
        ->from('register')
        ->andwhere(['email' => $email])
        ->andwhere(['password' =>md5 ($password)])
        ->one();
                //echo $query->createCommand()->getRawSql();die;
        if(!empty($data)){
            Yii::$app->session["admin"] = $data['email'];
            Yii::$app->session["isGuest"] = 'No';


			return $this->redirect(['../admin/dashboard']);
          
            $this->redirect(['../admin/dashboard']);
     }
     else{

        Yii::$app->session->setFlash('success', "*invalid user/password");

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
        ->from('register')
        ->andwhere(['email' => $email])
         ->one();
              //  echo $query->createCommand()->getRawSql();die;
         
        if(!empty($data)){
            Yii::$app->session["admin_email"] = $data['email'];
            //print_r($data); die;
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
          
            $formdata = Yii::$app->request->post();
            $email = Yii::$app->session["admin_email"];
            //print_r($formdata); die;
            if(isset($formdata) && $model->load($formdata)) {
                //print_r($formdata); die;
                $message = $model->savedata($formdata, $email);
                //print_r($message); die;
                if($message == 'Success') {

                    return $this->redirect(['index']);
                }
               
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