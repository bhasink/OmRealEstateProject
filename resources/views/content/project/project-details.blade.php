@extends('layouts.layout')


@section('content')


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/lightgallery/latest/css/lightgallery.css">

    <style>
        #pro-des{
            height: auto !important;
        }

        .col-md-3.bank-div img {
            border: 1px solid #8080803d;
        }
        .col-md-3.bank-div img {
            padding: 10px;
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
            background: url("//i.imgur.com/TxzC70f.png") no-repeat;
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
            background: url("//i.imgur.com/TxzC70f.png") no-repeat;
            cursor: pointer;
        }
    </style>



    <style type="text/css">
        .amenities-div {
            padding-bottom: 20px;
            padding-top: 0px
        }
        .landmark-list { padding-top: 30px }
        .landmark-list li {
            display: inline-block;
            vertical-align: top;
            width: 32%;
            text-align: left;
            padding: 20px 10px
        }
        .landmark-list li img {
            display: inline-block;
            vertical-align: middle;
            -webkit-filter: grayscale(100%);
            -ms-filter: grayscale(100%);
            -moz-filter: grayscale(100%);
            filter: grayscale(100%);
            -webkit-transition: .3s ease-in-out;
            -ms-transition: .3s ease-in-out;
            -moz-transition: .3s ease-in-out;
            transition: .3s ease-in-out
        }
        .landmark-list li:hover > img {
            -webkit-filter: grayscale(0);
            -ms-filter: grayscale(0);
            -moz-filter: grayscale(0);
            filter: grayscale(0)
        }
        .landmark-list li span {
            display: inline-block;
            vertical-align: middle;
            font-size: 1.8em;
            padding-left: 20px;
            max-width: 73%;
            text-align: left
        }
        .overview-list {
            padding: 0;
            text-align: center;/*margin: 0 -30px*/

        }
        .overview-list li {
            display: inline-block;
            vertical-align: top;
            width: 33%;
            text-align: left;
            padding: 20px 30px
        }
        .view-box h3 {
            font-size: 1.8em;
            text-transform: capitalize;
            font-weight: 400;
            padding: 10px 0;
            margin: 0;
            border-bottom: 1px solid #e4e4e4;
            text-align: left;
        }
        .view-box h3 span { font-size: .85em }
        .view-box p {
            font-size: 1.4em;
            text-align: justify
        }
        .view-box h4 {
            font-size: 1.6em;
            padding: 10px 0 0;
            line-height: normal;
            font-weight: 400
        }
        .view-box h4 strong { font-size: 1.1em }
        .otherProj-list {
            padding: 0;
            text-align: center;
            margin: 0 -10px
        }
        .otherProj-list li {
            display: inline-block;
            vertical-align: top;
            width: 23%;
            text-align: left;
            padding: 10px
        }
        .otherProj-list a { color: #000 }
        .amenities-carousel {
            padding-top: 20px;
            padding-left: 40px;
            padding-right: 40px
        }
        .amenities-carousel.owl-carousel .owl-stage { margin: 0 auto; }
        .amenities-carousel .item { padding: 0 20px }
        .amenities-carousel .owl-nav { padding: 0 }
        .amenities-carousel .owl-nav .owl-prev, .amenities-carousel .owl-nav .owl-next {
            position: absolute;
            color: #525254;
            font-size: 2.2em;
            height: auto;
            margin: 0;
            top: 38%;
            border: none;
            transition: all ease .4s
        }
        .amenities-carousel .owl-nav .owl-prev { left: 0 }
        .amenities-carousel .owl-nav .owl-next { right: 0 }
        .amenities-carousel .owl-nav i {
            padding: 0;
            font-size: 1.4em;
        }
        .owl-carousel.amenities-carousel .owl-nav .owl-prev:hover {
            /*border: none;*/
            background: none;
            color: #525254;
            /*transform: scale(1.4);*/
            padding-right: 10px
        }
        .owl-carousel.amenities-carousel .owl-nav .owl-next:hover {
            /*border: none;*/
            background: none;
            color: #525254;
            /*transform: scale(1.4);*/
            padding-left: 10px
        }
        .comn-carousel { padding: 0 60px; }
        .comn-carousel .owl-nav { padding: 0 }
        .comn-carousel .owl-nav .owl-prev, .comn-carousel .owl-nav .owl-next {
            position: absolute;
            color: #525254;
            font-size: 2.2em;
            height: auto;
            margin: 0;
            top: 38%;
            border: none;
            transition: all ease .4s
        }
        .comn-carousel .owl-nav .owl-prev { left: 0 }
        .comn-carousel .owl-nav .owl-next { right: 0 }
        .comn-carousel .owl-nav i {
            padding: 0;
            font-size: 1.4em;
        }
        .owl-carousel.comn-carousel .owl-nav .owl-prev:hover {
            border: none;
            background: none;
            color: #525254;
            transform: scale(1.4);
            padding-right: 10px
        }
        .owl-carousel.comn-carousel .owl-nav .owl-next:hover {
            border: none;
            background: none;
            color: #525254;
            transform: scale(1.4);
            padding-left: 10px
        }
        .amenities-box {
            text-align: left;
            max-width: 300px;
            margin: 0 auto
        }
        .amenities-box h4 {
            font-size: 2.2em;
            text-transform: capitalize;
            font-weight: 300;
            padding-bottom: 5px;
            padding-top: 10px;
            margin: 0;
            border-bottom: 1px solid #e4e4e4
        }

        .amenities-box p {
            font-size: 1.6em;
            line-height: 1.8em;
            padding: 10px 0;
        }
        .form-GIT {
            padding-top: 45px;
            width: 80%;
            margin: 0 auto
        }
        .form-GIT .form-field {
            padding-bottom: 20px;
            text-align: left
        }
        .form-GIT .form-field label {
            display: block;
            font-weight: 400;
            font-size: 14px
        }
        .form-GIT .form-control { background-color: #f2f2f2 }
        .form-GIT .btn {
            background: #d9dae1;
            border: 1px solid #000;
            margin-top: 25px
        }
        .form-GIT .btn:hover, .form-GIT .btn:focus {
            background: #000;
            color: #fff
        }
        .form-cntUs .form-control { background-color: #f2f2f2 }
        .office-div {
            text-align: center;
            padding-top: 60px;
            padding-bottom: 100px
        }
        .office-div .col-of-1 {
            display: inline-block;
            vertical-align: top;
            width: 29%;
            padding-top: 25px
        }
        .office-div .col-of-2 {
            display: inline-block;
            vertical-align: top;
            width: 39%;
            padding-top: 20px
        }
        .office-div .cont_add1 {
            display: inline-block;
            vertical-align: top;
            border-right: 1px solid #ccc;
            margin-top: 40px
        }
        .office-div .cont_add2 {
            display: inline-block;
            vertical-align: top;
            border-right: 1px solid #ccc;
            margin-top: 40px
        }
        .office-div .cont_add1:last-child { border-right: 0 }
        .office-filter {
            margin: 0;
            position: relative;
            border-left: 1px solid #ccc;
            border-right: 1px solid #ccc;
            padding: 0 15px
        }
        .office-filter .office-tab {
            padding-top: 10px;
            max-width: 350px;
            margin: 0 auto
        }
        .office-tab h3 {
            font-weight: 400;
            font-size: 2.4em;
            padding-bottom: 10px
        }
        .office-filter .office-content {
            padding-top: 25px;
            padding-bottom: 60px
        }
        .office-content p { padding: 0 }
        .office-content p strong {
            padding-bottom: 5px;
            font-size: 1.2em;
            display: inline-block
        }
        .office-div .office-rhs {
            float: right;
            width: 50%;
            padding-left: 15px
        }
        .office-div .office-rhs img {
            display: block;
            width: 100%
        }
    </style>




    <style>
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
        /*.btbtbt:after {*/
        /*content: "SUBMIT";*/
        /*}*/

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



        svg.svg-inline--fa.fa-users.fa-w-20.fa-stack-1x.fa-inverse.trq {
            margin-left: 19px;
            font-size: 120px;
        }

        .gry {
            color: #ecf0f1;
        }



        .trq {
            color: #126ab9 !important;
        }


        @media only screen and (max-width: 767px) {
            .amenities-carousel .owl-nav .owl-prev, .amenities-carousel .owl-nav .owl-next {
                position: static;
                border: 1px solid #ccc;
                margin: 0 5px;
                float: left;
                width: 40px;
                height: 40px;
                line-height: 38px;
                border-radius: 3px;
                text-align: center;
            }
        }


        .owl-nav{
            display: inline-block;
        }

        .js-description_readmore > p{
            margin: 10px 0;

        }

    </style>

    @include('layouts.header')


    <div class="flash-message">
        {{--@foreach (['danger', 'warning', 'success', 'info'] as $msg)--}}
        @if(Session::has('alert-successs'))
            <script> alert('Thank you for your interest. We will get back to you sortly.')</script>
        @endif
        @if(Session::has('alert-dangerr'))
            <script> alert('Thanks, Problem while submitting.')</script>
        @endif
        {{--@endforeach--}}
    </div>




    <div class="project-page">

        <div class="container-fluid">
            <div class="top-content" style="background: url({{cdn()}}/images//website_banner/{{$data['project_details']->banner_image}}) no-repeat center;
                    ">



                @if($data['project_details']->project_stamp_id == 1)

                    <img src='{{cdn()}}/images//stamps/Hot-selleing-property.png' class='stamp-lg' alt=''>

                @elseif($data['project_details']->project_stamp_id == 2)
                    <img src='{{cdn()}}/images//stamps/ready-to-move-in.png' class='stamp-lg' alt=''>

                @elseif($data['project_details']->project_stamp_id == 3)

                    <img src='{{cdn()}}/images//stamps/Delivered.png' class='stamp-lg' alt=''>
                @elseif($data['project_details']->project_stamp_id == 4)

                    <img src='{{cdn()}}/images//stamps/Under-Construction.png' class='stamp-lg' alt=''>

                @elseif($data['project_details']->project_stamp_id == 5)

                    <img src='{{cdn()}}/images//stamps/Just-launched.png' class='stamp-lg' alt=''>

                @elseif($data['project_details']->project_stamp_id == 6)

                    <img src='{{cdn()}}/images//stamps/sold-out.png' class='stamp-lg' alt=''>

                @elseif($data['project_details']->project_stamp_id == 7)

                    <img src='{{cdn()}}/images//stamps/Possession-Started.png' class='stamp-lg' alt=''>

                @elseif($data['project_details']->project_stamp_id == 8)

                    <img src='{{cdn()}}/images//stamps/Under-Construction-Sold-Out.png' class='stamp-lg' alt=''>


                @elseif($data['project_details']->project_stamp_id == 9)

                    <img src='{{cdn()}}/images//stamps/Delivered-Sold-Out.png' class='stamp-lg' alt=''>

                @elseif($data['project_details']->project_stamp_id == 10)

                    <img src='{{cdn()}}/images//stamps/Possession-Started-Sold-Out.png' class='stamp-lg' alt=''>

                @elseif($data['project_details']->project_stamp_id == 11)

                    <img src='{{cdn()}}/images//stamps/Operational.png' class='stamp-lg' alt=''>


                @elseif($data['project_details']->project_stamp_id == 12)

                    <img src='{{cdn()}}/images//stamps/Operationa-Sold-Out.png' class='stamp-lg' alt=''>

                @elseif($data['project_details']->project_stamp_id == 13)


                    <img src='/images/stamps/ready-to-fit-out.png' class='stamp-lg' alt=''>

                @elseif($data['project_details']->project_stamp_id == 14)


                    <img src='/images/stamps/completion_obtained_fitout_started.png' class='stamp-lg' alt=''>



                @endif


                <div class="content-cover" style="display: none; height: 520px;">
                </div>
                <div class="col-md-3 nopadding" style="
          width: 100%;
    z-index: 2;
    position: absolute;
    opacity: 1;
    bottom: -5px;">
                    @if($data['project_details'])
                        <img class="mobile-logo" src="{{cdn()}}/images//project_logo/{{$data['project_details']->project_logo}}" style="width: 246px;" {{$data['project_details']->project_logo}}>
                    @endif
                </div>

            </div>
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
                    {{--<li><a href=""></a></li>--}}
                    <li class="active">
                        <a href="{{URL::to('/projects/'.strtolower(str_replace(" ","-",$data['project_details']->project_city->name)).'/'.$data['project_details']->project_type->name.'/'.$data['project_details']->project_slug)}}">{{strtoupper($data['project_details']->project_title)}}</a>
                    </li>
                    <li>
                        <a  href="{{URL::to('/projects/'.strtolower(str_replace(" ","-",$data['project_details']->project_city->name)).'/'.$data['project_details']->project_type->name.'/'.$data['project_details']->project_slug.'/'.'location')}}">LOCATION</a>
                    </li>

                    {{--<li><a href="{{URL::to('/projects/'.strtolower(str_replace(" ","-",$data['project_details']->project_city->name)).'/'.$data['project_details']->project_type->name.'/'.$data['project_details']->project_slug.'/'.'nearby')}}">WHAT'S NEAR BY</a></li>--}}
                    @if($data['project_floor_plans']->isEmpty())

                        @else

                        <li><a href="{{URL::to('/projects/'.strtolower(str_replace(" ","-",$data['project_details']->project_city->name)).'/'.$data['project_details']->project_type->name.'/'.$data['project_details']->project_slug.'/'.'floorplan')}}">FLOOR PLANS</a></li>

                    @endif

                    @if($data['gallery_images'][0] != null)
                    <li><a href="{{URL::to('/projects/'.strtolower(str_replace(" ","-",$data['project_details']->project_city->name)).'/'.$data['project_details']->project_type->name.'/'.$data['project_details']->project_slug.'/'.'gallery')}}">GALLERY</a></li>
                    @endif
                    
                    <li><a href="{{URL::to('/projects/'.strtolower(str_replace(" ","-",$data['project_details']->project_city->name)).'/'.$data['project_details']->project_type->name.'/'.$data['project_details']->project_slug.'/'.'contact-us')}}">CONTACT US</a></li>


                    {{--<li class="dropdown">--}}
                        {{--<a href="#"  data-toggle="dropdown">Property Type </a>--}}
                        {{--<ul class="dropdown-menu" style="margin:0px;padding:0px;">--}}
                            {{--@if(   $data['ProjectPropertyType'])--}}
                                {{--@foreach($data['ProjectPropertyType'] as $ProjectPropertyTypes)--}}

                                    {{--<li><a href="{{URL::to('/projects/'.strtolower(str_replace(" ","-",$data['project_details']->project_city->name)).'/'.$data['project_details']->project_type->name.'/'.$data['project_details']->project_slug.'/'.'propertytype'.'/'.$ProjectPropertyTypes->slug)}}">{{$ProjectPropertyTypes->property_type}}</a></li>--}}

                                {{--@endforeach--}}
                            {{--@endif--}}
                        {{--</ul>--}}
                    {{--</li>--}}


                    @if(isset($data['e_brochure'][0]))

                        <li>
                            <a href="{{URL::to('/projects/'.strtolower(str_replace(" ","-",$data['project_details']->project_city->name)).'/'.$data['project_details']->project_type->name.'/'.$data['project_details']->project_slug.'/'.'ebrochure/contact-us')}}">E-Brochure</a>
                        </li>

                    @endif



                    {{--$data['e_brochure']--}}
                    {{--<li><a href='/investor/annual-report/moa-and-aoa'>MOA &AMP; AOA</a></li>--}}
                    {{--<li><a href='/investor/annual-report/prospectus'>PROSPECTUS</a></li>--}}
                    {{--<li><a href='#'>CONTACT</a></li>--}}

                </ul>
            </nav>
        </header>



        {{--<div class="col-md-3 nopadding" style="border:2px solid #ffffff;    background: red;width: 100%;display: flex;height: 125px;    top: -100px;z-index: 1;">--}}
        {{--@if($data['project_details'])--}}
        {{--<img src="{{cdn()}}/images//{{$data['project_details']->project_logo}}" style="width: 100%;" alt="">--}}
        {{--@endif--}}
        {{--</div>--}}


        {{--<div class="container">--}}

        {{--<div class="row">--}}
        {{--<div class="col-md-3 nopadding" style="border:2px solid #ffffff;    background: red;width: 100%;display: flex;height: 125px;    top: -100px;z-index: 1;">--}}
        {{--@if($data['project_details'])--}}
        {{--<img src="{{cdn()}}/images//{{$data['project_details']->project_logo}}" style="width: 100%;" alt="">--}}
        {{--@endif--}}
        {{--</div>--}}
        {{--<div class="col-md-3"  style="border:2px solid #ffffff; background-color: #0f6bb2;color: #fff; width: 100%; height: 100px;">--}}

        {{--<div style="text-align: center">--}}
        {{--<a style="color: #ffffff; text-decoration: none;" target="_blank" href="{{$data['project_details']->project_map_link}}"><h5 style="line-height: 100px;">MAPS</h5></a>--}}
        {{--</div>--}}

        {{--</div>--}}
        {{--<div class="col-md-3"  style="border:2px solid #ffffff; background-color: #0f6bb2;--}}
        {{--color: #fff; width: 100%; height: 100px;">--}}

        {{--<div style="text-align: center">--}}
        {{--<h5 style="line-height: 100px;">FLOOR PLANS</h5>--}}
        {{--</div>--}}

        {{--</div>--}}
        {{--<div class="col-md-3"  style="border:2px solid #ffffff; background-color: #0f6bb2;--}}
        {{--color: #fff; width: 100%; height: 100px;">--}}

        {{--<div style="text-align: center">--}}
        {{--<h5 style="line-height: 100px;">ENQUIRY</h5>--}}
        {{--</div>--}}

        {{--</div>--}}
        {{--</div>--}}
        {{--</div>--}}

        {{--<nav aria-label="breadcrumb">--}}
        {{--<ol class="breadcrumb" style="font-size: 15px;">--}}
        {{--<li class="breadcrumb-item"><a href="#">Home</a></li>--}}
        {{--<li class="breadcrumb-item"><a href="#">Library</a></li>--}}
        {{--<li class="breadcrumb-item active" aria-current="page">Data</li>--}}
        {{--</ol>--}}
        {{--</nav>--}}

        {{--{{ Breadcrumbs::render('ProjectDetails',$data['project_details']->title,$data['project_details']->title) }}--}}
        <div class="container-fluid">
            {{ Breadcrumbs::render('ProjectDetails', $data['project_details']->project_title,$data['project_details']->project_city->name,$data['project_details']->project_type->name) }}
        </div>

        {{--{{ Breadcrumbs::render('post', $post) }}--}}



        <ul class="detail-overview">


            @if(count($data['overview'])>0)

                @foreach($data['overview'] as $projectoverview)

                    @if($projectoverview->location != null)
                        <li>
                            <figure>
                                <div class="svg-icon">
                                    <svg width="50px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 491.6 491.6">
                                        <path d="M245.8 0C153.8 0 79 74.8 79 166.8c0 37 21.8 93.2 68.5 176.9 31.9 57.1 63.6 105.4 65 107.4l22.9 34.8c2.3 3.5 6.2 5.6 10.4 5.6s8.1-2.1 10.4-5.6l22.9-34.8c1.3-2 32.8-49.9 65-107.4 46.7-83.7 68.5-140 68.5-176.9C412.6 74.8 337.8 0 245.8 0zm76.5 331.6c-31.7 56.8-62.7 103.9-64 105.8l-12.5 19-12.5-19c-1.3-2-32.6-49.5-64-105.9-43.4-77.6-65.3-133-65.3-164.7C104 88.6 167.6 25 245.8 25s141.8 63.6 141.8 141.8c0 31.7-22 87.1-65.3 164.8z"></path>
                                        <path d="M245.8 73.3c-51 0-92.5 41.5-92.5 92.5s41.5 92.5 92.5 92.5 92.5-41.5 92.5-92.5-41.5-92.5-92.5-92.5zm0 160c-37.2 0-67.5-30.3-67.5-67.5s30.3-67.5 67.5-67.5 67.5 30.3 67.5 67.5-30.3 67.5-67.5 67.5z"></path>
                                    </svg>
                                </div>
                                <p>
                                    {!! $projectoverview->location !!}
                                </p>

                            </figure>
                        </li>
                        {{--<li>--}}
                        {{--<h4>LOCATION</h4>--}}
                        {{--</li>--}}
                    @endif

                    @if($projectoverview->size != null)

                        <li>
                            <figure>
                                <div class="svg-icon">
                                <?xml version="1.0" encoding="utf-8"?>
                                <!-- Generator: Adobe Illustrator 22.0.1, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
                                    <svg width="50px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                         viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
<style type="text/css">
    .st0{fill:#fff;}
    .st1{fill:none;stroke:#fff;stroke-width:20;stroke-miterlimit:10;}
</style>
                                        <g>
                                            <path class="st0" d="M138.7,449h-64c-5.9,0-10.7-4.8-10.7-10.7v-64c0-5.9,4.8-10.7,10.7-10.7s10.7,4.8,10.7,10.7v53.3h53.3
		c5.9,0,10.7,4.8,10.7,10.7S144.6,449,138.7,449z"/>
                                            <path class="st0" d="M437.3,150.3c-5.9,0-10.7-4.8-10.7-10.7V86.3h-53.3c-5.9,0-10.7-4.8-10.7-10.7S367.4,65,373.3,65h64
		c5.9,0,10.7,4.8,10.7,10.7v64C448,145.6,443.2,150.3,437.3,150.3z"/>
                                            <path class="st0" d="M74.7,449c-5.9,0-10.7-4.8-10.7-10.6c0-2.8,1.1-5.6,3.1-7.6L429.8,68.1c4.1-4.2,10.8-4.4,15.1-0.3
		c4.2,4.1,4.4,10.8,0.3,15.1c-0.1,0.1-0.2,0.2-0.3,0.3L82.2,445.9C80.2,447.9,77.5,449,74.7,449z"/>
                                        </g>
                                        <rect x="21" y="14.9" class="st1" width="459" height="466"/>
</svg>

                                </div>
                                <p >Area {!! $projectoverview->size !!}</p>

                            </figure>
                        </li>

                        {{--<li>--}}
                        {{--<h4>SIZE</h4>--}}
                        {{--<p>{{$projectoverview->size}}</p>--}}
                        {{--</li>--}}
                    @endif

                    @if($projectoverview->type != null)
                        <li>
                            <figure>
                                <div class="svg-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="50px" viewBox="0 0 512 512">
                                        <path d="M187.733 315.733a8.536 8.536 0 0 0 8.533 8.533H230.4a8.536 8.536 0 0 0 8.533-8.533v-51.2A8.536 8.536 0 0 0 230.4 256h-34.133a8.536 8.536 0 0 0-8.533 8.533v51.2zm17.067-42.666h17.067V307.2H204.8v-34.133zM196.267 221.867H230.4a8.536 8.536 0 0 0 8.533-8.533v-51.2a8.536 8.536 0 0 0-8.533-8.533h-34.133a8.536 8.536 0 0 0-8.533 8.533v51.2c-.001 4.71 3.822 8.533 8.533 8.533zm8.533-51.2h17.067V204.8H204.8v-34.133z"></path>
                                        <path d="M132.395 160.913L256 86.75l123.605 74.163a8.48 8.48 0 0 0 4.386 1.22 8.519 8.519 0 0 0 7.322-4.139 8.528 8.528 0 0 0-2.918-11.708L264.533 71.97V17.067H307.2v17.067h-25.6a8.536 8.536 0 0 0-8.533 8.533A8.536 8.536 0 0 0 281.6 51.2h34.133a8.536 8.536 0 0 0 8.533-8.533V8.533A8.536 8.536 0 0 0 315.733 0H256a8.536 8.536 0 0 0-8.533 8.533V71.97l-123.861 74.317a8.528 8.528 0 0 0-2.918 11.708c2.414 4.036 7.67 5.35 11.707 2.918zM93.867 324.267a8.536 8.536 0 0 0 8.533-8.533v-51.2a8.536 8.536 0 0 0-8.533-8.533H59.733a8.536 8.536 0 0 0-8.533 8.533V281.6c0 4.71 3.823 8.533 8.533 8.533s8.533-3.823 8.533-8.533v-8.533h17.067v42.667c0 4.71 3.823 8.533 8.534 8.533zM153.6 435.2V187.733a8.536 8.536 0 0 0-8.533-8.533 8.536 8.536 0 0 0-8.533 8.533V435.2a8.536 8.536 0 0 0 8.533 8.533 8.536 8.536 0 0 0 8.533-8.533z"></path>
                                        <path d="M110.933 477.867h290.133c4.71 0 8.533-3.823 8.533-8.533s-3.823-8.533-8.533-8.533h-76.8v-85.333h8.533c4.71 0 8.533-3.823 8.533-8.533s-3.823-8.533-8.533-8.533H179.2c-4.71 0-8.533 3.823-8.533 8.533s3.823 8.533 8.533 8.533h8.533V460.8h-76.8c-4.71 0-8.533 3.823-8.533 8.533s3.823 8.534 8.533 8.534zm153.6-51.2c4.71 0 8.533-3.823 8.533-8.533s-3.823-8.533-8.533-8.533v-34.133H307.2V460.8h-42.667v-34.133zm-59.733-51.2h42.667V409.6c-4.71 0-8.533 3.823-8.533 8.533s3.823 8.533 8.533 8.533V460.8H204.8v-85.333zM452.267 366.933h-34.133a8.536 8.536 0 0 0-8.533 8.533v51.2a8.536 8.536 0 0 0 8.533 8.533h34.133a8.536 8.536 0 0 0 8.533-8.533v-51.2a8.536 8.536 0 0 0-8.533-8.533zm-8.534 51.2h-17.067V384h17.067v34.133zM452.267 264.533h-34.133a8.536 8.536 0 0 0-8.533 8.533v51.2a8.536 8.536 0 0 0 8.533 8.533h34.133a8.536 8.536 0 0 0 8.533-8.533v-51.2a8.536 8.536 0 0 0-8.533-8.533zm-8.534 51.2h-17.067V281.6h17.067v34.133zM435.2 494.933H76.8c-4.71 0-8.533 3.823-8.533 8.533S72.09 512 76.8 512h358.4c4.71 0 8.533-3.823 8.533-8.533s-3.823-8.534-8.533-8.534z"></path>
                                        <path d="M503.467 187.733a8.536 8.536 0 0 0-8.533 8.533v8.533h-93.867a8.536 8.536 0 0 0-8.533 8.533 8.536 8.536 0 0 0 8.533 8.533h93.867v281.6c0 4.71 3.823 8.533 8.533 8.533s8.533-3.823 8.533-8.533v-307.2c0-4.709-3.823-8.532-8.533-8.532zM273.067 315.733a8.536 8.536 0 0 0 8.533 8.533h34.133a8.536 8.536 0 0 0 8.533-8.533v-51.2a8.536 8.536 0 0 0-8.533-8.533H281.6a8.536 8.536 0 0 0-8.533 8.533v51.2zm17.066-42.666H307.2V307.2h-17.067v-34.133zM85.333 418.133c0-1.109-.486-110.933-42.667-110.933C.486 307.2 0 417.024 0 418.133c0 20.608 14.686 37.837 34.133 41.805v43.529A8.536 8.536 0 0 0 42.666 512a8.536 8.536 0 0 0 8.533-8.533v-43.529c19.448-3.968 34.134-21.197 34.134-41.805zm-42.666 25.6c-14.114 0-25.6-11.486-25.6-25.6 0-42.513 11.418-93.867 25.6-93.867 14.182 0 25.6 51.354 25.6 93.867 0 14.114-11.486 25.6-25.6 25.6zM375.467 435.2v-256c0-4.71-3.823-8.533-8.533-8.533s-8.533 3.823-8.533 8.533v256c0 4.71 3.823 8.533 8.533 8.533s8.533-3.823 8.533-8.533zM281.6 221.867h34.133a8.536 8.536 0 0 0 8.533-8.533v-51.2a8.536 8.536 0 0 0-8.533-8.533H281.6a8.536 8.536 0 0 0-8.533 8.533v51.2a8.536 8.536 0 0 0 8.533 8.533zm8.533-51.2H307.2V204.8h-17.067v-34.133zM8.533 298.667a8.536 8.536 0 0 0 8.533-8.533v-68.267h93.867a8.536 8.536 0 0 0 8.533-8.533 8.536 8.536 0 0 0-8.533-8.533H17.067v-8.533c0-4.71-3.823-8.533-8.533-8.533S0 191.556 0 196.267v93.867a8.536 8.536 0 0 0 8.533 8.533z"></path>
                                    </svg>
                                </div>
                                <p>{!! $projectoverview->type !!}</p>

                            </figure>
                        </li>

                        {{--<li>--}}
                        {{--<h4>TYPE</h4>--}}
                        {{--<p>{{$projectoverview->type}}</p>--}}
                        {{--</li>--}}

                    @endif

                    @if($projectoverview->rera_no != null)
                            <li>
                                <figure>
                                    <div class="svg-icon">
                                        {{--<p style="color: #fff;">--}}
                                            {{--RERA <br>--}}
                                            {{--REGD NO.--}}
                                        {{--</p>--}}
                                        <?xml version="1.0" encoding="utf-8"?>
                                        <!-- Generator: Adobe Illustrator 22.0.1, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
                                            <svg width="100px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                 viewBox="0 0 99.3 46.3" style="enable-background:new 0 0 99.3 46.3;" xml:space="preserve">
<g>
    <path d="M25.7,8.3c0-0.7,0.5-1.2,1.2-1.2h3.9c1.4,0,2.5,0.4,3.3,1.1c0.6,0.6,1,1.5,1,2.6v0c0,1.8-0.9,2.9-2.2,3.4l1.7,2.1
		c0.2,0.3,0.4,0.6,0.4,0.9c0,0.7-0.6,1.1-1.2,1.1c-0.6,0-0.9-0.3-1.2-0.6l-2.4-3.1h-2v2.5c0,0.7-0.5,1.2-1.2,1.2s-1.2-0.5-1.2-1.2
		V8.3z M30.7,12.5c1.2,0,1.9-0.6,1.9-1.6v0c0-1.1-0.7-1.6-1.9-1.6h-2.5v3.2H30.7z"/>
    <path d="M37.3,17V8.3c0-0.7,0.5-1.2,1.2-1.2h6.2c0.6,0,1.1,0.5,1.1,1.1c0,0.6-0.5,1.1-1.1,1.1h-5v2.3h4.3c0.6,0,1.1,0.5,1.1,1.1
		c0,0.6-0.5,1.1-1.1,1.1h-4.3v2.4h5.1c0.6,0,1.1,0.5,1.1,1.1c0,0.6-0.5,1.1-1.1,1.1h-6.3C37.9,18.3,37.3,17.7,37.3,17z"/>
    <path d="M48.1,8.3c0-0.7,0.5-1.2,1.2-1.2h3.9c1.4,0,2.5,0.4,3.3,1.1c0.6,0.6,1,1.5,1,2.6v0c0,1.8-0.9,2.9-2.2,3.4l1.7,2.1
		c0.2,0.3,0.4,0.6,0.4,0.9c0,0.7-0.6,1.1-1.2,1.1c-0.6,0-0.9-0.3-1.2-0.6l-2.4-3.1h-2v2.5c0,0.7-0.5,1.2-1.2,1.2
		c-0.7,0-1.2-0.5-1.2-1.2V8.3z M53.1,12.5c1.2,0,1.9-0.6,1.9-1.6v0c0-1.1-0.7-1.6-1.9-1.6h-2.5v3.2H53.1z"/>
    <path d="M59.1,16.7L63,7.8c0.3-0.6,0.8-1,1.4-1h0.1c0.7,0,1.2,0.4,1.4,1l3.9,8.9c0.1,0.2,0.1,0.3,0.1,0.5c0,0.7-0.5,1.2-1.2,1.2
		c-0.6,0-1-0.3-1.2-0.9l-0.8-1.8H62l-0.8,1.8c-0.2,0.5-0.6,0.8-1.1,0.8c-0.6,0-1.1-0.5-1.1-1.2C58.9,17,59,16.8,59.1,16.7z M66,13.6
		l-1.6-3.7l-1.6,3.7H66z"/>
    <path d="M9.9,27.5c0-0.7,0.5-1.2,1.2-1.2h3.9c1.4,0,2.5,0.4,3.3,1.1c0.6,0.6,1,1.5,1,2.6v0c0,1.8-0.9,2.9-2.2,3.4l1.7,2.1
		c0.2,0.3,0.4,0.6,0.4,0.9c0,0.7-0.6,1.1-1.2,1.1c-0.6,0-0.9-0.3-1.2-0.6l-2.4-3.1h-2v2.5c0,0.7-0.5,1.2-1.2,1.2
		c-0.7,0-1.2-0.5-1.2-1.2V27.5z M14.9,31.8c1.2,0,1.9-0.6,1.9-1.6v0c0-1.1-0.7-1.6-1.9-1.6h-2.5v3.2H14.9z"/>
    <path d="M21.5,36.3v-8.8c0-0.7,0.5-1.2,1.2-1.2H29c0.6,0,1.1,0.5,1.1,1.1c0,0.6-0.5,1.1-1.1,1.1h-5v2.3h4.3c0.6,0,1.1,0.5,1.1,1.1
		c0,0.6-0.5,1.1-1.1,1.1H24v2.4h5.1c0.6,0,1.1,0.5,1.1,1.1c0,0.6-0.5,1.1-1.1,1.1h-6.3C22.1,37.5,21.5,37,21.5,36.3z"/>
    <path d="M31.8,32L31.8,32c0-3.2,2.5-5.8,5.9-5.8c1.7,0,2.8,0.4,3.8,1.1c0.2,0.2,0.5,0.5,0.5,1c0,0.7-0.5,1.2-1.2,1.2
		c-0.4,0-0.6-0.1-0.8-0.3c-0.7-0.5-1.4-0.8-2.5-0.8c-1.8,0-3.2,1.6-3.2,3.5v0c0,2.1,1.4,3.6,3.4,3.6c0.9,0,1.7-0.2,2.3-0.7v-1.6
		h-1.7c-0.6,0-1.1-0.5-1.1-1.1c0-0.6,0.5-1.1,1.1-1.1h2.8c0.7,0,1.2,0.5,1.2,1.2V35c0,0.7-0.3,1.2-0.9,1.6c-0.9,0.6-2.2,1.1-3.9,1.1
		C34.2,37.7,31.8,35.3,31.8,32z"/>
    <path d="M44.9,27.5c0-0.7,0.5-1.2,1.2-1.2h3.1c3.5,0,6,2.4,6,5.6v0c0,3.2-2.4,5.6-6,5.6h-3.1c-0.7,0-1.2-0.5-1.2-1.2V27.5z
		 M49.3,35.3c2,0,3.4-1.4,3.4-3.4v0c0-2-1.4-3.4-3.4-3.4h-1.9v6.8H49.3z"/>
    <path d="M62.3,27.5c0-0.7,0.5-1.2,1.2-1.2h0.3c0.6,0,0.9,0.3,1.3,0.7l4.8,6.3v-5.8c0-0.7,0.5-1.2,1.2-1.2c0.7,0,1.2,0.5,1.2,1.2
		v8.9c0,0.7-0.5,1.2-1.2,1.2H71c-0.6,0-0.9-0.3-1.3-0.7l-4.9-6.5v6c0,0.7-0.5,1.2-1.2,1.2c-0.7,0-1.2-0.5-1.2-1.2V27.5z"/>
    <path d="M74.5,32L74.5,32c0-3.2,2.5-5.8,6-5.8c3.5,0,6,2.6,6,5.8v0c0,3.2-2.5,5.8-6,5.8C77,37.7,74.5,35.1,74.5,32z M83.9,32
		L83.9,32c0-2-1.4-3.6-3.4-3.6c-2,0-3.4,1.6-3.4,3.5v0c0,1.9,1.4,3.5,3.4,3.5C82.5,35.5,83.9,33.9,83.9,32z"/>
    <path d="M88.9,34.9c0.8,0,1.4,0.6,1.4,1.4v0c0,0.8-0.6,1.4-1.4,1.4c-0.8,0-1.4-0.6-1.4-1.4v0C87.5,35.5,88.1,34.9,88.9,34.9z"/>
</g>
</svg>


                                    </div>
                                    <p class="reduce-text-size">
                                    {!! $projectoverview->rera_no !!}
                                    </p>

                                </figure>
                            </li>

                        {{--<li>--}}
                            {{--<h4>RERA REGD NO.</h4>--}}
                            {{--<p>{{$projectoverview->rera_no}}</p>--}}
                        {{--</li>--}}
                    @endif


                @endforeach

            @endif


        </ul>

        <div class="container">
            <div class="gallery-overview">


                <div class="row ">
                    <div class="col-md-12  project-overview">
                        <div class="main-content-heading" style="margin-top:10px;margin-bottom: 10px;">
                            <h2 class="title left text-left">OVERVIEW</h2>
                            {{--<hr style="width: 7%; height: 2px;background: #444; margin: 0 auto;">--}}
                            {{--<p style="text-align: center; font-size:14px;letter-spacing: 1px; font-weight: 400;">Turning dreams into reality Lorem ipsum dolor sit amet, consectetur adipisicing elit.--}}
                            {{--<br> Aliquam atque, doloremque earum nequt, repudiandae!</p>--}}
                        </div>

                        <div id="pro-des" class="b-description_readmore js-description_readmore" style="font-size: 14px; line-height: 2em; margin: 20px 0;">
                            @if($data['project_details'])

                                {!! $data['project_details']->project_description !!}
                            @endif
                        </div>

                        

                    </div>
                </div>
            </div>
        </div>

        @if( $data['project_features_rowcount'] !== 0)
        <div class="container">
            <div class="row">
                <div class="additional-features col-md-12" style="background: #ffffff; width: 100%; height: auto;">
                    {{--features_images_row_count--}}
                    @if( $data['project_features_rowcount'] !== 0)
                        <div>
                            <div class="main-content-heading" style="margin-top:20px;margin-bottom: 10px;">
                                <h2 class="title left">Additional Features</h2>
                            </div>
                        </div>
                    @endif
                    <div>

                        <div class="row-inner amenities-div center">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12 text-center">
                                        <div class="amenities-carousel owl-carousel">
                                            @if( $data['project_features'])
                                                @foreach(  $data['project_features'] as $project_features)

                                                    <div class="item"><div class="amenities-box">
                                                            <img src="{{cdn()}}/images//features/{{$project_features->features_image}}" alt="{{$project_features->name}}" title=""><h4>{{$project_features->name}}</h4>
                                                            {{--<p>{{$project_features->description}}</p>--}}
                                                        </div>
                                                    </div>

                                                @endforeach
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif

        @if($data['product_specifications_rowcount'] !== 0)
        <div class="container" style="margin-bottom: 20px;">
            <div class="row">
                <div class="specifications-project text-center col-md-12" style="background: #ffffff; width: 100%; height: auto;">
                    @if($data['product_specifications_rowcount'] !== 0)
                        <div>
                            <div class="main-content-heading" style="margin-top:20px;margin-bottom: 10px;">
                                <h2 class="title text-left left">Project Specification</h2>
                            </div>
                        </div>
                    @endif
                    <div>
                        <div>
                            <div class="row-inner amenities-div center p-b-0">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <h2><span class="dot-style"></span></h2>
                                            <p></p>
                                            <div class="amenities-carousel owl-carousel">

                                                @if( $data['product_specifications'])


                                                    @foreach(  $data['product_specifications'] as $product_specifications)

                                                        <div class="item">
                                                            <div class="amenities-box">
                                                                <div class="svg-block">
                                                                    <img src="{{cdn()}}/images//specification-icons/{{$product_specifications->features_image}}" alt="{{$product_specifications->name}}">
                                                                </div>
                                                                <h4>

                                                                    {!! $product_specifications->name !!}



                                                                </h4>
                                                                {{--<p>{{$product_specifications->description}}</p>--}}

                                                                <div class="amenities-text">
                                                                    {{--{{  \Illuminate\Support\Str::words($product_specifications->description,65) }}--}}
                                                                    {{----}}

                                                                    {!! $product_specifications->description !!}
                                                                </div>

                                                            </div>
                                                        </div>



                                                    @endforeach
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @endif


        <div class="container-fluid">
            <div class="row">
                <div class="project-gallery-videos">
                    <div class="col-md-12">
                        <div class="row">

                            <div class="col-md-6 pgv6">

                                <div>
                                    <div class="main-content-heading" style="margin-bottom: 5px;">
                                        <h2 class="title white left">Gallery</h2>
                                    </div>
                                    <hr class="head-hr">

                                    <div id="carouselExampleIndicators3" class="carousel slide" data-interval="false" data-ride="carousel">

                                        <div class="carousel-inner">

                                            @if($data['gallery_images'])

                                                @foreach($data['gallery_images'] as $index=>$gallery_images)
                                                    <div class="carousel-item @if($index == 0) {{ 'active' }} @endif">
                                                        <img class="d-block w-100"  style="object-fit:fill; height: 300px;" src="{{cdn()}}/images//gallery/{{$gallery_images}}" alt="{{$gallery_images}}">
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
                                    <button style="margin-top:10px;background-color: #ffffff !important; border: none !important; color: #0e56ae;" class="btbtbt " id="lgbtn">View All Images</button>
                                    <div class="cont">

                                        <div class="demo-gallery">
                                            <ul id="lightgallery">

                                                @if($data['gallery_images'])

                                                    @foreach($data['gallery_images'] as $index=>$gallery_images)

                                                        <li class="first-item" data-responsive="{{cdn()}}/images//gallery/{{$gallery_images}} 375, {{cdn()}}/images//gallery/{{$gallery_images}} 480, {{cdn()}}/images//gallery/{{$gallery_images}} 800" data-src="{{cdn()}}/images//gallery/{{$gallery_images}}"
                                                            data-pinterest-text="Pin it" data-tweet-text="share on twitter ">

                                                            <a href="" style="display: none;">
                                                                <img class="img-responsive" src="{{cdn()}}/images//gallery/{{$gallery_images}}">
                                                                <div class="demo-gallery-poster">
                                                                </div>
                                                            </a>
                                                        </li>
                                                    @endforeach
                                                @endif
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 pgv6">
                                <div class="main-content-heading" style="margin-bottom: 5px;">
                                    {{--<h5 class="proj-videos-h5">Videos</h5>--}}
                                    <h2 class="title white left">Videos</h2>
                                </div>
                                <hr class="head-hr">
                                <div id="carouselExampleIndicators4" class="carousel slide" data-interval="false" data-ride="carousel">
                                    <div class="carousel-inner">
                                        @if($data['video_link'])
                                            @foreach($data['video_link'] as $index=>$video_link)
                                                <div class="carousel-item @if($index == 0) {{ 'active' }} @endif">
                                                    <iframe  height="300" src="{{$video_link}}?rel=0" style="width: 100%;" allow="autoplay; encrypted-media" allowfullscreen></iframe>


                                                    {{--<div class="youtube-player" style="height: 300px;" data-id="{{substr($data['video_link'][0],30)}}"></div>--}}
                                                </div>
                                            @endforeach
                                        @endif
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleIndicators4" role="button" data-slide="prev">
                                        {{--<span class="carousel-control-prev-icon" aria-hidden="true"></span>--}}
                                        {{--<span class="sr-only">Previous</span>--}}
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleIndicators4" role="button" data-slide="next">
                                        {{--<span class="carousel-control-next-icon" aria-hidden="true"></span>--}}
                                        {{--<span class="sr-only">Next</span>--}}
                                    </a>
                                </div>
                                <button  style="margin-top:10px;background-color: #ffffff !important; border: none !important; color: #0e56ae;" class="btbtbt" id="vbtnn">Watch More</button>
                                <div class="cont">

                                    <div class="demo-gallery">
                                        <ul id="lightgallery1">
                                            @if($data['video_link'])
                                                @foreach($data['video_link'] as $index=>$video_link)



                                                    <li class="first-item1" data-responsive="{{cdn()}}/images//gallery/{{$video_link}} 375, {{cdn()}}/images//gallery/{{$video_link}} 480, {{cdn()}}/images//gallery/{{$video_link}} 800" data-src="{{cdn()}}/images//gallery/{{$video_link}}"
                                                        data-pinterest-text="Pin it" data-tweet-text="share on twitter ">
                                                        <a href="" style="display: none;">
                                                            {{--<img class="img-responsive" src="{{cdn()}}/images//gallery/{{$video_link}}">--}}
                                                            <div class="demo-gallery-poster">
                                                            </div>
                                                        </a>
                                                    </li>
                                                @endforeach
                                            @endif
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container project-details" style="margin-bottom: 60px;">
        <div class="row">
            <div class="specifications-project col-md-12" style="background: #ffffff; width: 100%; height: auto;">
                @if($data['bank_images_count'] !=null || $data['brand_images_count'] !=null || $data['rtgs'] != null)
                    <div class="main-content-heading">
                        <h2 class="title left">FINANCE &AMP; RTGS</h2>
                    </div>


                @endif






                <div class="row" style="text-align: center;">

                    @if(isset($data['rtgs']))
                        @foreach($data['rtgs'] as $index=>$rtgs)



                            <div class="col-md-6 text-center" style="margin: 0 auto;">
                                <img src="{{cdn()}}/images//rtgs/{{$rtgs}}" alt="{{$rtgs}}">
                            </div>

                        @endforeach
                    @endif

                        <div class="col-md-6" style="margin: 0 auto;">
                    @if($data['bank_images_count'] !=null)
                                <div class="main-content-heading">
                                    <h2 class="title left" style="text-align: left;">FINANCE</h2>
                                </div>
                                <div class="row bank-img">
                                    @if($data['bankimagess'])
                                        @foreach($data['bankimagess'] as $index=>$bankimagess)
                                            <div class="col-md-3 col-6 nopadding">
                                                <div class="bank-div">
                                                    <img class="img-responsive "src="{{cdn()}}/images//bankimages/{{$bankimagess}}"  alt="{{$bankimagess}}">
                                                </div>
                                            </div>
                                        @endforeach
                                    @endif
                                </div>
                    @endif


                        @if($data['brand_images_count'] !=null)
                            <div class="main-content-heading">
                                <h2 class="title left" style="text-align: left;">BRAND SIGNED</h2>
                            </div>
                            <div class="row bank-img">
                                @if($data['brandimagess'])
                                    @foreach($data['brandimagess'] as $index=>$brandimagess)
                                        <div class="col-md-3 col-6 nopadding">
                                            <div class="bank-div">
                                                <img class="img-responsive "src="{{cdn()}}/images//bankimages/{{$brandimagess}}"  alt="{{$brandimagess}}">
                                            </div>
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                        @endif


                        </div>

                </div>

            </div>
            {{--@endif--}}
        </div>
    </div>

    <script src="{{ asset('js/projectdetails.js') }}"></script>
    <script>
        $(document).ready(function(){

            $(function() {
                $('.js-description_readmore').moreLines({
                    linecount: 4,
                    baseclass: 'b-description',
                    basejsclass: 'js-description',
                    classspecific: '_readmore',
                    buttontxtmore: "Read more",
                    buttontxtless: "Read less",
                    animationspeed: 250
                });
            });



            var iScroll = $(window).scrollTop();
            iScroll = iScroll + 300;
            $('html, body').animate({
                scrollTop: iScroll
            }, 50);




        });
    </script>

    <script>
        // $('.b-description_readmore_wrapper .js-description_readmore_wrapper\n').find('br').remove();
        $('br', "#pro-des").remove();

    </script>

    <script>

        // $('.b-description_readmore_wrapper .js-description_readmore_wrapper\n').find('br').remove();
        $('br', "#pro-des").remove();


    </script>



    @include('layouts.footer')
@endsection


@section('addlightgallery')

    <script src="https://cdn.jsdelivr.net/g/lightgallery@1.3.5,lg-fullscreen@1.0.1,lg-hash@1.0.1,lg-pager@1.0.1,lg-share@1.0.1,lg-thumbnail@1.0.1,lg-video@1.0.1,lg-autoplay@1.0.1,lg-zoom@1.0.3"></script>

@endsection
