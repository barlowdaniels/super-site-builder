jQuery(document).ready(function($) {
    $('.faq').click(function() {
        if (!$(this).hasClass('active')) {
            $('.faq').removeClass('active');
            $(this).addClass('active');
        } else {
            $(this).removeClass('active');
        }
    });
});