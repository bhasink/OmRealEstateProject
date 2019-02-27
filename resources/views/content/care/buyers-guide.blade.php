@extends('layouts.layout')
@section('content')
    @include('layouts.header')
    <style>
        .top-content{
            margin-bottom: 0px;
            height: 515px;
        }
    </style>



    <div class="top-content buyers-guide-banner">


    </div>

    <header>
        <nav id='cssmenu'>
            <div id="head-mobile"></div>
            <div class="button-cont button" onclick="myFunction(this)">
                <div class="bar1"></div>
                <div class="bar2"></div>
                <div class="bar3"></div>
            </div>            <ul>
                <li><a href='/care/omaxe-care'>OMAXE CARE</a></li>
                <li><a href='/care/nri-care'>NRI CARE</a></li>
                <li><a href='/care/associate'>ASSOCIATES</a></li>
                <li><a href='/care/vendors'>VENDORS</a></li>
                <li class='active'><a href='/care/buyers-guide'>BUYERS GUIDE</a></li>

            </ul>
        </nav>
    </header>





    {{--{{ Breadcrumbs::render('disclaimer', "/about-us/awards-and-honors","Current Openings") }}--}}


    <ol class="breadcrumb">

        <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>

        <li class="breadcrumb-item active">Care</li>
        <li class="breadcrumb-item active">Buyers Guide</li>

    </ol>


    <section class="invcon">
        <div class="container omaxe-care-page buyers-guide2">

            <div class="row">
                <div class="col-md-12">
                    <h4 class="nri-form-title">Check list</h4>
                </div>
            </div>

            <div class="row">
                <div class="col-md-3 rep">
                    <figure>
                        <a target="_blank" href="/images/buyers-guide/Definitions-and-Interpretation.pdf">
                            <img src="/images/static/PDF.png" alt=""></a>

                        <figcaption class="repdata">
                            <p>Definitions and Interpretations.</p>

                        </figcaption>

                    </figure>
                </div>

                <div class="col-md-3 rep">
                    <figure>
                        <a target="_blank" href="/images/buyers-guide/points.pdf">
                            <img src="/images/static/PDF.png" alt=""></a>

                        <figcaption class="repdata">
                            <p> Documents Required for Booking a Property.</p>

                        </figcaption>

                    </figure>
                </div>

                <div class="col-md-3 rep">
                    <figure>
                        <a target="_blank" href="/images/buyers-guide/Downloads_14_Change-Correspondence-Address.pdf">
                            <img src="/images/static/PDF.png" alt=""></a>

                        <figcaption class="repdata">
                            <p> Documents Required for change of Correspondence Address . </p>

                        </figcaption>

                    </figure>
                </div>

                <div class="col-md-3 rep">
                    <figure>
                        <a target="_blank" href="/images/buyers-guide/Downloads_15_Change-permanent-Address-before-execution-of-Agreement.pdf">
                            <img src="/images/static/PDF.png" alt=""></a>

                        <figcaption class="repdata">
                            <p>Documents Required for change of Permanent Address, before Execution of Agreement. </p>

                        </figcaption>

                    </figure>
                </div>
            </div>

            <div class="row">
                <div class="col-md-3 rep">
                    <figure>
                        <a target="_blank" href="/images/buyers-guide/Downloads_16_Correction-of-Name-before-Execution-of-Agreement.pdf">
                            <img src="/images/static/PDF.png" alt=""></a>

                        <figcaption class="repdata">
                            <p>Documents Required for Correction of Name (say, spelling) before Execution of Agreement.</p>

                        </figcaption>

                    </figure>
                </div>

                <div class="col-md-3 rep">
                    <figure>
                        <a target="_blank" href="/images/buyers-guide/Downloads_9_Home-Loan-documents.pdf">                             <img src="/images/static/PDF.png" alt=""></a>

                        <figcaption class="repdata">
                            <p> Home Loan documents.</p>

                        </figcaption>

                    </figure>
                </div>

                <div class="col-md-3 rep">
                    <figure>
                        <a target="_blank" href="/images/buyers-guide/points.pdf">                           <img src="/images/static/PDF.png" alt=""></a>

                        <figcaption class="repdata">
                            <p>  Registry and Endorsement.  </p>

                        </figcaption>

                    </figure>
                </div>

                {{--<div class="col-md-3 rep">--}}
                    {{--<figure>--}}
                        {{--<a target="_blank" href="/images/buyers-guide/Downloads_13_Registry-Endorsement.pdf">                            <img src="/images/static/PDF.png" alt=""></a>--}}

                        {{--<figcaption class="repdata">--}}
                            {{--<p>Documents Required for Booking a Property.</p>--}}

                        {{--</figcaption>--}}

                    {{--</figure>--}}
                {{--</div>--}}
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
