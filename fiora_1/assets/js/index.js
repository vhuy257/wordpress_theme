var $ = jQuery;

$('document').ready(function(){
    $(window).scroll(function (event) {
        var scroll = $(window).scrollTop();
        if ( scroll > 400) {
            $('.top-header').addClass('sticky');
        } else {
            $('.top-header').removeClass('sticky');
        }
    });
});
