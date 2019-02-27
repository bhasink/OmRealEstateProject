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

        p{
            font-size: 14px !important;
            line-height: 1.7em;
        }

    </style>


    <div class="top-content growth-banner">


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
                <li><a href='/career/employee-welfare'>EMPLOYEE WELFARE</a></li>
                <li class="active"><a href='/career/growth-opportunities'>GROWTH OPPORTUNITY</a></li>
                <li><a href='/career/work-culture'>WORK CULTURE</a></li>
            </ul>

        </nav>
    </header>


    {{ Breadcrumbs::render('career', "/about-us/awards-and-honors","Growth Opportunities") }}



    <section class="invcon">
        <div class="container">

            <div class="col-md-12" style="margin-bottom: 50px;">
                <div class="main-content-heading" style="margin-bottom: 30px;">
                    <h1 style="    color: #0262b5;text-align: center;text-transform: uppercase;    letter-spacing: 1px;  font-weight: 300 !important; ">GROWTH OPPORTUNITY</h1>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="career-block is-blue">
                            <p>
                                Our unique and innovative HR policy enables employees to make cross-movement in the organization and hone their skills. In an effort to help our employees gain meaningful experience and exposure in the company, we encourage job-rotation, a concept not quite prevalent in the industry.
                            </p>
                            <br><br>

                            <p>
                                We are committed to enhancing the skills, competencies, personal growth and development of our employees. The concept of performance management which is facilitated through a structured performance review system puts forth the individual's achievements and the development needs.</p>

                        </div>


                        <p class="career-block is-gray">
                            The performance review and the resulting feedback is a periodical process which ensures that needs are constantly met throughout the year.
                            The company engages in training, coaching and mentoring of employees for their all-round development.
                        </p>



                    </div>


                </div>


                <div class="row">
                    <div class="col text-right">
                        {{--<nav aria-label="Page navigation example ">--}}
                            {{--<ul class="pagination">--}}
                                {{--<li class="page-item">--}}
                                    {{--<a class="page-link" href="#" aria-label="Previous">--}}
                                        {{--<span aria-hidden="true">&laquo;</span>--}}
                                        {{--<span class="sr-only">Previous</span>--}}
                                    {{--</a>--}}
                                {{--</li>--}}
                                {{--<li class="page-item"><a class="page-link" href="#">1</a></li>--}}
                                {{--<li class="page-item"><a class="page-link" href="#">2</a></li>--}}
                                {{--<li class="page-item"><a class="page-link" href="#">3</a></li>--}}
                                {{--<li class="page-item">--}}
                                    {{--<a class="page-link" href="#" aria-label="Next">--}}
                                        {{--<span aria-hidden="true">&raquo;</span>--}}
                                        {{--<span class="sr-only">Next</span>--}}
                                    {{--</a>--}}
                                {{--</li>--}}
                            {{--</ul>--}}
                        {{--</nav>--}}

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
