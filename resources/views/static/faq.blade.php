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
                    <h1 style="margin-bottom: 30px;    color: #0262b5;text-align: center;text-transform: uppercase;    letter-spacing: 1px;  font-weight: 300 !important; ">FAQ</h1>


                    <div class="highlight-link">
                        <div role="tabpanel">
                            <div class=" view-highlight-btn">
                                <ul class="nav navbar " role="tablist">
                                    <li role="presentation" class="" >
                                        <a href="{{URL('/faq/new-chandigarh')}}" aria-controls="panel-1" role="tab" data-toggle="tab" class="btn btn-light active btn-sm">New Chandigarh</a>
                                    </li>
                                    <li role="presentation">
                                        {{--<a href="#panel-2" aria-controls="panel-2" role="tab" data-toggle="tab"  class="btn btn-light btn-sm">Whats Near by</a>--}}
                                        <a href="{{URL('/faq/ludhiana')}}" class="btn btn-light btn-sm">Ludhiana</a>
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



            </div>

            <div class="row">
                <div class="col-md-12">


                    <button class="accordion">Q1 What is the possession time of Full Moon Project and Krishna Castle?</button>

                    <div class="panel">
                        <p>Ans: - In full Moon, We have sample flat ready. Structure work is complete . possession will be Offered in next year Near Dipawali. In Krishna Castle, we are almost done and offering possession in next month.</p>
                    </div>

                    <button class="accordion">Q2 Do you have ready to move in flats available?</button>

                    <div class="panel">
                        <p>Ans: - Yes we have Ready to move 1bhk +Store on 2nd Floor with Roof Right in Eternity & Studio of Krishna Castle project in next month.
                        </p>
                    </div>

                    <button class="accordion">Q3 How Much GST are you charging in project Full Moon & other projects.</button>
                    <div class="panel">
                        <p>Ans:- GST applicable is 12% but We are giving 100% GST benefit to customer in Project Full Moon. In Krishna Castle ,Krishna Crest we are giving rebate of 7.5 % and charging only 4.5 % GST only in current month scheme.
                        </p>
                    </div>



                    <button class="accordion">Q3 How Much GST are you charging in project Full Moon & other projects.</button>
                    <div class="panel">
                        <p>Ans:- GST applicable is 12% but We are giving 100% GST benefit to customer in Project Full Moon. In Krishna Castle ,Krishna Crest we are giving rebate of 7.5 % and charging only 4.5 % GST only in current month scheme.
                        </p>
                    </div>


                    <button class="accordion">Q4 What are compensation/ penalty for the delayed possession?</button>
                    <div class="panel">
                        <p>Ans:- As per RERA Guildelines, we will compensate the same as much we charge interest on delayed payment from the customer. As we Charge bank interest rate and the same will be compensated for delayed possession.
                        </p>
                    </div>


                    {{--<button class="accordion">Q5 What is the company’s planning for leasing? As there are more than 200 service apartments, it has to be get leased by the company in order to get the benefit of the project & the investors both.--}}
                    {{--</button>--}}
                    {{--<div class="panel">--}}
                        {{--<p>Ans:- As our project is in progress  & we are giving assured return till that time, although we are in talks with Brand like America inn and some other brands ,Survey of same has been already done. Our leasing team is trying to get the tie up so that investor can get benefit to this.--}}

                        {{--</p>--}}
                    {{--</div>--}}


                    <button class="accordion">Q6:- Is there any Govt. Bank Loan Available like SBI & BOB, PNB ?</button>
                    <div class="panel">
                        <p>Ans:- We have bank loan available for DHFL & TATA Capital who are charging the same intrest rates(8.5%). Some of govt banks also has done individual loans in the project like bank of baroda, Allahabad bank, OBC bank. We are also in process to get the tie up very soon with SBI bank also.
                        </p>
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
