<?php

/**
 * Template Name: New Home Page
 * Description: The template for displaying the Home Page
 *
 */

get_header(); ?>

<style>
    .banner-section span{
        padding-top: 10px;
        padding-bottom: 10px;
    }
    .banner-section a:hover {
    text-underline-offset: 13px;
    text-decoration-color: #000000;
    text-decoration-thickness: 3px;
}
    button.slick-next.slick-arrow {
    position: absolute;
    top: 73%;
    right: 47%;
}
button.slick-prev.slick-arrow {
    position: absolute;
    top: 70%;
    left: 44%;
}
a.portfolio-des:hover{
    color: white !important;

}
@media (min-width:992px) and (max-width: 1200px){
    button.slick-next.slick-arrow {
    position: absolute;
    top: 73%;
    right: 43%;
}
button.slick-prev.slick-arrow {
    position: absolute;
    top: 70%;
    left: 45%;
}

}
section {
    overflow: hidden;
}
section.section-8.section-desktop.pb-150.d-none.d-md-block{
    overflow: visible !important;
}
section.section-6.section-desktop.pb-220.d-md-block {
    overflow: visible !important;
}
section.section-8.section-mobile.pb-150.d-md-block {
    overflow: visible !important;
}
.clients-carousel .item img {
    max-width: 124px;
    width: 100%;
}
/* Mobile Gallery CSS */
img.image1mobile {
    position: absolute;
    left: 85%;
    max-width: 247px;
    z-index: 9999 !important;
    top: -37px;
}
img.image2mobile {
    max-width: 284px;
    position: absolute !important;
    top: 100px;
    left: -100%;
}
img.image3mobile {
    max-width: 150px;
    right: 10% !important;
    position: absolute;
    top: 180px;
}
img.image6mobile {
    max-width: 190px;
    position: absolute;
    top: 100px;
}
img.image7mobile {
    max-width: 185px;
    position: absolute;
    right: 10px;
}
.col-zindex-1 {
    z-index: 9;
}
.col-zindex-1 {
    z-index: 9;
}
.col-zindex-4 {
    z-index: 12;
}
@media screen and (max-width: 380px) {
    img.image6mobile {
    max-width: 170px;
    position: absolute;
    top: 100px;
}
    img.image7mobile {
    max-width: 185px;
    position: absolute;
    right: -30px;
}
img.image3mobile {
    max-width: 150px;
    right: -5% !important;
    position: absolute;
    top: 180px;
} 
}
@media (min-width: 450px){
    img.image6mobile {
    max-width: 240px;
    position: absolute;
    top: 100px;
}
img.image7mobile {
    max-width: 230px;
    position: absolute;
    right: -5px;
}
}
/* END MOBILE GALLERY CSS */




    #gallery img {
    cursor: default !important;
}
    .rotate.animate {
    color: black !important;
    opacity: 1 !important;
    animation: rotate-animation 5s linear infinite;
}

    .section-2 .revealtexts .word {
    opacity: .1;
    transition: opacity 500ms;
    color: white;
}
.section-2 .revealtexts .word.active {
    opacity: 1;
    transition: opacity 500ms;
    color: #000000;
}
     .revealtexts div {
    display: inline-block;
  }
  
  .revealtexts .word {
    opacity: .1;
    transition: opacity 500ms;
  }

  .revealtexts .word.active {
    opacity: 1;
  }
    #podcast p {
    color: #949494;
}
.podcast-item {
    padding-right: 40px;
    padding-left: 40px;
    padding-bottom: 40px;
}
.podcast-item a {
    text-decoration: none;
}
.podcast-item.animate {
    opacity: 1;;
}

#podcast p:hover{
    color: white;
}
img.image5 {
width: 200px !important;
}

a#load-more {
    border: 1px solid white;
    width: 220px;
    height: 44px;
    display: flex;
    justify-content: center;
    text-align: center;
    padding-top: 7px;
    padding-bottom: 7px;
    align-content: center;
}
a#load-more {
    color: #ffffff;
    font-size: 16px;
}
a.read-more {
    color: #949494;
    text-decoration: underline;
    font-size: 18px;
}
.pagination {
    padding-top: 30px;
    JUSTIFY-CONTENT: center;
}
.category a {
    color: #949494;
    font-size: 14px;
    pointer-events: none;
}
.border-bottom {
    border-bottom: 1px solid #94949433;
    margin-bottom: 30px;
    padding-bottom: 40px;
}
.border-bottom:hover {
    border-bottom: 1px solid #000000 !important;
}
.section-5 a.black-text {
    text-decoration: none;
}
.section-5 a.black-text:hover {
    color: black;
}

.section-5 p.date {
    padding-top: 20px;
}
.investment-section .slick-prev {
    left: -50px;
    background-color: #000000;
    border: 1px solid #ffffff;
}
.investment-section .slick-next{
    top: 57%;
    background-color: #000000;
    border: 1px solid #ffffff;
}
.investment-section .slick-prev:hover {
    background-color: #000000;
    border: 1px solid #ffffff;
}
.investment-section .slick-next:hover{
    background-color: #000000;
    border: 1px solid #ffffff;
}
.investment-btn {
    text-align: center;
}
.revealtexts div {
    display: inline-block;
  }
  
  .revealtexts .word {
    opacity: .1;
    transition: opacity 500ms;
  }

  .revealtexts .word.active {
    opacity: 1;
  }
  .revealtexts .word.active {
    opacity: 1;
    color: white;
}
.insight-btn a{
    text-align: center;
}
.word{
    margin-right: 3px;
}
.banner-section h1 {
    font-size: 48px;
}
.banner-section a {
    text-underline-offset: 13px;
    text-decoration-color: #000000;
    text-decoration-thickness: 2px;
}
/* .banner-section a{
    text-decoration: none;
} */
.banner-section .left a{
    text-decoration: none;
}
.banner-section a:hover{
    color: #000000;
}
.insight-btn {
    text-align: center;
}
/* Clients Section Arrows */
#clients1 button.slick-next.slick-arrow{
    background-color: #0d0d0d !important;
    border: none !important;
}
#clients1 button.slick-prev.slick-arrow{
    background-color: #0d0d0d !important;
    border: none !important;
}
#clients1 button.slick-next.slick-arrow:hover {
    filter: none !important;
    background-color: #000000 !important;
}
#clients1 button.slick-next.slick-arrow:focus {
    filter: none !important;
    background-color: #000000 !important;
}
#clients1 button.slick-prev.slick-arrow:hover {
    filter: none !important;
    background-color: #000000 !important;
}
#clients1 button.slick-prev.slick-arrow:focus {
    filter: none !important;
    background-color: #000000 !important;
}
#clients1 button.slick-prev.slick-arrow {
   
    transform: rotate(180deg);
}
.slick-arrow{
    background-color: black !important;
    width: 40px;
    height: 40px;
    border-radius: 50%;
    background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/images/carousel-arrow-right.png) !important;
    background-repeat: no-repeat !important;
    background-position: center !important;
    padding: 12px !important;
    overflow: hidden;
    text-indent: 100px;
    transition: background-color 600ms;
    border: 1px solid #ffffff;
}
#clients1 .slick-arrow:hover {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/images/carousel-arrow-right.png) !important;;
    background-repeat: no-repeat !important;
    background-position: center !important;
    overflow: hidden;
    text-indent: 100px;
    border: 0;
}
#clients1 .slick-arrow:focus {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/images/carousel-arrow-right.png);
    background-repeat: no-repeat;
    background-position: center;
    overflow: hidden;
    text-indent: 100px;
    border: 0;
}
.section-3 img.animate.sm-pt.animated.fade-in-bottom {
    max-width: 250px;
    width: 100% !important;
}
.investment-section a.home-podcast-arrow.slick-next.slick-arrow  {
    background-color: transparent;
    width: 40px;
    height: 40px;
    border-radius: 50%;
    background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/images/carousel-arrow-right.png) !important;
    background-repeat: no-repeat !important;
    background-position: center !important;
    padding: 12px !important;
    overflow: hidden;
    text-indent: 100px;
    transition: background-color 600ms;
    border: 1px solid #ffffff;
}
a.home-podcast-arrow.slick-prev.slick-arrow  {
    background-color: transparent;
    width: 40px;
    height: 40px;
    border-radius: 50%;
    background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/images/carousel-arrow-right.png) !important;
    transform: rotate(180deg);
    background-repeat: no-repeat !important;
    background-position: center !important;
    padding: 12px !important;
    overflow: hidden;
    text-indent: 100px;
    transition: background-color 600ms;
    border: 1px solid #ffffff;
}
button.black-bg-btn:hover {
    background-color: #ffffff;
    color: #000000;
    border: 1px solid #000000;
}
button.white-bg-btn:hover {
    background-color: #000000;
    color: #ffffff;
    border: 1px solid #000000;
}
@media screen and (min-width: 768px) {
    .investment-section .slick-dots{
    display:none !important;
}
.section-mobile{
    display: none !important;
}
}


@media only screen and (max-width: 992px) {
    .podcast-item {
    padding-right: 40px;
    padding-bottom: 50px;
}  
}


@media only screen and (max-width:767px) {
    a#load-more{
        width: 220px;
    }
    .podcast-item {
    padding-right: 20px;
    padding-left: 20px;
    padding-bottom: 30px;
}
.investment-section .slick-prev {
    left: -27px;
}
.investment-section .slick-next{
    top: 57%;
    right: -10%;
}
.slick-dots ::before{
    color: white !important;
}
.investment-section a.home-podcast-arrow.slick-prev.slick-arrow {
    display: none !important;
}
.investment-section a.home-podcast-arrow.slick-next.slick-arrow {
    display: none !important;
}
.investment-btn {
    padding-top: 20px;
}
section.section-6.pb-220 {
    padding-bottom: 400px;
}
section.section-8.pb-150 {
    padding-bottom: 400px;
}
.section-desktop{
    display: none !important;
}

element.style {
}
section.section-7.mt-60.pb-150 {
    padding-bottom: 12px;
}
section.section-6.section-mobile {
    padding-top: 150px;
} 
.banner-section a {
    text-underline-offset: 7px;
}
}


@media (min-width: 768px) and (max-width: 992px){
    img.image5 {
    width: 160px !important;
}
img.image4{
    width: 270px; 
} 
.podcast-item{
    padding-right: 20px !important;
}
.investment-section .slick-prev {
    left: -32px;
}
.investment-section .slick-next{
    top: 57%;
    right: -8%;
}
button.slick-prev.slick-arrow {
    position: absolute;
    top: 675px;
    left: 39%;
}
button.slick-next.slick-arrow {
    position: absolute;
    top: 695px;
    right: 45%;
}
}
@media screen and (max-width:768px) {
    button.slick-prev.slick-arrow {
    position: absolute;
    top: 635px;
    left: 32%;
}
button.slick-next.slick-arrow {
    position: absolute;
    top: 655px;
    right: 38%;
}
.banner-section h1 {
    font-size: 24px;
}
    
}

</style>


<!-- Section 1 -->
<section class="banner-section">
    <div class="container myraid-font">
        <div class="row column-1">
            <div class="col-lg-8 offset-lg-2">
                <h1>
                    <div class="animates"><span class="rotate animate" data-animate="rotate-back"><span>At ARENA, we consult and invest in aspiring <a href="/our-investments" >companies</a> - learn about our <a href="/about" >values</a> - and read our <a href="/blog/" >insights</a></span></div>
                </h1>
            </div>
        </div>
    </div>
    <div class="bottom animate" data-animate="fade-in-bottom">
        <div class="container">
            <div class="row column-2">
                <div class="col-6 left">
                    <a href="#section-2">SCROLL DOWN</a>
                </div>
                <div class="col-6 right">
                    <ul class="socials">
                        <li><a href="https://www.linkedin.com/company/arenacapitalconsultancy/">LinkedIn</a></li>
                        <li><a href="https://www.instagram.com/_arenacapital/">Instagram</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Section 2 -->
<section class="section-2 gray-bg pt-220 pb-220" id="section-2">
    <div class="container myraid-font">
        <div class="row column-1">
            <div class="col-lg-7 offset-lg-2">
                <p class="animate" data-animate="fade-in">01 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Who We Are</p>
                <h1>
                <div class="animates"><span class="rotate animate" data-animate="rotate-back">We are a family-run Consultancy and Venture Capital Group.</span></div>
                </h1>

                <div class="revealscroll" id="scrollwrap">
                <div class="revealtexts" >
                    <div class="word"></div>
                <p>

                <?php $string = 'With over 30 years of experience in owning and operating companies, we have crafted incredibly unique and successful techniques that make businesses more profitable and scale on a global level.' ?>
                  <?php
                      $words = explode(' ', strip_tags($string));
                      for($x=0;$x<count($words);$x++){
                          $letters = str_split($words[$x]);
                          echo '<div class="word">'.$words[$x].'</div>';
                      }
                  ?>
                </p>
                <p>

                    <?php $string = 'We are constantly looking to recruit, develop and invest in future movers and shakers of industry, bringing prosperity to every individual and business we come across.' ?>
                    <?php
                        $words = explode(' ', strip_tags($string));
                        for($x=0;$x<count($words);$x++){
                            $letters = str_split($words[$x]);
                            echo '<div class="word">'.$words[$x].'</div>';
                        }
                    ?>
                    </p>

                </div>
                </div>
                </div>
        </div>
    </div>
</section>

<!-- Section 3 -->

<section class="section-3 black-bg pt-220 pb-220">
    <div class="container myraid-font">
        <div class="row">
            
            <div class="col-lg-5">
                <p class="white-text animate"  data-animate="fade-in-top">03 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Our Founder</p>
                <h1>
                    <div class="animate white-text" data-animate="fade-in-top">Dariush Soudi</div>
                </h1>

                <div class="revealscroll" id="scrollwrap1">
                <div class="revealtexts" >
                    <div class="word"></div>
                <p>

                <?php $string = 'Having owned and operated businesses for over three decades, I have experienced working with companies across multiple industries - telecommunications, consumer goods, services, beauty, healthcare, fintech and more.'?>
                  <?php
                      $words = explode(' ', strip_tags($string));
                      for($x=0;$x<count($words);$x++){
                          $letters = str_split($words[$x]);
                          echo '<div class="word">'.$words[$x].'</div>&nbsp;';
                      }
                  ?>
                </p>
                <p>

                    <?php $string = 'Our goal is to educate and inspire both individuals and businesses, to try new techniques, different avenues, take action, invest in their people, expand their clientbase, increase their clients spending and above all, get them to recommend their business to everyone they know.'?>
                    <?php
                        $words = explode(' ', strip_tags($string));
                        for($x=0;$x<count($words);$x++){
                            $letters = str_split($words[$x]);
                            echo '<div class="word">'.$words[$x].'</div>&nbsp;';
                        }
                    ?>
                    </p>
                    <p>

                    <?php $string = 'Business can be made simple, and it should be made simple. Business is about profitability. While great values are very important, the business has to make money, otherwise it’s a charity. We do help charities, but they dont hire us. We work well with people who are motivated, passionate about what they do, determined to get what they want and are willing to step outside their comfort zone.'?>
                    <?php
                        $words = explode(' ', strip_tags($string));
                        for($x=0;$x<count($words);$x++){
                            $letters = str_split($words[$x]);
                            echo '<div class="word">'.$words[$x].'</div>&nbsp;';
                        }
                    ?>
                    </p>
                    <p>

                    <?php $string = 'Our company recruits, invests in and helps businesses of all sizes to differentiate themselves in the market place from their competitors.'?>
                    <?php
                        $words = explode(' ', strip_tags($string));
                        for($x=0;$x<count($words);$x++){
                            $letters = str_split($words[$x]);
                            echo '<div class="word">'.$words[$x].'</div>&nbsp;';
                        }
                    ?>
                    </p>

                </div>
                </div>
                <img class="animate sm-pt " data-animate="fade-in-bottom" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/DS_Signature_new.png" alt="">
            </div>
            <div class="col-lg-6 offset-lg-1 dariush-image animate" data-animate="fade-in">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/home-slide-3-min.png" alt="Dariush Soudi">
            </div>
        </div>
    </div>
</section>





    

<!-- Section 4 -->
<section class="section-5 black-bg">
    <div class="container myraid-font">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="white-text text-center animate"  data-animate="fade-in-top">Portfolio</h1>
                <p class="gray-text mb-60 text-center row1-des animate"  data-animate="fade-in-top">Learn more about some of the companies that we've invested in and backed. </p>
                
                
            
            </div>
        </div>

    </div>
</section>
<section id="podcast" class="investment-section pb-150 black-bg">
    <div class="container">
        <div class="row animate" data-animate="fade-in-top">
            <div class="row">
                <div class="col-lg-12">
                    <div class="tab-content active">
                        <div id="podcasts-carousel" class="mt-60 carousel">
                            <?php 
                            $args = array( 
                                'post_type' => 'our_investments',
                                'posts_per_page' => 50,
                            );

                            $loop = new WP_Query( $args ); 
                            while ( $loop->have_posts() ) : $loop->the_post(); ?>
                            <div class="home-podcast podcast-item">
                                <a href="<?php echo get_permalink(); ?>">
                                    <h5 class="small-heading white-text"><?php echo get_the_title(); ?></h5>
                                    <?php
                                    // Get the categories for the current post
                                    $categories = get_the_terms($post->ID, 'investment_categories');
                                                        
                                    if ($categories && !is_wp_error($categories)) {
                                        echo '<div class="category">';
                                        foreach ($categories as $category) {
                                            echo '<a href="' . get_term_link($category) . '">' . esc_html($category->name) . '</a>';
                                        }
                                        echo '</div>';
                                    }
                                    ?>
                                    <p class="white-text sm-pt">
                                        <a href="<?php echo get_permalink(); ?>" class="gray-text portfolio-des"><?php echo get_field('details', $post->ID); ?></a>
                                    </p>
                                </a>
                                <div>
                                    <a class="read-more" data-animate="fade-in-bottom" href="<?php echo get_permalink(); ?>" tabindex="0">READ MORE</a>
                                </div>
                            </div>
                            <?php endwhile;
                            wp_reset_postdata(); ?>
                        </div>
                        <div class="investment-btn">
                            <a href="/our-investments/"><button class="black-bg-btn">View Our Portfolio</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>





<!-- Section 5 -->
<section class="section-5 white-bg pt-220 pb-220">
    <div class="container myraid-font">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="black-text text-center animate" data-animate="fade-in-top">Latest Insights</h1>
                <p class="black-text mb-60 text-center row1-des animate" data-animate="fade-in-top">Dive into industry insights and proven strategies for building success online.</p>

                <div class="row">
                    <div class="col-lg-6 offset-lg-3 insight-card left">
                        <h2 class="black-text sm-pb animate" data-animate="fade-in">Business</h2>
                        <div class="business-card animate" data-animate="fade-in">
                            <?php
                            $args = array(
                                'post_type' => 'blogs',
                                'posts_per_page' => 3,
                                'industries' => 'business',
                            );

                            $loop = new WP_Query($args);

                            if ($loop->have_posts()) :
                                while ($loop->have_posts()) : $loop->the_post();
                                    $post_url = get_permalink(); // Get the URL of the individual blog post.
                            ?>
                            <div class="border-bottom">
                                <a href="<?php echo $post_url; ?>" class="black-text"><?php echo get_the_title(); ?></a>
                                <p class="date category gray-text"><?php echo get_the_date('M d, Y'); ?></p>
                            </div>
                            <?php endwhile;
                            else :
                                ?>
                                <p class="black-text">No business insights available.</p>
                            <?php endif;
                            wp_reset_postdata();
                            ?>
                            <div class="insight-btn">
                                <a href="/blog"><button class="white-bg-btn">View All Insights</button></a>
                            </div>
                        </div>
                    </div>
                   
            </div>
        </div>
    </div>
</section>


<!-- FOR DESKTOP -->
<!-- Section 6 (GALLERY) -->
<section class="section-6 section-desktop pb-220 d-md-block">
  <div class="container">
    <div class="row">
      <div class="col-md-2 col-4 animate"  data-animate="fade-in-top"> <!-- Adjusted column classes for mobile -->
        <div class="image-container">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/gallery5.jpg" alt="Image 1" class="image1">
        </div>
      </div>
      <div class="col-md-3 col-4 animate"  data-animate="fade-in-bottom"> <!-- Adjusted column classes for mobile -->
        <div class="image-container">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/gallery8.jpg" alt="Image 2" class="image2">
        </div>
      </div>
      <div class="col-md-3 col-4 animate"  data-animate="fade-in-top"> <!-- Adjusted column classes for mobile -->
        <div class="image-container" >
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/gallery9.jpg" alt="Image 3" class="image3 parllaximg1">
        </div>
      </div>
      <div class="col-md-2 col-4 animate"  data-animate="fade-in-bottom"> <!-- Adjusted column classes for mobile -->
        <div class="image-container">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/gallery7.jpg" alt="Image 4" class="image4">
        </div>
      </div>
      <div class="col-md-2 col-4"> <!-- Adjusted column classes for mobile -->
        <div class="image-container animate"  data-animate="fade-in-top">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/gallery6.jpg" alt="Image 5" class="image5 parllaximg2">
        </div>
      </div>
    </div>
  </div>
</section>

<!-- <section class="test">
  <div class="parallaxBg">
    <img class="parllaximg1" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/gallery8.jpg" alt="image">
    <h2>LEFT</h2>
    </div>
</section> -->





<section class="section-7 section-desktop sm-pt pb-150">
    <div class="container sm-pt">
        <div class="row sm-pt">
            <div class="col-lg-7 offset-lg-2">
                <q>We practice, plan, implement and take action on our skills, while our enemies are resting. As gladiators we battle every day so one day we have a life of abundance.</q>
                <p class="sm-pt">Dariush Soudi</p>

            </div>

        </div>
    </div>

</section>



<!-- Section 8 (GALLERY 2) -->

<?php
$section_five = get_field('section_five');
if ($section_five) : ?>

    <!-- Show the existing section only on screens larger than 767px (md, lg, xl) -->
    <section class="section-8 section-desktop pb-150 d-none d-md-block">
        <div class="container">
            <div class="row">
                <div class="col-md-3 animate" data-animate="fade-in-bottom">
                    <div class="image-container">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/gallery4.jpg" alt="Image 1" class="image6">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="image-container animate" data-animate="fade-in-top">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/gallery3.jpg" alt="Image 2" class="image7 parllaximg1">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="image-container animate" data-animate="fade-in-bottom">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/gallery1.jpg" alt="Image 3" class="image8">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="image-container animate" data-animate="fade-in-top">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/gallery2.jpg" alt="Image 4" class="image9 parllaximg2">
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php endif; ?>


<!-- END FOR Desktop -->



<!-- FOR MOBILE -->

<!-- Section 6 (GALLERY) -->
<section class="section-6 overflow-hidden section-mobile pb-220 d-md-block">
  <div class="container">
    <div class="row">
      <div class="col-md-2 col-4 animate col-zindex-1"  data-animate="fade-in-top"> 
        <div class="image-container">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/gallery9.jpg" alt="Image 1" class="image1mobile parllaximg4">
        </div>
      </div>
      <div class="col-md-3 col-4 animate col-zindex-2"  data-animate="fade-in-bottom"> 
        <div class="image-container">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/gallery8.jpg" alt="Image 2" class="image2mobile">
        </div>
      </div>
      <div class="col-md-3 col-4 animate col-zindex-3"  data-animate="fade-in-top"> 
        <div class="image-container" >
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/gallery5.jpg" alt="Image 3" class="image3mobile parllaximg2">
        </div>
      </div>
      
    </div>
  </div>
</section>



<section class="section-7 section-mobile mt-60 mb-60 pb-150">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 offset-lg-2">
                <q>We practice, plan, implement and take action on our skills, while our enemies are resting. As gladiators we battle every day so one day we have a life of abundance.</q>
                <p class="sm-pt">Dariush Soudi</p>

            </div>

        </div>
    </div>

</section>


<!-- Section 8 (GALLERY 2) -->

<?php
$section_five = get_field('section_five');
if ($section_five) : ?>
    <section class="section-8 section-mobile pb-150 d-md-block">
        <div class="container">
            <div class="row">
                <div class="col-md-3 animate col-zindex-4" data-animate="fade-in-bottom">
                    <div class="image-container">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/gallery4.jpg" alt="Image 1" class="image6mobile parllaximg3">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="image-container animate col-zindex-5" data-animate="fade-in-top">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/gallery1.jpg" alt="Image 2" class="image7mobile parllaximg4">
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php endif; ?>
<script src="https://cdn.jsdelivr.net/npm/simple-parallax-js@5.5.1/dist/simpleParallax.min.js"></script>

<script>
var image1 = document.getElementsByClassName('parllaximg1');
new simpleParallax(image1, {
    orientation: 'down',
    scale: 1.3,
    overflow: true
});
var image2 = document.getElementsByClassName('parllaximg2');
new simpleParallax(image2, {
    orientation: 'up',
    scale: 1.3,
    overflow: true
});
var image3 = document.getElementsByClassName('parllaximg3');
new simpleParallax(image3, {
    orientation: 'down',
    scale: 1.5,
    overflow: true
});
var image4 = document.getElementsByClassName('parllaximg4');
new simpleParallax(image4, {
    orientation: 'up',
    scale: 1.5,
    overflow: true
});


</script>





<!-- Show this section only on screens smaller than 768px (xs and sm) -->

<!-- <?php
$section_five = get_field('section_five');
if ($section_five) : ?>

    
    <section id="gallery" class="overflow-hidden white-bg pbt d-block d-sm-none">
        <div class="container ">
            <div class="row mb-20">
                <div class="col-6 horizontal-dots">
                </div>
                <div class="col-6 d-flex align-items-center justify-content-end right-arrows">
                    <div id="gallery-navs"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="gallery-carousel animate" data-animate="fade-in-bottom">
                        <?php $images = $section_five['images'];
                        $loop = 0;
                        foreach ($images as $key => $image) {
                            ?>
                            <?php if($loop==0): ?>
                                <div>
                                <div class="row">
                            <?php endif; ?>
                            <div class="col-lg-4 col-6 item popup-gallery">
                                <a href="<?php echo $image['image']?>">
                                    <div class="wrap">
                                        <div class="overflow-hidden">
                                            <img width="100%" src="<?php echo $image['thumbnail']['url'] ?>" alt="<?php echo $image['thumbnail']['caption'] ?> | <?php echo $image['thumbnail']['description'] ?>| <?php echo $image['thumbnail']['name'] ?>">
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <?php
                            if($loop<5)
                                $loop++; 
                            else {
                                $loop = 0;
                                ?>
                                </div>
                                </div>
                                <?php
                            }
                         } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php endif; ?> -->







<?php $clients1 = get_field('clients1');
if ($clients1) : ?>

<section id="clients1" class="center-text section-pd pt-0 pb-150 white-bg">
    <div class="container box-white pd-bot myraid-font">
        <div class="row">
            <div class="col-md-12 horizontal-dots left-dots">
                <div class="row">
                    <div class="col-12 horizontal-dots left-dots">
                        <h1 class="text-center"><?php echo $clients1['sub_header']; ?></h1>
                    </div>
                    <div class="col-12 d-flex align-items-center justify-content-end right-arrows">
                        <div id="client-navs"></div>
                    </div>
                </div>
                <div class="spac mb-40"></div>
                <div class="animate" data-animate="fade-in-bottom">
                    <div class="clients-carousel">
                        <?php
                        $logos = $clients1['logos'];
                        $loop = 0;
                        if ($logos) :
                            foreach ($logos as $key => $logo) {
                        ?>
                            <?php if($loop==0): ?>
                                <div>
                                <div class="row">
                            <?php endif; ?>

                                <div class="col-lg-3 col-6 d-flex align-items-center justify-content-center item"><img src="<?php echo $logo['logo']['url'] ?>" alt="Arena Consultance <?php echo $clients['header']; ?> Image | <?php echo $logo['logo']['caption'] ?> | <?php echo $logo['logo']['description'] ?> | <?php echo $logo['logo']['alt'] ?>" />
                                </div>
                        <?php  
                            if($loop<7)
                                $loop++; 
                            else {
                                $loop = 0;
                            ?>
                            </div>
                            </div>
                        <?php
                                }
                            }
                        endif;
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


<!-- Include the Slick library files (CSS and JS) -->
<script type="text/javascript" src="/wp-content/themes/arena-me/assets/js/slick.min.js"></script>

<script>
  $(document).ready(function () {
    const podcastsCarousel = $('#podcasts-carousel');

    // Initialize Slick Carousel
    podcastsCarousel.slick({
      slidesToShow: 3,
      slidesToScroll: 1,
      prevArrow: '<a class="home-podcast-arrow slick-prev"><i class="fas fa-chevron-left"></i></a>',
      nextArrow: '<a class="home-podcast-arrow slick-next"><i class="fas fa-chevron-right"></i></a>',
      autoplay: true,
      autoplaySpeed: 3000,
      dots: true,
      responsive: [
        {
          breakpoint: 992,
          settings: {
            slidesToShow: 2
          }
        },
        {
          breakpoint: 768,
          settings: {
            slidesToShow: 1,
            autoplaySpeed: 5000
          }
        }
      ]
    });
  });
</script>

<!-- Scroll Magic  -->

<script src="https://player.vimeo.com/api/player.js"></script>

<script>
    var conController = new ScrollMagic.Controller({globalSceneOptions: {}});
var scene = [];

function createMagicMain(){

var conClass = [];
conScene = new Array();

if($('.revealscroll').length){
    range = [];
    indx = 0;
    $('.revealscroll').each(function (){
        targ  = $(this);
        newscene = new ScrollMagic.Scene({triggerElement: "#"+$(this).attr('id'),duration: $(targ).outerHeight()/2})
            .on("enter", function (d) {
            })
            .on("leave", function () {
            }).on("refresh", function (d) {
            })
            .on("progress", function (d) {
                tg = d.currentTarget.triggerElement();
                words  = $(tg).find('.revealtexts .word').length;
                range = 100/words;
                currentWords = Math.round((d.progress*100) / range);
                if(d.scrollDirection=="FORWARD") {
                    for(x=0;x<currentWords;x++){
                        t = $(tg).find('.word').eq(x+1);
                        if(!$(t).hasClass('active'))
                            $(tg).find('.word').eq(x+1).addClass('active');
                    }
                } else {
                    for(x=words;x>currentWords;x--){
                        t = $(tg).find('.word').eq(x);
                        if($(t).hasClass('active'))
                            $(t).removeClass('active');
                    }
                }
            })
            //.addIndicators({name: "test"+indx}) // add indicators (requires plugin)
            .addTo(conController);

        scene.push(newscene);
        indx++;
    });
}
}


function destroyMagicControllerMain() {
  conController.destroy(true);
  if(scene.length)
      for(x=0;x<scene.length;x++) {
          if(scene[x].length)
              scene[x].destroy(true);
      }
}


// Resize
window.addEventListener("resize", function() {
  destroyMagicControllerMain();
  conController = new ScrollMagic.Controller({globalSceneOptions: {}});
  createMagicMain();
});

$(document).ready(function(){
createMagicMain();
});
</script>