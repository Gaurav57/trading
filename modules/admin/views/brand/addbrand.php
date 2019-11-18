<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use app\modules\admin\models\brand;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\AddProduct */
/* @var $form ActiveForm */
?>
<div class="admin-dash-add_product col-md-11" style="margin-left: 15px;background-color:aliceblue;margin-top: -64px;">
<h1 class="text-center">Add Brand</h1>
    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

		   <?= $form->field($model, 'brandName') ?>
		   <?= $form->field($model, 'logo')->fileInput(['class'=>'form-control', 'placeholder' => 'Image']); ?>
	   
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- admin-dash-add_product -->
