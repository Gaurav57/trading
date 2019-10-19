<?php

namespace app\controllers;

use Yii;

use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\product;
use yii\data\Pagination;
use app\models\ContactUs;
use app\models\TradingReg;
class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        
        $products = product::find()->where(['new_arrival'=>'featured'])->all();
        $products3 = product::find()->where(['best_seller'=>'top20'])->all();
        $products7 = product::find()->where(['latest_featured'=>'feature'])->all();
        $products10 = product::find()->where(['trends'=>'2018'])->all();


        return $this->render('index', ['product'=>$products, 'product3'=>$products3, 'product7'=>$products7, 'product10'=>$products10]);
    }
    
	
	public function actionRegister()
	{
		$model=new RegisterForm();
		return $this->render('register',['model'=>$model]);
	}

    public function actionRegistration()
    {
        $model = new TradingReg();   
   
        // new record   
        if($model->load(Yii::$app->request->post()) && $model->save()){ 
            Yii::$app->getSession()->setFlash('success', '<div class="alert alert-success alert-dismiss">Registered Successfully</div>');

              
            return $this->redirect(['registration']);   
        }
        else
        {
                   
        return $this->render('registration', ['model' => $model]);
        }
    }

    public function actionBlog()
    {
        return $this->render('blog');
    }

    public function actionContact()
    { 
        $model = new ContactUs();   
        if($model->load(Yii::$app->request->post()) && $model->save()){   
            return $this->redirect(['contact']);   
        }             
        return $this->render('contact', ['model' => $model]);
        // return $this->render('contact');
    }

     public function actionCart()
    {
        return $this->render('cart');
    }
    
    public function actionProduct()

    {

        $query = Product::find();
        $count = $query->count();
        $pages = new pagination (['totalCount' => $count, 'defaultPageSize' => 15]);
        $products6 = $query->offset($pages->offset)->limit($pages->limit)->all();

        return $this->render('product',
        [ 'product6' => $products6, 'pages' => $pages, ]);
    }
   
    public function actionProductdetail()
    {
        $show = $_GET['pid'];
        $detail = product::find()->where(['product_id'=>$show])->one();
        return $this->render('product-detail',['detail'=>$detail]);
    }

    public function actionSearch()
    {
        $wildcart = $_GET['search'];
        $query = Product::find();
        $count = $query->count();
        $pages = new pagination (['totalCount' => $count, 'defaultPageSize' => 15]);
        $data = $query->offset($pages->offset)->limit($pages->limit)->all();
        $data = product::find()->Where(['like', 'name', $wildcart])->all();
        //print_r($data['0']->product_id);
        //echo "alert($data)";
        return $this->render('viewsearch',['data'=>$data, 'pages' => $pages]);
    }

    public function actionAdvertise()
    {
        return $this->render('advertise');
    }

    public function actionRewardpt()
    {
        return $this->render('rewardpt');
    }

    public function actionMagzine()
    {
        return $this->render('e-magzine');
    }

    public function actionFaq()
    {
        return $this->render('faq');
    }

    public function actionEvent()
    {
        return $this->render('events');
    }
    
}