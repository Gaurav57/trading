<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;


?>
<div class="admin-dash-add_product col-md-11" style="margin-left: 15px;background-color:aliceblue;">
<h1>Update Product</h1>
    
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
	
       
	
        <?= $form->field($model, 'description')->textarea(['rows' => '6']) ?>
		
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div>
