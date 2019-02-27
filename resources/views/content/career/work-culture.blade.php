@extends('layouts.layout')
@section('content')
    @include('layouts.header')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/lightgallery/latest/css/lightgallery.css">
    <style>
        .top-content{
            margin-bottom: 0px;
            height: 515px;
        }
        .contact-data{
            margin-bottom: 10px;
        }
        .col-md-6.col-sm-12.contact-data p {
            font-size: 14px;
            word-spacing: 2px;
            font-weight: 300;
            margin-bottom: 10px;
        }
        .col-md-6.col-sm-12.contact-data h3 {
            font-size: 18px;
            margin-left: 10px;
            font-weight: 500;
        }

        p{
            font-size: 14px !important;
            line-height: 1.7em;
        }
    </style>


    <div class="top-content work-culture-banner">


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
                <li><a href='/career/current-openings'>CURRENT OPENING</a></li>
                <li ><a href='/career/employee-welfare'>EMPLOYEE WELFARE</a></li>
                <li><a href='/career/growth-opportunities'>GROWTH OPPORTUNITY</a></li>
                <li class="active"><a href='/career/work-culture'>WORK CULTURE</a></li>
            </ul>

        </nav>
    </header>



    {{ Breadcrumbs::render('career', "/about-us/awards-and-honors","Work Culture") }}


    <section class="invcon">
        <div class="container">

            <div class="col-md-12" style="margin-bottom: 50px;">
                <div class="main-content-heading" style="margin-bottom: 50px;">
                    <h1 style="    color: #0262b5;text-align: center;text-transform: uppercase;    letter-spacing: 1px;  font-weight: 300 !important; ">WORK CULTURE</h1>
                </div>


                <div class="row">
                    <div class="col-md-12 career-block is-blue">
                        <p>We take pride in our HR policies, which is one of the best in the industry. Our world-class creation is a reflection of our workforce, both high up on standards and sincerity. We have a young and vibrant work culture. The spirit of teamwork has been so deeply imbibed in every employee that a sense to grow together becomes the agenda of every Omaxian.</p>


                        <p>All this has helped us create transparency in our functioning. With equal synergy between work and play, this strategy to keep our employees happy, rejuvenated and charged up has helped the company grow organically and create further opportunities for employees to grow personally and professionally.</p>

                    </div>


                    <div class="col-md-12 career-block is-gray">
                        <p>
                            With a constant emphasis on process improvement and blend of innovation, performance, technology, reward, fun, trust and openness, the company has empowered every employee to voice their idea. These ideas are from time to time accessed and discussed by the management and are duly rewarded.</p>


                        <p>We encourage informal gathering, welfare programmes, and other recreational activities for our employees. We have a high level of employee engagement commitment.

                        </p>
                    </div>


                    <div class="col-md-12 career-block is-blue">
                        <p>
                            We organize several welfare programmes for our employees. This is done to ensure the well being of our employees. The health, prosperity and growth of our employees are important to us, as we together embark on a journey of growth and overcome challenges that come our way. Some of the recent welfare programmes initiated by us are:</p>

                    </div>
                </div>


                <div class="row">
                    <div class="col-md-4">
                        <figure class="career-employee demo-gallery">
                            <ul class="img-stack" id="work-culture">
                                <li data-src="{{cdn()}}/images/career-images/health_check_big2.jpg">
                                    <a href=""><img src="{{cdn()}}/images/career-images/health_check_big2.jpg" alt=""></a>
                                </li>

                                <li data-src="{{cdn()}}/images/career-images/health_check_big3.jpg">
                                    <a href=""><img src="{{cdn()}}/images/career-images/health_check_big3.jpg" alt=""></a>
                                </li>

                                <li data-src="{{cdn()}}/images/career-images/health_check_big1.jpg">
                                    <a href=""><img src="{{cdn()}}/images/career-images/health_check_big1.jpg" alt=""></a>
                                </li>


                                <li data-src="{{cdn()}}/images/career-images/health_check_big4.jpg">
                                    <a href=""><img src="{{cdn()}}/images/career-images/health_check_big4.jpg" alt=""></a>
                                </li>

                                <li data-src="{{cdn()}}/images/career-images/health_check_big5.jpg">
                                    <a href=""><img src="{{cdn()}}/images/career-images/health_check_big5.jpg" alt=""></a>
                                </li>

                                <li data-src="{{cdn()}}/images/career-images/health_check_big6.jpg">
                                    <a href=""><img src="{{cdn()}}/images/career-images/health_check_big6.jpg" alt=""></a>
                                </li>

                                <li data-src="{{cdn()}}/images/career-images/health_check_big7.jpg">
                                    <a href=""><img src="{{cdn()}}/images/career-images/health_check_big7.jpg" alt=""></a>
                                </li>

                                <li data-src="{{cdn()}}/images/career-images/health_check_big8.jpg">
                                    <a href=""><img src="{{cdn()}}/images/career-images/health_check_big8.jpg" alt=""></a>
                                </li>


                            </ul>

                            <div class="career-card-data">
                                <h5>Health Check Up</h5>
                                <p>We organised health camp for employees at our campus in Kalkaji, New Delhi on June, 2011. </p>
                            </div>

                        </figure>
                    </div>

                    <div class="col-md-4">
                        <figure class="career-employee demo-gallery">
                            <ul class="img-stack" id="work-culture2">
                                <li data-src="{{cdn()}}/images/career-images/labour_training_big2.jpg">
                                    <a href=""><img src="{{cdn()}}/images/career-images/labour_training_big2.jpg" alt=""></a>
                                </li>


                                <li data-src="{{cdn()}}/images/career-images/labour_training_big3.jpg">
                                    <a href=""><img src="{{cdn()}}/images/career-images/labour_training_big3.jpg" alt=""></a>
                                </li>


                                <li data-src="{{cdn()}}/images/career-images/labour_training_big4.jpg">
                                    <a href=""><img src="{{cdn()}}/images/career-images/labour_training_big4.jpg" alt=""></a>
                                </li>


                                <li data-src="{{cdn()}}/images/career-images/labour_training_big5.jpg">
                                    <a href=""><img src="{{cdn()}}/images/career-images/labour_training_big5.jpg" alt=""></a>
                                </li>


                                <li data-src="{{cdn()}}/images/career-images/labour_training_big6.jpg">
                                    <a href=""><img src="{{cdn()}}/images/career-images/labour_training_big6.jpg" alt=""></a>
                                </li>


                                <li data-src="{{cdn()}}/images/career-images/labour_training_big7.jpg">
                                    <a href=""><img src="{{cdn()}}/images/career-images/labour_training_big7.jpg" alt=""></a>
                                </li>


                                <li data-src="{{cdn()}}/images/career-images/labour_training_big8.jpg">
                                    <a href=""><img src="{{cdn()}}/images/career-images/labour_training_big8.jpg" alt=""></a>
                                </li>


                                <li data-src="{{cdn()}}/images/career-images/labour_training_big9.jpg">
                                    <a href=""><img src="{{cdn()}}/images/career-images/labour_training_big9.jpg" alt=""></a>
                                </li>

                                <li data-src="{{cdn()}}/images/career-images/labour_training_big10.jpg">
                                    <a href=""><img src="{{cdn()}}/images/career-images/labour_training_big10.jpg" alt=""></a>
                                </li>

                                <li data-src="{{cdn()}}/images/career-images/labour_training_big11.jpg">
                                    <a href=""><img src="{{cdn()}}/images/career-images/labour_training_big11.jpg" alt=""></a>
                                </li>

                                <li data-src="{{cdn()}}/images/career-images/labour_training_big12.jpg">
                                    <a href=""><img src="{{cdn()}}/images/career-images/labour_training_big12.jpg" alt=""></a>
                                </li>

                                <li data-src="{{cdn()}}/images/career-images/labour_training_big13.jpg">
                                    <a href=""><img src="{{cdn()}}/images/career-images/labour_training_big13.jpg" alt=""></a>
                                </li>

                                <li data-src="{{cdn()}}/images/career-images/labour_training_big14.jpg">
                                    <a href=""><img src="{{cdn()}}/images/career-images/labour_training_big14.jpg" alt=""></a>
                                </li>

                                <li data-src="{{cdn()}}/images/career-images/labour_training_big15.jpg">
                                    <a href=""><img src="{{cdn()}}/images/career-images/labour_training_big15.jpg" alt=""></a>
                                </li>

                            </ul>

                            <div class="career-card-data">
                                <h5>Labour Training Programme</h5>
                                <p>Our Labour Department recently organised a labour training programme in Aravali Hills, Faridabad for construction labourers.

                                </p>
                            </div>

                        </figure>
                    </div>

                    <div class="col-md-4">
                        <figure class="career-employee demo-gallery">
                            <ul class="img-stack" id="work-culture3">
                                <li data-src="{{cdn()}}/images/career-images/health-checkup1.jpg">
                                    <a href=""><img src="{{cdn()}}/images/career-images/health-checkup1.jpg" alt=""></a>
                                </li>

                                <li data-src="{{cdn()}}/images/career-images/health-checkup2.jpg">
                                    <a href=""><img src="{{cdn()}}/images/career-images/health-checkup2.jpg" alt=""></a>
                                </li>


                                <li data-src="{{cdn()}}/images/career-images/health-checkup3.jpg">
                                    <a href=""><img src="{{cdn()}}/images/career-images/health-checkup3.jpg" alt=""></a>
                                </li>

                                <li data-src="{{cdn()}}/images/career-images/health-checkup4.jpg">
                                    <a href=""><img src="{{cdn()}}/images/career-images/health-checkup4.jpg" alt=""></a>
                                </li>


                            </ul>

                            <div class="career-card-data">
                                <h5>Health Checkup Camp</h5>
                                <p>Health Checkup Camp organized for construction workers in July, 2014</p>
                            </div>

                        </figure>
                    </div>

                    <div class="col-md-4">
                        <figure class="career-employee demo-gallery">
                            <ul class="img-stack" id="work-culture4">
                                <li data-src="{{cdn()}}/images/career-images/foundation-day1.jpg">
                                    <a href=""><img src="{{cdn()}}/images/career-images/foundation-day1.jpg" alt=""></a>
                                </li>


                                <li data-src="{{cdn()}}/images/career-images/foundation-day2.jpg">
                                    <a href=""><img src="{{cdn()}}/images/career-images/foundation-day2.jpg" alt=""></a>
                                </li>

                                <li data-src="{{cdn()}}/images/career-images/foundation-day3.jpg">
                                    <a href=""><img src="{{cdn()}}/images/career-images/foundation-day3.jpg" alt=""></a>
                                </li>

                                <li data-src="{{cdn()}}/images/career-images/foundation-day4.jpg">
                                    <a href=""><img src="{{cdn()}}/images/career-images/foundation-day4.jpg" alt=""></a>
                                </li>

                                <li data-src="{{cdn()}}/images/career-images/foundation-day5.jpg">
                                    <a href=""><img src="{{cdn()}}/images/career-images/foundation-day5.jpg" alt=""></a>
                                </li>

                            </ul>

                            <div class="career-card-data">
                                <h5>Company's Foundation Day</h5>
                                <p>Omaxians gather to celebrate company’s Foundation Day – September, 2014</p>
                            </div>

                        </figure>
                    </div>


                    <div class="col-md-4">
                        <figure class="career-employee demo-gallery">
                            <ul class="img-stack" id="work-culture5">
                                <li data-src="{{cdn()}}/images/career-images/women-day1.jpg"><a href=""><img src="{{cdn()}}/images/career-images/women-day1.jpg" alt=""></a>
                                </li>

                                <li data-src="{{cdn()}}/images/career-images/women-day2.jpg"><a href=""><img src="{{cdn()}}/images/career-images/women-day2.jpg" alt=""></a>
                                </li>

                                <li data-src="{{cdn()}}/images/career-images/women-day3.jpg"><a href=""><img src="{{cdn()}}/images/career-images/women-day3.jpg" alt=""></a>
                                </li>

                                <li data-src="{{cdn()}}/images/career-images/women-day4.jpg"><a href=""><img src="{{cdn()}}/images/career-images/women-day4.jpg" alt=""></a>
                                </li>

                                <li data-src="{{cdn()}}/images/career-images/women-day5.jpg"><a href=""><img src="{{cdn()}}/images/career-images/women-day5.jpg" alt=""></a>
                                </li>


                                <li data-src="{{cdn()}}/images/career-images/women-day6.jpg"><a href=""><img src="{{cdn()}}/images/career-images/women-day6.jpg" alt=""></a>
                                </li>


                            </ul>

                            <div class="career-card-data">
                                <h5>Women's Day</h5>
                                <p>International Women’s Day celebrations in Omaxe- March, 2015</p>
                            </div>

                        </figure>
                    </div>

                    <div class="col-md-4">
                        <figure class="career-employee">
                            <ul class="img-stack" id="work-culture6">


                                <li data-src="{{cdn()}}/images/career-images/women-day-2018-1.jpg">
                                    <a href="">
                                        <img src="{{cdn()}}/images/career-images/women-day-2018-1.jpg" alt="">
                                    </a>
                                </li>

                                <li data-src="{{cdn()}}/images/career-images/women-day-2018-2.jpg">
                                    <a href="">
                                        <img src="{{cdn()}}/images/career-images/women-day-2018-2.jpg" alt="">
                                    </a>
                                </li>

                                <li data-src="{{cdn()}}/images/career-images/women-day-2018-3.jpg">
                                    <a href="">
                                        <img src="{{cdn()}}/images/career-images/women-day-2018-3.jpg" alt="">
                                    </a>

                                </li>

                                <li data-src="{{cdn()}}/images/career-images/women-day-2018-4.jpg">
                                    <a href="">
                                        <img src="{{cdn()}}/images/career-images/women-day-2018-4.jpg" alt="">
                                    </a>
                                </li>

                                <li data-src="{{cdn()}}/images/career-images/women-day-2018-5.jpg">
                                    <a href="">
                                        <img src="{{cdn()}}/images/career-images/women-day-2018-5.jpg" alt="">
                                    </a>
                                </li>

                                <li data-src="{{cdn()}}/images/career-images/women-day-2018-6.jpg">
                                    <a href="">
                                        <img src="{{cdn()}}/images/career-images/women-day-2018-6.jpg" alt="">
                                    </a>
                                </li>


                                <li data-src="{{cdn()}}/images/career-images/women-day-2018-7.jpg">
                                    <a href="">
                                        <img src="{{cdn()}}/images/career-images/women-day-2018-7.jpg" alt="">
                                    </a>
                                </li>


                                <li data-src="{{cdn()}}/images/career-images/women-day-2018-8.jpg">
                                    <a href="">
                                        <img src="{{cdn()}}/images/career-images/women-day-2018-8.jpg" alt="">
                                    </a>
                                </li>



                                <li data-src="{{cdn()}}/images/career-images/women-day-2018-9.jpg">
                                    <a href="">
                                        <img src="{{cdn()}}/images/career-images/women-day-2018-9.jpg" alt="">
                                    </a>
                                </li>

                                <li data-src="{{cdn()}}/images/career-images/women-day-2018-10.jpg">
                                    <a href="">
                                        <img src="{{cdn()}}/images/career-images/women-day-2018-10.jpg" alt="">
                                    </a>
                                </li>

                            </ul>

                            <div class="career-card-data">
                                <h5>Women’s Day 2018</h5>
                                <p>International Women’s Day celebrations in Omaxe- March, 2018</p>
                            </div>

                        </figure>
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

    <script src="https://cdn.jsdelivr.net/g/lightgallery@1.3.5,lg-fullscreen@1.0.1,lg-hash@1.0.1,lg-pager@1.0.1,lg-share@1.0.1,lg-thumbnail@1.0.1,lg-video@1.0.1,lg-autoplay@1.0.1,lg-zoom@1.0.3"></script>
    
    <script>
        $(document).ready(function() {
            $('#work-culture').lightGallery({
                thumbnail: true
            });

            $('#work-culture2').lightGallery({
                thumbnail: true
            });

            $('#work-culture3').lightGallery({
                thumbnail: true
            });

            $('#work-culture4').lightGallery({
                thumbnail: true
            });

            $('#work-culture5').lightGallery({
                thumbnail: true
            });

            $('#work-culture6').lightGallery({
                thumbnail: true
            });

        });

    </script>

@endsection


@section('addlightgallery')

    <script src="https://cdn.jsdelivr.net/g/lightgallery@1.3.5,lg-fullscreen@1.0.1,lg-hash@1.0.1,lg-pager@1.0.1,lg-share@1.0.1,lg-thumbnail@1.0.1,lg-video@1.0.1,lg-autoplay@1.0.1,lg-zoom@1.0.3"></script>

@endsection