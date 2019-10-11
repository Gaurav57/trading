<?php

namespace app\modules\admin\controllers;

use yii; 
use app\modules\admin\models\AddProduct;

class ProductController extends \yii\web\Controller
{
    public function actionIndex()
    {
		$model=AddProduct::find()->all();
		//print_r($model);die;
        return $this->render('index',['model'=>$model]);
    }
	public function actionProduct()
	{
		$model=new AddProduct();
		
		$formdata=Yii::$app->request->post();
      if($model->load($formdata))	
	  {
		  if($model->save())
		  {
				Yii::$app->getSession->setFlash('message','product inserted'); 
          return $this->redirect(['../admin/product']);			
		  }
		  else
		  {
			  Yii::getSession()->setFlash('message','product insertion failed'); 
		  }
	  }
		return $this->render('addcategory',['model'=>$model]);
	}
	public function actionView($id)
	{
		$post=AddProduct::findOne($id);
		return $this->render('view',['post'=>$post]);
	}
	public function actionUpdate($id)
	{
		$post=AddProduct::findOne($id);
		if($post->load(Yii::$app->request->post()) && $post->save())
		{
			Yii::$app->session->setFlash('success','category updated'); 
			return $this->redirect(['admin/product','id'=>$post->product_id]);
		}
		else
		{
			return $this->render('update',['post'=>$post]);
		}
		
	}
	public function actionDelete($id)
	{
		$post=AddProduct::findOne($id)->delete();
		if($post)
		{
			Yii::$app->session->setFlash('success','product deleted'); 
			return $this->redirect(['admin/product']);
		}
	}


}
