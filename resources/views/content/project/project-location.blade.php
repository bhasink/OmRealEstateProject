@extends('layouts.layout')


@section('content')





    @include('layouts.header')

    <div class="project-page">

        <div class="top-content" style="background: url({{cdn()}}/images//website_banner/{{$data['project_details']->banner_image}}) no-repeat center;
                ">

            @if($data['project_details']->project_stamp_id == 1)

                <img src='{{cdn()}}/images//stamps/Hot-selleing-property.png' class='stamp-lg' alt=''>

            @elseif($data['project_details']->project_stamp_id == 2)
                <img src='{{cdn()}}/images//stamps/ready-to-move-in.png' class='stamp-lg' alt=''>

            @elseif($data['project_details']->project_stamp_id == 3)

                <img src='{{cdn()}}/images//stamps/Delivered.png' class='stamp-lg' alt=''>
            @elseif($data['project_details']->project_stamp_id == 4)

                <img src='{{cdn()}}/images//stamps/Under-Construction.png' class='stamp-lg' alt=''>

            @elseif($data['project_details']->project_stamp_id == 5)

                <img src='{{cdn()}}/images//stamps/Just-launched.png' class='stamp-lg' alt=''>

            @elseif($data['project_details']->project_stamp_id == 6)

                <img src='{{cdn()}}/images//stamps/sold-out.png' class='stamp-lg' alt=''>

            @elseif($data['project_details']->project_stamp_id == 7)

                <img src='{{cdn()}}/images//stamps/Possession-Started.png' class='stamp-lg' alt=''>

            @elseif($data['project_details']->project_stamp_id == 8)

                <img src='{{cdn()}}/images//stamps/Under-Construction-Sold-Out.png' class='stamp-lg' alt=''>


            @elseif($data['project_details']->project_stamp_id == 9)

                <img src='{{cdn()}}/images//stamps/Delivered-Sold-Out.png' class='stamp-lg' alt=''>

            @elseif($data['project_details']->project_stamp_id == 10)

                <img src='{{cdn()}}/images//stamps/Possession-Started-Sold-Out.png' class='stamp-lg' alt=''>

            @elseif($data['project_details']->project_stamp_id == 11)

                <img src='{{cdn()}}/images//stamps/Operational.png' class='stamp-lg' alt=''>


            @elseif($data['project_details']->project_stamp_id == 12)


                <img src='{{cdn()}}/images//stamps/Operationa-Sold-Out.png' class='stamp-lg' alt=''>


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
                    <img src="{{cdn()}}/images//project_logo/{{$data['project_details']->project_logo}}" style="width: 246px;" alt="">
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

                @if($data['gallery_images'][0] != null)
                <li><a href="{{URL::to('/projects/'.strtolower(str_replace(" ","-",$data['project_details']->project_city->name)).'/'.$data['project_details']->project_type->name.'/'.$data['project_details']->project_slug.'/'.'gallery')}}">GALLERY</a></li>
                @endif

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
        {{ Breadcrumbs::render('ProjectDetailsloc', $data['project_details']->project_title,$data['project_details']->project_city->name,$data['project_details']->project_type->name,$data['project_details']->project_slug) }}
    </div>
    {{--{{ Breadcrumbs::render('ProjectDetails',$data['project_details']->title,$data['project_details']->title) }}--}}

    {{--    {{ Breadcrumbs::render('ProjectDetailslocation', $data['project_details']->project_title,$data['project_details']->project_city->name,$data['project_details']->project_type->name,'location') }}--}}

    {{--{{ Breadcrumbs::render('post', $post) }}--}}
    <div class="" style="margin-bottom: 80px;">
        <div class="main-content-heading" style="margin-bottom: 20px;">
            <h1 style="text-align: center;text-transform: uppercase;    letter-spacing: 1px;  font-weight: 300 !important; margin-top: 30px;  ">LOCATION</h1>
            <p style="text-align: center; font-size:14px;line-height: 1.7em; margin: 10px 0; font-weight: 400;">Click below to easily find out the property location</p>


            <div class="highlight-link">
                <div role="tabpanel">
                    <div class=" view-highlight-btn">
                        <ul class="nav navbar " role="tablist">
                            <li role="presentation" class="active" >
                                <a href="#panel-1" aria-controls="panel-1" role="tab" data-toggle="tab" class="btn btn-light active btn-sm">Location</a>
                            </li>
                            <li role="presentation">
                                {{--<a href="#panel-2" aria-controls="panel-2" role="tab" data-toggle="tab"  class="btn btn-light btn-sm">Whats Near by</a>--}}
                                <a href="{{URL::to('/projects/'.strtolower(str_replace(" ","-",$data['project_details']->project_city->name)).'/'.$data['project_details']->project_type->name.'/'.$data['project_details']->project_slug.'/'.'nearby')}}" class="btn btn-light btn-sm">WHAT'S NEAR BY</a>
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



            <div class="container-fluid">
                <div role="tabpanel" style="padding: 15px;" class="width-100">
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane  panel1 active width-100" id="panel-1">

                            <iframe width="100%" height="450" frameborder="0" style="border:0"
                                    src="{{$data['project_details']->project_map_link}}" allowfullscreen></iframe>

                        </div>




                    </div>
                </div>
            </div>
        </div>


        {{--<iframe width="100%" height="450" frameborder="0" style="border:0"--}}
        {{--src="{{$data['project_details']->project_map_link}}" allowfullscreen></iframe>--}}
    </div>
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

