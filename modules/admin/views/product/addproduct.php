<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\AddProduct */
/* @var $form ActiveForm */
?>
<div class="admin-dash-add_product">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'product_id') ?>
        <?= $form->field($model, 'name_product') ?>
        <?= $form->field($model, 'price') ?>
        <?= $form->field($model, 'image') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- admin-dash-add_product -->
