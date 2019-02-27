<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectGalleriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_galleries', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('projects_id')->unsigned()->index();
            $table->text('elevation_image')->nullable();
            $table->text('construction_updates_image')->nullable();
            $table->text('layout_image')->nullable();
            $table->text('location_map_image')->nullable();
            $table->text('sample_flat_image')->nullable();
            $table->string('status')->nullable();
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
        Schema::dropIfExists('project_galleries');
    }
}
