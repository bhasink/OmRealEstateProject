<?php

namespace Omaxe;

use Illuminate\Database\Eloquent\Model;

class vendorContact extends Model
{
    //
    protected $fillable=[
        'Name_of_company',
        'Year_of_registration',
        'Registered_Address',
        'Email',
        'Contact_person',
        'Contact_Number',
        'Owner_Name_Partner_Name',
        'Website',
        'PAN_No',
		'pan_data',
        'PF_ESI_Registration_No',
        'gst_details_file',
        'gst_details_no',
        'Co_Cred_Turn_over_in_crores_15_16',
        'Co_Cred_Turn_over_in_crores_16_17',
        'Co_Cred_Turn_over_in_crores_17_18',
        'Co_Cred_PL_in_Lacs_15_16',
        'Co_Cred_PL_in_Lacs_16_17',
        'Co_Cred_PL_in_Lacs_17_18',
        'Account_Name',
        'Account_Type',
        'Account_Number',
        'Bank_Name',
        'Branch_Name',
        'IFSC_Code',
        'MICR_Code',
        'n_o_b_civil_works',
        'n_o_b_external_development',
        'n_o_b_service_works',
        'Exe_Works_Det_Client',
        'Exe_Works_Det_C_Contact_Person_With_Number',
        'Exe_Works_Det_C_Project_Details',
        'Exe_Works_Det_CProject_Cost',
        'Exe_Works_Det_C_Date_Of_Start',
        'Exe_Works_Det_C_Date_Of_Finish',
        'ongoing_Works_Det_Client',
        'ongoing_Works_Det_C_Contact_Person_With_Number',
        'ongoing_Works_Det_C_Project_Details',
        'ongoing_Works_Det_CProject_Cost',
        'ongoing_Works_Det_C_Date_Of_Start',
        'ongoing_Works_Det_C_Date_Of_Finish'
    ];
}