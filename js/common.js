"use strict";

$(document).ready(function() {



    function hidePreloader() {
        $('.page-loader').css('display','none');
    }

    function bodyOverflow() {
      $('.body').css('overflow', 'auto');

    }



    setTimeout(hidePreloader, 3000);
    setTimeout(bodyOverflow, 3000);


    // SideBar

    $('.icon-menu').on('click',function() {
        $('.sidebar').toggleClass('active');
        $('.navMenu .overlay-sidebar').css('display', 'block');
        $('body').css('overflow', 'hidden');

    });

    $(".overlay-sidebar, a").click(function(e) {
            $('.sidebar').removeClass('active');
            $(".overlay-sidebar").css({"display":"none"});
             $('body').css('overflow', 'auto');

    });
    //  End SideBar


    /* Anchor scroll*/

    $('.navMenu ul a').click( function(){
        var scroll_el = $(this).attr('href');
        var ww=$(window).width();
        if ($(scroll_el).length != 0 && ww>991) {
                $('html, body').animate({ scrollTop: $(scroll_el).offset().top-45 }, 500);
        } else {
            $('html, body').animate({ scrollTop: $(scroll_el).offset().top}, 500);
        }
        return false;
    });



    //Bootstrap Slider
    $('.carousel').carousel({
        interval: 12000,
        pause: 0
    });

    //FancyBox
    $(".fancybox").fancybox({
        openEffect: 'fade',
        closeEffect: 'fade',
        nextEffect: 'fade',
        prevEffect: 'fade',
        padding: 0
    });

    $('.fancy').on('click', function (){
        $.fancybox.open([
            {
                href : '../img/map2.jpg',

            }, {
                href : '../img/map3.jpg',

            }, {
                href : '../img/map4.jpg'
            }
        ], {
            padding: 0,
            'transitionIn': 'none',
            'transitionOut': 'none',
            'type': 'image',
            'changeFade': 0
        });
    });



    /*  =========== Resize ============*/
    $(window).resize(function() {
        settings();
    });


    /*  =========== Scroll ============*/
    $(window).scroll(function() {
        var ww=$(window).width();


            if ($(window).scrollTop() > $('#price').offset().top-50) {
                $('header').css('position', 'fixed');
                $('.navMenu').css({
                    'background': '#fffcff', 'box-shadow': '0px 4px 8px -4px rgba(129, 57, 100, 0.55)',
                    'animation': 'top-header 2s'});
            } else {
                $('header').css('position', 'absolute');
                $('.navMenu').css({'background': 'transparent', 'box-shadow': 'none'});
            }


    });

});
