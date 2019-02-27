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
                        <td colspan="2" style="    font-weight: bolder; font-size: 18px;text-align:center;color:#ffffff;height:8px">Vendors Contact Us</td>
                    </tr>
                    <tr>
                        <td style="font-weight:bolder;padding-left:20px;font-family:Arial;font-size:14px;color:#ffffff;">Name of company:</td>
                        <td style="padding-left:20px;font-family:Arial;font-size:14px;color:#ffffff;">
                            @if(isset($data["Name_of_company"]))

                                {{$data["Name_of_company"]}}


                            @endif
                        </td>
                    </tr>
                    <tr>
                        <td style="font-weight:bolder;padding-left:20px;font-family:Arial;font-size:14px;color:#ffffff;">Year of registration:</td>
                        <td style="padding-left:20px;font-family:Arial;font-size:14px;color:#ffffff !important;">
                            <a href="" style="color: #ffffff;
    text-decoration: none;">
                                @if(isset($data["Year_of_registration"]))

                                    {{$data["Year_of_registration"]}}

                                @endif

                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td style="font-weight:bolder;padding-left:20px;font-family:Arial;font-size:14px;color:#ffffff;">Registered address:</td>
                        <td style="padding-left:20px;font-family:Arial;font-size:14px;color:#ffffff;">
                            @if(isset($data["Registered_Address"]))

                                {{$data["Registered_Address"]}}

                            @endif
                        </td>
                    </tr>


                    <tr>
                        <td style="font-weight:bolder;padding-left:20px;font-family:Arial;font-size:14px;color:#ffffff;">Email:</td>
                        <td style="padding-left:20px;font-family:Arial;font-size:14px;color:#ffffff;">
                            <a href="" style="color: #ffffff;">
                            @if(isset($data["Email"]))

                                {{$data["Email"]}}

                            @endif
                            </a>

                        </td>
                    </tr>


                    <tr>
                        <td style="font-weight:bolder;padding-left:20px;font-family:Arial;font-size:14px;color:#ffffff;">Contact person:</td>
                        <td style="padding-left:20px;font-family:Arial;font-size:14px;color:#ffffff;">
                            @if(isset($data["Contact_person"]))

                                {{$data["Contact_person"]}}

                            @endif


                        </td>
                    </tr>


                    <tr>
                        <td style="font-weight:bolder;padding-left:20px;font-family:Arial;font-size:14px;color:#ffffff;">Contact No:</td>
                        <td style="padding-left:20px;font-family:Arial;font-size:14px;color:#ffffff;">

                            @if(isset($data["Contact_Number"]))

                                {{$data["Contact_Number"]}}

                            @endif



                        </td>
                    </tr>


                    <tr>
                        <td style="font-weight:bolder;padding-left:20px;font-family:Arial;font-size:14px;color:#ffffff;">Owner's Name/Partner's Name:</td>
                        <td style="padding-left:20px;font-family:Arial;font-size:14px;color:#ffffff;">
                            @if(isset($data["Owner_Name_Partner_Name"]))

                                {{$data["Owner_Name_Partner_Name"]}}

                            @endif

                        </td>
                    </tr>


                    <tr>
                        <td style="font-weight:bolder;padding-left:20px;font-family:Arial;font-size:14px;color:#ffffff;">Website:</td>
                        <td style="padding-left:20px;font-family:Arial;font-size:14px;color:#ffffff;">
                            <a href="" style="color: #ffffff;">
                            @if(isset($data["Website"]))

                                {{$data["Website"]}}

                            @endif
                            </a>


                        </td>
                    </tr>



                    <tr>
                        <td style="font-weight:bolder;padding-left:20px;font-family:Arial;font-size:14px;color:#ffffff;">Pan no:</td>
                        <td style="padding-left:20px;font-family:Arial;font-size:14px;color:#ffffff;">
                            @if(isset($data["pan_data"]))

                                {{$data["pan_data"]}}

                            @endif

                        </td>
                    </tr>


                    <tr>
                        <td style="font-weight:bolder;padding-left:20px;font-family:Arial;font-size:14px;color:#ffffff;">PF ESI Registration No:</td>
                        <td style="padding-left:20px;font-family:Arial;font-size:14px;color:#ffffff;">

                            @if(isset($data["PF_ESI_Registration_No"]))

                                {{$data["PF_ESI_Registration_No"]}}

                            @endif


                        </td>
                    </tr>



                    <tr>
                        <td style="font-weight:bolder;padding-left:20px;font-family:Arial;font-size:14px;color:#ffffff;">GST no:</td>
                        <td style="padding-left:20px;font-family:Arial;font-size:14px;color:#ffffff;">
                            @if(isset($data["gst_details_no"]))

                                <br>


                                <?php
                                $gst_details_no = unserialize($data["gst_details_no"]);
                                $i=1;
                                foreach ($gst_details_no as $key => $gst_details_nos){
                                    if($gst_details_nos !=null)
                                    {

                                        echo $i.".) &nbsp;". $gst_details_nos . "&nbsp;";
                                        $i++;

                                    }
                                }
                                ?>


                            @endif

                        </td>
                    </tr>


                    <tr>
                        <td style="font-weight:bolder;padding-left:20px;font-family:Arial;font-size:14px;color:#ffffff;">Turn over in crores 15-16:</td>
                        <td style="padding-left:20px;font-family:Arial;font-size:14px;color:#ffffff;">
                            @if(isset($data["Co_Cred_Turn_over_in_crores_15_16"]))

                                {{$data["Co_Cred_Turn_over_in_crores_15_16"]}}

                            @endif

                        </td>
                    </tr>



                    <tr>
                        <td style="font-weight:bolder;padding-left:20px;font-family:Arial;font-size:14px;color:#ffffff;">Turn over in crores 16-17:</td>
                        <td style="padding-left:20px;font-family:Arial;font-size:14px;color:#ffffff;">
                            @if(isset($data["Co_Cred_Turn_over_in_crores_16_17"]))

                                {{$data["Co_Cred_Turn_over_in_crores_16_17"]}}

                            @endif

                        </td>
                    </tr>


                    <tr>
                        <td style="font-weight:bolder;padding-left:20px;font-family:Arial;font-size:14px;color:#ffffff;">Turn over in crores 17-18:</td>
                        <td style="padding-left:20px;font-family:Arial;font-size:14px;color:#ffffff;">

                            @if(isset($data["Co_Cred_Turn_over_in_crores_17_18"]))

                                {{$data["Co_Cred_Turn_over_in_crores_17_18"]}}

                            @endif
                        </td>
                    </tr>



                    <tr>
                        <td style="font-weight:bolder;padding-left:20px;font-family:Arial;font-size:14px;color:#ffffff;">Profit/Loss in Lacs 15-16:</td>
                        <td style="padding-left:20px;font-family:Arial;font-size:14px;color:#ffffff;">
                            @if(isset($data["Co_Cred_PL_in_Lacs_15_16"]))

                                {{$data["Co_Cred_PL_in_Lacs_15_16"]}}

                            @endif


                        </td>
                    </tr>


                    <tr>
                        <td style="font-weight:bolder;padding-left:20px;font-family:Arial;font-size:14px;color:#ffffff;">Profit/Loss in Lacs 16-17:</td>
                        <td style="padding-left:20px;font-family:Arial;font-size:14px;color:#ffffff;">

                            @if(isset($data["Co_Cred_PL_in_Lacs_16_17"]))

                                {{$data["Co_Cred_PL_in_Lacs_16_17"]}}

                            @endif
                        </td>
                    </tr>




                    <tr>
                        <td style="font-weight:bolder;padding-left:20px;font-family:Arial;font-size:14px;color:#ffffff;">Profit/Loss in Lacs 17-18:</td>
                        <td style="padding-left:20px;font-family:Arial;font-size:14px;color:#ffffff;">
                            @if(isset($data["Co_Cred_PL_in_Lacs_17_18"]))

                                {{$data["Co_Cred_PL_in_Lacs_17_18"]}}

                            @endif



                        </td>
                    </tr>


                    <tr>
                        <td style="font-weight:bolder;padding-left:20px;font-family:Arial;font-size:14px;color:#ffffff;">Account name:</td>
                        <td style="padding-left:20px;font-family:Arial;font-size:14px;color:#ffffff;">

                            @if(isset($data["Account_Name"]))

                                {{$data["Account_Name"]}}

                            @endif

                        </td>
                    </tr>





                    <tr>
                        <td style="font-weight:bolder;padding-left:20px;font-family:Arial;font-size:14px;color:#ffffff;">Account type:</td>
                        <td style="padding-left:20px;font-family:Arial;font-size:14px;color:#ffffff;">
                            @if(isset($data["Account_Type"]))

                                {{$data["Account_Type"]}}

                            @endif



                        </td>
                    </tr>


                    <tr>
                        <td style="font-weight:bolder;padding-left:20px;font-family:Arial;font-size:14px;color:#ffffff;">Account no:</td>
                        <td style="padding-left:20px;font-family:Arial;font-size:14px;color:#ffffff;">

                            @if(isset($data["Account_Number"]))

                                {{$data["Account_Number"]}}

                            @endif

                        </td>
                    </tr>



                    <tr>
                        <td style="font-weight:bolder;padding-left:20px;font-family:Arial;font-size:14px;color:#ffffff;">Bank name:</td>
                        <td style="padding-left:20px;font-family:Arial;font-size:14px;color:#ffffff;">
                            @if(isset($data["Bank_Name"]))

                                {{$data["Bank_Name"]}}

                            @endif



                        </td>
                    </tr>


                    <tr>
                        <td style="font-weight:bolder;padding-left:20px;font-family:Arial;font-size:14px;color:#ffffff;">Branch name:</td>
                        <td style="padding-left:20px;font-family:Arial;font-size:14px;color:#ffffff;">

                            @if(isset($data["Branch_Name"]))

                                {{$data["Branch_Name"]}}

                            @endif

                        </td>
                    </tr>



                    <tr>
                        <td style="font-weight:bolder;padding-left:20px;font-family:Arial;font-size:14px;color:#ffffff;">IFSC code:</td>
                        <td style="padding-left:20px;font-family:Arial;font-size:14px;color:#ffffff;">
                            @if(isset($data["IFSC_Code"]))

                                {{$data["IFSC_Code"]}}

                            @endif



                        </td>
                    </tr>


                    <tr>
                        <td style="font-weight:bolder;padding-left:20px;font-family:Arial;font-size:14px;color:#ffffff;">MICR code:</td>
                        <td style="padding-left:20px;font-family:Arial;font-size:14px;color:#ffffff;">

                            @if(isset($data["MICR_Code"]))

                                {{$data["MICR_Code"]}}

                            @endif
                        </td>
                    </tr>




                    <tr>
                        <td style="font-weight:bolder;padding-left:20px;font-family:Arial;font-size:14px;color:#ffffff;">Civil works:</td>
                        <td style="padding-left:20px;font-family:Arial;font-size:14px;color:#ffffff;">
                            @if(isset($data["n_o_b_civil_works"]))

                                <br>


                                <?php

                                $n_o_b_civil_works = unserialize($data["n_o_b_civil_works"]);

                                $i=1;
                                foreach ($n_o_b_civil_works as $key => $n_o_b_civil_workss){
                                    echo $i.'.) &nbsp;'. $n_o_b_civil_workss . '<br/>'.'&nbsp;';
                                    $i++;
                                }
                                ?>


                            @endif



                        </td>
                    </tr>


                    <tr>
                        <td style="font-weight:bolder;padding-left:20px;font-family:Arial;font-size:14px;color:#ffffff;">External development:</td>
                        <td style="padding-left:20px;font-family:Arial;font-size:14px;color:#ffffff;">

                            @if(isset($data["n_o_b_external_development"]))

                                <br>


                                <?php
                                $n_o_b_external_development = unserialize($data["n_o_b_external_development"]);
                                $i=1;
                                foreach ($n_o_b_external_development as $key => $n_o_b_external_developments){
                                    echo $i.'.) &nbsp;'. $n_o_b_external_developments .'<br/>'. '&nbsp;';
                                    $i++;
                                }
                                ?>


                            @endif
                        </td>
                    </tr>



                    <tr>
                        <td style="font-weight:bolder;padding-left:20px;font-family:Arial;font-size:14px;color:#ffffff;">Service works:</td>
                        <td style="padding-left:20px;font-family:Arial;font-size:14px;color:#ffffff;">
                            @if(isset($data["n_o_b_service_works"]))

                                <br>


                                <?php

                                $service_works = unserialize($data["n_o_b_service_works"]);
                                $i=1;
                                foreach ($service_works as $key => $n_o_b_service_workss){
                                    echo $i.'.) &nbsp;'. $n_o_b_service_workss .'<br/>'. '&nbsp;';
                                    $i++;
                                }
                                ?>


                            @endif



                        </td>
                    </tr>












                    </tbody>
                </table>
            </td>
        </tr>
        </tbody></table></div>
<p></p>
</body>
</html>








