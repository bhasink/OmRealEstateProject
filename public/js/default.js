/**
 * Created by karanbhasin on 27/03/18.
 */
var header = $(".header");
var headerMobi = $(".header-mobile");
$(window).scroll(function() {
    var scroll = $(window).scrollTop();

    if (scroll >= 10) {
        header.addClass("header-shrink");
    } else {
        header.removeClass("header-shrink");
    }
    if (scroll >= 10) {
        headerMobi.addClass("shadow");
    } else {
        headerMobi.removeClass("shadow");
    }
});

// border animate js
$( ".dot-style" ).wrapInner( "<i></i>" );

$(".dot-style, .dot-style-02").appear();

$(window).load(function(e) {
    $(".dot-style, .dot-style-02").addClass("slideBorder");
});

$(document.body).on("appear",".dot-style, .dot-style-02",function(){
    $(this).addClass("slideBorder");
});

$(document.body).on("disappear",".dot-style, .dot-style-02",function(){
    $(this).removeClass("slideBorder");
});
// border animate js




var panelOpen = false;
$('.toggle-btn').click(function(e) {

    $(this).toggleClass("enqAnimate");

    if(!panelOpen)
    {
        $(this).css('background-position', 'right').parent().animate({right:'0px'}, 250, function(){panelOpen = true;});
        $('.hide-panal').addClass('active');
    }
    else
    {
        $(this).css('background-position', 'left').parent().animate({right:'-250px'}, 250, function(){panelOpen = false;});
        $('.hide-panal').removeClass('active');
    }
});


/*function resizePdf() {
 $(".pdf-txt").css('width', ($(".pdf-div").width() - 60)+"px");
 }*/


$(document).ready(
    function()
    {
        /*$('.flexslider').flexslider({
         animation: 'slide',
         animationLoop: false,             //Boolean: Should the animation loop? If false, directionNav will received "disable" classes at either end
         slideshow: false,                //Boolean: Animate slider automatically
         slideshowSpeed: 4500,           //Integer: Set the speed of the slideshow cycling, in milliseconds
         animationSpeed: 700,             //Boolean: Pause the slideshow when interacting with control elements, highly recommended.
         pauseOnHover: true,
         pauseOnAction:false,
         controlNav: true,
         directionNav: false,
         prevText: '<i class="icon-left-open"></i>',
         nextText: '<i class="icon-right-open"></i>',
         controlsContainer: '.flex-container'
         });*/

        $('#main-menu').smartmenus({
            mainMenuSubOffsetX: -1,
            subMenusSubOffsetX: 10,
            subMenusSubOffsetY: 0,
            subIndicators:0
        });
        /* wp js */
        $('#wap-menu').smartmenus({
            mainMenuSubOffsetX: -1,
            subMenusSubOffsetX: 10,
            subMenusSubOffsetY: 0,
        });

        /*resizePdf();
         $(window).resize(function() {
         resizePdf();
         })*/

        $(".nav-toggle").click(function(){
            $( this ).toggleClass( "highlight" );
            $(".m-nav").toggleClass("active");
            if ( $('.m-nav').hasClass( "active" ) ) {
                $("body").append( "<div class='m-overlay'></div>" );
                $(".m-overlay").click(function(){
                    $(".nav-toggle").toggleClass( "highlight" );
                    $(".m-nav").toggleClass("active");
                    $(this).remove();
                });
            }else {
                $('.m-overlay').remove();
            }
        });



        /*$(".m-overlay").click(function(){
         $(".nav-toggle").toggleClass( "highlight" );
         $(".m-nav").toggleClass("active");
         $(this).remove();
         });*/


        /*$(".nav-button").click(function(){
         $(".m-nav").animate({left: "0"});
         });
         $(".nav-button-close").click(function(){
         $(".m-nav").animate({left: "100%"});
         });*/

        $(".wp-search-btn").click(function(){
            $(".wap-search").animate({top: "0"});
        });
        $(".wap-search-close").click(function(){
            $(".wap-search").animate({top: "-92px"});
        });
        /* wp js */

        $( ".project-tabs" ).tabs({
            event: "mouseover"
        });

        $(".accordion").accordion({
            collapsible: true,
            heightStyle: "content"
        });
        $(".accordion2").accordion({
            active : false,
            collapsible: true,
            heightStyle: "content"
        });

        $('.scrollbox, .scrollbox-pr').enscroll();

        if ($(window).width() >= 1024){
            $("#fNav-toggle").click(function(){
                $( this ).toggleClass( "highlight" );
                $("#fNav-sub").slideToggle();
                $('html,body').animate({
                    scrollTop: $(this).offset().top - $('.header').height()},600);
            });
        };

        if ($(window).width() <= 1023){
            $("#fNav-toggle").click(function(){
                $( this ).toggleClass( "highlight" );
                $("#fNav-sub").slideToggle();
                $('html,body').animate({
                    scrollTop: $(this).offset().top - $('.header-mobile').height()},600);
            });
        };


        var wow = new WOW(
            {
                boxClass:     'wow',      // animated element css class (default is wow)
                animateClass: 'animated', // animation css class (default is animated)
                offset:       0,          // distance to the element when triggering the animation (default is 0)
                mobile:       true,       // trigger animations on mobile devices (default is true)
                live:         true,       // act on asynchronously loaded content (default is true)
                callback:     function(box) {
                    // the callback is fired every time an animation is started
                    // the argument that is passed in is the DOM node being animated
                },
                scrollContainer: null // optional scroll container selector, otherwise use window
            }
        );
        wow.init();

        /* js for right side Menu */
        var open = $('.mn-click'),
            a = $('ul').find('a');
        open.click(function(e){
            e.preventDefault();
            var $this = $(this),
                speed = 500;
            if($this.hasClass('highlight') === true) {
                $this.removeClass('highlight').next('.mn-show').fadeOut();
            } else if(a.hasClass('highlight') === false) {
                $this.addClass('highlight').next('.mn-show').fadeIn();
            } else {
                a.removeClass('highlight').next('.mn-show').fadeOut();
                $this.addClass('highlight').next('.mn-show').delay().fadeIn();
            }
            $('html').bind("click", function() {
                $(this).unbind("click");
                $('.mn-show').hide();
                a.removeClass('highlight');
            });
        });
        $('.hdr-side-nav').click(function(e){
            e.stopPropagation();
        });
        /* js for right side Menu */

        $('[placeholder]').focus(function() {
            var input = $(this);
            if (input.val() == input.attr('placeholder')) {
                input.val('');
                input.removeClass('placeholder');
            }
        }).blur(function() {
            var input = $(this);
            if (input.val() == '' || input.val() == input.attr('placeholder')) {
                input.addClass('placeholder');
                input.val(input.attr('placeholder'));
            }
        }).blur().parents('form').submit(function() {
            $(this).find('[placeholder]').each(function() {
                var input = $(this);
                if (input.val() == input.attr('placeholder')) {
                    input.val('');
                }
            })
        });
    }
);

// $(window).load(function(e) {
//     var mobHeight = $(window).height();
//     var totalHeight = ($(this).height() - ($(".header-mobile").innerHeight() + $(".social").innerHeight()) - 10);
//     //alert( "Header: " + $(".header-mobile").innerHeight() + " | Footer: " + $(".social").innerHeight() );
//     $('.m-nav').height(mobHeight - $(".header-mobile").innerHeight() - 25);
//     $('.m-nav').css("top", $(".header-mobile").innerHeight());
//
//     $('.nav-inner').height(mobHeight - $(".header-mobile").height() - $(".social").height() - 60);
//     // alert($(".m-nav").height());
//
// });

