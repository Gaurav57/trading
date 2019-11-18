<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;


?>
<div class="admin-dash-add_category col-md-11" style="margin-left: 15px;background-color:aliceblue;margin-top: -64px;">
<h1 class="text-center">Update Brand</h1>
    <?php $form = ActiveForm::begin(); ?>


        <?= $form->field($post, 'brandName') ?>
       
    
        <div class="form-group">
<?= Html::submitButton('Submit',['class' => 'btn btn-primary','/category/insertcategory']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div>
