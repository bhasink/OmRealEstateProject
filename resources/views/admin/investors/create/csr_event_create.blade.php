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
                        <h2>Investors <small>CSR Event Create</small></h2>

                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">

                        @if ($errors->any())
                            @foreach ($errors->all() as $error)
                                <div style="color: red;">{{$error}}</div>
                            @endforeach
                        @endif


                        {!! Form::open(array('action'=>'Admin\AdminInvestorController@csr_event_create_save','method'=>'post','id'=>'contact_formm','enctype' => 'multipart/form-data')) !!}



                        <div class="form-row">
                            <div class="col-md-8 mb-3">
                                <div class="form-group">
                                    <label class="col-md-12 control-label"><b>Investor Title:</b></label>
                                    <div class="col-md-12 inputGroupContainer">
                                        <div class="input-group">
                                                <span class="input-group-addon"><i class="glyphicon glyphicon-align-justify
"></i></span>
                                            <input required class="form-control"  type="text" name="investor_title" value="">



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
                                                <option value="2009-10">2009-10</option>
                                                <option value="2010-11">2010-11</option>
                                                <option value="2011-12">2011-12</option>
                                                <option value="2012-13">2012-13</option>
                                                <option value="2013-14">2013-14</option>
                                                <option value="2014-15">2014-15</option>
                                                <option value="2015-16">2015-16</option>
                                                <option value="2016-17">2016-17</option>
                                                <option value="2017-18">2017-18</option>
                                                <option value="2018-19">2018-19</option>


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
                                            <input required class="form-control" type="file" name="investor_pdf" value="">



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
                                        <a href="{{url('/omaxeadmin/investor/list/csr-event')}}" class="btn btn-primary"  style="padding: 10px;  margin-top: 20px;">Go Back</a>
                                        <button type="Create" style="padding: 10px; padding-left: 80px; padding-right: 80px; margin-top: 20px;" class="btn btn-success">Create <span class="glyphicon glyphicon-send"></span></button>
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




