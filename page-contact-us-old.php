<?php

/**

 * Template Name: Contact Us

 * Description: The template for displaying contact us page

 *

 */



 
get_header();
get_template_part('template-parts/section-hero-template', 'section');
?>

<style>
    iframe {
        height: 100%;
        width: 100%;
        -webkit-filter: invert(90%) grayscale(1);
        filter: grayscale(1);
        -webkit-backface-visibility: hidden;
    }

    .contact-map{
        height: 100vh;
        max-height: 50vh;
        width: 100vw;
    }

    .box-icons a {
        width: 100%;
        display: inline-block;
    }

    #bot {
        overflow: hidden;
    }

    #bot .scroll-text {
        width: 2070px;
        top: 25%;
    }

    .action-button:before {
        content: '';
        display: inline-block;
        width: 40px;
        height: 40px;
        background-color: #000;
        border-radius: 50%;
        margin-right: 10px;
        background-image: url(<?php echo get_stylesheet_directory_uri();?>/assets/images/button-arrow.png);
        background-repeat: no-repeat;
        background-position: center;
        transition: margin-right 600ms;
    }

     .action-button:hover:before {
        margin-right: 20px;
    }

    .action-button {
        background-color: transparent !important;
        border: 0 none !important;
        color: #000 !important;
        cursor: pointer !important;
        position: relative;
        display: inline-flex;
        align-items: center;
        margin-right: 10px !important;
        font-weight: 300 !important;
        padding: 0 !important;
        float: left !important;
        transition: opacity 600ms;
    }

    .cf7mls_back.action-button:before {
        background-image: url(<?php echo get_stylesheet_directory_uri();?>/assets/images/button-arrow.png);
        transform: rotate(180deg);
    }
    
    form.cf7mls input.wpcf7-form-control.wpcf7-submit {
        height: 50px;
        line-height: 50px;
        padding-top:0;
        padding-bottom:0;
    }

    @media only screen and (max-width: 1420px) {
        .box-icons .box-icon {
            min-height: 380px;
            padding: 50px 90px;
        }
    }

    @media only screen and (max-width: 1200px) {
        .box-icons .box-icon {
            min-height: 380px;
            padding: 50px 90px;
        }
        .full-width.box-icons.white .box-icon {
            padding: 40px 30px;
            min-height: 320px;
        }
        .full-width.box-icons .wrap {
            padding: 0 10px;
            display: inline-block;
        }
    }

    @media only screen and (max-width: 991px) {
        .full-width.box-icons.white .address {
            margin-top: 30px;
            font-size: 18px;
            line-height: 24px;
        }

        .full-width.box-icons .wrap {
            padding: 0 10px;
        }

        .full-width.box-icons.white .title {
            font-size: 18px;
        }

    }

    @media only screen and (max-width: 767px) {
    }

    </style>

<!-- section one -->
<?php 

$section_one = get_field('section_one');

if($section_one) : ?>

    <section id="other-services" class="center-text section-pd gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-lg-center text-left mb-20">
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center horizontal-dots left-dots">
                    <div class="box-icons full-width white">
                        <div class="row">

                            <div class="col-md-4 mb-40">
                                <div class="wrap animate " data-animate="fade-in-bottom">
                                        <div class="box-icon">
                                            <a href="mailto:<?php echo $section_one['email_address'];?>">
                                                <img src="<?php echo $section_one['email_image']['url'] ?>" alt=" <?php echo $section_one['email_image']['caption']?> | <?php echo $section_one['email_image']['description'] ?>| <?php echo $section_one['email_image']['name']?>?>">
                                            </a>
                                            <div class="label"> <?php echo $section_one['email_header'];?></div>
                                            <a href="mailto:<?php echo $section_one['email_address'];?>"><h5 class="title"><?php echo $section_one['email_text'];?></h5></a>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <div class="col-md-4 mb-40">
                                <div class="wrap animate " data-animate="fade-in-bottom">
                                        <div class="box-icon">
                                            <a href="tel:<?php echo $section_one['call_number'];?>">
                                            <img src="<?php echo $section_one['call_image']['url'] ?>" alt="<?php echo $section_one['call_image']['caption']?> | <?php echo $section_one['call_image']['description'] ?>| <?php echo $section_one['call_image']['name']?>?>">
                                            </a>
                                            <div class="label"><?php echo $section_one['call_header'];?></div>
                                            <a href="tel:<?php echo $section_one['call_number'];?>"><h5 class="title"><?php echo $section_one['call_text'];?></h5></a>
                                        </div>
                                </div>
                            </div>

                            <div class="col-md-4 mb-40">
                                <div class="wrap animate " data-animate="fade-in-bottom">
                                        <div class="box-icon">
                                            <a href="#">
                                                <img src="<?php echo $section_one['address_image']['url'] ?>" alt="<?php echo $section_one['address_image']['caption']?> | <?php echo $section_one['address_image']['description'] ?>| <?php echo $section_one['address_image']['name']?>?>">
                                            </a>
                                            <a href="<?php echo $section_one['call_image']['url'] ?>">
                                                <div class="address">
                                                    <?php echo $section_one['address_text'];?>
                                                </div>
                                            </a>
                                        </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php endif;?>

<!-- map section  -->

<div class="scrolling-text position-relative" id="bot">
<?php
$map= get_field('map');
if($map) :?>

    <span class="scroll-text left-to-right"><?php echo $map['background_text'];?></span>
    <section id="map" class="overflow-hidden center-text section-pd-bot gray-bg-half">

        <div class="container">
            <div class="row">
                <div class="col-md-12 text-lg-center text-left mb-20">
                    <?php echo $map['map'];?>
                </div>
            </div>
        </div>
    </section>

<?php endif; ?>


<!-- contact form section -->
<?php 

$contact_form = get_field('contact_form');

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

</div>




<?php
get_template_part('template-parts/section-next-section-template','section');

get_footer();
