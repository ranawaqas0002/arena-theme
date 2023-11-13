<?php

/**

 * Template Name: Career Old

 * Description: The template for displaying career page

 *

 */




get_header();
get_template_part('template-parts/section-hero-template', 'section');
?>

    <style>
        .application-link:hover{
            cursor: pointer;
        }
    </style>

    <!-- section one -->
<?php

$section_one = get_field('section_one');

if ($section_one) : ?>

    <section id="featured" class="overflow-hidden section-pd gray-bg">
        <div class="container image-text">
            <div class="row reverse-mobile">
                <div class="left col-lg-5 col-md-12 horizontal-dots left-dots d-flex flex-column justify-content-center">
                    <div class="">
                        <div>
                            <div class="overflow-hidden">
                                <p class="section-sub animate" data-animate="fade-in-left"><span>
                                <?php echo $section_one['header_number'] ?></span> <?php echo $section_one['header'] ?></p>
                            </div>
                            <div class="overflow-hidden">
                                <h3 class="large-header animate" data-animate="fade-in-left"><?php echo $section_one['sub_header'] ?></h3>
                            </div>
                            <div class="overflow-hidden">
                                <div class="row">
                                    <div class="col-md-12 animate" data-animate="fade-in-left"><?php echo $section_one['text'] ?></div>
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
                            <img class="parallax-img" src="<?php echo $section_one['image']['url'] ?>" alt="<?php echo $section_one['image']['caption'] ?> | <?php echo $section_one['image']['description'] ?> | <?php echo $section_one['image']['alt'] ?>">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php endif; ?>


    <!-- section two -->
<?php

$section_two = get_field('section_two');

if ($section_two) : ?>

    <section id="values" class="follow-section">

        <span id="scroll-start"></span>
        <div class="floating-content desktop-only">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div id="consultancy-carousel" class="float-carousel no-links">
                            <?php
                            $values =  $section_two['values'] ;
                            if($values) :
                                foreach ($values as $key => $value) {?>
                                    <div class="">
                                        <div class="row">
                                            <div class="col-md-6 left">
                                                <div class="overflow-hidden">
                                                    <img src="<?php echo $value['image']['url'] ?>" alt="ARENA <?php echo $value['header']?> Image |<?php echo $value['image']['caption'] ?> | <?php echo $value['image']['description'] ?> | <?php echo $value['image']['alt'] ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-1"></div>
                                            <div class="col-md-5 right">
                                                <div class="">
                                                    <p class="section-sub animate" data-animate="fade-in-left"><span>
                                <?php echo $section_two['header_number'] ?></span>
                                                        <?php echo $section_two['header'] ?></p>
                                                    <div class="head-wrap">
                                                        <h3 class="heading"><?php echo $value['header'];?></h3><span></span>
                                                    </div>
                                                    <div class="body"><?php echo $value['text'];?></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php   } ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container desktop-only">
            <span class="scroll-text bottom-to-top"><?php echo $section_two['background_text'] ?></span>
            <div class="row">
                <div class="col-lg-12 col-md-12">

                    <?php
                    $values =  $section_two['values'] ;
                    if($values) :
                        foreach ($values as $key => $value) {
                            $number = $key + 1;
                            ?>
                            <div class="scroll-section consult_id_<?php echo $number; ?>" style="height: 100vh"></div>
                        <?php   } ?>
                    <?php endif; ?>

                </div>
            </div>
        </div>
        <div class="container mobile-only section-pd horizontal-dots">
            <div class="float-carousel">
                <?php
                $values =  $section_two['values'] ;
                if($values) :
                    foreach ($values as $key => $value) {
                        $number = $key + 1;
                        ?>
                        <div class="">
                            <div class="row">
                                <div class="col-md-6 left">
                                    <div class="overflow-hidden">
                                        <img src="<?php echo $value['image']['url'] ?>" alt="Arena Consultance <?php echo $value['header']; ?> Image | <?php echo $value['image']['caption'] ?> | <?php echo $value['image']['description'] ?> | <?php echo $value['image']['alt'] ?>">
                                    </div>
                                </div><div class="col-md-6 right">
                                    <div class="">
                                        <div class="head-wrap">
                                            <h3 class="heading"><?php echo $value['header']; ?></h3><span></span>
                                            <div class="number">0<?php echo $number; ?></div>
                                        </div>
                                        <div class="body"><?php echo $value['text']; ?></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php   } ?>
                <?php endif; ?>
            </div>
        </div>
    </section>

<?php endif; ?>

    <!-- section three /Careeers-->


<?php

$section_three = get_field('section_three');

if($section_three) :?>

    <section id="services" class="overflow-hidden section-pd-bot">
        <div class="container image-text ">
            <div class="row reverse-mobile">
                <div class="left col-lg-5 col-md-12 horizontal-dots left-dots d-flex flex-column justify-content-center">
                    <div class="">
                        <div>
                            <div class="overflow-hidden">
                                <p class="section-sub animate" data-animate="fade-in-left">
                                    <span><?php echo $section_three['header_number'] ?></span> <?php echo $section_three['header'] ?></p>
                                <h3 class="heading mb-40 animate" data-animate="fade-in-left"><?php echo $section_three['sub_text'] ?></h3>
                            </div>
                            <div class="overflow-hidden">
                                <div class="expandable accordion" id="howAccord">
                                    <?php
                                    $opprtunities = $section_three['opprtunities'];
                                    $x = 1;
                                    if($opprtunities):
                                        foreach ($opprtunities as $key => $opprtunity) { ?>
                                            <div class="exp accordion-item">
                                                <h2 class="accordion-header" id="heading<?php echo $x; ?>">
                                                    <button class="link-exp accordion-button <?php echo $x == 1 ? '' : 'collapsed'; ?>" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $x; ?>" aria-expanded="<?php echo $x == 1 ? 'true' : 'false'; ?>" aria-controls="collapse<?php echo $x; ?>">
                                                    <span><p><?php echo $opprtunity['title'] ?></p>
                                                    </button>
                                                </h2>
                                                <div id="collapse<?php echo $x; ?>" class="accordion-collapse collapse <?php echo $x == 1 ? 'show' : ''; ?>" aria-labelledby="heading<?php echo $x; ?>" data-bs-parent="#howAccord">
                                                    <div class="accordion-body content-exp">
                                                      <span>
                                                        <?php echo $opprtunity['description'] ?>
                                                      </span>
                                                        <br/>
                                                        <br/>
                                                        <a data-toggle="modal" data-target="#jobModal" onclick="jobApplication('<?php echo $opprtunity['title']; ?>')" class="mb-20 application-link animate button-link" data-animate="fade-in-left" href="#" tabindex="0"><?php echo $section_three['apply_text'] ?></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php
                                            $x++;
                                        } ?>
                                    <?php endif;?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-1">
                </div>
                <div class="right col-lg-6 col-md-12">
                    <div class="overflow-hidden img-animate full-img">
                        <img class="parallax-img" src="<?php echo $section_three['image']['url'] ?>" alt="ARENA <?php echo $section_three['header']?> Image |<?php echo $section_three['image']['caption'] ?> | <?php echo $section_three['image']['description'] ?> | <?php echo $section_three['image']['alt'] ?>" width="100%">
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php endif;?>



    <!-- section four -->


<?php
$section_four = get_field('section_four');
$play = get_field('next_arrow','options');
if($section_four) :?>

    <section id="job-openings" class="center-text section-pd">
        <div class="container">
            <div class="row">
                <div class="col-md-8 text-center offset-md-2">
                    <p class="section-sub animate" data-animate="fade-in-left"><span><?php echo $section_four['header_number'];?></span>
                        <?php echo $section_four['header'];?></p>
                    <div class="overflow-hidden">
                        <h3 class="large-header animate" data-animate="fade-in-bottom"><?php echo $section_four['sub_header'];?></h3>
                    </div>
                    <br/>
                    <a class="animate button-link" data-animate="fade-in-left" href="<?php echo $section_four['link']['url'];?>" tabindex="0"><?php echo $section_four['link']['title']; ?></a>
                </div>
            </div>
        </div>
    </section>

<?php endif;?>
<?php
get_template_part('template-parts/section-next-section-template', 'section');?>

    <div class="modal" id="jobModal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h3 class="medium-heading mb-40">Apply For This Position</h3>
                    <?php echo do_shortcode( '[contact-form-7 id="688" title="Job Application"]' );?>
                </div>
            </div>
        </div>
    </div>


<?php
get_footer();
?>

<script>
    const careerModal = document.querySelector('.job-modal');
    // function to show job application
    function jobApplication($data){
        document.getElementById("job_application_title").value = $data;
        // careerModal.style.display = 'flex';
    }

    $('.application-link').on('click', function (e){
        e.preventDefault();
        $('#jobModal').modal('show');
    })

</script>
