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
            $table->string('name')->nullable();
            $table->string('price')->nullable();
            $table->string('condition')->nullable();
            $table->string('weight')->nullable();
            $table->integer('idCategory')->unsigned()->nullable();
            $table->longText('detail')->nullable();
            $table->integer('stock')->nullable();
            $table->integer('sold')->nullable();
            $table->text('image')->nullable();
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
