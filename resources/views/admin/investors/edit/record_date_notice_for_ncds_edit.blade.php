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
                        <h2>Investors <small>Record date notice for NCD's Edit</small></h2>

                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">

                        @if ($errors->any())
                            @foreach ($errors->all() as $error)
                                <div style="color: red;">{{$error}}</div>
                            @endforeach
                        @endif

                        {!! Form::open(array('action'=>'Admin\AdminInvestorController@record_date_notice_for_ncds_report_edit_save','method'=>'post','id'=>'contact_formm','enctype' => 'multipart/form-data')) !!}


                        @if(isset($get_investor_data))


                        <div class="form-row">
                            <div class="col-md-8 mb-3">
                                <div class="form-group">
                                    <label class="col-md-12 control-label"><b>Investor Title:</b></label>
                                    <div class="col-md-12 inputGroupContainer">
                                        <div class="input-group">
                                                <span class="input-group-addon"><i class="glyphicon glyphicon-align-justify
"></i></span>
                                            <input required class="form-control"  type="hidden" name="investor_id" value="{{$get_investor_data->id}}">

                                            <input required class="form-control"  type="text" name="investor_title" value="{{$get_investor_data->investors_title}}">



                                        </div>
                                        <span class="text-danger"></span>
                                    </div>
                                </div>
                            </div>

                        </div>


                        <div class="form-row">
                            <div class="col-md-8 mb-3">
                                <div class="form-group">
                                    <label class="col-md-12 control-label"><b>Investor Report Year:</b></label>
                                    <div class="col-md-12 inputGroupContainer">
                                        <div class="input-group">
                                                <span class="input-group-addon"><i class="glyphicon glyphicon-align-justify
"></i></span>


                                            <select required class="form-control" name="investor_report_year" id="">
                                                <option value="">--Select Report Year--</option>
                                                <option value="2009-10" {{$get_investor_data->report_year=='2009-10'?'selected':''}} >2009-10</option>
                                                <option value="2010-11" {{$get_investor_data->report_year=='2010-11'?'selected':''}} >2010-11</option>
                                                <option value="2011-12" {{$get_investor_data->report_year=='2011-12'?'selected':''}} >2011-12</option>
                                                <option value="2012-13" {{$get_investor_data->report_year=='2012-13'?'selected':''}} >2012-13</option>
                                                <option value="2013-14" {{$get_investor_data->report_year=='2013-14'?'selected':''}} >2013-14</option>
                                                <option value="2014-15" {{$get_investor_data->report_year=='2014-15'?'selected':''}} >2014-15</option>
                                                <option value="2015-16" {{$get_investor_data->report_year=='2015-16'?'selected':''}} >2015-16</option>
                                                <option value="2016-17" {{$get_investor_data->report_year=='2016-17'?'selected':''}} >2016-17</option>
                                                <option value="2017-18" {{$get_investor_data->report_year=='2017-18'?'selected':''}} >2017-18</option>
                                                <option value="2018-19" {{$get_investor_data->report_year=='2018-19'?'selected':''}} >2018-19</option>


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
                                    <label class="col-md-12 control-label"><b>Upload Investor PDF:</b></label>
                                    <div class="col-md-12 inputGroupContainer">
                                        <div class="input-group">
                                                <span class="input-group-addon"><i class="glyphicon glyphicon-align-justify
"></i></span>
                                            <a style="margin: 10px;" href="/investors/pdf/{{$get_investor_data->inv_pdf}}" class="btn btn-primary">Investor Pdf</a>
                                            <input class="form-control"  type="file" name="investor_pdf" value="{{$get_investor_data->inv_pdf}}">



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
                                        <a href="{{url('/omaxeadmin/investor/list/record-date-notice-for-ncds')}}" class="btn btn-primary"  style="padding: 10px;  margin-top: 20px;">Go Back</a>
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




