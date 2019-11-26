<?php

namespace app\modules\admin\controllers;

use yii;
use yii\db\Query;
use yii\web\Session; 
use yii\data\Pagination;
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
		
		
		 if(!isset(Yii::$app->session["mobile"])){
            $this->redirect(['../admin/login']);
			
        }

		$query = AddProduct::find();
    $countQuery = clone $query;
    $pages = new Pagination(['totalCount' => $countQuery->count(),'pageSize'=>10]);
    $models = $query->offset($pages->offset)
        ->limit($pages->limit)
        ->all();
		
       
    return $this->render('index', [
         'models' => $models,
         'pages' => $pages,
    ]);
    }
   
	
	//insert new product
		public function actionProduct()
	{
		$model=new AddProduct();
	    
		$data=Yii::$app->request->post();
		
      if(isset($data) && $model->load($data))	
	  {
		  $session = Yii::$app->session;
		  $lastID = $session['user_id'];
		    //for image File file
		   $model->imageFile = UploadedFile::getInstance($model, 'imageFile');
		  
		    //for specsheet file
		      $model->specsheet = UploadedFile::getInstance($model, 'specsheet');
			 
			 //for casestudies file
		     $model->casestudies = UploadedFile::getInstance($model, 'casestudies');
			 
			  //for video file
		     $model->video = UploadedFile::getInstance($model, 'video');
			 
      if ($model->upload() && $model->save(false)) {
     	return $this->redirect(['./product']);	
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
			//print_r($objPHPExcel->getSheet(0));
			$highestRow=$sheet->getHighestRow();
			$highestColumn=$sheet->getHighestColumn();
		  
		  
		  for($row=1;$row<=$highestRow;$row++)
		  {
			  $rowData=$sheet->rangeToarray('G'.$row.':'.$highestColumn.$row,NULL,TRUE,False);echo '<pre>';
			   print_r(count($rowData)."&nbsp&nbsp $row");
           if($row==1) {
	        continue;		   
		 		 }	
				 //echo '<pre>';
		       // print_r($rowData);die; */
			   
			   
			   
			   
			   
			   
			   
			   
			   
			   
				$product = new AddProduct();

			
		$product->name_product=$rowData[0][0];
		$product->price_distributer=$rowData[0][10];
		$product->sp_distributer = (int)$rowData[0][11];
        $product->loyality_pt_distributer=(int)$rowData[0][13];		
        $product->moq_distributer=$rowData[0][12];
		$product->price_dealer=(int)$rowData[0][14];
		$product->sp_dealer=(int)$rowData[0][15];
		$product->loyality_pt_dealer=(int)$rowData[0][17];
		$product->moq_dealer=(int)$rowData[0][16];
		$product->price_reseller=(int)$rowData[0][18];
		$product->sp_reseller=(int)$rowData[0][19];
	    $product->moq_reseller=(int)$rowData[0][20];	
		$product->loyality_pt_reseller=(int)$rowData[0][21];
		$product->price_user=(int)$rowData[0][22];
		$product->sp_price=$rowData[0][23];
	    $product->loyality_point=$rowData[0][24];
		$product->description=$rowData[0][7];
		$product->save();
		
		    //echo '<pre>';
			//  print_r($product->getErrors());die;
			}
		  die('yes');
            }
        }

        return $this->render('uploadfile', ['model' => $model]);

	}
	


}
