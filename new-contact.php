<?php

/**

 * Template Name: New Contact Us Page

 * Description: The template for displaying contact us page

 *

 */

get_header();
?>
<style>
    form input[type="submit"]{
        background-image: none !important;
    }
    .iti-arrow {
    display: none !important;
}
label.form-check-label{
    padding-left: 5px;
}
input#acceptTerms:active, input#acceptTerms:focus,  {
    background-color: #000000;
    border: none !important;
}
.form-check-input:checked{
    background-color: #000000;
    border: none !important;
}
.form-check-input:focus{
    box-shadow: none !important;
}
.contact-section-2 a:hover {
    color: #000000 !important;
}
select.form-control{
    border-radius: 0px !important;
}
select.form-control:focus {
    box-shadow: none !important;
}
.wpcf7-spinner{
    bottom: 62px !important;
    right: 69px !important;
}
      .rotate.animate {
    color: black !important;
    opacity: 1 !important;
    animation: rotate-animation 5s linear infinite;
}
.contact-section-1{
    padding-top: 200px;
}
form.wpcf7-form.cf7mls-no-scroll.cf7mls-no-moving-animation.init {
    margin-top: 50px;
}
input[type="text"], input[type="email"], input[type="tel"], select, textarea{
    border: none !important;
}
textarea.wpcf7-form-control.wpcf7-textarea.wpcf7-validates-as-required {
    padding-top: 15px;
    height: 160px;
}
input#acceptTerms {
    font-size: 18px;
}
label.form-check-label{
    font-size: 14px;
}

input.wpcf7-form-control.has-spinner.wpcf7-submit {
    max-width: 420px !important;
    width: 100%;
    background-color: #000000;
    filter: none;
    height: 50px;
    text-transform: capitalize;
}
input.wpcf7-form-control.has-spinner.wpcf7-submit:hover {
    background-color: #ffffff;
    color: #000000 !important;
    border: 1px solid #000000 !important;
    
}
.contact-col-1{
    padding-right: 70px;
}
.contact-col-1{
    padding-left: 20px;
}
.contact-heading{
    font-size: 24px;
    font-weight: 500;
}
.contact-sec-3 a.black-text:hover {
    color: #000000 !important;
}
.contact-section-2 {
    padding-bottom: 80px;
}
.contact-section-2 .col-md-4 {
    padding-left: 0px !important;
}
.contact-section-2 .col-md-2 {
    padding-right: 0px !important;
}
.text-col p {
    margin-bottom: 0px !important;
}
.col-md-6.terms-read {
    display: flex !important;
    align-items: center !important;
}
/* .terms-read form label{
    margin-bottom: 80px !important;
} */
@media screen and (min-width: 768px) {
    .number-mobile{
        display: none !important;
    }
    
}

@media screen and (max-width:768px) {
    .contact-section-2 {
    padding-bottom: 40px;
}
input.wpcf7-form-control.has-spinner.wpcf7-submit {
    max-width: 700px !important;
    width: 100%;
    
}
.contact-section-1{
    padding-top: 90px;
}
.wpcf7-spinner{
    top: -11px !important;
    right: 20px !important;

}
label.form-check-label {
    margin-bottom: 0px !important;
}
.number-desktop{
    display: none !important;
}
.contact-section-2 .col-md-4 {
    width: 68% !important;
}
.contact-section-2 .col-md-2 {
    width: 32% !important;
}
.terms-read p{
    margin-bottom: 0px;
}
input.wpcf7-form-control.has-spinner.wpcf7-submit {
    margin-top: 10px;
}
.contact-col-1{
    margin-bottom: 50px
}
.contact-col-2{
    margin-bottom: 50px
}
.col-md-12.text-col p {
    margin-bottom: 10px !important;
}
    
}
 @media screen and (max-width: 992px) {
    .tablet-padding {
    padding-left: 20px;
}
    
 }



</style>

<!-- Section 1 -->
<section class="contact-section-1 gray-bg">
    <div class="container myraid-font">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 sm-pt">
                <h1 class="sm-pb">
                <div class="animates"><span class="rotate animate" data-animate="rotate-back">Contact Us</span></div>
                <!-- <div class="animates"><span class="rotate animate" data-animate="rotate-back">Lets work together</span></div> -->
                </h1>
                <p class="animates"><span class="rotate animate" data-animate="rotate-back">Leave your details below and one of our consultants will contact you within 24hrs.</span></p>
            </div>
        </div>
        
    </div>
</section>
 <section class="contact-section-2 gray-bg">
    <div class="container">
 <div class="row">
            <div class="col-lg-8 offset-lg-2">
            <?php echo apply_shortcodes( '[contact-form-7 id="2839" title="Contact Form"]' ); ?>
            </div>
        </div>
        </div>

 </section>


 <section class="contact-sec-3 gray-bg">
<div class="container pb-120 top">
        <div class="row" id="contact">
          <div class="col-lg-3 offset-lg-2 left animate contact-col-1" data-animate="fade-in-left">
          <span class="tinytext uppercase mb-60 graytext contact-heading">Careers</span><br><br>
            <span class="black-text">Join our team<br></span>
            <a href="mailto:talent@arenacapital.com" class="black-text">talent@arenacapital.com</a><br><br><br><br>

            <span class="tinytext uppercase mb-60 graytext contact-heading">Headquarters</span><br><br>
            <span class="black-text">3305, Dubai Marina Plaza, Dubai, UAE<br><br></span>
          </div>
          <div class="col-lg-3 animate contact-detail-col-1 contact-col-1 contact-col-2" data-animate="fade-in-right">
            <span class="tinytext uppercase mb-60 graytext contact-heading">Press</span><br><br>
            <span class="black-text">Corporate & PR </span><br>
            <a href="mailto:alexa@arenacapital.com" class="black-text">alexa@arenacapital.com</a><br><br><br><br>

            <span class="tinytext uppercase mb-60 graytext contact-heading">Connect With Us</span><br><br>
            <a href="https://www.linkedin.com/company/arenacapitalconsultancy/" class="black-text">LinkedIn</a><br>
            <a href="https://www.instagram.com/_arenacapital/" class="black-text">Instagram</a><br><br>
          </div>
            
          <div class="col-lg-2 animate graytext contact-detail-col-2 tablet-padding" data-animate="fade-in-right">
                      
            <span class="tinytext uppercase mb-60 graytext contact-heading">Other Enquiries</span><br><br>
            <p class="black-text number-desktop">+971 4 834 7391 </p>
            <a href="tel:97148347391" class="black-text number-mobile">+971 4 834 7391<br> </a>
            <a href="mailto:info@arenacapital.com" class="black-text">info@arenacapital.com</a><br><br>


          </div>
        </div>
      </div>
</section>





<?php
get_template_part('template-parts/section-next-section-template','section');

get_footer();