<?php

use yii\widgets\ActiveForm;
use yii\widgets\ActiveField;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use app\modules\admin\models\ProductCategory;
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
				<div class="row">
                <div class="col-mt-2" style="margin-left:20px;">
                 <h1 class="h3 mb-3 font-weight-normal" style="text-align: center; color: #ff9900;">registration</h1>
            </div>
                   <div class="col-mt-4">
                <a href=<?php echo yii::$app->homeUrl;?> class="btn btn-primary" style="color:white; margin-left:470px">Go Back</a>
                </div>
            </div>
          <div class="form-row mt-4">
                    <div class="col-12 col-sm-6">
					<?php
					$register = app\modules\admin\models\RegisterType::find()->all();
					$listData = ArrayHelper::map($register, 'user_id', 'type');
					?>
					<?= $form->field($model, 'type')->dropDownList($listData, ['prompt' => 'Select']); ?>
				    </div>
					<div class="col-12 col-sm-6">
                      <?= $form->field($model, 'orgName')->textInput(['placeholder' => 'Organisation Name']); ?><!--<input class="multisteps-form__input form-control" type="text" placeholder="Username"/>-->
                    </div>
				  </div>
				  <div class="form-row mt-4">
                    <div class="col-12 col-sm-6">
						<?= $form->field($model, 'contact')->textInput(['placeholder' => 'Contact']); ?>
                    </div>
					<div class="col-12 col-sm-6">
						<?= $form->field($model, 'email')->Input('email', ['placeholder' => 'Email']); ?>
                    </div>
                  </div>
				  <div class="form-row mt-4">
                    <div class="col-12 col-sm-6">
						<?= $form->field($model, 'password')->passwordInput(['placeholder' => 'Password']); ?>
                    </div>
                    <div class="col-12 col-sm-6">
						<?= $form->field($model, 'password_repeat')->passwordInput(['placeholder' => 'Confirm Password']); ?>
                    </div>
                  </div>
                  <div class="form-row mt-4">
					<div class="col-12 col-sm-6">
						<?= $form->field($model, 'fName')->textInput(['class'=>'form-control', 'placeholder' => 'First Name']); ?>
                    </div>
                    <div class="col-12 col-sm-6">
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
                    <div class="col-12 col-sm-5">
						<?= $form->field($model, 'brandName')->textInput(['class'=>'form-control', 'placeholder' => 'Brand Name']) ?>
					</div>
                    <div class="col-12 col-sm-7">
						<?php echo $form->field($model, 'logo')->fileInput(['multiple'=> true, 'class'=>'form-control']); ?>
					</div>
				  </div>	
                  <div class="form-row mt-4">
                    <div class="col-12 col-sm-5">
						<?= $form->field($model, 'latchOn')->textInput(['class'=>'form-control', 'placeholder' => 'Latch On']); ?>
                    </div>
					<div class="col-12 col-sm-7">
						<?php echo $form->field($model, 'catalouge')->fileInput(['multiple'=> true, 'class'=>'form-control']); ?>
                    </div>
				  </div>
                  <div class="form-row mt-4">
                    <div class="col-12 col-sm-12">
						<?= $form->field($model, 'address')->textInput(['class'=>'form-control', 'placeholder' => 'Address']); ?>
                    </div>
				  </div>	
                  <div class="form-row mt-4">
                    <div class="col-12 col-sm-6">
						<?= $form->field($model, 'city')->textInput(['class'=>'form-control', 'placeholder' => 'City']); ?>
                    </div>
                    <div class="col-12 col-sm-6">
					<?php $stateName = ['Delhi' => 'Delhi', 'Maharashtra' => 'Maharashtra'] ?>
					<?= $form->field($model, 'stateName')->dropDownList($stateName, ['prompt' => 'Select']); ?>
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
					<?php echo $form->field($model, 'cat_id')->checkboxList(ProductCategory::getCategoryList()); ?>
                    </div>
				  </div>	
                  <div class="form-row mt-4">
					<p>I accept all Terms and Conditions</p>
                    <div class="col-12 col-sm-12">
						<?= Html::activeCheckbox($model, 'vendor', ['class' => 'agreement']) ?>
                    </div>
					<div class="col-12 col-sm-12">
						<?= Html::activeCheckbox($model, 'returnPolicy', ['class' => 'agreement']) ?>
                    </div>
					<div class="col-12 col-sm-12">
						<?= Html::activeCheckbox($model, 'servicePolicy', ['class' => 'agreement']) ?>
                    </div>
					<div class="col-12 col-sm-12">
						<?= Html::activeCheckbox($model, 'webPolicy', ['class' => 'agreement']) ?>
                    </div>
					<div class="col-12 col-sm-12">
						<?= Html::activeCheckbox($model, 'installerPolicy', ['class' => 'agreement']) ?>
                    </div>
					<div class="col-12 col-sm-12">
						<?= Html::activeCheckbox($model, 'loyaltyPoint', ['class' => 'agreement']) ?>
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