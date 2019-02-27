<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFdApplicationContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fd_application_contacts', function (Blueprint $table) {
            $table->increments('id');
			$table->string('application_no');
            $table->string('name');
            $table->string('email');
            $table->bigInteger('phone_no');
            $table->string('city');
            $table->string('status');
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
        Schema::dropIfExists('fd_application_contacts');
    }
}
