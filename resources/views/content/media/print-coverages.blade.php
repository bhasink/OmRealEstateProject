@extends('layouts.layout')


@section('content')


    @include('layouts.header')


    <style>
        .top-content{
            margin-bottom: 0px;
            height: 515px;
        }
    </style>



    <div class="top-content print-coverage-banner">

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
                <li class='active'><a href='/media/print-coverages'>PRINT COVERAGES</a></li>
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



    {{--{{ Breadcrumbs::render('investors', "/about-us/awards-and-honors","Print Coverages") }}--}}


    <ol class="breadcrumb">

        <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>

        <li class="breadcrumb-item active">Media</li>
        <li class="breadcrumb-item active">Print Coverages</li>

    </ol>

    <section id="omaxe-sucks">
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

                    {{--<option value="0">Select Month</option>--}}
                    {{--<option value="Jan">Jan</option>--}}
                    {{--<option value="Feb">Feb</option>--}}
                    {{--<option value="Mar">Mar</option>--}}
                    {{--<option value="Apr">Apr</option>--}}
                    {{--<option value="May">May</option>--}}
                    {{--<option value="Jun">Jun</option>--}}
                    {{--<option value="Jul">Jul</option>--}}
                    {{--<option value="Aug">Aug</option>--}}
                    {{--<option value="Sep">Sep</option>--}}
                    {{--<option value="Oct">Oct</option>--}}
                    {{--<option value="Nov">Nov</option>--}}
                    {{--<option value="Dec">Dec</option>--}}








                </select>
            </div>
            <!-- end of quarter dropdown -->
        </form>
    </section>





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
        <div class="container" id="doc_container" style="margin-bottom: 100px;">

            <div class="col-md-12">


                <div class="row" id="reports-div">
                    @if($data['ad_campaigns'])
                        @foreach($data['ad_campaigns'] as $key =>$ad_campaigns)

                            <div class="col-md-3 rep">
                                <figure>
                                        <a href="{{cdn()}}/media/images/{{$ad_campaigns->media_image}}" target="_blank">
                                        <img height="200" width="100%" src="{{cdn()}}/media/images/{{$ad_campaigns->media_image}}" alt="">
                                        </a>

                                    <figcaption class="repdata p-10">
                                        <p>{{ucwords($ad_campaigns->media_title)}}</p>

                                    </figcaption>

                                </figure>

                                {{--<div class="repdata">--}}
                             {{--<span class="one">--}}
                                {{--<p>{{ucwords($ad_campaigns->media_title)}}</p>--}}
{{--                                <p>{{ucwords($ad_campaigns->report_year)}}-{{$ad_campaigns->report_year+1}}</p>--}}
                             {{--</span>--}}
                                    {{--<span class="two">--}}
                                        {{--<a href="/investor/prospectus/download/{{$ad_campaigns->inv_pdf}}"> <img src="/images/static/PDF2.png" alt=""></a>--}}
                                    {{--</span>--}}
                                {{--</div>--}}
                            </div>
                        @endforeach
                    @endif


                </div>


                <div class="text-right" id="page_links">
                    {{$data['ad_campaigns']->links()}}
                </div>

            </div>
        </div>
    </section>
    </section>
    <script src="{{ asset('js/projectstatic.js') }}"></script>
    <script>
        var iScroll = $(window).scrollTop();
        iScroll = iScroll + 300;
        $('html, body').animate({
            scrollTop: iScroll
        }, 50);
    </script>

    {{--<script>--}}
        {{--var applyYear = function(){--}}
            {{--var a = document.getElementById('year');--}}
            {{--var year = a.options[a.selectedIndex].value;--}}
            {{--var url = "{{url('/media/print-coverages')}}";--}}
            {{--if(year == 0){--}}
                {{--window.location.href = url; return;--}}
            {{--}--}}
            {{--url += "?year=" + year;--}}

            {{--var div = document.getElementById('reports-div');--}}
            {{--$.get(url, function(data, status){--}}
                {{--if(status == "success"){--}}
                    {{--data = JSON.parse(data).data;--}}
                    {{--var contains = '';--}}
                    {{--var write = false;--}}
                    {{--for(var i=0; i < data.length; i++){--}}
                        {{--var next_year = parseInt(data[i].report_year); next_year++;--}}
                        {{--var temp = "<div class='col-md-3 rep'>";--}}
                        {{--temp +=    "<figure><div>";--}}
                        {{--temp +=    "<a href='{{cdn()}}/media/images/{{$ad_campaigns->media_image}}\" target=\"_blank\">\n" +--}}
                            {{--"                                        <img height=\"200\" width=\"100%\" src=\"{{cdn()}}/media/images/{{$ad_campaigns->media_image}}' target='_blank' >";--}}
                        {{--temp +=    "<img src='{{cdn()}}/media/images/" + data[i].media_image +"' height='200' width='100%' alt=''></a></div> <figcaption class='repdata'> <div class='row'> <div class='col-9'>";--}}
                        {{--temp += "<p>" + data[i].media_title + "</p>";--}}

                        {{--temp += "    </div> </div> </figcaption> </figure></div>";--}}
                        {{--contains += temp;--}}
                    {{--}--}}
                    {{--div.innerHTML = contains;--}}
                    {{--document.getElementById("page_links").style = "display:none";--}}
                {{--}--}}
            {{--});--}}
        {{--}--}}
    {{--</script>--}}





    {{--<script>--}}
        {{--var last_year = 0;--}}
        {{--var applyYear = function(){--}}
            {{--var a = document.getElementById('year');--}}
            {{--var year = a.options[a.selectedIndex].value;--}}

            {{--var b = document.getElementById('qtr');--}}
            {{--var qtr = 0;--}}
            {{--if(b.selectedIndex > -1) qtr = b.options[b.selectedIndex].value;--}}




            {{--var url = "{{url('/media/print-coverages')}}";--}}
            {{--if(year == 0){--}}
                {{--window.location.href = url; return;--}}
            {{--}--}}
            {{--url += "?year=" + year + "&qtr=" + qtr;--}}

            {{--var div = document.getElementById('reports-div');--}}
            {{--$.get(url, function(response, status){--}}
                {{--if(status == "success"){--}}
                    {{--var data = JSON.parse(response).reports.data;--}}
                    {{--var qtrs = JSON.parse(response).quarters;--}}
                    {{--var contains = '';--}}
                    {{--var write = false;--}}


                    {{--if(year != last_year){--}}
                        {{--var show = false;--}}
                        {{--var b = document.getElementById('qtr');--}}
                        {{--for(var i=0; i < qtrs.length; i++){--}}
{{--//                            b.options[i+1] = new Option(qtrs[i].report_qtr, qtrs[i].report_qtr);--}}
                            {{--show = true;--}}
                        {{--}--}}
                        {{--if(show){--}}
{{--//                            b.options[0] = new Option('Select Quarter', 0);--}}
                            {{--b.style = "display:block";--}}
                        {{--}else{--}}
                            {{--b.style = "display:none";--}}
                        {{--}--}}
                    {{--}--}}
                    {{--last_year = year;--}}


                    {{--if(data.length == 0){--}}
                        {{--contains = "<div class='col-md-12 text-center'><h3>No Results...</h3></div>";--}}
                    {{--}--}}


                    {{--for(var i=0; i < data.length; i++){--}}

{{--//                        var temp = "<div class='col-md-3 rep'><figure><div><img src='{{cdn()}}/media/images/" + data[i].media_image +"' height='200' width='100%' alt=''></div><figcaption class='repdata'><div class='row'><div class='col-md-9'><p>" + data[i].media_title + "</p></div><div class='col-md-3'><a href='/media/ad_campaigns/download/" + data[i].media_pdf + "'><img src='/images/static/PDF2.png' alt=''></a></div></div></figcaption></figure></div>";--}}
{{--//--}}
{{--//                        contains += temp;--}}


                        {{--var next_year = parseInt(data[i].report_year); next_year++;--}}
                        {{--var temp = "<div class='col-md-3 rep'>";--}}
                        {{--temp +=    "<figure><div>";--}}
                        {{--temp +=    "<a href='{{cdn()}}/media/images/{{$ad_campaigns->media_image}}\" target=\"_blank\">\n" +--}}
                            {{--"                                        <img height=\"200\" width=\"100%\" src=\"{{cdn()}}/media/images/{{$ad_campaigns->media_image}}' target='_blank' >";--}}
                        {{--temp +=    "<img src='{{cdn()}}/media/images/" + data[i].media_image +"' height='200' width='100%' alt=''></a></div> <figcaption class='repdata'> <div class='row'> <div class='col-9'>";--}}
                        {{--temp += "<p>" + data[i].media_title + "</p>";--}}

                        {{--temp += "    </div> </div> </figcaption> </figure></div>";--}}
                        {{--contains += temp;--}}

                    {{--}--}}
                    {{--div.innerHTML = contains;--}}






                    {{--document.getElementById("page-links").style = "display:none";--}}


                {{--}--}}
            {{--});--}}
        {{--}--}}
    {{--</script>--}}





    <script>
        var last_year = 0;
        var applyYear = function(u){
            var a = document.getElementById('year');
            var year = a.options[a.selectedIndex].value;

            var b = document.getElementById('qtr');
            var qtr = 0;
            if(b){
                if(b.selectedIndex > -1) qtr = b.options[b.selectedIndex].value;
            }
            if(typeof(u) === 'undefined'){
                var url = "{{url('/media/print-coverages')}}" + "?year=" + year + "&qtr=" + qtr;
            }else{
                var url = u + "&year=" + year + "&qtr=" + qtr;
            }

            var div = document.getElementById('reports-div');
            $.get(url, function(response, status){


                if(status == "success"){
                    document.getElementById('omaxe-sucks').innerHTML = response;
                }
//                else{
//                    document.getElementById('omaxe-sucks').innerHTML =  "<div class='col-md-12 text-center'><h3>No Results...</h3></div>";
//                }
            });
        }
    </script>
    <script>

        $(function() {
            $('body').on('click', '.pagination a', function(e) {
                e.preventDefault();
                var url = $(this).attr('href');
                applyYear(url);
                window.history.pushState("", "", url);
            });
        });

    </script>










    @include('layouts.footer')
@endsection

