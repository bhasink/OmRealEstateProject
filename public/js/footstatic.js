// $(function(){
//     var $window = $(window);
//     var scrollTime = 1.2;
//     var scrollDistance = 250;
//     $window.on("mousewheel DOMMouseScroll", function(event){
//         event.preventDefault();
//         var delta = event.originalEvent.wheelDelta/120 || -event.originalEvent.detail/3;
//         var scrollTop = $window.scrollTop();
//         var finalScroll = scrollTop - parseInt(delta*scrollDistance);
//         TweenMax.to($window, scrollTime, {
//             scrollTo : { y: finalScroll, autoKill:true },
//             ease: Power1.easeOut,
//             autoKill: true,
//             overwrite: 5
//         });
//     });
// });

// $('.pagination li').addClass('page-item');
// $('.pagination li a').addClass('page-link');
// $('.pagination span').addClass('page-link');