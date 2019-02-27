@extends('layouts.layout')
@section('content')
    @include('layouts.header')
    <style>
        .top-content{
            margin-bottom: 0px;
            height: 515px;
        }
    </style>
    <div class="top-content omaxe-care-banner">
    </div>
    <header>
        <nav id='cssmenu'>
            <div id="head-mobile"></div>
            <div class="button-cont button" onclick="myFunction(this)">
                <div class="bar1"></div>
                <div class="bar2"></div>
                <div class="bar3"></div>
            </div>            <ul>
                <li class='active'><a href='/care/omaxe-care'>OMAXE CARE</a></li>
                <li><a href='/care/nri-care'>NRI CARE</a></li>
                <li><a href='/care/associate'>ASSOCIATES</a></li>
                <li><a href='/care/vendors'>VENDORS</a></li>
                <li><a href='/care/buyers-guide'>BUYERS GUIDE</a></li>
            </ul>
        </nav>
    </header>
    {{--{{ Breadcrumbs::render('disclaimer', "/about-us/awards-and-honors","Current Openings") }}--}}
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
        <li class="breadcrumb-item active">Care</li>
        <li class="breadcrumb-item active">Omaxe Care</li>
    </ol>
    <section class="invcon">
        <div class="container omaxe-care-page">
            <div class="row omaxe-care">
                <div class="col-md-6">
                    <div class="border-right">
                        <p class="care-title">Project Query</p>
                        <p>Call :<a href="tel:+91-9015161718"> +91-9015161718 </a>(10 am to 6 pm IST)</p>
                        <p>SMS : OMAXE to 56677</p>
                        <p>Email : <a href="mailto:sales@omaxe.com">sales@omaxe.com</a></p>
                    </div>
                </div>
                <div class="col-md-6">
                    <p class="care-title">Customer Care</p>
                    <p>Toll Free:<a href="tel:18001020064"> 18001020064 </a>(10 am to 6 pm IST)</p>
                    <p>For RIs :<a href="mailto:care@omaxe.com"> care@omaxe.com</a></p>
                    <p>For NRIs :<a href="mailto:nricare@omaxe.com"> nricare@omaxe.com</a></p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 rep">
                    <figure>
                        <a target="_blank" href="/omaxe-care/RBICircular-CTS-03-09-2012.pdf"> <img src="/images/static/PDF.png" alt=""></a>
                        <figcaption class="repdata">
                            <p>Standardization and Enhancement of Security Features in Cheque Forms-Migrating to CTS 2010     standards.</p>
                        </figcaption>
                    </figure>
                </div>
                <div class="col-md-3 rep">
                    <figure>
                        <a target="_blank" href="/omaxe-care/REQUEST-FOR-UPDATION-OF-DETAILS.pdf"> <img src="/images/static/PDF.png" alt=""></a>
                        <figcaption class="repdata">
                            <p>Request for updation of details.</p>
                        </figcaption>
                    </figure>
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