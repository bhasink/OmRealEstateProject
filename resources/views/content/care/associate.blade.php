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

    </style>




    <div class="top-content associate-banner">


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
                <li class='active'><a href='/care/associate'>ASSOCIATES</a></li>
                <li><a href='/care/vendors'>VENDORS</a></li>
                <li><a href='/care/buyers-guide'>BUYERS GUIDE</a></li>

            </ul>
        </nav>
    </header>


    {{--{{ Breadcrumbs::render('disclaimer', "/about-us/awards-and-honors","Current Openings") }}--}}


    <ol class="breadcrumb">

        <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>

        <li class="breadcrumb-item active">Care</li>
        <li class="breadcrumb-item active">Associates</li>

    </ol>


    <section class="invcon">
        <div class="container ">

            <div class="associate">
            <div class="row">
                <div class="col-md-12">
                    <p>

                        @if($errors->any())
                            <div class="alert alert-danger" role="alert">
                    <p> Form field is missing. Please check below.</p>
                    </div>
                    @endif

                    </p>
                    <p>We promote our projects in India as well as abroad through our strong network of associates. We believe in long-term partnership and duly rewards and incentivizes top performers. The associates are evaluated regularly, encouraged & motivated to excel. Already enjoying a good reputation worldwide, we aspire to increase our network further. We invite application for Sales Associates, meeting the following criteria: .</p>


                    <p><i class="fa fa-angle-right"></i>&nbsp;&nbsp; Enterprising, dynamic personality with good contacts.</p>

                    <p><i class="fa fa-angle-right"></i>&nbsp;&nbsp; Necessary office infrastructure in a good location.</p>

                    <p><i class="fa fa-angle-right"></i>&nbsp;&nbsp; Successful track record in real estate projects marketing (experienced associates from other reputed fields are also welcome).</p>


                    <p><i class="fa fa-angle-right"></i>&nbsp;&nbsp; Expertise in both residential & commercial sales, including leasing & capitalization.</p>

                </div>

            </div>
            </div>
            <div class="nri-form">
                <div class="row">
                    <div class="col-md-12">
                        {{--<form action="">--}}

                        {!! Form::open(array('action' => 'MainController@contact_us_associate', 'method' => 'post','id'=>'contact_formm','enctype' => 'multipart/form-data')) !!}


                        <div class="flash-message">
                                {{--@foreach (['danger', 'warning', 'success', 'info'] as $msg)--}}
                                @if(Session::has('alert-success'))
                                    <script> alert('Thank you for your interest. We will get back to you sortly.')</script>
                                @endif
                                @if(Session::has('alert-danger'))
                                    <script> alert('Thanks, Problem while submitting.')</script>
                                @endif
                                {{--@endforeach--}}
                            </div>

                            <h4 class="nri-form-title">Business Associate Form</h4>

                            <div class="form-group">
                                <div class="row">

                                    <div class="col-md-6">
                                        <input type="text" name="company_name" placeholder="Company Name*" value="{{old('company_name')}}" class="form-control {{ $errors->has('company_name') ? 'has-error' : '' }}">
                                        <span class="text-danger">{{ $errors->first('company_name') }}</span>
                                    </div>

                                    <div class="col-md-6">
                                        <input type="text" name="name" placeholder="Name*" value="{{old('name')}}" class="form-control {{ $errors->has('name') ? 'has-error' : '' }}">
                                        <span class="text-danger">{{ $errors->first('name') }}</span>
                                    </div>



                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-6">

                                        <input type="text" name="city" placeholder="City*" value="{{old('city')}}" class="form-control {{ $errors->has('city') ? 'has-error' : '' }}">
                                        <span class="text-danger">{{ $errors->first('city') }}</span>
                                    </div>

                                    <div class="col-md-6">
                                        <input type="text" name="state" placeholder="State*" value="{{old('state')}}" class="form-control {{ $errors->has('state') ? 'has-error' : '' }}">
                                        <span class="text-danger">{{ $errors->first('state') }}</span>
                                    </div>




                                    {{--<div class="col-md-6">--}}
                                        {{--<input type="date" value="{{old('year_of_formation')}}" name="year_of_formation" placeholder="Year of formation*" class="form-control {{ $errors->has('year_of_formation') ? 'has-error' : '' }}">--}}
                                        {{--<span class="text-danger">{{ $errors->first('year_of_formation') }}</span>--}}
                                    {{--</div>--}}

                                </div>
                            </div>

                            {{--<div class="form-group">--}}
                                {{--<div class="row">--}}
                                    {{--<div class="col-md-6">--}}
                                        {{--<input type="text" name="pan_card" value="{{old('pan_card')}}" placeholder="PAN Card*" class="form-control  {{ $errors->has('pan_card') ? 'has-error' : '' }}">--}}
                                        {{--<span class="text-danger">{{ $errors->first('pan_card') }}</span>--}}

                                    {{--</div>--}}

                                    {{--<div class="col-md-6">--}}
                                        {{--<input type="text" name="gstin_no" value="{{old('gstin_no')}}" placeholder="GSTIN No*" class="form-control {{ $errors->has('gstin_no') ? 'has-error' : '' }}">--}}
                                        {{--<span class="text-danger">{{ $errors->first('gstin_no') }}</span>--}}

                                    {{--</div>--}}

                                {{--</div>--}}
                            {{--</div>--}}

                            {{--<div class="form-group">--}}
                                {{--<div class="row">--}}
                                    {{--<div class="col-md-6">--}}
                                        {{--<input type="text" name="rera_no" value="{{old('rera_no')}}" placeholder="RERA Registration No*" class="form-control {{ $errors->has('rera_no') ? 'has-error' : '' }}">--}}

                                        {{--<span class="text-danger">{{ $errors->first('rera_no') }}</span>--}}


                                    {{--</div>--}}

                                    {{--<div class="col-md-6">--}}
                                        {{--<input type="text" name="no_of_employee" value="{{old('no_of_employee')}}" class="form-control {{ $errors->has('no_of_employee') ? 'has-error' : '' }}"  placeholder="Number of Employees*">--}}
                                        {{--<span class="text-danger">{{ $errors->first('no_of_employee') }}</span>--}}

                                    {{--</div>--}}

                                {{--</div>--}}
                            {{--</div>--}}

                            {{--<div class="form-group">--}}
                                {{--<div class="row">--}}
                                    {{--<div class="col-md-6">--}}
                                        {{--<input type="text" name="client_list"  value="{{old('client_list')}}" placeholder="Client List*" class="form-control {{ $errors->has('client_list') ? 'has-error' : '' }}">--}}
                                        {{--<span class="text-danger">{{ $errors->first('client_list') }}</span>--}}
                                    {{--</div>--}}

                                    {{--<div class="col-md-6">--}}
                                        {{--<textarea class="form-control {{ $errors->has('address') ? 'has-error' : '' }}" name="address" id="" cols="30"  rows="2" placeholder="Address">{{old('client_list')}}</textarea>--}}
                                        {{--<span class="text-danger">{{ $errors->first('address') }}</span>--}}
                                    {{--</div>--}}

                                {{--</div>--}}
                            {{--</div>--}}

                            <div class="form-group">
                                <div class="row">

                                    <div class="col-md-6">
                                        <select name="country" id="" class="form-control {{ $errors->has('country') ? 'has-error' : '' }}">
                                            <option value="">Country*</option>
                                            <option value="United States">United States</option>
                                            <option value="United Kingdom">United Kingdom</option>
                                            <option value="Afghanistan">Afghanistan</option>
                                            <option value="Albania">Albania</option>
                                            <option value="Algeria">Algeria</option>
                                            <option value="American Samoa">American Samoa</option>
                                            <option value="Andorra">Andorra</option>
                                            <option value="Angola">Angola</option>
                                            <option value="Anguilla">Anguilla</option>
                                            <option value="Antarctica">Antarctica</option>
                                            <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                            <option value="Argentina">Argentina</option>
                                            <option value="Armenia">Armenia</option>
                                            <option value="Aruba">Aruba</option>
                                            <option value="Australia">Australia</option>
                                            <option value="Austria">Austria</option>
                                            <option value="Azerbaijan">Azerbaijan</option>
                                            <option value="Bahamas">Bahamas</option>
                                            <option value="Bahrain">Bahrain</option>
                                            <option value="Bangladesh">Bangladesh</option>
                                            <option value="Barbados">Barbados</option>
                                            <option value="Belarus">Belarus</option>
                                            <option value="Belgium">Belgium</option>
                                            <option value="Belize">Belize</option>
                                            <option value="Benin">Benin</option>
                                            <option value="Bermuda">Bermuda</option>
                                            <option value="Bhutan">Bhutan</option>
                                            <option value="Bolivia">Bolivia</option>
                                            <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                            <option value="Botswana">Botswana</option>
                                            <option value="Bouvet Island">Bouvet Island</option>
                                            <option value="Brazil">Brazil</option>
                                            <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                            <option value="Brunei Darussalam">Brunei Darussalam</option>
                                            <option value="Bulgaria">Bulgaria</option>
                                            <option value="Burkina Faso">Burkina Faso</option>
                                            <option value="Burundi">Burundi</option>
                                            <option value="Cambodia">Cambodia</option>
                                            <option value="Cameroon">Cameroon</option>
                                            <option value="Canada">Canada</option>
                                            <option value="Cape Verde">Cape Verde</option>
                                            <option value="Cayman Islands">Cayman Islands</option>
                                            <option value="Central African Republic">Central African Republic</option>
                                            <option value="Chad">Chad</option>
                                            <option value="Chile">Chile</option>
                                            <option value="China">China</option>
                                            <option value="Christmas Island">Christmas Island</option>
                                            <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                            <option value="Colombia">Colombia</option>
                                            <option value="Comoros">Comoros</option>
                                            <option value="Congo">Congo</option>
                                            <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
                                            <option value="Cook Islands">Cook Islands</option>
                                            <option value="Costa Rica">Costa Rica</option>
                                            <option value="Cote D'ivoire">Cote D'ivoire</option>
                                            <option value="Croatia">Croatia</option>
                                            <option value="Cuba">Cuba</option>
                                            <option value="Cyprus">Cyprus</option>
                                            <option value="Czech Republic">Czech Republic</option>
                                            <option value="Denmark">Denmark</option>
                                            <option value="Djibouti">Djibouti</option>
                                            <option value="Dominica">Dominica</option>
                                            <option value="Dominican Republic">Dominican Republic</option>
                                            <option value="Ecuador">Ecuador</option>
                                            <option value="Egypt">Egypt</option>
                                            <option value="El Salvador">El Salvador</option>
                                            <option value="Equatorial Guinea">Equatorial Guinea</option>
                                            <option value="Eritrea">Eritrea</option>
                                            <option value="Estonia">Estonia</option>
                                            <option value="Ethiopia">Ethiopia</option>
                                            <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                                            <option value="Faroe Islands">Faroe Islands</option>
                                            <option value="Fiji">Fiji</option>
                                            <option value="Finland">Finland</option>
                                            <option value="France">France</option>
                                            <option value="French Guiana">French Guiana</option>
                                            <option value="French Polynesia">French Polynesia</option>
                                            <option value="French Southern Territories">French Southern Territories</option>
                                            <option value="Gabon">Gabon</option>
                                            <option value="Gambia">Gambia</option>
                                            <option value="Georgia">Georgia</option>
                                            <option value="Germany">Germany</option>
                                            <option value="Ghana">Ghana</option>
                                            <option value="Gibraltar">Gibraltar</option>
                                            <option value="Greece">Greece</option>
                                            <option value="Greenland">Greenland</option>
                                            <option value="Grenada">Grenada</option>
                                            <option value="Guadeloupe">Guadeloupe</option>
                                            <option value="Guam">Guam</option>
                                            <option value="Guatemala">Guatemala</option>
                                            <option value="Guinea">Guinea</option>
                                            <option value="Guinea-bissau">Guinea-bissau</option>
                                            <option value="Guyana">Guyana</option>
                                            <option value="Haiti">Haiti</option>
                                            <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
                                            <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                                            <option value="Honduras">Honduras</option>
                                            <option value="Hong Kong">Hong Kong</option>
                                            <option value="Hungary">Hungary</option>
                                            <option value="Iceland">Iceland</option>
                                            <option selected="" value="India">India</option>
                                            <option value="Indonesia">Indonesia</option>
                                            <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                                            <option value="Iraq">Iraq</option>
                                            <option value="Ireland">Ireland</option>
                                            <option value="Israel">Israel</option>
                                            <option value="Italy">Italy</option>
                                            <option value="Jamaica">Jamaica</option>
                                            <option value="Japan">Japan</option>
                                            <option value="Jordan">Jordan</option>
                                            <option value="Kazakhstan">Kazakhstan</option>
                                            <option value="Kenya">Kenya</option>
                                            <option value="Kiribati">Kiribati</option>
                                            <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                                            <option value="Korea, Republic of">Korea, Republic of</option>
                                            <option value="Kuwait">Kuwait</option>
                                            <option value="Kyrgyzstan">Kyrgyzstan</option>
                                            <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                                            <option value="Latvia">Latvia</option>
                                            <option value="Lebanon">Lebanon</option>
                                            <option value="Lesotho">Lesotho</option>
                                            <option value="Liberia">Liberia</option>
                                            <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                                            <option value="Liechtenstein">Liechtenstein</option>
                                            <option value="Lithuania">Lithuania</option>
                                            <option value="Luxembourg">Luxembourg</option>
                                            <option value="Macao">Macao</option>
                                            <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
                                            <option value="Madagascar">Madagascar</option>
                                            <option value="Malawi">Malawi</option>
                                            <option value="Malaysia">Malaysia</option>
                                            <option value="Maldives">Maldives</option>
                                            <option value="Mali">Mali</option>
                                            <option value="Malta">Malta</option>
                                            <option value="Marshall Islands">Marshall Islands</option>
                                            <option value="Martinique">Martinique</option>
                                            <option value="Mauritania">Mauritania</option>
                                            <option value="Mauritius">Mauritius</option>
                                            <option value="Mayotte">Mayotte</option>
                                            <option value="Mexico">Mexico</option>
                                            <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                                            <option value="Moldova, Republic of">Moldova, Republic of</option>
                                            <option value="Monaco">Monaco</option>
                                            <option value="Mongolia">Mongolia</option>
                                            <option value="Montserrat">Montserrat</option>
                                            <option value="Morocco">Morocco</option>
                                            <option value="Mozambique">Mozambique</option>
                                            <option value="Myanmar">Myanmar</option>
                                            <option value="Namibia">Namibia</option>
                                            <option value="Nauru">Nauru</option>
                                            <option value="Nepal">Nepal</option>
                                            <option value="Netherlands">Netherlands</option>
                                            <option value="Netherlands Antilles">Netherlands Antilles</option>
                                            <option value="New Caledonia">New Caledonia</option>
                                            <option value="New Zealand">New Zealand</option>
                                            <option value="Nicaragua">Nicaragua</option>
                                            <option value="Niger">Niger</option>
                                            <option value="Nigeria">Nigeria</option>
                                            <option value="Niue">Niue</option>
                                            <option value="Norfolk Island">Norfolk Island</option>
                                            <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                            <option value="Norway">Norway</option>
                                            <option value="Oman">Oman</option>
                                            <option value="Pakistan">Pakistan</option>
                                            <option value="Palau">Palau</option>
                                            <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
                                            <option value="Panama">Panama</option>
                                            <option value="Papua New Guinea">Papua New Guinea</option>
                                            <option value="Paraguay">Paraguay</option>
                                            <option value="Peru">Peru</option>
                                            <option value="Philippines">Philippines</option>
                                            <option value="Pitcairn">Pitcairn</option>
                                            <option value="Poland">Poland</option>
                                            <option value="Portugal">Portugal</option>
                                            <option value="Puerto Rico">Puerto Rico</option>
                                            <option value="Qatar">Qatar</option>
                                            <option value="Reunion">Reunion</option>
                                            <option value="Romania">Romania</option>
                                            <option value="Russian Federation">Russian Federation</option>
                                            <option value="Rwanda">Rwanda</option>
                                            <option value="Saint Helena">Saint Helena</option>
                                            <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                            <option value="Saint Lucia">Saint Lucia</option>
                                            <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                                            <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
                                            <option value="Samoa">Samoa</option>
                                            <option value="San Marino">San Marino</option>
                                            <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                            <option value="Saudi Arabia">Saudi Arabia</option>
                                            <option value="Senegal">Senegal</option>
                                            <option value="Serbia and Montenegro">Serbia and Montenegro</option>
                                            <option value="Seychelles">Seychelles</option>
                                            <option value="Sierra Leone">Sierra Leone</option>
                                            <option value="Singapore">Singapore</option>
                                            <option value="Slovakia">Slovakia</option>
                                            <option value="Slovenia">Slovenia</option>
                                            <option value="Solomon Islands">Solomon Islands</option>
                                            <option value="Somalia">Somalia</option>
                                            <option value="South Africa">South Africa</option>
                                            <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
                                            <option value="Spain">Spain</option>
                                            <option value="Sri Lanka">Sri Lanka</option>
                                            <option value="Sudan">Sudan</option>
                                            <option value="Suriname">Suriname</option>
                                            <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                                            <option value="Swaziland">Swaziland</option>
                                            <option value="Sweden">Sweden</option>
                                            <option value="Switzerland">Switzerland</option>
                                            <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                                            <option value="Taiwan, Province of China">Taiwan, Province of China</option>
                                            <option value="Tajikistan">Tajikistan</option>
                                            <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                                            <option value="Thailand">Thailand</option>
                                            <option value="Timor-leste">Timor-leste</option>
                                            <option value="Togo">Togo</option>
                                            <option value="Tokelau">Tokelau</option>
                                            <option value="Tonga">Tonga</option>
                                            <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                            <option value="Tunisia">Tunisia</option>
                                            <option value="Turkey">Turkey</option>
                                            <option value="Turkmenistan">Turkmenistan</option>
                                            <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                            <option value="Tuvalu">Tuvalu</option>
                                            <option value="Uganda">Uganda</option>
                                            <option value="Ukraine">Ukraine</option>
                                            <option value="United Arab Emirates">United Arab Emirates</option>
                                            <option value="United Kingdom">United Kingdom</option>
                                            <option value="United States">United States</option>
                                            <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                                            <option value="Uruguay">Uruguay</option>
                                            <option value="Uzbekistan">Uzbekistan</option>
                                            <option value="Vanuatu">Vanuatu</option>
                                            <option value="Venezuela">Venezuela</option>
                                            <option value="Viet Nam">Viet Nam</option>
                                            <option value="Virgin Islands, British">Virgin Islands, British</option>
                                            <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                                            <option value="Wallis and Futuna">Wallis and Futuna</option>
                                            <option value="Western Sahara">Western Sahara</option>
                                            <option value="Yemen">Yemen</option>
                                            <option value="Zambia">Zambia</option>
                                            <option value="Zimbabwe">Zimbabwe</option>
                                        </select>

                                        <span class="text-danger">{{ $errors->first('country') }}</span>
                                    </div>

                                    <div class="col-md-6">
                                        <textarea class="form-control {{ $errors->has('address') ? 'has-error' : '' }}" name="address" id="" cols="30"  rows="2" placeholder="Address">{{old('client_list')}}</textarea>
                                        <span class="text-danger">{{ $errors->first('address') }}</span>
                                    </div>


                                    {{--<div class="col-md-6">--}}
                                        {{--<select name="" id="" class="form-control">--}}
                                            {{--<option value="">State*</option>--}}
                                            {{--<option value="">Select</option>--}}
                                            {{--<option value="">Select</option>--}}
                                            {{--<option value="">Select</option>--}}
                                            {{--<option value="">Select</option>--}}
                                            {{--<option value="">Select</option>--}}
                                        {{--</select>--}}
                                    {{--</div>--}}
                                    {{--<div class="col-md-6">--}}
                                        {{--<input type="text" name="landine_no" value="{{old('landine_no')}}" placeholder="Landline Number*" class="form-control {{ $errors->has('landine_no') ? 'has-error' : '' }}">--}}
                                        {{--<span class="text-danger">{{ $errors->first('landine_no') }}</span>--}}
                                    {{--</div>--}}
                                </div>
                            </div>


                            <div class="form-group">
                                <div class="row">

                                    <div class="col-md-6">
                                        <input type="text" name="pincode" placeholder="Pin Code*" value="{{old('pincode')}}" class="form-control {{ $errors->has('pincode') ? 'has-error' : '' }}">
                                        <span class="text-danger">{{ $errors->first('pincode') }}</span>
                                    </div>

                                    <div class="col-md-6">
                                        <input type="tel" id="demo"  name="phone" placeholder="Mobile Number*" value="{{old('phone')}}" class="form-control {{ $errors->has('phone') ? 'has-error' : '' }}">
                                        <span class="text-danger">{{ $errors->first('phone') }}</span>
                                    </div>

                                    {{--<div class="col-md-6">--}}
                                        {{--<input type="text" name="fax_no" placeholder="Fax Number" value="{{old('fax_no')}}"  class="form-control {{ $errors->has('fax_no') ? 'has-error' : '' }}">--}}
                                        {{--<span class="text-danger">{{ $errors->first('fax_no') }}</span>--}}
                                    {{--</div>--}}

                                </div>
                            </div>


                            <div class="form-group">
                                <div class="row">


                                    <div class="col-md-6">
                                        <input type="text" name="email_id"  value="{{old('email_id')}}" placeholder="Email id*" class="form-control {{ $errors->has('email_id') ? 'has-error' : '' }}">
                                        <span class="text-danger">{{ $errors->first('email_id') }}</span>
                                    </div>


                                    <div class="col-md-6">
                                        <input type="text" name="website" value="{{old('website')}}" placeholder="Website if any" class="form-control {{ $errors->has('website') ? 'has-error' : '' }}">
                                        <span class="text-danger">{{ $errors->first('website') }}</span>
                                    </div>

                                </div>
                            </div>


                            {{--<div class="form-group">--}}
                                {{--<div class="row">--}}
                                    {{--<div class="col-md-12" style="font-size: 14px;">--}}
                                        {{--<p >Are you associated with other Builders/Developers?</p>--}}
                                        {{--<label class="radio-inline"><input type="radio" name="associate_with_other_builders">&nbsp;&nbsp;Yes</label>&nbsp;&nbsp;&nbsp;&nbsp;--}}
                                        {{--<label class="radio-inline"><input type="radio" name="associate_with_other_builders">&nbsp;&nbsp;No</label>--}}


                                        {{--<span class="text-danger">{{ $errors->first('associate_with_other_builders') }}</span>--}}

                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}


                            {{--<div class="form-group">--}}
                                {{--<div class="row">--}}
                                    {{--<div class="col-md-12">--}}
                                        {{--<input type="text" name="builders_name_of_builders" value="{{old('builders_name_of_builders')}}" placeholder="Name of the builder/Developers:" class="form-control {{ $errors->has('builders_name_of_builders') ? 'has-error' : '' }}">--}}

                                        {{--<span class="text-danger">{{ $errors->first('builders_name_of_builders') }}</span>--}}

                                    {{--</div>--}}

                                {{--</div>--}}
                            {{--</div>--}}


                            {{--<div class="form-group">--}}
                                {{--<div class="row">--}}
                                    {{--<div class="col-md-12">--}}
                                        {{--<input type="text" name="builders_since_how_long" value="{{old('builders_since_how_long')}}" placeholder="Since How Long:" class="form-control {{ $errors->has('builders_since_how_long') ? 'has-error' : '' }}">--}}

                                        {{--<span class="text-danger">{{ $errors->first('builders_since_how_long') }}</span>--}}

                                    {{--</div>--}}

                                {{--</div>--}}
                            {{--</div>--}}

                            {{--<div class="form-group">--}}
                                {{--<div class="row">--}}
                                    {{--<div class="col-md-12">--}}
                                        {{--<input type="text" name="builders_name_of_project" value="{{old('builders_name_of_project')}}" placeholder="Name of the Projects:" class="form-control {{ $errors->has('builders_name_of_project') ? 'has-error' : '' }}">--}}
                                        {{--<span class="text-danger">{{ $errors->first('builders_name_of_project') }}</span>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}

                            {{--<div class="form-group">--}}
                                {{--<div class="row">--}}
                                    {{--<div class="col-md-12">--}}
                                        {{--<input type="text" name="builders_no_of_booking_given" value="{{old('builders_no_of_booking_given')}}" placeholder="Number of Booking given:" class="form-control {{ $errors->has('builders_no_of_booking_given') ? 'has-error' : '' }}">--}}
                                        {{--<span class="text-danger">{{ $errors->first('builders_no_of_booking_given') }}</span>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}


                            {{--<div class="form-group">--}}
                                {{--<div class="row">--}}
                                   {{--<div class="col-md-12">--}}
                                       {{--<h4 class="nri-form-title">Promoter's Details</h4>--}}
                                   {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}


                            {{--<div class="form-group">--}}
                                {{--<div class="row">--}}
                                    {{--<div class="col-md-6">--}}
                                        {{--<input type="text" name="promoters_name" value="{{old('promoters_name')}}" placeholder="Promoters(s) Name*" class="form-control {{ $errors->has('promoters_name') ? 'has-error' : '' }}">--}}
                                        {{--<span class="text-danger">{{ $errors->first('promoters_name') }}</span>--}}
                                    {{--</div>--}}

                                    {{--<div class="col-md-6">--}}
                                        {{--<select name="" id="" class="form-control">--}}
                                            {{--<option value="">City*</option>--}}
                                            {{--<option value="">Select</option>--}}
                                            {{--<option value="">Select</option>--}}
                                            {{--<option value="">Select</option>--}}
                                            {{--<option value="">Select</option>--}}
                                            {{--<option value="">Select</option>--}}
                                        {{--</select>--}}

                                        {{--<input type="text" name="promoters_city" value="{{old('promoters_city')}}" placeholder="Promoters(s) City*" class="form-control {{ $errors->has('promoters_city') ? 'has-error' : '' }}">--}}
                                        {{--<span class="text-danger">{{ $errors->first('promoters_city') }}</span>--}}
                                    {{--</div>--}}

                                {{--</div>--}}
                            {{--</div>--}}

                            {{--<div class="form-group">--}}
                                {{--<div class="row">--}}
                                    {{--<div class="col-md-6">--}}
                                        {{--<input type="text" name="promoters_edu_qualifiication"  value="{{old('promoters_edu_qualifiication')}}" placeholder="Education Qualification*" class="form-control {{ $errors->has('promoters_edu_qualifiication') ? 'has-error' : '' }}">--}}
                                        {{--<span class="text-danger">{{ $errors->first('promoters_edu_qualifiication') }}</span>--}}
                                    {{--</div>--}}

                                    {{--<div class="col-md-6">--}}
                                        {{--<select name="" id="" class="form-control">--}}
                                            {{--<option value="">State*</option>--}}
                                            {{--<option value="">Select</option>--}}
                                            {{--<option value="">Select</option>--}}
                                            {{--<option value="">Select</option>--}}
                                            {{--<option value="">Select</option>--}}
                                            {{--<option value="">Select</option>--}}
                                        {{--</select>--}}
                                    {{--</div>--}}
                                    {{--<div class="col-md-6">--}}
                                        {{--<input type="text" name="promoters_mobile_no"  value="{{old('promoters_mobile_no')}}" placeholder="Mobile No*" class="form-control {{ $errors->has('promoters_mobile_no') ? 'has-error' : '' }}">--}}
                                        {{--<span class="text-danger">{{ $errors->first('promoters_mobile_no') }}</span>--}}
                                    {{--</div>--}}

                                {{--</div>--}}
                            {{--</div>--}}

                            {{--<div class="form-group">--}}
                                {{--<div class="row">--}}


                                    {{--<div class="col-md-6">--}}
                                        {{--<input type="text" name="promoters_fax_no" value="{{old('promoters_fax_no')}}" placeholder="Fax No*" class="form-control {{ $errors->has('promoters_fax_no') ? 'has-error' : '' }}">--}}
                                        {{--<span class="text-danger">{{ $errors->first('promoters_fax_no') }}</span>--}}
                                    {{--</div>--}}

                                    {{--<div class="col-md-6">--}}
                                        {{--<input type="text" name="promoters_nationality" value="{{old('promoters_nationality')}}" placeholder="Nationality*" class="form-control {{ $errors->has('promoters_nationality') ? 'has-error' : '' }}">--}}
                                        {{--<span class="text-danger">{{ $errors->first('promoters_nationality') }}</span>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}


                            {{--<div class="form-group">--}}
                                {{--<div class="row">--}}


                                    {{--<div class="col-md-6">--}}
                                        {{--<textarea class="form-control {{ $errors->has('promoters_address') ? 'has-error' : '' }}" name="promoters_address" id="" cols="30" rows="2" placeholder="Address">{{old('promoters_address')}}</textarea>--}}
                                        {{--<span class="text-danger">{{ $errors->first('promoters_address') }}</span>--}}

                                    {{--</div>--}}

                                    {{--<div class="col-md-6">--}}
                                        {{--<input type="text" name="promoters_pincode" placeholder="Pin Code*" value="{{old('promoters_pincode')}}" class="form-control {{ $errors->has('promoters_pincode') ? 'has-error' : '' }}">--}}
                                        {{--<span class="text-danger">{{ $errors->first('promoters_pincode') }}</span>--}}
                                    {{--</div>--}}

                                {{--</div>--}}
                            {{--</div>--}}


                            {{--<div class="form-group">--}}
                                {{--<div class="row">--}}


                                    {{--<div class="col-md-6">--}}

                                        {{--<select name="promoters_country" id="" class="form-control {{ $errors->has('promoters_country') ? 'has-error' : '' }}">--}}
                                            {{--<option value="">Country*</option>--}}
                                            {{--<option value="United States">United States</option>--}}
                                            {{--<option value="United Kingdom">United Kingdom</option>--}}
                                            {{--<option value="Afghanistan">Afghanistan</option>--}}
                                            {{--<option value="Albania">Albania</option>--}}
                                            {{--<option value="Algeria">Algeria</option>--}}
                                            {{--<option value="American Samoa">American Samoa</option>--}}
                                            {{--<option value="Andorra">Andorra</option>--}}
                                            {{--<option value="Angola">Angola</option>--}}
                                            {{--<option value="Anguilla">Anguilla</option>--}}
                                            {{--<option value="Antarctica">Antarctica</option>--}}
                                            {{--<option value="Antigua and Barbuda">Antigua and Barbuda</option>--}}
                                            {{--<option value="Argentina">Argentina</option>--}}
                                            {{--<option value="Armenia">Armenia</option>--}}
                                            {{--<option value="Aruba">Aruba</option>--}}
                                            {{--<option value="Australia">Australia</option>--}}
                                            {{--<option value="Austria">Austria</option>--}}
                                            {{--<option value="Azerbaijan">Azerbaijan</option>--}}
                                            {{--<option value="Bahamas">Bahamas</option>--}}
                                            {{--<option value="Bahrain">Bahrain</option>--}}
                                            {{--<option value="Bangladesh">Bangladesh</option>--}}
                                            {{--<option value="Barbados">Barbados</option>--}}
                                            {{--<option value="Belarus">Belarus</option>--}}
                                            {{--<option value="Belgium">Belgium</option>--}}
                                            {{--<option value="Belize">Belize</option>--}}
                                            {{--<option value="Benin">Benin</option>--}}
                                            {{--<option value="Bermuda">Bermuda</option>--}}
                                            {{--<option value="Bhutan">Bhutan</option>--}}
                                            {{--<option value="Bolivia">Bolivia</option>--}}
                                            {{--<option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>--}}
                                            {{--<option value="Botswana">Botswana</option>--}}
                                            {{--<option value="Bouvet Island">Bouvet Island</option>--}}
                                            {{--<option value="Brazil">Brazil</option>--}}
                                            {{--<option value="British Indian Ocean Territory">British Indian Ocean Territory</option>--}}
                                            {{--<option value="Brunei Darussalam">Brunei Darussalam</option>--}}
                                            {{--<option value="Bulgaria">Bulgaria</option>--}}
                                            {{--<option value="Burkina Faso">Burkina Faso</option>--}}
                                            {{--<option value="Burundi">Burundi</option>--}}
                                            {{--<option value="Cambodia">Cambodia</option>--}}
                                            {{--<option value="Cameroon">Cameroon</option>--}}
                                            {{--<option value="Canada">Canada</option>--}}
                                            {{--<option value="Cape Verde">Cape Verde</option>--}}
                                            {{--<option value="Cayman Islands">Cayman Islands</option>--}}
                                            {{--<option value="Central African Republic">Central African Republic</option>--}}
                                            {{--<option value="Chad">Chad</option>--}}
                                            {{--<option value="Chile">Chile</option>--}}
                                            {{--<option value="China">China</option>--}}
                                            {{--<option value="Christmas Island">Christmas Island</option>--}}
                                            {{--<option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>--}}
                                            {{--<option value="Colombia">Colombia</option>--}}
                                            {{--<option value="Comoros">Comoros</option>--}}
                                            {{--<option value="Congo">Congo</option>--}}
                                            {{--<option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>--}}
                                            {{--<option value="Cook Islands">Cook Islands</option>--}}
                                            {{--<option value="Costa Rica">Costa Rica</option>--}}
                                            {{--<option value="Cote D'ivoire">Cote D'ivoire</option>--}}
                                            {{--<option value="Croatia">Croatia</option>--}}
                                            {{--<option value="Cuba">Cuba</option>--}}
                                            {{--<option value="Cyprus">Cyprus</option>--}}
                                            {{--<option value="Czech Republic">Czech Republic</option>--}}
                                            {{--<option value="Denmark">Denmark</option>--}}
                                            {{--<option value="Djibouti">Djibouti</option>--}}
                                            {{--<option value="Dominica">Dominica</option>--}}
                                            {{--<option value="Dominican Republic">Dominican Republic</option>--}}
                                            {{--<option value="Ecuador">Ecuador</option>--}}
                                            {{--<option value="Egypt">Egypt</option>--}}
                                            {{--<option value="El Salvador">El Salvador</option>--}}
                                            {{--<option value="Equatorial Guinea">Equatorial Guinea</option>--}}
                                            {{--<option value="Eritrea">Eritrea</option>--}}
                                            {{--<option value="Estonia">Estonia</option>--}}
                                            {{--<option value="Ethiopia">Ethiopia</option>--}}
                                            {{--<option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>--}}
                                            {{--<option value="Faroe Islands">Faroe Islands</option>--}}
                                            {{--<option value="Fiji">Fiji</option>--}}
                                            {{--<option value="Finland">Finland</option>--}}
                                            {{--<option value="France">France</option>--}}
                                            {{--<option value="French Guiana">French Guiana</option>--}}
                                            {{--<option value="French Polynesia">French Polynesia</option>--}}
                                            {{--<option value="French Southern Territories">French Southern Territories</option>--}}
                                            {{--<option value="Gabon">Gabon</option>--}}
                                            {{--<option value="Gambia">Gambia</option>--}}
                                            {{--<option value="Georgia">Georgia</option>--}}
                                            {{--<option value="Germany">Germany</option>--}}
                                            {{--<option value="Ghana">Ghana</option>--}}
                                            {{--<option value="Gibraltar">Gibraltar</option>--}}
                                            {{--<option value="Greece">Greece</option>--}}
                                            {{--<option value="Greenland">Greenland</option>--}}
                                            {{--<option value="Grenada">Grenada</option>--}}
                                            {{--<option value="Guadeloupe">Guadeloupe</option>--}}
                                            {{--<option value="Guam">Guam</option>--}}
                                            {{--<option value="Guatemala">Guatemala</option>--}}
                                            {{--<option value="Guinea">Guinea</option>--}}
                                            {{--<option value="Guinea-bissau">Guinea-bissau</option>--}}
                                            {{--<option value="Guyana">Guyana</option>--}}
                                            {{--<option value="Haiti">Haiti</option>--}}
                                            {{--<option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>--}}
                                            {{--<option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>--}}
                                            {{--<option value="Honduras">Honduras</option>--}}
                                            {{--<option value="Hong Kong">Hong Kong</option>--}}
                                            {{--<option value="Hungary">Hungary</option>--}}
                                            {{--<option value="Iceland">Iceland</option>--}}
                                            {{--<option selected="" value="India">India</option>--}}
                                            {{--<option value="Indonesia">Indonesia</option>--}}
                                            {{--<option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>--}}
                                            {{--<option value="Iraq">Iraq</option>--}}
                                            {{--<option value="Ireland">Ireland</option>--}}
                                            {{--<option value="Israel">Israel</option>--}}
                                            {{--<option value="Italy">Italy</option>--}}
                                            {{--<option value="Jamaica">Jamaica</option>--}}
                                            {{--<option value="Japan">Japan</option>--}}
                                            {{--<option value="Jordan">Jordan</option>--}}
                                            {{--<option value="Kazakhstan">Kazakhstan</option>--}}
                                            {{--<option value="Kenya">Kenya</option>--}}
                                            {{--<option value="Kiribati">Kiribati</option>--}}
                                            {{--<option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>--}}
                                            {{--<option value="Korea, Republic of">Korea, Republic of</option>--}}
                                            {{--<option value="Kuwait">Kuwait</option>--}}
                                            {{--<option value="Kyrgyzstan">Kyrgyzstan</option>--}}
                                            {{--<option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>--}}
                                            {{--<option value="Latvia">Latvia</option>--}}
                                            {{--<option value="Lebanon">Lebanon</option>--}}
                                            {{--<option value="Lesotho">Lesotho</option>--}}
                                            {{--<option value="Liberia">Liberia</option>--}}
                                            {{--<option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>--}}
                                            {{--<option value="Liechtenstein">Liechtenstein</option>--}}
                                            {{--<option value="Lithuania">Lithuania</option>--}}
                                            {{--<option value="Luxembourg">Luxembourg</option>--}}
                                            {{--<option value="Macao">Macao</option>--}}
                                            {{--<option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>--}}
                                            {{--<option value="Madagascar">Madagascar</option>--}}
                                            {{--<option value="Malawi">Malawi</option>--}}
                                            {{--<option value="Malaysia">Malaysia</option>--}}
                                            {{--<option value="Maldives">Maldives</option>--}}
                                            {{--<option value="Mali">Mali</option>--}}
                                            {{--<option value="Malta">Malta</option>--}}
                                            {{--<option value="Marshall Islands">Marshall Islands</option>--}}
                                            {{--<option value="Martinique">Martinique</option>--}}
                                            {{--<option value="Mauritania">Mauritania</option>--}}
                                            {{--<option value="Mauritius">Mauritius</option>--}}
                                            {{--<option value="Mayotte">Mayotte</option>--}}
                                            {{--<option value="Mexico">Mexico</option>--}}
                                            {{--<option value="Micronesia, Federated States of">Micronesia, Federated States of</option>--}}
                                            {{--<option value="Moldova, Republic of">Moldova, Republic of</option>--}}
                                            {{--<option value="Monaco">Monaco</option>--}}
                                            {{--<option value="Mongolia">Mongolia</option>--}}
                                            {{--<option value="Montserrat">Montserrat</option>--}}
                                            {{--<option value="Morocco">Morocco</option>--}}
                                            {{--<option value="Mozambique">Mozambique</option>--}}
                                            {{--<option value="Myanmar">Myanmar</option>--}}
                                            {{--<option value="Namibia">Namibia</option>--}}
                                            {{--<option value="Nauru">Nauru</option>--}}
                                            {{--<option value="Nepal">Nepal</option>--}}
                                            {{--<option value="Netherlands">Netherlands</option>--}}
                                            {{--<option value="Netherlands Antilles">Netherlands Antilles</option>--}}
                                            {{--<option value="New Caledonia">New Caledonia</option>--}}
                                            {{--<option value="New Zealand">New Zealand</option>--}}
                                            {{--<option value="Nicaragua">Nicaragua</option>--}}
                                            {{--<option value="Niger">Niger</option>--}}
                                            {{--<option value="Nigeria">Nigeria</option>--}}
                                            {{--<option value="Niue">Niue</option>--}}
                                            {{--<option value="Norfolk Island">Norfolk Island</option>--}}
                                            {{--<option value="Northern Mariana Islands">Northern Mariana Islands</option>--}}
                                            {{--<option value="Norway">Norway</option>--}}
                                            {{--<option value="Oman">Oman</option>--}}
                                            {{--<option value="Pakistan">Pakistan</option>--}}
                                            {{--<option value="Palau">Palau</option>--}}
                                            {{--<option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>--}}
                                            {{--<option value="Panama">Panama</option>--}}
                                            {{--<option value="Papua New Guinea">Papua New Guinea</option>--}}
                                            {{--<option value="Paraguay">Paraguay</option>--}}
                                            {{--<option value="Peru">Peru</option>--}}
                                            {{--<option value="Philippines">Philippines</option>--}}
                                            {{--<option value="Pitcairn">Pitcairn</option>--}}
                                            {{--<option value="Poland">Poland</option>--}}
                                            {{--<option value="Portugal">Portugal</option>--}}
                                            {{--<option value="Puerto Rico">Puerto Rico</option>--}}
                                            {{--<option value="Qatar">Qatar</option>--}}
                                            {{--<option value="Reunion">Reunion</option>--}}
                                            {{--<option value="Romania">Romania</option>--}}
                                            {{--<option value="Russian Federation">Russian Federation</option>--}}
                                            {{--<option value="Rwanda">Rwanda</option>--}}
                                            {{--<option value="Saint Helena">Saint Helena</option>--}}
                                            {{--<option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>--}}
                                            {{--<option value="Saint Lucia">Saint Lucia</option>--}}
                                            {{--<option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>--}}
                                            {{--<option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>--}}
                                            {{--<option value="Samoa">Samoa</option>--}}
                                            {{--<option value="San Marino">San Marino</option>--}}
                                            {{--<option value="Sao Tome and Principe">Sao Tome and Principe</option>--}}
                                            {{--<option value="Saudi Arabia">Saudi Arabia</option>--}}
                                            {{--<option value="Senegal">Senegal</option>--}}
                                            {{--<option value="Serbia and Montenegro">Serbia and Montenegro</option>--}}
                                            {{--<option value="Seychelles">Seychelles</option>--}}
                                            {{--<option value="Sierra Leone">Sierra Leone</option>--}}
                                            {{--<option value="Singapore">Singapore</option>--}}
                                            {{--<option value="Slovakia">Slovakia</option>--}}
                                            {{--<option value="Slovenia">Slovenia</option>--}}
                                            {{--<option value="Solomon Islands">Solomon Islands</option>--}}
                                            {{--<option value="Somalia">Somalia</option>--}}
                                            {{--<option value="South Africa">South Africa</option>--}}
                                            {{--<option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>--}}
                                            {{--<option value="Spain">Spain</option>--}}
                                            {{--<option value="Sri Lanka">Sri Lanka</option>--}}
                                            {{--<option value="Sudan">Sudan</option>--}}
                                            {{--<option value="Suriname">Suriname</option>--}}
                                            {{--<option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>--}}
                                            {{--<option value="Swaziland">Swaziland</option>--}}
                                            {{--<option value="Sweden">Sweden</option>--}}
                                            {{--<option value="Switzerland">Switzerland</option>--}}
                                            {{--<option value="Syrian Arab Republic">Syrian Arab Republic</option>--}}
                                            {{--<option value="Taiwan, Province of China">Taiwan, Province of China</option>--}}
                                            {{--<option value="Tajikistan">Tajikistan</option>--}}
                                            {{--<option value="Tanzania, United Republic of">Tanzania, United Republic of</option>--}}
                                            {{--<option value="Thailand">Thailand</option>--}}
                                            {{--<option value="Timor-leste">Timor-leste</option>--}}
                                            {{--<option value="Togo">Togo</option>--}}
                                            {{--<option value="Tokelau">Tokelau</option>--}}
                                            {{--<option value="Tonga">Tonga</option>--}}
                                            {{--<option value="Trinidad and Tobago">Trinidad and Tobago</option>--}}
                                            {{--<option value="Tunisia">Tunisia</option>--}}
                                            {{--<option value="Turkey">Turkey</option>--}}
                                            {{--<option value="Turkmenistan">Turkmenistan</option>--}}
                                            {{--<option value="Turks and Caicos Islands">Turks and Caicos Islands</option>--}}
                                            {{--<option value="Tuvalu">Tuvalu</option>--}}
                                            {{--<option value="Uganda">Uganda</option>--}}
                                            {{--<option value="Ukraine">Ukraine</option>--}}
                                            {{--<option value="United Arab Emirates">United Arab Emirates</option>--}}
                                            {{--<option value="United Kingdom">United Kingdom</option>--}}
                                            {{--<option value="United States">United States</option>--}}
                                            {{--<option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>--}}
                                            {{--<option value="Uruguay">Uruguay</option>--}}
                                            {{--<option value="Uzbekistan">Uzbekistan</option>--}}
                                            {{--<option value="Vanuatu">Vanuatu</option>--}}
                                            {{--<option value="Venezuela">Venezuela</option>--}}
                                            {{--<option value="Viet Nam">Viet Nam</option>--}}
                                            {{--<option value="Virgin Islands, British">Virgin Islands, British</option>--}}
                                            {{--<option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>--}}
                                            {{--<option value="Wallis and Futuna">Wallis and Futuna</option>--}}
                                            {{--<option value="Western Sahara">Western Sahara</option>--}}
                                            {{--<option value="Yemen">Yemen</option>--}}
                                            {{--<option value="Zambia">Zambia</option>--}}
                                            {{--<option value="Zimbabwe">Zimbabwe</option>--}}
                                        {{--</select>--}}

                                        {{--<span class="text-danger">{{ $errors->first('promoters_country') }}</span>--}}
                                    {{--</div>--}}
                                    {{--<div class="col-md-6">--}}
                                        {{--<input type="text" name="promoters_email"  value="{{old('promoters_email')}}" placeholder="Email Id*" class="form-control {{ $errors->has('promoters_email') ? 'has-error' : '' }}">--}}
                                        {{--<span class="text-danger">{{ $errors->first('promoters_email') }}</span>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}

                            <div class="form-group">
                                <div class="row">


                                    {{--<div class="col-md-6">--}}
                                        {{--<input type="text" name="promoters_core_competence" value="{{old('promoters_core_competence')}}" placeholder="Core Competence*" class="form-control {{ $errors->has('promoters_core_competence') ? 'has-error' : '' }}">--}}
                                        {{--<span class="text-danger">{{ $errors->first('promoters_core_competence') }}</span>--}}
                                    {{--</div>--}}


                                    <div class="col-md-6 mb-3">

                                        <div class="form-group">
                                            <div class="col-md-12 inputGroupContainer">
                                                {{--<label for="ReCaptcha">Recaptcha:</label>--}}
                                                {!! NoCaptcha::renderJs() !!}
                                                {!! NoCaptcha::display() !!}
                                            </div>
                                        </div>
                                        <span class="text-danger">{{ $errors->first('g-recaptcha-response') }}</span>

                                    </div>



                                    <div class="col-md-6">
                                        <input type="submit" value="Submit" class="form-control btn btn-primary" style="width: 200px;">
                                    </div>




                                </div>
                            </div>



                            <div class="form-group">
                                <div class="row">



                                    {{--<div class="col-md-6">--}}
                                        {{--<input type="text" placeholder="Please Enter Captcha*" class="form-control">--}}
                                    {{--</div>--}}





                        </form>


                                    {!! Form::close()  !!}
                    </div>
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


    @include('layouts.footer')


@endsection
