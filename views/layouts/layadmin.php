<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use app\assets\DashboardAsset;

DashboardAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Online Trading </title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <?= Html::csrfMetaTags() ?>
<title><?= Html::encode($this->title) ?></title>
 <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

  <nav class="t-header">
      <div class="t-header-brand-wrapper">
       <a href="<?php echo Yii::$app->homeUrl;?>admin/dashboard">
          <img class="logo" src="<?php echo Yii::$app->homeUrl;?>images/fliege-registered-white.png" alt="">
        </a>
      </div>
	  <div class="t-header-content-wrapper">
        <div class="t-header-content">
          <div class="log" style="margin-left:auto !important">
	  
	    <?php if(!isset(Yii::$app->session["mobile"])){ ?>
					<li class="ml-xl-3 login"><a href="<?=Yii::$app->homeUrl.'admin/login'?>"> <span><i class="fa fa-sign-out icon-4x" aria-hidden="true"></i></span>Log In</a></li>
				<?php } else {?>
					<li class="ml-xl-3 login"><a href="<?=Yii::$app->homeUrl.'admin/login/logout'?>"> <span><i class="fa fa-sign-out icon-4x" aria-hidden="true"></i></span>Logout</a></li>
				<?php } ?>
				
				 </a>
	    </div>
       </div>
      </div>
      
    </nav>
		
    
 <div class="page-body">   	
   	  <div class="sidebar">
      
	  <div class="user-profile">
          <div class="display-avatar animated-avatar">
            <img class="profile-img img-lg rounded-circle" src="<?php echo Yii::$app->homeUrl;?>admin/images/profile/male/image_7.png" alt="profile image">
          </div>
          
        </div>
         <ul class="navigation-menu">
         
		   <li>
            <a href="<?php echo Yii::$app->homeUrl;?>admin/profile">
              <span class="link-title">My Profile</span>
              <i class="mdi mdi-clipboard-outline link-icon"></i>
            </a>
          </li>
          <li>
            <a href="<?php echo Yii::$app->homeUrl;?>admin/dashboard">
              <span class="link-title">Dashboard</span>
              <i class="mdi mdi-gauge link-icon"></i>
            </a>
          </li>
		   <li>
            <a href="<?php echo Yii::$app->homeUrl;?>admin/category">
              <span class="link-title">Category</span>
              <i class="mdi mdi-clipboard-outline link-icon"></i>
            </a>
          </li>
		   <li>
            <a href="<?php echo Yii::$app->homeUrl;?>admin/product">
              <span class="link-title">Product</span>
              <i class="mdi mdi-clipboard-outline link-icon"></i>
            </a>
          </li>
		   <li>
            <a href="<?php echo Yii::$app->homeUrl;?>admin/brand">
              <span class="link-title">Brand</span>
              <i class="mdi mdi-clipboard-outline link-icon"></i>
            </a>
          </li>
		  </ul>
		
      </div>
	  
     <?= $content ?> 
  </div>
       
      </div>
 <?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>