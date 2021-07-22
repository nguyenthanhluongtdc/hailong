<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class FactoryAddressCreateFactoryAddressTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('app_factory_addresses', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255);
            $table->string('phone', 60)->nullable();
            $table->string('phone_01', 60)->nullable();
            $table->string('phone_02', 60)->nullable();
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
        Schema::dropIfExists('app_factory_addresses');
    }
}
