@foreach($data_all['allProjects'] as $allProjects)
    <div class="col-md-6 sec col-sm-12 col-xs-12" style="margin-bottom: 15px;">
        <div class="video">
            <div class="card" style="width: 100%;">
                <a href="{{URL::to('/projects/'.strtolower(str_replace(" ","-",$allProjects->project_city->name)).'/'.$allProjects->project_type->name.'/'.$allProjects->project_slug)}}">
                    <img class="card-img-top" height="200" src="{{cdn()}}/images//website_banner/{{$allProjects->banner_image}}" alt="Card image cap">
                </a>
                <div class="card-body">
                    <h5 class="card-title"  style="font-weight: bold;
    height: 50px;
    overflow: hidden;">{{$allProjects->project_title}}</h5>
                    <p class="card-text" style="text-align: center; font-size:14px;letter-spacing: 1px; font-weight: 400; text-align: left; margin-bottom: 25px; line-height: 20px; word-spacing: 1px; font-weight: 100;">
                        {{--                            {{ \Illuminate\Support\Str::words($allProjects->project_description,13)}}--}}
                        {{  \Illuminate\Support\Str::limit($allProjects->project_description, 88) }}
                    </p>
                    <a href="{{URL::to('/projects/'.strtolower(str_replace(" ","-",$allProjects->project_city->name)).'/'.$allProjects->project_type->name.'/'.$allProjects->project_slug)}}" class="btn btn-sm btn-primary">KNOW MORE</a>
                </div>
            </div>
        </div>
    </div>
@endforeach

