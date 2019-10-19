<?php

namespace app\modules\admin\controllers;

use yii; 
use app\modules\admin\models\AddCategory;

class CategoryController extends \yii\web\Controller
{
    public function actionIndex()
    {
       $model=AddCategory::find()->all();
		//print_r($model);die;
        return $this->render('index',['model'=>$model]);
    }
	public function actionCategory()
	{
		$model=new AddCategory();
		
		$formdata=Yii::$app->request->post();
      if($model->load($formdata))	
	  {
		  if($model->save())
		  {
				Yii::$app->session->setFlash('success','category inserted'); 
			return $this->redirect(['../admin/category']);			
		  }
		  else
		  {
			  Yii::$app->session->setFlash('error','category insertion failed'); 
		  }
	  }
		return $this->render('addcategory',['model'=>$model]);
	}
	public function actionView($id)
	{
		$post=AddCategory::findOne($id);
		return $this->render('view',['post'=>$post]);
	}
	public function actionUpdate($id)
	{
		$post=AddCategory::findOne($id);
		//print_r($post->category_id); die;
		if($post->load(Yii::$app->request->post()) && $post->save(false))
		{
			Yii::$app->session->setFlash('success','category updated'); 
			return $this->redirect(['./category']);
		}
		else
		{
			return $this->render('update',['post'=>$post]);
		}
		
	}
	public function actionDelete($id)
	{
		$post=AddCategory::findOne($id)->delete();
		if($post)
		{
			Yii::$app->session->setFlash('success','category deleted'); 
			return $this->redirect(['admin/category']);
		}
	}

}
