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
                        <h2>Seo  <small>Dashboard</small></h2>

                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <div class="row tile_count">
                            <div class="col-md-3 col-sm-4 col-xs-6 tile_stats_count">
                                <span class="count_top">Omaxe Global Rank</span>
                                <div class="count">

                                    @if(isset($data['globalrank_alexa']))
                                        {{$data['globalrank_alexa']}}
                                    @endif

                                </div>

                            </div>
                            <div class="col-md-3 col-sm-4 col-xs-6 tile_stats_count">
                                <span class="count_top"></i>Omaxe India Rank</span>
                                <div class="count green">
                                    @if(isset($data['indian_rank_alexa']))
                                        {{$data['indian_rank_alexa']['rank']}}
                                    @endif


                                </div>

                            </div>
                            <div class="col-md-3 col-sm-4 col-xs-6 tile_stats_count">
                                <span class="count_top"> Back Links</span>
                                <div class="count ">

                                    @if(isset($data['backlinks_alexa']))
                                        {{$data['backlinks_alexa']}}
                                    @endif



                                </div>

                            </div>




                            <div class="col-md-3 col-sm-4 col-xs-6 tile_stats_count">
                                <span class="count_top"> Statistics Graph</span>
                                <div class="count csg">

                                    @if(isset($data['backlinks_alexa']))
                                      {!! $data['getTrafficGraph'] !!}
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
                            Meta sucessfully created.
                        </div>
                    @endif
                    @if(Session::has('alert-danger'))
                        {{--<script> alert('Problem while creating.')</script>--}}
                        <div class="alert alert-success" role="alert">
                            Problem while creating.
                        </div>
                    @endif


                    @if(Session::has('alert-update-success'))
                        {{--<script> alert('Meta Updated Successfully.')</script>--}}
                        <div class="alert alert-success" role="alert">
                            Meta updated successfully.
                        </div>
                    @endif
                    @if(Session::has('alert-update-danger'))
                        {{--<script> alert('Problem while updating meta data.')</script>--}}
                        <div class="alert alert-success" role="alert">
                            Problem while updating meta data.
                        </div>
                    @endif



                    @if(Session::has('alert-delete'))
                        <div class="alert alert-success" role="alert">
                            Meta deleted sucessfully.
                        </div>
                        {{--<script>alert('Meta Sucessfully Deleted.')</script>--}}

                        @endif


                    @if(Session::has('alert-delete-fail'))
                        <div class="alert alert-success" role="alert">
                            Problem while deleting meta data.
                        </div>
                        {{--<script>alert('Problem while deleting meta data.')</script>--}}

                    @endif

                    {{--@endforeach--}}
                </div>



                <div class="x_panel">
                    <div class="x_title">
                        <h2>SEO  <small>Meta List</small></h2>

                        <div style="float: right;">
                            <a href="{{url('omaxeadmin/seo/create')}}" class="btn btn-success" style="background-color: #28a745; border-color: #28a745;" href=""><i class="fas fa-plus-square"></i>
                                Create Meta</a>
                        </div>

                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">











                        <table style="width: 100%;" id="datatable-buttons" class="table table-striped table-bordered">
                            <thead>
                            <tr>
                                <th>Id:</th>
                                <th>Url Name:</th>
                                <th>Meta&nbsp;Title:</th>
                                <th>Meta&nbsp;Keywords:</th>
                                <th>Meta&nbsp;Description:</th>
                                <th>Status:</th>
                                <th>:</th>



                            </tr>
                            </thead>


                            <tbody style="color: #000;">

                            @if($meta)

                                @foreach($meta as $metas)

                                    <tr>
                                        <td >
                                            {{$metas->id}}
                                        </td>

                                        <td style="width: 100px">{{$metas->url}}</td>
                                        <td>



                                            @if($metas->meta_title == null)

                                                <p style="color: red;">No Title Available</p>

                                            @else
                                                {{$metas->meta_title}}
                                            @endif


                                        </td>
                                        <td>

                                                @if($metas->meta_keywords == null)

                                                    <p style="color: red;">No Keywords Available</p>

                                                @else
                                                    {{$metas->meta_keywords}}
                                                @endif




                                        </td>
                                        <td>
                                            @if($metas->meta_description == null)

                                                <p style="color: red;">No Description Available</p>

                                            @else
                                                {{$metas->meta_description}}
                                            @endif


                                        </td>
                                        <td>
                                            @if($metas->meta_status == 1)


                                               {{--<p style="text-align:center;color: green; font-weight: bold;">Active</p>--}}

                                                <i class="fas fa-check-square" style="    font-size: 30px;
    color: green;margin-top: 40px;margin: 40px 0 0 10px; "></i>




                                            @else


                                                {{--<p style="text-align:center;color: red; font-weight: bold;">Deactive</p>--}}

                                                <i class="fa fa-window-close" style="    font-size: 30px;
    color: red;margin: 40px 0 0 10px;  "></i>




                                            @endif
                                           </td>
                                        <td>
                                            <a href="{{url('omaxeadmin/seo/edit/'.$metas->id)}}" style="width: 100%; margin-top: 20px;" class="btn btn-primary"><i class="far fa-edit"></i>Edit</a>


                                            <button style=" width: 100%; " data-toggle="modal" data-value="{{$metas->id}}" data-target="#exampleModal" class="btn btn-danger deletemodal"><i class="fas fa-trash-alt"></i></button>



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




    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">



                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Meta Delete</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Are you sure you want to delete this meta details?
                </div>
                {!! Form::open(array('action'=>'Admin\AdminSeoController@delete_meta_data','method'=>'post','enctype' => 'multipart/form-data','id'=>'contact_formm')) !!}
                <div class="modal-footer">

                    <input type="hidden" name="deletem">

                    <button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-danger">Delete</button>
                </div>

                {!! Form::close() !!}
            </div>
        </div>
    </div>


    <script>

        $(document).ready(function (e) {

            $(document).on("click", ".deletemodal", function (e) {

                var delete_id = $(this).attr('data-value');
                $('input[name="deletem"]').val(delete_id);

            });

        });




    </script>


@endsection




