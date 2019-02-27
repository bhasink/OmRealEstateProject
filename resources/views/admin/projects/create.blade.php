@extends('admin.layouts.layout')



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

        <div class="row">




            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>PROJECT  <small>Create</small></h2>

                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">


                        @if(($errors->first('url')))

                            <div class="alert alert-danger" role="alert">
                                Form errors please check below.
                            </div>

                        @endif

                        {!! Form::open(array('action'=>'Admin\AdminProjectContactController@save_project','method'=>'post','id'=>'contact_formm','enctype' => 'multipart/form-data')) !!}

                        <div class="row form-row">

                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <label class="col-md-12 control-label"><b>Project Title:</b></label>
                                    <div class="col-md-12 inputGroupContainer">
                                        <div class="input-group">
                                                <span class="input-group-addon"><i class="glyphicon glyphicon-align-justify
"></i></span>

                                            <input  name="project_title" placeholder="Enter Project Title... " class="form-control placeholder" value="{{old('project_title')}}"  type="text">

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
                                            <input  name="url" placeholder="Project Slug... " class="form-control placeholder" value="{{old('url')}}"  type="text">


                                        </div>
                                        <span class="text-danger">{{ $errors->first('url') }}</span>
                                    </div>
                                </div>
                            </div>




                        </div>







                        <div class="row form-row">




                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <label class="col-md-12 control-label"><b>Project Video Link:</b></label>
                                    <div class="col-md-12 inputGroupContainer">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                                            {{--<textarea class="form-control  placeholder" rows="3" value="" name="meta_description" placeholder="Meta Description... " onkeyup="textCounter(this,'counter1',300);" id="message1"></textarea>--}}


                                            <input  name="project_video_link" placeholder="Project Video Link... " class="form-control placeholder" value="{{old('project_video_link')}}"  type="text">


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

                                            <input  name="project_map_link" placeholder="Project Map Link... " class="form-control placeholder" value="{{old('project_map_link')}}"  type="text">


                                        </div>

                                        <span class="text-danger">{{ $errors->first('project_map_link') }}</span>
                                    </div>
                                </div>
                            </div>



                        </div>

                        <div class="row form-row">


                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <label class="col-md-12 control-label"><b>Price Range:</b></label>
                                    <div class="col-md-12 inputGroupContainer">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                                            <select class="form-control" name="price_range[]" id="ms3" multiple="multiple">

                                                <option   value="4999999">Under 50 Lakh</option>
                                                <option   value="9999999">Above 50 Lakh</option>
                                                <option   value="10000000">1 CR Above</option>



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

                                            <select  class="form-control"  name="project_city" id="">
                                                <option value="">--Select Project City--</option>

                                                @if(isset($data['get_project_cities']))


                                                    @foreach($data['get_project_cities'] as $key=>$city)

                                                <option value="{{$city->id}}" {{ old("project_city") == $city->id ? "selected":"" }}>{{$city->name}}</option>


                                                    @endforeach


                                                @endif

                                            </select>

                                        </div>

                                        <span class="text-danger">{{ $errors->first('project_city') }}</span>

                                    </div>
                                </div>
                            </div>


                        </div>



                            <div class="row form-row">


                                <div class="col-md-6 mb-3">
                                    <div class="form-group">
                                        <label class="col-md-12 control-label"><b>Project State:</b></label>
                                        <div class="col-md-12 inputGroupContainer">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                                                {{--<textarea class="form-control  placeholder" rows="3" value="" name="meta_keywords" placeholder="Meta Keywords... " onkeyup="textCounter(this,'counter2',180);" id="message2"></textarea>--}}

                                                <select  class="form-control"  name="project_state" id="">
                                                    <option value="">--Select Project State--</option>
                                                    @if(isset($data['get_project_states']))


                                                        @foreach($data['get_project_states'] as $key=>$states)

                                                            <option value="{{$states->id}}" {{ old("project_state") == $states->id ? "selected":"" }}>{{$states->name}}</option>


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

                                                <select  class="form-control"  name="project_status" id="">
                                                    <option value="">--Select Project Status--</option>
                                                    <option {{ old("project_status") == 1 ? "selected":"" }} value="1">Current</option>
                                                    <option {{ old("project_status") == 3 ? "selected":"" }} value="3">Delivered</option>

                                                </select>


                                            </div>

                                            <span class="text-danger">{{ $errors->first('project_status') }}</span>
                                        </div>
                                    </div>
                                </div>





                            </div>


                            <div class="row form-row">


                                <div class="col-md-6 mb-3">
                                    <div class="form-group">
                                        <label class="col-md-12 control-label"><b>Project Category:</b></label>
                                        <div class="col-md-12 inputGroupContainer">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                                                {{--<textarea class="form-control  placeholder" rows="3" value="" name="meta_keywords" placeholder="Meta Keywords... " onkeyup="textCounter(this,'counter2',180);" id="message2"></textarea>--}}

                                                <select  class="form-control"  name="project_category" id="">
                                                    <option value="">--Select Project Category--</option>
                                                    <option {{ old("project_category") == 1 ? "selected":"" }} value="1">Hot Selling properties</option>
                                                    <option {{ old("project_category") == 2 ? "selected":"" }} value="2">Ready To Move In</option>
                                                    <option {{ old("project_category") == 3 ? "selected":"" }} value="3">Delivered</option>
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

                                                <select  class="form-control"  name="project_stamp" id="">
                                                    <option value="">--Select Project Stamp--</option>



                                                    @if(isset($data['get_project_stamp']))


                                                        @foreach($data['get_project_stamp'] as $key=>$stamp)

                                                            <option value="{{$stamp->id}}" {{ old("project_stamp") == $stamp->id ? "selected":"" }}  >{{$stamp->project_category_name}}</option>


                                                        @endforeach


                                                    @endif



                                                </select>

                                            </div>

                                            <span class="text-danger">{{ $errors->first('project_stamp') }}</span>
                                        </div>
                                    </div>
                                </div>

                            </div>


                            <div class="row form-row">


                                <div class="col-md-6 mb-3">
                                    <div class="form-group">
                                        <label class="col-md-12 control-label"><b>Project Type:</b></label>
                                        <div class="col-md-12 inputGroupContainer">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                                                {{--<textarea class="form-control  placeholder" rows="3" value="" name="meta_keywords" placeholder="Meta Keywords... " onkeyup="textCounter(this,'counter2',180);" id="message2"></textarea>--}}

                                                <select  class="form-control"  name="project_type" id="">
                                                    <option value="">--Select Project Type--</option>

                                                    @if(isset($data['get_project_type']))


                                                        @foreach($data['get_project_type'] as $key=>$project_type)

                                                            <option value="{{$project_type->id}}" {{ old("project_type") == $project_type->id ? "selected":"" }} >{{$project_type->name}}</option>


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

                                        <select  class="form-control" name="project_features[]" id="ms" multiple="multiple">
                                            @if(isset($data['get_project_features']))


                                                @foreach($data['get_project_features'] as $key=>$project_features)

                                                    <option value="{{$project_features->id}}"  {{ old("project_features") == $project_features->id ? "selected":"" }} >{{$project_features->name}}</option>


                                                @endforeach


                                            @endif
                                        </select>
                                            </div>


                                            <span class="text-danger">{{ $errors->first('project_features.0') }}</span>

                                        </div>
                                    </div>
                                </div>

                            </div>


                            <div class="row form-row">



                                <div class="col-md-6 mb-3">
                                    <div class="form-group">
                                        <label class="col-md-12 control-label"><b>Project Specifications:</b></label>
                                        <div class="col-md-12 inputGroupContainer">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                                                <select  name="project_specification[]" class="form-control" id="ms2" multiple="multiple">
                                                    @if(isset($data['get_project_specification']))


                                                        @foreach($data['get_project_specification'] as $key=>$project_specification)

                                                            <option value="{{$project_specification->id}}">{{$project_specification->name}}</option>


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


                            <div class="row form-row">

                                <div class="col-md-12 mb-12">
                                    <div class="form-group">
                                        <label class="col-md-12 control-label"><b>Project Descriptions:</b></label>
                                        <div class="col-md-12 inputGroupContainer">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>

                                                <textarea  class="form-control  placeholder"  name="project_description" value="" placeholder="Project Description... "  id="message">{{old('project_description')}}</textarea>

                                            </div>


                                            <span class="text-danger">{{ $errors->first('project_description') }}</span>
                                            <br><br><br><br><br>
                                        </div>
                                    </div>
                                </div>

                            </div>


                            <div class="row form-row">



                                {{--<h5>Project Images</h5>--}}

                                <div class="col-md-6 mb-3">
                                    <div class="form-group">
                                        <label class="col-md-12 control-label"><b>Project Logo:</b></label>
                                        <div class="col-md-12 inputGroupContainer">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                                                {{--<textarea class="form-control  placeholder" rows="3" value="" name="meta_keywords" placeholder="Meta Keywords... " onkeyup="textCounter(this,'counter2',180);" id="message2"></textarea>--}}

                                                <input  type="file" value="{{old('project_logo')}}" name="project_logo" class="form-control" >

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
                                                <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                                                {{--<textarea class="form-control  placeholder" rows="3" value="" name="meta_keywords" placeholder="Meta Keywords... " onkeyup="textCounter(this,'counter2',180);" id="message2"></textarea>--}}

                                                <input  type="file" value="{{old('banner_image')}}" name="banner_image" class="form-control" >


                                            </div>

                                            <span class="text-danger">{{ $errors->first('banner_image') }}</span>

                                        </div>
                                    </div>
                                </div>

                            </div>


                            <div class="row form-row">



                                <div class="col-md-6 mb-3">
                                    <div class="form-group">
                                        <label class="col-md-12 control-label"><b>Project RTGS Image:</b></label>
                                        <div class="col-md-12 inputGroupContainer">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
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
                                                <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                                                {{--<textarea class="form-control  placeholder" rows="3" value="" name="meta_keywords" placeholder="Meta Keywords... " onkeyup="textCounter(this,'counter2',180);" id="message2"></textarea>--}}

                                                <input type="file" value="{{old('e_brochure')}}" name="e_brochure" class="form-control" >


                                            </div>

                                            <span class="text-danger">{{ $errors->first('e_brochure') }}</span>

                                        </div>
                                    </div>
                                </div>


                            </div>


                            <div class="row form-row">


                                <div class="col-md-6 mb-3">
                                    <div class="form-group">
                                        <label class="col-md-12 control-label"><b>Project Bank Images:</b></label>
                                        <div class="col-md-12 inputGroupContainer">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                                                <select class="form-control" name="project_bank_images[]" id="ms10" multiple="multiple">
                                                    <option value="hdfc_bank_logo.png">HDFC Bank Home Loans</option>
                                                    <option value="sbi_logo.png">SBI Bank</option>
                                                    <option value="idb_logo.png">IDBI Bank</option>
                                                    <option value="iif_logo.png">IIFL</option>
                                                    <option value="iob_logo.png">Indian Overseas Bank</option>
                                                    <option value="dhf_logo.png">DHFL</option>
                                                    <option value="ici_logo.png">ICICI Bank</option>
                                                    <option value="ubi_logo.png">United Bank Of India</option>
                                                    <option value="pnb_housing_logo.png">PNB Housing</option>
                                                    <option value="tat_logo.png">TATA CAPITAL</option>
                                                    <option value="axi_logo.png">AXIS Bank</option>
                                                    <option value="can_logo.png">Canara Bank</option>
                                                    <option value="lic_hfl_logo.png">LIC HFL</option>




                                                </select>
                                            </div>


                                            <span class="text-danger">{{ $errors->first('project_bank_images.0') }}</span>

                                        </div>
                                    </div>
                                </div>


                                <div class="col-md-6 mb-3">
                                    <div class="form-group">

                                        <span class="text-danger"></span>
                                        <br><br>
                                        <br><br>
                                    </div>
                                </div>


                            </div>



                            <div class="row form-row">

                                {{--<h5>Multiple Images:</h5>--}}

                                <div class="col-md-12 mb-12">
                                    <div class="form-group">
                                        <label class="col-md-12 control-label"><b>Project Brand Images:</b></label>
                                        <div class="col-md-12 inputGroupContainer">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>

                                                {{--<input type="file" name="brand_images" class="form-control" >--}}

                                                <div class="dropzone" id="d6"></div>

                                                <div id="project_brand_images"></div>



                                            </div>

                                            <span class="text-danger"></span>

                                        </div>
                                    </div>
                                </div>





                            </div>





                            <div class="row form-row">

                                <h5>Project Gallery Images:</h5>

                                <div class="col-md-12 mb-12">
                                    <div class="form-group">
                                        <label class="col-md-12 control-label"><b>Elevation Images:</b></label>
                                        <div class="col-md-12 inputGroupContainer">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>

                                                {{--<input type="file" name="gallery_elevation_images" class="form-control" >--}}

                                                <div class="dropzone" id="d5"></div>

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

                                                <div class="dropzone" id="d4"></div>

                                                <div id="construction_updates_images"></div>


                                            </div>

                                            <span class="text-danger"></span>
                                        </div>
                                    </div>
                                </div>



                            </div>




                            <div class="row form-row">

                                <div class="col-md-12 mb-12">
                                    <div class="form-group">
                                        <label class="col-md-12 control-label"><b>Layout Images:</b></label>
                                        <div class="col-md-12 inputGroupContainer">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>

                                                {{--<input type="file" name="gallery_layout_images" class="form-control" >--}}


                                                <div class="dropzone" id="d3"></div>

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


                                                <div class="dropzone" id="d2"></div>


                                                <div id="location_map_images"></div>




                                            </div>

                                            <span class="text-danger"></span>

                                        </div>
                                    </div>
                                </div>



                            </div>



                            <div class="row form-row">

                                <div class="col-md-12 mb-12">
                                    <div class="form-group">
                                        <label class="col-md-12 control-label"><b>Sample Flat Images:</b></label>
                                        <div class="col-md-12 inputGroupContainer">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>


                                                <div class="dropzone" id="d1"></div>

                                                <div id="sample_flat_images"></div>


                                            </div>

                                            <span class="text-danger"></span>
                                            <br><br><br>
                                        </div>
                                    </div>
                                </div>






                            </div>




                            <div class="row form-row">


                                <h5>Floor Plans</h5>

                                <div class="col-md-12 mb-12">


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

                                                <input type="file" name="floor_plan_image[]" class="form-control fpi" >

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

                                </div>

                            </div>






                            <div class="row form-row">

                        <h5>Overview Details</h5>
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label class="col-md-12 control-label"><b>Overview Location:</b></label>
                                <div class="col-md-12 inputGroupContainer">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                                        {{--<textarea class="form-control  placeholder" rows="3" value="" name="meta_keywords" placeholder="Meta Keywords... " onkeyup="textCounter(this,'counter2',180);" id="message2"></textarea>--}}


                                        <input name="overview_location" placeholder="Overview Location... " class="form-control placeholder" value="{{old('overview_location')}}"  type="text">


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


                                        <input name="overview_size" placeholder="Overview Size... " class="form-control placeholder" value="{{old('overview_size')}}"   type="text">


                                    </div>

                                    <span class="text-danger"></span>
                                </div>
                            </div>
                        </div>

                    </div>




                    <div class="row form-row">

                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label class="col-md-12 control-label"><b>Overview Type:</b></label>
                                <div class="col-md-12 inputGroupContainer">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                                        {{--<textarea class="form-control  placeholder" rows="3" value="" name="meta_keywords" placeholder="Meta Keywords... " onkeyup="textCounter(this,'counter2',180);" id="message2"></textarea>--}}


                                        <input name="overview_type" placeholder="Overview Type... " class="form-control placeholder" value="{{old('overview_type')}}" type="text">


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


                                        <input name="overview_rera_no" placeholder="Overview Rera No... " class="form-control placeholder" value="{{old('overview_rera_no')}}"  type="text">


                                    </div>

                                    <span class="text-danger"></span>
                                    <br><br>
                                </div>
                            </div>
                        </div>

                    </div>



                            <div class="row form-row">

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


                            <div class="row form-row" id="lat_long_block" >
                                <br>
                                {{--<h5>Near By Location</h5>--}}

                                <div class="col-md-6 mb-3">
                                    <div class="form-group">
                                        <label class="col-md-12 control-label"><b>Latitude</b></label>
                                        <div class="col-md-12 inputGroupContainer">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                                                {{--<textarea class="form-control  placeholder" rows="3" value="" name="meta_keywords" placeholder="Meta Keywords... " onkeyup="textCounter(this,'counter2',180);" id="message2"></textarea>--}}


                                                <input  name="latitude" placeholder="Latitude... " class="form-control placeholder" id="omaxe_lat" readonly  value="{{old('latitude')}}"  type="text">


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


                                                <input  name="longitude" placeholder="Longitude... " id="omaxe_long" readonly class="form-control placeholder"  value="{{old('longitude')}}" type="text">


                                            </div>

                                            <span class="text-danger">{{ $errors->first('longitude') }}</span>
                                        </div>
                                    </div>
                                </div>

                            </div>





                            <div class="row form-row">

                                <h5>Seo Meta Details</h5>
                                <div class="col-md-6 mb-3">
                                    <div class="form-group">
                                        <label class="col-md-12 control-label"><b>Meta Title:</b></label>
                                        <div class="col-md-12 inputGroupContainer">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                                                {{--<textarea class="form-control  placeholder" rows="3" value="" name="meta_keywords" placeholder="Meta Keywords... " onkeyup="textCounter(this,'counter2',180);" id="message2"></textarea>--}}


                                                <input name="meta_title" placeholder="Meta Title... " class="form-control placeholder" value="{{old('meta_title')}}"   type="text">


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


                                                <input name="meta_description" placeholder="Meta Description... " class="form-control placeholder" value="{{old('meta_description')}}"   type="text">


                                            </div>

                                            <span class="text-danger"></span>
                                        </div>
                                    </div>
                                </div>

                            </div>




                            <div class="row form-row">

                                <div class="col-md-6 mb-3">
                                    <div class="form-group">
                                        <label class="col-md-12 control-label"><b>Meta Keywords:</b></label>
                                        <div class="col-md-12 inputGroupContainer">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                                                {{--<textarea class="form-control  placeholder" rows="3" value="" name="meta_keywords" placeholder="Meta Keywords... " onkeyup="textCounter(this,'counter2',180);" id="message2"></textarea>--}}


                                                <input name="meta_keywords" placeholder="Meta Keywords... " class="form-control placeholder" value="{{old('meta_keywords')}}"   type="text">


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






                            <div class="row form-row" style="margin-bottom: 100px;">

                            <div class="col-md-6 mb-3">
                                <div class="form-group">

                                    <div class="col-md-12">
                                        <a href="{{url('/omaxeadmin/projects/list')}}" class="btn btn-primary"  style="padding: 9px;  margin-top: 20px;">Go Back</a>
                                        <button type="Create" style="padding: 10px; padding-left: 80px; padding-right: 80px; margin-top: 20px;background-color: #28a745; border-color: #28a745;" class="btn btn-success">Create <span class="glyphicon glyphicon-send"></span></button>
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