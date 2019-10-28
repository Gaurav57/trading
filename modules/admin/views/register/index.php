<?php

use yii\widgets\ActiveForm;
use yii\widgets\ActiveField;
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

<!--<h1 class="header__title">REGISTRATION</h1>-->
</header>
<div class="content">
  <div class="content__inner">
    <div class="container overflow-hidden">
      <div class="multisteps-form">
        <div class="row">
          <div class="col-12 col-lg-8 m-auto">
            <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data'], 'class' => 'multisteps-form__form']); ?><!--<form class="multisteps-form__form">-->
              <div class="multisteps-form__panel shadow p-4 rounded bg-white js-active" data-animation="scaleIn">
                <div class="multisteps-form__content">
				<h4 class="header__title">REGISTRATION</h4>
				<div class="form-row mt-4">
                    <div class="col-12 col-sm-12">
					<?php $registerAs = ['Raw Material' => 'Raw Material', 'Manufacturer' => 'Manufacturer', 'Distributer' => 'Distributer', 'Dealer' => 'Dealer', 'Retailer'=> 'Retailer' ] ?>
					<?= $form->field($model, 'registerAs')->dropDownList($registerAs, ['prompt' => 'Select']); ?>
				    </div>
				  </div>
                  <div class="form-row mt-4">
                    <div class="col-12 col-sm-12">
                      <?= $form->field($model, 'orgName')->textInput(['placeholder' => 'Organisation Name']); ?><!--<input class="multisteps-form__input form-control" type="text" placeholder="Username"/>-->
                    </div>
				  </div>
				  <div class="form-row mt-4">
                    <div class="col-12 col-sm-12">
						<?= $form->field($model, 'contact')->textInput(['placeholder' => 'Contact']); ?>
                    </div>
                  </div>
                  <div class="form-row mt-4">
                    <div class="col-12 col-sm-12">
						<?= $form->field($model, 'email')->Input('email', ['placeholder' => 'Email']); ?>
                    </div>
				  </div>
				  <div class="form-row mt-4">
                    <div class="col-12 col-sm-12">
						<?= $form->field($model, 'password')->passwordInput(['placeholder' => 'Password']); ?>
                    </div>
                  </div>
				  <div class="form-row mt-4">
                    <div class="col-12 col-sm-12">
						<?= $form->field($model, 'fName')->textInput(['class'=>'form-control', 'placeholder' => 'First Name']); ?>
                    </div>
                  </div>
                  <div class="form-row mt-4">
                    <div class="col-12 col-sm-12">
						<?= $form->field($model, 'lName')->textInput(['class'=>'form-control', 'placeholder' => 'Last Name']); ?>
                    </div>
				  </div>
                  <div class="form-row mt-4">
                    <div class="col-12 col-sm-4">
					<?php $gst = ['GST No' => 'GST No', 'VAT' => 'VAT', 'Other' => 'Other'] ?>
					<?= $form->field($model, 'gst')->dropDownList($gst, ['prompt' => 'Select']); ?>
                    </div>
					<div class="col-12 col-sm-8">
					<?= $form->field($model, 'gst')->textInput(['class'=>'form-control', 'placeholder' => 'GST/VAT']); ?>
                    </div>
				  </div>
                  <div class="form-row mt-4">
                    <div class="col-12 col-sm-12">
						<?= $form->field($model, 'iecode')->textInput(['class'=>'form-control', 'placeholder' => 'Import/Export Code']); ?>
                    </div>
				  </div>	
                  <div class="form-row mt-4">
                    <div class="col-12 col-sm-4">
						<?= $form->field($model, 'brandName')->textInput(['class'=>'form-control', 'placeholder' => 'Brand Name']) ?>
					</div>
                    <div class="col-12 col-sm-8">
						<?php echo $form->field($model, 'logo')->fileInput(['multiple'=> true, 'class'=>'form-control']); ?>
					</div>
				  </div>	
                  <div class="form-row mt-4">
                    <div class="col-12 col-sm-12">
						<?= $form->field($model, 'latchOn')->textInput(['class'=>'form-control', 'placeholder' => 'Latch On']); ?>
                    </div>
				  </div>
				  <div class="form-row mt-4">
                    <div class="col-12 col-sm-12">
						<?php echo $form->field($model, 'catalouge')->fileInput(['multiple'=> true, 'class'=>'form-control']); ?>
                    </div>
				  </div>	
                  <div class="form-row mt-4">
                    <div class="col-12 col-sm-12">
						<?= $form->field($model, 'street')->textInput(['class'=>'form-control', 'placeholder' => 'Street']); ?>
                    </div>
				  </div>	
                  <div class="form-row mt-4">
                    <div class="col-12 col-sm-6">
						<?= $form->field($model, 'city')->textInput(['class'=>'form-control', 'placeholder' => 'City']); ?>
                    </div>
                    <div class="col-12 col-sm-6">
					<?php $state = ['Delhi' => 'Delhi', 'Maharashtra' => 'Maharashtra'] ?>
					<?= $form->field($model, 'state')->dropDownList($state, ['prompt' => 'Select']); ?>
                    </div>
				  </div>
				  <div class="form-row mt-4">
					<div class="col-12 col-sm-6">
					<?php $country = ['China' => 'China', 'India' => 'India'] ?>
					<?= $form->field($model, 'country')->dropDownList($country, ['prompt' => 'Select']); ?>
                    </div>
					<div class="col-12 col-sm-6">
						<?= $form->field($model, 'zip')->textInput(['class'=>'form-control', 'placeholder' => 'Zip Code']); ?>
                    </div>
				  </div>
				  <div class="form-row mt-4">
                    <div class="col-12 col-sm-12">											
						<?= Html::activeCheckbox($model, 'iPartner', ['class' => 'agreement']) ?>
                    </div>
				  </div>
				  <div class="form-row mt-4">
                    <div class="col-12 col-sm-12">
						<?php echo $form->field($model, 'cat_id')->checkboxList(
								[	'Security & Surveillance' => 'Security & Surveillance',
									'Networking' => 'Networking', 'Accessories' => 'Accessories',
									'DRONES(DJI)' => 'DRONES(DJI)', 'Fire & Safety' => 'Fire & Safety',
									'Solar' => 'Solar']);?>
                    </div>
				  </div>	
                  <div class="form-row mt-4">
                    <div class="col-12 col-sm-12">
						<?= Html::activeCheckbox($model, 'agree', ['class' => 'agreement']) ?>
                    </div>
				  </div>
				
                  <div class="button-row d-flex mt-4">
					  <span><?= Html::submitButton('Submit', ['class'=> 'btn btn-success ml-auto']); ?></span>
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