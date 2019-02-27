<div class="lazy highlight-content">

    <div class="lazy main-content-heading" style="margin-bottom: 16px;">
        <h1>Properties By Categories</h1>
        <p style="text-align: center;
    font-size: 14px;
    font-weight: 400;
    line-height: 1.7em;
    margin-top: 10px;">From hot selling properties to ready to move homes, browse through the broad category of properties available at Omaxe.
        </p>

    </div>


    <div class="lazy highlight-link">
        <div role="tabpanel">
            <div class="lazy  view-highlight-btn">
                <ul class="lazy nav navbar " role="tablist">
                    <li role="presentation" class="lazy active" >
                        <a href="#panel-10" aria-controls="panel-10" role="tab" data-toggle="tab" class="lazy btn btn-light active btn-sm">Hot Selling Properties</a>
                    </li>
                    <li role="presentation">
                        <a href="#panel-11" aria-controls="panel-11" role="tab" data-toggle="tab" class="lazy btn btn-light btn-sm">Ready to move-in</a>
                    </li>
                    <li role="presentation">
                        <a href="#panel-12" aria-controls="panel-12" role="tab" data-toggle="tab" class="lazy btn btn-light btn-sm">Delivered</a>
                    </li>
                    
                </ul>
            </div>
        </div>
    </div>


    <div class="lazy row mobrowc padding-main">
        <div role="tabpanel">
            <div class="lazy tab-content">
                <div role="tabpanel" class="lazy tab-pane panel1 active" id="panel-10">
                    <div class="lazy row ">

                        @if(isset($data['ProjectDetails_by_cats_1']))



                            @foreach($data['ProjectDetails_by_cats_1'] as $ProjectDetails_by_cat_1)


                                <div class="lazy col-md-4 sec col-sm-12 col-xs-12">
                                    <div class="lazy video">
                                        <div class="lazy card" style="width: 100%;">
                                            <a class="lazy stamp-sm-container" href="{{URL::to('/projects/'.strtolower(str_replace(" ","-",$ProjectDetails_by_cat_1->project_city->name)).'/'.$ProjectDetails_by_cat_1->project_type->name.'/'.$ProjectDetails_by_cat_1->project_slug)}}">
                                                <img class="lazy card-img-top" data-src="{{cdn()}}/images/website_banner/{{$ProjectDetails_by_cat_1->banner_image}}" alt="{{$ProjectDetails_by_cat_1->project_title}}">

                                                @if($ProjectDetails_by_cat_1->project_stamp_id == 1)

                                                    <img data-src="{{cdn()}}/images/stamps/Hot-selleing-property.png" class="lazy stamps-sm" alt="">

                                                @elseif($ProjectDetails_by_cat_1->project_stamp_id == 2)
                                                    <img data-src="{{cdn()}}/images/stamps/ready-to-move-in.png" class="lazy stamps-sm" alt="">

                                                @elseif($ProjectDetails_by_cat_1->project_stamp_id == 3)

                                                    <img data-src="{{cdn()}}/images/stamps/Delivered.png" class="lazy stamps-sm" alt="">
                                                @elseif($ProjectDetails_by_cat_1->project_stamp_id == 4)

                                                    <img data-src="{{cdn()}}/images/stamps/Under-Construction.png" class="lazy stamps-sm" alt="">

                                                @elseif($ProjectDetails_by_cat_1->project_stamp_id == 5)

                                                    <img data-src="{{cdn()}}/images/stamps/Just-launched.png" class="lazy stamps-sm" alt="">

                                                @elseif($ProjectDetails_by_cat_1->project_stamp_id == 6)

                                                    <img data-src="{{cdn()}}/images/stamps/sold-out.png" class="lazy stamps-sm" alt="">

                                                @elseif($ProjectDetails_by_cat_1->project_stamp_id == 7)

                                                    <img data-src="{{cdn()}}/images/stamps/Possession-Started.png" class="lazy stamps-sm" alt="">

                                                @elseif($ProjectDetails_by_cat_1->project_stamp_id == 8)

                                                    <img data-src="{{cdn()}}/images/stamps/Under-Construction-Sold-Out.png" class="lazy stamps-sm" alt="">


                                                @elseif($ProjectDetails_by_cat_1->project_stamp_id == 9)

                                                    <img data-src="{{cdn()}}/images/stamps/Delivered-Sold-Out.png" class="lazy stamps-sm" alt="">

                                                @elseif($ProjectDetails_by_cat_1->project_stamp_id == 10)

                                                    <img data-src="{{cdn()}}/images/stamps/Possession-Started-Sold-Out.png" class="lazy stamps-sm" alt="">

                                                @elseif($ProjectDetails_by_cat_1->project_stamp_id == 11)

                                                    <img data-src="{{cdn()}}/images/stamps/Operational.png" class="lazy stamps-sm" alt="">


                                                @elseif($ProjectDetails_by_cat_1->project_stamp_id == 12)


                                                    <img data-src="{{cdn()}}/images/stamps/Operationa-Sold-Out.png" class="lazy stamps-sm" alt="">


                                                @elseif($ProjectDetails_by_cat_1->project_stamp_id == 13)


                                                    <img data-src="{{cdn()}}/images/stamps/ready-to-fit-out.png" class="lazy stamps-sm" alt="">


                                                @elseif($ProjectDetails_by_cat_1->project_stamp_id == 14)


                                                    <img data-src="{{cdn()}}/images/stamps/completion_obtained_fitout_started.png" class="lazy stamps-sm" alt="">


                                                @endif

                                            </a>
                                            <div class="lazy card-body">
                                                <h5 class="lazy card-title">{{ $ProjectDetails_by_cat_1->project_title }}</h5>

                                                <div class="lazy card-btn">
                                                    <a href="{{URL::to('/projects/'.strtolower(str_replace(" ","-",$ProjectDetails_by_cat_1->project_city->name)).'/'.$ProjectDetails_by_cat_1->project_type->name.'/'.$ProjectDetails_by_cat_1->project_slug)}}" class="lazy btn btn-sm btn-primary">KNOW MORE</a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                            @endforeach

                        <div class="lazy col-md-12 text-center view-all-btn">
                            <a style="background:none !important;" href="{{URL::to('/projects/category/'.strtolower(str_replace(" ","-",$ProjectDetails_by_cat_1->project_category->project_category_name)))}}" ><button class="lazy btn btn-outline-dark">VIEW ALL</button></a>
                        </div>
                        @endif
                    </div>
                </div>
                <div role="tabpanel" class="lazy tab-pane fade" id="panel-11">
                    <div class="lazy row">
                        @if($data['ProjectDetails_by_cats_2'])
                            @foreach($data['ProjectDetails_by_cats_2'] as $ProjectDetails_by_cats_2)


                                <div class="lazy col-md-4 sec col-sm-12 col-xs-12">
                                    <div class="lazy video">
                                        <div class="lazy card" style="width: 100%;">
                                            <a class="lazy stamp-sm-container" href="{{URL::to('/projects/'.strtolower(str_replace(" ","-",$ProjectDetails_by_cats_2->project_city->name)).'/'.$ProjectDetails_by_cats_2->project_type->name.'/'.$ProjectDetails_by_cats_2->project_slug)}}">
                                                <img class="lazy card-img-top" data-src="{{cdn()}}/images/website_banner/{{$ProjectDetails_by_cats_2->banner_image}}" alt="{{$ProjectDetails_by_cats_2->project_title}}">

                                                @if($ProjectDetails_by_cats_2->project_stamp_id == 1)

                                                    <img data-src="{{cdn()}}/images/stamps/Hot-selleing-property.png" class="lazy stamps-sm" alt="">

                                                @elseif($ProjectDetails_by_cats_2->project_stamp_id == 2)
                                                    <img data-src="{{cdn()}}/images/stamps/ready-to-move-in.png" class="lazy stamps-sm" alt="">

                                                @elseif($ProjectDetails_by_cats_2->project_stamp_id == 3)

                                                    <img data-src="{{cdn()}}/images/stamps/Delivered.png" class="lazy stamps-sm" alt="">
                                                @elseif($ProjectDetails_by_cats_2->project_stamp_id == 4)

                                                    <img data-src="{{cdn()}}/images/stamps/Under-Construction.png" class="lazy stamps-sm" alt="">

                                                @elseif($ProjectDetails_by_cats_2->project_stamp_id == 5)

                                                    <img data-src="{{cdn()}}/images/stamps/Just-launched.png" class="lazy stamps-sm" alt="">

                                                @elseif($ProjectDetails_by_cats_2->project_stamp_id == 6)

                                                    <img data-src="{{cdn()}}/images/stamps/sold-out.png" class="lazy stamps-sm" alt="">

                                                @elseif($ProjectDetails_by_cats_2->project_stamp_id == 7)

                                                    <img data-src="{{cdn()}}/images/stamps/Possession-Started.png" class="lazy stamps-sm" alt="">

                                                @elseif($ProjectDetails_by_cats_2->project_stamp_id == 8)

                                                    <img data-src="{{cdn()}}/images/stamps/Under-Construction-Sold-Out.png" class="lazy stamps-sm" alt="">


                                                @elseif($ProjectDetails_by_cats_2->project_stamp_id == 9)

                                                    <img data-src="{{cdn()}}/images/stamps/Delivered-Sold-Out.png" class="lazy stamps-sm" alt="">

                                                @elseif($ProjectDetails_by_cats_2->project_stamp_id == 10)

                                                    <img data-src="{{cdn()}}/images/stamps/Possession-Started-Sold-Out.png" class="lazy stamps-sm" alt="">

                                                @elseif($ProjectDetails_by_cats_2->project_stamp_id == 11)

                                                    <img data-src="{{cdn()}}/images/stamps/Operational.png" class="lazy stamps-sm" alt="">


                                                @elseif($ProjectDetails_by_cats_2->project_stamp_id == 12)


                                                    <img data-src="{{cdn()}}/images/stamps/Operationa-Sold-Out.png" class="lazy stamps-sm" alt="">

                                                @elseif($ProjectDetails_by_cats_2->project_stamp_id == 13)


                                                    <img data-src="{{cdn()}}/images/stamps/ready-to-fit-out.png" class="lazy stamps-sm" alt="">

                                                @elseif($ProjectDetails_by_cat_2->project_stamp_id == 14)


                                                    <img data-src="{{cdn()}}/images/stamps/completion_obtained_fitout_started.png" class="lazy stamps-sm" alt="">



                                                @endif

                                            </a>
                                            <div class="lazy card-body">
                                                <h5 class="lazy card-title">{{ $ProjectDetails_by_cats_2->project_title }}</h5>

                                                <div class="lazy card-btn">
                                                    <a href="{{URL::to('/projects/'.strtolower(str_replace(" ","-",$ProjectDetails_by_cats_2->project_city->name)).'/'.$ProjectDetails_by_cats_2->project_type->name.'/'.$ProjectDetails_by_cats_2->project_slug)}}" class="lazy btn btn-sm btn-primary">KNOW MORE</a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                            @endforeach

                        <div class="lazy col-md-12 text-center view-all-btn">
                            <a style="background:none !important;" href="{{URL::to('/projects/category/'.strtolower(str_replace(" ","-",$ProjectDetails_by_cats_2->project_category->project_category_name)))}}" ><button class="lazy btn btn-outline-dark">VIEW ALL</button></a>
                        </div>
                        @endif
                    </div>

                </div>
                <div role="tabpanel" class="lazy tab-pane fade" id="panel-12">
                    <div class="lazy row">
                        @if($data['ProjectDetails_by_cats_3'])
                            @foreach($data['ProjectDetails_by_cats_3'] as $ProjectDetails_by_cats_3)


                                <div class="lazy col-md-4 sec col-sm-12 col-xs-12">
                                    <div class="lazy video">
                                        <div class="lazy card" style="width: 100%;">
                                            <a class="lazy stamp-sm-container" href="{{URL::to('/projects/'.strtolower(str_replace(" ","-",$ProjectDetails_by_cats_3->project_city->name)).'/'.$ProjectDetails_by_cats_3->project_type->name.'/'.$ProjectDetails_by_cats_3->project_slug)}}">
                                                <img class="lazy card-img-top" data-src="{{cdn()}}/images/website_banner/{{$ProjectDetails_by_cats_3->banner_image}}" alt="{{$ProjectDetails_by_cats_3->project_title}}">

                                                @if($ProjectDetails_by_cats_3->project_stamp_id == 1)

                                                    <img data-src="{{cdn()}}/images/stamps/Hot-selleing-property.png" class="lazy stamps-sm" alt="">

                                                @elseif($ProjectDetails_by_cats_3->project_stamp_id == 2)
                                                    <img data-src="{{cdn()}}/images/stamps/ready-to-move-in.png" class="lazy stamps-sm" alt="">

                                                @elseif($ProjectDetails_by_cats_3->project_stamp_id == 3)

                                                    <img data-src="{{cdn()}}/images/stamps/Delivered.png" class="lazy stamps-sm" alt="">
                                                @elseif($ProjectDetails_by_cats_3->project_stamp_id == 4)

                                                    <img data-src="{{cdn()}}/images/stamps/Under-Construction.png" class="lazy stamps-sm" alt="">

                                                @elseif($ProjectDetails_by_cats_3->project_stamp_id == 5)

                                                    <img data-src="{{cdn()}}/images/stamps/Just-launched.png" class="lazy stamps-sm" alt="">

                                                @elseif($ProjectDetails_by_cats_3->project_stamp_id == 6)

                                                    <img data-src="{{cdn()}}/images/stamps/sold-out.png" class="lazy stamps-sm" alt="">

                                                @elseif($ProjectDetails_by_cats_3->project_stamp_id == 7)

                                                    <img data-src="{{cdn()}}/images/stamps/Possession-Started.png" class="lazy stamps-sm" alt="">

                                                @elseif($ProjectDetails_by_cats_3->project_stamp_id == 8)

                                                    <img data-src="{{cdn()}}/images/stamps/Under-Construction-Sold-Out.png" class="lazy stamps-sm" alt="">


                                                @elseif($ProjectDetails_by_cats_3->project_stamp_id == 9)

                                                    <img data-src="{{cdn()}}/images/stamps/Delivered-Sold-Out.png" class="lazy stamps-sm" alt="">

                                                @elseif($ProjectDetails_by_cats_3->project_stamp_id == 10)

                                                    <img data-src="{{cdn()}}/images/stamps/Possession-Started-Sold-Out.png" class="lazy stamps-sm" alt="">

                                                @elseif($ProjectDetails_by_cats_3->project_stamp_id == 11)

                                                    <img data-src="{{cdn()}}/images/stamps/Operational.png" class="lazy stamps-sm" alt="">


                                                @elseif($ProjectDetails_by_cats_3->project_stamp_id == 12)


                                                    <img data-src="{{cdn()}}/images/stamps/Operationa-Sold-Out.png" class="lazy stamps-sm" alt="">


                                                @elseif($ProjectDetails_by_cats_3->project_stamp_id == 13)


                                                    <img data-src="{{cdn()}}/images/stamps/ready-to-fit-out.png" class="lazy stamps-sm" alt="">

                                                @elseif($ProjectDetails_by_cat_3->project_stamp_id == 14)


                                                    <img data-src="{{cdn()}}/images/stamps/completion_obtained_fitout_started.png" class="lazy stamps-sm" alt="">



                                                @endif

                                            </a>
                                            <div class="lazy card-body">
                                                <h5 class="lazy card-title">{{ $ProjectDetails_by_cats_3->project_title }}</h5>

                                                <div class="lazy card-btn">
                                                    <a href="{{URL::to('/projects/'.strtolower(str_replace(" ","-",$ProjectDetails_by_cats_3->project_city->name)).'/'.$ProjectDetails_by_cats_3->project_type->name.'/'.$ProjectDetails_by_cats_3->project_slug)}}" class="lazy btn btn-sm btn-primary">KNOW MORE</a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        <div class="lazy col-md-12 text-center view-all-btn">
                            <a style="background:none !important;" href="{{URL::to('/projects/category/'.strtolower(str_replace(" ","-",$ProjectDetails_by_cats_3->project_category->project_category_name)))}}" ><button class="lazy btn btn-outline-dark">VIEW ALL</button></a>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
