<?php

/**

 * Template Name: Service Single

 * Description: The template for displaying consultancy page

 *

 */

get_header();
?>
<style>
    
    #figures .large-header {
        margin-bottom: 0;
        font-weight: 300;
        font-size: 100px;
    }

    body {
        background-color: #f7f7f7;
    }

    .process-carousel .slick-slide img, .process-carousel .tabs-content {
        margin-bottom: 30px;
    }

    .portfolio-carousel .slick-slide {
        margin-bottom: 30px;
    }

    .portfolio-carousel .slick-dots {
        margin-left: 15px;
    }
	
	.process-carousel-navs button:first-of-type {
		margin-right: 20px;
	}

</style>
<link href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/consultancy.css?v=<?php echo rand(1,99999999999); ?>" rel="stylesheet" />

<?php

$hero = get_field('hero');
if($hero):
    ?>
    <section id="hero" class="top-banner-overflow scrolling-text" style="background-image:url(<?php echo $hero['banner_image']['url']; ?>)">
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
        <?php 
            $string = $hero['header'];
            $letters = str_split($string);
        ?>
        <div class="scroll-text bottom-to-top" style="top: -<?php echo count($letters); ?>%">
            <div class="relative">
                <div class="inner">
                    <?php 
                        $loops = 1;
                        foreach($letters as $letter){

                            if($loops < 20)
                                echo !ctype_space($letter) ? '<span>'.$letter.'</span>' : '<span class="space"></span>';
                            $loops++;
                        }
                    ?>
                </div>
            </div>
        </div>
    </section>

<?php endif; ?>
<!-- section one -->
<?php

$section_one = get_field('section_one');

if ($section_one): ?>

<section id="what-we-do" class="overflow-hidden pull-up">
        <div class="container image-text box-white pd-bot">
            <div class="row">
                <div class="left col-lg-4 col-md-12 horizontal-dots left-dots d-flex flex-column justify-content-center">
                    <div class="">
                        <div>
                            <div class="overflow-hidden">
                                <!-- <h3 class="medium-heading mb-40 animate" data-animate="fade-in-left"><?php echo $section_one['header'];?></h3> -->
                                <h4 class="medium-heading mb-40 animate" data-animate="fade-in-left"><?php echo $section_one['sub_header'];?></h4>
                                <p><?php echo $section_one['text'];?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-1">
                </div>
                <div class="right col-lg-7 col-md-12">
                    <div class="overflow-hidden img-animate">
                        <img class="parallax-img" src="<?php echo $section_one['image']['url']; ?>" alt=" Arena" width="100%">
                    </div>
                </div>
            </div>
        </div>
</section>

<?php endif; ?>


<?php
$section_two = get_field('section_two');
if ($section_two): ?>

<section id="figures" class="center-text section-pd pt-0 pb-60 pt-60 gray-bg">
    <div class="container">
        <div class="row">
            <?php 
            foreach($section_two['items'] as $item){
            ?>
                <div class="col-lg-4 col-md-4 text-center">
                    <div>
                        <h3 class="large-header animate" data-animate="fade-in-right"><?php echo $item['header']; ?><?php echo $item['header_symbol']; ?></h3>
                        <p class=" animate" data-animate="fade-in-left"><?php echo $item['sub_header']; ?></p>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
</section>

<?php endif; ?>

<?php
$section_three = get_field('section_three');
if ($section_three): ?>

<section id="quote" class="overflow-hidden pb-60 gray-bg">
    <div class="container image-text box-white pd-bot text-center">
        <p class="mb-40 animate" data-animate="fade-in-top"><?php echo $section_three['text']; ?></p>
        <a class="anim animate button-link" data-animate="fade-in-bottom" href="<?php echo $section_three['link_url']; ?>" tabindex="0"><?php echo $section_three['link_text']; ?></a>
    </div>
</section>

<?php endif; ?>

<?php
$section_four = get_field('section_four');
if ($section_four && $section_four['processes']): ?>

<section id="our-process" class="center-text section-pd pt-0 pb-60 gray-bg">
    <div class="container box-white pd-bot">
        <div class="row">
            <div class="col-md-12">
                <div class="overflow-hidden">
                    <div class="medium-heading animate mb-40" data-animate="fade-in-bottom"><?php echo $section_four['heading']; ?></div>
                </div>
            </div>
        </div>
        <?php if($section_four['processes']): ?>
            <div class="row desktop-only">
                <div class="col-md-12">
                    <div class="tabs-nav mb-40">
                        <div class="nav-items-carousel tabs-nav">
                            <?php 
                                $counter = 1;
                                foreach($section_four['processes'] as $item){
                            ?>
                                    <div class=""><button class="fade-in-bottom <?php echo $counter==1 ? 'active' : ''; ?> "><?php echo $counter. '. '.$item['title']; ?></button></div>
                            <?php
                                $counter++;
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="process-carousel horizontal-dots start">
                        <?php 
                            $counter = 1;
                            foreach($section_four['processes'] as $item){
                        ?>
                            <div class="tabs-content <?php echo $counter==1 ? 'active' : ''; ?>">
                                <div class="row">
                                    <div class="col-lg-5">
                                        <div class="overflow-hidden">
                                            <img class="animate" data-animate="fade-in" src="<?php echo $item['image']['url'] ?>" alt="<?php echo $item['title']; ?>" width="100%">
                                        </div>
                                    </div>
                                    <div class="col-lg-1"></div>
                                    <div class="col-lg-5">
                                        <div class="d-flex flex-column justify-content-center h-100">
                                            <div class="overflow-hidden">
                                                <h3 class="small-heading mb-20 animate" data-animate="fade-in-left"><?php echo $counter. '. '.$item['title']; ?></h3>
                                                <div class="animate" data-animate="fade-in-bottom"><?php echo $item['text']; ?></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php
                            $counter++;
                        }
                        ?>
                        </div>
						<div class="process-carousel-navs"></div>
                    </div>
                </div>
        <?php endif; ?>
    </div>
</section>

<?php endif; ?>


<?php
$section_five = get_field('section_five');
if ($section_five): 

    $posts_array = get_posts(
        array(
            'post_type' => 'portfolios',
            'posts_per_page' => -1 
        )
    );

    if($posts_array){
    ?>
        <section id="portfolio" class="overflow-hidden pb-60 gray-bg">
            <div class="container image-text box-white pd-bot">
                <div class="row mb-40">
                    <div class="col-lg-10">
                        <h3 class="medium-heading mb-20 animate animated fade-in-left" data-animate="fade-in-left"><?php echo $section_five['header']; ?></h3>
                        <p class="animate" data-animate="fade-in-left"><?php echo $section_five['text']; ?></p>
                    </div>
                    <div class="col-lg-2">
                        <div class=" arrow-wrap animate" data-animate="fade-in-right">
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="portfolio-carousel horizontal-dots start">
                            <?php 
                                foreach($posts_array as $spost):
                                    if(in_array($post->ID, get_field('service_type',$spost->ID))){
                                    $image = wp_get_attachment_image_src(get_post_thumbnail_id($spost->ID), 'thumbnail');
                                ?>  
                                    <div>
                                        <a href="<?php echo get_field('site_url',$spost->ID); ?>" target="_blank">
                                            <div class="line-icon">
                                                <div class="imgwrap">
                                                    <div class="hover" style="background-image:url(<?php echo get_field('client_logo',$spost->ID) ? get_field('client_logo',$spost->ID)['url'] : ''; ?>)"></div>
                                                    <img width="100%" src="<?php echo $image ? $image[0] : '' ; ?>" alt="<?php echo $spost->title; ?>" />
                                                </div>
                                                <p class="section-sub" data-animate="fade-in-left"><?php echo get_field('client',$spost->ID); ?></p>
                                                <h5 class="small-heading" data-animate="fade-in-left"><?php echo $spost->post_title; ?></h5>
                                            </div>
                                        </a>
                                    </div>
                            <?php
                                    }
                                endforeach;
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    <?php 
    }
endif; 
?> 

<?php
$section_six = get_field('section_six');
if ($section_six && $section_six['faqs']): ?>

<section id="faqs" class="overflow-hidden pb-60 gray-bg">
    <div class="container image-text box-white pd-bot">
        <div class="row mb-40">
            <div class="col-lg-6 col-md-6">
                <h3 class="medium-heading mb-20 animate animated fade-in-left" data-animate="fade-in-left"><?php echo $section_six['header']; ?></h3>
            </div>
            <div class="col-lg-6 col-md-6">
            </div>
        </div>

        <?php if($section_six['faqs']): ?>
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <?php 
                            $counter = 1;
                            foreach($section_six['faqs'] as $item){
                        ?>
                            <div class="accordion-item animate" data-animate="fade-in-left">
                                <h2 class="accordion-header" id="flush-heading<?php echo $counter; ?>">
                                <button class="accordion-button <?php echo $counter > 1 ? 'collapsed' : ''; ?>" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse<?php echo $counter; ?>" aria-expanded=" <?php $counter > 1 ? 'false' : 'true'; ?>" aria-controls="flush-collapse<?php echo $counter; ?>">
                                    <?php echo $item['question']; ?>
                                </button>
                                </h2>
                                <div id="flush-collapse<?php echo $counter; ?>" class="accordion-collapse collapse <?php echo $counter > 1 ? '' : 'show'; ?>" aria-labelledby="flush-heading<?php echo $counter; ?>" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <?php echo $item['answer']; ?>
                                </div>
                            </div>
                        <?php
                            $counter++;
                        }
                        ?>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </div>
</section>

<?php endif; ?>

<?php
$section_seven = get_field('section_seven');
if ($section_seven && $section_seven['form']): ?>

<section id="form" class="center-text section-pd pt-0 pb-60 gray-bg">
    <div class="container image-text white-bg">
        <div class="row">
        <div class="right col-lg-5 col-md-12">
            <div>
                <div class="overflow-hidden img-animate animated">
                    <div class="simpleParallax" style="overflow: hidden;"><img width="100%" class="parallax-img" src="<?php echo $section_seven['image']['url']; ?>" alt="Arena | <?php echo $section_seven['heading']; ?>" style="transform: translate3d(0px, 8px, 0px) scale(1.3); will-change: transform; transition: transform 0.6s cubic-bezier(0, 0, 0, 1) 0s;"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-1"></div>
        <div class="left col-lg-5 col-md-12 horizontal-dots left-dots d-flex flex-column justify-content-center">
            <div class="">
                <div>
                    <div class="overflow-hidden">
                        <h3 class="medium-heading mb-40 animate animated fade-in-left" data-animate="fade-in-left"><?php echo $section_seven['heading']; ?></h3>
                    </div>
                    <div id="consultationform">
                        <?php echo do_shortcode($section_seven['form']); ?>
                        <?php // echo do_shortcode('[zohoForms src=https://forms.zohopublic.com/alexa10/form/ARENAConsultancyForm/formperma/JFSWLSjJ2-Bo8ZP2xT-65fOCQcyfYWYoJv8MTv1Vues width=100% height=600px type=js autoheight=true/]'); ?>
						
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-1"></div>
    </div>
</section>

<?php endif; ?>

<?php
$section_eight = get_field('section_eight');
if ($section_eight): ?>

<section id="other-services" class="center-text section-pd pt-0 pb-60 gray-bg">
    <div class="container box-white pd-bot">
        <div class="row">
            <div class="col-md-12 mb-20">
                <div class="overflow-hidden">
                    <div class="medium-heading  mb-20 animate" data-animate="fade-in-bottom"><?php echo $section_eight['header'];?></div>
                    <div class="animate" data-animate="fade-in-left">
                        <?php echo $section_eight['text']; ?> 
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 horizontal-dots left-dots">

                <div class="box-tab-nav mb-40">
                <?php 
                    $types = get_terms('service_types', array(
                        'hide_empty' => false,
                    ));
                    $loop = 0;
                    foreach($types as $type){
                        ?>
                            <div class="animate" data-animate="fade-in-top"><button class="<?php echo $loop==0 ? 'active': ''; ?>"><?php echo $type->name ?></button></div>    
                        <?php
                        $loop++;
                    }
                ?>
                    </div>
                    <?php 

                    $loop = 0;
                    foreach($types as $type){
                        $posts_array = get_posts(
                            array(
                                'posts_per_page' => -1,
                                'post_type' => 'services',
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
                        <div class="line-icons full-width <?php echo count($posts_array) ? 'line-icon-carousel' : 'd-flex align-items-center'; ?> box-tab-content <?php echo $loop==0 ? 'active': ''; ?> animate" data-animate="fade-in-bottom">
                            <?php 
                                
                                if(count($posts_array)){

                                    foreach($posts_array as $p) {
                                        ?>  
                                            <div class="">
                                                <div class="line">
                                                    <div class="wrap text-center ">
                                                        <a href="<?php echo get_permalink($p); ?>">
                                                            <div class="line-icon  " data-animate="fade-in-bottom">
                                                                <img src="<?php echo get_field('icon', $p)['url']; ?>" alt="Arena">
                                                                <h5 class="title"><?php echo $p->post_title ?></h5>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php
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
    
    $('input[name="service"]').val('<?php echo $post->post_title; ?>');

    $('.portfolio-carousel').slick({
        arrows: true,
        loop: true,
        appendArrows: '#portfolio .arrow-wrap',
        slidesToShow: 3,
        slidesToScroll: 1,
        responsive: [
            {
                breakpoint: 991,
                settings: {
                    slidesToShow: 1,
                    dots: true,
                    arrows: false,
                }
            }
        ]
    });
    
    $('.nav-items-carousel').slick({
        arrows: false,
        infinite: false,
        centerMode: true,
        variableWidth: false,
        slidesToShow: 3,
        slidesToScroll: 1,
        initialSlide: 1,
        responsive: [
            {
                breakpoint: 991,
                settings: {
                    slidesToShow: 2,
                }
            },
            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 2,
                }
            }
        ]
    });
    
    $('.process-carousel').slick({
        arrows: false,
        infinite: false,
        fade: true,
        slidesToShow: 1,
        slidesToScroll: 1,
		appendArrows: '.process-carousel-navs', 
        responsive: [
            {
                breakpoint: 991,
                settings: {
                    dots: true
                }
            },
            {
                breakpoint: 620,
                settings: {
                    dots: false,
        			arrows: true,
                }
            }
        ]
    });
    
    if($('.line-icon-carousel').length){
        $('.line-icon-carousel').slick({
            dots: false,
            arrows: false,
            infinite: true,
            speed: 1000,
            slidesToShow: 4,
            slidesToScroll: 1,
            centerMode: false,
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

    // $(window).resize(function(e){
    //     checkMobile();
    // });

    // function checkMobile(){
    //     if(window.innerWidth < 991) {
    //         if(!$('.carousel-on-mobile').hasClass('slick-initialized')){
    //             $('.carousel-on-mobile').slick({
    //                 infinite: true,
    //                 nav: false,
    //                 dots: false,
    //                 arrows: false,
    //                 autoplay: false,
    //                 autoplaySpeed: 5000,
    //                 slidesToShow: 1,
    //                 slidesToScroll: 1,
    //                 dots: false,
    //                 arrows: true,
    //                 adaptiveHeight: true
    //             });
    //         }
    //     } else {
    //         if($('.carousel-on-mobile').hasClass('slick-initialized')){
    //             $('.carousel-on-mobile').slick('unslick');
    //         }
    //     }
    // }

    // checkMobile();
</script>
