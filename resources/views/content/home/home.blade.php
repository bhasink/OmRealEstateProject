@extends('layouts.layout')


@section('content')


    @include('layouts.header')

    <style>
        .carousel-inner > .item {
            position: relative;
            display: none;
            -webkit-transition: 0.5s ease-in-out left !important;
            -moz-transition: 0.5s ease-in-out left !important;
            -o-transition: 0.5s ease-in-out left !important;
            transition: 0.5s ease-in-out left !important;
        }
        .content-cover{
            width: 100%;
            height: 562px;
            background: rgba(0, 0, 0, 0.82);
            z-index: 2;
            top:0;
            position: absolute;
            filter: alpha(opacity=50);

        }
        .youtube-player img {

            display: block;
            left: 0;
            margin: auto;
            max-width: 100%;
            width: 100%;
            position: absolute;
            right: 0;
            top: 0;
            border: none;
            height: auto;
            cursor: pointer;
            -webkit-transition: .4s all;
            -moz-transition: .4s all;
            transition: .4s all;
        }
        .youtube-player iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 100;
            background: transparent;
        }

        .youtube-player img:hover {
            -webkit-filter: brightness(75%);
        }

       .gallery-content .youtube-player .play {
            height: 72px;
            width: 72px;
            left: 50%;
            top: 32%;
            margin-left: -36px;
            margin-top: -36px;
            position: absolute;
            background: url("/images/static/TxzC70f.png") no-repeat;
            cursor: pointer;
        }

        .youtube-player .play {
            height: 72px;
            width: 72px;
            left: 50%;
            top: 50%;
            margin-left: -36px;
            margin-top: -36px;
            position: absolute;
            background: url("/images/static/TxzC70f.png") no-repeat;
            cursor: pointer;
        }

        .btbtbt {
            outline: none;
            height: 40px;
            text-align: center;
            width: 130px;
            border-radius: 40px;
            background: #fff;
            border: 1px solid #0066b2;
            color: #0066b2;
            letter-spacing: 1px;
            text-shadow: 0;
            font-size: 12px;
            font-weight: bold;
            cursor: pointer;
            -webkit-transition: all 0.25s ease;
            transition: all 0.25s ease;
            outline: none;
        }
        .btbtbt:hover {
            color: white;
            background: #0066b2;
            outline: none;
        }
        .btbtbt:active {
            letter-spacing: 2px;
            outline: none;
        }
        .onclic {
            width: 40px;
            border-color: #bbbbbb;
            border-width: 3px;
            font-size: 0;
            border-left-color: #1ECD97;
            -webkit-animation: rotating 2s 0.25s linear infinite;
            animation: rotating 2s 0.25s linear infinite;
        }
        .onclic:after {
            content: "";
        }
        .onclic:hover {
            color: #1ECD97;
            background: white;
        }

        select { width: 400px;}
        .tempforSize {display: inline-block !important;}
    </style>



    <div class="top-content home-page2-slider" style="background:none;">
        <div class="search-bar">
            {!! Form::open(array('action' => 'Filtercontroller@homesearch', 'method' => 'get','enctype' => 'multipart/form-data')) !!}


            <input type="hidden" value="{{csrf_token()}}">

            <div class="row">
                <div class="col-md-12 text-center">
                    <h1 class="fpop">Find Property</h1>
                </div>
                <div class="search-con">
                    <div>
                        <select class="btn-outline-dark search-select centerSelect" name="p_type"   >
                            <option value="0">Select Property</option>
                            @if($data['project_type'])
                                @foreach($data['project_type'] as $key => $project_type)
                                    <option value="{{$project_type->id}}">{{ucfirst(trans($project_type->name))}}</option>
                                @endforeach
                            @endif
                        </select>
                    </div>

                    <div>
                        <select class="btn-outline-dark search-select centerSelect" name="city">
                            <option value="0">Select Location</option>
                            @if($data['cities'])
                                @foreach($data['cities'] as $key => $city)
                                    <option value="{{$city->id}}">{{ucfirst(trans($city->name))}}</option>
                                @endforeach
                            @endif
                        </select>
                    </div>

                    <div>
                        <select class="btn-outline-dark search-select centerSelect" name="price" >
                            <option value="0">Price Range</option>
                            <option value="4999999">0 - 50 Lakhs</option>
                            <option value="9999999">50 Lakhs - 1 Crore</option>
                            <option value="10000000">1 Crore above</option>
                        </select>
                    </div>

                    <div>
                        <button id="search-btn" class="btn btn-outline-dark btn-select " ><i class="fas fa-search selecticon"></i></button>
                    </div>

                </div>
            </div>

            {!! Form::close() !!}
        </div>
        <!----------------------------------Desktop optimized slider--------------------------->
        <div class="visible-md visible-lg hidden-xs visible-sm">
        <div class="top-slider-img">
            <div id="carouselExampleIndicators9" class="carousel slide" data-interval="5000"  data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators9" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators9" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators9" data-slide-to="2"></li>
                    <li data-target="#carouselExampleIndicators9" data-slide-to="3"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">

                        <img class="d-block w-100" src="{{cdn()}}/images/website_banner/thelakebanner.jpg" height="560" alt="Fourth slide">

                        {{--<img class="d-block w-100" src="https://res.cloudinary.com/dixxvh4rf/image/upload/v1548232592/thelakebanner.jpg" height="560" alt="the lake banner">--}}

                        {{--<img class="d-block w-100" src="https://youthbeat.sgp1.cdn.digitaloceanspaces.com/omaxe/thelakebanner.jpg" height="560" alt="the lake banner">--}}


                        <div class="carousel-caption d-none d-md-block">
                            {{--<h3>Over 30 Years Of Turning Dreams Into Reality</h3>--}}
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="{{cdn()}}/images/static/WS-Web-Banner.jpg" height="560" alt="Second slide">
                        {{--<img class="d-block w-100" src="https://res.cloudinary.com/dixxvh4rf/image/upload/v1548232715/WS-Web-Banner.jpg" height="560" alt="WS-Web-Banner">--}}

                        {{--<img class="d-block w-100" src="https://youthbeat.sgp1.cdn.digitaloceanspaces.com/omaxe/WS-Web-Banner.jpg" height="560" alt="WS-Web-Banner">--}}


                        <div class="carousel-caption d-none d-md-block">
                            {{--<h3>More Than 100 Million Sq.Ft Delivered</h3>--}}
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="{{cdn()}}/images/static/home_page_hero1.jpg" height="560" alt="First slide">

                        {{--<img class="d-block w-100" src="https://res.cloudinary.com/dixxvh4rf/image/upload/v1548232798/home_page_hero1.jpg" height="560" alt="home_page_hero1">--}}

                        {{--<img class="d-block w-100" src="https://youthbeat.sgp1.cdn.digitaloceanspaces.com/omaxe/home_page_hero1.jpg" height="560" alt="home_page_hero1">--}}

                        <div class="carousel-caption d-none d-md-block">
                            {{--<h3>Presence in 8 States and 27 Cities</h3>--}}
                        </div>
                    </div>

                    <div class="carousel-item">
                        <img class="d-block w-100" src="{{cdn()}}/images/static/home_page_hero3.jpg" height="560" alt="Third slide">

                        {{--<img class="d-block w-100" src="https://res.cloudinary.com/dixxvh4rf/image/upload/v1548233117/home_page_hero3.jpg" height="560" alt="home_page_hero3">--}}

                        {{--<img class="d-block w-100" src="https://youthbeat.sgp1.cdn.digitaloceanspaces.com/omaxe/home_page_hero3.jpg" height="560" alt="home_page_hero3">--}}



                        <div class="carousel-caption d-none d-md-block">
                            {{--<h3>Presence in 8 States and 27 Cities</h3>--}}
                        </div>
                    </div>

                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators9" style="z-index:999;" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators9" style="z-index:999;" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

        </div>
            <div class="content-cover"></div>

        </div>

        <!----------------------------------Mobile optimized slider--------------------------->
        <div class="visible-xs hidden-sm hidden-md hidden-lg">
            <div class="top-slider-img">
                <div id="carouselExampleIndicators11" class="carousel slide" data-interval="5000"  data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators11" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators11" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators11" data-slide-to="2"></li>
                        <li data-target="#carouselExampleIndicators11" data-slide-to="3"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="{{cdn()}}/images/static/Royal-Merdian.jpg" height="560" alt="Royal-Merdian banner">

                            {{--<img class="d-block w-100" src="https://youthbeat.sgp1.cdn.digitaloceanspaces.com/omaxe/Royal-Merdian.jpg" height="560" alt="Royal-Merdian banner">--}}


                            <div class="carousel-caption d-none d-md-block">
                                {{--<h3>Over 30 Years Of Turning Dreams Into Reality</h3>--}}
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{{cdn()}}/images/static/The-Lake.jpg" height="560" alt="The-Lake banner">

                            {{--<img class="d-block w-100" src="https://youthbeat.sgp1.cdn.digitaloceanspaces.com/omaxe/The-Lake.jpg" height="560" alt="The-Lake banner">--}}

                            <div class="carousel-caption d-none d-md-block">
                                {{--<h3>More Than 100 Million Sq.Ft Delivered</h3>--}}
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{{cdn()}}/images/static/The-Palace.jpg" height="560" alt="The-Palace banner">

                            {{--<img class="d-block w-100" src="https://youthbeat.sgp1.cdn.digitaloceanspaces.com/omaxe/The-Palace.jpg" height="560" alt="The-Palace banner">--}}

                            <div class="carousel-caption d-none d-md-block">
                                {{--<h3>Presence in 8 States and 27 Cities</h3>--}}
                            </div>
                        </div>

                        <div class="carousel-item">
                            <img class="d-block w-100" src="{{cdn()}}/images/static/ws.jpg" height="560" alt="ws banner">

                            {{--<img class="d-block w-100" src="https://youthbeat.sgp1.cdn.digitaloceanspaces.com/omaxe/ws.jpg" height="560" alt="ws banner">--}}

                            <div class="carousel-caption d-none d-md-block">
                                {{--<h3>Presence in 8 States and 27 Cities</h3>--}}
                            </div>
                        </div>

                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators11" style="z-index:999;" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators11" style="z-index:999;" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>

            </div>
            <div class="content-cover"></div>
        </div>


    </div>










    <div class="top-slider ">

        <div class="main-content-heading" style="margin: 80px 0 50px 0;">
            <h1>Omaxe Limited</h1>
            <br>
            <p style="text-align: center; font-size:14px; line-height: 1.7em; font-weight: 400;">
                Over the last 31 years, Omaxe Ltd. has established itself as a major brand in the real estate sector.
                <br> Creating a balance of advanced technology, detailed architecture, prime locations and modern amenities, we at Omaxe Ltd.
                <br> always work towards turning your dreams into a reality.

            </p>
        </div>

        <div>

        </div>

        <div class="top-slider-img">
            <div id="carouselExampleIndicators3" class="carousel slide hidden-xs hidden-sm visible-md visible-lg"  data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators3" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators3" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators3" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">

                    @if(isset($data['acheivement_panel']))


                        @foreach($data['acheivement_panel'] as $key=>$acheivement_panel)

                            <div class="carousel-item {{$key==0?'active':''}}">
                                <img class="d-block w-100 lazy" data-src="{{cdn()}}/images/static/{{$acheivement_panel->acheivement_image}}" alt="{{$acheivement_panel->image_text}}">
                                <div class="carousel-caption d-none d-md-block">
                                    <h3>{{$acheivement_panel->image_text}}</h3>
                                </div>
                            </div>

                        @endforeach

                    @endif

                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators3" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators3" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

            <!--=========================For Mobile==========================-->
            <div id="carouselExampleIndicators4" class="carousel slide visible-xs visible-sm hidden-md hidden-lg"  data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators4" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators4" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators4" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">


                    @if(isset($data['acheivement_panel']))


                        @foreach($data['acheivement_panel'] as $key=>$acheivement_panel)


                            <div class="carousel-item {{$key==0?'active':''}}">
                                <img class="d-block w-100 lazy" data-src="{{cdn()}}/images/static/{{$acheivement_panel->responsive_image}}" alt="Second slide">
                                <div class="carousel-caption  d-md-block">
                                    <h3>{{$acheivement_panel->image_text}}</h3>
                                </div>
                            </div>

                        @endforeach

                    @endif

                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators4" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators4" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>


        </div>

    </div>
    @include('content.home.city-properties')

    @include('content.home.categories-properties')

    <div class="testimonial-content">

        <div class="main-content-heading" style="margin-bottom: 40px;">
            <h1>Testimonial</h1>
            <p style="text-align: center;
    font-size: 14px;
    font-weight: 400;
    line-height: 1.7em;
    margin-top: 10px;">
                Good work deserves a reward, and what can be better than the words of appreciation by our satisfied customers.
            </p>

        </div>

        <div class="row mobrow" style="padding-left: 100px; padding-right: 100px; ">
            <div class="col-md-6 sec col-sm-12 col-xs-12">


                <div class="new-testimonials">
                    <div class="owl-carousel owl-theme testi-slider testimonial-slide">



                        @if(isset($data['testimonial_panel']))

                            @foreach($data['testimonial_panel'] as $testimonial_data)
                        <div class="item ">
                            <div class="testi-card">
                                <img class="lazy" data-src="{{cdn()}}/images/static/{{$testimonial_data->project_image}}" alt="{{$testimonial_data->testimonial_user}}">
                                <p>
                                 {{$testimonial_data->testimonial_description}}
                                </p>

                                <div class="name">{{$testimonial_data->testimonial_user}}</div>
                                <div class="area">{{$testimonial_data->project_name}}</div>
                            </div>
                        </div>

                            @endforeach

                        @endif



                    </div>

                </div>


            </div>
            <div class="col-md-6 sec col-sm-12 col-xs-12">
                <div class="video">
                    <div id="carouselExampleIndicators1" class="carousel slide" data-interval="false" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">

                                <div class="youtube-player" style="height: 300px;" data-id="8q3ENpJPvsg"></div>

                                {{--<iframe  height="300" src="https://www.youtube.com/embed/8q3ENpJPvsg?rel=0" style="width: 100%;" allow="autoplay; encrypted-media" allowfullscreen></iframe>--}}




                            </div>
                            {{--<div class="carousel-item">--}}

                                {{--<div class="youtube-player" style="height: 300px;" data-id="SBuiIAK3BmA"></div>--}}
                            {{--</div>--}}

                        </div>
                        {{--<a class="carousel-control-prev" href="#carouselExampleIndicators1" role="button" data-slide="prev">--}}
                            {{--<span class="carousel-control-prev-icon" aria-hidden="true"></span>--}}
                            {{--<span class="sr-only">Previous</span>--}}
                        {{--</a>--}}
                        {{--<a class="carousel-control-next" href="#carouselExampleIndicators1" role="button" data-slide="next">--}}
                            {{--<span class="carousel-control-next-icon" aria-hidden="true"></span>--}}
                            {{--<span class="sr-only">Next</span>--}}
                        {{--</a>--}}
                    </div>
                </div>
            </div>
            <div class="col-md-12 text-center view-all-btn">
                <a href="{{url('/testimonials')}}"><button type="button"  class="btn btn-outline-dark">VIEW ALL</button></a>


                <div class="cont">

                    <div class="demo-gallery">
                        <ul id="lightgallery2">

                        </ul>
                    </div>
                </div>

            </div>
        </div>

    </div>



    <div class="gallery-content" >


        <div class="main-content-heading" style="margin-bottom: 40px;">
            <h1>Videos</h1>
            <p style="text-align: center;
    font-size: 14px;
    font-weight: 400;
    line-height: 1.7em;
    margin-top: 10px;
height: auto;">
                Here is Omaxe’s philosophy by our founder Mr. Rohtas Goel. <br> This is what drives us to deliver the best for our customers.

            </p>

        </div>

        <div class="row mobrow" style="padding-left: 100px; padding-right: 100px; ">
            <div class="col-md-6 sec col-sm-12 col-xs-12">
                <div class="video">
                    <div class="card" style="width: 100%;">

                        <div class="youtube-player" style="height: 250px;" data-id="lDPokAdskok"></div>

                        {{--<iframe  height="300" src="https://www.youtube.com/embed/lDPokAdskok?rel=0" style="width: 100%;" allow="autoplay; encrypted-media" allowfullscreen></iframe>--}}



                        <div class="card-body">
                            <h5 class="card-title">Omaxe Foundation Day</h5>
                            <p class="card-text">
                                One of India's leading and trusted real estate companies Omaxe has successfully expanded itself across 8 states and 27 cities.
                                <br><br>
                            </p>

                            <div class="card-btn">
                                <a target="_blank" style="background:none !important;"  href="{{url('/media/media-videos')}}">
                                <button  id="lgbtn" class="btn btn-primary btn-sm">VIEW ALL VIDEOS</button>
                                </a>

                            </div>

                        </div>
                    </div>


                    <div class="cont">

                        <div class="demo-gallery">
                            <ul id="lightgallery">
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-md-6 sec col-sm-12 col-xs-12">
                <div class="video">
                    <div class="card" style="width: 100%;">

                        <div class="youtube-player" style="height: 250px;" data-id="5xlaMmETN24"></div>

                        {{--<iframe  height="300" src="https://www.youtube.com/embed/5xlaMmETN24?rel=0" style="width: 100%;" allow="autoplay; encrypted-media" allowfullscreen></iframe>--}}


                        <div class="card-body">
                            <h5 class="card-title">100 million video</h5>
                            <p class="card-text">
                                There is no bigger joy and there is no bigger satisfaction than fulfilling the dream of millions of people.
                                <br>
                                <br>
                            </p>

                            <div class="card-btn">
                                <a target="_blank" style="background:none !important;"  href="{{url('/media/media-videos')}}">
                                    <button class="btn btn-sm btn-primary" >VIEW ALL VIDEOS</button></a>
                            </div>

                        </div>
                    </div>

                    <div class="cont">

                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr class="head-hr">
    @include('layouts.footer')

   

@endsection
