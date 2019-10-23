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

       
        <?= $form->field($model, 'name_product') ?>
        <?= $form->field($model, 'price') ?>
        <?= $form->field($model, 'code') ?>
	 <?= $form->field($model, 'imageFile')->fileInput(['class'=>'form-control', 'placeholder' => 'Logo']); ?>
        <?= $form->field($model, 'description')->textarea(['rows' => '6']) ?>
		
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- admin-dash-add_product -->
