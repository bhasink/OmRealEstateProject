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
