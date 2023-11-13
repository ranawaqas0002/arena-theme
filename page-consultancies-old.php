<?php

/**

 * Template Name: Consultancy Old

 * Description: The template for displaying consultancy page

 *

 */

get_header();
?>
<style>
    .scroll-text {
        width: 2060px;
        z-index: 0;
    }

    .scrolling-text .container {
        position: relative;
        z-index: 1;
    }
</style>
<?php
get_template_part('template-parts/section-hero-template', 'section');
?>

<!-- section one -->
<?php

$section_one = get_field('section_one');

if ($section_one): ?>

    <div class="scrolling-text">
        <section id="services" class="overflow-hidden section-pd gray-bg">
            <span class="scroll-text left-to-right"><?php echo $section_one['background_text']; ?></span>
                <div class="container image-text ">
                    <div class="row">
                        <div class="left col-lg-4 col-md-12 horizontal-dots left-dots d-flex flex-column justify-content-center">
                            <div class="">
                                <div>
                                    <div class="overflow-hidden">
                                        <p class="section-sub animate" data-animate="fade-in-left">
                                            <span><?php echo $section_one['header_number']; ?></span> <?php echo $section_one['header']; ?></p>
                                        <h3 class="large-header mb-40 animate" data-animate="fade-in-left"><?php echo $section_one['sub_header']; ?></h3>
                                    </div>
                                    <div class="overflow-hidden">
                                        <div class="animate" data-animate="fade-in-bottom"><?php echo $section_one['text']; ?></div>
                                        <br/>
                                        <a class="animate button-link" data-animate="fade-in-left"  href="<?php echo $section_one['link']['url']; ?>"> <?php echo $section_one['link']['title']; ?></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-1">
                        </div>
                        <div class="right col-lg-7 col-md-12">
                            <div class="box-icons">
                                <?php
                                $consultancies = $section_one['consultancies'];
                                foreach ($consultancies as $key => $consultancy) {
                                    $image = get_field('consultance_icon', $consultancy->ID);
                                    ?>
                                    <div class="wrap animate " data-animate="fade-in-right">
<!--                                         <a href="<?php echo get_permalink($consultancy); ?>"> -->
                                        <a href="#">
                                        <div class="box-icon">
                                            <img src="<?php echo $image['url'] ?>" alt="Arena  <?php echo $consultancy->post_title; ?> Icon Image | <?php echo $image['caption'] ?> | <?php echo $image['description'] ?> | <?php echo $image['alt'] ?>">
                                            <h5 class="title"><?php echo $consultancy->post_title; ?></h5>
                                        </div>
                                        </a>
                                    </div>
                                <?php }?>
                            </div>
                        </div>
                    </div>
                </div>
        </section>

        <section id="services-video" class="overflow-hidden section-pd-bot gray-bg-half">
            <div class="container full-video left">
                <?php
                $hasFullVideo = true;
                get_template_part('template-parts/section-video-player', 'section');
                ?>
            </div>
        </section>
    </div>

<?php endif;?>

<!-- section three -->

<?php
$section_three = get_field('section_three');
if (!$section_three): ?>


<section id="consultancy" class="follow-section">
        <span id="scroll-start"></span>
        <div class="floating-content desktop-only  animated-a">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div id="consultancy-carousel" class="float-carousel no-links">


                            <?php
                            $approaches = $section_three['approaches'];
                            foreach ($approaches as $key => $approach) {
                                $number = $key + 1;
//                                if ($number < 10) {
                                    ?>
                                    <div class="">
                                        <div class="row">
                                            <div class="col-md-6 left">
                                                <div class="overflow-hidden">
                                                    <img src="<?php echo $section_three['image']['url'] ?>" alt="Arena Consultance <?php echo $section_three['header']; ?> Image | <?php echo $section_three['image']['caption'] ?> | <?php echo $section_three['image']['description'] ?> | <?php echo $section_three['image']['alt'] ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-1"></div>
                                            <div class="col-md-5 right">
                                                <div class="">
                                                    <div class="head-wrap">
                                                        <h3 class="heading"><?php echo $approach['header']; ?></h3><span></span>
                                                        <div class="number"><?php echo '0' . $number ?></div>
                                                    </div>
                                                    <div class="body"><?php echo $approach['text']; ?></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                <?php // } else { ?>
<!--                                    <h1>--><?php //echo $approach['header']; ?><!--</h1>-->
<!--                                    <span>--><?php //echo $number ?><!-- </span>-->
<!--                                    <div>--><?php //echo $approach['text']; ?><!--</div>-->

                                <?php // }
                            }
                            ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container desktop-only">
            <div class="row">
                <div class="col-lg-12 col-md-12">

                    <?php
                    $approaches = $section_three['approaches'];
                    foreach ($approaches as $key => $approach) {
                        $number = $key + 1;
                        ?>
                        <div class="scroll-section consult_id_<?php echo $number; ?>" style="height: 100vh"></div>

                    <?php
                    }
                    ?>

                </div>
            </div>
        </div>
        <div class="container mobile-only section-pd horizontal-dots">
            <div class="float-carousel">
                <?php
                $approaches = $section_three['approaches'];
                foreach ($approaches as $key => $approach) {
                    $number = $key + 1; ?>

                        <div class="">
                            <div class="row">
                                <div class="col-md-6 left">
                                    <div class="overflow-hidden">
                                        <img src="<?php echo $section_three['image']['url'] ?>" alt="Arena Consultance <?php echo $section_three['header']; ?> Image | <?php echo $section_three['image']['caption'] ?> | <?php echo $section_three['image']['description'] ?> | <?php echo $section_three['image']['alt'] ?>">
                                    </div>
                                </div><div class="col-md-6 right">
                                    <div class="">
                                        <div class="head-wrap">
                                            <h3 class="heading"><?php echo $approach['header']; ?></h3><span></span>
                                            <div class="number">0<?php echo $number; ?></div>
                                        </div>
                                        <div class="body"><?php echo $approach['text']; ?></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <?php  } ?>
            </div>
        </div>
    </section>
<?php endif;?>

<?php
get_template_part('template-parts/section-clients', 'section');
get_template_part('template-parts/section-next-section-template', 'section');
get_footer();
?>

<?php if(isset($hasFullVideo)){ ?>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/grt-youtube-popup.js"></script>
    <!-- Initialize GRT Youtube Popup plugin -->
    <script>
        $(".youtube-link").grtyoutube({
            // autoPlay:true,
            theme: "dark"
        });
    </script>
<?php } ?>
