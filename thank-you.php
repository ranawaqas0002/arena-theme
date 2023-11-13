<?php
/*
Template Name: Thank You Page for Popup
*/
get_header();
?>
<style>
    .rotate.animate {
    color: black !important;
    opacity: 1 !important;
    animation: rotate-animation 5s linear infinite;
}
.banner-section{
  height: 520px !important;
}
.thankyou-section-2 .col-lg-6.img-container {
    background-color: #f9f9f9;
    text-align: center;
    padding: 60px;
}
.thankyou-section-2 img.img-fluid {
    max-width: 320px !important;
    width: 100%;
}
.sm-20{
    padding-bottom: 20px;
}
/* .thankyou-section-2 .row {
    vertical-align: middle !important;
    display: flex !important;

    align-items: center;
} */
/* section.thankyou-section-2 a {
    text-decoration: none;
} */
section.thankyou-section-2 a:hover {
    color: #000000 !important;
}
@media screen and (min-width: 992px) {
    .text-column{
        padding-right: 90px !important;
    }
    
}
@media (min-width: 768px) and (max-width: 992px){
  .banner-section {
    height: 400px !important;
}
}
@media screen and (max-width: 768px) {
  .thankyou-section-2 .img-container{
    margin-top: 60px !important;
  }
  .banner-section {
    height: 380px !important;
}
    
}

</style>
<!-- Section 1 -->
<section class="banner-section gray-bg">
  <div class="container">
    <div class="row">
      <div class="col-lg-8">
        <h1 class="display-4"><div class="animates"><span class="rotate animate" data-animate="rotate-back">Thank you, view our step-by-step guide below.</span></div> </h1>
      </div>
    </div>
  </div>
</section>
<!-- Section 2 -->


<section class="thankyou-section-2">
  <div class="container pb-220 pt-220">
    <div class="row">
      <div class="col-lg-6 text-column">
        <!-- <h1 class="sm-pb">What to Expect</h1>
        <h4 class="sm-20">Every Wednesday</h4>
        <p class="sm-pb">Every Wednesday you'll receive my Gladiator Mastery Newsletter, which includes 3 short ideas from me, 2 quotes from others, and 1 question to ponder during the week. You can see the full archive of past editions here.</p>
        <h4 class="sm-20">A few brief welcome emails</h4>
        <p class="mb-60">For your first few weeks as a subscriber, we’ll also send you a short series of welcome emails, explaining what you can expect from us and where you can find our best work.</p>     -->
        <p><a href="/wp-content/uploads/2023/09/7-Steps-To-Selling-Your-Business-in-2023.pdf" target=”_blank”>Click Here</a> to open 7 Steps to  Selling Your Business in 2023</p>  
    </div>
      <div class="col-lg-6 img-container">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/popup-book-new.png" alt="Image" class="img-fluid">
      </div>
    </div>
  </div>
</section>



<!-- Section 3 -->


<!-- Add more sections and content here -->

<?php
get_template_part('template-parts/section-next-section-template','section');

get_footer();



