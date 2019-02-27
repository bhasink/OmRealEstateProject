/**
 * Created by karanbhasin on 27/03/18.
 */



$(window).scroll(function(){
    if ($(this).scrollTop() > 100) {
        $('.top-scroll').fadeIn();
    } else {
        $('.top-scroll').fadeOut();
    }
});
$('.top-scroll').click(function(){
    $("html, body").animate({ scrollTop: 0 }, 600);
    return false;
});
$(window).load(function(e) {
    $("body").addClass('loaded');
    $(".header").css('visibility', 'visible');
});


resizeDiv();
window.onresize = function(event) {
    resizeDiv();
}
function resizeDiv() {
    var winHeight = $(window).height();
    $('.os-fullBanner').css('min-height', winHeight);
    if($(window).width() >= 1024)
    {
        vph = $(window).height() - 120;
        $('.banner-inside').css('height', winHeight - 220);
        $('#property-slide .item').css('height', winHeight - 230);
        $('.mn-full').css('height', vph + 18);
        $('.home-slide .item-slide').css('height', winHeight - 101);
        $('.sAndD-lp .item').css('height', winHeight - 101);
        $('.sAndD-lp .sAndD-img1').css('max-height', winHeight - 100);
        $('.sAndD-lp .gdp-img').css('max-height', winHeight - 380);
    }
    if($(window).width() <= 1023)
    {
        $('.home-slide .item-slide').css('height', winHeight - $('.header-mobile').height());
        $('.sAndD-lp .item').css('height', winHeight - $('.header-mobile').height());
    }
    if($(window).width() <= 767)
    {
        winHeight = $(window).height();
    }
}




$('a[data-toggle="tab"]').on('hide.bs.tab', function (e) {
    var $old_tab = $($(e.target).attr("href"));
    var $new_tab = $($(e.relatedTarget).attr("href"));

    if($new_tab.index() < $old_tab.index()){
        $old_tab.css('position', 'relative').css("right", "0").show();
        $old_tab.animate({"right":"-2%"}, 300, function () {
            $old_tab.css("right", 0).removeAttr("style");
        });
    }
    else {
        $old_tab.css('position', 'relative').css("left", "0").show();
        $old_tab.animate({"left":"-2%"}, 300, function () {
            $old_tab.css("left", 0).removeAttr("style");
        });
    }
});

$('a[data-toggle="tab"]').on('show.bs.tab', function (e) {
    var $new_tab = $($(e.target).attr("href"));
    var $old_tab = $($(e.relatedTarget).attr("href"));

    if($new_tab.index() > $old_tab.index()){
        $new_tab.css('position', 'relative').css("right", "-20px");
        $new_tab.animate({"right":"0"}, 300);
    }
    else {
        $new_tab.css('position', 'relative').css("left", "-20px");
        $new_tab.animate({"left":"0"}, 300);
    }
});

$('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
});
$(document).ready(function(){
    $('select[name="property_type"]').on('change', function(){
        var propertyTypeId = $(this).val();
        if(propertyTypeId) {
            $.ajax({
                url:'/ajaxcity/'+propertyTypeId,
                type: "GET",
                dataType:"json",
                success: function (data) {
                    $('select[name="city"]').empty();
                    $('select[name="city"]').append('<option value="">Select Location</option>');
                    $.each(data,function(key,value){
                        value = value.toLowerCase().replace(/\b[a-z]/g, function(letter) {
                            return letter.toUpperCase();
                        });
                        $('select[name="city"]').append('<option value="'+key+'">'+value+'</option>');
                    });
                }
            });
        }
        else{
            $('select[name="city"]').empty();
            $('select[name="city"]').append('<option value="">Select Location</option>');
        }
    });

    $('select[name="city"]').on('change', function(){
        var cityId = $(this).val();
        var value1="";
        var key1="";
        if(cityId) {
            $.ajax({
                url:'/ajaxprice/'+cityId,
                type: "GET",
                dataType:"json",
                success: function (data) {
                    data.sort(function(a, b)
                        {
                            return a - b;
                        }
                    );
                    $('select[name="property_price"]').empty();
                    $('select[name="property_price"]').append('<option value="">Select Price</option>');
                    $.each(data,function(key,value){
                        if(value <=5000000){
                            value = "0-50 LAKH";
                            key =1;
                        }
                        if(value >=5000001 && value <=9999999){
                            value = "50 LAKH TO 1 CR";
                            key =2;
                        }
                        if(value >=10000000){
                            value = "1 CR AND ABOVE";
                            key =3;
                        }
                        $('select[name="property_price"]').append('<option value="'+key+'">'+value+'</option>');
                    });
                }
            });
        }
        else{
            $('select[name="city"]').empty();
            $('select[name="property_price"]').append('<option value="">Select Price</option>');
        }
    });
});





//Read more text//
(function ( $ ) {

    $.fn.moreLines = function (options) {

        "use strict";

        this.each(function(){

            var element = $(this),
                textelement = element.find("p"),
                baseclass = "b-morelines_",
                basejsclass = "js-morelines_",
                currentclass = "section",
                singleline = parseFloat(element.css("line-height")),
                auto = 1,
                fullheight = element.innerHeight(),
                settings = $.extend({
                    linecount: auto,
                    baseclass: baseclass,
                    basejsclass: basejsclass,
                    classspecific: currentclass,
                    buttontxtmore: "more lines",
                    buttontxtless: "less lines",
                    animationspeed: auto
                }, options ),

                ellipsisclass = settings.baseclass+settings.classspecific+"_ellipsis",
                buttonclass = settings.baseclass+settings.classspecific+"_button",
                wrapcss = settings.baseclass+settings.classspecific+"_wrapper",
                wrapjs = settings.basejsclass+settings.classspecific+"_wrapper",
                wrapper = $("<div>").addClass(wrapcss+ ' ' +wrapjs).css({'max-width': element.css('width')}),
                linescount = singleline * settings.linecount;

            element.wrap(wrapper);

            if (element.parent().not(wrapjs)) {

                if (fullheight > linescount) {

                    element.addClass(ellipsisclass).css({'min-height': linescount, 'max-height': linescount, 'overflow': 'hidden'});

                    var moreLinesButton = $("<div>", {
                        "class": buttonclass,
                        click: function() {

                            element.toggleClass(ellipsisclass);
                            $(this).toggleClass(buttonclass+'_active');

                            if (element.css('max-height') !== 'none') {
                                element.css({'height': linescount, 'max-height': ''}).animate({height:fullheight}, settings.animationspeed, function () {
                                    moreLinesButton.html(settings.buttontxtless);
                                });

                            } else {
                                element.animate({height:linescount}, settings.animationspeed, function () {
                                    moreLinesButton.html(settings.buttontxtmore);
                                    element.css('max-height', linescount);
                                });
                            }
                        },

                        html: settings.buttontxtmore
                    });

                    element.after(moreLinesButton);

                }
            }
        });

        return this;
    };

}(jQuery));

