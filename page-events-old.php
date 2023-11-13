<?php

/**

 * Template Name: Events Old

 * Description: The template for displaying Events page

 *

 */

get_header();
get_template_part('template-parts/section-hero-template', 'section');
?>

<style>
    .youtube-link:hover {
        cursor: pointer;
    }
    .scroll-text {
        width: 1000px;
        color: #f1f1f1;
        left: -20%;
        top: 70%;
    }
        ∑
    .text-carousel {
        padding-bottom: 0;
    }
        
    @media only screen and (max-width: 991px) {
        .founder {
            padding-bottom: 120px;
        }

        .mb-40 {
            margin-bottom: 20px !important;
        }

        #founder:before {
            width: 140px;
            height: 150px;
            top: 50%;
            left: 65%;
        }
    }

</style>
<!--
Made a mistake in naming in backend; Starting from section two instead of section one

 -->
<!-- section two -->

<?php

$section_two = get_field('section_two');

if ($section_two) : ?>

    <div class="scrolling-text gray-bg" id="topsection">
        <?php
        $top_section = $section_two['top_section'];

        if ($top_section) : ?>

            <section id="featured" class="overflow-hidden section-pd">
                <div class="container image-text">
                    <div class="row reverse-mobile">
                        <div class="left col-lg-5 col-md-12 horizontal-dots left-dots d-flex flex-column justify-content-center">
                            <div class="">
                                <div>
                                    <div class="overflow-hidden">
                                        <p class="section-sub animate" data-animate="fade-in-left"><span>
                                                <?php echo $top_section['header_number'] ?></span> <?php echo $top_section['header']; ?></p>
                                    </div>
                                    <div class="overflow-hidden">
                                        <h3 class="medium-heading mb-40 animate" data-animate="fade-in-left"><?php echo $top_section['sub_header']; ?></h3>
                                    </div>
                                    <div class="overflow-hidden">
                                        <div class="row">
                                            <div class="col-md-6 animate" data-animate="fade-in-left"><?php echo $top_section['text']; ?></div>
                                            <div class="col-md-6 animate" data-animate="fade-in-left"><?php echo $top_section['text_2']; ?></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-1">
                        </div>
                        <div class="right col-lg-6 col-md-12">
                        <?php
                            $play = get_field('video_play', 'options');
                            $placeholder = $top_section['placeholder_image'];
                            $video_top = $top_section['video'];

                            if ($video_top) : ?>
                                <a href="#" class="youtube-link" youtubeid="<?php echo $video_top; ?>">
                                    <div>
                                        <div class="overflow-hidden img-animate play-overlay">
                                                <img class="parallax-img" src="<?php echo $placeholder['url']; ?>" alt=" Arena | <?php echo $top_section['header']; ?>">
                                        </div>
                                    </div>
                                </a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </section>

        <?php endif;

        $bottom_section = $section_two['bottom_section'];

        if ($bottom_section) :

        ?>

            <span class="scroll-text left-to-right"><?php echo $bottom_section['background_text']; ?></span>

            <section class="overflow-hidden section-pd-bot">
                <div class="container image-text">
                    <div class="row">
                        <div class="col-lg-6 col-md-12 left">
                            <div>
                                <div class="overflow-hidden img-animate">
                                    <img class="parallax-img" src="<?php echo $bottom_section['image']['url'] ?>" alt=" Arena | <?php echo $bottom_section['image']['title']; ?> " width="100%">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-1">
                        </div>
                        <div class="col-lg-5 col-md-12 horizontal-dots left-dots d-flex flex-column justify-content-center right">
                            <div class="">
                                <div class="overflow-hidden">
                                    <p class="section-sub animate" data-animate="fade-in-left"><span>
                                        <?php echo $bottom_section['header_number']; ?></span> <?php echo $bottom_section['header']; ?></p>
                                </div>
                                <div class="overflow-hidden">
                                    <h2 class="heading mb-40 animate" data-animate="fade-in-bottom"><?php echo $bottom_section['sub_header']; ?></h2>
                                </div>
                                <div>
                                    <div class="figure-carousel">
                                        <?php
                                        $items = $bottom_section['items'];
                                        foreach ($items as $key => $item) {
                                        ?>
                                            <div>
                                                <div class="content">
                                                    <p><?php echo $item['header'] ?></p>
                                                    <p><?php echo $item['text'] ?></p>
                                                </div>
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


        <?php endif; ?>

    </div>


<?php endif; ?>

<!-- section three -->
<?php

$section_three = get_field('section_three');

if ($section_three) : ?>


    <section id="why" class="overflow-hidden section-pd">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="overflow-hidden">
                        <p class="section-sub animate" data-animate="fade-in-left"><span>
                        <?php echo $section_three['header_number']; ?></span> <?php echo $section_three['header']; ?></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="left-cover"></div>
            <div class="text-carousel animate" data-animate="fade-in-bottom">
                <?php
                    $items = $section_three['items'];
                    foreach ($items as $key => $item) {
                        $number = $key + 1;
                ?>
                    <div>
                        <h3 class=""><?php echo $item['header'] ?></h3>
                    </div>
                <?php } ?>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="text-carousel-extension">
                        <?php
                        $items = $section_three['items'];
                        foreach ($items as $key => $item) {
                            $number = $key + 1;
                            ?>
                            <div><?php echo $item['text'] ?></div>
                        <?php } ?>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 dots-wrap left-dots-mobile horizontal-dots animate" data-animate="fade-in-right">
                </div>
            </div>
        </div>
    </section>


    </section>
<?php endif; ?>


<!-- image section -->

<?

$section_images = get_field('section_images');

if ($section_images) : ?>
    <section id="gallery" class="overflow-hidden section-pd-bot">
        <div id="cursor">Drag</div>
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-md-12 offset-lg-1">
                    <div class="full-width-image-carousel animate" data-animate="fade-in-bottom">
                        <?php
                        $images = $section_images['images'];
                        foreach ($images as $key => $image) { ?>
                            <div class="slide">
                                <img src="<?php echo $image['image']['url'] ?>" alt="Arena Event  Image |<?php echo $image['image']['caption'] ?> | <?php echo $image['image']['description'] ?> | <?php echo $image['image']['alt'] ?>">
                            </div>
                        <?php }; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php endif; ?>

<!-- section four -->

<?php
$section_four = get_field('section_four');
if ($section_four) :
?>
    <section id="founder" class="overflow-hidden bg-black founder revealscroll">
        <div class="container">
            <div class="row reverse-mobile">
                <div class="col-lg-5 col-md-12 d-flex justify-content-center flex-column text-md-left left">
                    <p class="section-sub animate" data-animate="fade-in-left"><span><?php echo $section_four['header_number']; ?></span>
                        <?php echo $section_four['header']; ?></p>
                    <h5 class="quote animate revealtexts" data-animate="fade-in-left"><div class="qt">"</div>
                    <?php 
                        $words = explode(' ', strip_tags($section_four['text']));
                        for($x=0;$x<count($words);$x++){
                            $letters = str_split($words[$x]);
                            echo '<div class="word">';
                                for($y=0;$y<count($letters);$y++){
                                    echo '<span>'.$letters[$y].'</span>';
                                }
                            echo '</div>&nbsp;';
                        }
                    ?><div class="qt">"</div>
                    </h5>
                    <p class="section-sub animate" data-animate="fade-in-left"><?php echo $section_four['sub_text']; ?></p>
                </div>
                <div class="col-md-1 desktop-only"></div>
                <div class="col-lg-5 col-md-12">
                    <img class="animate" data-animate="fade-in-right" src="<?php echo $section_four['image']['url'] ?>" alt="Arena Event  Image |<?php echo $section_four['image']['caption'] ?> | <?php echo $section_four['image']['description'] ?> | <?php echo $section_four['image']['alt'] ?>">
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>

<!-- section five -->

<?php
$section_five = get_field('section_five');

if ($section_five) : ?>

    <section id="testimonials" class="overflow-hidden pull-up-15 section-pd-bot">
        <div class="container">
            <div class="testimonial-carousel">
                <?php
                $items = $section_five['items'];
                foreach ($items as $key => $item) {
                $video = $item['video']; ?>
                    <div>
                        <div class="row">
                            <div class="col-lg-8 col-12">
                                <?php if ($video) : ?>
                                <a href="#" class="youtube-link" youtubeid="<?php echo $video; ?>">
                                    <div class="overflow-hidden play-overlay">
                                        <img class="" src="<?php echo $item['image']['url'] ?>" alt="Arena Event  Image |<?php echo $item['image']['caption'] ?> | <?php echo $item['image']['description'] ?> | <?php echo $item['image']['alt'] ?>">
                                    </div>
                                </a>
                                <?php else : ?>
                                    <div class="overflow-hidden ">
                                        <img class="" src="<?php echo $item['image']['url'] ?>" alt="Arena Event  Image |<?php echo $item['image']['caption'] ?> | <?php echo $item['image']['description'] ?> | <?php echo $item['image']['alt'] ?>">
                                    </div>
                                <?php endif; ?>
                            </div>
                            <div class="col-lg-4 col-12 texts">
                                <p class="section-sub animate" data-animate="fade-in-left"><span><?php echo $item['header_number']; ?></span>
                                    <?php echo $item['header']; ?></p>
                                <h5 class="quote animate" data-animate="fade-in-left"><?php echo $item['text']; ?></h5>
                                <p class="section-sub animate" data-animate="fade-in-left"><?php echo $item['sub_text']; ?></p>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>

<?php endif; ?>

    <!-- section six -->


<?php

$section_six = get_field('section_six');
if ($section_six) : ?>

    <section id="next-event" class="overflow-hidden section-pd-bot">
        <div class="container image-text">
            <div class="row reverse-mobile-xs">
                <div class="col-lg-6 col-md-7 col-12 left">
                    <div class="">
                        <div class="overflow-hidden">
                            <p class="section-sub animate" data-animate="fade-in-left"><span>
                            <?php echo $section_six['header_number']; ?></span> <?php echo $section_six['header']; ?></p>
                        </div>
                        <div class="overflow-hidden">
                            <h2 class="large-header animate" data-animate="fade-in-bottom"><?php echo $section_six['date']; ?></h2>
                        </div>
                        <div class="overflow-hidden">
                            <h2 class="medium-heading mb-40 animate" data-animate="fade-in-bottom"><?php echo $section_six['text']; ?></h2>
                        </div>
                        <a class="animate button-link" data-animate="fade-in-left" href="<?php echo $section_six['booking_link']['url']; ?>"><?php echo $section_six['booking_link']['title']; ?></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-1 col-12">
                </div>
                <div class="col-lg-3 col-md-4 col-12 horizontal-dots left-dots d-flex flex-column justify-content-center right">
                    <div>
                        <div class="overflow-hidden">
                            <img class="logo" src="<?php echo $section_six['image']['url'] ?>" alt="<?php echo $section_six['image']['caption'] ?> | <?php echo $section_six['image']['description'] ?> | <?php echo $section_six['image']['alt'] ?>" width="100%">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php endif; ?>

<!--    <div class="event-modal" style="background: rgba(0,0,0,.7);">-->
<!--        <div class=" modal-container">-->
<!--            <div class="modal-content">-->
<!--                <div class="modal-close absolute ">-->
<!--                    <svg class="fill-current" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">-->
<!--                        <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z">-->
<!--                        </path>-->
<!--                    </svg>-->
<!---->
<!--                </div>-->
<!--             Title-->
<!---->
<!--              Body-->
<!---->
<!--                <div class="form_wrapper job_form fadeIn">-->
<!--                    <h3>Book Now</h3>-->
<!---->
<!--                    --><?php //echo do_shortcode('[contact-form-7 id="689" title="Booking Form"]'); ?>
<!--                </div>-->
<!---->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->

<?php
    get_footer();
?>

<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/grt-youtube-popup.js"></script>
<!-- Initialize GRT Youtube Popup plugin -->
<script>
    $(".youtube-link").grtyoutube({
        autoPlay: true,
        theme: "dark"
    });

    const eventModal = document.querySelector('.event-modal');
    // function to show job application
    function bookNow(){
        eventModal.style.display = 'flex';
    }
</script>

<script>
    var mouseX=window.innerWidth/2,
        mouseY=window.innerHeight/2;

    var circle = {
        el:$('#cursor'),
        x:window.innerWidth/2,
        y:window.innerHeight/2,
        w:80,
        h:80,
        update:function(){
            l = this.x-this.w/2;
            t = this.y-this.h/2;
            this.el.css({
                'transform':
                    'translate3d('+l+'px,'+t+'px, 0)' });
        }
    }

    $(window).mousemove (function(e){
        mouseX = e.clientX;
        mouseY = e.clientY;
    })

    setInterval (move,1000/60)
    function move(){
        circle.x = lerp (circle.x, mouseX, 0.1);
        circle.y = lerp (circle.y, mouseY, 0.1);
        circle.update()
    }

    function lerp (start, end, amt){
        return (1-amt)*start+amt*end
    }
</script>

