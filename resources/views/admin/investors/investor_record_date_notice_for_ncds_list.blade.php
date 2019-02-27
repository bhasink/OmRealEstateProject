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






    <div class="">


        <div class="clearfix"></div>

        <div class="row">




            <div class="col-md-12 col-sm-12 col-xs-12">



                <div class="flash-message">
                    {{--@foreach (['danger', 'warning', 'success', 'info'] as $msg)--}}
                    @if(Session::has('alert-record-date-created'))
                        {{--<script> alert('Meta Sucessfully Created.')</script>--}}
                        <div class="alert alert-success" role="alert">
                            Record date notice for NCD's sucessfully created.
                        </div>
                    @endif
                    @if(Session::has('alert-danger'))
                        {{--<script> alert('Problem while creating.')</script>--}}
                        <div class="alert alert-success" role="alert">
                            Problem while creating Project.
                        </div>
                    @endif


                    @if(Session::has('alert-record-date-notice-u'))
                        {{--<script> alert('Meta Updated Successfully.')</script>--}}
                        <div class="alert alert-success" role="alert">
                            Record date notice for NCD's updated sucessfully.
                        </div>
                    @endif
                    @if(Session::has('alert-update-danger'))
                        {{--<script> alert('Problem while updating meta data.')</script>--}}
                        <div class="alert alert-success" role="alert">
                            Problem while updating Project.
                        </div>
                    @endif



                    @if(Session::has('alert-record-date-notice-delete'))
                        <div class="alert alert-success" role="alert">
                            Record date notice for NCD's deleted sucessfully.
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
                        <h2>Investor  <small>Record date notice for NCD's</small></h2>

                        <div style="float: right;">
                            <a href="{{url('/omaxeadmin/investor/list/record-date-notice-for-ncds/create')}}" class="btn btn-success" style="background-color: #28a745; border-color: #28a745;" href=""><i class="fas fa-plus-square"></i>
                                Create Record date notice for NCD's</a>
                        </div>

                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">











                        <table style="width: 100%;" id="datatable-buttons" class="table table-striped table-bordered">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                {{--<th >Media Image</th>--}}
                                <th>Report Year</th>
                                {{--<th>Report QTR</th>--}}
                                {{--<th >City</th>--}}
                                {{--<th >MapLink</th>--}}
                                {{--<th>ProjectVideo</th>--}}
                                {{--<th>Banner</th>--}}
                                {{--<th>Logo</th>--}}
                                {{--<th>PriceRange</th>--}}
                                <th>&nbsp;&nbsp;&nbsp;Date&nbsp;&&nbsp;Time:&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                <th>&nbsp;&nbsp;&nbsp;Edit&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                <th>&nbsp;&nbsp;&nbsp;Delete&nbsp;&nbsp;&nbsp;</th>

                            </tr>
                            </thead>


                            <tbody>
                            @if(isset($get_investor_data_list))

                                {{--{{dd($project_city)}}--}}
                                @foreach($get_investor_data_list as $key=>$get_investor_data_list)

                                    <tr>
                                        <td>{{$get_investor_data_list->id}}</td>
                                        <td style="width: 50px;">{{$get_investor_data_list->investors_title}}</td>
                                        {{--<td>--}}
                                        {{--<img width="60" height="60" src="/investors/images/annual_reports/{{$get_investor_data_list->investor_image}}" alt="">--}}
                                        {{--</td>--}}
                                        <td>{{$get_investor_data_list->report_year}}</td>

                                        {{--<td>{{$get_investor_data_list->report_qtr}}</td>--}}



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



                                        <td>{{$get_investor_data_list->created_at==null?'Created By Sociowash':$get_investor_data_list->created_at}}
                                        </td>

                                        <td>
                                            <a href="/omaxeadmin/investor/list/record-date-notice-for-ncds/edit/{{$get_investor_data_list->id}}" class="btn btn-success">Edit</a>
                                        </td>

                                        <td>
                                            <a href="/omaxeadmin/investor/list/record-date-notice-for-ncds/delete/{{$get_investor_data_list->id}}" onclick="return confirm('Are you sure?');" class="btn btn-danger">Delete</a>
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




