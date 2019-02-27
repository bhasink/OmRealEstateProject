<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="utf-8">
</head>
<body>
<div style="margin:0px">
    <table width="600" border="1" cellspacing="10" cellpadding="10" align="center" style="background-color:#2959a0">
        <tbody><tr>
            <td>
                <table border="0"  cellspacing="1" cellpadding="5" align="center" style="padding:10px;">
                    <tbody>
                    <tr>
                        <td style="height:8px"></td>
                    </tr>
                    <tr style="    text-align: center;">
                        <td colspan="2" ><img src="https://d1uk2dy2wzh6ws.cloudfront.net/images/Omaxe-Logo.jpg" style="    width: 210px;" class="CToWUd"></td>

                    </tr>
                    <tr>
                        <td colspan="2" style="    font-weight: bolder; font-size: 18px;text-align:center;color:#ffffff;height:8px">Associate Contact Us</td>
                    </tr>
                    <tr>
                        <td style="font-weight:bolder;padding-left:20px;font-family:Arial;font-size:14px;color:#ffffff;">Company Name:</td>
                        <td style="padding-left:20px;font-family:Arial;font-size:14px;color:#ffffff;">
                            @if(isset($data["company_name"]))

                                {{$data["company_name"]}}

                            @endif
                        </td>
                    </tr>
                    <tr>
                        <td style="font-weight:bolder;padding-left:20px;font-family:Arial;font-size:14px;color:#ffffff;">Name:</td>
                        <td style="padding-left:20px;font-family:Arial;font-size:14px;color:#ffffff;">
                            @if(isset($data["name"]))

                                {{$data["name"]}}

                            @endif
                        </td>
                    </tr>
                    <tr>
                        <td style="font-weight:bolder;padding-left:20px;font-family:Arial;font-size:14px;color:#ffffff;">City:</td>
                        <td style="padding-left:20px;font-family:Arial;font-size:14px;color:#ffffff !important;">
                            <a href="" style="color: #ffffff;
    text-decoration: none;">
                                @if(isset($data["city"]))

                                    {{$data["city"]}}

                                @endif
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td style="font-weight:bolder;padding-left:20px;font-family:Arial;font-size:14px;color:#ffffff;">Country:</td>
                        <td style="padding-left:20px;font-family:Arial;font-size:14px;color:#ffffff;">
                            @if(isset($data["country"]))

                                {{$data["country"]}}

                            @endif
                        </td>
                    </tr>

                    <tr>
                        <td style="font-weight:bolder;padding-left:20px;font-family:Arial;font-size:14px;color:#ffffff;">State:</td>
                        <td style="padding-left:20px;font-family:Arial;font-size:14px;color:#ffffff;">
                            @if(isset($data["state"]))

                                {{$data["state"]}}

                            @endif
                        </td>
                    </tr>


                    {{--<tr>--}}
                        {{--<td style="font-weight:bolder;padding-left:20px;font-family:Arial;font-size:14px;color:#ffffff;">Year of formation:</td>--}}
                        {{--<td style="padding-left:20px;font-family:Arial;font-size:14px;color:#ffffff;">--}}
                            {{--@if(isset($data["year_of_formation"]))--}}

                                {{--{{$data["year_of_formation"]}}--}}

                            {{--@endif--}}

                        {{--</td>--}}
                    {{--</tr>--}}


                    {{--<tr>--}}
                        {{--<td style="font-weight:bolder;padding-left:20px;font-family:Arial;font-size:14px;color:#ffffff;">Pan card:</td>--}}
                        {{--<td style="padding-left:20px;font-family:Arial;font-size:14px;color:#ffffff;">--}}
                            {{--@if(isset($data["pan_card"]))--}}

                                {{--{{$data["pan_card"]}}--}}

                            {{--@endif--}}

                        {{--</td>--}}
                    {{--</tr>--}}


                    {{--<tr>--}}
                        {{--<td style="font-weight:bolder;padding-left:20px;font-family:Arial;font-size:14px;color:#ffffff;">GSTIN No:</td>--}}
                        {{--<td style="padding-left:20px;font-family:Arial;font-size:14px;color:#ffffff;">--}}

                            {{--@if(isset($data["gstin_no"]))--}}

                                {{--{{$data["gstin_no"]}}--}}

                            {{--@endif--}}


                        {{--</td>--}}
                    {{--</tr>--}}


                    {{--<tr>--}}
                        {{--<td style="font-weight:bolder;padding-left:20px;font-family:Arial;font-size:14px;color:#ffffff;">Rera Registration No:</td>--}}
                        {{--<td style="padding-left:20px;font-family:Arial;font-size:14px;color:#ffffff;">--}}
                            {{--@if(isset($data["rera_no"]))--}}

                                {{--{{$data["rera_no"]}}--}}

                            {{--@endif--}}


                        {{--</td>--}}
                    {{--</tr>--}}


                    {{--<tr>--}}
                        {{--<td style="font-weight:bolder;padding-left:20px;font-family:Arial;font-size:14px;color:#ffffff;">No of employees:</td>--}}
                        {{--<td style="padding-left:20px;font-family:Arial;font-size:14px;color:#ffffff;">--}}
                            {{--@if(isset($data["no_of_employee"]))--}}

                                {{--{{$data["no_of_employee"]}}--}}

                            {{--@endif--}}

                        {{--</td>--}}
                    {{--</tr>--}}



                    {{--<tr>--}}
                        {{--<td style="font-weight:bolder;padding-left:20px;font-family:Arial;font-size:14px;color:#ffffff;">Client list:</td>--}}
                        {{--<td style="padding-left:20px;font-family:Arial;font-size:14px;color:#ffffff;">--}}
                            {{--@if(isset($data["client_list"]))--}}

                                {{--{{$data["client_list"]}}--}}

                            {{--@endif--}}

                        {{--</td>--}}
                    {{--</tr>--}}



                    <tr>
                        <td style="font-weight:bolder;padding-left:20px;font-family:Arial;font-size:14px;color:#ffffff;">Address:</td>
                        <td style="padding-left:20px;font-family:Arial;font-size:14px;color:#ffffff;">
                            @if(isset($data["address"]))

                                {{$data["address"]}}

                            @endif

                        </td>
                    </tr>



                    <tr>
                        <td style="font-weight:bolder;padding-left:20px;font-family:Arial;font-size:14px;color:#ffffff;">Pincode:</td>
                        <td style="padding-left:20px;font-family:Arial;font-size:14px;color:#ffffff;">
                            @if(isset($data["pincode"]))

                                {{$data["pincode"]}}

                            @endif

                        </td>
                    </tr>


                    {{--<tr>--}}
                        {{--<td style="font-weight:bolder;padding-left:20px;font-family:Arial;font-size:14px;color:#ffffff;">Landline no:</td>--}}
                        {{--<td style="padding-left:20px;font-family:Arial;font-size:14px;color:#ffffff;">--}}
                            {{--@if(isset($data["landine_no"]))--}}

                                {{--{{$data["landine_no"]}}--}}

                            {{--@endif--}}

                        {{--</td>--}}
                    {{--</tr>--}}


                    <tr>
                        <td style="font-weight:bolder;padding-left:20px;font-family:Arial;font-size:14px;color:#ffffff;">Mobile no:</td>
                        <td style="padding-left:20px;font-family:Arial;font-size:14px;color:#ffffff;">
                            @if(isset($data["phone"]))
                                <a href="" style="color: #ffffff !important;">
                                {{$data["phone"]}}
                                </a>

                            @endif

                        </td>
                    </tr>


                    {{--<tr>--}}
                        {{--<td style="font-weight:bolder;padding-left:20px;font-family:Arial;font-size:14px;color:#ffffff;">Fax no:</td>--}}
                        {{--<td style="padding-left:20px;font-family:Arial;font-size:14px;color:#ffffff;">--}}
                            {{--@if(isset($data["fax_no"]))--}}

                                {{--{{$data["fax_no"]}}--}}

                            {{--@endif--}}

                        {{--</td>--}}
                    {{--</tr>--}}


                    <tr>
                        <td style="font-weight:bolder;padding-left:20px;font-family:Arial;font-size:14px;color:#ffffff;">Email id:</td>
                        <td style="padding-left:20px;font-family:Arial;font-size:14px;color:#ffffff;">
                            <a href="" style="color: #ffffff;">
                                @if(isset($data["email_id"]))
                                    <a href="" style="color: #ffffff !important;">
                                    {{$data["email_id"]}}
                                    </a>

                                @endif
                            </a>
                        </td>
                    </tr>


                    <tr>
                        <td style="font-weight:bolder;padding-left:20px;font-family:Arial;font-size:14px;color:#ffffff;">Website if any:</td>
                        <td style="padding-left:20px;font-family:Arial;font-size:14px;color:#ffffff;">
                            <a href="" style="color: #ffffff;">
                            @if(isset($data["website"]))
                                    <a href="" style="color: #ffffff !important;">
                                {{$data["website"]}}
                                    </a>

                            @endif
                            </a>


                        </td>
                    </tr>


                    {{--<tr>--}}
                        {{--<td style="font-weight:bolder;padding-left:20px;font-family:Arial;font-size:14px;color:#ffffff;">Associated with other Builders/Developers?:</td>--}}
                        {{--<td style="padding-left:20px;font-family:Arial;font-size:14px;color:#ffffff;">--}}
                            {{--@if(isset($data["associated_with_other_builders"]))--}}

                                {{--{{$data["associated_with_other_builders"]}}--}}

                            {{--@endif--}}

                        {{--</td>--}}
                    {{--</tr>--}}


                    {{--<tr>--}}
                        {{--<td style="font-weight:bolder;padding-left:20px;font-family:Arial;font-size:14px;color:#ffffff;">Name of builder/developer:</td>--}}
                        {{--<td style="padding-left:20px;font-family:Arial;font-size:14px;color:#ffffff;">--}}
                            {{--@if(isset($data["builders_name_of_builders"]))--}}

                                {{--{{$data["builders_name_of_builders"]}}--}}

                            {{--@endif--}}


                        {{--</td>--}}
                    {{--</tr>--}}





                    {{--<tr>--}}
                        {{--<td style="font-weight:bolder;padding-left:20px;font-family:Arial;font-size:14px;color:#ffffff;">Since how long:</td>--}}
                        {{--<td style="padding-left:20px;font-family:Arial;font-size:14px;color:#ffffff;">--}}
                            {{--@if(isset($data["builders_since_how_long"]))--}}

                                {{--{{$data["builders_since_how_long"]}}--}}

                            {{--@endif--}}


                        {{--</td>--}}
                    {{--</tr>--}}


                    {{--<tr>--}}
                        {{--<td style="font-weight:bolder;padding-left:20px;font-family:Arial;font-size:14px;color:#ffffff;">Name of the projects:</td>--}}
                        {{--<td style="padding-left:20px;font-family:Arial;font-size:14px;color:#ffffff;">--}}
                            {{--@if(isset($data["builders_name_of_project"]))--}}

                                {{--{{$data["builders_name_of_project"]}}--}}

                            {{--@endif--}}

                        {{--</td>--}}
                    {{--</tr>--}}




                    {{--<tr>--}}
                        {{--<td style="font-weight:bolder;padding-left:20px;font-family:Arial;font-size:14px;color:#ffffff;">No of booking given:</td>--}}
                        {{--<td style="padding-left:20px;font-family:Arial;font-size:14px;color:#ffffff;">--}}
                            {{--@if(isset($data["builders_no_of_booking_given"]))--}}

                                {{--{{$data["builders_no_of_booking_given"]}}--}}

                            {{--@endif--}}


                        {{--</td>--}}
                    {{--</tr>--}}


                    {{--<tr>--}}
                        {{--<td style="font-weight:bolder;padding-left:20px;font-family:Arial;font-size:14px;color:#ffffff;">Promoters name:</td>--}}
                        {{--<td style="padding-left:20px;font-family:Arial;font-size:14px;color:#ffffff;">--}}
                            {{--@if(isset($data["promoters_name"]))--}}

                                {{--{{$data["promoters_name"]}}--}}

                            {{--@endif--}}


                        {{--</td>--}}
                    {{--</tr>--}}




                    {{--<tr>--}}
                        {{--<td style="font-weight:bolder;padding-left:20px;font-family:Arial;font-size:14px;color:#ffffff;">Promoters city:</td>--}}
                        {{--<td style="padding-left:20px;font-family:Arial;font-size:14px;color:#ffffff;">--}}
                            {{--@if(isset($data["promoters_city"]))--}}

                                {{--{{$data["promoters_city"]}}--}}

                            {{--@endif--}}


                        {{--</td>--}}
                    {{--</tr>--}}


                    {{--<tr>--}}
                        {{--<td style="font-weight:bolder;padding-left:20px;font-family:Arial;font-size:14px;color:#ffffff;">Education qualification:</td>--}}
                        {{--<td style="padding-left:20px;font-family:Arial;font-size:14px;color:#ffffff;">--}}
                            {{--@if(isset($data["promoters_edu_qualifiication"]))--}}

                                {{--{{$data["promoters_edu_qualifiication"]}}--}}

                            {{--@endif--}}


                        {{--</td>--}}
                    {{--</tr>--}}



                    {{--<tr>--}}
                        {{--<td style="font-weight:bolder;padding-left:20px;font-family:Arial;font-size:14px;color:#ffffff;">Promoters mobile no:</td>--}}
                        {{--<td style="padding-left:20px;font-family:Arial;font-size:14px;color:#ffffff;">--}}
                            {{--@if(isset($data["promoters_mobile_no"]))--}}

                                {{--{{$data["promoters_mobile_no"]}}--}}

                            {{--@endif--}}



                        {{--</td>--}}
                    {{--</tr>--}}



                    {{--<tr>--}}
                        {{--<td style="font-weight:bolder;padding-left:20px;font-family:Arial;font-size:14px;color:#ffffff;">Promoters fax no:</td>--}}
                        {{--<td style="padding-left:20px;font-family:Arial;font-size:14px;color:#ffffff;">--}}
                            {{--@if(isset($data["promoters_fax_no"]))--}}

                                {{--{{$data["promoters_fax_no"]}}--}}

                            {{--@endif--}}


                        {{--</td>--}}
                    {{--</tr>--}}




                    {{--<tr>--}}
                        {{--<td style="font-weight:bolder;padding-left:20px;font-family:Arial;font-size:14px;color:#ffffff;">Promoters nationality:</td>--}}
                        {{--<td style="padding-left:20px;font-family:Arial;font-size:14px;color:#ffffff;">--}}
                            {{--@if(isset($data["promoters_nationality"]))--}}

                                {{--{{$data["promoters_nationality"]}}--}}

                            {{--@endif--}}



                        {{--</td>--}}
                    {{--</tr>--}}



                    {{--<tr>--}}
                        {{--<td style="font-weight:bolder;padding-left:20px;font-family:Arial;font-size:14px;color:#ffffff;">Promoters address:</td>--}}
                        {{--<td style="padding-left:20px;font-family:Arial;font-size:14px;color:#ffffff;">--}}
                            {{--@if(isset($data["promoters_address"]))--}}

                                {{--{{$data["promoters_address"]}}--}}

                            {{--@endif--}}


                        {{--</td>--}}
                    {{--</tr>--}}


                    {{--<tr>--}}
                        {{--<td style="font-weight:bolder;padding-left:20px;font-family:Arial;font-size:14px;color:#ffffff;">Promoters pincode:</td>--}}
                        {{--<td style="padding-left:20px;font-family:Arial;font-size:14px;color:#ffffff;">--}}
                            {{--@if(isset($data["promoters_pincode"]))--}}

                                {{--{{$data["promoters_pincode"]}}--}}

                            {{--@endif--}}



                        {{--</td>--}}
                    {{--</tr>--}}


                    {{--<tr>--}}
                        {{--<td style="font-weight:bolder;padding-left:20px;font-family:Arial;font-size:14px;color:#ffffff;">Promoters country:</td>--}}
                        {{--<td style="padding-left:20px;font-family:Arial;font-size:14px;color:#ffffff;">--}}
                            {{--@if(isset($data["promoters_country"]))--}}

                                {{--{{$data["promoters_country"]}}--}}

                            {{--@endif--}}

                        {{--</td>--}}
                    {{--</tr>--}}







                    </tbody>
                </table>
            </td>
        </tr>
        </tbody></table></div>
<p></p>
</body>
</html>





