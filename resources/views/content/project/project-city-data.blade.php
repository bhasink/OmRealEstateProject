    @foreach($data['project_details'] as $project_detail)
        <div class="col-md-6 sec col-sm-12 col-xs-12" style="margin-bottom: 15px;">
            <div class="video">
                <div class="card" style="width: 100%;">
                    <a href="{{URL::to('/projects/'.strtolower(str_replace(" ","-",$project_detail->project_city->name)).'/'.$project_detail->project_type->name.'/'.$project_detail->project_slug)}}">
                        <img class="card-img-top" height="200" src="{{cdn()}}/images/website_banner/{{$project_detail->banner_image}}" alt="Card image cap">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title" style="font-weight: 100;">{{$project_detail->project_title}}</h5>
                        <p class="card-text" style="   font-size: 14px;
    text-align: left;
    margin-bottom: 25px;
    font-weight: 100;
    line-height: 1.7em;">
                            {{  \Illuminate\Support\Str::limit($project_detail->project_description, 88) }}
{{--                            {{ \Illuminate\Support\Str::words($project_detail->project_description,15)}}--}}
                        </p>
                        <a href="{{URL::to('/projects/'.strtolower(str_replace(" ","-",$project_detail->project_city->name)).'/'.$project_detail->project_type->name.'/'.$project_detail->project_slug)}}" class="btn btn-sm btn-primary">KNOW MORE</a>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    {{--<p style="text-align: center; font-size:14px;letter-spacing: 1px; font-weight: 400; text-align: justify; margin-bottom: 7px; line-height: 25px; word-spacing: 5px;">--}}