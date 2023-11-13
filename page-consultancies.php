<?php

/**

 * Template Name: Consultancy

 * Description: The template for displaying consultancy page

 *

 */

get_header();
?>
<link href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/consultancy.css?v=<?php echo rand(1,99999999999); ?>" rel="stylesheet" />
<style>
</style>

<section id="hero" class="top-banner-overflow scrolling-text"  style="background-image:url(<?php echo get_stylesheet_directory_uri(); ?>/assets/images/consultancies/header-banner.png)">    
    <div class="container">
    <div class="scrollTrigger"></div>
        <div class="row">
            <div class="col-md-6 align-items-center d-flex left">
                <div class="">
                    <div class="overflow-hidden">
                        <p class="section-sub animate animated fade-in-left" data-animate="fade-in-left">Consultancy</p>
                    </div>
                    <div>
                        <div class="overflow-hidden">
                            <h3 class="heading mb-40 animate animated fade-in-bottom" data-animate="fade-in-bottom">Setting The <br/>Highest Standards</h3>
                        </div>
                        <a class="anim animate button-link animated fade-in-left white" data-animate="fade-in-left" href="#" tabindex="0">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
        <?php 
            $string = "Consultancy";
            $letters = str_split($string);
        ?>
        <div class="scroll-text bottom-to-top" style="">
            <div class="relative">
                <div class="inner">
                    <?php 
                        foreach($letters as $letter): 
                            echo !ctype_space($letter) ? '<span>'.$letter.'</span>' : '<span class="space"></span>';
                        endforeach;
                    ?>
                </div>
            </div>
        </div>
</section>

<!-- section one -->
<?php

// $section_one = get_field('section_one');

// if ($section_one): ?>

<section id="what-we-do" class="overflow-hidden pull-up">
        <div class="container image-text box-white">
            <div class="row">
                <div class="left col-lg-4 col-md-12 horizontal-dots left-dots d-flex flex-column justify-content-center">
                    <div class="">
                        <div>
                            <div class="overflow-hidden">
                                <h3 class="medium-heading mb-20 animate" data-animate="fade-in-left">What We Do</h3>
                                <h4 class="small-heading mb-20 animate" data-animate="fade-in-left">We aquire and consult our partners to scale and compete on a global level.
</h4>
                                <p>Currently employing 50 professionals in Dubai, providing cutting-edge techniques for navigating change. </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-1">
                </div>
                <div class="right col-lg-7 col-md-12">
                    <div class="overflow-hidden img-animate">
                        <img class="parallax-img" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/consultancies/top1.jpg" alt=" Arena" width="100%">
                    </div>
                </div>
            </div>
        </div>
</section>

<?php // endif; ?>


<?php

$section_one = get_field('section_one');

if ($section_one): ?>

<section id="other-services" class="center-text section-pd pt-0 pb-60 gray-bg">
    <div class="container box-white pd-bot">
        <div class="row mb-20">
            <div class="col-md-12">
                <div class="overflow-hidden">
                    <div class="animate" data-animate="fade-in-left">
                        <div class="medium-heading  mb-20 animate" data-animate="fade-in-bottom"><?php echo $section_one['sub_header'];?></div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="overflow-hidden">
                    <div class="animate" data-animate="fade-in-left">
                        <p class="animate" data-animate="fade-in-bottom">
                        Through various unique initiatives from strategy, sales, marketing, operations, training, and high-level introductory networking.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <select id="service-select">
                    <?php 
                        $types = get_terms('service_types', array(
                            'hide_empty' => false,
                            'order' => 'ASC',
                            'orderby'   => 'ID'
                        ));
                        $loop = 0;
                        foreach($types as $type){
                            ?>
                                <option value="<?php echo $type->term_id ?>"><?php echo $type->name ?></option>    
                            <?php
                            $loop++;
                        }
                    ?>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                    <?php 

                    $loop = 0;
                    foreach($types as $type){
                        $posts_array = get_posts(
                            array(
                                'posts_per_page' => -1,
                                'post_type' => 'services',
        						'order' => 'DESC',
                                'tax_query' => array(
                                    array(
                                        'taxonomy' => 'service_types',
                                        'field' => 'term_id',
                                        'terms' => $type->term_id,
                                    )
                                )
                            )
                        );
                        ?>
                        <div class="row">
                            <div class="col-md-12">
                                    <div id="" class="term_id_<?php echo $type->term_id; ?> new-line-box box-tab-content <?php echo $loop==0 ? 'active': ''; ?> animate" data-animate="fade-in-bottom">
                                        <?php 
                                            
                                            if(count($posts_array)){
                                                $loop = 1;
                                                foreach($posts_array as $p) {
                                                    ?>  
                                                        <div class="box">
                                                            <div class="line">
                                                            <?php

                                                            $hero = get_field('hero', $p->ID);
                                                            if($hero):
                                                                ?>

                                                                <?php if(isset($hero['video_mobile'])): ?>
                                                                    <?php if($hero['video_mobile']): ?>
                                                                        <video class="service-video-mobile" id="myVideo" autoplay="autoplay" muted loop playsinline>
                                                                            <source src="<?php echo $hero['video_mobile']; ?>">
                                                                            Your browser does not support the video tag.
                                                                        </video>
                                                                        <?php else: ?>
                                                                            <img src="<?php echo wp_get_attachment_image_src( get_post_thumbnail_id( $p->ID ), 'thumbnail' )[0]; ?>" class="img-hover"/>
                                                                        <?php endif; ?>
                                                                    <?php endif; ?>
                                                                <?php endif; ?>


                                                                <div class="wrap text-center ">
                                                                    <a href="<?php echo get_permalink($p); ?>">
                                                                        <div class="line-icon  " data-animate="fade-in-bottom">
                                                                            <span><?php echo $loop < 10 ? '0'.$loop : $loop; ?>.</span>
                                                                            <h5 class="title"><?php echo $p->post_title ?></h5>
                                                                        </div>
                                                                    </a>
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
                                    <?php
                                        $loop++; 
                                    }
                                    ?>
                            </div>
                        </div>
            </div>
        </div>
    </div>
</section>

<?php endif; ?>

<section id="approach" class="center-text section-pd pt-0 pb-60 gray-bg">
    <div class="container image-text white-bg">
        <div class="row reverse-mobile">
        <div class="right col-lg-6 col-md-12">
                <div>
                    <div class="overflow-hidden img-animate animated">
                        <div class="approach-carousel">
                            <div>
                                <div class="simpleParallax" style="overflow: hidden;"><img class="parallax-img" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/consultancies/shutterstock_1926742466.jpg" alt=" Arena | " style="transform: translate3d(0px, 8px, 0px) scale(1.3); will-change: transform; transition: transform 0.6s cubic-bezier(0, 0, 0, 1) 0s;"></div>
                            </div>
                            <div>
                                <div class="simpleParallax" style="overflow: hidden;"><img class="parallax-img" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/consultancies/shutterstock_1926742466.jpg" alt=" Arena | " style="transform: translate3d(0px, 8px, 0px) scale(1.3); will-change: transform; transition: transform 0.6s cubic-bezier(0, 0, 0, 1) 0s;"></div>
                            </div>
                            <div>
                                <div class="simpleParallax" style="overflow: hidden;"><img class="parallax-img" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/consultancies/shutterstock_1926742466.jpg" alt=" Arena | " style="transform: translate3d(0px, 8px, 0px) scale(1.3); will-change: transform; transition: transform 0.6s cubic-bezier(0, 0, 0, 1) 0s;"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="left col-lg-6 col-md-12 horizontal-dots left-dots d-flex flex-column justify-content-center">
                <div class="">
                    <div>
                        <div class="overflow-hidden">
                            <h3 class="medium-heading mb-20 animate animated fade-in-left" data-animate="fade-in-left"><p>Our Approach</p></h3>
                        </div>
                        <div class="approach-carousel-text">
                            <div>
                                <div class="overflow-hidden">
                                    <div class="row">
                                        <h3 class="small-heading mb-20 animate animated fade-in-left" data-animate="fade-in-left"><p>Macro Thinking</p></h3>
                                        <div class="col-md-12 animate animated fade-in-left mb-40" data-animate="fade-in-left"><p>With over 35 years of experience in owning and operating companies, we have crafted incredibly unique and successful techniques that will make businesses more profitable. </p></div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="overflow-hidden">
                                    <div class="row">
                                        <h3 class="small-heading mb-20 animate animated fade-in-left" data-animate="fade-in-left"><p>Macro Thinking</p></h3>
                                        <div class="col-md-12 animate animated fade-in-left mb-40" data-animate="fade-in-left"><p>With over 35 years of experience in owning and operating companies, we have crafted incredibly unique and successful techniques that will make businesses more profitable. </p></div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="overflow-hidden">
                                    <div class="row">
                                        <h3 class="small-heading mb-20 animate animated fade-in-left" data-animate="fade-in-left"><p>Macro Thinking</p></h3>
                                        <div class="col-md-12 animate animated fade-in-left mb-40" data-animate="fade-in-left"><p>With over 35 years of experience in owning and operating companies, we have crafted incredibly unique and successful techniques that will make businesses more profitable. </p></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- <section id="portfolio" class="overflow-hidden pb-60 gray-bg">
    <div class="container image-text box-white pd-bot">
        <div class="row mb-40">
            <div class="col-lg-6 col-md-6">
                <h3 class="medium-heading mb-20 animate" data-animate="fade-in-left"><p>Our Portfolio</p></h3>
                <p class=" animate" data-animate="fade-in-bottom">We build brands with 360° solutions to grow your business online.</p>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class=" arrow-wrap animate" data-animate="fade-in-right">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="portfolio-carousel">
                    <div>
                        <a href="<?php echo get_permalink($consultancy); ?>">
                            <div class="line-icon  " data-animate="fade-in-bottom">
                                <img class="animate" data-animate="fade-in-top" width="100%" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/consultancies/portfolio.png" alt="Arena">
                                <p class="section-sub animate" data-animate="fade-in-left">Consultancy</p>
                                <h5 class="small-heading animate" data-animate="fade-in-left">Lorem ipsum dolor sit amet, consectetur adipiscing.</h5>
                            </div>
                        </a>
                    </div>
                    <div>
                        <a href="<?php echo get_permalink($consultancy); ?>">
                            <div class="line-icon  " data-animate="fade-in-bottom">
                                <img class="animate" data-animate="fade-in-top"  width="100%" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/consultancies/portfolio.png" alt="Arena">
                                <p class="section-sub animate animated fade-in-left" data-animate="fade-in-left">Consultancy</p>
                                <h5 class="small-heading animate" data-animate="fade-in-left">Lorem ipsum dolor sit amet, consectetur adipiscing.</h5>
                            </div>
                        </a>
                    </div>
                    <div>
                        <a href="<?php echo get_permalink($consultancy); ?>">
                            <div class="line-icon  " data-animate="fade-in-bottom">
                                <img class="animate" data-animate="fade-in-top"  width="100%" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/consultancies/portfolio.png" alt="Arena ">
                                <p class="section-sub  animate" data-animate="fade-in-left">Consultancy</p>
                                <h5 class="small-heading animate" data-animate="fade-in-left">Lorem ipsum dolor sit amet, consectetur adipiscing.</h5>
                            </div>
                        </a>
                    </div>
                    <div>
                        <a href="<?php echo get_permalink($consultancy); ?>">
                            <div class="line-icon" data-animate="fade-in-bottom">
                                <img class="animate" data-animate="fade-in-top"  width="100%" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/consultancies/portfolio.png" alt="Arena">
                                <p class="section-sub  animate" data-animate="fade-in-left">Consultancy</p>
                                <h5 class="small-heading animate" data-animate="fade-in-left">Lorem ipsum dolor sit amet, consectetur adipiscing.</h5>
                            </div>
                        </a>
                    </div>
                    <div>
                        <a href="<?php echo get_permalink($consultancy); ?>">
                            <div class="line-icon  " data-animate="fade-in-bottom">
                                <img class="animate" data-animate="fade-in-top"  width="100%" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/consultancies/portfolio.png" alt="Arena">
                                <p class="section-sub  animate" data-animate="fade-in-left">Consultancy</p>
                                <h5 class="small-heading animate" data-animate="fade-in-left">Lorem ipsum dolor sit amet, consectetur adipiscing.</h5>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="testimonials" class="overflow-hidden gray-bg">
    <div class="container image-text box-white pd-bot">
        <div class="row mb-40">
            <div class="col-lg-12 mb-40">
                <h3 class="medium-heading mb-20 animate animated fade-in-left" data-animate="fade-in-left"><p>Testimonials</p></h3>
                <p class=" animate" data-animate="fade-in-left">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
            </div>
        </div>
        <div class="row reverse-mobile">
            <div class="col-lg-4 col-md-12">
                <div class="arrows-wrap mb-20">
                </div>
                <div class="testimonial-carousel">
                    <?php for($x=0;$x<5;$x++){ ?>
                        <div>
                            <div class="mb-40" data-animate="fade-in-bottom">
                                <h5 class="small-heading mb-20 quote">"Lorem ipsum dolor sit amet, consectetur adipiscing."</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas.</p>
                            </div>
                            <div class="author mb-30 animate" data-animate="fade-in-bottom">
                                <div>
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/consultancies/testi.png">
                                </div>
                                <div class="subs animate" data-animate="fade-in-left">
                                    <h6>Person's Name</h6>
                                    <p class="designation ">Designation at Invisalign</p>
                                </div>
                            </div>

                            <hr class=""/>

                            <div class="mb-20 subs animate" data-animate="fade-in-left">
                                <p class="head">Project Summary</p>
                                <p class="gray">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut</p>
                            </div>

                            <div class="row subs">
                                <div class="col-md-4 animate" data-animate="fade-in-bottom">
                                    <p class="head">Country</p>
                                    <p class="gray">UAE</p>
                                </div>
                                <div class="col-md-4 animate" data-animate="fade-in-bottom">
                                    <p class="head">Industry</p>
                                    <p class="gray">Healthcare</p>
                                </div>
                                <div class="col-md-4 animate" data-animate="fade-in-bottom">
                                    <p class="head">Team Size</p>
                                    <p class="gray">6 Specialist</p>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
            <div class="col-lg-1 col-md-12"></div>
            <div class="col-lg-7 col-md-12">
                <div class="" data-animate="fade-in-bottom">
                    <div class="overflow-hidden img-animate">
                        <img class="parallax-img" width="100%" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/consultancies/testi.png" alt="Arena">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->

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
