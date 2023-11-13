

if($('.figure-carousel').length){

    $('.figure-carousel').slick({
        dots: true,
        arrows: false,
        infinite: true,
        fade: true,
        speed: 1000,
        slidesToShow: 1,
        slidesToScroll: 1,
    });

    $('.figure-carousel').on('beforeChange', function(event, slick, currentSlide, nextSlide) {
        // $('.team-text-carousel .slick-slide').eq(nextSlide).find('.anim').removeClass('fade-in-left');
        $('.figure-carousel .slick-slide').eq(currentSlide).find('.content').addClass('fade-out-fast');
    });

    $('.figure-carousel').on('afterChange', function(event, slick, currentSlide, nextSlide) {
        $('.figure-carousel .slick-slide .content').removeClass('fade-out-fast');
        // $('.team-text-carousel .slick-slide').eq(currentSlide).find('.anim').addClass('fade-in-left');
    });
}

if($('.full-width-image-carousel').length){
    $('.full-width-image-carousel').slick({
        infinite: true,
        dots: false,
        autoplay: false,
        autoplaySpeed: 3000,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
    });

    // Fiddle me this...
    // Event to initiate drag, include touchstart events
    $('.full-width-image-carousel').on('mousedown', function(e){

        // Drag start logic
        // ...
        console.log('drag has started');

        $('.full-width-image-carousel .slick-current img').addClass('dragging');

        // Event to end drag, may want to include touchend events
        $(this).one('mouseup', function(e){

            $(this).off('mousemove');
            // Drag stop logic
            // ...

            console.log('drag has stopped');
            $('.full-width-image-carousel img').removeClass('dragging');

        }).on('mousemove', function(e){

            // Logic for dragging, can get mouse position
            // will probably want to throttle
            // possibly include touchmove events also
            console.log('drag move', e.pageX);

        });

    });
}

$(window).resize(function(e){
    checkMobile();
    // for (var i = 0; i < scene.length; i++) {
    //     scene[i].refresh();
    // }
});

function checkMobile(){
    if(window.innerWidth < 991) {
        if($('.logo-carousel-3').first().hasClass('slick-initialized')){
            $('.logo-carousel-3').first().slick('unslick');
        }
    } else {
        if(!$('.logo-carousel-3').first().hasClass('slick-initialized')){
            desktopOnlySlider();
        }
    }
}

checkMobile();

function mobileOnlySlider() {
}

function desktopOnlySlider() {
    if($('.logo-carousel-3').length){
        $('.logo-carousel-3').first().slick({
            infinite: true,
            dots: false,
            autoplay: false,
            autoplaySpeed: 3000,
            slidesToShow: 3,
            slidesToScroll: 1,
            arrows: false,
        });
    }
}