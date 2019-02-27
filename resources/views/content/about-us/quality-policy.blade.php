@extends('layouts.layout')
@section('content')
    @include('layouts.header')

    <style>
        .top-content{
            margin-bottom: 0px;
            height: 515px;
        }
    </style>


    <div class="top-content quality-banner">


    </div>


    <header>
        <nav id='cssmenu'>
            <!-- <div class="logo"><a href="index.html">Responsive </a></div> -->
            <div id="head-mobile"></div>
            <div class="button-cont button" onclick="myFunction(this)">
                <div class="bar1"></div>
                <div class="bar2"></div>
                <div class="bar3"></div>
            </div>


            <ul>
                <li><a href='/about-us/awards-and-honors'>AWARDS AND HONORS</a></li>
                <li><a href='/about-us/cmd-message'>CMD MESSSAGE</a></li>
                <li><a href='/about-us/leadership-team'>LEADERSHIP TEAM</a></li>
                <li><a href='/about-us/mission-and-vision'>MISSION AND VISION</a></li>
                <li  class='active'><a href='/about-us/quality-policy'>QUALITY POLICY</a></li>
                <li><a href="/about-us/success-story">SUCCESS STORY</a></li>

            </ul>
        </nav>
    </header>

    {{ Breadcrumbs::render('AboutUs', "/about-us/awards-and-honors","Quality Policy") }}



    <section class="invcon">
        <div class="container">

            <div class="col-md-12" style="margin-bottom: 100px;">
                <div class="main-content-heading" style="margin-bottom: 50px;">
                    <h1 style="text-align: center;text-transform: uppercase;    letter-spacing: 1px;  font-weight: 300 !important; "></h1>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <p>“Turning Dreams into Reality” is our mission. Our clients are the focus of everything we do. We anticipate their needs, and create value in our products and services.

                            Growth is our passion. We achieve continual improvement with objectives based on:</p>
                    </div>
                </div>

                <div class="row quality-policy">
                    <div class="col ">
                        <img src="{{cdn()}}/images/quality-policy/icon-1.png" alt="">
                        <h3>Client Satisfaction</h3>


                    </div>

                    <div class="col">
                        <img src="{{cdn()}}/images/quality-policy/icon-2.png" alt="">
                        <h3>Knowledge Sharing</h3>


                    </div>

                    <div class="col">
                        <img src="{{cdn()}}/images/quality-policy/icon-3.png" alt="">
                        <h3>Business Growth</h3>


                    </div>

                </div>



            </div>

        </div>
    </section>
    @include('layouts.footer')
    <script src="{{ asset('js/projectstatic.js') }}"></script>
    <script>
        var iScroll = $(window).scrollTop();
        iScroll = iScroll + 300;
        $('html, body').animate({
            scrollTop: iScroll
        }, 50);
    </script>
@endsection
