"use strict";

$(document).ready(function() {



    function hidePreloader() {
        $('.page-loader').css('display','none');
    }

    function bodyOverflow() {
      $('.body').css('overflow', 'auto');

    }

    var settings = function () {
        var wh=$(window).height();
        $('.page-loader').css({'height': wh + 'px'});
        $('.left-side').css({'height': wh + 'px'});
        $('.item').css({'height': wh + 'px'});
    };

    setTimeout(hidePreloader, 3000);
    setTimeout(bodyOverflow, 3000);
    settings();

    $('.icon-menu').on('click',function() {

        $('.navMenu .overlay-sidebar').css('display', 'block');
        $(' .navMenu ul').css('transform', 'translateX(-200px)');
    });

    $(".overlay-sidebar").click(function(e) {
        if($(e.target).closest("ul").length==0) {
            $(".overlay-sidebar").css({"display":"none"});
            $(' .navMenu ul').css('transform', 'translateX(200px)');

        }
    });

    $(".navMenu a").click(function(e) {
            $(".overlay-sidebar").css({"display":"none"});
            $(' .navMenu ul').css('transform', 'translateX(200px)');

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






    /*  =========== Resize ============*/
    $(window).resize(function() {
        settings();
    });

});