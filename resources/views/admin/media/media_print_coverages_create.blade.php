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
                        <h2>Media  <small>Print Coverages</small></h2>

                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">

                        {!! Form::open(array('action'=>'Admin\AdminMediaController@media_print_coverages_create_save','method'=>'post','id'=>'contact_formm','enctype' => 'multipart/form-data')) !!}





                            <div class="form-row">
                                <div class="col-md-8 mb-3">
                                    <div class="form-group">
                                        <label class="col-md-12 control-label"><b>Media Title:</b></label>
                                        <div class="col-md-12 inputGroupContainer">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="glyphicon glyphicon-align-justify
"></i></span>
                                                <input class="form-control"  type="text" name="media_title" >



                                            </div>
                                            <span class="text-danger"></span>
                                        </div>
                                    </div>
                                </div>

                            </div>



                            <div class="form-row">
                                <div class="col-md-8 mb-3">
                                    <div class="form-group">
                                        <label class="col-md-12 control-label"><b>Media Report Year:</b></label>
                                        <div class="col-md-12 inputGroupContainer">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="glyphicon glyphicon-align-justify
"></i></span>


                                                <select required class="form-control" name="media_report_year" id="">
                                                    <option value="">--Select Report Year--</option>
                                                    <option  value="2010">2010</option>
                                                    <option  value="2011">2011</option>
                                                    <option  value="2012">2012</option>
                                                    <option  value="2013">2013</option>
                                                    <option  value="2014">2014</option>
                                                    <option  value="2015">2015</option>
                                                    <option  value="2016">2016</option>
                                                    <option  value="2017">2017</option>
                                                    <option  value="2018">2018</option>
                                                    <option  value="2019">2019</option>


                                                </select>




                                            </div>
                                            <span class="text-danger"></span>
                                        </div>
                                    </div>
                                </div>

                            </div>



                            <div class="form-row">
                                <div class="col-md-8 mb-3">
                                    <div class="form-group">
                                        <label class="col-md-12 control-label"><b>Media Report QTR:</b></label>
                                        <div class="col-md-12 inputGroupContainer">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="glyphicon glyphicon-align-justify
"></i></span>



                                                <select required class="form-control" name="media_report_qtr" id="">
                                                    <option value="">--Select Report QTR--</option>
                                                    <option  value="Jan">Jan</option>
                                                    <option   value="Feb">Feb</option>
                                                    <option  value="Mar">Mar</option>
                                                    <option  value="Apr">Apr</option>
                                                    <option  value="May">May</option>
                                                    <option  value="Jun">Jun</option>
                                                    <option  value="Jul">Jul</option>
                                                    <option  value="Aug">Aug</option>
                                                    <option  value="Sep">Sep</option>
                                                    <option  value="Oct">Oct</option>
                                                    <option  value="Nov">Nov</option>
                                                    <option  value="Dec">Dec</option>


                                                </select>


                                            </div>
                                            <span class="text-danger"></span>
                                        </div>
                                    </div>
                                </div>

                            </div>




                            <div class="form-row">
                                <div class="col-md-8 mb-3">
                                    <div class="form-group">
                                        <label class="col-md-12 control-label"><b>Media Image:</b></label>
                                        <div class="col-md-12 inputGroupContainer">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="glyphicon glyphicon-align-justify
"></i></span>

                                                <input class="form-control"  type="file" name="media_image" >



                                            </div>
                                            <span class="text-danger"></span>
                                        </div>
                                    </div>
                                </div>

                            </div>










                            <div class="form-row">

                                <div class="col-md-8 mb-3">
                                    <div class="form-group">

                                        <div class="col-md-12">
                                            <a href="{{url('/omaxeadmin/media/list/print-coverages')}}" class="btn btn-primary"  style="padding: 10px;  margin-top: 20px;">Go Back</a>
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




