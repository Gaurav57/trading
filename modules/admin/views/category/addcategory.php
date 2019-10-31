<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\AddProduct */
/* @var $form ActiveForm */
?>
<div class="admin-dash-add_category col-md-11" style="margin-left: 15px;background-color:aliceblue;margin-top: -64px;">
<h1 class="text-center">Add Category</h1>
    <?php $form = ActiveForm::begin(); ?>


        <?= $form->field($model, 'category_name') ?>
       
    
        <div class="form-group">
            <?= Html::submitButton('Submit',['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- admin-dash-add_product -->
