$(function(){
 
    $(document).on( 'scroll', function(){
 
        if ($(window).scrollTop() > 20) {
            $('.navbar-fixed-top').removeClass('navbar-no-bg');
        } else {
            $('.navbar-fixed-top').addClass('navbar-no-bg');
        }
    });
});