<?php

namespace app\modules\admin\controllers;

use Yii;
use app\modules\admin\models\Brand;
use app\modules\admin\models\BrandSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
/**
 * BrandController implements the CRUD actions for Brand model.
 */
class BrandController extends Controller
{
  

    
public function actionIndex()
    {
		$model=new Brand();
			
		$model=Brand::find()->all();
		//print_r($model);die;
        return $this->render('index',['model'=>$model]);
    }
	

   

    /**
     insert Brand.
   
     */
	 	public function actionBrand()
	{
		$model=new Brand();
		
		$formdata=Yii::$app->request->post();
		//print_r($formdata);die;	
      if($model->load($formdata))	
	  {
		
		   $model->logo = UploadedFile::getInstance($model, 'logo');
		   
		  $path = $model->upload();
		   
		$message = $model->savedata($formdata, $path);
		  if($message == 'Success')
		  {
				Yii::$app->session->setFlash('message','Brand inserted'); 
          return $this->redirect(['./brand']);			
		  }
		  else
		  {
			  Yii::getSession()->setFlash('message','Brand insertion failed'); 
		  }
	  }
		return $this->render('addbrand',['model'=>$model]);
	}
	
	/**
     * Updates an existing Brand model.
    
     */
   public function actionUpdate($id)
	{
		$post=Brand::findOne($id);
		//print_r($post->category_id); die;
		if($post->load(Yii::$app->request->post()) && $post->save(false))
		{
			Yii::$app->session->setFlash('success','Brand updated'); 
			return $this->redirect(['./brand']);
		}
		else
		{
			return $this->render('update',['post'=>$post]);
		}
		
	}


  
   public function actionDelete($id)
	{
		$post=Brand::findOne($id)->delete();
		if($post)
		{
			Yii::$app->session->setFlash('success','category deleted'); 
			return $this->redirect(['./brand']);
		}
	}

   
}
