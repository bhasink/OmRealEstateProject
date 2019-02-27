@extends('layouts.layout')
@section('content')
    @include('layouts.header')

    <style>
        .top-content{
            margin-bottom: 0px;
            height: 515px;
        }
        .col-md-6.col-sm-12.contact-data p {
            font-size: 14px;
            word-spacing: 2px;
            font-weight: 300;
        }
        .col-md-6.col-sm-12.contact-data h3 {
            font-size: 18px;
            font-weight: bold;
        }
        .invconf{
            padding: 20px;
        }
        .contact-data{
            padding: 20px;
            padding-left: 50px;
        }
    </style>


    <div class="top-content contact">


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
                <li class="active"><a href='/contact-us/offices'>OFFICES</a></li>
                <li ><a href='/contact-us/regional-offices'>REGIONAL OFFICES</a></li>
                <li><a href='/contact-us/send-enquiry'>SEND ENQUIRY</a></li>
            </ul>

        </nav>
    </header>





    <section class="invconf">
        <div class="container">

            <div class="col-md-12">
                <div class="main-content-heading" style="margin-bottom: 50px;">
                    <h1 style="    color: #0262b5;text-align: center;text-transform: uppercase;    letter-spacing: 1px;  font-weight: 300 !important; ">CORPORATE &AMP; REGISTERED OFFICE</h1>
                    <p style="text-align: center; font-size:14px;letter-spacing: 1px; font-weight: 400;">
                        CIN : L74899HR1989PLC051918
                    </p>
                </div>
                <div class="row">
                        <div class="col-md-6 col-sm-12 contact-data" style="width: 100%;">
                            <p>Omaxe House, 7, LSC, Kalkaji,
                                <br>
                                New Delhi – 110019 (India)
                            </p>
                            <br>
                            <h3>Registered Office</h3>
                            <br>
                            <p>
                                Shop No. 19 B, First Floor,
                                <br>
                                Omaxe Celebration Mall, Sohna Road,
                                <br>
                                Gurgaon, Haryana- 122001
                            </p>
                            <br>
                            <h3>Telephone:</h3>
                            <br>
                            <p>+91-11- 41893100,
                                <br>
                                41896680,
                                41896776</p>
                            <br>
                            <h3>Fax:</h3>
                            <p>+91-11- 41896653</p>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <iframe width="100%" height="350" frameborder="0" style="border:0"
                                    src="https://www.google.com/maps/embed/v1/place?q=omaxe%20lt&key=AIzaSyDFYxLwNCfOxCn3mPtuuAndm4AX7yk4YZA" allowfullscreen></iframe>
                        </div>
                </div>



            </div>

        </div>
    </section>
    @include('layouts.footer')
    <script src="{{ asset('js/projectstatic.js') }}"></script>
@endsection
