<?php

/**
 * Template Name: New About us Page
 * Description: The template for displaying the Home Page
 *
 */

get_header(); ?>

<style>
    .contact-section a{
        color: black !important;
        text-decoration: none !important;
    }
    section#team .container.image-text.pd-bot {
    max-width: none !important;
    width: 100%;
    padding-left: 0px;
    padding-right: 0px;
}

 

    #investments .slick-track {
    display: flex!important;
    align-items: center!important;
}
    .sm-pb-15{
        padding-bottom: 15px;
    }
    .sm-pt-15{
        padding-top: 15px;
    }
    section.section-4 .row {
    align-items: center;
}
.section-4 q{
    font-size: 36px;
    line-height: 46px;
}
#team a.link {
    text-decoration: none !important;
}
#team h3.name.small-heading:hover {
    color: #000000;
}
#team p.title:hover{
    color: #000000;
}
#team p.title {
    color: #BABABA;
    font-size: 16px;
}
.contact-section button.black-text {
    background-color: transparent !important;
    border: none !important;
    /* border-bottom: 2px solid !important; */
    padding-left: 0px !important;
    margin-left: 0px !important;
    /* margin-right: 20px !important; */
}
#investments-carousel .slide img{
    /* max-width: 450px; */
    width: 100%;
    margin-left: 10px;
    margin-right: 10px;
}
.container.box-white.pd-bot.myraid-font {
    padding-top: 0px;
}
.gallery-slider .container, .container-lg, .container-md, .container-sm, .container-xl {
    max-width: none;
    width: 100%;
}
.gallery-slider .row>*{
    padding-left: 0px !important;
    padding-right: 0px !important;
}
.slide{
   margin-left: -200px;
   margin-right: -200px;
}
.slide img{
    padding-left: 20px;
}.

.section-3 .revealtexts .word {
    opacity: .1;
    transition: opacity 500ms;
    color: white;
}
.section-3 .revealtexts .word.active {
    opacity: 1;
    transition: opacity 500ms;
    color: #000000;
}
.section-4 img {
    max-width: 630px;
    width: 100%;
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
  .rotate.animate {
    color: black !important;
    opacity: 1 !important;
    animation: rotate-animation 5s linear infinite;
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


/* ARROWS CSS */
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
#clients1 img{
    max-width: 130px !important;
    width: 100% !important;

}
button.slick-next.slick-arrow {
    position: absolute !important;
    top: 68% !important;
    right: 47% !important;
}
button.slick-prev.slick-arrow {
    position: absolute !important;
    top: 65% !important;
    left: 44% !important;
}
.new-small-heading{
    font-size: 28px;
}
.team-heading{
    font-size: 44px;
}
.section-2 a:hover{
    color: #000000 !important;
}
@media (min-width:992px) and (max-width: 1200px){
    button.slick-next.slick-arrow {
    position: absolute !important;
    top: 68% !important;
    right: 43% !important;
}
button.slick-prev.slick-arrow {
    position: absolute !important;
    top: 65% !important;
    left: 45% !important;
}

}
@media (min-width: 768px) and (max-width: 992px){
    button.slick-prev.slick-arrow {
    position: absolute !important;
    top: 635px !important;
    left: 39% !important;
}
button.slick-next.slick-arrow {
    position: absolute !important;
    top: 655px !important;
    right: 45% !important;
}
}
/* END ARROWS CSS */

.word{
    margin-right: 8px;
}
@media screen and (min-width: 1200px){
    section#team .slick-track {
    margin-left: 9%;
}
}
@media (min-width:992px) and (max-width: 1199px){
    section#team .slick-track {
    margin-left: 16%;
}
}

@media screen and (min-width:992px){
    .section-5 .row.row2 {
    padding-top: 60px;
}
    
}
@media (min-width:768px) and (max-width:992px) { 
    .section-4 q{
    font-size: 30px;
    line-height: 38px;
}
}

@media only screen and (max-width:992px) {
    .section-4 .dariush-image-about img{
    max-width: 700px;
    width: 100%;
    margin-top: 35px;
}
    
}

@media only screen and (max-width: 768px) {
    .section-4 q{
    font-size: 22px;
    line-height: 28px;
}
.gallery-slider .container{
    padding-left: 0px !important;
    padding-right: 0px !important;

}
.slide{
    margin-left: -100px;
}
section.section-2.contact-section{
    padding-top: 30px;
    padding-bottom: 30px;
}
section#team .slick-track {
    margin-left: -4% !important;
}
#team .detail {
    padding-left: 40px;
}
    button.slick-prev.slick-arrow {
    position: absolute !important;
    top: 635px !important;
    left: 32% !important;
}
button.slick-next.slick-arrow {
    position: absolute !important;
    top: 655px !important;
    right: 38% !important;
}
.new-small-heading{
    font-size: 24px;
}
.team-heading{
    font-size: 38px;
}
section#investments {
    overflow: hidden !important;
}
}
</style>

<!-- Section 1 -->
<section class="banner-section gray-bg">
    <div class="container myraid-font">
        <div class="row">
            <div class="col-lg-7 offset-lg-2 sm-pt">
                <h1 class="sm-pb">
                <div class="animates"><span class="rotate animate" data-animate="rotate-back">Our Team, Values & Culture</span></div>
                </h1>
                <p class="animates"><span class="rotate animate" data-animate="rotate-back">With over 30 years of experience in owning and operating companies, we have crafted incredibly unique and successful techniques that make businesses more profitable and scale on a global level.</span></p>
            </div>
        </div>
    </div>
</section>



<!-- Section 2 -->
<section class="section-2 white-bg pt-220 pb-220">
    <div class="container myraid-font">
        <div class="row column-1">
            <div class="col-lg-7 offset-lg-2">
                <h1>
                    <div class="animate" data-animate="fade-in-top">Who We Are</div>
                </h1>
                <div class="revealscroll" id="scrollwrap1">
                <div class="revealtexts" >
                    <div class="word"></div>
                <p class="animate" data-animate="fade-in">
                <?php $string = 'We believe life is an ARENA. As gladiators we battle every day so one day we have a life of abundance. ARENA is widely regarded as the region’s most respected advisory firm within the sales and marketing industry.'?>
                    <?php
                        $words = explode(' ', strip_tags($string));
                        for($x=0;$x<count($words);$x++){
                            $letters = str_split($words[$x]);
                            echo '<div class="word">'.$words[$x].'</div>';
                        }
                    ?>
                    <br></p>
                    <p class="animate" data-animate="fade-in">
                <?php $string = 'Led by “The Modern Day Gladiator” Dariush Soudi, specialising in optimising our clients’ potential for growth, we practice, teach, and execute plans to help individuals and businesses prosper. Implementing change and driving unique strategies that will give you the EDGE - the edge to make your business more profitable.'?>
                    <?php
                        $words = explode(' ', strip_tags($string));
                        for($x=0;$x<count($words);$x++){
                            $letters = str_split($words[$x]);
                            echo '<div class="word">'.$words[$x].'</div>';
                        }
                    ?>
                    <br></p>
                    <p class="animate" data-animate="fade-in">
                        
                <?php $string = 'With over 35 years experience in owning and operating companies, Dariush has crafted incredibly unique and successful techniques that will make your business more profitable. Experience gained through many years and decades of successes and failures.'?>
                    <?php
                    
                    
                        $words = explode(' ', strip_tags($string));
                        for($x=0;$x<count($words);$x++){
                            $letters = str_split($words[$x]);
                            echo '<div class="word">'.$words[$x].'</div>';
                        }
                    ?>
                    <br></p>
                    <p class="animate" data-animate="fade-in">
    <?php
    $string = 'At ARENA, we make sure you win every battle until you achieve financial freedom. The success of Dariush’s methods are attested by his tribe of gladiators worldwide, over 1 million people strong. You can follow Dariush xlinkstartx <b>(@dariushsoudiofficial)</b> xlinkendx on Instagram; recently awarded as Gulf Business’ Inspiring Entrepreneur of the Year.';
    $words = explode(' ', $string);
    $linkStarted = false;

    for ($x = 0; $x < count($words); $x++) {
        if ($words[$x] == 'xlinkstartx') {
            echo '<a href="https://www.instagram.com/dariushsoudiofficial" class="word">';
            $linkStarted = true;
        } elseif ($words[$x] == 'xlinkendx') {
            echo '</a>';
            $linkStarted = false;
        } else {
            if ($linkStarted) {
                echo ' ' . $words[$x];
            } else {
                echo '<div class="word">' . $words[$x] . '</div>';
            }
        }
    }
    ?>
</p>


                    <p class="animate" data-animate="fade-in">
                <?php $string = 'ARENA drives companies and individuals towards accelerated change and growth, with business practises spanning across the globe and multiple sectors. Providing cutting-edge techniques for navigating change in the core areas of marketing transformation, data and technology solutions, growth strategy, private equity advisory, executive search and talent development.'?>
                    <?php
                        $words = explode(' ', strip_tags($string));
                        for($x=0;$x<count($words);$x++){
                            $letters = str_split($words[$x]);
                            echo '<div class="word">'.$words[$x].'</div>';
                        }
                    ?>
                    <br></p>
                    </div>
                    </div>
            </div>
        </div>
    </div>
</section>


<!-- Section 3 -->
<section class="section-3 white-bg pb-220">
    <div class="container myraid-font">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
            <div class="col-lg-4 investment-card animate" data-animate="fade-in-bottom">
                <h2 class="black-text sm-pb-15">Vision</h2>
                <p class="black-text">To recruit, train and develop future movers and shakers of industry. Bringing prosperity to every individual and business we come across.</p>
            </div>
            <div class="col-lg-4 investment-card animate" data-animate="fade-in-bottom">
                <h2 class="black-text sm-pb-15">Mission</h2>
                <p class="black-text">To set the highest standards in consultancy, in a world where low standards are the norm.</p>

            </div>
            <div class="col-lg-4 investment-card animate" data-animate="fade-in-bottom">
                <h2 class="black-text sm-pb-15">Values</h2>
                <p class="black-text">Hard work, urgency, clear communication, trust, gratitude and constant pursuit of setting the highest standards are the core values we stand firmly by, and we welcome you on this journey.</p>
            </div>
            </div>
            </div>
        </div>

    </div>
</section>


<section class="section-4 gray-bg pt-150 pb-150">
    <div class="container myraid-font">
        <div class="row">
            
            <div class="col-lg-5 animate" data-animate="fade-in-left">
            <q class="black-text">As gladiators we battle every day so one day we have a life of abundance.</q>
                <p class="black-text sm-pt">Dariush Soudi</p>
                </div>
            <div class="col-lg-6 offset-lg-1 dariush-image-about animate" data-animate="fade-in-right">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/dariush-about-new.jpg" alt="Dariush Soudi">
            </div>
        </div>
    </div>
</section>


<section class="section-5 white-bg pt-220 pb-220">
    <div class="container myraid-font">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="black-text text-center animate"  data-animate="fade-in">Hallmarks of ARENA</h1>
                <p class="black-text mb-60 text-center row1-des animate"  data-animate="fade-in">We offer a range of comprehensive services designed to empower our clients to reach their full potential. </p>
                
                <div class="row">
            <div class="col-lg-4 investment-card animate" data-animate="fade-in">
                <h2 class="black-text">Proven Techniques</h2>
                <p class="black-text">Over 35 years of experience have allowed us to develop and refine unique, successful techniques that consistently enhance businesses' profitability and facilitate global scaling.</p>

            </div>
            <div class="col-lg-4 investment-card animate" data-animate="fade-in">
                <h2 class="black-text">Holistic Expertise</h2>
                <p class="black-text">Our comprehensive range of services spans strategy, sales, marketing, operations, training, and high-level networking, ensuring clients receive a well-rounded approach to business growth.</p>

            </div>
            <div class="col-lg-4 investment-card animate" data-animate="fade-in">
                <h2 class="black-text">Gladiator Mentality</h2>
                <p class="black-text">Embracing a gladiator spirit, we embody resilience, determination, and constant improvement, viewing every challenge as an opportunity to excel.</p>

            </div>
            </div>
            <div class="row row2">
            <div class="col-lg-4 investment-card animate" data-animate="fade-in">
                <h2 class="black-text">Client-Centric Approach</h2>
                <p class="black-text">We prioritize our clients' success, as demonstrated through personalized solutions, client success stories, and a dedication to optimizing their potential for growth.</p>

            </div>
            <div class="col-lg-4 investment-card animate" data-animate="fade-in">
                <h2 class="black-text">Continuous Innovation</h2>
                <p class="black-text">We are not only experienced but also forward-thinking, continuously adapting and innovating to stay at the forefront of industry trends and advancements.</p>

            </div>
            <div class="col-lg-4 investment-card animate" data-animate="fade-in">
                <h2 class="black-text">Recruitment & Development</h2>
                <p class="black-text">Our focus on recruiting, developing, and investing in future industry leaders ensures a legacy of excellence and a sustainable impact on the business world.</p>

            </div>
            </div>
            </div>
        </div>

    </div>
</section>

<section>
<div class="container">

<div class="row ">
    <div class="col-md-8 horizontal-dots mb-40">
        <h1 class="animate" data-animate="fade-in">Our Team</h1>
    </div>
    
</div>
</div>
</section>

<section id="team" class="mb-40 white-bg ">
    <div class="container image-text pd-bot">

        
        <div class="row">
            <div class="col-md-12">
            </div>
        </div>

        <div class="team-carousel">
            <?php

            $posts_array = get_posts(
                array(
                    'posts_per_page' => -1,
                    'orderby' => 'id',
                    'order' => 'ASC',
                    'post_type' => 'staff'
                )
            );
            
            foreach($posts_array as $p) {
            ?>
            <?php
            $image = get_the_post_thumbnail_url($p->ID, 'full');
            $field = get_field('hero',$p->ID);
            ?>
            <div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="overflow-hidden mb-20">
                            <a class="link" href="<?php echo get_permalink($p->ID); ?>"><img class="staff-photo" src="<?php echo $image ?>" alt="<?php echo $p->post_title ?> | <?php echo $p->post_content ?>"></a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-9 detail">
                    <a class="link" href="<?php echo get_permalink($p->ID); ?>"><h3 class="name small-heading"><?php echo $field['first_name'].' '.$field['last_name'] ?></h3></a>
                        <a class="link" href="<?php echo get_permalink($p->ID); ?>"><p class="title mb-20"><?php echo $field['designation'] ?></p></a>
                        
                    </div>
                    <div class="col-3 text-end">
                        <?php $linkedin_url = get_field('linkedin_url',$p->ID);
                            if($linkedin_url):
                        ?>
                            <a href="<?php echo $linkedin_url; ?>" target="_blank" class="linkedin-profile"></a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        <?php } ?>
        </div>
    </div>
</section>



<section class="section-2 contact-section white-bg pt-150 pb-150 mb-60">
    <div class="container myraid-font">
        <div class="row column-1">
            <div class="col-lg-7 offset-lg-2">
                <h2>
                    <div class="animate sm-pb" data-animate="fade-in">Setting The Highest Standards</div>
                </h2>
                <p class="animate" data-animate="fade-in">Providing cutting-edge techniques for navigating change in the core areas of marketing transformation, data and technology solutions, growth strategy, private equity advisory, executive search and talent development.<br><br></p>
                <button class="black-text"><a href="/contact">Contact Us</a></button>
            </div>
        </div>
    </div>
</section>



<section id="investments" class="gallery-slider pb-220 ">
    <div class="container col-lg-12">
        <div class="row animate" data-animate="fade-in-top">
            
        </div>
        <div class="row animate" data-animate="fade-in-top">
            
            <div class="col-lg-6 right-align">
                <div id="investment-arrows">
                </div>
            </div>
        </div>
        <div class="row animate" data-animate="fade-in">
            <div class="col-lg-12">
                <div id="investments-carousel" class="mt-60 carousel animate" data-animate="fade-in">
                    <div class="slide">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/carousel1.jpg">
                    </div>
                    <div class="slide">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/carousel3.jpg">
                    </div>
                    <div class="slide">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/carousel2.jpg">
                    </div>
                    <div class="slide">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/carousel4.jpg">
                    </div>
                    <div class="slide">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/carousel5.jpg">
                    </div>
                    <div class="slide">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/carousel6.jpg">
                    </div>
                    <div class="slide">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/carousel7.jpg">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    $(document).ready(function(){
        $("#investments-carousel").slick({
            slidesToShow: 3, // Number of slides to show at once
            slidesToScroll: 1,
            autoplay: true, // Set to true for automatic sliding
            autoplaySpeed: 3000, // Adjust the slide duration (in milliseconds)
            arrows: false, // Display arrow navigation
            dots: false,
            cssEase: 'linear', // Remove dots navigation if desired
            responsive: [
            {
                breakpoint: 768, // Breakpoint for mobile devices
                settings: {
                    slidesToShow: 2, // Number of slides to show on mobile
                    arrows: true,
                    autoplaySpeed: 0,
                    speed: 5500,
                }
            }
        ]
        });
    });

	
</script>








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
                <div class="animate" data-animate="fade-in">
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
<script src="https://player.vimeo.com/api/player.js"></script>


 <script>
		
        $(document).ready(function() {
              $('.popup-gallery').magnificPopup({
                  delegate: 'a',
                  type: 'image',
                  tLoading: 'Loading image #%curr%...',
                  mainClass: 'mfp-img-mobile',
                  gallery: {
                      enabled: true,
                      navigateByImgClick: true,
                      preload: [0,1] // Will preload 0 - before current, and 1 after the current image
                  },
                  image: {
                      tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
                      titleSrc: function(item) {
                          // return item.el.attr('title') + '<small>by Marsel Van Oosten</small>';
                      }
                  }
              });
          });
  
          $('.box-tab-nav button').on('click', function(){
              $('.box-tab-nav button').removeClass('active');
  
              $(this).addClass('active');
              index = $(this).index('.box-tab-nav button');
  
              $('.box-tab-content').removeClass('active');
              $('.box-tab-content').eq(index).addClass('active');
              $('.box-tab-content').eq(index).slick('refresh');
          });
  
          if($('.team-carousel').length){
  
          // $('.team-text-carousel').on('init', function(event, slick){ $.extend(slick,{ clonedSlides : $(this).find('.slick-cloned') })});
  
              $('.team-carousel').slick({
                  infinite: true,
                  dots: false,
                  autoplay: true,
                  autoplaySpeed: 3000,
                  slidesToShow: 5,
                  slidesToScroll: 1,
                  

                  // asNavFor: '.team-text-carousel',
                  focusOnSelect: true,
                  appendArrows: '#team-navs',
                  responsive: [
                    {
                          breakpoint: 1919,
                          settings: {
                              slidesToShow: 4,
                              slidesToScroll: 1,
                              infinite: true,
                              autoplay: true,
                          }
                      },  
                    {
                          breakpoint: 1200,
                          settings: {
                              slidesToShow: 3,
                              slidesToScroll: 1,
                              infinite: true,
                              autoplay: true,
                          }
                      },
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
                          }
                      },
                  ]
              });
          }

     
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