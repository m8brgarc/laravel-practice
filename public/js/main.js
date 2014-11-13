$(function() {
    $(document).on('click', '.delete', function(e) {
        e.preventDefault();
        var conf = confirm('Are you sure you want to delete this record?');
        if(conf) {
            window.location = $(this).attr('href');
        }
    });
});