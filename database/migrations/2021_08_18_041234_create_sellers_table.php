<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSellersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sellers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('description');
            $table->string('address');
            $table->string('owner');
            $table->string('number');
            $table->string('image')->nullable();
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->string('instagram')->nullable();
            $table->unsignedInteger('idProvince')->nullable();
            $table->foreign('idProvince', 'province_id_fk_006')->references('id')->on('provinces');
            $table->unsignedInteger('idCity')->nullable();
            $table->foreign('idCity', 'city_id_fk_005')->references('id')->on('cities');
            $table->unsignedInteger('idUser')->nullable();
            $table->foreign('idUser', 'user_id_fk_001')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('sellers');
    }
}
