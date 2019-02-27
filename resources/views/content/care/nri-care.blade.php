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



    <div class="top-content nri-care-banner">


    </div>

    <header>
        <nav id='cssmenu'>
            <div id="head-mobile"></div>
            <div class="button-cont button" onclick="myFunction(this)">
                <div class="bar1"></div>
                <div class="bar2"></div>
                <div class="bar3"></div>
            </div>
            <ul>
                <li><a href='/care/omaxe-care'>OMAXE CARE</a></li>
                <li class='active'><a href='/care/nri-care'>NRI CARE</a></li>
                <li><a href='/care/associate'>ASSOCIATES</a></li>
                <li><a href='/care/vendors'>VENDORS</a></li>
                <li><a href='/care/buyers-guide'>BUYERS GUIDE</a></li>

            </ul>
        </nav>
    </header>





    {{--{{ Breadcrumbs::render('disclaimer', "/about-us/awards-and-honors","Current Openings") }}--}}


    <ol class="breadcrumb">

        <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>

        <li class="breadcrumb-item active">Care</li>
        <li class="breadcrumb-item active">Nri Care</li>

    </ol>


    <section class="invcon">
        <div class="container omaxe-care-page">
            <div class="row omaxe-care">
                <div class="col-md-6">
                    <div class="border-right">
                        <p class="care-title">Project Query</p>
                        <p>Mobile :<a href="tel:+91-9999999861"> +91-9999999861 </a></p>
                        {{--<p>Call :<a href="tel:+91-9015161718"> +91-9015161718 </a></p>--}}
                        {{--<p>SMS : OMAXE to 56677</p>--}}
                        <p>Email : <a href="mailto:rakhi@omaxe.com">rakhi@omaxe.com</a></p>
                    </div>
                </div>

                <div class="col-md-6">
                    <p class="care-title">NRI Customer Care</p>
                    <p>Mobile<a href="tel:+91-9999999843"> +91-9999999843 </a></p>
                    <p>Email<a href="mailto:nricare@omaxe.com"> nricare@omaxe.com</a></p>
                    <p><a target="_blank" href="/care/RBI-Guidelines-For-NRIs.pdf"> RBI Guidelines for NRIs</a></p>
                </div>
            </div>


            <div class="nri-form">
                <div class="row">
                    <div class="col-md-12">
                        {{--<form action="">--}}


                        {!! Form::open(array('action' => 'MainController@contact_us_nri', 'method' => 'post','id'=>'contact_formm','enctype' => 'multipart/form-data')) !!}


                        {{--{{csrf_token()}}--}}

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

                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-6">
                                        <input type="text" name="name" placeholder="Name*" class="form-control  {{ $errors->has('name') ? 'has-error' : '' }}">
                                        <span class="text-danger">{{ $errors->first('name') }}</span>
                                    </div>

                                    <div class="col-md-6">
                                        <input type="text" name="email" placeholder="Email*" class="form-control {{ $errors->has('email') ? 'has-error' : '' }}">
                                        <span class="text-danger">{{ $errors->first('email') }}</span>
                                    </div>



                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row">

                                    <div class="col-md-6">
                                        <input type="tel" id="demo" name="phone" placeholder="Phone*" class="form-control {{ $errors->has('phone') ? 'has-error' : '' }}">
                                        <span class="text-danger">{{ $errors->first('phone') }}</span>
                                    </div>

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




                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row">

                                    <div class="col-md-6">
                                        <input name="city" type="text" placeholder="City*" class="form-control {{ $errors->has('city') ? 'has-error' : '' }}">

                                        <span class="text-danger">{{ $errors->first('city') }}</span>


                                    </div>

                                    {{--<div class="col-md-6">--}}

                                        {{--<select name="state" id="" class="form-control">--}}
                                            {{--<option value="">State*</option>--}}
                                            {{--<option value="">Select</option>--}}
                                            {{--<option value="">Select</option>--}}
                                            {{--<option value="">Select</option>--}}
                                            {{--<option value="">Select</option>--}}
                                            {{--<option value="">Select</option>--}}
                                        {{--</select>--}}

                                    {{--</div>--}}

                                    <div class="col-md-6">
                                        <textarea class="form-control {{ $errors->has('address') ? 'has-error' : '' }}" name="address" id="" cols="30" rows="2" placeholder="Address*"></textarea>

                                        <span class="text-danger">{{ $errors->first('address') }}</span>

                                    </div>

                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row">






                                    <div class="col-md-6">
                                        <textarea class="form-control {{ $errors->has('project_query') ? 'has-error' : '' }}" name="project_query" id="" cols="30" rows="2" placeholder="Query"></textarea>
                                        <span class="text-danger">{{ $errors->first('project_query') }}</span>

                                    </div>





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

                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    {{--<div class="col-md-6">--}}
                                        {{--<input type="text" placeholder="Please Enter Captcha*" class="form-control">--}}
                                    {{--</div>--}}

                                    <div class="col-md-6">
                                        {{--<input type="submit" value="Submit" class="form-control btn btn-primary" style="width: 200px;">--}}

                                        <button type="submit" class="btn btn-primary" style="width: 200px;" >Submit <span class="glyphicon glyphicon-send"></span></button>
                                    </div>



                                </div>
                            </div>

                        {{--</form>--}}


                        {!! Form::close() !!}

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
