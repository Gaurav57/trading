<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\helpers\ArrayHelper;


?>
<div class="page-wrapper bg-red p-t-180 p-b-100 font-robo">
    <div class="wrapper wrapper--w960">
        <div class="card card-2">
            <div class="card-heading"></div>
            <div class="card-body">
                 

          <?= Yii::$app->session->getFlash('success');?>
      
                
                <h2 class="title" style="color: black;">Registration Form</h2>
                <?php $form = ActiveForm::begin(); ?>
                    <div class="input-group">
                        <?= $form->field($model, 'name')->textInput(
                            [
                            'class'=>'input--style-2','placeholder'=>'Name'
                        ]) ?>
                    </div>
                    <div class="input-group">
                        <?= $form->field($model, 'contact')->textInput(['class'=>'input--style-2','placeholder'=>'Contact']) ?>
                    </div>
                    <div class="input-group">
                        <?= $form->field($model, 'email')->textInput(['class'=>'input--style-2','placeholder'=>'Email']) ?>
                    </div>
                    <div class="input-group">
                        <?= $form->field($model, 'password')->textInput(['class'=>'input--style-2','placeholder'=>'Password']) ?>
                    </div>

                    <div class="form-group">
                        
                            <?php
echo $form->field($model, 'category')->dropDownList(
            [
            'Raw material'   => 'Raw material', 
            'Manufacture'    => 'Manufacture', 
            'Distributer'    => 'Distributer', 
            'Dealer'         => 'Dealer', 
            'Retailer'       => 'Retailer'
            ]
    ); ?>
                           
                    
                    </div>

                    <div class="p-t-30">
                        <?= Html::submitButton($model->isNewRecord ? 'Register' : 'Update', ['class' => $model->   
                                isNewRecord ? 'btn btn--radius btn--green' : 'btn btn-primary']); ?>
                    </div>
                <?php ActiveForm::end(); ?>
            </div>
        </div>
    </div>
</div>

   
   


<!-- end document-->