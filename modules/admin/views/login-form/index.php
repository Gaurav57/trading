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
            <?php if(Yii::$app->session->hasflash('success')):?>
                <button type="button" class="close" data-dismiss="alter"></button>
                <?php echo Yii::$app->session->getFlash('success');?>
            <?php endif; ?>
            <div class="row">
                <div class="col-mt-2" style="margin-left:20px;">
            <h1 class="h3 mb-3 font-weight-normal" style="text-align: center; color: #ff9900;">Login</h1>
            </div>
                <div class="col-mt-4">
            <a href=<?php echo yii::$app->homeUrl;?> class="btn btn-primary" style="color:white; margin-left:210px">Go Back</a>
                </div>
            </div>
          
            <div class="input-group">
          
               <?= $form->field($model, 'email')->input('email', ['placeholder'=> 'Email']); ?>
            </div>
            <br>

            <div class="input-group">
            
                 <?= $form->field($model, 'password')->passwordInput(['placeholder'=> 'Password']); ?>
            </div>
            <br>

            <div class="input-group">
            
             <?php echo Html::submitButton('<i class="fas fa-sign-in-alt" style="margin-right:160px"></i> login', ['class'=> 'btn btn-primary btn btn-md btn-rounded btn-block form-control']); ?>
            </div>
            <hr style="background-color: #FF9900;">
            <div class="row">
                <div class="col-mt-2" style="margin-left: 20px;">
            <?= Html::a('Forgot Password ?',['forgot']) ?>
                </div>
                <div class="col-mt-4" style="margin-left: 120px;">
             <?php echo Html::a('New User ?',['../admin/register']) ?>
                </div>
            </div>
           <?php ActiveForm::end(); ?>
</div> 