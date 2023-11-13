inView('.animate')
    .on('enter', function(item){
        $(item).delay(500).addClass('animated');
        $(item).delay(500).addClass($(item).attr('data-animate'));
    })
    .on('exit', el => {
        // $(el).removeClass('animated');
        // $(el).removeClass($(el).attr('data-animate'));
    });

inView('.img-animate')
    .on('enter', function(item){
        $(item).delay(500).addClass('animated');
    })
    .on('exit', el => {
        // $(el).removeClass('animated');
        // $(el).removeClass($(el).attr('data-animate'));
    });

$(window).scroll(function(e){
    checkHeaderScroll();
});

$(window).on('load',function(e){
    $('.slick-slide').on('click',function(){
        slider = $(this).closest('.slick-slider');
        // console.log($(slider).slick('getSlick').slideCount);
    });
});

function checkHeaderScroll(){
    if(window.pageYOffset > $('#header').outerHeight()) {
        $('#header').addClass('floating');
    } else {
        $('#header').removeClass('floating');
    }
}
checkHeaderScroll();

$(window).resize(function(e){
    // checkMobile();
});

// function checkMobile(){
//     if(window.innerWidth < 991) {
//         if(!$('#consultancy-carousel').hasClass('slick-initialized')){
//             mobileOnlySlider();
//         }
//     } else {
//         if($('#consultancy-carousel').hasClass('slick-initialized')){
//             $('#consultancy-carousel').slick('unslick');
//         }
//     }
// }
//
// checkMobile();
//
// function mobileOnlySlider() {
//     $('#consultancy-carousel').slick({
//         infinite: true,
//         nav: false,
//         dots: false,
//         arrows: false,
//         autoplay: false,
//         autoplaySpeed: 3000,
//         slidesToShow: 1,
//         slidesToScroll: 1,
//         adaptiveHeight: true
//     });
// }


function checkFollowScroll(){
    currentItem = 0;
    scrollTarget = window.pageYOffset+($(window).outerHeight()/2);

    // $('#scrollguide').css('top', scrollTarget+'px');
    // $('#menu-icon').html(scrollTarget);
    for(x=0;x<scrollItems.length;x++){
        // console.log('---'+x+'---');
        // console.log(scrollItems[x].min);
        // console.log(scrollTarget);
        // console.log(scrollItems[x].max);
        // console.log('------');

        if(scrollTarget>scrollItems[x].min && scrollTarget<scrollItems[x].max){
          currentItem = x;
          break;
      }
    }

    return currentItem;
}

$('#main-menu .main li').on('mouseenter',function (){
    hoverIndex = $('#main-menu .main li').index(this);

    $('#main-menu .main li').removeClass(('active'));
    $(this).addClass(('active'));
    $('#hovermenu li').removeClass(('active'));

    setTimeout(function (){
        $('#hovermenu li').eq(hoverIndex).addClass(('active'));
    },500);
});

$('#menu-icon').on('click',function (){
    showMenu();
});

function showMenu(){
    $('#main-menu').addClass('active');
    $('section').addClass('fade-out');
    $('#main-menu').css('z-index',10);

    setTimeout(function (){
        $('#main-menu .main li').first().addClass('active');
        $('#hovermenu li').first().addClass('active');
    },500);

    showMenuItems();
}

function showMenuItems() {
    var time = 100;
    $('#main-menu ul.main li').each(function() {
        var tg = $(this);
        setTimeout( function(){ $(tg).find('a').addClass('active'); }, time)
        time += 100;
    });
  }

function hideMenuItems() {
    var time = 100;
    $('#main-menu ul.main li').each(function() {
        var tg = $(this);
        setTimeout( function(){ 
            $(tg).find('a').removeClass('active');
         }, time);
        time += 100;
    });
}

$('#main-menu .main li a').on('click', function(evt){
    var link = $(this).attr("href");
    if (link.includes("mailto")){}
    else if (link=="#"){ }
    else if(link.length>1 && link.includes("http") && $(this).attr("target")){}
    else if(link.length>1 && link.includes("http")){
        hideMenu();
        evt.preventDefault();
        hideMenu();
        setTimeout(function() {
        window.location.href = link;
        }, 800);
    }
});

$('#menu-close').on('click',function (){
    hideMenu();
});

function hideMenu(){
    $('#main-menu .main li').removeClass('active');
    $('#hovermenu li').removeClass('active');
    $('section').removeClass('fade-out');
    $('section').addClass('fade-in');
    hideMenuItems();

    $('#main-menu').removeClass('active');

    setTimeout(function (){
        $('#main-menu').css('z-index','auto');
    },600);
}

var conController = new ScrollMagic.Controller({globalSceneOptions: {}});

function createMagicMain(){
    var conClass = [];

    conScene = new Array();

    // if($('.scrolling-text').length){
    //     $('.scrolling-text').each(function (){
    //         targ  = $(this);
    //         newscene = new ScrollMagic.Scene({triggerElement: "#"+$(this).attr('id'),duration: $(targ).outerHeight()})
    //             .on("enter", function () {
    //             })
    //             .on("leave", function () {
    //             }).on("refresh", function (d) {
    //             })
    //             .on("progress", function (d) {
    //                 if($(targ).find('.scroll-text').hasClass('bottom-to-top')){
    //                     console.log('rotate(90deg) translateX('+(d.progress*20)+'%)');
    //                     $(targ).find('.scroll-text').css('transform','rotate(90deg) translateX('+(d.progress*20)+'%)');
    //                 }
    //                 else
    //                     $(targ).find('.scroll-text').css('transform','translateX('+(d.progress*30)+'%)');
    //             })
    //             // .addIndicators({name: "test"}) // add indicators (requires plugin)
    //             .addTo(conController);

    //         scene.push(newscene);
    //     });
    // }

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
                    words  = $(tg).find('.revealtexts span').length;
                    range = 100/words;
                    currentWords = Math.round((d.progress*100) / range);
                    if(d.scrollDirection=="FORWARD") {
                        for(x=0;x<currentWords;x++){
                            t = $(tg).find('span').eq(x+1);
                            if(!$(t).hasClass('active'))
                                $(tg).find('span').eq(x+1).addClass('active');
                        }
                    } else {
                        for(x=words;x>currentWords;x--){
                            t = $(tg).find('span').eq(x);
                            if($(t).hasClass('active'))
                                $(t).removeClass('active');
                        }
                    }

                })
                // .addIndicators({name: "test"+indx}) // add indicators (requires plugin)
                .addTo(conController);

            scene.push(newscene);
            indx++;
        });
    }
    
    /************************************************* HOME MAGIC *******************************/

    if($('#scrollHeight').length){

        // build scene
        newscene = new ScrollMagic.Scene({triggerElement: "#sec1",duration: $("#sec1").height()})
            .on("enter", function () {
                // trigger animation by changing inline style.
                currentScroll = 0;
                scrollChange();
                $('#fixedCopy').removeClass('dark');
            })
            .on("leave", function () {
                // reset style
                lastScroll = 0;
            }).on("refresh", function (d) {
                // trigger animation by changing inline style.
                //console.log('refreshing '+d);
            })
            .on("progress", function (d) {
                $('#fixedCopy .section').eq(currentScroll).find('.scroll-text').css('top',((window.pageYOffset - document.getElementById('who').offsetTop)/2)+'px');
            })
            // .addIndicators({name: "1"})
            .addTo(conController);

        scene.push(newscene);


        // build scene
        newscene = new ScrollMagic.Scene({triggerElement: "#sec2", duration: $("#sec2").height()})
            .on("enter", function () {
                // trigger animation by changing inline style.
                currentScroll = 1;
                scrollChange();
                $('#fixedCopy').removeClass('dark');
            })
            .on("progress", function () {
                rgb = 180-(250* (((window.pageYOffset) - document.getElementById('who').offsetTop)/scrollHeight));
                textScroll = (window.pageYOffset - ($('#who').offset().top + $('#scrollHeight div').eq(currentScroll).outerHeight()))/2 ;
                $('#fixedCopy .section').eq(currentScroll).find('.scroll-text').css('left','-'+textScroll+'px');
            }).on("refresh", function (d) {
                // trigger animation by changing inline style.
                //console.log('refreshing '+d);
            })
            .on("leave", function () {
                // reset style
                lastScroll = 1;
            })
            // .addIndicators({name: "2"})
            .addTo(conController);

        scene.push(newscene);

        // build scene
        newscene = new ScrollMagic.Scene({triggerElement: "#sec3", duration: $("#sec3").height()})
            .on("enter", function () {
                // trigger animation by changing inline style.
                currentScroll = 2;
                scrollChange();
                rgb = 180-(250* (((window.pageYOffset) - document.getElementById('who').offsetTop)/scrollHeight));
                $('#fixedCopy').addClass('dark');
            })
            .on("progress", function (d) {
                $('#fixedCopy .section').eq(currentScroll).find('.quote').css('transform','translateX(-'+(d.progress*100)+'%)');
                $('#fixedCopy .section').eq(currentScroll).find('.founder-image').css('transform','translateX('+(d.progress*15)+'%)');
            }).on("refresh", function (d) {
                // trigger animation by changing inline style.
                //console.log('refreshing '+d);
            })
            .on("leave", function () {
                // reset style
                lastScroll = 2;
            })
            // .addIndicators({name: "3"}) // add indicators (requires plugin)
            .addTo(conController);

        scene.push(newscene);

        // build scene
        newscene = new ScrollMagic.Scene({triggerElement: "#mainScrollStart",duration: $("#scrollHeight").height()})
            .setPin("#fixedCopy")
            .on("enter", function () {
                // trigger animation by changing inline style.
                $('#fixedCopy').addClass('show');
                $('#who').addClass('active');

                fixedCopyActive = 1;
            }).on("progress", function (d) {
                // trigger animation by changing inline style.
                // console.log(d);

                if(currentScroll>0){
                    rgb = 180-(250*d.progress);
                }
                else {
                    rgb = 255-(255*d.progress);
                }

                $('#fixedCopy').css('background-color','rgb('+Math.floor(rgb)+','+Math.floor(rgb)+','+Math.floor(rgb)+')');
            }).on("refresh", function (d) {
                // trigger animation by changing inline style.
                //console.log('refreshing '+d);
            })
            .on("leave", function () {
                fixedCopyActive = 0;
                // reset style
                // $('#fixedCopy .section').eq(lastScroll).find('.slide-in-bottom').addClass('slide-out-bottom');
                // $('#fixedCopy .section').eq(lastScroll).find('.slide-in-right').addClass('slide-out-left');
                // $('#fixedCopy .section').eq(lastScroll).find('.scroll-text.horizontal').addClass('slide-out-top');
                // $('#fixedCopy .section').eq(lastScroll).find('.scroll-text.vertical').addClass('slide-top-out');
                // $('#fixedCopy .section').eq(lastScroll).find('.fade-in-1s').addClass('fade-out');
                // $('#fixedCopy .nav-text').eq(lastScroll).find('.fade-in-top').addClass('fade-out-top');
                $('#fixedCopy').removeClass('show');
                $('#fixedCopy').removeClass('dark');

                setTimeout(function(){
                    fixedCopyActive = 0;
                    $('#who').removeClass('active');
                    $('#fixedCopy .section').removeClass('active');
                    // $('#fixedCopy .section .scroll-text.horizontal').removeClass('slide-out-top');
                    // $('#fixedCopy .section .scroll-text.vertical').removeClass('slide-top-out');
                    // $('#fixedCopy .section .slide-out-bottom').removeClass('slide-out-bottom');
                    // $('#fixedCopy .section .slide-out-left').removeClass('slide-out-left');
                    // $('#fixedCopy .section .fade-out').removeClass('fade-out');
                    // $('#fixedCopy .nav-text .fade-out-top').removeClass('fade-out-top');
                },800);
            })
            // .addIndicators({name: "Main"}) // add indicators (requires plugin)
            .addTo(conController);

        scene.push(newscene);
    }

    // if($('.top-banner .scroll-text').length){
    //     targ2 = $('.top-banner .scroll-text');
    //     newscene = new ScrollMagic.Scene({triggerElement: '.top-banner',duration: $('.top-banner').outerHeight()*2})
    //         .on("enter", function () {
    //         })
    //         .on("leave", function () {
    //         }).on("refresh", function (d) {
    //         })
    //         .on("progress", function (d) {
    //             $(targ2).css('transform','rotate(90deg) translateX('+(d.progress*140)+'%)');
    //         })
    //         // .addIndicators({name: "test"}) // add indicators (requires plugin)
    //         .addTo(conController);

    //     scene.push(newscene);
    // }

    if($('.top-banner-overflow .scroll-text').length){
        targ2 = $('.top-banner-overflow .scroll-text');
        newscene = new ScrollMagic.Scene({triggerElement: '.top-banner-overflow .scrollTrigger',duration: $('.top-banner-overflow').outerHeight()})
            .on("enter", function () {
            })
            .on("leave", function () {
            }).on("refresh", function (d) {
            })
            .on("progress", function (d) {
                $(targ2).find('.inner').css('transform','rotate(90deg) translateX('+(d.progress*80)+'%)');
            })
            // .addIndicators({name: "test"}) // add indicators (requires plugin)
            .addTo(conController);

        scene.push(newscene);
    }


    if($('.policy-scroller').length){
        for(x=0;x<$('.scroll-item').length;x++){
            // build scene
            conClass = new ScrollMagic.Scene({triggerElement: ".item_"+x, duration: $('.scroll-item').eq(x).outerHeight()})
                .on("enter", function () {
                    // trigger animation by changing inline style.
                    // console.log('ENTER:' +x);
                    $(this.triggerElement()).addClass('active');
                    $('.floating-links .link').eq($('.scroll-item').index($(this.triggerElement()))).addClass('active');

                    // console.log($('.consult_id_'+x))
                }).on("progress", function (d) {
                    // trigger animation by changing inline style.
                    // console.log(d);
                }).on("refresh", function (d) {
                    // trigger animation by changing inline style.
                })
                .on("leave", function () {
                    // reset style
                    $(this.triggerElement()).removeClass('active');
                    $('.floating-links .link').removeClass('active');
                    // console.log($('.consult_id_'+x))
                })
//                 .addIndicators({name: "scroll"+x})
                .addTo(conController);

            scene.push(conClass);
        }

        newscene = new ScrollMagic.Scene({triggerElement: "#scrollerstart",duration: $("#scroller").height() - $(window).outerHeight()})
            .setPin("#floating-links")
            .on("enter", function () {
            }).on("progress", function (d) {
                // $('.follow-section .scroll-text').css('bottom',(d.progress*100)+'%');
            }).on("refresh", function (d) {
                // trigger animation by changing inline style.
            })
//             .addIndicators({name: "MAIN"})
            .on("leave", function () {
            })
            .addTo(conController);

        scene.push(conClass);
    }

    for(x=1;x<=$('.scroll-section').length;x++){
        // build scene
        conClass = new ScrollMagic.Scene({triggerElement: ".consult_id_"+x, duration: $('.scroll-section').height()})
            .on("enter", function () {
                // trigger animation by changing inline style.
                // console.log('ENTER:' +x);
                $(this.triggerElement()).addClass('active');
                slideIndex = $('.scroll-section').index($(this.triggerElement()));
                $('.floating-links .link').eq($('.scroll-section').index($(this.triggerElement()))).addClass('active');
                $('.follow-section .images img').eq($('.scroll-section').index($(this.triggerElement()))).addClass('active');

                if($('#consultancy-carousel').hasClass('slick-initialized'))
                    setTimeout(function(){
                        $('#consultancy-carousel').slick('slickGoTo',slideIndex);
                    },300);

                // console.log($('.consult_id_'+x))
            }).on("progress", function (d) {
                // trigger animation by changing inline style.
                // console.log(d);
            }).on("refresh", function (d) {
                // trigger animation by changing inline style.
                //console.log('refreshing '+d);
            })
            .on("leave", function () {
                // reset style
                $(this.triggerElement()).removeClass('active');
                $('.floating-links .link').removeClass('active');
                $('.follow-section .images img').removeClass('active');
                // console.log($('.consult_id_'+x))
            })
            // .addIndicators({name: "scrollx"})
            .addTo(conController);

        scene.push(conClass);
    }

    newscene = new ScrollMagic.Scene({triggerElement: "#scroll-start",duration: $(".follow-section").height() - $(window).outerHeight()})
        .setPin(".floating-content")
        .on("enter", function () {
        }).on("progress", function (d) {
            // $('.follow-section .scroll-text').css('bottom',(d.progress*100)+'%');
            $('.follow-section .scroll-text').css('transform','rotate(90deg) translatex(-'+ (d.progress*50)+'%)');

        }).on("refresh", function (d) {
            // trigger animation by changing inline style.
            //console.log('refreshing '+d);
        })
        // .addIndicators({name: "scrolltext"})
        .on("leave", function () {
        })
        .addTo(conController);

    scene.push(conClass);
}
// Resize
window.addEventListener("resize", function() {
    destroyMagicControllerMain();
    conController = new ScrollMagic.Controller({globalSceneOptions: {}});
    createMagicMain();
});

$(document).ready(function(e){
    createMagicMain();
    var images = document.querySelectorAll('.parallax-img');
    new simpleParallax(images, {
        delay: .6,
        transition: 'cubic-bezier(0,0,0,1)'
    });

    if($('.clients-carousel').length){
        $('.clients-carousel').slick({
            dots: false,
            arrows: true,
            infinite: true,
            fade: true,
            speed: 1000,
            slidesToShow: 1,
            slidesToScroll: 1,
            appendArrows: '#client-navs'
        });
    }

    if($('.testimonial-carousel').length){
        $('.testimonial-carousel').slick({
            dots: false,
            arrows: true,
            infinite: true,
            fade: true,
            speed: 1000,
            slidesToShow: 1,
            slidesToScroll: 1,
        });
    }

    if($('.text-carousel').length){

        if($('.text-carousel-extension').length){

            $('.text-carousel').slick({
                arrows: false,
                dots: true,
                appendDots: '.dots-wrap',
                asNavFor: '.text-carousel-extension',
                adaptiveHeight: true
            });
            $('.text-carousel-extension').slick({
                arrows: false,
                dots: false,
                fade: true,
                asNavFor: '.text-carousel',
                adaptiveHeight: true
            });
        } else {
            $('.text-carousel').slick({
                arrows: false,
                dots: true,
                appendDots: '.dots-wrap',
                adaptiveHeight: true
            });
        }
    }

    if($('.blogs-carousel').length){
        $('.blogs-carousel').slick({
            arrows: false,
            dots: true,
            slidesToShow: 3,
            slidesToScroll: 1,
            appendDots: '.blogs-dots',
            adaptiveHeight: true,
            responsive: [
                {
                    breakpoint: 991,
                    settings: {
                        slidesToShow: 2,
                        dots: false
                    }
                },
                {
                    breakpoint: 520,
                    settings: {
                        slidesToShow: 1,
                        dots: false
                    }
                },
            ]
        });
    }

    if($('.box-icon-carousel').length){
        if($('#box-icon-nav').length){
            $('.box-icon-carousel').slick({
                dots: true,
                arrows: false,
                infinite: true,
                speed: 1000,
                slidesToShow: 3,
                slidesToScroll: 1,
                responsive: [
                    {
                        breakpoint: 991,
                        settings: {
                            slidesToShow: 2,
                            appendDots: '#box-icon-nav-bot',
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
        else {
            $('.box-icon-carousel').slick({
                dots: false,
                arrows: false,
                infinite: true,
                speed: 1000,
                slidesToShow: 3,
                slidesToScroll: 1,
                responsive: [
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
    }

    if($('.float-carousel').length){
        $('.float-carousel').on('init', function(event, slick, currentSlide, nextSlide) {
            $('.float-carousel .slick-active .body').addClass('fade-in-bottom');
            $('.float-carousel .slick-active .link').addClass('fade-in-left');
            // $('.team-text-carousel .slick-slide').eq(currentSlide).find('.anim').addClass('fade-in-left');
        });
        $('.float-carousel').slick({
            infinite: true,
            fade: true,
            nav: false,
            dots: false,
            arrows: false,
            autoplay: false,
            autoplaySpeed: 3000,
            slidesToShow: 1,
            slidesToScroll: 1,
            adaptiveHeight: true,
            responsive: [
                {
                    breakpoint: 991,
                    settings: {
                        dots: true
                    }
                },
            ]
        });
        $('.float-carousel').on('beforeChange', function(event, slick, currentSlide, nextSlide) {
            // $('.team-text-carousel .slick-slide').eq(nextSlide).find('.anim').removeClass('fade-in-left');
            // $('.float-carousel .slick-slide').eq(currentSlide).find('.content').addClass('fade-out-fast');
            $('.float-carousel .body').removeClass('fade-in-bottom');
            $('.float-carousel .link').removeClass('fade-in-left');
        });
        $('.float-carousel').on('afterChange', function(event, slick, currentSlide, nextSlide) {
            $('.float-carousel .slick-active .body').addClass('fade-in-bottom');
            $('.float-carousel .slick-active .link').addClass('fade-in-left');
            // $('.team-text-carousel .slick-slide').eq(currentSlide).find('.anim').addClass('fade-in-left');
        });
    }

    if($('.floating-links .link a').length){
        $('.floating-links .link a').on('click', function (e){
            e.preventDefault();

            window.scrollTo({top: $($(this).attr('href')).offset().top - ($('#header').outerHeight()*2), behavior: 'smooth'});

            // console.log($(this).index('.floating-links .link a')+1);
            // setTimeout(function(){
            //     $('#consultancy-carousel').slick('slickGoTo',$(this).index('.floating-links .link a')+1);
            // },300);
            //
            // document.querySelector($(this).attr('href')).scrollIntoView({
            //     behavior: 'smooth'
            // });
        })
    }

    if($('.tabs-nav').length){
        $('.tabs-nav button').on('click', function(){
            indx = $(this).index('.tabs-nav button');
            // $('.tabs-nav button').removeClass('active');
            // $(this).addClass('active');
            // $('.tabs-content').removeClass('active');
            // $('.tabs-content').eq(indx).addClass('active');

            $(this).closest('.slick-slider').slick('slickGoTo',indx);
            $('.process-carousel').slick('slickGoTo',indx);
        });
    }

    if($('.box-tab-nav button').length){
        $('.box-tab-nav button').on('click', function(){
            $('.box-tab-nav button').removeClass('active');

            $(this).addClass('active');
            index = $(this).index('.box-tab-nav button');

            $('.box-tab-content').removeClass('active');
            $('.box-tab-content').eq(index).addClass('active');

//             if($('.box-tab-content').eq(index).hasClass('.slick-initialized'))
            $('.slick-slider').slick('refresh');
        });
    }

    if($('#service-select').length){
        $('#service-select').on('change', function(){
            $('.new-line-box').removeClass('active');
            $('.term_id_'+$(this).val()).addClass('active');
        });
    }

    if($('.horizontal-figures').length){
        $('.horizontal-figures').on('mouseover', function(){
            $('.horizontal-figures .figure.active').removeClass('active');
        });
        $('.horizontal-figures').on('mouseout', function(){
            $('.horizontal-figures .figure').first().addClass('active');
        });
    }
});

function destroyMagicControllerMain() {
    conController.destroy(true);
    if(scene.length)
        for(x=0;x<scene.length;x++) {
            if(scene[x].length)
                scene[x].destroy(true);
        }
}

$('body').addClass('load');	


let previousScrollPosition = 0;

const isScrollingDown = () => {
  let goingDown = false;

  let scrollPosition = window.pageYOffset;

  if (scrollPosition > previousScrollPosition) {
    goingDown = true;
  }

  previousScrollPosition = scrollPosition;

  return goingDown;
};

const handleScroll = () => {
  if (isScrollingDown()&&window.pageYOffset>10) {
    $('#header').addClass('hide');
  } else {
    $('#header').removeClass('hide');
  }

  lastScroll = window.pageYOffset;
};

window.addEventListener("scroll", handleScroll);

$('#submenulink').on('click', function(e){
    e.preventDefault();
    $('#submenu').toggleClass('active');
    $('#main-menu ul').toggleClass('hideitems');

    setTimeout(function(){
        $('#submenu').addClass('show')
    },100);
});

$('#submenu .back').on('click', function(e){
    e.preventDefault();
    $('#submenu').removeClass('show');

    setTimeout(function(){
        $('#submenu').removeClass('active');
        $('#main-menu ul').removeClass('hideitems');
    },500);

});