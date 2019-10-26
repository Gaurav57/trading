<?php

namespace app\controllers;

use Yii;

use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\AddProduct;
use yii\data\Pagination;
use app\models\ContactUs;
use app\models\TradingReg;
use app\models\ProductsMenu;
use app\models\ProductsChild;
use app\models\TradingLogin;

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
        $productsmenu = productsmenu::find()->all();
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],$this->view->params['productsmenu'] = $productsmenu,
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
        
        $products = AddProduct::find()->where(['new_arrival'=>'featured'])->all();
        $products3 = AddProduct::find()->where(['best_seller'=>'top20'])->all();
        $products7 = AddProduct::find()->where(['latest_featured'=>'feature'])->all();
        $products10 = AddProduct::find()->where(['trends'=>'2018'])->all();


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

              $session = Yii::$app->session;
             $session->set('user_id');


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
     public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new TradingLogin();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->render('index');
        }

        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
        //return $this->render('login');
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

        $query = AddProduct::find();
        $count = $query->count();
        $pages = new pagination (['totalCount' => $count, 'defaultPageSize' => 15]);
        $products6 = $query->offset($pages->offset)->limit($pages->limit)->all();

        return $this->render('product',
        [ 'product6' => $products6, 'pages' => $pages, ]);
    }
   
    public function actionProductdetail()
    {
        $show = $_GET['pid'];
        $detail = AddProduct::find()->where(['product_id'=>$show])->one();
        return $this->render('product-detail',['detail'=>$detail]);
    }

    public function actionSearch()
    {
        $wildcart = $_GET['search'];
        $query = AddProduct::find();
        $count = $query->count();
        $pages = new pagination (['totalCount' => $count, 'defaultPageSize' => 15]);
        $data = $query->offset($pages->offset)->limit($pages->limit)->all();
        $data = AddProduct::find()->Where(['like', 'name_product', $wildcart])->all();
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