<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\helpers\ArrayHelper;


?>
<link href="css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<style>
        body{
        padding-top:4.2rem;
		padding-bottom:4.2rem;
		background:#FF9800;
        }
        a{
         text-decoration:none !important;
         }
         h1,h2,h3{
         font-family: 'Kaushan Script', cursive;
         }
          .myform{
		position: relative;
		display: -ms-flexbox;
		display: flex;
		padding: 1rem;
		-ms-flex-direction: column;
		flex-direction: column;
		width: 100%;
		pointer-events: auto;
		background-color: #fff;
		background-clip: padding-box;
		border: 1px solid rgba(0,0,0,.2);
		border-radius: 1.1rem;
		outline: 0;
		max-width: 500px;
		 }
         .tx-tfm{
         text-transform:uppercase;
         }
         .mybtn{
         border-radius:50px;
         }
        
         .login-or {
         position: relative;
         color: #aaa;
         margin-top: 10px;
         margin-bottom: 10px;
         padding-top: 10px;
         padding-bottom: 10px;
         }
         .span-or {
         display: block;
         position: absolute;
         left: 50%;
         top: -2px;
         margin-left: -25px;
         background-color: #fff;
         width: 50px;
         text-align: center;
         }
         .hr-or {
         height: 1px;
         margin-top: 0px !important;
         margin-bottom: 0px !important;
         }
         .google {
         color:#666;
         width:100%;
         height:40px;
         text-align:center;
         outline:none;
         border: 1px solid lightgrey;
         }
          form .error {
         color: #ff0000;
         }
         #second{display:none;}
		button.btn.btn-block.mybtn.btn-primary.tx-tfm {
    background-color: black;
	border-color:black;
}
</style>
<body>
    <div class="container">
        <div class="row">
			<div class="col-md-5 mx-auto">
			<div id="first">
				<div class="myform form ">
					 <div class="logo mb-3">
						 <div class="col-md-12 text-center">
							<h1> Login</h1>
						 </div>
					</div>
                   <?php $form = ActiveForm::begin(); ?>
                           <div class="form-group">
                              <label for="exampleInputEmail1">Mobile No</label>
                              <?= $form->field($model, 'mobile')->textInput(['placeholder' => 'Enter Your Mobile Number'])->label(false) ?>
                           </div>
                           <div class="form-group">
                              <label for="exampleInputEmail1">Password</label>
                               <?= $form->field($model, 'password')->passwordInput(['placeholder' => 'Enter Your Password'])->label(false) ?>
                           </div>
                          
                           <div class="col-md-12 text-center ">
                              <button type="submit" class=" btn btn-block mybtn btn-primary tx-tfm">Login</button>
                           </div>
                         
                           <div class="form-group">
                              <p class="text-center">Don't have account? <a href="<?php echo yii::$app->homeUrl;?>admin/accreg" id="signup">Sign up here</a></p>
                           </div>
                        <?php ActiveForm::end(); ?>
                 
				</div>
			</div>
			 
					 
			</div>
		</div>
      </div>   
         
</body>