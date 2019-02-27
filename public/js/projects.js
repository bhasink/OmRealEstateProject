// (function($) {
//     setTimeout(function() {
//         $('.slider-images-container').slick({
//             slidesToShow: 3,
//             slidesToScroll: 1,
//             dots: true,
//
//             responsive: [{
//                 breakpoint: 480,
//                 settings: {
//                     slidesToShow: 1,
//                     slidesToScroll: 1,
//                     dots: false
//                 }
//             }],
//
//         });
//     }, 1000);
// }(jQuery));
var page = 1;
$(document).ready(function() {
    $("#ldmore").click(function(){
        page++;
        loadMoreData(page);
    });
});
$(document).ready(function() {
    $("#ldmore2").click(function(){
        page++;
        loadMoreData2(page);
    });
});
function loadMoreData2(page){
    $.ajax(
        {
            url: '?page=' + page,
            type: "get",
            beforeSend: function()
            {
                $('.ajax-load2').show();
            }
        })
        .done(function(data)
        {
            console.log(data);
            if(data.html == ""){
                $('.ajax-load2').html("No more properties found");
                $('#ldmore2').css("display","none");
                return;
            }
            $('.ajax-load2').hide();
            $("#post-data2").append(data.html);
        })
        .fail(function()
        {
            alert('server not responding...');
        });
}
function loadMoreData(page){
    $.ajax(
        {
            url: '?page=' + page,
            type: "get",
            beforeSend: function()
            {
                $('.ajax-load').show();
            }
        })
        .done(function(data)
        {
            if(data.html == ""){
                $('.ajax-load').html("No more properties found");
                $('#ldmore').css("display","none");
                return;
            }
            $('.ajax-load').hide();
            $("#post-data").append(data.html);
//                    $("#post-data1").append(data.html);
        })
        .fail(function()
        {
            alert('server not responding...');
        });
}