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
       <!-- <form class="form-signin">-->
            <?php $form = ActiveForm::begin(['class'=> 'form-signin']); ?>
            <h1 class="h3 mb-3 font-weight-normal" style="text-align: center">Confirm Email</h1>
          <!--  <div class="social-login">
                <button class="btn facebook-btn social-btn" type="button"><span><i class="fab fa-facebook-f"></i> Sign in with Facebook</span> </button>
                <button class="btn google-btn social-btn" type="button"><span><i class="fab fa-google-plus-g"></i> Sign in with Google+</span> </button>
            </div>-->
            <div class="input-group">
              <!--<input type="email" id="inputEmail" class="form-control" placeholder="Email address" required="" autofocus="">-->
               <?= $form->field($model, 'email')->input('email', ['placeholder'=> 'Email']); ?>
            </div>
            <hr>
            <div class="input-group">
             <!-- <button class="btn btn-md btn-rounded btn-block form-control submit" type="submit"><i class="fas fa-sign-in-alt"></i> Sign in</button>-->

             <?php echo Html::submitButton('<i class="fas fa-sign-in-alt" style="margin-right:150px"></i> Submit', ['class'=> 'btn btn-primary btn btn-md btn-rounded btn-block form-control']); ?>
            </div><hr>
           <?php ActiveForm::end(); ?>
</div> 