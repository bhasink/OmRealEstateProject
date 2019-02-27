@extends('layouts.layout')


@section('content')



    @include('layouts.header')

    <div class="project-page">

    <div class="container-fluid">
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


                <img src='{{cdn()}}/images//stamps/ready-to-fit-out.png' class='stamp-lg' alt=''>

            @elseif($data['project_details']->project_stamp_id == 14)


                <img src='{{cdn()}}/images//stamps/completion_obtained_fitout_started.png' class='stamp-lg' alt=''>


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
                    <li>
                        <a  href="{{URL::to('/projects/'.strtolower(str_replace(" ","-",$data['project_details']->project_city->name)).'/'.$data['project_details']->project_type->name.'/'.$data['project_details']->project_slug.'/'.'location')}}">LOCATION</a>
                    </li>

                    @if($data['project_floor_plans']->isEmpty())

                    @else
                    <li><a href="{{URL::to('/projects/'.strtolower(str_replace(" ","-",$data['project_details']->project_city->name)).'/'.$data['project_details']->project_type->name.'/'.$data['project_details']->project_slug.'/'.'floorplan')}}">FLOOR PLANS</a></li>

                    @endif

                    @if($data['gallery_images'][0] != null)
                    <li><a href="{{URL::to('/projects/'.strtolower(str_replace(" ","-",$data['project_details']->project_city->name)).'/'.$data['project_details']->project_type->name.'/'.$data['project_details']->project_slug.'/'.'gallery')}}">GALLERY</a></li>
                    @endif
                    
                    <li><a href="{{URL::to('/projects/'.strtolower(str_replace(" ","-",$data['project_details']->project_city->name)).'/'.$data['project_details']->project_type->name.'/'.$data['project_details']->project_slug.'/'.'contact-us')}}">CONTACT US</a></li>

                    {{--<li class="dropdown active">--}}
                        {{--<a href="#"  data-toggle="dropdown">Property Type </a>--}}
                        {{--<ul class="dropdown-menu" style="margin:0px;padding:0px;">--}}
                            {{--@if(   $data['ProjectPropertyTypesss'])--}}
                                {{--@foreach($data['ProjectPropertyTypesss'] as $ProjectPropertyTypess)--}}

                                    {{--<li><a href="{{URL::to('/projects/'.strtolower(str_replace(" ","-",$data['project_details']->project_city->name)).'/'.$data['project_details']->project_type->name.'/'.$data['project_details']->project_slug.'/'.'propertytype'.'/'.$ProjectPropertyTypess->slug)}}">{{$ProjectPropertyTypess->property_type}}</a></li>--}}

                                {{--@endforeach--}}
                            {{--@endif--}}
                        {{--</ul>--}}
                    {{--</li>--}}

                    @if(isset($data['e_brochure'][0]))
                    <li>
                        <a href="{{URL::to('/projects/'.strtolower(str_replace(" ","-",$data['project_details']->project_city->name)).'/'.$data['project_details']->project_type->name.'/'.$data['project_details']->project_slug.'/'.'ebrochure/contact-us')}}">E-Brochure</a>
                    </li>
                    @endif
                    {{--<li><a href='/investor/annual-report/moa-and-aoa'>MOA &AMP; AOA</a></li>--}}
                    {{--<li><a href='/investor/annual-report/prospectus'>PROSPECTUS</a></li>--}}
                    {{--<li><a href='#'>CONTACT</a></li>--}}

                </ul>
            </nav>
        </header>



    <div class="container-fluid">
        {{ Breadcrumbs::render('ProjectDetailsPropTypes', $data['project_details']->project_title,$data['project_details']->project_city->name,$data['project_details']->project_type->name,$data['project_details']->project_slug,'Property Type') }}
    </div>

    {{--{{ Breadcrumbs::render('ProjectDetails',$data['project_details']->title,$data['project_details']->title) }}--}}

    {{--    {{ Breadcrumbs::render('ProjectDetailslocation', $data['project_details']->project_title,$data['project_details']->project_city->name,$data['project_details']->project_type->name,'location') }}--}}

    {{--{{ Breadcrumbs::render('post', $post) }}--}}
    <div class="container-fluid" style="margin-bottom: 80px;">
        <div class="main-content-heading" style="margin-top:10px;">
            <h1 style="text-align: center;text-transform: uppercase;    letter-spacing: 1px;  font-weight: 300 !important; ">Property Type</h1>
            {{--<p style="text-align: center; font-size:14px;letter-spacing: 1px; font-weight: 400;">Click below to easily find out the property location</p>--}}

        </div>
       <div>
           {{--<p>{{$data['ProjectPropertyType']->overview}}</p>--}}
            <div class="container">
           <div class="row ">
               <div class="col-md-12 text-center project-overview">
                   <div>
                       <div class="main-content-heading" style="margin-top:10px;margin-bottom: 10px;">
                           <h2 class="title left text-left">OVERVIEW</h2>

                       </div>

                       <div>
                           <p class="b-description_readmore js-description_readmore" style="font-size: 14px; line-height: 1.7em;">
                               {{$data['ProjectPropertyType']->overview}}

                           </p>
                           {{--<div class="b-description_readmore_button btbtbt"></div>--}}
                       </div>

                       {{--<button type="button" class="btbtbt read-more" data-whatever="@mdo">Read More</button>--}}

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

        // $(document).ready(function(){
            // $('.read-more').click(function () {
            //     $('.collepse-txt').toggleClass('collepse-txt-show').slideDown(4000);
            //
            //     if($('.collepse-txt').hasClass('collepse-txt-show')){
            //         $('.read-more ').text("Read Less");
            //     }
            //     else{
            //         $('.read-more ').text("Read More");
            //
            //     }
            //
            //
            // });


        //     var s = $("#aboutExpand").html();
        //
        //     if (s.split(' ').length > 150) {
        //         $("#aboutExpand").html(s.split(' ').slice(0,150).join(' ') + " ... " + '<button class="collepse-txt btbtbt">Read more</button>');
        //     }
        //
        //     $("button.collepse-txt, .btbtbt").click(function() {
        //         $("#aboutExpand").html(s);
        //     });
        //
        //
        //     var iScroll = $(window).scrollTop();
        //     iScroll = iScroll + 300;
        //     $('html, body').animate({
        //         scrollTop: iScroll
        //     }, 50);
        //
        //
        // });


        $(function() {
            $('.js-description_readmore').moreLines({
                linecount: 3,
                baseclass: 'b-description',
                basejsclass: 'js-description',
                classspecific: '_readmore',
                buttontxtmore: "Read more",
                buttontxtless: "Read less",
                animationspeed: 250
            });
        });






    </script>
    @include('layouts.footer')
@endsection

