<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;


?>
<div class="admin-dash-add_product">
<h1>Update Product</h1>
    
 <?php $form = ActiveForm::begin(); ?>


        <?= $form->field($post, 'name_product')?>
		 <?= $form->field($post, 'price') ?>
		  <?= $form->field($post, 'code') ?>
       <!---<?= $form->field($post, 'imageFile')->fileInput(['class'=>'form-control', 'placeholder' => 'Logo']); ?>--->
        <?= $form->field($post, 'description')->textarea(['rows' => '6']) ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div>
