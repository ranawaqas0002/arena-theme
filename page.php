<?php
/**
 * Template Name: Page (Default)
 * Description: Page template with Sidebar on the left side.
 *
 */

get_header();

?>
<section class="landing-banner">
    <div class="copy">
        <h1 class="header animate" data-animate="fade-in-top">Page</h1>
        <div class="sub_header animate" data-animate="fade-in-bottom"><?php the_title(); ?></div>
        <div class="scroll-text">Page</div>
    </div>
    <div class="dot animate" data-animate="fade-in-top"><span></span></div>
</section>

<section id="firm" class="overflow-hidden section-pd gray-bg animated-a scrolling-text">

    <div class="container image-text mb-150">
        <div class="row">
            <div class="col-lg-12 col-md-12 left">
                <?php the_content(); ?>
            </div>
        </div>
    </div>

</section>

<?php
get_footer();
