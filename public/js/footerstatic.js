$(document).ready(function(){
    $('.foot-inner').toggleClass('show');
    $('#foottog').click(function(event){
        event.preventDefault();
        $('.foot-inner').toggleClass('show');
        $('.footer-toggle').toggleClass('active-arrow');
    });
});


$('.sf').click(function(event){
    var id = ".sec1";
    var offset = 255;
    var target = $(id).offset().top+offset;
    $('html,body').animate({
        scrollTop : target
    },500);
    event.preventDefault();
});


// (function(){
//     $(".footer-toggle").click(function(){
//         $(".foot-inner").slideToggle(function () {
//             $(this).toggleClass("show");
//         });
//     })
//
// })();