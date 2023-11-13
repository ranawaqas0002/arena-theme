<?php

/**

 * Template Name: Sectors

 * Description: The template for displaying Sectors

 *

 */

get_header();

get_template_part('template-parts/section-hero-template', 'section');
?>
<style>
    .box-icons .wrap {
        padding: 0 10px !important;
    }

    #sectors  .scroll-text {
        width: 1990px;
    }

    @media only screen and (max-width: 767px){
        .box-icons .box-icon {
            min-height: 220px;
        }

        .full-width.box-icons {
            margin-left: -15px;
            margin-right: -15px;
            margin-top: 0;
        }
    }
</style>
<?php

$section_one = get_field('section_one');

if ($section_one): ?>

    <section id="other-services" class="center-text section-pd gray-bg animated-a">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-lg-center text-left mb-20">
                    <p class="section-sub animate" data-animate="fade-in-left"><span><?php echo $section_one['header_number']; ?></span>
                        <?php echo $section_one['header']; ?></p>
                    <div class="overflow-hidden">
                        <div class="heading animate mb-40" data-animate="fade-in-bottom"><?php echo $section_one['sub_header']; ?></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center horizontal-dots left-dots">
                    <div class="box-icons full-width">
                        <div class="row">
                            <?php
                            $sectors = $section_one['sectors'];
                            foreach ($sectors as $key => $sector) {
                                $image = get_field('sector_icon', $sector->ID);
                                ?>
                                <div class="col-lg-4 col-6 mb-40">
                                    <div class="wrap animate " data-animate="fade-in-bottom">
                                        <a href="#">
<!--                                         <a href="<?php echo get_permalink($sector); ?>"> -->
                                            <div class="box-icon">
                                                <img src="<?php echo $image['url'] ?>" alt="Arena  <?php echo $sector->post_title; ?> Icon Image | <?php echo $image['caption'] ?> | <?php echo $image['description'] ?> | <?php echo $image['alt'] ?>">
                                                <h5 class="title"><?php echo $sector->post_title; ?></h5>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            <?php }?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


<?php endif;?>


<?php

$section_two = get_field('section_two');

if (!$section_two): ?>

    <section id="sectors" class="overflow-hidden section-pd gray-top-section scrolling-text">
        <div class="scroll-text"><?php echo $section_two['background_text']; ?></div>
        <div class="container">
            <div class="row reverse-mobile">
                <div class="col-lg-4 col-md-12 horizontal-dots left-dots d-flex flex-column justify-content-center">
                    <div class="">
                        <p class="section-sub animate desktop-only" data-animate="fade-in-left"><span><?php echo $section_two['header_number']; ?></span>
                            <?php echo $section_two['header']; ?></p>
                        <div class="figure-carousel">
                            <?php
                            $acquisitions = $section_two['acquisitions'];
                            $play = get_field('next_arrow', 'options');
                            foreach ($acquisitions as $key => $acquisition) {

                                $number = $key + 1;

                                if ($number < 10) {

                                    ?>
                                <div>
                                    <div class="content">
                                        <img class="logo" src="<?php echo $acquisition['logo']['url'] ?>" alt="Arena  <?php echo $acquisition['header'] ?> Icon Image | <?php echo $acquisition['logo']['caption'] ?> | <?php echo $acquisition['logo']['description'] ?> | <?php echo $acquisition['logo']['alt'] ?>">
                                        <h3 class="heading anim">
                                            <?php
                                            $name = str_split($acquisition['header']);
                                            for($x=0;$x<count($name);$x++){
                                                echo '<span class="fade-in-right">'.(strlen(trim($name[$x])) ? $name[$x] : str_repeat('&nbsp;', 1)).'</span>';
                                            }
                                            ?>
                                        </h3>
                                        <div class="body fade-in-bottom  anim">
                                            <?php echo $acquisition['text'] ?>
                                        </div>
                                        <div class="location mb-40 fade-in-left anim">
                                            <?php echo $acquisition['location'] ?>
                                        </div>
                                        <a href="<?php echo $acquisition['site_link']['url']; ?>" class="button-link fade-in-left anim">Learn
                                            More</a>
                                    </div>
                                </div>

                            <?php }
                            } ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-1">
                </div>
                <div class="col-lg-7 col-md-12">
                    <p class="section-sub animate mobile-only" data-animate="fade-in-left"><span><?php echo $section_two['header_number']; ?></span>
                        <?php echo $section_two['header']; ?></p>
                    <div class="overflow-hidden img-animate overflow-image">
                        <img class="parallax-img" src="<?php echo $section_two['image']['url']; ?>" alt="Arena <?php echo $section_two['header']; ?> Image ?>" width="100%">
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php endif; ?>
                                    <!--    --><?php
//    $acquisitions = $section_two['acquisitions'];
//    $play = get_field('next_arrow', 'options');
//    foreach ($acquisitions as $key => $acquisition) {
//
//        $number = $key + 1;
//
//        if ($number < 10) {
//
//            ?>
<!--           -->
<!--            --><?php
//
//        } else { ?>
<!--               <img src="--><?php //echo $acquisition['logo']['url'] ?><!--" alt="Arena  --><?php //echo $acquisition['header'] ?><!-- Icon Image | --><?php //echo $acquisition['logo']['caption'] ?><!-- | --><?php //echo $acquisition['logo']['description'] ?><!-- | --><?php //echo $acquisition['logo']['alt'] ?><!--">-->
<!--                <h5>--><?php //echo $acquisition['header'] ?><!--</h5>-->
<!--                <div>--><?php //echo $acquisition['text'] ?><!--</div>-->
<!--                <p>--><?php //echo $acquisition['location'] ?><!--</p>-->
<!--                <a href="--><?php //echo $acquisition['site_link']['url']; ?><!--">-->
<!--                <img src="--><?php //echo $play['url'] ?><!--"-->
<!--        alt="Arena  --><?php //echo $acquisition['header'] ?><!-- Next Arrow |--><?php //echo $play['caption'] ?><!-- | --><?php //echo $play['description'] ?><!-- | --><?php //echo $play['alt'] ?><!--">-->
<!--            </a>-->
<!--            <a href="--><?php //echo $acquisition['site_link']['url']; ?><!--"> --><?php //echo $acquisition['site_link']['title']; ?><!-- </a>-->
<!--    -->
<!--            <span>--><?php //echo $number?><!--</span>-->
<!--    -->
<!--        --><?php //}
//    }?>

<?php
get_template_part('template-parts/section-next-section-template', 'section');

get_footer();