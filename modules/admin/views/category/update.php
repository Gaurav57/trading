<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;


?>
<div class="admin-dash-add_category">
<h1>Update Category</h1>
    <?php $form = ActiveForm::begin(); ?>


        <?= $form->field($post, 'category_name') ?>
       
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['/category/insertcategory'], ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div>
