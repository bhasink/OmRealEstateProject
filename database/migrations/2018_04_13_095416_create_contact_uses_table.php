<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactUsesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact_uses', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('projects_id')->unsigned()->index();
            $table->string('project_name');
            $table->string('name');
            $table->string('email');
            $table->bigInteger('phone');
            $table->string('interested_visit_site');
            $table->string('residential_type');
            $table->string('country');
            $table->string('city');
            $table->integer('zipcode');
            $table->text('address');
            $table->text('project_query');
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
        Schema::dropIfExists('contact_uses');
    }
}
