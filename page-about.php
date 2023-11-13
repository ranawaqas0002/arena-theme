<?php

/**

 * Template Name: About Us

 * Description: The template for displaying consultancy page

 *

 */

get_header();
?>
<link href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/consultancy.css?v=<?php echo rand(1,99999999999); ?>" rel="stylesheet" />
<link href="https://cdn.jsdelivr.net/gh/AlexEmashev/lsb-lightbox@master/dist/lsb.css" rel="stylesheet" />
<link href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/magnific.css" rel="stylesheet" />

<style>
    body {
        background-color: #f7f7f7 !important;
    }

    #mission-vision .col {
        height: 550px;
        padding: 90px 50px;
        text-align: center;
        background-color: #fff;
    }

    #mission-vision .col img {
        margin-bottom: 20px;
        display: inline-block;
        max-width: 100px;
    }

    #mission-vision {
        padding: 60px 0 100px;
    }

    .team-carousel {
        margin: 0 -10px;
    }

    .team-carousel .name {
        font-size: 20px;
        margin-bottom: 0;
    }

    .team-carousel .title {
        font-size: 16px;
        color: #bababa;
    }

    .gallery-carousel .slick-slide .wrap {
        padding-bottom: 15px;
        padding-top: 15px;
    }

    .mission-carousel {
        margin: 0 -30px !important;
    }

    .mission-carousel .slick-slide {
        padding: 0 15px !important;
    }

    .mission-carousel .col:hover {
        transition: filter 600ms ease-in-out;
    }

    .mission-carousel .col:hover {
        filter: invert(1);
    }

    .mission-carousel .slick-dots {
        justify-content: center;
        margin-top: 40px;
    }

	.award-carousel .slick-slide div {
        text-align: center;
    }
	
	.award-carousel .slick-slide img {
        display: inline-block;
        max-width: 220px;
    }

    .award-carousel .slick-dots {
        justify-content: center;
        margin-top: 40px;
    }

    .linkedin-profile {
        background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/images/linkedin-icon.png);
        display: inline-block;
        width: 30px;
        height: 30px;
        background-repeat: no-repeat;
        background-color: #000;
        background-position: center;
        transition: filter 600ms;
    }

    .linkedin-profile:hover {
        filter: invert(.7);
    }


    @media only screen and (max-width: 991px){
        #what-we-do .right {
            margin-top: 40px;
        }
        #what-we-do .bot .right .img-animate {
            margin-bottom: 0 !important;
        }

        #team-navs {
            position: absolute;
            bottom: 40px;
            width: 100%;
            padding: 0;
            left: 0;
            display: flex;
            justify-content: center;
            z-index: 1;
        }

        #award-navs {
            margin-top: 30px;
            display: flex;
            justify-content: center;
            z-index: 1;
            filter: invert(1);
        }


        #team-navs button,
        #award-navs button {
            margin: 0 10px;
        }

        .team-carousel {
            margin: 0;
            padding-bottom: 30px;
        }

        #team, #approach {
        }

        .award-carousel .slick-slide img {
            max-width: 280px;
        }
    }

    @media all and (max-width: 991px) {
        

        #founder .container, #founder .right {
            padding: 0 !important;
        }

        #founder .left {
            margin-bottom: 40px;
        }

        #founder .right {
            padding-bottom: 40px;
        }

        #founder .contents {
            padding: 0 30px 40px 30px;
        }

        .team-carousel .slick-slide {
            text-align: left;
        }

        .team-carousel {
            margin-top: 20px;
        }
    }

    @media all and (max-width: 767px) {
        #founder .left {
            max-width: 100%;
            padding: 0;
        }

        #founder .container {
            max-width: 100%;
            padding: 0;
        }

        .team-carousel .slick-slide {
            padding: 0 20px;
        }

        .team-carousel .slick-slide img:hover {
            transform: scale(1);
        }
    }

    @media all and (max-width: 620px) {
        .team-carousel .slick-list {
            overflow: visible;
        }
    }

    .gallery-carousel .slick-slide .wrap:hover img {
        transform: scale(1.1);
    }

    #founder .right {
        padding-right: 100px;
    }

    #founder .left {
        padding-left: 0;
    }

    #founder:before {
        display: none !important;
    }

    .team-carousel .link {
        text-decoration: none;
        font-size: 14px;
    }
	
	.mission-carousel .content img {
		margin-bottom: 30px;
    	max-width: 120px;
	}    
	.mission-carousel .content {
		background-color: #fff;
		padding: 100px 60px;
		min-height: 650px;
		transition: filter 600ms;
	}
	
	.mission-carousel .content:hover {
		filter: invert(1);
	}
	
	@media only screen and (max-width:991px) {
		.mission-carousel .content {
			background-color: #fff;
			padding: 100px 60px;
			min-height: 100px;
			margin-bottom: 40px;
		}
		
		.mission-carousel .content {
			background-color: #fff;
			padding: 100px 60px;
			min-height: 100px;
			margin-bottom: 40px;
		}
		
		.mission-carousel .col-md-12:last-of-type .content {
			margin-bottom: 0;
		}
	}
	
	@media only screen and (max-width:767px) {
		.mission-carousel .content {
			background-color: #fff;
			padding: 60px 40px;
			min-height: 100px;
			margin-bottom: 40px;
		}
		
		.mission-carousel .content img {
			margin-bottom: 30px;
			max-width: 100px;
		}    
	}
</style>

<?php $hero = get_field('hero');?>

<section  id="hero" class="top-banner-overflow scrolling-text" style="background-image:url(<?php echo $hero['image']['url']; ?>);">
    <div class="container">
    <div class="scrollTrigger"></div>
        <div class="row">
            <div class="col-md-6 align-items-center d-flex left">
                <div class="">
                    <div class="overflow-hidden">
                        <p class="section-sub animate animated fade-in-left" data-animate="fade-in-left">Who We Are</p>
                    </div>
                    <div>
                        <div class="overflow-hidden">
                            <h3 class="heading mb-40 animate animated fade-in-bottom" data-animate="fade-in-bottom">Our Team, <br/>Values & Culture</h3>
                        </div>
                        <a class="anim animate button-link animated fade-in-left white" data-animate="fade-in-left" href="#" tabindex="0">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <?php 
            $string = "About Us";
            $letters = str_split($string);
        ?>
        <div class="scroll-text bottom-to-top">
            <div class="relative">
                <div class="inner">
                    <?php 
                        foreach($letters as $letter): 
                            echo !ctype_space($letter) ? '<span>'.$letter.'</span>' : '<span class="space"></span>';
                        endforeach;
                    ?>
                </div>
            </div>
        </div>
</section>

<!-- section one -->
<?php

 $section_one = get_field('section_one');

 if ($section_one): ?>

<section id="what-we-do" class="overflow-hidden pull-up mb-40">
    <div class="container image-text box-white">
        <div class="row reverse-mobile">
            <div class="right col-lg-6 col-md-12">
                <div class="overflow-hidden img-animate">
                    <img class="parallax-img" src="<?php echo $section_one['top']['image']['url']; ?>" alt=" Arena" width="100%">
                </div>
            </div>
            <div class="col-md-1">
            </div>
            <div class="left col-lg-5 col-md-12 horizontal-dots left-dots d-flex flex-column justify-content-center">
                <div class="">
                    <div>
                        <div class="overflow-hidden">
                            <h3 class="medium-heading mb-20 animate" data-animate="fade-in-left"><?php echo $section_one['top']['header']; ?></h3>
                            <div class="">
								<?php echo $section_one['top']['text']; ?>
							</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container image-text box-white pd-bot bot">
        <div class="row">
            <div class="left col-lg-5 col-md-12 horizontal-dots left-dots d-flex flex-column justify-content-center">
                <div class="">
                    <div>
                        <div class="overflow-hidden">
                        <h4 class="small-heading mb-20 animate" data-animate="fade-in-left"><?php echo $section_one['bottom']['header']; ?></h4>
                            <div class="">
								<?php echo $section_one['bottom']['text']; ?>
							</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-1">
            </div>
            <div class="right col-lg-6 col-md-12">
                <div class="overflow-hidden img-animate">
                    <img class="parallax-img" src="<?php echo $section_one['bottom']['image']['url']; ?>" alt=" Arena" width="100%">
                </div>
            </div>
        </div>
    </div>
</section>

<?php endif; ?>

<?php
$section_two = get_field('section_two');

if ($section_two) :

    $items = $section_two['items']; ?>
    <section id="mission-vision" class="gray-bg">
        <div class="container image-text">
            <div class="mission-carousel horizontal-dots row">
                <?php
                foreach ($items as $item) : ?>
                    <div class="col-lg-4 col-md-12">
                        <div class="content text-center">
                            <img src="<?php echo $item['image']['url']; ?>" alt=" Arena | <?php echo $item['image']['caption']; ?>">
                            <h3 class="header mb-20"> <?php echo $item['header']; ?></h3>
                            <div class="copy"><?php echo $item['text']; ?></div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

<?php endif; ?>

<section id="founder" class="center-text section-pd pt-0 pb-60 gray-bg mb-40">
    <div class="container image-text white-bg">
        <div class="row">
            <div class="left col-lg-6 col-md-12">
                <div class="simpleParallax" style="overflow: hidden;"><img class="parallax-img" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/about/founder.jpg" alt="ARENA Capital Dariush Soudi" width="100%"></div>
            </div>
            <div class="col-lg-1"></div>
            <div class="right col-lg-5 col-md-12 horizontal-dots left-dots d-flex flex-column justify-content-center">
                <div class="contents">
                    <div>
                        <div class="overflow-hidden">
                            <h3 class="medium-heading mb-20 animate animated fade-in-left" data-animate="fade-in-left"><p>Our Founder</p></h3>
                        </div>
                        <div class="col-md-12 animate animated fade-in-left mb-40" data-animate="fade-in-left"><p>"We need to practice, plan, implement and take action on our skills, while our enemies are resting. As gladiators we battle every day so one day we have a life of abundance."</p></div>
                        <div class="col-md-12 animate animated fade-in-left mb-40" data-animate="fade-in-left"><p>Dariush Soudi</p></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="team" class="overflow-hidden mb-40 gray-bg">
    <div class="container image-text box-white pd-bot">

        <div class="row">
            <div class="col-md-8 horizontal-dots mb-40">
                <div class="medium-heading animate mb-20" data-animate="fade-in-bottom">Our Team</div>
                <p class="animate" data-animate="fade-in-bottom">We recruit happy & motivated individuals who care for your business.</p>
            </div>
            <div class="col-md-4 d-flex align-items-center justify-content-end right-arrows">
                <div id="team-navs"></div>
            </div>
        </div>
        
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
                    <div class="col-9">
                        <h3 class="name small-heading"><?php echo $field['first_name'].' '.$field['last_name'] ?></h3>
                        <p class="title mb-20"><?php echo $field['designation'] ?></p>
                        <a class="link" href="<?php echo get_permalink($p->ID); ?>">View Profile</a>
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

<section id="quote" class="overflow-hidden gray-bg">
    <div class="container image-text box-white pd-bot text-center">
        <p class="mb-40 animate" data-animate="fade-in-top">Providing cutting-edge techniques for navigating change in the core areas of marketing transformation, data and technology solutions, growth strategy, private equity advisory, executive search and talent development. </p>
        <a class="anim animate button-link" data-animate="fade-in-bottom" href="<?php echo site_url(); ?>/consultancy" tabindex="0">View Our Services</a>
    </div>
</section>

<?php
$section_five = get_field('section_five');
if ($section_five) : ?>

    <section id="gallery" class="overflow-hidden gray-bg pbt">
        <div class="container ">
            <div class="row mb-20">

                <div class="col-6 horizontal-dots">
                    <div class="medium-heading animate" data-animate="fade-in-bottom">Gallery</div>
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
								<a href="<?php echo $image['image']['url'] ?>">
                                    <div class="wrap">
                                        <div class="overflow-hidden">
                                            <img width="100%" src="<?php echo $image['thumbnail']['url'] ?>" alt="<?php echo $image['thumbnail']['caption'] ?> | <?php echo $image['thumbnail']['description'] ?>| <?php echo $image['thumbnail']['name'] ?>?>">
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

<?php endif; ?>

<?php
$section_8 = get_field('section_8');
if ($section_8) : ?>

    <section id="awards" class="overflow-hidden gray-bg">
        <div class="container box-white pd-bot ">
            <div class="row mb-20">

                <div class="col-12 horizontal-dots">
                    <div class="medium-heading animate mb-20 text-center" data-animate="fade-in-bottom"><?php echo $section_8['header']; ?></div>
                </div>
            </div>
            <div class="row">
                
                <div class="col-lg-12">
                    <div class="award-carousel animate horizontal-dots text-center" data-animate="fade-in-bottom">
                        <?php $images = $section_8['logos'];
                        $loop = 0;
                        foreach ($images as $key => $image) {
                        ?>
                            <div class="">
                                <img width="100%" src="<?php echo $image['image']['url'] ?>" alt="<?php echo $image['image']['caption'] ?> | <?php echo $image['image']['description'] ?>| <?php echo $image['image']['name'] ?>?>">
                            </div>
        
                        <?php  
                         } ?>
                    </div>

                    <div id="award-navs"></div>
                </div>
            </div>
        </div>
    </section>

<?php endif; ?>

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
        /*! Magnific Popup - v1.1.0 - 2016-02-20
        * http://dimsemenov.com/plugins/magnific-popup/
        * Copyright (c) 2016 Dmitry Semenov; */
        !function(a){"function"==typeof define&&define.amd?define(["jquery"],a):a("object"==typeof exports?require("jquery"):window.jQuery||window.Zepto)}(function(a){var b,c,d,e,f,g,h="Close",i="BeforeClose",j="AfterClose",k="BeforeAppend",l="MarkupParse",m="Open",n="Change",o="mfp",p="."+o,q="mfp-ready",r="mfp-removing",s="mfp-prevent-close",t=function(){},u=!!window.jQuery,v=a(window),w=function(a,c){b.ev.on(o+a+p,c)},x=function(b,c,d,e){var f=document.createElement("div");return f.className="mfp-"+b,d&&(f.innerHTML=d),e?c&&c.appendChild(f):(f=a(f),c&&f.appendTo(c)),f},y=function(c,d){b.ev.triggerHandler(o+c,d),b.st.callbacks&&(c=c.charAt(0).toLowerCase()+c.slice(1),b.st.callbacks[c]&&b.st.callbacks[c].apply(b,a.isArray(d)?d:[d]))},z=function(c){return c===g&&b.currTemplate.closeBtn||(b.currTemplate.closeBtn=a(b.st.closeMarkup.replace("%title%",b.st.tClose)),g=c),b.currTemplate.closeBtn},A=function(){a.magnificPopup.instance||(b=new t,b.init(),a.magnificPopup.instance=b)},B=function(){var a=document.createElement("p").style,b=["ms","O","Moz","Webkit"];if(void 0!==a.transition)return!0;for(;b.length;)if(b.pop()+"Transition"in a)return!0;return!1};t.prototype={constructor:t,init:function(){var c=navigator.appVersion;b.isLowIE=b.isIE8=document.all&&!document.addEventListener,b.isAndroid=/android/gi.test(c),b.isIOS=/iphone|ipad|ipod/gi.test(c),b.supportsTransition=B(),b.probablyMobile=b.isAndroid||b.isIOS||/(Opera Mini)|Kindle|webOS|BlackBerry|(Opera Mobi)|(Windows Phone)|IEMobile/i.test(navigator.userAgent),d=a(document),b.popupsCache={}},open:function(c){var e;if(c.isObj===!1){b.items=c.items.toArray(),b.index=0;var g,h=c.items;for(e=0;e<h.length;e++)if(g=h[e],g.parsed&&(g=g.el[0]),g===c.el[0]){b.index=e;break}}else b.items=a.isArray(c.items)?c.items:[c.items],b.index=c.index||0;if(b.isOpen)return void b.updateItemHTML();b.types=[],f="",c.mainEl&&c.mainEl.length?b.ev=c.mainEl.eq(0):b.ev=d,c.key?(b.popupsCache[c.key]||(b.popupsCache[c.key]={}),b.currTemplate=b.popupsCache[c.key]):b.currTemplate={},b.st=a.extend(!0,{},a.magnificPopup.defaults,c),b.fixedContentPos="auto"===b.st.fixedContentPos?!b.probablyMobile:b.st.fixedContentPos,b.st.modal&&(b.st.closeOnContentClick=!1,b.st.closeOnBgClick=!1,b.st.showCloseBtn=!1,b.st.enableEscapeKey=!1),b.bgOverlay||(b.bgOverlay=x("bg").on("click"+p,function(){b.close()}),b.wrap=x("wrap").attr("tabindex",-1).on("click"+p,function(a){b._checkIfClose(a.target)&&b.close()}),b.container=x("container",b.wrap)),b.contentContainer=x("content"),b.st.preloader&&(b.preloader=x("preloader",b.container,b.st.tLoading));var i=a.magnificPopup.modules;for(e=0;e<i.length;e++){var j=i[e];j=j.charAt(0).toUpperCase()+j.slice(1),b["init"+j].call(b)}y("BeforeOpen"),b.st.showCloseBtn&&(b.st.closeBtnInside?(w(l,function(a,b,c,d){c.close_replaceWith=z(d.type)}),f+=" mfp-close-btn-in"):b.wrap.append(z())),b.st.alignTop&&(f+=" mfp-align-top"),b.fixedContentPos?b.wrap.css({overflow:b.st.overflowY,overflowX:"hidden",overflowY:b.st.overflowY}):b.wrap.css({top:v.scrollTop(),position:"absolute"}),(b.st.fixedBgPos===!1||"auto"===b.st.fixedBgPos&&!b.fixedContentPos)&&b.bgOverlay.css({height:d.height(),position:"absolute"}),b.st.enableEscapeKey&&d.on("keyup"+p,function(a){27===a.keyCode&&b.close()}),v.on("resize"+p,function(){b.updateSize()}),b.st.closeOnContentClick||(f+=" mfp-auto-cursor"),f&&b.wrap.addClass(f);var k=b.wH=v.height(),n={};if(b.fixedContentPos&&b._hasScrollBar(k)){var o=b._getScrollbarSize();o&&(n.marginRight=o)}b.fixedContentPos&&(b.isIE7?a("body, html").css("overflow","hidden"):n.overflow="hidden");var r=b.st.mainClass;return b.isIE7&&(r+=" mfp-ie7"),r&&b._addClassToMFP(r),b.updateItemHTML(),y("BuildControls"),a("html").css(n),b.bgOverlay.add(b.wrap).prependTo(b.st.prependTo||a(document.body)),b._lastFocusedEl=document.activeElement,setTimeout(function(){b.content?(b._addClassToMFP(q),b._setFocus()):b.bgOverlay.addClass(q),d.on("focusin"+p,b._onFocusIn)},16),b.isOpen=!0,b.updateSize(k),y(m),c},close:function(){b.isOpen&&(y(i),b.isOpen=!1,b.st.removalDelay&&!b.isLowIE&&b.supportsTransition?(b._addClassToMFP(r),setTimeout(function(){b._close()},b.st.removalDelay)):b._close())},_close:function(){y(h);var c=r+" "+q+" ";if(b.bgOverlay.detach(),b.wrap.detach(),b.container.empty(),b.st.mainClass&&(c+=b.st.mainClass+" "),b._removeClassFromMFP(c),b.fixedContentPos){var e={marginRight:""};b.isIE7?a("body, html").css("overflow",""):e.overflow="",a("html").css(e)}d.off("keyup"+p+" focusin"+p),b.ev.off(p),b.wrap.attr("class","mfp-wrap").removeAttr("style"),b.bgOverlay.attr("class","mfp-bg"),b.container.attr("class","mfp-container"),!b.st.showCloseBtn||b.st.closeBtnInside&&b.currTemplate[b.currItem.type]!==!0||b.currTemplate.closeBtn&&b.currTemplate.closeBtn.detach(),b.st.autoFocusLast&&b._lastFocusedEl&&a(b._lastFocusedEl).focus(),b.currItem=null,b.content=null,b.currTemplate=null,b.prevHeight=0,y(j)},updateSize:function(a){if(b.isIOS){var c=document.documentElement.clientWidth/window.innerWidth,d=window.innerHeight*c;b.wrap.css("height",d),b.wH=d}else b.wH=a||v.height();b.fixedContentPos||b.wrap.css("height",b.wH),y("Resize")},updateItemHTML:function(){var c=b.items[b.index];b.contentContainer.detach(),b.content&&b.content.detach(),c.parsed||(c=b.parseEl(b.index));var d=c.type;if(y("BeforeChange",[b.currItem?b.currItem.type:"",d]),b.currItem=c,!b.currTemplate[d]){var f=b.st[d]?b.st[d].markup:!1;y("FirstMarkupParse",f),f?b.currTemplate[d]=a(f):b.currTemplate[d]=!0}e&&e!==c.type&&b.container.removeClass("mfp-"+e+"-holder");var g=b["get"+d.charAt(0).toUpperCase()+d.slice(1)](c,b.currTemplate[d]);b.appendContent(g,d),c.preloaded=!0,y(n,c),e=c.type,b.container.prepend(b.contentContainer),y("AfterChange")},appendContent:function(a,c){b.content=a,a?b.st.showCloseBtn&&b.st.closeBtnInside&&b.currTemplate[c]===!0?b.content.find(".mfp-close").length||b.content.append(z()):b.content=a:b.content="",y(k),b.container.addClass("mfp-"+c+"-holder"),b.contentContainer.append(b.content)},parseEl:function(c){var d,e=b.items[c];if(e.tagName?e={el:a(e)}:(d=e.type,e={data:e,src:e.src}),e.el){for(var f=b.types,g=0;g<f.length;g++)if(e.el.hasClass("mfp-"+f[g])){d=f[g];break}e.src=e.el.attr("data-mfp-src"),e.src||(e.src=e.el.attr("href"))}return e.type=d||b.st.type||"inline",e.index=c,e.parsed=!0,b.items[c]=e,y("ElementParse",e),b.items[c]},addGroup:function(a,c){var d=function(d){d.mfpEl=this,b._openClick(d,a,c)};c||(c={});var e="click.magnificPopup";c.mainEl=a,c.items?(c.isObj=!0,a.off(e).on(e,d)):(c.isObj=!1,c.delegate?a.off(e).on(e,c.delegate,d):(c.items=a,a.off(e).on(e,d)))},_openClick:function(c,d,e){var f=void 0!==e.midClick?e.midClick:a.magnificPopup.defaults.midClick;if(f||!(2===c.which||c.ctrlKey||c.metaKey||c.altKey||c.shiftKey)){var g=void 0!==e.disableOn?e.disableOn:a.magnificPopup.defaults.disableOn;if(g)if(a.isFunction(g)){if(!g.call(b))return!0}else if(v.width()<g)return!0;c.type&&(c.preventDefault(),b.isOpen&&c.stopPropagation()),e.el=a(c.mfpEl),e.delegate&&(e.items=d.find(e.delegate)),b.open(e)}},updateStatus:function(a,d){if(b.preloader){c!==a&&b.container.removeClass("mfp-s-"+c),d||"loading"!==a||(d=b.st.tLoading);var e={status:a,text:d};y("UpdateStatus",e),a=e.status,d=e.text,b.preloader.html(d),b.preloader.find("a").on("click",function(a){a.stopImmediatePropagation()}),b.container.addClass("mfp-s-"+a),c=a}},_checkIfClose:function(c){if(!a(c).hasClass(s)){var d=b.st.closeOnContentClick,e=b.st.closeOnBgClick;if(d&&e)return!0;if(!b.content||a(c).hasClass("mfp-close")||b.preloader&&c===b.preloader[0])return!0;if(c===b.content[0]||a.contains(b.content[0],c)){if(d)return!0}else if(e&&a.contains(document,c))return!0;return!1}},_addClassToMFP:function(a){b.bgOverlay.addClass(a),b.wrap.addClass(a)},_removeClassFromMFP:function(a){this.bgOverlay.removeClass(a),b.wrap.removeClass(a)},_hasScrollBar:function(a){return(b.isIE7?d.height():document.body.scrollHeight)>(a||v.height())},_setFocus:function(){(b.st.focus?b.content.find(b.st.focus).eq(0):b.wrap).focus()},_onFocusIn:function(c){return c.target===b.wrap[0]||a.contains(b.wrap[0],c.target)?void 0:(b._setFocus(),!1)},_parseMarkup:function(b,c,d){var e;d.data&&(c=a.extend(d.data,c)),y(l,[b,c,d]),a.each(c,function(c,d){if(void 0===d||d===!1)return!0;if(e=c.split("_"),e.length>1){var f=b.find(p+"-"+e[0]);if(f.length>0){var g=e[1];"replaceWith"===g?f[0]!==d[0]&&f.replaceWith(d):"img"===g?f.is("img")?f.attr("src",d):f.replaceWith(a("<img>").attr("src",d).attr("class",f.attr("class"))):f.attr(e[1],d)}}else b.find(p+"-"+c).html(d)})},_getScrollbarSize:function(){if(void 0===b.scrollbarSize){var a=document.createElement("div");a.style.cssText="width: 99px; height: 99px; overflow: scroll; position: absolute; top: -9999px;",document.body.appendChild(a),b.scrollbarSize=a.offsetWidth-a.clientWidth,document.body.removeChild(a)}return b.scrollbarSize}},a.magnificPopup={instance:null,proto:t.prototype,modules:[],open:function(b,c){return A(),b=b?a.extend(!0,{},b):{},b.isObj=!0,b.index=c||0,this.instance.open(b)},close:function(){return a.magnificPopup.instance&&a.magnificPopup.instance.close()},registerModule:function(b,c){c.options&&(a.magnificPopup.defaults[b]=c.options),a.extend(this.proto,c.proto),this.modules.push(b)},defaults:{disableOn:0,key:null,midClick:!1,mainClass:"",preloader:!0,focus:"",closeOnContentClick:!1,closeOnBgClick:!0,closeBtnInside:!0,showCloseBtn:!0,enableEscapeKey:!0,modal:!1,alignTop:!1,removalDelay:0,prependTo:null,fixedContentPos:"auto",fixedBgPos:"auto",overflowY:"auto",closeMarkup:'<button title="%title%" type="button" class="mfp-close">&#215;</button>',tClose:"Close (Esc)",tLoading:"Loading...",autoFocusLast:!0}},a.fn.magnificPopup=function(c){A();var d=a(this);if("string"==typeof c)if("open"===c){var e,f=u?d.data("magnificPopup"):d[0].magnificPopup,g=parseInt(arguments[1],10)||0;f.items?e=f.items[g]:(e=d,f.delegate&&(e=e.find(f.delegate)),e=e.eq(g)),b._openClick({mfpEl:e},d,f)}else b.isOpen&&b[c].apply(b,Array.prototype.slice.call(arguments,1));else c=a.extend(!0,{},c),u?d.data("magnificPopup",c):d[0].magnificPopup=c,b.addGroup(d,c);return d};var C,D,E,F="inline",G=function(){E&&(D.after(E.addClass(C)).detach(),E=null)};a.magnificPopup.registerModule(F,{options:{hiddenClass:"hide",markup:"",tNotFound:"Content not found"},proto:{initInline:function(){b.types.push(F),w(h+"."+F,function(){G()})},getInline:function(c,d){if(G(),c.src){var e=b.st.inline,f=a(c.src);if(f.length){var g=f[0].parentNode;g&&g.tagName&&(D||(C=e.hiddenClass,D=x(C),C="mfp-"+C),E=f.after(D).detach().removeClass(C)),b.updateStatus("ready")}else b.updateStatus("error",e.tNotFound),f=a("<div>");return c.inlineElement=f,f}return b.updateStatus("ready"),b._parseMarkup(d,{},c),d}}});var H,I="ajax",J=function(){H&&a(document.body).removeClass(H)},K=function(){J(),b.req&&b.req.abort()};a.magnificPopup.registerModule(I,{options:{settings:null,cursor:"mfp-ajax-cur",tError:'<a href="%url%">The content</a> could not be loaded.'},proto:{initAjax:function(){b.types.push(I),H=b.st.ajax.cursor,w(h+"."+I,K),w("BeforeChange."+I,K)},getAjax:function(c){H&&a(document.body).addClass(H),b.updateStatus("loading");var d=a.extend({url:c.src,success:function(d,e,f){var g={data:d,xhr:f};y("ParseAjax",g),b.appendContent(a(g.data),I),c.finished=!0,J(),b._setFocus(),setTimeout(function(){b.wrap.addClass(q)},16),b.updateStatus("ready"),y("AjaxContentAdded")},error:function(){J(),c.finished=c.loadError=!0,b.updateStatus("error",b.st.ajax.tError.replace("%url%",c.src))}},b.st.ajax.settings);return b.req=a.ajax(d),""}}});var L,M=function(c){if(c.data&&void 0!==c.data.title)return c.data.title;var d=b.st.image.titleSrc;if(d){if(a.isFunction(d))return d.call(b,c);if(c.el)return c.el.attr(d)||""}return""};a.magnificPopup.registerModule("image",{options:{markup:'<div class="mfp-figure"><div class="mfp-close"></div><figure><div class="mfp-img"></div><figcaption><div class="mfp-bottom-bar"><div class="mfp-title"></div><div class="mfp-counter"></div></div></figcaption></figure></div>',cursor:"mfp-zoom-out-cur",titleSrc:"title",verticalFit:!0,tError:'<a href="%url%">The image</a> could not be loaded.'},proto:{initImage:function(){var c=b.st.image,d=".image";b.types.push("image"),w(m+d,function(){"image"===b.currItem.type&&c.cursor&&a(document.body).addClass(c.cursor)}),w(h+d,function(){c.cursor&&a(document.body).removeClass(c.cursor),v.off("resize"+p)}),w("Resize"+d,b.resizeImage),b.isLowIE&&w("AfterChange",b.resizeImage)},resizeImage:function(){var a=b.currItem;if(a&&a.img&&b.st.image.verticalFit){var c=0;b.isLowIE&&(c=parseInt(a.img.css("padding-top"),10)+parseInt(a.img.css("padding-bottom"),10)),a.img.css("max-height",b.wH-c)}},_onImageHasSize:function(a){a.img&&(a.hasSize=!0,L&&clearInterval(L),a.isCheckingImgSize=!1,y("ImageHasSize",a),a.imgHidden&&(b.content&&b.content.removeClass("mfp-loading"),a.imgHidden=!1))},findImageSize:function(a){var c=0,d=a.img[0],e=function(f){L&&clearInterval(L),L=setInterval(function(){return d.naturalWidth>0?void b._onImageHasSize(a):(c>200&&clearInterval(L),c++,void(3===c?e(10):40===c?e(50):100===c&&e(500)))},f)};e(1)},getImage:function(c,d){var e=0,f=function(){c&&(c.img[0].complete?(c.img.off(".mfploader"),c===b.currItem&&(b._onImageHasSize(c),b.updateStatus("ready")),c.hasSize=!0,c.loaded=!0,y("ImageLoadComplete")):(e++,200>e?setTimeout(f,100):g()))},g=function(){c&&(c.img.off(".mfploader"),c===b.currItem&&(b._onImageHasSize(c),b.updateStatus("error",h.tError.replace("%url%",c.src))),c.hasSize=!0,c.loaded=!0,c.loadError=!0)},h=b.st.image,i=d.find(".mfp-img");if(i.length){var j=document.createElement("img");j.className="mfp-img",c.el&&c.el.find("img").length&&(j.alt=c.el.find("img").attr("alt")),c.img=a(j).on("load.mfploader",f).on("error.mfploader",g),j.src=c.src,i.is("img")&&(c.img=c.img.clone()),j=c.img[0],j.naturalWidth>0?c.hasSize=!0:j.width||(c.hasSize=!1)}return b._parseMarkup(d,{title:M(c),img_replaceWith:c.img},c),b.resizeImage(),c.hasSize?(L&&clearInterval(L),c.loadError?(d.addClass("mfp-loading"),b.updateStatus("error",h.tError.replace("%url%",c.src))):(d.removeClass("mfp-loading"),b.updateStatus("ready")),d):(b.updateStatus("loading"),c.loading=!0,c.hasSize||(c.imgHidden=!0,d.addClass("mfp-loading"),b.findImageSize(c)),d)}}});var N,O=function(){return void 0===N&&(N=void 0!==document.createElement("p").style.MozTransform),N};a.magnificPopup.registerModule("zoom",{options:{enabled:!1,easing:"ease-in-out",duration:300,opener:function(a){return a.is("img")?a:a.find("img")}},proto:{initZoom:function(){var a,c=b.st.zoom,d=".zoom";if(c.enabled&&b.supportsTransition){var e,f,g=c.duration,j=function(a){var b=a.clone().removeAttr("style").removeAttr("class").addClass("mfp-animated-image"),d="all "+c.duration/1e3+"s "+c.easing,e={position:"fixed",zIndex:9999,left:0,top:0,"-webkit-backface-visibility":"hidden"},f="transition";return e["-webkit-"+f]=e["-moz-"+f]=e["-o-"+f]=e[f]=d,b.css(e),b},k=function(){b.content.css("visibility","visible")};w("BuildControls"+d,function(){if(b._allowZoom()){if(clearTimeout(e),b.content.css("visibility","hidden"),a=b._getItemToZoom(),!a)return void k();f=j(a),f.css(b._getOffset()),b.wrap.append(f),e=setTimeout(function(){f.css(b._getOffset(!0)),e=setTimeout(function(){k(),setTimeout(function(){f.remove(),a=f=null,y("ZoomAnimationEnded")},16)},g)},16)}}),w(i+d,function(){if(b._allowZoom()){if(clearTimeout(e),b.st.removalDelay=g,!a){if(a=b._getItemToZoom(),!a)return;f=j(a)}f.css(b._getOffset(!0)),b.wrap.append(f),b.content.css("visibility","hidden"),setTimeout(function(){f.css(b._getOffset())},16)}}),w(h+d,function(){b._allowZoom()&&(k(),f&&f.remove(),a=null)})}},_allowZoom:function(){return"image"===b.currItem.type},_getItemToZoom:function(){return b.currItem.hasSize?b.currItem.img:!1},_getOffset:function(c){var d;d=c?b.currItem.img:b.st.zoom.opener(b.currItem.el||b.currItem);var e=d.offset(),f=parseInt(d.css("padding-top"),10),g=parseInt(d.css("padding-bottom"),10);e.top-=a(window).scrollTop()-f;var h={width:d.width(),height:(u?d.innerHeight():d[0].offsetHeight)-g-f};return O()?h["-moz-transform"]=h.transform="translate("+e.left+"px,"+e.top+"px)":(h.left=e.left,h.top=e.top),h}}});var P="iframe",Q="//about:blank",R=function(a){if(b.currTemplate[P]){var c=b.currTemplate[P].find("iframe");c.length&&(a||(c[0].src=Q),b.isIE8&&c.css("display",a?"block":"none"))}};a.magnificPopup.registerModule(P,{options:{markup:'<div class="mfp-iframe-scaler"><div class="mfp-close"></div><iframe class="mfp-iframe" src="//about:blank" frameborder="0" allowfullscreen></iframe></div>',srcAction:"iframe_src",patterns:{youtube:{index:"youtube.com",id:"v=",src:"//www.youtube.com/embed/%id%?autoplay=1"},vimeo:{index:"vimeo.com/",id:"/",src:"//player.vimeo.com/video/%id%?autoplay=1"},gmaps:{index:"//maps.google.",src:"%id%&output=embed"}}},proto:{initIframe:function(){b.types.push(P),w("BeforeChange",function(a,b,c){b!==c&&(b===P?R():c===P&&R(!0))}),w(h+"."+P,function(){R()})},getIframe:function(c,d){var e=c.src,f=b.st.iframe;a.each(f.patterns,function(){return e.indexOf(this.index)>-1?(this.id&&(e="string"==typeof this.id?e.substr(e.lastIndexOf(this.id)+this.id.length,e.length):this.id.call(this,e)),e=this.src.replace("%id%",e),!1):void 0});var g={};return f.srcAction&&(g[f.srcAction]=e),b._parseMarkup(d,g,c),b.updateStatus("ready"),d}}});var S=function(a){var c=b.items.length;return a>c-1?a-c:0>a?c+a:a},T=function(a,b,c){return a.replace(/%curr%/gi,b+1).replace(/%total%/gi,c)};a.magnificPopup.registerModule("gallery",{options:{enabled:!1,arrowMarkup:'<button title="%title%" type="button" class="mfp-arrow mfp-arrow-%dir%"></button>',preload:[0,2],navigateByImgClick:!0,arrows:!0,tPrev:"Previous (Left arrow key)",tNext:"Next (Right arrow key)",tCounter:"%curr% of %total%"},proto:{initGallery:function(){var c=b.st.gallery,e=".mfp-gallery";return b.direction=!0,c&&c.enabled?(f+=" mfp-gallery",w(m+e,function(){c.navigateByImgClick&&b.wrap.on("click"+e,".mfp-img",function(){return b.items.length>1?(b.next(),!1):void 0}),d.on("keydown"+e,function(a){37===a.keyCode?b.prev():39===a.keyCode&&b.next()})}),w("UpdateStatus"+e,function(a,c){c.text&&(c.text=T(c.text,b.currItem.index,b.items.length))}),w(l+e,function(a,d,e,f){var g=b.items.length;e.counter=g>1?T(c.tCounter,f.index,g):""}),w("BuildControls"+e,function(){if(b.items.length>1&&c.arrows&&!b.arrowLeft){var d=c.arrowMarkup,e=b.arrowLeft=a(d.replace(/%title%/gi,c.tPrev).replace(/%dir%/gi,"left")).addClass(s),f=b.arrowRight=a(d.replace(/%title%/gi,c.tNext).replace(/%dir%/gi,"right")).addClass(s);e.click(function(){b.prev()}),f.click(function(){b.next()}),b.container.append(e.add(f))}}),w(n+e,function(){b._preloadTimeout&&clearTimeout(b._preloadTimeout),b._preloadTimeout=setTimeout(function(){b.preloadNearbyImages(),b._preloadTimeout=null},16)}),void w(h+e,function(){d.off(e),b.wrap.off("click"+e),b.arrowRight=b.arrowLeft=null})):!1},next:function(){b.direction=!0,b.index=S(b.index+1),b.updateItemHTML()},prev:function(){b.direction=!1,b.index=S(b.index-1),b.updateItemHTML()},goTo:function(a){b.direction=a>=b.index,b.index=a,b.updateItemHTML()},preloadNearbyImages:function(){var a,c=b.st.gallery.preload,d=Math.min(c[0],b.items.length),e=Math.min(c[1],b.items.length);for(a=1;a<=(b.direction?e:d);a++)b._preloadItem(b.index+a);for(a=1;a<=(b.direction?d:e);a++)b._preloadItem(b.index-a)},_preloadItem:function(c){if(c=S(c),!b.items[c].preloaded){var d=b.items[c];d.parsed||(d=b.parseEl(c)),y("LazyLoad",d),"image"===d.type&&(d.img=a('<img class="mfp-img" />').on("load.mfploader",function(){d.hasSize=!0}).on("error.mfploader",function(){d.hasSize=!0,d.loadError=!0,y("LazyLoadError",d)}).attr("src",d.src)),d.preloaded=!0}}}});var U="retina";a.magnificPopup.registerModule(U,{options:{replaceSrc:function(a){return a.src.replace(/\.\w+$/,function(a){return"@2x"+a})},ratio:1},proto:{initRetina:function(){if(window.devicePixelRatio>1){var a=b.st.retina,c=a.ratio;c=isNaN(c)?c():c,c>1&&(w("ImageHasSize."+U,function(a,b){b.img.css({"max-width":b.img[0].naturalWidth/c,width:"100%"})}),w("ElementParse."+U,function(b,d){d.src=a.replaceSrc(d,c)}))}}}}),A()});
    </script>
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
                autoplay: false,
                autoplaySpeed: 3000,
                slidesToShow: 4,
                slidesToScroll: 1,
                arrows: true,
                // asNavFor: '.team-text-carousel',
                focusOnSelect: true,
                appendArrows: '#team-navs',
                responsive: [
                    {
                        breakpoint: 1200,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 1,
                            infinite: true,
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

        // $('.team-text-carousel').slick({
        //     infinite: true,
        //     fade: true,
        //     dots: false,
        //     autoplay: false,
        //     autoplaySpeed: 3000,
        //     slidesToShow: 1,
        //     slidesToScroll: 1,
        //     asNavFor: '.team-carousel',
        //     appendArrows: '#team-nav',
        //     responsive: [
        //         {
        //             breakpoint: 991,
        //             settings: {
        //                 dots: false
        //             }
        //         }
        //     ]
        // });

        // $('.team-text-carousel').on('beforeChange', function(event, slick, currentSlide, nextSlide) {
        //     // $('.team-text-carousel .slick-slide').eq(nextSlide).find('.anim').removeClass('fade-in-left');
        //     // $('.team-text-carousel .slick-slide').eq(currentSlide).find('.content').addClass('fade-out-fast');
        //     slick.clonedSlides.addClass('slick-current-clone');
        // });

        // $('.team-text-carousel').on('afterChange', function(event, slick, currentSlide, nextSlide) {
        //     slick.clonedSlides.removeClass('slick-current-clone');
        //     // $('.team-text-carousel .slick-slide .content').removeClass('fade-out-fast');
        //     // $('.team-text-carousel .slick-slide').eq(currentSlide).find('.anim').addClass('fade-in-left');
        // });
        }


        if($('.line-icon-carousel').length){
            $('.line-icon-carousel').slick({
                dots: false,
                arrows: false,
                infinite: true,
                speed: 1000,
                slidesToShow: 4,
                slidesToScroll: 1,
                responsive: [
                    {
                        breakpoint: 991,
                        settings: {
                            slidesToShow: 3,
                            dots: true
                        }
                    },
                    {
                        breakpoint: 767,
                        settings: {
                            slidesToShow: 2,
                            dots: true
                        }
                    },
                ]
            });
        }
        

        if($('.approach-carousel').length){

            if($('.approach-carousel-text').length){

                $('.approach-carousel').slick({
                    arrows: false,
                    dots: true,
                    appendDots: '.dots-wrap',
                    asNavFor: '.approach-carousel-text',
                    adaptiveHeight: true
                });
                $('.approach-carousel-text').slick({
                    arrows: false,
                    dots: true,
                    fade: true,
                    asNavFor: '.approach-carousel',
                    adaptiveHeight: true
                });
            } else {
                $('.approach-carousel').slick({
                    arrows: false,
                    dots: true,
                    appendDots: '.dots-wrap',
                    adaptiveHeight: true
                });
            }


            $('.portfolio-carousel').slick({
                arrows: true,
                infinite: false,
                appendArrows: '#portfolio .arrow-wrap',
                slidesToShow: 3,
                slidesToScroll: 1,
                responsive: [
                    {
                        breakpoint: 991,
                        settings: {
                            slidesToShow: 1,
                            dots: false
                        }
                    }
                ]
            });

            $('.testimonial-carousel').slick({
                arrows: true,
                loop: true,
                fade: true,
                appendArrows: '#testimonials .arrows-wrap',
                slidesToShow: 1,
                slidesToScroll: 1
            });
        }   


        $('.gallery-carousel').slick({
            arrows: true,
            loop: true,
            fade: true,
            appendArrows: '#gallery-navs',
            slidesToShow: 1,
            slidesToScroll: 1,
            adaptiveHeight: true,
        });

        $('.award-carousel').slick({
            arrows: false,
            infinite: false,
            dots: false,
            slidesToShow: 3,
            slidesToScroll: 1,
            appendArrows: '#award-navs',
            responsive: [
                {
                    breakpoint: 991,
                    settings: {
                        slidesToShow: 2,
                        arrows: true,
                    }
                },
                {
                    breakpoint: 767,
                    settings: {
                        slidesToShow: 2,
                        arrows: true,
                    }
                },
            ]
        });

//         $('.mission-carousel').slick({
//             arrows: false,
//             loop: false,
//             infinite: false,
//             slidesToShow: 3,
//             slidesToScroll: 1,
//             responsive: [
//                 {
//                     breakpoint: 991,
//                     settings: {
//                         slidesToShow: 2,
//                         dots: true,
//                     }
//                 },
//                 {
//                     breakpoint: 767,
//                     settings: {
//                         slidesToShow: 1,
//                         dots: true,
//                     }
//                 },
//             ]
//         });

    </script>
