<?php

/**

 * Template Name: Thank you page for Contact

 * Description: The template for displaying the message after submission of contact page

 *

 */

get_header();
?>
<style>

    .rotate.animate {
    color: black !important;
    opacity: 1 !important;
    animation: rotate-animation 5s linear infinite;
}
</style>


<!-- Section 1 -->
<section class="banner-section gray-bg">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 offset-lg-1">
        <h1 class="display-4"><div class="animates"><span class="rotate animate" data-animate="rotate-back">Thank you for your inquiry</span></div> </h1>
        <p class="black-text animates animate sm-pt" data-animate="fade-in">A member of our team will reach out to you within 24hrs.</p>
      </div>
    </div>
  </div>
</section>



<?php
get_template_part('template-parts/section-next-section-template','section');

get_footer();


