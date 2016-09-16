"use strict";

$(document).ready(function() {

    function hinePreloader() {
        $('.page-loader').css('display','none');
    }


    var settings = function () {
        var wh=$(window).height();
        $('.page-loader').css({'height': wh + 'px'});
        return wh;
    };

    setTimeout(hinePreloader, 3000);
    settings();





    /*  =========== Resize ============*/
    $(window).resize(function() {
        settings();
    });

});