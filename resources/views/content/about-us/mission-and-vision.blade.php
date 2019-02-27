@extends('layouts.layout')
@section('content')
    @include('layouts.header')

    <style>
        .top-content{
            margin-bottom: 0px;
            height: 515px;
        }
    </style>


    <div class="top-content mission-vision-banner">


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
                <li  class='active'><a href='/about-us/mission-and-vision'>MISSION AND VISION</a></li>
                <li><a href='/about-us/quality-policy'>QUALITY POLICY</a></li>
                <li><a  href="/about-us/success-story">SUCCESS STORY</a></li>

            </ul>
        </nav>
    </header>



    {{ Breadcrumbs::render('AboutUs', "/about-us/awards-and-honors","Mission And Vision") }}





    <section class="invcon">
        <div class="container">

            <div class="col-md-12" style="margin-bottom: 100px;">
                <div class="main-content-heading" style="margin-bottom: 50px;">
                    <h1 style="text-align: center;text-transform: uppercase;    letter-spacing: 1px;  font-weight: 300 !important; "></h1>
                </div>

                <div class="mission-vision">
                    <div class="row ">
                        <div class="col-md-6 text">
                            <div class="text-content">
                                <h3>Our Mission</h3>
                                <p>To provide customer satisfaction and create value for <br> stakeholders through professionalism, transparency,
                                    <br> quality, cutting-edge technology and social responsibility.</p>
                            </div>

                        </div>

                        <div class="col-md-6">
                            <img src="{{cdn()}}/images/static/mission1.jpg" width="100%" style="display: block;">
                        </div>

                    </div>

                    <div class="row">
                            <div class="col-md-6">
                                <img src="{{cdn()}}/images/static/mission2.jpg" width="100%" style="display: block;">
                            </div>
                            <div class="col-md-6 text">
                                <div class="text-content">

                                <h3>OUR VISION</h3>
                                <p>To be a trusted leader in the real estate sector <br> contributing towards a progressive India.</p>
                                </div>
                            </div>

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
