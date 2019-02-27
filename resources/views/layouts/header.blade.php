
<?php

$currenturi= url()->current();
$digits=   substr($currenturi,21,100);
if($digits =='/projects/ludhiana/residential/twin-tower'){
    $tab = true;
}
else{
    $tab = false;
}

?>


<!--slide form start-->

<div class="pull-tab1  {{$errors->any() ? 'tabbed':''}} {{$tab==true?'tabbed':''}} ">
    <div class="tab">Enquire Now</div>
    <!-- Begin Form -->


        {!! Form::open(array('action' => 'MainController@enquiry_now_contact', 'method' => 'post','class'=>'form-horizontal','id'=>'enq_now','style'=>'padding-top: 20px;','enctype' => 'multipart/form-data')) !!}

        <div class="form-group" style="margin-bottom: 2px;">
            <div class="col-sm-12">


                <input type="hidden" name="utm_source" value="{{$term = Input::get('utm_source')}}">
                <input type="hidden" name="utm_medium" value="{{$term = Input::get('utm_medium')}}">
                <input type="hidden" name="utm_campaign" value="{{$term = Input::get('utm_campaign')}}">
                <input type="hidden" name="utm_term" value="{{$term = Input::get('utm_term')}}">

                <input placeholder="Name" name="user_name" value="{{ old('user_name') }}" class="form-control" type="text">
                <span class="text-danger">{{ $errors->first('user_name') }}</span>
            </div>
        </div>
        <div class="form-group" style="margin-bottom: 2px;">
            <div class="col-sm-12">
                <input placeholder="Email" name="user_email" value="{{ old('user_email') }}" class="form-control" type="text">
                <span class="text-danger">{{ $errors->first('user_email') }}</span>
            </div>
        </div>
        <div class="form-group" style="margin-bottom: 2px;">
            <div class="col-sm-12">
                <input placeholder="Phone " name="user_phone_no" value="{{ old('user_phone_no') }}" class="form-control" type="text">
                <span class="text-danger">{{ $errors->first('user_phone_no') }}</span>
            </div>
        </div>
        <div class="form-group" style="margin-bottom: 2px;">
            <div class="col-sm-12">

                <select name="user_residential_type" class="form-control {{ $errors->has('user_residential_type') ? 'has-error' : '' }} selectpicker"  >
                    <option value="" >Residential type</option>
                    <option {{ old('user_residential_type')=='Resident Indian'?'selected':'' }} value="Resident Indian">Resident Indian</option>
                    <option  {{ old('user_residential_type')=='Non-Resident Indian'?'selected':'' }} value="Non-Resident Indian">Non-Resident Indian</option>
                </select>

                <span class="text-danger">{{ $errors->first('user_residential_type') }}</span>


            </div>

        </div>



        <div class="form-group"  style="margin-bottom: 2px; margin-left: 0; margin-right: 0;">
            <textarea placeholder="Query " class="form-control" name="user_query" id="field_COMMENTS_6506" maxlength="500">{{ old('user_query') }}</textarea>
            <span class="text-danger">{{ $errors->first('user_query') }}</span>

        </div>


        <div class="form-group" style="margin-bottom: 2px;">

            <div class="g-recaptcha" data-sitekey="6LfGGWAUAAAAAIv2NsfqflOAK41BMYoj-LPbLZNw"></div>

            {{--{!! NoCaptcha::renderJs() !!}--}}
                {{--{!! NoCaptcha::display() !!}--}}
         
{{--            <span class="text-danger">{{ $errors->first('g-recaptcha-response') }}</span>--}}
        </div>

        <input type="submit" name="enquiry_now" style="background: #0065a5; color: #fff; border: 0px; border-radius: 2px; display: block; margin-bottom: 15px; width: 100%; padding: 15px; height: auto;font-size: 14px;font-weight: bold;" >



    {!! form::close() !!}

</div>


<div class="header">
    <div class="container-fluid">
        <div class="row">

            <div class="top-head">
                <ul class="top-head-link  col-md-12">
                    <li>
                        <a href="tel:+91-9015161718" class="lnk">
                                {{--<i class="fas fa-phone-volume">--}}
                                {{--</i> +91-9015161718</p>--}}
                        </a>
                    </li>

                    <li>
                        <a href="#" class="lnk"><p><i class="fas fa-phone-volume" style="    transform: rotate(325deg);"></i>&nbsp;
                                  Toll Free number: 1800-102-0064</p>
                        </a>
                    </li>
                    {{--<li>--}}
                        {{--<a href="{{url('/contact-us/send-enquiry')}}" class="lnk">--}}
                            {{--<p><i class="fas fa-question fa-1x"></i>--}}
                                {{--Inquiry</p>--}}
                        {{--</a>--}}
                    {{--</li>--}}
                    {{--<li style="float:right;     margin-right: 30px;">--}}
                        {{--<a href="#" class="lnk">--}}
                            {{--<p>--}}
                                {{--<i class="fas fa-sign-in-alt"></i>--}}
                                {{--LOGIN--}}
                            {{--</p>--}}
                        {{--</a>--}}
                    {{--</li>--}}

                    <li class="dropdown" style="float:right;     margin-right: 30px;">
                        {{--<a href="#"  data-toggle="dropdown"><p><i class="fas fa-sign-in-alt"></i>--}}
                        {{--LOGIN</p> </a>--}}
                        <div class="login-dropdown">
                            <button onclick="loginChange()" class="login-dropbtn"><i class="fas fa-sign-in-alt"></i>&nbsp;&nbsp;Login</button>
                            <div id="loginDropdown" class="login-dropdown-content">
                                <ul>
                                    <li><a target="_blank" href="http://businessassociates.omaxe.com/">Associates Login</a></li>
                                    <li><a target="_blank" href="http://myhome.omaxe.com/">Customer Login</a></li>
                                </ul>
                            </div>
                        </div>

                    </li>

                </ul>
            </div>
            <hr class="head-hr">
            <div class="col-sm-12 head-secc">

                <div class="hdr-logo"><a href="{{URL::to('/')}}"><img src="{{cdn()}}/images/Omaxe-Logo.jpg" width="259" height="64" alt="Omaxe logo"></a></div>

                <div class="hdr-rhs">

                    <ul class="hdr-side-nav">

                        <li>
                            <a href="#" class="mn-click" data-target="3">
                                <i class="icon-menu"></i>
                            </a>

                            <div id="nav3" class="mn-show mn-full">

                                <div class="accordion2">


                                    <h3><span class="img-title">Media</span></h3>

                                    <div>

                                        <ul class="styled-list style-3">

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

                                    {{--<h3><span class="img-title">Investors</span></h3>--}}

                                    {{--<div>--}}

                                        {{--<ul class="styled-list style-3">--}}

                                            {{--<li><a href="{{url('/investor/annual-report')}}">Annual Reports &amp; Others</a></li>--}}
                                            {{--<li><a href="{{url('/investor/corporate-governance')}}">Corporate Governance</a></li>--}}
                                            {{--<li><a href="{{url('/investor/stakeholder-information')}}">Stakeholder Information</a></li>--}}
                                            {{--<li><a href="{{url('/investor/financials')}}">Financials</a></li>--}}
                                            {{--<li><a href="{{url('/investor/csr/event')}}">Csr</a></li>--}}
                                            {{--<li><a href="{{url('/investor/shareholding-pattern')}}">shareholding pattern</a></li>--}}
                                            {{--<li><a href="{{url('/investor/contact')}}">Investor contact</a></li>--}}
                                        {{--</ul>--}}

                                    {{--</div>--}}


                                    {{--<h3 ><span class="img-title">About Us</span></h3>--}}

                                    {{--<div>--}}

                                        {{--<ul class="styled-list style-3">--}}

                                            {{--<li><a href="{{url('/about-us/awards-and-honors')}}">Awards And Honors</a></li>--}}
                                            {{--<li><a href="{{url('/about-us/cmd-message')}}">Cmd Message</a></li>--}}
                                            {{--<li><a href="{{url('/about-us/leadership-team')}}">Leadership Team</a></li>--}}
                                            {{--<li><a href="{{url('/about-us/mission-and-vision')}}">Mission And Vision</a></li>--}}
                                            {{--<li><a href="{{url('/about-us/quality-policy')}}">Quality Policy</a></li>--}}
                                            {{--<li><a href="{{url('/about-us/success-story')}}">Success Story</a></li>--}}
                                        {{--</ul>--}}

                                    {{--</div>--}}



                                    <h3><span class="img-title">Careers</span></h3>

                                    <div>

                                        <ul class="styled-list style-3">
                                            <li><a href="{{url('/career/current-openings')}}">Current Openings</a></li>
                                            <li><a href="{{url('/career/employee-welfare')}}">Employee Welfare</a></li>
                                            <li><a href="{{url('/career/growth-opportunities')}}">Growth Opportunities</a></li>
                                            <li><a href="{{url('/career/work-culture')}}">Work Culture</a></li>

                                        </ul>

                                    </div>

                                    <h3><span class="img-title">Contact Us</span></h3>

                                    <div>

                                        <ul class="styled-list style-3">
                                            <li><a href="{{url('/contact-us/send-enquiry')}}">Send Enquiry</a></li>
                                            <li><a href="{{url('/contact-us/regional-offices')}}">Reach Us </a></li>

                                        </ul>

                                    </div>

                                    <h3><span class="img-title">FAQ</span></h3>

                                    <div>

                                        <ul class="styled-list style-3">
                                            <li><a href="{{url('/faq/new-chandigarh')}}">New Chandigarh</a></li>
                                            <li><a href="{{url('/faq/ludhiana')}}">Ludhiana</a></li>
                                            <li><a href="{{url('/faq/vrindavan')}}">Vrindavan</a></li>

                                        </ul>

                                    </div>



                                    <h3><span class="img-title">Omaxe Care</span></h3>

                                    <div>

                                        <ul class="styled-list style-3">
                                            <li><a href="{{url('/care/omaxe-care')}}">Omaxe care</a></li>
                                            <li><a href="{{url('/care/nri-care')}}">NRI care</a></li>
                                            <li><a href="{{url('/care/associate')}}">Associate</a></li>
                                            <li><a href="{{url('/care/vendors')}}">Vendors</a></li>
                                            <li><a href="{{url('/care/buyers-guide')}}">Buyers guide</a></li>

                                        </ul>

                                    </div>


                                </div>

                                <h3 style="border-top: 1px solid #898989; padding:15px 0; font-weight:bold;"><a href="http://blog.omaxe.com/" target="_blank"><span class="img-title">Blog</span></a></h3>
                                {{--<h3 style="border-top: 1px solid #898989; padding:15px 0; font-weight:bold;"><a href="https://www.omaxe.com/fd/" target="_blank"><span class="img-title">FD</span></a></h3>--}}

                                <div class="mn-social">

                                    <h3><span class="img-title">FOLLOW US</span></h3>

                                    <ul class="social-links">

                                        <li><a href="https://www.youtube.com/user/omaxelimited" target="_blank" title="YouTube"><i class="icon-youtube"></i></a></li>

                                        <li><a  target="_blank" href="https://www.linkedin.com/company/omaxe-limited"><i class="fab fa-linkedin"></i></a></li>

                                        <li><a target="_blank" href="https://www.facebook.com/Omaxeltd/"><i class="fab fa-facebook-f"></i></a></li>

                                        <li><a target="_blank" href="https://www.instagram.com/omaxeltd/"><i class="fab fa-instagram"></i></a></li>


                                        <li><a target="_blank" href="https://twitter.com/OmaxeLimited"><i class="fab fa-twitter"></i></a></li>
                                        <li><a   target="_blank" href="https://plus.google.com/u/0/117970255789124285670"><i class="fab fa-google"></i></a></li>


                                        <li><a href="http://blog.omaxe.com" target="_blank" title="blog"><i class="fab fa-blogger-b"></i></a></li>



                                    </ul>

                                </div>

                            </div>

                        </li>

                    </ul>

                </div>

                <div class="hdr-nav-sub">

                    <ul id="main-menu" class="sm sm-simple">
                        <li  class="our-nav"><a href="javascript:void(0)" style="font-weight: 400 !important;">ABOUT US</a>
                            <ul class="mega-menu">
                                <li>
                                <ul class="sub-nav-list">
                                    <li><a href="{{url('/about-us/awards-and-honors')}}">Awards And Honors</a></li>
                                    <li><a href="{{url('/about-us/cmd-message')}}">Cmd Message</a></li>
                                    <li><a href="{{url('/about-us/leadership-team')}}">Leadership Team</a></li>
                                    <li><a href="{{url('/about-us/mission-and-vision')}}">Mission And Vision</a></li>
                                    <li><a href="{{url('/about-us/quality-policy')}}">Quality Policy</a></li>
                                    <li><a href="{{url('/about-us/success-story')}}">Success Story</a></li>

                                    <li><a style="text-decoration:none;"  href="#">&nbsp;&nbsp;&nbsp;</a></li>
                                    <li><a style="text-decoration:none;"  href="#">&nbsp;&nbsp;&nbsp;</a></li>

                                </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="project-nav"><a href="#"  class="" style="font-weight: 400 !important;">OUR Projects</a>
                            <ul class="mega-menu ">
                                <li>
                                    <div class="nav-first-drop clearfix">
                                        <div class="first-drop-sec byciti-div"><span>by city<i></i></span>
                                            <div class="second-drop">
                                                <div class="byciti-drop clearfix">
                                                    <ul class="short-height">

                                                        <li><a href="{{asset('/projects/new-chandigarh')}}">New Chandigarh</a></li>
                                                        <li><a href="{{asset('/projects/lucknow')}}">Lucknow</a></li>
                                                        <li><a href="{{asset('/projects/ludhiana')}}">Ludhiana</a></li>
                                                        <li><a href="{{asset('/projects/faridabad')}}">Faridabad</a></li>
                                                        <li><a href="{{asset('/projects/greater-noida')}}">Greater Noida</a></li>
                                                        <li><a href="{{asset('/projects/prayagraj')}}">Prayagraj</a></li>
                                                        <li><a href="{{asset('/projects/vrindavan')}}">Vrindavan</a></li>

                                                        <li><a href="{{asset('/projects/noida')}}">Noida</a></li>
                                                        <li><a href="{{asset('/projects/sonipat')}}">Sonipat</a></li>
                                                        <li><a href="{{asset('/projects/yamuna-nagar')}}">Yamuna Nagar</a></li>
                                                        <li><a href="{{asset('/projects/bathinda')}}">Bathinda</a></li>
                                                        {{--<li><a href="{{asset('/projects/mangliya')}}">Mangliya</a></li>--}}
                                                        {{--<li><a href="{{asset('/projects/mayakhedi')}}">Mayakhedi</a></li>--}}


                                                        <li><a href="{{asset('/projects/indore')}}">Indore</a></li>
                                                        <li><a href="{{asset('/projects/bhiwadi')}}">Bhiwadi</a></li>
                                                        <li><a href="{{asset('/projects/baddi')}}">Baddi</a></li>
                                                        <li><a href="{{asset('/projects/derabassi')}}">Derabassi</a></li>
                                                        <li><a href="{{asset('/projects/amritsar')}}">Amritsar</a></li>

                                                        <li><a href="{{asset('/projects/delhi')}}">Delhi</a></li>
                                                        <li><a href="{{asset('/projects/bahadurgarh')}}">Bahadurgarh</a></li>
                                                        <li><a href="{{asset('/projects/rohtak')}}">Rohtak</a></li>
                                                        <li><a href="{{asset('/projects/jaipur')}}">Jaipur</a></li>
                                                        <li><a href="{{asset('/projects/gurgaon')}}">Gurgaon</a></li>
                                                        <li><a href="{{asset('/projects/indirapuram')}}">Indirapuram</a></li>
                                                        <li><a href="{{asset('/projects/patiala')}}">Patiala</a></li>
                                                        <li><a href="{{asset('/projects/rudrapur')}}">Rudrapur</a></li>
                                                        <li><a href="{{asset('/projects/agra')}}">Agra</a></li>
                                                        <li><a href="{{asset('/projects/ghaziabad')}}">Ghaziabad</a></li>
                                                        <li><a href="{{asset('/projects/palwal')}}">Palwal</a></li>


                                                    </ul>
                                                <div class="text-center"><p id="menu-load">Load More</p></div>

                </div>
                                            </div>
                                        </div>
                                        <!-- project listing starts -->
                                        <div class="first-drop-sec"> <span>Residential<i></i></span>
                                            <div class="second-drop">
                                                <div class="project-tabs property-wrap clearfix">
                                                    <ul class="property-nav">
                                                        <li><a href="#residential-current-tab"><i class="icon-angle-right"></i>CURRENT</a></li>
                                                        {{--<li><a href="#residential-upcoming-tab"><i class="icon-angle-right"></i>UPCOMING</a></li>--}}
                                                        <li><a href="#residential-completed-tab"><i class="icon-angle-right"></i>DELIVERED</a></li>
                                                    </ul>


                                                    <div id="residential-current-tab" class="property-list">

                                                        <div class="row property-list-inner">


                                                            <div class="col-sm-4 pr-list-sec">

                                                                <div class="scrollbox-pr">

                                                                    <ul class="pr-list styled-list style-3">


                                                                        @if(isset($data['head_current_projects']))
                                                                            @foreach($data['head_current_projects'] as $index => $head_current_project)

                                                                                @if($index <9)
                                                                                    <li>
                                                                                        <a href="{{URL::to('/projects/'.strtolower(str_replace(" ","-",$head_current_project->project_city->name)).'/'.$head_current_project->project_type->name.'/'.$head_current_project->project_slug)}}">{{$head_current_project->project_title}}</a>
                                                                                    </li>
                                                                                @endif

                                                                            @endforeach

                                                                        @else

                                                                            @foreach($data_all['head_current_projects'] as $index => $head_current_project)
                                                                                @if($index <9)
                                                                                    <li>
                                                                                        <a href="{{URL::to('/projects/'.strtolower(str_replace(" ","-",$head_current_project->project_city->name)).'/'.$head_current_project->project_type->name.'/'.$head_current_project->project_slug)}}">{{$head_current_project->project_title}}</a>
                                                                                    </li>
                                                                                @endif
                                                                            @endforeach

                                                                        @endif

                                                                    </ul>

                                                                </div>

                                                            </div>


                                                            <div class="col-sm-4 pr-list-sec">

                                                                <div class="scrollbox-pr">

                                                                    <ul class="pr-list styled-list style-3">


                                                                        @if(isset($data['head_current_projects']))
                                                                            @foreach($data['head_current_projects'] as $index => $head_current_project)

                                                                                @if($index >=9 && $index <18)
                                                                                    <li>
                                                                                        <a href="{{URL::to('/projects/'.strtolower(str_replace(" ","-",$head_current_project->project_city->name)).'/'.$head_current_project->project_type->name.'/'.$head_current_project->project_slug)}}">{{$head_current_project->project_title}}</a>
                                                                                    </li>
                                                                                @endif

                                                                            @endforeach

                                                                        @else

                                                                            @foreach($data_all['head_current_projects'] as $index => $head_current_project)
                                                                                @if($index >=9 && $index <18)
                                                                                    <li>
                                                                                        <a href="{{URL::to('/projects/'.strtolower(str_replace(" ","-",$head_current_project->project_city->name)).'/'.$head_current_project->project_type->name.'/'.$head_current_project->project_slug)}}">{{$head_current_project->project_title}}</a>
                                                                                    </li>
                                                                                @endif
                                                                            @endforeach

                                                                        @endif



                                                                    </ul>

                                                                </div>

                                                            </div>


                                                            <div class="col-sm-4 pr-list-sec">

                                                                <div class="scrollbox-pr">

                                                                    <ul class="pr-list styled-list style-3">

                                                                        @if(isset($data['head_current_projects']))
                                                                            @foreach($data['head_current_projects'] as $index => $head_current_project)

                                                                                @if($index >=18)
                                                                                    <li>
                                                                                        <a href="{{URL::to('/projects/'.strtolower(str_replace(" ","-",$head_current_project->project_city->name)).'/'.$head_current_project->project_type->name.'/'.$head_current_project->project_slug)}}">{{$head_current_project->project_title}}</a>
                                                                                    </li>
                                                                                @endif

                                                                            @endforeach

                                                                        @else

                                                                            @foreach($data_all['head_current_projects'] as $index => $head_current_project)
                                                                                @if($index >=18)
                                                                                    <li>
                                                                                        <a href="{{URL::to('/projects/'.strtolower(str_replace(" ","-",$head_current_project->project_city->name)).'/'.$head_current_project->project_type->name.'/'.$head_current_project->project_slug)}}">{{$head_current_project->project_title}}</a>
                                                                                    </li>
                                                                                @endif
                                                                            @endforeach

                                                                        @endif

                                                                    </ul>

                                                                </div>

                                                            </div>


                                                        </div>

                                                    </div>


                                                    {{--<div id="residential-upcoming-tab" class="property-list">--}}

                                                        {{--<div class="row property-list-inner">--}}


                                                            {{--<div class="col-sm-4 pr-list-sec">--}}

                                                                {{--<div class="scrollbox-pr">--}}

                                                                    {{--<ul class="pr-list styled-list style-3">--}}

                                                                        {{--@if(isset($data['head_upcoming_projects']))--}}
                                                                            {{--@foreach($data['head_upcoming_projects'] as $index => $head_upcoming_project)--}}

                                                                                {{--@if($index <9)--}}
                                                                                    {{--<li>--}}
                                                                                        {{--<a href="{{URL::to('/projects/'.strtolower(str_replace(" ","-",$head_upcoming_project->project_city->name)).'/'.$head_upcoming_project->project_type->name.'/'.$head_upcoming_project->project_slug)}}">{{$head_upcoming_project->project_title}}</a>--}}
                                                                                    {{--</li>--}}
                                                                                {{--@endif--}}

                                                                            {{--@endforeach--}}

                                                                        {{--@else--}}

                                                                            {{--@foreach($data_all['head_upcoming_projects'] as $index => $head_upcoming_project)--}}
                                                                                {{--@if($index <9)--}}
                                                                                    {{--<li>--}}
                                                                                        {{--<a href="{{URL::to('/projects/'.strtolower(str_replace(" ","-",$head_upcoming_project->project_city->name)).'/'.$head_upcoming_project->project_type->name.'/'.$head_upcoming_project->project_slug)}}">{{$head_upcoming_project->project_title}}</a>--}}
                                                                                    {{--</li>--}}
                                                                                {{--@endif--}}
                                                                            {{--@endforeach--}}

                                                                        {{--@endif--}}

                                                                    {{--</ul>--}}

                                                                {{--</div>--}}

                                                            {{--</div>--}}


                                                            {{--<div class="col-sm-4 pr-list-sec">--}}

                                                                {{--<div class="scrollbox-pr">--}}

                                                                    {{--<ul class="pr-list styled-list style-3">--}}

                                                                        {{--@if(isset($data['head_upcoming_projects']))--}}
                                                                            {{--@foreach($data['head_upcoming_projects'] as $index => $head_upcoming_project)--}}

                                                                                {{--@if($index >9 && $index <18)--}}
                                                                                    {{--<li>--}}
                                                                                        {{--<a href="{{URL::to('/projects/'.strtolower(str_replace(" ","-",$head_upcoming_project->project_city->name)).'/'.$head_upcoming_project->project_type->name.'/'.$head_upcoming_project->project_slug)}}">{{$head_upcoming_project->project_title}}</a>--}}
                                                                                    {{--</li>--}}
                                                                                {{--@endif--}}

                                                                            {{--@endforeach--}}

                                                                        {{--@else--}}

                                                                            {{--@foreach($data_all['head_upcoming_projects'] as $index => $head_upcoming_project)--}}
                                                                                {{--@if($index >9 && $index <18)--}}
                                                                                    {{--<li>--}}
                                                                                        {{--<a href="{{URL::to('/projects/'.strtolower(str_replace(" ","-",$head_upcoming_project->project_city->name)).'/'.$head_upcoming_project->project_type->name.'/'.$head_upcoming_project->project_slug)}}">{{$head_upcoming_project->project_title}}</a>--}}
                                                                                    {{--</li>--}}
                                                                                {{--@endif--}}
                                                                            {{--@endforeach--}}

                                                                        {{--@endif--}}

                                                                    {{--</ul>--}}

                                                                {{--</div>--}}

                                                            {{--</div>--}}




                                                        {{--</div>--}}

                                                    {{--</div>--}}


                                                    <div id="residential-completed-tab" class="property-list">

                                                        <div class="row property-list-inner">


                                                            <div class="col-sm-4 pr-list-sec">

                                                                <div class="scrollbox-pr">

                                                                    <ul class="pr-list styled-list style-3">

                                                                        @if(isset($data['head_completed_projects']))
                                                                            @foreach($data['head_completed_projects'] as $index => $head_completed_project)

                                                                                @if($index <9)
                                                                                    <li>
                                                                                        <a href="{{URL::to('/projects/'.strtolower(str_replace(" ","-",$head_completed_project->project_city->name)).'/'.$head_completed_project->project_type->name.'/'.$head_completed_project->project_slug)}}">{{$head_completed_project->project_title}}</a>
                                                                                    </li>
                                                                                @endif

                                                                            @endforeach

                                                                        @else

                                                                            @foreach($data_all['head_completed_projects'] as $index => $head_completed_project)
                                                                                @if($index <9)
                                                                                    <li>
                                                                                        <a href="{{URL::to('/projects/'.strtolower(str_replace(" ","-",$head_completed_project->project_city->name)).'/'.$head_completed_project->project_type->name.'/'.$head_completed_project->project_slug)}}">{{$head_completed_project->project_title}}</a>
                                                                                    </li>
                                                                                @endif
                                                                            @endforeach

                                                                        @endif

                                                                    </ul>

                                                                </div>

                                                            </div>


                                                            <div class="col-sm-4 pr-list-sec">

                                                                <div class="scrollbox-pr">

                                                                    <ul class="pr-list styled-list style-3">

                                                                        @if(isset($data['head_completed_projects']))
                                                                            @foreach($data['head_completed_projects'] as $index => $head_completed_project)

                                                                                @if($index >=9 && $index <18)
                                                                                    <li>
                                                                                        <a href="{{URL::to('/projects/'.strtolower(str_replace(" ","-",$head_completed_project->project_city->name)).'/'.$head_completed_project->project_type->name.'/'.$head_completed_project->project_slug)}}">{{$head_completed_project->project_title}}</a>
                                                                                    </li>
                                                                                @endif

                                                                            @endforeach

                                                                        @else

                                                                            @foreach($data_all['head_completed_projects'] as $index => $head_completed_project)
                                                                                @if($index >9 && $index <18)
                                                                                    <li>
                                                                                        <a href="{{URL::to('/projects/'.strtolower(str_replace(" ","-",$head_completed_project->project_city->name)).'/'.$head_completed_project->project_type->name.'/'.$head_completed_project->project_slug)}}">{{$head_completed_project->project_title}}</a>
                                                                                    </li>
                                                                                @endif
                                                                            @endforeach

                                                                        @endif

                                                                    </ul>

                                                                </div>

                                                            </div>


                                                            <div class="col-sm-4 pr-list-sec">

                                                                <div class="scrollbox-pr"  style="" >

                                                                    <ul class="pr-list styled-list style-3">

                                                                        @if(isset($data['head_completed_projects']))
                                                                            @foreach($data['head_completed_projects'] as $index => $head_completed_project)

                                                                                @if($index >18)
                                                                                    <li>
                                                                                        <a href="{{URL::to('/projects/'.strtolower(str_replace(" ","-",$head_completed_project->project_city->name)).'/'.$head_completed_project->project_type->name.'/'.$head_completed_project->project_slug)}}">{{$head_completed_project->project_title}}</a>
                                                                                    </li>
                                                                                @endif

                                                                            @endforeach

                                                                        @else

                                                                            @foreach($data_all['head_completed_projects'] as $index => $head_completed_project)
                                                                                @if($index >18)
                                                                                    <li>
                                                                                        <a href="{{URL::to('/projects/'.strtolower(str_replace(" ","-",$head_completed_project->project_city->name)).'/'.$head_completed_project->project_type->name.'/'.$head_completed_project->project_slug)}}">{{$head_completed_project->project_title}}</a>
                                                                                    </li>
                                                                                @endif
                                                                            @endforeach

                                                                        @endif

                                                                    </ul>

                                                                </div>

                                                            </div>



                                                        </div>

                                                    </div>


                                                </div>

                                            </div>

                                        </div>

                                        <div class="first-drop-sec"> <span>Commercial<i></i></span>
                                            <div class="second-drop">
                                                <div class="project-tabs property-wrap clearfix">
                                                    <ul class="property-nav">
                                                        <li><a href="#commercial-current-tab"><i class="icon-angle-right"></i>CURRENT</a></li>
                                                        <li><a href="#commercial-completed-tab"><i class="icon-angle-right"></i>DELIVERED</a></li>
                                                    </ul>


                                                    <div id="commercial-current-tab" class="property-list">

                                                        <div class="row property-list-inner">


                                                            <div class="col-sm-4 pr-list-sec">

                                                                <div class="scrollbox-pr">

                                                                    <ul class="pr-list styled-list style-3">

                                                                        @if(isset($data['head_com_current_projects']))
                                                                            @foreach($data['head_com_current_projects'] as $index => $head_com_current_project)

                                                                                @if($index <5)
                                                                                    <li>
                                                                                        <a href="{{URL::to('/projects/'.strtolower(str_replace(" ","-",$head_com_current_project->project_city->name)).'/'.$head_com_current_project->project_type->name.'/'.$head_com_current_project->project_slug)}}">{{$head_com_current_project->project_title}}</a>
                                                                                    </li>
                                                                                @endif

                                                                            @endforeach

                                                                        @else

                                                                            @foreach($data_all['head_com_current_projects'] as $index => $head_com_current_project)
                                                                                @if($index <5)
                                                                                    <li>
                                                                                        <a href="{{URL::to('/projects/'.strtolower(str_replace(" ","-",$head_com_current_project->project_city->name)).'/'.$head_com_current_project->project_type->name.'/'.$head_com_current_project->project_slug)}}">{{$head_com_current_project->project_title}}</a>
                                                                                    </li>
                                                                                @endif
                                                                            @endforeach

                                                                        @endif

                                                                    </ul>

                                                                </div>

                                                            </div>


                                                            <div class="col-sm-4 pr-list-sec">

                                                                <div class="scrollbox-pr">

                                                                    <ul class="pr-list styled-list style-3">

                                                                        @if(isset($data['head_com_current_projects']))
                                                                            @foreach($data['head_com_current_projects'] as $index => $head_com_current_project)

                                                                                @if($index >=5 && $index <18 )
                                                                                    <li>
                                                                                        <a href="{{URL::to('/projects/'.strtolower(str_replace(" ","-",$head_com_current_project->project_city->name)).'/'.$head_com_current_project->project_type->name.'/'.$head_com_current_project->project_slug)}}">{{$head_com_current_project->project_title}}</a>
                                                                                    </li>
                                                                                @endif

                                                                            @endforeach

                                                                        @else

                                                                            @foreach($data_all['head_com_current_projects'] as $index => $head_com_current_project)
                                                                                @if($index >=5 && $index <18)
                                                                                    <li>
                                                                                        <a href="{{URL::to('/projects/'.strtolower(str_replace(" ","-",$head_com_current_project->project_city->name)).'/'.$head_com_current_project->project_type->name.'/'.$head_com_current_project->project_slug)}}">{{$head_com_current_project->project_title}}</a>
                                                                                    </li>
                                                                                @endif
                                                                            @endforeach

                                                                        @endif

                                                                    </ul>

                                                                </div>

                                                            </div>



                                                            <div class="col-sm-4 pr-list-sec">

                                                                <div class="scrollbox-pr" style="overflow-y">

                                                                    <ul class="pr-list styled-list style-3">

                                                                        @if(isset($data['head_com_current_projects']))
                                                                            @foreach($data['head_com_current_projects'] as $index => $head_com_current_project)

                                                                                @if($index >=18 )
                                                                                    <li>
                                                                                        <a href="{{URL::to('/projects/'.strtolower(str_replace(" ","-",$head_com_current_project->project_city->name)).'/'.$head_com_current_project->project_type->name.'/'.$head_com_current_project->project_slug)}}">{{$head_com_current_project->project_title}}</a>
                                                                                    </li>
                                                                                @endif

                                                                            @endforeach

                                                                        @else

                                                                            @foreach($data_all['head_com_current_projects'] as $index => $head_com_current_project)
                                                                                @if($index >=18)
                                                                                    <li>
                                                                                        <a href="{{URL::to('/projects/'.strtolower(str_replace(" ","-",$head_com_current_project->project_city->name)).'/'.$head_com_current_project->project_type->name.'/'.$head_com_current_project->project_slug)}}">{{$head_com_current_project->project_title}}</a>
                                                                                    </li>
                                                                                @endif
                                                                            @endforeach

                                                                        @endif

                                                                    </ul>

                                                                </div>

                                                            </div>



                                                        </div>

                                                    </div>


                                                    <div id="commercial-completed-tab" class="property-list">

                                                        <div class="row property-list-inner">


                                                            <div class="col-sm-4 pr-list-sec">

                                                                <div class="scrollbox-pr">

                                                                    <ul class="pr-list styled-list style-3">
                                                                        @if(isset($data['head_com_completed_projects']))
                                                                            @foreach($data['head_com_completed_projects'] as $index => $head_com_completed_project)

                                                                                @if($index <9)
                                                                                    <li>
                                                                                        <a href="{{URL::to('/projects/'.strtolower(str_replace(" ","-",$head_com_completed_project->project_city->name)).'/'.$head_com_completed_project->project_type->name.'/'.$head_com_completed_project->project_slug)}}">{{$head_com_completed_project->project_title}}</a>
                                                                                    </li>
                                                                                @endif

                                                                            @endforeach

                                                                        @else

                                                                            @foreach($data_all['head_com_completed_projects'] as $index => $head_com_completed_project)
                                                                                @if($index <9)
                                                                                    <li>
                                                                                        <a href="{{URL::to('/projects/'.strtolower(str_replace(" ","-",$head_com_completed_project->project_city->name)).'/'.$head_com_completed_project->project_type->name.'/'.$head_com_completed_project->project_slug)}}">{{$head_com_completed_project->project_title}}</a>
                                                                                    </li>
                                                                                @endif
                                                                            @endforeach

                                                                        @endif
                                                                    </ul>

                                                                </div>

                                                            </div>



                                                            <div class="col-sm-4 pr-list-sec">

                                                                <div class="scrollbox-pr">

                                                                    <ul class="pr-list styled-list style-3">
                                                                        @if(isset($data['head_com_completed_projects']))
                                                                            @foreach($data['head_com_completed_projects'] as $index => $head_com_completed_project)

                                                                                @if($index >=9 && $index <18)
                                                                                    <li>
                                                                                        <a href="{{URL::to('/projects/'.strtolower(str_replace(" ","-",$head_com_completed_project->project_city->name)).'/'.$head_com_completed_project->project_type->name.'/'.$head_com_completed_project->project_slug)}}">{{$head_com_completed_project->project_title}}</a>
                                                                                    </li>
                                                                                @endif

                                                                            @endforeach

                                                                        @else

                                                                            @foreach($data_all['head_com_completed_projects'] as $index => $head_com_completed_project)
                                                                                @if($index >=9 && $index <18)
                                                                                    <li>
                                                                                        <a href="{{URL::to('/projects/'.strtolower(str_replace(" ","-",$head_com_completed_project->project_city->name)).'/'.$head_com_completed_project->project_type->name.'/'.$head_com_completed_project->project_slug)}}">{{$head_com_completed_project->project_title}}</a>
                                                                                    </li>
                                                                                @endif
                                                                            @endforeach

                                                                        @endif
                                                                    </ul>

                                                                </div>

                                                            </div>


                                                            <div class="col-sm-4 pr-list-sec">

                                                                <div class="scrollbox-pr">

                                                                    <ul class="pr-list styled-list style-3">
                                                                        @if(isset($data['head_com_completed_projects']))
                                                                            @foreach($data['head_com_completed_projects'] as $index => $head_com_completed_project)

                                                                                @if($index >=18 )
                                                                                    <li>
                                                                                        <a href="{{URL::to('/projects/'.strtolower(str_replace(" ","-",$head_com_completed_project->project_city->name)).'/'.$head_com_completed_project->project_type->name.'/'.$head_com_completed_project->project_slug)}}">{{$head_com_completed_project->project_title}}</a>
                                                                                    </li>
                                                                                @endif

                                                                            @endforeach

                                                                        @else

                                                                            @foreach($data_all['head_com_completed_projects'] as $index => $head_com_completed_project)
                                                                                @if($index >=18 )
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


                                                </div>

                                            </div>

                                        </div>


                                    </div>

                                </li>

                            </ul>

                        </li>




                        <li class="our-nav">
                            <a href="javascript:void(0)" style="font-weight: 400!important;">INVESTORS</a>
                            <ul class="mega-menu">
                                <li>
                                <ul class="sub-nav-list1">
                                <li><a href="{{url('/investor/annual-report')}}">Annual Reports &amp; Others</a></li>
                                    <li><a href="{{url('/investor/financials')}}">financials</a></li>

                                    <li><a target="_blank" href="{{'/fixed-deposit'}}">Fixed Deposit Scheme</a></li>


                                    <li><a href="{{url('/investor/corporate-governance')}}">Corporate Governance</a></li>
                                    <li><a href="{{url('/investor/csr/event')}}">CSR</a></li>

                                    <li><a href="{{url('/investor/contact')}}">investor contact</a></li>

                                    <li><a href="{{url('/investor/shareholding-pattern')}}">shareholding pattern</a></li>



                                    <li><a href="{{url('/investor/stakeholder-information')}}">Stakeholder(s) Information</a></li>
                                </ul>
                                </li>
                            </ul>
                        </li>

                    </ul>

                </div>

            </div>

        </div>

    </div>

</div>


<!--==============================================================
Mobile Menu starts here
==================================================================-->
<div class="header-mobile">

    <div class="container">

        <div class="row">

            <div class="wap-search">

                <input type="search" class="form-control">

                <span class="wap-search-close"><i class="icon-cancel"></i></span> </div>

            <div class="logo"> <a href="{{URL::to('/')}}"><img src="{{cdn()}}/images/Omaxe-Logo.jpg" alt="Omaxe Properties"></a> </div>

            <div class="rhs-nav">



                <span class="nav-toggle"> <i class="icon-bar"></i> <i class="icon-bar"></i> <i class="icon-bar"></i> </span> </div>

            <div class="m-nav">

                <div class="nav-inner">

                    <ul id="wap-menu" class="sm sm-simple">

                        <li><a href="">Login</a>
                            {{--<div class="login-dropdown">--}}
                                {{--<button onclick="loginChange()" class="login-dropbtn"><i class="fas fa-sign-in-alt"></i>&nbsp;&nbsp;Login</button>--}}
                                {{--<div id="loginDropdown" class="login-dropdown-content">--}}
                                    <ul>
                                        <li><a target="_blank" href="http://businessassociates.omaxe.com/">Associates Login</a></li>
                                        <li><a target="_blank" href="http://myhome.omaxe.com/">Customer Login</a></li>
                                    </ul>
                                {{--</div>--}}
                            {{--</div>--}}

                        </li>

                        <li> <a href="javascript:void(0)">About Us</a>

                            <ul>

                                <li><a href="{{url('/about-us/awards-and-honors')}}">Awards And Honors</a></li>
                                <li><a href="{{url('/about-us/cmd-message')}}">Cmd Message</a></li>
                                <li><a href="{{url('/about-us/leadership-team')}}">Leadership Team</a></li>
                                <li><a href="{{url('/about-us/mission-and-vision')}}">Mission And Vision</a></li>
                                <li><a href="{{url('/about-us/quality-policy')}}">Quality Policy</a></li>
                                <li><a href="{{url('/about-us/success-story')}}">Success Story</a></li>



                            </ul>

                        </li>

                        <li> <a href="#">OUR Projects</a>

                            <ul>

                                <li> <a href="#">by city<i></i></a>

                                    <ul>



                                        <li><a href="{{asset('/projects/new-chandigarh')}}">New Chandigarh</a></li>
                                        <li><a href="{{asset('/projects/lucknow')}}">Lucknow</a></li>
                                        <li><a href="{{asset('/projects/ludhiana')}}">Ludhiana</a></li>
                                        <li><a href="{{asset('/projects/faridabad')}}">Faridabad</a></li>
                                        <li><a href="{{asset('/projects/greater-noida')}}">Greater Noida</a></li>

                                        <li><a href="{{asset('/projects/prayagraj')}}">Prayagraj</a></li>
                                        <li><a href="{{asset('/projects/vrindavan')}}">Vrindavan</a></li>
                                        <li><a href="{{asset('/projects/noida')}}">Noida</a></li>
                                        <li><a href="{{asset('/projects/sonipat')}}">Sonipat</a></li>
                                        <li><a href="{{asset('/projects/yamuna-nagar')}}">Yamuna Nagar</a></li>
                                        <li><a href="{{asset('/projects/bathinda')}}">Bathinda</a></li>
                                        {{--<li><a href="{{asset('/projects/mangliya')}}">Mangliya</a></li>--}}
                                        {{--<li><a href="{{asset('/projects/mayakhedi')}}">Mayakhedi</a></li>--}}


                                        <li><a href="{{asset('/projects/indore')}}">Indore</a></li>
                                        <li><a href="{{asset('/projects/bhiwadi')}}">Bhiwadi</a></li>
                                        <li><a href="{{asset('/projects/baddi')}}">Baddi</a></li>
                                        <li><a href="{{asset('/projects/derabassi')}}">Derabassi</a></li>
                                        <li><a href="{{asset('/projects/amritsar')}}">Amritsar</a></li>

                                        <li><a href="{{asset('/projects/delhi')}}">Delhi</a></li>
                                        <li><a href="{{asset('/projects/bahadurgarh')}}">Bahadurgarh</a></li>
                                        <li><a href="{{asset('/projects/rohtak')}}">Rohtak</a></li>
                                        <li><a href="{{asset('/projects/jaipur')}}">Jaipur</a></li>
                                        <li><a href="{{asset('/projects/gurgaon')}}">Gurgaon</a></li>
                                        <li><a href="{{asset('/projects/indirapuram')}}">Indirapuram</a></li>
                                        <li><a href="{{asset('/projects/patiala')}}">Patiala</a></li>

                                        <li><a href="{{asset('/projects/rudrapur')}}">Rudrapur</a></li>

                                        <li><a href="{{asset('/projects/agra')}}">Agra</a></li>
                                        <li><a href="{{asset('/projects/ghaziabad')}}">Ghaziabad</a></li>
                                        <li><a href="{{asset('/projects/palwal')}}">Palwal</a></li>

                                        {{--@if(isset($data['head_city']))--}}

                                            {{--<li><a href="{{asset('/projects/new-chandigarh')}}">New Chandigarh</a></li>--}}
                                            {{--<li><a href="{{asset('/projects/lucknow')}}">Lucknow</a></li>--}}

                                            {{--<li><a href="{{asset('/projects/ludhiana')}}">Ludhiana</a></li>--}}


                                            {{--<li><a href="{{asset('/projects/faridabad')}}">Faridabad</a></li>--}}

                                            {{--<li><a href="{{asset('/projects/vrindavan')}}">Vrindavan</a></li>--}}

                                            {{--<li><a href="{{asset('/projects/allahabad')}}">Allahabad</a></li>--}}



                                        {{--@foreach($data['head_city'] as $index => $cities)--}}
                                                {{--<li><a href="{{URL::to('/projects/'.strtolower(str_replace(" ","-",$cities->name)))}}">{{ucwords($cities->name)}}</a></li>--}}
                                            {{--@endforeach--}}

                                        {{--@else--}}

                                            {{--<li><a href="{{asset('/projects/new-chandigarh')}}">New Chandigarh</a></li>--}}
                                            {{--<li><a href="{{asset('/projects/lucknow')}}">Lucknow</a></li>--}}

                                            {{--<li><a href="{{asset('/projects/ludhiana')}}">Ludhiana</a></li>--}}


                                            {{--<li><a href="{{asset('/projects/faridabad')}}">Faridabad</a></li>--}}

                                            {{--<li><a href="{{asset('/projects/vrindavan')}}">Vrindavan</a></li>--}}

                                            {{--<li><a href="{{asset('/projects/allahabad')}}">Allahabad</a></li>--}}



                                        {{--@foreach($data_all['head_city'] as $index => $cities)--}}
                                                {{--<li><a href="{{URL::to('/projects/'.strtolower(str_replace(" ","-",$cities->name)))}}">{{ucwords($cities->name)}}</a></li>--}}
                                            {{--@endforeach--}}


                                        {{--@endif--}}

                                    </ul>

                                </li>

                                <li>
                                    <a href="#">Residential</a>
                                    <ul>
                                        <li><a href="#">CURRENT</a>
                                            <ul>
                                                @if(isset($data['head_current_projects']))
                                                    @foreach($data['head_current_projects'] as $index => $head_current_project)

                                                        {{--@if($index <9)--}}
                                                        <li>
                                                            <a href="{{URL::to('/projects/'.strtolower(str_replace(" ","-",$head_current_project->project_city->name)).'/'.$head_current_project->project_type->name.'/'.$head_current_project->project_slug)}}">{{$head_current_project->project_title}}</a>
                                                        </li>
                                                        {{--@endif--}}

                                                    @endforeach

                                                @else

                                                    @foreach($data_all['head_current_projects'] as $index => $head_current_project)
                                                        {{--                                                                @if($index <9)--}}
                                                        <li>
                                                            <a href="{{URL::to('/projects/'.strtolower(str_replace(" ","-",$head_current_project->project_city->name)).'/'.$head_current_project->project_type->name.'/'.$head_current_project->project_slug)}}">{{$head_current_project->project_title}}</a>
                                                        </li>
                                                        {{--@endif--}}
                                                    @endforeach

                                                @endif
                                            </ul>
                                        </li>
                                        {{--<li>--}}
                                            {{--<a href="#">UPCOMING</a>--}}
                                            {{--<ul>--}}
                                                {{--@if(isset($data['head_upcoming_projects']))--}}
                                                    {{--@foreach($data['head_upcoming_projects'] as $index => $head_upcoming_project)--}}

                                                        {{--@if($index <9)--}}
                                                            {{--<li>--}}
                                                                {{--<a href="{{URL::to('/projects/'.strtolower(str_replace(" ","-",$head_upcoming_project->project_city->name)).'/'.$head_upcoming_project->project_type->name.'/'.$head_upcoming_project->project_slug)}}">{{$head_upcoming_project->project_title}}</a>--}}
                                                            {{--</li>--}}
                                                        {{--@endif--}}

                                                    {{--@endforeach--}}

                                                {{--@else--}}

                                                    {{--@foreach($data_all['head_upcoming_projects'] as $index => $head_upcoming_project)--}}
                                                        {{--@if($index <9)--}}
                                                            {{--<li>--}}
                                                                {{--<a href="{{URL::to('/projects/'.strtolower(str_replace(" ","-",$head_upcoming_project->project_city->name)).'/'.$head_upcoming_project->project_type->name.'/'.$head_upcoming_project->project_slug)}}">{{$head_upcoming_project->project_title}}</a>--}}
                                                            {{--</li>--}}
                                                        {{--@endif--}}
                                                    {{--@endforeach--}}

                                                {{--@endif--}}
                                            {{--</ul>--}}
                                        {{--</li>--}}
                                        <li><a href="#">DELIVERED</a>
                                            <ul>
                                                @if(isset($data['head_completed_projects']))
                                                    @foreach($data['head_completed_projects'] as $index => $head_completed_project)

                                                        @if($index <9)
                                                            <li>
                                                                <a href="{{URL::to('/projects/'.strtolower(str_replace(" ","-",$head_completed_project->project_city->name)).'/'.$head_completed_project->project_type->name.'/'.$head_completed_project->project_slug)}}">{{$head_completed_project->project_title}}</a>
                                                            </li>
                                                        @endif

                                                    @endforeach

                                                @else

                                                    @foreach($data_all['head_completed_projects'] as $index => $head_completed_project)
                                                        @if($index <9)
                                                            <li>
                                                                <a href="{{URL::to('/projects/'.strtolower(str_replace(" ","-",$head_completed_project->project_city->name)).'/'.$head_completed_project->project_type->name.'/'.$head_completed_project->project_slug)}}">{{$head_completed_project->project_title}}</a>
                                                            </li>
                                                        @endif
                                                    @endforeach

                                                @endif
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Commercial</a>
                                    <ul>
                                        <li>
                                            <a href="#">CURRENT</a>
                                            <ul>
                                                @if(isset($data['head_com_current_projects']))
                                                    @foreach($data['head_com_current_projects'] as $index => $head_com_current_project)

                                                        @if($index <9)
                                                            <li>
                                                                <a href="{{URL::to('/projects/'.strtolower(str_replace(" ","-",$head_com_current_project->project_city->name)).'/'.$head_com_current_project->project_type->name.'/'.$head_com_current_project->project_slug)}}">{{$head_com_current_project->project_title}}</a>
                                                            </li>
                                                        @endif

                                                    @endforeach

                                                @else

                                                    @foreach($data_all['head_com_current_projects'] as $index => $head_com_current_project)
                                                        @if($index <9)
                                                            <li>
                                                                <a href="{{URL::to('/projects/'.strtolower(str_replace(" ","-",$head_com_current_project->project_city->name)).'/'.$head_com_current_project->project_type->name.'/'.$head_com_current_project->project_slug)}}">{{$head_com_current_project->project_title}}</a>
                                                            </li>
                                                        @endif
                                                    @endforeach

                                                @endif
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">DELIVERED</a>
                                            <ul>
                                                @if(isset($data['head_com_completed_projects']))
                                                    @foreach($data['head_com_completed_projects'] as $index => $head_com_completed_project)

                                                        @if($index <9)
                                                            <li>
                                                                <a href="{{URL::to('/projects/'.strtolower(str_replace(" ","-",$head_com_completed_project->project_city->name)).'/'.$head_com_completed_project->project_type->name.'/'.$head_com_completed_project->project_slug)}}">{{$head_com_completed_project->project_title}}</a>
                                                            </li>
                                                        @endif

                                                    @endforeach

                                                @else

                                                    @foreach($data_all['head_com_completed_projects'] as $index => $head_com_completed_project)
                                                        @if($index <9)
                                                            <li>
                                                                <a href="{{URL::to('/projects/'.strtolower(str_replace(" ","-",$head_com_completed_project->project_city->name)).'/'.$head_com_completed_project->project_type->name.'/'.$head_com_completed_project->project_slug)}}">{{$head_com_completed_project->project_title}}</a>
                                                            </li>
                                                        @endif
                                                    @endforeach

                                                @endif
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>

                        </li>



                        {{--<li> <a href="#">NRI Corner</a>--}}

                        {{--<ul>--}}

                        {{--<li><a href="#" target="_self">Legal Information</a></li><li><a href="#" target="_self">Loan for NRIs</a></li><li><a href="#" target="_self">NRI FAQs</a></li><li><a href="#" target="_self">Currency Converter</a></li>--}}
                        {{--</ul>--}}

                        {{--</li>--}}

                        <li> <a href="#">Investors</a>

                            <ul>

                                <li><a href="{{url('/investor/annual-report')}}">Annual Reports &amp; Others</a></li>
                                <li><a href="{{url('/investor/corporate-governance')}}">Corporate Governance</a></li>
                                <li><a href="{{url('/investor/stakeholder-information')}}">Stakeholder(s) Information</a></li>
                                <li><a href="{{url('/investor/financials')}}">Financials</a></li>
                                <li><a href="{{url('/investor/shareholding-pattern')}}">Shareholding pattern</a></li>
                                <li><a href="{{url('/investor/contact')}}">Investor contact</a></li>
                                <li><a href="{{url('/investor/csr/event')}}">Csr</a></li>
                                <li><a target="_blank" href="{{'/fixed-deposit'}}">Fixed Deposit Scheme</a></li>
                            </ul>

                        </li>

                        {{--<li> <a href="#">Buyers Guide</a>--}}
                        {{--<ul>--}}
                        {{--<li><a href="#" target="_self">Home Loans</a></li><li><a href="#" target="_self">Tax Benefit Information</a></li><li><a href="#" target="_self">EMI Calculator</a></li><li><a href="#" target="_self">Real Estate FAQs</a></li><li><a href="#" target="_self">Real Estate Act, 2016</a></li>--}}
                        {{--</ul>--}}
                        {{--</li>--}}
                        <li> <a href="#">Media</a>
                            <ul>
                                <li><a href="{{url('/media/ad-campaigns')}}" target="_self">Ad Campaigns</a></li>
                                <li><a href="{{url('/media/e-coverages')}}" target="_self">E Coverages</a></li>
                                <li><a href="{{url('/media/events')}}" target="_self">Events</a></li>
                                <li><a href="{{url('/media/media-kit')}}" target="_self">Media Kit</a></li>
                                <li><a href="{{url('/media/contact')}}" target="_self">Media Contact</a></li>
                                <li><a href="{{url('/media/print-coverages')}}" target="_self">Print Coverages</a></li>
                                <li><a href="{{url('/media/corporate-newsletter')}}" target="_self"> Corporate newsletter</a></li>


                                <li><a href="{{url('/media/regional-newsletter')}}" target="_self"> Regional newsletter</a></li>
                                <li><a href="{{url('/media/media-videos')}}" target="_self"> Videos</a></li>
                            </ul>
                        </li>
                        
                           <li> <a href="#">Careers</a>
                            <ul>
                                <li><a href="{{url('/career/current-openings')}}">Current Openings</a></li>
                                <li><a href="{{url('/career/employee-welfare')}}">Employee Welfare</a></li>
                                <li><a href="{{url('/career/growth-opportunities')}}">Growth Opportunities</a></li>
                                <li><a href="{{url('/career/work-culture')}}">Work Culture</a></li>

                            </ul>
                        </li>

                        
                        <li> <a href="#">Contact Us</a>
                            <ul>
                                <li><a href="{{url('/contact-us/send-enquiry')}}">Send Enquiry</a></li>
                                <li><a href="{{url('/contact-us/regional-offices')}}">Reach Us</a></li>

                            </ul>
                        </li>

                     

                        <li> <a href="#">FAQ</a>
                            <ul>
                                <li><a href="{{url('/faq/new-chandigarh')}}">New Chandigarh</a></li>
                                <li><a href="{{url('/faq/ludhiana')}}">Ludhiana</a></li>
                                <li><a href="{{url('/faq/vrindavan')}}">Vrindavan</a></li>


                            </ul>
                        </li>

                        <li> <a href="#">Omaxe Care</a>
                            <ul>
                                <li><a href="{{url('/care/omaxe-care')}}">Omaxe care</a></li>
                                <li><a href="{{url('/care/nri-care')}}">NRI care</a></li>
                                <li><a href="{{url('/care/associate')}}">Associate</a></li>
                                <li><a href="{{url('/care/vendors')}}">Vendors</a></li>
                                <li><a href="{{url('/care/buyers-guide')}}">Buyers guide</a></li>

                            </ul>
                        </li>

                        <li><a href="http://blog.omaxe.com/" target="_blank">Blog</a></li>
                        {{--<li><a href="https://www.omaxe.com/fd/" target="_blank">FD</a></li>--}}
                    </ul>

                    <div class="social">
                        <h3><span class="img-title"><i class="fas fa-globe"></i>&nbsp;FOLLOW US</span></h3>
                        <ul class="foot-data fd social-icons" style="transition: 0.5s;">

                            <li><a  target="_blank" href="https://www.linkedin.com/company/omaxe-limited"><i class="fab fa-linkedin"></i></a></li>

                            <li><a target="_blank" href="https://www.facebook.com/Omaxeltd/"><i class="fab fa-facebook-f"></i></a></li>

                            <li><a target="_blank" href="https://www.instagram.com/omaxeltd/"><i class="fab fa-instagram"></i></a></li>

                            <li><a   target="_blank" href="https://www.youtube.com/user/omaxelimited"><i class="fab fa-youtube"></i></a></li>

                            <li><a target="_blank" href="https://twitter.com/OmaxeLimited"><i class="fab fa-twitter"></i></a></li>
                            <li><a   target="_blank" href="https://plus.google.com/u/0/117970255789124285670"><i class="fab fa-google"></i></a></li>

                            <li><a href="http://blog.omaxe.com" target="_blank" title="blog"><i class="fab fa-blogger-b"></i></a></li>


                        </ul>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>

