@extends('layouts.layout')


@section('content')




    <style type="text/css">
        #success_message{ display: none;}
        .has-error{
            border: 1px solid red;
        }
        .nothas-error{
            border: 1px solid green;
        }

    </style>



    @include('layouts.header')
    <div class="project-page">


        <div class="container-fluid">
            <div class="top-content" style="background: url(/images/website_banner/{{$data['project_details']->banner_image}}) no-repeat center;
                    ">

                @if($data['project_details']->project_stamp_id == 1)

                    <img src='/images/stamps/Hot-selleing-property.png' class='stamp-lg' alt=''>

                @elseif($data['project_details']->project_stamp_id == 2)
                    <img src='/images/stamps/ready-to-move-in.png' class='stamp-lg' alt=''>

                @elseif($data['project_details']->project_stamp_id == 3)

                    <img src='/images/stamps/Delivered.png' class='stamp-lg' alt=''>
                @elseif($data['project_details']->project_stamp_id == 4)

                    <img src='/images/stamps/Under-Construction.png' class='stamp-lg' alt=''>

                @elseif($data['project_details']->project_stamp_id == 5)

                    <img src='/images/stamps/Just-launched.png' class='stamp-lg' alt=''>

                @elseif($data['project_details']->project_stamp_id == 6)

                    <img src='/images/stamps/sold-out.png' class='stamp-lg' alt=''>

                @elseif($data['project_details']->project_stamp_id == 7)

                    <img src='/images/stamps/Possession-Started.png' class='stamp-lg' alt=''>

                @elseif($data['project_details']->project_stamp_id == 8)

                    <img src='/images/stamps/Under-Construction-Sold-Out.png' class='stamp-lg' alt=''>


                @elseif($data['project_details']->project_stamp_id == 9)

                    <img src='/images/stamps/Delivered-Sold-Out.png' class='stamp-lg' alt=''>

                @elseif($data['project_details']->project_stamp_id == 10)

                    <img src='/images/stamps/Possession-Started-Sold-Out.png' class='stamp-lg' alt=''>

                @elseif($data['project_details']->project_stamp_id == 11)

                    <img src='/images/stamps/Operational.png' class='stamp-lg' alt=''>


                @elseif($data['project_details']->project_stamp_id == 12)


                    <img src='/images/stamps/Operationa-Sold-Out.png' class='stamp-lg' alt=''>

                @elseif($data['project_details']->project_stamp_id == 13)


                    <img src='/images/stamps/ready-to-fit-out.png' class='stamp-lg' alt=''>

                @elseif($data['project_details']->project_stamp_id == 14)


                    <img src='/images/stamps/completion_obtained_fitout_started.png' class='stamp-lg' alt=''>


                @endif


                <div class="content-cover" style="display: none; height: 520px;">
                </div>
                <div class="col-md-3 nopadding" style="
          width: 100%;
    z-index: 2;
    position: absolute;
    opacity: 1;
    bottom: -5px;">
                    @if($data['project_details'])
                        <img src="/images/project_logo/{{$data['project_details']->project_logo}}" style="width: 246px;" alt="">
                    @endif
                </div>

            </div>
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
                    {{--<li><a href=""></a></li>--}}
                    <li>
                        <a href="{{URL::to('/projects/'.strtolower(str_replace(" ","-",$data['project_details']->project_city->name)).'/'.$data['project_details']->project_type->name.'/'.$data['project_details']->project_slug)}}">{{strtoupper($data['project_details']->project_title)}}</a>
                    </li>
                    <li>
                        <a  href="{{URL::to('/projects/'.strtolower(str_replace(" ","-",$data['project_details']->project_city->name)).'/'.$data['project_details']->project_type->name.'/'.$data['project_details']->project_slug.'/'.'location')}}">LOCATION</a>
                    </li>
                    {{--<li><a href="{{URL::to('/projects/'.strtolower(str_replace(" ","-",$data['project_details']->project_city->name)).'/'.$data['project_details']->project_type->name.'/'.$data['project_details']->project_slug.'/'.'nearby')}}">WHAT'S NEAR BY</a></li>--}}

                    @if($data['project_floor_plans']->isEmpty())

                    @else

                        <li><a href="{{URL::to('/projects/'.strtolower(str_replace(" ","-",$data['project_details']->project_city->name)).'/'.$data['project_details']->project_type->name.'/'.$data['project_details']->project_slug.'/'.'floorplan')}}">FLOOR PLANS</a></li>

                    @endif

                    @if($data['gallery_images'][0] != null)
                        <li><a href="{{URL::to('/projects/'.strtolower(str_replace(" ","-",$data['project_details']->project_city->name)).'/'.$data['project_details']->project_type->name.'/'.$data['project_details']->project_slug.'/'.'gallery')}}">GALLERY</a></li>
                    @endif

                    <li><a href="{{URL::to('/projects/'.strtolower(str_replace(" ","-",$data['project_details']->project_city->name)).'/'.$data['project_details']->project_type->name.'/'.$data['project_details']->project_slug.'/'.'contact-us')}}">CONTACT US</a></li>

                    {{--<li class="dropdown">--}}
                    {{--<a href="#"  data-toggle="dropdown">Property Type </a>--}}
                    {{--<ul class="dropdown-menu" style="margin:0px;padding:0px;">--}}
                    {{--@if(   $data['ProjectPropertyType'])--}}
                    {{--@foreach($data['ProjectPropertyType'] as $ProjectPropertyTypes)--}}

                    {{--<li><a href="{{URL::to('/projects/'.strtolower(str_replace(" ","-",$data['project_details']->project_city->name)).'/'.$data['project_details']->project_type->name.'/'.$data['project_details']->project_slug.'/'.'propertytype'.'/'.$ProjectPropertyTypes->slug)}}">{{$ProjectPropertyTypes->property_type}}</a></li>--}}

                    {{--@endforeach--}}
                    {{--@endif--}}
                    {{--</ul>--}}
                    {{--</li>--}}

                    @if(isset($data['e_brochure'][0]))
                        <li class="active">
                            <a href="{{URL::to('/projects/'.strtolower(str_replace(" ","-",$data['project_details']->project_city->name)).'/'.$data['project_details']->project_type->name.'/'.$data['project_details']->project_slug.'/'.'ebrochure/contact-us')}}">E-Brochure</a>
                        </li>
                    @endif
                </ul>
            </nav>
        </header>




        <div class="container-fluid">
            {{ Breadcrumbs::render('ProjectDetailscontact', $data['project_details']->project_title,$data['project_details']->project_city->name,$data['project_details']->project_type->name,$data['project_details']->project_slug) }}
        </div>

        {{--    {{ Breadcrumbs::render('ProjectDetailslocation', $data['project_details']->project_title,$data['project_details']->project_city->name,$data['project_details']->project_type->name,'location') }}--}}

        <div class="container-fluid" style="margin-bottom: 80px;">
            <div class="main-content-heading" style="margin-top:50px; margin-bottom: 50px;">
                <h1 style="text-align: center;text-transform: uppercase;    letter-spacing: 1px;  font-weight: 300 !important; ">e-brochure </h1>
                <p style="text-align: center; font-size:14px;line-height: 1.7em; margin: 10px 0; font-weight: 400;">Please Fill the form to download e-brochure. We will get back to you shortly.</p>
            </div>


            <section class="invcon">
                <div class="container formcon">


                    <div class="col-md-12 text-center">

                        <h3 style="font-weight:100;color:#0067b2;">{{$data['project_details']->project_title}}</h3>

                    </div>

                    <div class="col-md-12" style="margin-top:20px;">

                        <div class="flash-message">
                            {{--@foreach (['danger', 'warning', 'success', 'info'] as $msg)--}}
                            @if(Session::has('alert-successs'))
                                <script> alert('Thank you for your interest. We will get back to you sortly.')</script>
                            @endif
                            @if(Session::has('alert-dangerr'))
                                <script> alert('Thanks, Problem while submitting.')</script>
                            @endif
                            {{--@endforeach--}}
                        </div>


                        {{--@if(count($errors))--}}
                        {{--<div class="alert alert-danger">--}}
                        {{--<strong>Whoops!</strong> There were some problems with your input.--}}
                        {{--<br/>--}}
                        {{--<ul>--}}
                        {{--@foreach($errors->all() as $error)--}}
                        {{--<li>{{ $error }}</li>--}}
                        {{--@endforeach--}}
                        {{--</ul>--}}
                        {{--</div>--}}
                        {{--@endif--}}


                        {!! Form::open(array('action' => 'ProjectController@contact_us_ebrochure', 'method' => 'post','id'=>'contact_formm','enctype' => 'multipart/form-data')) !!}


                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <label class="col-md-12 control-label"><b>Name</b></label>
                                    <div class="col-md-12 inputGroupContainer">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                            <input type="hidden" name="projects_id" value=" {{$data['project_details']->id}}">
                                            <input type="hidden" name="project_name" value=" {{$data['project_details']->project_title}}">
                                            <input type="hidden" name="project_city" value=" {{ $data['project_city'] }}">
                                            <input type="hidden" name="project_type" value=" {{$data['project_type']}}">
                                            <input type="hidden" name="project_slug" value=" {{ $data['project_details']->project_slug}}">

                                            @if(isset($data['e_brochure'][0]))
                                            <input type="hidden" name="ebrochure" value="{{$data['e_brochure'][0]->brouchure_pdf}}">

                                            @endif

                                            <input  name="name" placeholder="Name" class="form-control {{ $errors->has('name') ? 'has-error' : '' }}" value="{{ old('name') }}"  required="required" type="text">

                                        </div>
                                        <span class="text-danger">{{ $errors->first('name') }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <label class="col-md-12 control-label"><b>E-Mail</b></label>
                                    <div class="col-md-12 inputGroupContainer">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                                            <input name="email" placeholder="E-Mail Address" class="form-control {{ $errors->has('email') ? 'has-error' : '' }}" value="{{ old('email') }}"   type="text">
                                        </div>
                                        <span class="text-danger">{{ $errors->first('email') }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <label class="col-md-12 control-label"><b>Phone</b> </label>
                                    <div class="col-md-12 inputGroupContainer">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                                            <input type="tel" id="demo"  name="phone" placeholder="+91" class="form-control {{ $errors->has('phone') ? 'has-error' : '' }}" value="{{ old('phone') }}"  >
                                        </div>
                                        <span class="text-danger">{{ $errors->first('phone') }}</span>
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-6 mb-3">

                                <div class="form-group">
                                    <label class="col-md-12 control-label"><b>Residential Type</b></label>
                                    <div class="col-md-12 selectContainer">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                                            <select name="residential_type" class="form-control {{ $errors->has('residential_type') ? 'has-error' : '' }} selectpicker"  >
                                                <option value=" " >Please select residential type</option>
                                                <option>RI</option>
                                                <option>NRI</option>
                                            </select>
                                        </div>
                                        <span class="text-danger">{{ $errors->first('residential_type') }}</span>
                                    </div>
                                </div>
                            </div>

                        </div>


                        <div class="form-row">

                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <label class="col-md-12 control-label"><b>Address</b></label>
                                    <div class="col-md-12 inputGroupContainer">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                                            <textarea class="form-control {{ $errors->has('address') ? 'has-error' : '' }}" rows="3" name="address"  placeholder="Address">{{old('address')}}</textarea>
                                        </div>
                                        <span class="text-danger">{{ $errors->first('address') }}</span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 mb-3">

                                <div class="form-group">
                                    <div class="col-md-12 inputGroupContainer">
                                        <label for="ReCaptcha">Recaptcha:</label>
                                        {!! NoCaptcha::renderJs() !!}
                                        {!! NoCaptcha::display() !!}
                                        <span class="text-danger">{{ $errors->first('g-recaptcha-response') }}</span>
                                    </div>

                                </div>


                            </div>







                            {{--<div class="col-md-2 mb-3">--}}
                            {{--<div class="form-group">--}}
                            {{--<button style="margin-top: 20px;" onclick="event.preventDefault();" class="btn btn-primary">Send Otp</button>--}}
                            {{--</div>--}}
                            {{--</div>--}}

                            {{--<div class="col-md-6 mb-3">--}}
                                {{--<div class="form-group">--}}
                                    {{--<label class="col-md-12 control-label"><b>Country</b></label>--}}
                                    {{--<div class="col-md-12 selectContainer">--}}
                                        {{--<div class="input-group">--}}
                                            {{--<span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>--}}
                                            {{--<select name="country" class="form-control {{ $errors->has('country') ? 'has-error' : '' }} selectpicker"  >--}}
                                                {{--<option value=" " >Please select your country</option>--}}
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
                                        {{--</div>--}}
                                        {{--<span class="text-danger">{{ $errors->first('country') }}</span>--}}
                                    {{--</div>--}}
                                {{--</div>--}}

                            {{--</div>--}}

                        </div>


                        {{--<div class="form-row">--}}
                            {{--<div class="col-md-6 mb-3">--}}
                                {{--<div class="form-group">--}}
                                    {{--<label class="col-md-12 control-label"><b>City</b></label>--}}
                                    {{--<div class="col-md-12 inputGroupContainer">--}}
                                        {{--<div class="input-group">--}}
                                            {{--<span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>--}}
                                            {{--<input  name="city" placeholder="City" class="form-control {{ $errors->has('city') ? 'has-error' : '' }}" value="{{ old('city') }}"  type="text">--}}
                                        {{--</div>--}}
                                        {{--<span class="text-danger">{{ $errors->first('city') }}</span>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="col-md-6 mb-3">--}}
                                {{--<div class="form-group">--}}
                                    {{--<label class="col-md-12 control-label"><b>Zipcode</b> </label>--}}
                                    {{--<div class="col-md-12 inputGroupContainer">--}}
                                        {{--<div class="input-group">--}}
                                            {{--<span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>--}}
                                            {{--<input name="zipcode" placeholder="Zipcode" class="form-control {{ $errors->has('zipcode') ? 'has-error' : '' }}"  value="{{ old('zipcode') }}" type="text">--}}
                                        {{--</div>--}}
                                        {{--<span class="text-danger">{{ $errors->first('zipcode') }}</span>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}

                        {{--</div>--}}

                        <div class="form-row">
                            {{--<div class="col-md-6 mb-3">--}}
                                {{--<div class="form-group">--}}
                                    {{--<label class="col-md-12 control-label"><b>Project Query</b></label>--}}
                                    {{--<div class="col-md-12 inputGroupContainer">--}}
                                        {{--<div class="input-group">--}}
                                            {{--<span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>--}}
                                            {{--<textarea class="form-control {{ $errors->has('project_query') ? 'has-error' : '' }}" rows="3"  value="{{ old('project_query') }}"  name="project_query" placeholder="Project Query"></textarea>--}}
                                        {{--</div>--}}
                                        {{--<span class="text-danger">{{ $errors->first('project_query') }}</span>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}


                            <div class="col-md-12 mb-3">
                                <div class="form-group"style="    float: right;" >
                                    <label class="col-md-12 control-label"></label>
                                    <div class="col-md-12" >
                                        <button type="submit" style="    width: 200px;" class="btn btn-primary" >Submit <span class="glyphicon glyphicon-send"></span></button>
                                    </div>
                                </div>
                            </div>

                        </div>


                        {!! Form::close() !!}
                    </div>
                </div>
            </section>
        </div>
    </div>
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

