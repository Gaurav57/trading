<?php

namespace app\modules\admin\controllers;

use Yii;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\Session;
use yii\web\Application;
use yii\web\UploadedFile;
use app\modules\admin\models\UserCredential;
use app\modules\admin\models\UserPersonal;
use app\modules\admin\models\UserBusiness;

/**
 * RegisterController implements the CRUD actions for UserCredential model.
 */
class RegisterController extends Controller
{
	
    public function actionIndex()
    {
        $model = new UserCredential();
		
		$formdata = Yii::$app->request->post();
	
		if(isset($formdata) && $model->load($formdata) && $model->validate()){
				//print_r($formdata);die;
			$message = $model->savedata($formdata);
			$lastID = Yii::$app->db->getLastInsertID();
			$session = Yii::$app->session;
			$session['user_id'] = $lastID;
		//	print_r($message); die;
			if(isset($message) && $message != ''){
				//Yii::$app->session->setFlash('message', 'Successful');
				
				return $this->redirect(['/admin/register/personal']);
			}
			else{
				Yii::$app->session->setFlash('message', $message);
				return $this->redirect(['index']);
			}
		}
		$this->layout = false;
        return $this->render('index', ['model' => $model]);
    }
	
	public function actionPersonal()
	{
		$model = new UserPersonal();
		$formdata = Yii::$app->request->post();
		$session = Yii::$app->session;
		$lastID = $session['user_id'];
		echo var_dump($lastID); 
		if(isset($lastID)){
			if(isset($formdata) && $model->load($formdata) && $model->validate()){
				
				//print_r($formdata);die;
				$message = $model->savedata($formdata, $lastID);
				if($message == 'Success'){
				//Yii::$app->session->setFlash('message', 'Successful');
				return $this->redirect(['/admin/register/business']);
				}
				else{
				Yii::$app->session->setFlash('message', 'Failed!');
				return $this->redirect(['index']);
				}
			}
		} else{
			return $this->redirect(['index']);
		}
		$this->layout = false;
        return $this->render('p_info', ['model' => $model]);
	}
	
	
	public function actionBusiness() {
		$model = new UserBusiness();
		$formdata = Yii::$app->request->post();
		$session = Yii::$app->session;
		$lastID = $session['user_id'];
		if(isset($lastID)){
			//print_r($formdata);die;
			if(isset($formdata) && $model->load($formdata)){
			
				//get the instance of the uploaded file
				$model->imageFile = UploadedFile::getInstances($model, 'imageFile');
				$path = $model->upload();
				$message = $model->savedata($formdata, $path, $lastID);
				if($message == 'Success'){
					///print_r($formdata);die;
					//Yii::$app->session->setFlash('message', 'Successful');
					return $this->redirect(['../admin/dashboard']);
				} else {
					//echo "error"; die;
					Yii::$app->session->setFlash('message', 'Failed!');
					return $this->redirect(['index']);
				}
				//echo "error1"; die;
			}
		} else {
			return $this->redirect(['index']);
		}
		$this->layout = false;
        return $this->render('b_info', ['model' => $model]);
	}
}