@extends('layouts.layout')


@section('content')


    @include('layouts.header')




    <div class="top-content annual-report">

        {{--<div class="content-cover" style="height: 515px;"></div>--}}

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
                <li class='active'><a href='/investor/annual-report'>ANNUAL REPORTS</a></li>
                <li><a href='/investor/annual-report/balance-sheet'>BALANCE SHEET OF SUBSIDIARIES</a></li>
                <li><a href='/investor/annual-report/certificate-incorporation'>CERTIFICATE OF INCORPORATIONS</a></li>
                <li><a href='/investor/annual-report/moa-and-aoa'>MOA &AMP; AOA</a></li>
                <li><a href='/investor/annual-report/prospectus'>PROSPECTUS</a></li>




                <li class="dropdown">
                    <a href="#"  data-toggle="dropdown">CORPORATE ANNOUNCEMENT</a>
                    <ul class="dropdown-menu" style="margin:0px;padding:0px;">
                        <li><a href='https://www.bseindia.com/corporates/ann.aspx?scrip=532880%20&dur=A'>BSE</a></li>
                        <li><a href='https://www.nseindia.com/corporates/corporateHome.html?id=eqCorpAnnouncements&radio_btn=company&param=OMAXE'>NSE</a></li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a href="#"  data-toggle="dropdown">STOCK</a>
                    <ul class="dropdown-menu" style="margin:0px;padding:0px;">
                        <li><a href='https://www.bseindia.com/stock-share-price/omaxe-ltd/omaxe/532880/'>BSE</a></li>
                        <li><a href='https://www.nseindia.com/live_market/dynaContent/live_watch/get_quote/GetQuote.jsp?symbol=OMAXE'>NSE</a></li>
                    </ul>
                </li>

                {{--<li><a href='#'>CONTACT</a></li>--}}
            </ul>
        </nav>
    </header>

    {{--{{ Breadcrumbs::render('investors', "/about-us/awards-and-honors","Annual Reports") }}--}}

    <ol class="breadcrumb">

        <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>

        <li class="breadcrumb-item active">Investors</li>
        <li class="breadcrumb-item active">Annual Reports</li>

    </ol>


    {{--<nav aria-label="breadcrumb">--}}
    {{--<ol class="breadcrumb" style="font-size: 15px;">--}}
    {{--<li class="breadcrumb-item"><a href="#">Home</a></li>--}}
    {{--<li class="breadcrumb-item"><a href="#">Library</a></li>--}}
    {{--<li class="breadcrumb-item active" aria-current="page">Data</li>--}}
    {{--</ol>--}}
    {{--</nav>--}}

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
        </form>
    </section>

    <section class="invcon">
        <div class="container">

            <div class="col-md-12" style="margin-bottom: 100px;">
                <div class="row" id="reports-div">
                    @if($data['annual_reports'])
                        @foreach($data['annual_reports'] as $key =>$annual_report)
                            <div class="col-md-3 rep">
                                <figure>
                                    <img src="{{cdn()}}/investors/images/annual_reports/{{$annual_report->investor_image}}" style="width: 100%;" alt="">


                                    <figcaption class="repdata">
                                        <div class="row">
                                            <div class="col-9">
                                                <p>{{ucwords($annual_report->investors_title)}}</p>
                                                <p>{{ucwords($annual_report->report_year)}}</p>
                                            </div>

                                            <div class="col-3">
                                                <a href="/investor/prospectus/download/{{$annual_report->inv_pdf}}"> <img src="/images/static/PDF2.png" alt=""></a>
                                            </div>
                                        </div>
                                    </figcaption>
                                </figure>
                            </div>
                        @endforeach
                    @endif


                </div>

                <div style="float: right;" id="page_links">
                    {{$data['annual_reports']->links()}}
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
        var applyYear = function(){
            var a = document.getElementById('year');
            var year = a.options[a.selectedIndex].value;
            var url = "{{url('/investor/annual-report')}}";
            if(year == 0){
                window.location.href = url; return;
            }
            url += "?year=" + year;

            var div = document.getElementById('reports-div');
            $.get(url, function(data, status){
                if(status == "success"){
                    data = JSON.parse(data).data;
                    var contains = '';
                    var write = false;
                    for(var i=0; i < data.length; i++){
                        var next_year = parseInt(data[i].report_year); next_year++;
                        var temp = "<div class='col-md-3 rep'>";
                        temp +=    "<figure><div>";
                        temp +=    "<img src='{{cdn()}}/investors/images/annual_reports/" + data[i].investor_image +"' style='width: 100%;' alt=''></div><figcaption class='repdata'><div class='row'><div class='col-9'>";
                        temp += "<p>" + data[i].investors_title + "</p>";
                        temp += "<p>" + data[i].report_year +  "</p></div><div class='col-3'>";
                        temp += "<a href='/investor/prospectus/download/" + data[i].inv_pdf + "'><img src='/images/static/PDF2.png' alt=''></a></div></div></figcaption></figure></div>";
                        contains += temp;
                    }
                    div.innerHTML = contains;
                    document.getElementById("page_links").style = "display:none";
                }
            });
        }
    </script>
    @include('layouts.footer')
@endsection

