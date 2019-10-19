<?php

use yii\widgets\ActiveForm;
use yii\helpers\Html;
use yii\helpers\Url;
?>
<!DOCTYPE html>

<head>
  <link rel="stylesheet" type="text/css" href="<?php echo Url::base(true);?>/admin/css/bootstrap.min.css">
 <script src="<?php echo Url::base(true);?>/admin/js/jquery.min.js"></script>
 <script src="<?php echo Url::base(true);?>/admin/js/bootstrap.min.js"></script>
 <link rel="stylesheet" type="text/css" href="<?php echo Url::base(true);?>/admin/css/css-log.css">
<script src="<?php echo Url::base(true);?>/admin/js/main.js"></script>
</head>


<div id="logreg-forms">
       
            <?php $form = ActiveForm::begin(['class'=> 'form-signin']); ?>
            
            
            <h1 class="h3 mb-3 font-weight-normal" style="text-align: center; color: #fff;">Login</h1>
          
            <div class="input-group">
          
               <?= $form->field($model, 'email')->input('email', ['placeholder'=> 'Email']); ?>
            </div>
            <br>

            <div class="input-group">
            
                 <?= $form->field($model, 'password')->passwordInput(['placeholder'=> 'Password']); ?>
            </div>
            <br><hr>

            <div class="input-group">
            
             <?php echo Html::submitButton('<i class="fas fa-sign-in-alt" style="margin-right:150px"></i> login', ['class'=> 'btn btn-primary btn btn-md btn-rounded btn-block form-control']); ?>
            </div>
            <hr>
            <?= Html::a('Forgot Password',['forgot']) ?>
           <?php ActiveForm::end(); ?>
</div> 