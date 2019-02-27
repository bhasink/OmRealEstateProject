@extends('layouts.layout')


@section('content')


    @include('layouts.header')


    

    <style>
        .top-content{
            margin-bottom: 0px;
            height: 515px;
        }
    </style>



    <div class="top-content video-banner">

        {{--<div class="content-cover" style="height: 500px;"></div>--}}

    </div>

    <header>
        <nav id='cssmenu'>
            <div id="head-mobile"></div>
            <div class="button-cont button" onclick="myFunction(this)">
                <div class="bar1"></div>
                <div class="bar2"></div>
                <div class="bar3"></div>
            </div>

            <ul>
                <li><a href='/media/ad-campaigns'>AD CAMPAIGNS</a></li>
                <li><a href='/media/e-coverages'>E-COVERAGES</a></li>
                <li><a href='/media/events'>EVENTS</a></li>
                <li><a href='/media/media-kit'>MEDIA KIT</a></li>
                <li><a href='/media/contact'>MEDIA CONTACTS</a></li>
                <li><a href='/media/print-coverages'>PRINT COVERAGES</a></li>
                <li><a href='/media/press-releases'>PRESS RELEASES</a></li>
                <li class='active'><a href='/media/media-videos'>VIDEOS</a></li>
                <li class="dropdown">
                    <a href="#"  data-toggle="dropdown">NEWSLETTER </a>
                    <ul class="dropdown-menu" style="margin:0px;padding:0px;">
                        <li><a href='/media/regional-newsletter'>REGIONAL</a></li>
                        <li><a href='/media/corporate-newsletter'>CORPORATE</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </header>



{{--    {{ Breadcrumbs::render('investors', "/about-us/awards-and-honors","Videos") }}--}}

    <ol class="breadcrumb">

        <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>

        <li class="breadcrumb-item active">Media</li>
        <li class="breadcrumb-item active">Videos</li>

    </ol>

    <section class="invcon video-page">
        <div class="container" style="margin-bottom: 100px;">

            <div class="gallery-content" style="margin-bottom: 0px;">


                <div class="main-content-heading" style="margin-bottom: 10px;">
                    {{--<h2 style="text-align: center;text-transform: uppercase; text-decoration:underline; font-weight: bold; ">Videos</h2>--}}
                    {{--<p style="text-align: center; font-size:12px;">Turning dreams into reality Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam atque, doloremque earum nequt, repudiandae!</p>--}}
                </div>

                {{--<div class="gallery-heading">--}}
                {{--<h1>Gallery</h1>--}}
                {{--</div>--}}
                <div class="row mobrow" style="padding-left: 100px; padding-right: 100px; ">
                @if($data['ad_campaigns'])
                    @foreach($data['ad_campaigns'] as $key =>$ad_campaigns)

                                <div class="col-md-6 sec col-sm-12 col-xs-12" style="margin-bottom: 10px;">
                                    <div class="video">
                                        <div class="card" style="width: 100%;">
                                            <iframe class="card-img-top" width="100%" src="{{$ad_campaigns->media_youtube_link}}?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                            <div class="card-body">
                                                <h5 class="card-title">{{$ad_campaigns->media_title}}</h5>
                                                <p class="card-text">{{$ad_campaigns->media_description}}</p>
                                            </div>
                                        </div>
                                </div>
                            </div>
                    @endforeach
                    @endif
                </div>

            </div>
            <div style="float: right; margin-right: 100px;">
                {{$data['ad_campaigns']->links()}}
            </div>
        </div>
    </section>
    <script src="{{ asset('js/projectstatic.js') }}"></script>
    <script>
        var iScroll = $(window).scrollTop();
        iScroll = iScroll + 300;
        $('html, body').animate({
            scrollTop: iScroll
        }, 50);
    </script>
    @include('layouts.footer')
@endsection

