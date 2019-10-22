
<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;



?>
    <!-- Contact Form -->

    <div class="contact_form">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="contact_form_container">
                        <div class="contact_form_title">Get in Touch</div>

                        <?php $form = ActiveForm::begin(); ?> 
                            <div class="contact_form_inputs d-flex flex-md-row flex-column justify-content-between align-items-between">

                              
                              <?= $form->field($model, 'name')->textInput(['class'=>'contact_form_name input_field','placeholder'=>'Your Name']) ?>
                              
                               
                              <?= $form->field($model, 'email')->textInput(['class'=>'contact_form_email input_field','placeholder'=>'Your Email']) ?>
                          
                              <?=   $form->field($model, 'contact')->textInput(['class'=>'contact_form_phone input_field','placeholder'=>'Your Phone Number'])  ?>
                            </div>
                            <div class="contact_form_text">
                                <?= $form->field($model, 'message')->textarea(['class'=>'text_field contact_form_message','placeholder'=>'Message']); ?>

                            </div>
                            <div class="contact_form_button">
                               <?= Html::submitButton($model->isNewRecord ? 'Send Message' : 'Update', ['class' => $model->   
                                isNewRecord ? 'button contact_submit_button' : 'btn btn-primary']); ?>
                            </div>
                                
                                
                        <?php ActiveForm::end(); ?> 

                    </div>
                </div>
            </div>
        </div>
        <div class="panel"></div>
    </div>

<div class="contact_info">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="contact_info_container d-flex flex-lg-row flex-column justify-content-between align-items-between">

                        <!-- Contact Item -->
                        <div class="contact_info_item d-flex flex-row align-items-center justify-content-start">
                            <div class="contact_info_image"><i class="fas fa-phone" style="font-size:36px;color: #ff9900;"></i></div>
                            <div class="contact_info_content">
                                <div class="contact_info_title">Phone</div>
                                <div class="contact_info_text">+91 9372422907</div>
                            </div>
                        </div>

                        <!-- Contact Item -->
                        <div class="contact_info_item d-flex flex-row align-items-center justify-content-start">
                            <div class="contact_info_image"><i class="fas fa-envelope" style="font-size:36px;color: #ff9900;"></i></div>
                            <div class="contact_info_content">
                                <div class="contact_info_title">Email</div>
                                <div class="contact_info_text">trading@gmail.com</div>
                            </div>
                        </div>

                        <!-- Contact Item -->
                        <div class="contact_info_item d-flex flex-row align-items-center justify-content-start">
                            <div class="contact_info_image"><i class="fas fa-map-marker-alt" style="font-size:36px;color: #ff9900;"></i></div>
                            <div class="contact_info_content">
                                <div class="contact_info_title">Address</div>
                                <div class="contact_info_text">Office No.208 Bawa Tower Sec.17 Vashi Navi Mumbai</div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Map 

    <div class="contact_map">
        <div id="google_map" class="google_map">
            <div class="map_container">
                <div id="map"></div>
            </div>
        </div>
    </div>
-->


    