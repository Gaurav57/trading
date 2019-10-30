<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\helpers\ArrayHelper;


?>
<div class="sign-in limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <div class="login100-form validate-form p-l-55 p-r-55 p-t-150">
                <?php $form = ActiveForm::begin(); ?>
                    <span class="login100-form-title">
                        Sign In
                    </span>

                    <div class="wrap-input100 validate-input m-b-16" data-validate="Please enter username">
                        <?= $form->field($model, 'email')->textInput(
                            [
                            'class'=>'input100','placeholder'=>'Email'
                        ]) ?>
                        <!-- <input class="input100" type="text" name="username" placeholder="Email"> -->
                        <span class="focus-input100"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate = "Please enter password">
                        <?= $form->field($model, 'password')->textInput(['class'=>'input100','placeholder'=>'Password']) ?>
                        <!-- <input class="input100" type="password" name="pass" placeholder="Password"> -->
                        <span class="focus-input100"></span>
                    </div>

                    <div class="text-right p-t-13 p-b-23">
                        <span class="txt1">
                            Forgot
                        </span>

                        <a href="#" class="txt2">
                            Username / Password?
                        </a>
                    </div>

                    <div class="container-login100-form-btn">
                        <?= Html::submitButton($model->isNewRecord ? 'Sign in' : 'Update', ['class' => $model->   
                                isNewRecord ? 'login100-form-btn' : 'btn btn-primary']); ?>
                        <!-- <button class="login100-form-btn">
                            Sign in
                        </button> -->
                    </div>

                    <div class="flex-col-c p-t-170 p-b-40">
                        <span class="txt1 p-b-9">
                            Don’t have an account?
                        </span>

                        <a href="#" class="txt3">
                            Sign up now
                        </a>
                    </div>
                </div>
                <?php ActiveForm::end(); ?>
            </div>
        </div>
    </div>