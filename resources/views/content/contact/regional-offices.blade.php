@extends('layouts.layout')
@section('content')
    @include('layouts.header')

    <style>
        .top-content{
            margin-bottom: 0px;
            height: 515px;
        }
        .contact-data{
            margin-bottom: 10px;
        }
        .col-md-6.col-sm-12.contact-data p {
            font-size: 14px;
            word-spacing: 2px;
            font-weight: 300;
            margin-bottom: 10px;
        }
        .col-md-6.col-sm-12.contact-data h3 {
            font-size: 18px;
            margin-left: 10px;
            font-weight: 500;
        }
        @media (max-width: 768px) {
            .res {
                display: flow-root;
            }
        }
    </style>

    <div class="top-content contact">


    </div>
    
    <header>
        <nav id='cssmenu'>
            <!-- <div class="logo"><a href="index.html">Responsive </a></div> -->
            <div id="head-mobile"></div>
            <div class="button-cont button" onclick="myFunction(this)">
                <div class="bar1"></div>
                <div class="bar2"></div>
                <div class="bar3"></div>
            </div>


            <ul>
                {{--<li><a href='/contact-us/offices'>OFFICES</a></li>--}}
                <li class="active"><a href='/contact-us/regional-offices'>REACH US</a></li>
                <li><a href='/contact-us/send-enquiry'>SEND ENQUIRY</a></li>
            </ul>

        </nav>
    </header>

{{--    {{ Breadcrumbs::render('investors', "/about-us/awards-and-honors","Reach Us") }}--}}

    <ol class="breadcrumb">

        <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>

        <li class="breadcrumb-item active">Contact Us</li>
        <li class="breadcrumb-item active">Reach Us</li>

    </ol>




    <section class="invcon">
        <div class="row-inner center">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="main-content-heading" style="margin-bottom: 50px;">
                            <h1 style="text-align: center;text-transform: uppercase;    letter-spacing: 1px;  font-weight: 300 !important; ">Reach US</h1>
                        </div>
                        <div class="form-cntUs text-left">
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="lhs-ru">
                                        <div class="addr-filter">
                                            <label>Office:</label>
                                            <select name="office_type" id="office_type" class="form-control">
                                                <option value="corporate">Corporate Office:</option>
                                                <option value="dubai">Registered Office:</option>
                                            </select>
                                        </div>
                                        <div class="addr-show">
                                            <div class="addr-sec" id="corporate-office" style="display: block;">
                                                <h3>Corporate Office:</h3>
                                                <p>
                                                    Omaxe House, 7, LSC, Kalkaji, <br>
                                                    New Delhi – 110019 (India) <br>
                                                </p>

                                                <iframe class="m-b-10" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3504.9039041436295!2d77.25525831508055!3d28.54260798245334!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce4ba795ea771%3A0x8f079504c4ece374!2sOmaxe+Ltd.!5e0!3m2!1sen!2sin!4v1523600871339" width="100%" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>

                                            </div>
                                            <div class="addr-sec" id="dubai-office" style="display: none;">
                                                <h3>Registered Office:</h3>
                                                <p>

                                                    Shop No. 19 B, First Floor, <br>
                                                    Omaxe Celebration Mall, Sohna Road, <br>
                                                    Gurgaon, Haryana- 122001 <br>
                                                </p>

                                                <iframe class="m-b-10" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3508.7261709296413!2d77.03399276507803!3d28.42751833249909!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d18748870d465%3A0x721233e4e1f3a60c!2sOmaxe+Celebration+Mall!5e0!3m2!1sen!2sin!4v1523600971658" width="100%" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>

                                            </div>

                                        </div>
                                        <div class="hr"></div>
                                        <div class="addr-sec">
                                            <h3>Customer Care Helpline:</h3>
                                        </div>
                                        <div class="addr-show">

                                            <div class="addr-sec" id="Domestic_sub" style="display:none;margin-top: 15px;">
                                                <!-- <h3>Domestic Toll Free Number</h3> -->
                                                <div id="toll_no">

                                                </div>
                                                <p class="addr-detls"> <i class="ico icon-clock"></i> 9:30 am to 6:30 pm</p>
                                                <p class="addr-detls"> <i class="ico icon-mail-alt"></i> <a href="mailto:customercare@omaxe.com">customercare@omaxe.com</a></p>
                                            </div>


                                            <div class="addr-sec" id="International" style="">
                                                <!-- <h3>International Numbers:</h3> -->
                                                <div class="addr-Inr">
                                                    <p> <strong>Toll free number:</strong>1800-102-0064</p>
                                                    <p> <strong>NRI CARE:</strong>+91- 9999999843</p>
                                                    <p> <strong>Sales:</strong>+91 9015161718</p>

                                                </div>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-8">
                                    <div class="rhs-ru">
                                        <ul class="text-center">
                                            <li>
                                                <div class="ruCont-box"> <img src="{{cdn()}}/images/static/icon_contact.png" alt="Contact us 24x7">
                                                    <h4>Contact us</h4>
                                                    <p><a href="tel:18001020064">1800 102 0064</a><br>Email: <a class="res" href="mailto:care@omaxe.com" target="_blank">care@omaxe.com</a>
                                                    </p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="ruCont-box"> <img src="{{cdn()}}/images/icons/icon_moNumber.png" alt="International Numbers">
                                                    <h4>NRI Care</h4>
                                                    <p> <a href="tel:01166575604">+91- 9999999843</a><br>Email: <a href="mailto:nricare@omaxe.com" target="_blank">nricare@omaxe.com</a></p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="ruCont-box"> <img src="{{cdn()}}/images/icons/icon_envolope.png" alt="Contractor &amp; Consultant Registration">
                                                    <h4>Investor Contact </h4>
                                                    <p>
                                                        {{--TEL NO:   <a href="tel:+91-11- 41896680-85"> +91-11- 41896680-85</a><br>--}}
                                                      
                                                        Email:  <a href="mailto:investors@omaxe.com">investors@omaxe.com</a>
                                                    </p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="ruCont-box"> <img src="{{cdn()}}/images/icons/icon_envolope.png" alt="Suppliers &amp; Manufacturers">
                                                    <h4>Media Contact</h4>
                                                    <p>Email: <a href="mailto:corpcomm@omaxe.com">corpcomm@omaxe.com</a></p>
                                                </div>
                                            </li>


                                            <li>
                                                <div class="ruCont-box"> <img src="{{cdn()}}/images/icons/icon_envolope.png" alt="Suppliers &amp; Manufacturers">
                                                    <h4>Associate Contact</h4>
                                                    <p>Email: <a href="mailto:dealercare@omaxe.com"> dealercare@omaxe.com</a></p>
                                                </div>
                                            </li>


                                            <li>
                                                <div class="ruCont-box"> <img src="{{cdn()}}/images/icons/icon_envolope.png" alt="Suppliers &amp; Manufacturers">
                                                    <h4>Career Contact</h4>
                                                    <p>Email: <a href="mailto:resume@omaxe.com"> resume@omaxe.com</a></p>
                                                </div>
                                            </li>

                                            <li class="width-100">
                                                <div class="ruCont-box text-left before-content-0">
                                                    {{--<img src="{{cdn()}}/images/icons/icon_envolope.png" alt="Regional Office Address">--}}
                                                    <h4>Regional Office Address</h4>
                                                    <div class="langP-filter ">
                                                        <select name="slctRegOffc" id="slctRegOffc" class="form-control margin-0">
                                                            <option value="0" selected="selected">Select Regional Office</option>
                                                            <option value="1">New Chandigarh Office</option>
                                                            <option value="2">Allahabad Office</option>
                                                            {{--<option value="3">Kanpur Office</option>--}}
                                                            <option value="4">Yamuna Nagar Office</option>
                                                            <option value="5">Indore Office</option>
                                                            <option value="6">Jaipur Office</option>
                                                            <option value="7">Lucknow Office</option>
                                                        </select>

                                                    </div>
                                                    <p id="regional_off_addr"></p>
                                                </div>
                                            </li>
                                            <li></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('layouts.footer')

    <script>

        $(document).ready(
            function()
            {
                $('#office_type').change(
                    function()
                    {
                        var office_type = $(this).val();
                        if(office_type!='dubai'){
                            $('#corporate-office').show();
                            $('#dubai-office').hide();
                        }else{
                            $('#dubai-office').show();
                            $('#corporate-office').hide();
                        }
                    }
                );

                $('#customer_type').change(
                    function()
                    {
                        var customer_type = $(this).val();
                        if(customer_type!='international'){
                            $('#Domestic').show();
                            $('#International').hide();
                        }else{
                            $('#International').show();
                            $('#Domestic').hide();
                            $('#Domestic_sub').hide();
                        }
                    }
                );

                $('#booking_unit').change(
                    function()
                    {
                        var booking_unit = $(this).val();
                        //alert(booking_unit);
                        if(booking_unit=='Ahmedabad'){
                            $('#Domestic_sub').show();
                            //$("#toll_no").html('<p class="addr-detls"> <a href="tel:18002665706"><i class="ico icon-phone"></i> 1800 266 5706</a></p>');
                            $("#toll_no").html('<p class="addr-detls"> <a href="tel:18002005601"><i class="ico icon-phone"></i> 1800 200 5601</a></p>');
                        }else if(booking_unit=='South'){
                            $('#Domestic_sub').show();
                            $("#toll_no").html('<p class="addr-detls"> <a href="tel:18002005602"><i class="ico icon-phone"></i> 1800 200 5602</a></p>');
                        }else if(booking_unit=='NCR'){
                            $('#Domestic_sub').show();
                            $("#toll_no").html('<p class="addr-detls"> <a href="tel:18002005603"><i class="ico icon-phone"></i> 1800 200 5603</a></p>');
                        }else if(booking_unit=='Kolkata'){
                            $('#Domestic_sub').show();
                            $("#toll_no").html('<p class="addr-detls"> <a href="tel:18002005604"><i class="ico icon-phone"></i> 1800 200 5604</a></p>');
                        }else if(booking_unit=='Mumbai'){
                            $('#Domestic_sub').show();
                            $("#toll_no").html('<p class="addr-detls"> <a href="tel:18002005605"><i class="ico icon-phone"></i> 1800 200 5605</a></p>');
                        }else if(booking_unit=='Pune'){
                            $('#Domestic_sub').show();
                            $("#toll_no").html('<p class="addr-detls"> <a href="tel:18002005606"><i class="ico icon-phone"></i> 1800 200 5606</a></p>');
                        }
                    }
                );
            }
        );
    </script>


    <script>

        var objRegOffice = {
            "1":{"ofc_addr":"Chandigarh Office","off_ad":"India Trade Tower, 1st Floor,<br>" +
                "Madhya Marg Extn. Road, New Chandigarh, <br>" +
                "Dist. SAS Nagar, Mullanpur, Punjab 140901 <br>" +
                "\n","iframe_data":"<iframe class=\"m-b-10\" src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13705.048145596067!2d76.73457!3d30.823323!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x7426e783d2ae67c6!2sIndia+Trade+Tower+-+Omaxe+(Official)!5e0!3m2!1sen!2sin!4v1505470126014\" width=\"100%\" height=\"300\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>"}
                ,"2":{"ofc_addr":"Allahabad Office","off_ad":"56A/56B, First Floor,<br>" +
                "Adarsh Square, Sardar Patel Marg, Civil Lines,<br>" +
                "Allahabad - 211 001\n" +
                "\n","iframe_data":"<iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7204.822844815243!2d81.835269!3d25.457934!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399acac292558407%3A0xcb3bab81c99bbe4a!2sOmaxe+Ltd.+Allahabad!5e0!3m2!1sen!2sin!4v1534749369505\" width=\"100%\" height=\"300\" frameborder=\"0\" style=\"border:0\" allowfullscreen=\"\"></iframe>"}
                // ,"3":{"ofc_addr":"Kanpur Office","off_ad":"G-3, Kan Chambers,<br>" +
                // "14/113, Civil Lines,<br>" +
                // "Kanpur, Uttar Pradesh- 208001","iframe_data":"<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3571.218406870901!2d80.34271031483011!3d26.480911784920394!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399c38a2b549c345%3A0xaecdc94598c7ab36!2sOmaxe+Ltd.+Kanpur!5e0!3m2!1sen!2sin!4v1505471367947\" width=\"100%\" height=\"300\" frameborder=\"0\" style=\"border:0\" allowfullscreen=\"\"></iframe>"}
                ,"4":{"ofc_addr":"Yamuna Nagar Office","off_ad":"S.C.O-3, OMAXE CITY PABNI ROAD <br>" +
                "JAGADHRI , DISTRICT- YAMUNA NAGAR,<br>" +
                "HARYANA- 135003","iframe_data":""}
                ,"5":{"ofc_addr":"Indore Office","off_ad":"FF-58, Orbit Mall, A.B. Road,<br>" +
                "Indore, Madhya Pradesh - 452010" +
                "\n","iframe_data":"<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d117778.04541159498!2d75.83168845558563!3d22.70727211723154!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3962fd541e0fffc1%3A0x8029b4339b02ec95!2sOmaxe!5e0!3m2!1sen!2sin!4v1505471716808\" width=\"100%\" height=\"300\" frameborder=\"0\" style=\"border:0\" allowfullscreen=\"\"></iframe>"}
                ,"6":{"ofc_addr":"Jaipur Office","off_ad":"Omaxe City, Villa no. 71A, 111th milestone,<br>" +
                "Near Bad Ke Bala Ji Bus Stand, Jaipur-Ajmer <br>" +
                "Expressway, Jaipur - 302026 (Rajasthan)" +
                "\n","iframe_data":"<iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14228.49816363806!2d75.7909247!3d26.931266!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x2c428567d9f6093c!2sOmaxe+Limited!5e0!3m2!1sen!2sin!4v1505471253283\" width=\"100%\" height=\"300\" frameborder=\"0\" style=\"border:0\" allowfullscreen=\"\"></iframe>"}
                ,"7":{"ofc_addr":"Lucknow Office","off_ad":"CYBER TOWER, Second Floor, TC- 34/V2 <br>" +
                "Vibhuti Khand, Gomti Nagar, Lucknow, <br>" +
                "Uttar Pradesh - 226010","iframe_data":"<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d113939.95976854571!2d80.89567495119653!3d26.820106619696904!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399be34899875653%3A0x2c222a3fd3c4f062!2sOmaxe+Hazratganj!5e0!3m2!1sen!2sin!4v1505471850508\" width=\"100%\" height=\"300\" frameborder=\"0\" style=\"border:0\" allowfullscreen=\"\"></iframe>"}
        };
        $(document).ready(function() {


            $('#slctRegOffc').change(
                function()
                {
                    var rofc = $(this).val();
                    $('#regional_off_addr').empty();
                    if(rofc)
                    {
                        var obj_rofc = objRegOffice[rofc];
                        var strrofc_detail = ' '+obj_rofc.iframe_data+obj_rofc.off_ad;
                        $('#regional_off_addr').html(strrofc_detail);
                    }
                }
            );
        });
    </script>


    <script src="{{ asset('js/projectstatic.js') }}"></script>
    <script>
        var iScroll = $(window).scrollTop();
        iScroll = iScroll + 300;
        $('html, body').animate({
            scrollTop: iScroll
        }, 50);
    </script>
@endsection
