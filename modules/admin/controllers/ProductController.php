<?php

namespace app\modules\admin\controllers;

use yii; 
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
			Yii::$app->session->setFlash('success','product deleted'); 
			return $this->redirect(['admin/product']);
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
