<?php

/**

 * Template Name: sector detail

 * Description: The template for displaying sector page

 *

 */



get_header();


get_template_part('template-parts/section-hero-template','section');
?>


<?php 
$section_one= get_field('section_one');
$hero = get_field('hero');
if($section_one):?>


    <section id="overview" class="overflow-hidden section-pd gray-bg-third">

        <div class="container image-text">
            <div class="row reverse-mobile">
                <div class="left col-lg-5 col-md-12 horizontal-dots left-dots d-flex flex-column justify-content-between">
                    <div>
                        <div class="overflow-hidden">
                            <p class="section-sub animate" data-animate="fade-in-left"><span><?php echo $section_one['header_number'];?></span> <?php echo $section_one['header'];?></p>
                        </div>

                        <div class="overflow-hidden">
                            <h3 class="medium-heading mb-40 animate" data-animate="fade-in-bottom"><?php echo $section_one['sub_header'];?></h3>
                        </div>
                        <div class="overflow-hidden">
                            <div class="row">
                                <div class="col-md-12 animate" data-animate="fade-in-left"><?php echo $section_one['text'];?></div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <a class="animate button-link" data-animate="fade-in-left" href="<?php echo $section_one['link']['url'];?>" tabindex="0"><?php echo $section_one['link']['title'];?></a>
                    </div>
                </div>
                <div class="col-md-1">
                </div>
                <div class="right col-lg-6 col-md-12">
                    <div>
                        <div class="overflow-hidden img-animate">
                            <img class="parallax-img" src="<?php echo $section_one['image']['url'] ?>" alt="Arena  <?php echo $hero['header'];?> Image | <?php echo $section_one['image']['caption']?> | <?php echo $section_one['image']['description'] ?> | <?php echo $section_one['image']['alt'] ?>">
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

<?php endif?>

<?php
$section_two = get_field("section_two");
if ($section_two):

    $strategies = $section_two['strategies'];
    ?>

    <section id="strategies" class="follow-section">
        <span id="scroll-start"></span>
        <div class="floating-content desktop-only">
            <div class="container">
                <div class="scroll-text <?php echo strlen($section_two['background_text']) > 10 ? 'long' : ''; ?>"><?php echo $section_two['background_text'];?></div>
                <div class="row">
                    <div class="col-md-3 desktop-only links">
                        <div class="float-wrap" id="floating-links">
                            <ul class="floating-links">
                                <li class="heading">
                                    <p class="section-sub"><span><?php echo $section_two['header_number'];?></span>
                                        <?php echo $section_two['header'];?></p>
                                </li>
                                <?php
                                if($strategies):
                                    foreach ($strategies as $key => $strategy) {
                                        ?>
                                        <li class="link">
                                            <a href="#<?php echo sanitize_title($strategy['header']); ?>"><?php echo $strategy['header'];?></a>
                                        </li>
                                    <?php  }
                                endif; ?>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-12">
                        <div id="consultancy-carousel" class="float-carousel">
                            <?php

                            if($strategies):
                                foreach ($strategies as $key => $strategy) {
                                    $number = $key + 1;

                                    if ($number<10){
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
                                                        <img src="<?php echo $strategy['image']['url'] ?>" alt="Arena  <?php echo $strategy['header'];?> Image ?>" width="100%">
                                                    </div>
                                                </div>
                                                <div class="col-md-1"></div>
                                                <div class="col-md-5 right">
                                                    <div class="">
                                                        <div class="head-wrap">
                                                            <h3 class="heading" <?php echo $strategy['header']=="Pharmaceuticals" ? 'style="max-width:440px"' : ''; ?>><?php echo $strategy['header_right'] ? $strategy['header_right'] : $strategy['header'];?></h3><span></span>
                                                            <div class="number">0<?php echo $number; ?></div>
                                                        </div>
                                                        <p class="body"><?php echo $strategy['text'];?></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    <?php  }
                                }
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
                    if($strategies):
                        foreach ($strategies as $key => $strategy) {
                            $number = $key + 1;
                            ?>
                            <div class="scroll-section consult_id_<?php echo $number; ?>" style="height: 100vh" id="<?php echo sanitize_title($strategy['header']); ?>"></div>
                        <?php  }
                    endif; ?>
                </div>
            </div>
        </div>
        <div class="container mobile-only section-pd horizontal-dots left-dots">
            <div class="float-carousel">
                <?php
                if ($strategies) :
                    foreach ($strategies as $key => $strategy) {
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
                                        <img src="<?php echo $strategy['image']['url'] ?>" alt="Arena <?php echo $strategy['header'];?> Image ?>" width="100%">
                                    </div>
                                </div><div class="col-md-6 right">
                                    <div class="">
                                        <div class="head-wrap">
                                            <h3 class="heading"><?php echo $strategy['header'];?></h3><span></span>
                                            <div class="number">0<?php echo $number; ?></div>
                                        </div>
                                        <p class="body"><?php echo $strategy['text'];?></p>
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


<?php 
$section_three= get_field('section_three');
if($section_one):?>

    <section id="figures" class="overflow-hidden section-pd bg-black">
        <div class="container figure-black">
            <div class="row">
                <div class="left col-lg-12 text-left">
                    <h5 class="large-header"><?php echo $section_three['text'];?></h5>
                </div>
            </div>
        </div>
    </section>

<section>
    <div></div>

</section>

<?php endif?>

<section id="services-video" class="overflow-hidden section-pd-bot black-bg-half">
    <div class="container full-video right">
        <?php
        $hasFullVideo = true;
        get_template_part('template-parts/section-video-player','section');
        ?>
    </div>
</section>

<?php 

$section_five = get_field('section_five');

if($section_five):?>

    <section id="other-services" class="center-text section-pd">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <p class="section-sub animate" data-animate="fade-in-left"><span><?php echo $section_five['header_number'];?></span> <?php echo $section_five['header'];?></p>
                    <div class="overflow-hidden">
                        <div class="heading animate mb-40" data-animate="fade-in-bottom"><?php echo $section_five['sub_header'];?></div>
                    </div>
                </div>
                <div class="col-md-4 right-top">
                    <p class="section-sub animate" data-animate="fade-in-left">&nbsp;</p>
                    <div class="horizontal-dots d-flex align-items-center">
                        <div id="box-icon-nav">

                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center horizontal-dots left-dots">
                    <div class="box-icons full-width box-icon-carousel">
                        <?php
                        $sectors = $section_five['sectors'];
                        foreach ($sectors as $key => $sector) {
                            $image = get_field('sector_icon',$sector->ID);
                            ?>
                            <div>
                                <div class="wrap animate" data-animate="fade-in-bottom">
                                    <a href="<?php echo get_permalink($sector->ID); ?>">
                                        <div class="box-icon">
                                            <img src="<?php echo $image['url'] ?>" alt="Arena <?php echo $sector->post_title;?> Icon Image | <?php echo $image['caption'] ?> | <?php echo $image['description'] ?> | <?php echo $image['alt'] ?>">
                                            <h5 class="title"><?php echo $sector->post_title; ?></h5>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        <?php }?>
                    </div>
                </div>

                <div class="horizontal-dots d-flex align-items-center">
                    <div id="box-icon-nav-bot">

                    </div>
                </div>

            </div>
        </div>
    </section>

<?php endif;?>

<?php
get_template_part('template-parts/section-next-section-template','section');

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

