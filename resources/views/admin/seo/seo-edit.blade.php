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
                        <h2>SEO  <small>Meta Edit</small></h2>

                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">

                        {!! Form::open(array('action'=>'Admin\AdminSeoController@update_meta_data','method'=>'post','id'=>'contact_formm','enctype' => 'multipart/form-data')) !!}


                        @if(isset($meta_details))


                        <div class="form-row">
                            <div class="col-md-8 mb-3">
                                <div class="form-group">
                                    <label class="col-md-12 control-label"><b>Url:</b></label>
                                    <div class="col-md-12 inputGroupContainer">
                                        <div class="input-group">
                                                <span class="input-group-addon"><i class="glyphicon glyphicon-align-justify
"></i></span>

                                            <input type="hidden" name="meta_id" value="{{$meta_details->id}}">

                                            <input name="url" placeholder="Enter Url... " class="form-control placeholder" value="{{$meta_details->url}}" required="required" type="text">

                                        </div>
                                        <span class="text-danger"></span>
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
                                            <textarea class="form-control  placeholder" rows="3" name="meta_title" placeholder="Meta Title... " onkeyup="textCounter(this,'counter',70);" id="message">{{$meta_details->meta_title}}</textarea>



                                        </div>

                                        <div style="float: right;">
                                            <label for="">Character Remaining</label>
                                            <input disabled  maxlength="3" size="3" value="" id="counter">
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
                                            <textarea class="form-control  placeholder" rows="3" value="" name="meta_description" placeholder="Meta Description... " onkeyup="textCounter(this,'counter1',300);" id="message1">{{$meta_details->meta_description}}</textarea>
                                        </div>
                                        <div style="float: right;">
                                            <label for="">Character Remaining</label>
                                            <input disabled  maxlength="3" size="3" value="" id="counter1">
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
                                            <textarea class="form-control  placeholder" rows="3" value="" name="meta_keywords" placeholder="Meta Keywords... " onkeyup="textCounter(this,'counter2',180);" id="message2">{{$meta_details->meta_keywords}}</textarea>
                                        </div>
                                        <div style="float: right;">
                                            <label for="">Character Remaining</label>
                                            <input disabled  maxlength="3" size="3" value="" id="counter2">
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
                                        <input type="radio" {{$meta_details->meta_status == "1" ? 'checked':''}} required="required" name="meta_status" value="1">
                                        <label style="color: red;" for="">Deactive</label>
                                        <input type="radio" required="required"  {{$meta_details->meta_status == "0" ? 'checked':''}}  name="meta_status" value="0">
                                    </div>

                                </div>
                            </div>


                        </div>

                        <div class="form-row">

                            <div class="col-md-8 mb-3">
                                <div class="form-group">

                                    <div class="col-md-12">
                                        <a href="{{url('/omaxeadmin/seo')}}" class="btn btn-primary"  style="padding: 10px;  margin-top: 20px;">Go Back</a>
                                        <button type="Create" style="padding: 10px; padding-left: 80px; padding-right: 80px; margin-top: 20px;" class="btn btn-success">Update <span class="glyphicon glyphicon-send"></span></button>
                                    </div>
                                </div>
                            </div>

                        </div>


                        @endif


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




