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

  /*  $(".bg-inna").offset(function(i,val){
        var wh=$(window).height();
        return {top:val.top + wh/4, left:val.left};
    });

   var translateLeftSide = function () {
        var wh=$(window).height();
        $('.bg-inna').position({top:-wh/4});
    };

*/
    $('.carousel').carousel({
        interval: 12000,
        pause: 0
    });


    setTimeout(hidePreloader, 3000);
    settings();

    


    /*  =========== Resize ============*/
    $(window).resize(function() {
        settings();


      /*  translateLeftSide();*/
    });

});