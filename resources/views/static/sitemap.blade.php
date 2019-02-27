@extends('layouts.layout')
@section('content')
    @include('layouts.header')

    <style>
        .top-content{
            margin-bottom: 0;
            height: 515px;
        }
        .ptype{
            padding: 20px 0px 0px 5px;
            text-transform: uppercase;
        }
    </style>


    <div class="top-content sitemap-banner">

        {{--<div class="content-cover" style="height: 515px;"></div>--}}

    </div>




    <section class="invcon sitemap">
        <div class="container">

            <div class="col-md-12" >
                {{--<div class="main-content-heading" style="margin-bottom: 50px;">--}}
                    {{--<h1 style="text-align: center;text-transform: uppercase;    letter-spacing: 1px;  font-weight: 300 !important; ">SITEMAP</h1>--}}
                {{--</div>--}}

                <div class="row ">
                    <div class="col-md-12 text-center">
                        <h3 class="text-transform">Find A way Around our site</h3>
                    </div>
                    
                </div>

                <div class="row m-t-40">
                    <div class="col-md-3">
                        <h3>
                            About Us
                        </h3>

                        <ul>
                            <li><a href="{{url('/about-us/awards-and-honors')}}">awards and honors</a></li>
                            <li><a href="{{url('/about-us/cmd-message')}}">CMD message</a></li>
                            <li><a href="{{url('/about-us/leadership-team')}}">leadership team</a></li>
                            <li><a href="{{url('/about-us/mission-and-vision')}}">mission and vision</a></li>
                            <li><a href="{{url('/about-us/quality-policy')}}">quality policy</a></li>
                            <li><a href="{{url('/about-us/success-story')}}">success story</a></li>

                        </ul>



                    </div>

                    <div class="col-md-3">


                        {{--<h4>Delivered project</h4>--}}
                        {{--<ul>--}}
                            {{--<li><a href="#">Residential Project</a></li>--}}
                            {{--<li><a href="#">Commercial Project</a></li>--}}
                        {{--</ul>--}}

                        <h3>Careers</h3>

                        <ul>
                            <li><a href="{{URL('/career/current-openings')}}">current openings</a></li>
                            <li><a href="{{URL('/career/employee-welfare')}}">employee welfare</a></li>
                            <li><a href="{{URL('/career/growth-opportunities')}}">growth opportunities</a></li>
                            <li class="active"><a href="{{URL('/career/work-culture')}}">work culture</a></li>
                        </ul>


                        <h4>Login</h4>
                        <ul>
                            <li><a target="_blank" href="http://businessassociates.omaxe.com/">Associate Login</a></li>
                            <li><a target="_blank" href="http://myhome.omaxe.com/">Customer Login</a></li>
                        </ul>

                    </div>

                    <div class="col-md-3">
                        <h3>Investors</h3>
                        <ul>
                            <li><a href="{{url('/investor/annual-report')}}">Annual Reports &amp; Others</a></li>
                            <li><a href="{{url('/investor/financials')}}">financials</a></li>

                            <li><a target="_blank" href="{{url('/fixed-deposit')}}">Fixed Deposit Scheme</a></li>


                            <li><a href="{{url('/investor/corporate-governance')}}">Corporate Governance</a></li>
                            <li><a href="{{url('/investor/csr/event')}}">CSR</a></li>

                            <li><a href="{{url('/investor/contact')}}">investor contact</a></li>

                            <li><a href="{{url('/investor/shareholding-pattern')}}">shareholding pattern</a></li>



                            <li><a href="{{url('/investor/stakeholder-information')}}">Stakeholder <span style="text-transform: lowercase;">(s)</span> Information</a></li>
                        </ul>

                    </div>


                    <div class="col-md-3">
                        <h3>Media</h3>
                        <ul>

                            <li><a href="{{url('/media/ad-campaigns')}}" target="_self">Ad Campaigns</a></li>
                            <li><a href="{{url('/media/e-coverages')}}" target="_self">E-Coverages</a></li>
                            <li><a href="{{url('/media/events')}}" target="_self">Events</a></li>
                            <li><a href="{{url('/media/media-kit')}}" target="_self">Media Kit</a></li>
                            <li><a href="{{url('/media/contact')}}" target="_self">Media Contact</a></li>
                            <li><a href="{{url('/media/print-coverages')}}" target="_self">Print Coverages</a></li>
                            <li><a href="{{url('/media/press-releases')}}" target="_self">Press releases</a></li>
                            <li><a href="{{url('/media/media-videos')}}" target="_self"> Videos</a></li>
                            <li><a href="{{url('/media/regional-newsletter')}}" target="_self"> Regional newsletter</a></li>
                            <li><a href="{{url('/media/corporate-newsletter')}}" target="_self"> Corporate newsletter</a></li>

                        </ul>
                    </div>

                </div>


                <div class="row">
                    {{--<div class="col-md-3">--}}
                        {{--<h3>Careers</h3>--}}

                        {{--<ul>--}}
                            {{--<li><a href="{{URL('/career/current-openings')}}">current opening</a></li>--}}
                            {{--<li><a href="{{URL('/career/employee-welfare')}}">employee welfare</a></li>--}}
                            {{--<li><a href="{{URL('/career/growth-opportunities')}}">growth opportunity</a></li>--}}
                            {{--<li class="active"><a href="{{URL('/career/work-culture')}}">work culture</a></li>--}}
                        {{--</ul>--}}

                    {{--</div>--}}

                    <div class="col-md-3">
                        <h3>Omaxe Care</h3>
                        <ul class="styled-list style-3">
                            <li><a href="{{url('/care/omaxe-care')}}">Omaxe care</a></li>
                            <li><a href="{{url('/care/nri-care')}}">NRI care</a></li>
                            <li><a href="{{url('/care/associate')}}">Associate</a></li>
                            <li><a href="{{url('/care/vendors')}}">Vendors</a></li>
                            <li><a href="{{url('/care/buyers-guide')}}">Buyers guide</a></li>

                        </ul>
                    </div>



                    <div class="col-md-3">
                        <h3>Contact Us</h3>
                        <ul>
                            {{--<li><a href="">Offices</a></li>--}}
                            {{--<li><a href="">Online appointment</a></li>--}}
                            <li><a href="{{URL('/contact-us/send-enquiry')}}">Send enquiry</a></li>
                            <li><a href="{{URL('/contact-us/regional-offices')}}">Reach Us</a></li>

                        </ul>
                    </div>


                    <div class="col-md-3">
                        <h3>Tools</h3>
                        <ul>
                            <li><a href="">EMI Calculator</a></li>
                            <li><a href="">Currency Converter</a></li>
                            <li><a href="">Pay U Money</a></li>
                        </ul>
                    </div>


                    <div class="col-md-3">
                        <h3>Others</h3>
                        <ul>
                            <li><a href="{{URL('/faq')}}">FAQ</a></li>
                            <li><a href="{{URL('/disclaimer')}}">Disclaimer</a></li>
                        </ul>
                    </div>



                </div>




            </div>

        </div>
    </section>

    <section class="invcon sitemap" style="padding: 40px;">
        <div class="container" style="background-color: #f9f9f9;padding: 10px;">

            <div class="col-md-12" style="padding: 40px;">
                {{--<div class="main-content-heading" style="margin-bottom: 50px;">--}}
                {{--<h1 style="text-align: center;text-transform: uppercase;    letter-spacing: 1px;  font-weight: 300 !important; ">SITEMAP</h1>--}}
                {{--</div>--}}

                <div class="row ">
                    <div class="col-md-12 text-center">
                        <h3 class="text-transform">OUR CURRENT PROJECTS</h3>
                    </div>

                </div>

                <div class="row m-t-40">
                    <div class="col-md-3">
                        <h4>
                            RESIDENTIAL
                        </h4>

                        {{--<h5 class="ptype">Current</h5>--}}

                        <ul>
                            @if(isset($data['head_current_projects']))
                                @foreach($data['head_current_projects'] as $index => $head_current_project)
                                    @if($index <15)

                                    <li>
                                        <a href="{{URL::to('/projects/'.strtolower(str_replace(" ","-",$head_current_project->project_city->name)).'/'.$head_current_project->project_type->name.'/'.$head_current_project->project_slug)}}">{{$head_current_project->project_title}}</a>
                                    </li>

                                    @endif

                                @endforeach
                            @endif
                        </ul>



                    </div>

                    <div class="col-md-3">
                        <h3 style="visibility: hidden;">
                            Residential
                        </h3>

                        {{--<h5 style="visibility: hidden;" class="ptype">sdf</h5>--}}
                        <ul>
                            {{--@if(isset($data['head_completed_projects']))--}}
                                {{--@foreach($data['head_completed_projects'] as $index => $head_completed_project)--}}
                            @if(isset($data['head_current_projects']))
                                @foreach($data['head_current_projects'] as $index => $head_current_project)


                                    @if($index >=15)
                                        <li>
                                            <a href="{{URL::to('/projects/'.strtolower(str_replace(" ","-",$head_current_project->project_city->name)).'/'.$head_current_project->project_type->name.'/'.$head_current_project->project_slug)}}">{{$head_current_project->project_title}}</a>
                                        </li>

                                    @endif


                                @endforeach
                            @endif
                        </ul>

                    </div>

                    <div class="col-md-3">
                        <h4>COMMERCIAL</h4>
                        {{--<h5 class="ptype">Current</h5>--}}
                        <ul>
                            @if(isset($data['head_com_current_projects']))
                                @foreach($data['head_com_current_projects'] as $index => $head_com_current_project)


                                    <li>
                                        <a href="{{URL::to('/projects/'.strtolower(str_replace(" ","-",$head_com_current_project->project_city->name)).'/'.$head_com_current_project->project_type->name.'/'.$head_com_current_project->project_slug)}}">{{$head_com_current_project->project_title}}</a>
                                    </li>


                                @endforeach
                            @endif
                        </ul>

                    </div>


                    <div class="col-md-3">
                        <h3 style="visibility: hidden;">Commercial</h3>
                        {{--<h5 class="ptype">Delivered</h5>--}}
                        <ul>
                            {{--@if(isset($data['head_com_completed_projects']))--}}
                                {{--@foreach($data['head_com_completed_projects'] as $index => $head_com_completed_project)--}}


                                    {{--<li>--}}
                                        {{--<a href="{{URL::to('/projects/'.strtolower(str_replace(" ","-",$head_com_completed_project->project_city->name)).'/'.$head_com_completed_project->project_type->name.'/'.$head_com_completed_project->project_slug)}}">{{$head_com_completed_project->project_title}}</a>--}}
                                    {{--</li>--}}


                                {{--@endforeach--}}

                            {{--@endif--}}


                        </ul>
                    </div>

                </div>


                <div class="row ">
                    <div class="col-md-12 text-center">
                        <h3 class="text-transform">OUR DELIVERED PROJECTS</h3>
                    </div>

                </div>


                <div class="row m-t-40">
                    <div class="col-md-3">
                        <h4>
                            RESIDENTIAL
                        </h4>

                        {{--<h5 class="ptype">Delivered</h5>--}}

                        <ul>
                            @if(isset($data['head_completed_projects']))
                            @foreach($data['head_completed_projects'] as $index => $head_completed_project)
                                    @if($index <15)

                                        <li>
                                            <a href="{{URL::to('/projects/'.strtolower(str_replace(" ","-",$head_completed_project->project_city->name)).'/'.$head_completed_project->project_type->name.'/'.$head_completed_project->project_slug)}}">{{$head_completed_project->project_title}}</a>
                                        </li>

                                    @endif

                                @endforeach
                            @endif
                        </ul>



                    </div>

                    <div class="col-md-3">
                        <h3 style="visibility: hidden;">
                            Residential
                        </h3>

                        {{--<h5 style="visibility: hidden;" class="ptype">sdf</h5>--}}
                        <ul>
                            {{--@if(isset($data['head_completed_projects']))--}}
                            {{--@foreach($data['head_completed_projects'] as $index => $head_completed_project)--}}
                            @if(isset($data['head_current_projects']))
                                @foreach($data['head_current_projects'] as $index => $head_current_project)


                                    @if($index >=15)
                                        <li>
                                            <a href="{{URL::to('/projects/'.strtolower(str_replace(" ","-",$head_current_project->project_city->name)).'/'.$head_current_project->project_type->name.'/'.$head_current_project->project_slug)}}">{{$head_current_project->project_title}}</a>
                                        </li>

                                    @endif


                                @endforeach
                            @endif
                        </ul>

                    </div>

                    <div class="col-md-3">
                        <h4>COMMERCIAL</h4>
                        {{--<h5 class="ptype">Delivered</h5>--}}
                        <ul>
                            @if(isset($data['head_com_completed_projects']))
                            @foreach($data['head_com_completed_projects'] as $index => $head_com_completed_project)

                                    @if($index <15)
                                    <li>
                                        <a href="{{URL::to('/projects/'.strtolower(str_replace(" ","-",$head_com_completed_project->project_city->name)).'/'.$head_com_completed_project->project_type->name.'/'.$head_com_completed_project->project_slug)}}">{{$head_com_completed_project->project_title}}</a>
                                    </li>

                                    @endif


                                @endforeach
                            @endif
                        </ul>

                    </div>


                    <div class="col-md-3">
                        <h3 style="visibility: hidden;">Commercial</h3>
                        {{--<h5 style="visibility: hidden;" class="ptype">Delivered</h5>--}}
                        <ul>
                            @if(isset($data['head_com_completed_projects']))
                                @foreach($data['head_com_completed_projects'] as $index => $head_com_completed_project)
                                    @if($index >=15)
                            <li>
                            <a href="{{URL::to('/projects/'.strtolower(str_replace(" ","-",$head_com_completed_project->project_city->name)).'/'.$head_com_completed_project->project_type->name.'/'.$head_com_completed_project->project_slug)}}">{{$head_com_completed_project->project_title}}</a>
                            </li>
                                    @endif


                            @endforeach

                            @endif


                        </ul>
                    </div>

                </div>




            </div>

        </div>





    </section>




    @include('layouts.footer')
    <script src="{{ asset('js/projectstatic.js') }}"></script>
@endsection
