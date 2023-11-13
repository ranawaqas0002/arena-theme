<?php

/**

 * Template Name: Investments

 * Description: The template for displaying investments page

 *

 */

get_header();
?>
<link href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/consultancy.css?v=<?php echo rand(1,99999999999); ?>" rel="stylesheet" />
<style>

    #investments .wrap {
        display: flex;
        flex-flow: column;
        min-height: 220px;
        justify-content: space-between;
        margin-bottom: 40px;
    }

    #investments .wrap p {
        font-size: 16px;
        line-height: 26px;
    }

    body {
        background-color: #f7f7f7 !important;
    }

    .pull-up {
        margin-top: -410px;
        z-index: 2;
    }
    
    .top-banner-overflow {
        height: 1050px;
    }

    #portfolio a {
        text-decoration: none !important;
        color: #000 !important;
    }

    #portfolio .hover-icon:hover .hover {
        opacity: 1;
    }

    @media only screen and (max-width: 991px) {
        .pull-up {
            margin-top: -500px;
        }
    }

    @media only screen and (max-width: 767px) {
        #investments .wrap {
            min-height: 230px;
            margin-bottom: 50px;
        }
    }

    @media only screen and (max-width: 480px) {
        .top-banner-overflow.has-mobile-video .left {
            height: 500px !important;
        }

        .companylogo {
            max-width: 120px;
            width: 100%;
        }
    }
</style>

<?php
$hero = get_field('hero');
if($hero):
    ?>

	<?php $menuColor = get_field('menu_color');  ?>
    <section id="hero" class="top-banner-overflow scrolling-text <?php echo $hero['video'] ? 'has-video' : '' ?> <?php echo $hero['video_mobile'] ? 'has-mobile-video' : '' ?> <?php echo $menuColor; ?>" style="<?php echo $hero['background_color'] ? 'background-color:'.$hero['background_color'] : ''; ?>; background-image: <?php echo $hero['video'] ? 'none' : 'url('.$hero['banner_image']['url'].')'; ?>">
    <!-- <section id="hero" class="top-banner-overflow scrolling-text <?php echo $menuColor; ?>" style=""> -->

    <?php if(isset($hero['video'])): ?>
            <?php if($hero['video']): ?>
                <video class="service-video" id="myVideo" autoplay="autoplay" muted loop playsinline>
                    <source src="<?php echo $hero['video']; ?>">
                    Your browser does not support the video tag.
                </video>
            <?php endif; ?>
        <?php endif; ?>

        <?php if(isset($hero['video_mobile'])): ?>
            <?php if($hero['video_mobile']): ?>
                <video class="service-video-mobile" id="myVideo" autoplay="autoplay" muted loop playsinline>
                    <source src="<?php echo $hero['video_mobile']; ?>">
                    Your browser does not support the video tag.
                </video>
            <?php endif; ?>
        <?php endif; ?>

        <div class="scrollTrigger"></div>
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
    </section>

<?php endif; ?>
<!-- section one -->
<?php

$section_one = get_field('section_one');

if ($section_one): ?>

<section id="what-we-do" class="overflow-hidden pull-up mb-40">
        <div class="container box-white pd-bot">
            <div class="row">
                <div class="left col-lg-5 col-md-12 horizontal-dots left-dots d-flex flex-column justify-content-center">
                    <div class="">
                        <div>
                            <div class="overflow-hidden">
                                <h3 class="medium-heading mb-20 animate" data-animate="fade-in-left"><?php echo $section_one['header']; ?></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-1">
                </div>
                <div class="right col-lg-6 col-md-12">
                    <p><?php echo $section_one['text']; ?></p>
                </div>
            </div>
        </div>
</section>

<?php endif; ?>


<?php

$investments = get_field('investments');

if ($investments): ?>

<section id="investments" class="center-text section-pd pt-0 pb-60 gray-bg">
    <div class="container box-white pd-bot">
        <div class="row mb-20">
            <div class="col-md-12">
                <div class="overflow-hidden">
                    <div class="animate" data-animate="fade-in-left">
                        <div class="medium-heading  mb-20 animate" data-animate="fade-in-bottom"><?php echo $investments['header'];?></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div id="portfolio">
                    <div class="row">
                        <?php 
                            $posts_array = get_posts(
                                array(
                                    'posts_per_page' => -1,
                                    'post_type' => 'our_investments',
                                    'orderby' => 'id',
                                    'order' => 'ASC',
                                )
                            );
                                if(count($posts_array)){
                                    $loop = 1;
                                    foreach($posts_array as $p) {
                                        ?>  
                                        <div class="col-lg-4 col-md-6 hover-icon">

                                            <a href="<?php echo get_permalink($p); ?>">
                                                <div class="imgwrap  mb-40">
                                                    <div class="hover" style="background-image: url(<?php echo get_field('hover_logo',$p->ID)['url']; ?>)"></div>
                                                    <img src="<?php echo wp_get_attachment_image_src( get_post_thumbnail_id( $p->ID ), 'thumbnail' )[0]; ?>" class="img-hover" width="100%"/>
                                                </div>
                                            </a>

                                            <div class="wrap">
                                                <div>
                                                    <a href="<?php echo get_permalink($p); ?>">
                                                        <h5 class="small-heading"><?php echo $p->post_title ?></h5>
                                                        <p class=""><?php echo get_field('details', $p->ID); ?></p>
                                                    </a>
                                                </div>

                                                <div>
                                                    <a class="anim animate button-link" data-animate="fade-in-bottom" href="<?php echo the_permalink($p); ?>" tabindex="0">Read More</a>
                                                </div>
                                            </div>
                                        </div>
                                        <?php
                                        $loop++;
                                        }
                                } else {
                                    echo '<p style="padding-left:15px;">Coming soon...</p>';
                                }
                            ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php endif; ?>

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

        if($('.line-icon-carousel').length){
            $('.line-icon-carousel').slick({
                dots: true,
                arrows: false,
                infinite: true,
                speed: 1000,
                slidesToShow: 4,
                slidesToScroll: 1,
                responsive: [
                    {
                        breakpoint: 991,
                        settings: {
                            slidesToShow: 3,
                            dots: true
                        }
                    },
                    {
                        breakpoint: 767,
                        settings: {
                            slidesToShow: 2,
                            dots: true
                        }
                    },
                ]
            });
        }
        

        if($('.approach-carousel').length){

            if($('.approach-carousel-text').length){

                $('.approach-carousel').slick({
                    arrows: false,
                    dots: true,
                    appendDots: '.dots-wrap',
                    asNavFor: '.approach-carousel-text',
                    adaptiveHeight: true
                });
                $('.approach-carousel-text').slick({
                    arrows: false,
                    dots: true,
                    fade: true,
                    asNavFor: '.approach-carousel',
                    adaptiveHeight: true
                });
            } else {
                $('.approach-carousel').slick({
                    arrows: false,
                    dots: true,
                    appendDots: '.dots-wrap',
                    adaptiveHeight: true
                });
            }


            $('.portfolio-carousel').slick({
                arrows: true,
                infinite: false,
                appendArrows: '#portfolio .arrow-wrap',
                slidesToShow: 3,
                slidesToScroll: 1,
                responsive: [
                    {
                        breakpoint: 991,
                        settings: {
                            slidesToShow: 1,
                            dots: false
                        }
                    }
                ]
            });

            $('.testimonial-carousel').slick({
                arrows: true,
                loop: true,
                fade: true,
                appendArrows: '#testimonials .arrows-wrap',
                slidesToShow: 1,
                slidesToScroll: 1
            });
        }   
    </script>
