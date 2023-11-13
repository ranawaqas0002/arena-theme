<?php

/**

 * Template Name: Privacy Policy

 * Description: The template for displaying Privacy policy

 *

 */

get_header();
get_template_part('template-parts/section-hero-template', 'section');
?>

<!-- section one -->
<style>
    #scrollerstart {
        position: absolute;
        top: 50vh;
    }

    .float-wrap {
        position: relative;
        width: 200%;
        z-index: 0;
    }

    .scroll-item {
        z-index: 1;
        position: relative;
		padding-bottom: 60px;
    }

    .floating-links {
        z-index: 1;
        position: relative;
    }

    .floating-links .link a {
        width: 20vw;
        line-height: 28px;
    }

</style>
<?php 

$section_one = get_field('section_one');

if($section_one): ?>
    <section class="gray-bg section-pd policy-scroller" id="scroller">
        <div id="scrollerstart"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-3 desktop-only links">
                    <div class="float-wrap">
                        <ul class="floating-links" id="floating-links">
                            <?php
                            $terms = $section_one['terms'];
                            if($terms) :
                                foreach ($terms as $key => $term) { ?>
                                    <li class="link">
                                        <a href="#item_<?php echo $key; ?>"><?php echo $term['title']; ?></a>
                                    </li>
                                <?php } ?>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>
                <div class="col-md-1 desktop-only"></div>
                <div class="col-lg-8 col-12">
                    <?php
                    $terms = $section_one['terms'];
                    if($terms) :
                        foreach ($terms as $key => $term) { ?>
                            <div class="scroll-item item_<?php echo $key; ?>" id="item_<?php echo $key; ?>">
                                <h1><?php echo $term['title']; ?></h1>
                                <br/>
                                <?php echo $term['text']; ?>
                            </div>
                        <?php } ?>

                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>

<?php endif; ?>


<?php
get_footer();
?>