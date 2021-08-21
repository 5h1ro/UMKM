<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code')->nullable();
            $table->integer('idBuyer')->unsigned();
            $table->integer('idItem')->unsigned();
            $table->integer('status')->default(0);
            $table->string('link')->nullable();
            $table->integer('total');
            $table->timestamps();
        });

        Schema::table('orders', function (Blueprint $table) {
            $table->foreign('idBuyer', 'idBuyer_fk_11')->references('id')->on('buyers');
            $table->foreign('idItem', 'idItem_fk_12')->references('id')->on('items');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
