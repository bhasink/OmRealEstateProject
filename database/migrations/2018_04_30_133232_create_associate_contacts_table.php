<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssociateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('associate_contacts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('city');
            $table->string('country');
            $table->bigInteger('year_of_formation');
            $table->string('pan_card');
            $table->text('gstin_no');
            $table->text('rera_no');
            $table->string('no_of_employee');
            $table->string('client_list');
            $table->text('address');
            $table->integer('pincode');
            $table->string('state');
            $table->bigInteger('landine_no');
            $table->bigInteger('phone');
            $table->bigInteger('fax_no');
            $table->string('email_id');
            $table->string('website');
            $table->integer('associate_with_other_builders');
            $table->string('builders_name_of_builders');
            $table->text('builders_since_how_long');
            $table->text('builders_name_of_project');
            $table->string('builders_no_of_booking_given');
            $table->string('promoters_name');
            $table->string('promoters_city');
            $table->string('promoters_edu_qualifiication');
            $table->string('promoters_state');
            $table->bigInteger('promoters_mobile_no');
            $table->bigInteger('promoters_fax_no');
            $table->string('promoters_nationality');
            $table->text('promoters_address');
            $table->integer('promoters_pincode');
            $table->string('promoters_country');
            $table->string('promoters_email');
            $table->text('promoters_core_competence');
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
        Schema::dropIfExists('associate_contacts');
    }
}
