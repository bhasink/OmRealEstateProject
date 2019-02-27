<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->increments('id');
            $table->string('project_title');
            $table->string('project_slug');
            $table->text('project_description');
            $table->string('project_map_link');
            $table->string('project_features_images');
            $table->string('project_video_link');
            $table->string('project_bank_images');
            $table->text('project_gallery_images');
            $table->string('banner_image');
            $table->string('project_logo');
            $table->string('price_range');
            $table->string('project_floor_images');
            $table->integer('project_views')->default(0);
            $table->integer('project_visiblity')->default(1);
            $table->integer('project_category_id')->unsigned()->index();
            $table->integer('project_specification_id')->unsigned()->index();
            $table->integer('project_type_id')->unsigned()->index();
            $table->integer('project_city_id')->unsigned()->index();
            $table->integer('project_status_id')->unsigned()->index();
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
        Schema::dropIfExists('projects');
    }
}
