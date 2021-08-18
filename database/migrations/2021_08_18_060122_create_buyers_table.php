<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBuyersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buyers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('number');
            $table->unsignedInteger('idProvince')->nullable();
            $table->foreign('idProvince', 'province_id_fk_008')->references('id')->on('provinces');
            $table->unsignedInteger('idCity')->nullable();
            $table->foreign('idCity', 'city_id_fk_009')->references('id')->on('cities');
            $table->string('address');
            $table->unsignedInteger('idUser')->nullable();
            $table->foreign('idUser', 'user_id_fk_010')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('buyers');
    }
}
