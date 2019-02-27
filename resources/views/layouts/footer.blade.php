<style>
    svg.svg-inline--fa.fa-sort-up.fa-w-10{
        transform: rotate(0deg);
        margin-top: 12px !important;
    }

    .active-arrow > svg.svg-inline--fa.fa-sort-up.fa-w-10{

        transform: rotate(180deg);
        margin-top: 6px !important;
    }

    .show {
        display: none;
        transition: 0.5s;
    }

    .footl:after{
        content: "";
        width  : 1px;
        right: 0;
        top: 20%;
        height   : 60%;
        border-radius: 50%;
        background: rgba(255,255,255,0.3);
        position: absolute;
        z-index: 2;
    }
    @media only screen and (min-width: 1035px){
        .foot-section{
            display: none;
            opacity: 0;
        }
    }
    @media only screen and (max-width: 1035px){
        .foot-section1{
            display: none;
            opacity: 0;
        }
    }
    a.payicon {
        float: right;
        padding-left: 10px;
    }
    /*.foot-data li{*/
    /*border-radius: 2px;*/
    /*}*/
</style>

<div class="foot-section1">
    <div class="footer">
        <div style="float: left;">
            <ul class="foot-data" style="transition: 0.5s;">
                <li><a href="{{url ('/about-us/awards-and-honors')}}">About Us</a></li>
                <li><a href="{{url ('/career/current-openings')}}">Careers</a></li>
                <li><a href="{{url ('/contact-us/regional-offices')}}">Contact Us</a></li>
                <li><a href="{{url('/disclaimer')}}">Disclaimer</a></li>
                <li><a href="{{url ('/sitemap')}}">Sitemap</a></li>
                {{--<li><a href="#">Support</a></li>--}}
                <li><a href="{{url('/faq')}}">FAQ</a></li>

                <li><a target="_blank" href="{{url('https://www.omaxe.com/media/pdf/EWS_Application Form allahabad Last change 04.01.2019.pdf')}}">EWS Form, Prayagraj</a></li>
                <li><a target="_blank" href="{{url('https://www.omaxe.com/media/pdf/Already approved layout of Omaxe City Palwal.jpg')}}">Approved layout, Palwal</a></li>

                <li><a target="_blank" href="{{url('https://www.omaxe.com/media/pdf/Revised-layout-of-Omaxe-City-Palwal.jpg')}}">De-License layout, Palwal</a></li>
                <li><a target="_blank" href="{{url('https://www.omaxe.com/media/pdf/De -License  Letter  Palwal .pdf')}}">De-License Letter, Palwal</a></li>
                <li><a target="_blank" href="{{url('https://www.omaxe.com/media/pdf/MSME - CONFIRMATION.pdf')}}">MSME CONFIRMATION LETTER</a></li>



            </ul>
        </div>

        <div style="float: right;">

        </div>
    </div>
    <div class="row" style="background-color: #171718;">
        <div class="col-md-12">
            <marquee direction="left" style="color: #fff;"> Disclaimer: This website is in the process of being updated. By accessing this website, the viewer confirms that the information including brochures and marketing collaterals on this website are solely for informational purposes only and the viewer has not relied on this information for making any booking/purchase in any project of the Company. Nothing on this website, constitutes advertising, marketing, booking, selling or an offer for sale, or invitation to purchase a unit in any project by the Company. The Company or  officer shall not be liable for any consequence of any action taken by the viewer relying on such material/ information on this website.
                   
                    {{--<strong><a style="color: #a2a2a2;" target="_blank" href="{{cdn()}}/images/footer-pdf/EIA-Clearance-5.5.2017.compressed-1.pdf">EIA-Clearance | </a> </strong>--}}
                    {{--<strong><a style="color: #a2a2a2;" target="_blank" href="{{cdn()}}/images/footer-pdf/FINAL-EIA-on-56-acre26.6.2015.pdf">FINAL-EIA on 65 acre(26.6.2015)</a></strong>--}}
                    {{--<strong><a style="color: #a2a2a2;" target="_blank" href="{{cdn()}}/images/footer-pdf/EIA-Compliance-Report-RR-December-2017.pdf">EIA Compliance Report RR( December 2017)</a></strong>--}}
                    {{--<strong><a style="color: #a2a2a2;" target="_blank" href="{{cdn()}}/images/footer-pdf/EIA-FINAL-ITT-INTT-2.1.2014.pdf">EIA -FINAL (ITT INTT)-2.1.2014</a></strong>--}}
                    {{--<strong><a style="color: #a2a2a2;" target="_blank" href="{{cdn()}}/images/footer-pdf/Final-Reply-moef-Compliance-Report-ITT-INT-December-2017.pdf">Final Reply moef Compliance Report ITT&amp; INT (December 2017) </a></strong>--}}
                    {{--<strong><a style="color: #a2a2a2;" target="_blank" href="{{cdn()}}/images/footer-pdf/Zoning-Plan-under-Group-Housing.jpg">Sector 35 Bahadurgarh Previous Layout  </a> </strong>--}}
                    {{--<strong><a style="color: #a2a2a2;" target="_blank" href="{{cdn()}}/images/footer-pdf/Permission-for-transfer-of-License-22-D-Rohtak.pdf">Permission for transfer of License 22 D Rohtak </a></strong>--}}
                    {{--<strong><a style="color: #a2a2a2;" target="_blank" href="{{cdn()}}/images/footer-pdf/License.compressed.pdf">License of 22D  </a></strong>--}}
                    {{--<strong><a style="color: #a2a2a2;" target="_blank" href="{{cdn()}}/images/footer-pdf/Layout-plan-11.jpg">Layout of 22D </a></strong>--}}
                    {{--<strong><a style="color: #a2a2a2;" target="_blank" href="{{cdn()}}/images/footer-pdf/EC for ITT & INTT (24.5.2018).pdf">EC for ITT & INTT (24.5.2018)</a></strong>--}}
                    {{--<strong><a style="color: #a2a2a2;" target="_blank" href="{{cdn()}}/images/footer-pdf/EIA-Clearance-Omaxe-Green-II.pdf">EIA Clearance Omaxe Green-II</a></strong>--}}
                {{--<strong><a style="color: #a2a2a2;" target="_blank" href="{{cdn()}}/images/footer-pdf/Grant-of-LOI -10.5875-Acres-Rohtak-22D.pdf">Grant of LOI  10.5875 Acres Rohtak -22D </a></strong>--}}
                {{--<strong><a style="color: #a2a2a2;" target="_blank" href="{{cdn()}}/images/footer-pdf/Layout-plan-10.jpg">Layout plan 10 </a></strong>--}}
                {{--<strong><a style="color: #a2a2a2;" target="_blank" href="{{cdn()}}/images/footer-pdf/Rohtak 22-D-53.80-Acres-Layout-plan.jpg">Rohtak 22 D  53.80  Acres Layout plan.</a></strong>--}}




            </marquee>
        </div>
    </div>
    <div class="foot-inner1" style="  transition: 0.5s;    width: 100%; border-top:1px solid #ffffff;">
        <div class="row" style="  transition: 0.5s;">
            <div class="col-md-6 footl" style="background: #171718; color: #fff; transition: 0.5s;width: 100%;padding: 50px;">
                <div class="row" style="  transition: 0.5s;">

                    <div class="col-md-6">
                        <div class="main-content-heading">
                            <h5 style="text-transform: uppercase;  font-weight: 100; ">REGISTERED OFFICE</h5>
                        </div>
                        <p style="text-align: left; font-size: 14px;font-weight: 100; margin-top: 15px; line-height: 1.7em;">
                            <i style="font-size: 16px;" class="fas fa-map-marker-alt"></i>&nbsp;&nbsp;
                            Shop No. 19 B, First Floor,
                            Omaxe Celebration Mall, Sohna Road,
                            Gurgaon, Haryana- 122001
                        </p>
                    </div>


                    <div class="col-md-6">
                        <div class="main-content-heading">
                            <h5 style="text-transform: uppercase; font-weight: 100; ">CORPORATE OFFICE</h5>
                        </div>
                        <p style="line-height:1.7em; font-weight: 100;text-align: justify; font-size: 14px; margin-top: 15px;">
                          <span>
                              <i style="font-size: 16px;"  class="fas fa-map-marker-alt"></i>
                          </span>
                            Omaxe House, 7, LSC, Kalkaji,
                            New Delhi – 110019 (India)
                        </p>
                    </div>
                </div>

                <div class="row" style="background: #171718;color: #fff;transition: 0.5s;padding: 40px 15px;">
                    <div class="col-lg-12">
                        <ul class="foot-data fd social-icons" style="transition: 0.5s;">

                            <li><a  target="_blank" href="https://www.linkedin.com/company/omaxe-limited/"><i class="fab fa-linkedin"></i></a></li>

                            <li><a target="_blank" href="https://www.facebook.com/Omaxeltd/"><i class="fab fa-facebook-f"></i></a></li>

                            <li><a target="_blank" href="https://www.instagram.com/omaxeltd/"><i class="fab fa-instagram"></i></a></li>

                            <li><a   target="_blank" href="https://www.youtube.com/user/omaxelimited"><i class="fab fa-youtube"></i></a></li>

                            <li><a   target="_blank" href="https://plus.google.com/u/0/117970255789124285670"><i class="fab fa-google"></i></a></li>

                            <li><a target="_blank" href="https://twitter.com/OmaxeLimited"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="http://blog.omaxe.com" target="_blank" title="blog"><i class="fab fa-blogger-b"></i></a></li>

                        </ul>

                    </div>
                </div>

            </div>
            <div class="col-md-6" style="background: #171718;color: #fff;transition: 0.5s;padding: 50px;">
                <div class="row" style="  transition: 0.5s;">
                    <div class="col-md-12">
                        <div>
                            {{--<iframe width="100%" height="90px;" frameborder="0" style="border:0"--}}
                                    {{--src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJcadeebrkDDkRdOPsxASVB48&key=AIzaSyDFYxLwNCfOxCn3mPtuuAndm4AX7yk4YZA" allowfullscreen></iframe>--}}

                            <img class="lazy" data-src="/images/static/maps.png" alt="">

                            {{--<div id="my-fast-map" data-iframe-width="600" data-iframe-height="300" data-iframe-src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJcadeebrkDDkRdOPsxASVB48&key=AIzaSyDFYxLwNCfOxCn3mPtuuAndm4AX7yk4YZA">--}}
                                {{--<a href="#" title="Click to activate map"><img src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJcadeebrkDDkRdOPsxASVB48&key=AIzaSyDFYxLwNCfOxCn3mPtuuAndm4AX7yk4YZA" alt="Click to activate map"></a>--}}
                            {{--</div>--}}

                            {{--<script>--}}
                                {{--function initMap() {--}}
                                    {{--var map = new google.maps.Map(document.getElementById('map'), {--}}
                                        {{--center: {lat: -34.397, lng: 150.644},--}}
                                        {{--zoom: 8--}}
                                    {{--});--}}
                                {{--}--}}
                            {{--</script>--}}
                            {{--<script src="https://maps.googleapis.com/maps/api/js?callback=initMap" async defer></script>--}}

                        </div>
                    </div>
                    <div class="col-md-12">
                        <p style="font-size: 13px;font-weight: 100; text-align: left; margin-top: 10px;" class="sec1"> <i style="font-size: 15px; margin-right: 10px;"  class="fas fa-globe"></i>
                            <a target="_blank" style="color: #ffffff;text-decoration: none;" href="http://rohtasgoel.in/">rohtasgoel.in </a> <span style="margin-left: 5px;margin-right: 5px;">|</span> <a target="_blank" style="color: #ffffff; text-decoration: none;" href="http://www.mohitgoel.in/"> mohitgoel.in</a>

                            <a target="_blank" href="/payment-gateway" class="payicon">
                                <img class="lazy" data-src="{{cdn()}}/images/static/payu-money.svg" width="35" height="35" alt="">
                            </a>

                            <a target="_blank" href="{{url('/fixed-deposit')}}" class="payicon">
                                <img class="lazy" data-src="{{cdn()}}/images/static/FD.svg" width="35" height="35" alt="">
                            </a>



                            <a  href="/currency-converter/" class="payicon">
                                <img class="lazy" data-src="{{cdn()}}/images/static/Rupee.svg" width="35" height="35" alt="">
                            </a>

                            <a  href="/emi-calculator/" class="payicon">
                                <img class="lazy" data-src="{{cdn()}}/images/static/Calculator.svg" width="35" height="35" alt="">
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="foot-section">
    <div class="footer" style="margin-top: 0px;">
        <a id="foottog" href="#">
            <span class="footer-toggle ftog sf">
            <i style="font-size: large;margin-top: 2px;" class="fas fa-sort-up"></i>
                <br>
        </span>
        </a>
        <div>
            <ul class="foot-data text-center" style="transition: 0.5s;">
                <li><a href="{{url ('/about-us/awards-and-honors')}}">About US</a></li>
                <li><a href="{{url ('/career/current-openings')}}">Careers</a></li>
                <li><a href="{{url ('/contact-us/regional-offices')}}">Contact Us</a></li>
                <li><a href="{{url('/disclaimer')}}">Disclaimer</a></li>
                <li><a href="{{url ('/sitemap')}}">Sitemap</a></li>
                {{--<li><a href="#">Support</a></li>--}}
                <li><a href="{{url('/faq')}}">FAQ</a></li>
                <li><a target="_blank" href="{{url('https://www.omaxe.com/media/images/Site plans Robust 2016.jpg')}}">Site Plan Robust 2016</a></li>
                <li><a target="_blank" href="{{url('https://www.omaxe.com/media/images/Site plan Robust 2018.jpg')}}">Site Plan Robust 2018</a></li>
                <li><a target="_blank" href="{{url('https://www.omaxe.com/media/images/Principal Approval.pdf')}}">Principal Approval&nbsp;&nbsp;</a></li>
                <li><a target="_blank" href="{{url('https://www.omaxe.com/media/pdf/MSME - CONFIRMATION.pdf')}}">MSME CONFIRMATION LETTER</a></li>
            </ul>
        </div>
        <div class="text-center">
            <ul class="foot-data fd social-icons" style="transition: 0.5s;">

                <li><a  target="_blank" href="https://www.linkedin.com/company/93463/admin/updates/"><i class="fab fa-linkedin"></i></a></li>

                <li><a target="_blank" href="https://www.facebook.com/Omaxeltd/"><i class="fab fa-facebook-f"></i></a></li>

                <li><a target="_blank" href="https://www.instagram.com/omaxeltd/"><i class="fab fa-instagram"></i></a></li>

                <li><a   target="_blank" href="https://www.youtube.com/user/omaxelimited"><i class="fab fa-youtube"></i></a></li>

                <li><a   target="_blank" href="https://plus.google.com/u/0/117970255789124285670"><i class="fab fa-google"></i></a></li>

                <li><a href="http://blog.omaxe.com" target="_blank" title="blog"><i class="fab fa-blogger-b"></i></a></li>



                <li><a target="_blank" href="https://twitter.com/OmaxeLimited"><i class="fab fa-twitter"></i></a></li>

            </ul>
        </div>
    </div>
    <div class="row" style="background-color: #171718; padding: 10px 0">
        <div class="col-md-12">
            <marquee direction="left" style="color: #fff;"> Disclaimer: This website is in the process of being updated. By accessing this website, the viewer confirms that the information including brochures and marketing collaterals on this website are solely for informational purposes only and the viewer has not relied on this information for making any booking/purchase in any project of the Company. Nothing on this website, constitutes advertising, marketing, booking, selling or an offer for sale, or invitation to purchase a unit in any project by the Company. The Company or  officer shall not be liable for any consequence of any action taken by the viewer relying on such material/ information on this website.
                <strong><a style="color: #a2a2a2;" target="_blank" href="{{cdn()}}/images/footer-pdf/booklet-Bhagat-Singh-Enclave-and-Rajguru-Enclave-EWS-–-LIG.pdf">Booklet-Bhagat Singh Enclave and Rajguru Enclave (EWS - LIG)</a></strong>
                <strong><a style="color: #a2a2a2;" target="_blank" href="{{cdn()}}/images/footer-pdf/EIA-Clearance-5.5.2017.compressed-1.pdf">EIA-Clearance | </a> </strong>
                <strong><a style="color: #a2a2a2;" target="_blank" href="{{cdn()}}/images/footer-pdf/FINAL-EIA-on-56-acre26.6.2015.pdf">FINAL-EIA on 65 acre(26.6.2015)</a></strong>
                <strong><a style="color: #a2a2a2;" target="_blank" href="{{cdn()}}/images/footer-pdf/EIA-Compliance-Report-RR-December-2017.pdf">EIA Compliance Report RR( December 2017)</a></strong>
                <strong><a style="color: #a2a2a2;" target="_blank" href="{{cdn()}}/images/footer-pdf/EIA-FINAL-ITT-INTT-2.1.2014.pdf">EIA -FINAL (ITT INTT)-2.1.2014</a></strong>
                <strong><a style="color: #a2a2a2;" target="_blank" href="{{cdn()}}/images/footer-pdf/Final-Reply-moef-Compliance-Report-ITT-INT-December-2017.pdf">Final Reply moef Compliance Report ITT&amp; INT (December 2017) </a></strong>
                <strong><a style="color: #a2a2a2;" target="_blank" href="{{cdn()}}/images/footer-pdf/Zoning-Plan-under-Group-Housing.jpg">Sector 35 Bahadurgarh Previous Layout  </a> </strong>
                <strong><a style="color: #a2a2a2;" target="_blank" href="{{cdn()}}/images/footer-pdf/Permission-for-transfer-of-License-22-D-Rohtak.pdf">Permission for transfer of License 22 D Rohtak </a></strong>
                <strong><a style="color: #a2a2a2;" target="_blank" href="{{cdn()}}/images/footer-pdf/License.compressed.pdf">License of 22D  </a></strong>
                <strong><a style="color: #a2a2a2;" target="_blank" href="/images/footer-pdf/EC for ITT & INTT (24.5.2018).pdf">EC for ITT & INTT (24.5.2018)</a></strong>
                <strong><a style="color: #a2a2a2;" target="_blank" href="{{cdn()}}/images/footer-pdf/EIA Clearance Omaxe Gree-II.pdf">EIA Clearance Omaxe Gree-II</a></strong>
                <strong><a style="color: #a2a2a2;" target="_blank" href="{{cdn()}}/images/footer-pdf/Grant-of-LOI -10.5875-Acres-Rohtak-22D.pdf">Grant of LOI  10.5875 Acres Rohtak -22D </a></strong>
                <strong><a style="color: #a2a2a2;" target="_blank" href="{{cdn()}}/images/footer-pdf/Layout-plan-10.jpg">Layout plan 10 </a></strong>
                <strong><a style="color: #a2a2a2;" target="_blank" href="{{cdn()}}/images/footer-pdf/Rohtak 22-D-53.80-Acres-Layout-plan.jpg">Rohtak 22 D  53.80  Acres Layout plan.</a></strong>



            </marquee>
        </div>
    </div>
    <div class="foot-inner" style="  transition: 0.5s;    width: 100%; border-top:1px solid #ffffff;">

        <div class="row" style="  transition: 0.5s;">
            <div class="col-md-6 footl" style="background: #171718; color: #fff; transition: 0.5s;width: 100%;padding: 35px;">
                <div class="row" style="  transition: 0.5s;">
                    <div class="col-md-6">
                        <div class="">
                            <h5 style="text-transform: uppercase; font-weight: 100; ">CORPORATE OFFICE</h5>
                        </div>
                        <p style="font-weight: 100;text-align: justify; font-size: 14px; margin-top: 15px;">
                          <span>
                              <i style="font-size: 20px;"  class="fas fa-map-marker-alt"></i>
                          </span>
                            Omaxe House, 7, LSC, Kalkaji,
                            New Delhi – 110019 (India)
                        </p>
                    </div>
                    <div class="col-md-6">
                        <div class="">
                            <h5 style="text-transform: uppercase;  font-weight: 100; ">REGISTERED OFFICE</h5>
                        </div>
                        <p style="text-align: justify; font-size: 14px;font-weight: 100; margin-top: 15px;">
                            <i style="font-size: 20px;" class="fas fa-map-marker-alt"></i>
                            Shop No. 19 B, First Floor,
                            Omaxe Celebration Mall, Sohna Road,
                            Gurgaon, Haryana- 122001
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6" style="background: #171718;color: #fff;transition: 0.5s;padding: 0 35px 35px 35px;">
                <div class="row" style="  transition: 0.5s;">
                    <div class="col-md-12">
                        <div>
                            <ul class="foot-data1 " style="transition: 0.5s; margin-top: 12px;">
                               <li style="margin-left: 20px;">
                                    <a target="_blank" href="/payment-gateway" class="payicon">
                                        <img class="lazy"  data-src="{{cdn()}}/images/static/payu-money.svg" width="35" height="35" alt=""></a>
                                </li>

                                <li>
                                    <a target="_blank" href="{{url('/fixed-deposit')}}" class="payicon">
                                        <img class="lazy" data-src="{{cdn()}}/images/static/FD.svg" width="35" height="35" alt=""></a>
                                </li>

                                <li>
                                    <a  href="/currency-converter/" class="payicon">
                                        <img class="lazy" data-src="{{cdn()}}/images/static/Rupee.svg" width="35" height="35" alt="">
                                    </a>
                                </li>


                                <li>
                                    <a  href="/emi-calculator/" class="payicon">
                                        <img class="lazy" data-src="{{cdn()}}/images/static/Calculator.svg" width="35" height="35" alt="">
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <p style="line-height:1.7em;font-size: 14px;font-weight: 100; text-align: left; margin-bottom: 10px;" class="sec1"> <i style="font-size: 13px; margin-right: 10px;"  class="fas fa-globe"></i>rohtasgoel.in/ | mohitgoel.in</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<section class="hidden-lg hidden-sm hidden-md">
    <div class="button-wrap">
        <a href="tel:18001020064" class="trigger  btn request-callback">
            <svg class="svg-inline--fa svv fa-phone fa-w-16" aria-hidden="true" data-prefix="fa" data-icon="phone" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                <path fill="currentColor" d="M493.397 24.615l-104-23.997c-11.314-2.611-22.879 3.252-27.456 13.931l-48 111.997a24 24 0 0 0 6.862 28.029l60.617 49.596c-35.973 76.675-98.938 140.508-177.249 177.248l-49.596-60.616a24 24 0 0 0-28.029-6.862l-111.997 48C3.873 366.516-1.994 378.08.618 389.397l23.997 104C27.109 504.204 36.748 512 48 512c256.087 0 464-207.532 464-464 0-11.176-7.714-20.873-18.603-23.385z">

                </path>
            </svg><!-- <i class="fa fa-phone"></i> -->&nbsp;&nbsp; Call Now
        </a>


    </div>

    <div class="button-wrap">
     <button class="addtab" style="    position: fixed;
    bottom: 0;
    left: 0;
    color: #fff !important;
    background: #0077b9;
    /* margin: 23px 0 0 20px; */
    padding: 12px 27px;
    z-index: 999;
    width: 50%;
    border: none;
    font-size: 15px;
    border-right: 1px solid #ffffff;
    border-radius: 0;">Enquire Now</button>

    </div>
</section>

{{--<script src="/js/footerstatic.js"></script>--}}

<script>

    
    $('.sf').click(function(event){
        var id = ".sec1";
        var offset = 255;
        var target = $(id).offset().top+offset;
        $('html,body').animate({
            scrollTop : target
        },500);
        event.preventDefault();
    });


    $("marquee").hover(function () {
        this.stop();
    }, function () {
        this.start();
    });


    $(document).ready(function(){
        $("#menu-load").click(function () {
            $('.short-height').toggleClass("full-height");

            if($(".short-height").hasClass("full-height")){
                $("#menu-load").text("Load less");
            }
            else{
                $("#menu-load").text("Load More");
            }


        });
    });


    /* When the user clicks on the button,
     toggle between hiding and showing the dropdown content */
    function loginChange() {
        document.getElementById("loginDropdown").classList.toggle("login-show");
    }

    // Close the dropdown menu if the user clicks outside of it
    window.onclick = function(event) {
        if (!event.target.matches('.login-dropbtn')) {

            var dropdowns = document.getElementsByClassName("login-dropdown-content");
            var i;
            for (i = 0; i < dropdowns.length; i++) {
                var openDropdown = dropdowns[i];
                if (openDropdown.classList.contains('login-show')) {
                    openDropdown.classList.remove('login-show');
                }
            }
        }
    }

</script>


<script>

    var is_safari = /^((?!chrome|android).)*safari/i.test(navigator.userAgent);

    if(is_safari){
        //Select text center on  safari//
        function getTextWidth(txt) {
            var $elm = $('<span class="tempforSize">'+txt+'</span>').prependTo("body");
            var elmWidth = $elm.width();
            $elm.remove();
            return elmWidth;
        }
        function centerSelect($elm) {
            var optionWidth = getTextWidth($elm.children(":selected").html())
            var emptySpace =   $elm.width()- optionWidth;
            $elm.css("text-indent", (emptySpace/2) - 20);// -10 for some browers to remove the right toggle control width
        }
        // on start
        $('.centerSelect').each(function(){
            centerSelect($(this));
        });
        // on change
        $('.centerSelect').on('change', function(){
            centerSelect($(this));
        });
    }



</script>