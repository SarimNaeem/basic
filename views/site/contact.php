<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Contact';
$this->params['breadcrumbs'][] = $this->title;
?>

</section>
    <section id="contact" class="content-section form contact light space">
        <div class="container">
              <div class="content cover text-center">
              <div class="heading">
                <h2>Getting in touch</h2>
                
                <p><br/><br/></p>
              </div>
               <div class="row"> 
             
                <div class="col-md-offset-2 col-md-8 anim fadeInLeft animated" style="visibility: visible;"> 
                        <!--NOTE: Update your email Id in "contact_me.php" file in order to receive emails from your contact form-->
        <form name="sentMessage" id="contactForm"  novalidate>
        <h3>Contact Form</h3>
        <div class="control-group">
        <div class="controls">
        <input type="text" class="form-control" 
        placeholder="Full Name" id="name" required
        data-validation-required-message="Please enter your name" />
        <p class="help-block"></p>
        </div>
        </div>  
        <div class="control-group">
        <div class="controls">
        <input type="email" class="form-control" placeholder="Email" 
        id="email" required
        data-validation-required-message="Please enter your email" />
        </div>
        </div>  

        <div class="control-group">
        <div class="controls">
        <textarea rows="10" cols="100" class="form-control" 
        placeholder="Message" id="message" required
        data-validation-required-message="Please enter your message" minlength="5" 
        data-validation-minlength-message="Min 5 characters" 
        maxlength="999" style="resize:none"></textarea>
        </div>
        </div>       
        <div id="success"> </div> <!-- For success/fail messages -->
        <button type="submit" class="btn btn-primary pull-right">Send</button><br />
        </form>
                </div> 
            </div>
            
        </div><!-- .container -->
        
        <span id="message_sent"><i class="fa-check fa"></i></span><!-- jQuery display of giant checkmark -->    
        
    </section>