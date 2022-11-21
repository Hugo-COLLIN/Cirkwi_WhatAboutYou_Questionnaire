$(function($) {
    $('button').click(function() {
        $(this).toggleClass('menu-button-deployed').next().toggleClass('menu-content-deployed');
    });
});