@extends('layouts.layout')
@section('content')
    @include('layouts.header')

    <style>
        .top-content{
            margin-bottom: 0px;
            height: 515px;
        }
    </style>


    <div class="top-content success-story-banner">


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
                <li><a href='/about-us/quality-policy'>QUALITY POLICY</a></li>
                <li class='active'><a href="/about-us/success-story">SUCCESS STORY</a></li>

            </ul>
        </nav>
    </header>


    {{ Breadcrumbs::render('AboutUs', "/about-us/awards-and-honors","Success Story") }}






    <section class="invcon">
        <div class="container">

            <div class="col-md-12" style="margin-bottom: 100px;">
                <div class="main-content-heading" style="margin-bottom: 50px;">
                    <h1 style="text-align: center;text-transform: uppercase;    letter-spacing: 1px;  font-weight: 300 !important; "></h1>
                </div>

                <div class="row success-story">
                    <div class="col-md-12">
                        <p>With approx. 112.4 mn. sq. ft. of delivered space in both real estate and construction contracting, Omaxe is one of India’s leading and trusted real estate companies. The brand ‘Omaxe’ came into existence in 1987, when visionary and first generation entrepreneur and civil engineer Mr. Rohtas Goel laid the foundation to undertake construction and contracting business. And since then, Omaxe has moved from strength to strength.</p>

                        <p>Today the company is present across 8 States and 27 cities and possesses a diversified product portfolio that includes Integrated Townships, Hi-Tech Townships, Group Housing, Shopping Malls, Office Spaces, SCOs and Hotel. It is currently undertaking 36 real estate projects – 11 Group Housing, 16 Townships, 9 Commercial Malls/office spaces/Hotels/ SCOs.

                        </p>

                        <p>Guided by its founding values — values of delivering quality and excellent real estate spaces, ensuring customer satisfaction, and redefining lifestyle - Omaxe group forayed into the evolving real estate sector in 2001 and within a short span, the company emerged as one of the largest real estate companies having delivered some renowned and highly appreciated projects. Since inception, the company has always enjoyed utmost trust and confidence of the people and this got reflected in 2007, when the initial public offer of the company was oversubscribed close to 70 times.

                        </p>

                        <p>

                            Over the years, Omaxe has delivered some landmark projects and engineering marvels and thereby has created a niche for both luxury and affordable. Sensing an opportunity in tier II and III cities, the company made a conscious decision to venture into States like Uttar Pradesh, Madhya Pradesh, Punjab, Haryana, Uttarakhand, Rajasthan, Delhi, Himachal Pradesh to name a few. And true to its motto, “Turning Dreams into Reality”, the company is currently executing quality affordable homes and world-class themed shopping malls and offices in cities like Lucknow, New Chandigarh, Faridabad, Ludhiana, Vrindavan, Bahadurgarh, Indore, Greater Noida to name a few.
                        </p>

                        <p>The company has also successfully blended business excellence with social commitment. The company through Omaxe Foundation takes up many CSR projects in the field of health, education, community development etc.

                        </p>

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