<?php
$footer_menu =get_field('footer__menu', 'options');
if($footer_menu):?>

    <footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-3 left animate" data-animate="fade-in-left">
                    <a href="https://arenacapital.com"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/Arena_Logo.svg" id="footer-logo"/> </a>
                </div>
                <div class="col-md-9 right animate" data-animate="fade-in-right">

                    <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'footer-menu',
                            'container'      => '',
                            // 'menu_id' => 'header-menu',
                            'fallback_cb'    => 'WP_Bootstrap_Navwalker::fallback',
                            'walker'         => new WP_Bootstrap_Navwalker(),
                        )
                    );
                    ?>


                    <ul>
                        <li><?php echo $footer_menu['connect_header']; ?></li>
                        <li>
                            <a href="<?php echo $footer_menu['address_link']; ?>"><div class="address"><?php echo $footer_menu['address_text']; ?></div></a>
                        </li>
                        <li>
                            <a href="tel:<?php echo $footer_menu['tel_link']; ?>" ><?php echo $footer_menu['tel_text']; ?></a>
                            <a href="mailto:<?php echo $footer_menu['email_link']; ?>" ><?php echo $footer_menu['email_text']; ?></a>
                        </li>
                        <li>
                            <?php
                            $social_media = get_field('social_media','options');
                            if($social_media) :?>
                                <?php
                                $items = $social_media['items'];
                                if($items){
                                    foreach ($items as $key => $item) {
                                        ?>
                                        <a href="<?php echo $item['item']['url']; ?>" target="_blank"><?php echo $item['item']['title']; ?></a>
                                    <?php     }
                                }?>
                            <?php endif;?>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <aside id="bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-6 left animate" data-animate="fade-in-left">
                    <?php echo $footer_menu['copyright_text']; ?>
                </div>
                <div class="col-md-6 right">
                    <ul>


                        <?php
                        $copyright = get_field('extra_menu_items','options');
                        $header = $copyright['footer'];
                        if($header):
                            foreach ($header as $key => $link) {

                                ?>
                                <li><a href="<?php echo get_permalink($link->ID); ?> " class="animate" data-animate="fade-in-right"><?php echo $link->post_title; ?> </a></li>
                            <?php   } endif;?>
                    </ul>
                </div>
            </div>
        </div>
    </aside>

<?php endif;?>

<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/scripts.js?v=<?php echo rand(1,9999999); ?>"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/smoothscroll.js"></script>
<script>
    SmoothScroll({frameRate:75,animationTime:1000,stepSize:50,pulseAlgorithm:1,pulseScale:4,pulseNormalize:1,accelerationDelta:50,accelerationMax:3,keyboardSupport:1,arrowScroll:50,fixedBackground:1})
    var scene = [];
    var controller = new ScrollMagic.Controller({globalSceneOptions: {}});
</script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/main.js?v=<?php echo rand(1,99999999999); ?>"></script>

<?php wp_footer(); ?>

