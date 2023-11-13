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

    .top-banner-overflow {
        background-color: #f7f7f7 !important;
        color: #000;
        height: auto;
    }
        
    body {
        background-color: #f7f7f7;
    }

    .top-banner-overflow .container .text-center {
        min-height: 450px;
    }
    
    .banner-wrap {
        width: 100%;
        padding: 0 10vw;
    }

    .box-white.pd-bot {
        padding-bottom: 120px;
    }

    .box-white {
        padding-top: 120px;
        padding-left: 100px;
        padding-right: 100px;
        background-color: #fff;
    }

    .tag {
        font-size: 14px;
        color: #000;
        margin-bottom: 10px !important;
        display: inline-block;
        text-transform: capitalize;
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

    .banner-wrap .tag {
        font-size: 16px;
    }

    .sidebar-heading {
        border-bottom: 1px solid #bababa;
        font-weight: 400;
        text-transform: capitalize;
        padding-bottom: 20px;
        margin-bottom: 20px;
        font-size: 24px;
    }

    #portfolio .slick-slide a {
        color: #000;
        text-decoration: none;
    }

    .portfolio-carousel {
        margin: 0 -15px;
    }

    .portfolio-carousel img {
        transition: opacity 600ms;
    }

    .portfolio-carousel img:hover {
        opacity: .8;
    }

    #portfolio .slick-slide {
        padding: 0 15px;
    }

    #portfolio .section-sub {
        font-size: 16px;
        margin-top: 30px;
        margin-bottom: 5px;
    }

    .portfolio-carousel .slick-slide {
        margin-bottom: 30px;
    }

    .portfolio-carousel .slick-dots {
        margin-left: 15px;
    }

    .portfolio-carousel .small-heading  {
        font-size: 18px;
        line-height: 28px;
        margin-top: 0;
    }

    .portfolio-carousel .tag  {
        font-size: 14px;
        color: #bababa;
        margin-top: 10px;
    }

    .authorphoto {
        border-radius: 50%;
        overflow: hidden;
        height: 230px;
        width: 230px;
        display: inline-block;
        margin-top: 30px;
    }


    /** ARTICLE STYLES */

    .article-contents img {
        width: 100%;
        margin: 20px 0;
    }

    h1, h2, h3, h4, h5, h6 {
        margin-top: 30px;
        margin-bottom: 30px;
        font-weight: 300;
    }

    .top-banner-overflow .heading {
        line-height: 80px;
        margin-top: 10px;
		font-size: 
    }
	
    .top-banner-overflow .heading {
		line-height: 60px;
		font-size: 40px;
	}

    .author .name {
        font-size: 18px;
        font-weight: 500;
        padding-top: 20px;
        margin-bottom: 0;
    }

    .author .designation {
        color: #bababa;
        font-size: 14px;
    }

    .sidebr .taxonomies {
        list-style: none;
        padding: 0;
    }

    .sidebr .taxonomies li {
        margin-bottom: 8px;
        font-size: 16px;
    }

    .divider span {
        height: 1px;
        background-color: #ccc;
        width: 100%;
        display: inline-block;
        margin: 70px 0 0;
    }

    @media only screen and (max-width:991px) {
        .top-banner-overflow .heading {
            line-height: 60px;
        }

        .sidebr {
            text-align: center;
            margin-top: 30px;
        }

        #subscribe-box {
            background-color: #000;
            text-align: center;
            padding: 45px 45px 15px;
            color: #fff;
            margin-top: 30px;
        }
    }

    @media only screen and (max-width:767px) {

        .top-banner-overflow .heading {
            line-height: 45px;
            margin-bottom: 20px;
        }

        #subscribe-box {
            padding: 45px 15px 15px !important;
        }

        #subscribe-box .medium-heading {
            font-size: 20px !important;
        }

        #subscribe-box .p {
            font-size: 14px !important;
        }

        #subscribe-box form input[type='email'],#subscribe-box form input[type='submit']  {
            height: 40px !important;
            line-height: 40px !important;
            text-align: center;
        }
		
		.top-banner-overflow .heading {
			line-height: 36px !important;
			font-size: 26px;
		}
    }
</style>

<section class="top-banner-overflow gray-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center align-items-center d-flex">
                <div class="banner-wrap">
                    <div class="overflow-hidden">
                        <?php $service = wp_get_object_terms($post->ID, 'services'); ?>
                        <?php if (!empty($service)) { ?>
                            <p class="tag"><?php echo $service[0]->name; ?> <span><?php echo get_the_date('M d, Y', $post); ?></span></p>
                        <?php } ?>
                    </div>
                    <div>
                        <div class="overflow-hidden">
                            <h3 class="heading animate" data-animate="fade-in-bottom"><?php print_r($post->post_title); ?></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<section id="featured" class="gray-bg">
    <div class="container box-white">
        <div class="row">
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-7">
                        <p class="tag"><?php echo $service ? $service[0]->name : '';?> <span><?php echo get_the_date('M d, Y',$post); ?></span></p>
                    </div>
                    <div class="col-5 text-end">
                        <p class="tag">10 minute read</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 article-contents">
                        <?php 
                            $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');      
                        ?>
                            <?php if($image): ?>
                                <img class="mb-40" src="<?php echo $image[0]; ?>" alt="Arena" width="100%">
                            <?php endif; ?>

                            <?php the_content() ?>
                    </div>
                </div>
                <?php echo get_template_part('template-parts/subscribe-form', 'template-parts/subscribe-form'); ?>
            </div>
            <div class="col-lg-1"></div>
            <div class="col-lg-3 sidebr">
                <?php 
                $author = get_field('author',$post); 
                
                if($author): 
                ?>
                    <div class="row">
                        <div class="col-md-12 mb-20">
                            <h3 class="sidebar-heading">Author</h3>
                            <div class="author text-center">
                                <?php 
                                    $image = wp_get_attachment_image_src(get_post_thumbnail_id($author->ID), 'full');      
                                ?>
                                <div class="authorphoto">
                                    <img class="mb-20" src="<?php echo $image[0]; ?>" alt="Arena" width="100%">
                                </div>
                                <?php if(get_field('hero',$author)): ?>
                                    <p class="name"><?php echo get_field('hero',$author)['first_name']; ?> <?php echo get_field('hero',$author)['last_name']; ?></p>
                                    <p class="designation"><?php echo get_field('hero',$author)['designation']; ?></p>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                <?php 
                endif;

                    $terms = get_object_taxonomies('blogs'); 
                    foreach ($terms as $term):
                ?>
                    <div class="row">
                        <div class="col-md-12 mb-20 ">
                            <?php $options = get_terms($term);
							
							if(count($options)): ?>
                            <h3 class="sidebar-heading"><?php echo $term; ?></h3>
                            <ul class="taxonomies">
                                <?php foreach($options as $option): ?>
                                    <li><?php echo $option->name; ?></li>
                                <?php endforeach; ?>
                            </ul>
							<?php endif; ?>
                        </div>
                    </div>

                <?php endforeach; ?>
            </div>
        </div>
        <div class="divider"><span></span></div>
    </div>
</section>



<?php
$posts_array = get_posts(
    $args = array(
        'posts_per_page' => 6,
        'post_type' => 'blogs',
        'orderby' => 'date',
        'order' => 'DESC',
        'tax_query' => [],
		'post_type' => 'published',
        'post__not_in' => array( $post->ID )
    )
);
    
if($posts_array):
?>

<section id="portfolio" class="overflow-hidden pb-60 gray-bg">
    <div class="container image-text box-white pd-bot">
        <div class="row mb-40">
            <div class="col-lg-6">
                <h3 class="small-heading mb-20 animate animated fade-in-left" data-animate="fade-in-left">More Insights</h3>
            </div>
            <div class="col-lg-6 col-md-6 d-flex align-items-center justify-content-end">
                <div class=" arrow-wrap animate" data-animate="fade-in-right">
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="portfolio-carousel horizontal-dots start">
                    <?php 
                        foreach($posts_array as $spost):
                            $image = wp_get_attachment_image_src(get_post_thumbnail_id($spost->ID), 'thumbnail');
                        ?>  
                        <div>
                            <a href="<?php echo get_the_permalink($spost); ?>">
                                <div class="line-icon  " data-animate="fade-in-bottom">
                                    <div class="imgwrap">
                                        <div class="hover" style="background-image:url(<?php echo get_field('client_logo',$spost->ID) ? get_field('client_logo',$spost->ID)['url'] : ''; ?>)"></div>
                                        <img class="mb-20 animate" data-animate="fade-in-top" width="100%" src="<?php echo $image ? $image[0] : '' ; ?>" alt="<?php echo $spost->title; ?>" />
                                    </div>
                                    <?php $service = wp_get_object_terms( $post->ID, 'services' ); ?>
                                    <p class="tag"><?php echo $service[0]->name;?> <span><?php echo get_the_date('M d, Y',$post); ?></span></p>
                                    <h5 class="small-heading animate" data-animate="fade-in-left"><?php echo $spost->post_title; ?></h5>
                                </div>
                            </a>
                        </div>
                    <?php
                        endforeach;
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php endif; ?>

<?php
get_template_part('template-parts/section-next-section-template', 'section');
get_footer();
?>

<script>
    $('.portfolio-carousel').slick({
        arrows: true,
        loop: true,
        appendArrows: '#portfolio .arrow-wrap',
        slidesToShow: 3,
        slidesToScroll: 1,
        responsive: [
            {
                breakpoint: 991,
                settings: {
                    slidesToShow: 1,
                    dots: true,
                    arrows: false,
                }
            }
        ]
    });
</script>
