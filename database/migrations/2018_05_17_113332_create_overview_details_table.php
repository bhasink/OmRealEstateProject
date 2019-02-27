<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOverviewDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('overview_details', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('projects_id')->unsigned()->index();
            $table->string('location');
            $table->string('size');
            $table->string('type');
            $table->string('rera_no');
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
        Schema::dropIfExists('overview_details');
    }
}
