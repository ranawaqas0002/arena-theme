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



    .line-icon-carousel .slick-dots {
        display: flex;
        justify-content: center !important;
        align-items: center !important;
        margin-top: 20px !important;
    }

    #fixedCopy .slide-in-bck-center{-webkit-animation:slide-in-bck-center .8s cubic-bezier(.25,.46,.45,.94) both;animation:slide-in-bck-center .8s cubic-bezier(.25,.46,.45,.94) both}
    @-webkit-keyframes slide-in-bck-center{0%{-webkit-transform:translateZ(600px);transform:translateZ(600px);opacity:0}100%{-webkit-transform:translateZ(0);transform:translateZ(0);opacity:1}}@keyframes slide-in-bck-center{0%{-webkit-transform:translateZ(600px);transform:translateZ(600px);opacity:0}100%{-webkit-transform:translateZ(0);transform:translateZ(0);opacity:1}}

    #fixedCopy .fade-in-top{-webkit-animation:fade-in-top .8s cubic-bezier(.39,.575,.565,1.000) both;animation:fade-in-top .8s cubic-bezier(.39,.575,.565,1.000) both}
    @-webkit-keyframes fade-in-top{0%{-webkit-transform:translateY(-30px);transform:translateY(-30px);opacity:0}100%{-webkit-transform:translateY(0);transform:translateY(0);opacity:1}}@keyframes fade-in-top{0%{-webkit-transform:translateY(-30px);transform:translateY(-30px);opacity:0}100%{-webkit-transform:translateY(0);transform:translateY(0);opacity:1}}

    #fixedCopy .fade-in-1s { opacity:0; -webkit-animation:fade-in .8s cubic-bezier(.39,.575,.565,1.000) .8s both;animation:fade-in .8s cubic-bezier(.39,.575,.565,1.000)  .8s both;}
    #fixedCopy .fade-in {-webkit-animation:fade-in 1.2s cubic-bezier(.39,.575,.565,1.000) both;animation:fade-in 1.2s cubic-bezier(.39,.575,.565,1.000) both}
    @-webkit-keyframes fade-in{0%{opacity:0}100%{opacity:1}}@keyframes fade-in{0%{opacity:0}100%{opacity:1}}

    #fixedCopy .fade-out{animation-delay: 100ms !important;animation-fill-mode: forwards; -webkit-animation:fade-out 1s ease-out both;animation:fade-out 1s ease-out both}
    @-webkit-keyframes fade-out{0%{opacity:1}100%{opacity:0}}@keyframes fade-out{0%{opacity:1}100%{opacity:0}}

    #fixedCopy .fade-out-fast{animation-fill-mode: forwards; -webkit-animation:fade-out-fast 300ms ease-out both;animation:fade-out-fast 300ms ease-out both}
    @-webkit-keyframes fade-out-fast{0%{opacity:1}100%{opacity:0}}@keyframes fade-out{0%{opacity:1}100%{opacity:0}}

    #fixedCopy .fade-out-top{-webkit-animation:fade-out-top .5s cubic-bezier(.25,.46,.45,.94) both !important;animation:fade-out-top .5s cubic-bezier(.25,.46,.45,.94) both !important}
    @-webkit-keyframes fade-out-top{0%{-webkit-transform:translateY(0);transform:translateY(0);opacity:1}100%{-webkit-transform:translateY(-50px);transform:translateY(-50px);opacity:0}}@keyframes fade-out-top{0%{-webkit-transform:translateY(0);transform:translateY(0);opacity:1}100%{-webkit-transform:translateY(-50px);transform:translateY(-50px);opacity:0}}

    #fixedCopy .fade-out-left{-webkit-animation:fade-out-left .8s cubic-bezier(.25,.46,.45,.94) both !important;animation:fade-out-left .8s cubic-bezier(.25,.46,.45,.94) both !important;}
    @-webkit-keyframes fade-out-left{0%{-webkit-transform:translateX(0);transform:translateX(0);opacity:1}100%{-webkit-transform:translateX(-50px);transform:translateX(-50px);opacity:0}}@keyframes fade-out-left{0%{-webkit-transform:translateX(0);transform:translateX(0);opacity:1}100%{-webkit-transform:translateX(-50px);transform:translateX(-50px);opacity:0}}

    #fixedCopy .fade-in-right{-webkit-animation:fade-in-right .8s cubic-bezier(.39,.575,.565,1.000) both;animation:fade-in-right .8s cubic-bezier(.39,.575,.565,1.000) both}
    @-webkit-keyframes fade-in-right{0%{-webkit-transform:translateX(50px);transform:translateX(50px);opacity:0}100%{-webkit-transform:translateX(0);transform:translateX(0);opacity:1}}@keyframes fade-in-right{0%{-webkit-transform:translateX(50px);transform:translateX(50px);opacity:0}100%{-webkit-transform:translateX(0);transform:translateX(0);opacity:1}}

    #fixedCopy .fade-in-left{-webkit-animation:fade-in-left .8s cubic-bezier(.39,.575,.565,1.000) both;animation:fade-in-left .8s cubic-bezier(.39,.575,.565,1.000) both}
    @-webkit-keyframes fade-in-left{0%{-webkit-transform:translateX(-50px);transform:translateX(-50px);opacity:0}100%{-webkit-transform:translateX(0);transform:translateX(0);opacity:1}}@keyframes fade-in-left{0%{-webkit-transform:translateX(-50px);transform:translateX(-50px);opacity:0}100%{-webkit-transform:translateX(0);transform:translateX(0);opacity:1}}

    #fixedCopy .fade-in-bottom{-webkit-animation:fade-in-bottom .8s cubic-bezier(.39,.575,.565,1.000) both;animation:fade-in-bottom .8s cubic-bezier(.39,.575,.565,1.000) both}
    @-webkit-keyframes fade-in-bottom{0%{-webkit-transform:translateY(50px);transform:translateY(50px);opacity:0}100%{-webkit-transform:translateY(0);transform:translateY(0);opacity:1}}@keyframes fade-in-bottom{0%{-webkit-transform:translateY(50px);transform:translateY(50px);opacity:0}100%{-webkit-transform:translateY(0);transform:translateY(0);opacity:1}}

    #fixedCopy .slide-in-top{-webkit-animation:slide-in-top .8s cubic-bezier(.25,.46,.45,.94) both;animation:slide-in-top .8s cubic-bezier(.25,.46,.45,.94) both}
    @-webkit-keyframes slide-in-top{0%{-webkit-transform:translateY(-1000px);transform:translateY(-1000px);opacity:0}100%{-webkit-transform:translateY(0);transform:translateY(0);opacity:1}}@keyframes slide-in-top{0%{-webkit-transform:translateY(-1000px);transform:translateY(-1000px);opacity:0}100%{-webkit-transform:translateY(0);transform:translateY(0);opacity:1}}

    #fixedCopy .slide-in-right{-webkit-animation:slide-in-right .8s cubic-bezier(.25,.46,.45,.94) both;animation:slide-in-right .8s cubic-bezier(.25,.46,.45,.94) both}
    @-webkit-keyframes slide-in-right{0%{-webkit-transform:translateX(1000px);transform:translateX(1000px);opacity:0}100%{-webkit-transform:translateX(0);transform:translateX(0);opacity:1}}@keyframes slide-in-right{0%{-webkit-transform:translateX(1000px);transform:translateX(1000px);opacity:0}100%{-webkit-transform:translateX(0);transform:translateX(0);opacity:1}}

    #fixedCopy .slide-in-bottom{-webkit-animation:slide-in-bottom .8s cubic-bezier(.25,.46,.45,.94) both;animation:slide-in-bottom .8s cubic-bezier(.25,.46,.45,.94) both}
    @-webkit-keyframes slide-in-bottom{0%{-webkit-transform:translateY(1000px);transform:translateY(1000px);opacity:0}100%{-webkit-transform:translateY(0);transform:translateY(0);opacity:1}}@keyframes slide-in-bottom{0%{-webkit-transform:translateY(1000px);transform:translateY(1000px);opacity:0}100%{-webkit-transform:translateY(0);transform:translateY(0);opacity:1}}

    #fixedCopy .slide-in-left{-webkit-animation:slide-in-left .5s cubic-bezier(.25,.46,.45,.94) !important;animation:slide-in-left .5s cubic-bezier(.25,.46,.45,.94)  !important}
    @-webkit-keyframes slide-in-left{0%{-webkit-transform:translateX(-1000px);transform:translateX(-1000px);opacity:0}100%{-webkit-transform:translateX(0);transform:translateX(0);opacity:1}}@keyframes slide-in-left{0%{-webkit-transform:translateX(-1000px);transform:translateX(-1000px);opacity:0}100%{-webkit-transform:translateX(0);transform:translateX(0);opacity:1}}

    #fixedCopy .slide-out-top{animation-delay: 100ms !important;animation-fill-mode: forwards; -webkit-animation:slide-out-top .8s cubic-bezier(.55,.085,.68,.53) both;animation:slide-out-top .4s cubic-bezier(.55,.085,.68,.53) both}
    @-webkit-keyframes slide-out-top{0%{-webkit-transform:translateY(0);transform:translateY(0);opacity:1}100%{-webkit-transform:translateY(-1000px);transform:translateY(-1000px);opacity:0}}@keyframes slide-out-top{0%{-webkit-transform:translateY(0);transform:translateY(0);opacity:1}100%{-webkit-transform:translateY(-1000px);transform:translateY(-1000px);opacity:0}}

    #fixedCopy .slide-out-right{animation-delay: 100ms !important;animation-fill-mode: forwards; -webkit-animation:slide-out-right .8s cubic-bezier(.55,.085,.68,.53) both;animation:slide-out-right .8s cubic-bezier(.55,.085,.68,.53) both}
    @-webkit-keyframes slide-out-right{0%{-webkit-transform:translateX(0);transform:translateX(0);opacity:1}100%{-webkit-transform:translateX(1000px);transform:translateX(1000px);opacity:0}}@keyframes slide-out-right{0%{-webkit-transform:translateX(0);transform:translateX(0);opacity:1}100%{-webkit-transform:translateX(1000px);transform:translateX(1000px);opacity:0}}

    #fixedCopy .slide-out-bottom{animation-delay: 100ms !important;animation-fill-mode: forwards; -webkit-animation:slide-out-bottom .8s cubic-bezier(.55,.085,.68,.53) both;animation:slide-out-bottom .8s cubic-bezier(.55,.085,.68,.53) both}
    @-webkit-keyframes slide-out-bottom{0%{-webkit-transform:translateY(0);transform:translateY(0);opacity:1}100%{-webkit-transform:translateY(1000px);transform:translateY(1000px);opacity:0}}@keyframes slide-out-bottom{0%{-webkit-transform:translateY(0);transform:translateY(0);opacity:1}100%{-webkit-transform:translateY(1000px);transform:translateY(1000px);opacity:0}}

    #fixedCopy .slide-out-left{animation-delay: 100ms !important;animation-fill-mode: forwards; -webkit-animation:slide-out-left .8s cubic-bezier(.55,.085,.68,.53) both !important;animation:slide-out-left .8s cubic-bezier(.55,.085,.68,.53) both  !important;}
    @-webkit-keyframes slide-out-left{0%{-webkit-transform:translateX(0);transform:translateX(0);opacity:1}100%{-webkit-transform:translateX(-1000px);transform:translateX(-1000px);opacity:0}}@keyframes slide-out-left{0%{-webkit-transform:translateX(0);transform:translateX(0);opacity:1}100%{-webkit-transform:translateX(-1000px);transform:translateX(-1000px);opacity:0}}

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

<section id="about" class="center-text section-pd pt-0 pb-60 gray-bg">
    <div class="container box-white pd-bot">
        <div class="row">
            <div class="col-md-12 horizontal-dots left-dots">
                <div class="line-icons values full-width line-icon-carousel animate" data-animate="fade-in-bottom">
                    <div class="">
                        <div class="line">
                            <div class="wrap text-left ">
                                <div class="line-icon  " data-animate="fade-in-bottom">
                                    <span class="number">01.</span>
                                    <h5 class="title">We are constantly looking to invest in established businesses.</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <div class="line">
                            <div class="wrap text-left ">
                                <div class="line-icon  " data-animate="fade-in-bottom">
                                    <span class="number">02.</span>
                                    <h5 class="title">We have over 35 years of experience in owning and operating companies.</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <div class="line">
                            <div class="wrap text-left ">
                                <div class="line-icon  " data-animate="fade-in-bottom">
                                    <span class="number">03.</span>
                                    <h5 class="title">We recruit only the best and brightest that will elevate us and our clients for generations to come.</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="value-carousel-arrows"></div>
            </div>
        </div>
    </div>
</section>

<section id="other-services" class="center-text section-pd pt-0 pb-60 gray-bg">
    <div class="container box-white pd-bot">
        <div class="row mb-20">
            <div class="col-md-12">
                <div class="overflow-hidden">
                    <div class="animate" data-animate="fade-in-left">
                        <div class="medium-heading  mb-20 animate" data-animate="fade-in-bottom">Our Services</div>
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

<!-- <section id="other-services" class="center-text section-pd pt-0 pb-60 gray-bg">
    <div class="container box-white pd-bot">
        <div class="row">
            <div class="col-md-12">
                <div class="overflow-hidden">
                    <div class="medium-heading animate mb-20" data-animate="fade-in-bottom">Our Services</div>
                    <p class="animate" data-animate="fade-in-bottom">
                    Through various unique initiatives from strategy, sales, marketing, operations, training, and high-level introductory networking.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center horizontal-dots left-dots">

                <ul class="box-tab-nav mb-40">
                <?php 
                    $types = get_terms('service_types', array(
                        'hide_empty' => false,
        				'order' => 'DESC',
                    ));
                    $loop = 0;
                    foreach($types as $type){
                        ?>
                            <li class="animate" data-animate="fade-in-top"><button class="<?php echo $loop==0 ? 'active': ''; ?>"><?php echo $type->name ?></button></li>    
                        <?php
                        $loop++;
                    }
                ?>
                    </ul>

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
                    <div class="line-icons full-width  <?php echo count($posts_array) > 4 ? 'line-icon-carousel-four' : ''; ?> box-tab-content <?php echo $loop==0 ? 'active': ''; ?>">
                        <?php 
                            if(count($posts_array) <= 4 && count($posts_array) != 0):
                                echo '<div class="row">';
                            elseif(count($posts_array) == 0):
                                echo '<p style="text-align:left;">Coming Soon</p>';
                            endif;

                            foreach($posts_array as $p) {
                            ?>  
                                <div class="animate <?php echo count($posts_array) <= 4 ? 'col-lg-3 col-md-6' : ''; ?>" data-animate="fade-in-bottom">
                                    <div class="line">
                                        <div class="wrap">
                                            <a href="<?php echo get_permalink($p); ?>">
                                                <div class="line-icon  " data-animate="fade-in-bottom">
                                                    <img src="<?php echo get_field('icon',$p->ID)['url']; ?>" alt="Arena">
                                                    <h5 class="title"><?php echo $p->post_title ?></h5>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                            <?php
                            }
                            if(count($posts_array) <= 4 && count($posts_array) != 0):
                                echo '</div>';
                            endif;
                            
                        ?>
                    </div>
                <?php
                    $loop++; 
                }
                ?>
            </div>
        </div>
    </div>
</section> -->

</div>

<?php get_template_part('template-parts/section-clients-v2', 'section');?>
<?php
get_template_part('template-parts/section-next-section-template', 'section');
get_footer();
?>
<script src="https://player.vimeo.com/api/player.js"></script>