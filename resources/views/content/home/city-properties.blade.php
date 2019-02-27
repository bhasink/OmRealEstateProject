<div class="lazy main-content">

    <div class="lazy main-content-heading">
        <h1>Our Exclusive Properties</h1>
        <p style="    text-align: center;
    font-size: 14px;
    font-weight: 400;
    line-height: 1.7em;
    margin-top: 10px;">With presence in 8 major states and 27 cities, Omaxe has both residential and commercial properties for our customers.
            <br> Explore our range of properties.
        </p>
    </div>

    {{--<div class="lazy main-content-heading">--}}
    {{--<h1>Our Exclusive Properties</h1>--}}
    {{--</div>--}}
    <div class="lazy highlight-link">
        <div role="tabpanel">
            <div class="lazy  view-highlight-btn">
                <ul class="lazy nav navbar " role="tablist">
                    <li role="presentation" class="lazy active" >
                        <a href="#panel-1" aria-controls="panel-1" role="tab" data-toggle="tab" class="lazy btn btn-light active btn-sm">All</a>
                    </li>
                    <li role="presentation">
                        <a href="#panel-2" aria-controls="panel-2" role="tab" data-toggle="tab"  class="lazy btn btn-light btn-sm">Haryana & Delhi-NCR</a>
                    </li>
                   
                    <li role="presentation">
                        <a href="#panel-4" aria-controls="panel-4" role="tab"  data-toggle="tab" class="lazy btn btn-light btn-sm">Uttar Pradesh</a>
                    </li>
                    <li role="presentation">
                        <a href="#panel-5" aria-controls="panel-5" role="tab" data-toggle="tab"  class="lazy btn btn-light btn-sm">Punjab</a>
                    </li>

                </ul>
            </div>
        </div>
    </div>



    <div class="lazy row mobrow" style="padding-left: 50px; padding-right: 50px; ">
        <div role="tabpanel" style="padding: 15px;">
            <div class="lazy tab-content">
                <div role="tabpanel" class="lazy tab-pane  panel1 active" id="panel-1">
                    <div class="lazy row">

                        @if($data['ProjectDetails_by_random'])
                            @foreach($data['ProjectDetails_by_random'] as $index =>$ProjectDetail)



                                @if ($index == 0)
                                    <div class="lazy col-md-8 sec col-sm-12 col-xs-12">
                                        <div class="lazy video1">
                                            <div class="lazy card" style="width: 100%;">
                                                <a class="lazy stamp-sm-container" href="{{URL::to('/projects/'.strtolower(str_replace(" ","-",optional($ProjectDetail)->project_city->name)).'/'.optional($ProjectDetail)->project_type->name.'/'.$ProjectDetail->project_slug)}}">
                                                    <img class="lazy card-img-top" width="200" data-src="{{cdn()}}/images/website_banner/{{$ProjectDetail->banner_image}}" alt="{{$ProjectDetail->project_title}}">


                                                    @if($ProjectDetail->project_stamp_id == 1)

                                                        <img data-src="{{cdn()}}/images/stamps/Hot-selleing-property.png" class="lazy stamps-sm" alt="">

                                                    @elseif($ProjectDetail->project_stamp_id == 2)
                                                        <img data-src="{{cdn()}}/images/stamps/ready-to-move-in.png" class="lazy stamps-sm" alt="">

                                                    @elseif($ProjectDetail->project_stamp_id == 3)

                                                        <img data-src="{{cdn()}}/images/stamps/Delivered.png" class="lazy stamps-sm" alt="">
                                                    @elseif($ProjectDetail->project_stamp_id == 4)

                                                        <img data-src="{{cdn()}}/images/stamps/Under-Construction.png" class="lazy stamps-sm" alt="">

                                                    @elseif($ProjectDetail->project_stamp_id == 5)

                                                        <img data-src="{{cdn()}}/images/stamps/Just-launched.png" class="lazy stamps-sm" alt="">

                                                    @elseif($ProjectDetail->project_stamp_id == 6)

                                                        <img data-src="{{cdn()}}/images/stamps/sold-out.png" class="lazy stamps-sm" alt="">

                                                    @elseif($ProjectDetail->project_stamp_id == 7)

                                                        <img data-src="{{cdn()}}/images/stamps/Possession-Started.png" class="lazy stamps-sm" alt="">

                                                    @elseif($ProjectDetail->project_stamp_id == 8)

                                                        <img data-src="{{cdn()}}/images/stamps/Under-Construction-Sold-Out.png" class="lazy stamps-sm" alt="">


                                                    @elseif($ProjectDetail->project_stamp_id == 9)

                                                        <img data-src="{{cdn()}}/images/stamps/Delivered-Sold-Out.png" class="lazy stamps-sm" alt="">

                                                    @elseif($ProjectDetail->project_stamp_id == 10)

                                                        <img data-src="{{cdn()}}/images/stamps/Possession-Started-Sold-Out.png" class="lazy stamps-sm" alt="">

                                                    @elseif($ProjectDetail->project_stamp_id == 11)

                                                        <img data-src="{{cdn()}}/images/stamps/Operational.png" class="lazy stamps-sm" alt="">


                                                    @elseif($ProjectDetail->project_stamp_id == 12)


                                                        <img data-src="{{cdn()}}/images/stamps/Operationa-Sold-Out.png" class="lazy stamps-sm" alt="">

                                                    @elseif($ProjectDetail->project_stamp_id == 13)


                                                        <img data-src="{{cdn()}}/images/stamps/ready-to-fit-out.png" class="lazy stamps-sm" alt="">

                                                    @elseif($ProjectDetail->project_stamp_id == 14)


                                                        <img data-src="{{cdn()}}/images/stamps/completion_obtained_fitout_started.png" class="lazy stamps-sm" alt="">



                                                    @endif



                                                </a>
                                                <div class="lazy card-body">
                                                    <h5 class="lazy card-title">{{ $ProjectDetail->project_title }}</h5>

                                                    <div class="lazy card-btn">
                                                        <a href="{{URL::to('/projects/'.strtolower(str_replace(" ","-",optional($ProjectDetail)->project_city->name)).'/'.optional($ProjectDetail)->project_type->name.'/'.$ProjectDetail->project_slug)}}" class="lazy btn btn-sm btn-primary">KNOW MORE</a>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        @endif


                        @if($data['ProjectDetails_by_random'])
                            @foreach($data['ProjectDetails_by_random'] as $index =>$ProjectDetail)

                                @if ($index != 0)
                                    <div class="lazy col-md-4 sec col-sm-12 col-xs-12">
                                        <div class="lazy video2">
                                            <div class="lazy card" style="width: 100%;">
                                                <a class="lazy stamp-sm-container" href="{{URL::to('/projects/'.strtolower(str_replace(" ","-",$ProjectDetail->project_city->name)).'/'.$ProjectDetail->project_type->name.'/'.$ProjectDetail->project_slug)}}">
                                                    <img class="lazy card-img-top" width="200" data-src="{{cdn()}}/images/website_banner/{{$ProjectDetail->banner_image}}" alt="{{$ProjectDetail->project_title}}">

                                                    @if($ProjectDetail->project_stamp_id == 1)

                                                        <img data-src="{{cdn()}}/images/stamps/Hot-selleing-property.png" class="lazy stamps-sm" alt="">

                                                    @elseif($ProjectDetail->project_stamp_id == 2)
                                                        <img data-src="{{cdn()}}/images/stamps/ready-to-move-in.png" class="lazy stamps-sm" alt="">

                                                    @elseif($ProjectDetail->project_stamp_id == 3)

                                                        <img data-src="{{cdn()}}/images/stamps/Delivered.png" class="lazy stamps-sm" alt="">
                                                    @elseif($ProjectDetail->project_stamp_id == 4)

                                                        <img data-src="{{cdn()}}/images/stamps/Under-Construction.png" class="lazy stamps-sm" alt="">

                                                    @elseif($ProjectDetail->project_stamp_id == 5)

                                                        <img data-src="{{cdn()}}/images/stamps/Just-launched.png" class="lazy stamps-sm" alt="">

                                                    @elseif($ProjectDetail->project_stamp_id == 6)

                                                        <img data-src="{{cdn()}}/images/stamps/sold-out.png" class="lazy stamps-sm" alt="">

                                                    @elseif($ProjectDetail->project_stamp_id == 7)

                                                        <img data-src="{{cdn()}}/images/stamps/Possession-Started.png" class="lazy stamps-sm" alt="">

                                                    @elseif($ProjectDetail->project_stamp_id == 8)

                                                        <img data-src="{{cdn()}}/images/stamps/Under-Construction-Sold-Out.png" class="lazy stamps-sm" alt="">


                                                    @elseif($ProjectDetail->project_stamp_id == 9)

                                                        <img data-src="{{cdn()}}/images/stamps/Delivered-Sold-Out.png" class="lazy stamps-sm" alt="">

                                                    @elseif($ProjectDetail->project_stamp_id == 10)

                                                        <img data-src="{{cdn()}}/images/stamps/Possession-Started-Sold-Out.png" class="lazy stamps-sm" alt="">

                                                    @elseif($ProjectDetail->project_stamp_id == 11)

                                                        <img data-src="{{cdn()}}/images/stamps/Operational.png" class="lazy stamps-sm" alt="">


                                                    @elseif($ProjectDetail->project_stamp_id == 12)



                                                    <img data-src="{{cdn()}}/images/stamps/Operationa-Sold-Out.png" class="lazy stamps-sm" alt="">


                                                    @elseif($ProjectDetail->project_stamp_id == 13)


                                                        <img data-src="{{cdn()}}/images/stamps/ready-to-fit-out.png" class="lazy stamps-sm" alt="">

                                                    @elseif($ProjectDetail->project_stamp_id == 14)


                                                        <img data-src="{{cdn()}}/images/stamps/completion_obtained_fitout_started.png" class="lazy stamps-sm" alt="">


                                                    @endif

                                                </a>
                                                <div class="lazy card-body">
                                                    <h5 class="lazy card-title">{{ $ProjectDetail->project_title }}</h5>

                                                    <div class="lazy card-btn">
                                                        <a href="{{URL::to('/projects/'.strtolower(str_replace(" ","-",optional($ProjectDetail)->project_city->name)).'/'.optional($ProjectDetail)->project_type->name.'/'.$ProjectDetail->project_slug)}}" class="lazy btn btn-sm btn-primary">KNOW MORE</a>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif

                            @endforeach
                        @endif

                    </div>
                    <div class="lazy col-md-12 text-center view-all-btn">
                        <a style="background:none !important;"  href="{{URL::to('/exclusive-projects')}}" ><button class="lazy btn btn-outline-dark">VIEW ALL</button></a>
                    </div>
                </div>




                <div role="tabpanel" class="lazy tab-pane fade panel1" id="panel-2">
                    <div class="lazy row">
                        @if(isset($data['city_projects_dlncr']))
                            @foreach($data['city_projects_dlncr'] as $index =>$city_projects_dl)

                                @if ($index == 0)

                                    <div class="lazy col-md-8 sec col-sm-12 col-xs-12">
                                        <div class="lazy video1">
                                            <div class="lazy card" style="width: 100%;">
                                                <a class="lazy stamp-sm-container" href="{{URL::to('/projects/'.strtolower(str_replace(" ","-",$city_projects_dl->project_city->name)).'/'.$city_projects_dl->project_type->name.'/'.$city_projects_dl->project_slug)}}">
                                                    <img class="lazy card-img-top" data-src="{{cdn()}}/images/website_banner/{{$city_projects_dl->banner_image}}" alt="{{$city_projects_dl->project_title}}">


                                                    @if($city_projects_dl->project_stamp_id == 1)

                                                        <img data-src="{{cdn()}}/images/stamps/Hot-selleing-property.png" class="lazy stamps-sm" alt="">

                                                    @elseif($city_projects_dl->project_stamp_id == 2)
                                                        <img data-src="{{cdn()}}/images/stamps/ready-to-move-in.png" class="lazy stamps-sm" alt="">

                                                    @elseif($city_projects_dl->project_stamp_id == 3)

                                                        <img data-src="{{cdn()}}/images/stamps/Delivered.png" class="lazy stamps-sm" alt="">
                                                    @elseif($city_projects_dl->project_stamp_id == 4)

                                                        <img data-src="{{cdn()}}/images/stamps/Under-Construction.png" class="lazy stamps-sm" alt="">

                                                    @elseif($city_projects_dl->project_stamp_id == 5)

                                                        <img data-src="{{cdn()}}/images/stamps/Just-launched.png" class="lazy stamps-sm" alt="">

                                                    @elseif($city_projects_dl->project_stamp_id == 6)

                                                        <img data-src="{{cdn()}}/images/stamps/sold-out.png" class="lazy stamps-sm" alt="">

                                                    @elseif($city_projects_dl->project_stamp_id == 7)

                                                        <img data-src="{{cdn()}}/images/stamps/Possession-Started.png" class="lazy stamps-sm" alt="">

                                                    @elseif($city_projects_dl->project_stamp_id == 8)

                                                        <img data-src="{{cdn()}}/images/stamps/Under-Construction-Sold-Out.png" class="lazy stamps-sm" alt="">


                                                    @elseif($city_projects_dl->project_stamp_id == 9)

                                                        <img data-src="{{cdn()}}/images/stamps/Delivered-Sold-Out.png" class="lazy stamps-sm" alt="">

                                                    @elseif($city_projects_dl->project_stamp_id == 10)

                                                        <img data-src="{{cdn()}}/images/stamps/Possession-Started-Sold-Out.png" class="lazy stamps-sm" alt="">

                                                    @elseif($city_projects_dl->project_stamp_id == 11)

                                                        <img data-src="{{cdn()}}/images/stamps/Operational.png" class="lazy stamps-sm" alt="">


                                                    @elseif($city_projects_dl->project_stamp_id == 12)



                                                    <img data-src="{{cdn()}}/images/stamps/Operationa-Sold-Out.png" class="lazy stamps-sm" alt="">


                                                    @elseif($ProjectDetail->project_stamp_id == 13)


                                                        <img data-src="{{cdn()}}/images/stamps/ready-to-fit-out.png" class="lazy stamps-sm" alt="">

                                                    @elseif($ProjectDetail->project_stamp_id == 14)


                                                        <img data-src="{{cdn()}}/images/stamps/completion_obtained_fitout_started.png" class="lazy stamps-sm" alt="">


                                                    @endif


                                                </a>
                                                <div class="lazy card-body">
                                                    <h5 class="lazy card-title">{{ $city_projects_dl->project_title }}</h5>

                                                    <div class="lazy card-btn">
                                                        <a href="{{URL::to('/projects/'.strtolower(str_replace(" ","-",$city_projects_dl->project_city->name)).'/'.$city_projects_dl->project_type->name.'/'.$city_projects_dl->project_slug)}}" class="lazy btn btn-sm btn-primary">KNOW MORE</a>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        @endif

                        @if(isset($data['city_projects_dlncr']))
                            @foreach($data['city_projects_dlncr'] as $index =>$city_projects_dl)

                                @if ($index != 0)


                                    <div class="lazy col-md-4 sec col-sm-12 col-xs-12">
                                        <div class="lazy video2">
                                            <div class="lazy card" style="width: 100%;">
                                                <a class="lazy stamp-sm-container" href="{{URL::to('/projects/'.strtolower(str_replace(" ","-",$city_projects_dl->project_city->name)).'/'.$city_projects_dl->project_type->name.'/'.$city_projects_dl->project_slug)}}">
                                                    <img class="lazy card-img-top" data-src="{{cdn()}}/images/website_banner/{{$city_projects_dl->banner_image}}" alt="{{$city_projects_dl->project_title}}">

                                                    @if($city_projects_dl->project_stamp_id == 1)

                                                        <img data-src="{{cdn()}}/images/stamps/Hot-selleing-property.png" class="lazy stamps-sm" alt="">

                                                    @elseif($city_projects_dl->project_stamp_id == 2)
                                                        <img data-src="{{cdn()}}/images/stamps/ready-to-move-in.png" class="lazy stamps-sm" alt="">

                                                    @elseif($city_projects_dl->project_stamp_id == 3)

                                                        <img data-src="{{cdn()}}/images/stamps/Delivered.png" class="lazy stamps-sm" alt="">
                                                    @elseif($city_projects_dl->project_stamp_id == 4)

                                                        <img data-src="{{cdn()}}/images/stamps/Under-Construction.png" class="lazy stamps-sm" alt="">

                                                    @elseif($city_projects_dl->project_stamp_id == 5)

                                                        <img data-src="{{cdn()}}/images/stamps/Just-launched.png" class="lazy stamps-sm" alt="">

                                                    @elseif($city_projects_dl->project_stamp_id == 6)

                                                        <img data-src="{{cdn()}}/images/stamps/sold-out.png" class="lazy stamps-sm" alt="">

                                                    @elseif($city_projects_dl->project_stamp_id == 7)

                                                        <img data-src="{{cdn()}}/images/stamps/Possession-Started.png" class="lazy stamps-sm" alt="">

                                                    @elseif($city_projects_dl->project_stamp_id == 8)

                                                        <img data-src="{{cdn()}}/images/stamps/Under-Construction-Sold-Out.png" class="lazy stamps-sm" alt="">


                                                    @elseif($city_projects_dl->project_stamp_id == 9)

                                                        <img data-src="{{cdn()}}/images/stamps/Delivered-Sold-Out.png" class="lazy stamps-sm" alt="">

                                                    @elseif($city_projects_dl->project_stamp_id == 10)

                                                        <img data-src="{{cdn()}}/images/stamps/Possession-Started-Sold-Out.png" class="lazy stamps-sm" alt="">

                                                    @elseif($city_projects_dl->project_stamp_id == 11)

                                                        <img data-src="{{cdn()}}/images/stamps/Operational.png" class="lazy stamps-sm" alt="">


                                                    @elseif($city_projects_dl->project_stamp_id == 12)




                                                    <img data-src="{{cdn()}}/images/stamps/Operationa-Sold-Out.png" class="lazy stamps-sm" alt="">


                                                    @elseif($ProjectDetail->project_stamp_id == 13)


                                                        <img data-src="{{cdn()}}/images/stamps/ready-to-fit-out.png" class="lazy stamps-sm" alt="">

                                                    @elseif($ProjectDetail->project_stamp_id == 14)


                                                        <img data-src="{{cdn()}}/images/stamps/completion_obtained_fitout_started.png" class="lazy stamps-sm" alt="">


                                                    @endif


                                                </a>
                                                <div class="lazy card-body">
                                                    <h5 class="lazy card-title">{{ $city_projects_dl->project_title }}</h5>


                                                    <div class="lazy card-btn">
                                                        <a href="{{URL::to('/projects/'.strtolower(str_replace(" ","-",$city_projects_dl->project_city->name)).'/'.$city_projects_dl->project_type->name.'/'.$city_projects_dl->project_slug)}}" class="lazy btn btn-sm btn-primary">KNOW MORE</a>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        @endif
                    </div>

                </div>





                <div role="tabpanel" class="lazy tab-pane fade panel1" id="panel-4">
                    <div class="lazy row">
                        @if(isset($data['city_projects_upradesh']))
                            @foreach($data['city_projects_upradesh'] as $index =>$city_projects_hp)

                                @if ($index == 0)
                                    <div class="lazy col-md-8 sec col-sm-12 col-xs-12">
                                        <div class="lazy video1">
                                            <div class="lazy card" style="width: 100%;">
                                                <a class="lazy stamp-sm-container" href="{{URL::to('/projects/'.strtolower(str_replace(" ","-",$city_projects_hp->project_city->name)).'/'.$city_projects_hp->project_type->name.'/'.$city_projects_hp->project_slug)}}">
                                                    <img class="lazy card-img-top" data-src="{{cdn()}}/images/website_banner/{{$city_projects_hp->banner_image}}" alt="{{$city_projects_hp->project_title}}">

                                                    @if($city_projects_hp->project_stamp_id == 1)

                                                        <img data-src="{{cdn()}}/images/stamps/Hot-selleing-property.png" class="lazy stamps-sm" alt="">

                                                    @elseif($city_projects_hp->project_stamp_id == 2)
                                                        <img data-src="{{cdn()}}/images/stamps/ready-to-move-in.png" class="lazy stamps-sm" alt="">

                                                    @elseif($city_projects_hp->project_stamp_id == 3)

                                                        <img data-src="{{cdn()}}/images/stamps/Delivered.png" class="lazy stamps-sm" alt="">
                                                    @elseif($city_projects_hp->project_stamp_id == 4)

                                                        <img data-src="{{cdn()}}/images/stamps/Under-Construction.png" class="lazy stamps-sm" alt="">

                                                    @elseif($city_projects_hp->project_stamp_id == 5)

                                                        <img data-src="{{cdn()}}/images/stamps/Just-launched.png" class="lazy stamps-sm" alt="">

                                                    @elseif($city_projects_hp->project_stamp_id == 6)

                                                        <img data-src="{{cdn()}}/images/stamps/sold-out.png" class="lazy stamps-sm" alt="">

                                                    @elseif($city_projects_hp->project_stamp_id == 7)

                                                        <img data-src="{{cdn()}}/images/stamps/Possession-Started.png" class="lazy stamps-sm" alt="">

                                                    @elseif($city_projects_hp->project_stamp_id == 8)

                                                        <img data-src="{{cdn()}}/images/stamps/Under-Construction-Sold-Out.png" class="lazy stamps-sm" alt="">


                                                    @elseif($city_projects_hp->project_stamp_id == 9)

                                                        <img data-src="{{cdn()}}/images/stamps/Delivered-Sold-Out.png" class="lazy stamps-sm" alt="">

                                                    @elseif($city_projects_hp->project_stamp_id == 10)

                                                        <img data-src="{{cdn()}}/images/stamps/Possession-Started-Sold-Out.png" class="lazy stamps-sm" alt="">

                                                    @elseif($city_projects_hp->project_stamp_id == 11)

                                                        <img data-src="{{cdn()}}/images/stamps/Operational.png" class="lazy stamps-sm" alt="">


                                                    @elseif($city_projects_hp->project_stamp_id == 12)




                                                    <img data-src="{{cdn()}}/images/stamps/Operationa-Sold-Out.png" class="lazy stamps-sm" alt="">


                                                    @elseif($ProjectDetail->project_stamp_id == 13)


                                                        <img data-src="{{cdn()}}/images/stamps/ready-to-fit-out.png" class="lazy stamps-sm" alt="">

                                                    @elseif($ProjectDetail->project_stamp_id == 14)


                                                        <img data-src="{{cdn()}}/images/stamps/completion_obtained_fitout_started.png" class="lazy stamps-sm" alt="">


                                                    @endif

                                                </a>
                                                <div class="lazy card-body">
                                                    <h5 class="lazy card-title">{{ $city_projects_hp->project_title }}</h5>

                                                    <div class="lazy card-btn">
                                                        <a href="{{URL::to('/projects/'.strtolower(str_replace(" ","-",$city_projects_hp->project_city->name)).'/'.$city_projects_hp->project_type->name.'/'.$city_projects_hp->project_slug)}}" class="lazy btn btn-sm btn-primary">KNOW MORE</a>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        @endif
                        @if(isset($data['city_projects_upradesh']))
                            @foreach($data['city_projects_upradesh'] as $index=>$city_projects_hp)

                                @if ($index != 0)
                                    <div class="lazy col-md-4 sec col-sm-12 col-xs-12">
                                        <div class="lazy video2">
                                            <div class="lazy card" style="width: 100%;">
                                                <a class="lazy stamp-sm-container" href="{{URL::to('/projects/'.strtolower(str_replace(" ","-",$city_projects_hp->project_city->name)).'/'.$city_projects_hp->project_type->name.'/'.$city_projects_hp->project_slug)}}">
                                                    <img class="lazy card-img-top" data-src="{{cdn()}}/images/website_banner/{{$city_projects_hp->banner_image}}" alt="{{$city_projects_hp->project_title}}">

                                                    @if($city_projects_hp->project_stamp_id == 1)

                                                        <img data-src="{{cdn()}}/images/stamps/Hot-selleing-property.png" class="lazy stamps-sm" alt="">

                                                    @elseif($city_projects_hp->project_stamp_id == 2)
                                                        <img data-src="{{cdn()}}/images/stamps/ready-to-move-in.png" class="lazy stamps-sm" alt="">

                                                    @elseif($city_projects_hp->project_stamp_id == 3)

                                                        <img data-src="{{cdn()}}/images/stamps/Delivered.png" class="lazy stamps-sm" alt="">
                                                    @elseif($city_projects_hp->project_stamp_id == 4)

                                                        <img data-src="{{cdn()}}/images/stamps/Under-Construction.png" class="lazy stamps-sm" alt="">

                                                    @elseif($city_projects_hp->project_stamp_id == 5)

                                                        <img data-src="{{cdn()}}/images/stamps/Just-launched.png" class="lazy stamps-sm" alt="">

                                                    @elseif($city_projects_hp->project_stamp_id == 6)

                                                        <img data-src="{{cdn()}}/images/stamps/sold-out.png" class="lazy stamps-sm" alt="">

                                                    @elseif($city_projects_hp->project_stamp_id == 7)

                                                        <img data-src="{{cdn()}}/images/stamps/Possession-Started.png" class="lazy stamps-sm" alt="">

                                                    @elseif($city_projects_hp->project_stamp_id == 8)

                                                        <img data-src="{{cdn()}}/images/stamps/Under-Construction-Sold-Out.png" class="lazy stamps-sm" alt="">


                                                    @elseif($city_projects_hp->project_stamp_id == 9)

                                                        <img data-src="{{cdn()}}/images/stamps/Delivered-Sold-Out.png" class="lazy stamps-sm" alt="">

                                                    @elseif($city_projects_hp->project_stamp_id == 10)

                                                        <img data-src="{{cdn()}}/images/stamps/Possession-Started-Sold-Out.png" class="lazy stamps-sm" alt="">

                                                    @elseif($city_projects_hp->project_stamp_id == 11)

                                                        <img data-src="{{cdn()}}/images/stamps/Operational.png" class="lazy stamps-sm" alt="">


                                                    @elseif($city_projects_hp->project_stamp_id == 12)




                                                    <img data-src="{{cdn()}}/images/stamps/Operationa-Sold-Out.png" class="lazy stamps-sm" alt="">


                                                    @elseif($ProjectDetail->project_stamp_id == 13)


                                                        <img data-src="{{cdn()}}/images/stamps/ready-to-fit-out.png" class="lazy stamps-sm" alt="">

                                                    @elseif($ProjectDetail->project_stamp_id == 14)


                                                        <img data-src="{{cdn()}}/images/stamps/completion_obtained_fitout_started.png" class="lazy stamps-sm" alt="">


                                                    @endif

                                                </a>
                                                <div class="lazy card-body">
                                                    <h5 class="lazy card-title">{{ $city_projects_hp->project_title }}</h5>

                                                    <div class="lazy card-btn">
                                                        <a href="{{URL::to('/projects/'.strtolower(str_replace(" ","-",$city_projects_hp->project_city->name)).'/'.$city_projects_hp->project_type->name.'/'.$city_projects_hp->project_slug)}}" class="lazy btn btn-sm btn-primary">KNOW MORE</a>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        @endif
                    </div>

                </div>



                <div role="tabpanel" class="lazy tab-pane fade panel1" id="panel-5">
                    <div class="lazy row">
                        @if($data['city_projects_punjab'])
                            @foreach($data['city_projects_punjab'] as $index =>$city_projects_pb)

                                @if ($index == 0)
                                    <div class="lazy col-md-8 sec col-sm-12 col-xs-12">
                                        <div class="lazy video1">
                                            <div class="lazy card" style="width: 100%;">
                                                <a class="lazy stamp-sm-container" href="{{URL::to('/projects/'.strtolower(str_replace(" ","-",$city_projects_pb->project_city->name)).'/'.$city_projects_pb->project_type->name.'/'.$city_projects_pb->project_slug)}}">
                                                    <img class="lazy card-img-top" data-src="{{cdn()}}/images/website_banner/{{$city_projects_pb->banner_image}}" alt="{{$city_projects_pb->project_title}}">

                                                    @if($city_projects_pb->project_stamp_id == 1)

                                                        <img data-src="{{cdn()}}/images/stamps/Hot-selleing-property.png" class="lazy stamps-sm" alt="">

                                                    @elseif($city_projects_pb->project_stamp_id == 2)
                                                        <img data-src="{{cdn()}}/images/stamps/ready-to-move-in.png" class="lazy stamps-sm" alt="">

                                                    @elseif($city_projects_pb->project_stamp_id == 3)

                                                        <img data-src="{{cdn()}}/images/stamps/Delivered.png" class="lazy stamps-sm" alt="">
                                                    @elseif($city_projects_pb->project_stamp_id == 4)

                                                        <img data-src="{{cdn()}}/images/stamps/Under-Construction.png" class="lazy stamps-sm" alt="">

                                                    @elseif($city_projects_pb->project_stamp_id == 5)

                                                        <img data-src="{{cdn()}}/images/stamps/Just-launched.png" class="lazy stamps-sm" alt="">

                                                    @elseif($city_projects_pb->project_stamp_id == 6)

                                                        <img data-src="{{cdn()}}/images/stamps/sold-out.png" class="lazy stamps-sm" alt="">

                                                    @elseif($city_projects_pb->project_stamp_id == 7)

                                                        <img data-src="{{cdn()}}/images/stamps/Possession-Started.png" class="lazy stamps-sm" alt="">

                                                    @elseif($city_projects_pb->project_stamp_id == 8)

                                                        <img data-src="{{cdn()}}/images/stamps/Under-Construction-Sold-Out.png" class="lazy stamps-sm" alt="">


                                                    @elseif($city_projects_pb->project_stamp_id == 9)

                                                        <img data-src="{{cdn()}}/images/stamps/Delivered-Sold-Out.png" class="lazy stamps-sm" alt="">

                                                    @elseif($city_projects_pb->project_stamp_id == 10)

                                                        <img data-src="{{cdn()}}/images/stamps/Possession-Started-Sold-Out.png" class="lazy stamps-sm" alt="">

                                                    @elseif($city_projects_pb->project_stamp_id == 11)

                                                        <img data-src="{{cdn()}}/images/stamps/Operational.png" class="lazy stamps-sm" alt="">


                                                    @elseif($city_projects_pb->project_stamp_id == 12)




                                                    <img data-src="{{cdn()}}/images/stamps/Operationa-Sold-Out.png" class="lazy stamps-sm" alt="">


                                                    @elseif($ProjectDetail->project_stamp_id == 13)


                                                        <img data-src="{{cdn()}}/images/stamps/ready-to-fit-out.png" class="lazy stamps-sm" alt="">

                                                    @elseif($ProjectDetail->project_stamp_id == 14)


                                                        <img data-src="{{cdn()}}/images/stamps/completion_obtained_fitout_started.png" class="lazy stamps-sm" alt="">


                                                    @endif

                                                </a>
                                                <div class="lazy card-body">
                                                    <h5 class="lazy card-title">{{ $city_projects_pb->project_title }}</h5>

                                                    <div class="lazy card-btn">
                                                        <a href="{{URL::to('/projects/'.strtolower(str_replace(" ","-",$city_projects_pb->project_city->name)).'/'.$city_projects_pb->project_type->name.'/'.$city_projects_pb->project_slug)}}" class="lazy btn btn-sm btn-primary">KNOW MORE</a>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        @endif
                        @if($data['city_projects_punjab'])
                            @foreach($data['city_projects_punjab'] as $index=>$city_projects_pb)

                                @if ($index != 0)


                                    <div class="lazy col-md-4 sec col-sm-12 col-xs-12">
                                        <div class="lazy video2">
                                            <div class="lazy card" style="width: 100%;">
                                                <a class="lazy stamp-sm-container" href="{{URL::to('/projects/'.strtolower(str_replace(" ","-",$city_projects_pb->project_city->name)).'/'.$city_projects_pb->project_type->name.'/'.$city_projects_pb->project_slug)}}">
                                                    <img class="lazy card-img-top" data-src="{{cdn()}}/images/website_banner/{{$city_projects_pb->banner_image}}" alt="{{$city_projects_pb->project_title}}">

                                                    @if($city_projects_pb->project_stamp_id == 1)

                                                        <img data-src="{{cdn()}}/images/stamps/Hot-selleing-property.png" class="lazy stamps-sm" alt="">

                                                    @elseif($city_projects_pb->project_stamp_id == 2)
                                                        <img data-src="{{cdn()}}/images/stamps/ready-to-move-in.png" class="lazy stamps-sm" alt="">

                                                    @elseif($city_projects_pb->project_stamp_id == 3)

                                                        <img data-src="{{cdn()}}/images/stamps/Delivered.png" class="lazy stamps-sm" alt="">
                                                    @elseif($city_projects_pb->project_stamp_id == 4)

                                                        <img data-src="{{cdn()}}/images/stamps/Under-Construction.png" class="lazy stamps-sm" alt="">

                                                    @elseif($city_projects_pb->project_stamp_id == 5)

                                                        <img data-src="{{cdn()}}/images/stamps/Just-launched.png" class="lazy stamps-sm" alt="">

                                                    @elseif($city_projects_pb->project_stamp_id == 6)

                                                        <img data-src="{{cdn()}}/images/stamps/sold-out.png" class="lazy stamps-sm" alt="">

                                                    @elseif($city_projects_pb->project_stamp_id == 7)

                                                        <img data-src="{{cdn()}}/images/stamps/Possession-Started.png" class="lazy stamps-sm" alt="">

                                                    @elseif($city_projects_pb->project_stamp_id == 8)

                                                        <img data-src="{{cdn()}}/images/stamps/Under-Construction-Sold-Out.png" class="lazy stamps-sm" alt="">


                                                    @elseif($city_projects_pb->project_stamp_id == 9)

                                                        <img data-src="{{cdn()}}/images/stamps/Delivered-Sold-Out.png" class="lazy stamps-sm" alt="">

                                                    @elseif($city_projects_pb->project_stamp_id == 10)

                                                        <img data-src="{{cdn()}}/images/stamps/Possession-Started-Sold-Out.png" class="lazy stamps-sm" alt="">

                                                    @elseif($city_projects_pb->project_stamp_id == 11)

                                                        <img data-src="{{cdn()}}/images/stamps/Operational.png" class="lazy stamps-sm" alt="">


                                                    @elseif($city_projects_pb->project_stamp_id == 12)




                                                    <img data-src="{{cdn()}}/images/stamps/Operationa-Sold-Out.png" class="lazy stamps-sm" alt="">


                                                    @elseif($ProjectDetail->project_stamp_id == 13)


                                                        <img data-src="{{cdn()}}/images/stamps/ready-to-fit-out.png" class="lazy stamps-sm" alt="">

                                                    @elseif($ProjectDetail->project_stamp_id == 14)


                                                        <img data-src="{{cdn()}}/images/stamps/completion_obtained_fitout_started.png" class="lazy stamps-sm" alt="">


                                                    @endif

                                                </a>
                                                <div class="lazy card-body">
                                                    <h5 class="lazy card-title">{{ $city_projects_pb->project_title }}</h5>

                                                    <div class="lazy card-btn">
                                                        <a href="{{URL::to('/projects/'.strtolower(str_replace(" ","-",$city_projects_pb->project_city->name)).'/'.$city_projects_pb->project_type->name.'/'.$city_projects_pb->project_slug)}}" class="lazy btn btn-sm btn-primary">KNOW MORE</a>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        @endif
                    </div>

                </div>



                <div role="tabpanel" class="lazy tab-pane fade panel1" id="panel-6">
                    <div class="lazy row">
                        @if($data['city_projects_uk'])
                            @foreach($data['city_projects_uk'] as $index =>$city_projects_uk)

                                @if ($index == 0)
                                    <div class="lazy col-md-8 sec col-sm-12 col-xs-12">
                                        <div class="lazy video1">
                                            <div class="lazy card" style="width: 100%;">
                                                <a class="lazy stamp-sm-container" href="{{URL::to('/projects/'.strtolower(str_replace(" ","-",$city_projects_uk->project_city->name)).'/'.$city_projects_uk->project_type->name.'/'.$city_projects_uk->project_slug)}}">
                                                    <img class="lazy card-img-top" data-src="{{cdn()}}/images/website_banner/{{$city_projects_uk->banner_image}}" alt="{{$city_projects_uk->project_title}}">


                                                    @if($city_projects_uk->project_stamp_id == 1)

                                                        <img data-src="{{cdn()}}/images/stamps/Hot-selleing-property.png" class="lazy stamps-sm" alt="">

                                                    @elseif($city_projects_uk->project_stamp_id == 2)
                                                        <img data-src="{{cdn()}}/images/stamps/ready-to-move-in.png" class="lazy stamps-sm" alt="">

                                                    @elseif($city_projects_uk->project_stamp_id == 3)

                                                        <img data-src="{{cdn()}}/images/stamps/Delivered.png" class="lazy stamps-sm" alt="">
                                                    @elseif($city_projects_uk->project_stamp_id == 4)

                                                        <img data-src="{{cdn()}}/images/stamps/Under-Construction.png" class="lazy stamps-sm" alt="">

                                                    @elseif($city_projects_uk->project_stamp_id == 5)

                                                        <img data-src="{{cdn()}}/images/stamps/Just-launched.png" class="lazy stamps-sm" alt="">

                                                    @elseif($city_projects_uk->project_stamp_id == 6)

                                                        <img data-src="{{cdn()}}/images/stamps/sold-out.png" class="lazy stamps-sm" alt="">

                                                    @elseif($city_projects_uk->project_stamp_id == 7)

                                                        <img data-src="{{cdn()}}/images/stamps/Possession-Started.png" class="lazy stamps-sm" alt="">

                                                    @elseif($city_projects_uk->project_stamp_id == 8)

                                                        <img data-src="{{cdn()}}/images/stamps/Under-Construction-Sold-Out.png" class="lazy stamps-sm" alt="">


                                                    @elseif($city_projects_uk->project_stamp_id == 9)

                                                        <img data-src="{{cdn()}}/images/stamps/Delivered-Sold-Out.png" class="lazy stamps-sm" alt="">

                                                    @elseif($city_projects_uk->project_stamp_id == 10)

                                                        <img data-src="{{cdn()}}/images/stamps/Possession-Started-Sold-Out.png" class="lazy stamps-sm" alt="">

                                                    @elseif($city_projects_uk->project_stamp_id == 11)

                                                        <img data-src="{{cdn()}}/images/stamps/Operational.png" class="lazy stamps-sm" alt="">


                                                    @elseif($city_projects_uk->project_stamp_id == 12)




                                                    <img data-src="{{cdn()}}/images/stamps/Operationa-Sold-Out.png" class="lazy stamps-sm" alt="">


                                                    @elseif($ProjectDetail->project_stamp_id == 13)


                                                        <img data-src="{{cdn()}}/images/stamps/ready-to-fit-out.png" class="lazy stamps-sm" alt="">

                                                    @elseif($ProjectDetail->project_stamp_id == 14)


                                                        <img data-src="{{cdn()}}/images/stamps/completion_obtained_fitout_started.png" class="lazy stamps-sm" alt="">


                                                    @endif


                                                </a>
                                                <div class="lazy card-body">
                                                    <h5 class="lazy card-title">{{ $city_projects_uk->project_title }}</h5>

                                                    <div class="lazy card-btn">
                                                        <a href="{{URL::to('/projects/'.strtolower(str_replace(" ","-",$city_projects_uk->project_city->name)).'/'.$city_projects_uk->project_type->name.'/'.$city_projects_uk->project_slug)}}" class="lazy btn btn-sm btn-primary">KNOW MORE</a>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        @endif
                        @if($data['city_projects_uk'])
                            @foreach($data['city_projects_uk'] as $index=>$city_projects_uk)
                                @if ($index != 0)

                                    <div class="lazy col-md-4 sec col-sm-12 col-xs-12">
                                        <div class="lazy video2">
                                            <div class="lazy card" style="width: 100%;">
                                                <a class="lazy stamp-sm-container" href="{{URL::to('/projects/'.strtolower(str_replace(" ","-",$city_projects_uk->project_city->name)).'/'.$city_projects_uk->project_type->name.'/'.$city_projects_uk->project_slug)}}">
                                                    <img class="lazy card-img-top" data-src="{{cdn()}}/images/website_banner/{{$city_projects_uk->banner_image}}" alt="{{$city_projects_uk->project_title}}">

                                                    @if($city_projects_uk->project_stamp_id == 1)

                                                        <img data-src="{{cdn()}}/images/stamps/Hot-selleing-property.png" class="lazy stamps-sm" alt="">

                                                    @elseif($city_projects_uk->project_stamp_id == 2)
                                                        <img data-src="{{cdn()}}/images/stamps/ready-to-move-in.png" class="lazy stamps-sm" alt="">

                                                    @elseif($city_projects_uk->project_stamp_id == 3)

                                                        <img data-src="{{cdn()}}/images/stamps/Delivered.png" class="lazy stamps-sm" alt="">
                                                    @elseif($city_projects_uk->project_stamp_id == 4)

                                                        <img data-src="{{cdn()}}/images/stamps/Under-Construction.png" class="lazy stamps-sm" alt="">

                                                    @elseif($city_projects_uk->project_stamp_id == 5)

                                                        <img data-src="{{cdn()}}/images/stamps/Just-launched.png" class="lazy stamps-sm" alt="">

                                                    @elseif($city_projects_uk->project_stamp_id == 6)

                                                        <img data-src="{{cdn()}}/images/stamps/sold-out.png" class="lazy stamps-sm" alt="">

                                                    @elseif($city_projects_uk->project_stamp_id == 7)

                                                        <img data-src="{{cdn()}}/images/stamps/Possession-Started.png" class="lazy stamps-sm" alt="">

                                                    @elseif($city_projects_uk->project_stamp_id == 8)

                                                        <img data-src="{{cdn()}}/images/stamps/Under-Construction-Sold-Out.png" class="lazy stamps-sm" alt="">


                                                    @elseif($city_projects_uk->project_stamp_id == 9)

                                                        <img data-src="{{cdn()}}/images/stamps/Delivered-Sold-Out.png" class="lazy stamps-sm" alt="">

                                                    @elseif($city_projects_uk->project_stamp_id == 10)

                                                        <img data-src="{{cdn()}}/images/stamps/Possession-Started-Sold-Out.png" class="lazy stamps-sm" alt="">

                                                    @elseif($city_projects_uk->project_stamp_id == 11)

                                                        <img data-src="{{cdn()}}/images/stamps/Operational.png" class="lazy stamps-sm" alt="">


                                                    @elseif($city_projects_uk->project_stamp_id == 12)



                                                    <img data-src="{{cdn()}}/images/stamps/Operationa-Sold-Out.png" class="lazy stamps-sm" alt="">


                                                    @elseif($ProjectDetail->project_stamp_id == 13)


                                                        <img data-src="{{cdn()}}/images/stamps/ready-to-fit-out.png" class="lazy stamps-sm" alt="">

                                                    @elseif($ProjectDetail->project_stamp_id == 14)


                                                        <img data-src="{{cdn()}}/images/stamps/completion_obtained_fitout_started.png" class="lazy stamps-sm" alt="">


                                                    @endif


                                                </a>
                                                <div class="lazy card-body">
                                                    <h5 class="lazy card-title">{{ $city_projects_uk->project_title }}</h5>

                                                    <div class="lazy card-btn">
                                                        <a href="{{URL::to('/projects/'.strtolower(str_replace(" ","-",$city_projects_uk->project_city->name)).'/'.$city_projects_uk->project_type->name.'/'.$city_projects_uk->project_slug)}}" class="lazy btn btn-sm btn-primary">KNOW MORE</a>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        @endif
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>