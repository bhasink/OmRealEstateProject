@extends('layouts.layout')
@section('content')
    <div class="loader-cont" id="loader">
        <div class="loader-spin"></div>
    </div>
    <style type="text/css">
        .amenities-div {
            padding-bottom: 20px;
            padding-top: 0px
        }
        .landmark-list { padding-top: 30px }
        .landmark-list li {
            display: inline-block;
            vertical-align: top;
            width: 32%;
            text-align: left;
            padding: 20px 10px
        }
        .landmark-list li img {
            display: inline-block;
            vertical-align: middle;
            -webkit-filter: grayscale(100%);
            -ms-filter: grayscale(100%);
            -moz-filter: grayscale(100%);
            filter: grayscale(100%);
            -webkit-transition: .3s ease-in-out;
            -ms-transition: .3s ease-in-out;
            -moz-transition: .3s ease-in-out;
            transition: .3s ease-in-out
        }
        .landmark-list li:hover > img {
            -webkit-filter: grayscale(0);
            -ms-filter: grayscale(0);
            -moz-filter: grayscale(0);
            filter: grayscale(0)
        }
        .landmark-list li span {
            display: inline-block;
            vertical-align: middle;
            font-size: 1.8em;
            padding-left: 20px;
            max-width: 73%;
            text-align: left
        }
        .overview-list {
            padding: 0;
            text-align: center;/*margin: 0 -30px*/

        }
        .overview-list li {
            display: inline-block;
            vertical-align: top;
            width: 33%;
            text-align: left;
            padding: 20px 30px
        }
        .view-box h3 {
            font-size: 1.8em;
            text-transform: capitalize;
            font-weight: 400;
            padding: 10px 0;
            margin: 0;
            border-bottom: 1px solid #e4e4e4;
            text-align: left;
        }
        .view-box h3 span { font-size: .85em }
        .view-box p {
            font-size: 1.4em;
            text-align: justify
        }
        .view-box h4 {
            font-size: 1.6em;
            padding: 10px 0 0;
            line-height: normal;
            font-weight: 400
        }
        .view-box h4 strong { font-size: 1.1em }
        .otherProj-list {
            padding: 0;
            text-align: center;
            margin: 0 -10px
        }
        .otherProj-list li {
            display: inline-block;
            vertical-align: top;
            width: 23%;
            text-align: left;
            padding: 10px
        }
        .otherProj-list a { color: #000 }
        .amenities-carousel {
            padding-top: 20px;
            padding-left: 40px;
            padding-right: 40px
        }
        .amenities-carousel.owl-carousel .owl-stage { margin: 0 auto; }
        .amenities-carousel .item { padding: 0 20px }
        .amenities-carousel .owl-nav { padding: 0 }
        .amenities-carousel .owl-nav .owl-prev, .amenities-carousel .owl-nav .owl-next {
            position: absolute;
            color: #525254;
            font-size: 2.2em;
            height: auto;
            margin: 0;
            top: 38%;
            border: none;
            transition: all ease .4s
        }
        .amenities-carousel .owl-nav .owl-prev { left: 0 }
        .amenities-carousel .owl-nav .owl-next { right: 0 }
        .amenities-carousel .owl-nav i {
            padding: 0;
            font-size: 1.4em;
        }
        .owl-carousel.amenities-carousel .owl-nav .owl-prev:hover {
            /*border: none;*/
            background: none;
            color: #525254;
            /*transform: scale(1.4);*/
            padding-right: 10px
        }
        .owl-carousel.amenities-carousel .owl-nav .owl-next:hover {
            /*border: none;*/
            background: none;
            color: #525254;
            /*transform: scale(1.4);*/
            padding-left: 10px
        }
        .comn-carousel { padding: 0 60px; }
        .comn-carousel .owl-nav { padding: 0 }
        .comn-carousel .owl-nav .owl-prev, .comn-carousel .owl-nav .owl-next {
            position: absolute;
            color: #525254;
            font-size: 2.2em;
            height: auto;
            margin: 0;
            top: 38%;
            border: none;
            transition: all ease .4s
        }
        .comn-carousel .owl-nav .owl-prev { left: 0 }
        .comn-carousel .owl-nav .owl-next { right: 0 }
        .comn-carousel .owl-nav i {
            padding: 0;
            font-size: 1.4em;
        }
        .owl-carousel.comn-carousel .owl-nav .owl-prev:hover {
            border: none;
            background: none;
            color: #525254;
            transform: scale(1.4);
            padding-right: 10px
        }
        .owl-carousel.comn-carousel .owl-nav .owl-next:hover {
            border: none;
            background: none;
            color: #525254;
            transform: scale(1.4);
            padding-left: 10px
        }
        .amenities-box {
            text-align: left;
            max-width: 300px;
            margin: 0 auto
        }
        .amenities-box h4 {
            font-size: 2.2em;
            text-transform: capitalize;
            font-weight: 300;
            padding-bottom: 5px;
            padding-top: 10px;
            margin: 0;
            border-bottom: 1px solid #e4e4e4
        }

        .amenities-box p {
            font-size: 1.6em;
            line-height: 1.8em;
            padding: 10px 0;
        }
        .form-GIT {
            padding-top: 45px;
            width: 80%;
            margin: 0 auto
        }
        .form-GIT .form-field {
            padding-bottom: 20px;
            text-align: left
        }
        .form-GIT .form-field label {
            display: block;
            font-weight: 400;
            font-size: 14px
        }
        .form-GIT .form-control { background-color: #f2f2f2 }
        .form-GIT .btn {
            background: #d9dae1;
            border: 1px solid #000;
            margin-top: 25px
        }
        .form-GIT .btn:hover, .form-GIT .btn:focus {
            background: #000;
            color: #fff
        }
        .form-cntUs .form-control { background-color: #f2f2f2 }
        .office-div {
            text-align: center;
            padding-top: 60px;
            padding-bottom: 100px
        }
        .office-div .col-of-1 {
            display: inline-block;
            vertical-align: top;
            width: 29%;
            padding-top: 25px
        }
        .office-div .col-of-2 {
            display: inline-block;
            vertical-align: top;
            width: 39%;
            padding-top: 20px
        }
        .office-div .cont_add1 {
            display: inline-block;
            vertical-align: top;
            border-right: 1px solid #ccc;
            margin-top: 40px
        }
        .office-div .cont_add2 {
            display: inline-block;
            vertical-align: top;
            border-right: 1px solid #ccc;
            margin-top: 40px
        }
        .office-div .cont_add1:last-child { border-right: 0 }
        .office-filter {
            margin: 0;
            position: relative;
            border-left: 1px solid #ccc;
            border-right: 1px solid #ccc;
            padding: 0 15px
        }
        .office-filter .office-tab {
            padding-top: 10px;
            max-width: 350px;
            margin: 0 auto
        }
        .office-tab h3 {
            font-weight: 400;
            font-size: 2.4em;
            padding-bottom: 10px
        }
        .office-filter .office-content {
            padding-top: 25px;
            padding-bottom: 60px
        }
        .office-content p { padding: 0 }
        .office-content p strong {
            padding-bottom: 5px;
            font-size: 1.2em;
            display: inline-block
        }
        .office-div .office-rhs {
            float: right;
            width: 50%;
            padding-left: 15px
        }
        .office-div .office-rhs img {
            display: block;
            width: 100%
        }

         .active:after {
             content: "\2212";
         }

        /*.residential-prop{*/
            /*height: 215px;*/
            /*overflow: scroll;*/
        /*}*/

    </style>

    <style>
        .wrapper {
            /*background-color: #ff4f38;*/
            color: #000;
            padding: 1px 15px;
        }

        .slider-container {
            width: 100%;
            max-width: 95%;
            margin: 0 auto;
            padding-top: 35px;
        }

        .slide-image {
            padding: 20px;
            width: 43%;
            display: inline-block;
        }

        .slick-slider {
            position: relative;
        }

        .slick-active {
            opacity: 1;
        }
        .top-content{
            margin-bottom: 20px;
        }

        .slick-arrow {
            position: absolute;
            top: 10%;
            background-color: transparent;
            border: none;
            color: #fff;
            font-size: 30px;
            z-index: 5;
        }

        .slick-prev {
            left: -10px;
        }

        .slick-next {
            right: -10px;
        }

    </style>
    <style type="text/css">
        .ajax-load{
            background: #e1e1e1;
            padding: 10px 0px;
            width: 100%;
        }
        .ajax-load2{
            background: #e1e1e1;
            padding: 10px 0px;
            width: 100%;
        }
        button.slick-next {
            background: #0162b4 !important;
            border-radius: 50%;
        }
        button.slick-prev {
            background: #0162b4 !important;
            border-radius: 50%;
        }

        .top-con-text{
            font-size: 5em;
            padding: 1em;
            background-color: #000000b8;
            color: #fff;
            text-align: center; width: 100%;text-transform: uppercase;
        }
        .top-content {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;

        @if(Route::current()->getName() =="srch")

                   background: url({{cdn()}}/images//website_banner/Search_desktop.jpg) no-repeat center;
            @endif

      }
        @media screen and (max-width: 600px){
            .filter-cont .custom-header:after {
                content: '\002B';
                color: #777;
                font-weight: bold;
                float: right;
                margin-left: 5px;
            }

            .filter-cont .custom-header.active:after {
                content: "\2212";
            }
        }

    </style>
    @include('layouts.header')
    <div class="project-page">

    <div class="top-content">
        {{--<div class="content-cover"></div>--}}

        @if(Route::current()->getName() =="srch")

            <h2 class="top-con-text">Search Properties</h2>

        @endif


    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12">

                {{--<h1 style="text-align: center;text-transform: capitalize;  color: #0162b4;   letter-spacing: 1px;  font-weight: 300 !important; ">Projects by Search</h1>--}}

            </div>
        </div>
        <div class="row">

            {{--@if(Route::current()->getName() == 'search')--}}

                {{--<h1 style="text-align: center;text-transform: capitalize;  color: #0162b4;   letter-spacing: 1px;  font-weight: 300 !important; ">Our Exclusive properties</h1>--}}
            {{--@endif--}}

            <div class="col-md-3">
                <div class="filter-container">

                    <div class="filter-cont">
                        <div class="custom-header"><span>Select City</span>
                            {{--<span class="icon">+</span>--}}
                        </div>
                        <div class="content">
                            @foreach($data['allcities'] as $index=>$allcity)
                                <div class="checkbox-container">
                                    <input class="styled-checkbox" name="citycheckboxes" id="city{{$allcity->id}}" type="checkbox" value="{{$allcity->id}}" onchange="return ApplyFilters();">
                                    <label for="city{{$allcity->id}}">{{$allcity->name}}</label>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="filter-cont">
                        <div class="custom-header"><span>Project Types</span>
                            {{--<span class="icon">+</span>--}}
                        </div>
                        <div class="content height-auto">
                            <div class="checkbox-container">
                                <input class="styled-checkbox cp" name="typecheck" id="Commercial-Projects" type="checkbox" value="2" onchange="return ApplyFilters();">
                                <label for="Commercial-Projects">Commercial Projects</label>
                            </div>

                            <div class="checkbox-container">
                                <input class="styled-checkbox rp" name="typecheck" id="Residential-Projects" type="checkbox" value="1" onchange="return ApplyFilters();">
                                <label for="Residential-Projects">Residential Projects</label>
                            </div>
                        </div>
                    </div>


                    @if(isset($data['residential']))
                    <div class="filter-cont  rpt">
                        <div class="custom-header"><span>Residential Property types</span>
                            {{--<span class="icon">+</span>--}}
                        </div>
                        <div class="content residential-prop">
                            <?php foreach($data['residential'] as $index => $value) { ?>
                            <div class="checkbox-container">
                                <input class="styled-checkbox" name="ptype" id="bhk-{{$value->slug}}" type="checkbox" value="{{$value->property_type}}" onchange="return ApplyFilters();">
                                <label for="bhk-{{$value->slug}}">
                                   <span class="to-lowercase">{{$value->property_type}}</span>
                                </label>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                    @endif

                    @if(isset($data['commercial']))
                    <div class="filter-cont  cpt">
                        <div class="custom-header"><span>Commercial Property types</span>
                            {{--<span class="icon">+</span>--}}
                        </div>
                        <div class="content residential-prop">
                            <?php foreach($data['commercial'] as $index => $value) { ?>
                            <div class="checkbox-container">
                                <input class="styled-checkbox" name="ptype" id="bhk-{{$value->slug}}" type="checkbox" value="{{$value->property_type}}" onchange="return ApplyFilters();">
                                <label for="bhk-{{$value->slug}}">
                                    <span class="to-lowercase">{{$value->property_type}}</span>
                                </label>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                    @endif

                    <div class="filter-cont">
                        <div class="custom-header"><span>Project Status</span>
                            {{--<span class="icon">+</span>--}}
                        </div>
                        <div class="content">
                            <div class="checkbox-container">
                                <input class="styled-checkbox" id="styled-checkbox-4" name="projectstatus" type="checkbox" value="1" onchange="return ApplyFilters();">
                                <label for="styled-checkbox-4">Current</label>
                            </div>
                            <div class="checkbox-container">
                                <input class="styled-checkbox" id="styled-checkbox-5" name="projectstatus" type="checkbox" value="3" onchange="return ApplyFilters();">
                                <label for="styled-checkbox-5">Delivered</label>
                            </div>
                        </div>
                    </div>



                    <div class="filter-cont">
                        <div class="custom-header"><span>Price Range </span>
                            {{--<span class="icon">+</span>--}}
                        </div>
                        <div class="content">
                            <div class="checkbox-container">
                                <input class="styled-checkbox" name="pricerange" id="price-range1" type="checkbox" value="1" onchange="return ApplyFilters();">
                                <label for="price-range1">0-50 Lakh</label>
                            </div>
                            <div class="checkbox-container">
                                <input class="styled-checkbox" name="pricerange" id="price-range2" type="checkbox" value="2" onchange="return ApplyFilters();">
                                <label for="price-range2">50 Lakh - 1 Crore</label>
                            </div>
                            <div class="checkbox-container">
                                <input class="styled-checkbox" name="pricerange" id="price-range3" type="checkbox" value="3" onchange="return ApplyFilters();">
                                <label for="price-range3">1 Crore Above</label>
                            </div>
                            <small class="reset-filter" onclick="return resetFilters();">Reset Filters</small>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-md-9">

            <div class="main-content-heading" style="text-align: center;">
            {{--{{Route::current()->getName()}}--}}
            {{--@if(Route::current()->getName() == 'allProjects')--}}

            {{--@endif--}}

            </div>

                <div class="col-md-12" style="background: #ffffff; height: auto; float: left;">

                    <div class="project-content">
                        <div class="row">

                            <div class="container">
                                <div class="row m-b-30">
                                    <div class="col-md-6 text-left">
                                        <p class="f-14" id="result_count">Showing results <?php echo $data['total_count']; ?></p>
                                    </div>

                                    <div class="col-md-6 text-right">
                                        {{--<select name="sorting" id="sorting" class="form-control" style="width: 200px; margin-left: auto;" onchange="return ApplyFilters();">--}}
                                            {{--<option value="0">Default price range</option>--}}
                                            {{--<option value="1">Price: Low to high</option>--}}
                                            {{--<option value="2">Price: high to low</option>--}}
                                        {{--</select>--}}
                                    </div>

                                </div>

                                <div class="button-tag-container" id="tag-container">
                                </div>

                                <div class="row" id="post-data2">
                                    @foreach($data['project_details'] as $project_detail)
                                            <?php if($project_detail->project_type_id == 1) $project_detail->project_type = "residential";
                                            else $project_detail->project_type = "commercial";?>
                                        <div class="col-md-6 sec col-sm-12 col-xs-12" style="margin-bottom: 15px;">
                                            <div class="video">
                                                <div class="card" style="width: 100%;">
                                                    <a class="stamp-sm-container" href="{{URL::to('/projects/'.strtolower(str_replace(" ","-",$project_detail->name)).'/'.$project_detail->project_type.'/'.$project_detail->project_slug)}}">
                                                        <img class="card-img-top" height="200" src="{{cdn()}}/images//website_banner/{{$project_detail->banner_image}}" alt="{{$project_detail->project_title}}">


                                                        @if($project_detail->project_stamp_id == 1)

                                                            <img src='{{cdn()}}/images//stamps/Hot-selleing-property.png' class='stamps-sm' alt=''>

                                                        @elseif($project_detail->project_stamp_id == 2)
                                                            <img src='{{cdn()}}/images//stamps/ready-to-move-in.png' class='stamps-sm' alt=''>

                                                        @elseif($project_detail->project_stamp_id == 3)

                                                            <img src='{{cdn()}}/images//stamps/Delivered.png' class='stamps-sm' alt=''>
                                                        @elseif($project_detail->project_stamp_id == 4)

                                                            <img src='{{cdn()}}/images//stamps/Under-Construction.png' class='stamps-sm' alt=''>

                                                        @elseif($project_detail->project_stamp_id == 5)

                                                            <img src='{{cdn()}}/images//stamps/Just-launched.png' class='stamps-sm' alt=''>

                                                        @elseif($project_detail->project_stamp_id == 6)

                                                            <img src='{{cdn()}}/images//stamps/sold-out.png' class='stamps-sm' alt=''>

                                                        @elseif($project_detail->project_stamp_id == 7)

                                                            <img src='{{cdn()}}/images//stamps/Possession-Started.png' class='stamps-sm' alt=''>

                                                        @elseif($project_detail->project_stamp_id == 8)

                                                            <img src='{{cdn()}}/images//stamps/Under-Construction-Sold-Out.png' class='stamps-sm' alt=''>


                                                        @elseif($project_detail->project_stamp_id == 9)

                                                            <img src='{{cdn()}}/images//stamps/Delivered-Sold-Out.png' class='stamps-sm' alt=''>

                                                        @elseif($project_detail->project_stamp_id == 10)

                                                            <img src='{{cdn()}}/images//stamps/Possession-Started-Sold-Out.png' class='stamps-sm' alt=''>

                                                        @elseif($project_detail->project_stamp_id == 11)

                                                            <img src='{{cdn()}}/images//stamps/Operational.png' class='stamps-sm' alt=''>


                                                        @elseif($project_detail->project_stamp_id == 12)


                                                            <img src='/images/stamps/Operationa-Sold-Out.png' class='stamp-lg' alt=''>

                                                        @elseif($project_detail->project_stamp_id == 13)


                                                            <img src='/images/stamps/ready-to-fit-out.png' class='stamp-lg' alt=''>


                                                        @else


                                                            <img src='{{cdn()}}/images//stamps/completion_obtained_fitout_started.png' class='stamps-sm' alt=''>


                                                        @endif


                                                    </a>
                                                    <div class="card-body">
                                                        <h5 class="card-title" style="    font-weight: bold;
    height: 50px;
    overflow: hidden;">{{$project_detail->project_title}}</h5>
                                                        {{--<p class="card-text" style="   font-size: 14px;--}}
    {{--text-align: left;--}}
    {{--margin-bottom: 25px;--}}
    {{--font-weight: 100;--}}
    {{--line-height: 1.7em;">--}}
                                                            {{--{{  \Illuminate\Support\Str::limit($project_detail->project_description, 88) }}--}}
                                {{--                            {{ \Illuminate\Support\Str::words($project_detail->project_description,15)}}--}}
                                                        {{--</p>--}}
                                                        <a href="{{URL::to('/projects/'.strtolower(str_replace(" ","-",$project_detail->name)).'/'.$project_detail->project_type.'/'.$project_detail->project_slug)}}" class="btn btn-sm btn-primary">KNOW MORE</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>

                    @if(isset($data['project_details']))
                        
                        <div class="col-md-12 text-center view-all-btn" id="load-more-div">
                            <button type="button"  class="btn btn-outline-dark" onclick="return ApplyFilters(true);">Load More</button>
                        </div>

                    @endif

                </div>
            </div>
        </div>

        <div class="row" style="margin-bottom: 60px; margin-top: 40px;">
            <div class="col-md-12" style="background: #f7f7f7; margin-top: 10px; height:auto; float: left; border-radius: 5px;">
                <div class="row">
                    <div class="col-md-12 nopadding" style="">
                        <div class="main-content-heading" style="margin-top: 30px;">
                            <h1 style="text-align: center;text-transform: uppercase; font-weight: 300 !important;  ">Trending Properties</h1>
                            <p style="text-align: center; font-size:14px; font-weight: 400;">Browse through our most preferred properties and visit site to know more about the project.
                            </p>
                        </div>
                    </div>

                    <div class="col-md-12 sec col-sm-12 col-xs-12">
                        <div class="video">
                            <div class="amenities-carousel owl-carousel">

                            @if(isset($data['trending_properties']))
                                            @foreach($data['trending_properties'] as $index=>$trending_property)
                                                <div class="col-md-12 sec col-sm-12 col-xs-12" style="margin-bottom: 15px;">
                                                    <div class="video">
                                                        <div class="card" style="width: 100%;">
                                                            <a class="stamp-sm-container" href="{{URL::to('/projects/'.strtolower(str_replace(" ","-",$trending_property->project_city->name)).'/'.$trending_property->project_type->name.'/'.$trending_property->project_slug)}}">
                                                                <img class="card-img-top" height="200" src="{{cdn()}}/images//website_banner/{{$trending_property->banner_image}}" alt="{{$trending_property->project_title}}">

                                                                @if($trending_property->project_stamp_id == 1)

                                                                    <img src='{{cdn()}}/images//stamps/Hot-selleing-property.png' class='stamps-sm' alt=''>

                                                                @elseif($trending_property->project_stamp_id == 2)
                                                                    <img src='{{cdn()}}/images//stamps/ready-to-move-in.png' class='stamps-sm' alt=''>

                                                                @elseif($trending_property->project_stamp_id == 3)

                                                                    <img src='{{cdn()}}/images//stamps/Delivered.png' class='stamps-sm' alt=''>
                                                                @elseif($trending_property->project_stamp_id == 4)

                                                                    <img src='{{cdn()}}/images//stamps/Under-Construction.png' class='stamps-sm' alt=''>

                                                                @elseif($trending_property->project_stamp_id == 5)

                                                                    <img src='{{cdn()}}/images//stamps/Just-launched.png' class='stamps-sm' alt=''>

                                                                @elseif($trending_property->project_stamp_id == 6)

                                                                    <img src='{{cdn()}}/images//stamps/sold-out.png' class='stamps-sm' alt=''>

                                                                @elseif($trending_property->project_stamp_id == 7)

                                                                    <img src='{{cdn()}}/images//stamps/Possession-Started.png' class='stamps-sm' alt=''>

                                                                @elseif($trending_property->project_stamp_id == 8)

                                                                    <img src='{{cdn()}}/images//stamps/Under-Construction-Sold-Out.png' class='stamps-sm' alt=''>


                                                                @elseif($trending_property->project_stamp_id == 9)

                                                                    <img src='{{cdn()}}/images//stamps/Delivered-Sold-Out.png' class='stamps-sm' alt=''>

                                                                @elseif($trending_property->project_stamp_id == 10)

                                                                    <img src='{{cdn()}}/images//stamps/Possession-Started-Sold-Out.png' class='stamps-sm' alt=''>

                                                                @elseif($trending_property->project_stamp_id == 11)

                                                                    <img src='{{cdn()}}/images//stamps/Operational.png' class='stamps-sm' alt=''>


                                                                @elseif($project_detail->project_stamp_id == 12)


                                                                    <img src='/images/stamps/Operationa-Sold-Out.png' class='stamp-lg' alt=''>

                                                                @elseif($project_detail->project_stamp_id == 13)


                                                                    <img src='/images/stamps/ready-to-fit-out.png' class='stamp-lg' alt=''>


                                                                @else


                                                                    <img src='{{cdn()}}/images//stamps/completion_obtained_fitout_started.png' class='stamps-sm' alt=''>


                                                                @endif
                                                            </a>
                                                            <div class="card-body">
                                                                <h5 class="card-title" style="font-weight:bold;height: 50px;
    overflow: hidden;">{{$trending_property->project_title}}</h5>

                                                                <a href="{{URL::to('/projects/'.strtolower(str_replace(" ","-",$trending_property->project_city->name)).'/'.$trending_property->project_type->name.'/'.$trending_property->project_slug)}}" class="btn btn-sm btn-primary">KNOW MORE</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{--</div>--}}
    {{--</div>--}}
    <script src="{{ asset('js/projectsearch.js') }}"></script>


    <script>
        $(".cpt").show();
        $(".cp").click(function() {
            if($(this).is(":checked")) {
                $(".rpt").hide();
            } else {
                $(".rpt").show();
            }
        });

        $(".rpt").show();
        $(".rp").click(function() {
            if($(this).is(":checked")) {
                $(".cpt").hide();
            } else {
                $(".cpt").show();
            }
        });

        $("input[type=checkbox]").change(function(){

            if($('.rp').is(':checked') && $('.cp').is(':checked')) {
                $(".rpt").show();
                $(".cpt").show();
            }
            if(!$('.rp').is(':checked') && !$('.cp').is(':checked')) {
                $(".rpt").show();
                $(".cpt").show();
            }
            $(".cp").click(function() {
                if(!$(this).is(":checked")) {
                    $(".cpt").hide();
                } else {
                    $(".cpt").show();
                }
            });
            $(".rp").click(function() {
                if(!$(this).is(":checked")) {
                    $(".rpt").hide();
                } else {
                    $(".rpt").show();
                }
            });
        });
    </script>

    <script>

        $(".custom-header").click(function () {

            $header = $(this);
            //getting the next element
            $content = $header.next();
            //open up the content needed - toggle the slide- if visible, slide up, if not slidedown.
            $content.slideToggle(500, function () {
                $($header).toggleClass("active");
                //execute this after slideToggle is done
                //change text of header based on visibility of content div
                // $header.text(function () {
                //     //change text based on condition
                //     return $content.is(":visible") ? "" : "-";
                // });

            });

        });

        $(document).ready(function () {
            $(window).on("resize", function (e) {
                checkScreenSize();
            });

            checkScreenSize();

            function checkScreenSize(){
                var newWindowWidth = $(window).width()
                if (newWindowWidth < 600) {
                    $(".content").hide();
                    console.log($content);

                }
                else
                {
                    $(".content").show();
                }
            }
        });
    </script>

    <script>
    <?php if($data['total_count'] <= 4){
     ?>
        document.getElementById('load-more-div').style="display:none";
     <?php
    }
    ?>


    <?php if($data['selected_city']) { ?>
        var c_id = "<?php echo $data['selected_city']; ?>";
        document.getElementById('city' + c_id).checked = true;
    <?php } ?>
    <?php if($data['selected_property']) { if($data['selected_property'] == 1) $cc = "Residential-Projects"; else $cc = "Commercial-Projects"; ?>
        var p_id = "<?php echo $cc; ?>";
        document.getElementById(p_id).checked = true;
    <?php } ?>
    <?php if($data['selected_price']) { if($data['selected_price'] == "4999999") $cc = "price-range1"; if($data['selected_price'] == "9999999") $cc = "price-range2"; if($data['selected_price'] == "10000000") $cc = "price-range3"; ?>
        var pr_id = "<?php echo $cc; ?>";
        document.getElementById(pr_id).checked = true;
    <?php } ?>

    //push tag clouds visibility
    <?php if($data['selected_city'] || $data['selected_property'] || $data['selected_price']) { ?>
    var clouds_one = Array();
    $("input:checkbox[name=citycheckboxes]:checked").each(function(){
        var id = ($(this).attr('id'));
        var text = $('label[for='+id+']').html();
        var d = {'text': text, 'id': id};
        clouds_one.push(d);
    });
    $("input:checkbox[name=typecheck]:checked").each(function(){
        var id = ($(this).attr('id'));
        var text = $('label[for='+id+']').html();
        var d = {'text': text, 'id': id};
        clouds_one.push(d);
    });
    $("input:checkbox[name=pricerange]:checked").each(function(){
        var id = ($(this).attr('id'));
        var text = $('label[for='+id+']').html();
        var d = {'text': text, 'id': id};
        clouds_one.push(d);
    });
    $("input:checkbox[name=projectstatus]:checked").each(function(){
        var id = ($(this).attr('id'));
        var text = $('label[for='+id+']').html();
        var d = {'text': text, 'id': id};
        clouds_one.push(d);
    });
    $("input:checkbox[name=ptype]:checked").each(function(){
        var id = ($(this).attr('id'));
        var text = $('label[for='+id+']').html();
        var d = {'text': text, 'id': id};
        clouds_one.push(d);
    });
    //set tag clouds
    var clouds_html = "";
    var tag_container = document.getElementById('tag-container');
    for(var i=0; i< clouds_one.length; i++){
        var temp = "<div class='button-tag' id='tag-" + clouds_one[i].id + "'>" + clouds_one[i].text + "<span id='" + clouds_one[i].id +"'class='close-tag' onclick='removeFilters(this.id)'>X</span></div>";
        clouds_html += temp;
    }
    tag_container.innerHTML = clouds_html;
    <?php } ?>

    var page_count = 1;
    var page_r = 0;
    var page_c = 0;

    var ApplyFilters = function(page, ptype){
        var city = Array();
        var projectType = Array();
        var propertyType = Array();
        var priceRange = Array();
        var projectStatus = Array();
        var sorting = 0;
        var clouds = Array();
 

        var e = document.getElementById("sorting");
//        sorting = e.options[e.selectedIndex].value;

        $("input:checkbox[name=citycheckboxes]:checked").each(function(){
            city.push($(this).val());
            var id = ($(this).attr('id'));
            var text = $('label[for='+id+']').html();
            var d = {'text': text, 'id': id};
            clouds.push(d);
        });
        $("input:checkbox[name=typecheck]:checked").each(function(){
            projectType.push($(this).val());
            var id = ($(this).attr('id'));
            var text = $('label[for='+id+']').html();
            var d = {'text': text, 'id': id};
            clouds.push(d);
        });
        $("input:checkbox[name=pricerange]:checked").each(function(){
            priceRange.push($(this).val());
            var id = ($(this).attr('id'));
            var text = $('label[for='+id+']').html();
            var d = {'text': text, 'id': id};
            clouds.push(d);
        });
        $("input:checkbox[name=projectstatus]:checked").each(function(){
            projectStatus.push($(this).val());
            var id = ($(this).attr('id'));
            var text = $('label[for='+id+']').html();
            var d = {'text': text, 'id': id};
            clouds.push(d);
        });
        $("input:checkbox[name=ptype]:checked").each(function(){
            propertyType.push($(this).val());
            var id = ($(this).attr('id'));
            var text = $('label[for='+id+']').html();
            var d = {'text': text, 'id': id};
            clouds.push(d);
        });
        var url = "{{url('/filterproperty')}}";
        var url_main = "{{url('/projects/')}}";
        var pc = 0;
        if(typeof(page) != 'undefined'){
            if(typeof(ptype) !== 'undefined'){
                if(ptype == 1){
                    page_r++;
                    pc = page_r;
                }else{
                    page_c++;
                    pc = page_c;
                }
            }else{
                page_count++;
                pc = page_count;
            }
            url += "?page=" + pc;
        }else{
            page_count = 1;
            page_r = 1;
            page_c = 1;
        }

        if(ptype && projectType.length < 1){
            projectType.push(ptype);
        }

        var container2 = document.getElementById('post-data2'); //residential
        
        @if(isset($data['project_details']) && isset($data['city_id']))
            city = Array();
            var city_id = "{{$data['city_id']}}";
            city.push(city_id);
        @endif

        var loader = document.getElementById('loader');

        if(!page) loader.style = "display:flex";

        $.post(url,{
            'city[]': city,
            'projecttype[]': projectType,
            'propertytype[]': propertyType,
            'pricerange[]': priceRange,
            'projectstatus[]': projectStatus,
            'sorting': sorting
        },
        function(data, status){
            if(status == "success"){
                data = JSON.parse(data);
                var content = "";
                var write = false;
                var total = data.total;
                var isNext = data.next_page_url;
                data = data.data;
                if(data.length < 1 && !page){
                    container2.innerHTML = "";
                    document.getElementById('load-more-div').style = "display:none";
                }
                for(var i = 0; i < data.length; i++){
                    var type = "";
                    if(data[i].project_type_id == 1) type = "residential";
                    else type = "commercial";
                    var href = url_main + "/" + data[i].name.replace(" ", "-").toLowerCase() + "/" + type + "/" + data[i].project_slug;

                     if(data[i].project_stamp_id == 1){
                         var project_stamp = "Hot-selleing-property.png";
                    }
                    else if(data[i].project_stamp_id == 2){
                             var project_stamp = "ready-to-move-in.png";
                    }
                     else if(data[i].project_stamp_id == 3){
                         var project_stamp = "Delivered.png";
                     }
                     else if(data[i].project_stamp_id == 4){
                         var project_stamp = "Under-Construction.png";
                     }
                     else if(data[i].project_stamp_id == 5){
                         var project_stamp = "Just-launched.png";
                     }
                     else if(data[i].project_stamp_id == 6){
                         var project_stamp = "sold-out.png";
                     }
                     else if(data[i].project_stamp_id == 7){
                         var project_stamp = "Possession-Started.png";
                     }
                     else if(data[i].project_stamp_id == 8){
                         var project_stamp = "Under-Construction-Sold-Out.png";
                     }
                     else if(data[i].project_stamp_id == 9){
                         var project_stamp = "Delivered-Sold-Out.png";
                     }
                     else if(data[i].project_stamp_id == 10){
                         var project_stamp = "Possession-Started-Sold-Out.png";
                     }
                     else if(data[i].project_stamp_id == 11){
                         var project_stamp = "Operational.png";
                     }
                     else if(data[i].project_stamp_id == 12){
                         var project_stamp = "Operationa-Sold-Out.png";
                     }
                     else if(data[i].project_stamp_id == 13){
                         var project_stamp = "ready-to-fit-out.png";
                     }
                     else{
                         var project_stamp = "completion_obtained_fitout_started.png";
                    }

                    var temp = "<div class='col-md-6 sec col-sm-12 col-xs-12' style='margin-bottom: 15px;'>";
                    temp +=    "<div class='video'>";
                    temp +=    "<div class='card' style='width: 100%;'>";
                    temp +=    "<a class='stamp-sm-container' href='" + href + "'><img class='card-img-top' height='200' src='{{cdn()}}/images//website_banner/" + data[i].banner_image + "' alt='Card image cap'> <img src='{{cdn()}}/images//stamps/"+project_stamp+"' class='stamps-sm' alt=''></a>";
                    temp +=    "<div class='card-body'>";
                    temp +=    "<h5 class='card-title'  style='font-weight: bold; height: 50px;'>" + data[i].project_title +"</h5>";
//
                    temp +=    "<a href='" + href +  "' class='btn btn-sm btn-primary'>KNOW MORE</a></div></div></div></div>";

                    content += temp;
                    write = true;
                    count++;
                }
                if(write && page){
                    container2.innerHTML = container2.innerHTML + content;
                }
                else if(write){
                    container2.innerHTML = content;
                }
                else {
                    //check if user clicked load more
                    if(ptype){
                        //if(ptype == 1) document.getElementById('loadresi').style="display:none";
                        //if(ptype == 2) document.getElementById('loadcomm').style="display:none";
                    }
                }
                if(!write && page) document.getElementById('load-more-div').style = "display:none";
                if(write) document.getElementById('load-more-div').style = "display:block";
                if(write && page ) document.getElementById('load-more-div').style = "display:block";

                //show results count
                var count = 0;
                //var container_div_one = document.getElementById("post-data");
                var container_div_two = document.getElementById('post-data2');
                //count += container_div_one.getElementsByClassName("col-md-6 sec col-sm-12 col-xs-12").length;
                count += container_div_two.getElementsByClassName("col-md-6 sec col-sm-12 col-xs-12").length;
                document.getElementById('result_count').innerHTML = "Showing results " + total;

                //set tag clouds
                var clouds_html = "";
                var tag_container = document.getElementById('tag-container');
                for(var i=0; i< clouds.length; i++){
                    var temp = "<div class='button-tag' id='tag-" + clouds[i].id + "'>" + clouds[i].text + "<span id='" + clouds[i].id +"'class='close-tag' onclick='removeFilters(this.id)'>X</span></div>";
                    clouds_html += temp;
                }
                tag_container.innerHTML = clouds_html;
                if(!isNext) document.getElementById('load-more-div').style = "display:none";
            }
            setTimeout(function(page){
                if(!page) loader.style = "display:none";
            }, 2000);
        });
        
    }

    var resetFilters = function(){
        $("input:checkbox[name=citycheckboxes]:checked").each(function(){
            var id = ($(this).attr('id'));
            document.getElementById(id).checked = false;
        });
        $("input:checkbox[name=typecheck]:checked").each(function(){
            var id = ($(this).attr('id'));
            document.getElementById(id).checked = false;
        });
        $("input:checkbox[name=pricerange]:checked").each(function(){
            var id = ($(this).attr('id'));
            document.getElementById(id).checked = false;
        });
        $("input:checkbox[name=projectstatus]:checked").each(function(){
            var id = ($(this).attr('id'));
            document.getElementById(id).checked = false;
        });
        $("input:checkbox[name=ptype]:checked").each(function(){
            var id = ($(this).attr('id'));
            document.getElementById(id).checked = false;
        });

        ApplyFilters();
    }

    var removeFilters = function(id){
        document.getElementById(id).checked = false;
        ApplyFilters();
    }
    </script>

    <script>
        var lowerCase = document.getElementsByClassName("to-lowercase");
        for (var i = 0; i < lowerCase.length; i++) {
            lowerCase[i].innerHTML = lowerCase[i].innerHTML.toLowerCase();
        }
    </script>

    @include('layouts.footer')
@endsection

