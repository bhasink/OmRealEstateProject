@extends('layouts.layout')


@section('content')


    @include('layouts.header')


    <style>
        .top-content{
            margin-bottom: 0px;
            height: 515px;
        }
    </style>



    <div class="top-content media-kit-banner">

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
                <li class='active'><a href='/media/media-kit'>MEDIA KIT</a></li>
                <li><a href='/media/contact'>MEDIA CONTACTS</a></li>
                <li><a href='/media/print-coverages'>PRINT COVERAGES</a></li>
                <li><a href='/media/press-releases'>PRESS RELEASES</a></li>
                <li><a href='/media/media-videos'>VIDEOS</a></li>
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

{{--    {{ Breadcrumbs::render('investors', "/about-us/awards-and-honors","Media Kit") }}--}}

    <ol class="breadcrumb">

        <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>

        <li class="breadcrumb-item active">Media</li>
        <li class="breadcrumb-item active">Media Kit</li>

    </ol>



    {{--<nav aria-label="breadcrumb">--}}
        {{--<ol class="breadcrumb" style="font-size: 15px;">--}}
            {{--<li class="breadcrumb-item"><a href="#">Home</a></li>--}}
            {{--<li class="breadcrumb-item"><a href="#">Library</a></li>--}}
            {{--<li class="breadcrumb-item active" aria-current="page">Data</li>--}}
        {{--</ol>--}}
    {{--</nav>--}}

    {{--<section class="inv">--}}
        {{--<form action="#">--}}
            {{--<div class="text-center ">--}}
                {{--<select name="" id="">--}}
                    {{--<option  value="">SELECT FINANCIAL YEAR</option>--}}
                    {{--<option  value="">SELECT FINANCIAL YEAR</option>--}}
                    {{--<option  value="">SELECT FINANCIAL YEAR</option>--}}
                    {{--<option  value="">SELECT FINANCIAL YEAR</option>--}}
                {{--</select>--}}
            {{--</div>--}}
        {{--</form>--}}
    {{--</section>--}}

    <section class="invcon">
        <div class="container">

            <div class="col-md-12">


                <div class="row">
                    @if($data['ad_campaigns'])
                        @foreach($data['ad_campaigns'] as $key =>$ad_campaigns)



                            <div class="col-md-3 rep">
                                <figure>
                                        <a target="_blank" href="{{cdn()}}/media/images/{{$ad_campaigns->media_image}}">

                                        </a>
                                        <img height="200" width="100%" src="{{cdn()}}/media/images/{{$ad_campaigns->media_image}}" alt="">

                                    <figcaption class="repdata p-10">
                                        <div class="row">
                                            <div class="col-9">
                                                <p>{{ucwords($ad_campaigns->media_title)}}</p>

                                            </div>

                                            <div class="col-3">
                                                <a href="/media/ad_campaigns/download/{{$ad_campaigns->media_pdf}}"> <img src="/images/static/PDF2.png" alt=""></a>
                                            </div>

                                        </div>
                                    </figcaption>

                                </figure>

                            </div>
                        @endforeach
                    @endif
                </div>


                <div style="float: right;">
                    {{$data['ad_campaigns']->links()}}
                </div>

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

