<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class ShowroomCreateShowroomTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('app_showrooms', function (Blueprint $table) {
            $table->id();
            $table->string('address', 255);
            $table->string('phones', 255);
            $table->text('url_google_map');
            $table->string('region');
            $table->boolean('is_factory')->default(0);
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
        Schema::dropIfExists('app_showrooms');
    }
}
