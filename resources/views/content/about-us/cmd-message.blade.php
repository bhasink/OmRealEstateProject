@extends('layouts.layout')
@section('content')
    @include('layouts.header')

    {{--<style>--}}
        {{--.top-content{--}}
            {{--margin-bottom: 0px;--}}
            {{--height: 515px;--}}
        {{--}--}}
    {{--</style>--}}


    <div class="top-content cmd-message-banner">

        {{--<div class="content-cover" style="height: 515px;"></div>--}}

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
                <li  class='active'><a href='/about-us/cmd-message'>CMD MESSSAGE</a></li>
                <li><a href='/about-us/leadership-team'>LEADERSHIP TEAM</a></li>
                <li><a href='/about-us/mission-and-vision'>MISSION AND VISION</a></li>
                <li><a href='/about-us/quality-policy'>QUALITY POLICY</a></li>
                <li><a  href="/about-us/success-story">SUCCESS STORY</a></li>

            </ul>
        </nav>
    </header>


    {{ Breadcrumbs::render('AboutUs', "/about-us/awards-and-honors","Cmd Message") }}



    <section class="invcon">
        <div class="container-fluid">

            <div class="col-md-12" style="margin-bottom: 100px;">
                <div class="main-content-heading" style="margin-bottom: 50px;">
                    <h1 style="text-align: center;text-transform: uppercase;    letter-spacing: 1px;  font-weight: 300 !important; "></h1>
                </div>

                <div class="cmd-message">
                    {{--<div class="row career-block is-blue ">--}}
                        {{--<div class="col-md-4 text-center">--}}
                            {{--<div class="img-block">--}}
                                {{--<img src="https://www.omaxe.com/wp-content/uploads/2015/05/MediaKit_2011-12_13_Mr-Rohtas-Goel-CMD-Omaxe.jpg" alt="">--}}

                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="col-md-8 text-center">--}}
                            {{--<h2>"Partnerships are all about <br>--}}
                                {{--Seeing the other people's viewpoint." <br><br>--}}
                                {{--<strong>Rohtas Goel</strong>--}}
                            {{--</h2>--}}
                        {{--</div>--}}

                    {{--</div>--}}

                    <div class="row">
                        <div class="col-md-12">
                            <p>At Omaxe, we take pride in our vision and insight of your world. It helps us appreciate your needs better. It is no secret that when you choose Omaxe, you choose the best and take a giant leap into a bigger and better future.</p>

                            <p>In the last two decades, you have reposed unflinching faith in us and that has made this journey eventful. From a modest beginning in 1987 to becoming one of India’s leading real estate development companies, Omaxe has come a long way in a very short span of time. Today, Omaxe stands tall on the foundation of its values and is passionately guided by its mission of delivering new‐age homes to fellow Indians. Spreading into uncharted geographies, delivering millions of sq. ft. in all price points and continuing to remain focused on the housing needs of common man not only in Tier‐I cities but also in destinations that are new to organized real estate. We have successfully blended our business growth with social endeavors by bringing a change in the lives of people who are deprived of health, education and social justice.</p>

                            <p>In reciprocation, the market recognizes us as a responsible leader. The awards and accolades bestowed upon us in the last two decades have only made us more accountable. We acknowledge the huge responsibility that rests upon us to make a difference not only in the lives of people who are associated with us but every Indian who aspires for a home. We strive very hard to be transparent, offer quality products and assure complete customer satisfaction.</p>

                            <p>We believe that value creation is an everlasting phenomenon and trust is not built overnight.
                                <br>
                                <br>
                                <strong>Rohtas Goel</strong>

                            </p>

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
