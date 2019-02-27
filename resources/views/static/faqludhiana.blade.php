@extends('layouts.layout')
@section('content')
    @include('layouts.header')

    <style>
        .top-content{
            margin-bottom: 0px;
            height: 515px;
        }

        .accordion {
            background-color: #eee;
            color: #444;
            cursor: pointer;
            padding: 18px;
            width: 100%;
            border: none;
            text-align: left;
            outline: none;
            font-size: 15px;
            transition: 0.4s;
            margin: 5px 0;
        }

        .faq-active, .accordion:hover {
            background-color: #ccc;
        }

        .accordion:after {
            content: '\002B';
            color: #777;
            font-weight: bold;
            float: right;
            margin-left: 5px;
        }

        .active:after {
            content: "\2212";
        }

        .panel {
            padding: 0 18px;
            background-color: white;
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.2s ease-out;
        }
    </style>


    <div class="top-content faq-banner">


    </div>




    <section class="invcon">
        <div class="container">
            <div class="row">

                <div class="col-md-12">

                    <div class="main-content-heading" style="margin-bottom: 50px;">
                        <h1 style=" margin-bottom: 30px;   color: #0262b5;text-align: center;text-transform: uppercase;    letter-spacing: 1px;  font-weight: 300 !important; ">FAQ</h1>

                        <div class="highlight-link">
                            <div role="tabpanel">
                                <div class=" view-highlight-btn">
                                    <ul class="nav navbar " role="tablist">
                                        <li role="presentation" class="" >
                                            <a href="{{URL('/faq/new-chandigarh')}}" class="btn btn-light  btn-sm">New Chandigarh</a>
                                        </li>
                                        <li role="presentation">
                                            {{--<a href="#panel-2" aria-controls="panel-2" role="tab" data-toggle="tab"  class="btn btn-light btn-sm">Whats Near by</a>--}}
                                            <a href="{{URL('/faq/ludhiana')}}" class="btn btn-light btn-sm active">Ludhiana</a>
                                        </li>

                                        <li role="presentation">
                                            {{--<a href="#panel-2" aria-controls="panel-2" role="tab" data-toggle="tab"  class="btn btn-light btn-sm">Whats Near by</a>--}}
                                            <a href="{{URL('/faq/vrindavan')}}" class="btn btn-light btn-sm">Vrindavan</a>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>


                    </div>

                    </div>

                    {{--<div id="accordion">--}}
                    {{--<h3 class="jquery-ui-acc">Lorem ipsum ?</h3>--}}
                    {{--<div>--}}
                    {{--<p>--}}
                    {{--Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer--}}
                    {{--ut neque. Vivamus nisi metus, molestie vel, gravida in, condimentum sit--}}
                    {{--amet, nunc. Nam a nibh. Donec suscipit eros. Nam mi. Proin viverra leo ut--}}
                    {{--odio. Curabitur malesuada. Vestibulum a velit eu ante scelerisque vulputate.--}}
                    {{--</p>--}}
                    {{--</div>--}}
                    {{--<h3 class="jquery-ui-acc">Lorem ipsum ?</h3>--}}
                    {{--<div>--}}
                    {{--<p>--}}
                    {{--Sed non urna. Donec et ante. Phasellus eu ligula. Vestibulum sit amet--}}
                    {{--purus. Vivamus hendrerit, dolor at aliquet laoreet, mauris turpis porttitor--}}
                    {{--velit, faucibus interdum tellus libero ac justo. Vivamus non quam. In--}}
                    {{--suscipit faucibus urna.--}}
                    {{--</p>--}}
                    {{--</div>--}}
                    {{--<h3 class="jquery-ui-acc">Lorem ipsum ?</h3>--}}
                    {{--<div>--}}
                    {{--<p>--}}
                    {{--Nam enim risus, molestie et, porta ac, aliquam ac, risus. Quisque lobortis.--}}
                    {{--Phasellus pellentesque purus in massa. Aenean in pede. Phasellus ac libero--}}
                    {{--ac tellus pellentesque semper. Sed ac felis. Sed commodo, magna quis--}}
                    {{--lacinia ornare, quam ante aliquam nisi, eu iaculis leo purus venenatis dui.--}}
                    {{--</p>--}}

                    {{--</div>--}}
                    {{--<h3 class="jquery-ui-acc">Lorem ipsum ?</h3>--}}
                    {{--<div>--}}
                    {{--<p>--}}
                    {{--Cras dictum. Pellentesque habitant morbi tristique senectus et netus--}}
                    {{--et malesuada fames ac turpis egestas. Vestibulum ante ipsum primis in--}}
                    {{--faucibus orci luctus et ultrices posuere cubilia Curae; Aenean lacinia--}}
                    {{--mauris vel est.--}}
                    {{--</p>--}}
                    {{--<p>--}}
                    {{--Suspendisse eu nisl. Nullam ut libero. Integer dignissim consequat lectus.--}}
                    {{--Class aptent taciti sociosqu ad litora torquent per conubia nostra, per--}}
                    {{--inceptos himenaeos.--}}
                    {{--</p>--}}
                    {{--</div>--}}
                    {{--</div>--}}
                </div>
            <div class="row">
                <div class="col-md-12">


                    <h4 class="faq-separator">Omaxe Royal Residency, Ludhiana</h4>

                    <button class="accordion">Q1 Omaxe Royal Residency Ludhiana is spread in how much acres? 
                    </button>

                    <div class="panel">
                        <p>Ans: - 65 Acres </p>
                    </div>

                    <button class="accordion">Q2 How many families are living in Royal Residency Ludhiana? </button>

                    <div class="panel">
                        <p>Ans: - Approx 750 - 800
                        </p>
                    </div>

                    <button class="accordion">Q3 What are the amenities in Royal Residency Ludhiana?</button>
                    <div class="panel">
                        <p>Ans:- A club, Swimming Pool, Card Room, Table Tennis, Tennis Court, Play Area for Children, High Tech Security, Basket Ball Court, Restaurant, Yoga Meditation Lawn, Steam Spa


                        </p>
                    </div>



                </div>
            </div>




        </div>

        </div>
    </section>

    {{--<script>--}}
    {{--$( function() {--}}
    {{--$( "#accordion" ).accordion();--}}
    {{--} );--}}
    {{--</script>--}}

    <script>
        var acc = document.getElementsByClassName("accordion");
        var i;

        for (i = 0; i < acc.length; i++) {
            acc[i].addEventListener("click", function() {
                this.classList.toggle("faq-active");
                var panel = this.nextElementSibling;
                if (panel.style.maxHeight){
                    panel.style.maxHeight = null;
                } else {
                    panel.style.maxHeight = panel.scrollHeight + "px";
                }
            });
        }
    </script>

    @include('layouts.footer')
    <script src="{{ asset('js/projectstatic.js') }}"></script>
@endsection
