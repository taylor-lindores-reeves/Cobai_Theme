
jQuery(document).ready(function($) {


            var numClicks = 0;

            $('.site-header__menu-icon').on('tap click', function() {
                onClick="";
                numClicks++;
                if (numClicks%2 == 0) {
                    $('.site-header-main-logo').fadeIn(300);
                } else {
                    $('.site-header-main-logo').fadeOut(200);

                }
            });

        $('.site-header__menu-icon').click(function(){
            $('.site-header').toggleClass('site-header--is-expanded');
            $(this).toggleClass('site-header__menu-icon--close-x');
            $('.site-header__menu-content').toggleClass('site-header__menu-content--is-visible');
        });




});
