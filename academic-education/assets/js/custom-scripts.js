$(document).ready(function() {
    $(document).on('click', '.search-toggle', function() {
        $('.search-field').animate({width:'toggle'},350);
        $(this).hide();
        $('.fa-times').show()
    })
    $(document).on('click', '.fa-times', function() {
        $('.search-field').animate({width:'toggle'},350);
        $('.search-toggle').show();
        $(this).hide()
    })
});