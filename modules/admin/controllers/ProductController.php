<?php

namespace app\modules\admin\controllers;

use yii;
use yii\web\Session; 
use app\modules\admin\models\AddProduct;
use app\modules\admin\models\Importexcel;
use app\modules\admin\models\brand;
use yii\web\UploadedFile;

class ProductController extends \yii\web\Controller
{
/* 	public function beforeAction($action)
{
    if (parent::beforeAction($action)) {
return $this->redirect(['./login-form']);	
        return true;
    } else {
        return false;
    }
}
 */  
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
		/*   $model->imageFile = UploadedFile::getInstances($model, 'imageFile');
		 
		  $path = [];
		  foreach($model->imageFile as $images){
			$path[] = $model->upload($images);	
			ob_start();
			$images = '';
		  }
		  
		  $model->casestudies = UploadedFile::getInstances($model, 'casestudies');
		  $pathstudies = $model->upload($model->casestudies);
		  
		  $model->specsheet = UploadedFile::getInstances($model, 'specsheet');
		  $pathsheet= $model->upload($model->casesheet);
		  
		  $model->video = UploadedFile::getInstances($model, 'video');
		  $pathvideo= $model->upload($model->video);
		 */  
	
$message=$model->savedata($formdata,$lastID);
		
		  if($message == 'Success')
		  {
				Yii::$app->session->setFlash('message','<div class="alert alert-dismissible alert-success">category inserted</div>'); 
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
		$model=AddProduct::findOne($id);
			$formdata = Yii::$app->request->post();
		
		if($model->load($formdata) && $model->save(false))
		{
		//echo '<pre>';
		//print_r($post);die;
			Yii::$app->session->setFlash('success','<div class="alert alert-dismissible alert-success">category updated</div>'); 
			return $this->redirect(['./product']);
		}
		else
		{
			return $this->render('update',['model'=>$model]);
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
