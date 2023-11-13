<?php

/**

 * Template Name: Contact Us

 * Description: The template for displaying contact us page

 *

 */



 
get_header();
?>
<link href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/consultancy.css?v=<?php echo rand(1,99999999999); ?>" rel="stylesheet" />
<link href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/form.css" rel="stylesheet" />
<style>

    body {
        background-color: #f7f7f7 !important;
    }

    iframe {
        height: 100%;
        width: 100%;
        -webkit-backface-visibility: hidden;
    }

    .contact-map {
        height: 100vh;
        max-height: 50vh;
        width: 100%;
    }

    .sidebar hr {    
        margin: 12px 0 25px !important;
    }

    .sidebar {
        font-size: 18px;
    }

    .sidebar p {
        line-height: 26px;
        font-size: 16px;
		margin-bottom: 0;
    }
	
	.sidebar .item h6 {
		font-size: 20px;
		FONT-WEIGHT: 400;
	}
	
	.sidebar .item {
		margin-bottom: 30px;
	}

    @media only screen and (max-width: 1420px) {
        
    }

    @media only screen and (max-width: 1200px) {
        
    }

    @media only screen and (max-width: 991px) {
        
        .wpcf7-form {
            overflow: visible;
        }
    }

    @media only screen and (max-width: 767px) {
        .sidebar .item {
            margin-bottom: 40px !important;
        }

        #map .container, #map .col-md-12 {
            padding: 0;
            padding-left: 0 !important;
            padding-right: 0 !important;
        }
    }

    </style>


<?php
$hero = get_field('hero');

if ($hero): ?>
<section id="hero" class="top-banner-overflow scrolling-text" style="background-image:url(<?php echo $hero['image']['url']; ?>">
    <div class="container">
    <div class="scrollTrigger"></div>
        <div class="row">
            <div class="col-md-6 align-items-center d-flex left">
                <div class="">
                    <div class="overflow-hidden">
                        <p class="section-sub animate animated fade-in-left" data-animate="fade-in-left"><?php echo $hero['header']; ?></p>
                    </div>
                    <div>
                        <div class="overflow-hidden">
                            <h3 class="heading mb-20 animate animated fade-in-bottom" data-animate="fade-in-bottom"><?php echo $hero['sub_header']; ?></h3>
                        </div>

                        <div class="overflow-hidden">
                            <h4 class="small-heading mb-40 animate animated fade-in-bottom" data-animate="fade-in-bottom"><?php echo $hero['text']; ?></h3>
                        </div>

                        <?php if($hero['link_url']): ?>
                            <a class="anim animate button-link animated fade-in-left white" data-animate="fade-in-left" href="<?php echo $hero['link_url']; ?>" tabindex="0"><?php echo $hero['link_text']; ?></a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="scroll-text bottom-to-top">
        <div class="relative">
            <div class="inner">
                <?php 
                    $string = "Contact Us";
                    $letters = str_split($string);
                    foreach($letters as $letter): 
                        echo !ctype_space($letter) ? '<span>'.$letter.'</span>' : '<span class="space"></span>';
                    endforeach;
                ?>
            </div>
        </div>
    </div>
</section>

<?php endif; ?>
<!-- section one -->

<!-- section one -->
<?php
$section_one = get_field('section_one');
if ($section_one): ?>

<section id="what-we-do" class="overflow-hidden pull-up pb-60">
    <div class="container image-text box-white top pd-bot">
        <div class="row">
            <div class="left col-lg-7 col-md-12">
                <div class="">
                    <div>
                        <div class="overflow-hidden">
                            <h4 class="medium-heading mb-40 animate" data-animate="fade-in-left"><?php echo $section_one['header']; ?></h4>
                            <div class="animate" data-animate="fade-in-left"><?php echo $section_one['text']; ?></div>

                            <?php echo $section_one['form'] ? do_shortcode($section_one['form']) : ''; ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-1">
            </div>
            <div class="right col-lg-4 col-md-12 sidebar">
                <?php 
                    $sidebar = get_field('sidebar');
                    foreach($sidebar['items'] as $item) { ?>
                        <div class="item">
                            <h6>
								<?php echo $item['header']; ?>
							</h6>
                            <?php echo $item['text']; ?>
                        </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>

<?php endif; ?>

<!-- map section  -->

<?php
$map = get_field('map');
if($map) :?>

    <section id="map" class="overflow-hidden center-text gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-lg-center text-left">
                    <?php echo $map;?>
                </div>
            </div>
        </div>
    </section>

<?php endif; ?>


<!-- contact form section -->
<?php 

$contact_form = get_field('form');

if($contact_form) :?>

    <section id="form" class="overflow-hidden">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-lg-center text-left mb-20">
                    <div class="row">
                        <div class="col-md-8 text-center offset-md-2">
                            <p class="section-sub animate" data-animate="fade-in-left"><span><?php echo $contact_form['header_number'];?></span>
                                <?php echo $contact_form['header'];?></p>
                            <div class="overflow-hidden">
                                <div class="heading animate mb-40" data-animate="fade-in-bottom"><?php echo $contact_form['sub_header'];?></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <?php echo do_shortcode($contact_form['contact_form']);?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> 

<?php endif; ?>



<?php
get_template_part('template-parts/section-next-section-template','section');

get_footer();
