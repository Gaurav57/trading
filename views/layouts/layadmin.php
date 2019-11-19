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
	  <div class="log">
	  
	   <span><i class="fa fa-sign-out icon-4x" aria-hidden="true"></i></span>
	  <a href="<?php echo Yii::$app->homeUrl;?>admin/dashboard">
         logout
        </a>
	 
	  </div>
	  
      <!--- <div class="t-header-content-wrapper"> 
        <div class="t-header-content">
          <button class="t-header-toggler t-header-mobile-toggler d-block d-lg-none">
            <i class="mdi mdi-menu"></i>
          </button>
          <form action="#" class="t-header-search-box">
            <div class="input-group">
              <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Search" autocomplete="off">
              <button class="btn btn-primary" type="submit"><i class="mdi mdi-arrow-right-thick"></i></button>
            </div>
          </form>
          <ul class="nav ml-auto">
            <li class="nav-item dropdown">
              <a class="nav-link" href="#" id="notificationDropdown" data-toggle="dropdown" aria-expanded="false">
                <i class="mdi mdi-bell-outline mdi-1x"></i>
              </a>
              <div class="dropdown-menu navbar-dropdown dropdown-menu-right" aria-labelledby="notificationDropdown">
                <div class="dropdown-header">
                  <h6 class="dropdown-title">Notifications</h6>
                  <p class="dropdown-title-text">You have 4 unread notification</p>
                </div>
                <div class="dropdown-body">
                  <div class="dropdown-list">
                    <div class="icon-wrapper rounded-circle bg-inverse-primary text-primary">
                      <i class="mdi mdi-alert"></i>
                    </div>
                    <div class="content-wrapper">
                      <small class="name">Storage Full</small>
                      <small class="content-text">Server storage almost full</small>
                    </div>
                  </div>
                  <div class="dropdown-list">
                    <div class="icon-wrapper rounded-circle bg-inverse-success text-success">
                      <i class="mdi mdi-cloud-upload"></i>
                    </div>
                    <div class="content-wrapper">
                      <small class="name">Upload Completed</small>
                      <small class="content-text">3 Files uploded successfully</small>
                    </div>
                  </div>
                  <div class="dropdown-list">
                    <div class="icon-wrapper rounded-circle bg-inverse-warning text-warning">
                      <i class="mdi mdi-security"></i>
                    </div>
                    <div class="content-wrapper">
                      <small class="name">Authentication Required</small>
                      <small class="content-text">Please verify your password to continue using cloud services</small>
                    </div>
                  </div>
                </div>
                <div class="dropdown-footer">
                  <a href="#">View All</a>
                </div>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link" href="#" id="messageDropdown" data-toggle="dropdown" aria-expanded="false">
                <i class="mdi mdi-message-outline mdi-1x"></i>
                <span class="notification-indicator notification-indicator-primary notification-indicator-ripple"></span>
              </a>
              <div class="dropdown-menu navbar-dropdown dropdown-menu-right" aria-labelledby="messageDropdown">
                <div class="dropdown-header">
                  <h6 class="dropdown-title">Messages</h6>
                  <p class="dropdown-title-text">You have 4 unread messages</p>
                </div>
                <div class="dropdown-body">
                  <div class="dropdown-list">
                    <div class="image-wrapper">
                      <img class="profile-img" src="<?php echo Yii::$app->homeUrl;?>admin/images/profile/male/image_1.png" alt="profile image">
                      <div class="status-indicator rounded-indicator bg-success"></div>
                    </div>
                    <div class="content-wrapper">
                      <small class="name">Clifford Gordon</small>
                      <small class="content-text">Lorem ipsum dolor sit amet.</small>
                    </div>
                  </div>
                  <div class="dropdown-list">
                    <div class="image-wrapper">
                      <img class="profile-img" src="<?php echo Yii::$app->homeUrl;?>admin/images/profile/female/image_2.png" alt="profile image">
                      <div class="status-indicator rounded-indicator bg-success"></div>
                    </div>
                    <div class="content-wrapper">
                      <small class="name">Rachel Doyle</small>
                      <small class="content-text">Lorem ipsum dolor sit amet.</small>
                    </div>
                  </div>
                  <div class="dropdown-list">
                    <div class="image-wrapper">
                      <img class="profile-img" src="<?php echo Yii::$app->homeUrl;?>admin/images/profile/male/image_3.png" alt="profile image">
                      <div class="status-indicator rounded-indicator bg-warning"></div>
                    </div>
                    <div class="content-wrapper">
                      <small class="name">Lewis Guzman</small>
                      <small class="content-text">Lorem ipsum dolor sit amet.</small>
                    </div>
                  </div>
                </div>
                <div class="dropdown-footer">
                  <a href="#">View All</a>
                </div>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link" href="#" id="appsDropdown" data-toggle="dropdown" aria-expanded="false">
                <i class="mdi mdi-apps mdi-1x"></i>
              </a>
              <div class="dropdown-menu navbar-dropdown dropdown-menu-right" aria-labelledby="appsDropdown">
                <div class="dropdown-header">
                  <h6 class="dropdown-title">Apps</h6>
                  <p class="dropdown-title-text mt-2">Authentication required for 3 apps</p>
                </div>
                <div class="dropdown-body border-top pt-0">
                  <a class="dropdown-grid">
                    <i class="grid-icon mdi mdi-jira mdi-2x"></i>
                    <span class="grid-tittle">Jira</span>
                  </a>
                  <a class="dropdown-grid">
                    <i class="grid-icon mdi mdi-trello mdi-2x"></i>
                    <span class="grid-tittle">Trello</span>
                  </a>
                  <a class="dropdown-grid">
                    <i class="grid-icon mdi mdi-artstation mdi-2x"></i>
                    <span class="grid-tittle">Artstation</span>
                  </a>
                  <a class="dropdown-grid">
                    <i class="grid-icon mdi mdi-bitbucket mdi-2x"></i>
                    <span class="grid-tittle">Bitbucket</span>
                  </a>
                </div>
                <div class="dropdown-footer">
                  <a href="#">View All</a>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>----->
    </nav>
 <div class="page-body">   	
   	  <div class="sidebar">
      
	  <div class="user-profile">
          <div class="display-avatar animated-avatar">
            <img class="profile-img img-lg rounded-circle" src="<?php echo Yii::$app->homeUrl;?>admin/images/profile/male/image_1.png" alt="profile image">
          </div>
          <div class="info-wrapper">
            <p class="user-name">Allen Clerk</p>
            <h6 class="display-income">$3,400,00</h6>
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
		  
		  <!----
          <li>
            <a href="#sample-pages" data-toggle="collapse" aria-expanded="false">
              <span class="link-title">Sample Pages</span>
              <i class="mdi mdi-flask link-icon"></i>
            </a>
            <ul class="collapse navigation-submenu" id="sample-pages">
              <li>
                <a href="pages/sample-pages/login_1.html" target="_blank">Login</a>
              </li>
              <li>
                <a href="pages/sample-pages/error_2.html" target="_blank">Error</a>
              </li>
            </ul>
          </li>
          <li>
            <a href="#ui-elements" data-toggle="collapse" aria-expanded="false">
              <span class="link-title">UI Elements</span>
              <i class="mdi mdi-bullseye link-icon"></i>
            </a>
            <ul class="collapse navigation-submenu" id="ui-elements">
              <li>
                <a href="pages/ui-components/buttons.html">Buttons</a>
              </li>
              <li>
                <a href="pages/ui-components/tables.html">Tables</a>
              </li>
              <li>
                <a href="pages/ui-components/typography.html">Typography</a>
              </li>
            </ul>
          </li>
          <li>
            <a href="pages/forms/form-elements.html">
              <span class="link-title">Forms</span>
              <i class="mdi mdi-clipboard-outline link-icon"></i>
            </a>
          </li>
          <li>
            <a href="pages/charts/chartjs.html">
              <span class="link-title">Charts</span>
              <i class="mdi mdi-chart-donut link-icon"></i>
            </a>
          </li>
          <li>
            <a href="pages/icons/material-icons.html">
              <span class="link-title">Icons</span>
              <i class="mdi mdi-flower-tulip-outline link-icon"></i>
            </a>
          </li>
          <li class="nav-category-divider">DOCS</li>
          <li>
            <a href="../docs/docs.html">
              <span class="link-title">Documentation</span>
              <i class="mdi mdi-asterisk link-icon"></i>
            </a>
          </li>
        </ul>---->
        <div class="sidebar-upgrade-banner">
        </div>
      </div>
	  
     <?= $content ?> 
  </div>
 <?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>