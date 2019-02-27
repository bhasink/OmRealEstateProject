@extends('layouts.layout')


@section('content')


    @include('layouts.header')


    <style>
        .top-content{
            margin-bottom: 0px;
            height: 515px;
        }
    </style>



    <div class="top-content press-release-banner">

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
                <li class='active'><a href='/media/press-releases'>PRESS RELEASES</a></li>
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


    {{--{{ Breadcrumbs::render('investors', "/about-us/awards-and-honors","Press Releases") }}--}}

    <ol class="breadcrumb">

        <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>

        <li class="breadcrumb-item active">Media</li>
        <li class="breadcrumb-item active">Press Releases</li>

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




    <section class="inv">
        <form action="#">
            <div class="text-center ">
                <?php if(isset($data['years']) && count($data['years'])) { ?>
                <select name="year" id="year" class="invest-select" onchange="return applyYear();">
                    <option value="0" >Select Year</option>
                    <?php foreach($data['years'] as $year) { ?>
                    <option  value="<?php echo $year->report_year;?>" ><?php echo $year->report_year;?></option>
                    <?php } ?>
                </select>
                <?php } ?>
            </div>

            <!-- Quarter dropdown, design and place this as you please -->
            <div class="text-center ">
                <select name="qtr" id="qtr" class="invest-select" onchange="return applyYear();" style="display:none">
                    <!-- Do not create options manually, options will be created dynamically -->

                    <option value="0">Select Quarter</option>
                    <option value="Jan-Mar">Jan-Mar</option>
                    <option value="Apr-Jun">Apr-Jun</option>
                    <option value="Jul-Sep">Jul-Sep</option>
                    <option value="Oct-Dec">Oct-Dec</option>

                </select>
            </div>
            <!-- end of quarter dropdown -->
        </form>
    </section>




    <section class="invcon press-release">
        <div class="container" style="margin-bottom: 100px;">

            <div class="col-md-12">


                <div class="row" id="reports-div">
                    @if($data['ad_campaigns'])
                        @foreach($data['ad_campaigns'] as $key =>$ad_campaigns)
                            <div class="col-md-3 rep">
                                <figure>
                                    <a  href="javascript:void(0)">
                                        <img height="200" width="100%" src="{{cdn()}}/media/images/{{$ad_campaigns->media_image}}" alt="">
                                    </a>


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

                                {{--<div class="repdata">--}}
                             {{--<span class="one">--}}
                                {{--<p>{{ucwords($ad_campaigns->media_title)}}</p>--}}
                             {{--</span>--}}
                                    {{--<span class="two">--}}
                                {{--<a href="/media/ad_campaigns/download/{{$ad_campaigns->media_pdf}}"> <img src="/images/static/PDF2.png" alt=""></a>--}}
                            {{--</span>--}}
                                {{--</div>--}}
                            </div>
                        @endforeach
                    @endif


                </div>


                <div style="float: right;" id="page-links">
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



    <script>
        var last_year = 0;
        var applyYear = function(){
            var a = document.getElementById('year');
            var year = a.options[a.selectedIndex].value;

            var b = document.getElementById('qtr');
            var qtr = 0;
            if(b.selectedIndex > -1) qtr = b.options[b.selectedIndex].value;




            var url = "{{url('/media/press-releases')}}";
            if(year == 0){
                window.location.href = url; return;
            }
            url += "?year=" + year + "&qtr=" + qtr;

            var div = document.getElementById('reports-div');
            $.get(url, function(response, status){
                if(status == "success"){
                    var data = JSON.parse(response).reports.data;
                    var qtrs = JSON.parse(response).quarters;
                    var contains = '';
                    var write = false;


                    if(year != last_year){
                        var show = false;
                        var b = document.getElementById('qtr');
                        for(var i=0; i < qtrs.length; i++){
//                            b.options[i+1] = new Option(qtrs[i].report_qtr, qtrs[i].report_qtr);
                            show = true;
                        }
                        if(show){
//                            b.options[0] = new Option('Select Quarter', 0);
                            b.style = "display:block";
                        }else{
                            b.style = "display:none";
                        }
                    }
                    last_year = year;

                    if(data.length == 0){
                        contains = "<div class='col-md-12 text-center'><h3>No Results...</h3></div>";
                    }


                    for(var i=0; i < data.length; i++){

//                        var temp = "<div class='col-md-3 rep'><figure><div><img src='{{cdn()}}/media/images/" + data[i].media_image +"' height='200' width='100%' alt=''></div><figcaption class='repdata'><div class='row'><div class='col-md-9'><p>" + data[i].media_title + "</p></div><div class='col-md-3'><a href='/media/ad_campaigns/download/" + data[i].media_pdf + "'><img src='/images/static/PDF2.png' alt=''></a></div></div></figcaption></figure></div>";
//
//                        contains += temp;

                        var temp = "<div class='col-md-3 rep'><figure><div><img src='{{cdn()}}/media/images/" + data[i].media_image +"' height='200' width='100%' alt=''></div><figcaption class='repdata'><div class='row'><div class='col-md-9'><p>" + data[i].media_title + "</p></div><div class='col-md-3'><a href='/media/ad_campaigns/download/" + data[i].media_pdf + "'><img src='/images/static/PDF2.png' alt=''></a></div></div></figcaption></figure></div>";

                        contains += temp;

                    }
                    div.innerHTML = contains;

                    document.getElementById("page-links").style = "display:none";


                }
            });
        }
    </script>


    @include('layouts.footer')
@endsection

