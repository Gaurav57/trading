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
              <?= Html::submitButton('Business Details', ['class' => 'multisteps-form__progress-btn js-active']); ?><!--<button class="multisteps-form__progress-btn" type="button" title="Order Info">Business Details</button>-->
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12 col-lg-8 m-auto">
            <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data'], 'class' => 'multisteps-form__form']); ?><!--<form class="multisteps-form__form">-->
              <div class="multisteps-form__panel shadow p-4 rounded bg-white js-active" data-animation="scaleIn">
                <h3 class="multisteps-form__title">Your Business Details</h3>
                <div class="multisteps-form__content">
                  <div class="form-row mt-4">
                    <div class="col-12 col-sm-10">
						<?= $form->field($model, 'organisation_name')->textInput(['class'=>'form-control', 'placeholder' => 'Organisation Name']); ?><!--<input type="text" class="form-control" name="org_name" placeholder="Organisation Name">-->
                    </div>
                  </div>
                  <div class="form-row mt-4">
                    <div class="col-12 col-sm-10">
						<?= $form->field($model, 'GST')->textInput(['class'=>'form-control', 'placeholder' => 'GST Number']); ?><!--<input type="text" class="form-control" name="gst" placeholder="GST Number">-->
                    </div>
				  </div>
                  <div class="form-row mt-4">
                    <div class="col-12 col-sm-10">
						<?= $form->field($model, 'IMP_EXP_CODE')->textInput(['class'=>'form-control', 'placeholder' => 'Import/Export Code']); ?><!--<input type="text" class="form-control" name="iecode" placeholder="Import/Export Code">-->
                    </div>
				  </div>	
                  <div class="form-row mt-4">
                    <div class="col-12 col-sm-10">
						<?= $form->field($model, 'brands')->textInput(['class'=>'form-control', 'placeholder' => 'Brands']); ?><!--<input type="text" class="form-control" name="brands" placeholder="Brands">-->
                    </div>
				  </div>	
                  <div class="form-row mt-4">
                    <div class="col-12 col-sm-10">
						<?= $form->field($model, 'latch_on')->textInput(['class'=>'form-control', 'placeholder' => 'Latch On']); ?><!--<input type="text" class="form-control" name="latchon" placeholder="Latch On">-->
                    </div>
				  </div>
				  <div class="form-row mt-4">
                    <div class="col-12 col-sm-10">
						<?= $form->field($model, 'imageFile')->fileInput(['class'=>'form-control', 'placeholder' => 'Logo']); ?><!--<input type="text" class="form-control" name="logo" placeholder="Upload Logo">-->
                    </div>
				  </div>
				  <div class="form-row mt-4">
                    <div class="col-12 col-sm-10">
						<?= $form->field($model, 'b_address')->textarea(['class'=>'multisteps-form__input form-control', 'placeholder' => 'Address']); ?><!--<textarea class="multisteps-form__input form-control" type="text" placeholder="Address"></textarea>-->
                    </div>
                  </div>
                  <div class="row">
                    <div class="button-row d-flex mt-4 col-12">
                      <span><?= Html::a('Prev', ['/admin/register/personal'],  ['class'=> 'btn btn-primary ml-auto js-btn-prev']); ?></span><!--<button class="btn btn-primary js-btn-prev" type="button" title="Prev">Prev</button>-->
					  <span><?= Html::submitButton('Submit', ['class'=> 'btn btn-success ml-auto']); ?></span><!--<button class="btn btn-success ml-auto" type="button" title="Send">Send</button>-->
                    </div>
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