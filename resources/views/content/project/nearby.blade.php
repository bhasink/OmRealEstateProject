@extends('layouts.layout')
@section('content')
   
  @include('layouts.header')
    
       <link rel="stylesheet" href="{{ asset('css/map.css') }}">


       <style>

        /* ---- button ---- */

        .button-m {
            display: inline-block;
            padding: 0.5em 1.0em;
            background: #fff;
            color: #222;
            font-family: sans-serif;
            font-size: 16px;
            cursor: pointer;
            border: 1px solid #1165b2;
            text-decoration: none;
        }

        .button-m:hover {
            background-color: #0066b2;
            color: #fff;
            text-decoration: none;
        }

        .new-filter>li>a.active{
            background-color: #0066b2;
            color: #fff;
        }


        .show{
            display: block !important;
        }



        /* clear fix */
        /*.masonry{*/
        /*display: flex;*/
        /*}*/
        .gallery-new{
            width: 100%;
        }

        .masonry li {
            width: 33.333%;
            float: left;
            height: 360px;
        }

        @media screen and (max-width: 600px) {
            .masonry li{
                width: 100%;
            }
        }

        .masonry img {
            padding: 10px;
            border-radius: 20px !important;
            width: 100%;
            height: 340px;
            object-fit: cover;
        }


        @supports not (flex-wrap: wrap) {
            .masonry { display: block; }
            .masonry a {
                display: inline-block;
                vertical-align: top;
            }
        }

        .filter-dropbtn {
            background-color: #3498DB;
            color: white;
            padding: 16px;
            font-size: 16px;
            border: none;
            cursor: pointer;
            width: 100%;

        }

        .filter-dropbtn:hover, .filter-dropbtn:focus {
            background-color: #2980B9;
        }

        .filter-dropdown {
            position: relative;
            display: inline-block;
            width: 100%;
        }

        .filter-dropdown-content {
            display: none;
            position: absolute;
            background-color: #f1f1f1;
            min-width: 100%;
            overflow: auto;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }

        .filter-dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .filter-dropdown a:hover {background-color: #ddd;}

        .filter-show {display: block;}

        @media screen and (max-width: 600px) {
            .new-filter{
                display: block;
                width: 100%;
            }

            .project-gallery-content li {
                display: block;
                padding: 5px 0;
            }



        }


    </style>


  

    <div class="project-page">

        <div class="container-fluid">
            <div class="top-content" style="background: url(/images/website_banner/{{$data['project_details']->banner_image}}) no-repeat center;
                    ">

                @if($data['project_details']->project_stamp_id == 1)

                    <img src='/images/stamps/Hot-selleing-property.png' class='stamp-lg' alt=''>

                @elseif($data['project_details']->project_stamp_id == 2)
                    <img src='/images/stamps/ready-to-move-in.png' class='stamp-lg' alt=''>

                @elseif($data['project_details']->project_stamp_id == 3)

                    <img src='/images/stamps/Delivered.png' class='stamp-lg' alt=''>
                @elseif($data['project_details']->project_stamp_id == 4)

                    <img src='/images/stamps/Under-Construction.png' class='stamp-lg' alt=''>

                @elseif($data['project_details']->project_stamp_id == 5)

                    <img src='/images/stamps/Just-launched.png' class='stamp-lg' alt=''>

                @elseif($data['project_details']->project_stamp_id == 6)

                    <img src='/images/stamps/sold-out.png' class='stamp-lg' alt=''>

                @elseif($data['project_details']->project_stamp_id == 7)

                    <img src='/images/stamps/Possession-Started.png' class='stamp-lg' alt=''>

                @elseif($data['project_details']->project_stamp_id == 8)

                    <img src='/images/stamps/Under-Construction-Sold-Out.png' class='stamp-lg' alt=''>


                @elseif($data['project_details']->project_stamp_id == 9)

                    <img src='/images/stamps/Delivered-Sold-Out.png' class='stamp-lg' alt=''>

                @elseif($data['project_details']->project_stamp_id == 10)

                    <img src='/images/stamps/Possession-Started-Sold-Out.png' class='stamp-lg' alt=''>

                @elseif($data['project_details']->project_stamp_id == 11)

                    <img src='/images/stamps/Operational.png' class='stamp-lg' alt=''>


                @elseif($data['project_details']->project_stamp_id == 12)


                    <img src='/images/stamps/Operationa-Sold-Out.png' class='stamp-lg' alt=''>

                @elseif($data['project_details']->project_stamp_id == 13)


                    <img src='/images/stamps/ready-to-fit-out.png' class='stamp-lg' alt=''>

                @elseif($data['project_details']->project_stamp_id == 14)


                    <img src='/images/stamps/completion_obtained_fitout_started.png' class='stamp-lg' alt=''>


                @endif

                <div class="content-cover" style="display: none; height: 520px;">
                </div>
                <div class="col-md-3 nopadding" style="
          width: 100%;
    z-index: 2;
    position: absolute;
    opacity: 1;
    bottom: -5px;">
                    @if($data['project_details'])
                        <img src="/images/project_logo/{{$data['project_details']->project_logo}}" style="width: 246px;" alt="">
                    @endif
                </div>

            </div>
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
                    {{--<li><a href=""></a></li>--}}
                    <li>
                        <a href="{{URL::to('/projects/'.strtolower(str_replace(" ","-",$data['project_details']->project_city->name)).'/'.$data['project_details']->project_type->name.'/'.$data['project_details']->project_slug)}}">{{strtoupper($data['project_details']->project_title)}}</a>
                    </li>
                    <li class="active">
                        <a  href="{{URL::to('/projects/'.strtolower(str_replace(" ","-",$data['project_details']->project_city->name)).'/'.$data['project_details']->project_type->name.'/'.$data['project_details']->project_slug.'/'.'location')}}">LOCATION</a>
                    </li>
                    {{--<li><a href="{{URL::to('/projects/'.strtolower(str_replace(" ","-",$data['project_details']->project_city->name)).'/'.$data['project_details']->project_type->name.'/'.$data['project_details']->project_slug.'/'.'nearby')}}">WHAT'S NEAR BY</a></li>--}}

                    @if($data['project_floor_plans']->isEmpty())

                    @else

                        <li><a href="{{URL::to('/projects/'.strtolower(str_replace(" ","-",$data['project_details']->project_city->name)).'/'.$data['project_details']->project_type->name.'/'.$data['project_details']->project_slug.'/'.'floorplan')}}">FLOOR PLANS</a></li>

                    @endif

                    <li><a href="{{URL::to('/projects/'.strtolower(str_replace(" ","-",$data['project_details']->project_city->name)).'/'.$data['project_details']->project_type->name.'/'.$data['project_details']->project_slug.'/'.'gallery')}}">GALLERY</a></li>
                    <li><a href="{{URL::to('/projects/'.strtolower(str_replace(" ","-",$data['project_details']->project_city->name)).'/'.$data['project_details']->project_type->name.'/'.$data['project_details']->project_slug.'/'.'contact-us')}}">CONTACT US</a></li>
                    {{--<li><a href='/investor/annual-report/moa-and-aoa'>MOA &AMP; AOA</a></li>--}}
                    {{--<li><a href='/investor/annual-report/prospectus'>PROSPECTUS</a></li>--}}
                    {{--<li><a href='#'>CONTACT</a></li>--}}
                 
                 
                    {{--<li class="dropdown">--}}
                    {{--<a href="#"  data-toggle="dropdown">Property Type </a>--}}
                    {{--<ul class="dropdown-menu" style="margin:0px;padding:0px;">--}}
                        {{--@if(   $data['ProjectPropertyType'])--}}
                            {{--@foreach($data['ProjectPropertyType'] as $ProjectPropertyTypes)--}}

                                {{--<li><a href="{{URL::to('/projects/'.strtolower(str_replace(" ","-",$data['project_details']->project_city->name)).'/'.$data['project_details']->project_type->name.'/'.$data['project_details']->project_slug.'/'.'propertytype'.'/'.$ProjectPropertyTypes->slug)}}">{{$ProjectPropertyTypes->property_type}}</a></li>--}}

                            {{--@endforeach--}}
                        {{--@endif--}}
                    {{--</ul>--}}
                {{--</li>--}}
                 
                 
                    @if(isset($data['e_brochure'][0]))
                        <li>
                            <a href="{{URL::to('/projects/'.strtolower(str_replace(" ","-",$data['project_details']->project_city->name)).'/'.$data['project_details']->project_type->name.'/'.$data['project_details']->project_slug.'/'.'ebrochure/contact-us')}}">E-Brochure</a>
                        </li>
                    @endif
                </ul>
            </nav>
        </header>


    <div class="container-fluid">
        {{ Breadcrumbs::render('ProjectDetailsNb', $data['project_details']->project_title,$data['project_details']->project_city->name,$data['project_details']->project_type->name,$data['project_details']->project_slug) }}
    </div>

    <section class="invcon">


        <div class="main-content-heading" style="margin-bottom: 20px;">
            <h1 style="text-align: center;text-transform: uppercase;font-weight: 300 !important; margin-top: 30px;  ">Near By</h1>
            <p style="text-align: center; font-size:14px;line-height: 1.7em; margin: 10px 0; font-weight: 400;">Click below to easily find out the nearby places</p>

            <div class="highlight-link">
                <div role="tabpanel">
                    <div class=" view-highlight-btn">
                        <ul class="nav navbar " role="tablist">
                            <li role="presentation" >
                                {{--<a href="#panel-1" aria-controls="panel-1" role="tab" data-toggle="tab" class="btn btn-light active btn-sm">Location</a>--}}
                                <a class="btn btn-light btn-sm"  href="{{URL::to('/projects/'.strtolower(str_replace(" ","-",$data['project_details']->project_city->name)).'/'.$data['project_details']->project_type->name.'/'.$data['project_details']->project_slug.'/'.'location')}}">LOCATION</a>
                            </li>
                            <li role="presentation">
                                {{--<a href="#panel-2" aria-controls="panel-2" role="tab" data-toggle="tab"  class="btn btn-light btn-sm">Whats Near by</a>--}}
                                <a href="{{URL::to('/projects/'.strtolower(str_replace(" ","-",$data['project_details']->project_city->name)).'/'.$data['project_details']->project_type->name.'/'.$data['project_details']->project_slug.'/'.'nearby')}}" class="btn btn-light btn-sm active">WHAT'S NEAR BY</a>
                            </li>

                            @if($data['location_map_image_exp'][0] != null)
                                <li role="presentation" >
                                    {{--<a href="#panel-2" aria-controls="panel-2" role="tab" data-toggle="tab"  class="btn btn-light active btn-sm">Whats Near by</a>--}}
                                    <a href="{{URL::to('/projects/'.strtolower(str_replace(" ","-",$data['project_details']->project_city->name)).'/'.$data['project_details']->project_type->name.'/'.$data['project_details']->project_slug.'/'.'location-map')}}" class="btn  btn-light btn-sm">LOCATION MAP</a>
                                </li>

                            @endif

                        </ul>
                    </div>
                </div>
            </div>




        </div>


        <div class="viewOnMapContainer myCommonDply" id="viewOnMapContainer" style="display: block;">
            <div class="fullScreenOverLapBg"></div>
            <div class="mapClosePanel">
                <div class="mapCloseIcon"></div>
            </div>
            <div class="mapTabContainer">
                <div class="mapTabSec" id="mapTabMainNav">
                    <ul>
                        <li class="active" onclick="loadDefaultDataOnMap('','3000');trackClikCategory('Nearest');">Nearest</li>
                        <li id="bus_station_mapNav" onclick="loadPoiDataOnMap('bus_station','busStopMapIcon', this,2000);trackClikCategory('Bus Stop');">Bus Stop</li>
                        <li id="school_mapNav" onclick="loadPoiDataOnMap('school','schoolsMapIcon', this,4000);trackClikCategory('Schools');">Schools</li>
                        <li id="shopping_mall_mapNav" onclick="loadPoiDataOnMap('shopping_mall','shoppingMapIcon', this,4000);trackClikCategory('Shopping Mall');">Shopping Mall</li>
                        <li id="hospital_mapNav" onclick="loadPoiDataOnMap('hospital','hospitalMapIcon', this,5000);trackClikCategory('Hospital');">Hospitals</li>
                        <li id="atm_mapNav" onclick="loadPoiDataOnMap('atm','bankAtmMapIcon', this,2000);trackClikCategory('Banks/ATM');">Banks/ATMs</li>
                        <li id="train_station_mapNav" onclick="loadPoiDataOnMap('train_station','metroTrainMapIcon', this,4000);trackClikCategory('Metro/Train');">Metro/Train</li>
                        <li id="place_of_worship_mapNav" onclick="loadPoiDataOnMap('place_of_worship','worshipMapIcon', this,2000);trackClikCategory('Worship');">Worship</li>
                    </ul>
                </div>
                <div class="mapTabMore">
                    More<span class="mapMoreArrow"></span>
                    <div class="mapPoiTabMoreDropDown" id="mapTabMoreNav">
                        <ul>
                            <li id="grocery_or_supermarket_mapNav" onclick="loadPoiDataOnMap('grocery_or_supermarket','storeMapIcon', this,2000);trackClikCategory('Grocery Stores');"><span class="mapPoiTabIcon"></span>Grocery Stores</li>
                            <li id="pharmacy_mapNav" onclick="loadPoiDataOnMap('pharmacy','pharmacyMapIcon', this,2000);trackClikCategory('Pharmacy');"><span class="mapPoiTabIcon"></span>Pharmacy</li>
                            <li id="restaurant_mapNav" onclick="loadPoiDataOnMap('restaurant','restorantMapIcon', this,2000);trackClikCategory('Restaurants');"><span class="mapPoiTabIcon"></span>Restaurants</li>
                            <li id="movie_theater_mapNav" onclick="loadPoiDataOnMap('movie_theater','movieMapIcon', this,4000);trackClikCategory('Movies');"><span class="mapPoiTabIcon"></span>Movies</li>
                            <li id="park_mapNav" onclick="loadPoiDataOnMap('park','parksMapIcon', this,2000);trackClikCategory('Parks');"><span class="mapPoiTabIcon"></span>Parks</li>
                            <li id="gym_mapNav" onclick="loadPoiDataOnMap('gym','gymMapIcon', this,2000);trackClikCategory('Gym');"><span class="mapPoiTabIcon"></span>Gym</li>
                            <li id="gas_station_mapNav" onclick="loadPoiDataOnMap('gas_station','petrolPumpMapIcon', this,2000);trackClikCategory('Petrol Pump');"><span class="mapPoiTabIcon"></span>Petrol Pump</li>
                            <li id="airport_mapNav" onclick="loadPoiDataOnMap('airport','airPortMapIcon', this,50000);trackClikCategory('Airport');"><span class="mapPoiTabIcon"></span>Airport</li>
                        </ul>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
            <div id="gMapLoader"><img align="middle" src="{{asset('images/static/loading.gif')}}" width="100" height="100"/>Loading Google Map...</div>
            <div class="cleraAll"></div>
            <div id="googleMap" class="mapSecCont" style="display:block">
                <div class="btnMapFullScreenBg"></div>
                <div class="btnMapFullScreen"></div>
                <div class="btnMapFullScreenExit"></div>
                <div class="nearestPoiCont">
                    <div class="nearestHeading">
                        <div class="within">Within</div>
                        <div class="nearestDistance">
                            <span class="mapMoreArrow"></span>
                            <span id="nearestDisValue"></span>
                            <ul id="distanceBox">
                                <li onclick="loadDefaultDataOnMap('',this.value); setNearestValue(this);" value="1000">1 Km</li>
                                <li onclick="loadDefaultDataOnMap('',this.value); setNearestValue(this);" value="2000">2 Km</li>
                                <li onclick="loadDefaultDataOnMap('',this.value); setNearestValue(this);" value="3000">3 Km</li>
                                <li onclick="loadDefaultDataOnMap('',this.value); setNearestValue(this);" value="4000">4 Km</li>
                                <li onclick="loadDefaultDataOnMap('',this.value); setNearestValue(this);" value="5000">5 Km</li>
                            </ul>
                            <ul id="distanceBoxCat"></ul>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="nearestPoiScroll nano">
                        <div class="content" id="nearestInnerSection">
                            <div class="nearestPoi" id="nearestPoiSection">
                                <ul id="CatagorySec"></ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mapContainer" id="map-canvas"></div>

            </div>
            <div class="propertyTabMatterCont " id="propertyTabMatter_2" style="display: none">
                <div class="propertyMapViewSection">
                </div>
            </div>
            <input type="hidden" id="trackText" value="Project - "/>
        </div>



    </section>
    <script src="{{ asset('js/projectstatic.js') }}"></script>

    <script type="text/javascript">

        function loadScript() {
            var script = document.createElement('script');
            script.type = 'text/javascript';
            script.src = 'https://maps.googleapis.com/maps/api/js?key=AIzaSyCN9mu0dEl2XDPlF9yNKXz2urKtQUxZ8cI&libraries=places&types=atm&callback=loadMapDefault';
            document.body.appendChild(script);
        }

        function addScript( url, callback ) {
            var script = document.createElement( 'script' );
            if( callback ) script.onload = callback;
            script.type = 'text/javascript';
            script.src = url;
            document.body.appendChild( script );
        }

        function loadMapDefault()
        {
            if('18.479347'!='0' && '73.89435'!='0' && '18.479347'!='' && '18.479347'!='null'){
                origin = new google.maps.LatLng(' {{$data['nearby'][0]->latitude}}',' {{$data['nearby'][0]->longitude}}');
                addScript( '{{asset('js/newmap.js')}}', loadDefultMapOne);
            }else{
                var geocoder = new google.maps.Geocoder();
                geocoder.geocode({'address': ''}, function(results, status) {
                    if (status == google.maps.GeocoderStatus.OK) {
                        var latLngOfAddress = results[0].geometry.location;
                        origin = new google.maps.LatLng(latLngOfAddress.lat(),latLngOfAddress.lng());
                        addScript( '{{asset('js/newmap.js')}}', loadDefultMapOne);
                    }
                });
            }

        }
        function loadDefultMapOne()
        {
            loadDefaultDataOnMap('',3000);

        }

        window.onload = loadScript;

    </script>

    <script>
        var iScroll = $(window).scrollTop();
        iScroll = iScroll + 300;
        $('html, body').animate({
            scrollTop: iScroll
        }, 50);
    </script>

    @include('layouts.footer')

@endsection