<?php

/**
 * Template Name: About Us
 * Description: The template for displaying about us page
 *
 */

get_header();

?>

<style>
    .cursor {
        width: 70px;
        height: 70px;
        border-radius: 100%;
        border: 1px solid black;
        transition: all 200ms ease-out;
        position: fixed;
        pointer-events: none;
        left: 0;
        top: 0;
        transform: translate(calc(-50% + 15px), -50%);
        z-index: 2;
        opacity: 0;
        font-size: 12px;
        background-color: #000;
        color: #fff;
        line-height: 70px;
        text-align: center;
    }

    #gallery:hover .cursor {
        opacity: 1;
        cursor: none;
    }
</style>

<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/inner-pages.css?v=<?php echo rand(1,99999999); ?>">

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
                            <img class="animate" data-animate="fade-in-left" src="<?php echo $item_one['image']['url']; ?>" alt=" Arena | <?php echo $item_one['image']['caption']; ?>" width="100%">
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
                                <p><?php echo $item_one['text']; ?></p>
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
                            <img class=" animate" data-animate="fade-in-right" src="<?php echo $item_two['image']['url']; ?>" alt=" Arena | <?php echo $item_two['image']['caption']; ?>">
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
        <section id="founder" class="overflow-hidden bg-black founder">
            <div class="container">
                <div class="row reverse-mobile">
                    <div class="col-lg-5 col-md-12 d-flex justify-content-center flex-column text-md-left left">
                        <p class="section-sub animate" data-animate="fade-in-left"><span><?php echo $founder['header_number']; ?></span> <?php echo $founder['header']; ?></p>
                        <h5 class="quote animate" data-animate="fade-in-left"><?php echo $founder['text']; ?></h5>
                        <p class="section-sub animate" data-animate="fade-in-left"><?php echo $founder['name']; ?></p>
                    </div>
                    <div class="col-md-1 desktop-only"></div>
                    <div class="col-lg-5 col-md-12">
                        <img class="animate" data-animate="fade-in" src="<?php echo $founder['image']['url']; ?>" alt=" Arena | <?php echo $founder['image']['caption']; ?>">
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

                        <div class="team-copy">
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
                                                            echo '<span class="fade-in-right">'.$name[$x].'</span>';
                                                        }
                                                    ?>
                                                </h3>
                                                <p class="section-sub anim animate" data-animate="fade-in"><?php echo $ind_staff->post_content ?></p>
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

    <section id="consultancy" class="center-text section-pd">
        <div class="container">
            <div class="row">
                <div class="col-md-8 text-center offset-md-2">
                    <p class="section-sub animate" data-animate="fade-in-left"><span><?php echo $section_four['header_number'] ?></span> <?php echo $section_four['header'] ?></p>
                    <div class="overflow-hidden">
                        <div class="medium-heading animate" data-animate="fade-in-bottom"><?php echo $section_four['text'] ?></div>
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
        <div class="cursor">Drag</div>
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-md-12 offset-lg-1">
                    <div class="full-width-image-carousel animate" data-animate="fade-in-bottom">
                        <?php $images = $section_five['images'];
                        foreach ($images as $key => $image) {
                            ?>
                            <div>
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

    <section id="recognition" class="overflow-hidden section-pd">
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

    <div class="container image-text">
        <div class="row">
            <div class="right col-lg-6 col-md-12">
                <div class="left-img animate" data-animate="fade-in-left">
                    <div class="overflow-hidden img-animate">
                        <img src="<?php echo $section_seven['image']['url'] ?>" alt="Arena Partners | <?php echo $section_seven['image']['caption'] ?> | <?php echo $section_seven['image']['description'] ?>| <?php echo $section_seven['image']['name'] ?>?>">
                    </div>
                </div>
            </div>
            <div class="col-md-1"></div>
            <div class="left col-lg-5 col-md-12 horizontal-dots left-dots d-flex flex-column justify-content-center">
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
    </div>

<? endif; ?>
<?php
get_template_part('template-parts/section-next-section-template', 'section');
get_footer();
?>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/inner.js"></script>
<script>
    var cursor = document.querySelector('.cursor');

    document.addEventListener('mousemove', function(e){
        var x = e.clientX;
        var y = e.clientY;
        cursor.style.transform = `translate3d(calc(${e.clientX}px - 50%), calc(${e.clientY}px - 50%), 0)`
    });

</script>
