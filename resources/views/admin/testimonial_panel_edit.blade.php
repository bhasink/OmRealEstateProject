@extends('admin.layouts.layout')



@section('content')
    <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css">

    <style>
        th{
            text-align:center;
        }
    </style>

    <div class="" id="app">
        {{--<div class="page-title">--}}
        {{--<div class="title_left">--}}
        {{--<h3>Seo meta edit <small></small></h3>--}}
        {{--</div>--}}

        {{--</div>--}}

        <div class="clearfix"></div>

        <div class="row">




            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Testimonial Edit<small>Panel Edit</small></h2>

                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">

                        @if ($errors->any())
                            @foreach ($errors->all() as $error)
                                <div style="color: red;">{{$error}}</div>
                            @endforeach
                        @endif

                        {!! Form::open(array('action'=>'Admin\AdminInvestorController@testimonial_panel_edit_save','method'=>'post','id'=>'contact_formm','enctype' => 'multipart/form-data')) !!}


                        @if(isset($check_testimonial_tab))

                            <div class="form-row">
                                <div class="col-md-8 mb-3">
                                    <div class="form-group">
                                        <label class="col-md-12 control-label"><b>Testimonial User:</b></label>
                                        <div class="col-md-12 inputGroupContainer">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="glyphicon glyphicon-align-justify
"></i></span>
                                                <input required class="form-control"  type="hidden" name="testimonial_id" value="{{$check_testimonial_tab->id}}">

                                                <input required class="form-control"  type="text" name="testimonial_user" value="{{$check_testimonial_tab->testimonial_user}}">



                                            </div>
                                            <span class="text-danger"></span>
                                        </div>
                                    </div>
                                </div>

                            </div>




                            <div class="form-row">
                                <div class="col-md-8 mb-3">
                                    <div class="form-group">
                                        <label class="col-md-12 control-label"><b>Project Name:</b></label>
                                        <div class="col-md-12 inputGroupContainer">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="glyphicon glyphicon-align-justify
"></i></span>
                                                <input required class="form-control"  type="text" name="project_name" value="{{$check_testimonial_tab->project_name}}">



                                            </div>
                                            <span class="text-danger"></span>
                                        </div>
                                    </div>
                                </div>

                            </div>


                            <div class="form-row">
                                <div class="col-md-8 mb-3">
                                    <div class="form-group">
                                        <label class="col-md-12 control-label"><b>Testimonial Description:</b></label>
                                        <div class="col-md-12 inputGroupContainer">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="glyphicon glyphicon-align-justify
"></i></span>
                                                <input required class="form-control"  type="text" name="testimonial_description" value="{{$check_testimonial_tab->testimonial_description}}">



                                            </div>
                                            <span class="text-danger"></span>
                                        </div>
                                    </div>
                                </div>

                            </div>




                            <div class="form-row">
                                <div class="col-md-8 mb-3">
                                    <div class="form-group">
                                        <label class="col-md-12 control-label"><b>User  Image:</b></label>
                                        <div class="col-md-12 inputGroupContainer">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="glyphicon glyphicon-align-justify
"></i></span>


                                                <img style="margin: 10px;" width="100" height="100" src="/images/static/{{$check_testimonial_tab->project_image}}" alt="">
                                                <input  class="form-control" type="file" name="project_image" value="">


                                            </div>
                                            <span class="text-danger"></span>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        @endif






                        <div class="form-row">

                            <div class="col-md-8 mb-3">
                                <div class="form-group">

                                    <div class="col-md-12">
                                        <a href="{{url('/omaxeadmin/acheivement-panel/list')}}" class="btn btn-primary"  style="padding: 10px;  margin-top: 20px;">Go Back</a>
                                        <button type="Create" style="padding: 10px; padding-left: 80px; padding-right: 80px; margin-top: 20px;" class="btn btn-success">Update <span class="glyphicon glyphicon-send"></span></button>
                                    </div>
                                </div>
                            </div>

                        </div>





                        {!! Form::close() !!}

                    </div>
                </div>
            </div>

        </div>
    </div>


    <script>
        function textCounter(field,field2,maxlimit)
        {
            var countfield = document.getElementById(field2);
            if ( field.value.length > maxlimit ) {
                field.value = field.value.substring( 0, maxlimit );
                return false;
            } else {
                countfield.value = maxlimit - field.value.length;
            }
        }


    </script>


    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]);
        ?>
    </script>

    <script src="{{asset('js/app.js')}}"></script>




@endsection