@extends('admin.layouts.layout')

<script language=" JavaScript" >
    <!--
    function LoadOnce()
    {
        window.location.reload();
    }
    //-->
</script>

@section('content')
    <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css">
    <script src="https://cdn.tinymce.com/4/tinymce.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/min/dropzone.min.css">
    {{--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>--}}

    <style>
        th{
            text-align:center;
        }

        .ms-choice {
            border: none !important;
        }
        .ms-parent.form-control {
            z-index: 99999999 !important;
        }
        .ms-drop.bottom ul li span {
            padding: 10px;
        }


    </style>

    <div class="" id="app">
        {{--<div class="page-title">--}}
        {{--<div class="title_left">--}}
        {{--<h3>Seo meta create <small></small></h3>--}}
        {{--</div>--}}

        {{--</div>--}}

        <div class="clearfix"></div>

        <div class="row" >




            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>PROJECT  <small>Edit</small></h2>

                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">


                        @if(($errors->first('url')))

                            <div class="alert alert-danger" role="alert">
                                Form errors please check below.
                            </div>

                        @endif

                        {!! Form::open(array('action'=>'Admin\AdminProjectContactController@save_project_edit','method'=>'post','id'=>'contact_formm','enctype' => 'multipart/form-data')) !!}

                        <div class="row form-row ">

                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <label class="col-md-12 control-label"><b>Project Title:</b></label>
                                    <div class="col-md-12 inputGroupContainer">
                                        <div class="input-group">
                                                <span class="input-group-addon"><i class="glyphicon glyphicon-align-justify
"></i></span>

                                            <input type="hidden" name="projects_id" value="{{$data['get_project_details']['id']}}">

                                            <input name="project_title" placeholder="Enter Project Title... " class="form-control placeholder" value="{{$data['get_project_details']['project_title']}}"  type="text">

                                            <div id="boatAddForm"></div>


                                        </div>
                                        <span class="text-danger">{{ $errors->first('project_title') }}</span>
                                    </div>
                                </div>
                            </div>



                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <label class="col-md-12 control-label"><b>Project Slug:</b></label>
                                    <div class="col-md-12 inputGroupContainer">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-align-justify"></i></span>
                                            <input name="url" placeholder="Project Slug... " class="form-control placeholder" value="{{$data['get_project_details']['project_slug']}}"  type="text">


                                        </div>
                                        <span class="text-danger">{{ $errors->first('url') }}</span>
                                    </div>
                                </div>
                            </div>




                        </div>




                        <div class="row form-row ">




                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <label class="col-md-12 control-label"><b>Project Video Link:</b></label>
                                    <div class="col-md-12 inputGroupContainer">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                                            {{--<textarea class="form-control  placeholder" rows="3" value="" name="meta_description" placeholder="Meta Description... " onkeyup="textCounter(this,'counter1',300);" id="message1"></textarea>--}}


                                            <input name="project_video_link" placeholder="Project Video Link... " class="form-control placeholder" value="{{$data['get_project_details']['project_video_link']}}"  type="text">


                                        </div>

                                        <span class="text-danger">{{ $errors->first('project_video_link') }}</span>
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <label class="col-md-12 control-label"><b>Project Map Link:</b></label>
                                    <div class="col-md-12 inputGroupContainer">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                                            {{--<textarea class="form-control  placeholder" rows="3" value="" name="meta_keywords" placeholder="Meta Keywords... " onkeyup="textCounter(this,'counter2',180);" id="message2"></textarea>--}}

                                            <input name="project_map_link" placeholder="Project Map Link... " class="form-control placeholder" value="{{$data['get_project_details']['project_map_link']}}"  type="text">


                                        </div>

                                        <span class="text-danger">{{ $errors->first('project_map_link') }}</span>
                                    </div>
                                </div>
                            </div>



                        </div>

                        <div class="row form-row ">


                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <label class="col-md-12 control-label"><b>Price Range:</b></label>
                                    <div class="col-md-12 inputGroupContainer">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                                            <select class="form-control" name="price_range[]" id="ms3" multiple="multiple">

                                                <option  {{in_array('4999999',$data['get_price'])?'selected':''}} value="4999999">Under 50 Lakh</option>
                                                <option  {{in_array('9999999',$data['get_price'])?'selected':''}}  value="9999999">Above 50 Lakh</option>
                                                <option  {{in_array('10000000',$data['get_price'])?'selected':''}}   value="10000000">1 CR Above</option>



                                            </select>
                                        </div>


                                        <span class="text-danger"></span>

                                    </div>
                                </div>
                            </div>



                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <label class="col-md-12 control-label"><b>Project City:</b></label>
                                    <div class="col-md-12 inputGroupContainer">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                                            {{--<textarea class="form-control  placeholder" rows="3" value="" name="meta_keywords" placeholder="Meta Keywords... " onkeyup="textCounter(this,'counter2',180);" id="message2"></textarea>--}}

                                            {{--{{dd($data['get_project_details']['project_city_id'])}}--}}

                                            <select class="form-control"  name="project_city" id="">
                                                <option value="">--Select Project City--</option>

                                                @if(isset($data['get_project_cities']))


                                                    @foreach($data['get_project_cities'] as $key=>$city)

                                                        <option value="{{$city['id']}}" {{$data['get_project_details']['project_city_id']==$city['id']?'selected':''}}>{{$city['name']}}</option>


                                                    @endforeach


                                                @endif

                                            </select>

                                        </div>

                                        <span class="text-danger">{{ $errors->first('project_city') }}</span>

                                    </div>
                                </div>
                            </div>


                        </div>



                        <div class="row form-row ">


                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <label class="col-md-12 control-label"><b>Project State:</b></label>
                                    <div class="col-md-12 inputGroupContainer">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                                            {{--<textarea class="form-control  placeholder" rows="3" value="" name="meta_keywords" placeholder="Meta Keywords... " onkeyup="textCounter(this,'counter2',180);" id="message2"></textarea>--}}

                                            <select class="form-control"  name="project_state" id="">
                                                <option value="">--Select Project State--</option>
                                                @if(isset($data['get_project_state']))


                                                    @foreach($data['get_project_state'] as $key=>$states)

                                                        <option value="{{$states['id']}}" {{$data['get_project_details']['project_state_id']==$states['id']?'selected':''}}>{{$states['name']}}</option>


                                                    @endforeach


                                                @endif

                                            </select>

                                        </div>
                                        <span class="text-danger">{{ $errors->first('project_state') }}</span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <label class="col-md-12 control-label"><b>Project Status:</b></label>
                                    <div class="col-md-12 inputGroupContainer">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                                            {{--<textarea class="form-control  placeholder" rows="3" value="" name="meta_keywords" placeholder="Meta Keywords... " onkeyup="textCounter(this,'counter2',180);" id="message2"></textarea>--}}

                                            <select class="form-control"  name="project_status" id="">
                                                <option value="">--Select Project Status--</option>
                                                <option {{$data['get_project_details']['project_status_id']==1?'selected':''}}  value="1">Current</option>
                                                <option {{$data['get_project_details']['project_status_id']==3?'selected':''}}  value="3">Delivered</option>

                                            </select>


                                        </div>

                                        <span class="text-danger">{{ $errors->first('project_status') }}</span>
                                    </div>
                                </div>
                            </div>





                        </div>


                        <div class="row form-row ">


                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <label class="col-md-12 control-label"><b>Project Category:</b></label>
                                    <div class="col-md-12 inputGroupContainer">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                                            {{--<textarea class="form-control  placeholder" rows="3" value="" name="meta_keywords" placeholder="Meta Keywords... " onkeyup="textCounter(this,'counter2',180);" id="message2"></textarea>--}}

                                            <select class="form-control"  name="project_category" id="">
                                                <option value="">--Select Project Category--</option>
                                                <option {{$data['get_project_details']['project_category_id']==1?'selected':''}} value="1">Hot Selling properties</option>
                                                <option {{$data['get_project_details']['project_category_id']==2?'selected':''}} value="2">Ready To Move In</option>
                                                <option {{$data['get_project_details']['project_category_id']==3?'selected':''}} value="3">Delivered</option>
                                            </select>

                                        </div>

                                        <span class="text-danger">{{ $errors->first('project_category') }}</span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <label class="col-md-12 control-label"><b>Project Stamp:</b></label>
                                    <div class="col-md-12 inputGroupContainer">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                                            {{--<textarea class="form-control  placeholder" rows="3" value="" name="meta_keywords" placeholder="Meta Keywords... " onkeyup="textCounter(this,'counter2',180);" id="message2"></textarea>--}}

                                            <select class="form-control"  name="project_stamp" id="">
                                                <option value="">--Select Project Stamp--</option>



                                                @if(isset($data['get_project_stamp']))


                                                    @foreach($data['get_project_stamp'] as $key=>$stamp)

                                                        <option value="{{$stamp['id']}}" {{$data['get_project_details']['project_stamp_id']==$stamp['id']?'selected':''}}>{{$stamp['project_category_name']}}</option>


                                                    @endforeach


                                                @endif



                                            </select>

                                        </div>

                                        <span class="text-danger">{{ $errors->first('project_stamp') }}</span>
                                    </div>
                                </div>
                            </div>

                        </div>


                        <div class="row form-row ">


                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <label class="col-md-12 control-label"><b>Project Type:</b></label>
                                    <div class="col-md-12 inputGroupContainer">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                                            {{--<textarea class="form-control  placeholder" rows="3" value="" name="meta_keywords" placeholder="Meta Keywords... " onkeyup="textCounter(this,'counter2',180);" id="message2"></textarea>--}}

                                            <select class="form-control"  name="project_type" id="">
                                                <option value="">--Select Project Type--</option>

                                                @if(isset($data['get_project_type']))


                                                    @foreach($data['get_project_type'] as $key=>$project_type)

                                                        <option value="{{$project_type['id']}}" {{$data['get_project_details']['project_type_id']==$project_type['id']?'selected':''}}>{{$project_type['name']}}</option>


                                                    @endforeach


                                                @endif

                                            </select>

                                        </div>

                                        <span class="text-danger">{{ $errors->first('project_type') }}</span>
                                    </div>
                                </div>
                            </div>



                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <label class="col-md-12 control-label"><b>Project Features:</b></label>
                                    <div class="col-md-12 inputGroupContainer">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                                            {{--                                            {{dd($data['get_project_features'])}}--}}

                                            <select class="form-control" name="project_features[]" id="ms" multiple="multiple">
                                                @if(isset($data['get_project_features']))



                                                    <?php

                                                    $feature = array_flip($data['get_project_features_check']);

                                                    ?>

                                                    @foreach($data['get_project_features'] as $key=>$project_features)

                                                        {{--@foreach($data['get_project_features_check'] as $check)--}}


                                                        <option value="{{$project_features['id']}}" {{isset($feature[$project_features['name']])?'selected':''}}>{{$project_features['name']}}</option>




                                                        {{--@endforeach--}}

                                                    @endforeach


                                                @endif
                                            </select>
                                        </div>


                                        <span class="text-danger">{{ $errors->first('project_features.0') }}</span>

                                    </div>
                                </div>
                            </div>



                        </div>


                        <div class="row form-row ">


                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <label class="col-md-12 control-label"><b>Project Specifications:</b></label>
                                    <div class="col-md-12 inputGroupContainer">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>


                                            <select name="project_specification[]" class="form-control" id="ms2" multiple="multiple">
                                                @if(isset($data['get_project_specification']))

                                                    <?php

                                                    $spec = array_flip($data['get_project_specification_check']);

                                                    ?>


                                                    @foreach($data['get_project_specification'] as $key=>$project_specification)

                                                        <option value="{{$project_specification['id']}}" {{isset($spec[$project_specification['name']])?'selected':''}}>{{$project_specification['name']}}</option>


                                                    @endforeach


                                                @endif
                                            </select>
                                        </div>


                                        <span class="text-danger">{{ $errors->first('project_specification.0') }}</span>


                                    </div>
                                </div>
                            </div>


                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <br><br><br><br>
                                </div>
                            </div>



                        </div>


                        <div class="row form-row ">

                            <div class="col-md-12 mb-12">
                                <div class="form-group">
                                    <label class="col-md-12 control-label"><b>Project Descriptions:</b></label>
                                    <div class="col-md-12 inputGroupContainer">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>

                                            <textarea class="form-control  placeholder"  name="project_description" placeholder="Project Description... "  id="message">{{$data['get_project_details']['project_description']}}</textarea>

                                        </div>


                                        <span class="text-danger">{{ $errors->first('project_description') }}</span>
                                        <br><br><br><br><br>
                                    </div>
                                </div>
                            </div>

                        </div>


                        <div class="row form-row ">



                            {{--<h5>Project Images</h5>--}}

                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <label class="col-md-12 control-label"><b>Project Logo:</b></label>
                                    <div class="col-md-12 inputGroupContainer">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i>
                                           <a target="_blank
" href="/images/project_logo/{{$data['get_project_details']['project_logo']}}">  <img width="100" height="50" src="/images/project_logo/{{$data['get_project_details']['project_logo']}}" alt="">
</a>
                                            </span>
                                            {{--<textarea class="form-control  placeholder" rows="3" value="" name="meta_keywords" placeholder="Meta Keywords... " onkeyup="textCounter(this,'counter2',180);" id="message2"></textarea>--}}



                                            <input type="file" value="{{$data['get_project_details']['project_logo']}}" name="project_logo" class="form-control" >

                                        </div>

                                        <span class="text-danger">{{ $errors->first('project_logo') }}</span>

                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <label class="col-md-12 control-label"><b>Project Banner Image:</b></label>
                                    <div class="col-md-12 inputGroupContainer">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i>
                                                <a target="_blank" href="/images/website_banner/{{$data['get_project_details']['banner_image']}}">
                                                        <img width="100" height="50" src="/images/website_banner/{{$data['get_project_details']['banner_image']}}" alt="">
                                                    </a>
                                            </span>
                                            {{--<textarea class="form-control  placeholder" rows="3" value="" name="meta_keywords" placeholder="Meta Keywords... " onkeyup="textCounter(this,'counter2',180);" id="message2"></textarea>--}}


                                            <input type="file" name="banner_image" class="form-control" value="{{$data['get_project_details']['banner_image']}}" >


                                        </div>

                                        <span class="text-danger">{{ $errors->first('banner_image') }}</span>

                                    </div>
                                </div>
                            </div>

                        </div>


                        <div class=" row form-row ">



                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <label class="col-md-12 control-label"><b>Project RTGS Image:</b></label>
                                    <div class="col-md-12 inputGroupContainer">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i>
                                                
                                                @if($data['get_project_ProjectRTGS']['rtgs_image'])
                                                <a target="_blank" href="/images/rtgs/{{ $data['get_project_ProjectRTGS']['rtgs_image']}}">
                                                    <img width="100" height="50" src="/images/rtgs/{{ $data['get_project_ProjectRTGS']['rtgs_image']}}" alt="">
                                                </a>

                                                @endif
                                            </span>
                                            {{--<textarea class="form-control  placeholder" rows="3" value="" name="meta_keywords" placeholder="Meta Keywords... " onkeyup="textCounter(this,'counter2',180);" id="message2"></textarea>--}}



                                            <input type="file" value="{{old('project_rtgs_image')}}" name="project_rtgs_image" class="form-control" >

                                        </div>

                                        <span class="text-danger">{{ $errors->first('project_rtgs_image') }}</span>

                                    </div>
                                </div>
                            </div>


                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <label class="col-md-12 control-label"><b>Project E-brochure:</b></label>
                                    <div class="col-md-12 inputGroupContainer">
                                        <div class="input-group">
                                            <span style="padding: 10px;"  class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i>

                                                @if($data['get_project_Ebrochure'] !=null)

                                            <a class="btn btn-primary" target="_blank" href="/ebrochures/{{$data['get_project_Ebrochure']->brouchure_pdf}}">Ebrochure</a>


                                                    @endif
                                            
                                            </span>
                                            {{--<textarea class="form-control  placeholder" rows="3" value="" name="meta_keywords" placeholder="Meta Keywords... " onkeyup="textCounter(this,'counter2',180);" id="message2"></textarea>--}}

                                            <input type="file" value="{{old('e_brochure')}}" name="e_brochure" class="form-control" >


                                        </div>

                                        <span class="text-danger">{{ $errors->first('e_brochure') }}</span>

                                    </div>
                                </div>
                            </div>


                        </div>


                        <div class="row form-row ">


                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <label class="col-md-12 control-label"><b>Project Bank Images:</b></label>
                                    <div class="col-md-12 inputGroupContainer">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                                            <select class="form-control" name="project_bank_images[]" id="ms11" multiple="multiple">
                                                <option value="hdfc_bank_logo.png">HDFC Bank Home Loans</option>
                                                <option {{in_array('sbi_logo.png',$data['get_bank_images'])?'selected':''}} value="sbi_logo.png">SBI Bank</option>
                                                <option {{in_array('idb_logo.png',$data['get_bank_images'])?'selected':''}} value="idb_logo.png">IDBI Bank</option>
                                                <option {{in_array('iif_logo.png',$data['get_bank_images'])?'selected':''}} value="iif_logo.png">IIFL</option>
                                                <option {{in_array('iob_logo.png',$data['get_bank_images'])?'selected':''}} value="iob_logo.png">Indian Overseas Bank</option>
                                                <option {{in_array('dhf_logo.png',$data['get_bank_images'])?'selected':''}} value="dhf_logo.png">DHFL</option>
                                                <option {{in_array('ici_logo.png',$data['get_bank_images'])?'selected':''}} value="ici_logo.png">ICICI Bank</option>
                                                <option {{in_array('ubi_logo.png',$data['get_bank_images'])?'selected':''}} value="ubi_logo.png">United Bank Of India</option>
                                                <option {{in_array('pnb_housing_logo.png',$data['get_bank_images'])?'selected':''}} value="pnb_housing_logo.png">PNB Housing</option>
                                                <option {{in_array('tat_logo.png',$data['get_bank_images'])?'selected':''}} value="tat_logo.png">TATA CAPITAL</option>
                                                <option {{in_array('axi_logo.png',$data['get_bank_images'])?'selected':''}} value="axi_logo.png">AXIS Bank</option>
                                                <option {{in_array('can_logo.png',$data['get_bank_images'])?'selected':''}} value="can_logo.png">Canara Bank</option>
                                                <option {{in_array('lic_hfl_logo.png',$data['get_bank_images'])?'selected':''}} value="lic_hfl_logo.png">LIC HFL</option>




                                            </select>
                                        </div>


                                        <span class="text-danger">{{ $errors->first('project_bank_images.0') }}</span>

                                    </div>
                                </div>
                            </div>


                            {{--<div class="col-md-6 mb-3">--}}
                                {{--<div class="form-group">--}}

                                    {{--<span class="text-danger"></span>--}}
                                    {{--<br><br>--}}
                                    {{--<br><br>--}}
                                {{--</div>--}}
                            {{--</div>--}}


                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <label class="col-md-12 control-label"><b>Project Property Types:</b></label>
                                    <div class="col-md-12 inputGroupContainer">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                                            {{--                                            {{dd($data['get_project_features'])}}--}}

                                            <select class="form-control" name="project_property_types[]" id="ms9" multiple="multiple">


                                                <option value="STUDIO/SERVICE APARTMENTS,studio-service-apartments">STUDIO/SERVICE APARTMENTS</option>
                                                <option {{in_array('duplex',$data['get_project_property_types'])?'selected':''}} value="DUPLEX,duplex">DUPLEX</option>
                                                <option {{in_array('villas',$data['get_project_property_types'])?'selected':''}} value="VILLAS,villas">VILLAS</option>
                                                <option {{in_array('1bhk',$data['get_project_property_types'])?'selected':''}} value="1BHK,1bhk">1BHK</option>
                                                <option {{in_array('1bhk-study-s-r-store',$data['get_project_property_types'])?'selected':''}} value="1BHK+STUDY/S/R/STORE,1bhk-study-s-r-store">1BHK+STUDY/S/R/STORE</option>
                                                <option {{in_array('2bhk',$data['get_project_property_types'])?'selected':''}} value="2BHK,2bhk">2BHK</option>
                                                <option {{in_array('2bhk-study-s-r-store',$data['get_project_property_types'])?'selected':''}} value="2BHK+STUDY/S/R/STORE,2bhk-study-s-r-store">2BHK+STUDY/S/R/STORE</option>
                                                <option {{in_array('3bhk',$data['get_project_property_types'])?'selected':''}} value="3BHK,3bhk">3BHK</option>
                                                <option {{in_array('3bhk-study-s-r-store',$data['get_project_property_types'])?'selected':''}} value="3BHK+STUDY/S/R/STORE,3bhk-study-s-r-store">3BHK+STUDY/S/R/STORE</option>
                                                <option {{in_array('4bhk',$data['get_project_property_types'])?'selected':''}} value="4BHK,4bhk">4BHK</option>
                                                <option {{in_array('4bhk-study-s-r-store',$data['get_project_property_types'])?'selected':''}} value="4BHK+STUDY/S/R/STORE,4bhk-study-s-r-store">4BHK+STUDY/S/R/STORE</option>
                                                <option {{in_array('5bhk',$data['get_project_property_types'])?'selected':''}} value="5BHK,5bhk">5BHK</option>
                                                <option {{in_array('penthouses',$data['get_project_property_types'])?'selected':''}} value="PENTHOUSES,penthouses">PENTHOUSES</option>
                                                <option {{in_array('food-court',$data['get_project_property_types'])?'selected':''}} value="FOOD COURT,food-court">FOOD COURT</option>
                                                <option {{in_array('multiplex',$data['get_project_property_types'])?'selected':''}} value="MULTIPLEX,multiplex">MULTIPLEX</option>
                                                <option {{in_array('office-spaces',$data['get_project_property_types'])?'selected':''}} value="OFFICE SPACES,office-spaces">OFFICE SPACES</option>
                                                <option {{in_array('shops',$data['get_project_property_types'])?'selected':''}} value="SHOPS,shops">SHOPS</option>
                                                <option {{in_array('studio-apartments',$data['get_project_property_types'])?'selected':''}} value="STUDIO APARTMENTS,studio-apartments">STUDIO APARTMENTS</option>


                                            </select>
                                        </div>


                                        <span class="text-danger"></span>

                                    </div>
                                </div>
                            </div>





                        </div>



                        <div class="row form-row ">

                            {{--<h5>Multiple Images:</h5>--}}

                            <div class="col-md-12 mb-12">
                                <div class="form-group">
                                    <label class="col-md-12 control-label"><b>Project Brand Images:</b></label>

                                    <div class="col-md-12 inputGroupContainer">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>

                                            {{--<input type="file" name="brand_images" class="form-control" >--}}


                                            <div class="dropzone" id="d6">

                                                @if($data['project_brand_images'][0]!= null)
                                                    @foreach($data['project_brand_images'] as $project_brand_images)
                                                        <img class="alterid"  style="padding-top: 4px;" width="100" height="50" src="/images/bankimages/{{$project_brand_images}}" alt="">
                                                        <input type="hidden" name="project_brand_images[]" value="{{$project_brand_images}}">

                                                    @endforeach


                                                @endif

                                            </div>


                                            <div id="project_brand_images"></div>



                                        </div>

                                        <span class="text-danger"></span>

                                    </div>
                                </div>
                            </div>





                        </div>





                        <div class="row form-row ">

                            <h5>Project Gallery Images:</h5>

                            <div class="col-md-12 mb-12">
                                <div class="form-group">
                                    <label class="col-md-12 control-label"><b>Elevation Images:</b></label>
                                    <div class="col-md-12 inputGroupContainer">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>

                                            {{--<input type="file" name="gallery_elevation_images" class="form-control" >--}}

                                            <div class="dropzone" id="d5">
                                                @if($data['project_elevation_image'][0]!= null)
                                                    @foreach($data['project_elevation_image'] as $elevation_image)

{{--

                                                        {{--<a style="cursor: pointer;" target="_blank" href="/images/gallery/{{$elevation_image}}">--}}
                                                        <img class="alterid" width="100" height="50" src="/images/gallery/{{$elevation_image}}" alt="">
                                                        <input type="hidden" name="project_gallery_images[]" value="{{$elevation_image}}">

                                                            {{--<a href=""></a>--}}


                                                    @endforeach


                                                @endif

                                            </div>

                                            <div id="project_gallery_images"></div>


                                        </div>

                                        <span class="text-danger"></span>
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-12 mb-12">
                                <div class="form-group">
                                    <label class="col-md-12 control-label"><b>Construction Updates Images:</b></label>
                                    <div class="col-md-12 inputGroupContainer">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>

                                            {{--<input type="file" name="gallery_construction_images" class="form-control" >--}}

                                            <div class="dropzone" id="d4">
                                                @if( $data['project_construction_updates_image'][0] != null)
                                                    @foreach($data['project_construction_updates_image'] as $project_construction_updates_image)

                                                        {{--<a style="cursor: pointer;" target="_blank" href="/images/gallery/{{$project_construction_updates_image}}">--}}
                                                            <img class="alterid" style="padding-top: 4px;" width="100" height="50" src="/images/gallery/{{$project_construction_updates_image}}">
                                                        <input type="hidden" name="construction_updates_images[]" value="{{$project_construction_updates_image}}">


                                                    @endforeach


                                                @endif

                                            </div>

                                            <div id="construction_updates_images"></div>


                                        </div>

                                        <span class="text-danger"></span>
                                    </div>
                                </div>
                            </div>



                        </div>




                        <div class="row form-row ">

                            <div class="col-md-12 mb-12">
                                <div class="form-group">
                                    <label class="col-md-12 control-label"><b>Layout Images:</b></label>
                                    <div class="col-md-12 inputGroupContainer">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>

                                            {{--<input type="file" name="gallery_layout_images" class="form-control" >--}}


                                            <div class="dropzone" id="d3">
                                                @if($data['project_layout_image'][0]!= null)
                                                    @foreach($data['project_layout_image'] as $project_layout_image)

                                                        {{--<a style="cursor: pointer;" target="_blank" href="/images/gallery/{{$project_layout_image}}">--}}

                                                        <img class="alterid" style="padding-top: 4px;" width="100" height="50" src="/images/gallery/{{$project_layout_image}}" alt="">
                                                        <input type="hidden" name="layout_images[]" value="{{$project_layout_image}}">


                                                        {{--<a href=""></a>--}}


                                                    @endforeach


                                                @endif

                                            </div>

                                            <div id="layout_images"></div>



                                        </div>

                                        <span class="text-danger"></span>

                                    </div>
                                </div>
                            </div>


                            <div class="col-md-12 mb-12">
                                <div class="form-group">
                                    <label class="col-md-12 control-label"><b>Location Map Images:</b></label>
                                    <div class="col-md-12 inputGroupContainer">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>

                                            {{--<input type="file" name="gallery_location_map_images" class="form-control" >--}}


                                            <div class="dropzone" id="d2">
                                                @if($data['project_location_map_image'][0]!= null)
                                                    @foreach($data['project_location_map_image'] as $project_location_map_image)

                                                        {{--<a style="cursor: pointer;" target="_blank" href="/images/gallery/{{$project_location_map_image}}">--}}
                                                        <img class="alterid" style="padding-top: 4px;" width="100" height="50" src="/images/gallery/{{$project_location_map_image}}" alt="">
                                                        <input type="hidden" name="location_map_images[]" value="{{$project_location_map_image}}">

                                                    @endforeach


                                                @endif
                                            </div>


                                            <div id="location_map_images"></div>




                                        </div>

                                        <span class="text-danger"></span>

                                    </div>
                                </div>
                            </div>



                        </div>



                        <div class="row form-row ">

                            <div class="col-md-12 mb-12">
                                <div class="form-group">
                                    <label class="col-md-12 control-label"><b>Sample Flat Images:</b></label>
                                    <div class="col-md-12 inputGroupContainer">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>


                                            <div class="dropzone" id="d1">
                                                @if($data['project_sample_flat_image'][0]!= null)
                                                    @foreach($data['project_sample_flat_image'] as $project_sample_flat_image)

                                                        {{--<a style="cursor: pointer;" target="_blank" href="/images/gallery/{{$project_sample_flat_image}}">--}}
                                                        <img class="alterid" style="padding-top: 4px;" width="100" height="50" src="/images/gallery/{{$project_sample_flat_image}}" alt="">
                                                        <input type="hidden" name="sample_flat_images[]" value="{{$project_sample_flat_image}}">


                                                    @endforeach


                                                @endif
                                            </div>

                                            <div id="sample_flat_images"></div>


                                        </div>

                                        <span class="text-danger"></span>
                                        <br><br><br>
                                    </div>
                                </div>
                            </div>






                        </div>




                        <div class="row form-row ">


                            <h5>Floor Plans</h5>

                            <div class="col-md-12 mb-12">


                                @if($data['get_project_floor_plans'] != null)


                                    @foreach($data['get_project_floor_plans'] as $key=>$get_project_floor_plan_Data)

{{--{{dd($get_project_floor_plan_Data)}}--}}

                                <div class="form-group clonee" id="floorplanclone{{$key+1}}">
                                    <label class="col-md-12 control-label"><b>Name:</b></label>
                                    <div class="col-md-5 inputGroupContainer">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>

                                            <input readonly type="text" name="floor_plan_name[]" value="{{$get_project_floor_plan_Data['name']}}" class="form-control nm" >



                                            <input type="hidden" name="floor_plan_id[]" value="{{$get_project_floor_plan_Data['id']}}" class="form-control nm" >


                                        </div>

                                        <span class="text-danger"></span>

                                    </div>


                                    <div class="col-md-5 inputGroupContainer">

                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i>&nbsp;<img width="50" height="50"
                                                        src="/images/floor_plans/{{$get_project_floor_plan_Data['floor_plan_image']}}" alt="">:</span>



                                        </div>

                                        <span class="text-danger"></span>

                                    </div>


                                    {{--<div class="col-md-1 inputGroupContainer">--}}

                                        {{--<button type="button" class="form-control btn btn-success" onclick="return add_floor_plan_block();">+</button>--}}

                                    {{--</div>--}}


                                    <div class="col-md-1 inputGroupContainer">

                                        <button onclick="return confirm('Are You Sure!',($('#floorplanclone{{$key+1}}').remove()))" id="rembtn"  type="button"  class="form-control btn btn-danger">-</button>

                                    </div>
                                    <br><br>  <br><br>

                                </div>


                                    @endforeach



                                        <div class="form-group clonee" id="floorplanclone1">
                                            <label class="col-md-12 control-label"><b>Name:</b></label>
                                            <div class="col-md-5 inputGroupContainer">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>

                                                    <input type="text" name="floor_plan_name_update[]" class="form-control nm" >


                                                </div>

                                                <span class="text-danger"></span>

                                            </div>


                                            <div class="col-md-5 inputGroupContainer">

                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i>&nbsp;Floor Plan Image:</span>

                                                    <input type="file" name="floor_plan_image[]"  class="form-control fpi" >

                                                </div>

                                                <span class="text-danger"></span>

                                            </div>


                                            <div class="col-md-1 inputGroupContainer">

                                                <button type="button" class="form-control btn btn-success" onclick="return add_floor_plan_block();">+</button>

                                            </div>


                                            <div class="col-md-1 inputGroupContainer">

                                                <button onclick="confirm('Are You Sure!',remove_floor_plan_block(this));" id="rembtn"  type="button"  class="form-control btn btn-danger">-</button>

                                            </div>
                                            <br><br>  <br><br>

                                        </div>


                                    @else



                                    <div class="form-group clonee" id="floorplanclone1">
                                        <label class="col-md-12 control-label"><b>Name:</b></label>
                                        <div class="col-md-5 inputGroupContainer">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>

                                                <input type="text" name="floor_plan_name[]" class="form-control nm" >


                                            </div>

                                            <span class="text-danger"></span>

                                        </div>


                                        <div class="col-md-5 inputGroupContainer">

                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i>&nbsp;Floor Plan Image:</span>

                                                <input type="file" name="floor_plan_image[]"  class="form-control fpi" >

                                            </div>

                                            <span class="text-danger"></span>

                                        </div>


                                        <div class="col-md-1 inputGroupContainer">

                                            <button type="button" class="form-control btn btn-success" onclick="return add_floor_plan_block();">+</button>

                                        </div>


                                        <div class="col-md-1 inputGroupContainer">

                                            <button onclick="confirm('Are You Sure!',remove_floor_plan_block(this));" id="rembtn"  type="button"  class="form-control btn btn-danger">-</button>

                                        </div>
                                        <br><br>  <br><br>

                                    </div>


                                @endif



                            </div>

                        </div>






                        <div class="row form-row ">

                            <h5>Overview Details</h5>
                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <label class="col-md-12 control-label"><b>Overview Location:</b></label>
                                    <div class="col-md-12 inputGroupContainer">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                                            {{--<textarea class="form-control  placeholder" rows="3" value="" name="meta_keywords" placeholder="Meta Keywords... " onkeyup="textCounter(this,'counter2',180);" id="message2"></textarea>--}}


                                            <input name="overview_location" placeholder="Overview Location... " class="form-control placeholder" value="{{$data['get_project_OverviewDetails']['location']}}"  type="text">


                                        </div>

                                        <span class="text-danger"></span>

                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <label class="col-md-12 control-label"><b>Overview Size:</b></label>
                                    <div class="col-md-12 inputGroupContainer">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                                            {{--<textarea class="form-control  placeholder" rows="3" value="" name="meta_keywords" placeholder="Meta Keywords... " onkeyup="textCounter(this,'counter2',180);" id="message2"></textarea>--}}


                                            <input name="overview_size" placeholder="Overview Size... " class="form-control placeholder" value="{{$data['get_project_OverviewDetails']['size']}}"  type="text">


                                        </div>

                                        <span class="text-danger"></span>
                                    </div>
                                </div>
                            </div>

                        </div>




                        <div class="row form-row ">

                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <label class="col-md-12 control-label"><b>Overview Type:</b></label>
                                    <div class="col-md-12 inputGroupContainer">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                                            {{--<textarea class="form-control  placeholder" rows="3" value="" name="meta_keywords" placeholder="Meta Keywords... " onkeyup="textCounter(this,'counter2',180);" id="message2"></textarea>--}}


                                            <input name="overview_type" placeholder="Overview Type... " class="form-control placeholder" value="{{$data['get_project_OverviewDetails']['type']}}"  type="text">


                                        </div>

                                        <span class="text-danger"></span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <label class="col-md-12 control-label"><b>Overview Rera No:</b></label>
                                    <div class="col-md-12 inputGroupContainer">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                                            {{--<textarea class="form-control  placeholder" rows="3" value="" name="meta_keywords" placeholder="Meta Keywords... " onkeyup="textCounter(this,'counter2',180);" id="message2"></textarea>--}}


                                            <input name="overview_rera_no" placeholder="Overview Rera No... " class="form-control placeholder" value="{{$data['get_project_OverviewDetails']['rera_no']}}"  type="text">


                                        </div>

                                        <span class="text-danger"></span>
                                        <br><br>
                                    </div>
                                </div>
                            </div>

                        </div>



                        <div class="row form-row ">

                            <h5>Near By Location</h5>

                            <div class="col-md-9 mb-9">
                                <div class="form-group">
                                    <label class="col-md-12 control-label"><b>Lat N Long Finder By Address: </b></label>
                                    <div class="col-md-12 inputGroupContainer">

                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>

                                            <input id="lat_long_address" name="lat_long_address" placeholder="Enter Address... " class="form-control placeholder" value=""  type="text">


                                        </div>

                                        <span class="text-danger"></span>
                                    </div>

                                </div>
                            </div>


                            <div class="col-md-2 mb-2">
                                <br>
                                <span onclick="return get_lat_long();" style="margin-top: 5px;" class="form-control btn btn-primary">
                                    Find
                                    </span>


                            </div>



                        </div>


                        <br><br><br><br>

                        <p id="div_container"></p>


                        <div class="row form-row " id="lat_long_block" style="">
                            <br>
                            {{--<h5>Near By Location</h5>--}}

                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <label class="col-md-12 control-label"><b>Latitude</b></label>
                                    <div class="col-md-12 inputGroupContainer">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                                            {{--<textarea class="form-control  placeholder" rows="3" value="" name="meta_keywords" placeholder="Meta Keywords... " onkeyup="textCounter(this,'counter2',180);" id="message2"></textarea>--}}


                                            <input name="latitude" placeholder="Latitude... " class="form-control placeholder" id="omaxe_lat" readonly value="{{$data['get_project_Nearby']['latitude']}}"  type="text">


                                        </div>

                                        <span class="text-danger">{{ $errors->first('latitude') }}</span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <label class="col-md-12 control-label"><b>Longitude:</b></label>
                                    <div class="col-md-12 inputGroupContainer">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                                            {{--<textarea class="form-control  placeholder" rows="3" value="" name="meta_keywords" placeholder="Meta Keywords... " onkeyup="textCounter(this,'counter2',180);" id="message2"></textarea>--}}


                                            <input name="longitude" placeholder="Longitude... " id="omaxe_long" readonly class="form-control placeholder" value="{{$data['get_project_Nearby']['longitude']}}"  type="text">


                                        </div>

                                        <span class="text-danger">{{ $errors->first('longitude') }}</span>
                                    </div>
                                </div>
                            </div>

                        </div>





                        <div class="row form-row ">

                            <h5>Seo Meta Details</h5>
                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <label class="col-md-12 control-label"><b>Meta Title:</b></label>
                                    <div class="col-md-12 inputGroupContainer">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                                            {{--<textarea class="form-control  placeholder" rows="3" value="" name="meta_keywords" placeholder="Meta Keywords... " onkeyup="textCounter(this,'counter2',180);" id="message2"></textarea>--}}


                                            <input name="meta_title" placeholder="Meta Title... " class="form-control placeholder" value="{{$data['project_meta_details']['meta_title']}}"  type="text">


                                        </div>

                                        <span class="text-danger"></span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <label class="col-md-12 control-label"><b>Meta Description:</b></label>
                                    <div class="col-md-12 inputGroupContainer">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                                            {{--<textarea class="form-control  placeholder" rows="3" value="" name="meta_keywords" placeholder="Meta Keywords... " onkeyup="textCounter(this,'counter2',180);" id="message2"></textarea>--}}


                                            <input name="meta_description" placeholder="Meta Description... " class="form-control placeholder" value="{{$data['project_meta_details']['meta_description']}}"  type="text">


                                        </div>

                                        <span class="text-danger"></span>
                                    </div>
                                </div>
                            </div>

                        </div>




                        <div class="row form-row ">

                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <label class="col-md-12 control-label"><b>Meta Keywords:</b></label>
                                    <div class="col-md-12 inputGroupContainer">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                                            {{--<textarea class="form-control  placeholder" rows="3" value="" name="meta_keywords" placeholder="Meta Keywords... " onkeyup="textCounter(this,'counter2',180);" id="message2"></textarea>--}}


                                            <input name="meta_keywords" placeholder="Meta Keywords... " class="form-control placeholder" value="{{$data['project_meta_details']['meta_keywords']}}"  type="text">


                                        </div>

                                        <span class="text-danger"></span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 mb-3">
                                <div class="form-group">

                                    <br><br><br><br>
                                </div>
                            </div>

                        </div>






                        <div class="row form-row " style="margin-bottom: 100px;">

                            <div class="col-md-6 mb-3">
                                <div class="form-group">

                                    <div class="col-md-12">
                                        <a href="{{url('/omaxeadmin/projects/list')}}" class="btn btn-primary"  style="padding: 9px;  margin-top: 20px;">Go Back</a>
                                        <button type="Create" style="padding: 10px; padding-left: 80px; padding-right: 80px; margin-top: 20px;background-color: #28a745; border-color: #28a745;" class="btn btn-success">Update <span class="glyphicon glyphicon-send"></span></button>
                                    </div>
                                </div>
                            </div>


                            <br><br>

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



    <script>

        function remove_floor_plan_block(e) {

            var num = parseInt(e.value.match(/\d+/g),10);

            var buttonval = num;

            var condata = '#floorplanclone'+buttonval;

            var data = $(condata).remove();

        }

        function add_floor_plan_block() {

            var $div = $('div[id^="floorplanclone"]:last');

            var num = parseInt($div.prop('id').match(/\d+/g),10)+1;

            var $cdata = $div.clone().attr('id','floorplanclone'+num).insertAfter("div.clonee:last");

            $("#rembtn",$cdata).val('remove'+num);

            $('.nm',$cdata).val('');
            $('fpi',$cdata).val('');

        }

        function get_lat_long() {

            var address = $('#lat_long_address').val();

            var url = "{{url('/omaxeadmin/projects/get-lat-long')}}";

            var div = document.getElementById('div_container');

            var lat_long_block = document.getElementById('lat_long_block');

            var lat = document.getElementById('omaxe_lat');

            var long = document.getElementById('omaxe_long');



            url += "?address=" + address;

            $.get(url, function(data, status){
                if(status == "success"){

                    console.log(data);

                    div.innerHTML = data.success.results[0].formatted_address;

                    lat_long_block.style.display="block";

                    lat.value = data.success.results[0].geometry.location.lat;

                    long.value = data.success.results[0].geometry.location.lng;


                }
            });

        }

    </script>


    <script>
        $('.alterid').click(function() {
            var value = $(this).next().remove();
            $(this).remove();


        });
    </script>


    <script type="text/javascript">
        tinymce.init({
            selector: "textarea",
            plugins: [
                "advlist autolink lists link image charmap print preview anchor",
                "searchreplace visualblocks code fullscreen",
                "insertdatetime media table contextmenu paste "
            ],
            toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter      alignright alignjustify | bullist numlist outdent indent | link image"
        });


    </script>





    <script src="{{asset('js/app.js')}}"></script>



@endsection