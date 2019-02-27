@extends('layouts.layout')
@section('content')
    @include('layouts.header')
    <style>
        .top-content{
            margin-bottom: 0px;
            height: 515px;
        }
        .emical{
            position:absolute;
            top:0;
            left:0;
            width:100%;
            height:280px;
        }
        .invsec{
            margin-bottom: 260px;
        }
        @media only screen and (max-width: 768px){
            .emical{
                height:840px;
            }
            .invsec{
                margin-bottom: 760px;
            }
        }
    </style>



    <div class="top-content emi-banner">


    </div>


    {{ Breadcrumbs::render('emi', "/emi","emi") }}


    <section class="invcon invsec">
        <div class="container">

            <div class="col-md-12" style=" margin-bottom: 100px;">
                <div class="row">

                    <div class="main-content-heading" style="margin-bottom: 50px;">

                        <iframe id="ecww-widget-iframe" frameborder="0" scrolling="no"   src="https://emicalculator.net/widget/2.0/widget.html" class="emical">

                        </iframe>
                    </div>

                </div>

            </div>

        </div>
    </section>
    <script>
        var iScroll = $(window).scrollTop();
        iScroll = iScroll + 300;
        $('html, body').animate({
            scrollTop: iScroll
        }, 50);
    </script>

    @include('layouts.footer')


@endsection
