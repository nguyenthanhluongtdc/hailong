<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('app_projects', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 120);
            $table->text('description')->nullable();
            $table->string('image',191)->nullable();
            $table->unsignedInteger('projects_category')->nullable();
            $table->string('type',191)->nullable();
            $table->string('status', 60)->default('published');
            $table->timestamps();

            $table->foreign('projects_category')->references('id')->on('app_projects_categories')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('app_projects');
    }
}
