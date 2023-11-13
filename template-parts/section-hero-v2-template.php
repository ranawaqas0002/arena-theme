<?php /* Template Part: Page Hero New */ ?>
<?php 

$hero = get_field('hero');
if($hero):
    ?>
    <section class="top-banner-overflow" style="background-image:url(<?php echo $hero['banner_image']['url']; ?>)">
        <div class="container">
            <div class="row">
                <div class="col-md-6 align-items-center d-flex left">
                    <div class="">
                        <div class="overflow-hidden">
                            <p class="section-sub animate animated fade-in-left" data-animate="fade-in-left"><?php echo $hero['header']; ?></p>
                        </div>
                        <div>
                            <div class="overflow-hidden">
                                <h3 class="heading mb-40 animate animated fade-in-bottom" data-animate="fade-in-bottom"><?php echo $hero['sub_header']; ?></h3>
                            </div>
                            <a class="anim animate button-link animated fade-in-left white" data-animate="fade-in-left" href="<?php echo $hero['link_url']; ?>" tabindex="0"><?php echo $hero['link_text']; ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="scroll-text outline"><?php echo $hero['side_text'];?></div>
    </section>

<?php
else:
?>
<section class="top-banner-overflow" style="background-image:url(<?php echo get_stylesheet_directory_uri(); ?>/assets/images/consultancies/header-banner.png)">
    <div class="container">
        <div class="row">
            <div class="col-md-6 align-items-center d-flex left">
                <div class="">
                    <div class="overflow-hidden">
                        <p class="section-sub animate animated fade-in-left" data-animate="fade-in-left">Consultancy</p>
                    </div>
                    <div>
                        <div class="overflow-hidden">
                            <h3 class="heading mb-40 animate animated fade-in-bottom" data-animate="fade-in-bottom">Setting The Highest Standards</h3>
                        </div>
                        <a class="anim animate button-link animated fade-in-left white" data-animate="fade-in-left" href="#" tabindex="0">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="scroll-text outline">TEST</div>
</section>

<?php
endif;
?>


