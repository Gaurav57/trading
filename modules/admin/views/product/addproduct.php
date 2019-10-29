<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\AddProduct */
/* @var $form ActiveForm */
?>
<div class="admin-dash-add_product">
<h1>Add Product</h1>
    <?php $form = ActiveForm::begin(); ?>

      <?php $brand =['shell'=>'shell','motoxp'=>'motoxp','honda'=>'honda','yamaha'=>'Yamaha']?>
	   <?= $form->field($model, 'brand')->dropDownList($brand,['prompt'=>'select']); ?>
        <?= $form->field($model, 'name_product') ?>
		<div class="row">
		
		<div class="col-lg-3">
		<?= $form->field($model, 'price_distributer') ?>
		</div>
		<div class="col-lg-3">
		<?= $form->field($model, 'sp_distributer') ?>
		</div>
		<div class="col-lg-3">
		<?= $form->field($model, 'loyality_pt_distributer') ?>
		</div>
		<div class="col-lg-3">
		<?= $form->field($model, 'moq_distributer') ?>
		</div>
		</div>
		<div class="row">
		
		<div class="col-lg-3">
		<?= $form->field($model, 'price_dealer') ?>
		</div>
		<div class="col-lg-3">
		<?= $form->field($model, 'sp_dealer') ?>
		</div>
		<div class="col-lg-3">
		<?= $form->field($model, 'loyality_pt_dealer') ?>
		</div>
		<div class="col-lg-3">
		<?= $form->field($model, 'moq_dealer') ?>
		</div>
		</div>
		<div class="row">
		
		<div class="col-lg-3">
		<?= $form->field($model, 'price_reseller') ?>
		</div>
		<div class="col-lg-3">
		<?= $form->field($model, 'sp_reseller') ?>
		</div>
		<div class="col-lg-3">
		<?= $form->field($model, 'loyality_pt_reseller') ?>
		</div>
		<div class="col-lg-3">
		<?= $form->field($model, 'moq_reseller') ?>
		</div>
		</div>
		<div class="row">
		
		<div class="col-lg-3">
		<?= $form->field($model, 'price_user') ?>
		</div>
		<div class="col-lg-3">
		<?= $form->field($model, 'sp_price') ?>
		</div>
		<div class="col-lg-3">
		<?= $form->field($model, 'loyality_point') ?>
		</div>
		
		</div>
	<?= $form->field($model, 'ref_client')->checkbox(array('label'=>''))->label('Reference Client'); ?>
       
	 <?= $form->field($model, 'imageFile')->fileInput(['multiple' => true,'class'=>'form-control', 'placeholder' => 'Image']); ?>
	 <?= $form->field($model, 'casestudies')->fileInput(['multiple' => true,'class'=>'form-control', 'placeholder' => 'PDf']); ?>
	 <?= $form->field($model, 'specsheet')->fileInput(['multiple' => true,'class'=>'form-control']); ?>
	  <?= $form->field($model, 'video')->fileInput(['class'=>'form-control']); ?>
        <?= $form->field($model, 'description')->textarea(['rows' => '6']) ?>
		<?= $form->field($model, 'warranty')->checkbox(); ?>
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- admin-dash-add_product -->
