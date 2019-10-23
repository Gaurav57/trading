<?php

namespace app\modules\admin\controllers;

use yii;
use yii\web\Session; 
use app\modules\admin\models\AddProduct;
use app\modules\admin\models\Importexcel;
use yii\web\UploadedFile;

class ProductController extends \yii\web\Controller
{
    public function actionIndex()
    {
		$model=AddProduct::find()->all();
		//print_r($model);die;
        return $this->render('index',['model'=>$model]);
    }
	
	//insert data
	public function actionProduct()
	{
		$model=new AddProduct();
		$formdata=Yii::$app->request->post();
		
      if(isset($formdata) && $model->load($formdata))	
	  {
		  $session = Yii::$app->session;
			$lastID = $session['user_id'];
		  $model->imageFile = UploadedFile::getInstance($model, 'imageFile');
		  $path = $model->upload();
			$message = $model->savedata($formdata, $path, $lastID);
		  if($message == 'Success')
		  {
				Yii::$app->session->setFlash('message','product inserted'); 
          return $this->redirect(['./product']);			
		  }
		  else
		  {
			  Yii::getSession()->setFlash('message','product insertion failed'); 
		  }
	  }
		return $this->render('addproduct',['model'=>$model]);
	}
	public function actionView($id)
	{
		$post=AddProduct::findOne($id);
		return $this->render('view',['post'=>$post]);
	}
	public function actionUpdate($id)
	{
		$post=AddProduct::findOne($id);
		 //$post->scenario = 'update-photo-upload';
		 
		if($post->load(Yii::$app->request->post()) && $post->save())
		{
			
			Yii::$app->session->setFlash('success','<div class="alert alert-dismissible alert-success">category updated</div>'); 
			return $this->redirect(['./product']);
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
			Yii::$app->session->setFlash('success','<div class="alert alert-dismissible alert-success">category deleted</div>'); 
			return $this->redirect(['./product']);
		}
	}
	public function actionUpload()
	{
		  $model = new Importexcel();

        if (Yii::$app->request->isPost) {
			
            $model->importFile = UploadedFile::getInstance($model, 'importFile');
				
            if ($model->upload()) {
			$objPHPExcel = new \PHPExcel();
           $inputFile='uploads/'.$model ->importFile->name;
          try{
			   $inputFileType=\PHPExcel_IOFactory::identify($inputFile);
			   $objReader=\PHPExcel_IOFactory::createReader($inputFileType);
			   $objPHPExcel=$objReader->load($inputFile);
		  }		
		  catch(Exception $e)
		  {
			  die('	Error');
		  }
		  
		  $sheet=$objPHPExcel->getSheet(0);
		  $highestRow=$sheet->getHighestRow();
          $highestColumn=$sheet->getHighestColumn();
		  for($row=1;$row<=$highestRow;$row++)
		  {
			  $rowData=$sheet->rangeToarray('A'.$row.':'.$highestColumn.$row,NULL,TRUE,FALSE);
           if($row==1) {
	        continue;		   
		   }	
		   //print_r($rowData);die;
				$pr = new AddProduct();
				
          			 //print_r($pr);die;
					$mod = $pr->imexcel($rowData); 
				//print_r($mod);die;
			  
			}
		  die('yes');
            }
        }

        return $this->render('uploadfile', ['model' => $model]);

	}
	


}
