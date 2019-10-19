<?php

namespace app\modules\admin\controllers;

use yii; 
use app\modules\admin\models\RewardPoint;

class RewardController extends \yii\web\Controller
{
    public function actionIndex()
    {
		 $model=RewardPoint::find()->all();
        return $this->render('index',['model'=>$model]);
    }
	public function actionReward()
	{
		$model=new RewardPoint();
		
		$formdata=Yii::$app->request->post();
      if($model->load($formdata))	
	  {
		  if($model->save())
		  {
				Yii::$app->getSession->setFlash('message','product inserted'); 
          return $this->redirect(['../admin/reward']);			
		  }
		  else
		  {
			  Yii::getSession()->setFlash('message','product insertion failed'); 
		  }
	  }
		return $this->render('addreward',['model'=>$model]);
	}
	public function actionView($id)
    {
		$post=RewardPoint::findOne($id);
		return $this->render('view',['post'=>$post]);
    }
	public function actionUpdate($id)
	{
		$post=RewardPoint::findOne($id);
		//print_r($post->category_id); die;
		if($post->load(Yii::$app->request->post()) && $post->save())
		{
			Yii::$app->session->setFlash('success','product reward updated'); 
			return $this->redirect(['admin/reward','id'=>$post->reward_id]);
		}
		else
		{
			return $this->render('update',['post'=>$post]);
		}
		
	}
	public function actionDelete($id)
	{
		$post=RewardPoint::findOne($id)->delete();
		if($post)
		{
			Yii::$app->session->setFlash('success','product reward deleted'); 
			return $this->redirect(['admin/reward']);
		}
	}



}
