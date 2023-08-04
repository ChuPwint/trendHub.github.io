$(document).ready(function() {

    $('.noti').on('click', function() {
        const index = $(this).index();
        $('.message').hide();
        $('.message').eq(index).show();
    });

    $('#notiSort').on('change', function() {
        
    })

})