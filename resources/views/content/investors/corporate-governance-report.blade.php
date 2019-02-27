@extends('layouts.layout')


@section('content')


    @include('layouts.header')




    <div class="top-content invester-tab">
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
                <li><a href='/investor/corporate-governance'>CORPORATE GOVERNANCE</a></li>
                <li><a href='/investor/corporate-governance/committees-of-board-of-directors'>COMMITTEES OF BOARD OF DIRECTORS</a></li>
                <li><a href='/investor/corporate-governance/appointment-letters'>APPOINTMENT LETTERS</a></li>
                <li><a href='/investor/corporate-governance/resignation-letters'>RESIGNATION LETTERS</a></li>
                <li class='active'><a href='/investor/corporate-governance/corporate-governance-reports'>CORPORATE GOVERNANCE REPORT</a></li>

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
            </ul>
        </nav>
    </header>

    {{--{{ Breadcrumbs::render('corporategov', "/about-us/awards-and-honors","Corporate Governance Reports") }}--}}

    <ol class="breadcrumb">

        <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>

        <li class="breadcrumb-item active">Investors</li>
        <li class="breadcrumb-item active">Corporate Governance</li>
        <li class="breadcrumb-item active">Corporate Governance Reports</li>

    </ol>

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
            </select>
            </div>
            <!-- end of quarter dropdown -->
        </form>
    </section>


    <section class="invcon">
        <div class="container" style="margin-bottom: 100px;">

            <div class="col-md-12">
                <div class="row" id="reports-div">
                    @if($data['annual_reports'])
                        @foreach($data['annual_reports'] as $key =>$annual_report)
                            <div class="col-md-3 rep">
                                <figure style="text-align: center;background: #f5f5f5; padding: 10px;">
                                    <a href="/investor/prospectus/download/{{$annual_report->inv_pdf}}"> <img src="{{cdn()}}/images/static/PDF.png" alt=""></a>

                                    <figcaption class="repdata">
                                        <p>
                                            {{ucwords( \Illuminate\Support\Str::limit($annual_report->investors_title, 68))}}
                                        </p>
                                    </figcaption>

                                </figure>
                            </div>
                        @endforeach
                    @endif


                </div>

                <div style="float: right;" id="page-links">
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
    var last_year = 0;
    var applyYear = function(){
        var a = document.getElementById('year');
        var year = a.options[a.selectedIndex].value;

        var b = document.getElementById('qtr');
        var qtr = 0;
        if(b.selectedIndex > -1) qtr = b.options[b.selectedIndex].value;

        var url = "{{url('/investor/corporate-governance/corporate-governance-reports')}}";
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
                for(var i=0; i < data.length; i++){
                    var temp = "<div class='col-md-3 rep'><figure style='text-align: center; background: #f5f5f5; padding: 10px;'><a href='/investor/prospectus/download/" + data[i].inv_pdf + "'> <img src='{{cdn()}}/images/static/PDF.png' alt=''></a><figcaption class='repdata'> <p>" + data[i].investors_title + "</p></figcaption></figure></div>";
                    contains += temp;
                }
                div.innerHTML = contains;
                document.getElementById("page-links").style = "display:none";

                if(year != last_year){
                    var show = false;
                    var b = document.getElementById('qtr');
                    for(var i=0; i < qtrs.length; i++){
                        b.options[i+1] = new Option(qtrs[i].report_qtr, qtrs[i].report_qtr);
                        show = true;
                    }
                    if(show){
                        b.options[0] = new Option('Select Quarter', 0);
                        b.style = "display:block";
                    }else{
                        b.style = "display:none";
                    }
                }
                last_year = year;
            }
        });
    }
    </script>
    @include('layouts.footer')
@endsection

