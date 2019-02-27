@extends('layouts.layout')
@section('content')
    @include('layouts.header')

    <style>
        body{
            padding-top: 90px;
        }
       .thank-you{
           background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.5)) ,url(../images/static/home_page_hero3.jpg);
           height: 500px;
           background-size: cover;
           display: flex;
           justify-content: center;
           align-items: center;
           flex-direction: column;
           text-align: center;
       }

        .thank-you h3{
            color: #fff;
            font-size: 3vw;
        }

        .thank-you a{
            display: block;
            font-size: 18px;
            background-color: #0c68bf;
            color: #fff;
            width: 170px;
            height: 40px;
            line-height: 40px;
            margin: 20px auto;
            text-decoration: none;
        }

        .thank-you a:hover {
            text-decoration: none;
        }

        @media screen and (max-width: 600px) {
            .thank-you h2{
                font-size: 35px;
            }

        }


        .pull-tab1 {
            display: none;
        }

    </style>

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

    <div class="thank-you">
        <div class="row">
            <div class="col-md-12">
                @if(Session::has('alert-successb'))
                    <h3>Thank you for downloading e-brochure. We will get back to you shortly.</h3>

                    @else

                    <h3>Thank you for your interest. We will get back to you shortly.</h3>

                @endif

                    @if(Session::has('ebrochure-data'))


                    <a href="{{URL::to('/projects/'.'ebrochure'.'/'. Session::get('ebrochure-data'))}}">Download</a>
                    @endif

                <a href="{{url('/')}}">Back to home</a>

            </div>
        </div>
    </div>


    @include('layouts.footer')
    <script src="{{ asset('js/projectstatic.js') }}"></script>
    <script>
        $(document).ready(function() {


            @if(Session::has('ebrochure-data'))

        setTimeout(function(){

                window.location.href = "https://www.omaxe.com/projects/ebrochure/{{Session::get('ebrochure-data')}}";

            },1000);

            @endif

        window.history.pushState(null, "", window.location.href);
            window.onpopstate = function() {
                window.history.pushState(null, "", window.location.href);
            };
        });


    </script>

    <!-- Event snippet for Twin-tower Ludhiana GSN 14/11/18 conversion page -->

    <script>

        gtag('event', 'conversion', {'send_to': 'AW-869591387/Rkp8CMug9o4BENvS054D'});

    </script>


    <!-- Event snippet for Twin-tower Ludhiana GDN 14/11/18 conversion page -->

    <script>

        gtag('event', 'conversion', {'send_to': 'AW-869591387/Og7dCMip9o4BENvS054D'});

    </script>

    
@endsection