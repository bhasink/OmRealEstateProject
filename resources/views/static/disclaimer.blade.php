@extends('layouts.layout')
@section('content')
    @include('layouts.header')
    <style>
        .top-content{
            margin-bottom: 0px;
            height: 515px;
        }
    </style>



    <div class="top-content disclaimer-banner">


    </div>


    {{ Breadcrumbs::render('disclaimer', "/about-us/awards-and-honors","Current Openings") }}


    <section class="invcon">
        <div class="container">

            <div class="col-md-12" style="margin-bottom: 100px;">
                <div class="row">

                    <div class="main-content-heading" style="margin-bottom: 50px;">
                        <h1 style="text-align: center;text-transform: uppercase;    letter-spacing: 1px;  font-weight: 300 !important; ">  PLEASE READ THESE TERMS AND CONDITIONS CAREFULLY.</h1>
                        <p style="text-align: left; font-size:14px;letter-spacing: 1px; margin-top: 20px; font-weight: 400;">
                            Neither Omaxe Ltd. nor any of its Subsidiaries, Associates or Group companies will be liable and responsible for dissemination of any information other than from the Corporate Website www.omaxe.com and two group websites www.omaxeconnaughtplace.co.in and www.theforestspafaridabad.com, owned, run and maintained.
                            <br><br>

                            By accessing this site and any pages thereof, you agree to be bound by the terms and conditions below. If you do not agree to the terms and conditions below, do not access this site, or any pages thereof. By continuing to use the site and/or any of the services shown on the site, you agree to be bound by these terms and conditions.
                            <br><br>

                            The information given on the website regarding the project details is purely conceptual and is not a legal offering. Further, the Company/Architects reserve the right to add/delete any details/specifications/elevations mentioned, if so warranted by the circumstances.
                            <br><br>
                            Some of the images/pictures used on the website www.omaxe.com might be Copyright protected. In case, having any objection in this regard may kindly contact/intimate us so that we can delete/ eliminate the objectionable pictures from the website within a reasonable time.
                            <br><br>
                            Any access and use of this site is and will be at the risk of the User. Neither Omaxe Ltd. nor its Subsidiaries, Associates or Group companies nor their respective Directors / employees shall be liable in any manner whatsoever for any direct, indirect or consequential damages arising out of the access, use or inability to use this site.
                            Any reproduction, retransmission or other use of any information proprietary or otherwise on this site is strictly prohibited and may infringe copyrights or trademarks of Omaxe Ltd., its Subsidiaries, Associates or Group Companies.
                            <br><br>
                            Any unprotected e-mail communication over the Internet is, as with communication via any other medium (for example, mobile phones, post office mail), not confidential and is subject to possible interception or loss, and is also subject to possible alteration. Neither Omaxe Ltd. nor its Subsidiaries, Associates or Group companies nor their respective Directors / employees are responsible and liable to you or anyone else for any damages in connection with an e-mail sent by you to Omaxe Ltd., its Subsidiaries, Associates or Group Companies or an e-mail sent by Omaxe Ltd., its Subsidiaries, Associates or Group Companies to you at your request or on an ad-hoc basis.
                            This site may contain links to web sites controlled or offered by third parties (non-affiliates of Omaxe Ltd., its Subsidiaries, Associates or Group Companies). Omaxe Ltd., its Subsidiaries, Associates or Group Companies hereby disclaim liability for, any information, materials, products or services posted or offered at any of the third party sites linked to this web site. By creating a link to a third party web site, Omaxe Ltd., its Subsidiaries, Associates or Group Companies do not endorse or recommend any products or services offered or information contained at that web site, nor is liable for any failure of products or services offered or advertised at those sites. Such third party may have a privacy policy different from that of Omaxe Ltd., its Subsidiaries, Associates or Group Companies and the third party website may provide less security than the instant site.
                            <br><br>
                            Some personal information including addresses, phone numbers, e-mail addresses, and other demographic information is collected through enquiry forms. Omaxe Ltd., its Subsidiaries, Associates or Group Companies take precautions to protect your individual / personal information from unauthorized use and makes internal use of your contact information only to inform you of projects and services that may interest you. When you voluntarily send us electronic mail, we will keep a record of this information so that we can respond to you. However, we do not disclose your information to other public bodies or individuals except as authorized by law.
                            Any use of this website and all legal disputes arising in connection therewith shall exclusively be governed by Indian law.

                        </p>
                    </div>





                </div>



            </div>

        </div>
    </section>
    <script src="{{ asset('js/projectstatic.js') }}"></script>

    @include('layouts.footer')


@endsection
