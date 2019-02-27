@extends('layouts.layout')
@section('content')
    <div class="loader-cont" id="loader">
        <div class="loader-spin"></div>
    </div>
    @include('content.project.project-img')
    @include('layouts.header')
    <style>
        .active:after {
            content: "\2212";
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

    <div class="project-page">


        @if(Route::current()->getName() == "allProjects")
            <div class="container-fluid">
                {{ Breadcrumbs::render('Projects', "Projects") }}
            </div>
        @elseif(Route::current()->getName() == "projectByCategory")
            <div class="container-fluid">
                {{ Breadcrumbs::render('ProjectsCategory', $data['project_details'][0]->project_category->project_category_name) }}
            </div>
        @else
            <div class="container-fluid">
                {{--            {{ Breadcrumbs::render('ProjectsCity', $data['project_details'][0]->project_city->name) }}--}}

            </div>
        @endif


        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="filter-container">
                        @if(isset($data_all['allcities']))
                            <div class="filter-cont">
                                <div class="custom-header"><span>Select City</span>
                                    {{--<span class="iconp icon">+</span>--}}
                                    {{--<span class="iconm icon">-</span>--}}
                                </div>
                                <div class="content">
                                    @foreach($data_all['allcities'] as $index=>$allcity)
                                        <div class="checkbox-container">
                                            <input class="styled-checkbox" name="citycheckboxes" id="city{{$allcity->id}}" type="checkbox" value="{{$allcity->id}}" onchange="return ApplyFilters();">
                                            <label for="city{{$allcity->id}}">{{$allcity->name}}</label>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endif
                        @if(isset($data['allcities']))
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
                        @endif
                        @if(!isset($data['proj_type']))
                        <div class="filter-cont">
                            <div class="custom-header"><span>Project Types</span>
                                {{--<span class="icon">+</span>--}}
                            </div>
                            <div class="content height-auto">
                                <div class="checkbox-container">
                                    <input class="styled-checkbox cp" name="typecheck" id="Commercial-Projects" type="checkbox" value="2" onchange="return ApplyFilters(); valueChangedC();">
                                    <label for="Commercial-Projects">Commercial Projects</label>
                                </div>
                                <div class="checkbox-container">
                                    <input class="styled-checkbox rp" name="typecheck" id="Residential-Projects" type="checkbox" value="1" onchange="return ApplyFilters(); valueChangedR();">
                                    <label for="Residential-Projects">Residential Projects</label>
                                </div>
                            </div>
                        </div>
                        @endif
                        @if(isset($data['residential']))
                        <div class="filter-cont rpt">
                            <div class="custom-header"><span>Residential Property Types</span>
                                {{--<span class="icon">+</span>--}}
                            </div>
                            <div class="content residential-prop">
                                @foreach($data['residential'] as $index => $value)
                                <div class="checkbox-container">
                                    <input class="styled-checkbox" name="ptype" id="bhk-{{$value->slug}}" type="checkbox" value="{{$value->property_type}}" onchange="return ApplyFilters();">
                                    <label for="bhk-{{$value->slug}}">
                                        <span class="to-lowercase">{{$value->property_type}}</span>
                                    </label>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        @endif
                        @if(isset($data_all['residential']))
                        <div class="filter-cont rpt">
                            <div class="custom-header"><span>Residential Property Types</span>
                                {{--<span class="icon">+</span>--}}
                            </div>
                            <div class="content residential-prop">
                                @foreach($data_all['residential'] as $index => $value)
                                <div class="checkbox-container">
                                    <input class="styled-checkbox" name="ptype" id="bhk-{{$value->slug}}" type="checkbox" value="{{$value->property_type}}" onchange="return ApplyFilters();">
                                    <label for="bhk-{{$value->slug}}">
                                        <span class="to-lowercase">{{$value->property_type}}</span>
                                    </label>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        @endif

                        @if(isset($data['commercial']))
                        <div class="filter-cont cpt">
                            <div class="custom-header"><span>Commercial Property Types</span>
                                {{--<span class="icon">+</span>--}}
                            </div>
                            <div class="content residential-prop">
                                @foreach($data['commercial'] as $index => $value)
                                <div class="checkbox-container">
                                    <input class="styled-checkbox" name="ptype" id="bhk-{{$value->slug}}" type="checkbox" value="{!! strtolower($value->property_type) !!}" onchange="return ApplyFilters();">
                                    <label for="bhk-{{$value->slug}}">
                                        <span class="to-lowercase">{{$value->property_type}}</span>
                                    </label>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        @endif
                        @if(isset($data_all['commercial']))
                        <div class="filter-cont cpt">
                            <div class="custom-header"><span>Commercial Property Types</span>
                                {{--<span class="icon">+</span>--}}
                            </div>
                            <div class="content residential-prop">
                                @foreach($data_all['commercial'] as $index => $value)
                                <div class="checkbox-container">
                                    <input class="styled-checkbox" name="ptype" id="bhk-{{$value->slug}}" type="checkbox" value="{!! strtolower($value->property_type) !!}" onchange="return ApplyFilters();">
                                    <label for="bhk-{{$value->slug}}">
                                        <span class="to-lowercase">{{$value->property_type}}</span>
                                    </label>
                                </div>
                                @endforeach
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
                                    <label for="price-range3">1 Crore above</label>
                                </div>
                                <small class="reset-filter" onclick="return resetFilters();">Reset Filters</small>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-9">
                    <div class="row">
                        <div class="col-md-12 " style="background: #ffffff; height: auto;">

                            <div class="project-content">
                                <div class="row">
                                    <div class="container" id="residential">
                                        <div class="row m-b-30">
                                            <div class="col-md-6 text-left">
                                                <?php
                                                if(!isset($data['project_details'])) $data['project_details'] = array();
                                                if(!isset($data['project_details_c'])) $data['project_details_c'] = array();
                                                if(!isset($data_all['allProjects'])) $data_all['allProjects'] = array();
                                                if(!isset($data_all['allProjects_c'])) $data_all['allProjects_c'] = array();

                                                if(isset($data['total_count'])) { ?>
                                                <p class="f-14" id="result_count">Showing results <?php echo $data['total_count'];?></p>
                                                <?php } else { ?>
                                                <p class="f-14" id="result_count">Showing results <?php echo $data_all['total_count'];?></p>
                                                <?php }

                                                if(count( $data['project_details']) || count($data_all['allProjects_c'])){ ?>
                                                <h2 id="propertytag" style="text-transform: capitalize;  color: #0162b4;   letter-spacing: 1px;  font-weight: 300 !important; ">
                                                    <?php if(isset($data['proj_type'])) echo $data['proj_type']; else echo "Residential"; ?> properties</h2>
                                                <?php } ?>

                                            </div>

                                            <div class="col-md-6 text-right">
                                                {{--<select id="sorting" class="form-control" name="sorting" style="width: 200px; margin-left: auto; margin-top: 2.5em;" onchange="return ApplyFilters();">--}}
                                                    {{--<option value="0">Default price range</option>--}}
                                                    {{--<option value="1">Price: Low to high</option>--}}
                                                    {{--<option value="2">Price: high to low</option>--}}
                                                {{--</select>--}}
                                            </div>

                                        </div>

                                        <div class="button-tag-container" id="tag-container">

                                        </div>


                                        <div class="row" id="post-data2">
                                            @if(isset($data['project_details']))
                                                @foreach($data['project_details'] as $project_detail)



                                                    <div class="col-md-6 sec col-sm-12 col-xs-12" style="margin-bottom: 40px;">
                                                        <div class="video">
                                                            <div class="card" style="width: 100%;">
                                                                <a  class="stamp-sm-container" href="{{URL::to('/projects/'.strtolower(str_replace(" ","-",$project_detail->project_city->name)).'/'.$project_detail->project_type->name.'/'.$project_detail->project_slug)}}">
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

                                                                        <img src='{{cdn()}}/images//stamps/Operationa-Sold-Out.png' class='stamps-sm' alt=''>


                                                                    @elseif($project_detail->project_stamp_id == 13)

                                                                        <img src='{{cdn()}}/images/stamps/ready-to-fit-out.png' class='stamps-sm' alt=''>

                                                                    @elseif($project_detail->project_stamp_id == 14)

                                                                        <img src='{{cdn()}}/images/stamps/completion_obtained_fitout_started.png' class='stamps-sm' alt=''>


                                                                    @endif

                                                                </a>
                                                                <div class="card-body">
                                                                    <h5 class="card-title" style="font-weight: bold;
    height: 50px;
    overflow: hidden;">{{$project_detail->project_title}}</h5>
                                                                    {{--<p class="card-text" style="    font-size: 14px;--}}
    {{--text-align: left;--}}
    {{--margin-bottom: 25px;--}}
    {{--font-weight: 100;--}}
    {{--line-height: 1.7em;">--}}
                                                                        {{--{{  \Illuminate\Support\Str::limit($project_detail->project_description, 88) }}--}}
                                                                        {{--{!! substr($project_detail->project_description, 0, 70) !!} ...--}}
                                                                    {{--</p>--}}

                                                                    <a href="{{URL::to('/projects/'.strtolower(str_replace(" ","-",$project_detail->project_city->name)).'/'.$project_detail->project_type->name.'/'.$project_detail->project_slug)}}" class="btn btn-sm btn-primary">KNOW MORE</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                @endforeach
                                                {{--<p style="text-align: center; font-size:14px;letter-spacing: 1px; font-weight: 400; text-align: justify; margin-bottom: 7px; line-height: 25px; word-spacing: 5px;">--}}
                                            @endif
                                            @if(isset($data_all['allProjects']))

                                                @foreach($data_all['allProjects'] as $allProjects)

                                                    <div class="col-md-6 sec col-sm-12 col-xs-12" style="margin-bottom: 40px;">
                                                        <div class="video">
                                                            <div class="card" style="width: 100%;">
                                                                <a class="stamp-sm-container" href="{{URL::to('/projects/'.strtolower(str_replace(" ","-",$allProjects->project_city->name)).'/'.$allProjects->project_type->name.'/'.$allProjects->project_slug)}}">
                                                                    <img class="card-img-top" height="200" src="{{cdn()}}/images//website_banner/{{$allProjects->banner_image}}" alt="{{$allProjects->project_title}}">


                                                                    @if($allProjects->project_stamp_id == 1)

                                                                        <img src='{{cdn()}}/images//stamps/Hot-selleing-property.png' class='stamps-sm' alt=''>

                                                                    @elseif($allProjects->project_stamp_id == 2)
                                                                        <img src='{{cdn()}}/images//stamps/ready-to-move-in.png' class='stamps-sm' alt=''>

                                                                    @elseif($allProjects->project_stamp_id == 3)

                                                                        <img src='{{cdn()}}/images//stamps/Delivered.png' class='stamps-sm' alt=''>
                                                                    @elseif($allProjects->project_stamp_id == 4)

                                                                        <img src='{{cdn()}}/images//stamps/Under-Construction.png' class='stamps-sm' alt=''>

                                                                    @elseif($allProjects->project_stamp_id == 5)

                                                                        <img src='{{cdn()}}/images//stamps/Just-launched.png' class='stamps-sm' alt=''>

                                                                    @elseif($allProjects->project_stamp_id == 6)

                                                                        <img src='{{cdn()}}/images//stamps/sold-out.png' class='stamps-sm' alt=''>

                                                                    @elseif($allProjects->project_stamp_id == 7)

                                                                        <img src='{{cdn()}}/images//stamps/Possession-Started.png' class='stamps-sm' alt=''>

                                                                    @elseif($allProjects->project_stamp_id == 8)

                                                                        <img src='{{cdn()}}/images//stamps/Under-Construction-Sold-Out.png' class='stamps-sm' alt=''>


                                                                    @elseif($allProjects->project_stamp_id == 9)

                                                                        <img src='{{cdn()}}/images//stamps/Delivered-Sold-Out.png' class='stamps-sm' alt=''>

                                                                    @elseif($allProjects->project_stamp_id == 10)

                                                                        <img src='{{cdn()}}/images//stamps/Possession-Started-Sold-Out.png' class='stamps-sm' alt=''>

                                                                    @elseif($allProjects->project_stamp_id == 11)

                                                                        <img src='{{cdn()}}/images//stamps/Operational.png' class='stamps-sm' alt=''>


                                                                    @elseif($allProjects->project_stamp_id == 12)


                                                                        <img src='{{cdn()}}/images//stamps/Operationa-Sold-Out.png' class='stamps-sm' alt=''>


                                                                    @elseif($allProjects->project_stamp_id == 13)


                                                                        <img src='{{cdn()}}/images/stamps/ready-to-fit-out.png' class='stamps-sm' alt=''>

                                                                    @elseif($allProjects->project_stamp_id == 14)


                                                                        <img src='{{cdn()}}/images/stamps/completion_obtained_fitout_started.png' class='stamps-sm' alt=''>


                                                                    @endif

                                                                </a>
                                                                <div class="card-body">
                                                                    <h5 class="card-title"  style="font-weight: bold;
    height: 50px;
    overflow: hidden;">{{$allProjects->project_title}}</h5>
                                                                    {{--<p class="card-text" style="    font-size: 14px;--}}
    {{--text-align: left;--}}
    {{--margin-bottom: 25px;--}}
    {{--font-weight: 100;--}}
    {{--line-height: 1.7em;">--}}
                                                                        {{--{{  \Illuminate\Support\Str::limit($allProjects->project_description, 88) }}--}}
                                                                        {{--{!! substr($allProjects->project_description, 0, 70) !!} ...--}}
                                                                    {{--</p>--}}
                                                                    <a href="{{URL::to('/projects/'.strtolower(str_replace(" ","-",$allProjects->project_city->name)).'/'.$allProjects->project_type->name.'/'.$allProjects->project_slug)}}" class="btn btn-sm btn-primary">KNOW MORE</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                @endforeach
                                            @endif
                                        </div>
                                    </div>



                                    <?php
                                    if(count($data['project_details']) || count($data_all['allProjects'])) { ?>
                                    <div class="col-md-12 text-center view-all-btn">
                                        <button type="button"  class="btn btn-outline-dark" id="loadresi" onclick="return ApplyFilters(true, 1);">Load More</button>
                                    </div>
                                    <?php } ?>




                                    <div class="container" id="commericial">
                                        <?php if(count( $data['project_details_c']) || count($data_all['allProjects_c'])) { ?>
                                        <div class="col-md-12">
                                            <h2 id="property_tag" style="text-align: center;text-transform: capitalize;  color: #0162b4;   letter-spacing: 1px;  font-weight: 300 !important;margin: 50px 0; ">Commercial properties</h2>
                                        </div>
                                        <?php } ?>
                                        <div class="row" id="post-data">
                                            @if(isset($data['project_details_c']))
                                                @foreach($data['project_details_c'] as $project_detail)

                                                    <div class="col-md-6 sec col-sm-12 col-xs-12" style="margin-bottom: 40px;">
                                                        <div class="video">
                                                            <div class="card" style="width: 100%;">
                                                                <a class="stamp-sm-container" href="{{URL::to('/projects/'.strtolower(str_replace(" ","-",$project_detail->project_city->name)).'/'.$project_detail->project_type->name.'/'.$project_detail->project_slug)}}">
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

                                                                        <img src='{{cdn()}}/images//stamps/Operationa-Sold-Out.png' class='stamps-sm' alt=''>


                                                                    @elseif($project_detail->project_stamp_id == 13)

                                                                        <img src='{{cdn()}}/images//stamps/ready-to-fit-out.png' class='stamps-sm' alt=''>

                                                                    @elseif($project_detail->project_stamp_id == 14)

                                                                        <img src='{{cdn()}}/images//stamps/completion_obtained_fitout_started.png' class='stamps-sm' alt=''>




                                                                    @endif

                                                                </a>
                                                                <div class="card-body">
                                                                    <h5 class="card-title" style="font-weight: bold;
    height: 50px;
    overflow: hidden;">{{$project_detail->project_title}}</h5>
                                                                    {{--<p class="card-text" style="    font-size: 14px;--}}
    {{--text-align: left;--}}
    {{--margin-bottom: 25px;--}}
    {{--font-weight: 100;--}}
    {{--line-height: 1.7em;">--}}
                                                                        {{--{{  \Illuminate\Support\Str::limit($project_detail->project_description, 88) }}--}}
                                                                        {{--{!! substr($project_detail->project_description, 0, 70) !!} ...--}}
                                                                    {{--</p>--}}
                                                                    <a href="{{URL::to('/projects/'.strtolower(str_replace(" ","-",$project_detail->project_city->name)).'/'.$project_detail->project_type->name.'/'.$project_detail->project_slug)}}" class="btn btn-sm btn-primary">KNOW MORE</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                @endforeach
                                                {{--<p style="text-align: center; font-size:14px;letter-spacing: 1px; font-weight: 400; text-align: justify; margin-bottom: 7px; line-height: 25px; word-spacing: 5px;">--}}
                                            @endif
                                            @if(isset($data_all['allProjects_c']))
                                                @foreach($data_all['allProjects_c'] as $allProjects)

                                                    <div class="col-md-6 sec col-sm-12 col-xs-12" style="margin-bottom: 40px;">
                                                        <div class="video">
                                                            <div class="card" style="width: 100%;">
                                                                <a class="stamp-sm-container" href="{{URL::to('/projects/'.strtolower(str_replace(" ","-",$allProjects->project_city->name)).'/'.$allProjects->project_type->name.'/'.$allProjects->project_slug)}}">
                                                                    <img class="card-img-top" height="200" src="{{cdn()}}/images//website_banner/{{$allProjects->banner_image}}" alt="{{$allProjects->project_title}}">


                                                                    @if($allProjects->project_stamp_id == 1)

                                                                        <img src='{{cdn()}}/images//stamps/Hot-selleing-property.png' class='stamps-sm' alt=''>

                                                                    @elseif($allProjects->project_stamp_id == 2)
                                                                        <img src='{{cdn()}}/images//stamps/ready-to-move-in.png' class='stamps-sm' alt=''>

                                                                    @elseif($allProjects->project_stamp_id == 3)

                                                                        <img src='{{cdn()}}/images//stamps/Delivered.png' class='stamps-sm' alt=''>
                                                                    @elseif($allProjects->project_stamp_id == 4)

                                                                        <img src='{{cdn()}}/images//stamps/Under-Construction.png' class='stamps-sm' alt=''>

                                                                    @elseif($allProjects->project_stamp_id == 5)

                                                                        <img src='{{cdn()}}/images//stamps/Just-launched.png' class='stamps-sm' alt=''>

                                                                    @elseif($allProjects->project_stamp_id == 6)

                                                                        <img src='{{cdn()}}/images//stamps/sold-out.png' class='stamps-sm' alt=''>

                                                                    @elseif($allProjects->project_stamp_id == 7)

                                                                        <img src='{{cdn()}}/images//stamps/Possession-Started.png' class='stamps-sm' alt=''>

                                                                    @elseif($allProjects->project_stamp_id == 8)

                                                                        <img src='{{cdn()}}/images//stamps/Under-Construction-Sold-Out.png' class='stamps-sm' alt=''>


                                                                    @elseif($allProjects->project_stamp_id == 9)

                                                                        <img src='{{cdn()}}/images//stamps/Delivered-Sold-Out.png' class='stamps-sm' alt=''>

                                                                    @elseif($allProjects->project_stamp_id == 10)

                                                                        <img src='{{cdn()}}/images//stamps/Possession-Started-Sold-Out.png' class='stamps-sm' alt=''>

                                                                    @elseif($allProjects->project_stamp_id == 11)

                                                                        <img src='{{cdn()}}/images//stamps/Operational.png' class='stamps-sm' alt=''>


                                                                    @elseif($allProjects->project_stamp_id == 12)

                                                                        <img src='{{cdn()}}/images//stamps/Operationa-Sold-Out.png' class='stamps-sm' alt=''>


                                                                    @elseif($allProjects->project_stamp_id == 13)

                                                                        <img src='{{cdn()}}/images//stamps/ready-to-fit-out.png' class='stamps-sm' alt=''>

                                                                    @elseif($allProjects->project_stamp_id == 14)

                                                                        <img src='{{cdn()}}/images//stamps/completion_obtained_fitout_started.png' class='stamps-sm' alt=''>




                                                                    @endif
                                                                </a>
                                                                <div class="card-body">
                                                                    <h5 class="card-title"  style="font-weight: bold;
    height: 50px;
    overflow: hidden;">{{$allProjects->project_title}}</h5>
                                                                    {{--<p class="card-text" style="    font-size: 14px;--}}
    {{--text-align: left;--}}
    {{--margin-bottom: 25px;--}}
    {{--font-weight: 100;--}}
    {{--line-height: 1.7em;">--}}
                                                                        {{--{{  \Illuminate\Support\Str::limit($allProjects->project_description, 88) }}--}}
                                                                        {{--{!! substr($allProjects->project_description, 0, 70) !!} ...--}}
                                                                    {{--</p>--}}
                                                                    <a href="{{URL::to('/projects/'.strtolower(str_replace(" ","-",$allProjects->project_city->name)).'/'.$allProjects->project_type->name.'/'.$allProjects->project_slug)}}" class="btn btn-sm btn-primary">KNOW MORE</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                @endforeach
                                            @endif
                                        </div>
                                    </div>

                                    <?php

                                    if(count( $data['project_details_c']) || count($data_all['allProjects_c'])) { ?>
                                    <div class="col-md-12 text-center view-all-btn">
                                        <button type="button"  class="btn btn-outline-dark" id="loadcomm" onclick="return ApplyFilters(true, 2);">Load More</button>
                                    </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row" id="nores" style="display: none;">
                        <div class="col-md-12 text-center" style="background: #ffffff; height: auto;">
                            {{--<h2>Sorry, no results found!</h2>--}}
                            <img src="/images/static/nojobsfound.png" style="width: 40%;" alt="">

                        </div>
                    </div>

                </div>
            </div>
            <div class="row" style="margin-top: 20px; margin-bottom: 60px;">
                <div class="col-md-12" style="background: #f7f7f7; margin-top: 10px; height:auto; float: left; border-radius: 5px;">
                    <div class="row">
                        <div class="col-md-12 nopadding" style="">
                            <div class="main-content-heading" style="margin-top: 30px;">
                                <h2 style="text-align: center;text-transform: uppercase;    letter-spacing: 1px;  font-weight: 300 !important;  ">Trending Properties</h2>
                                <p style="text-align: center; font-size:14px; line-height: 1.7em; font-weight: 400;">Browse through our most preferred properties and visit site to know more about the project.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-12 sec col-sm-12 col-xs-12">
                            <div class="video">
                                {{--<div class="wrapper">--}}
                                {{--<div class="slider-container">--}}
                                <div class="amenities-carousel owl-carousel">
                                    @if(isset($data['trending_properties']))
                                        @include('content.project.project-trending')
                                    @endif
                                    @if(isset($data_all['trending_all_properties']))
                                        @include('content.project.project-trending-all')
                                    @endif
                                </div>
                                {{--</div>--}}
                                {{--</div>--}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/projects.js') }}"></script>


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
                var newWindowWidth = $(window).width();
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
        var page_count = 1;
        var page_r = 1;
        var page_c = 1;
        <?php
            $ctr1 = 0;$ctr2 = 0;$num1 = 0;$num2 = 0;
            if(count($data['project_details'])){
                $ctr1 = count($data['project_details']);
            }
            if(count($data_all['allProjects'])){
                $ctr1 = count($data_all['allProjects']);
            }
            if(count($data['project_details_c'])){
                $ctr2 = count($data['project_details_c']);
            }
            if(count($data_all['allProjects_c'])){
                $ctr2 = count($data_all['allProjects_c']);
            }
            if(isset($data_all['res_count'])){
                $num1 = $data_all['res_count'];
            }
            if(isset($data_all['com_count'])){
                $num2 = $data_all['com_count'];
            }
            if(isset($data['res_count'])){
                $num1 = $data['res_count'];
            }
            if(isset($data['com_count'])){
                $num2 = $data['com_count'];
            }

            if($ctr1 >= $num1 && $ctr1 !=0){
                ?>
                document.getElementById('loadresi').style="display:none";
                <?php
            }
            if($ctr2 >= $num2){ if(count( $data['project_details_c']) || count($data_all['allProjects_c'])){
                ?>
                document.getElementById('loadcomm').style="display:none";
                <?php
            } }
        ?>
        var isFilterApplied = false;
        var ApplyFilters = function(page, ptype){
            var city = Array();
            var projectType = Array();
            var prj_type = <?php if(isset($data['proj_type_val'])) echo $data['proj_type_val']; else echo 0 ?>;
            if(prj_type != 0){
                if(projectType.length == 0)
                    projectType.push(prj_type);
            }
            var propertyType = Array();
            var priceRange = Array();
            var projectStatus = Array();
            var sorting = 0;
            var category_id = <?php if(isset($data['category_id'])){echo $data['category_id']; }else echo 0; ?>;
            var state_id = <?php if(isset($data['state_id'])){echo $data['state_id']; }else echo 0; ?>;
            var clouds = Array();

            var e = document.getElementById("sorting");
//            sorting = e.options[e.selectedIndex].value;

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
                    page = page_count;
                }
                url += "?page=" + pc;
            }else{
                isFilterApplied = true;
                page_count = 1;
                page_r = 1;
                page_c = 1;
            }

            if(!isFilterApplied){
                if(ptype && projectType.length < 1){
                    projectType.push(ptype);
                }
            }

            var container = document.getElementById('post-data'); //commercial
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
                    'sorting': sorting,
                    'category_id':category_id,
                    'state_id':state_id
                },
                function(data, status){
                    if(status == "success"){
                        data = JSON.parse(data);
                        var content = "";
                        var write = false;
                        var isNext = data.next_page_url;
                        var total = data.total;

//                        console.log(data);

                        if(total == 0){

                            document.getElementById("nores").style = "display:block";
                        }else{
                            document.getElementById("nores").style = "display:none";
                        }

                        data = data.data;
                        if(data.length < 1 && !page){
                            container.innerHTML = "";
                            container2.innerHTML = "";
                            // document.getElementById('loadresi').style="display:none";
                            // document.getElementById('loadcomm').style="display:none";
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
                            }  else if(data[i].project_stamp_id == 14){
                                var project_stamp = "completion_obtained_fitout_started.png";
                            }




                            var temp = "<div class='col-md-6 sec col-sm-12 col-xs-12' style='margin-bottom: 40px;'>";
                            temp +=    "<div class='video'>";
                            temp +=    "<div class='card' style='width: 100%;'>";
                            temp +=    "<a class='stamp-sm-container' href='" + href + "'><img class='card-img-top' height='200' src='{{cdn()}}/images//website_banner/" + data[i].banner_image + "' alt='"+data[i].project_title+"'> <img src='{{cdn()}}/images//stamps/"+project_stamp+"' class='stamps-sm' alt=''></a>";
                            temp +=    "<div class='card-body'>";
                            temp +=    "<h5 class='card-title'  style='font-weight: bold; height: 50px;'>" + data[i].project_title +"</h5>";
                            // temp +=    "<p class='card-text' style='text-align: center; font-size:14px;letter-spacing: 1px; font-weight: 400; text-align: left; margin-bottom: 25px; line-height: 20px; word-spacing: 1px; font-weight: 100;'>";
//                            temp +=    data[i].project_description.substring(0, 88) + "</p>";
                            temp +=    "<a href='" + href +  "' class='btn btn-sm btn-primary'>KNOW MORE</a></div></div></div></div>";

                            content += temp;
                            write = true;
                            count++;
                        }
                        if(write && page){
                            if(ptype == 1){
                                container2.innerHTML = container2.innerHTML + content;
                                document.getElementById('loadresi').style="display:inline-block";
                            }
                            if(ptype == 2){
                                container.innerHTML = container.innerHTML + content;
                                document.getElementById('loadcomm').style="display:inline-block";
                            }
                        }
                        else if(write){
                            container2.innerHTML = content;
                            if(document.getElementById("commericial")) document.getElementById("commericial").style="display:none";
                            if(document.getElementById('loadcomm')) document.getElementById('loadcomm').style="display:none";
                            if(document.getElementById('loadresi')) document.getElementById('loadresi').style="display:inline-block";
                        }
                        else {
                            //check if user clicked load more
                            if(ptype){
                                if(ptype == 1) document.getElementById('loadresi').style="display:none";
                                if(ptype == 2) document.getElementById('loadcomm').style="display:none";
                            }
                        }

                        if(typeof(ptype) == 'undefined'){
                            if(document.getElementById('propertytag')) document.getElementById('propertytag').innerHTML = "Filter Results";
                            else document.getElementById('property_tag').innerHTML = "Filter Results";
                        }
                        //show results count
                        var count = 0;
                        var container_div_one = document.getElementById("post-data");
                        var container_div_two = document.getElementById('post-data2');
                        count += container_div_one.getElementsByClassName("col-md-6 sec col-sm-12 col-xs-12").length;
                        count += container_div_two.getElementsByClassName("col-md-6 sec col-sm-12 col-xs-12").length;
                        if(typeof(ptype) == 'undefined'){
                            document.getElementById('result_count').innerHTML = "Showing results " + total;
                        }
                        //set tag clouds
                        var clouds_html = "";
                        var tag_container = document.getElementById('tag-container');
                        for(var i=0; i< clouds.length; i++){
                            var temp = "<div class='button-tag' id='tag-" + clouds[i].id + "'>" + clouds[i].text + "<span id='" + clouds[i].id +"'class='close-tag' onclick='removeFilters(this.id)'>X</span></div>";
                            clouds_html += temp;
                        }
                        tag_container.innerHTML = clouds_html;
                        if(!isNext && !ptype){
                            if(document.getElementById('loadresi')) document.getElementById('loadresi').style="display:none";
                            if(document.getElementById('loadcomm')) document.getElementById('loadcomm').style="display:none";
                        }
                        if(!isNext && ptype){
                            if(ptype){
                                if(ptype == 1) document.getElementById('loadresi').style="display:none";
                                if(ptype == 2) document.getElementById('loadcomm').style="display:none";
                            }
                        }
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

