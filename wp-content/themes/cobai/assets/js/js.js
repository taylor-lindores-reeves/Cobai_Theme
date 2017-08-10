
jQuery(document).ready(function($) {


        $('.site-header__menu-icon').click(function(){
            $('.site-header').toggleClass('site-header--is-expanded');
            $(this).toggleClass('site-header__menu-icon--close-x');
            $('.site-header__menu-content').toggleClass('site-header__menu-content--is-visible');
        });



});
