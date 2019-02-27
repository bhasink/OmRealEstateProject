@extends('layouts.layout')


@section('content')


    @include('layouts.header')


    <style>
        .top-content{
            margin-bottom: 0px;
            height: 515px;
        }
        .has-error{
            border: 1px solid red;
        }
        .nothas-error{
            border: 1px solid green;
        }


    </style>



    <div class="top-content media-contact-banner">

        {{--<div class="content-cover" style="height: 500px;"></div>--}}

    </div>

    <header>
        <nav id='cssmenu'>
            <div id="head-mobile"></div>
            <div class="button-cont button" onclick="myFunction(this)">
                <div class="bar1"></div>
                <div class="bar2"></div>
                <div class="bar3"></div>
            </div>

            <ul>
                <li><a href='/media/ad-campaigns'>AD CAMPAIGNS</a></li>
                <li><a href='/media/e-coverages'>E-COVERAGES</a></li>
                <li><a href='/media/events'>EVENTS</a></li>
                <li><a href='/media/media-kit'>MEDIA KIT</a></li>
                <li class='active'><a href='/media/contact'>MEDIA CONTACTS</a></li>
                <li><a href='/media/print-coverages'>PRINT COVERAGES</a></li>
                <li><a href='/media/press-releases'>PRESS RELEASES</a></li>
                <li><a href='/media/media-videos'>VIDEOS</a></li>
                <li class="dropdown">
                    <a href="#"  data-toggle="dropdown">NEWSLETTER </a>
                    <ul class="dropdown-menu" style="margin:0px;padding:0px;">
                        <li><a href='/media/regional-newsletter'>REGIONAL</a></li>
                        <li><a href='/media/corporate-newsletter'>CORPORATE</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </header>

{{--    {{ Breadcrumbs::render('investors', "/about-us/awards-and-honors","Contacts") }}--}}

    <ol class="breadcrumb">

        <li class="breadcrumb-item"><a href="http://phplaravel-163112-471465.cloudwaysapps.com">Home</a></li>

        <li class="breadcrumb-item active">Media</li>
        <li class="breadcrumb-item active">Contacts</li>

    </ol>






    <section class="invcon">
        <div class="flash-message">
            {{--@foreach (['danger', 'warning', 'success', 'info'] as $msg)--}}
            @if(Session::has('alert-success'))
                <script> alert('Thank you for your interest. We will get back to you sortly.')</script>
            @endif
            @if(Session::has('alert-danger'))
                <script> alert('Thanks, Problem while submitting.')</script>
            @endif
            {{--@endforeach--}}
        </div>

        <div class="container formcon">

            <div class="col-md-12">

                {!! Form::open(array('action' => 'MediaController@media_contact_us', 'method' => 'post','id'=>'contact_formm','enctype' => 'multipart/form-data')) !!}

                <div class="form-row">
                        <div class="col-md-6 mb-3">
                            <label for="validationServer01">NAME</label>
                            <input type="text" name="name" class="form-control {{ $errors->has('name') ? 'has-error' : '' }}" id="validationServer01" placeholder="Name..." value="" required>
                            <span class="text-danger">{{ $errors->first('name') }}</span>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="validationServer02">ADDRESS</label>
                            <input type="text" class="form-control {{ $errors->has('address') ? 'has-error' : '' }}" id="validationServer02" placeholder="Address..."  name="address" value="" required>
                            <span class="text-danger">{{ $errors->first('address') }}</span>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                            <label for="validationServer01">EMAIL</label>
                            <input type="text"  name="email" class="form-control {{ $errors->has('email') ? 'has-error' : '' }}" id="validationServer01" placeholder="Email..." value="" required>
                            <span class="text-danger">{{ $errors->first('email') }}</span>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="validationServer02">PHONE</label>
                            <input type="tel"   name="phone" class="form-control {{ $errors->has('phone') ? 'has-error' : '' }}"   id="demo" placeholder="+91" value="" required>
                            <span class="text-danger">{{ $errors->first('phone') }}</span>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                    </div>

                    <div class="form-row">
                        {{--<div class="col-md-6 mb-3">--}}
                            {{--<label for="validationServer02">TYPE OF QUERY</label>--}}
                            {{--<input type="text" class="form-control {{ $errors->has('query_type') ? 'has-error' : '' }}"  name="query_type" id="validationServer02" placeholder="Type Of Query..." value="" required>--}}
                            {{--<span class="text-danger">{{ $errors->first('query_type') }}</span>--}}
                            {{--<div class="valid-feedback">--}}
                                {{--Looks good!--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">QUERY / GRIEVANCE</label>
                                <textarea class="form-control {{ $errors->has('query') ? 'has-error' : '' }}"  name="query" id="exampleFormControlTextarea1" rows="3"></textarea>
                                <span class="text-danger">{{ $errors->first('query') }}</span>
                            </div>
                        </div>

                        <div class="col-md-6 mb-3">

                            <div class="form-group">
                                <div class="col-md-12 inputGroupContainer">
                                    <label for="ReCaptcha">Recaptcha:</label>
                                    {!! NoCaptcha::renderJs() !!}
                                    {!! NoCaptcha::display() !!}
                                </div>
                            </div>
                            <span class="text-danger">{{ $errors->first('g-recaptcha-response') }}</span>

                        </div>

                    </div>

                    <div class="form-row">
                        {{--<div class="col-md-6 mb-3">--}}
                            {{--<label for="validationServer02">ENTER CAPTCHA</label>--}}
                            {{--<input type="text" class="form-control " id="validationServer02" placeholder="Enter Captcha..." value="" required>--}}
                            {{--<div class="valid-feedback">--}}
                                {{--Looks good!--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        <div class="col-md-6 mb-3">
                        </div>

                        <div class="col-md-6 mb-3" style="float: right;">
                            <button class="btn btn-primary inv-btn" type="submit">Submit</button>
                        </div>

                    </div>
               {!! Form::close() !!}
            </div>
        </div>
    </section>
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

