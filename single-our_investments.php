<?php

/**

 * Template Name: Service Investments

 * Description: The template for displaying consultancy page

 *

 */

get_header();
?>
<style>
    section#hero{
        z-index: 0 !important;
    }
        button.slick-next.slick-arrow {
    position: absolute;
    top: 81%;
    right: 47%;
}
button.slick-prev.slick-arrow {
    position: absolute;
    top: 79%;
    left: 44%;
}
@media (min-width:992px) and (max-width: 1200px){
    button.slick-next.slick-arrow {
    position: absolute;
    top: 81%;
    right: 43%;
}
button.slick-prev.slick-arrow {
    position: absolute;
    top: 79%;
    left: 45%;
}

}
@media (min-width: 768px) and (max-width: 992px){
    button.slick-prev.slick-arrow {
    position: absolute;
    top: 735px;
    left: 39%;
}
button.slick-next.slick-arrow {
    position: absolute;
    top: 755px;
    right: 45%;
}
}
    
    #figures .large-header {
        margin-bottom: 0;
        font-weight: 500;
        font-size: 100px;
    }

    body {
        background-color: #f7f7f7;
    }

	.image-text .right {
		display: flex;
		align-content: center;
	}
	
    .process-carousel .slick-slide img, .process-carousel .tabs-content {
        margin-bottom: 0;
    }

    .portfolio-carousel .slick-slide {
        margin-bottom: 30px;
    }

    .portfolio-carousel .slick-dots {
        margin-left: 15px;
    }

    #banner_section, #banner_section h3 {
        color: #fff;
    }

    #banner_section h3 {
        font-weight: 500;
    }

    #banner_section a {
        font-size: 16px;
        padding: 0 70px;
        text-align: center;
        background-color: #fff;
        text-decoration: none;
        margin-top: 40px;
        display: inline-flex;
        height: 50px;
        align-items: center;
        transition: opacity 800ms;
    }

    #banner_section a:hover {
        opacity: .8;
        color: #000;
    }
    
        .why-carousel .slick-dots {
            justify-content: start !important;
        }

        #why-arena .image-text .right {
            padding-top: 60px;
            padding-bottom: 60px;
        }

        #why-arena .simpleParallax {
            height: 100%;
        }

        #why-arena .simpleParallax img {
            height: 110%;
            width: auto;
        }

        #banner_section .image-text {
            background-size: 100%  auto ;
			background-position: right center;
        }

		.top-banner-overflow.dark .left, .top-banner-overflow.dark .left a {
			color: #000;
		}
	
		.top-banner-overflow.dark {
    		background-color: #f7f7f7;
		}

        .top-banner-overflow {
            height: 1050px !important;
        }

        #quote .mb-40 {
            font-size: 24px;
            line-height: 34px;
            font-weight: 500;
        }

        #other-investments .slick-slide {
            margin: 0 17px;
        }

        #other-investments .slick-list {
            margin: 0 -17px;
        }

        #other-investments .wrap {
            display: flex;
            flex-flow: column;
            min-height: 260px;
            justify-content: space-between;
            margin-bottom: 100px;
        }

        .horizontal-dots .slick-dots {
            justify-content: start;
        }

        .companylogo {
            max-width: 200px;
            width: 100%;
        }

		@media only screen and (max-width: 1400px) { 
			#banner_section .image-text {
				background-size: auto 110%;
			}
		}
	
		@media only screen and (max-width: 1200px) { 
			.service-video {
				width: 120%;
			}
		}
			
        @media only screen and (max-width: 991px) {
			
            #banner_section, #banner_section h3 {
                text-align: center;
            }

            .process-carousel .slick-slide img, .process-carousel .tabs-content {
                margin-top: 30px;
            }

            #what-we-do .right {
                padding-top: 30px;
            }

            #what-we-do .right .img-animate {
                margin-bottom: 0 !important;
            }

            .accordion-body {
                padding: 0 30px 50px 30px !important;
                border: 0;
            }

			#banner_section .image-text {
				position: relative;
			}
			
			#banner_section .image-text:before {
				content: '';
				width: 100%;
				height: 100%;
				opacity:.3;
				background-color: #000;
				position: absolute;
				display: block;
				left: 0;
				top: 0;
			}
			
			#banner_section .col-lg-6 {
				position: relative;
				z-index: 1;
			}
			
            .service-video {
                display: none;
				width: 120%;
            }

            .service-video-mobile {
                display: block;
            }

            .top-banner-overflow {
                height: 840px !important;
            }
        }
	
        @media only screen and (max-width: 767px) {

            
			.line-icons.line-icon-carousel {
				margin-left: 0 !important;
				margin-right: 0 !important;
			}
			
            #why-arena .simpleParallax img {
                height: auto;
                width: 100%;
            }

            .accordion-button::after {
                width: 30px;
                height: 30px;
				margin-right: -10px;
            }

            .line-icons .slick-slide {
                padding: 0 !important;
            }

		  .top-banner-overflow.dark .left, .top-banner-overflow.dark .left a {
			  color: #fff;
		  }

		  .top-banner-overflow.dark .container {
			background-color: rgba(0,0,0,0.5);
		  }

          #other-investments .wrap {
                min-height: 240px;
                margin-bottom: 30px;
            }

        }
		

        @media only screen and (max-width: 550px) {
            .service-video-mobile {
                height: auto;
                width: 110%;
                top: 0;
                left: -5%;
            }
        }

        @media only screen and (max-width: 480px) {
            .service-video-mobile {
                height: 550px;
                width: auto;
                left: -6vw;
            }

            .top-banner-overflow.has-mobile-video .left {
                height: 380px !important;
            }

            .top-banner-overflow.has-mobile-video {
                height: 1020px !important;
            }
        }

        @media only screen and (max-width: 450px) {
            .service-video-mobile {
                height: 530px;
                width: auto;
                left: -5vw;
            }

            .top-banner-overflow.has-mobile-video .left {
                height: 380px !important;
            }

            .top-banner-overflow.has-mobile-video {
                height: 1020px !important;
            }
        }

        @media only screen and (max-width: 380px) {
			.service-video-mobile {
				height: 520px;
				width: auto;
				left: -14vw;
			}

        }
	
        @media only screen and (max-width: 360px) {
            .service-video-mobile {
                left: -15vw;
                width: 130%;
            }
        }
</style>

<link href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/consultancy.css?v=<?php echo rand(1,99999999999); ?>" rel="stylesheet" />
<link href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/home.css?v=<?php echo rand(1,99999999999); ?>" rel="stylesheet" />

<?php
$hero = get_field('banner');

if($hero):
    ?>
	<?php $menuColor = get_field('menu_color');  ?>
    <section id="hero" <?php echo $hero['background_color'] ? 'style="background-color:'.$hero['background_color'].'"' : ''; ?> class="top-banner-overflow scrolling-text <?php echo $hero['video'] ? 'has-video' : '' ?> <?php echo $hero['video_mobile'] ? 'has-mobile-video' : '' ?> <?php echo $menuColor; ?>" style="background-image: <?php echo $hero['video'] ? 'none' : 'url('.$hero['banner_image']['url'].')'; ?>">
    <!-- <section id="hero" class="top-banner-overflow scrolling-text <?php echo $menuColor; ?>" style=""> -->

        <?php if(isset($hero['video'])): ?>
            <?php if($hero['video']): ?>
                <video class="service-video" id="myVideo" autoplay="autoplay" muted loop playsinline>
                    <source src="<?php echo $hero['video']; ?>">
                    Your browser does not support the video tag.
                </video>
            <?php endif; ?>
        <?php endif; ?>

        <?php if(isset($hero['video_mobile'])): ?>
            <?php if($hero['video_mobile']): ?>
                <video class="service-video-mobile" id="myVideo" autoplay="autoplay" muted loop playsinline>
                    <source src="<?php echo $hero['video_mobile']; ?>">
                    Your browser does not support the video tag.
                </video>
            <?php endif; ?>
        <?php endif; ?>
        
        <div class="scrollTrigger"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-6 align-items-center d-flex left">
                    <div class="">
                        <div>
                            <div class="overflow-hidden">
                                <h3 class="heading mb-40 animate animated fade-in-bottom" data-animate="fade-in-bottom"><?php echo $post->post_title; ?></h3>
                            </div>
                            <!-- <a class="anim animate button-link animated fade-in-left white" data-animate="fade-in-left" href="<?php echo $hero['link_url']; ?>" tabindex="0"><?php echo $hero['link_text']; ?></a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php endif; ?>

<!-- section one -->

<section id="what-we-do" class="overflow-hidden pull-up mb-40">
    <div class="container image-text box-white pd-bot">
        <div class="row">
            <div class="left col-lg-5 col-md-12 horizontal-dots left-dots d-flex flex-column justify-content-center">
                <div class="">
                    <div class="overflow-hidden mb-20">
                        <div>
                            <div><?php echo get_field('details'); ?></div>
                        </div>
                    </div>
                </div>
                <div class="">
                    <div class="overflow-hidden mb-20">
                        <hr class=" mb-20"/>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="overflow-hidden">
                            <p class="mb-20">Founded: <br/><strong><?php echo get_field('date_founded'); ?></strong></p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="overflow-hidden">
                            <p class="mb-20">Location: <br/><strong><?php echo get_field('location'); ?></strong></p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="overflow-hidden">
                            <p class="mb-20">Partnered Year: <br/><strong><?php echo get_field('partnered_year'); ?></strong></p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="overflow-hidden">
                            <p class="mb-20">Business Mode: <br/><strong><?php echo get_field('business_mode'); ?></strong></p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <hr/>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="d-flex justify-content-between">
                            <div><img src="<?php echo get_field('logo')['url']; ?>" alt="" class="companylogo"></div>
                            <a class="anim animate button-link " data-animate="fade-in-bottom" href="<?php echo get_field('link'); ?>" target="_blank" tabindex="0">View Website</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-1"></div>
            <div class="right col-lg-6 col-md-12">
                <img class="" src="<?php echo get_field('image')['url']; ?>" alt="" width="100%">
            </div>
        </div>
    </div>
</section>

<?php if(get_field('quote')): ?>
<section id="quote" class="overflow-hidden gray-bg mb-40">
    <div class="container image-text box-white pd-bot text-center">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <span class="quotemark">"</span>
                <p class="mb-40 animate animated fade-in-top" data-animate="fade-in-top">
                    "We are proud to be associated with AIX, a company that values diversity and inclusivity at its core. Their commitment to fostering a culture of equality and creating opportunities for all is commendable. Investing in them aligns with our values and reinforces our belief in the power of diversity in driving innovation and success."
                </p>
                <p>Dariush Soudi, Chairman</p>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
</section>
<?php endif; ?>

<section id="investments" class="center-text section-pd pt-0 pb-60 gray-bg">
    <div class="container box-white pd-bot">
        <div class="row mb-20">
            <div class="col-md-8 horizontal-dots mb-40">
                <div class="medium-heading animate" data-animate="fade-in-bottom">Other Investments</div>
            </div>
            <div class="col-md-4 d-flex align-items-center justify-content-end right-arrows mb-40">
                <div id="other-investments-nav"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div id="other-investments" class="horizontal-dots hover-icon">
                    <?php 
                        $posts_array = get_posts(
                            array(
                                'posts_per_page' => -1,
                                'post_type' => 'our_investments',
                                'orderby'   => 'title',
                                'order' => 'ASC',
                                'post__not_in' => array($post->ID),
                            )
                        );
                            if(count($posts_array)){
                                $loop = 1;
                                foreach($posts_array as $p) {
                                    ?>  
                                    <div class="">
                                        <a href="<?php echo get_permalink($p); ?>">
                                            <div class="imgwrap mb-40">
                                                <div class="hover" style="background-image: url(<?php echo get_field('hover_logo',$p->ID)['url']; ?>)"></div>
                                                <img src="<?php echo wp_get_attachment_image_src( get_post_thumbnail_id( $p->ID ), 'thumbnail' )[0]; ?>" class="img-hover" width="100%"/>
                                            </div>
                                        </a>
                                        <div class="wrap">
                                            <div>
                                                <h5 class="small-heading"><?php echo $p->post_title ?></h5>
                                                <p class=""><?php echo get_field('details', $p->ID); ?></p>
                                            </div>

                                            <div>
                                                <a class="anim button-link"href="<?php echo the_permalink(); ?>" tabindex="0">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                    $loop++;
                                    }
                            } else {
                                echo '<p style="padding-left:15px;">Coming soon...</p>';
                            }
                        ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php /* Template Part: Page Hero */ ?>
<style>
    .text-black {
        color: #000;
        text-decoration: none;
    }
</style>

<?php

$next = get_field('next_page');
$play = get_field('next_arrow', 'options');
if ($next) : ?>

    <section id="next-page" class="overflow-hidden section-pd gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-5 animate " data-animate="fade-in-left">
                    <div class="horizontal-dots left-dots">
                        <p class="section-sub"><?php echo $next['header'] ?></p>

                        <?php
                        if ($next['next_page_link']) : ?>
                            <a class="heading mb-60 text-black" href="<?php echo $next['next_page_link']['url']; ?>"> <?php echo $next['next_page_link']['title']; ?></a>
                    </div>
                </div>
                <div class="col-md-1">
                </div>
                <div class="col-md-6  d-flex flex-column justify-content-center animate " data-animate="fade-in-right">
                    <a href="<?php echo $next['next_page_link']['url']; ?>" class="button-link"></a>
                <?php endif; ?>
                </div>
            </div>
        </div>
    </section>

<?php endif; ?>

<?php
get_footer();
?>
<script>
    $('#other-investments').slick({
        infinite: true,
        dots: false,
        autoplay: false,
        autoplaySpeed: 3000,
        slidesToShow: 3,
        slidesToScroll: 1,
        arrows: true,
        // asNavFor: '.team-text-carousel',
        focusOnSelect: true,
        appendArrows: '#other-investments-nav',
        responsive: [
            {
                breakpoint: 991,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    infinite: true,
                }
            },
            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    arrows: false,
                    dots: true,
                }
            },
        ]
    });

</script>
