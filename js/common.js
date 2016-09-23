"use strict";

$(document).ready(function() {

    function hidePreloader() {
        $('.page-loader').css('display','none');
    }


    var settings = function () {
        var wh=$(window).height();
        $('.page-loader').css({'height': wh + 'px'});
        $('.left-side').css({'height': wh + 'px'});
        $('.item').css({'height': wh + 'px'});
    };

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
        prevEffect: 'fade'

    });


    setTimeout(hidePreloader, 3000);
    settings();

    


    /*  =========== Resize ============*/
    $(window).resize(function() {
        settings();
    });

});