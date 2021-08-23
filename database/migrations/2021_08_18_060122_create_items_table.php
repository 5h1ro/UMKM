<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('price');
            $table->string('condition');
            $table->string('weight');
            $table->integer('idCategory')->unsigned();
            $table->longText('detail');
            $table->integer('stock');
            $table->integer('sold');
            $table->integer('idSeller')->unsigned();
            $table->timestamps();
        });

        Schema::table('items', function (Blueprint $table) {
            $table->foreign('idCategory', 'idCategory_fk_02')->references('id')->on('categories');
            $table->foreign('idSeller', 'idSeller_fk_03')->references('id')->on('sellers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('items');
    }
}
