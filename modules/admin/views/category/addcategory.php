<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\AddProduct */
/* @var $form ActiveForm */
?>
<div class="admin-dash-add_category">
<h1>Add Category</h1>
    <?php $form = ActiveForm::begin(); ?>


        <?= $form->field($model, 'category_name') ?>
       
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['/category/insertcategory'], ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- admin-dash-add_product -->
