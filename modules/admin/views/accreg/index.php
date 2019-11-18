<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\helpers\ArrayHelper;


?>
<link href="css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<!------ Include the above in your HEAD tag ---------->
<style>
body{
background-color:orange;
}
.container{
max-width:700px;
}
img {width:100%;}
section#testimonial {
    margin-top: 40px;
}
.col-md-4.py-5.text-white.text-center {
    background-color: black;
}
button.btn.btn-block.btn-dark {
    background-color: black;
}
</style>
<section class="testimonial py-5" id="testimonial">
    <div class="container">
        <div class="row ">
            <div class="col-md-4 py-5 text-white text-center">
                <div class=" ">
                    <div class="card-body">
                        <img src="http://www.ansonika.com/mavia/img/registration_bg.svg" style="width:70%">
                        <h2 class="py-3" style="margin-top: 30px;">Registration</h2>
                        <p>Sell to crores of customers on FLIEGE, right from your doorstep!

</p>
                    </div>
                </div>
            </div>
			<?php if(Yii::$app->session->hasFlash('success')):?>
	<div class="alert alert-dismissible alert-success">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <?php echo Yii::$app->session->getFlash('success');?>
</div>
	
	<?php endif; ?>
            <div class="col-md-8 py-5 border" style="background-color:white">
                <h4 class="pb-4 text-center">Create your Seller Account</h4>
               <?php $form = ActiveForm::begin(); ?>
                    
						<?= $form->field($model, 'email')->textInput(['placeholder' => 'Enter Your Email address'])->label(false) ?>
                        
                    
                          <?= $form->field($model, 'mobile')->textInput(['placeholder' => 'Enter Your Mobile Number'])->label(false) ?>
                        
                            <?= $form->field($model, 'username')->textInput(['placeholder' => 'Enter Your Full Name'])->label(false) ?>
                                 <?= $form->field($model, 'password')->passwordInput(['placeholder' => 'Set Password'])->label(false) ?>
                      
              
                    
            <?= Html::submitButton('Submit', ['class' => 'btn btn-block btn-dark']) ?>
      
                  
					Already a Seller? <a href="<?php echo yii::$app->homeUrl;?>admin/login" id="signup">Log In  here</a>
                <?php ActiveForm::end(); ?>
            </div>	
        </div>
    </div>
</section>

