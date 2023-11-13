<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <style>
        .col-md-12.d-flex.align-items-center.menu-cont a.active {
    font-size: 60px !important;
}
.col-md-12.d-flex.align-items-center.menu-cont p {
    margin-bottom: 0px !important;
}
        @media screen and (max-width:768px) {
            .col-md-12.d-flex.align-items-center.menu-cont p {
    margin-bottom: 0px !important;
}
.col-md-12.d-flex.align-items-center.menu-cont a.active {
    font-size: 41px !important;
}
/* .col-md-12.d-flex.align-items-center.menu-cont a#submenulink {
    margin-bottom: 2px !important;
} */
   
            
        }
             @media (min-width: 1200px) and (max-width: 1400px){
            #header ul li {
                padding: 0 15px !important;
            }
        }
    </style>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="author" content="ARENA Capital" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0,user-scalable=0"/>
    <!-- HTML Meta Tags -->
    <!-- <title><?php echo get_bloginfo('name'); ?></title>
    <meta name="description" content="<?php echo get_bloginfo('description'); ?>"> -->

    <!-- Google / Search Engine Tags -->
    <!-- <meta itemprop="name" content="<?php echo get_bloginfo('name'); ?>">
    <meta itemprop="description" content="<?php echo get_bloginfo('description'); ?>"> -->

    <!-- Facebook Meta Tags -->
    <!-- <meta property="og:url" content="https://arena-me.com">
    <meta property="og:type" content="website">
    <meta property="og:title" content="<?php echo get_bloginfo('name'); ?>">
    <meta property="og:description" content="<?php echo get_bloginfo('description'); ?>"> -->

    <!-- Twitter Meta Tags -->
    <!-- <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo get_bloginfo('name'); ?>">
    <meta name="twitter:description" content="<?php echo get_bloginfo('description'); ?>."> -->


    <!-- Meta Tags Generated via http://heymeta.com -->
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/favicon.ico" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link defer href="<?php echo get_stylesheet_directory_uri(); ?>/assets/fonts/stylesheet.css?v=<?php echo rand(1,99999999999); ?>" rel="stylesheet" />
    <link defer href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/plugins.css?v=<?php echo rand(1,99999999999); ?>" rel="stylesheet" />
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/style.css?v=<?php echo rand(1,99999999999); ?>" rel="stylesheet" />
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/consultancy.css?v=<?php echo rand(1,99999999999); ?>" rel="stylesheet" />
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/inner-pages.css?v=<?php echo rand(1,99999999999); ?>" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    
    <?php wp_head(); ?>
	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-KKZHTD7');</script>
	<!-- End Google Tag Manager -->

</head>
<body <?php body_class(); ?>>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KKZHTD7"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
	
<?php wp_body_open(); $headerBackground = get_field('header_background'); $menuColor = get_field('menu_color');  ?>
<header id="header" class="<?php echo $headerBackground; ?> <?php echo get_post_type($post)=='blogs' ? 'transparent' : ''; ?>">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="wrap <?php echo $menuColor; ?>">
                    <a href="/" class="left">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/Arena_Logo.svg" id="main-logo" alt="ARENA Logo" class="animate fade-in-left">
                    </a>
                    <div class="right">
                        <?php
                        // Loading WordPress Custom Menu (theme_location).
                        wp_nav_menu(
                            array(
                                'theme_location' => 'main-menu',
                                'container'      => '',
                                'menu_id' => 'header-menu',
                                'menu_class'     => 'main-menu desktop-only',
                                'fallback_cb'    => 'WP_Bootstrap_Navwalker::fallback',
                                'walker'         => new WP_Bootstrap_Navwalker(),
                            )
                        );
                        ?>

                        <div id="menu-icon">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<?php 
// $menu_items = wp_get_nav_menu_items('main-menu'); // $name_of_menu is the result of register-nav-menu, and get_list_of_items is the psuedo function
// print_r($menu_items);
// foreach ($menu_items as $item) {
//     print_r($item);
// }
?>
<nav id="main-menu">
    <div class="container">

    <div id="submenu">
        <div class="wrap">
            <div class="row">
                <div class="col-md-2">
                    <a href="#" class="back">Back</a>
                </div>
                <div class="col-md-10">
                    <h3 class="head">Consultancy</h3>

                    <div class="row">
                        <?php 
                        $types = get_terms('service_types', array(
                            'hide_empty' => false,
                            'order' => 'ASC',
                            'orderby'   => 'ID'
                        ));
                            foreach($types as $type){
                        ?>
                            <div class="col-md-6 column">
                                <h4 class="subhead animate" data-animate="fade-in-left"><?php echo $type->name; ?></h4>
                        <?php 
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
                                foreach($posts_array as $pt){
                                ?>
                                <a href="<?php echo get_permalink($pt); ?>" class="fade-in-left"><?php echo $pt->post_title; ?></a>
                        <?php
                                }
                        ?>
                            </div>
                        <?php
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
        <!-- main navigation -->
        <?php
        $main_navigation = get_field('navigation_menu', 'options');
        if ($main_navigation) : ?>
            <div class="row top">
                <div class="col-md-12 d-flex align-items-center menu-cont">
                <a href="/" class="left"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/Arena_Logo.svg" id="main-logo-nav" alt="ARENA Logo"></a>
                    <ul class="main">
                        <?php
                        $menu_items =  $main_navigation['menu_items'];
                        if ($menu_items) :
                            foreach ($menu_items as $key => $item) {
                                if($item['items']->post_name=='consultancy'):
                                ?>
                                    <li><a href="#" id="submenulink"><?php echo $item['items']->post_title; ?></a></li>
                                <?php else: ?>
                                    <li><a href="<?php echo get_permalink($item['items']->ID); ?>"><?php echo $item['text'] ?></a></li>
                                <?php  
                                endif;
                            }
                        endif; ?>
                    </ul>
                </div>

                <!-- <div class="col-md-6 d-flex align-items-center">
                    <ul id="hovermenu">
                        <?php
                        if ($menu_items) :
                            foreach ($menu_items as $key => $item) {
                                ?>
                                <li>
                                    <?php echo $item['text']; ?>
                                </li>

                            <?php    }
                        endif; ?>


                    </ul>
                </div> -->
                <div id="menu-close"></div>
            </div>
        <?php endif; ?>
        <div class="row bottom">
            <div class="col-md-4 d-flex align-items-center left">
                <?php
                $social_media = get_field('social_media','options');
                if($social_media) :?>
                    <ul>
                        <?php
                        $items = $social_media['items'];
                        if($items){
                            foreach ($items as $key => $item) {

                                ?>
                                <li><a href="<?php echo $item['item']['url']; ?>" target="_blank"><?php echo $item['item']['title']; ?></a></li>
                            <?php     }


                        }?>

                    </ul>
                <?php endif;?>
            </div>
            <?php
            $copyright = get_field('extra_menu_items','options');
            if($copyright):?>
                <div class="col-md-8 d-flex align-items-center right">
                    <ul>
                        <?php
                        $header = $copyright['header'];
                        if($header):
                            foreach ($header as $key => $link) {

                                ?>
                                <li><a href="<?php echo get_permalink($link->ID); ?> " ><?php echo $link->post_title; ?> </a></li>
                            <?php   } endif;?>

                    </ul>
                </div>
            <?php endif;?>
        </div>
    </div>
</nav>
