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
                {{--<h3>Seo meta create <small></small></h3>--}}
            {{--</div>--}}

        {{--</div>--}}

        <div class="clearfix"></div>

        <div class="row">




            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>SEO  <small>Meta Create</small></h2>

                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">


                            @if(($errors->first('url')))

                                <div class="alert alert-danger" role="alert">
                                  Form errors please check below.
                                </div>

                            @endif

                        {!! Form::open(array('action'=>'Admin\AdminSeoController@store_meta_data','method'=>'post','id'=>'contact_formm','enctype' => 'multipart/form-data')) !!}

                            <div class="form-row">
                                <div class="col-md-8 mb-3">
                                    <div class="form-group">
                                        <label class="col-md-12 control-label"><b>Url:</b></label>
                                        <div class="col-md-12 inputGroupContainer">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="glyphicon glyphicon-align-justify
"></i></span>

                                                <input name="url" placeholder="Enter Url... " class="form-control placeholder" value="" required="required" type="text">


                                            </div>
                                            <span class="text-danger">{{ $errors->first('url') }}</span>
                                        </div>
                                    </div>
                                </div>



                            </div>





                            <div class="form-row">



                                <div class="col-md-8 mb-3">
                                    <div class="form-group">
                                        <label class="col-md-12 control-label"><b>Meta Title:</b></label>
                                        <div class="col-md-12 inputGroupContainer">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                                                <textarea class="form-control  placeholder" rows="3" name="meta_title" value="" placeholder="Meta Title... " onkeyup="textCounter(this,'counter',70);" id="message"></textarea>



                                            </div>

                                            <div style="float: right;">
                                            <label for="">Character Remaining</label>
                                            <input disabled  maxlength="3" size="3" value="70" id="counter">
                                            </div>

                                            <span class="text-danger"></span>
                                        </div>
                                    </div>
                                </div>





                                <div class="col-md-8 mb-3">
                                    <div class="form-group">
                                        <label class="col-md-12 control-label"><b>Meta Description:</b></label>
                                        <div class="col-md-12 inputGroupContainer">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                                                <textarea class="form-control  placeholder" rows="3" value="" name="meta_description" placeholder="Meta Description... " onkeyup="textCounter(this,'counter1',300);" id="message1"></textarea>
                                            </div>
                                            <div style="float: right;">
                                                <label for="">Character Remaining</label>
                                                <input disabled  maxlength="3" size="3" value="300" id="counter1">
                                            </div>
                                            <span class="text-danger"></span>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="form-row">

                                <div class="col-md-8 mb-3">
                                    <div class="form-group">
                                        <label class="col-md-12 control-label"><b>Meta Keywords:</b></label>
                                        <div class="col-md-12 inputGroupContainer">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                                                <textarea class="form-control  placeholder" rows="3" value="" name="meta_keywords" placeholder="Meta Keywords... " onkeyup="textCounter(this,'counter2',180);" id="message2"></textarea>
                                            </div>
                                            <div style="float: right;">
                                                <label for="">Character Remaining</label>
                                                <input disabled  maxlength="3" size="3" value="180" id="counter2">
                                            </div>
                                            <span class="text-danger"></span>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-md-8 mb-3">
                                    <div class="form-group" >
                                        <label class="col-md-12 control-label">Meta Status:</label>
                                        <div class="col-md-12">
                                        </div>
                                            <div style="padding: 13px;">
                                                <label style="color: green;" for="">Active</label>
                                                <input type="radio" required="required" name="meta_status" value="1">
                                                <label style="color: red;" for="">Deactive</label>
                                                <input type="radio" required="required"  name="meta_status" value="0">
                                            </div>

                                    </div>
                                </div>


                            </div>

                            <div class="form-row">

                                <div class="col-md-8 mb-3">
                                    <div class="form-group">

                                        <div class="col-md-12">
                                            <a href="{{url('/omaxeadmin/seo')}}" class="btn btn-primary"  style="padding: 9px;  margin-top: 20px;">Go Back</a>
                                            <button type="Create" style="padding: 10px; padding-left: 80px; padding-right: 80px; margin-top: 20px;background-color: #28a745; border-color: #28a745;" class="btn btn-success">Create <span class="glyphicon glyphicon-send"></span></button>
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

        window.Laravel =
        <?php

            echo json_encode(
                [

               'csrfToken' => csrf_token(),
            ]
            );
        ?>

    </script>

    <script src="{{asset('js/app.js')}}"></script>

@endsection