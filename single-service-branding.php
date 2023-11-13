<?php
/**
* Template Name: Branding Template
* Template Post Type: services
*/

get_header();
?>
<style>
    
    #figures .large-header {
        margin-bottom: 0;
        font-weight: 500;
        font-size: 100px;
    }

    body {
        background-color: #f7f7f7;
    }

	.image-text .right {
		display: flex;
		align-content: center;
	}
	
    .process-carousel .slick-slide img, .process-carousel .tabs-content {
        margin-bottom: 0;
    }

    .portfolio-carousel .slick-dots {
        margin-left: 15px;
    }

	
	.process-carousel-navs button:first-of-type {
		margin-right: 20px;
	}

    .process-carousel .tabs-content p {
        margin-bottom: 0;
    }
	
    .process-carousel .tabs-content p span {
        font-weight: 300 !important;
    }
	
	.process-carousel .slick-dots {
		margin-top: 20px;
	}

    .line-icons.values .line {
        height: 520px !important;
    }

    .stars span {
        display: inline-block;
        width: 14px;
        height: 14px;
        background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/images/star-icon.png');
        background-repeat: no-repeat;
    }

    .stars {
        text-align: right;
    }

    .testimonial-summary {
        font-size: 14px;
    }

    .testimonial-heading {
        font-size: 24px;
        font-weight: 400;
    }

    .testimonial-copy, .testimonial-client {
        font-size: 18px;
    }

    .testimonial-summary .text {
        font-size: 16px;
        color: #bababa;
    }

    .arrow-wrap.justify-content-start button:first-of-type {
        margin-left: 0;
    }

    #banner_section, #banner_section h3 {
        color: #fff;
    }

    #banner_section h3 {
        font-weight: 500;
    }

    #banner_section a {
        font-size: 16px;
        padding: 0 70px;
        text-align: center;
        background-color: #fff;
        text-decoration: none;
        margin-top: 40px;
        display: inline-flex;
        height: 50px;
        align-items: center;
        transition: opacity 800ms;
    }

    #banner_section a:hover {
        opacity: .8;
        color: #000;
    }

    .wpcf7-list-item {
        display: inline-block;
        width: 100%;
        margin-left: 0;
    }

    .wpcf7-list-item {
        margin-bottom: 15px;
    }

    .wpcf7-list-item span {
        height: 50px;
        padding: 0 15px;
        border: 1px solid #ccc;
        display: inline-flex;
        width: 100%;
        align-items: center;
        transition: background-color 600ms;
    }

    .wpcf7-list-item span:before {
        display: inline-block;
        width: 30px;
        height: 30px;
        background-color: #f7f7f7;
        border-radius: 50%;
        content: '';
        margin-right: 20px;
        transition: background-color 600ms;
        background-repeat: no-repeat;
        background-position: center;
    }

    .wpcf7-list-item input[type="checkbox"] {
        display: none;
    }

    .wpcf7-list-item input[type="checkbox"]:checked + span {
        background-color: #000;
        color: #fff;
    }

    .wpcf7-list-item input[type="checkbox"]:checked + span:before {
        background-color: #fff;
        background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/images/checkbox.png');
    }

    .wpcf7-form .small-heading {
        font-size: 24px;
        text-align: center;
        line-height: 36px;
        margin-bottom: 45px;
        font-weight: 400;
    }

    .cf7mls_next {
        background-image: none !important;
        filter: invert(0);
        height: 50px;
        line-height: 50px;
        background-color: #000 !important;
        color: #fff;
        font-size: 14px;
        text-transform: capitalize;
        width: 30%;
        transition: filter 600ms;
        border-radius: 0 !important;
        padding: 0 !important;
        margin-top: 0 !important;
    }
	
	.why-carousel img {
		max-width: 150px;
	}
	
	#why-arena .simpleParallax {
		max-height: 650px;
	}
</style>


<style>

.step {
            display: none;
        }

        .step.active {
            display: inline-block;
        }

        .step::last-of-type .step-next {
            display: none;
        }

        .nav-row {
            display: inline-block;
            width: 100%;
            display: flex;
            justify-content: space-between;
        }

        #form-progress {
            display: flex;
            text-align: center;
            justify-content: center;
            overflow: hidden;
            margin-bottom: 40px;
        }

        #form-progress .stepname {
            font-size: 14px;
            width: 100%;
        }

        #form-progress div {
            display: inline-block;
        }

        #form-progress .stepval {
            font-size: 14px;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 50%;
            width: 28px;
            height: 28px;
            transition: background-color 300ms;
            overflow: hidden;
            z-index: 2;
            position: relative;
            color: #ccc;
            line-height: 26px;
        }

        #form-progress .prog::before {
            content: '';
            display: inline-block;
            width: 100%;
            height: 1px;
            background-color: #ccc;
            z-index: 1;
        }

        #form-progress .prog {
            position: relative;
            width: 100px;

        }

        #form-progress .prog.active {
            opacity: 1;
        } 

        #form-progress .prog.finished::before {
            background-color: #000;
        }

        #form-progress .prog.active .stepval, #form-progress .prog.finished .stepval {
            border: 1px solid #000;
            color: #000;
        }

        #form-progress .prog.active .stepname, #form-progress .prog.finished .stepname {
            color: #000;
        }

        #form-progress .prog.finished {
            opacity: 1 !important;
        }

        #form-progress .prog.finished .stepval {
            background-color: #000;
            text-indent: 100px;
            opacity: 1 !important;
            overflow: hidden;
            background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/Tick_Icon.svg');
            background-repeat: no-repeat;
            background-position: center;
            background-size: 15px;
        }

        .step-next {
            background-color: #000;
            color: #fff;
            width: 300px;
            float: left;
            transition: color 300ms, background-color 300ms;
            border: 1px solid #000;
            height: 52px;
            line-height: 50px;
            padding-top: 0 !important;
            padding-bottom: 0 !important;
        }

        .step-next:hover {
            background-color: #fff;
            color: #000;
        }

        .step-prev {
            background-color: transparent;
            border: 0;
            color: #000;
            float: right;
            height: 38px;
            line-height: 52px;
            border-bottom: 1px solid #000;
            padding: 0;
        }

        .why-carousel .slick-dots {
            justify-content: start !important;
        }

        #why-arena .image-text .right {
            padding-top: 60px;
            padding-bottom: 60px;
        }

        #why-arena .simpleParallax {
            height: 100%;
        }

        #why-arena .simpleParallax img {
            height: 110%;
            width: auto;
        }

        #banner_section .image-text {
            background-size: 100%  auto ;
			background-position: right center;
        }
	
		.logo_carousel {
			margin: 0 -20px;
		}

		.logo_carousel .slick-slide .overflow-hidden {
			text-align: center;
			height: 300px;
			background-color: #fff;
			display: flex;
			justify-content: center;
			align-items: center;
			margin: 0 20px;
		}

		.logo_carousel .slick-slide img {
			max-width: 175px;
			display: inline-block;
		}
	
		.overflow-hidden.img-animate {
			width: 100%;
		}
	
		#banner_section .image-text {
			background-size: 110% auto;
		}
	
		#portfolio .small-heading {
			margin-top: 30px;
            margin-bottom: 10px;
            padding-bottom: 5px;
            border-bottom: 1px solid #fff;
            width: auto;
            display: inline-block;
		}

		#portfolio .section-sub {
			margin-top: 0 !important;
			margin-bottom: 0 !important;
		}

        .right-arrows {
            display: flex;
            align-items: center;
            justify-content: end;
        }
	
        .pull-margin {
            margin-left: -10px !important;
            margin-right: -10px !important;
        }

        .arrow-wrap-mobile {
            display: flex;
            justify-content: space-between;
        }

        .arrow-wrap-mobile button {
        }
	
		#why-we-do p {
			font-size: 16px;
		}

		.top-banner-overflow.dark .left, .top-banner-overflow.dark .left a {
			color: #000;
		}
	
		.top-banner-overflow.dark {
    		background-color: #f7f7f7;
		}

		@media only screen and (max-width: 1400px) { 
			#banner_section .image-text {
				background-size: auto 110%;
			}
		}

        @media only screen and (max-width: 991px) {
			
            #banner_section, #banner_section h3 {
                text-align: center;
            }

            .process-carousel .slick-slide img, .process-carousel .tabs-content {
                margin-top: 30px;
            }

            #what-we-do .right {
                padding-top: 30px;
            }

            #what-we-do .right .img-animate {
                margin-bottom: 0 !important;
            }

            .accordion-body {
                padding: 0 30px 50px 30px !important;
                border: 0;
            }

			#banner_section .image-text {
				position: relative;
			}
			
			#banner_section .image-text:before {
				content: '';
				width: 100%;
				height: 100%;
				opacity:.3;
				background-color: #000;
				position: absolute;
				display: block;
				left: 0;
				top: 0;
			}
			
			#banner_section .col-lg-6 {
				position: relative;
				z-index: 1;
			}
        }
	
        @media only screen and (max-width: 767px) {

            
			.line-icons.line-icon-carousel {
				margin-left: 0 !important;
				margin-right: 0 !important;
			}
			
            #why-arena .simpleParallax img {
                height: auto;
                width: 100%;
            }

            .accordion-button::after {
                width: 30px;
                height: 30px;
				margin-right: -10px;
            }

            .line-icons .slick-slide {
                padding: 0 !important;
            }

		  .top-banner-overflow.dark .left, .top-banner-overflow.dark .left a {
			  color: #fff;
		  }

		  .top-banner-overflow.dark .container {
			background-color: rgba(0,0,0,0.5);
		  }
        }
</style>

<link href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/consultancy.css?v=<?php echo rand(1,99999999999); ?>" rel="stylesheet" />
<link href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/home.css?v=<?php echo rand(1,99999999999); ?>" rel="stylesheet" />
<link href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/branding.css?v=<?php echo rand(1,99999999999); ?>" rel="stylesheet" />

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

<section id="what-we-do" class="overflow-hidden pull-up">
    <div class="container image-text box-white pd-bot">
        <?php
        $left = get_field('left');
        if ($left): ?>
        <div class="row top">
            <div class="left col-lg-5 col-md-12 horizontal-dots left-dots">
                <div class="">
                    <div>
                        <div class="overflow-hidden">
                            <h4 class="medium-heading mb-40 animate" data-animate="fade-in-left"><?php echo $left['header'];?></h4>
                            <p><?php echo $left['text'];?></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-1">
            </div>
            <div class="right col-lg-6 col-md-12">
                <img class="overflow-img" src="<?php echo $left['image']['url']; ?>" alt=" Arena" width="100%">
            </div>
        </div>

        <?php endif; ?>

        <?php
        $right = get_field('right');
        if ($right): ?> 
            <div class="row bottom">
                <div class="left col-lg-6 col-md-12">
                    <img class="overflow-img" src="<?php echo $right['image']['url']; ?>" alt=" Arena" width="100%">
                </div>
                <div class="col-md-1">
                </div>
                <div class="right col-lg-5 col-md-12 horizontal-dots left-dots d-flex flex-column justify-content-center">
                    <div class="">
                        <div>
                            <div class="overflow-hidden">
                                <h4 class="small-heading mb-20 animate" data-animate="fade-in-left"><?php echo $right['header'];?></h4>
                                <p><?php echo $right['text'];?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </div>
</section>


<?php
$portfolio = get_field('types');
if ($portfolio): 

    $posts_array = $portfolio['types_data'];
?>

    <section id="types" class="overflow-hidden pt-160 pb-160 gray-bg">
        <div class="container">
            <div class="row mb-20">
                <div class="col-lg-10">            
                    <h3 class="medium-heading animate" data-animate="fade-in-left"><?php echo $portfolio['heading']; ?></h3>
                </div>
                <div class="col-lg-2">
                    <div class="arrow-wrap animate" data-animate="fade-in-right">
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="types-carousel horizontal-dots start">
                        <?php 
                            $count = 1;
                            foreach($posts_array as $spost):
                            ?>  
                                <div>
                                    <div class="text-over-image">
                                        <span class="count" data-animate="fade-in-left"><?php echo $count < 10 ? '0'.$count : $count; ?>.</span>
                                        <div class="imgwrap">
                                            <img width="100%" src="<?php echo $spost['image']['url']; ?>" alt="" />
                                        </div>
                                        <h5 class="small-heading" data-animate="fade-in-left"><?php echo $spost['title']; ?></h5>
                                    </div>
                                </div>
                        <?php
                            $count++;
                            endforeach;
                        ?>
                    </div>
                </div>
            </div>

            <div class="arrow-wrap-mobile animate" data-animate="fade-in-right"></div>
        </div>
    </section>

    <?php 
endif; 
?> 


<?php
$process = get_field('process'); ?>

<section id="our-process" class="center-text section-pd pt-0 pb-60 gray-bg">
    <div class="container box-white pd-bot">
        <div class="row">
            <div class="col-md-12">
                <div class="overflow-hidden">
                    <div class="medium-heading animate mb-40" data-animate="fade-in-bottom"><?php echo $process['heading']; ?></div>
                </div>
            </div>
        </div>
        <?php if($process['processes']): ?>
        <div class="row">
            <div class="col-lg-5">

                <div class="accordion accordion-flush" id="accordionProcess">
                    <?php 
                        $counter = 1;
                        foreach($process['processes'] as $item){
                    ?>
                        <div class="accordion-item animate" data-animate="fade-in-left">
                            <h2 class="accordion-header" id="process-<?php echo $counter; ?>">
                            <button class="accordion-button <?php echo $counter > 1 ? 'collapsed' : ''; ?>" type="button" data-bs-toggle="collapse" data-bs-target="#process-collapse<?php echo $counter; ?>" aria-expanded=" <?php $counter > 1 ? 'false' : 'true'; ?>" aria-controls="process-collapse<?php echo $counter; ?>">
                                <?php echo $counter. '. '.$item['title']; ?>
                            </button>
                            </h2>
                            <div id="process-collapse<?php echo $counter; ?>" class="accordion-collapse collapse <?php echo $counter > 1 ? '' : 'show'; ?>" aria-labelledby="process-<?php echo $counter; ?>" data-bs-parent="#accordionProcess">
                                <div class="accordion-body">
                                    <?php echo $item['text']; ?>
                                </div>
                            </div>
                        </div>
                    <?php 
                        $counter++;
                    } ?>
                </div>
            </div>
            <div class="col-lg-1"></div>
            <div class="col-lg-6">
                <div class="process-carousel horizontal-dots start">
                    <?php 
                        foreach($process['processes'] as $item){
                    ?>
                        <div>
                            <img class="animate" data-animate="fade-in" src="<?php echo $item['image']['url'] ?>" alt="<?php echo $item['title']; ?>" width="100%">
                        </div>
                    <?php
                    }
                    ?>
                </div>
                <div class="process-carousel-navs"></div>
            </div>
        </div>
        <?php endif; ?>
    </div>
</section>

<?php
$quote = get_field('quote');
if ($quote): ?>

<section id="quote" class="overflow-hidden pb-60 gray-bg">
    <div class="container image-text box-white pd-bot text-center">
        <div class="row">
            <div class="col-lg-1"></div>
            <div class="col-lg-10">
                <p class="mb-40 animate" data-animate="fade-in-top"><?php echo $quote['text']; ?></p>
            </div>
            <div class="col-lg-1"></div>
            </div>
            <div class="col-lg-12">
                <a class="anim animate button-link" data-animate="fade-in-bottom" href="<?php echo $quote['link_url']; ?>" tabindex="0"><?php echo $quote['link_text']; ?></a>
            </div>
        </div>
    </div>
</section>

<?php endif; ?>


<?php
$portfolio = get_field('our_work');
if ($portfolio): 

    $posts_array = $portfolio['our_work_data'];
?>

    <section id="portfolio" class="overflow-hidden gray-bg pt-160 pb-160">
        <div class="container">
            <div class="row">
                <div class="col-lg-10">                    
                    <h3 class="medium-heading animate animated fade-in-left" data-animate="fade-in-left"><?php echo $portfolio['header']; ?></h3>
                </div>
                <div class="col-lg-2">
                    <div class="arrow-wrap animate" data-animate="fade-in-right">
                    </div>
                </div>
            </div>
            <div class="row mb-40">
                <div class="col-lg-12">
                    <p class="animate" data-animate="fade-in-left"><?php echo $portfolio['text']; ?></p>
                </div>
                
            </div>
            
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="horizontal-dots start">
                        <div class="row">
                            <div class="col-md-6">
                                <a href="https://browz.ae/" target="_blank">
                                    <div class="mainwrap" style="background-image: url(https://arenacapital.com/wp-content/uploads/2023/07/shutterstock_115940419.jpg);">
                                        <img class="logo" src="https://arenacapital.com/wp-content/uploads/2023/07/a-1.png">
                                        <div class="hover-content">
                                            <h5 class="small-heading" data-animate="fade-in-left">BROWZ</h5>
                                            <p class="section-sub" data-animate="fade-in-left">Visit site</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://www.invisaligncenter.ae/" target="_blank">
                                    <div class="mainwrap" style="background-image: url(https://arenacapital.com/wp-content/uploads/2023/07/Layer-27.jpg);">
                                        <img class="logo" src="https://arenacapital.com/wp-content/uploads/2023/07/Layer-26.png">
                                        <div class="hover-content">
                                            <h5 class="small-heading" data-animate="fade-in-left">Invisalign Center</h5>
                                            <p class="section-sub" data-animate="fade-in-left">Visit site</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://sculpt.ae/" target="_blank">
                                    <div class="mainwrap" style="background-image: url(https://arenacapital.com/wp-content/uploads/2023/07/shutterstock_2073399410.jpg);">
                                        <img class="logo" src="https://arenacapital.com/wp-content/uploads/2023/07/Sculpt_Logo.png">
                                        <div class="hover-content">
                                            <h5 class="small-heading" data-animate="fade-in-left">Sculpt</h5>
                                            <p class="section-sub" data-animate="fade-in-left">Visit site</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="https://eatpokepoke.com/ " target="_blank">
                                    <div class="mainwrap" style="background-image: url(https://arenacapital.com/wp-content/uploads/2023/07/Layer-29-copy-2.jpg);">
                                        <img class="logo" src="https://arenacapital.com/wp-content/uploads/2023/07/Layer-28.png">
                                        <div class="hover-content">
                                            <h5 class="small-heading" data-animate="fade-in-left">Poke Poke</h5>
                                            <p class="section-sub" data-animate="fade-in-left">Visit site</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="arrow-wrap-mobile animate" data-animate="fade-in-right"></div>
        </div>
    </section>

    <?php 
endif; 
?> 

<?php
$faqs = get_field('faqs');
if ($faqs && $faqs['faqs']): ?>

<section id="faqs" class="overflow-hidden pb-60 gray-bg">
    <div class="container image-text box-white pd-bot">
        <div class="row mb-40">
            <div class="col-lg-6 col-md-6">
                <h3 class="medium-heading mb-20 animate animated fade-in-left" data-animate="fade-in-left"><?php echo $faqs['header']; ?></h3>
            </div>
            <div class="col-lg-6 col-md-6">
            </div>
        </div>

        <?php if($faqs['faqs']): ?>
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <?php 
                            $counter = 1;
                            foreach($faqs['faqs'] as $item){
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
$banner_section = get_field('banner_section');
if ($banner_section): ?>

<section id="banner_section" class="overflow-hidden pb-60 gray-bg">
    <div class="container image-text box-white pd-bot" style="background-image:url(<?php echo $banner_section['image']['url'] ?>)">
        <div class="row">
            <div class="col-lg-6">
                <h3 class="medium-heading mb-20 animate" data-animate="fade-in-left"><?php echo $banner_section['header']; ?></h3>
                <p><?php echo $banner_section['text']; ?></p>
                <a href="<?php echo $banner_section['link']; ?>">Contact Us</a>
            </div>
        </div>
    </div>
</section>

<?php endif; ?>

<?php
$form = get_field('form');
if ($form && $form['form']): ?>

<section id="form" class="center-text section-pd pt-0 pb-60 gray-bg">
    <div class="container image-text box-white pd-bot">
        <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8 text-center">
            <div class="">
                <div>
                    <div class="overflow-hidden">
                        <h3 class="medium-heading mb-40 animate animated fade-in-left" data-animate="fade-in-left"><?php echo $form['heading']; ?></h3>
                    </div>
                    <div id="consultationform">
                        <?php echo do_shortcode($form['form']); ?>
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
        <div class="row mb-20">
            <div class="col-md-12">
                <div class="overflow-hidden">
                    <div class="animate" data-animate="fade-in-left">
                        <div class="medium-heading  mb-20 animate" data-animate="fade-in-bottom"><?php echo $section_eight['header'];?></div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="overflow-hidden">
                    <div class="animate" data-animate="fade-in-left">
                        <?php echo $section_eight['text']; ?> 
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
    							'post__not_in' => array($post->ID),
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
                    slidesToShow: 2,
                    appendArrows: '#portfolio .arrow-wrap-mobile',
                }
            }
        ]
    });

    $('.types-carousel').slick({
        arrows: false,
        loop: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        responsive: [
            {
                breakpoint: 991,
                settings: {
                    slidesToShow: 2,
                    dots: true
                    // appendArrows: '#portfolio .arrow-wrap-mobile',
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
        adaptiveHeight: true,
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
                    dots: true
                }
            }
        ]
    });

    // On before slide change
    $('.process-carousel').on('beforeChange', function(event, slick, currentSlide, nextSlide){
        $('#our-process .accordion-button').eq(nextSlide).trigger('click');
    });

    $('#our-process .accordion-button').on('click', function(){
        $('.process-carousel').slick('slickGoTo',$(this).index('#our-process .accordion-button'));
    });
    
    $('.why-carousel').slick({
        arrows: false,
        infinite: false,
        dots: true,
        slidesToShow: 1,
        slidesToScroll: 1,
		adaptiveHeight: true,
		appendDots: '#why-carousel-navs', 
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
                }
            }
        ]
    });
	
    
    if($('#types-carousel').length){
        $('#types-carousel').slick({
            dots: false,
            arrows: true,
            infinite: true,
            speed: 1000,
            slidesToShow: 3,
            slidesToScroll: 1,
            centerMode: false,
            appendArrows: '#types-carousel-navs',
            responsive: [
                {
                    breakpoint: 1400,
                    settings: {
                        slidesToShow: 2,
                    }
                },
                {
                    breakpoint: 767,
                    settings: {
                        slidesToShow: 1,
                    }
                },
            ]
        });
    }

    if($('.others-carousel').length){
        $('.others-carousel').slick({
            dots: true,
            arrows: true,
            infinite: true,
            speed: 1000,
            slidesToShow: 4,
            slidesToScroll: 1,
            centerMode: false,
            appendArrows: '#line-carousel-navs',
            responsive: [
                {
                    breakpoint: 991,
                    settings: {
                        slidesToShow: 3,
            			arrows: false,
            			dots: true,
                    }
                },
                {
                    breakpoint: 767,
                    settings: {
                        slidesToShow: 2,
            			arrows: false,
            			dots: true,
                    }
                },
                {
                    breakpoint: 520,
                    settings: {
                        slidesToShow: 1,
            			arrows: false,
            			dots: true,
                    }
                },
            ]
        });
    }
	
	if($('.logo_carousel').length){
		$('.logo_carousel').slick({
			dots: false,
			arrows: true,
			infinite: true,
			speed: 1000,
			slidesToShow: 4,
			slidesToScroll: 1,
			centerMode: false,
            appendArrows: '#logo-carousel-arrows',
			responsive: [
				{
					breakpoint: 991,
					settings: {
						slidesToShow: 3,
					}
				},
				{
					breakpoint: 767,
					settings: {
						slidesToShow: 1,
					}
				},
			]
		});
    }


    if($('.approach-carousel-text').length && $('#testimonial-image-carousel').length){
        $('.approach-carousel-text').slick({
            arrows: true,
            dots: false,
			slidesToShow: 1,
			slidesToScroll: 1,
            adaptiveHeight: true,
			infinite: false,
			fade: true,
            appendArrows: '#approach-carousel-arrows',
			asNavFor: '#testimonial-image-carousel',
        });
        $('#testimonial-image-carousel').slick({
            arrows: false,
			slidesToShow: 1,
			slidesToScroll: 1,
			infinite: false,
            dots: false,
			asNavFor: '.approach-carousel-text',
        });
    } else {
		if($('.approach-carousel-text').length) {
			$('.approach-carousel-text').slick({
				arrows: true,
				dots: false,
				adaptiveHeight: true,
				appendArrows: '#approach-carousel-arrows'
			});
		}
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


<script type="text/javascript">

    form = $('.step').first().closest('form');
    var currentProgress = 0;
    step = 0;

    $(form).prepend('<div id="form-progress"></div>');

    $('.step').each(function(){
        console.log($(this));
        append = '<div class="nav-row">';

        if(step>0)
            append += '<button class="step-prev prevBt" type="button">Back</button>';

        if(step==0)
        append += '<div></div>';
        
        if(($('.step').length-1) > step)
            append += '<button class="step-next nextBt" type="button">'+(step == 0 ? 'Next' : 'Next')+'</button>';
        else
            append += '<button class="step-next ">Submit</button>';


        append += '</div>';

        $(this).append(append);

        $('#form-progress').append('<div class="prog" style="width:'+(100/$('.step').length)+'%;"></div>');

        step += 1;
    });

    $(document).ready(function(){
        $('#loader').hide();
        $('#form').fadeIn();
    });

    $('.nextBt').on('click',function(e){
        e.preventDefault();
        console.log('CHECKING');
        console.log(checkFields());
        
        if(checkFields()){
            $('.step').removeClass('active');
            $('.step').eq($('.step-next').index($(this))+1).addClass('active');
            $('#form-progress .prog').removeClass('active');
            $('#form-progress .prog').eq($('.step-next').index($(this))+1).addClass('active');
            currentProgress++;
            updateProgress();
            $('.error-message').remove();
        } else {
            if($('.step.active .error-message').length)
                $('.step.active .error-message').html('Please fill out all required fields.');
            else    
                $('.step.active').append('<div class="error-message fade-in">Please fill out all required fields.</div>');
        }


    });

    $('.prevBt').on('click',function(e){
        e.preventDefault();
        currentIndex = $('.step').index($('.step.active'));
        $('.step').removeClass('active');
        $('.step').eq(currentIndex-1).addClass('active');

        $('#form-progress .prog').removeClass('active');
        $('#form-progress .prog').eq(currentIndex-1).addClass('active');

        currentProgress--;
        updateProgress();
    });

    function updateProgress(){
        console.log(currentProgress);
        $('#form-progress .prog').removeClass('finished');

        for(x=0;x<currentProgress;x++){
            $('#form-progress .prog').eq(x).addClass('finished');
        }

    }

    function checkFields(){
        proceed = true;

        $('.step.active input[type="text"]').each(function(){
            console.log($(this).val());
            if(!$(this).val()){
                proceed = false;
                return false;
            }
            console.log(proceed);
        });

        if($('.step.active .wpcf7-checkbox input:checked').length == 0){
            proceed = false;
            return false;
        }

        if(proceed){
            $('.step.active input[type="email"]').each(function(){
                console.log($(this).val());
                if(!$(this).val()){
                    proceed = false;
                    return false;
                }
            console.log(proceed);
            });
        }

        if(proceed){
        $('.step.active textarea').each(function(){
                console.log($(this).val());
                if(!$(this).val()){
                    proceed = false;
                    return false;
                }
                
            console.log(proceed);
            });
        }

        if(proceed){
            $('.step.active select').each(function(){
                console.log($(this).val());
                if($(this).val()==0 || $(this).val()==''){
                    proceed = false;
                    return false;
                }
                console.log(proceed);
            });
        }

        return proceed;
    }

    document.addEventListener( 'wpcf7mailsent', function( event ) {
        showSuccess();
    }, false );

    function showSuccess(){
        $('.step').hide();
        $('.wpcf7-response-output').hide();
        $(form).append('<h3>Thank You!</h3>');
        $(form).append("<p>One of our consultants will contact you within 24hrs. We believe that speed stuns and we'll act accordingly.</p>");
        $(form).append('<p>Looking forward to discussing the next steps.</p>');
        $(form).append('<p>I salute you.</p>');
        $(form).append('<br/><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/DS_Signature.png" alt="DS Signature">');
    }

    $('#form-progress .prog').on('click',function(e){
        e.preventDefault();

        if($(this).hasClass('finished')){

            currentIndex = $('.prog').index($(this));

            $('.step').removeClass('active');
            $('.step').eq(currentIndex).addClass('active');

            $('#form-progress .prog').removeClass('active');
            $('#form-progress .prog').eq(currentIndex).addClass('active');

            currentProgress = currentIndex;
            updateProgress();
        }
    });

</script>
