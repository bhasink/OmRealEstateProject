@extends('admin.layouts.layout')



@section('content')

    

    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Vendors Contact Us <small></small></h3>
            </div>
        </div>

        <div class="clearfix"></div>

        <div class="row">




            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Vendors  <small>Contact Us</small></h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <table id="datatable-buttons" class="table table-striped table-bordered">
                            <thead>
                            <tr>

                                <th>Id:</th>
                                <th>Name of Company:</th>
                                <th>Year_of_registration:</th>
                                <th>Registered_Address:</th>
                                <th>Email:</th>
                                <th>Contact_person:</th>
                                <th>Contact_Number:</th>
                                <th>Owner_Name_Partner_Name:</th>
                                <th>Website:</th>
                                <th>PAN No:</th>
                                <th>PAN No File:</th>
                                <th>PF_ESI_Registration_No:</th>
                                <th>gst_details_no:</th>
                                <th>gst_details_file:</th>
                                <th>Co_Cred_Turn_over_in_crores_15_16:</th>
                                <th>Co_Cred_Turn_over_in_crores_16_17:</th>
                                <th>Co_Cred_Turn_over_in_crores_17_18:</th>
                                <th>Co_Cred_PL_in_Lacs_15_16:</th>
                                <th>Co_Cred_PL_in_Lacs_16_17:</th>
                                <th>Co_Cred_PL_in_Lacs_17_18:</th>
                                <th>Account_Name:</th>
                                <th>Account_Type:</th>
                                <th>Account_Number:</th>
                                <th>Bank_Name:</th>
                                <th>Branch_Name:</th>
                                <th>IFSC_Code:</th>
                                <th>MICR_Code:</th>
                                <th>n_o_b_civil_works:</th>
                                <th>n_o_b_external_development:</th>
                                <th>n_o_b_service_works:</th>
                                <th>Exe_Works_Det_Client:</th>
                                {{--<th>Exe_Works_Det_C_Contact_Person_With_Number:</th>--}}
                                {{--<th>Exe_Works_Det_C_Project_Details:</th>--}}
                                {{--<th>Exe_Works_Det_CProject_Cost:</th>--}}
                                {{--<th>Exe_Works_Det_C_Date_Of_Start:</th>--}}
                                {{--<th>Exe_Works_Det_C_Date_Of_Finish:</th>--}}
                                <th>ongoing_Works_Det_Client:</th>
                                {{--<th>ongoing_Works_Det_C_Contact_Person_With_Number:</th>--}}
                                {{--<th>ongoing_Works_Det_C_Project_Details:</th>--}}
                                {{--<th>ongoing_Works_Det_CProject_Cost:</th>--}}
                                {{--<th>ongoing_Works_Det_C_Date_Of_Start:</th>--}}
                                {{--<th>ongoing_Works_Det_C_Date_Of_Finish:</th>--}}
                                <th>Date&nbsp;&&nbsp;Time:&nbsp;&nbsp;&nbsp;&nbsp;</th>
                            </tr>
                            </thead>

                            <tbody>
                            @if($contact_details)
                                @foreach($contact_details as $contact_detail)

                                    <?php
                                    $n_o_b_civil_works = unserialize($contact_detail->n_o_b_civil_works);
                                    $n_o_b_external_development = unserialize($contact_detail->n_o_b_external_development);

                                    $n_o_b_service_works = unserialize($contact_detail->n_o_b_service_works);

                                    $gst_details_no = unserialize($contact_detail->gst_details_no);

                                    $gst_details_file = unserialize($contact_detail->gst_details_file);

                                    $executive_data = unserialize($contact_detail->Exe_Works_Det_Client);

                                    $ongoing_data = unserialize($contact_detail->ongoing_Works_Det_Client);


                                    ?>

                                    <tr>
                                        <td>
                                            {{$contact_detail->id}}
                                        </td>

                                        <td>
                                            {{$contact_detail->Name_of_company}}
                                        </td>
                                        <td>
                                            {{$contact_detail->Year_of_registration}}
                                        </td>
                                        <td>
                                            {{$contact_detail->Registered_Address}}
                                        </td>
                                        <td>
                                            {{$contact_detail->Email}}
                                        </td>
                                        <td>
                                            {{$contact_detail->Contact_person}}
                                        </td>

                                        <td>
                                            {{$contact_detail->Contact_Number}}
                                        </td>
                                        <td>
                                            {{$contact_detail->Owner_Name_Partner_Name}}
                                        </td>
                                        <td>
                                            {{$contact_detail->Website}}
                                        </td>
                                        <td>
                                            {{$contact_detail->pan_data}}
                                        </td>
                                        <td>
                                            <?php if (isset($contact_detail->PAN_No)){ ?>
                                            <a class="btn btn-primary"  href="/omaxeadmin/care/vendors-contact-us/vendordownload/{{$contact_detail->PAN_No}}">Download</a>
                                            <?php } ?>

                                        </td>
                                        <td>
                                            {{$contact_detail->PF_ESI_Registration_No}}
                                        </td>
                                        <td>

                                            <br>

                                            @if(isset($gst_details_no))
                                                <?php

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
                                        <td>

                                            <br>

                                            @if(isset($gst_details_file))
                                                <?php

                                                $i=1;
                                                foreach ($gst_details_file as $key => $gst_details_files){
                                                    echo $i.".) &nbsp;". "<a class='btn btn-primary'". "href='/omaxeadmin/care/vendors-contact-us/vendor/download/$gst_details_files'"."'>".'Download</a>'. "&nbsp;";
                                                    $i++;
                                                }
                                                ?>

                                            @endif


                                        </td>
                                        <td>
                                            {{$contact_detail->Co_Cred_Turn_over_in_crores_15_16}}
                                        </td>
                                        <td>
                                            {{$contact_detail->Co_Cred_Turn_over_in_crores_16_17}}
                                        </td>
                                        <td>
                                            {{$contact_detail->Co_Cred_Turn_over_in_crores_17_18}}
                                        </td>
                                        <td>
                                            {{$contact_detail->Co_Cred_PL_in_Lacs_15_16}}
                                        </td>
                                        <td>
                                            {{$contact_detail->Co_Cred_PL_in_Lacs_16_17}}
                                        </td>
                                        <td>
                                            {{$contact_detail->Co_Cred_PL_in_Lacs_17_18}}
                                        </td>
                                        <td>
                                            {{$contact_detail->Account_Name}}
                                        </td>
                                        <td>
                                            {{$contact_detail->Account_Type}}
                                        </td>
                                        <td>
                                            {{$contact_detail->Account_Number}}
                                        </td>
                                        <td>
                                            {{$contact_detail->Bank_Name}}
                                        </td>
                                        <td>
                                            {{$contact_detail->Branch_Name}}
                                        </td>
                                        <td>
                                            {{$contact_detail->IFSC_Code}}
                                        </td>
                                        <td>
                                            {{$contact_detail->MICR_Code}}
                                        </td>





                                        <td>


                                            <br>

                                            @if(isset($n_o_b_civil_works))
                                                <?php

                                                $i=1;
                                                foreach ($n_o_b_civil_works as $key => $n_o_b_civil_workss){
                                                    echo $i.'.) &nbsp;'. $n_o_b_civil_workss . '&nbsp;';
                                                    $i++;
                                                }
                                                ?>

                                            @endif


                                        </td>
                                        <td>


                                            <br>

                                            @if(isset($n_o_b_external_development))
                                                <?php

                                                $i=1;
                                                foreach ($n_o_b_external_development as $key => $n_o_b_external_developments)
                                                {
                                                    echo $i.'.) &nbsp;'. $n_o_b_external_developments . '&nbsp;';
                                                    $i++;

                                                }
                                                ?>

                                            @endif


                                        </td>
                                        <td>

                                            <br>

                                            @if(isset($n_o_b_service_works))
                                                <?php

                                                $i=1;
                                                foreach ($n_o_b_service_works as $key => $n_o_b_service_workss)
                                                {
                                                    echo $i.'.) &nbsp;'. $n_o_b_service_workss . '&nbsp;';
                                                    $i++;
                                                }
                                                ?>

                                            @endif

                                        </td>
                                        <td>

                                            <br>
                                            @if(isset($executive_data[0]))


                                                <?php

                                                $i=1;
                                                foreach ($executive_data[0] as $key => $name_of_companys)
                                                {


                                                    echo $i.'.) <br>'.'<b>Client: </b>' . $executive_data[0][$key]. "<br>" . "<b>Contact Person Number: </b>" .$executive_data[1][$key]. "<br>" . "<b>Project Details: </b>" .$executive_data[2][$key]. "<br>" . "<b>Project Cost: </b>" .$executive_data[3][$key]. "<br>" . "<b>
Date Of Start: </b>" .$executive_data[4][$key] ."<br>" . "<b>
Date Of Start: </b>" .$executive_data[5][$key] . '<br>';
                                                    $i++;
                                                }
                                                ?>

                                            @endif
                                        </td>
                                        {{--<td>--}}
                                            {{--{{$contact_detail->Exe_Works_Det_C_Contact_Person_With_Number}}--}}
                                        {{--</td>--}}
                                        {{--<td>--}}
                                            {{--{{$contact_detail->Exe_Works_Det_C_Project_Details}}--}}
                                        {{--</td>--}}


                                        {{--<td>--}}
                                            {{--{{$contact_detail->Exe_Works_Det_CProject_Cost}}--}}
                                        {{--</td>--}}

                                        {{--<td>--}}
                                            {{--{{$contact_detail->Exe_Works_Det_C_Date_Of_Start}}--}}
                                        {{--</td>--}}

                                        {{--<td>--}}
                                            {{--{{$contact_detail->Exe_Works_Det_C_Date_Of_Finish}}--}}
                                        {{--</td>--}}


                                        <td>
                                            {{--{{$contact_detail->ongoing_Works_Det_Client}}--}}

                                            <br>
                                            @if(isset($ongoing_data[0]))


                                                <?php

                                                $i=1;
                                                foreach ($ongoing_data[0] as $key => $name_of_companys){


                                                    echo $i.'.) <br>'.'<b>Client: </b>' . $executive_data[0][$key]. "<br>" . "<b>Contact Person Number: </b>" .$executive_data[1][$key]. "<br>" . "<b>Project Details: </b>" .$executive_data[2][$key]. "<br>" . "<b>Project Cost: </b>" .$executive_data[3][$key]. "<br>" . "<b>
Date Of Start: </b>" .$executive_data[4][$key] ."<br>" . "<b>
Date Of Start: </b>" .$executive_data[5][$key] . '<br>';
                                                    $i++;
                                                }
                                                ?>

                                            @endif
                                        </td>

                                        {{--<td>--}}
                                        {{--{{$contact_detail->ongoing_Works_Det_C_Contact_Person_With_Number}}--}}
                                        {{--</td>--}}

                                        {{--<td>--}}
                                        {{--{{$contact_detail->ongoing_Works_Det_C_Project_Details}}--}}
                                        {{--</td>--}}



                                        {{--<td>--}}
                                        {{--{{$contact_detail->ongoing_Works_Det_CProject_Cost}}--}}
                                        {{--</td>--}}

                                        {{--<td>--}}
                                        {{--{{$contact_detail->ongoing_Works_Det_C_Date_Of_Start}}--}}
                                        {{--</td>--}}

                                        {{--<td>--}}
                                        {{--{{$contact_detail->ongoing_Works_Det_C_Date_Of_Finish}}--}}
                                        {{--</td>--}}



                                        <td>
                                            {{$contact_detail->created_at->format('d-m-Y H:i:s')}}
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

