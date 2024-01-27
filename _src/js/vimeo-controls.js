jQuery(document).ready(function($) {
    $('.vimeo-controls div').click(function() {
       $(this).parent().addClass('engaged');
       $(this).addClass('hide');
       if($(this).hasClass('play')) {
           $(this).parent().find('.pause').removeClass('hide');
       }
       if($(this).hasClass('pause')) {
           $(this).parent().find('.play').removeClass('hide');
       }
       if($(this).hasClass('mute')) {
           $(this).parent().find('.unmute').removeClass('hide');
       }
       if($(this).hasClass('unmute')) {
           $(this).parent().find('.mute').removeClass('hide');
       }
    });
})