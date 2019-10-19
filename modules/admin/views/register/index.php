<?php

use yii\widgets\ActiveForm;
use yii\helpers\Html;
use yii\helpers\Url;

?>
<head>

	<link href="https://fonts.googleapis.com/css?family=Poppins:400,600&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?php echo Url::base(true);?>/admin/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo Url::base(true);?>/admin/css/register.css">
	<link rel="stylesheet" type="text/css" href="<?php echo Url::base(true);?>/admin/js/register.js">
	<script> src="<?php echo Url::base(true);?>/admin/js/bootstrap.min.js"</script>
</head>

<header class="header">
	<?php if(yii::$app->session->hasFlash('message')):?>
	<div class="alert alert-dismissible alert-success">
		<button type="button" class="close" data-dismiss="alert">&times;</button>
		<?php echo yii::$app->session->getFlash('message'); ?>
	</div>
	
<?php endif; ?>

  <h1 class="header__title">REGISTRATION</h1>
</header>
<div class="content">
  <div class="content__inner">
    <div class="container overflow-hidden">
      <div class="multisteps-form">
        <div class="row">
          <div class="col-12 col-lg-8 ml-auto mr-auto mb-4">
            <div class="multisteps-form__progress">
              <?= Html::submitButton('User Details', ['class' => 'multisteps-form__progress-btn js-active']); ?><!--<button class="multisteps-form__progress-btn js-active" type="button" title="User Info">User Info</button>-->
              <?= Html::submitButton('Personal Details', ['class' => 'multisteps-form__progress-btn']); ?><!--<button class="multisteps-form__progress-btn" type="button" title="Address">Personal Details</button>-->
              <?= Html::submitButton('Business Details', ['class' => 'multisteps-form__progress-btn']); ?><!--<button class="multisteps-form__progress-btn" type="button" title="Order Info">Business Details</button>-->
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12 col-lg-8 m-auto">
            <?php $form = ActiveForm::begin(['class' => 'multisteps-form__form']); ?><!--<form class="multisteps-form__form">-->
              <div class="multisteps-form__panel shadow p-4 rounded bg-white js-active" data-animation="scaleIn">
                <h3 class="multisteps-form__title">Your User Info</h3>
                <div class="multisteps-form__content">
                  <div class="form-row mt-4">
                    <div class="col-12 col-sm-6">
                      <?= $form->field($model, 'username')->textInput(['placeholder' => 'Username']); ?><!--<input class="multisteps-form__input form-control" type="text" placeholder="Username"/>-->
                    </div>
                    <div class="col-12 col-sm-6 mt-4 mt-sm-0">
						<?= $form->field($model, 'contact')->textInput(['placeholder' => 'Contact']); ?><!--<input class="multisteps-form__input form-control" type="text" placeholder="Email"/>-->
                    </div>
                  </div>
                  <div class="form-row mt-4">
                    <div class="col-12 col-sm-6">
						<?= $form->field($model, 'email')->Input('email', ['placeholder' => 'Email']); ?><!--<input class="multisteps-form__input form-control" type="password" placeholder="Password"/>-->
                    </div>
                    <div class="col-12 col-sm-6 mt-4 mt-sm-0">
						<?= $form->field($model, 'password')->passwordInput(['placeholder' => 'Password']); ?><!--<input class="multisteps-form__input form-control" type="password" placeholder="Confirm Password"/>-->
                    </div>
                  </div>
				  <div class="form-row mt-4">
					<?php $category = ['Raw Material' => 'Raw Material', 'Manufacturer' => 'Manufacturer', 'Distributer' => 'Distributer', 'Dealer' => 'Dealer', 'Retailer'=> 'Retailer' ] ?>
					<?= $form->field($model, 'category')->dropDownList($category, ['prompt' => 'Select']); ?>
				  </div>
                  <div class="button-row d-flex mt-4">
					<span><?= Html::submitButton('Next', ['class' => 'btn btn-primary ml-auto js-btn-next']); ?></span><!--<button class="btn btn-primary ml-auto js-btn-next" type="button" title="Next">Next</button>-->
                  </div>
                </div>
              </div>
			<?php $form = ActiveForm::end(); ?><!--</form>-->
          </div>
        </div>
      </div>
    </div>
  </div>
</div>