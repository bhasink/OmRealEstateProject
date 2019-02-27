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


    <div class="top-content current-opening-banner">


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
                <li class="active"><a href='/career/current-openings'>CURRENT OPENING</a></li>
                <li><a href='/career/employee-welfare'>EMPLOYEE WELFARE</a></li>
                <li><a href='/career/growth-opportunities'>GROWTH OPPORTUNITY</a></li>
                <li><a href='/career/work-culture'>WORK CULTURE</a></li>
            </ul>

        </nav>
    </header>



    {{ Breadcrumbs::render('career', "/about-us/awards-and-honors","Current Openings") }}




    <section class="invcon">
        <div class="container-fluid">

            <div class="col-md-12" style="margin-bottom: 50px;">
                <div class="main-content-heading" style="margin-bottom: 50px;">
                    <h1 style="    color: #0262b5;text-align: center;text-transform: uppercase;    letter-spacing: 1px;  font-weight: 300 !important; ">Current Openings</h1>
                </div>
                <div class="row">

                    <div class="col-md-12 text-center">
                        <p>WE WELCOME RESUMES ON    <a href="mailto:recruitment@omaxe.com" >RECRUITMENT@OMAXE.COM.</a> <br>
                            WE WILL GET IN TOUCH WITH YOU AS AND WHEN THERE IS AN OPENING MATCHING YOUR JOB PROFILE.</p>

                    </div>
                </div>



                {{--<div class="row">--}}
                    {{--<div class="col-md-3">--}}
                        {{--<figure class="career-card">--}}
                            {{--<img src="https://encrypted-tbn0.gstatic.com{{cdn()}}/images?q=tbn:ANd9GcQcvw5wPa0-8lvD524_2hVyIxrQ4J6T6uWFzbTpm7ltceF38ZbN" class="img-fluid" alt="">--}}

                            {{--<figcaption class="career-designation">--}}
                                {{--<div class="left">--}}
                                    {{--<p>Manager/Assistant</p>--}}
                                    {{--<p>Manager/Accounts</p>--}}
                                {{--</div>--}}

                                {{--<div class="right">--}}
                                    {{--<a href="mailto:resume@omaxe.com" class="btn btn-info">Apply</a>--}}
                                {{--</div>--}}

                            {{--</figcaption>--}}

                        {{--</figure>--}}
                    {{--</div>--}}
                    {{--<div class="col-md-3">--}}
                        {{--<figure class="career-card">--}}
                            {{--<img src="https://encrypted-tbn0.gstatic.com{{cdn()}}/images?q=tbn:ANd9GcQcvw5wPa0-8lvD524_2hVyIxrQ4J6T6uWFzbTpm7ltceF38ZbN" class="img-fluid" alt="">--}}

                            {{--<figcaption class="career-designation">--}}
                                {{--<div class="left">--}}
                                    {{--<p>Manager/Assistant</p>--}}
                                    {{--<p>Manager/Accounts</p>--}}
                                {{--</div>--}}

                                {{--<div class="right">--}}
                                    {{--<a href="mailto:resume@omaxe.com" class="btn btn-info">Apply</a>--}}
                                {{--</div>--}}

                            {{--</figcaption>--}}

                        {{--</figure>--}}
                    {{--</div>--}}

                    {{--<div class="col-md-3">--}}
                        {{--<figure class="career-card">--}}
                            {{--<img src="https://encrypted-tbn0.gstatic.com{{cdn()}}/images?q=tbn:ANd9GcQcvw5wPa0-8lvD524_2hVyIxrQ4J6T6uWFzbTpm7ltceF38ZbN" class="img-fluid" alt="">--}}

                            {{--<figcaption class="career-designation">--}}
                                {{--<div class="left">--}}
                                    {{--<p>Manager/Assistant</p>--}}
                                    {{--<p>Manager/Accounts</p>--}}
                                {{--</div>--}}

                                {{--<div class="right">--}}
                                    {{--<a href="mailto:resume@omaxe.com" class="btn btn-info">Apply</a>--}}
                                {{--</div>--}}

                            {{--</figcaption>--}}

                        {{--</figure>--}}
                    {{--</div>--}}

                    {{--<div class="col-md-3">--}}
                        {{--<figure class="career-card">--}}
                            {{--<img src="https://encrypted-tbn0.gstatic.com{{cdn()}}/images?q=tbn:ANd9GcQcvw5wPa0-8lvD524_2hVyIxrQ4J6T6uWFzbTpm7ltceF38ZbN" class="img-fluid" alt="">--}}

                            {{--<figcaption class="career-designation">--}}
                                {{--<div class="left">--}}
                                    {{--<p>Manager/Assistant</p>--}}
                                    {{--<p>Manager/Accounts</p>--}}
                                {{--</div>--}}

                                {{--<div class="right">--}}
                                    {{--<a href="mailto:resume@omaxe.com" class="btn btn-info">Apply</a>--}}
                                {{--</div>--}}

                            {{--</figcaption>--}}

                        {{--</figure>--}}
                    {{--</div>--}}
                
                {{--</div>--}}

                <div class="contents current-opening-data">
                    <div class="row content">
                        <div class="col-md-3">
                            <figure class="career-card">
                                <img src="{{cdn()}}/images/static/CURRENT-OPENINGS.jpg" class="img-fluid" alt="">
                                <figcaption class="career-designation">
                                    <div>
                                        <p>Manager/Assistant
                                            Manager-Accounts</p>

                                    </div>

                                    <div class="right">
                                        <a href="mailto:recruitment@omaxe.com" class="btn btn-info">Apply</a>
                                    </div>

                                </figcaption>

                                <div class="career-des">
                                    <p>Job Description:</p>
                                    <p>1)Knowledge of Service tax,GST</p>
                                    <p>2)Accounting</p>
                                    <p>3)Work Exposure in Oracle ERP & experience should be in real estate.</p>
                                    <a href="mailto:recruitment@omaxe.com" class="btn btn-info">Apply</a>

                                </div>

                            </figure>
                        </div>
                    </div>

                </div>





                {{--<nav class="text-center">--}}
                    {{--<ul class="pagination">--}}
                        {{--<li class="pag_prev">--}}
                            {{--<a href="#" aria-label="Previous">--}}
                                {{--<span aria-hidden="true">&laquo;</span>--}}
                            {{--</a>--}}
                        {{--</li>--}}
                        {{--<li class="pag_next">--}}
                            {{--<a href="#" aria-label="Next">--}}
                                {{--<span aria-hidden="true">&raquo;</span>--}}
                            {{--</a>--}}
                        {{--</li>--}}
                    {{--</ul>--}}
                {{--</nav>--}}
            </div>

        </div>
    </section>



    @include('layouts.footer')

    <script>
        $( document ).ready(function() {


            pageSize = 1;
            pagesCount = $(".content").length;
            var currentPage = 1;

            /////////// PREPARE NAV ///////////////
            var nav = '';
            var totalPages = Math.ceil(pagesCount / pageSize);
            for (var s=0; s<totalPages; s++){
                nav += '<li class="numeros"><a href="#">'+(s+1)+'</a></li>';
            }
            $(".pag_prev").after(nav);
            $(".numeros").first().addClass("active");
            //////////////////////////////////////

            showPage = function() {
                $(".content").hide().each(function(n) {
                    if (n >= pageSize * (currentPage - 1) && n < pageSize * currentPage)
                        $(this).show();
                });
            }
            showPage();


            $(".pagination li.numeros").click(function() {
                $(".pagination li").removeClass("active");
                $(this).addClass("active");
                currentPage = parseInt($(this).text());
                showPage();
            });

            $(".pagination li.pag_prev").click(function() {
                if($(this).next().is('.active')) return;
                $('.numeros.active').removeClass('active').prev().addClass('active');
                currentPage = currentPage > 1 ? (currentPage-1) : 1;
                showPage();
            });

            $(".pagination li.pag_next").click(function() {
                if($(this).prev().is('.active')) return;
                $('.numeros.active').removeClass('active').next().addClass('active');
                currentPage = currentPage < totalPages ? (currentPage+1) : totalPages;
                showPage();
            });
        });
    </script>

    <script src="{{ asset('js/projectstatic.js') }}"></script>
    <script>
        var iScroll = $(window).scrollTop();
        iScroll = iScroll + 300;
        $('html, body').animate({
            scrollTop: iScroll
        }, 50);
    </script>

@endsection
