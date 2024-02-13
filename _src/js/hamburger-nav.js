// Hamburger menu open/close
jQuery(document).ready(function($) {
    var siteNav = $('.hamburger-nav-menu');
    $('.hamburger.open').click(function () {
        siteNav.addClass('show');
        $(this).removeClass('show')
        $('.hamburger.close').addClass('show');
    });
    $('.hamburger.close').click(function () {
        siteNav.removeClass('show');
        $(this).removeClass('show')
        $('.hamburger.open').addClass('show');
    });
});