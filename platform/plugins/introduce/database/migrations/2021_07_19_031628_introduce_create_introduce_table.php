<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class IntroduceCreateIntroduceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('app_introduces', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255);
            $table->longText('content')->nullable();
            $table->string('image', 255)->nullable();
            $table->string('template', 60)->nullable();
            $table->string('status', 60)->default('published');
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
        Schema::dropIfExists('app_introduces');
    }
}
