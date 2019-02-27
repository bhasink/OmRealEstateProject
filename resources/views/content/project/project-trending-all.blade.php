@foreach($data_all['trending_all_properties'] as $index=>$trending_all_property)
    <div class="col-md-12 sec col-sm-12 col-xs-12" style="margin-bottom: 15px;">
        <div class="video">
            <div class="card" style="width: 100%;">
                <a class="stamp-sm-container" href="{{URL::to('/projects/'.strtolower(str_replace(" ","-",$trending_all_property->project_city->name)).'/'.$trending_all_property->project_type->name.'/'.$trending_all_property->project_slug)}}">
                    <img class="card-img-top" height="200" src="{{cdn()}}/images//website_banner/{{$trending_all_property->banner_image}}" alt="{{$trending_all_property->project_title}}">

                    @if($trending_all_property->project_stamp_id == 1)

                        <img src='{{cdn()}}/images//stamps/Hot-selleing-property.png' class='stamps-sm' alt=''>

                    @elseif($trending_all_property->project_stamp_id == 2)
                        <img src='{{cdn()}}/images//stamps/ready-to-move-in.png' class='stamps-sm' alt=''>

                    @elseif($trending_all_property->project_stamp_id == 3)

                        <img src='{{cdn()}}/images//stamps/Delivered.png' class='stamps-sm' alt=''>
                    @elseif($trending_all_property->project_stamp_id == 4)

                        <img src='{{cdn()}}/images//stamps/Under-Construction.png' class='stamps-sm' alt=''>

                    @elseif($trending_all_property->project_stamp_id == 5)

                        <img src='{{cdn()}}/images//stamps/Just-launched.png' class='stamps-sm' alt=''>

                    @elseif($trending_all_property->project_stamp_id == 6)

                        <img src='{{cdn()}}/images//stamps/sold-out.png' class='stamps-sm' alt=''>

                    @elseif($trending_all_property->project_stamp_id == 7)

                        <img src='{{cdn()}}/images//stamps/Possession-Started.png' class='stamps-sm' alt=''>

                    @elseif($trending_all_property->project_stamp_id == 8)

                        <img src='{{cdn()}}/images//stamps/Under-Construction-Sold-Out.png' class='stamps-sm' alt=''>


                    @elseif($trending_all_property->project_stamp_id == 9)

                        <img src='{{cdn()}}/images//stamps/Delivered-Sold-Out.png' class='stamps-sm' alt=''>

                    @elseif($trending_all_property->project_stamp_id == 10)

                        <img src='{{cdn()}}/images//stamps/Possession-Started-Sold-Out.png' class='stamps-sm' alt=''>

                    @elseif($trending_all_property->project_stamp_id == 11)

                        <img src='{{cdn()}}/images//stamps/Operational.png' class='stamps-sm' alt=''>


                    @elseif($trending_all_property->project_stamp_id == 12)



                    <img src='{{cdn()}}/images//stamps/Operationa-Sold-Out.png' class='stamps-sm' alt=''>


                    @elseif($trending_all_property->project_stamp_id == 13)



                        <img src='{{cdn()}}/images//stamps/ready-to-fit-out.png' class='stamps-sm' alt=''>


                    @elseif($trending_all_property->project_stamp_id == 14)



                        <img src='{{cdn()}}/images//stamps/completion_obtained_fitout_started.png' class='stamps-sm' alt=''>


                    @endif

                </a>
                <div class="card-body">
                    <h5 class="card-title" style="font-weight: bold; height: 50px; overflow: hidden;">{{$trending_all_property->project_title}}</h5>
                    <p class="card-text" style="font-size: 14px;
                            text-align: left;
                            margin-bottom: 10px;
                            font-weight: 100;
                            line-height: 1.7em;
    height: 47px;
    overflow: hidden;">
                        {{--                                                                            {{ \Illuminate\Support\Str::words($trending_all_property->project_description,8)}}--}}
                        {{--{{  \Illuminate\Support\Str::limit($trending_all_property->project_description, 80) }}--}}
{{--                        {!! substr($trending_all_property->project_description, 0, 50) !!} ...--}}
                    </p>
                    <a href="{{URL::to('/projects/'.strtolower(str_replace(" ","-",$trending_all_property->project_city->name)).'/'.$trending_all_property->project_type->name.'/'.$trending_all_property->project_slug)}}" class="btn btn-sm btn-primary">KNOW MORE</a>
                </div>
            </div>
        </div>
    </div>
@endforeach



