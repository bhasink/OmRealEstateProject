@extends('layouts.layout')
@section('content')
    @include('layouts.header')

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
    </style>


    <div class="top-content employee-welfare-banner">


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
                <li class="active"><a href='/career/employee-welfare'>EMPLOYEE WELFARE</a></li>
                <li><a href='/career/growth-opportunities'>GROWTH OPPORTUNITY</a></li>
                <li><a href='/career/work-culture'>WORK CULTURE</a></li>
            </ul>

        </nav>
    </header>

    {{ Breadcrumbs::render('career', "/about-us/awards-and-honors","Employee Welfare") }}




    <section class="invcon">
        <div class="container">

            <div class="col-md-12" style="margin-bottom: 50px;">
                <div class="main-content-heading" style="margin-bottom: 50px;">
                    <h1 style="    color: #0262b5;text-align: center;text-transform: uppercase;    letter-spacing: 1px;  font-weight: 300 !important; ">FACILITIES WE OFFER</h1>
                </div>
                <div class="row">

                    <div class="col-md-12">
                        <ul class="career-icon-block">
                            <li>
                                <figure>
                                    <div class="clear-div">
                                        <div class="emp-img">
                                            <img src="{{cdn()}}/images/career-images/accidental-policy.svg" alt="">
                                        </div>
                                    </div>
                                    <figcaption>
                                        <p>Mediclaim policy</p>
                                    </figcaption>
                                </figure>

                            </li>

                            <li>
                                <figure>
                                    <div class="clear-div">
                                        <div class="emp-img">
                                            <img src="{{cdn()}}/images/career-images/esic-facility.svg" alt="">
                                        </div>
                                    </div>
                                    <figcaption>
                                        <p>ESIC Facility</p>
                                    </figcaption>
                                </figure>
                            </li>

                            <li>
                                <figure>
                                    <div class="clear-div">
                                        <div class="emp-img">
                                            <img src="{{cdn()}}/images/career-images/provident-Facility.svg" alt="">
                                        </div>
                                    </div>
                                    <figcaption>
                                        <p>Provident Facility</p>

                                    </figcaption>

                                </figure>

                            </li>


                            <li>
                                <figure>
                                    <div class="clear-div">
                                        <div class="emp-img">
                                            <img src="{{cdn()}}/images/career-images/festival-gifts.svg" alt="">

                                        </div>
                                    </div>
                                    <figcaption>
                                        <p>Festival Gifts</p>
                                    </figcaption>

                                </figure>

                            </li>

                            <li>
                                <figure>
                                    <div class="clear-div">
                                        <div class="emp-img">

                                            <img src="{{cdn()}}/images/career-images/gratuity-scheme.svg" alt="">
                                        </div>
                                    </div>
                                    <figcaption>
                                        <p>Gratuity scheme</p>

                                    </figcaption>

                                </figure>

                            </li>
                            <li>
                                <figure>
                                    <div class="clear-div">
                                        <div class="emp-img">
                                            <img src="{{cdn()}}/images/career-images/maternity-benefits.svg" alt="">
                                        </div>
                                    </div>
                                    <figcaption>
                                        <p>Maternity benefits- <br> 180 days leaves</p>
                                    </figcaption>

                                </figure>

                            </li>

                            <li>
                                <figure>
                                    <div class="clear-div">
                                        <div class="emp-img">
                                            <img src="{{cdn()}}/images/career-images/uniform.svg" alt="">
                                        </div>
                                    </div>
                                    <figcaption>
                                        <p>Uniform to Support Staff</p>
                                    </figcaption>

                                </figure>

                            </li>

                            <li>
                                <figure>
                                    <div class="clear-div">
                                        <div class="emp-img">
                                            <img src="{{cdn()}}/images/career-images/transportation-cab.svg" alt="">
                                        </div>
                                    </div>
                                    <figcaption>
                                        <p>Transportation  - cab <br> facility for Women staff</p>
                                    </figcaption>

                                </figure>

                            </li>

                            <li>
                                <figure>
                                    <div class="clear-div">
                                        <div class="emp-img">
                                            <img src="{{cdn()}}/images/career-images/check-up-camps.svg" alt="">
                                        </div>
                                    </div>
                                    <figcaption>
                                        <p>Routine Health <br> Check up camps</p>

                                    </figcaption>

                                </figure>

                            </li>

                            <li>
                                <figure>
                                    <div class="clear-div">
                                        <div class="emp-img">

                                            <img src="{{cdn()}}/images/career-images/accidental-policy.svg" alt="">
                                        </div>
                                    </div>
                                    <figcaption>
                                        <p>Group Personal <br> Accidental Policy</p>

                                    </figcaption>

                                </figure>

                            </li>
                        </ul>
                    </div>
                </div>


                {{--<div class="row margin-t-2">--}}
                    {{--<div class="col-md-12">--}}
                        {{--<h2 style=" font-size: 2.5rem;    color: #0262b5;text-align: center;text-transform: uppercase;    letter-spacing: 1px;  font-weight: 300 !important; ">Events</h2>--}}

                    {{--</div>--}}
                {{--</div>--}}


                {{--<div class="row m-t-40">--}}
                    {{--<div class="col-md-3">--}}
                        {{--<div id="employee-welfare">--}}
                            {{--<a href="{{cdn()}}/images/static/collage-600x600.jpg">--}}
                                {{--<img src="{{cdn()}}/images/static/collage-600x600.jpg" alt="">--}}

                            {{--</a>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}

                <div class="margin-t-2">

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

    <script>
        $(document).ready(function() {
            $('#employee-welfare').lightGallery({
                thumbnail: true
            });

        });

    </script>

@endsection
