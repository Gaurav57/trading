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
              <?= Html::submitButton('Personal Details', ['class' => 'multisteps-form__progress-btn js-active']); ?><!--<button class="multisteps-form__progress-btn" type="button" title="Address">Personal Details</button>-->
              <?= Html::submitButton('Business Details', ['class' => 'multisteps-form__progress-btn']); ?><!--<button class="multisteps-form__progress-btn" type="button" title="Order Info">Business Details</button>-->
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12 col-lg-8 m-auto">
            <?php $form = ActiveForm::begin(['class' => 'multisteps-form__form']); ?><!--<form class="multisteps-form__form">-->
              <div class="multisteps-form__panel shadow p-4 rounded bg-white js-active" data-animation="scaleIn">
                <h3 class="multisteps-form__title">Your Personal Details</h3>
                <div class="multisteps-form__content">
                  <div class="form-row mt-4">
                    <div class="col-12 col-sm-10">
                <?= $form->field($model, 'f_name')->textInput(['class'=>'form-control', 'placeholder' => 'First Name']); ?><!--<input type="text" class="form-control" name="fname" placeholder="First Name">-->
                    </div>
                  </div>
                  <div class="form-row mt-4">
                    <div class="col-12 col-sm-10">
                <?= $form->field($model, 'l_name')->textInput(['class'=>'form-control', 'placeholder' => 'Last Name']); ?><!--<input type="text" class="form-control" name="lname" placeholder="Last Name">-->
                    </div>
				  </div>
				  <div class="form-row mt-4">
                    <div class="col-12 col-sm-10">
                <?= $form->field($model, 'p_address')->textarea(['class'=>'multisteps-form__input form-control', 'placeholder' => 'Address']); ?><!--<textarea class="multisteps-form__input form-control" type="text" placeholder="Address"></textarea>-->
                    </div>
                  </div>
                  <div class="button-row d-flex mt-4">
					<span><?= Html::a('Prev', ['/admin/register'],  ['class'=> 'btn btn-primary ml-auto js-btn-prev']); ?></span><!--<button class="btn btn-primary js-btn-prev" type="button" title="Prev">Prev</button>-->
                    <span><?= Html::submitButton('Next',['class' => 'btn btn-primary ml-auto js-btn-next']); ?></span><!--<button class="btn btn-primary ml-auto js-btn-next" type="button" title="Next">Next</button>-->
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