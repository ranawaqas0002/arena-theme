<?php

/**
 * Template Name: About Us
 * Description: The template for displaying about us page
 *
 */

get_header();

?>


<!-- section one -->
<?php
get_template_part('template-parts/section-hero-template', 'section');

global $post;

$section_one = get_field('section_one');
if ($section_one) : ?>


<section id="firm" class="overflow-hidden section-pd gray-bg animated-a scrolling-text">

    <?php
        $item_one = $section_one['section_one'];
        if ($item_one) :
    ?>
        <span class="scroll-text left-to-right"><?php echo $section_one['header_two']; ?></span>

        <div class="container image-text mb-150">
            <div class="row">
                <div class="col-lg-6 col-md-12 left">
                    <div>
                        <div class="overflow-hidden">
                            <h2 class="large-header animate" data-animate="fade-in-bottom"><?php echo $section_one['header']; ?></h2>
                        </div>
                        <div class="overflow-hidden img-animate">
                            <img class="parallax-img" src="<?php echo $item_one['image']['url']; ?>" alt=" Arena | <?php echo $item_one['image']['caption']; ?>" width="100%">
                        </div>
                    </div>
                </div>
                <div class="col-md-1">
                </div>
                <div class="col-lg-5 col-md-12 horizontal-dots left-dots d-flex flex-column justify-content-center right">
                    <div class="">
                        <div class="overflow-hidden">
                            <p class="section-sub animate" data-animate="fade-in-left"><span><?php echo $section_one['header_number']; ?></span> <?php echo $section_one['header_two']; ?></p>
                        </div>
                        <div>
                            <div class="overflow-hidden">
                                <h3 class="medium-heading mb-40 animate" data-animate="fade-in-bottom"><?php echo $item_one['sub_header']; ?></h3>
                            </div>

                            <div class="overflow-hidden animate" data-animate="fade-in-bottom">
                                <?php echo $item_one['text']; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <?php endif; ?>

    <?php
    $item_two = $section_one['section_two'];

    if ($item_two) : ?>
        <div class="container image-text">
            <div class="row reverse-mobile">
                <div class="left col-lg-5 col-md-12 horizontal-dots left-dots d-flex flex-column justify-content-center">
                    <div class="">
                        <div>
                            <div class="overflow-hidden">
                                <h3 class="medium-heading mb-40 animate" data-animate="fade-in-left"><?php echo $item_two['header']; ?></h3>
                            </div>
                            <div class="overflow-hidden">
                                <div class="row">
                                    <div class="col-md-6 animate" data-animate="fade-in-left"><?php echo $item_two['text']; ?></div>
                                    <div class="col-md-6 animate" data-animate="fade-in-left"><?php echo $item_two['text_2']; ?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-1">
                </div>
                <div class="right col-lg-6 col-md-12">
                    <div>
                        <div class="overflow-hidden img-animate">
                            <img class="parallax-img" src="<?php echo $item_two['image']['url']; ?>" alt=" Arena | <?php echo $item_two['image']['caption']; ?>">
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <?php endif; ?>

</section>




<?php endif; ?>


<!-- section two -->
<?php
$section_two = get_field('section_two');

if ($section_two) :

    $items = $section_two['items']; ?>

<section id="mission-vision" class="overflow-hidden full-width-columns">
    <?php
    foreach ($items as $item) : ?>
        <div class="col">
            <div class="content">
                <img src="<?php echo $item['image']['url']; ?>" alt=" Arena | <?php echo $item['image']['caption']; ?>">
                <h3 class="header"> <?php echo $item['header']; ?></h3>
                <div class="copy"><?php echo $item['text']; ?></div>
            </div>
        </div>
    <?php endforeach; ?>
</section>


<?php

endif; ?>


<!-- section three -->

<?php
$section_three = get_field('section_three');

if ($section_three) : ?>

    <?php
    $founder = $section_three['founder'];
    if ($founder) : ?>
        <section id="founder" class="overflow-hidden bg-black founder revealscroll">
            <div class="container">
                <div class="row reverse-mobile">
                    <div class="col-lg-5 col-md-12 d-flex justify-content-center flex-column text-md-left left">
                        <p class="section-sub animate" data-animate="fade-in-left"><span><?php echo $founder['header_number']; ?></span> <?php echo $founder['header']; ?></p>
                        <h5 class="quote animate revealtexts" data-animate="fade-in-left"><div class="qt">"</div>
                            <?php 
                                $words = explode(' ', strip_tags($founder['text']));
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
                        <p class="section-sub animate" data-animate="fade-in-left"><?php echo $founder['name']; ?></p>
                    </div>
                    <div class="col-md-1 desktop-only"></div>
                    <div class="col-lg-5 col-md-12">
                        <img class="animate" data-animate="fade-in-right" src="<?php echo $founder['image']['url']; ?>" alt=" Arena | <?php echo $founder['image']['caption']; ?>">
                    </div>
                </div>
            </div>
        </section>
<!--        <img src="--><?php //echo $founder['qoutes']['url']; ?><!--" alt=" Arena | --><?php //echo $founder['qoutes']['caption']; ?><!--">-->
    <?php endif; ?>


    <?php
    $our_people = $section_three['people'];

    if ($our_people) : ?>

        <section id="team" class="overflow-hidden">
            <div class="container">
                <div class="row reverse-mobile">
                    <div class="col-lg-2 col-md-12 d-flex flex-column justify-content-between">
                        <div id="team-nav"></div>

                        <div class="team-copy  horizontal-dots left-dots">
                            <p class="section-sub"><span><?php echo $our_people['header_number']; ?></span> <?php echo $our_people['header']; ?></p>
                            <?php
                            $staff = $our_people['people'];
                            if ($staff) :
                                ?>
                                <div class="team-text-carousel">
                                    <?php
                                    foreach ($staff as $key => $ind_staff) { ?>
                                        <div>
                                            <div class="content">
                                                <h3 class="heading anim">
                                                    <?php
                                                        $name = str_split($ind_staff->post_title);
                                                        for($x=0;$x<count($name);$x++){
                                                            echo '<span class="fade-in-right">'.(strlen(trim($name[$x])) ? $name[$x] : str_repeat('&nbsp;', 1)).'</span>';
                                                        }
                                                    ?>
                                                </h3>
                                                <p class="section-sub anim animate" data-animate="fade-in"><?php echo $ind_staff->post_content ?></p>
                                                <br/>
                                                <!-- <a class="anim animate button-link animated fade-in-left" data-animate="fade-in-left" href="<?php echo get_permalink($ind_staff); ?>">View Bio</a> -->
                                            </div>
                                        </div>
                                    <?php  }
                                    ?>
                                </div>
                            <?php endif; ?>
                        </div>

                    </div>
                    <div class="col-lg-10 col-md-12">
                        <div class="slider-wrap">
                            <div class="team-carousel">
                                <?php

                                $staff = $our_people['people'];

                                if ($staff) :
                                    foreach ($staff as $key => $ind_staff) { ?>
                                        <?php
                                        $image = get_the_post_thumbnail_url($ind_staff->ID, 'full');
                                        ?>
                                        <img src="<?php echo $image ?>" alt="Arena Staff | <?php echo $ind_staff->post_title ?> | <?php echo $ind_staff->post_content ?>">
                                    <?php  }
                                    ?>

                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    <?php endif; ?>


<?php endif; ?>



<!-- section four -->
<?php

$section_four = get_field('section_four');

if ($section_four) : ?>

    <section id="consultancy" class="center-text section-pd revealscroll">
        <div class="container">
            <div class="row">
                <div class="col-md-8 text-center offset-md-2">
                    <p class="section-sub animate" data-animate="fade-in-left"><span><?php echo $section_four['header_number'] ?></span> <?php echo $section_four['header'] ?></p>
                    <div class="medium-heading revealtexts">
                        <?php
                            $words = explode(' ', strip_tags($section_four['text']));
                            for($x=0;$x<count($words);$x++){
                                $letters = str_split($words[$x]);
                                echo '<div class="word">';
                                    for($y=0;$y<count($letters);$y++){
                                        echo '<span class="fade-in-bottom">'.$letters[$y].'</span>';
                                    }
                                echo '</div>&nbsp;';
                            }
                        ?>
                    </div>
                    <br/>
                    <a class="animate button-link" data-animate="fade-in-left" href="<?php echo $section_four['service_link']['url']; ?>" tabindex="0"><?php echo $section_four['service_link']['title']; ?></a>
                </div>
            </div>
        </div>
    </section>

    <!-- section five -->
<?php endif; ?>


<?php
$section_five = get_field('section_five');
if ($section_five) : ?>

    <section id="gallery" class="overflow-hidden">
        <div id="cursor">Drag</div>
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-md-12 offset-lg-1">
                    <div class="full-width-image-carousel animate" data-animate="fade-in-bottom">
                        <?php $images = $section_five['images'];
                        foreach ($images as $key => $image) {
                            ?>
                            <div class="slide">
                                <img src="<?php echo $image['image']['url'] ?>" alt="Arena ABout Us Images | <?php echo $image['image']['caption'] ?> | <?php echo $image['image']['description'] ?>| <?php echo $image['image']['name'] ?>?>">
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php endif; ?>

<!-- section six -->

<?php
$section_six = get_field('section_six');
if ($section_six) : ?>

    <section id="recognition" class="overflow-hidden section-pd pb-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-12 text-lg-start text-center">
                    <p class="section-sub animate" data-animate="fade-in-left"><span><?php echo $section_six['header_number'] ?></span> <?php echo $section_six['header'] ?></p>
                    <div class="medium-heading animate" data-animate="fade-in-bottom"><?php echo $section_six['sub_header'] ?></div>
                </div>
                <div class="col-lg-9 col-md-12">
                    <div class="logo-carousel-3 animate" data-animate="fade-in-right">
                        <?php
                        $partners =  $section_six['companies'];
                        if ($partners) :
                            foreach ($partners as $key => $parter) { ?>
                                <div>
                                    <img src="<?php echo $parter['logo']['url'] ?>" alt="Arena Partners | <?php echo $parter['logo']['caption'] ?> | <?php echo $parter['logo']['description'] ?>| <?php echo $parter['logo']['name'] ?>?>">
                                </div>
                            <?php   }
                        endif;
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php endif; ?>


<!-- section seven -->

<?php

$section_seven = get_field('section_7');
if ($section_seven) : ?>

<!--     <div class="container image-text">
        <div class="row reverse-mobile">
            <div class="left col-lg-6 col-md-12">
                <div class="left-img animate" data-animate="fade-in-left">
                    <div class="overflow-hidden img-animate">
                        <img class="parallax-img" src="<?php echo $section_seven['image']['url'] ?>" alt="Arena Partners | <?php echo $section_seven['image']['caption'] ?> | <?php echo $section_seven['image']['description'] ?>| <?php echo $section_seven['image']['name'] ?>?>">
                    </div>
                </div>
            </div>
            <div class="col-md-1"></div>
            <div class="right col-lg-5 col-md-12 horizontal-dots left-dots d-flex flex-column justify-content-center">
                <div class="">
                    <div>
                        <p class="section-sub animate" data-animate="fade-in-left"><span><?php echo $section_seven['header_number'] ?></span> <?php echo $section_seven['header'] ?></p>
                        <h3 class="heading mb-40 animate" data-animate="fade-in-bottom"><?php echo $section_seven['sub_header'] ?></h3>
                        <div class="row">
                            <div class="col-md-12 animate" data-animate="fade-in-left"><?php echo $section_seven['text'] ?><br/></div>
                            <a href="<?php echo $section_seven['join_our_team']['url']; ?>" class="button-link animate" data-animate="fade-in-bottom" tabindex="0"><?php echo $section_seven['join_our_team']['title']; ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

<? endif; ?>
<?php
get_template_part('template-parts/section-next-section-template', 'section');
get_footer();
?>
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

    $(window).scroll(function(e){
        if($(window).outerWidth()<767){
            triggerView = (window.pageYOffset+($(window).outerHeight()/2));
            if( triggerView >= $('.full-width-columns .col').eq(0).offset().top && triggerView <= ($('.full-width-columns .col').eq(0).offset().top + $('.full-width-columns .col').eq(0).outerHeight())){
                $('.full-width-columns .col.active').removeClass('active');
                if(!$('.full-width-columns .col').eq(0).hasClass('active'))
                    $('.full-width-columns .col').eq(0).addClass('active');
            }
            else if( triggerView >= $('.full-width-columns .col').eq(1).offset().top && triggerView <= ($('.full-width-columns .col').eq(1).offset().top + $('.full-width-columns .col').eq(1).outerHeight())){
                $('.full-width-columns .col.active').removeClass('active');

                if(!$('.full-width-columns .col').eq(1).hasClass('active'))
                    $('.full-width-columns .col').eq(1).addClass('active');
            }
            else if( triggerView >= $('.full-width-columns .col').eq(2).offset().top && triggerView <= ($('.full-width-columns .col').eq(2).offset().top + $('.full-width-columns .col').eq(1).outerHeight())){
                $('.full-width-columns .col.active').removeClass('active');
                if(!$('.full-width-columns .col').eq(2).hasClass('active'))
                    $('.full-width-columns .col').eq(2).addClass('active');
            }
        }
    })
</script>
