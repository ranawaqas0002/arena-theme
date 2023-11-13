<?php

/**
 * Template Name: Home Page
 * Description: The template for displaying the Blog index /blog.
 *
 */

get_header(); ?>

<style>
    <?php 
    for($x=1;$x<50;$x++) 
        echo "#landing .horizontal-slide .word:nth-of-type(".$x.") { animation-delay:".($x*100+300)."ms; }";
    ?>
</style>

<?php
$hero = get_field('hero');

if ($hero) : ?>
    <section id="landing" class="full-height">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="wrap fade-in-top animate">

                        <?php
                        $texts = $hero['header_text'];
                        $index = 0;
                        if ($texts) :
                            foreach ($texts as $key => $text) { ?>
                            <video width="100%" playsinline autoplay muted loop class="slide-in-bottom animate landingvideo <?php echo $index==0 ? 'active' : ''; ?>">
                                <source src="<?php echo $text['video']; ?>" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        <?php
                            $index++;
                        }
                        endif; ?>
						
                        <div id="video-mask">
                            <img  class="" data-animate="" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Video_Mask.svg">
                            <div class="top"></div>
                            <div class="right"></div>
                            <div class="bottom"></div>
                            <div class="left"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="horizontal-slide vertical-dots">

                            <?php
                            $texts = $hero['header_text'];

                            if ($texts) :
                                foreach ($texts as $key => $text) { ?>


                                    <div>
                                        <div class="overflow-hidden">
                                            <h3 class="heading fade-in-bottom animate">
                                            <?php 
                                                $words = explode(' ', strip_tags($text['main_text']));
                                                for($x=0;$x<count($words);$x++){
                                                    echo '<div class="word animate fade-in-bottom">'.$words[$x].'</div>&nbsp;';
                                                }
                                                $words = explode(' ', strip_tags($text['sub_text']));
                                                for($x=0;$x<count($words);$x++){
                                                    echo '<div class="word animate fade-in-bottom"><strong>'.$words[$x].'</strong></div>&nbsp;';
                                                }
                                            ?>
                                            </h3>
                                        </div>
                                    </div>

                            <?php
                                }
                            endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php endif; ?>

<?php
$section_two = get_field('section_2');

if ($section_two) : ?>

    <section id="who">
        <div id="mainScrollStart"></div>
        <div class="container-fluid" id="scrollHeight">
            <div class="full-height" style="height: 150vh;" id="sec1">
            </div>
            <div class="full-height" style="height: 150vh;" id="sec2">
            </div>
            <div class="full-height" style="height: 150vh;" id="sec3">
            </div>
        </div>
        <div id="fixedCopy">
            <div class="nav-indicator">
                <div class="container ">
                    <div class="nav-texts">
                        <?php
                        $side_texts = $section_two['side_texts'];
                        if ($side_texts) :

                            foreach ($side_texts as $key => $side_text) { ?>
                                <div class="nav-text">
                                    <div class="">
                                        <?php
                                        $letters = $side_text['letters'];
                                        if ($letters) :
                                            foreach ($letters as $key => $letter) { ?>
                                                <p class="fade-in-top"><?php echo $letter['letter']; ?></p>
                                        <?php  }
                                        endif; ?>
                                    </div>
                                </div>

                        <?php }
                        endif; ?>
                    </div>
                    <ul class="slide-in-left">
                        <li>
                            <button type="button"></button>
                        </li>
                        <li>
                            <button type="button"></button>
                        </li>
                        <li>
                            <button type="button"></button>
                        </li>
                    </ul>
                </div>
            </div>
            <!--  Who We Are-->

            <?php
            $who_we_are = $section_two['who_we_are'];
            if ($who_we_are) : ?>

                <div class="container section">
                    <div class="scroll-text vertical fade-in"><?php echo $who_we_are['vertical_text']; ?></div>
                    <div class="row">
                        <div class="col-lg-1">
                        </div>
                        <div class="col-lg-5 col-md-6 left">
                            <div class="">
                                <div class="overflow-hidden">
                                    <p class="slide-in-bottom animate sub section-sub"><?php echo $who_we_are['header']; ?></p>
                                </div>
                                <div class="overflow-hidden">
                                    <h3 class="slide-in-bottom animate heading"><?php echo $who_we_are['sub_header']; ?></h3>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="overflow-hidden">
                                            <p class="slide-in-bottom animate"><?php echo $who_we_are['text_one']; ?></p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="overflow-hidden">
                                            <p class="slide-in-bottom animate"><?php echo $who_we_are['text_two']; ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-1">
                        </div>
                        <div class="col-md-5 right hide-sm">
                            <div class="overflow-hidden">
                                <img class="fade-in-1s animate" src="<?php echo $who_we_are['image']['url']; ?>" alt="<?php echo $who_we_are['image']['alt']; ?> | Who we are" caption="Who We Are | <?php echo $who_we_are['image']['caption']; ?>" width="100%" />
                            </div>
                        </div>
                    </div>
                </div>

            <?php endif; ?>
            <!-- Our Vision -->
            <?php
            $vision = $section_two['our_vision'];
            if ($vision) : ?>
                <div class="container section">
                    <div class="scroll-text horizontal slide-in-right"><?php echo $vision['vertical_text']; ?></div>
                    <div class="row">
                        <div class="col-lg-1">
                        </div>
                        <div class="col-lg-5 col-md-6 left">
                            <div class="">
                                <div class="overflow-hidden">
                                    <p class="slide-in-bottom animate sub section-sub"><?php echo $vision['header_text']; ?></p>
                                </div>
                                <div class="overflow-hidden">
                                    <h3 class="slide-in-bottom animate heading"><?php echo $vision['sub_text']; ?></h3>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="overflow-hidden">
                                            <h4 class="slide-in-bottom animate"><?php echo $vision['vision_header']; ?></h4>
                                        </div>
                                        <div class="overflow-hidden">
                                            <p class="slide-in-bottom animate"><?php echo $vision['vision_text']; ?></p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="overflow-hidden">
                                            <h4 class="slide-in-bottom animate"><?php echo $vision['mission_header']; ?></h4>
                                        </div>
                                        <div class="overflow-hidden">
                                            <p class="slide-in-bottom animate"><?php echo $vision['mission_text']; ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-1">
                        </div>
                        <div class="col-md-5 right hide-sm">
                            <div class="overflow-hidden">
                                <img class="fade-in-1s animate" src="<?php echo $vision['image']['url']; ?>" alt="<?php echo $vision['image']['alt']; ?> | Who we are" caption="Who We Are | <?php echo $vision['image']['caption']; ?>" width="100%" />
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
            <!--The Founder  -->
            <?php
            $founder = $section_two['founder'];
            if ($founder) : ?>
                <div class="container section" id="founder">
                    <div class="scroll-text vertical fade-in"><img src="<?php echo $founder['image']['url']; ?>" alt="<?php echo $founder['image']['alt']; ?> | Who we are" caption="Who We Are | <?php echo $founder['image']['caption']; ?>" class="quote"></div>
                    <div class="row">
                        <div class="col-lg-1">
                        </div>
                        <div class="col-lg-5 col-md-6 left">
                            <div class="">
                                <div class="overflow-hidden">
                                    <p class="fade-in-bottom animate sub section-sub"><?php echo $founder['header']; ?></p>
                                </div>
                                <div class="overflow-hidden">
                                    <h3 class="fade-in-bottom animate heading"><?php echo $founder['text']; ?></h3>
                                </div>
                                <div class="overflow-hidden">
                                    <p class="fade-in-bottom animate"><?php echo $founder['name']; ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-1">
                        </div>
                        <div class="col-md-5 right">
                            <div class="">
                                <img class="fade-in-1s animate founder-image" src="<?php echo $founder['image_2']['url']; ?>" alt="<?php echo $founder['image_2']['alt']; ?> | Who we are" caption="Who We Are | <?php echo $founder['image_2']['caption']; ?>" width="100%" />
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </section>

<?php endif; ?>


<?php
$section_three = get_field('section_three');
if ($section_three) : ?>

    <section id="services" class="overflow-hidden section-pd">
        <div class="full-height" style="height: 20vh;"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-carousel animate" data-animate="fade-in-bottom">
                        <?php
                        $services = $section_three['services'];
                        if ($services) :
                            foreach ($services as $key => $service) { ?>
                                <div>
                                    <h3><?php echo $service['service']; ?></h3>
                                </div>

                        <?php  }
                        endif; ?>

                    </div>
                </div>
            </div>
            <div class="row reverse-mobile">
                <div class="col-lg-6 col-md-12">
                    <a href="<?php echo $section_three['link']['url'] ?>" class="button-link animate" data-animate="fade-in-bottom"><?php echo $section_three['link']['title'] ?></a>
                </div>
                <div class="col-lg-6 col-md-12 dots-wrap horizontal-dots animate" data-animate="fade-in-right">
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>


<?php
$section_four = get_field('section_four');
if ($section_four) : ?>
    <section id="consultancy" class="section-pd follow-section">
        <span id="scroll-start"></span>
        <div class="floating-content desktop-only">
            <div class="container">
                <div class="scroll-text"><?php echo $section_four['side_text']; ?></div>
                <div class="row">
                    <div class="col-md-3 desktop-only links">
                        <div class="float-wrap" id="floating-links">
                            <ul class="floating-links">
                                <li class="heading">
                                    <p class="section-sub"><span><?php echo $section_four['sub_header_number']; ?></span>
                                        <?php echo $section_four['sub_header']; ?></p>
                                </li>
                                <?php
                                $consultancies = $section_four['consultancies'];
                                if ($consultancies) :
                                    foreach ($consultancies as $key => $consultancy) {
                                        $image = wp_get_attachment_image_src(get_post_thumbnail_id($consultancy->ID), 'full');
                                        ?>
                                        <li class="link">
                                            <a href="#<?php echo $consultancy->post_name; ?>"><?php echo $consultancy->post_title; ?></a>
                                        </li>
                                <?php  }
                                endif; ?>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-12">
                        <div id="consultancy-carousel" class="float-carousel">
                            <?php
                            if ($consultancies) :
                                foreach ($consultancies as $key => $consultancy) {
                                    $image = wp_get_attachment_image_src(get_post_thumbnail_id($consultancy->ID), 'full');
                                    $number = $key + 1;
                                    ?>
                                    <div class="">
                                        <div class="row">
                                            <!--                                        <div class="col-md-6 left">-->
                                            <!--                                            <div class="overflow-hidden img-animate">-->
                                            <!--                                                <img src="--><?php //echo $image[0] ?><!--" alt="Arena  --><?php //echo $consultancy->post_title; ?><!-- Image ?>" width="100%">-->
                                            <!--                                            </div>-->
                                            <!--                                        </div>-->
                                            <!--                                        <div class="col-md-1"></div>-->
                                            <!--                                        <div class="col-md-5 right">-->
                                            <div class="col-md-6 left">
                                                <div class="overflow-hidden">
                                                    <img src="<?php echo $image[0] ?>" alt="Arena  <?php echo $consultancy->post_title; ?> Image ?>" width="100%">
                                                </div>
                                            </div>
                                            <div class="col-md-1"></div>
                                            <div class="col-md-5 right">
                                                <div class="">
                                                    <div class="head-wrap">
                                                        <h3 class="heading"><?php echo $consultancy->post_title; ?></h3><span></span>
                                                        <div class="number">0<?php echo $number; ?></div>
                                                    </div>
                                                    <p class="body"><?php echo $consultancy->post_excerpt; ?></p>
                                                    <!-- <a href="<?php echo get_post_permalink($consultancy->ID); ?>" class="button-link link">Learn More</a> -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                <?php  }
                            endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container desktop-only">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <?php
                    $consultancies = $section_four['consultancies'];
                    if ($consultancies) :
                        foreach ($consultancies as $key => $consultancy) {
                            $number = $key + 1;
                            ?>
                            <div class="scroll-section consult_id_<?php echo $number; ?>" style="height: 100vh" id="<?php echo $consultancy->post_name; ?>"></div>
                        <?php  }
                    endif; ?>
                </div>
            </div>
        </div>
        <div class="container mobile-only section-pd horizontal-dots left-dots">
            <div class="float-carousel">
                <?php
                if ($consultancies) :
                    foreach ($consultancies as $key => $consultancy) {
                        $number = $key + 1;
                        ?>
                        <div class="">
                            <div class="row">
                                <!--                                        <div class="col-md-6 left">-->
                                <!--                                            <div class="overflow-hidden img-animate">-->
                                <!--                                                <img src="--><?php //echo $image[0] ?><!--" alt="Arena  --><?php //echo $consultancy->post_title; ?><!-- Image ?>" width="100%">-->
                                <!--                                            </div>-->
                                <!--                                        </div>-->
                                <!--                                        <div class="col-md-1"></div>-->
                                <!--                                        <div class="col-md-5 right">-->
                                <div class="col-md-6 left">
                                    <div class="overflow-hidden">
                                        <img src="<?php echo $image[0] ?>" alt="Arena  <?php echo $consultancy->post_title; ?> Image ?>" width="100%">
                                    </div>
                                </div><div class="col-md-6 right">
                                    <div class="">
                                        <div class="head-wrap">
                                            <h3 class="heading"><?php echo $consultancy->post_title; ?></h3><span></span>
                                            <div class="number">0<?php echo $number; ?></div>
                                        </div>
                                        <p class="body"><?php echo $consultancy->post_excerpt; ?></p>
                                        <a href="<?php echo get_post_permalink($consultancy->ID); ?>" class="button-link link">Learn More</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <?php  }
                endif; ?>
            </div>
        </div>
    </section>
<?php endif; ?>

<!-- section 5 -->


<div class="">

    <?php

    $section_five = get_field('section_five');
    if (!$section_five) : ?>
        <section id="sectors" class="overflow-hidden section-pd gray-top-section">
            <div class="container">
                <?php
                $sectors = $section_five['sectors'];
                if ($sectors) : ?>
                    <div class="row">
                        <div class="col-lg-7 col-md-12">
                            <div class="figure-carousel-images">
                                <?php
                                foreach ($sectors as $key => $sector) {
                                    $image = wp_get_attachment_image_src(get_post_thumbnail_id($sector->ID), 'full');

                                ?>
                                    <div>
                                        <div class="overflow-hidden img-animate">
                                            <img class="parallax-img" src="<?php echo $image[0] ?>" alt="Arena  <?php echo $sector->post_title; ?> Image ?>" width="100%">
                                        </div>
                                    </div>
                                <?php       } ?>


                            </div>
                        </div>
                        <div class="col-md-1">
                        </div>
                        <div class="col-lg-4 col-md-12 horizontal-dots left-dots d-flex flex-column justify-content-center">
                            <div class="">
                                <p class="section-sub animate" data-animate="fade-in-left"><span><?php echo $section_five['header_number']; ?></span>
                                    <?php echo $section_five['header']; ?></p>
                                <div class="figure-carousel">
                                    <?php
                                    foreach ($sectors as $key => $sector) { ?>
                                        <div>
                                            <div class="content">
                                                <h3 class="heading mb-60 anim">
                                                    <?php
                                                    $name = str_split($sector->post_title);
                                                    for($x=0;$x<count($name);$x++){
                                                        echo '<span class="fade-in-right">'.$name[$x].'</span>';
                                                    }
                                                ?>
                                                </h3>
                                                <a href="<?php echo get_post_permalink($sector->ID); ?>" class="button-link fade-in-left  anim">Learn
                                                    More</a>
                                            </div>
                                        </div>

                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>

                <?php endif; ?>
            </div>
        </section>
    <?php endif; ?>

    <?php 

get_template_part('template-parts/section-clients', 'section');?>


</div>


<?php
get_template_part('template-parts/section-next-section-template', 'section');
get_footer();
?>
<script src="https://player.vimeo.com/api/player.js"></script>