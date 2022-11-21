/*$(function ()
{
    const btn = $(".menu-item > button");
    btn.click(function () {
       //$(".menu-content").addClass(".menu-content-deployed");
        alert("Ca a cliqué")
    })


});*/
/*
$(function() {
    $('button').click(function() {
        $(this).next().slideToggle('500').css('');
    });
    $('.enter').each().click(function() {
        $('.para').addClass('.active');
    });

});*/

$(function($) {
    $('button').click(function() {
        //$(this).next().slideToggle('500').css('');
        $(this).toggleClass('menu-button-deployed').next().toggleClass('menu-content-deployed');
    });

});