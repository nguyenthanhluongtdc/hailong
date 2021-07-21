<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Updatetablee extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::dropIfExists('app_project_category_project');
        Schema::create('app_project_category_project', function (Blueprint $table) {
            $table->id();
            $table->integer('category_id')->unsigned()->references('id')->on('app_project_categories')->onDelete('cascade');
            $table->integer('project_id')->unsigned()->references('id')->on('app_projects')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
