<?php

/**

 * Template Name: Career

 * Description: The template for displaying consultancy page

 *

 */

get_header();
?>
<link href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/consultancy.css?v=<?php echo rand(1,99999999999); ?>" rel="stylesheet" />


<style>
    #opportunities .left {
        padding: 120px 100px;
    }
    .accordion-button::before {
        content: '';
        display: none;
    }
    .accordion-button::after {
        content: '';
        display: inline-block;
        width: 30px;
        height: 30px;
        min-width: 30px;
        min-height: 30px;
        background-color: #0c0c0c;
        border-radius: 50%;
        margin-right: 30px;
        background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/images/button-arrow.png);
        background-repeat: no-repeat;
        background-position: center;
        transition: margin-right 600ms, background-color 600ms, filter 600ms;
        background-size: 4px;
        filter: invert(1);
        transform: rotate(90deg);
    }

    .accordion-body {
        padding: 25px 15px 0px 0;
    }

    .accordion-button:after {
        margin-right: 0;
    }

    .accordion-flush .accordion-item {
        padding-bottom: 0;
    }
    body {
        background-color: #f7f7f7;
    }

    .value-carousel-arrows {
        display: flex;
        justify-content: center;
        margin: 0 -10px;
        width: 100%;
    }

    .value-carousel-arrows button {
        margin: 0 10px;
    }

    @media only screen and (max-width:991px) {
        #what-we-do .top .left {
            margin-bottom: 30px;
        }
        #opportunities .left {
            padding: 60px 100px;
        }

        #form form input[type="submit"] {
            width: 100%;
            height: 60px;
            margin-bottom: 0;
        }
    }

    .wpcf7-spinner {
        position: absolute;
        bottom: 0;
    }

    .accordion-flush .accordion-collapse .scroll {
    }

</style>
<!-- section one -->

<?php
$hero = get_field('hero');
if($hero):
    ?>
    <section class="top-banner-overflow" style="background-image:url(<?php echo $hero['banner_image']['url']; ?>)">
        <div class="container">
            <div class="row">
                <div class="col-md-6 align-items-center d-flex left">
                    <div class="">
                        <div class="overflow-hidden">
                            <p class="section-sub animate animated fade-in-left" data-animate="fade-in-left"><?php echo $hero['header']; ?></p>
                        </div>
                        <div>
                            <div class="overflow-hidden">
                                <h3 class="heading mb-40 animate animated fade-in-bottom" data-animate="fade-in-bottom"><?php echo $hero['sub_header']; ?></h3>
                            </div>
                            <a class="anim animate button-link animated fade-in-left white" data-animate="fade-in-left" href="<?php echo $hero['link_url']; ?>" tabindex="0"><?php echo $hero['link_text']; ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="scroll-text bottom-to-top">
            <div class="relative">
                <div class="inner">
                    <?php 
                        $string = $hero['header'];
                        $letters = str_split($string);
                        foreach($letters as $letter): 
                            echo !ctype_space($letter) ? '<span>'.$letter.'</span>' : '<span class="space"></span>';
                        endforeach;
                    ?>
                </div>
            </div>
        </div>
    </section>

<?php
endif;
?>

<?php

$section_one = get_field('section_one');

if ($section_one): ?>

<section id="what-we-do" class="overflow-hidden pull-up pb-60">
    <?php
    $top = $section_one['top'];
    if ($top): ?>
    <div class="container image-text box-white top">
        <div class="row">
            <div class="left col-lg-5 col-md-12 horizontal-dots left-dots d-flex flex-column justify-content-center">
                <div class="">
                    <div>
                        <div class="overflow-hidden">
                            <h3 class="medium-heading animate" data-animate="fade-in-left"><?php echo $top['header'];?></h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-1">
            </div>
            <div class="right col-lg-6 col-md-12 d-flex align-items-center">
                <div class="animate" data-animate="fade-in-left"><?php echo $top['text'];?></div>
            </div>
        </div>
    </div>
    <?php endif; ?>
        <?php
        $bottom = $section_one['bottom'];
        if ($bottom): ?>
        <div class="container image-text box-white pd-bot">
            <div class="row">
                <div class="left col-lg-6 col-md-12 horizontal-dots left-dots d-flex flex-column justify-content-center">
                    <div class="">
                        <div class="overflow-hidden img-animate">
                            <img class="parallax-img" src="<?php echo $bottom['image']['url'] ?>" alt=" Arena" width="100%">
                        </div>
                    </div>
                </div>
                <div class="col-md-1">
                </div>
                <div class="right col-lg-5 col-md-12 d-flex align-items-center">
                    <div>
                        <div class="overflow-hidden">
                            <h3 class="medium-heading animate mb-40" data-animate="fade-in-left"><?php echo $bottom['header'];?></h3>
                        </div>
                        <div class="animate" data-animate="fade-in-left"><?php echo $bottom['text'];?></div>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>
</section>

<?php endif; ?>


<?php
$section_two = get_field('section_two');
if ($section_two): $loop = 1; ?>

<section id="value" class="center-text section-pd pt-0 pb-60 gray-bg">
    <div class="container box-white pd-bot">
        <div class="row">
            <div class="col-md-12 mb-20">
                <div class="overflow-hidden">
                    <div class="medium-heading  mb-20 animate" data-animate="fade-in-bottom"><?php echo $section_two['header'];?></div>
                    <div class="animate mb-40" data-animate="fade-in-left">
                        <?php echo $section_two['text']; ?> 
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 horizontal-dots left-dots">
                <div class="line-icons values full-width <?php echo count($section_two['values']) ? 'line-icon-carousel' : 'd-flex align-items-center'; ?> box-tab-content active animate" data-animate="fade-in-bottom">
                    <?php 
                        if(count($section_two['values'])){
                            foreach($section_two['values'] as $value) {
                                ?>  
                                <div class="">
                                    <div class="line">
                                        <div class="wrap text-left ">
                                            <div class="line-icon  " data-animate="fade-in-bottom">
                                                <span class="number">0<?php echo $loop; ?>.</span>
                                                <h5 class="title"><?php echo $value['header'] ?></h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php
                            $loop++; 
                            }
                        } 
                    ?>
                </div>
                <div class="value-carousel-arrows"></div>
            </div>
        </div>
    </div>
</section>

<?php endif; ?>

<?php
$section_three = get_field('section_three');
if ($section_three): ?>

<section id="opportunities" class="center-text section-pd pt-0 pb-60 gray-bg">
    <div class="container image-text white-bg">
        <div class="row">
            <div class="left col-lg-5 col-md-12 horizontal-dots left-dots d-flex flex-column justify-content-center pt-60 pb-60 ">
                <div class="overflow-hidden">
                    <h3 class="medium-heading mb-20 animate animated fade-in-left" data-animate="fade-in-left"><p><?php echo $section_three['header']; ?></p></h3>
                </div>
                <div class="accordion accordion-flush" id="accordionFlushExample">
                    <?php 
                        $counter = 1;
                        foreach($section_three['opportunities'] as $item){
                    ?>
                        <div class="accordion-item animate" data-animate="fade-in-left">
                            <h2 class="accordion-header" id="flush-heading<?php echo $counter; ?>">
                            <button class="accordion-button <?php echo $counter > 1 ? 'collapsed' : ''; ?>" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse<?php echo $counter; ?>" aria-expanded=" <?php $counter > 1 ? 'false' : 'true'; ?>" aria-controls="flush-collapse<?php echo $counter; ?>">
                                <?php echo $item['header']; ?>
                            </button>
                            </h2>
                            <div id="flush-collapse<?php echo $counter; ?>" class="accordion-collapse collapse <?php echo $counter > 1 ? '' : 'show'; ?>" aria-labelledby="flush-heading<?php echo $counter; ?>" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <div class="scroll">
                                        <?php echo $item['text']; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
                        $counter++;
                    }
                    ?>
                </div>
            </div>
            <div class="col-lg-1"></div>
            <div class="right col-lg-6 col-md-12 d-flex align-items-center">
                <div class="overflow-hidden img-animate animated">
                    <div class="simpleParallax" style="overflow: hidden;"><img height="100%" class="parallax-img" src="<?php echo $section_three['image']['url']; ?>" alt=" Arena | " style="transform: translate3d(0px, 8px, 0px) scale(1.3); will-change: transform; transition: transform 0.6s cubic-bezier(0, 0, 0, 1) 0s;"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php endif; ?>

<?php
$section_four = get_field('section_four');
if ($section_four): ?>

<section id="form" class="center-text section-pd pt-0 gray-bg pb-0">
    <div class="container white-bg box-white pd-bot">
        <div class="row">
            <div class="col-lg-12 col-md-12 horizontal-dots left-dots d-flex flex-column justify-content-center pt-60 pb-60 ">
                <div class="overflow-hidden">
                    <h3 class="medium-heading mb-40 animate animated fade-in-left" data-animate="fade-in-left"><p><?php echo $section_four['header']; ?></p></h3>
                </div>
                <?php echo do_shortcode($section_four['form']); ?>
            </div>
        </div>
    </div>
</section>

<?php endif; ?>

<?php /* Template Part: Page Hero */ ?>
<style>
    .text-black {
        color: #000;
        text-decoration: none;
    }
</style>

<?php

$next = get_field('next_page');
$play = get_field('next_arrow', 'options');
if ($next) : ?>

    <section id="next-page" class="overflow-hidden section-pd gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-5 animate " data-animate="fade-in-left">
                    <div class="horizontal-dots left-dots">
                        <p class="section-sub"><?php echo $next['header'] ?></p>

                        <?php
                        if ($next['next_page_link']) : ?>
                            <a class="heading mb-60 text-black" href="<?php echo $next['next_page_link']['url']; ?>"> <?php echo $next['next_page_link']['title']; ?></a>
                    </div>
                </div>
                <div class="col-md-1">
                </div>
                <div class="col-md-6  d-flex flex-column justify-content-center animate " data-animate="fade-in-right">
                    <a href="<?php echo $next['next_page_link']['url']; ?>" class="button-link"></a>
                <?php endif; ?>
                </div>
            </div>
        </div>
    </section>

<?php endif; ?>

<?php
get_footer();
?>
    <script>
        $('.box-tab-nav button').on('click', function(){
            $('.box-tab-nav button').removeClass('active');

            $(this).addClass('active');
            index = $(this).index('.box-tab-nav button');

            $('.box-tab-content').removeClass('active');
            $('.box-tab-content').eq(index).addClass('active');
            $('.box-tab-content').eq(index).slick('refresh');
        });

        if($('.line-icon-carousel').length){
            $('.line-icon-carousel').slick({
                dots: false,
                arrows: false,
                infinite: true,
                speed: 1000,
                slidesToShow: 3,
                slidesToScroll: 1,
                responsive: [
                    {
                        breakpoint: 991,
                        settings: {
                            slidesToShow: 3,
                            arrows: true,
                            appendArrows: '.value-carousel-arrows'
                        }
                    },
                    {
                        breakpoint: 767,
                        settings: {
                            slidesToShow: 1,
                            arrows: true,
                            appendArrows: '.value-carousel-arrows'
                        }
                    },
                ]
            });
        }
          
    </script>
