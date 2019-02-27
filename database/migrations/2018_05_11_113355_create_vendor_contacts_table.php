<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVendorContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendor_contacts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Name_of_company');
            $table->bigInteger('Year_of_registration');
            $table->text('Registered_Address');
            $table->string('Email');
            $table->string('Contact_person');
            $table->bigInteger('Contact_Number');
            $table->string('Owner_Name_Partner_Name');
            $table->string('Website');
            $table->string('PAN_No');
            $table->string('PF_ESI_Registration_No');

            $table->text('gst_details_file');
            $table->text('gst_details_no');

            $table->string('Co_Cred_Turn_over_in_crores_15_16');
            $table->string('Co_Cred_Turn_over_in_crores_16_17');
            $table->string('Co_Cred_Turn_over_in_crores_17_18');
            $table->string('Co_Cred_PL_in_Lacs_15_16');
            $table->string('Co_Cred_PL_in_Lacs_16_17');
            $table->string('Co_Cred_PL_in_Lacs_17_18');
            $table->string('Account_Name');
            $table->string('Account_Type');
            $table->bigInteger('Account_Number');
            $table->string('Bank_Name');
            $table->string('Branch_Name');
            $table->string('IFSC_Code');
            $table->string('MICR_Code');
            $table->text('n_o_b_civil_works');
            $table->text('n_o_b_external_development');
            $table->text('n_o_b_service_works');
            $table->string('Exe_Works_Det_Client');
            $table->bigInteger('Exe_Works_Det_C_Contact_Person_With_Number');
            $table->text('Exe_Works_Det_C_Project_Details');
            $table->string('Exe_Works_Det_CProject_Cost');
            $table->string('Exe_Works_Det_C_Date_Of_Start');
            $table->string('Exe_Works_Det_C_Date_Of_Finish');
            $table->string('ongoing_Works_Det_Client');
            $table->bigInteger('ongoing_Works_Det_C_Contact_Person_With_Number');
            $table->text('ongoing_Works_Det_C_Project_Details');
            $table->string('ongoing_Works_Det_CProject_Cost');
            $table->string('ongoing_Works_Det_C_Date_Of_Start');
            $table->string('ongoing_Works_Det_C_Date_Of_Finish');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vendor_contacts');
    }
}
