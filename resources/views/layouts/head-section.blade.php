<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#1667b5">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">



    {{--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">--}}
    {{--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">--}}

    <link rel="stylesheet" type="text/css" href="{{ elixir('css/all.css') }}">

    <link rel="stylesheet" type="text/css" href="{{asset('/css/style1.css')}}">
{{--    <link rel="stylesheet" type="text/css" href="{{asset('/css/intlTelInput.min.css')}}">--}}


   

    <script src="/js/jquery1.js"></script>





@section('css')
        {{--<link rel="stylesheet" type="text/css" href="{{asset('/css/main.css')}}">--}}

    @show


<!-- Global site tag (gtag.js) - Google Analytics -->

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-72462387-6"></script>

    <script>

        window.dataLayer = window.dataLayer || [];

        function gtag(){dataLayer.push(arguments);}

        gtag('js', new Date());



        gtag('config', 'UA-72462387-6');

    </script>

    <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
            n.callMethod.apply(n,arguments):n.queue.push(arguments)};
            if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
            n.queue=[];t=b.createElement(e);t.async=!0;
            t.src=v;s=b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t,s)}(window,document,'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '1752750635044614');
        fbq('track', 'PageView');
    </script>
    <noscript>
        <img height="1" width="1"
             src="https://www.facebook.com/tr?id=1752750635044614&ev=PageView
&noscript=1"/>
    </noscript>
    <!-- End Facebook Pixel Code -->

</head>
<body>
<!-- Google Tag Manager (noscript) -->

{{--<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WB4F8MS" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>--}}

<!-- End Google Tag Manager (noscript) -->