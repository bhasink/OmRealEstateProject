@extends('layouts.layout')
@section('content')
    @include('layouts.header')
    <style>
        .top-content{
            margin-bottom: 0px;
            height: 515px;
        }
    </style>

    <style type="text/css">
        #success_message{ display: none;}
        .has-error{
            border: 1px solid red;
        }
        .nothas-error{
            border: 1px solid green;
        }

        .asterik{
            color: red;
        }
        .clonespan{
            font-size:9px !important;
        }

        .checkbox-title{
            margin-left: -30px;
            font-size: 18px !important;
            margin-top: 5px;
            margin-bottom: 15px;
        }

        .detail-block .input-group{
            margin: 5px 0;
        }

        .imp-instruction li{
            font-size: 16px;
            margin: 10px 0;
            font-weight: bold;
        }

        .m-b-10{
            margin-bottom: 10px !important;
        }

    </style>



    <div class="top-content vendor-banner">


    </div>

    <header>
        <nav id='cssmenu'>
            <div id="head-mobile"></div>
            <div class="button-cont button" onclick="myFunction(this)">
                <div class="bar1"></div>
                <div class="bar2"></div>
                <div class="bar3"></div>
            </div>            <ul>
                <li><a href='/care/omaxe-care'>OMAXE CARE</a></li>
                <li><a href='/care/nri-care'>NRI CARE</a></li>
                <li><a href='/care/associate'>ASSOCIATES</a></li>
                <li class='active'><a href='/care/vendors'>VENDORS</a></li>
                <li><a href='/care/buyers-guide'>BUYERS GUIDE</a></li>

            </ul>
        </nav>
    </header>


    {{--{{ Breadcrumbs::render('disclaimer', "/about-us/awards-and-honors","Current Openings") }}--}}


    <ol class="breadcrumb">

        <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>

        <li class="breadcrumb-item active">Care</li>
        <li class="breadcrumb-item active">Vendors</li>

    </ol>


    <section class="invcon">
        <div class="container vendor-form">

            <div class="row">
                <div class="col-md-12" style="margin-bottom: 100px;">
                    <p>

                        @if($errors->any())
                        <div class="alert alert-danger" role="alert">
                           <p> Form field is missing. Please check below.</p>
                        </div>
                        @endif

                    </p>
                    <p class="gray-bg">We are looking for reliable, committed and dedicated suppliers/merchants who value timely delivery and are respectfully recognised for their quality and services. Interested merchants/vendors may upload their profile in the format given below.</p>
            </div>


                    <h4 class="vendor-title">Contractor/Vendor Registration Form</h4>


                        {!! Form::open(array('action' => 'MainController@vendorscon', 'method' => 'post','id'=>'vendor-form','class'=>'gray-bg','enctype' => 'multipart/form-data')) !!}

                        <div class="detail-block">

                            <div class="form-group">
                                <h4>General Details</h4>
                            </div>



                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="Name of company">Name of Company*</label>
                                        <input  type="text" name="Name_of_company" class="form-control {{ $errors->has('Name_of_company') ? 'has-error' : '' }}" value="{{ old('Name_of_company') }}" placeholder="">
                                        <span class="text-danger">{{ $errors->first('Name_of_company') }}</span>
                                    </div>

                                    <div class="col-md-6">
                                        <label for="Year of registration">Year of Registration*</label>
                                        <input  type="text" value="{{ old('Year_of_registration') }}" name="Year_of_registration" class="form-control {{ $errors->has('Year_of_registration') ? 'has-error' : '' }}" placeholder="">
                                        <span class="text-danger">{{ $errors->first('Year_of_registration') }}</span>
                                    </div>
                                </div> <!--row ends here-->
                            </div> <!--form group ends here-->

                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="Registered Address">Registered Address*</label>
                                        <input  type="text" value="{{ old('Registered_Address') }}" name="Registered_Address" class="form-control {{ $errors->has('Registered_Address') ? 'has-error' : '' }}" placeholder="">
                                        <span class="text-danger">{{ $errors->first('Registered_Address') }}</span>
                                    </div>

                                    <div class="col-md-6">
                                        <label for="email">Email*</label>
                                        <input  type="email" value="{{ old('Email') }}" name="Email" class="form-control {{ $errors->has('Email') ? 'has-error' : '' }}" placeholder="">
                                        <span class="text-danger">{{ $errors->first('Email') }}</span>
                                    </div>

                                </div> <!--row ends here-->
                            </div> <!--form group ends here-->

                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="Contact person">Contact Person*</label>
                                        <input  type="text" value="{{ old('Contact_person') }}" name="Contact_person" class="form-control {{ $errors->has('Contact_person') ? 'has-error' : '' }}" placeholder="">
                                        <span class="text-danger">{{ $errors->first('Contact_person') }}</span>
                                    </div>

                                    <div class="col-md-6">
                                        <label for="Contact number">Contact Number*</label>
                                        <input value="{{ old('Contact_Number') }}" type="tel" id="demo"  name="Contact_Number" class="form-control {{ $errors->has('Contact_Number') ? 'has-error' : '' }}" placeholder="">
                                        <span class="text-danger">{{ $errors->first('Contact_Number') }}</span>
                                    </div>

                                </div> <!--row ends here-->
                            </div> <!--form group ends here-->

                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="Owner's Name">Owner's Name/Partner's Name*</label>
                                        <input  type="text" name="Owner_Name_Partner_Name" value="{{ old('Owner_Name_Partner_Name') }}" class="form-control {{ $errors->has('Owner_Name_Partner_Name') ? 'has-error' : '' }}" placeholder="">
                                        <span class="text-danger">{{ $errors->first('Owner_Name_Partner_Name') }}</span>
                                    </div>

                                    <div class="col-md-6">
                                        <label for="website">Website*</label>
                                        <input  type="text" name="Website" class="form-control {{ $errors->has('Website') ? 'has-error' : '' }}" value="{{ old('Website') }}" placeholder="">
                                        <span class="text-danger">{{ $errors->first('Website') }}</span>
                                    </div>

                                </div> <!--row ends here-->
                            </div> <!--form group ends here-->

                            <div class="form-group">
                                <div class="row">
                                
                                    <div class="col-md-6">
                                        <label for="pan_data">PAN No. </label>
                                        <input  type="text" name="pan_data" class="form-control {{ $errors->has('pan_data') ? 'has-error' : '' }}"  value="{{ old('pan_data') }}" placeholder="">
                                        <span class="text-danger">{{ $errors->first('pan_data') }}</span>
                                    </div>
                                
                                
                                    <div class="col-md-6">
                                        <label for="PAN NO">PAN No File.*(Please attach copy)</label>
                                        <input  type="file" name="PAN_No" class="form-control {{ $errors->has('PAN_No') ? 'has-error' : '' }}" value="{{ old('PAN_No') }}" placeholder="">
                                        <span class="text-danger">{{ $errors->first('PAN_No') }}</span>
                                    </div>

                                
                                </div> <!--row ends here-->
                            </div> <!--form group ends here-->


							  <div class="form-group">
                                <div class="row">
                                
                                    <div class="col-md-6">
                                        <label for="PF ESI Registration No ">PF-ESI Registration No. </label>
                                        <input  type="text" name="PF_ESI_Registration_No" class="form-control {{ $errors->has('PF_ESI_Registration_No') ? 'has-error' : '' }}"  value="{{ old('PF_ESI_Registration_No') }}" placeholder="">
                                        <span class="text-danger">{{ $errors->first('PF_ESI_Registration_No') }}</span>
                                    </div>
                                </div> <!--row ends here-->
                            </div> <!--form group ends here-->




                            <h4>GST Details</h4>

                            <span class="text-danger">{{ $errors->first('gst_details_file') }}</span>

                            <br>
                            <div class="form-group">
                                <div class="row m-b-10">
                                    <div class="col-md-6">
                                        <label for="Delhi">GST Number</label>
                                        <input  type="text" name="gst_details_no[]" class="form-control" value="" placeholder="">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="Delhi">Delhi</label>
                                        <input  type="file" name="gst_details_file[]" class="form-control" >

                                    </div>
                                
                                </div> <!--row ends here-->

                                <div class="row m-b-10">
                                    <div class="col-md-6">
                                        <label for="Delhi">GST Number</label>
                                        <input  type="text" name="gst_details_no[]"  class="form-control" value="" placeholder="">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="up">U.P</label>
                                        <input  type="file" name="gst_details_file[]" class="form-control" >
                                    </div>
                                   
                                </div> <!--row ends here-->

                                <div class="row m-b-10">
                                    <div class="col-md-6">
                                        <label for="Delhi">GST Number</label>
                                        <input  type="text" name="gst_details_no[]"  class="form-control" value="" placeholder="">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="Haryana">Haryana</label>
                                        <input  type="file" name="gst_details_file[]" class="form-control" >
                                    </div>
                                   
                                </div> <!--row ends here-->

                                <div class="row m-b-10">
                                	<div class="col-md-6">
                                        <label for="Delhi">GST Number</label>
                                        <input  type="text" class="form-control"  name="gst_details_no[]"   value="" placeholder="">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="Punjab">Punjab</label>
                                        <input  type="file" name="gst_details_file[]"  class="form-control" >
                                    </div>
                                    
                                </div> <!--row ends here-->

                                <div class="row m-b-10">
                                 	<div class="col-md-6">
                                        <label for="Delhi">GST Number</label>
                                        <input  type="text" name="gst_details_no[]" class="form-control" value="" placeholder="">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="Rajasthan">Rajasthan</label>
                                        <input  type="file" name="gst_details_file[]"  class="form-control" >
                                    </div>
                                  
                                </div> <!--row ends here-->

                                <div class="row m-b-10">
                                
                                    <div class="col-md-6">
                                        <label for="Delhi">GST Number</label>
                                        <input  type="text" name="gst_details_no[]"  class="form-control" value="" placeholder="">
                                    </div>

                                    <div class="col-md-6">
                                        <label for="any other state">Any Other State</label>
                                        <input  type="text" class="form-control m-b-10" placeholder="">
                                        <input  type="file" name="gst_details_file[]" class="form-control" >
                                    </div>
                                 
                                </div> <!--row ends here-->



                            </div> <!--form group ends here-->



                        </div> <!--details block ends here-->

                        <div class="detail-block">

                            <div class="form-group">
                                <h4>Company Credentials</h4>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm">
                                        <label for="Name of company">Turn over in Crores*</label>
                                        <input  type="text" name="Co_Cred_Turn_over_in_crores_17_18"  value="{{ old('Co_Cred_Turn_over_in_crores_17_18') }}" class="form-control {{ $errors->has('Co_Cred_Turn_over_in_crores_17_18') ? 'has-error' : '' }}" placeholder="2017-2018">
                                        <span class="text-danger">{{ $errors->first('Co_Cred_Turn_over_in_crores_17_18') }}</span>
                                    </div>

                                    <div class="col-sm">
                                        <label for="Name of company">Turn over in Crores*</label>
                                        <input  type="text" name="Co_Cred_Turn_over_in_crores_16_17" value="{{ old('Co_Cred_Turn_over_in_crores_16_17') }}" class="form-control {{ $errors->has('Co_Cred_Turn_over_in_crores_16_17') ? 'has-error' : '' }}" placeholder="2016-2017">
                                        <span class="text-danger">{{ $errors->first('Co_Cred_Turn_over_in_crores_16_17') }}</span>
                                    </div>

                                    <div class="col-sm">
                                        <label for="Name of company">Turn over in Crores*</label>
                                        <input  type="text" name="Co_Cred_Turn_over_in_crores_15_16" value="{{ old('Co_Cred_Turn_over_in_crores_15_16') }}" class="form-control {{ $errors->has('Co_Cred_Turn_over_in_crores_15_16') ? 'has-error' : '' }}" placeholder="2015-2016">
                                        <span class="text-danger">{{ $errors->first('Co_Cred_Turn_over_in_crores_15_16') }}</span>
                                    </div>
                                </div> <!--row ends here-->
                            </div> <!--form group ends here-->



                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm">
                                        <label for="Name of company">Profit/Loss in Lacs*</label>
                                        <input  type="text" name="Co_Cred_PL_in_Lacs_17_18"  value="{{ old('Co_Cred_PL_in_Lacs_17_18') }}" class="form-control {{ $errors->has('Co_Cred_PL_in_Lacs_17_18') ? 'has-error' : '' }}" placeholder="2017-2018">
                                        <span class="text-danger">{{ $errors->first('Co_Cred_PL_in_Lacs_17_18') }}</span>
                                    </div>

                                    <div class="col-sm">
                                        <label for="Name of company">Profit/Loss in Lacs*</label>
                                        <input  type="text" name="Co_Cred_PL_in_Lacs_16_17"  value="{{ old('Co_Cred_PL_in_Lacs_16_17') }}" class="form-control {{ $errors->has('Co_Cred_PL_in_Lacs_16_17') ? 'has-error' : '' }}" placeholder="2016-2017">
                                        <span class="text-danger">{{ $errors->first('Co_Cred_PL_in_Lacs_16_17') }}</span>
                                    </div>

                                    <div class="col-sm">
                                        <label for="Name of company">Profit/Loss in Lacs*</label>
                                        <input  type="text" name="Co_Cred_PL_in_Lacs_15_16"  value="{{ old('Co_Cred_PL_in_Lacs_15_16') }}" class="form-control {{ $errors->has('Co_Cred_PL_in_Lacs_15_16') ? 'has-error' : '' }}" placeholder="2015-2016">
                                        <span class="text-danger">{{ $errors->first('Co_Cred_PL_in_Lacs_15_16') }}</span>
                                    </div>
                                </div> <!--row ends here-->
                            </div> <!--form group ends here-->

                            <div class="form-group">
                                <h4>Company Bank Details</h4>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm">
                                        <label for="Account Name">Account Name*</label>
                                        <input  type="text" value="{{ old('Account_Name') }}" name="Account_Name" class="form-control {{ $errors->has('Account_Name') ? 'has-error' : '' }}" placeholder="">
                                        <span class="text-danger">{{ $errors->first('Account_Name') }}</span>
                                    </div>

                                    <div class="col-sm">
                                        <label for="Account type">Account Type*</label>
                                        <input  value="{{ old('Account_Type') }}" type="text" name="Account_Type" class="form-control {{ $errors->has('Account_Type') ? 'has-error' : '' }}" placeholder="">
                                        <span class="text-danger">{{ $errors->first('Account_Type') }}</span>
                                    </div>

                                    <div class="col-sm">
                                        <label for="Account Number">Account Number*</label>
                                        <input  value="{{ old('Account_Number') }}"  type="text" name="Account_Number" class="form-control {{ $errors->has('Account_Number') ? 'has-error' : '' }}" placeholder="">
                                        <span class="text-danger">{{ $errors->first('Account_Number') }}</span>
                                    </div>

                                    <div class="col-sm">
                                        <label for="Bank Name">Bank Name*</label>
                                        <input  value="{{ old('Bank_Name') }}" type="text" name="Bank_Name" class="form-control {{ $errors->has('Bank_Name') ? 'has-error' : '' }}" placeholder="">
                                        <span class="text-danger">{{ $errors->first('Bank_Name') }}</span>
                                    </div>
                                </div> <!--row ends here-->
                            </div> <!--form group ends here-->


                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm">
                                        <label for="Branch Name">Branch Name*</label>
                                        <input value="{{ old('Branch_Name') }}" type="text" name="Branch_Name" class="form-control {{ $errors->has('Branch_Name') ? 'has-error' : '' }}" placeholder="">
                                        <span class="text-danger">{{ $errors->first('Branch_Name') }}</span>
                                    </div>

                                    <div class="col-sm">
                                        <label for="IFSC Code">IFSC Code*</label>
                                        <input value="{{ old('IFSC_Code') }}" type="text" name="IFSC_Code" class="form-control {{ $errors->has('IFSC_Code') ? 'has-error' : '' }}" placeholder="">
                                        <span class="text-danger">{{ $errors->first('IFSC_Code') }}</span>
                                    </div>

                                    <div class="col-sm">
                                        <label for="MICR Code">MICR Code*</label>
                                        <input value="{{ old('MICR_Code') }}" type="text" name="MICR_Code" class="form-control {{ $errors->has('MICR_Code') ? 'has-error' : '' }}" placeholder="">
                                        <span class="text-danger">{{ $errors->first('MICR_Code') }}</span>
                                    </div>

                                </div> <!--row ends here-->
                            </div> <!--form group ends here-->


                        </div> <!--details block ends here-->

                        <div class="detail-block">

                            <div class="form-group">
                                <h4>Nature of Business</h4>
                            </div>

                        

                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-6" style="padding: 0 35px;">
                                        <p class="checkbox-title"><strong>Civil Works</strong></p>
                                        <span class="text-danger">{{ $errors->first('n_o_b_civil_works') }}</span>
                                        <div class="input-group">
                                            <label class="form-check-label">
                                                <input  type="checkbox" name="n_o_b_civil_works[]" class="form-check-input" value="Civil structure work only">Civil structure work only
                                            </label>
                                        </div>

                                        <div class="input-group">
                                            <label class="form-check-label">
                                                <input  type="checkbox" name="n_o_b_civil_works[]" class="form-check-input" value="Complete Civil work i/c Furnishing, plumbing and electrical works">Complete Civil work i/c Furnishing, plumbing and electrical works
                                            </label>
                                        </div>
                                        <div class="input-group">
                                            <label class="form-check-label">
                                                <input  type="checkbox" name="n_o_b_civil_works[]" class="form-check-input" value="Piling">Piling
                                            </label>
                                        </div>

                                        <div class="input-group">
                                            <label class="form-check-label">
                                                <input  type="checkbox" name="n_o_b_civil_works[]" class="form-check-input" value="Dewatering">Dewatering
                                            </label>
                                        </div>

                                        <div class="input-group">
                                            <label class="form-check-label">
                                                <input  type="checkbox" name="n_o_b_civil_works[]" class="form-check-input" value="Nailing/ Soil Stablisation">Nailing/ Soil Stablisation
                                            </label>
                                        </div>

                                        <div class="input-group">
                                            <label class="form-check-label">
                                                <input  type="checkbox" name="n_o_b_civil_works[]" class="form-check-input" value="Water proofing">Water proofing
                                            </label>
                                        </div>

                                        <div class="input-group">
                                            <label class="form-check-label">
                                                <input  type="checkbox" name="n_o_b_civil_works[]" class="form-check-input" value="Stone Flooring/ Cladding">Stone Flooring/ Cladding
                                            </label>
                                        </div>

                                        <div class="input-group">
                                            <label class="form-check-label">
                                                <input  type="checkbox" name="n_o_b_civil_works[]" class="form-check-input" value="Internal Painting">Internal Painting
                                            </label>
                                        </div>

                                        <div class="input-group">
                                            <label class="form-check-label">
                                                <input  type="checkbox" name="n_o_b_civil_works[]" class="form-check-input" value="Texture">Texture
                                            </label>
                                        </div>

                                        <div class="input-group">
                                            <label class="form-check-label">
                                                <input  type="checkbox" name="n_o_b_civil_works[]" class="form-check-input" value="POP False Ceiling">POP False Ceiling
                                            </label>
                                        </div>

                                        <div class="input-group">
                                            <label class="form-check-label">
                                                <input  type="checkbox" name="n_o_b_civil_works[]" class="form-check-input" value="Grid False Ceiling">Grid False Ceiling
                                            </label>
                                        </div>

                                        <div class="input-group">
                                            <label class="form-check-label">
                                                <input  type="checkbox" name="n_o_b_civil_works[]" class="form-check-input" value="Structural Glazing /ACP">Structural Glazing /ACP
                                            </label>
                                        </div>


                                        <div class="input-group">
                                            <label class="form-check-label">
                                                <input  type="checkbox" name="n_o_b_civil_works[]" class="form-check-input" value="Interior Works">Interior Works
                                            </label>
                                        </div>

                                        <div class="input-group">
                                            <label class="form-check-label">
                                                <input  type="checkbox" name="n_o_b_civil_works[]" class="form-check-input" value="SS Railing">SS Railing
                                            </label>
                                        </div>

                                        <div class="input-group">
                                            <label class="form-check-label">
                                                <input  type="checkbox" name="n_o_b_civil_works[]" class="form-check-input" value="Glass Works">Glass Works
                                            </label>
                                        </div>

                                        <div class="input-group">
                                            <label class="form-check-label">
                                                <input  type="checkbox" name="n_o_b_civil_works[]" class="form-check-input" value="uPVC Doors/Windows">uPVC Doors/Windows
                                            </label>
                                        </div>

                                        <div class="input-group">
                                            <label class="form-check-label">
                                                <input  type="checkbox" name="n_o_b_civil_works[]" class="form-check-input" value="M.S.Gate,Grills,Railings">M.S.Gate,Grills,Railings
                                            </label>
                                        </div>

                                        <div >
                                            <label class="form-check-label">
                                                <input  type="checkbox" name="n_o_b_civil_works[]" class="form-check-input nma1" value="" >Any Other Not Mentioned Above
                                            </label>
                                            <input  style="width:250px; display: none;"  type="text" class="form-control nma1d" onkeyup="copyTO1(this)" placeholder="">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <p class="checkbox-title"><strong>External Development</strong></p>
                                        <span class="text-danger">{{ $errors->first('n_o_b_external_development') }}</span>
                                        <div class="input-group">
                                            <label class="form-check-label">
                                                <input  type="checkbox" name="n_o_b_external_development[]" class="form-check-input" value="Road Work (WBM)">Road Work (WBM)
                                            </label>
                                        </div>

                                        <div class="input-group">
                                            <label class="form-check-label">
                                                <input  type="checkbox" name="n_o_b_external_development[]" class="form-check-input" value="Premix Carpeting">Premix Carpeting
                                            </label>
                                        </div>

                                        <div class="input-group">
                                            <label class="form-check-label">
                                                <input  type="checkbox" name="n_o_b_external_development[]" class="form-check-input" value="Sewerage and Draining">Sewerage and Draining
                                            </label>
                                        </div>

                                        <div class="input-group">
                                            <label class="form-check-label">
                                                <input  type="checkbox" name="n_o_b_external_development[]" class="form-check-input" value="External Clarification">External Clarification
                                            </label>
                                        </div>

                                        <div class="input-group">
                                            <label class="form-check-label">
                                                <input  type="checkbox" name="n_o_b_external_development[]" class="form-check-input" value="STP">STP
                                            </label>
                                        </div>

                                        <div class="input-group">
                                            <label class="form-check-label">
                                                <input  type="checkbox" name="n_o_b_external_development[]" class="form-check-input" value="WTP">WTP
                                            </label>
                                        </div>

                                        <div class="input-group">
                                            <label class="form-check-label">
                                                <input  type="checkbox" class="form-check-input" value="OHT/UGT">OHT/UGT
                                            </label>
                                        </div>

                                        <div >
                                            <label class="form-check-label">
                                                <input  type="checkbox" name="n_o_b_external_development[]" class="form-check-input nma2" value="" >Any Other Not Mentioned Above
                                            </label>
                                            <input  style="width:250px;  display: none;"  type="text" class="form-control nma2d" onkeyup="copyTO2(this)" placeholder="">
                                        </div>


                                        <p class="checkbox-title" style="margin-top: 20px;"><strong>Service Works</strong></p>
                                        <span class="text-danger">{{ $errors->first('n_o_b_service_works') }}</span>
                                        <div class="input-group">
                                            <label class="form-check-label">
                                                <input  type="checkbox" name="n_o_b_service_works[]" class="form-check-input" value="Air Conditioning (Low Side)">Air Conditioning (Low Side)
                                            </label>
                                        </div>

                                        <div class="input-group">
                                            <label class="form-check-label">
                                                <input  type="checkbox" name="n_o_b_service_works[]" class="form-check-input" value="Mechanical Ventilation">Mechanical Ventilation
                                            </label>
                                        </div>

                                        <div class="input-group">
                                            <label class="form-check-label">
                                                <input  type="checkbox" name="n_o_b_service_works[]" class="form-check-input" value="Fire Fighting">Fire Fighting
                                            </label>
                                        </div>


                                        <div >
                                            <label class="form-check-label">
                                                <input  type="checkbox" name="n_o_b_service_works[]" class="form-check-input nma3" value="" >Any Other Not Mentioned Above
                                            </label>
                                            {{--<label for="Any Other Not Mentioned Above--}}
                                            {{--">Any Other Not Mentioned Above</label>--}}
                                            <input  style="display: none;width:250px;"  type="text" class="form-control nma3d" onkeyup="copyTO3(this)" placeholder="">
                                        </div>


                                    </div>


                                </div> <!--row ends here-->
                            </div> <!--form group ends here-->
                        </div> <!--details block ends here-->





            <div class="form-group">
                <div class="row">
                    <div class="col-md-4">
                        <h4>Executed Works Details</h4>

                        <span class="text-danger">{{ $errors->first('Exe_Works_Det_Client') }}</span>

                        {{--<span class="btn btn-primary cloned-btn-add1">Add List &nbsp;&nbsp; <i class="fa fa-plus"></i> </span>--}}
                    </div>

                </div>

                <div class="row cloned-item1 cloned-client-list">
                    <div class="col-sm">
                        <label for="">Client*</label>
                        <input name="Exe_Works_Det_Client[]" type="text" placeholder="" class="form-control {{ $errors->has('Exe_Works_Det_Client') ? 'has-error' : '' }}">
                        {{--<span class="text-danger">{{ $errors->first('Exe_Works_Det_Client') }}</span>--}}
                    </div>

                    <div class="col-sm">
                        <label for="">Contact Person Number*</label>
                        <input name="Exe_Works_Det_C_Contact_Person_With_Number[]" type="text" placeholder="" class="form-control {{ $errors->has('Exe_Works_Det_C_Contact_Person_With_Number') ? 'has-error' : '' }}">
                        <span class="text-danger">{{ $errors->first('Exe_Works_Det_C_Contact_Person_With_Number') }}</span>
                    </div>

                    <div class="col-sm">
                        <label for="">Project Details*</label>
                        <input name="Exe_Works_Det_C_Project_Details[]" type="text" placeholder="" class="form-control {{ $errors->has('Exe_Works_Det_C_Project_Details') ? 'has-error' : '' }}">
                        <span class="text-danger">{{ $errors->first('Exe_Works_Det_C_Project_Details') }}</span>
                    </div>

                    <div class="col-sm">
                        <label for="">Project Cost*</label>
                        <input name="Exe_Works_Det_CProject_Cost[]" type="text" placeholder="" class="form-control {{ $errors->has('Exe_Works_Det_CProject_Cost') ? 'has-error' : '' }}">
                        <span class="text-danger">{{ $errors->first('Exe_Works_Det_CProject_Cost') }}</span>
                    </div>

                    <div class="col-sm">
                        <label for="">Date Of Start*</label>
                        <input name="Exe_Works_Det_C_Date_Of_Start[]" type="text" placeholder="" class="form-control {{ $errors->has('Exe_Works_Det_C_Date_Of_Start') ? 'has-error' : '' }}">
                        <span class="text-danger">{{ $errors->first('Exe_Works_Det_C_Date_Of_Start') }}</span>
                    </div>

                    <div class="col-sm">
                        <label for="">Expected to Finish* </label>
                        <input name="Exe_Works_Det_C_Date_Of_Finish[]" type="text" placeholder="" class="form-control {{ $errors->has('Exe_Works_Det_C_Date_Of_Finish') ? 'has-error' : '' }}">
                        <span class="text-danger">{{ $errors->first('Exe_Works_Det_C_Date_Of_Finish') }}</span>
                    </div>




                    <div class="col-sm">
                        <label for=""></label>
                        <span style="padding: 8px;" class="btn btn-danger cloned-btn-remove1">Remove</span>

                    </div>

                </div>

                <div class="row">
                    <div class="col-md-12">
                        {{--<span class="b-title">Branch of office Details</span>--}}

                        <span style="float: right;" class="btn btn-primary cloned-btn-add1">Add List &nbsp;&nbsp; <i class="fa fa-plus"></i> </span>
                        {{--<span style="color: red; font-size: 14px;">*To add new row press “Add list” Button</span>--}}
                    </div>

                </div>


            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-md-4">
                        <h4>Ongoing Works Details</h4>
                        <span class="text-danger">{{ $errors->first('ongoing_Works_Det_Client') }}</span>
                        {{--<span class="btn btn-primary cloned-btn-add1">Add List &nbsp;&nbsp; <i class="fa fa-plus"></i> </span>--}}
                    </div>

                </div>

                <div class="row cloned-item2 cloned-client-list">
                    <div class="col-sm">
                        <label for="">Client*</label>
                        <input name="ongoing_Works_Det_Client[]" type="text" placeholder="" class="form-control {{ $errors->has('ongoing_Works_Det_Client') ? 'has-error' : '' }}">
                        {{--<span class="text-danger">{{ $errors->first('ongoing_Works_Det_Client') }}</span>--}}
                    </div>

                    <div class="col-sm">
                        <label for="">Contact Person Number*</label>
                        <input name="ongoing_Works_Det_C_Contact_Person_With_Number[]" type="text" placeholder="" class="form-control {{ $errors->has('ongoing_Works_Det_C_Contact_Person_With_Number') ? 'has-error' : '' }}">
                        <span class="text-danger">{{ $errors->first('ongoing_Works_Det_C_Contact_Person_With_Number') }}</span>
                    </div>

                    <div class="col-sm">
                        <label for="">Project Details*</label>
                        <input name="ongoing_Works_Det_C_Project_Details[]" type="text" placeholder="" class="form-control {{ $errors->has('ongoing_Works_Det_C_Project_Details') ? 'has-error' : '' }}">
                        <span class="text-danger">{{ $errors->first('ongoing_Works_Det_C_Project_Details') }}</span>
                    </div>

                    <div class="col-sm">
                        <label for="">Project Cost*</label>
                        <input name="ongoing_Works_Det_CProject_Cost[]" type="text" placeholder="" class="form-control {{ $errors->has('ongoing_Works_Det_CProject_Cost') ? 'has-error' : '' }}">
                        <span class="text-danger">{{ $errors->first('ongoing_Works_Det_CProject_Cost') }}</span>
                    </div>

                    <div class="col-sm">
                        <label for="">Date Of Start*</label>
                        <input name="ongoing_Works_Det_C_Date_Of_Start[]" type="text" placeholder="" class="form-control {{ $errors->has('ongoing_Works_Det_C_Date_Of_Start') ? 'has-error' : '' }}">
                        <span class="text-danger">{{ $errors->first('ongoing_Works_Det_C_Date_Of_Start') }}</span>
                    </div>

                    <div class="col-sm">
                        <label for="">Expected to Finish* </label>
                        <input name="ongoing_Works_Det_C_Date_Of_Finish[]" type="text" placeholder="" class="form-control {{ $errors->has('ongoing_Works_Det_C_Date_Of_Finish') ? 'has-error' : '' }}">
                        <span class="text-danger">{{ $errors->first('ongoing_Works_Det_C_Date_Of_Finish') }}</span>
                    </div>




                    <div class="col-sm">
                        <label for=""></label>
                        <span style="padding: 8px;" class="btn btn-danger cloned-btn-remove2">Remove</span>

                    </div>

                </div>

                <div class="row">
                    <div class="col-md-12" >
                        {{--<span class="b-title">Branch of office Details</span>--}}

                        <span style="float: right;" class="btn btn-primary cloned-btn-add2">Add List &nbsp;&nbsp; <i class="fa fa-plus"></i> </span>
                        {{--<span style="color: red; font-size: 14px;">*To add new row press “Add list” Button</span>--}}
                    </div>

                </div>


            </div>

                        <div class="form-group">
                            <label class="form-check-label" style="padding-left: 20px; margin-bottom: 20px;">
                                <input required="required"  type="checkbox" class="form-check-input" value="">I confirm that the information furnished above is correct to the best of my knowledge and belief.
                            </label>
                            <br>
                            <input  type="submit" value="Send" class="btn btn-primary" style="width: 150px;">
                        </div>


                        <h4 class="vendor-title text-center">Important Instruction</h4>
                        <ol class="imp-instruction">
                            <li>1.  Validity of the V.R FORM is 2 YEARS from the date of issue. </li>
                            <li>2.  The V.R FORM is to be completed in all respects. if any item is not relevant, please write "Not Applicable (NA)". </li>
                            <li>3.  Submission of incomplete application/short receipt of documents shall be sufficient cause for outright rejection and no further correspondence shall be entertained.
                            <li>4.  Physical verification of facilities as well as statement made/Submitted will be carried out as necessary.
                                Misinformation, if any, will make the registration liable to be cancelled.</li>
                            <li>5.  Quote VRN in all future correspondences.</li>
                            <li>6.  Kindly enclose all relevant documents.</li>

                        </ol>


                    {!! Form::close()  !!}





                </div>
            </div>
        </div>
    </section>




    <script src="{{ asset('js/projectstatic.js') }}"></script>
    <script>
        var iScroll = $(window).scrollTop();
        iScroll = iScroll + 300;
        $('html, body').animate({
            scrollTop: iScroll
        }, 50);
    </script>



    <script>
        function copyTO1(obj) {
            $(".nma1").val(obj.value);
        }
        function copyTO2(obj) {
            $(".nma2").val(obj.value);
        }
        function copyTO3(obj) {
            $(".nma3").val(obj.value);
        }
        (function(){
            $(document).ready(function(){
                $(".cloned-btn-add1").click(function () {
                    $(".cloned-item1:first").clone().insertAfter(".cloned-item1:last").find('input').val('').end();

                });


                $(document).on("click", ".cloned-btn-remove1", function() {
                    if($(".cloned-item1").length > 1){
                        $(this).closest(".cloned-item1").remove();

                    }
                });
            });
        })();

        (function(){
            $(document).ready(function(){
                $(".nma1").change(function() {if($(this).prop('checked')) {$('.nma1d').show();} else {
                        $('.nma1d').hide();}});
                $(".nma2").change(function() {if($(this).prop('checked')) {$('.nma2d').show();} else {
                        $('.nma2d').hide();}});
                $(".nma3").change(function() {if($(this).prop('checked')){$('.nma3d').show();} else {$('.nma3d').hide();}});
                $(".cloned-btn-add").click(function () {
                    $(".cloned-item:first").clone().insertAfter(".cloned-item:last").find('input').val('').end();;
                });


                $(document).on("click", ".cloned-btn-remove", function() {
                    if($(".cloned-item").length > 1){
                        $(this).closest(".cloned-item").remove();

                    }
                });
            });
        })();

        (function(){
            $(document).ready(function(){
                $(".cloned-btn-add2").click(function () {
                    $(".cloned-item2:first").clone().insertAfter(".cloned-item2:last").find('input').val('').end();;
                });


                $(document).on("click", ".cloned-btn-remove2", function() {
                    if($(".cloned-item2").length > 1){
                        $(this).closest(".cloned-item2").remove();

                    }
                });
            });
        })();
    </script>


    @include('layouts.footer')


@endsection
