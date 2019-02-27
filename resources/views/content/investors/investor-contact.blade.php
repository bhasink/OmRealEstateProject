@extends('layouts.layout')


@section('content')


    @include('layouts.header')


    <style>

        .has-error{
            border: 1px solid red;
        }
        .nothas-error{
            border: 1px solid green;
        }

    </style>



    <div class="top-content invester-contact">

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
                <li class="active"><a href='/investor/csr/event'>INVESTOR CONTACT</a></li>

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

    {{--{{ Breadcrumbs::render('investors', "/about-us/awards-and-honors","Investor Contact") }}--}}


    <ol class="breadcrumb">

        <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>

        <li class="breadcrumb-item active">Investors</li>
        <li class="breadcrumb-item active">Investor Contact</li>

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
                {{--<select name="" id="" class="invest-select">--}}
                    {{--<option value="">Select Year</option>--}}
                    {{--<option  value="">SELECT FINANCIAL YEAR</option>--}}
                    {{--<option  value="">SELECT FINANCIAL YEAR</option>--}}
                    {{--<option  value="">SELECT FINANCIAL YEAR</option>--}}
                    {{--<option  value="">SELECT FINANCIAL YEAR</option>--}}
                {{--</select>--}}
            {{--</div>--}}
        {{--</form>--}}
    {{--</section>--}}

    <section class="invcon">
        <div class="flash-message">
            {{--@foreach (['danger', 'warning', 'success', 'info'] as $msg)--}}
            @if(Session::has('alert-success'))
                <script> alert('Thank you for your interest. We will get back to you sortly.')</script>
            @endif
            @if(Session::has('alert-danger'))
                <script> alert('Thanks, Problem while submitting.')</script>
            @endif
            {{--@endforeach--}}
        </div>
        <div class="container formcon">
            <div class="row">
                <div class="col-md-12 text-center">
                    <br>
                    <h4>Thank you for your interest in Omaxe. </h4>
                    <br>
                    <p>We take pride in your association with us and the faith reposed on us. Your query is important to us, and you can be sure of a reply at the earliest. You are requested to keep your message as short and specific as possible. If you require any reference material, you are required to include your mailing address.</p>
                </div>
            </div>



            <div class="main-content-heading" style="margin-top:50px; margin-bottom: 50px;">
                <h1 style="text-align: center;text-transform: uppercase;    letter-spacing: 1px;  font-weight: 300 !important; ">GET IN TOUCH </h1>
                <p style="text-align: center; font-size:14px;letter-spacing: 1px; font-weight: 400;">Please fill in the following details. We will get back to you shortly.</p>
            </div>

            <div class="col-md-12" style="margin-bottom: 50px;">

                {!! Form::open(array('action' => 'InvestorsController@investor_contact', 'method' => 'post','id'=>'contact_formm','enctype' => 'multipart/form-data')) !!}

                <div class="form-row">
                    <div class="col-md-6 mb-3">
                        <label for="validationServer01">NAME</label>
                        <input type="text" name="name" class="form-control {{ $errors->has('name') ? 'has-error' : '' }}" id="validationServer01" placeholder="Name..." value="" required>
                        <span class="text-danger">{{ $errors->first('name') }}</span>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="validationServer02">ADDRESS</label>
                        <input type="text" class="form-control {{ $errors->has('address') ? 'has-error' : '' }}" id="validationServer02" placeholder="Address..."  name="address" value="" required>
                        <span class="text-danger">{{ $errors->first('address') }}</span>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-6 mb-3">
                        <label for="validationServer01">EMAIL</label>
                        <input type="text"  name="email" class="form-control {{ $errors->has('email') ? 'has-error' : '' }}" id="validationServer01" placeholder="Email..." value="" required>
                        <span class="text-danger">{{ $errors->first('email') }}</span>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="validationServer02">PHONE</label>
                        <input class="form-control {{ $errors->has('phone') ? 'has-error' : '' }}"  name="phone" type="tel" id="demo"   placeholder="" value="" required>
                        <span class="text-danger">{{ $errors->first('phone') }}</span>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                </div>

                <div class="form-row">
                    {{--<div class="col-md-6 mb-3">--}}
                        {{--<label for="validationServer02">TYPE OF QUERY</label>--}}
                        {{--<input type="text" class="form-control {{ $errors->has('query_type') ? 'has-error' : '' }}"  name="query_type" id="validationServer02" placeholder="Type Of Query..." value="" required>--}}
                        {{--<span class="text-danger">{{ $errors->first('query_type') }}</span>--}}
                        {{--<div class="valid-feedback">--}}
                            {{--Looks good!--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    <div class="col-md-6 mb-3">
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">QUERY / GRIEVANCE</label>
                            <textarea class="form-control {{ $errors->has('query') ? 'has-error' : '' }}"  name="query" id="exampleFormControlTextarea1" rows="3"></textarea>
                            <span class="text-danger">{{ $errors->first('query') }}</span>
                        </div>
                    </div>


                    <div class="col-md-6 mb-3">

                        <div class="form-group">
                            <div class="col-md-12 inputGroupContainer">
                                <label for="ReCaptcha">Recaptcha:</label>
                                {!! NoCaptcha::renderJs() !!}
                                {!! NoCaptcha::display() !!}
                            </div>
                        </div>
                        <span class="text-danger">{{ $errors->first('g-recaptcha-response') }}</span>

                    </div>

                </div>




                <div class="form-row">
                    {{--<div class="col-md-6 mb-3">--}}
                    {{--<label for="validationServer02">ENTER CAPTCHA</label>--}}
                    {{--<input type="text" class="form-control " id="validationServer02" placeholder="Enter Captcha..." value="" required>--}}
                    {{--<div class="valid-feedback">--}}
                    {{--Looks good!--}}
                    {{--</div>--}}
                    {{--</div>--}}


                    <div class="col-md-6 mb-3">
                    </div>

                    <div class="col-md-6 mb-3">
                        <button class="btn btn-primary inv-btn" type="submit">Submit</button>
                    </div>

                </div>
                {!! Form::close() !!}




            </div>




        </div>
    </section>



    <section class="investor-con">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 mb-3">
                    <div class="main-content-heading" style="margin-top:50px; margin-bottom: 0px;">
                        <h2 class="con-h" style="text-align: center;text-transform: uppercase; text-decoration: none !important;   letter-spacing: 1px;  !important; ">INVESTORS AT OMAXE</h2>
                        {{--<p style="text-align: center; font-size:14px;letter-spacing: 1px; font-weight: 400;">Please fill in the following details. We will get back to you shortly.</p>--}}
                    </div>
                    {{--<h5 class="con-h">INVESTORS AT OMAXE</h5>--}}
                    <p class="con-p" style="height: 350px;">
                        COMPLIANCE OFFICER
                        OMAXE HOUSE, 7 LOCAL SHOPPING CENTRE
                        KALKAJI, NEW DELHI- 110019
                        <br><br>
                        <b>Nodal Officer-IEPF,  Shubha Singh</b>
                        <br>
                        <b>EMAIL-</b> <b>investors@omaxe.com</b>
                        <br>
                        <b style="visibility: hidden;">EMAIL-</b> <b>secretarial_1@omaxe.com</b>
                        <br>
                        <b>TEL: </b> +91-11- 41896680-85
                        <br>
                        <b>FAX:</b>  +91-11- 41896653
                        <br>
                    </p>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="main-content-heading" style="margin-top:50px; margin-bottom: 0px;">
                        <h2 class="con-h" style="text-align: center;text-transform: uppercase; text-decoration: none !important;   letter-spacing: 1px; !important; ">REGISTRAR & SHARE TRANSFER AGENT</h2>
                        {{--<p style="text-align: center; font-size:14px;letter-spacing: 1px; font-weight: 400;">Please fill in the following details. We will get back to you shortly.</p>--}}
                    </div>
                    {{--<h5 class="con-h">REGISTRAR & SHARE TRANSFER AGENT</h5>--}}
                    <p class="con-p" style="height: 350px;">
                        LINK INTIME INDIA PVT LIMITED

                        NOBLE HEIGHTS, 1ST FLOOR, PLOT NH 2

                        C-1 BLOCK LSC, NEAR SAVITRI MARKET

                        JANAKPURI, NEW DELHI -  110058
                        {{--LINK INTIME INDIA PVT. LTD.--}}
                        {{--44, COMMUNITY CENTRE, 2ND FLOOR,--}}
                        {{--NARAINA INDUSTRIAL AREA, PHASE-I--}}
                        {{--NEAR PVR NARAINA, NEW DELHI 110028--}}
                        <br> <br>
                        <b>EMAIL-</b>  <b>delhi@linkintime.co.in</b>
                        {{--DELHI@LINKINTIME.CO.IN--}}
                        <br>
                        <b>TEL: </b>  +91 11 41410592, 93, 94
                        <br>
                            <b>FAX:</b>  +91 11 41410591
                    </p>
                </div>
                <div class="col-md-4 mb-3">
                    {{--<h5 class="con-h">DEBENTURE TRUSTEE</h5>--}}
                    <div class="main-content-heading" style="margin-top:50px; margin-bottom: 0px;">
                        <h2 class="con-h" style="text-align: center;text-transform: uppercase; text-decoration: none !important;   letter-spacing: 1px;  !important; ">DEBENTURE TRUSTEE</h2>
                        {{--<p style="text-align: center; font-size:14px;letter-spacing: 1px; font-weight: 400;">Please fill in the following details. We will get back to you shortly.</p>--}}
                    </div>
                    <p class="con-p" style="height: 350px;">
                        AXIS TRUSTEE SERVICES LIMITED,
                        AXIS HOUSE, 2ND FLOOR, WADIA INTERNATIONAL CENTRE,
                        BOMBAY DYEING MILLS COMPOUND,
                        PANDURANG BUDHKAR MARG,
                        WORLI, MUMBAI-400025.
                        <br>
                        <b>EMAIL-</b> <b>mangalagowri.bhai@axistrustee.com</b>
                        {{--MANGALAGOWRI.BHAI@AXISTRUSTEE.COM--}}
                        <br>
                        <b>TEL: </b> (022) 24255227,24255215,
                        <br>
                        <b>FAX:</b> (022) 2425 4200



                    </p>
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

