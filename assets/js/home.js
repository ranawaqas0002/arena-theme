var whoTop = document.getElementById('who').offsetTop;
var next = document.getElementById('about').offsetTop;
var scrollHeight = document.querySelector('#scrollHeight').offsetHeight;
var heightCenter = window.innerHeight / 2;
var headerHeight = $('#header').outerHeight();
var scrollSections = [];
var scrollindex = 0;

$('.horizontal-slide').slick({
    dots: true,
    arrows: false,
    fade: true,
    autoplaySpeed: 7000,
    autoplay: true,
});

// On before slide change
$('.horizontal-slide').on('beforeChange', function(event, { slideCount: count }, currentSlide, nextSlide){
  $('.landingvideo').removeClass('active').eq(nextSlide).addClass('active');
});

$('#scrollHeight div').each(function(){
    scrollSections[scrollindex] = {
        top: scrollindex == 0 ? this.offsetTop : this.offsetTop - whoTop,
        bottom: (this.offsetTop - whoTop) + this.offsetHeight - 1
    }
    scrollindex++;
});

$(document).ready(function(){
    // $(window).scroll(function(){
    //     checkScroll();
    // });
    // checkScroll();

    $('.sector-carousel').slick({
        arrows: false,
        dots: true,
        appendDots: '#sectors .dots-wrap'
    });
    initialCheckWidth();
});

var browserbreak = false;
var previousWidth = $(window).outerWidth();

$(window).resize(function(){
    checkWidth();
});

function checkWidth(){
    if($(window).outerWidth() < previousWidth && $(window).outerWidth() < 991){
        if($('#landing .slick-slider').hasClass('vertical-dots'))
            $('#landing .slick-slider').removeClass('vertical-dots').addClass('horizontal-dots');
    } else if($(window).outerWidth() > previousWidth && $(window).outerWidth() >= 991){
        if($('#landing .slick-slider').hasClass('horizontal-dots'))
            $('#landing .slick-slider').removeClass('horizontal-dots').addClass('vertical-dots');
    }
    previousWidth = $(window).outerWidth();
}

function initialCheckWidth(){
    if($(window).outerWidth() < 991){
        if($('#landing .slick-slider').hasClass('vertical-dots'))
            $('#landing .slick-slider').removeClass('vertical-dots').addClass('horizontal-dots');
    } else if($(window).outerWidth() >= 991){
        if($('#landing .slick-slider').hasClass('horizontal-dots'))
            $('#landing .slick-slider').removeClass('horizontal-dots').addClass('vertical-dots');
    }
    previousWidth = $(window).outerWidth();
}

// var lastScroll = 99, currentScroll = 0; scrollChange = false;

function checkScroll(){
    centerScroll = window.pageYOffset + $(window).outerHeight()/2;

    if(window.pageYOffset<whoTop && $('#fixedCopy').hasClass('show')){
        // scrollChange = false
        // lastScroll = 99;
        // currentScroll = 99;
        //
        // $('#fixedCopy .section .slide-out-bottom').removeClass('slide-out-bottom');
        // $('#fixedCopy .section .fade-out').removeClass('fade-out');
        // $('#fixedCopy').removeClass('show');
        // $('#who').removeClass('active');
        //
        // $('#fixedCopy .section').eq(0).find('.slide-in-bottom').addClass('slide-out-bottom');
        // $('#fixedCopy .section').eq(0).find('.slide-in-right').addClass('slide-out-left');
        // $('#fixedCopy .section').eq(0).find('.fade-in-1s').addClass('fade-out');
        //
        // setTimeout(function () {
        //     $('#fixedCopy .section').removeClass('active');
        //
        //     $('#fixedCopy .section .slide-out-bottom').removeClass('slide-out-bottom');
        //     $('#fixedCopy .section .slide-out-left').removeClass('slide-out-left');
        //     $('#fixedCopy .section .fade-out').removeClass('fade-out');
        // }, 600);
    }

    else if(window.pageYOffset>next && $('#fixedCopy').hasClass('show')){

    }

    else if((window.pageYOffset)>=whoTop && (window.pageYOffset)<=next){
        $('#fixedCopy .nav-texts').css('filter','invert('+(percentScrolled+.20)+')');

    } else {
        $('#fixedCopy').removeClass('show');
        $('#fixedCopy').removeClass('dark');
        $('#fixedCopy .section').removeClass('active');
    }
}

function numBet(minNum, betNum, maxNum){
    return (betNum > minNum && betNum < maxNum) ? true : false;
}

$('.figure-carousel').slick({
    dots: true,
    arrows: false,
    infinite: true,
    fade: true,
    speed: 1000,
    slidesToShow: 1,
    slidesToScroll: 1,
    asNavFor: '.figure-carousel-images'
});


$('.figure-carousel').on('beforeChange', function(event, slick, currentSlide, nextSlide) {
    // $('.team-text-carousel .slick-slide').eq(nextSlide).find('.anim').removeClass('fade-in-left');
    $('.figure-carousel .slick-slide').eq(currentSlide).find('.content').addClass('fade-out-fast');
});

$('.figure-carousel').on('afterChange', function(event, slick, currentSlide, nextSlide) {
    $('.figure-carousel .slick-slide .content').removeClass('fade-out-fast');
    // $('.team-text-carousel .slick-slide').eq(currentSlide).find('.anim').addClass('fade-in-left');
});

$('.figure-carousel-images').slick({
    dots: false,
    arrows: false,
    infinite: true,
    speed: 1000,
    slidesToShow: 1,
    slidesToScroll: 1,
    asNavFor: '.figure-carousel',
});

var lastScroll = 99, currentScroll = 0; fixedCopyActive = 0;

function scrollChange(){

    $('#fixedCopy .section').eq(lastScroll).find('.slide-in-bottom').addClass('slide-out-bottom');
    $('#fixedCopy .section').eq(lastScroll).find('.slide-in-right').addClass('slide-out-left');
    $('#fixedCopy .section').eq(lastScroll).find('.fade-in-1s').addClass('fade-out');
    $('#fixedCopy .nav-text').eq(lastScroll).find('.fade-in-top').addClass('fade-out-top');
    $('#fixedCopy .section').eq(lastScroll).find('.scroll-text.horizontal').addClass('slide-out-top');
    $('#fixedCopy .section').eq(lastScroll).find('.scroll-text.vertical').addClass('slide-bottom-out');

    $('#fixedCopy .nav-indicator ul li').removeClass('active');
    $('#fixedCopy .nav-indicator ul li').eq(currentScroll).addClass('active');

    setTimeout(function (){
        $('#fixedCopy .section').removeClass('active');
        $('#fixedCopy .nav-text').removeClass('active');

        if(fixedCopyActive)
            $('#fixedCopy .section').eq(currentScroll).addClass('active');

        $('#fixedCopy .nav-text').eq(currentScroll).addClass('active');
        
        $('#fixedCopy .section').eq(currentScroll).find('.scroll-text.horizontal').removeClass('slide-out-top');
        $('#fixedCopy .section').eq(lastScroll).find('.scroll-text.vertical').removeClass('slide-bottom-out');

        $('#fixedCopy .section').eq(currentScroll).find('.slide-out-bottom').removeClass('slide-out-bottom');
        $('#fixedCopy .section').eq(currentScroll).find('.slide-out-left').removeClass('slide-out-left');
        $('#fixedCopy .section').eq(currentScroll).find('.fade-out').removeClass('fade-out');
        $('#fixedCopy .nav-text').eq(currentScroll).find('.fade-out-top').removeClass('fade-out-top');
    },300);
}

$(document).ready(function(){

});


if($('.line-icon-carousel-four').length){
    $('.line-icon-carousel-four').slick({
        dots: true,
        arrows: false,
        infinite: true,
        speed: 1000,
        slidesToShow: 4,
        slidesToScroll: 1,
        centerMode: false,
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
                    slidesToShow: 1,
                    dots: true
                }
            },
        ]
    });
}

if($('.line-icon-carousel').length){
    $('.line-icon-carousel').slick({
        dots: false,
        arrows: false,
        infinite: true,
        speed: 1000,
        slidesToShow: 3,
        slidesToScroll: 1,
        centerMode: false,
        responsive: [
            {
                breakpoint: 991,
                settings: {
                    slidesToShow: 2,
                    dots: true
                }
            },
            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 1,
                    dots: true
                }
            },
        ]
    });
}

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