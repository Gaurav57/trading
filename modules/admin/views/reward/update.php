<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;


?>
<div class="admin-dash-add_product">
<h1>Update reward points</h1>
    
 <?php $form = ActiveForm::begin(); ?>


        <?= $form->field($post, 'reward_id')?>
		 <?= $form->field($post, 'product_name') ?>
		  <?= $form->field($post, 'reward_points') ?>
       
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div>
