$(function() {
    $(document).on('click', '.delete', function(e) {
        e.preventDefault();
        var conf = confirm('Are you sure you want to delete this record?');
        if(conf) {
            window.location = $(this).attr('href');
        }
    }).on('click', '.new-comment', function(e) {
        e.preventDefault();
        $(this).fadeOut(function() {
            $('.comment-form').slideDown();
            $('html, body').animate({scrollTop: $(document).height()}, 'slow');
            return false;
        });
    });
    if($('.comment-form').is(':visible')) {
        $('.new-comment').trigger('click');
    }
});