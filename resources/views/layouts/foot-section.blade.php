

{{--<script src="{{cdn()}}/build/js/all-bc9a6039e2.js"></script>--}}
<script src='https://www.google.com/recaptcha/api.js'></script>

<script type="text/javascript">

    document.addEventListener("DOMContentLoaded", function() {
        var lazyloadImages;

        if ("IntersectionObserver" in window) {
            lazyloadImages = document.querySelectorAll(".lazy");
            var imageObserver = new IntersectionObserver(function(entries, observer) {
                entries.forEach(function(entry) {
                    if (entry.isIntersecting) {
                        var image = entry.target;
                        image.src = image.dataset.src;
                        image.classList.remove("lazy");
                        imageObserver.unobserve(image);
                    }
                });
            });

            lazyloadImages.forEach(function(image) {
                imageObserver.observe(image);
            });
        } else {
            var lazyloadThrottleTimeout;
            lazyloadImages = document.querySelectorAll(".lazy");

            function lazyload () {
                if(lazyloadThrottleTimeout) {
                    clearTimeout(lazyloadThrottleTimeout);
                }

                lazyloadThrottleTimeout = setTimeout(function() {
                    var scrollTop = window.pageYOffset;
                    lazyloadImages.forEach(function(img) {
                        if(img.offsetTop < (window.innerHeight + scrollTop)) {
                            img.src = img.dataset.src;
                            img.classList.remove('lazy');
                        }
                    });
                    if(lazyloadImages.length == 0) {
                        document.removeEventListener("scroll", lazyload);
                        window.removeEventListener("resize", lazyload);
                        window.removeEventListener("orientationChange", lazyload);
                    }
                }, 20);
            }

            document.addEventListener("scroll", lazyload);
            window.addEventListener("resize", lazyload);
            window.addEventListener("orientationChange", lazyload);
        }
    })


</script>

<script src="{{ elixir('js/all.js') }}"></script>

<script src="{{cdn()}}/js/boot.js"></script>
{{--<script src="https://d1jys7grhimvze.cloudfront.net/js/owl.carousel-2.js"></script>--}}
{{--<script src="{{asset('js/jquery.twbsPagination.min.js')}}"></script>--}}
{{--<script src="{{cdn()}}/js/custom.js"></script>--}}
{{--<script src="{{cdn()}}/js/intlTelInput.min.js"></script>--}}
{{--<script src="{{asset('js/lightgallery.js')}}"></script>--}}

@yield('addlightgallery')


<script>
    $(document).ready(function(){
        $('.foot-inner').toggleClass('show');
        $('#foottog').click(function(event){
            event.preventDefault();
            $('.foot-inner').toggleClass('show');
            $('.footer-toggle').toggleClass('active-arrow');
        });
    });
</script>






<script>
    $(document).ready(function(){



        $propertyCarousel = $("#property-slide");

        //$propertyCarousel.on('initialized.owl.carousel', callbackdots);

        $propertyCarousel.owlCarousel({

            loop: true,

            items : 1,

            dots : true,

            nav : false,

            autoHeight : false,

            autoplay:true,

            animateIn: 'fadeIn',

            animateOut: 'fadeOut',

            smartSpeed:800,

            autoplayTimeout:3000

        });


        $amenitiesCarousel = $(".amenities-carousel");


        $amenitiesCarousel.owlCarousel({

            items:3,
            margin:0,
            nav:true,
            loop  : true,
            autoHeight:false,
            dots : false,
            navText: [ '<i class="icon-left-open-big"></i>', '<i class="icon-right-open-big"></i>' ],
            responsive:{
                0:{
                    items:1
                },
                768:{
                    items:2
                },
                1200:{
                    items:3
                },
                1400:{
                    items:3
                }
            }
        });
        $('#project-menu').smartmenus({
            mainMenuSubOffsetX: -1,
            subMenusSubOffsetX: 10,
            subMenusSubOffsetY: 0,
        });
        $(".subNav-button").click(function(){
            $( this ).toggleClass( "highlight" );
            $("#project-menu").fadeToggle();
            $('html').bind("click", function() {
                $(this).unbind("click");
                $("#project-menu").fadeOut();
                $(".subNav-button").removeClass( "highlight" );
            });
        });
        $('.subNav-button').click(function(e){
            e.stopPropagation();
        });

    });


    $('.pagination li').addClass('page-item');
    $('.pagination li a').addClass('page-link');
    $('.pagination span').addClass('page-link');
</script>



<script>


    $("#demo").intlTelInput({
        initialCountry: "auto",
        geoIpLookup: function(callback) {
            $.get('https://ipinfo.io', function() {}, "jsonp").always(function(resp) {
                var countryCode = (resp && resp.country) ? resp.country : "";
                callback(countryCode);
            });
        },
        utilsScript: "../../build/js/utils.js" // just for formatting/placeholders etc
    });

</script>

<script>
    $(document).ready(function() {
        $('.close-tag').on('click',function(){
            $(this).parent('.button-tag').remove();
        });


    });
</script>

<script>
    function myFunction(x) {
        x.classList.toggle("change");
    }
</script>




<script>
    $('.testi-slider').owlCarousel({
        loop:false,
        margin:10,
        // nav:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }
        }
    });
</script>

<script>

    document.addEventListener("DOMContentLoaded",
        function() {
            var div, n,
                v = document.getElementsByClassName("youtube-player");
            for (n = 0; n < v.length; n++) {
                div = document.createElement("div");
                div.setAttribute("data-id", v[n].dataset.id);
                div.innerHTML = labnolThumb(v[n].dataset.id);
                div.onclick = labnolIframe;
                v[n].appendChild(div);
            }
        });

    function labnolThumb(id) {
        var thumb = '<img src="https://www.omaxe.com/images/static/vi/ID/hqdefault.jpg">',
            play = '<div class="play"></div>';
        return thumb.replace("ID", id) + play;
    }

    function labnolIframe() {
        var iframe = document.createElement("iframe");
        var embed = "https://www.youtube.com/embed/ID?rel=0";
        iframe.setAttribute("src", embed.replace("ID", this.dataset.id));
        iframe.setAttribute("frameborder", "0");
        iframe.setAttribute("allowfullscreen", "1");
        this.parentNode.replaceChild(iframe, this);
    }

</script>


<script>
    $(function() {
        $('div.pull-tab1 .tab').click(function(event) {
            $('div.pull-tab1').toggleClass("tabbed");
            event.stopPropagation();
        });

        $('.addtab').on('click', function(event){
            $('div.pull-tab1').toggleClass("tabbed");
            event.stopPropagation();
        });

        $('.removex').on('click', function(event){
            $('div.pull-tab1').removeClass()("tabbed");
            event.stopPropagation();
        });

    });

    $(document).mouseup(function (e){
        var container = $("div.pull-tab1");
        if (!container.is(e.target) && container.has(e.target).length === 0){
            $('div.pull-tab1').removeClass("tabbed");
        }
    });

</script>


<!--Start of Tawk.to Script-->
<script type="text/javascript">

    $(document).ready(function() {
        setTimeout(function() {
            var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/5b715cb3afc2c34e96e78532/default';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
        })();
    }, 10000);
    });
</script>
<!--End of Tawk.to Script-->


@section('js')
@show
</body>
</html>