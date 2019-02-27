<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEbrochureContactUsesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ebrochure_contact_uses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('project_name');
            $table->string('name');
            $table->string('email');
            $table->bigInteger('phone');
            $table->string('residential_type');
            $table->text('address');
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
        Schema::dropIfExists('ebrochure_contact_uses');
    }
}
