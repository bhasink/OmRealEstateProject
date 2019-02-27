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

                <div class="col-md-12" >

                    <div class="main-content-heading">
                        <h1 style="margin-bottom: 30px;    color: #0262b5;text-align: center;text-transform: uppercase;    letter-spacing: 1px;  font-weight: 300 !important; ">FAQ</h1>

                        <div class="highlight-link">
                            <div role="tabpanel">
                                <div class=" view-highlight-btn">
                                    <ul class="nav navbar " role="tablist">
                                        <li role="presentation" class="" >
                                            <a href="{{URL('/faq/new-chandigarh')}}"  class="btn btn-light active btn-sm">New Chandigarh</a>
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



                    <h4 class="faq-separator">The Lake, New Chandigarh</h4>

                    <button class="accordion">Q1 What is The Lake Project?</button>

                    <div class="panel">
                        <p>Ans: - The Lake is a premium Group Housing Project based on an aqua theme. It encompasses a prolonged water body which runs between the towers and a lot of other unique amenities.</p>
                    </div>

                    <button class="accordion">Q2 What’s so special about The Lake?</button>

                    <div class="panel">
                        <p>Ans: - Considering today’s stressful times, the lake is a project which has used the stress busting quality of water and created a zone where flowing water and premium residences unite to form a composed life. The Lake offers unparalleled lifestyle as the amenities which form a part of the Lake are unique and matchless.
                        </p>
                    </div>

                    <button class="accordion">Q3 What is the location of The Lake?</button>
                    <div class="panel">
                        <p>Ans:- The Lake is strategically located right on the Madhya Marg Extension Road. It forms a part of a larger Downtown Area which would have world class offices, a 5 start Hotel and some top -notch commercial spaces. The entry to the project is seamless and beautiful.
                        </p>
                    </div>



                    <button class="accordion">Q4 What are the amenities on offer at The Lake?</button>
                    <div class="panel">
                        <p>Ans:- The amenities include 5 swimming Pools, a sprawling Club House with state of the art amenities, an exclusive water park, outdoor and indoor sports, Putting Range, Cycling Tracks, Jogging Tracks, Theme based Water Bodies, Theme based Gardens, Senior Citizen Zones etc.
                        </p>
                    </div>


                    <button class="accordion">Q5 What are the different sizes of flats?</button>
                    <div class="panel">
                        <p>Ans:- The apartments in The Lake come with varied sizes to suit all requirements. The sizes start at 1285 Sq. Ft and go up to a sprawling 9400 Sq. Ft.
                        </p>
                    </div>

                    <h4 class="faq-separator">Celestia Royal, New Chandigarh</h4>


                    <button class="accordion">Q1 What makes Celestia Royal different than other floors?
                    </button>
                    <div class="panel">
                        <p>Ans:- These floors were designed keeping in mind the best design aesthetics and practical requirements of modern day’s housing. With premium specifications like Italian Marble, Premium Modular Kitchen, Elevator and Dedicated Cover Car Parking for 2 Cars

                        </p>
                    </div>


                    <button class="accordion">Q2:- What is the status of Construction for Celestia Royal?</button>
                    <div class="panel">
                        <p>Ans:- These floors are at different levels of construction and the possession would take anywhere between 2 months to 18 months, depending on the size and location of the Unit.
                        </p>
                    </div>


                    <button class="accordion">Q3:- Are these Units Ground+2?</button>
                    <div class="panel">
                        <p>Ans:- These Units are designed as Stilt+3, keeping in mind the requirement of a dedicated covered car parking space for at least 2 cars. Elevators have been put up making the ascent to the upper floors comfortable and easy for all age groups.
                        </p>
                    </div>


                    <button class="accordion">Q4:- Are bank loans available on these floors?</button>
                    <div class="panel">
                        <p>Ans:- These floors are approved by all leading banks and loan facility is easily available. No collateral security in terms of an immovable property is required to avail the loan, subject to the eligibility of the client.
                        </p>
                    </div>


                    <button class="accordion">Q5:- Is there a club attached with these floors?</button>
                    <div class="panel">
                        <p>Ans:- In sync with our philosophy of giving an overall lifestyle to our residents including health and recreational facilities, multiple parks and a club is part of the township. The residents of these floors get an exclusive membership to the club as well.
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
