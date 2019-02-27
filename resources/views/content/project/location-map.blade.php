@extends('layouts.layout')


@section('content')


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


    @include('layouts.header')


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
            {{ Breadcrumbs::render('ProjectDetailsgallery', $data['project_details']->project_title,$data['project_details']->project_city->name,$data['project_details']->project_type->name,$data['project_details']->project_slug) }}
        </div>


        <div class="container-fluid" style="margin-bottom: 80px;">


            <div class="main-content-heading" style="margin-bottom: 20px;">
                <h1 style="text-align: center;text-transform: uppercase;    letter-spacing: 1px;  font-weight: 300 !important; margin-top: 30px;  ">LOCATION</h1>
                <p style="text-align: center; font-size:14px;line-height: 1.7em; margin: 10px 0; font-weight: 400;">Click below to easily find out the property location</p>


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
                                    <a href="{{URL::to('/projects/'.strtolower(str_replace(" ","-",$data['project_details']->project_city->name)).'/'.$data['project_details']->project_type->name.'/'.$data['project_details']->project_slug.'/'.'nearby')}}" class="btn btn-light btn-sm">WHAT'S NEAR BY</a>
                                </li>


                                @if($data['location_map_image_exp'][0] != null)

                                <li role="presentation" class="active">
                                {{--<a href="#panel-2" aria-controls="panel-2" role="tab" data-toggle="tab"  class="btn btn-light active btn-sm">Whats Near by</a>--}}
                                <a href="{{URL::to('/projects/'.strtolower(str_replace(" ","-",$data['project_details']->project_city->name)).'/'.$data['project_details']->project_type->name.'/'.$data['project_details']->project_slug.'/'.'location-map')}}" class="btn active btn-light btn-sm">LOCATION MAP</a>
                                </li>

                                    @endif

                            </ul>
                        </div>
                    </div>
                </div>

            </div>




            <div class="project-gallery-content">
                <div class="cont" style="text-align: center;">


                    <div class="row mobrow" style="padding-left: 50px; padding-right: 50px; ">
                        <div class="gallery-new" role="tabpanel" style="padding: 15px;">
                            <div class="tab-content">


                                @if($data['location_map_image_exp'][0] != null)
                                    <div role="tabpanel" class="tab-pane  panel1 active show" id="panel-4">
                                        <ul id="lightgallery4" class="masonry ">
                                            @if(isset($data['location_map_image_exp']))
                                                @foreach($data['location_map_image_exp'] as $location_map_images)
                                                    <li data-src="{{'/images/gallery/'.$location_map_images}}">
                                                        <a href="">
                                                            <img class="" src="{{'/images/gallery/'.$location_map_images}}">
                                                        </a>
                                                    </li>
                                                @endforeach
                                            @endif
                                        </ul>
                                    </div>
                                @endif


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <script src="{{ asset('js/projectstatic.js') }}"></script>
    <script>
        var iScroll = $(window).scrollTop();
        iScroll = iScroll + 300;
        $('html, body').animate({
            scrollTop: iScroll
        }, 50);
    </script>

    <script>
        $(document).ready(function(){
            $(".tab-content >.tab-pane").first().addClass('active show');
            $(".new-filter li a").first().toggleClass('active');

        });

        $(document).ready(function() {
            $('#lightgallery1').lightGallery({
                thumbnail: true
            });

            $('#lightgallery2').lightGallery({
                thumbnail: true
            });

            $('#lightgallery3').lightGallery({
                thumbnail: true
            });

            $('#lightgallery4').lightGallery({
                thumbnail: true
            });

            $('#lightgallery5').lightGallery({
                thumbnail: true
            });

            $('#lightgallery6').lightGallery({
                thumbnail: true
            });

        });


    </script>

    <script>

        /* When the user clicks on the button,
         toggle between hiding and showing the dropdown content */
        function dropDown() {
            document.getElementById("myDropdown").classList.toggle("filter-show");
        }

        // Close the dropdown menu if the user clicks outside of it
        window.onclick = function(event) {
            if (!event.target.matches('.filter-dropbtn')) {

                var dropdowns = document.getElementsByClassName("filter-dropdown-content");
                var i;
                for (i = 0; i < dropdowns.length; i++) {
                    var openDropdown = dropdowns[i];
                    if (openDropdown.classList.contains('filter-show')) {
                        openDropdown.classList.remove('filter-show');
                    }
                }
            }
        }

    </script>


    @include('layouts.footer')

@endsection

