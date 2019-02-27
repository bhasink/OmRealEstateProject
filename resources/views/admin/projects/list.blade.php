@extends('admin.layouts.layout')



@section('content')


    <style>
        th{
            text-align:center;
        }
        .count.csg img {
            width: 100%;
            height: 70px;
        }
    </style>





    <div class="row">




        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Projects  <small>Dashboard</small></h2>

                    <div class="clearfix"></div>
                </div>

                <div class="x_content">
                    <div class="row tile_count">
                        <div class="col-md-3 col-sm-4 col-xs-6 tile_stats_count">
                            <span class="count_top">Total Projects</span>
                            <div class="count">

                                    @if(isset($total_projects))

                                        {{$total_projects}}

                                    @endif

                            </div>

                        </div>
                        <div class="col-md-3 col-sm-4 col-xs-6 tile_stats_count">
                            <span class="count_top"></i>Project Leads By Week</span>
                            <div class="count green">

                                @if(isset($ProjectContactsWeek))

                                    {{$ProjectContactsWeek}}

                                @endif


                            </div>

                        </div>
                        <div class="col-md-3 col-sm-4 col-xs-6 tile_stats_count">
                            <span class="count_top"></i>Project Leads By Month</span>
                            <div class="count ">


                                @if(isset($ProjectContactsMonth))

                                    {{$ProjectContactsMonth}}

                                @endif


                            </div>

                        </div>




                        <div class="col-md-3 col-sm-4 col-xs-6 tile_stats_count">
                            <span class="count_top"></i>Project Leads By Year</span>
                            <div class="count csg">

                                @if(isset($ProjectContactsYear))

                                    {{$ProjectContactsYear}}

                                @endif



                            </div>

                        </div>

                    </div>

                </div>

            </div>
        </div>

    </div>


    <div class="">


        <div class="clearfix"></div>

        <div class="row">




            <div class="col-md-12 col-sm-12 col-xs-12">



                <div class="flash-message">
                    {{--@foreach (['danger', 'warning', 'success', 'info'] as $msg)--}}
                    @if(Session::has('alert-success'))
                        {{--<script> alert('Meta Sucessfully Created.')</script>--}}
                        <div class="alert alert-success" role="alert">
                            Project sucessfully created.
                        </div>
                    @endif
                    @if(Session::has('alert-danger'))
                        {{--<script> alert('Problem while creating.')</script>--}}
                        <div class="alert alert-success" role="alert">
                            Problem while creating Project.
                        </div>
                    @endif


                    @if(Session::has('alert-update-success'))
                        {{--<script> alert('Meta Updated Successfully.')</script>--}}
                        <div class="alert alert-success" role="alert">
                            Project updated successfully.
                        </div>
                    @endif
                    @if(Session::has('alert-update-danger'))
                        {{--<script> alert('Problem while updating meta data.')</script>--}}
                        <div class="alert alert-success" role="alert">
                            Problem while updating Project.
                        </div>
                    @endif



                    @if(Session::has('alert-delete'))
                        <div class="alert alert-success" role="alert">
                            Project deleted sucessfully.
                        </div>
                        {{--<script>alert('Meta Sucessfully Deleted.')</script>--}}

                    @endif


                    @if(Session::has('alert-delete-fail'))
                        <div class="alert alert-success" role="alert">
                            Problem while deleting Project.
                        </div>
                        {{--<script>alert('Problem while deleting meta data.')</script>--}}

                    @endif

                    {{--@endforeach--}}
                </div>



                <div class="x_panel">
                    <div class="x_title">
                        <h2>Projects  <small>Project List</small></h2>

                        <div style="float: right;">
                            <a href="{{url('omaxeadmin/projects/create')}}" class="btn btn-success" style="background-color: #28a745; border-color: #28a745;" href=""><i class="fas fa-plus-square"></i>
                                Create Project</a>
                        </div>

                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">











                        <table style="width: 100%;" id="datatable-buttons" class="table table-striped table-bordered">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Slug</th>
                                <th >City</th>
                                {{--<th >MapLink</th>--}}
                                {{--<th>ProjectVideo</th>--}}
                                {{--<th>Banner</th>--}}
                                {{--<th>Logo</th>--}}
                                <th>Stamp</th>
                                <th>Status</th>
                                <th>&nbsp;&nbsp;&nbsp;Date&nbsp;&&nbsp;Time:&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                <th>&nbsp;&nbsp;&nbsp;Edit&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                <th>&nbsp;&nbsp;&nbsp;Delete&nbsp;&nbsp;&nbsp;</th>

                            </tr>
                            </thead>


                            <tbody>
                            @if(isset($get_projects))

{{--{{dd($project_city)}}--}}
                                @foreach($get_projects as $key=>$get_project_data)

                                    <tr>
                                        <td>{{$get_project_data->id}}</td>
                                        <td style="width: 50px;">{{$get_project_data->project_title}}</td>
                                        <td>{{$get_project_data->project_slug}}</td>
                                        <td>
                                            <?php
                                            $city =\Omaxe\ProjectCity::where('id',$get_project_data->project_city_id)->first();
                                            ?>
                                            {!!  $city['name'] !!}
                                        </td>
                                        {{--<td>--}}
                                            {{--<p>--}}
                                            {{--{!! str_limit($get_project_data->project_description,100).'...' !!}--}}
                                            {{--</p>--}}
                                        {{--</td>--}}
                                        {{--<td style="width: 50px;">{{$get_project_data->project_map_link}}</td>--}}
                                        {{--<td>{{$get_project_data->project_video_link}}</td>--}}
                                        {{--<td>{{$get_project_data->banner_image}}</td>--}}
                                        {{--<td>{{$get_project_data->logo}}</td>--}}
                                        {{--<td>--}}
                                        <?php

                                        //                                                if($get_project_data->project_query ==4999999){
                                        //                                                    echo "Under 50 lakh";
                                        //                                                }
                                        //                                                else
                                        //                                                    if($get_project_data->project_query ==9999999){
                                        //                                                        echo "Under 1 Cr";
                                        //                                                }
                                        //                                                else{
                                        //                                                    echo "Above 1 Cr";
                                        //                                                }
                                        ?>

                                        {{--</td>--}}

                                        <td>
                                            <?php

                                                if($get_project_data->project_stamp_id==1)
                                                    echo 'Hot Selling Properties';
                                                else if($get_project_data->project_stamp_id==2)
                                            echo 'Ready to move in';
                                            else if($get_project_data->project_stamp_id==3)
                                            echo 'Delivered';
                                            else if($get_project_data->project_stamp_id==4)
                                            echo 'Under Construction';
                                            else if($get_project_data->project_stamp_id==5)
                                            echo 'Just Launched';
                                            else if($get_project_data->project_stamp_id==6)
                                            echo 'Sold Out';
                                            else if($get_project_data->project_stamp_id==7)
                                            echo 'Possession Started';
                                            else if($get_project_data->project_stamp_id==8)
                                            echo 'Under Construction / Sold Out';
                                            else if($get_project_data->project_stamp_id==9)
                                            echo 'Delivered / Sold Out';
                                            else if($get_project_data->project_stamp_id==10)
                                            echo 'Possession Started / Sold Out';
                                            else if($get_project_data->project_stamp_id==11)
                                            echo 'Operational';
                                            else if($get_project_data->project_stamp_id==12)
                                            echo 'Operational / Sold Out';
                                            else if($get_project_data->project_stamp_id==13)
                                            echo 'Ready To Fit Out';

                                            ?>

                                        </td>

                                        <td>
                                            {{$get_project_data->project_visiblity==1?'Active':'Deactive'}}
                                        </td>

                                        <td>{{$get_project_data->created_at==null?'Created By Sociowash':$get_project_data->created_at}}
                                        </td>
                                        <td>
                                            <a href="/omaxeadmin/projects/edit/{{$get_project_data->id}}?ref={{rand(1,10000000)}}" class="btn btn-success" onclick="history.go(0)">Edit</a>
                                        </td>
                                        <td>
                                            <a href="/omaxeadmin/projects/delete/{{$get_project_data->id}}" onclick="return confirm('Are you sure?');" class="btn btn-danger">Delete</a>
                                        </td>


                                    </tr>
                                @endforeach
                            @endif

                            </tbody>

                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>







@endsection




