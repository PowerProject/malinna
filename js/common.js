/**
 * Created by Kovalyova Alena on 9/15/2016.
 */

$(document).ready(function() {
    var settings = function () {
        var wh=$(window).height();
        $('.page-loader').css({'height': wh + 'px'});
        return wh;
    };
    settings();




    /*  =========== Resize ============*/
    $(window).resize(function() {
        settings();
    });

});