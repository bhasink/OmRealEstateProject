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
                        <h2>Media  <small>Ad Campaign Edit</small></h2>

                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">

                        {!! Form::open(array('action'=>'Admin\AdminMediaController@media_press_releases_edit_save','method'=>'post','id'=>'contact_formm','enctype' => 'multipart/form-data')) !!}


                        @if(isset($get_media_ad_campaign_data))


                            <div class="form-row">
                                <div class="col-md-8 mb-3">
                                    <div class="form-group">
                                        <label class="col-md-12 control-label"><b>Media Ad Campaign Id:</b></label>
                                        <div class="col-md-12 inputGroupContainer">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="glyphicon glyphicon-align-justify
"></i></span>
                                                <input type="hidden" name="page_name" value="media-videos">
                                                <input class="form-control" readonly type="text" name="media_id" value="{{$get_media_ad_campaign_data->id}}">



                                            </div>
                                            <span class="text-danger"></span>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="form-row">
                                <div class="col-md-8 mb-3">
                                    <div class="form-group">
                                        <label class="col-md-12 control-label"><b>Media Title:</b></label>
                                        <div class="col-md-12 inputGroupContainer">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="glyphicon glyphicon-align-justify
"></i></span>
                                                <input class="form-control"  type="text" name="media_title" value="{{$get_media_ad_campaign_data->media_title}}">



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
                                                    <option {{$get_media_ad_campaign_data->report_year=='2010'?'selected':''}} value="2010">2010</option>
                                                    <option {{$get_media_ad_campaign_data->report_year=='2011'?'selected':''}} value="2011">2011</option>
                                                    <option {{$get_media_ad_campaign_data->report_year=='2012'?'selected':''}} value="2012">2012</option>
                                                    <option {{$get_media_ad_campaign_data->report_year=='2013'?'selected':''}} value="2013">2013</option>
                                                    <option {{$get_media_ad_campaign_data->report_year=='2014'?'selected':''}} value="2014">2014</option>
                                                    <option {{$get_media_ad_campaign_data->report_year=='2015'?'selected':''}} value="2015">2015</option>
                                                    <option {{$get_media_ad_campaign_data->report_year=='2016'?'selected':''}} value="2016">2016</option>
                                                    <option {{$get_media_ad_campaign_data->report_year=='2017'?'selected':''}} value="2017">2017</option>
                                                    <option {{$get_media_ad_campaign_data->report_year=='2018'?'selected':''}} value="2018">2018</option>
                                                    <option {{$get_media_ad_campaign_data->report_year=='2019'?'selected':''}} value="2019">2019</option>


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
                                                    <option {{$get_media_ad_campaign_data->report_qtr=='Jan-Mar'?'selected':''}}  value="Jan-Mar">Jan-Mar</option>
                                                    <option {{$get_media_ad_campaign_data->report_qtr=='Apr-June'?'selected':''}}  value="Apr-June">Apr-June</option>
                                                    <option {{$get_media_ad_campaign_data->report_qtr=='Jul-Sep'?'selected':''}}  value="Jul-Sep">Jul-Sep</option>
                                                    <option {{$get_media_ad_campaign_data->report_qtr=='Oct-Dec'?'selected':''}}  value="Oct-Dec">Oct-Dec</option>


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
                                                <img style="margin: 10px;" width="100" height="100" src="/media/images/{{$get_media_ad_campaign_data->media_image}}" alt="">
                                                <input class="form-control"  type="file" name="media_image" value="{{$get_media_ad_campaign_data->media_image}}">



                                            </div>
                                            <span class="text-danger"></span>
                                        </div>
                                    </div>
                                </div>

                            </div>



                            <div class="form-row">
                                <div class="col-md-8 mb-3">
                                    <div class="form-group">
                                        <label class="col-md-12 control-label"><b>Media PDF:</b></label>
                                        <div class="col-md-12 inputGroupContainer">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="glyphicon glyphicon-align-justify
"></i></span>
                                                <a style="margin: 10px;" href="/media/pdf/{{$get_media_ad_campaign_data->media_pdf}}" class="btn btn-primary">Media Pdf</a>
                                                <input class="form-control"  type="file" name="media_pdf" value="{{$get_media_ad_campaign_data->media_pdf}}">



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
                                            <a href="{{url('/omaxeadmin/media/list/media-videos')}}" class="btn btn-primary"  style="padding: 10px;  margin-top: 20px;">Go Back</a>
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




