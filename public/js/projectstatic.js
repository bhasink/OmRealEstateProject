$('.team-item-click-area').on('click', function(){
    if ($(this).parent().hasClass('is--active')) {
        $(this).parent().removeClass('is--active');
    } else {
        $('.team-item').removeClass('is--active');
        $(this).parent().addClass('is--active');
    }
});



$('.team-item-description-close').on('click', function(){
    $('.team-item').removeClass('is--active');
    console.log('clicked!')
});

// $(document).ready(function() {
//     $('#lightgallery').lightGallery({
//         pager: true
//     });
//     $('#lightgallery1').lightGallery({
//         pager: true
//     });
//     $('#lightgallery2').lightGallery({
//         pager: true
//     });
//     $('#lgbtn').on('click', function() {
//         $('.first-item').trigger('click');
//     });
//     $('#vbtnn').on('click', function() {
//         $('.first-item1').trigger('click');
//     });
//     $('#vbtnn2').on('click', function() {
//         $('.first-item2').trigger('click');
//     });
// });

(function($) {
    $.fn.menumaker = function(options) {
        var cssmenu = $(this), settings = $.extend({
            format: "dropdown",
            sticky: false
        }, options);
        return this.each(function() {
            $(this).find(".button").on('click', function(){
                $(this).toggleClass('menu-opened');
                var mainmenu = $(this).next('ul');
                if (mainmenu.hasClass('open')) {
                    mainmenu.slideToggle().removeClass('open');
                }
                else {
                    mainmenu.slideToggle().addClass('open');
                    if (settings.format === "dropdown") {
                        mainmenu.find('ul').show();
                    }
                }
            });
            cssmenu.find('li ul').parent().addClass('has-sub');
            multiTg = function() {
                cssmenu.find(".has-sub").prepend('<span class="submenu-button"></span>');
                cssmenu.find('.submenu-button').on('click', function() {
                    $(this).toggleClass('submenu-opened');
                    if ($(this).siblings('ul').hasClass('open')) {
                        $(this).siblings('ul').removeClass('open').slideToggle();
                    }
                    else {
                        $(this).siblings('ul').addClass('open').slideToggle();
                    }
                });
            };
            if (settings.format === 'multitoggle') multiTg();
            else cssmenu.addClass('dropdown');
            if (settings.sticky === true) cssmenu.css('position', 'fixed');
            resizeFix = function() {
                var mediasize = 1000;
                if ($( window ).width() > mediasize) {
                    cssmenu.find('ul').show();
                }
                if ($(window).width() <= mediasize) {
                    cssmenu.find('ul').hide().removeClass('open');
                }
            };
            resizeFix();
            return $(window).on('resize', resizeFix);
        });
    };
})(jQuery);

(function($){
    $(document).ready(function(){
        $("#cssmenu").menumaker({
            format: "multitoggle"
        });
    });
})(jQuery);




