<?php

/**

 * Template Name: Blog

 * Description: The template for displaying consultancy page

 *

 */

get_header();
?>
<?php /* Template Part: Page Hero New */ ?>

<style>

    .top-banner-overflow .left {
        height: 420px;
    }

    .top-banner-overflow {
        background-color: #f7f7f7 !important;
        color: #000;
        height: auto;
    }

    .top-banner-overflow .container .left, .top-banner-overflow .container .right {
        min-height: 420px;
    }

    .box-white {
        padding-top: 120px;
        padding-left: 100px;
        padding-right: 100px;
        background-color: #fff;
    }

    .box-white.pd-bot {
        padding-bottom: 120px;
    }

    .divider span {
        height: 1px;
        background-color: #ccc;
        width: 100%;
        display: inline-block;
        margin: 70px 0;
    }

    .divider.sm-mt span {
        margin-top: 40px;
    }



    .recommended .item {
        border: 1px solid #ccc;
        min-height: 220px;
        display: flex;
        align-items: center;
        margin-bottom: 20px;
        padding: 30px;
        transition: background-color 600ms, color 800ms;
    }

    .recommended .item:hover {
        background-color: #000;
        color: #fff;
    }

    .tag {
        font-size: 14px;
        color: #bababa;
        margin-bottom: 10px !important;
        display: inline-block;
    }

    .tag span {
        display: inline-block;
        margin-left: 10px;
    }

    .tag span:before {
        content: '';
        display: inline-block;
        width: 3px;
        height: 3px;
        border-radius: 50%;
        background-color: #bababa;
        margin-right: 10px;
        vertical-align: middle;
    }

    #featured a {
        text-decoration: none;
        color: inherit !important;
    }

    #featured a img {
        transition: opacity 600ms;
    }

    #featured a:hover img {
        opacity: .6;
    }

    .insight {
        margin-bottom: 20px;
    }
    
    <?php for($x=1;$x<10;$x++){ ?>
        #blogposts .animate:nth-of-type(<?php echo $x; ?>) { animation-delay: <?php echo $x*100; ?>ms; }
    <?php } ?>

    .filters select {
        border: 1px solid #bababa;
        font-size: 16px;
        height: 40px;
        line-height: 40px;
        padding: 0 20px;
        background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/images/menu-icon.png') !important;
    }

    h5.title {
        line-height: 32px;
        font-size: 18px;
        font-weight: 400;
    }

    .heading {
        line-height: 80px;
    }

    @media only screen and (max-width:991px) {
        #featured .right {
            margin-top: 40px;
        }

        .top-banner-overflow .container .left, .top-banner-overflow .container .right {
            min-height: 200px;
        }

        .top-banner-overflow .left {
            height: auto;
        }

        .divider span {
            margin: 40px 0;
        }

        .all-insights .small-heading {
            margin-bottom: 0 !important;
        }
    }

    @media only screen and (max-width:767px) {
        .filters select {
            margin: 8px 0;
        }
        .top-banner-overflow .col-md-6.align-items-center.d-flex.left {
    min-height: 250px !important;
}
    }

    #load-more.loading:before {
        background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/images/loader.gif');
        background-size: 45px;
    }

    #filterForm {
        margin-top: 0;
    }

    .mb-40 {
        margin-bottom: 30px !important;
    }
</style>

<?php 

$hero = get_field('hero');
if($hero):
    ?>
    <section class="top-banner-overflow gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-6 align-items-center d-flex left">
                    <div class="">
                        <!-- <div class="overflow-hidden">
                            <p class="section-sub animate animated fade-in-left" data-animate="fade-in-left">Insights</p>
                        </div> -->
                        <div>
                            <div class="overflow-hidden">
                                <h3 class="heading animate" data-animate="fade-in-bottom">Insights</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 align-items-center d-flex right desktop-only">
                    <div class="">
                        <div class="overflow-hidden">
                            <div class=" animate" data-animate="fade-in-bottom">Dive into industry insights and proven strategies for building success online.</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php
endif;
?>

<?php 
$nextpage = get_field('next_page', $post->ID); ?>

<section id="featured" class="gray-bg">
    <div class="container box-white pd-bot">
        <?php global $wp; ?>
        <form id="filterForm" method="GET" action="<?php echo home_url( $wp->request ); ?>/">
            <div class="row filters">
                <!-- <div class="col-md-4 align-items-center d-flex left">
                    Filter By:
                </div> -->

                <?php 
                    $terms = get_object_taxonomies('blogs'); 
                    foreach ($terms as $term):
                ?>
                    <div class="col-md-4 align-items-center d-flex left">
                        <?php $options = get_terms($term);?>
                        
                        <!-- <select name="id_<?php echo $term; ?>">
                            <option value="">All <?php echo $term; ?></option>
                            <?php foreach($options as $option): ?>
                                <option <?php echo isset($_GET['id_'.$term]) ? ($_GET['id_'.$term] == $option->term_id ? 'selected' :  '') : ''; ?> value="<?php echo $option->term_id; ?>"><?php echo $option->name; ?></option>
                            <?php endforeach; ?>
                        </select> -->
                    </div>

                <?php endforeach; ?>
                <!-- <input type="submit"/> -->
            </form>
        </div>

        <!-- <div class="divider sm-mt"><span></span></div> -->
    <?php 

        $articles = get_field('articles');
        if($articles):
            ?>
            <div class="row">
                <div class="col-md-6">
                    <h3 class="small-heading mb-40">Featured Insight</h3>

                    <?php 
                        $args = array(
                            'posts_per_page' => 1,
                            'post_type' => 'blogs',
                            'orderby' => 'date',
                            'order' => 'DESC',
                            'tax_query' => []
                        );

                        if(isset($_GET['id_industries']))
                            if($_GET['id_industries'])
                            array_push($args['tax_query'], 
                                array(
                                    'taxonomy' => 'industries',
                                    'field' => 'term_id',
                                    'terms' => [$_GET['id_industries']],
                                )
                            );

                        if(isset($_GET['id_services']))
                            if($_GET['id_services'])
                                array_push($args['tax_query'], 
                                    array(
                                        'taxonomy' => 'services',
                                        'field' => 'term_id',
                                        'terms' => [$_GET['id_services']],
                                    )
                                );

                        // print_r($args);
                        $posts_array = get_posts($args);
                    ?>

                        <?php foreach($posts_array as $p) { ?>
                            <?php 
                                $image = wp_get_attachment_image_src(get_post_thumbnail_id($p->ID), 'thumbnail');      
                            ?>
                            <a href="<?php echo get_permalink($p); ?>">
                                <div class="line-icon" data-animate="fade-in-bottom">
                                    <img class="mb-40" src="<?php echo $image[0]; ?>" alt="Arena" width="100%">
                                    <?php $service = wp_get_object_terms($p->ID, 'services'); ?>
                                    <?php if (!empty($service)) { ?>
                                        <p class="tag"><?php echo $service[0]->name; ?> <span><?php echo get_the_date('M d, Y', $p); ?></span></p>
                                    <?php } ?>
                                    <h5 class="title mb-20"><?php echo $p->post_title ?></h5>
                                    <?php if (get_field('author', $p)) : ?>
                                        <?php $author_id = get_field('author', $p); ?>
                                        <?php $author_data = get_field('hero', $author_id); ?>
                                        <?php if ($author_data) : ?>
                                            <p class="tag">
                                                <a href="<?php echo get_permalink($author_id); ?>">By <?php echo $author_data['first_name']; ?> <?php echo $author_data['last_name']; ?>, <?php echo $author_data['designation']; ?></a>
                                            </p>
                                        <?php endif; ?>
                                    <?php endif; ?>
                                </div>
                            </a>
                        <?php } ?>

                </div>
                <div class="col-md-1"></div>
                <div class="col-md-5 align-items-center right">
                    <?php 

                        $args = array(
                            'posts_per_page' => 3,
                            'post_type' => 'blogs',
                            'offset'         => 1,
                            'orderby' => 'date',
                            'order' => 'DESC',
    						'post_type' => 'published',
                            'tax_query' => []
                        );

                        if(isset($_GET['id_industries']))
                            if($_GET['id_industries'])
                            array_push($args['tax_query'], 
                                array(
                                    'taxonomy' => 'industries',
                                    'field' => 'term_id',
                                    'terms' => [$_GET['id_industries']],
                                )
                            );

                        if(isset($_GET['id_services']))
                            if($_GET['id_services'])
                            array_push($args['tax_query'], 
                                array(
                                    'taxonomy' => 'services',
                                    'field' => 'term_id',
                                    'terms' => [$_GET['id_services']],
                                )
                            );

                        // print_r($args);
                        $posts_array = get_posts($args);
					
					if(count($posts_array)) {
                    ?>

                    <h3 class="small-heading mb-40">Recommended</h3>
                    <div class="recommended">
                        <?php foreach($posts_array as $p) { ?>
                            <a href="<?php echo get_permalink($p); ?>">
                                <div class="item">
                                    <div>
                                        <?php $service = wp_get_object_terms( $p->ID, 'services' ); ?>
                                        <p class="tag animate" data-animate="fade-in-left"><?php echo $service[0]->name;?> <span><?php echo get_the_date('M d, Y',$p); ?></span></p>
                                        <h5 class="title animate" data-animate="fade-in-left"><?php echo $p->post_title ?></h5>
                                        <?php if(get_field('author',$p)): ?>
                                            <p class="tag"><a href="<?php echo get_permalink(get_field('author',$p)); ?>">By <?php echo get_field('hero',get_field('author',$p))['first_name']; ?> <?php echo get_field('hero',get_field('author',$p))['last_name']; ?></a>, <?php echo get_field('hero',get_field('author',$p))['designation']; ?></p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </a>
                        <?php } ?>
                    </div>
					<?php } ?>
                </div>
            </div>
            <?php 

            $args = array(
                'posts_per_page' => 9,
                'offset'         => 4,
                'post_type' => 'blogs',
                'orderby' => 'date',
                'order' => 'DESC',
                'tax_query' => []
            );

            if(isset($_GET['id_industries']))
                if($_GET['id_industries'])
                array_push($args['tax_query'], 
                    array(
                        'taxonomy' => 'industries',
                        'field' => 'term_id',
                        'terms' => [$_GET['id_industries']],
                    )
                );

            if(isset($_GET['id_services']))
                if($_GET['id_services'])
                    array_push($args['tax_query'], 
                        array(
                            'taxonomy' => 'services',
                            'field' => 'term_id',
                            'terms' => [$_GET['id_services']],
                        )
                    );

            // print_r($args);
            $q = new WP_Query( $args );
            $posts_array = get_posts($args);

            if(count($posts_array)):
            ?>

                <div class="divider"><span></span></div>

                <div class="row all-insights">
                    <div class="col-md-12 align-items-center d-flex left">
                        <h3 class="small-heading mb-40">All Insights</h3>
                    </div>
                    <div class="row">
                        <div class="col-md-12 align-items-center d-flex right mb-40">
                            
                                <div class="row" id="blogposts">

                                    <?php foreach($posts_array as $post) {  
                                        echo get_template_part('template-parts/blog-post', 'template-parts/blog-post',['post'=>$post]);
                                    }
                                    ?>
                                </div>
                                
                        </div>
                    </div>

                    <?php if(count($posts_array) >= 9): ?>
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <a id="load-more" class="animate button-link animated fade-in-left" data-animate="fade-in-left" href="#" tabindex="0">Load More</a>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>

            <?php endif;?>
        <?php
        endif;
        ?>
    </div>
</section>


<section id="next-page" class="overflow-hidden section-pd gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-5 animate " data-animate="fade-in-left">
                    <div class="horizontal-dots left-dots">
                        <p class="section-sub"><?php echo $nextpage['header'] ?></p>

                        <?php
                        if ($nextpage['next_page_link']) : ?>
                            <a class="medium-heading mb-60 text-black" href="<?php echo $nextpage['next_page_link']['url']; ?>"> <?php echo $nextpage['next_page_link']['title']; ?></a>
                    </div>
                </div>
                <div class="col-md-1">
                </div>
                <div class="col-md-6  d-flex flex-column justify-content-center animate " data-animate="fade-in-right">
                    <a href="<?php echo $nextpage['next_page_link']['url']; ?>" class="button-link"></a>
                <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
    
<?php
get_footer();
?>
    <script>
        $('.box-tab-nav button').on('click', function(){
            $('.box-tab-nav button').removeClass('active');

            $(this).addClass('active');
            index = $(this).index('.box-tab-nav button');

            $('.box-tab-content').removeClass('active');
            $('.box-tab-content').eq(index).addClass('active');
            $('.box-tab-content').eq(index).slick('refresh');
        });

        if($('.line-icon-carousel').length){
            $('.line-icon-carousel').slick({
                dots: false,
                arrows: false,
                infinite: true,
                speed: 1000,
                slidesToShow: 3,
                slidesToScroll: 1,
                responsive: [
                    {
                        breakpoint: 991,
                        settings: {
                            slidesToShow: 3,
                            arrows: true,
                            appendArrows: '.value-carousel-arrows'
                        }
                    },
                    {
                        breakpoint: 767,
                        settings: {
                            slidesToShow: 2,
                            arrows: true,
                            appendArrows: '.value-carousel-arrows'
                        }
                    },
                ]
            });
        }

        let currentPage = 1;
        $('#load-more').on('click', function(e) {
            $(this).addClass('loading');
            e.preventDefault();
            $.ajax({
                type: 'POST',
                url: '/wp-admin/admin-ajax.php',
                dataType: 'json', 
                data: {
                    action: 'weichie_load_more',
                    paged: currentPage,
                },
                success: function (res) {
                    console.log(res);
                    $('#blogposts').append(res.html);
                    addAnimate();
                    currentPage++;
                },
                error: function(error) {
                    console.log(error);
                },
                complete: function(){
                    $('#load-more').removeClass('loading');
                }
            }); 
        });

        function addAnimate(){
            inView('.animate')
            .on('enter', function(item){
                $(item).delay(500).addClass('animated');
                $(item).delay(500).addClass($(item).attr('data-animate'));
            })
            .on('exit', el => {
                // $(el).removeClass('animated');
                // $(el).removeClass($(el).attr('data-animate'));
            });
        }

        $('.filters select').on('change',function(){
            $('#filterForm').submit();
        });
          
    </script>
