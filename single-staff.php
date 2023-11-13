<?php

/**

 * Template Name: Staff detail

 * Description: The template for displaying sector page

 *

 */



get_header();
?>
<link href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/consultancy.css?v=<?php echo rand(1,99999999999); ?>" rel="stylesheet" />

<style>

    body {
        background-color: #f7f7f7;
    }

    h5.title {
        line-height: 32px;
        font-size: 18px;
        font-weight: 400;
        margin-top: 10px;
    }

    .pull-up {
        margin-top: -500px;
        z-index: 2;
        background-color: #f7f7f7 !important;
    }

    .top-banner-overflow .scroll-text {
        top: -100vh;
    }

    .top-banner-overflow:before {
        content: '';
        display: inline-block;
        height: 100%;
        width: 50%;
        position: absolute;
        background: rgb(0,0,0);
        background: linear-gradient(90deg, rgba(0,0,0,0.4990371148459384) 0%, rgba(255,255,255,0) 100%);
    }

    .staff-landing-banner {
        background-repeat: no-repeat;
        background-size: 100% auto;
        height: 80vh;
        max-height: 900px;
        min-height: 700px;
        background-position: top center;
    <?php 
        $left = get_field('left');
        if(isset($left['bio'])):
            if($left['bio']):
    ?>
        margin-bottom: 500px;
    <?php 
            endif; 
        endif; 
    ?>
        background-color: #000;
    }

    .staff-landing-banner:after {
        content: '';
        display: block;
        width: 100%;
        height: 20%;
        position: absolute;
        background: rgb(0,0,0);
        background: linear-gradient(0deg, rgba(0,0,0,1) 0%, rgba(255,255,255,0) 100%);
        bottom: 0;
        left: 0;
        z-index: 1;
    }

    .staff-landing-banner .container {
        height: 100%;
        display: flex;
        align-items: center;
    }

    .staff-landing-banner .header {
        animation-delay: 600ms;
    }

    .staff-landing-banner .header p {
        font-size: 60px;
        font-weight: 300;
        display: inline-block;
        margin-bottom: 0;
    }

    .staff-landing-banner .header p.first {
        font-weight: bold;
    }

    .staff-landing-banner .sub_header {
        font-size: 24px;
        font-weight: 400;
        animation-delay: 900ms;
    }

    .staff-landing-banner .copy {
        width: 100%;
        max-width: 480px;
        font-weight: 400;
        box-sizing: border-box;
        padding: 30px 30px 40px 30px;
        color: #fff;
    }

    .staff-landing-banner hr {
        margin: 25px 0 15px;
    }

    .black-wrap {
        padding: 140px 100px;
        background-color: #000;
        color: #fff;
    }

    .black-wrap .item {
        font-size: 24px;
        display: flex;
        align-items: center;
        margin-bottom: 18px;
    }

    .black-wrap .item:before {
        content: '';
        height: 1px;
        width: 0;
        background-color: #fff;
        display: inline-block;
        transition: width 600ms, margin-right 600ms;
    }

    .black-wrap .item:hover:before {
        width: 30px;
        margin-right: 10px;
    }

    .qt {
        display: inline-block;
    }

    .scroll-text {
        font-size: 300px;
        width: 1190px;
        color: #f1f1f1;
        right: 0;
        top: 10%;
        z-index: 0;
        animation-delay: 600ms;
        left: 50%;
        opacity: .1;
        transition: transform 300ms;
    }

    #quote .floatingquote {
        opacity: .2;
        filter: invert(1);
        position: absolute;
        left: 10%;
        top: -60px;
    }

    #quote .container {
        position: relative;
    }

    #what-we-do:before {
        content: '';
        display: block;
        width: 100%;
        height: 50%;
        position: absolute;
        background: rgb(0,0,0);
        top: 0;
        left: 0;
        z-index: 1;
    }


    .pull-up .container {
        position: relative;
        z-index: 2;
    }

    .quote {
        font-size: 24px;
        line-height: 36px;
        color: #000;
        font-style: italic;
        padding: 50px; 
        border-top: 1px solid #ccc;
        border-bottom: 1px solid #ccc;
    }

    .staff .name {
        font-size: 18px;
        margin-bottom: 5px;
        line-height: 24px;
    }

    .staff .title {
        font-size: 14px;
        line-height: 20px;
        color: #bababa;
        margin-bottom: 10px !important;
    }
/* 
    .staff img {
        transform: scale(1.5) translateY(15px);
    } */

    .linkedin-profile {
        background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/images/linkedin-icon.png);
        display: inline-block;
        width: 20px;
        height: 20px;
        background-repeat: no-repeat;
        background-color: #000;
        background-position: center;
        transition: filter 600ms;
        background-size: 10px auto;
    }

    .linkedin-profile.hidden {
        opacity: 0;
    }

    .right .headr {
        border-bottom: 1px solid #ccc;
        padding-bottom: 20px;
        margin-bottom: 0;
    }

    .right .item {
        margin-bottom: 10px;
    }

    .right .staff {
        margin-top: 15px;
        margin-bottom: 15px;
    }

    .line-icon {
        width: 100%;
        display: inline-block;
        border: 1px solid #000;
        padding: 60px 40px;
        transition: color 600ms, background-color 600ms !important;
        min-height: 300px;
    }

    .line-icon:hover {
        color: #fff;
        background-color: #000;
    }

    .line-icon:hover .tag {
        color: #fff;
    }

    .tag {
        font-size: 14px;
        color: #000;
        margin-bottom: 10px !important;
        display: inline-block;
        text-transform: capitalize;
    }

    .tag span {
        display: inline-block;
        margin-left: 10px;
    }

    .tag span:before {
        content: '';
        display: inline-block;
        width: 3px;
        height: 3px;
        border-radius: 50%;
        background-color: #bababa;
        margin-right: 10px;
        vertical-align: middle;
    }

    @media only screen and (max-width: 1620px) {

        .staff-landing-banner {
            background-size: auto 120%;
        }
        
        .top-banner-overflow .scroll-text {
            left: 100% !important;
        }
    }

    @media only screen and (max-width: 1220px) {
        .black-wrap {
            padding: 80px 60px;
            background-color: #000;
            color: #fff;
        }

        .top-banner-overflow .scroll-text {
            left: 110%;
        }
    }

    @media only screen and (max-height: 820px) {
        .staff-landing-banner {
            background-position: top center;
        }
    }

    @media only screen and (max-width: 991px) {

        .right .headr {
            border-top: 1px solid #ccc;
            padding-top: 20px;
            margin-bottom: 0;
            margin-top: 20px;
        }

        .quote {
            border: 1px solid #ccc;
            margin-bottom: 40px;
        }

        .black-wrap {
           margin-top: 40px;
        }
        .right .staff {
            width: 50%;
            float: left;
        }
        .right .staff .row {
            padding: 0 10px;
        }
        .right .staff .name {
            margin-top: 20px;
            margin-bottom: 5px;
        }
        .right .staff .title {
            margin-bottom: 15px;
        }

        .line-icon h5.title {
            margin-bottom: 0;
        }
        .line-icon {
            padding: 60px 40px;
            min-height: 100px;
            margin-bottom: 20px;
        }
    }

    @media only screen and (max-width: 767px) {

        .staff-landing-banner {
            background-position: 65% center;
        }

        .staff-landing-banner .container {
            position: initial;
            width: 100vw;
        }

        .staff-landing-banner .copy {
            width: 100vw;
            padding: 30px;
            position: absolute;
            bottom: 0;
            left: 0;
            max-width: 100%;
            font-size: 16px;
            z-index: 2;
        }

        .staff-landing-banner .copy .header, .staff-landing-banner .header p {
                font-size: 40px;
        }

        .staff-landing-banner .sub_header {
            font-size: 18px;
            font-weight: 400;
        }

        .top-banner-overflow .scroll-text .inner {
            width: 3000px;
            right: -1450px;
            font-size: 80px;
        }

        .top-banner-overflow .scroll-text {
            top: -170vh;
        }

        .staff-landing-banner {
            max-height: 600px;
            min-height: 600px;
        }

        .staff-landing-banner .copy {
            background-color: #000;
        }

        .desk {
            display: none;
        }

        .image-text .right img {
            margin-top: 0;
        }

        .quote {
            font-size: 20px;
            line-height: 28px; 
            padding: 30px;
        }
    }

    @media only screen and (max-width: 620px) {

        .staff-landing-banner {
            background-position: 63% center;
            background-size: auto 100% !important;
        }

        .top-banner-overflow .scroll-text {
    		top: -165vh;
            left: 80% !important;
        }

    }

</style>

<?php
$hero = get_field('hero');
if($hero):
    ?>
    <section class="top-banner-overflow staff-landing-banner scrolling-text" style="background-image:url(<?php echo $hero['banner_image']['url']; ?>)">
        <div class="container">
        <div class="scrollTrigger"></div>
            <div class="copy">
                <h1 class="header animate" data-animate="fade-in-top"><p class="first"><?php echo $hero['first_name'];?></p> <p><?php echo $hero['last_name'];?></p></h1>
                <div class="sub_header animate" data-animate="fade-in-bottom"><?php echo $hero['designation']; ?></div>
                <?php if($hero['intro']): ?>
                
                <div class="desk">
                    <hr/>
                    <div class="animate" data-animate="fade-in-bottom"><?php echo $hero['intro']; ?></div>
                </div>
                <?php endif; ?>
            </div>
        </div>
        <div class="scroll-text bottom-to-top">
            <div class="relative">
                <div class="inner">
                    <?php 
                        $string = $hero['first_name'];
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
    $left = get_field('left');
    if(isset($left['bio'])):
        if($left['bio']):
?>

<section id="what-we-do" class="overflow-hidden pull-up">
    <div class="container image-text box-white pd-bot">
    <div class="row">
        <div class="left col-lg-8 col-md-12 ">

            <?php 
            $left = get_field('left');
            if($left):
            ?>
                <div class="mb-40">
                    <div>
                        <div class="overflow-hidden">
                            <h3 class="medium-heading mb-20 animate" data-animate="fade-in-left">About <?php echo $hero['first_name'];?></h3>
                        </div>
                        <div class="overflow-hidden">
                            <div class="row">
                                <div class="col-md-12 animate" data-animate="fade-in-left"><?php echo $left['bio']; ?></div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
            endif;
            ?>
            <?php 
            $quote = get_field('quote');
            if($quote):
                if($quote['text']):
                ?>
                <div class="row">
                    <div class="col-md-12">
                        <div class="quote">
                            " <?php echo $quote['text']; ?> "
                        </div>
                    </div>
                </div>

            <?php
                endif;
            endif;
            ?>

        </div>
        <div class="col-md-1">
        </div>
        <div class="right col-lg-3 col-md-12">
            <?php 
                $right = get_field('right');
                if($right):
                    if(isset($right['experties'])):
                        if($right['experties']):
                        ?>
                            <div class="overflow-hidden mb-20">
                                <h4 class="small-heading headr animate" data-animate="fade-in-left"><?php echo $right['sub_heading']; ?></p>
                            </div>

                            <div class="overflow-hidden mb-40">
                                <?php
                                if($right['experties']):
                                    foreach ($right['experties'] as $key => $item) {
                                        ?>
                                        <p class="item"><?php echo $item['text']; ?></p>
                                    <?php  }
                                endif; 
                                ?>
                            </div>
                        <?php
                        endif;
                    endif;
                endif;
                ?>

                <div class="overflow-hidden mb-20">
                    <h4 class="small-heading headr animate" data-animate="fade-in-left">Related Profiles</p>
                </div>

                <div class="overflow-hidden">
                <?php

                    $posts_array = get_posts(
                        array(
                            'posts_per_page' => 4,
                            'orderby' => 'rand',
                            'post_type' => 'staff',
                            'exclude' => array($post->ID),
                        )
                    );

                    foreach($posts_array as $p) {
                    ?>
                    <?php
                    $image = get_the_post_thumbnail_url($p->ID, 'full');
                    $field = get_field('hero',$p->ID);
                    ?>
                    <div class="staff">
                        <div class="row">
                            <div class="col-lg-4">
                                <a class="link" href="<?php echo get_permalink($p->ID); ?>"><img width="100%" src="<?php echo $image ?>" alt="<?php echo $p->post_title ?> | <?php echo $p->post_content ?>"></a>
                            </div>
                            <div class="col-lg-8">
                                <h3 class="name small-heading"><?php echo $field['first_name'].' '.$field['last_name'] ?></h3>
                                <p class="title mb-20"><?php echo $field['designation'] ?></p>
                                <?php $linkedin_url = get_field('linkedin_url',$p->ID);
                                ?>
                                <a href="<?php echo $linkedin_url; ?>" target="_blank" class="linkedin-profile <?php echo $linkedin_url ? '' : 'hidden'; ?>"></a>
                            </div>
                        </div>
                    </div>
                <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
        endif;
    endif;
?>

<?php 
    $args = array(
        'posts_per_page' => 3,
        'post_type' => 'blogs',
        'orderby' => 'date',
        'order' => 'DESC',
        'tax_query' => []
    );

    // print_r($args);
    $posts_array = get_posts($args);

    if(count($posts_array)>5):
?>

<section id="value" class="center-text section-pd pt-0 pb-60 gray-bg">
    <div class="container box-white pd-bot">
        <div class="row">
            <div class="col-md-12 mb-20">
                <div class="overflow-hidden">
                    <div class="medium-heading  mb-20 animate" data-animate="fade-in-bottom">Recommended Insights</div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 horizontal-dots left-dots">
                <div class="line-icons values full-width line-icon-carousel box-tab-content active animate" data-animate="fade-in-bottom">
                    <div class="row">
                        <?php

                            if(count($posts_array)){
                                foreach($posts_array as $p) {
                                    ?>  
                                        <div class="col-lg-4">
                                        <a href="<?php echo get_permalink($p); ?>">
                                            <div class="line-icon  " data-animate="fade-in-bottom">
                                                    <?php $service = wp_get_object_terms( $p->ID, 'services' ); ?>
                                                    <p class="tag"><?php echo $service[0]->name;?> <span><?php echo get_the_date('M d, Y',$p); ?></span></p>
                                                    <h5 class="title mb-20"><?php echo $p->post_title ?></h5>
                                                    <!-- <p class="tag">By <?php echo $hero['first_name'];?> <?php echo $hero['last_name'];?>, <?php echo $hero['designation']; ?></p> -->
                                            </div>
                                        </a>
                                        </div>
                                    <?php
                                }
                            } 
                        ?>
                    </div>
                </div>
                <div class="value-carousel-arrows"></div>
            </div>
        </div>
    </div>
</section>

<?php endif; ?>

<?php

// get_template_part('template-parts/section-latest-blogs','section');
get_template_part('template-parts/section-next-section-template','section');

get_footer();
?>

<script>

// $('.line-icon-carousel').slick({
//     dots: false,
//     arrows: false,
//     infinite: true,
//     speed: 1000,
//     slidesToShow: 3,
//     slidesToScroll: 1,
//     responsive: [
//         {
//             breakpoint: 991,
//             settings: {
//                 slidesToShow: 2,
//                 arrows: true,
//                 appendArrows: '.value-carousel-arrows'
//             }
//         },
//         {
//             breakpoint: 767,
//             settings: {
//                 slidesToShow: 1,
//                 arrows: true,
//                 appendArrows: '.value-carousel-arrows'
//             }
//         },
//     ]
// });
</script>

